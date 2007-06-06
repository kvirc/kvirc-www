<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

$numAddons=0;
$version=trim(strip_tags(addslashes($_GET['version'])));
if(!$version || !eregi("^[0-9]{1,}\.[0-9]{1,}\.[0-9]{1,}$",$version))
	$version="3.2.1";

echo "<div class=\"title\">".$template['addons']['title']."</div>";
echo "<div class=\"text\">";
	echo $template['addons']['text1'].":<br />";

	echo "<form method=\"get\" action=\"\">";
		echo "<p>";
		echo "<input type=\"hidden\" name=\"id\" value=\"addons\" />";
		echo "<input type=\"hidden\" name=\"lang\" value=\"$lang\" />";
		echo "<select name=\"version\">";
			foreach($availVersions as $KVIrcVersion){
				if($KVIrcVersion==$version)
					echo "<option value=\"$KVIrcVersion\" selected=\"selected\">$KVIrcVersion</option>";
				else echo "<option value=\"$KVIrcVersion\">$KVIrcVersion</option>";
			}
		echo "</select>";
		echo "<input type=\"submit\" value=\"Ok\" />";
		echo "</p>";
	echo "</form>";

	echo $template['addons']['text2'].":<br />";
	echo "<ul>";
		echo "<li>".$template['addons']['tree1']."</li>";
		echo "<li>".$template['addons']['tree2']."</li>";
		echo "<li>".$template['addons']['tree3']."</li>";
		echo "<li>".$template['addons']['tree4']."</li>";
	echo "</ul>";

	foreach($addons as $key => $value){
		if(checkVersion($version,$value['min'],$value['max'])){
			if(fmod($key,2)==0)
				echo "<table class=\"scriptNotCxt\">";
			else echo "<table class=\"scriptCxt\">";

			echo "<tr><td colspan=\"2\"><b>".$value['name']."</b> ".$value['ver']."</td></tr>";

			echo "<tr>";
				echo "<td><em>".$template['custom']['author'].":</em></td>";
				echo "<td>".$value['author']."</td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td><em>".$template['custom']['description'].":</em></td>";
				echo "<td>".$value['desc']."</td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td><em>".$template['custom']['download'].":</em></td>";
				echo "<td><a href=\"".$value['url']."\">".basename($value['url'])."</a></td>";
			echo "</tr>";

			echo "</table>";
		}

		$numAddons++;
	}

	if($numAddons==0) echo $template['addons']['sorry'];

echo "</div>";
?>