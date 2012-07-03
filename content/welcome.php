<?php 
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['welcome']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<p>".$template['welcome']['text']."</p>";
	echo "<p>&rsaquo;&rsaquo;&nbsp;<a href=\"?id=help&amp;lang=$lang\" title=\"".$template['welcome']['alttext']."\">".$template['welcome']['text2']."</a></p>";

	echo "<div class=\"center\"><img style=\"float: right; border: 0px;\" src=\"img/keyhands.jpg\" alt=\"Using KVIrc\" /></div>";
echo "</div>";
?>