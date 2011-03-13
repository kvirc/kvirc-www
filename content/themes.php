<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

$path="img/themes";
$dpath.="/themes";

echo "<h1 class=\"pagetitle\">".$template['themes']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<br /><h3>".$template['themes']['text1'].".</h3><br />";

	echo "<ul class=\"list\">";
		echo "<li><b>".$template['themes']['text2a']."?</b>";
			echo "<ol>";
			echo "<li>".$template['themes']['text2b1'].".</li>";
			echo "<li>".$template['themes']['text2b2'].".</li>";
			echo "<li>".$template['themes']['text2b3'].".</li>";
			echo "<li>".$template['themes']['text2b4'].".</li>";
			echo "<li>".$template['themes']['text2b5']." :)</li>";
			echo "</ol></li>";

		echo "<li><b>".$template['themes']['text3a']."?</b><br />";
		echo $template['themes']['text3b1']." <a href=\"$dpath/themes.howto.txt\">".$template['themes']['text3b2']."</a> ".$template['themes']['text3b3']." <a href=\"http://kvirc.virg0.org/docs/themes.howto_it.pdf\">".$template['themes']['text3b2']."</a>.<br />";
		echo $template['themes']['text3b4'].".</li>";

		echo "<li><b>".$template['themes']['text4a']."?</b><br />";
		echo $template['themes']['text4b']." <a href=\"mailto:hellvis69 [at] gmail [dot] com\">HelLViS69</a> ".$template['themes']['text4c'].".</li>";
	echo "</ul>";

	echo "<p>".$template['themes']['text5']."</p>";

$rthemes = array_reverse($themes); // newer themes go first

$bInLeftColumn = false;

foreach($rthemes as $value)
{
	if($bInLeftColumn)
		echo "<div class=\"right\">";
	else
		echo "<div class=\"split\"><div class=\"left\">";

	$bInLeftColumn = !$bInLeftColumn;

	// We have an array of version number
	if(is_array($value['version']) && is_array($value['download']))
		echo "<h1>".$value['name']." ".$value['version'][0]." &amp; ".$value['version'][1]."</h1>";
	else echo "<h1>".$value['name']." ".$value['version']."</h1>";

	echo "<div class=\"img\"><a href=\"$path/".$value['screen']."\"><img src=\"$path/".$value['thumb']."\" alt=\"".$template['themes']['screenshot']."\" /></a></div>";

	echo "<div class=\"desc\">";
	echo "<p>";
	// We have a mail address
	if($value['mail']!="")
		echo "<b>".$template['custom']['author'].": </b><a href=\"mailto:".$value['mail']."\">".$value['author']."</a><br />";
	else echo "<b>".$template['custom']['author'].": </b>".$value['author']."<br />";

	echo "<b>".$template['custom']['description'].": </b>".$value['desc']."<br />";

	// We have an homepage
	if($value['home']!="")
		echo "<a href=\"".$value['home']."\">".$template['custom']['homepage']."</a><br />";

	// We have an array of download file
	if(is_array($value['version']) && is_array($value['download']))
		echo "<a href=\"$dpath/".$value['download'][0]."\">".$template['custom']['download']."</a> - <a href=\"$dpath/".$value['download'][1]."\">".$template['custom']['download']."</a>";
	else echo "<a href=\"$dpath/".$value['download']."\">".$template['custom']['download']."</a>";

	// We have a bigger theme
	if(isset($value['downbig'])&&($value['downbig']!=""))
		echo " - <a href=\"$dpath/".$value['downbig']."\">".$template['custom']['downbig']."</a>";

	echo "</p>";
	echo "</div>";

	// close left or right div
	echo "</div>";

	// if the object is on the right or if it's the last, we have to close the container split
	if(!$bInLeftColumn)
		echo "</div>";
}

if($bInLeftColumn)
	echo "</div>";


echo "</div>";
?>
