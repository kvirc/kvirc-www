<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
	<channel>
		<title>KVIrc News</title>
		<link>http://www.kvirc.net</link>
		<description>The K-visual IRC client</description>
		<language>en</language>
		<?php
		require('conf/functions.php');

		function cleanText($intext)
		{
			return utf8_encode(htmlspecialchars(stripslashes($intext)));
		}

		$latestnews = array();
		news_scan_dir('news/latest', $latestnews);
		$cnt = count($latestnews);
		for($i = 0; $i < $cnt; $i++):
			// Get data
			$x['dummy'] = '';
			news_read_entry($latestnews[$i], $x);

			// Set variables
			$title = substr(cleanText($x['title']), 1);
			$description = substr(cleanText($x['short']), 1);
			$author = substr(cleanText($x['author']), 1);
			$news = basename($latestnews[$i]);
			$guid = "http://www.kvirc.net/?id=news&amp;story=$news&amp;dir=latest&amp;lang=$lang";
			$pubDate = date('r', mktime($x['hour'], $x['minute'], 0, $x['month'], $x['day'], $x['year']));
			?>

		<item>
			<title><?php echo $title; ?></title>
			<guid><?php echo $guid; ?></guid>
			<author><?php echo $author; ?></author>
			<description><?php echo $description; ?></description>
			<pubDate><?php echo $pubDate; ?></pubDate>
		</item>
		<?php endfor; ?>
	</channel>
</rss>
