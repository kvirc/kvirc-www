<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['svn']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<p>".$template['svn']['text1']."</p>";

	echo "<code>svn co https://svn.kvirc.de/svn/trunk/kvirc</code><br /><br />";
		
	echo "<p>".$template['svn']['text2']."</p>";
		
	echo "<code>svn co https://svn.kvirc.de/svn/trunk/modules</code><br /><br />";

	echo "<p>".$template['svn']['text3']."</p>";

	echo "<code>cd kvirc/</code><br /><br />";

	echo "<p>".$template['svn']['text4'];
echo "</div>";
?>