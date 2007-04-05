<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['features']['title']."</h1>";
echo "<div class=\"column1-unit\">";

	echo "<p>".$template['features']['text1']."</p>";

	echo "<ul>";
		echo "<li><b>".$template['features']['tree1']."</b>";
		echo "<ul>";
			echo "<li>".$template['features']['tree1a']."</li>";
			echo "<li>".$template['features']['tree1b']."</li>";
			echo "<li>".$template['features']['tree1c']."</li>";
			echo "<li>".$template['features']['tree1d']."</li>";
			echo "<li>".$template['features']['tree1e']."</li>";
			echo "<li>".$template['features']['tree1f']."</li>";
			echo "<li>".$template['features']['tree1g']."</li>";
			echo "<li>".$template['features']['tree1h']."</li>";
			echo "<li>".$template['features']['tree1i']."</li>";
			echo "<li>".$template['features']['tree1j']."</li>";
		echo "</ul></li>";
		echo "<li><b>".$template['features']['tree2']."</b>";
		echo "<ul>";
			echo "<li>".$template['features']['tree2a']."</li>";
			echo "<li>".$template['features']['tree2b']."</li>";
			echo "<li>".$template['features']['tree2c']."</li>";
			echo "<li>".$template['features']['tree2d']."</li>";
		echo "</ul></li>";
		echo "<li><b>".$template['features']['tree3']."</b>";
		echo "<ul>";
			echo "<li>".$template['features']['tree3a']."</li>";
			echo "<li>".$template['features']['tree3b']."</li>";
			echo "<li>".$template['features']['tree3c']."</li>";
		echo "</ul></li>";
		echo "<li><b>".$template['features']['tree4']."</b>";
		echo "<ul>";
			echo "<li>".$template['features']['tree4a']."</li>";
			echo "<li>".$template['features']['tree4b']."</li>";
			echo "<li>".$template['features']['tree4c']."</li>";
			echo "<li>".$template['features']['tree4d']."</li>";
			echo "<li>".$template['features']['tree4e']."</li>";
			echo "<li>".$template['features']['tree4f']."</li>";
			echo "<li>".$template['features']['tree4g']."</li>";
			echo "<li>".$template['features']['tree4h']."</li>";
			echo "<li>".$template['features']['tree4i']."</li>";
			echo "<li>".$template['features']['tree4j']."</li>";
		echo "</ul></li>";
		echo "<li><b>".$template['features']['tree5']."</b>";
		echo "<ul>";
			echo "<li>".$template['features']['tree5a'];
				echo "<ul>";
					echo "<li>".$template['features']['tree5a1']."</li>";
					echo "<li>".$template['features']['tree5a2']."</li>";
					echo "<li>".$template['features']['tree5a3']."</li>";
					echo "<li>".$template['features']['tree5a4']."</li>";
					echo "<li>".$template['features']['tree5a5']."</li>";
					echo "<li>".$template['features']['tree5a6']."</li>";
					echo "<li>".$template['features']['tree5a7']."</li>";
					echo "<li>...</li>";
				echo "</ul></li>";
			echo "<li>".$template['features']['tree5b']."</li>";
			echo "<li>...</li>";
		echo "</ul>";
	echo "</ul>";

	echo "<p>".$template['features']['text2']."</p>";
echo "</div>";
?>