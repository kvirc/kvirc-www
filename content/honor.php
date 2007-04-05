<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<div class=\"title\">".$template['honor']['title']."</div>";
echo "<div class=\"text\">";
	echo $template['honor']['text1']." <a href=\"mailto:pragma@kvirc.REMOVE.THE.ANTISPAM.WORDS.net\">Pragma</a>";
echo "</div>";

// array("nick" => "nick", "name" => "name", "mail" => "mail", "made" => "made", "quote" => "quote", "image" => "image")
$honor=array(
	1 => array("nick" => "Pragma", "name" => "Szymon Stefanek", "mail" => "pragma@kvirc.REMOVE.THE.ANTISPAM.WORDS.net", "made" => $template['honor']['made1'], "quote" => $template['honor']['quote1'], "image" => "pragma"),
	array("nick" => "Istari, spion", "name" => "Jan Wagner", "mail" => "webmaster@cyconet.REMOVE.THE.ANTISPAM.WORDS.org", "made" => $template['honor']['made2'], "quote" => "", "image" => "istari"),
	array("nick" => "Balboy", "name" => "Luk De Ketelaere", "mail" => "balboy@kvirc.REMOVE.THE.ANTISPAM.WORDS.net", "made" => $template['honor']['made3'], "quote" => $template['honor']['quote3'], "image" => "balboy"),
	array("nick" => "YaP", "name" => "Andrea Parrella", "mail" => "yap@kvirc.REMOVE.THE.ANTISPAM.WORDS.net", "made" => $template['honor']['made4'], "quote" => $template['honor']['quote4'], "image" => "yap"),
	array("nick" => "alch3m1st", "name" => "Ted Podgurski", "mail" => "tedp@toocool.REMOVE.THE.ANTISPAM.WORDS.com", "made" => $template['honor']['made5'], "quote" => $template['honor']['quote5'], "image" => "alch3m1st"),
	array("nick" => "oehansen", "name" => "O. E. Hansen", "mail" => "oe.hansen@gamma.telenordia.REMOVE.THE.ANTISPAM.WORDS.se", "made" => $template['honor']['made6'], "quote" => $template['honor']['quote6'], "image" => "oehansen"),
	array("nick" => "wiza", "name" => "Jorma Tuomainen", "mail" => "jt@wiza.REMOVE.THE.ANTISPAM.WORDS.fi", "made" => $template['honor']['made7'], "quote" => "", "image" => "wiza"),
	array("nick" => "Penny", "name" => "Eva Schaller", "mail" => "eva@cyberbeat.REMOVE.THE.ANTISPAM.WORDS.it", "made" => $template['honor']['made8'], "quote" => $template['honor']['quote8'], "image" => "penny"),
	array("nick" => "Crissi", "name" => "Christoph Thielecke", "mail" => "", "made" => $template['honor']['made9'], "quote" => $template['honor']['quote9'], "image" => "crissi"),
	array("nick" => "Triskelios", "name" => "", "mail" => "trisk-kvirc@quasarnet.REMOVE.THE.ANTISPAM.WORDS.org", "made" => $template['honor']['made10'], "quote" => $template['honor']['quote10'], "image" => "trisk"),
	array("nick" => "munehiro", "name" => "", "mail" => "", "made" => $template['honor']['made11'], "quote" => "", "image" => "munehiro"),
	array("nick" => "Kristoff", "name" => "Krzysztof Godlewski", "mail" => "kristoff@proczta.wprost.REMOVE.THE.ANTISPAM.WORDS.pl", "made" => $template['honor']['made12'], "quote" => $template['honor']['quote12'], "image" => "kristoff"),
	array("nick" => "iakko", "name" => "Iacopo Palazzi", "mail" => "iakko@siena.linux.it_REMOVEFROMUNDERSCORETOTHISPOINT", "made" => $template['honor']['made13'], "quote" => $template['honor']['quote13'], "image" => "iakko"),
	array("nick" => "Thilo", "name" => "Thilo Schulz", "mail" => "arny@ats.s.bawue.REMOVE.THE.ANTISPAM.WORDS.de", "made" => $template['honor']['made14'], "quote" => "", "image" => "Thilo"),
	array("nick" => "Ahinu", "name" => "Ahinu", "mail" => "ahinu.laman@gmail.REMOVE.THE.ANTISPAM.WORDS.com", "made" => $template['honor']['made15'], "quote" => "", "image" => "ahinu"),
	array("nick" => "Noldor", "name" => "Alessandro Carbone", "mail" => "Noldor@barmes.REMOVE.THE.ANTISPAM.WORDS.org", "made" => $template['honor']['made16'], "quote" => $template['honor']['quote16'], "image" => "noldor"),
	array("nick" => "Grifisx", "name" => "Tonino Imbesi", "mail" => "", "made" => $template['honor']['made17'], "quote" => $template['honor']['quote17'], "image" => "grifisx"),
	array("nick" => "Alexey", "name" => "Alexey Uzhva", "mail" => "wizard-ANTISPAM@opendoor.REMOVE.THE.ANTISPAM.WORDS.ru", "made" => $template['honor']['made18'], "quote" => "", "image" => "alexey"),
	array("nick" => "HelLViS69", "name" => "Elvio Basello", "mail" => "hellvis69@altervista.REMOVE.THE.ANTISPAM.WORDS.org", "made" => $template['honor']['made19'], "quote" => $template['honor']['quote19'], "image" => "hellvis69"),
	array("nick" => "etherea`", "name" => "Claudia Galingani Mongini", "mail" => "cle@virg0.REMOVE.THE.ANTISPAM.WORDS.org", "made" => $template['honor']['made20'], "quote" => $template['honor']['quote20'], "image" => "etherea"),
	array("nick" => "Nate", "name" => "Alessio Paoletti", "mail" => "nate@paranoici.REMOVE.THE.ANTISPAM.WORDS.org", "made" => $template['honor']['made21'], "quote" => "", "image" => "nate"),
	array("nick" => "k0sm|k0", "name" => "Massimiliano Leone", "mail" => "k0smik0@logorroici.REMOVE.THE.ANTISPAM.WORDS.org", "made" => $template['honor']['made22'], "quote" => $template['honor']['quote22'], "image" => "kosmiko"),
	array("nick" => "LoSko", "name" => "Lorenzo Marcon", "mail" => "lorenzo.marcon@startrekitalia.REMOVE.THE.ANTISPAM.WORDS.com", "made" => $template['honor']['made23'], "quote" => $template['honor']['quote23'], "image" => "losko"),
	array("nick" => "Kane", "name" => "Juanjo �varez", "mail" => "juanjux@yahoo.REMOVE.THE.ANTISPAM.WORDS.es", "made" => $template['honor']['made24'], "quote" => $template['honor']['quote24'], "image" => "unknown"),
	array("nick" => "CGabriel", "name" => "Christopher R. Gabriel", "mail" => "cgabriel@linux.REMOVE.THE.ANTISPAM.WORDS.it", "made" => $template['honor']['made25'], "quote" => $template['honor']['quote25'], "image" => "unknown"),
	array("nick" => "Drosha", "name" => "Andrew Frolov", "mail" => "", "made" => $template['honor']['made26'], "quote" => $template['honor']['quote26'], "image" => "unknown"),
	array("nick" => "Number1", "name" => "Christian Strmmen", "mail" => "number1@realityx.REMOVE.THE.ANTISPAM.WORDS.net", "made" => $template['honor']['made27'], "quote" => $template['honor']['quote27'], "image" => "unknown"),
	array("nick" => "RADKade1", "name" => "RAD Kade 1", "mail" => "", "made" => $template['honor']['made28'], "quote" => $template['honor']['quote28'], "image" => "unknown"),
	array("nick" => "KNFritz", "name" => "Fritz Elfert", "mail" => "", "made" => $template['honor']['made29'], "quote" => "", "image" => "unknown"),
	array("nick" => "Njaard", "name" => "Charles Samuels", "mail" => "kcharles@altair.dhs.REMOVE.THE.ANTISPAM.WORDS.org", "made" => $template['honor']['made30'], "quote" => $template['honor']['quote30'], "image" => "unknown"),
	array("nick" => "BuTi", "name" => "", "mail" => "buti@geocities.REMOVE.THE.ANTISPAM.WORDS.com", "made" => $template['honor']['made31'], "quote" => "", "image" => "unknown"),
	array("nick" => "Error403", "name" => "Nick Betcher", "mail" => "nbetcher@real-time.REMOVE.THE.ANTISPAM.WORDS.com", "made" => "", "quote" => $template['honor']['quote32'], "image" => "unknown"),
	array("nick" => "Crocodile", "name" => "Olle H�ln�", "mail" => "olle@xmms.REMOVE.THE.ANTISPAM.WORDS.org", "made" => $template['honor']['made33'], "quote" => "", "image" => "unknown"),
	array("nick" => "marl", "name" => "Giovanni Ferri", "mail" => "giovanni@fonderiadigitale.REMOVE.THE.ANTISPAM.WORDS.it", "made" => $template['honor']['made34'], "quote" => $template['honor']['quote34'], "image" => "unknown"),
	array("nick" => "[Anodine]", "name" => "Anodine", "mail" => "", "made" => $template['honor']['made35'], "quote" => $template['honor']['quote35'], "image" => "unknown"),
	array("nick" => "infected", "name" => "Paul Boehm", "mail" => "", "made" => $template['honor']['made36'], "quote" => $template['honor']['quote36'], "image" => "unknown"),
	array("nick" => "|Tom|@IrcNet", "name" => "Thomas Kalla", "mail" => "", "made" => $template['honor']['made37'], "quote" => "", "image" => "unknown"),
	array("nick" => "^J^", "name" => "Am rico Jos Melo", "mail" => "", "made" => $template['honor']['made38'], "quote" => "", "image" => "unknown"),
	array("nick" => "valeragir", "name" => "Valeriy Girchenko", "mail" => "valeragir@mail.REMOVE.THE.ANTISPAM.WORDS.ru", "made" => $template['honor']['made39'], "quote" => "", "image" => "unknown")
);

