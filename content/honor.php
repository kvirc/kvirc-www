<?php
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

$path="img/honor";

echo "<h1 class=\"pagetitle\">".$template['honor']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<br /><h3>".$template['honor']['text1']."</h3>";
	echo "<p>".$template['honor']['text2']." <a href=\"mailto:pragma [at] kvirc [dot] net\">Pragma</a>";

foreach($honor as $key => $value){
	if(fmod($key,2)!=0) echo "<div class=\"split\"><div class=\"left\">";
	else echo "<div class=\"right\">";

	echo "<div class=\"img\"><img src=\"$path/".$value['image'].".png\" alt=\"".$value['nick']."'s avatar\" /></div>";

	echo "<div class=\"desc\">";
	if($value['name']=="") $name=$value['nick'];
	else $name=$value['name'];

	if($value['mail']!="")
		echo "<p><a href=\"mailto:".$value['mail']."\">".$name."</a>";
	else echo "<p><b>".$name."</b>";
	echo "<br /><b>(".$value['nick'].")</b></p>";

	echo "<p>".$value['made']."</p>";

	if($value['quote']!="")
		echo "<p class=\"quote\">&quot;".$value['quote']."&quot;</p>";

	// close desc div
	echo "</div>";

	// close left or right div
	echo "</div>";

	// if the object is on the right or if it's the last, we have to close the container split
	if((fmod($key,2)==0)||($key==count($honor))) echo "</div>";
}

echo "<br /><p>".$template['honor']['text3']." <a href=\"mailto:hellvis69 [at] gmail [dot] com\">HelLViS69</a></p>";
echo "</div>";
?>