<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

// Some vars
$current="3.2.6";
$availVersions=array("3.2.1","3.2.3","3.2.4","3.2.5",$current);

// WWW mirrors
//array("name" => "name", "url" => "http url", "desc" => "description", "country" => "country location", "city" => "city location", "sponsor" => "who sponsors")
$www_mirror=array(
	1 => array("name" => "www.kvirc.net", "url" => "http://www.kvirc.net", "desc" => "www.kvirc.net: Primary www site in Norway (located in Oslo)", "country" => "Norway", "city" => "Oslo", "sponsor" => "Norwegian Linux Community"),
	array("name" => "www.kvirc.de", "url" => "http://www.kvirc.de", "desc" => "www.kvirc.de: German mirror (located in Bayreuth)", "country" => "Germany", "city" => "Bayreuth", "sponsor" => "Cyconet.org"),
	array("name" => "kvirc.slackware.it", "url" => "http://kvirc.slackware.it", "desc" => "kvirc.slackware.it: Italian mirror (located in Milano)", "country" => "Italy", "city" => "Milano", "sponsor" => "Slackware.it"),
	//array("name" => "www.kvirc.omnikron.net", "url" => "http://www.kvirc.omnikron.net", "desc" => "www.kvirc.omnikron.net: Italian mirror (located in Arezzo)", "country" => "Italy", "city" => "Arezzo", "sponsor" => "Pragma,Iakko and Resio"),
	array("name" => "kvirc.trexle.net", "url" => "http://kvirc.trexle.net", "desc" => "kvirc.trexle.net: USA mirror (located in Texas)", "country" => "USA, Texas", "city" => "", "sponsor" => "Hossam Hossny from Texle.com"),
	array("name" => "kvirc.paracoda.com", "url" => "http://kvirc.paracoda.com", "desc" => "kvirc.paracoda.com: Canadian mirror (located in Quebec)", "country" => "Canada, Quebec", "city" => "", "sponsor" => "Hossam Hossny from Texle.com"),
	//array("name" => "kvirc.ipv6.net.au", "url" => "http://kvirc.ipv6.net.au", "desc" => "kvirc.ipv6.net.au: Australian Mirror (located in Brisbane Queensland, IPv4 and IPv6)", "country" => "Australia, Queensland", "city" => "Brisbane", "sponsor" => "Peter Good, IPv6 Australia"),
	//array("name" => "kvirc.firenze.linux.it", "url" => "http://kvirc.firenze.linux.it", "desc" => "kvirc.firenze.linux.it: Italian mirror (located in Milano)", "country" => "Italy", "city" => "Milano", "sponsor" => "Firenze Linux Users Group"),
	array("name" => "www.ipv6.kvirc.net", "url" => "http://www.ipv6.kvirc.net", "desc" => "www.ipv6.kvirc.net: German IPV6 Mirror (located in Bayreouth)", "country" => "Germany", "city" => "Bayreuth", "sponsor" => "Cyconet.org")
);

// FTP mirrors
//array("name" => "name", "url" => "ftp url", "desc" => "description")
$ftp_mirror=array(
	1 => array("name" => "ftp.kvirc.net", "url" => "ftp://ftp.kvirc.net/pub/kvirc", "desc" => "ftp.kvirc.net: Primary FTP, Oslo, Norway (bandwidth by Norwegian Linux Community)"),
	array("name" => "ftp.kvirc.de", "url" => "ftp://ftp.kvirc.de/pub/kvirc", "desc" => "ftp.kvirc.de: Bayreuth, Germany (bandwidth by cyconet.org)"),
	array("name" => "kvirc.tradebit.com", "url" => "http://kvirc.tradebit.com/pub", "desc" => "kvirc.tradebit.com: New York, USA (bandwidth by tradebit.com)"),
	array("name" => "kvirc.imsam.info", "url" => "http://kvirc.imsam.info", "desc" => "kvirc.imsam.info: Nuernberg, Germany (bandwidth by tradebit.com)"),
	array("name" => "kvirc.bcoos.net", "url" => "http://kvirc.bcoos.net", "desc" => "kvirc.bcoos.net: USA (bandwidth by exoops.info)")
);

