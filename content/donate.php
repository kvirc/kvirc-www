<?php
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['donate']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<br /><h3>".$template['donate']['text1']."</h3>";
	echo "<p>".$template['donate']['text2']."</p>";
	echo "<p>".$template['donate']['text3']."</p>";
	?>

	<div class="center">
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<p>
			<input type="hidden" name="cmd" value="_xclick" />
			<input type="hidden" name="business" value="pragma@kvirc.net" />
			<input type="hidden" name="item_name" value="KVIrc Project" />
			<input type="hidden" name="no_note" value="1" />
			<input type="hidden" name="currency_code" value="EUR" />
			<input type="hidden" name="tax" value="0" />
			<input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but21.gif" name="submit" alt="<?php echo $template['donate']['alttext'];?>" />
			</p>
		</form>
	</div><br />

	<?php
	echo "<p>".$template['donate']['text4']."</p>";
	echo "<p>".$template['donate']['text5']."</p>";
echo "</div>";

echo "<h1 class=\"pagetitle\">".$template['donate']['title2']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<p>17.06.2006: 15 USD ".$template['donate']['donation']." Iulian Topliceanu (<a href=\"http://anaaman.blogspot.com/\" target=\"_blank\">".$template['custom']['homepage']."</a>)</p>";
echo "</div>";
echo "<div class=\"column1-unit\">";
	echo "<p>31.08.2014: 15 EUR ".$template['donate']['donation']." Dan Derebenskiy (<a href=\"http://www.go-parts.com/\" target=\"_blank\">Go-Parts</a>)</p>";
echo "</div>";
echo "<div class=\"column1-unit\">";
	echo "<p>01.10.2014: 100 EUR ".$template['donate']['donation']." <a href=\"https://github.com/SolarAquarion\" target=\"_blank\">Michele Choina</a></p>";
echo "</div>";
?>
