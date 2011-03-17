<?php

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
	// FIXME: Use Images here!
	if($g_iCurrentPage > 0)
		echo "		<a class=\"page_link\" href=\"?version=".$szVersion."&lang=".$szLanguage."&sort=".$szSortOrder."&page=".($g_iCurrentPage-1)."\">&lt;&lt;&lt;</a>\n";
	
	$iMin = $g_iCurrentPage - 5;
	if($iMin < 0)
		$iMin = 0;
	$iMax = $g_iCurrentPage + 5;
	if($iMax > $g_iMaximumPage)
		$iMax = $g_iMaximumPage;
	
	for($i=$iMin;$i<=$iMax;$i++)
	{
		if($i != $g_iCurrentPage)
			echo "		<a class=\"page_link\" href=\"?version=".$szVersion."&lang=".$szLanguage."&sort=".$szSortOrder."&page=".($i)."\">".($i+1)."</a>\n";
		else
			echo "		<span class=\"current_page\">".($i+1)."</span>\n";
	}
	
	if($g_iCurrentPage < $g_iMaximumPage)
		echo "		<a class=\"page_link\" href=\"?version=".$szVersion."&lang=".$szLanguage."&sort=".$szSortOrder."&page=".($g_iCurrentPage+1)."\">&gt;&gt;&gt;</a>\n";
	
}

if(file_exists("../translation/locale_$lang.php"))
	include("./translation/locale_$lang.php");
else
	include("../translation/locale_en.php");

include_once("../conf/themes.php");


$szVersion = $_REQUEST["version"];
if($szVersion == "")
	$szVersion = $_SESSION["version"];
$szLanguage = getLanguage();

$_SESSION["version"] = $szVersion;

$g_iCurrentPage = $_REQUEST["page"];
if(!is_numeric($g_iCurrentPage))
	$g_iCurrentPage = $_SESSION["page"];
if(!is_numeric($g_iCurrentPage))
	$g_iCurrentPage = 0;

$szSortOrder = $_REQUEST["sort"];
if($szSortOrder == "")
	$szSortOrder = $_SESSION["sort"];
switch($szSortOrder)
{
	case "release_date":
	case "name":
		// ok
	break;
	default:
		$szSortOrder = "name";
	break;
}


$_SESSION["sort"] = $szSortOrder;

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
		.item_id {
			border: solid 1px rgb(210,210,210);
			background: rgb(230,230,230);
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
			margin-bottom: 10px;
			text-align: center;
			font-size: 14pt;
			margin-top: 10px;
			padding-bottom: 4px;
		}
		.header a {
			text-decoration: none;
		}
		.footer {
			border-top: 1px solid rgb(130,130,130);
			margin-top: 10px;
			text-align: center;
			font-size: 14pt;
			margin-bottom: 10px;
			padding-top: 4px;
		}
		.footer a {
			text-decoration: none;
		}
		.current_page {
			background-color: rgb(200,200,200);
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
	if(!checkVersion($szVersion,$aItem["min_kvirc_version"]))
		continue; // invalid version

	$aFilteredItems[$idx] = $aItem;
	$idx++;
}

$iCount = $idx;

function compare_release_date($a, $b)
{
	if($a["release_date"] == $b["release_date"])
		return 0;

	return ($a["release_date"] < $b["release_date"]) ? -1 : 1;
}

function compare_name($a, $b)
{
	if($a["name"] == $b["name"])
		return 0;

	return ($a["name"] < $b["name"]) ? -1 : 1;
}

usort($aFilteredItems,"compare_".$szSortOrder);

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
	if(!checkVersion($szVersion,$aItem["min_kvirc_version"]))
		continue; // invalid version

	if($idx > 0)
		echo "	<div class=\"item_separator\"></div>\n";

	echo "	<div class=\"item_entry\">\n";
	echo "		<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n";
	echo "			<tr>\n";
	echo "				<td valign=\"top\" width=\"80\" rowspan=\"2\">\n";
	echo "					<div class=\"item_thumb\">\n";
	echo "						<a href=\"".$szScreenshotPath."/".$aItem["screen"]."\"><img src=\"".$szThumbPath."/".$aItem["thumb"]."\" border=\"0\"></a>\n";
	echo "					</div>\n";
	echo "				</td>\n";
	echo "				<td valign=\"top\">\n";
	echo "					<div class=\"item_id\">\n";
	echo "						<span class=\"item_name\">".$aItem["name"]."</span>\n";
	echo "						<span class=\"item_version\">".$aItem["version"]."</span>\n";
	echo "					</div>\n";
	if($aItem["desc_".$szLanguage] != "")
		echo "					<div class=\"item_description\">".$aItem["desc_".$szLanguage]."</div>\n";
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
