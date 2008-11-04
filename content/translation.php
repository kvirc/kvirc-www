<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['translation']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<br /><h3>".$template['translation']['text1']."</h3>";
	echo "<p>".$template['translation']['text2']."</p>";
	echo "<p>".$template['translation']['text3']."</p>";
	echo "<p>".$template['translation']['text4']."</p>";
	?>
	<ul>
		<?
		foreach($translators as $key => $value)
		{
			echo "<img src=\"./img/flags/".$value['flag'].".png\" alt=\"".$value['lang']."\" title=\"".$value['lang']."\" />";
			echo "<li>";

			if(is_array($value['nick']))
			{
				$count=count($value['nick']);
				for($i=0;$i<$count;$i++){
					if($value['mail'][$i]!="") echo "<a href=\"mailto:".$value['mail'][$i]."\">".$value['nick'][$i]."</a>";
					else echo $value['nick'][$i];

					if($i<$count-1) echo ", ";
				}
			} else {
				if($value['mail']!="") echo "<a href=\"mailto:".$value['mail']."\">".$value['nick']."</a>";
				else echo $value['nick'];
			}

			if(isset($value['unmain']) && ($value['unmain'] == 1))
			{
				if($value['nick'] != "") echo " - ";

				echo "<b>".$template['translation']['text4a']."</b>";
			}

			echo "</li>";
		}
		?>
	</ul>

	<?
	echo "<p>".$template['translation']['text4b']."</p>";

	echo "<p>".$template['translation']['text5a']." <a href=\"/?id=mailinglist&amp;lang=$lang\">".$template['index']['ml']."</a> ".$template['translation']['text5b']."</p>";

	echo "<hr />";
	echo "<b>".$template['translation']['text6']."</b><br />";
	echo "<hr />";

	echo "<h1>".$template['translation']['step']." 0: ".$template['translation']['text7']."</h1>";
	echo "<p>".$template['translation']['text8a']." <a href=\"?id=svn&amp;lang=$lang\">http://www.kvirc.net/?id=svn</a>.<br />".$template['translation']['text8b']." <code>kvirc/po/</code>";

	echo "<h1>".$template['translation']['step']." 1: ".$template['translation']['text9']."</h1>";
	echo "<p>".$template['translation']['text10a']." <a href=\"http://sourceforge.net/projects/translation/\">".$template['translation']['text10b']."</a>.<br />".$template['translation']['text10c']."\"it\", \"en\", \"hu\" or \"pt_BR\".</p>";

	echo "<h1>".$template['translation']['step']." 2: ".$template['translation']['text11']."</h1>";
	echo "<p>".$template['translation']['text12'].".</p>";
	?>

	<code>
	# cd kvirc/po/kvirc<br />
	# make messages-extract
	</code>
	<?echo "<p>".$template['translation']['text13']."</p>";?>

	<code># mv kvirc.pot kvirc_xxx.po</code>

	<?
	echo "<h1>".$template['translation']['step']." 3: ".$template['translation']['text14']."</h1>";
	echo "<p>".$template['translation']['text15a']."</p>";
	echo "<p>".$template['translation']['text15b']."</p>";

	echo "<code>";
	echo "#: ".$template['translation']['text100a']."<br />";
	echo "msgid \"".$template['translation']['text100b']."\"<br />";
	echo "msgstr \"".$template['translation']['text100c']."\"";
	echo "</code>";

	echo "<p>".$template['translation']['text16']."</p>";
	echo "<p>".$template['translation']['text17']."</p>";

	echo "<h1>".$template['translation']['step']." 4: ".$template['translation']['text18']."</h1>";
	echo "<p>".$template['translation']['text19']."</p>";
	echo "<p>".$template['translation']['text20']."</p>";
	echo "<p>".$template['translation']['text21']."</p>";
	?>
	<code>
	#./autogen.sh<br />
	#./configure
	</code>
	<?
	echo "<p>".$template['translation']['text22'].".</p>";

	echo "<h1>".$template['translation']['step']." 5: ".$template['translation']['text23']."</h1>";
	echo "<p>".$template['translation']['text24'].".</p>";
	?>
	<code>
	# export LANG="xxx"<br />
	# kvirc
	</code>
	<?
	echo "<p>".$template['translation']['text25']."</p>";

	echo "<h1>".$template['translation']['step']." 6: ".$template['translation']['text26']."</h1>";
	echo "<p>".$template['translation']['text27']."</p>";
	echo "<code># make messages-update</code>";
	echo "<p>".$template['translation']['text28']."</p>";

	echo "<h1>".$template['translation']['text29'].":</h1>";
	echo "<p>".$template['translation']['text30']."</p>";
	echo "<p>".$template['translation']['text31']."</p>";
	echo "<p>".$template['translation']['text32a']." <a href=\"mailto:pragma [at] kvirc [dot] net\">pragma [at] kvirc [dot] net</a> ".$template['translation']['text32b']."</p>";

	echo "<p>".$template['translation']['text33']."<br />Szymon Stefanek</p>";
echo "</div>";
?>