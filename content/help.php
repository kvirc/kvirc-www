<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['help']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<br /><h3>".$template['help']['text1']."</h3>";
	echo "<p>".$template['help']['text2']." <a href=\"?id=mailinglist&amp;lang=$lang\">".$template['index']['ml']."</a>.</p>";

	echo "<p><b>".$template['help']['text3']."</b></p>";

	echo "<p>".$template['help']['text4a']." <a href=\"http://www.freenode.org\">".$template['help']['text4b']."</a> ".$template['help']['text4c']." <a href=\"irc://irc.freenode.org/kvirc\">#KVIrc</a>. ".$template['help']['text4d']." <a href=\"irc://irc.azzurra.org/kvirc.net\">#KVIrc.net</a> ".$template['help']['text4e']." <a href=\"http://www.azzurra.org\">".$template['help']['text4f']."</a>.<br />".$template['help']['text4g']." <a href=\"http://www.ircnet.org\">".$template['help']['text4h']."</a> ".$template['help']['text4i']." <a href=\"irc://chat.ircnet.org/kvirc\">#KVIrc</a> ".$template['help']['text4j']."</p>";

	echo "<p>".$template['help']['text5']." <a href=\"https://svn.kvirc.de/kvirc/\">".$template['index']['bugtrack']."</a>.</p>";
	
	echo "<p>".$template['help']['text6']." <a href=\"mailto:hellvis69 [at] netsons [dot] org\">HelLViS69</a>.</p>";
	
	echo "<p>".$template['help']['text7']." <a href=\"mailto:cle [at] virg0 [dot] org\">etherea`</a>.</p>";
echo "</div>";
?>