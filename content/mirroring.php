<?php
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['mirror']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<br /><h3>".$template['mirror']['text1']."</h3>";

	echo "<p>".$template['mirror']['text2']."<br />";
	echo "<b>".$template['mirror']['text3']."!</b></p>";

	echo "<h1>".$template['mirror']['title2']."</h1>";

	echo "<p><b>".$template['mirror']['tree'].":</b></p>";

	echo "<ul class=\"list\">";
		echo "<li>".$template['mirror']['tree1']."</li>";
		echo "<li><a href=\"http://www.gnu.org/software/wget/wget.html\">wget</a></li>";
		echo "<li>".$template['mirror']['tree2']."</li>";
	echo "</ul><br />";

	echo "<p><b>".$template['mirror']['text4'].":</b></p>";

	echo "<p>".$template['mirror']['text5']." <a href=\"http://www.gnu.org/software/wget/wget.html\">wget</a><br />";
	echo $template['mirror']['text6']."</p>";

	echo "<code>";
	echo "cd /".$template['mirror']['text7']."/pub/kvirc/ &amp;&amp; wget --mirror -nH --cut-dirs=2 ftp://ftp.kvirc.net/pub/kvirc";
	echo "</code>";

	echo "<p>".$template['mirror']['text8']."</p>";

	echo "<p>".$template['mirror']['text9']."</p>";
	echo "<code>30 6 * * * \$HOME/bin/cronjob >> \$HOME/cronjoblog 2>&1</code>";

	echo "<p>".$template['mirror']['text10a']." \"\$HOME/bin/cronjob >> \$HOME/cronjoblog 2>&amp;1\" ".$template['mirror']['text10b']."</p>";

	echo "<p>".$template['mirror']['text11a']." \$HOME/bin/cronjob ".$template['mirror']['text11b']."</p>";

	echo "<code>";
	echo "#!/bin/bash<br />";
	echo "cd /".$template['mirror']['text12']."/pub/kvirc/ &amp;&amp; wget --mirror -nH --cut-dirs=2 ftp://ftp.kvirc.net/pub/kvirc/";
	echo "</code>";

	echo "<p>".$template['mirror']['text13']."</p>";
	echo "<p>".$template['mirror']['text14']."</p>";
echo "</div>";
?>