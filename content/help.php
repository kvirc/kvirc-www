<?php
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['help']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<br /><h3>".$template['help']['text1']."</h3>";
	echo "<p>".$template['help']['text2']." <a href=\"https://github.com/kvirc/KVIrc/issues\">".$template['index']['bugtrack']."</a>.</p>";

	echo "<p><b>".$template['help']['text3']."</b></p>";

	echo "<p>".$template['help']['text4a']." <a href=\"https://libera.chat\">".$template['help']['text4b']."</a> ".$template['help']['text4c']." <a href=\"irc://irc.libera.chat/kvirc\">#KVIrc</a>.</p>";
echo "</div>";
?>
