<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['welcome']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<p>".$template['welcome']['text']."</p>";

	echo "<div class=\"center\"><img src=\"img/keyhands.jpg\" alt=\"Using KVIrc\" /></div>";
echo "</div>";
?>