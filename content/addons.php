<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

$dpath.="/scripts";
$numAddons=0;
$version=trim(strip_tags(addslashes($_GET['version'])));
if(!$version || !eregi("^[0-9]{1,}\.[0-9]{1,}\.[0-9]{1,}$",$version))
	$version="4.0.0";

echo "<h1 class=\"pagetitle\">".$template['addons']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<br /><h3>".$template['addons']['text1']."</h3>";

	echo "<p>".$template['addons']['text1b']."</p>";

	echo "<form method=\"get\" action=\"\">";
		echo "<p>";
		echo "<input type=\"hidden\" name=\"id\" value=\"addons\" />";
		echo "<input type=\"hidden\" name=\"lang\" value=\"$lang\" />";
		echo "<select name=\"version\" onchange=\"this.form.submit();\">";
			foreach($availVersions as $KVIrcVersion)
			{
				if($KVIrcVersion==$version)
					echo "<option value=\"$KVIrcVersion\" selected=\"selected\">$KVIrcVersion</option>";
				else echo "<option value=\"$KVIrcVersion\">$KVIrcVersion</option>";
			}
		echo "</select>";
		echo "<input type=\"submit\" value=\"OK\" />";
		echo "</p>";
	echo "</form>";

	echo "<p>".$template['addons']['text2'].":</p>";
	echo "<ul class=\"list\">";
		echo "<li>".$template['addons']['tree1']."</li>";
		echo "<li>".$template['addons']['tree2']."</li>";
		echo "<li>".$template['addons']['tree3']."</li>";
		echo "<li>".$template['addons']['tree4']."</li>";
	echo "</ul>";

	foreach($addons as $key => $value)
	{
		if(checkVersion($version,$value['min'],$value['max']))
		{
			if(fmod($key,2)==0)
				echo "<table class=\"pair\">";
			else echo "<table class=\"despair\">";

			echo "<tr class=\"head\"><td colspan=\"2\"><b>".$value['name']."</b> ".$value['ver']."</td></tr>";

			echo "<tr>";
				echo "<td class=\"data\">".$template['custom']['author'].":</td>";
				echo "<td>".$value['author']."</td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td class=\"data\">".$template['custom']['description'].":</td>";
				echo "<td>".$value['desc']."</td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td class=\"data\">".$template['custom']['download'].":</td>";
				echo "<td><a href=\"$dpath/".$value['url']."\">".$value['url']."</a></td>";
			echo "</tr>";

			echo "</table>";
		}

		$numAddons++;
	}

	if($numAddons==0) echo $template['addons']['sorry'];

echo "</div>";
?>