<?php 
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['download']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<p>".$template['download']['text1']."</p>";
	echo "<h1><a href=\"?id=releases&amp;lang=$lang\">".$template['download']['text2']."</a></h1>";
	echo "<p>".$template['download']['text3']."</p>";

	echo "<h1><a href=\"?id=snapshots&amp;lang=$lang\">".$template['download']['text4']."</a></h1>";
	echo "<p>".$template['download']['text5']."</p>";

	echo "<h1><a href=\"https://github.com/kvirc/KVIrc\">".$template['download']['text6']."</a></h1>";
	echo "<p>".$template['download']['text7']."</p>";
echo "</div>";
?>
