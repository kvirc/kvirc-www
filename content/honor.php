<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['honor']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo $template['honor']['text1']." <a href=\"mailto:pragma@kvirc.REMOVE.THE.ANTISPAM.WORDS.net\">Pragma</a>";

foreach($honor as $key => $value){
	if(fmod($key,2)!=0)
		echo "<div class=\"photo\"><div class=\"left\">";
	else echo "<div class=\"right\">";

	echo "<img src=\"img/".$value['image'].".png\" alt=\"".$value['nick']."'s avatar\" /><br />";

	if($value['name']=="") $name=$value['nick'];
	else $name=$value['name'];

	if($value['mail']!="")
		echo "<a href=\"mailto:".$value['mail']."\">".$name."</a>";
	else echo "<b>".$name."</b>";
	echo "&nbsp;<b>(".$value['nick'].")</b>";

	echo "<br />".$value['made']."<br />";

	if($value['quote']!="")
		echo "<p class=\"quote\">&quot;".$value['quote']."&quot;</p>";

	echo "</div>";

	// if the object is on the right, we have to close the container photo
	if(fmod($key,2)==0)
		echo "</div><br /><br />";

	// check for last element on the left: we have to close the container photo
	if($key==count($honor))
		echo "</div>";
}

/*
<div class="sponsor">
	<a href="http://www.nlc.no"><img src="img/nlc.jpg" alt="Norwegian Linux Community" /></a><br />
	<a href="http://www.siena.linux.it"><img src="img/slug.jpg" alt="Siena Linux User Group" /></a><br />
	<a href="http://www.firenze.linux.it"><img src="img/flug.jpg" alt="Firenze Linux Users Group" /></a><br />
	<a href="http://www.tradebit.com"><img src="http://www.tradebit.com/banners/raw1.gif" alt="file hosting, filesharing" /></a><br />
	<a href="http://www.irc-zone.org/"><img src="http://www.irc-zone.org/banners/irczone_120x60.gif" width="120" height="60" alt="IRC-Zone, l'IRC resource che non c'era" /></a>
</div>
*/

	echo $template['honor']['text2']." <a href=\"mailto:cle@virg0.REMOVE.THE.ANTISPAM.WORDS.org\">etherea`</a>";
echo "</div>";
?>