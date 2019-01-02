<?php
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

// Some vars
$current = "4.2.0";
$codename = "Equilibrium";
$availVersions = array("4.0.4",$current);
$dpath = "ftp://ftp.kvirc.de/pub/kvirc/";

// Include language templates
if(!file_exists("./translation/locale_$lang.php"))
	include("./translation/locale_en.php");
else include("./translation/locale_$lang.php");

// Get environment
if((strlen(getenv("SERVER_SOFTWARE")))!="0"){
	$server=getenv("SERVER_SOFTWARE");
} else {
	$server=$_SERVER['SERVER_SOFTWARE'];
}

if((strlen(getenv("SERVER_NAME")))!="0"){
	$servername=getenv("SERVER_NAME");
} else {
	$servername=$_SERVER['SERVER_NAME'];
}

// Get IPv6 environment
if((strlen(getenv("REMOTE_ADDR")))!="0"){
	$ip6=getenv("REMOTE_ADDR");
} else {
	$ip6=$_SERVER['REMOTE_ADDR'];
}

if(preg_match("/^::ffff:/",$ip6,$blah)){
 	$ip6 =substr($ip6,7);
}

if(preg_match("/:/",$ip6,$blah)){
	$ip6_mode=1;
} else {
	$ip6_mode=0;
}

// WWW and FTP mirrors
//array("name" => "name", "url" => "http url", "desc" => "description", "city" => "city location", "maintainer" => "who maintains")
$www_mirror=array(
	1 => array("name" => "www.kvirc.net", "url" => "http://www.kvirc.net", "desc" => "Primary WWW site", "city" => "Oslo, Norway", "maintainer" => "Norwegian Linux Community"),
	array("name" => "www.kvirc.de", "url" => "http://www.kvirc.de", "desc" => "German mirror", "city" => "Bayreuth, Germany", "maintainer" => "cyconet.org"),
);

$ftp_mirror=array(
	1 => array("name" => "ftp.kvirc.de", "url" => "ftp://ftp.kvirc.de/pub/kvirc", "desc" => "German mirror", "city" => "Bayreuth, Germany", "maintainer" => "cyconet.org"),
	array("name" => "kvirc.gmake.de", "url" => "http://kvirc.gmake.de/pub/kvirc", "desc" => "German mirror", "city" => "Jena, Germany", "maintainer" => "Dessa"),
	array("name" => "mirror.ibcp.fr", "url" => "http://mirror.ibcp.fr/pub/kvirc/", "desc" => "French mirror (ftp)", "city" => "Lyon, France", "maintainer" => "Alexis Michon"),
	array("name" => "standaloneinstaller.com", "url" => "http://mirrors.standaloneinstaller.com/kvirc/", "desc" => "French mirror (http)", "city" => "France", "maintainer" => "Sam Cohen-Brown"),
);

// Archive
// array("link" => "link name", "long" => "long name")
$months=array(
	1 => array("link" => $template['archive']['jan'], "long" => "January"),
	array("link" => $template['archive']['feb'], "long" => "February"),
	array("link" => $template['archive']['mar'], "long" => "March"),
	array("link" => $template['archive']['apr'], "long" => "April"),
	array("link" => $template['archive']['may'], "long" => "May"),
	array("link" => $template['archive']['jun'], "long" => "June"),
	array("link" => $template['archive']['jul'], "long" => "July"),
	array("link" => $template['archive']['aug'], "long" => "August"),
	array("link" => $template['archive']['sep'], "long" => "September"),
	array("link" => $template['archive']['oct'], "long" => "October"),
	array("link" => $template['archive']['nov'], "long" => "November"),
	array("link" => $template['archive']['dec'], "long" => "December")
);