// Addons
//aray("name" => "name", "ver" => "addon version", "min" => "min KVIrc version", "max" => "max KVIrc version", "author" => "author", "desc" => "description", "url" => "url")
$addons=array(
	1 => array("name" => "Auto Away: Automatic Away", "ver" => "1.0.0", "min" => "3.2.1", "max" => $current, "author" => "Szymon Stefanek", "desc" => $template['addons']['addon1'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/autoaway.1.0.0.zip"),
	array("name" => "Chan Ops: Channel Operations", "ver" => "1.0.0", "min" => "3.2.1", "max" => $current, "author" => "Szymon Stefanek", "desc" => $template['addons']['addon2'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/chanops.1.0.0.zip"),
	array("name" => "Chan Stats: Channel Statistics", "ver" => "1.1.1", "min" => "3.2.1", "max" => $current, "author" => "g00dsP33D", "desc" => $template['addons']['addon3'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/chanstats.1.1.1.zip"),
	array("name" => "Hell Country", "ver" => "0.1", "min" => "3.2.1", "max" => $current, "author" => "HelLViS69", "desc" => $template['addons']['addon4'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/country.0.1.zip"),
	array("name" => "Cryption", "ver" => "1.0.2", "min" => "3.2.1", "max" => $current, "author" => "g00dsP33D", "desc" => $template['addons']['addon5'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/cryption.1.0.2.zip"),
	array("name" => "Ezbounce", "ver" => "1.0.0", "min" => "3.2.1", "max" => $current, "author" => "Szymon Stefanek", "desc" => $template['addons']['addon6'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/ezbounce.1.0.0.zip"),
	array("name" => "F4: Forza 4 game", "ver" => "0.9", "min" => "3.2.1", "max" => $current, "author" => "Grifisx &amp; Noldor", "desc" => $template['addons']['addon7'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/forza4.0.9.zip"),
	array("name" => "Fserve: An F-Server", "ver" => "1.0.0", "min" => "3.2.1", "max" => $current, "author" => "assassin", "desc" => $template['addons']['addon8'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/fserve.1.0.0.zip"),
	array("name" => "Funny Lol And Write", "ver" => "0.1", "min" => "3.2.1", "max" => $current, "author" => "Grifisx &amp; HelLViS69", "desc" => $template['addons']['addon9'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/funnylolandwrite.0.1.zip"),
	array("name" => "Hell Mediaplayer", "ver" => "0.1", "min" => "3.2.1", "max" => $current, "author" => "HelLViS69", "desc" => $template['addons']['addon10'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/mediaplayer.0.1.zip"),
	array("name" => "Mines Weeper", "ver" => "1.1.0", "min" => "3.2.1", "max" => $current, "author" => "Szymon Stefanek", "desc" => $template['addons']['addon11'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/mediaplayer.0.1.zip"),
	array("name" => "News Ticker: The RSS News Reader", "ver" => "1.1.0", "min" => "3.2.1", "max" => $current, "author" => "Szymon Stefanek", "desc" => $template['addons']['addon12'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/newsticker-1.1.0.zip"),
	array("name" => "Now Playing: The Media Advertiser", "ver" => "1.0.0", "min" => "3.2.1", "max" => $current, "author" => "Szymon Stefanek", "desc" => $template['addons']['addon13'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/nowplaying.1.0.0.zip"),
	array("name" => "Question Manager", "ver" => "0.1", "min" => "3.2.1", "max" => $current, "author" => "Grifisx &amp; Noldor", "desc" => $template['addons']['addon14'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/questionManager.0.1.zip"),
	array("name" => "Quiz", "ver" => "1.0.0", "min" => "3.2.1", "max" => $current, "author" => "Szymon Stefanek and HelLViS69", "desc" => $template['addons']['addon15'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/quiz.1.0.0.zip"),
	array("name" => "SMS: SMS sender", "ver" => "1.9.9", "min" => "3.2.1", "max" => $current, "author" => "Grifisx &amp; Noldor", "desc" => $template['addons']['addon16'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/sms.1.9.9.zip"),
	array("name" => "The Censor", "ver" => "1.0.0", "min" => "3.2.1", "max" => $current, "author" => "Grifisx", "desc" => $template['addons']['addon17'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/thecensor.1.0.0.zip"),
	array("name" => "Twins Auto Op: auto op/voice/ban", "ver" => "1.1", "min" => "3.2.3", "max" => $current, "author" => "Ahinu", "desc" => $template['addons']['addon18'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/twinsautoop-1.1.zip"),
	array("name" => "Twins Input Color: Colorize your input text", "ver" => "1.2", "min" => "3.2.4", "max" => $current, "author" => "Ahinu", "desc" => $template['addons']['addon19'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/twinsinputcolor-1.2.zip"),
	array("name" => "Twins Lag bar: A graphical lag bar", "ver" => "1.0", "min" => "3.2.4", "max" => $current, "author" => "Ahinu", "desc" => $template['addons']['addon20'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/twinslagbar-1.0.zip"),
	array("name" => "Twins Media Player: Control your player and share you music", "ver" => "1.4", "min" => "3.2.4", "max" => $current, "author" => "Ahinu", "desc" => $template['addons']['addon21'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/twinsmediaplayer-1.4.zip"),
	array("name" => "Host Check", "ver" => "1.0", "min" => "3.2.6", "max" => $current, "author" => "", "desc" => $template['addons']['addon22'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/hostcheck.tar.gz"),
	array("name" => "KISS: The KVIrc Icons Style Setup", "ver" => "2.0", "min" => "3.2.6", "max" => $current, "author" => "HelLViS69", "desc" => $template['addons']['addon23'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/KISS-2.0.tar.bz2")
);

// Screenshots
// array("img" => "image", "thumb" => "thumbnail", "desc" => "description")
$screen=array(
	1 => array(
		0 => "KVIrc 2.0.0 \"Phoenix\"",
		array("img" => "img/phoenix_shot1.jpg", "thumb" => "img/phoenix_smallshot1.jpg", "desc" => $template['screen']['screen1']),
		array("img" => "img/phoenix_shot2.jpg", "thumb" => "img/phoenix_smallshot2.jpg", "desc" => $template['screen']['screen2']),
		array("img" => "img/phoenix_shot3.jpg", "thumb" => "img/phoenix_smallshot3.jpg", "desc" => $template['screen']['screen3']),
		array("img" => "img/phoenix_shot4.jpg", "thumb" => "img/phoenix_smallshot4.jpg", "desc" => $template['screen']['screen4']),
		array("img" => "img/phoenix_shot5.jpg", "thumb" => "img/phoenix_smallshot5.jpg", "desc" => $template['screen']['screen5']),
		array("img" => "img/phoenix_shot6.jpg", "thumb" => "img/phoenix_smallshot6.jpg", "desc" => $template['screen']['screen6']),
		array("img" => "img/phoenix_shot7.jpg", "thumb" => "img/phoenix_smallshot7.jpg", "desc" => $template['screen']['screen7']),
		array("img" => "img/phoenix_shot8.jpg", "thumb" => "img/phoenix_smallshot8.jpg", "desc" => $template['screen']['screen8'])
	),
	array(
		0 => "KVIrc 3.0.0 CVS \"Avatar\"",
		array("img" => "img/snapshot8.jpg", "thumb" => "img/snapshot8_small.jpg", "desc" => $template['screen']['screen9']),
		array("img" => "img/snapshot1.jpg", "thumb" => "img/snapshot1_small.jpg", "desc" => $template['screen']['screen10']),
		array("img" => "img/snapshot2.jpg", "thumb" => "img/snapshot2_small.jpg", "desc" => $template['screen']['screen11']),
		array("img" => "img/snapshot3.jpg", "thumb" => "img/snapshot3_small.jpg", "desc" => $template['screen']['screen12']),
		array("img" => "img/snapshot4.jpg", "thumb" => "img/snapshot4_small.jpg", "desc" => $template['screen']['screen13']),
		array("img" => "img/snapshot5.jpg", "thumb" => "img/snapshot5_small.jpg", "desc" => $template['screen']['screen14']),
		array("img" => "img/snapshot6.jpg", "thumb" => "img/snapshot6_small.jpg", "desc" => $template['screen']['screen15'])
	),
	array(
		0 => "KVIrc 3.0.0 \"Awakening\" ~ 3.0.0 CVS \"Avatar\"",
		array("img" => "img/awake_fancy.jpg", "thumb" => "img/awake_fancy_small.jpg", "desc" => $template['screen']['screen16']),
		array("img" => "img/awake_minimalist.jpg", "thumb" => "img/awake_minimalist_small.jpg", "desc" => $template['screen']['screen17']),
		array("img" => "img/awake_spec_windows.jpg", "thumb" => "img/awake_spec_windows_small.jpg", "desc" => $template['screen']['screen18']),
		array("img" => "img/awake_scripter.jpg", "thumb" => "img/awake_scripter_small.jpg", "desc" => $template['screen']['screen19']),
		array("img" => "img/trex_shot1.jpg", "thumb" => "img/trex_shot1_small.jpg", "desc" => $template['screen']['screen20']),
		array("img" => "img/trex_shot2.jpg", "thumb" => "img/trex_shot2_small.jpg", "desc" => $template['screen']['screen21']),
		array("img" => "img/trex_shot3.jpg", "thumb" => "img/trex_shot3_small.jpg", "desc" => $template['screen']['screen22']),
		array("img" => "img/trex_shot4.jpg", "thumb" => "img/trex_shot4_small.jpg", "desc" => $template['screen']['screen23'])
	),
	array(
		0 => "KVIrc 3.2.0 \"Realia\" ~ 3.2.3 CVS \"Anomalies\"",
		array("img" => "img/snapshot9.jpg", "thumb" => "img/snapshot9_small.jpg", "desc" => $template['screen']['screen24']),
		array("img" => "img/realia_shot_bizzia.png", "thumb" => "img/realia_smallshot_bizzia.png", "desc" => $template['screen']['screen25']),
		array("img" => "img/snapshot10.png", "thumb" => "img/snapshot10_small.png", "desc" => $template['screen']['screen26']),
		array("img" => "img/snapshot13.png", "thumb" => "img/snapshot13_small.png", "desc" => $template['screen']['screen27']),
		array("img" => "img/snapshot11.png", "thumb" => "img/snapshot11_small.png", "desc" => $template['screen']['screen28']),
		array("img" => "img/snapshot14.png", "thumb" => "img/snapshot14_small.png", "desc" => $template['screen']['screen29'])
	),
	array(
		0 => "KVIrc 3.2.6 \"Anomalies\"",
		array("img" => "img/snapshot15.png", "thumb" => "img/snapshot15_small.png", "desc" => $template['screen']['screen30']),
		array("img" => "img/snapshot16.png", "thumb" => "img/snapshot16_small.png", "desc" => $template['screen']['screen31']),
		array("img" => "img/snapshot17.png", "thumb" => "img/snapshot17_small.png", "desc" => $template['screen']['screen32']),
		array("img" => "img/snapshot18.png", "thumb" => "img/snapshot18_small.png", "desc" => $template['screen']['screen33']),
		array("img" => "img/snapshot19.png", "thumb" => "img/snapshot19_small.png", "desc" => $template['screen']['screen34'])
	)
);

// Scripts
// array("script" => "script name", "author" => "author name", "mail" => "author mail", "desc" => "description", "home" => "script homepage")
$scripts=array(
	1 => array("script" => "Princoscript", "author" => "Francesco Meloni", "mail" => "francesco.melo@tiscali.REMOVE.THE.ANTISPAM.WORDS.it", "desc" => $template['scripts']['script1'], "home" => "http://web.tiscali.it/princoscript/"),
	array("script" => "SaNVirC", "author" => "Wunslov", "mail" => "", "desc" => $template['scripts']['script2'], "home" => "http://sanvirc.sourceforge.net/"),
	array("script" => "Savage", "author" => "???", "mail" => "", "desc" => $template['scripts']['script3'].":<br /><code>cvs -z4 -d:pserver:anonymous@cvs.omnikron.net:/cvs co savage</code>", "home" => "http://www.cynapses.org/tmp/kvirc-script-0.7.tar.gz"),
	//array("script" => "dwnKVIrc", "author" => "Klaus Weidenbach", "mail" => "Klaus.Weidenbach@gmx.REMOVE.THE.ANTISPAM.WORDS.net", "desc" => $template['scripts']['script4'], "home" => "http://dszdw.homelinux.org/~klaus/programs/kvirc/index.php")
);

// Splash screens
// array("name" => "name", "screen" => "screenshot", "alt" => "version number", "motd" => "motd", "date" => "date", "present" => "present")
$splash=array(
	1 => array("name" => "0.9.0", "screen" => "splash-0.9.0.png", "alt" => "0.9.0", "motd" => "", "date" => "25.01.1999", "present" => "0.6.0, 0.8.0, 0.9.0"),
	array("name" => "1.0.0 beta", "screen" => "splash-1.0.0-beta.png", "alt" => "1.0.0 beta", "motd" => "The Net in your hands", "date" => "", "present" => ""),
	array("name" => "1.0.0 \"Millennium\"", "screen" => "splash-1.0.0.png", "alt" => "1.0.0", "motd" => "", "date" => "21.12.1999", "present" => ""),
	array("name" => "2.0.0 \"Phoenix\"", "screen" => "splash-2.0.0.png", "alt" => "2.0.0", "motd" => "The client that can't make coffee", "date" => "30.05.2000", "present" => ""),
	array("name" => "2.1.0 \"Dark Star\"", "screen" => "splash-2.1.0.png", "alt" => "2.1.0", "motd" => "The client that can't make coffee", "date" => "30.01.2001", "present" => ""),
	array("name" => "2.1.1 \"Monolith\"", "screen" => "splash-2.1.1.png", "alt" => "2.1.1", "motd" => "A breath of fresh net", "date" => "01.05.2001", "present" => ""),
	array("name" => "3.0.0 beta \"Avatar\"", "screen" => "splash-3.0.0-beta.png", "alt" => "3.0.0 beta", "motd" => "No boundaries on the net", "date" => "24.12.2001", "present" => "alpha, xmas, beta 1, beta2"),
	array("name" => "3.0.0 CVS \"Avatar\"", "screen" => "splash-3.0.0-cvs.png", "alt" => "3.0.0 CVS", "motd" => "You run, never stop, got to win, got to run 'till you drop", "date" => "", "present" => ""),
	array("name" => "3.0.0 \"Awakening\"", "screen" => "splash-3.0.0.png", "alt" => "3.0.0", "motd" => "No boundaries on the net", "date" => "17.04.2004", "present" => ""),
	array("name" => "3.0.1 \"System Virtue\"", "screen" => "splash-3.0.1.png", "alt" => "3.0.1", "motd" => "Ooh, look, a shiny object...", "date" => "31.04.2004", "present" => ""),
	array("name" => "3.0.2 CVS \"Realia\"", "screen" => "splash-3.0.2-cvs.png", "alt" => "3.0.2", "motd" => "Ooh, look, a shiny object...", "date" => "06.12.2004", "present" => ""),
	array("name" => "3.2.0 \"Realia\"", "screen" => "splash-3.2.0.png", "alt" => "3.2.0", "motd" => "So Long,  And Thanks for All the Fish", "date" => "26.02.2005", "present" => ""),
	array("name" => "3.2.0.99 CVS \"Marmalade\" (1)", "screen" => "splash-3.2.0.99.1.png", "alt" => "3.2.0.99", "motd" => "Hello, Hey Joe! You Wanna Give It a Go ?", "date" => "01.05.2005", "present" => ""),
	array("name" => "3.2.0.99 CVS \"Marmalade\" (2)", "screen" => "splash-3.2.0.99.2.png", "alt" => "3.2.0.99", "motd" => "Hello, Hey Joe! You Wanna Give It a Go ?", "date" => "01.08.2005", "present" => ""),
	array("name" => "3.2.4 CVS \"Anomalies\"", "screen" => "splash-3.2.0.20051230.png", "alt" => "3.2.4", "motd" => "Time makes no sense", "date" => "06.08.2006", "present" => "3.2.0.20051230, 3.2.1, 3.2.2, 3.2.3, 3.2.4"),
	array("name" => "3.2.6 CVS \"Anomalies\"", "screen" => "splash-3.2.5-cvs.png", "alt" => "3.2.5", "motd" => "Time makes no sense", "date" => "12.09.2006", "present" => "3.2.4, 3.2.5, 3.2.6")
);

// Tools
//aray("name" => "tool name", "author" => "author name", "mail" => "author mail", "desc" => "description", "url" => "url")
$tools=array(
	1 => array("name" => "Notepad++ KVS-Syntax", "author" => "TheXception", "mail" => "thex.email@googlemail.REMOVE.THE.ANTISPAM.WORDS.com", "desc" => $template['tools']['tool1'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/tools/kvs-notepad++.zip")
);
?>