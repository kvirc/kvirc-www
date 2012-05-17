<?php
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

$path="img/arts";

echo "<h1 class=\"pagetitle\">".$template['arts']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<br /><h3>".$template['arts']['text']."</h3>";

foreach($arts as $key => $value){
	if(fmod($key,2)!=0) echo "<div class=\"split\"><div class=\"left\">";
	else echo "<div class=\"right\">";

	echo "<div class=\"img\"><a href=\"$path/".$value['down']."\"><img src=\"$path/".$value['thumb']."\" alt=\"".$value['title']."\" /></a></div>";
	
	echo "<p>";
	echo $value['title']."<br />";
	
	if($value['mail']!="")
		echo $template['custom']['author'].": <a href=\"mailto:".$value['mail']."\">".$value['author']."</a><br />";
	else echo $template['custom']['author'].": ".$value['author']."<br />";

	echo $template['custom']['date'].": ".$value['date'];
	echo "</p>";

	echo "<p><a href=\"$path/".$value['down']."\">".$template['custom']['download']."</a></p>";

	echo "<div class=\"desc\">".$value['desc']."</div>";

	// close left or right div
	echo "</div>";

	// if the object is on the right or if it's the last, we have to close the container split
	if((fmod($key,2)==0)||($key==count($arts))) echo "</div>";
}
echo "</div>";
?>
