<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['tools']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<br /><h3>".$template['tools']['text1'].".</h3>";

	foreach($tools as $key => $value){
		if(fmod($key,2)==0)
			echo "<table class=\"pair\">";
		else echo "<table class=\"despair\">";

		echo "<tr class=\"head\"><td colspan=\"2\"><b>".$value['name']."</b></td></tr>";

		echo "<tr>";
			echo "<td class=\"data\"><em>".$template['custom']['author'].":</em></td>";
			if($value['mail']!="")
				echo "<td><a href=\"mailto:".$value['mail']."\">".$value['author']."</a></td>";
			else echo "<td>".$value['author']."</td>";
		echo "</tr>";

		echo "<tr>";
			echo "<td class=\"data\"><em>".$template['custom']['description'].":</em></td>";
			echo "<td>".$value['desc']."</td>";
		echo "</tr>";

		echo "<tr>";
			echo "<td class=\"data\"><em>".$template['custom']['download'].":</em></td>";
			echo "<td><a href=\"".$value['url']."\">".basename($value['url'])."</a></td>";
		echo "</tr>";

		echo "</table>";
	}
echo "</div>";
?>