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
		<li><?echo $template['index']['bulgarian'];?>: <a href="mailto:bugar@developer.REMOVE.THE.ANTISPAM.WORDS.bg">Bugar</a></li>
		<!--<li><?echo $template['index']['croatian'];?>: <a href="mailto:">SpeedyGhost</a></li>-->
		<li><?echo $template['index']['czech'];?>: <a href="mailto:dusan@mirc.REMOVE.THE.ANTISPAM.WORDS.cz">Dusan Hokuv</a></li>
		<li><?echo $template['index']['dutch'];?>: <a href="mailto:balboy@kvirc.REMOVE.THE.ANTISPAM.WORDS.net">Balboy</a></li>
		<li><?echo $template['index']['french'];?>: <a href="mailto:ahinu.laman@gmail.REMOVE.THE.ANTISPAM.WORDS.com">Ahinu</a></li>
		<li><?echo $template['index']['german'];?>: <a href="mailto:crissi99@gmx.REMOVE.THE.ANTISPAM.WORDS.de">Christoph Thielecke</a></li>
		<li><?echo $template['index']['italian'];?>: <a href="mailto:nate@paranoici.REMOVE.THE.ANTISPAM.WORDS.org">Nate Grey</a>, <a href="mailto:hellvis69@netsons.REMOVE.THE.ANTISPAM.WORDS.org">HelLViS69</a>, <a href="mailto:cle@virg0.REMOVE.THE.ANTISPAM.WORDS.org">etherea`</a></li>
		<li><?echo $template['index']['polish'];?>: <a href="mailto:kgod@poczta.onet.REMOVE.THE.ANTISPAM.WORDS.pl">Krzysztof Godlewski</a></li>
		<li><?echo $template['index']['portuguese'];?>: <a href="mailto:mmodem00@netvisao.REMOVE.THE.ANTISPAM.WORDS.pt">Américo José Melo</a></li>
		<li><?echo $template['index']['brazilian'];?>: <a href="mailto:cabide@brfree.com.REMOVE.THE.ANTISPAM.WORDS.br">Adilson Gonçalves Soares Junior</a></li>
		<li><?echo $template['index']['russian'];?>: <a href="mailto:valeragir@mail.REMOVE.THE.ANTISPAM.WORDS.ru">Valeriy Girchenko</a></li>
		<li><?echo $template['index']['serbian'];?>: <a href="mailto:preth@kvsky.REMOVE.THE.ANTISPAM.WORDS.net">Prethorian</a></li>
		<li><?echo $template['index']['spanish'];?>: <a href="mailto:jsanchezv@teleline.REMOVE.THE.ANTISPAM.WORDS.es">José Luis Sánchez</a></li>
	</ul>

	<?
	echo "<p>".$template['translation']['text5a']." <a href=\"/?id=mailinglist&amp;lang=$lang\">".$template['index']['ml']."</a> ".$template['translation']['text5b']."</p>";

	echo "<hr />";
	echo "<b>".$template['translation']['text6']."</b><br />";
	echo "<hr />";

	echo "<h1>".$template['translation']['step']." 0: ".$template['translation']['text7']."</h1>";
	echo "<p>".$template['translation']['text8a']." <a href=\"?id=SVN&amp;lang=$lang\">http://www.kvirc.net/?id=SVN</a>.<br />".$template['translation']['text8b']." <code>kvirc/po/</code>";

	echo "<h1>".$template['translation']['step']." 1: ".$template['translation']['text9']."</h1>";
	echo "<p>".$template['translation']['text10a']." <a href=\"http://translation.sourceforge.net/HTML/teams.html\">".$template['translation']['text10b']."</a>.<br />".$template['translation']['text10c']."\"it\", \"en\", \"hu\" or \"pt_BR\".</p>";

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
	?>
	<code>
	#: A file named kvirc.pot will be created. You have to rename this file to kvirc_xxx.po, where xxx is your language code found in Step 1.
	msgid "Translating the messages"
	msgstr "The translation goes here"
	</code>

	<?
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
	echo "<p>".$template['translation']['text32a']." <a href=\"mailto:pragma@kvirc.REMOVE.THE.ANTISPAM.WORDS.net\">pragma at kvirc dot net</a> ".$template['translation']['text32b']."</p>";

	echo "<p>".$template['translation']['text33']."<br />Szymon Stefanek</p>";
echo "</div>";
?>