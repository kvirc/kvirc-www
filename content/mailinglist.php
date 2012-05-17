<?php
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['ml']['title']."</h1>";
echo "<div class=\"column1-unit\">";

	echo "<br /><h3>".$template['ml']['text1a']."</h3>";
	echo "<p><b>".$template['ml']['text1b']."</b></p>";

	echo "<h1>".$template['ml']['text2'].":</h1>";
	echo "<p>".$template['ml']['text3']."</p>";

	echo "<h1>".$template['ml']['text4'].":</h1>";
	echo "<p>".$template['ml']['text5']."</p>";

	echo "<h1>".$template['ml']['text6'].":</h1>";
	echo "<p>".$template['ml']['text7']."</p>";

	echo "<h1>".$template['ml']['text8'].":</h1>";
	echo "<p>".$template['ml']['text9']."<p>";
echo "</div>";
?>