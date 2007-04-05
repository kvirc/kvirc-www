<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['snapshots']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<p>".$template['snapshots']['text1']."</p>";
	echo "<p>".$template['snapshots']['text2']."</p>";
	echo "<p>".$template['snapshots']['text3']."</p>";
echo "</div>";
?>