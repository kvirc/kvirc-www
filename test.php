<?
$url = "https://svn.kvirc.de/kvirc/timeline";
$handle = fsockopen($url,80,$errno,$errstr,30);
if(!$handle)
{
	$error = "$errstr ($errno)";
	die($error);
} else {
	$out = "GET / HTTP/1.1\r\n";
	$out .= "Host: www.example.com\r\n";
	$out .= "Connection: Close\r\n\r\n";
	fwrite($handle,$out);
	while(!feof($handle))
	{
		echo fgets($handle,128);
	}
}
fclose($handle);
?>