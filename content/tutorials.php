<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

$dpath.="/tutorials";

echo "<h1 class=\"pagetitle\">".$template['tutorials']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<h1>".$template['tutorials']['text1a']."</h1>";
	echo "<h3>".$template['tutorials']['text1b'].".</h3>";
	echo "<ul>";
		echo "<li><img src=\"img/flags/Italy.png\" alt=\"".$template['index']['italian']."\" title=\"".$template['index']['italian']."\" />&nbsp;<a href=\"$dpath/AOS_it.zip\">".$template['tutorials']['archive']."</a>, ".$template['tutorials']['madeby']." Grifisx</li><br />";

		echo "<li><img src=\"img/flags/Italy.png\" alt=\"".$template['index']['italian']."\" title=\"".$template['index']['italian']."\" />&nbsp;<a href=\"$dpath/AOS_Vol00_Language_introduction_it.pdf\">Vol 00</a>: ".$template['tutorials']['tree1c'].", ".$template['tutorials']['madeby']." Grifisx</li>";
		echo "<li><img src=\"img/flags/United-States.png\" alt=\"".$template['index']['english']."\" title=\"".$template['index']['english']."\" />&nbsp;<a href=\"$dpath/AOS_Vol00_Language_introduction_en.pdf\">Vol 00</a>: ".$template['tutorials']['tree1c'].", ".$template['tutorials']['madeby']." <a href=\"mailto:cle [at] virg0 [dot] org\">etherea`</a> - <b>".$template['tutorials']['old']."</b></li><br />";

		echo "<li><img src=\"img/flags/Italy.png\" alt=\"".$template['index']['italian']."\" title=\"".$template['index']['italian']."\" />&nbsp;<a href=\"$dpath/AOS_Vol01_Cycles_conditions_and_aliases_it.pdf\">Vol 01</a>: ".$template['tutorials']['tree1d'].", ".$template['tutorials']['madeby']." Grifisx</li>";
		echo "<li><img src=\"img/flags/United-States.png\" alt=\"".$template['index']['english']."\" title=\"".$template['index']['english']."\" />&nbsp;<a href=\"$dpath/AOS_Vol01_Cycles_conditions_and_aliases_en.pdf\">Vol 01</a>: ".$template['tutorials']['tree1d'].", ".$template['tutorials']['madeby']." <a href=\"mailto:cle [at] virg0 [dot] org\">etherea`</a> - <b>".$template['tutorials']['old']."</b></li><br />";

		echo "<li><img src=\"img/flags/Italy.png\" alt=\"".$template['index']['italian']."\" title=\"".$template['index']['italian']."\" />&nbsp;<a href=\"$dpath/AOS_Vol02_Arrays_dictionaries_objects_and_classes_it.pdf\">Vol 02</a>: ".$template['tutorials']['tree1e'].", ".$template['tutorials']['madeby']." Grifisx</li>";
		echo "<li><img src=\"img/flags/United-States.png\" alt=\"".$template['index']['english']."\" title=\"".$template['index']['english']."\" />&nbsp;<a href=\"$dpath/AOS_Vol02_Arrays_dictionaries_objects_and_classes_en.pdf\">Vol 02</a>: ".$template['tutorials']['tree1e'].", ".$template['tutorials']['madeby']." <a href=\"mailto:cle [at] virg0 [dot] org\">etherea`</a> - <b>".$template['tutorials']['old']."</b></li><br />";

		echo "<li><img src=\"img/flags/Italy.png\" alt=\"".$template['index']['italian']."\" title=\"".$template['index']['italian']."\" />&nbsp;<a href=\"$dpath/AOS_Vol03_Events_and_popups_it.pdf\">Vol 03</a>: ".$template['tutorials']['tree1f'].", ".$template['tutorials']['madeby']." Grifisx</li>";
		echo "<li><img src=\"img/flags/United-States.png\" alt=\"".$template['index']['english']."\" title=\"".$template['index']['english']."\" />&nbsp;<a href=\"$dpath/AOS_Vol03_Events_and_popups_en.pdf\">Vol 03</a>: ".$template['tutorials']['tree1f'].", ".$template['tutorials']['madeby']." <a href=\"mailto:cle [at] virg0 [dot] org\">etherea`</a> - <b>".$template['tutorials']['old']."</b></li><br />";

		echo "<li><img src=\"img/flags/Italy.png\" alt=\"".$template['index']['italian']."\" title=\"".$template['index']['italian']."\" />&nbsp;<a href=\"$dpath/AOS_Vol04_Graphical_objects_and_layout_it.pdf\">Vol 04</a>: ".$template['tutorials']['tree1g'].", ".$template['tutorials']['madeby']." Grifisx</li>";
		echo "<li><img src=\"img/flags/United-States.png\" alt=\"".$template['index']['english']."\" title=\"".$template['index']['english']."\" />&nbsp;<a href=\"$dpath/AOS_Vol04_Graphical_objects_and_layout_en.pdf\">Vol 04</a>: ".$template['tutorials']['tree1g'].", ".$template['tutorials']['madeby']." <a href=\"mailto:sykes [at] dubh [dot] id.au\">sykes</a> - <b>".$template['tutorials']['old']."</b></li><br />";

		echo "<li><img src=\"img/flags/Italy.png\" alt=\"".$template['index']['italian']."\" title=\"".$template['index']['italian']."\" />&nbsp;<a href=\"$dpath/AOS_Vol05_The_wrapper_class_it.pdf\">Vol 05</a>: ".$template['tutorials']['tree1h'].", ".$template['tutorials']['madeby']." Grifisx</li><br />";

		echo "<li><img src=\"img/flags/Italy.png\" alt=\"".$template['index']['italian']."\" title=\"".$template['index']['italian']."\" />&nbsp;<a href=\"$dpath/AOS_Vol06_Slots_and_signals_it.pdf\">Vol 06</a>: ".$template['tutorials']['tree1i'].", ".$template['tutorials']['madeby']." Grifisx</li><br />";

		echo "<li><img src=\"img/flags/Italy.png\" alt=\"".$template['index']['italian']."\" title=\"".$template['index']['italian']."\" />&nbsp;<a href=\"$dpath/AOS_Vol07_Raw_event_and_actions_it.pdf\">Vol 07</a>: ".$template['tutorials']['tree1j'].", ".$template['tutorials']['madeby']." Grifisx</li><br />";

		echo "<li><img src=\"img/flags/Italy.png\" alt=\"".$template['index']['italian']."\" title=\"".$template['index']['italian']."\" />&nbsp;<a href=\"$dpath/AOS_Vol08_Sockets_and_perl_it.pdf\">Vol 08</a>: ".$template['tutorials']['tree1k'].", ".$template['tutorials']['madeby']." Grifisx</li><br />";
	echo "</ul>";

	echo "<h1>".$template['tutorials']['text2a']."</h1>";
	echo "<h3>".$template['tutorials']['text2b'].".</h3>";
	echo "<ul>";
	echo "<li><img src=\"img/flags/Italy.png\" alt=\"".$template['index']['italian']."\" title=\"".$template['index']['italian']."\" />&nbsp;<a href=\"$dpath/Win32_KVIrc_Compiling_it.pdf\">".$template['tutorials']['tutorial']."</a>, ".$template['tutorials']['madeby']." Grifisx.</li>";
	echo "<li><img src=\"img/flags/United-States.png\" alt=\"".$template['index']['english']."\" title=\"".$template['index']['english']."\" />&nbsp;<a href=\"$dpath/Win32_KVIrc_Compiling_en.pdf\">".$template['tutorials']['tutorial']."</a>, ".$template['tutorials']['madeby']." <a href=\"mailto:cle [at] virg0 [dot] org\">etherea`</a>.</li><br />";
	echo "</ul>";

	echo "<h1>".$template['tutorials']['text3a']."</h1>";
	echo "<h3>".$template['tutorials']['text3b']."</h3>";
	echo "<ul>";
		echo "<li><img src=\"img/flags/Germany.png\" alt=\"".$template['index']['german']."\" title=\"".$template['index']['german']."\" />&nbsp;<a href=\"$dpath/KVS_scripting_de.pdf\">".$template['tutorials']['tutorial']."</a>, ".$template['tutorials']['madeby']." <a href=\"mailto:kvirc [at] thexception [dot] net\">thexception</a>.</li><br />";
	echo "</ul>";
	
	echo "<h1>".$template['tutorials']['text4a']."</h1>";
	echo "<h3>".$template['tutorials']['text4b']."</h3>";
	echo "<ul>";
		echo "<li><img src=\"img/flags/Germany.png\" alt=\"".$template['index']['german']."\" title=\"".$template['index']['german']."\" />&nbsp;<a href=\"$dpath/Win32_KVIrc_Installation_de.pdf\">".$template['tutorials']['tutorial']."</a>, ".$template['tutorials']['madeby']." <a href=\"mailto:kvirc [at] thexception [dot] net\">thexception</a>.</li><br />";
	echo "</ul>";

	echo "<h1>".$template['tutorials']['text5a']."</h1>";
	echo "<h3>".$template['tutorials']['text5b']."</h3>";
	echo "<ul>";
		echo "<li><img src=\"img/flags/United-States.png\" alt=\"".$template['index']['english']."\" title=\"".$template['index']['english']."\" />&nbsp;<a href=\"$dpath/Themes_HowTo_en.pdf\">".$template['tutorials']['tutorial']."</a>, ".$template['tutorials']['madeby']." <a href=\"mailto:pragma [at] kvirc [dot] net\">Pragma</a>.</li>";
		echo "<li><img src=\"img/flags/Italy.png\" alt=\"".$template['index']['italian']."\" title=\"".$template['index']['italian']."\" />&nbsp;<a href=\"$dpath/Themes_HowTo_it.pdf\">".$template['tutorials']['tutorial']."</a>, ".$template['tutorials']['madeby']." <a href=\"mailto:cle [at] virg0 [dot] org\">etherea`</a>.</li><br />";
	echo "</ul>";

	echo "<h1>".$template['tutorials']['text6a']."</h1>";
	echo "<h3>".$template['tutorials']['text6b']."</h3>";
	echo "<ul>";
		echo "<li><img src=\"img/flags/Germany.png\" alt=\"".$template['index']['german']."\" title=\"".$template['index']['german']."\" />&nbsp;<a href=\"$dpath/Win32_Modify_Installer_de.pdf\">".$template['tutorials']['tutorial']."</a>, ".$template['tutorials']['madeby']." <a href=\"mailto:kvirc [at] thexception [dot] net\">thexception</a>.</li><br />";
	echo "</ul>";

	echo "<h1>".$template['tutorials']['text7a']."</h1>";
	echo "<h3>".$template['tutorials']['text7b']."</h3>";
	echo "<ul>";
		echo "<li><img src=\"img/flags/Germany.png\" alt=\"".$template['index']['german']."\" title=\"".$template['index']['german']."\" />&nbsp;<a href=\"$dpath/KVIrc_Registered_Users_de.pdf\">".$template['tutorials']['tutorial']."</a>, ".$template['tutorials']['madeby']." <a href=\"mailto:kvirc [at] thexception [dot] net\">thexception</a>.</li><br />";
	echo "</ul>";

	echo "<p>".$template['tutorials']['dropmail']." <a href=\"mailto:hell [at] hellvis69.netsons [dot] org\">HelLViS69</a> :)</p>";
echo "</div>";
?>