<?php
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['contribute']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<br /><h3>".$template['contribute']['text1']."</h3>";

	echo "<h1>".$template['contribute']['text2']."</h1>";
	echo "<p>".$template['contribute']['text3']."</p>";
		
	echo "<h1>".$template['contribute']['text4']."</h1>";
	echo "<p>".$template['contribute']['text5']."</p>";

	echo "<h1>".$template['contribute']['text6']."</h1>";
	echo "<p>".$template['contribute']['text7']."</p>";

	echo "<h1>".$template['contribute']['text8']."</h1>";
	echo "<p>".$template['contribute']['text9']."</p>";

	echo "<h1>".$template['contribute']['text10']."</h1>";
	echo "<p>".$template['contribute']['text11']."</p>";

	echo "<h1>".$template['contribute']['text12']."</h1>";
	echo "<p>".$template['contribute']['text13']."</p>";
	
	echo "<h1>".$template['contribute']['text14']."</h1>";
	echo "<p>".$template['contribute']['text15']."</p>";

	echo "<h1>".$template['contribute']['text16']."</h1>";
	echo "<p>".$template['contribute']['text17']."</p>";

	echo "<h1>".$template['contribute']['text18']."</h1>";
	echo "<p>".$template['contribute']['text19']."</p>";
echo "</div>";
?>