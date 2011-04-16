<?php

session_start();


$g_aAvailableSortOrders = array(
		"name" => "Name",
		"release_date" => "Date",
		"author" => "Author"
	);

function cutFromFirst($szSubject,$szSearch)
{
	$i = strpos($szSubject,$szSearch);
	if($i === FALSE)
		return $szSubject;
	return substr($szSubject,0,$i);
}

function getLanguage()
{
	// Get the language from browser and from querystring
	$langAuto=substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
	$langGet=trim(strip_tags(htmlentities($_REQUEST['lang'],ENT_QUOTES)));

	if(!$langGet)
		$langGet=$langAuto;
	if(!$langAuto)
		$langAuto="en";

	// Set the language
	$lang=$langAuto;
	if($langAuto!=$langGet) $lang=$langGet;

	$lang = cutFromFirst($lang,".");
	$lang = cutFromFirst($lang,"_");
	$lang = cutFromFirst($lang,"@");

	return $lang;
}

// Compare versions
function checkVersion($version,$min)
{
	$version=explode(".",$version);
	$min=explode(".",$min);

	$i = 0;
	while(($version[$i] != "") && ($min[$i] != ""))
	{
		if($version[$i] < $min[$i])
			return false;
		
		if($version[$i] > $min[$i])
			return true;

		$i++;
	}

	return true; // all equal
}

function print_header_or_footer()
{
	global $g_iCurrentPage;
	global $g_iMaximumPage;
	global $g_szRequestedVersion;
	global $g_szRequestedLanguage;
	global $g_szRequestedSortOrder;
	global $g_szRequestedSortDirection;
	global $g_aAvailableSortOrders;
	
	echo "<table class=\"header_or_footer_controls\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n";
	echo "	<tr>\n";
	echo "	<td width=\"40%\" align=\"left\" valign=\"middle\">\n";
	echo "	</td>\n";
	echo "	<td width=\"20%\" align=\"center\" valign=\"middle\">\n";
	echo "	<div class=\"header_or_footer_links\">\n";
	
	// FIXME: Use Images here!
	if($g_iCurrentPage > 0)
		echo "		<a class=\"page_link\" href=\"?" .
				"version=".$g_szRequestedVersion.
				"&lang=".$g_szRequestedLanguage.
				"&sort=".$g_szRequestedSortOrder.
				"&dir=".$g_szRequestedSortDirection.
				"&page=".($g_iCurrentPage-1)."\">&lt;&lt;&lt;</a>\n";
	
	$iMin = $g_iCurrentPage - 5;
	if($iMin < 0)
		$iMin = 0;
	$iMax = $g_iCurrentPage + 5;
	if($iMax > $g_iMaximumPage)
		$iMax = $g_iMaximumPage;
	
	for($i=$iMin;$i<=$iMax;$i++)
	{
		if($i != $g_iCurrentPage)
			echo "		<a class=\"page_link\" href=\"?" .
					"version=".$g_szRequestedVersion.
					"&lang=".$g_szRequestedLanguage.
					"&sort=".$g_szRequestedSortOrder.
					"&dir=".$g_szRequestedSortDirection.
					"&page=".($i)."\">".($i+1)."</a>\n";
		else
			echo "		<span class=\"current_page\">".($i+1)."</span>\n";
	}
	
	if($g_iCurrentPage < $g_iMaximumPage)
		echo "		<a class=\"page_link\" href=\"?" .
					"version=".$g_szRequestedVersion.
					"&lang=".$g_szRequestedLanguage.
					"&sort=".$g_szRequestedSortOrder.
					"&dir=".$g_szRequestedSortDirection.
					"&page=".($g_iCurrentPage+1)."\">&gt;&gt;&gt;</a>\n";

	echo "	</div>\n";
	echo "	</td>\n";
	echo "	<td width=\"40%\" align=\"right\" valign=\"middle\">\n";
	echo "		<nobr><form class=\"sort_form\" method=\"get\">\n";
	echo "			<input type=\"hidden\" name=\"page\" value=\"0\">\n";
	echo "			<input type=\"hidden\" name=\"lang\" value=\"".$g_szRequestedLanguage."\">\n";
	echo "			<input type=\"hidden\" name=\"version\" value=\"".$g_szRequestedVersion."\">\n";
	echo "			Sort by <select name=\"sort\" onChange=\"this.form.submit();\">\n";
	foreach($g_aAvailableSortOrders as $key => $value)
	{
		if($g_szRequestedSortOrder == $key)
			echo "				<option selected value=\"".$key."\">".$value."</option>\n";
		else
			echo "				<option value=\"".$key."\">".$value."</option>\n";
	}
	echo "			</select>\n";
	echo "			<select name=\"dir\" onChange=\"this.form.submit();\">\n";
		if($g_szRequestedSortDirection == "asc")
		{
			echo "				<option selected value=\"asc\">Ascending</option>\n";
			echo "				<option value=\"desc\">Descending</option>\n";
		} else {
			echo "				<option value=\"asc\">Ascending</option>\n";
			echo "				<option selected value=\"desc\">Descending</option>\n";
		}
	echo "			</select>\n";
	echo "		</form></nobr>\n";
	echo "	</td>\n";
	echo "</tr>\n";
	echo "</table>\n";
}

