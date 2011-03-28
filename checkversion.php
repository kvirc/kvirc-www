<?
// This file returns the latest stable version of KVIrc
// It is used by the Update Indicator applet

// Security check
unset($checkNetHack);
unset($_GET['checkNetHack']);
$checkNetHack=0;
require("conf/config.php");

$svn = isset($_GET['svn']) ? trim(strip_tags(htmlentities($_GET['svn'],ENT_QUOTES))) : "";
if(($svn == "") || (!is_numeric($svn))) $svn = 0;

if($svn == 0)
{
	$latest = $current;
} else {
	$handle = fsockopen("ssl://svn.kvirc.de",443,$errno,$errstr,30);
	if(!$handle)
	{
		$error = "$errstr ($errno)";
		die($error);
	}

	$out  = "GET /kvirc/timeline HTTP/1.1\r\n";
	$out .= "Host: svn.kvirc.de\r\n";
	$out .= "Connection: Close\r\n\r\n";
	fwrite($handle,$out);
	while(!feof($handle))
	{
		$tmp = fgets($handle,128);

		// <span class="time">17:56</span> Changeset <em>[4813]</em>
		$line = strip_tags(strstr($tmp,"Changeset"));
		if(!$line) continue;
		else {
			// Changeset [4813] 
			preg_match("/\d+/",$line,$match);
			break;
		}
	}

	fclose($handle);
	$latest = $match[0];
}
echo $latest;
?>
