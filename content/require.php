<?php 
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['require']['title']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<ul>";
		echo "<li><h1>".$template['require']['tree1']."</h1>";
			echo "<br />";
			echo "<ul class=\"list\">";
				echo "<li>".$template['require']['tree1a']."</li>";
				echo "<li>".$template['require']['tree1b']."</li>";
				echo "<li>".$template['require']['tree1c']."</li>";
				echo "<li>".$template['require']['tree1d']."</li>";
				echo "<li>".$template['require']['tree1e']."</li>";
				echo "<li>".$template['require']['tree1f']."</li>";
				echo "<li>".$template['require']['tree1g']."</li>";
				echo "<li>".$template['require']['tree1h']."</li>";
				echo "<li>".$template['require']['tree1i']."</li>";
				echo "<li>".$template['require']['tree1j']."</li>";
				echo "<li>".$template['require']['tree1k']."</li>";
			echo "</ul></li>";
		echo "<li><h1>".$template['require']['tree2']."</h1>";
			echo "<br />";
			echo "<ul class=\"list\">";
				echo "<li>".$template['require']['tree2a']."</li>";
				echo "<li>".$template['require']['tree2b']."</li>";
			echo "</ul></li>";
		echo "<li><h1>".$template['require']['tree3']."</h1>";
			echo "<br />";
			echo "<ul class=\"list\">";
				echo "<li>".$template['require']['tree3a']."</li>";
			echo "</ul></li>";
		echo "<li><h1>".$template['require']['tree4']."</h1>";
			echo "<br />";
			echo "<ul class=\"list\">";
				echo "<li>".$template['require']['tree4a']."</li>";
			echo "</ul></li>";
		echo "<li><h1>".$template['require']['tree5']."</h1>";
			echo "<br />";
			echo "<ul class=\"list\">";
				echo "<li>".$template['require']['tree5a']."</li>";
			echo "</ul></li>";
		echo "<li><h1>".$template['require']['tree6']."</h1>";
			echo "<br />";
			echo "<ul class=\"list\">";
				echo "<li>".$template['require']['tree6a']."</li>";
			echo "</ul>";
	echo "</ul>";
echo "</div>";

echo "<h1 class=\"pagetitle\">".$template['require']['titleold']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<br />";
        echo "<ul class=\"list\">";
		echo "<li>".$template['require']['treeold1']."</li>";
		echo "<li>".$template['require']['treeold2']."</li>";
		echo "<li>".$template['require']['treeold3']."</li>";
		echo "<li>".$template['require']['treeold4']."</li>";
		echo "<li>".$template['require']['treeold5']."</li>";
		echo "<li>".$template['require']['treeold6']."</li>";
		echo "<li>".$template['require']['treeold7']."</li>";
	echo "</ul>";
echo "</div>";
?>