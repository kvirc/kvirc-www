<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['splash']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<br /><h3>".$template['splash']['text']."</h3>";

	foreach($splash as $key => $value){
		echo "<h1>".$value['name']."</h1>";

		echo "<a href=\"img/".$value['screen']."\"><img src=\"img/small_".$value['screen']."\" alt=\"".$value['alt']."\" /></a><br />";
		if($value['motd']!="")
			echo "<h3><em>\"".$value['motd']."\"</em>"."</h3>";
		if($value['date']!="")
			echo "<p>".$template['splash']['date'].": ".$value['date']."</p>";
		if($value['present']!="")
			echo "<p>".$template['splash']['in'].": ".$value['present']."</p>";
	}
echo "</div>";
?>