<?php
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['git']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<p>".$template['git']['text1']."</p>";

	echo "<code>git clone https://github.com/kvirc/KVIrc.git</code>";

	echo "<p>".$template['git']['text3']."</p>";

	echo "<code>cd KVIrc</code>";

	echo "<p>".$template['git']['text4'];
echo "</div>";
?>