// Arts
// array("title" => "title", "author" => "author", "mail" => "email", "desc" => "description", "thumb" => "thumbnail", "down" => "download", "date" => "date")
$arts=array(
	1 => array("title" => "\"Connect to the World\" Splash Screens", "author" => "SuSp|r|a", "mail" => "suspy [at] email [dot] it", "desc" => $template['arts']['desc1'], "thumb" => "connect_to_the_world_thumb.jpg", "down" => "connect_to_the_world.zip", "date" => "18.05.2005"),
	array("title" => "Suspiria's Marmalade", "author" => "SuSp|r|a", "mail" => "suspy [at] email [dot] it", "desc" => $template['arts']['desc2'], "thumb" => "suspirias_marmalade_thumb.jpg", "down" => "suspirias_marmalade.jpg", "date" => "18.05.2005"),
	array("title" => "Upside Down", "author" => "SuSp|r|a", "mail" => "suspy [at] email [dot] it", "desc" => $template['arts']['desc3'], "thumb" => "upsidedown_thumb.jpg", "down" => "upsidedown.jpg", "date" => "18.05.2005"),
	array("title" => "Avatar Background", "author" => "SuSp|r|a", "mail" => "suspy [at] email [dot] it", "desc" => $template['arts']['desc4'], "thumb" => "avatar_back_thumb.jpg", "down" => "avatar_back.jpg", "date" => "18.05.2005"),
	array("title" => "Oh.. So Lovely!", "author" => "SuSp|r|a", "mail" => "suspy [at] email [dot] it", "desc" => ":)", "thumb" => "ohsolovely_thumb.jpg", "down" => "ohsolovely.jpg", "date" => "18.05.2005"),
	array("title" => "BSD Magik", "author" => "Lady_dark_demoN", "mail" => "", "desc" => $template['arts']['desc6'], "thumb" => "karries_splash_thumb.jpg", "down" => "karrie_splash.jpg", "date" => "17.10.2005"),
	//array("title" => "\"Virg0 - Time makes no Sense\" Splash Screens", "author" => "etherea`", "mail" => "cle [at] virg0 [dot] org", "desc" => $template['arts']['desc7'], "thumb" => "virg0_anomalies_thumb.png", "down" => "virg0_anomalies.zip", "date" => "09.03.2006")
);

