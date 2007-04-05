<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['tutorials']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<h1>".$template['tutorials']['text1a']."</h1>";
	echo "<h3>".$template['tutorials']['text1b'].".</h3>";
	?>
	<ul>
		<li><img src="img/flags/Italy.png" alt="<?echo $template['index']['italian'];?>" title="<?echo $template['index']['italian'];?>" />&nbsp;<a href="http://www.pragmaware.net/misc/AOS.zip"><?echo $template['tutorials']['archive']."</a>, ".$template['tutorials']['madeby'];?> Grifisx</li>
		<li><img src="img/flags/Italy.png" alt="<?echo $template['index']['italian'];?>" title="<?echo $template['index']['italian'];?>" />&nbsp;<a href="http://kvirc.virg0.org/docs/AOS_Vol.00(Introduzione%20al%20linguaggio).pdf">Vol 00</a>: <?echo $template['tutorials']['tree1c'].", ".$template['tutorials']['madeby'];?> Grifisx</li>
		<li><img src="img/flags/Italy.png" alt="<?echo $template['index']['italian'];?>" title="<?echo $template['index']['italian'];?>" />&nbsp;<a href="http://kvirc.virg0.org/docs/AOS_Vol.01(Cicli,%20condizioni%20e%20Alias).pdf">Vol 01</a>: <?echo $template['tutorials']['tree1d'].", ".$template['tutorials']['madeby'];?> Grifisx</li>
		<li><img src="img/flags/Italy.png" alt="<?echo $template['index']['italian'];?>" title="<?echo $template['index']['italian'];?>" />&nbsp;<a href="http://kvirc.virg0.org/docs/AOS_Vol.02(Oggetti,%20Classi,%20Array%20e%20dizionari%20).pdf">Vol 02</a>: <?echo $template['tutorials']['tree1e'].", ".$template['tutorials']['madeby'];?> Grifisx</li>
		<li><img src="img/flags/Italy.png" alt="<?echo $template['index']['italian'];?>" title="<?echo $template['index']['italian'];?>" />&nbsp;<a href="http://kvirc.virg0.org/docs/AOS_Vol.03(Eventi%20e%20Popup).pdf">Vol 03</a>: <?echo $template['tutorials']['tree1f'].", ".$template['tutorials']['madeby'];?> Grifisx</li>
		<li><img src="img/flags/Italy.png" alt="<?echo $template['index']['italian'];?>" title="<?echo $template['index']['italian'];?>" />&nbsp;<a href="http://kvirc.virg0.org/docs/AOS_Vol.04(Oggetti%20grafici%20e%20layout).pdf">Vol 04</a>: <?echo $template['tutorials']['tree1g'].", ".$template['tutorials']['madeby'];?> Grifisx</li>
		<li><img src="img/flags/Italy.png" alt="<?echo $template['index']['italian'];?>" title="<?echo $template['index']['italian'];?>" />&nbsp;<a href="http://kvirc.virg0.org/docs/AOS_Vol.05(La%20classe%20wrapper).pdf">Vol 05</a>: <?echo $template['tutorials']['tree1h'].", ".$template['tutorials']['madeby'];?> Grifisx</li>
		<li><img src="img/flags/Italy.png" alt="<?echo $template['index']['italian'];?>" title="<?echo $template['index']['italian'];?>" />&nbsp;<a href="http://kvirc.virg0.org/docs/AOS_Vol.06(SLOT%20e%20segnali).pdf">Vol 06</a>: <?echo $template['tutorials']['tree1i'].", ".$template['tutorials']['madeby'];?> Grifisx</li>
		<li><img src="img/flags/Italy.png" alt="<?echo $template['index']['italian'];?>" title="<?echo $template['index']['italian'];?>" />&nbsp;<a href="http://kvirc.virg0.org/docs/AOS_Vol.07(Raw%20Event%20e%20Action).pdf">Vol 07</a>: <?echo $template['tutorials']['tree1j'].", ".$template['tutorials']['madeby'];?> Grifisx</li>
		<li><img src="img/flags/Italy.png" alt="<?echo $template['index']['italian'];?>" title="<?echo $template['index']['italian'];?>" />&nbsp;<a href="http://kvirc.virg0.org/docs/AOS_Vol.08(Socket%20e%20%20Perl).pdf">Vol 08</a>: <?echo $template['tutorials']['tree1k'].", ".$template['tutorials']['madeby'];?> Grifisx</li>
	</ul>
	<ul>
		<li><img src="img/flags/United-States.png" alt="<?echo $template['index']['english'];?>" title="<?echo $template['index']['english'];?>" />&nbsp;<a href="http://kvirc.virg0.org/download/AOS_Vol.00(Introduction).pdf">Vol 00</a>: <?echo $template['tutorials']['tree1c'].", ".$template['tutorials']['madeby'];?> <a href="mailto:cle@virg0.REMOVE.THE.ANTISPAM.WORDS.org">etherea`</a></li>
		<li><img src="img/flags/United-States.png" alt="<?echo $template['index']['english'];?>" title="<?echo $template['index']['english'];?>" />&nbsp;<a href="http://kvirc.virg0.org/download/AOS_Vol.01(Cycle, Conditions and Aliases).pdf">Vol 01</a>: <?echo $template['tutorials']['tree1d'].", ".$template['tutorials']['madeby'];?> <a href="mailto:cle@virg0.REMOVE.THE.ANTISPAM.WORDS.org">etherea`</a></li>
		<li><img src="img/flags/United-States.png" alt="<?echo $template['index']['english'];?>" title="<?echo $template['index']['english'];?>" />&nbsp;<a href="http://kvirc.virg0.org/download/AOS_Vol.02(Objects, Classes, Arrays and Dictionaries).pdf">Vol 02</a>: <?echo $template['tutorials']['tree1e'].", ".$template['tutorials']['madeby'];?> <a href="mailto:cle@virg0.REMOVE.THE.ANTISPAM.WORDS.org">etherea`</a></li>
		<li><img src="img/flags/United-States.png" alt="<?echo $template['index']['english'];?>" title="<?echo $template['index']['english'];?>" />&nbsp;<a href="http://kvirc.virg0.org/download/AOS_Vol.03(Events and Popups).pdf">Vol 03</a>: <?echo $template['tutorials']['tree1f'].", ".$template['tutorials']['madeby'];?> <a href="mailto:cle@virg0.REMOVE.THE.ANTISPAM.WORDS.org">etherea`</a></li>
	</ul>

	<?
	echo "<h1>".$template['tutorials']['text2a']."</h1>";
	echo "<h3>".$template['tutorials']['text2b'].".</h3>";
	echo "<ul>";
	echo "<li><img src=\"img/flags/Italy.png\" alt=\"".$template['index']['italian']."\" title=\"".$template['index']['italian']."\" />&nbsp;<a href=\"http://www.barmes.org/kvirc/KVIrc_Tutorial/Win32_KVIrc_Compiling.pdf\">".$template['tutorials']['tutorial']."</a>, ".$template['tutorials']['madeby']." Grifisx.</li>";
	echo "<li><img src=\"img/flags/United-States.png\" alt=\"".$template['index']['english']."\" title=\"".$template['index']['english']."\" />&nbsp;<a href=\"http://kvirc.virg0.org/Misc%20Docs/Win32_KVIrc_Compiling_1.0_en.pdf\">".$template['tutorials']['tutorial']."</a>, ".$template['tutorials']['madeby']." <a href=\"mailto:cle@virg0.REMOVE.THE.ANTISPAM.WORDS.org\">etherea`</a>.</li>";
	echo "</ul>";

	echo "<h1>".$template['tutorials']['text3a']."</h1>";
	echo "<h3>".$template['tutorials']['text3b']."</h3>";
	echo "<ul>";
	echo "<li><img src=\"img/flags/Germany.png\" alt=\"".$template['index']['german']."\" title=\"".$template['index']['german']."\" />&nbsp;<a href=\"http://thexeption.no-ip.org/tutorials/kvs_einsteiger.pdf\">".$template['tutorials']['tutorial']."</a>, ".$template['tutorials']['madeby']." <a href=\"mailto:thex.email@googlemail.REMOVE.THE.ANTISPAM.WORDS.com\">thexception</a>.</li>";
	echo "</ul>";

	echo "<br /><p>".$template['tutorials']['dropmail']." <a href=\"mailto:hellvis69@netsons.REMOVE.THE.ANTISPAM.WORDS.org\">HelLViS69</a> :)</p>";
echo "</div>";
?>