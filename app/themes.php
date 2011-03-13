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

if(file_exists("../translation/locale_$lang.php"))
	include("./translation/locale_$lang.php");
else
	include("../translation/locale_en.php");

include_once("../conf/themes.php");

$rthemes = array_reverse($themes); // newer themes go first

$szVersion = $_REQUEST["version"];
$szLanguage = getLanguage();

?>
<html>
<head>
	<title>KVIrc Theme Listing</title>
	<style type="text/css">
		body {
			font-family: Arial, Verdana;
			font-size: 12pt;
		}
		.item_entry {
			margin: 0px;
		}
		.item_thumb {
			float: left;
			border: solid 1px rgb(180,180,180);
			margin-top: 2px;
			margin-bottom: 4px;
			margin-right: 7px;
			margin-left: 0px;
		}
		.item_separator {
			margin-top: 4px;
			margin-bottom: 4px;
			border-top: solid 1px rgb(180,180,180);
			clear: both;
		}
		.item_data {
			float: left;
		}
		.item_name {
			size: 16pt;
			font-weight: bold;
			float: left;
		}
		.item_buttons {
			float: right;
		}
		.item_description {
			font-size: 11pt;
		}
	</style>
</head>
<body>
<?php

$idx = 0;

$szThumbPath = "/img/themes";
$szDownloadPath = "ftp://ftp.kvirc.de/pub/kvirc/themes";



foreach($rthemes as $aTheme)
{
	if(!checkVersion($szVersion,$aTheme["min_kvirc_version"]))
		continue; // invalid version

	if($idx > 0)
		echo "		<div class=\"item_separator\"></div>\n";

	echo "		<div class=\"item_entry\">\n";
	echo "			<div class=\"item_thumb\">\n";
	echo "				<img src=\"".$szThumbPath."/".$aTheme["thumb"]."\">\n";
	echo "			</div>\n";
	echo "			<div class=\"item_data\">\n";
	echo "				<div class=\"item_name\">".$aTheme["name"]."</div>\n";
	echo "				<div class=\"item_version\">".$aTheme["version"]."</div>\n";
	echo "				<div class=\"item_description\">".$aTheme["desc"]."</div>\n";
	echo "				<div class=\"item_release_date\">".$aTheme["release_date"]."</div>\n";
	echo "				<div class=\"item_author\">".$aTheme["author"]."</div>\n";
	echo "			</div>\n";
	echo "			<div class=\"item_buttons\">\n";
	echo "				<a class=\"item_download_link\" href=\"".$szDownloadPath."/".$aTheme["download"]."\">Install</a>\n";
	echo "			</div>\n";
	echo "		</div>\n";
	
	$idx++;
}

?>
</body>
</html>
<?php

?>