// Honor & glory
// array("nick" => "nick", "name" => "name", "mail" => "mail", "made" => "made", "quote" => "quote", "image" => "image")
$honor=array(
	1 => array("nick" => "Pragma", "name" => "Szymon Stefanek", "mail" => "pragma [at] kvirc [dot] net", "made" => $template['honor']['made1'], "quote" => $template['honor']['quote1'], "image" => "pragma"),
	array("nick" => "Istari, spion", "name" => "Jan Wagner", "mail" => "webmaster [at] cyconet [dot] org", "made" => $template['honor']['made2'], "quote" => "", "image" => "istari"),
	array("nick" => "Balboy", "name" => "Luk De Ketelaere", "mail" => "balboy [at] kvirc [dot] net", "made" => $template['honor']['made3'], "quote" => $template['honor']['quote3'], "image" => "balboy"),
	array("nick" => "YaP", "name" => "Andrea Parrella", "mail" => "yap [at] kvirc [dot] net", "made" => $template['honor']['made4'], "quote" => $template['honor']['quote4'], "image" => "yap"),
	array("nick" => "alch3m1st", "name" => "Ted Podgurski", "mail" => "tedp [at] toocool [dot] com", "made" => $template['honor']['made5'], "quote" => $template['honor']['quote5'], "image" => "alch3m1st"),
	array("nick" => "oehansen", "name" => "O. E. Hansen", "mail" => "oe.hansen [at] gamma.telenordia [dot] se", "made" => $template['honor']['made6'], "quote" => $template['honor']['quote6'], "image" => "oehansen"),
	array("nick" => "wiza", "name" => "Jorma Tuomainen", "mail" => "jt [at] wiza [dot] fi", "made" => $template['honor']['made7'], "quote" => "", "image" => "wiza"),
	array("nick" => "Penny", "name" => "Eva Schaller", "mail" => "eva [at] cyberbeat [dot] it", "made" => $template['honor']['made8'], "quote" => $template['honor']['quote8'], "image" => "penny"),
	array("nick" => "Crissi", "name" => "Christoph Thielecke", "mail" => "", "made" => $template['honor']['made9'], "quote" => $template['honor']['quote9'], "image" => "crissi"),
	array("nick" => "Triskelios", "name" => "", "mail" => "trisk-kvirc [at] quasarnet [dot] org", "made" => $template['honor']['made10'], "quote" => $template['honor']['quote10'], "image" => "trisk"),
	array("nick" => "munehiro", "name" => "", "mail" => "", "made" => $template['honor']['made11'], "quote" => "", "image" => "munehiro"),
	array("nick" => "Kristoff", "name" => "Krzysztof Godlewski", "mail" => "kristoff [at] proczta.wprost [dot] pl", "made" => $template['honor']['made12'], "quote" => $template['honor']['quote12'], "image" => "kristoff"),
	array("nick" => "iakko", "name" => "Iacopo Palazzi", "mail" => "iakko [at] siena.linux.it_REMOVEFROMUNDERSCORETOTHISPOINT", "made" => $template['honor']['made13'], "quote" => $template['honor']['quote13'], "image" => "iakko"),
	array("nick" => "Thilo", "name" => "Thilo Schulz", "mail" => "arny [at] ats.s.bawue [dot] de", "made" => $template['honor']['made14'], "quote" => "", "image" => "Thilo"),
	array("nick" => "Ahinu", "name" => "Ahinu", "mail" => "ahinu.laman [at] gmail [dot] com", "made" => $template['honor']['made15'], "quote" => "", "image" => "ahinu"),
	array("nick" => "Noldor", "name" => "Alessandro Carbone", "mail" => "Noldor [at] barmes [dot] org", "made" => $template['honor']['made16'], "quote" => $template['honor']['quote16'], "image" => "noldor"),
	array("nick" => "Grifisx", "name" => "Tonino Imbesi", "mail" => "", "made" => $template['honor']['made17'], "quote" => $template['honor']['quote17'], "image" => "grifisx"),
	array("nick" => "Alexey", "name" => "Alexey Uzhva", "mail" => "wizard-ANTISPAM [at] opendoor [dot] ru", "made" => $template['honor']['made18'], "quote" => "", "image" => "alexey"),
	array("nick" => "HelLViS69", "name" => "Elvio Basello", "mail" => "hellvis69 [at] gmail [dot] com", "made" => $template['honor']['made19'], "quote" => $template['honor']['quote19'], "image" => "hellvis69"),
	array("nick" => "etherea`", "name" => "Claudia Galingani Mongini", "mail" => "cle [at] virg0 [dot] org", "made" => $template['honor']['made20'], "quote" => $template['honor']['quote20'], "image" => "etherea"),
	array("nick" => "Nate", "name" => "Alessio Paoletti", "mail" => "nate [at] paranoici [dot] org", "made" => $template['honor']['made21'], "quote" => "", "image" => "nate"),
	array("nick" => "k0sm|k0", "name" => "Massimiliano Leone", "mail" => "k0smik0 [at] logorroici [dot] org", "made" => $template['honor']['made22'], "quote" => $template['honor']['quote22'], "image" => "kosmiko"),
	array("nick" => "LoSko", "name" => "Lorenzo Marcon", "mail" => "lorenzo.marcon [at] startrekitalia [dot] com", "made" => $template['honor']['made23'], "quote" => $template['honor']['quote23'], "image" => "losko"),
	array("nick" => "Kane", "name" => "Juanjo Avarez", "mail" => "juanjux [at] yahoo [dot] es", "made" => $template['honor']['made24'], "quote" => $template['honor']['quote24'], "image" => "unknown"),
	array("nick" => "|Tom| [at] IrcNet", "name" => "Thomas Kalla", "mail" => "", "made" => $template['honor']['made37'], "quote" => "", "image" => "unknown"),
	array("nick" => "Ze_M", "name" => "Américo Josè Melo", "mail" => "", "made" => $template['honor']['made38'], "quote" => "", "image" => "zem"),
	array("nick" => "CtrlAltCa", "name" => "Fabio Bas", "mail" => "ctrlaltca [at] libero.it", "made" => $template['honor']['made40'], "quote" => "Can i haz KVIrc?", "image" => "ctrlaltca"),
	array("nick" => "CGabriel", "name" => "Christopher R. Gabriel", "mail" => "cgabriel [at] linux [dot] it", "made" => $template['honor']['made25'], "quote" => $template['honor']['quote25'], "image" => "unknown"),
	array("nick" => "Drosha", "name" => "Andrew Frolov", "mail" => "", "made" => $template['honor']['made26'], "quote" => $template['honor']['quote26'], "image" => "unknown"),
	array("nick" => "Number1", "name" => "Christian Strmmen", "mail" => "number1 [at] realityx [dot] net", "made" => $template['honor']['made27'], "quote" => $template['honor']['quote27'], "image" => "unknown"),
	array("nick" => "RADKade1", "name" => "RAD Kade 1", "mail" => "", "made" => $template['honor']['made28'], "quote" => $template['honor']['quote28'], "image" => "unknown"),
	array("nick" => "KNFritz", "name" => "Fritz Elfert", "mail" => "", "made" => $template['honor']['made29'], "quote" => "", "image" => "unknown"),
	array("nick" => "Njaard", "name" => "Charles Samuels", "mail" => "kcharles [at] altair.dhs [dot] org", "made" => $template['honor']['made30'], "quote" => $template['honor']['quote30'], "image" => "unknown"),
	array("nick" => "BuTi", "name" => "", "mail" => "buti [at] geocities [dot] com", "made" => $template['honor']['made31'], "quote" => "", "image" => "unknown"),
	array("nick" => "Error403", "name" => "Nick Betcher", "mail" => "nbetcher [at] real-time [dot] com", "made" => "", "quote" => $template['honor']['quote32'], "image" => "unknown"),
	array("nick" => "Crocodile", "name" => "Olle Hällnäs", "mail" => "olle [at] xmms [dot] org", "made" => $template['honor']['made33'], "quote" => "", "image" => "unknown"),
	array("nick" => "marl", "name" => "Giovanni Ferri", "mail" => "giovanni [at] fonderiadigitale [dot] it", "made" => $template['honor']['made34'], "quote" => $template['honor']['quote34'], "image" => "unknown"),
	array("nick" => "[Anodine]", "name" => "Anodine", "mail" => "", "made" => $template['honor']['made35'], "quote" => $template['honor']['quote35'], "image" => "unknown"),
	array("nick" => "infected", "name" => "Paul Boehm", "mail" => "", "made" => $template['honor']['made36'], "quote" => $template['honor']['quote36'], "image" => "unknown"),
	array("nick" => "valeragir", "name" => "Valeriy Girchenko", "mail" => "valeragir [at] mail [dot] ru", "made" => $template['honor']['made39'], "quote" => "", "image" => "unknown"),
	array("nick" => "cpet", "name" => "Chris Petrik", "mail" => "chris [at] officialunix [dot] com", "made" => $template['honor']['made41'], "quote" => $template['honor']['quote37'], "image" => "unknown")
);

