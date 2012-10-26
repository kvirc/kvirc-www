<?php 
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['faq']['title']."</h1>";
echo "<div class=\"column1-unit\">";

	echo "<ul class=\"list\">";
		echo "<br />";
		echo "<li><b>Q: ".$template['faq']['text1a']."?</b><br />";
		echo "A: ".$template['faq']['text1b']."</li>";

		echo "<li><b>Q: ".$template['faq']['text2a']."!</b><br />";
		echo "A: ".$template['faq']['text2b'].".</li>";

		echo "<li><b>Q: ".$template['faq']['text3a']."</b><br />";
		echo "A: ".$template['faq']['text3b1'];
	        echo "<code># ping6 www.6bone.net</code>";
		echo $template['faq']['text3b2'].":";
		echo "<code>/echo \$features</code>";
		echo $template['faq']['text3b3'].".</li>";

		echo "<li><b>Q: ".$template['faq']['text4a']."?</b><br />";
		echo "A: ".$template['faq']['text4b1'].":<br />";
		echo "<ol>";
			echo "<li>".$template['faq']['text4b2']."</li>";

			echo "<li>".$template['faq']['text4b3']."</li>";
		echo "</ol></li>";

		echo "<li><b>Q: ".$template['faq']['text5a']."</b><br />";
		echo "A: ".$template['faq']['text5b'].".</li>";

		echo "<li><b>Q: ".$template['faq']['text6a']."?</b><br />";
		echo "A: ".$template['faq']['text6b1'];
		echo "<code>/server -s &lt;servername&gt;</code>";
		echo $template['faq']['text6b2'];
		echo "<code>/echo \$features</code>";
		echo $template['faq']['text6b3']."</li>";

		echo "<li><b>Q: ".$template['faq']['text7a']."?</b><br />";
		echo "A: <code>/dcc.chat -s &lt;nickname&gt;</code> ".$template['faq']['text7b'].".</li>";

		echo "<li><b>Q: ".$template['faq']['text8a']."?</b><br />";
		echo "A: ".$template['faq']['text8b'].".</li>";

		echo "<li><b>Q: ".$template['faq']['text9a']."?</b><br />";
		echo "A: ".$template['faq']['text9b'];
		echo "<code>perl CA.pl -newcert</code></li>";

		echo "<li><b>Q: ".$template['faq']['text10a']."</b><br />";
		echo "A: ".$template['faq']['text10b'].".</li>";

		echo "<li><b>Q: ".$template['faq']['text11a']."</b><br />";
		echo "A: ".$template['faq']['text11b'].".</li>";

		echo "<li><b>Q: ".$template['faq']['text12a']."</b><br />";
		echo "A: ".$template['faq']['text12b'].".</li>";

		echo "<li><b>Q: ".$template['faq']['text13a']."</b><br />";
		echo "A: ".$template['faq']['text13b'].".</li>";

		echo "<li><b>Q: ".$template['faq']['text14a']."</b><br />";
		echo "A: ".$template['faq']['text14b'].".</li>";

		echo "<li><b>Q: ".$template['faq']['text15a']."</b><br />";
		echo "A: ".$template['faq']['text15b']."</li>";

		echo "<li><b>Q: ".$template['faq']['text16a']."</b><br />";
		echo "A: ".$template['faq']['text16b1'].".<br />";
		echo "<ol>";
			echo "<li>".$template['faq']['text16b1a'].".</li>";

			echo "<li>".$template['faq']['text16b1b'].".</li>";

			echo "<li>".$template['faq']['text16b1c']."...</li>";
		echo "</ol></li>";

		echo "<li><b>Q: ".$template['faq']['text17a']."</b><br />";
		echo "A: ".$template['faq']['text17b'];
		echo "<code>/url.unload</code></li>";

		echo "<li><b>Q: ".$template['faq']['text18a']."</b><br />";
		echo "A: ".$template['faq']['text18b'].".</li>";
	echo "</ul>";
	
	echo "<br/>";
	
	echo "<strong>".$template['faq']['faqonwiki']."</strong>";
	
echo "</div>";
?>