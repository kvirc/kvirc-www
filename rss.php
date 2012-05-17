<?php echo "<?php xml version=\"1.0\" encoding=\"UTF-8\"?>\n";?>
<rss version="2.0">
	<channel>
		<title>KVIrc News</title>
		<link>http://www.kvirc.net</link>
		<description>The K-visual IRC client</description>
		<language>en</language>
	<?
	require("conf/functions.php");
	
	function cleanText($intext) {
		return utf8_encode(htmlspecialchars(stripslashes($intext)));
	}
	
	$latestnews = array();
	news_scan_dir("news/latest",$latestnews);
	$cnt = count($latestnews);
	for($i = 0;$i < $cnt;$i++)
	{
		// Get data
		$x["dummy"] = "";
		news_read_entry($latestnews[$i],$x);

		// Set variables
		$title = substr(cleanText($x["title"]),1);
		$description = substr(cleanText($x["short"]),1);
		$author = substr(cleanText($x["author"]),1);
		$news = basename($latestnews[$i]);
		$guid = "http://www.kvirc.net/?id=news&amp;story=$news&amp;dir=latest&amp;lang=$lang";
		$pubDate = date("r",mktime($x["hour"],$x["minute"],0,$x["month"],$x["day"],$x["year"]));

		// Now output one item
		echo "\t\t<item>\n";
		echo "\t\t\t<title>$title</title>\n\t\t\t<guid>$guid</guid>\n";
		echo "\t\t\t<author>$author</author>\n";
		echo "\t\t\t<description>$description</description>\n\t\t\t<pubDate>$pubDate</pubDate>\n";
		echo "\t\t</item>\n";
	}
	?>
	</channel>
</rss>
