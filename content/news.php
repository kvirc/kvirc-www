<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

require_once("conf/functions.php");

$story = trim(strip_tags(htmlentities($_GET['story'],ENT_QUOTES)));
$dir = trim(strip_tags(htmlentities($_GET['dir'],ENT_QUOTES)));

echo "<h1 class=\"pagetitle\">".$template['news']['title']."</h1>";
echo "<div class=\"column1-unit\">";

if(($story!="")&&($dir!="")){
	$x['dummy']="";
	if(!news_read_entry($docRoot."/news/".$dir."/".$story,$x))
	{
		echo "<h1>".$template['news']['error']."</h1>";
		echo "<p>".$template['news']['nonews']."</p>";
		echo "</div>";
		return;
	}
	
	echo "<h1>".$x['year']."-".$x['month']."-".$x['day'].": ".$x['title']."</h1>";
	echo "<p>".$x['body']."</p>";
	echo "</div>";
	return;
}

if($dir!=""){
	echo "<h1>";
	if($dir!="latest")
		echo $template['news']['news'].": ".news_get_dir_description($dir);
	else
		echo $template['news']['latest'];
	echo "</h1>";

	$latestnews = array();
	news_scan_dir($docRoot."/news/$dir",$latestnews);
	$cnt = count($latestnews);
	for($i = 0;$i < $cnt;$i++){
		$content['dummy'] = "";
		if(news_read_entry($latestnews[$i],$content)){
			echo "<li>";
			echo "<b>".$content['year'].".".$content['month'].".".$content['day']." ".$content['hour'].":".$content['minute']."</b><br />";
			echo $content['short']."<br />";
			echo "<a href=\"?id=news&amp;story=".basename($latestnews[$i])."&amp;dir=$dir&amp;lang=$lang\">".$template['news']['readmore']."...</a></li>";
		}
	}
}

echo "<li><a href=\"?id=news&amp;dir=latest&amp;lang=$lang\">".$template['news']['latest']."</a></li>";

$d=opendir($docRoot."/news");
if($d){
	$cnt = 0;
	while(($file = readdir($d)) !== false){
		if($file!="." && $file!=".." && $file!=".svn" && $file!="latest"){
			$arry[$cnt] = $file;
			$cnt++;
		}
	}
	closedir($d);

	rsort($arry);
	for($i=0;$i<$cnt;$i++){
		$desc = news_get_dir_description($arry[$i]);
		echo "<p><a href=\"?id=news&amp;dir=".$arry[$i]."&amp;lang=$lang\">".$desc."</a></p>";
	}
}

echo "</div>";
?>