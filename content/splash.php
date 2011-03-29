<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

$path="img/splashes";
?>
<style>
ul.gallery { margin:10px auto; }
ul.gallery img{ display:block; }
ul.gallery li {
	float:left;
	display:block;
	list-style:none;
	padding:0;
	margin-right:30px;
	margin-bottom:10px;
}
</style>
<?
echo "<h1 class=\"pagetitle\">".$template['splash']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<br /><h3>".$template['splash']['text']."</h3>";

	$rSplash = array_reverse($splash);
	foreach($rSplash as $key => $value)
	{
		echo "<h1>".$value['name']."</h1>";
		if($value['motd'] != "")
			echo "<h3><em>\"".$value['motd']."\"</em></h3>";

		if(is_array($value['screen']) && is_array($value['date']))
		{
			echo "<a href=\"javascript:opendoc('$path/".$value['screen'][0]."');\"><img src=\"$path/thumb_".$value['screen'][0]."\" alt=\"\" /></a>";
			echo "<p>".$template['splash']['date'].": ".$value['date'][0];
			if($value['present'] != "")
				echo "<br />".$template['splash']['in'].": ".$value['present'];
			echo "</p>";

			$screen = "screen$key";
			echo "<p><a href=\"javascript:showAll('$screen');\">".$template['custom']['showhide']."</a></p>";
			echo "<div id=\"$screen\" class=\"hidden\">";
				echo "<ul class=\"gallery\">";
				$iNumSplash = count($value['screen']);
				for($i = 1; $i < $iNumSplash; $i++)
				{
					echo "<li><a href=\"javascript:opendoc('$path/".$value['screen'][$i]."');\"><img src=\"$path/thumb_".$value['screen'][$i]."\" alt=\"\" /></a><br />";
					echo $template['custom']['version'].": ".substr($value['screen'][$i],0,-4)."<br />";
					echo $template['splash']['date'].": ".$value['date'][$i]."</li>";
				}
				echo "</ul>";
			echo "</div>";
		} else {
			echo "<a href=\"javascript:opendoc('$path/".$value['screen']."');\"><img src=\"$path/thumb_".$value['screen']."\" alt=\"\" /></a><br />";
		
			if($value['date'] != "")
				echo "<p>".$template['splash']['date'].": ".$value['date']."</p>";
			if($value['present'] != "")
				echo "<p>".$template['splash']['in'].": ".$value['present']."</p>";
		}
	}
echo "</div>";
?>