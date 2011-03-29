<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

$dpath .= "addons";
$imgPath = "img/addons";
$numAddons = 0;
$version=trim(strip_tags(htmlentities($_GET['version'],ENT_QUOTES)));
if(!$version || !eregi("^[0-9]{1,}\.[0-9]{1,}\.[0-9]{1,}$",$version))
	$version=$current;

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
		if(!checkVersion($version,$value['min'],$value['max']))
			continue;

		if(fmod($key,2)==0)
			echo "<table class=\"pair\">";
		else echo "<table class=\"despair\">";

		echo "<tr class=\"head\"><td colspan=\"2\"><b>".$value['name']."</b> ".$value['ver']."</td></tr>";

		echo "<tr>";
			echo "<td class=\"data\">".$template['custom']['author'].":</td>";
			echo "<td>";
			if(is_array($value['author']))
			{
				$count = count($value['author']);
				for($i = 0; $i < $count; $i++)
				{
					if($value['mail'][$i] != "")
						echo "<a href=\"mailto:".$value['mail'][$i]."\">".$value['author'][$i]."</a>";
					else echo $value['author'][$i];

					if($i < $count-1) echo ", ";
				}
			} else {
				if($value['mail'] != "")
					echo "<a href=\"mailto:".$value['mail']."\">".$value['author']."</a>";
				else echo $value['author'];
			}
			echo "</td>";
		echo "</tr>";

		echo "<tr>";
			echo "<td class=\"data\">".$template['custom']['description'].":</td>";
			echo "<td>".$value['short']."</td>";
		echo "</tr>";

		echo "<tr>";
			echo "<td class=\"data\">".$template['custom']['download'].":</td>";
			echo "<td><a href=\"$dpath/".$value['url']."\">".$value['url']."</a></td>";
		echo "</tr>";

		echo "<tr>";
			echo "<td colspan=\"2\" class=\"details\">";
				$addon = "addon$key";
				echo "<p><a href=\"javascript:showAll('$addon');\">".$template['custom']['showhide']."</a></p>";
				echo "<div id=\"$addon\" class=\"hidden\">";
					echo "<p>".$value['desc']."</p>";
					echo "<p>";
					if(is_array($value['screen']))
					{
						$count = count($value['screen']);
						for($i = 0; $i < $count; $i++)
						{
							echo "<a href=\"javascript:opendoc('$imgPath/".$value['screen'][$i]."');\"><img src=\"$imgPath/thumb_".$value['screen'][$i]."\" alt=\"\" /></a>";

							if($i < $count-1) echo " ";
						}
					} else {
						echo "<a href=\"javascript:opendoc('$imgPath/".$value['screen']."');\"><img src=\"$imgPath/thumb_".$value['screen']."\" alt=\"\" /></a>";
					}
					echo "</p>";
				echo "</div>";
			echo "</td>";
		echo "</tr>";

		echo "</table>";

		$numAddons++;
	}

	if($numAddons==0) echo $template['addons']['sorry'];

echo "</div>";
?>