if(file_exists("../translation/locale_$lang.php"))
	include("./translation/locale_$lang.php");
else
	include("../translation/locale_en.php");

include_once("../conf/themes.php");


$g_szRequestedVersion = $_REQUEST["version"];
if($g_szRequestedVersion == "")
	$g_szRequestedVersion = $_SESSION["version"];
$g_szRequestedLanguage = getLanguage();

$_SESSION["version"] = $g_szRequestedVersion;

$g_iCurrentPage = $_REQUEST["page"];
if(!is_numeric($g_iCurrentPage))
	$g_iCurrentPage = $_SESSION["page"];
if(!is_numeric($g_iCurrentPage))
	$g_iCurrentPage = 0;

$g_szRequestedSortOrder = $_REQUEST["sort"];
if($g_szRequestedSortOrder == "")
	$g_szRequestedSortOrder = $_SESSION["sort"];
if($g_aAvailableSortOrders[$g_szRequestedSortOrder] == "")
	$g_szRequestedSortOrder = "name";

$_SESSION["sort"] = $g_szRequestedSortOrder;

$g_szRequestedSortDirection = $_REQUEST["dir"];
if($g_szRequestedSortDirection == "")
	$g_szRequestedSortDirection = $_SESSION["dir"];
switch($g_szRequestedSortDirection)
{
	case "asc":
	case "desc":
		// ok
	break;
	default:
		$g_szRequestedSortDirection = "asc";
	break;
}

$_SESSION["dir"] = $g_szRequestedSortDirection;

?>
<html>
<head>
	<title>KVIrc Item Listing</title>
	<style type="text/css">
		body {
			font-family: Arial, Verdana;
			font-size: 12pt;
		}
		.item_entry {
			margin: 0px;
		}
		.item_thumb {
			border: solid 1px rgb(180,180,180);
			margin-top: 0px;
			margin-bottom: 0px;
			margin-right: 7px;
			margin-left: 0px;
		}
		.item_separator {
			margin-top: 4px;
			margin-bottom: 4px;
			border-top: solid 1px rgb(180,180,180);
			clear: both;
		}
		.item_identification {
			border: solid 1px rgb(210,210,210);
			background: rgb(230,230,230);
		}
		.item_id {
			display: none;
		}
		.item_name {
			size: 16pt;
			font-weight: bold;
		}
		.item_buttons {
			float: right;
		}
		.item_description {
			font-size: 11pt;
			clear: both;
			margin-top: 2px;
			margin-bottom: 2px;
		}
		.item_version {

		}
		.item_info {
			color: rgb(130,130,130);
			font-size: 10pt;
			position: relative;
			bottom: 0;
		}
		.item_author {
			font-weight: bold;
		}
		.item_release_date {
			font-weight: bold;
		}
		.header {
			border-bottom: 1px solid rgb(130,130,130);
			margin-bottom: 5px;
			margin-top: 5px;
			padding-bottom: 4px;
		}
		.footer {
			border-top: 1px solid rgb(130,130,130);
			margin-top: 5px;
			margin-bottom: 5px;
			padding-top: 4px;
		}
		.header_or_footer_links {
			text-align: center;
			font-size: 14pt;
			text-decoration: none;
		}
		.current_page {
			background-color: rgb(200,200,200);
		}
		.sort_form {
			margin: 0;
		}
	</style>
</head>
<body>
<?php


$szThumbPath = "/img/themes";
$szScreenshotPath = "/img/themes";
$szDownloadPath = "ftp://ftp.kvirc.de/pub/kvirc/themes";
$iMaxItemsPerPage = 10;