// Screenshots
// array("img" => "image", "thumb" => "thumbnail", "desc" => "description")
$screen=array(
	1 => array(
		0 => "KVIrc 2.0.0 \"Phoenix\"",
		array("img" => "phoenix_shot1.jpg", "thumb" => "phoenix_smallshot1.jpg", "desc" => $template['screen']['screen1']),
		array("img" => "phoenix_shot2.jpg", "thumb" => "phoenix_smallshot2.jpg", "desc" => $template['screen']['screen2']),
		array("img" => "phoenix_shot3.jpg", "thumb" => "phoenix_smallshot3.jpg", "desc" => $template['screen']['screen3']),
		array("img" => "phoenix_shot4.jpg", "thumb" => "phoenix_smallshot4.jpg", "desc" => $template['screen']['screen4']),
		array("img" => "phoenix_shot5.jpg", "thumb" => "phoenix_smallshot5.jpg", "desc" => $template['screen']['screen5']),
		array("img" => "phoenix_shot6.jpg", "thumb" => "phoenix_smallshot6.jpg", "desc" => $template['screen']['screen6']),
		array("img" => "phoenix_shot7.jpg", "thumb" => "phoenix_smallshot7.jpg", "desc" => $template['screen']['screen7']),
		array("img" => "phoenix_shot8.jpg", "thumb" => "phoenix_smallshot8.jpg", "desc" => $template['screen']['screen8'])
	),
	array(
		0 => "KVIrc 3.0.0 CVS \"Avatar\"",
		array("img" => "snapshot8.jpg", "thumb" => "snapshot8_small.jpg", "desc" => $template['screen']['screen9']),
		array("img" => "snapshot1.jpg", "thumb" => "snapshot1_small.jpg", "desc" => $template['screen']['screen10']),
		array("img" => "snapshot2.jpg", "thumb" => "snapshot2_small.jpg", "desc" => $template['screen']['screen11']),
		array("img" => "snapshot3.jpg", "thumb" => "snapshot3_small.jpg", "desc" => $template['screen']['screen12']),
		array("img" => "snapshot4.jpg", "thumb" => "snapshot4_small.jpg", "desc" => $template['screen']['screen13']),
		array("img" => "snapshot5.jpg", "thumb" => "snapshot5_small.jpg", "desc" => $template['screen']['screen14']),
		array("img" => "snapshot6.jpg", "thumb" => "snapshot6_small.jpg", "desc" => $template['screen']['screen15'])
	),
	array(
		0 => "KVIrc 3.0.0 \"Awakening\" ~ 3.0.0 CVS \"Avatar\"",
		array("img" => "awake_fancy.jpg", "thumb" => "awake_fancy_small.jpg", "desc" => $template['screen']['screen16']),
		array("img" => "awake_minimalist.jpg", "thumb" => "awake_minimalist_small.jpg", "desc" => $template['screen']['screen17']),
		array("img" => "awake_spec_windows.jpg", "thumb" => "awake_spec_windows_small.jpg", "desc" => $template['screen']['screen18']),
		array("img" => "awake_scripter.jpg", "thumb" => "awake_scripter_small.jpg", "desc" => $template['screen']['screen19']),
		array("img" => "trex_shot1.jpg", "thumb" => "trex_shot1_small.jpg", "desc" => $template['screen']['screen20']),
		array("img" => "trex_shot2.jpg", "thumb" => "trex_shot2_small.jpg", "desc" => $template['screen']['screen21']),
		array("img" => "trex_shot3.jpg", "thumb" => "trex_shot3_small.jpg", "desc" => $template['screen']['screen22']),
		array("img" => "trex_shot4.jpg", "thumb" => "trex_shot4_small.jpg", "desc" => $template['screen']['screen23'])
	),
	array(
		0 => "KVIrc 3.2.0 \"Realia\" ~ 3.2.3 CVS \"Anomalies\"",
		array("img" => "snapshot9.jpg", "thumb" => "snapshot9_small.jpg", "desc" => $template['screen']['screen24']),
		array("img" => "realia_shot_bizzia.png", "thumb" => "realia_smallshot_bizzia.png", "desc" => $template['screen']['screen25']),
		array("img" => "snapshot10.png", "thumb" => "snapshot10_small.png", "desc" => $template['screen']['screen26']),
		array("img" => "snapshot13.png", "thumb" => "snapshot13_small.png", "desc" => $template['screen']['screen27']),
		array("img" => "snapshot11.png", "thumb" => "snapshot11_small.png", "desc" => $template['screen']['screen28']),
		array("img" => "snapshot14.png", "thumb" => "snapshot14_small.png", "desc" => $template['screen']['screen29'])
	),
	array(
		0 => "KVIrc 3.2.6 \"Anomalies\"",
		array("img" => "snapshot15.png", "thumb" => "snapshot15_small.png", "desc" => $template['screen']['screen30']),
		array("img" => "snapshot16.png", "thumb" => "snapshot16_small.png", "desc" => $template['screen']['screen31']),
		array("img" => "snapshot17.png", "thumb" => "snapshot17_small.png", "desc" => $template['screen']['screen32']),
		array("img" => "snapshot18.png", "thumb" => "snapshot18_small.png", "desc" => $template['screen']['screen33']),
		array("img" => "snapshot19.png", "thumb" => "snapshot19_small.png", "desc" => $template['screen']['screen34'])
	)
);

