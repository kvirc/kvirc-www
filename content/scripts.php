<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['scripts']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<br /><h3>".$template['scripts']['text1'].".</h3>";
	echo "<p>".$template['scripts']['text2a']." <code>/parse script.kvs</code> ".$template['scripts']['text2b']." &lt;prefix&gt;/share/kvirc/3.2.4[-extraversion]/defscript/default.kvs.</p>";

	foreach($scripts as $key => $value){
		if(fmod($key,2)==0)
			echo "<table class=\"scriptNotCxt\">";
		else echo "<table class=\"scriptCxt\">";

		echo "<tr><td colspan=\"2\"><b>".$value['script']."</b></td></tr>";

		echo "<tr>";
			echo "<td><em>".$template['custom']['author'].":</em></td>";
			if($value['mail']!="")
				echo "<td><a href=\"mailto:".$value['mail']."\">".$value['author']."</a></td>";
			else echo "<td>".$value['author']."</td>";
		echo "</tr>";

		echo "<tr>";
			echo "<td><em>".$template['custom']['description'].":</em></td>";
			echo "<td>".$value['desc']."</td>";
		echo "</tr>";

		echo "<tr>";
			echo "<td><em>".$template['custom']['homepage'].":</em></td>";
			echo "<td><a href=\"".$value['home']."\">".basename($value['home'])."</a></td>";
		echo "</tr>";

		echo "</table>";
	}
echo "</div>";
?>