$aFilteredItems = array();

$idx = 0;
foreach($themes as $aItem)
{
	if(!checkVersion($g_szRequestedVersion,$aItem["min_kvirc_version"]))
		continue; // invalid version

	$aFilteredItems[$idx] = $aItem;
	$idx++;
}

$iCount = $idx;

function compare_release_date_asc($a, $b)
{
	if($a["release_date"] == $b["release_date"])
		return 0;

	return ($a["release_date"] < $b["release_date"]) ? -1 : 1;
}

function compare_name_asc($a, $b)
{
	return strcasecmp($a["name"],$b["name"]);
}

function compare_author_asc($a, $b)
{
	return strcasecmp($a["author"],$b["author"]);
}

function compare_release_date_desc($a, $b)
{
	if($a["release_date"] == $b["release_date"])
		return 0;

	return ($a["release_date"] > $b["release_date"]) ? -1 : 1;
}

function compare_name_desc($a, $b)
{
	return -strcasecmp($a["name"],$b["name"]);
}

function compare_author_desc($a, $b)
{
	return -strcasecmp($a["author"],$b["author"]);
}

usort($aFilteredItems,"compare_".$g_szRequestedSortOrder."_".$g_szRequestedSortDirection);

$g_iMaximumPage = (int)($iCount / $iMaxItemsPerPage);
if($g_iCurrentPage < 0)
	$g_iCurrentPage = 0;
else if($g_iCurrentPage > $g_iMaximumPage)
	$g_iCurrentPage = $g_iMaximumPage;

$aItemsToList = array_slice($aFilteredItems,$g_iCurrentPage * $iMaxItemsPerPage,$iMaxItemsPerPage,false);

echo "	<div class=\"header\">\n";
print_header_or_footer();
echo "	</div>\n";


$idx = 0;
foreach($aItemsToList as $aItem)
{
	if(!checkVersion($g_szRequestedVersion,$aItem["min_kvirc_version"]))
		continue; // invalid version

	if($idx > 0)
		echo "	<div class=\"item_separator\"></div>\n";

	echo "	<div class=\"item_entry\">\n";
	echo "		<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n";
	echo "			<tr>\n";
	echo "				<td valign=\"top\" width=\"80\" rowspan=\"2\">\n";
	echo "					<div class=\"item_thumb\">\n";
	echo "						<a href=\"".$szScreenshotPath."/".$aItem["screen"]."\"><img src=\"".$szThumbPath."/thumb_".$aItem["screen"]."\" border=\"0\"></a>\n";
	echo "					</div>\n";
	echo "				</td>\n";
	echo "				<td valign=\"top\">\n";
	echo "					<div class=\"item_identification\">\n";
	echo "						<span class=\"item_id\">".$aItem["name"]."</span>\n";
	echo "						<span class=\"item_name\">".$aItem["name"]."</span>\n";
	echo "						<span class=\"item_version\">".$aItem["version"]."</span>\n";
	echo "					</div>\n";
	if($aItem["desc_".$g_szRequestedLanguage] != "")
		echo "					<div class=\"item_description\">".$aItem["desc_".$g_szRequestedLanguage]."</div>\n";
	else
		echo "					<div class=\"item_description\">".$aItem["desc"]."</div>\n";
	echo "				</td>\n";
	echo "				<td valign=\"top\" width=\"60\" rowspan=\"2\">\n";
	echo "					<div class=\"item_buttons\">\n";
	echo "						<a class=\"item_download_link\" href=\"".$szDownloadPath."/".$aItem["download"]."\">Install</a>\n";
	echo "					</div>\n";
	echo "				</td>\n";
	echo "			</tr>\n";
	echo "			<tr>\n";
	echo "				<td valign=\"bottom\">\n";
	echo "					<div class=\"item_info\">\n";
	echo "						Author: <span class=\"item_author\">".$aItem["author"]."</span>";
	//if($aItem["mail"] != "")
	//echo "						 (".$aItem["mail"].")";
	if($aItem["release_date"] != "")
		echo "						- Release&nbsp;Date: <span class=\"item_release_date\">".$aItem["release_date"]."</span>";
	echo "					</div>\n";
	echo "				</td>\n";
	echo "			</tr>\n";
	echo "		</table>\n";
	echo "	</div>\n";
	
	$idx++;
}

echo "	<div class=\"footer\">\n";
print_header_or_footer();
echo "	</div>\n";


?>
</body>
</html>
<?php

?>
