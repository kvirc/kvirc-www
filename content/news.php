<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

include_once("conf/functions.php");

$story=trim(addslashes(strip_tags($_GET['story'])));
$dir=trim(addslashes(strip_tags($_GET['dir'])));

echo "<div class=\"title\">".$template['news']['title']."</div>";

if(($story!="")&&($dir!="")){
	$x['dummy']="";
	if(!news_read_entry($docRoot."/news/".$dir."/".$story,$x)){
		echo "<div class=\"littletitle\">".$template['news']['error']."</div>";
		echo "<div class=\"text\">";
		echo $template['news']['nonews'];
		echo "</div>";
		return;
	}
	
	echo "<div class=\"littletitle\">".$x['year']."-".$x['month']."-".$x['day'].": ".$x['title']."</div>";
	echo "<div class=\"text\">";
	echo $x['body'];
	echo "</div>";
	return;
}

echo "<div class=\"text\">";
if($dir!=""){
	echo "<div class=\"littletitle\">";
	if($dir!="latest")
		echo $template['news']['news'].": ".news_get_dir_description($dir);
	else
		echo $template['news']['latest'];
	echo "</div>";

	$latestnews = array();
	news_scan_dir($docRoot."/news/$dir",$latestnews);
	$cnt = count($latestnews);
	for($i = 0;$i < $cnt;$i++){
		$content['dummy'] = "";
		if(news_read_entry($latestnews[$i],$content)){
			echo "<li>";
			echo "<b>".$content['year'].".".$content['month'].".".$content['day']." ".$content['hour'].":".$content['minute']."</b><br />";
			echo $content['short']."<br />";
			echo "<a href=\"?id=news&amp;lang=$lang&amp;story=".basename($latestnews[$i])."&amp;dir=$dir\">".$template['rmenu']['readmore']."...</a></li>";
		}
	}
}

echo "<li><a href=\"?id=news&amp;lang=$lang&amp;dir=latest\">".$template['news']['latest']."</a></li>";

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
		echo "<li><a href=\"?id=news&amp;lang=$lang&amp;dir=".$arry[$i]."\">".$desc."</a></li>";
	}
}

echo "</div>";
?>