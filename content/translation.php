<?php
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
		<?php
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

				echo "<b>".$template['translation']['text5']."</b>";
			}

			echo "</li>";
		}
		?>
	</ul>

	<?php
	echo "<p>".$template['translation']['text6a']." <a href=\"/?id=mailinglist&amp;lang=$lang\">".$template['index']['ml']."</a> ".$template['translation']['text6b']."</p>";

	echo "<hr />";
	echo "<b>".$template['translation']['text7']."</b><br />";
	echo "<hr />";

	echo "<h1>".$template['translation']['step']." 0: ".$template['translation']['text8']."</h1>";
	echo "<p>".$template['translation']['text9a']." <a href=\"?id=git&amp;lang=$lang\">http://www.kvirc.net/?id=git</a>.<br />".$template['translation']['text9b']." kvirc/po/";

	echo "<h1>".$template['translation']['step']." 1: ".$template['translation']['text10']."</h1>";
	echo "<p>".$template['translation']['text11'];

	echo "<h1>".$template['translation']['step']." 2: ".$template['translation']['text12']."</h1>";
	echo "<p>".$template['translation']['text13']." <a href=\"javascript:opendoc('http://sourceforge.net/projects/translation');\">http://sourceforge.net/projects/translation</a>.<br />".$template['translation']['text14']."\"it\", \"en\", \"hu\" or \"pt_BR\".</p>";

	echo "<h1>".$template['translation']['step']." 3: ".$template['translation']['text15']."</h1>";
	echo "<p>".$template['translation']['text16']."</p>";
	echo "<code># make messages-extract</code>";
	echo "<p>".$template['translation']['text17']."</p>";
	?>
	<code>
	# cd po/core/kvirc<br />
	# cp kvirc.pot kvirc_xxx.po<br />
	# cd ../kvs<br />
	# cp kvs.pot kvs_xxx.po<br />
	# cd ../../modules/about<br />
	# cp about.pot about_xxx.po<br />
	# cd ../modules/addon<br />
	# cp addon.pot addon_xxx.po
	</code>
	<?php
	echo "<p>".$template['translation']['text18']."</p>";

	echo "<h1>".$template['translation']['step']." 4: ".$template['translation']['text19']."</h1>";
	echo "<p>".$template['translation']['text20']."</p>";
	echo "<p>".$template['translation']['text21']."</p>";
	echo "<p>".$template['translation']['text22']."</p>";

	echo "<code>";
	echo "#: ".$template['translation']['text23a']."<br />";
	echo "msgid \"".$template['translation']['text23b']."\"<br />";
	echo "msgstr \"".$template['translation']['text23c']."\"";
	echo "</code>";
	echo "<p>".$template['translation']['text24']."</p>";
	echo "<p>".$template['translation']['text25']."</p>";

	echo "<h1>".$template['translation']['step']." 5: ".$template['translation']['text26']."</h1>";
	echo "<p>".$template['translation']['text27']."</p>";
	echo "<p>".$template['translation']['text28']."</p>";

	echo "<h1>".$template['translation']['step']." 6: ".$template['translation']['text29']."</h1>";
	echo "<p>".$template['translation']['text30']."</p>";
	echo "<p>".$template['translation']['text31']."</p>";
	echo "<code># LANG=\"xxx\" kvirc</code>";
	echo "<p>".$template['translation']['text32']."</p>";

	echo "<h1>".$template['translation']['step']." 7: ".$template['translation']['text33']."</h1>";
	echo "<p>".$template['translation']['text34']."</p>";
	echo "<code># make messages-update</code>";
	echo "<p>".$template['translation']['text35']."</p>";

	echo "<h1>".$template['translation']['text36'].":</h1>";
	echo "<p>".$template['translation']['text37']."</p>";
	echo "<p>".$template['translation']['text38']."</p>";
	echo "<p>".$template['translation']['text39']."</p>";

	echo "<p>".$template['translation']['text40']."<br />Szymon Stefanek</p>";
echo "</div>";
?>