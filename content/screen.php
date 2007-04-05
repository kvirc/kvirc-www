<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

$page=trim(strip_tags(addslashes($_GET['page'])));
if(!$page || !is_numeric($page))
	$page=count($screen);

echo "<h1 class=\"pagetitle\">".$template['screen']['title']."</h1>";
echo "<div class=\"column1-unit\">";
echo "<p>".$template['screen']['text']." <a href=\"mailto:hellvis69@altervista.REMOVE.THE.ANTISPAM.WORDS.org?subject=New Screenshot for the site\">HelLViS69</a>.</p>";
echo "<h1>".$screen[$page][0]."</h1>";

for($i=count($screen[$page])-1;$i>0;$i--){
	if(fmod($i,2)!=0)
		echo "<div class=\"screen\"><div class=\"left\">";
	else echo "<div class=\"right\">";

	echo "<a href=\"".$screen[$page][$i]['img']."\"><img src=\"".$screen[$page][$i]['thumb']."\" alt=\"".strip_tags($screen[$page][$i]['desc'])."\" /></a><br />";
	echo $screen[$page][$i]['desc'];

	echo "</div>";

	// if the object is on the right, we have to close the container screen
	if(fmod($i,2)==0)
		echo "</div>";

	// check for last element on the left: we have to close the container screen
	if($i==1)
		echo "</div>";
}

echo "</div><br /><br />";

$next=$page-1;
$prev=$page+1;

if($prev<=count($screen))
	echo "<b>[</b><a href=\"?id=screen&amp;lang=$lang&amp;page=$prev\">".$template['screen']['prev']."</a><b>]</b>";

echo "&nbsp;";

if($next>0)
	echo "<b>[</b><a href=\"?id=screen&amp;lang=$lang&amp;page=$next\">".$template['screen']['next']."</a><b>]</b>";
?>
