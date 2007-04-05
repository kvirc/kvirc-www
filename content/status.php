<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['status']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<p>".$template['status']['text']."</p><br /><br /><br />";
	echo "<div class=\"center\"><img src=\"img/kvi_f1.png\" alt=\"KVIrc Formula 1\" /></div>";
echo "</div>";
?>