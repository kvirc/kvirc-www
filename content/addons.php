<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

$current="3.2.6";
$availVersions=array("3.2.1","3.2.3","3.2.4","3.2.5",$current);
$numAddons=0;

//aray("name" => "name", "ver" => "addon version", "min" => "min KVIrc version", "max" => "max KVIrc version", "author" => "author", "desc" => "description", "url" => "url")
$addons=array(
	1 => array("name" => "Auto Away: Automatic Away", "ver" => "1.0.0", "min" => "3.2.1", "max" => $current, "author" => "Szymon Stefanek", "desc" => $template['addons']['addon1'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/autoaway.1.0.0.zip"),
	array("name" => "Chan Ops: Channel Operations", "ver" => "1.0.0", "min" => "3.2.1", "max" => $current, "author" => "Szymon Stefanek", "desc" => $template['addons']['addon2'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/chanops.1.0.0.zip"),
	array("name" => "Chan Stats: Channel Statistics", "ver" => "1.1.1", "min" => "3.2.1", "max" => $current, "author" => "g00dsP33D", "desc" => $template['addons']['addon3'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/chanstats.1.1.1.zip"),
	array("name" => "Hell Country", "ver" => "0.1", "min" => "3.2.1", "max" => $current, "author" => "HelLViS69", "desc" => $template['addons']['addon4'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/country.0.1.zip"),
	array("name" => "Cryption", "ver" => "1.0.2", "min" => "3.2.1", "max" => $current, "author" => "g00dsP33D", "desc" => $template['addons']['addon5'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/cryption.1.0.2.zip"),
	array("name" => "Ezbounce", "ver" => "1.0.0", "min" => "3.2.1", "max" => $current, "author" => "Szymon Stefanek", "desc" => $template['addons']['addon6'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/ezbounce.1.0.0.zip"),
	array("name" => "F4: Forza 4 game", "ver" => "0.9", "min" => "3.2.1", "max" => $current, "author" => "Grifisx &amp; Noldor", "desc" => $template['addons']['addon7'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/forza4.0.9.zip"),
	array("name" => "Fserve: An F-Server", "ver" => "1.0.0", "min" => "3.2.1", "max" => $current, "author" => "assassin", "desc" => $template['addons']['addon8'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/fserve.1.0.0.zip"),
	array("name" => "Funny Lol And Write", "ver" => "0.1", "min" => "3.2.1", "max" => $current, "author" => "Grifisx &amp; HelLViS69", "desc" => $template['addons']['addon9'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/funnylolandwrite.0.1.zip"),
	array("name" => "Hell Mediaplayer", "ver" => "0.1", "min" => "3.2.1", "max" => $current, "author" => "HelLViS69", "desc" => $template['addons']['addon10'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/mediaplayer.0.1.zip"),
	array("name" => "Mines Weeper", "ver" => "1.1.0", "min" => "3.2.1", "max" => $current, "author" => "Szymon Stefanek", "desc" => $template['addons']['addon11'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/mediaplayer.0.1.zip"),
	array("name" => "News Ticker: The RSS News Reader", "ver" => "1.1.0", "min" => "3.2.1", "max" => $current, "author" => "Szymon Stefanek", "desc" => $template['addons']['addon12'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/newsticker-1.1.0.zip"),
	array("name" => "Now Playing: The Media Advertiser", "ver" => "1.0.0", "min" => "3.2.1", "max" => $current, "author" => "Szymon Stefanek", "desc" => $template['addons']['addon13'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/nowplaying.1.0.0.zip"),
	array("name" => "Question Manager", "ver" => "0.1", "min" => "3.2.1", "max" => $current, "author" => "Grifisx &amp; Noldor", "desc" => $template['addons']['addon14'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/questionManager.0.1.zip"),
	array("name" => "Quiz", "ver" => "1.0.0", "min" => "3.2.1", "max" => $current, "author" => "Szymon Stefanek and HelLViS69", "desc" => $template['addons']['addon15'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/quiz.1.0.0.zip"),
	array("name" => "SMS: SMS sender", "ver" => "1.9.9", "min" => "3.2.1", "max" => $current, "author" => "Grifisx &amp; Noldor", "desc" => $template['addons']['addon16'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/sms.1.9.9.zip"),
	array("name" => "The Censor", "ver" => "1.0.0", "min" => "3.2.1", "max" => $current, "author" => "Grifisx", "desc" => $template['addons']['addon17'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/thecensor.1.0.0.zip"),
	array("name" => "Twins Auto Op: auto op/voice/ban", "ver" => "1.1", "min" => "3.2.3", "max" => $current, "author" => "Ahinu", "desc" => $template['addons']['addon18'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/twinsautoop-1.1.zip"),
	array("name" => "Twins Input Color: Colorize your input text", "ver" => "1.2", "min" => "3.2.4", "max" => $current, "author" => "Ahinu", "desc" => $template['addons']['addon19'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/twinsinputcolor-1.2.zip"),
	array("name" => "Twins Lag bar: A graphical lag bar", "ver" => "1.0", "min" => "3.2.4", "max" => $current, "author" => "Ahinu", "desc" => $template['addons']['addon20'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/twinslagbar-1.0.zip"),
	array("name" => "Twins Media Player: Control your player and share you music", "ver" => "1.4", "min" => "3.2.4", "max" => $current, "author" => "Ahinu", "desc" => $template['addons']['addon21'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/twinsmediaplayer-1.4.zip"),
	array("name" => "Host Check", "ver" => "1.0", "min" => "3.2.6", "max" => $current, "author" => "", "desc" => $template['addons']['addon22'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/hostcheck.tar.gz"),
	array("name" => "KISS: The KVIrc Icons Style Setup", "ver" => "2.0", "min" => "3.2.6", "max" => $current, "author" => "HelLViS69", "desc" => $template['addons']['addon23'], "url" => "ftp://ftp.kvirc.net/pub/kvirc/scripts/KISS-2.0.tar.bz2")
);

$version=trim(strip_tags(addslashes($_GET['version'])));
if(!$version || !eregi("^[0-9]{1,}\.[0-9]{1,}\.[0-9]{1,}$",$version))
	$version="3.2.1";

echo "<div class=\"title\">".$template['addons']['title']."</div>";
echo "<div class=\"text\">";
	echo $template['addons']['text1'].":<br />";

	echo "<form method=\"get\" action=\"\">";
		echo "<p>";
		echo "<input type=\"hidden\" name=\"id\" value=\"addons\" />";
		echo "<input type=\"hidden\" name=\"lang\" value=\"$lang\" />";
		echo "<select name=\"version\">";
			foreach($availVersions as $KVIrcVersion){
				if($KVIrcVersion==$version)
					echo "<option value=\"$KVIrcVersion\" selected=\"selected\">$KVIrcVersion</option>";
				else echo "<option value=\"$KVIrcVersion\">$KVIrcVersion</option>";
			}
		echo "</select>";
		echo "<input type=\"submit\" value=\"Ok\" />";
		echo "</p>";
	echo "</form>";

	echo $template['addons']['text2'].":<br />";
	echo "<ul>";
		echo "<li>".$template['addons']['tree1']."</li>";
		echo "<li>".$template['addons']['tree2']."</li>";
		echo "<li>".$template['addons']['tree3']."</li>";
		echo "<li>".$template['addons']['tree4']."</li>";
	echo "</ul>";

	foreach($addons as $key => $value){
		if(checkVersion($version,$value['min'],$value['max'])){
			if(fmod($key,2)==0)
				echo "<table class=\"scriptNotCxt\">";
			else echo "<table class=\"scriptCxt\">";

			echo "<tr><td colspan=\"2\"><b>".$value['name']."</b> ".$value['ver']."</td></tr>";

			echo "<tr>";
				echo "<td><em>".$template['custom']['author'].":</em></td>";
				echo "<td>".$value['author']."</td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td><em>".$template['custom']['description'].":</em></td>";
				echo "<td>".$value['desc']."</td>";
			echo "</tr>";

			echo "<tr>";
				echo "<td><em>".$template['custom']['download'].":</em></td>";
				echo "<td><a href=\"".$value['url']."\">".$value['url']."</a></td>";
			echo "</tr>";

			echo "</table>";
		}

		$numAddons++;
	}

	if($numAddons==0)
		echo $template['addons']['sorry'];

echo "</div>";
?>