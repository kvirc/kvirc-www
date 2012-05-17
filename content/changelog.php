<?php 
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">SVN ChangeLog</h1>";
echo "<div class=\"column1-unit\">";
	$fp=fopen('content/ChangeLog','r');
	echo "<p>".nl2br(fread($fp,filesize('content/ChangeLog')))."</p>";
echo "</div>";
?>
