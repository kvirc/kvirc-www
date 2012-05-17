<?php 
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['scripts']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<br /><h3>".$template['scripts']['text1'].".</h3>";
	echo "<p>".$template['scripts']['text2a']."</p>";
	echo "<code>/parse script.kvs</code>";
	echo "<p>".$template['scripts']['text2b']." &lt;prefix&gt;/share/kvirc/3.2[.revision[.svn]]/defscript/default.kvs.</p>";

	foreach($scripts as $key => $value){
		if(fmod($key,2)==0)
			echo "<table class=\"pair\">";
		else echo "<table class=\"despair\">";

		echo "<tr class=\"head\"><td colspan=\"2\"><b>".$value['script']."</b></td></tr>";

		echo "<tr>";
			echo "<td class=\"data\">".$template['custom']['author'].":</td>";
			if($value['mail']!="")
				echo "<td><a href=\"mailto:".$value['mail']."\">".$value['author']."</a></td>";
			else echo "<td>".$value['author']."</td>";
		echo "</tr>";

		echo "<tr>";
			echo "<td class=\"data\">".$template['custom']['description'].":</td>";
			echo "<td>".$value['desc']."</td>";
		echo "</tr>";

		echo "<tr>";
			echo "<td class=\"data\">".$template['custom']['homepage'].":</td>";
			echo "<td><a href=\"".$value['home']."\">".basename($value['home'])."</a></td>";
		echo "</tr>";

		echo "</table>";
	}
echo "</div>";
?>