foreach($honor as $key => $value){
	if(fmod($key,2)!=0)
		echo "<div class=\"photo\"><div class=\"left\">";
	else echo "<div class=\"right\">";

	echo "<img src=\"img/".$value['image'].".png\" alt=\"".$value['nick']."'s avatar\" /><br />";

	if($value['name']=="")
		$name=$value['nick'];
	else
		$name=$value['name'];

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
?>
<div class="sponsor">
	<a href="http://www.nlc.no"><img src="img/nlc.jpg" alt="Norwegian Linux Community" /></a><br />
	<a href="http://www.siena.linux.it"><img src="img/slug.jpg" alt="Siena Linux User Group" /></a><br />
	<a href="http://www.firenze.linux.it"><img src="img/flug.jpg" alt="Firenze Linux Users Group" /></a><br />
	<a href="http://www.tradebit.com"><img src="http://www.tradebit.com/banners/raw1.gif" alt="file hosting, filesharing" /></a><br />
	<a href="http://www.irc-zone.org/"><img src="http://www.irc-zone.org/banners/irczone_120x60.gif" width="120" height="60" alt="IRC-Zone, l'IRC resource che non c'era" /></a>
</div>

<?
echo "<div class=\"text\">";
	echo $template['honor']['text2']." <a href=\"mailto:cle@virg0.REMOVE.THE.ANTISPAM.WORDS.org\">etherea`</a>";
echo "</div>";
?>