// Scripts
// array("script" => "script name", "author" => "author name", "mail" => "author mail", "desc" => "description", "home" => "script homepage")
$scripts=array(
	1 => array("script" => "Princoscript", "author" => "Francesco Meloni", "mail" => "francesco.melo [at] tiscali [dot] it", "desc" => $template['scripts']['script1'], "home" => "http://web.tiscali.it/princoscript/"),
	array("script" => "SaNVirC", "author" => "Wunslov", "mail" => "", "desc" => $template['scripts']['script2'], "home" => "http://sanvirc.sourceforge.net/"),
	array("script" => "Savage", "author" => "???", "mail" => "", "desc" => $template['scripts']['script3'], "home" => "http://www.cynapses.org/tmp/kvirc-script-0.7.tar.gz"),
	//array("script" => "dwnKVIrc", "author" => "Klaus Weidenbach", "mail" => "Klaus.Weidenbach [at] gmx [dot] net", "desc" => $template['scripts']['script4'], "home" => "http://dszdw.homelinux.org/~klaus/programs/kvirc/index.php")
);

// Splash screens
// array("name" => "name", "screen" => "screenshot", "alt" => "version number", "motd" => "motd", "date" => "date", "present" => "present")
$splash=array(
	1 => array("name" => "0.9.0", "screen" => "0.9.0.png", "alt" => "0.9.0", "motd" => "", "date" => "25.01.1999", "present" => "0.6.0, 0.8.0, 0.9.0"),
	array("name" => "1.0.0 beta", "screen" => "1.0.0-beta.png", "alt" => "1.0.0 beta", "motd" => "The Net in your hands", "date" => "", "present" => ""),
	array("name" => "1.0.0 \"Millennium\"", "screen" => "1.0.0.png", "alt" => "1.0.0", "motd" => "", "date" => "21.12.1999", "present" => ""),
	array("name" => "2.0.0 \"Phoenix\"", "screen" => "2.0.0.png", "alt" => "2.0.0", "motd" => "The client that can't make coffee", "date" => "30.05.2000", "present" => ""),
	array("name" => "2.1.0 \"Dark Star\"", "screen" => "2.1.0.png", "alt" => "2.1.0", "motd" => "The client that can't make coffee", "date" => "30.01.2001", "present" => ""),
	array("name" => "2.1.1 \"Monolith\"", "screen" => "2.1.1.png", "alt" => "2.1.1", "motd" => "A breath of fresh net", "date" => "01.05.2001", "present" => ""),



	array("name" => "3.0.0 beta \"Avatar\"", "screen" => "3.0.0-beta.png", "alt" => "3.0.0 beta", "motd" => "No boundaries on the net", "date" => "24.12.2001", "present" => "alpha, xmas, beta 1, beta2"),
	array("name" => "3.0.0 CVS \"Avatar\"", "screen" => "3.0.0-cvs.png", "alt" => "3.0.0 CVS", "motd" => "You run, never stop, got to win, got to run 'till you drop", "date" => "", "present" => ""),
	array("name" => "3.0.0 \"Awakening\"", "screen" => "3.0.0.png", "alt" => "3.0.0", "motd" => "No boundaries on the net", "date" => "17.04.2004", "present" => ""),
	array("name" => "3.0.1 \"System Virtue\"", "screen" => "3.0.1.png", "alt" => "3.0.1", "motd" => "Ooh, look, a shiny object...", "date" => "31.04.2004", "present" => ""),


	array("name" => "3.0.2 CVS \"Realia\"", "screen" => "3.0.2-cvs.png", "alt" => "3.0.2", "motd" => "Ooh, look, a shiny object...", "date" => "06.12.2004", "present" => ""),



	array(
		"name" => "3.2.0 \"Realia\"",
		"motd" => "So Long,  And Thanks for All the Fish",
		"screen" => "3.2.0.png",
		"date" => "26.02.2005",
		"present" => ""
	),
	array(
		"name" => "3.2.0.99 CVS \"Marmalade\"",
		"motd" => "Hello, Hey Joe! You Wanna Give It a Go ?",
		"screen" => array(
			"3.2.0.99.2.png",
			"3.2.0.99.1.png"
		),
		"date" => array(
			"01.08.2005", // 3.2.0.99 2nd edition
			"01.05.2005"  // 3.2.0.99 1st edition
		),
		"present" => ""
	),
	array(
		"name" => "3.2.6 SVN \"Anomalies\"",
		"motd" => "Time makes no sense",
		"screen" => array(
			"3.2.6-svn.png",
			"3.2.4-cvs.png",
		),
		"date" => array(
			"12.09.2006", // 3.2.6
			"06.08.2006", // 3.2.4
		),
		"present" => "3.2.5, 3.2.4, 3.2.3, 3.2.2, 3.2.1, 3.2.0.20051230"
	),
	array(
		"name" => "3.4.2 \"Shiny\"",
		"motd" => "Reality is that which, when you stop believing in it, doesn't go away",
		"screen" => array(
			"3.4.2.png",
			"3.4.0.png"
		),
		"date" => array(
			"14.10.2008", // 3.4.2
			"25.03.2008"  // 3.4.0
		),
		"present" => "3.4.1"
	),
	array(
		"name" => "4.0.4 \"Insomnia\"",
		"motd" => "Once you know what it is you want to be true, instinct is a very useful device for enabling you to know that it is",
		"screen" => array(
			"4.0.4.png",
			"4.0.2.png",
			"4.0.0.png",
			"4.0.0-rc3.png",
			"4.0.0-rc2-r4000.png",
			"4.0.0-rc2.png",
			"4.0.0-rc1.png",
			"4.0.0-svn.png"
		),
		"date" => array(
			"19.03.2011", // 4.0.4
			"01.08.2010", // 4.0.2
			"27.06.2010", // 4.0.0
			"17.04.2010", // 4.0.0-rc3
			"20.02.2010", // 4.0.0-rc2-r4000
			"19.12.2009", // 4.0.0-rc2
			"10.09.2009", // 4.0.0-rc1
			"19.01.2009"  // 4.0.0-svn
		),
		"present" => ""
	),
	array(
		"name" => "4.2.0 \"Equilibrium\"",
		"motd" => "Once you know what it is you want to be true, instinct is a very useful device for enabling you to know that it is",
		"screen" => array(
			"4.2.0.png",
			"4.1.3.png",
			"4.1.1.png"
		),
		"date" => array(
			"03.07.2012", // 4.2.0
			"18.09.2011", // 4.1.3
			"01.08.2010"  // 4.1.1
		),
		"present" => ""
	),
	array(
		"name" => "5.0.0 \"Aria\"",
		"motd" => "",
		"screen" => array(
			"5.0.0.png"
		),
		"date" => array(
			"01.01.2019"
		),
		"present" => ""
	)
);

