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

foreach($themes as $key => $value){
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
