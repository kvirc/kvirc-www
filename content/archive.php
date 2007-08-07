<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['archive']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<br /><h3>".$template['archive']['text']."</h3>";
	?>

	<div class="searchform">
		<form action="<?echo "?id=$id&amp;lang=$lang";?>" method="post" class="form">
			<fieldset>
				<input type="text" name="keywords" value="<?echo $template['index']['search'];?>..." class="field" onclick="this.value=''" />
				<input type="hidden" name="type" value="mail" />
				<input type="submit" name="button" value="<?echo $template['index']['go'];?>!" class="button" />
			</fieldset>
		</form>
	</div><br />

	<?
	$curYear=date("Y");
	$curMonth=date("n");

	// Archive starts on June 2007
	$minMonth=6;
	$minYear=2007;

	echo "<ul class=\"list\">";

	for($year=$curYear;$year>=$minYear;$year--){
		//current year: only counts past months
		if($year==$curYear) $maxMonth=$curMonth;
		else $maxMonth=12;
 
		for($month=$maxMonth;$month>0;$month--){
			echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/".$year."-".$months[$month]['long']."/thread.html\">".$months[$month]['link']." ".$year."</a></li>";

			//minimum year: stop at minimum month
			if(($month==$minMonth)&&($year==$minYear)) break;
		}
	}

	echo "</ul>";
	?>
</div>