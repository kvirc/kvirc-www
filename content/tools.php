<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

$dpath.="/tools";

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
			if(is_array($value['author'])){
				echo "<td>";
				$count=count($value['author']);
				for($i=0;$i<$count;$i++){
					if($value['mail'][$i]!="") echo "<a href=\"mailto:".$value['mail'][$i]."\">".$value['author'][$i]."</a>";
					else echo $value['author'][$i];

					if($i<$count-1) echo " &amp; ";
				}
				echo "</td>";
			} else {
				if($value['mail']!="") echo "<td><a href=\"mailto:".$value['mail']."\">".$value['author']."</a></td>";
				else echo "<td>".$value['author']."</td>";
			}
		echo "</tr>";

		echo "<tr>";
			echo "<td class=\"data\"><em>".$template['custom']['description'].":</em></td>";
			echo "<td>".$value['desc']."</td>";
		echo "</tr>";

		echo "<tr>";
			echo "<td class=\"data\"><em>".$template['custom']['download'].":</em></td>";
			echo "<td><a href=\"$dpath/".$value['url']."\">".$value['url']."</a></td>";
		echo "</tr>";

		echo "</table>";
	}
echo "</div>";
?>