// Themes
// This part was splitted to allow external apps to access themes data
include_once("themes.php"); // FIXME: Put this include only where it's really needed

// Addons
// This part was splitted to allow external apps to access addons data
include_once("addons.php"); // FIXME: Put this include only where it's really needed

// Tools
//aray("name" => "tool name", "author" => "author name", "mail" => "author mail", "desc" => "description", "url" => "url")
$tools=array(
	1 => array("name" => "Notepad++ KVS-Syntax", "author" => "TheXception", "mail" => "kvirc [at] thexception [dot] net", "desc" => $template['tools']['tool1'], "url" => "kvs-notepad++.zip"),
	array("name" => "KVIrc TCL", "author" => array("HelLViS69","CtrlAltCa"), "mail" => array("hellvis69 [at] gmail [dot] com","ctrlaltca [at] gmail [dot] com"), "desc" => $template['tools']['tool2'], "url" => "kvirc-2.0.tcl.bz2"),
	array("name" => "KVIrc Trac Syndacator", "author" => array("HelLViS69","CtrlAltCa"), "mail" => array("hellvis69 [at] gmail [dot] com","ctrlaltca [at] gmail [dot] com"), "desc" => $template['tools']['tool3'], "url" => "kvircrss-2.1.tcl.bz2"),
	array("name" => "GetText Checker", "author" => "aleksanteri", "mail" => "aleksanteri4028 [at] gmail [dot] com", "desc" => $template['tools']['tool4'], "url" => "gtc-0.2.tcl.bz2"),
	array("name" => "KVIrc 2 Text", "author" => "zly", "mail" => "zly [at] solidonline [dot] dk", "desc" => $template['tools']['tool5'], "url" => "kvirc2txt.php.bz2"),
	array("name" => "KVIrc Supybot", "author" => "HelLViS69", "mail" => "hellvis69 [at] gmail [dot] com", "desc" => $template['tools']['tool6'], "url" => "kvirc-supybot-1.0.tar.bz2")
);

