<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

$page=trim(strip_tags(htmlentities($_GET['page'],ENT_QUOTES)));
if(!$page||!is_numeric($page)||($page>count($screen))||($page<1)) $page=count($screen);
$path="img/screenshots";

echo "<h1 class=\"pagetitle\">".$template['screen']['title']."</h1>";
echo "<div class=\"column1-unit\">";
echo "<p>".$template['screen']['text']." <a href=\"mailto:hellvis69 [at] gmail [dot] com?subject=Screenshot for KVIrc\">HelLViS69</a>.</p>";
echo "<h1>".$screen[$page][0]."</h1>";

for($i=count($screen[$page])-1,$key=1;$i>0;$i--,$key++)
{
	if(fmod($key,2)!=0)
		echo "<div class=\"split\"><div class=\"left\">";
	else echo "<div class=\"right\">";

	echo "<a href=\"$path/".$screen[$page][$i]['img']."\"><img src=\"$path/".$screen[$page][$i]['thumb']."\" alt=\"".strip_tags($screen[$page][$i]['desc'])."\" /></a><br />";
	echo "<div class=\"descc\">".$screen[$page][$i]['desc']."</div>";

	// close left or right div
	echo "</div>";

	// if the object is on the right or if it's the last, we have to close the container split
	if((fmod($key,2)==0) || ($i==1))
		echo "</div>";
}

echo "<br /><br />";

$next = $page-1;
$prev = $page+1;

if($prev <= count($screen))
	echo "<b>[</b><a href=\"?id=screen&amp;page=$prev&amp;lang=$lang\">".$template['screen']['prev']."</a><b>]</b>";

echo "&nbsp;";

if($next>0)
	echo "<b>[</b><a href=\"?id=screen&amp;page=$next&amp;lang=$lang\">".$template['screen']['next']."</a><b>]</b>";

echo "</div>";
?>
