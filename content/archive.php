<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='../index.php';</script>";

echo "<h1 class=\"pagetitle\">".$template['archive']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<br /><h3>".$template['archive']['text']."</h3>";
	?>

	<form method="get" action="http://www.google.com/custom">
		<p>
		<img src="http://www.google.com/logos/Logo_25wht.gif" alt="Google" /><br />
		<input type="text" name="q" size="25" maxlength="255" />
		<input type="submit" name="sa" value="<?echo $template['archive']['search'];?>" />
		<input type="hidden" name="sitesearch" value="lists.omnikron.net" />
		</p>
	</form>

	<?
	$annocorrente = date("Y");
	$mesecorrente = date("n");

	echo "<ul>";
	/*for($a=2003;$a<=$annocorrente;$a++){
		if(($mesecorrente > 0)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-January/thread.html\">".$template['archive']['jan']." $a</a></li>";
		if(($mesecorrente > 1)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-February/thread.html\">".$template['archive']['feb']." $a</a></li>";
		if(($mesecorrente > 2)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-March/thread.html\">".$template['archive']['mar']." $a</a></li>";
		if(($mesecorrente > 3)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-April/thread.html\">".$template['archive']['apr']." $a</a></li>";
		if(($mesecorrente > 4)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-May/thread.html\">".$template['archive']['may']." $a</a></li>";
		if(($mesecorrente > 5)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-June/thread.html\">".$template['archive']['jun']." $a</a></li>";
		if(($mesecorrente > 6)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-July/thread.html\">".$template['archive']['jul']." $a</a></li>";
		if(($mesecorrente > 7)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-August/thread.html\">".$template['archive']['aug']." $a</a></li>";
		if(($mesecorrente > 8)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-September/thread.html\">".$template['archive']['sep']." $a</a></li>";
		if(($mesecorrente > 9)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-October/thread.html\">".$template['archive']['oct']." $a</a></li>";
		if(($mesecorrente > 10)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-November/thread.html\">".$template['archive']['nov']." $a</a></li>";
		if(($mesecorrente > 11)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-December/thread.html\">".$template['archive']['dec']." $a</a></li>";
	}*/
	for($a=$annocorrente;$a>=2003;$a--){
		if(($mesecorrente > 11)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-December/thread.html\">".$template['archive']['dec']." $a</a></li>";
		if(($mesecorrente > 10)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-November/thread.html\">".$template['archive']['nov']." $a</a></li>";
		if(($mesecorrente > 9)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-October/thread.html\">".$template['archive']['oct']." $a</a></li>";
		if(($mesecorrente > 8)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-September/thread.html\">".$template['archive']['sep']." $a</a></li>";
		if(($mesecorrente > 7)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-August/thread.html\">".$template['archive']['aug']." $a</a></li>";
		if(($mesecorrente > 6)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-July/thread.html\">".$template['archive']['jul']." $a</a></li>";
		if(($mesecorrente > 5)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-June/thread.html\">".$template['archive']['jun']." $a</a></li>";
		if(($mesecorrente > 4)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-May/thread.html\">".$template['archive']['may']." $a</a></li>";
		if(($mesecorrente > 3)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-April/thread.html\">".$template['archive']['apr']." $a</a></li>";
		if(($mesecorrente > 2)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-March/thread.html\">".$template['archive']['mar']." $a</a></li>";
		if(($mesecorrente > 1)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-February/thread.html\">".$template['archive']['feb']." $a</a></li>";
		if(($mesecorrente > 0)|| ($a < $annocorrente))echo "<li><a href=\"http://lists.omnikron.net/pipermail/kvirc/$a-January/thread.html\">".$template['archive']['jan']." $a</a></li>";
	}
	echo "</ul>";
	?>
</div>