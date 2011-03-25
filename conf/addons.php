<?php

// Addons


// Addons
$addons = array(
	array(
		"id" => "newsticker", // the id of the addon as it appears inside kvirc!
		"name" => "Newsticker", // the user visible name of the addon
		"version" => "2.0.0", // the version of the addon
		"mail" => "pragma [at] kvirc [dot] net",
		"author" => "Szymon Tomasz Stefanek",
		"desc" => "Simple RSS Feed Reader",
		"desc_it" => "Semplice Lettore per Feed RSS",
		"home" => "",
		"download" => "newsticker-2.0.0.kva",
		"screen" => "",
		"icon" => "newsticker-2.0.0/newsticker_32.png",
		"release_date" => "2011.03.25",
		"min_version" => "4.1.1"
	)
	/*
	These addons must be converted in .kva package
	1 => array("name" => "Auto Away: Automatic Away", "ver" => "1.0.0", "min" => "3.2.1", "max" => $current, "author" => "Szymon Stefanek", "desc" => $template['addons']['addon1'], "url" => "autoaway.1.0.0.zip"),
	array("name" => "Chan Ops: Channel Operations", "ver" => "1.0.0", "min" => "3.2.1", "max" => $current, "author" => "Szymon Stefanek", "desc" => $template['addons']['addon2'], "url" => "chanops.1.0.0.zip"),
	array("name" => "Chan Stats: Channel Statistics", "ver" => "1.1.1", "min" => "3.2.1", "max" => $current, "author" => "g00dsP33D", "desc" => $template['addons']['addon3'], "url" => "chanstats.1.1.1.zip"),
	array("name" => "Hell Country", "ver" => "0.1", "min" => "3.2.1", "max" => $current, "author" => "HelLViS69", "desc" => $template['addons']['addon4'], "url" => "country.0.1.zip"),
	array("name" => "Cryption", "ver" => "1.0.2", "min" => "3.2.1", "max" => $current, "author" => "g00dsP33D", "desc" => $template['addons']['addon5'], "url" => "cryption.1.0.2.zip"),
	array("name" => "Ezbounce", "ver" => "1.0.0", "min" => "3.2.1", "max" => $current, "author" => "Szymon Stefanek", "desc" => $template['addons']['addon6'], "url" => "ezbounce.1.0.0.zip"),
	array("name" => "F4: Forza 4 game", "ver" => "0.9", "min" => "3.2.1", "max" => $current, "author" => "Grifisx &amp; Noldor", "desc" => $template['addons']['addon7'], "url" => "forza4.0.9.zip"),
	array("name" => "Fserve: An F-Server", "ver" => "1.0.0", "min" => "3.2.1", "max" => $current, "author" => "assassin", "desc" => $template['addons']['addon8'], "url" => "fserve.1.0.0.zip"),
	array("name" => "Funny Lol And Write", "ver" => "0.1", "min" => "3.2.1", "max" => $current, "author" => "Grifisx &amp; HelLViS69", "desc" => $template['addons']['addon9'], "url" => "funnylolandwrite.0.1.zip"),
	array("name" => "Hell Mediaplayer", "ver" => "0.1", "min" => "3.2.1", "max" => $current, "author" => "HelLViS69", "desc" => $template['addons']['addon10'], "url" => "mediaplayer.0.1.zip"),
	array("name" => "Mines Weeper", "ver" => "1.1.0", "min" => "3.2.1", "max" => $current, "author" => "Szymon Stefanek", "desc" => $template['addons']['addon11'], "url" => "minesweeper-1.1.0.zip"),
	array("name" => "News Ticker: The RSS News Reader", "ver" => "1.1.0", "min" => "3.2.1", "max" => $current, "author" => "Szymon Stefanek", "desc" => $template['addons']['addon12'], "url" => "newsticker-1.1.0.zip"),
	array("name" => "Now Playing: The Media Advertiser", "ver" => "1.0.0", "min" => "3.2.1", "max" => $current, "author" => "Szymon Stefanek", "desc" => $template['addons']['addon13'], "url" => "nowplaying.1.0.0.zip"),
	array("name" => "Question Manager", "ver" => "0.1", "min" => "3.2.1", "max" => $current, "author" => "Grifisx &amp; Noldor", "desc" => $template['addons']['addon14'], "url" => "questionManager.0.1.zip"),
	array("name" => "Quiz", "ver" => "1.0.0", "min" => "3.2.1", "max" => $current, "author" => "Szymon Stefanek and HelLViS69", "desc" => $template['addons']['addon15'], "url" => "quiz.1.0.0.zip"),
	array("name" => "SMS: SMS sender", "ver" => "1.9.9", "min" => "3.2.1", "max" => $current, "author" => "Grifisx &amp; Noldor", "desc" => $template['addons']['addon16'], "url" => "sms.1.9.9.zip"),
	array("name" => "The Censor", "ver" => "1.0.0", "min" => "3.2.1", "max" => $current, "author" => "Grifisx", "desc" => $template['addons']['addon17'], "url" => "thecensor.1.0.0.zip"),
	array("name" => "Twins Auto Op: auto op/voice/ban", "ver" => "1.1", "min" => "3.2.3", "max" => $current, "author" => "Ahinu", "desc" => $template['addons']['addon18'], "url" => "twinsautoop-1.1.zip"),
	array("name" => "Twins Input Color: Colorize your input text", "ver" => "1.2", "min" => "3.2.4", "max" => $current, "author" => "Ahinu", "desc" => $template['addons']['addon19'], "url" => "twinsinputcolor-1.2.zip"),
	array("name" => "Twins Lag bar: A graphical lag bar", "ver" => "1.0", "min" => "3.2.4", "max" => $current, "author" => "Ahinu", "desc" => $template['addons']['addon20'], "url" => "twinslagbar-1.0.zip"),
	array("name" => "Twins Media Player: Control your player and share you music", "ver" => "1.4", "min" => "3.2.4", "max" => $current, "author" => "Ahinu", "desc" => $template['addons']['addon21'], "url" => "twinsmediaplayer-1.4.zip"),
	array("name" => "Host Check", "ver" => "1.0", "min" => "3.2.6", "max" => $current, "author" => "", "desc" => $template['addons']['addon22'], "url" => "hostcheck.tar.gz"),
	array("name" => "KISS: The KVIrc Icons Style Setup", "ver" => "2.1", "min" => "3.2.6", "max" => $current, "author" => "HelLViS69", "desc" => $template['addons']['addon23'], "url" => "KISS-2.1.tar.bz2")
	*/
);

?>
