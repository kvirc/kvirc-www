<?php

include_once("conf/themes.php");

$rthemes = array_reverse($themes); // newer themes go first

$szVersion = $_REQUEST["version"];
$szLanguage = $_REQUEST["language"];

echo "<html>\n";
echo "	<head>\n";
echo "		<title>KVIrc Theme Listing</title>\n";
echo "	</head>\n";
echo "	<body>\n";

$idx = 0;

foreach($rthemes as $aTheme)
{
	if($idx > 0)
		echo "		<div class=\"theme_separator\" id=\"theme_separator\"></div>\n";

	echo "		<div class=\"theme_entry\" id=\"theme_entry\">\n";
	echo "			<div class=\"theme_thumb\" id=\"theme_thumb\">\n";
	echo "				<img src=\"img/themes/".$aTheme["thumb"]."\">\n";
	echo "			</div>\n";
	echo "			<div class=\"theme_data\" id=\"theme_data\">\n";
	echo "				<div class=\"theme_name\" id=\"theme_name\">".$aTheme["name"]."</div>\n";
	echo "				<div class=\"theme_version\" id=\"theme_version\">".$aTheme["version"]."</div>\n";
	echo "				<div class=\"theme_author\" id=\"theme_author\">".$aTheme["author"]."</div>\n";
	echo "			</div>\n";
	echo "			<div class=\"theme_buttons\" id=\"theme_buttons\">\n";
	echo "			</div>\n";
	echo "		</div>\n";
	
	$idx++;
}

echo "	</body>\n";
echo "</html>\n";

?>
