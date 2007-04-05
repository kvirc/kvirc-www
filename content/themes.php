<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<div class=\"title\">".$template['themes']['title']."</div>";
echo "<div class=\"text\">";
	echo $template['themes']['text1'].".<br />";

	echo "<ul>";
		echo "<li><b>".$template['themes']['text2a']."?</b>";
		echo "<ol>";
			echo "<li>".$template['themes']['text2b1'].".</li>";
			echo "<li>".$template['themes']['text2b2']." \$HOME/.kvirc/themes/<br /></li>";
				echo "<code># cd \$HOME/.kvirc/themes/<br />";
				echo "# tar -jxvf &lt;".$template['themes']['text2b2a']."&gt;</code>";
			echo "<li>".$template['themes']['text2b3'].".</li>";
			echo "<li>".$template['themes']['text2b4'].".</li>";
			echo "<li>".$template['themes']['text2b5']." :)</li>";
		echo "</ol></li>";

		echo "<li><b>".$template['themes']['text3a']."?</b><br />";
		echo $template['themes']['text3b1']." <a href=\"ftp://ftp.kvirc.net/pub/kvirc/themes/themes.howto.txt\">".$template['themes']['text3b2']."</a> ".$template['themes']['text3b3']." <a href=\"http://kvirc.virg0.org/docs/themes.howto_it.pdf\">".$template['themes']['text3b2']."</a>.";
		echo $template['themes']['text3b4'].".</li>";

		echo "<li><b>".$template['themes']['text4a']."?</b><br />";
		echo $template['themes']['text4b']." <a href=\"mailto:hellvis69@altervista.REMOVE.THE.ANTISPAM.WORDS.org\">HelLViS69</a>.</li>";
	echo "</ul>";
echo "</div>";

// array("name" => "name", "version" => "version", "mail" => "mail", "author" => "author", "desc" => "description", "home" => "homepage", "download" => "download", "screen" => "screenshot", "thumb" => "thumbnail")

