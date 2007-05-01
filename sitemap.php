<?
// Create Google sitemap
$date=date('Y-m-d');
$freq='daily';
$urls=array(
	array('url'=>'http://www.kvirc.net/?id=download&amp;lang=en','date'=>$date,'frequency'=>$freq,'priority'=>'1.0'),
	array('url'=>'http://www.kvirc.net/?id=features&amp;lang=en','date'=>$date,'frequency'=>$freq,'priority'=>'1.0'),
	array('url'=>'http://www.kvirc.net/?id=screen&amp;lang=en','date'=>$date,'frequency'=>$freq,'priority'=>'1.0'),
	array('url'=>'http://www.kvirc.net/?id=tutorials&amp;lang=en','date'=>$date,'frequency'=>$freq,'priority'=>'1.0'),
	array('url'=>'http://www.kvirc.net/?id=themes&amp;lang=en','date'=>$date,'frequency'=>$freq,'priority'=>'1.0'),
	array('url'=>'http://www.kvirc.net/?id=addons&amp;lang=en','date'=>$date,'frequency'=>$freq,'priority'=>'1.0'),
	array('url'=>'http://www.kvirc.net/?id=help&amp;lang=en','date'=>$date,'frequency'=>$freq,'priority'=>'1.0')
);

$out=writeGZipFile(outputMap($urls));
header("Cache-Control: ");
header("Pragma: ");
header('Content-Type: application/x-gzip');
header("Content-Length: " .(string)(strlen($out)));
header('Content-Disposition: attachment; filename=sitemap.xml.gz');
header("Content-Transfer-Encoding: binary\n");
echo($out);

//echo('<h1>OK</h1>Sitemap preparata.');

function outputMap($urls) {
	$out='';
	$out.=("<?xml version='1.0' encoding='UTF-8'?".">"."\r\n");
	$out.=('<urlset xmlns="http://www.google.com/schemas/sitemap/0.84"'."\r\n");
	$out.=('xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"'."\r\n");
	$out.=('xsi:schemaLocation="http://www.google.com/schemas/sitemap/0.84'."\r\n");
	$out.=('http://www.google.com/schemas/sitemap/0.84/sitemap.xsd">'."\r\n");
	
	foreach($urls as $key=>$url) {
		$out.=('<url>'."\r\n");
		$out.=('	<loc>'.htmlentities($url['url']).'</loc>'."\r\n");
		$out.=('	<lastmod>'.$url['date'].'</lastmod>'."\r\n");
		$out.=('	<changefreq>'.$url['frequency'].'</changefreq>'."\r\n");
		$out.=('	<priority>'.$url['priority'].'</priority>'."\r\n");
		$out.=('</url>'."\r\n");
	}
	$out.=('</urlset>'."\r\n"."\r\n");
	return $out;
}

function writeGZipFile($content,$filePath='') {
	$gzdata = gzencode($content, 9);
	if($filePath!='') {
		$fp = fopen($filePath, "w");
		fwrite($fp, $gzdata);
		fclose($fp);
	} else {
		return $gzdata;
	}
}
?>