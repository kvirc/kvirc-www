<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

// array("title" => "title", "author" => "author", "mail" => "email", "desc" => "description", "thumb" => "thumbnail", "down" => "download", "date" => "date")
$art=array(
	1 => array("title" => "\"Connect to the World\" Splash Screens", "author" => "SuSp|r|a", "mail" => "suspy@email.REMOVE.THE.ANTISPAM.WORDS.it", "desc" => $template['arts']['desc1'], "thumb" => "arts/connect_to_the_world_thumb.jpg", "down" => "connect_to_the_world.zip", "date" => "18.05.2005"),
	array("title" => "Suspiria's Marmalade", "author" => "SuSp|r|a", "mail" => "suspy@email.REMOVE.THE.ANTISPAM.WORDS.it", "desc" => $template['arts']['desc2'], "thumb" => "arts/suspirias_marmalade_thumb.jpg", "down" => "suspirias_marmalade.jpg", "date" => "18.05.2005"),
	array("title" => "Upside Down", "author" => "SuSp|r|a", "mail" => "suspy@email.REMOVE.THE.ANTISPAM.WORDS.it", "desc" => $template['arts']['desc3'], "thumb" => "arts/upsidedown_thumb.jpg", "down" => "upsidedown.jpg", "date" => "18.05.2005"),
	array("title" => "Avatar Background", "author" => "SuSp|r|a", "mail" => "suspy@email.REMOVE.THE.ANTISPAM.WORDS.it", "desc" => $template['arts']['desc4'], "thumb" => "arts/avatar_back_thumb.jpg", "down" => "avatar_back.jpg", "date" => "18.05.2005"),
	array("title" => "Oh.. So Lovely!", "author" => "SuSp|r|a", "mail" => "suspy@email.REMOVE.THE.ANTISPAM.WORDS.it", "desc" => ":)", "thumb" => "arts/ohsolovely_thumb.jpg", "down" => "ohsolovely.jpg", "date" => "18.05.2005"),
	array("title" => "BSD Magik", "author" => "Lady_dark_demoN", "mail" => "", "desc" => $template['arts']['desc6'], "thumb" => "arts/karries_splash_thumb.jpg", "down" => "karrie_splash.jpg", "date" => "17.10.2005"),
	array("title" => "\"Virg0 - Time makes no Sense\" Splash Screens", "author" => "etherea`", "mail" => "cle@virg0.REMOVE.THE.ANTISPAM.WORDS.org", "desc" => $template['arts']['desc7'], "thumb" => "arts/virg0_anomalies_thumb.png", "down" => "virg0_anomalies.zip", "date" => "09.03.2006")
);

echo "<div class=\"title\">".$template['arts']['title']."</div>";
echo "<div class=\"text\">";
	echo $template['arts']['text'];

foreach($art as $key => $value){
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