$theme=array(
	1 => array("name" => "Marble Theme", "version" => "1.0.4", "mail" => "sbrokka@openlug.REMOVE.THE.ANTISPAM.WORDS.org", "author" => "Sbrokka", "desc" => $template['themes']['theme1'], "home" => "", "download" => "ftp://ftp.kvirc.net/pub/kvirc/themes/Marble-1.0.4.tar.bz2", "screen" => "theme_marble.jpg", "thumb" => "thumb_marble.png"),
	array("name" => "Crystal", "version" => "0.3.0", "mail" => "trisk-kvirc@quasarnet.REMOVE.THE.ANTISPAM.WORDS.org", "author" => "Triskelios", "desc" => $template['themes']['theme2'], "home" => "", "download" => "ftp://ftp.kvirc.net/pub/kvirc/themes/Crystal-0.3.0.tar.bz2", "screen" => "theme_crystal.jpg", "thumb" => "thumb_crystal.png"),
	array("name" => "Green Theme", "version" => "1.1.0", "mail" => "", "author" => "F.F (have more fun)", "desc" => $template['themes']['theme3'], "home" => "", "download" => "ftp://ftp.kvirc.net/pub/kvirc/themes/Green-1.1.0.tar.gz", "screen" => "theme_green.jpg", "thumb" => "thumb_green.png"),
	array("name" => "Ircii Like", "version" => "1.0.0", "mail" => "eva@cyberbeat.REMOVE.THE.ANTISPAM.WORDS.it", "author" => "Penny", "desc" => $template['themes']['theme4'], "home" => "", "download" => "ftp://ftp.kvirc.net/pub/kvirc/themes/ircii_like-1.0.0.tar.bz2", "screen" => "theme_ircii.jpg", "thumb" => "thumb_ircii.png"),
	array("name" => "Yisus", "version" => "0.3", "mail" => "fnotari@comtron.com.REMOVE.THE.ANTISPAM.WORDS.ar", "author" => "Fernando Notari", "desc" => $template['themes']['theme5'], "home" => "", "download" => "ftp://ftp.kvirc.net/pub/kvirc/themes/yisus-0.3.tar.bz2", "screen" => "theme_notari.jpg", "thumb" => "thumb_notari.png"),
	array("name" => "Kitsch Theme", "version" => "1.0.0", "mail" => "eva@cyberbeat.REMOVE.THE.ANTISPAM.WORDS.it", "author" => "Penny", "desc" => $template['themes']['theme6'], "home" => "", "download" => "ftp://ftp.kvirc.net/pub/kvirc/themes/Kitsch-1.0.0.tar.bz2", "screen" => "theme_kitsch.jpg", "thumb" => "thumb_kitsch.png"),
	array("name" => "Ghost", "version" => "1.0.0", "mail" => "darkstalker@insightbb.REMOVE.THE.ANTISPAM.WORDS.com", "author" => "Jason Carter", "desc" => $template['themes']['theme7'], "home" => "", "download" => "ftp://ftp.kvirc.net/pub/kvirc/themes/Ghost-1.0.0.tar.bz2", "screen" => "theme_ghost.jpg", "thumb" => "thumb_ghost.png"),
	array("name" => "PayneReactor", "version" => "1.0.0", "mail" => "webmaster@paynereactor.REMOVE.THE.ANTISPAM.WORDS.net", "author" => "Kristian Hollund", "desc" => $template['themes']['theme8'], "home" => "http://www.PayneReactor.com", "download" => "ftp://ftp.kvirc.net/pub/kvirc/themes/PayneReactor.tar.bz2", "screen" => "theme_payne.jpg", "thumb" => "thumb_payne.png"),
	array("name" => "XCrystall Black", "version" => "0.0.1", "mail" => "wizard at opendoor.REMOVE.THE.ANTISPAM.WORDS.ru", "author" => "Alexey", "desc" => $template['themes']['theme9'], "home" => "", "download" => "ftp://ftp.kvirc.net/pub/kvirc/themes/xcrystall-0.0.1.tar.bz2", "screen" => "theme_xcrystall.jpg", "thumb" => "thumb_xcrystall.jpg"),
	array("name" => "DarkBaghira", "version" => "0.1.2", "mail" => "hellvis69@altervista.REMOVE.THE.ANTISPAM.WORDS.org", "author" => "HelLViS69", "desc" => $template['themes']['theme10'], "home" => "http://hellvis69.altervista.org", "download" => "ftp://ftp.kvirc.net/pub/kvirc/themes/DarkBaghira-0.1.2.tar.bz2", "screen" => "theme_darkbaghira.jpg", "thumb" => "thumb_darkbaghira.png"),
	array("name" => "Time makes no sense", "version" => "3.3.2", "mail" => "cle@virg0.REMOVE.THE.ANTISPAM.WORDS.org", "author" => "etherea`", "desc" => $template['themes']['theme11'], "home" => "http://kvirc.virg0.org", "download" => "ftp://ftp.kvirc.net/pub/kvirc/themes/Time-3.3.2.tar.bz2", "screen" => "theme_time.png", "thumb" => "thumb_time.png"),
	array("name" => "Pure", "version" => "1.0.1", "mail" => "cle@virg0.REMOVE.THE.ANTISPAM.WORDS.org", "author" => "etherea`", "desc" => $template['themes']['theme12'], "home" => "http://kvirc.virg0.org", "download" => "ftp://ftp.kvirc.net/pub/kvirc/themes/Pure-1.0.1.tar.bz2", "screen" => "theme_pure.png", "thumb" => "thumb_pure.png"),
	array("name" => "Dark Glass", "version" => "1.0.0", "mail" => "grifisx@barmes.org", "author" => "Grifisx &amp; Noldor", "desc" => $template['themes']['theme13'], "home" => "", "download" => "ftp://ftp.kvirc.net/pub/kvirc/themes/DarkGlass-1.0.tar.bz2", "screen" => "theme_darkglass.png", "thumb" => "thumb_darkglass.png"),
	array("name" => "Black Heart", "version" => "1.0.0", "mail" => "grifisx@barmes.org", "author" => "Grifisx &amp; Noldor", "desc" => $template['themes']['theme14'], "home" => "", "download" => "ftp://ftp.kvirc.net/pub/kvirc/themes/BlackHeart-1.0.tar.bz2", "screen" => "theme_blackheart.png", "thumb" => "thumb_blackheart.png"),
	array("name" => "X-KVIrc-mas", "version" => "1.0.0", "mail" => "grifisx@barmes.org", "author" => "Grifisx &amp; Noldor", "desc" => $template['themes']['theme15'], "home" => "", "download" => "ftp://ftp.kvirc.net/pub/kvirc/themes/X-KVIrcmas-1.0.tar.bz2", "screen" => "theme_X-KVIrcmas.png", "thumb" => "thumb_X-KVIrcmas.png"),
	array("name" => "Words are Perversion", "version" => "1.0.3", "mail" => "cle@virg0.REMOVE.THE.ANTISPAM.WORDS.org", "author" => "etherea`", "desc" => $template['themes']['theme16'], "home" => "http://kvirc.virg0.org", "download" => "ftp://ftp.kvirc.net/pub/kvirc/themes/Words_are_Perversion-1.0.tar.bz2", "screen" => "theme_words.png", "thumb" => "thumb_words.png"),
	array("name" => "erotica", "version" => "0.6.9", "mail" => "cle@virg0.REMOVE.THE.ANTISPAM.WORDS.org", "author" => "etherea`", "desc" => $template['themes']['theme17'], "home" => "http://kvirc.virg0.org", "download" => "ftp://ftp.kvirc.net/pub/kvirc/themes/erotica-0.6.9.rar", "screen" => "theme_erotica.png", "thumb" => "thumb_erotica.png"),
	array("name" => "Anger", "version" => "0.0.1", "mail" => "cle@virg0.REMOVE.THE.ANTISPAM.WORDS.org", "author" => "etherea`", "desc" => $template['themes']['theme18'], "home" => "http://kvirc.virg0.org", "download" => "ftp://ftp.kvirc.net/pub/kvirc/themes/Anger-0.0.1.rar", "screen" => "theme_anger.png", "thumb" => "thumb_anger.png"),
	array("name" => "Dark Blue", "version" => "0.9.0", "mail" => "lgxco@yahoo.REMOVE.THE.ANTISPAM.WORDS.it", "author" => "Puk", "desc" => $template['themes']['theme19'], "home" => "", "download" => "ftp://ftp.kvirc.net/pub/kvirc/themes/DarkBlue-0.9.0.kvt", "screen" => "theme_darkblue.png", "thumb" => "thumb_darkblue.png")
);

foreach($theme as $key => $value){
	echo "<div class=\"title\">".$value['name']."&nbsp;".$value['version']."</div>";
	echo "<div class=\"text\">";

	if($value['mail']!="")
		echo "<b>".$template['custom']['author'].": </b><a href=\"mailto:".$value['mail']."\">".$value['author']."</a><br />";
	else echo "<b>".$template['custom']['author'].": </b>".$value['author']."<br />";

	echo "<b>".$template['custom']['description'].": </b>".$value['desc']."<br />";

	if($value['home']!="")
		echo "<a href=\"".$value['home']."\">".$template['custom']['homepage']."</a>.<br />";

	echo "<a href=\"img/".$value['screen']."\"><img src=\"img/".$value['thumb']."\" alt=\"".$template['themes']['screenshot']."\" /></a><br />";
	echo "<a href=\"".$value['download']."\">".$template['custom']['download']."</a><br />";

	echo "</div>";
}
?>
