<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<div class=\"title\">".$template['arts']['title']."</div>";
echo "<div class=\"text\">";
	echo $template['arts']['text'];

foreach($arts as $key => $value){
	echo "<div class=\"arts\">";
	echo "<div class=\"header\">".$value['title']."</div>";

	echo "<div class=\"wrap\">";
	echo "<div class=\"img\"><a href=\"".$value['downlink']."\"><img src=\"".$value['thumb']."\" alt=\"".$value['title']."\" /></a></div>";
	
	echo "<div class=\"desc\">";
	
	if($value['mail']!="")
		echo $template['custom']['author'].": <a href=\"mailto:".$value['mail']."\">".$value['author']."</a>";
	else
		echo $template['custom']['author'].": ".$value['author'];

	echo "<br />".$template['custom']['date'].": ".$value['date']."<br />";
	echo $template['custom']['download'].": <a href=\"arts/".$value['down']."\">".$value['down']."</a><br /><br />";
	echo $value['desc']."</div>";
	echo "</div>";

	echo "<div class=\"clear\"></div>";

	/*
	if($key==count($art))
		echo "<div class=\"clear\"></div>";
	*/

	echo "</div>";
}
echo "</div>";
?>