// Translations (keep 'em in alphabetical order)
// array("lang" => "language", "nick" => "nick", "mail" => "mail", "flag" => "country flag", "unmain" => "unmaintained")
$translators=array(
	1 => array("lang" => $template['index']['brazilian'], "nick" => "Adilson Gonçalves Soares Junior", "mail" => "cabide [at] brfree [dot] com.br", "flag" => "Brazil", "unmain" => 1),
	array("lang" => $template['index']['bulgarian'], "nick" => "Bugar", "mail" => "bugar [at] developer [dot] bg", "flag" => "Bulgaria", "unmain" => 1),
	array("lang" => $template['index']['catalan'], "nick" => "", "mail" => "", "flag" => "Catalonia", "unmain" => 1),
	array("lang" => $template['index']['croatian'], "nick" => "SpeedyGhost", "mail" => "speedyghost [at] gmail [dot] com", "flag" => "Croatia", "unmain" => 1),
	array("lang" => $template['index']['czech'], "nick" => "Dusan Hokuv", "mail" => "dusan [at] mirc [dot] cz", "flag" => "Czech-Republic", "unmain" => 1),
	array("lang" => $template['index']['dutch'], "nick" => "Balboy", "mail" => "balboy [at] kvirc [dot] net", "flag" => "Netherlands", "unmain" => 1),
	array("lang" => $template['index']['finnish'], "nick" => "Jermakovi", "mail" => "jere.v [at] live [dot] fi", "flag" => "Finland"),
	array("lang" => $template['index']['french'], "nick" => array("Ahinu","_Otaku"), "mail" => array("ahinu.laman [at] gmail [dot] com","notakou [at] gmail [dot] com"), "flag" => "France"),
	array("lang" => $template['index']['german'], "nick" => "mren", "mail" => "kvirc [at] mrmx [dot] de", "flag" => "Germany"),
	array("lang" => $template['index']['hungarian'], "nick" => "Fiber^", "mail" => "vfiber [at] gmail [dot] com", "flag" => "Hungary", "unmain" => 1),
	array("lang" => $template['index']['italian'], "nick" => "HelLViS69", "mail" => "hellvis69 [at] gmail [dot] com", "flag" => "Italy"),
	array("lang" => $template['index']['polish'], "nick" => "Krzysztof Godlewski", "mail" => "kgod [at] poczta.onet [dot] pl", "flag" => "Poland", "unmain" => 1),
	array("lang" => $template['index']['portuguese'], "nick" => "Ze_m", "mail" => "mmodem00 [at] netvisao [dot] pt", "flag" => "Portugal", "unmain" => 1),
	array("lang" => $template['index']['russian'], "nick" => "Alexey", "mail" => "spam [at] kvirc [dot] ru", "flag" => "Russia", "unmain" => 1),
	array("lang" => $template['index']['serbian'], "nick" => "Prethorian", "mail" => "preth [at] kvsky [dot] net", "flag" => "Serbia", "unmain" => 1),
	array("lang" => $template['index']['spanish'], "nick" => "wodim", "mail" => "neikokz [at] gmail [dot] com", "flag" => "Spain"),
	array("lang" => $template['index']['ukrainian'], "nick" => "igorko", "mail" => "mansonigor [at] gmail [dot] com", "flag" => "Ukraine")
);
?>
