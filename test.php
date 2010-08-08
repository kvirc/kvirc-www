<?
$url = "ssl://svn.kvirc.de";
$handle = fsockopen($url,443,$errno,$errstr,30);
if(!$handle)
{
	$error = "$errstr ($errno)";
	die($error);
} else {
	$out = "GET /kvirc/timeline HTTP/1.1\r\n";
	$out .= "Host: svn.kvirc.de\r\n";
	$out .= "Connection: Close\r\n\r\n";
	fwrite($handle,$out);
	while(!feof($handle))
	{
		echo fgets($handle,128);
	}
}
fclose($handle);
?>