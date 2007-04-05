<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<div class=\"title\">".$template['mirror']['title']."</div>";
echo "<div class=\"text\">";

	echo $template['mirror']['text1']."<br /><br />";

	echo "<b>".$template['mirror']['text2']."!</b><br /><br />";
echo "</div>";

echo "<div class=\"title\">".$template['mirror']['title2']."</div>";
echo "<div class=\"text\">";

	echo "<b>".$template['mirror']['tree1'].":</b>";

	echo "<ul>";
		echo "<li>".$template['mirror']['tree1a']." <a href=\"http://www.apache.org\">Apache</a></li>";
		echo "<li>".$template['mirror']['tree1b']."</li>";
		echo "<li>".$template['mirror']['tree1c']."</li>";
	echo "</ul><br />";

	echo "<b>".$template['mirror']['text3'].":</b><br /><br />";

	echo $template['mirror']['text4']."<br /><br />";

	echo $template['mirror']['text5']."<br /><br />";
	?>

	<code>
	$ export CVSROOT=":pserver:anonymous@cvs.kvirc.net:/cvs"<br />
	$ cvs login<br />
	&lt;<?echo $template['mirror']['text6'];?>&gt;<br />
	$ cvs -z3 co kvircwww/html3
	</code><br /><br />

	<?
	echo $template['mirror']['text7']."<br /><br />";

	echo "<code>$ mv kvircwww/html3 /var/www/vhosts/kvirc.".$template['mirror']['text8'].".org</code><br /><br />";

	echo $template['mirror']['text9']." /var/www/vhosts/kvirc.".$template['mirror']['text8'].".org<br />";
	echo $template['mirror']['text10']."<br /><br />";

	echo "<code>";
	echo "&lt;VirtualHost *:80&gt;<br />";
        echo "&nbsp; &nbsp; &nbsp; &nbsp; ServerAdmin ".$template['mirror']['text11']."@mail.com<br />";
        echo "&nbsp; &nbsp; &nbsp; &nbsp; DocumentRoot /var/www/vhosts/kvirc.".$template['mirror']['text8'].".org<br />";
        echo "&nbsp; &nbsp; &nbsp; &nbsp; ServerName kvirc.".$template['mirror']['text8'].".org<br />";
        echo "&nbsp; &nbsp; &nbsp; &nbsp; ErrorLog logs/kvirc.".$template['mirror']['text8'].".org-error_log<br />";
        echo "&nbsp; &nbsp; &nbsp; &nbsp; CustomLog logs/kvirc.".$template['mirror']['text8'].".org-access_log common<br />";
	echo "&lt;/VirtualHost&gt;<br />";
	echo "</code><br />";

	echo $template['mirror']['text12']."<br /><br />";

	echo "<code>kvirc IN A &lt;".$template['mirror']['text13']."&gt;</code><br /><br />";

	echo $template['mirror']['text14']." http://kvirc.".$template['mirror']['text8'].".org<br />";

	echo $template['mirror']['text15']."<br /><br />";
	?>

	<code>
	MAILTO=pragma<br />
	CVSROOT=:pserver:anonymous@cvs.kvirc.net:/cvs<br /><br />
	30 6 * * * $HOME/bin/cronjob >> $HOME/cronjoblog 2>&amp;1<br />
	</code><br />

	<?
	echo $template['mirror']['text16']."<br /><br />";

	echo "<code>";
	echo "#!/bin/bash<br />";
	echo "cd /var/www/vhosts/kvirc.".$template['mirror']['text8'].".org &amp;&amp; cvs -z3 update -d
	</code><br />";

	echo $template['mirror']['text17'];
echo "</div>";

echo "<div class=\"title\">".$template['mirror']['title2']."</div>";
echo "<div class=\"text\">";

	echo "<b>".$template['mirror']['tree1'].":</b>";

	echo "<ul>";
		echo "<li>".$template['mirror']['tree2a']."</li>";
		echo "<li><a href=\"http://www.gnu.org/software/wget/wget.html\">wget</a></li>";
		echo "<li>".$template['mirror']['tree1c']."</li>";
	echo "</ul><br />";

	echo "<b>".$template['mirror']['text3'].":</b><br /><br />";

	echo $template['mirror']['text18']."<br /><br />";

	echo "<code>";
	echo "cd /".$template['mirror']['text19']."/pub/kvirc/ &amp;&amp; wget --mirror -nH --cut-dirs=2 ftp://ftp.kvirc.net/pub/kvirc/";
	echo "</code><br /><br />";

	echo $template['mirror']['text20']."<br /><br />";

	echo "<code>";
	echo "#!/bin/bash<br />";
	echo "cd /var/www/vhosts/kvirc.".$template['mirror']['text8'].".org &amp;&amp; cvs -z3 update -d<br />";
	echo "cd /".$template['mirror']['text19']."/pub/kvirc/ &amp;&amp; wget --mirror -nH --cut-dirs=2 ftp://ftp.kvirc.net/pub/kvirc/";
	echo "</code><br /><br />";

	echo $template['mirror']['text21']."<br /><br />";

	echo $template['mirror']['text22'];
echo "</div>";
?>