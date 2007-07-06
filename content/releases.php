<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

require_once("conf/packages.php");

echo "<h1 class=\"pagetitle\">".$template['releases']['title']."</h1>";
echo "<div class=\"column1-unit\">";

	if($platform=="")
		$platform=trim(strip_tags(addslashes($_GET['platform'])));
	if($version=="")
		$version=trim(strip_tags(addslashes($_GET['version'])));
	if($group=="")
		$group=trim(strip_tags(addslashes($_GET['group'])));

	if($platform==""){
		echo "<p>".$template['releases']['text1']."</p>";

		// find out the available platforms
		$av_platforms=0;

		for($i=0;$i<$package_count;$i++){
			$good="yes";
			for($j=0;$j<$av_platforms;$j++){
				if($av_platform[$j]==$p_platform[$i]){
					$good="no";
					break;
				}
			}

			if($good=="yes"){
				$av_platform[$av_platforms]=$p_platform[$i];
				$av_platforms++;
			}
		}

		// now spit it out
		for($i=0;$i<$av_platforms;$i++){
			$text=$av_platform[$i];
			if(isset($platform_description[$av_platform[$i]]))
				$text=$platform_description[$av_platform[$i]];
			echo "<h1><a href=\"?id=releases&amp;platform=".$av_platform[$i]."&amp;lang=$lang\">$text</a></h1>";
		
			if(isset($platform_details[$av_platform[$i]])){
				$text=$platform_details[$av_platform[$i]];
				echo "<p>$text</p>";
			}
		}
	} elseif($version==""){
		echo "<p>".$template['releases']['text2']."</p>";

		// find out the available versions
		$av_versions = 0;
	
		for($i=0;$i<$package_count;$i++){
			$good="yes";

			if($p_platform[$i]==$platform){
				for($j=0;$j<$av_versions;$j++){
					if($av_version[$j]==$p_version[$i]){
						$good="no";
						break;
					}
				}
		
				if($good=="yes"){
					$av_version[$av_versions]=$p_version[$i];
					$av_versions++;
				}
			}
		}
	
		// now spit it out
		for($i=0;$i<$av_versions;$i++){
			switch($i){
				case 0:
					echo "<h1>".$template['releases']['latest']."</h1>";
				break;
				case 1:
					echo "<h1>".$template['releases']['older']."</h1>";
				break;
			}

			$text=$av_version[$i];
			
			if(isset($version_description[$av_version[$i]]))
				$text=$version_description[$av_version[$i]];

			echo "<h3><a href=\"?id=releases&amp;platform=$platform&amp;version=".$av_version[$i]."&amp;lang=$lang\">$text</a></h3>";

			if(isset($version_details[$av_version[$i]])){
				$text=$version_details[$av_version[$i]];
				echo "<p>$text</p>";
			}
		}
	} else {
		// we have both platform, version
		// get the group list

		$av_groups=0;

		for($i=0;$i<$package_count;$i++){
			if(($p_version[$i]==$version)&&($p_platform[$i]==$platform)){
				$gotit="false";

				for($j=0;$j<$av_groups;$j++){
					if(isset($p_group[$i])){
						if($av_group[$j]==$p_group[$i]){
							$gotit="true";
							break;
						}
					}
				}

				if($gotit=="false"){
					$av_group[$av_groups]=$p_group[$i];
					$av_groups++;
				}
			}
		}

		if(($av_groups<2)||($group!="")){
			for($i=0;$i<$package_count;$i++){
				if(($p_version[$i]==$version)&&($p_platform[$i]==$platform)&&(($av_groups<2)||($group==$p_group[$i]))){
					echo "<table>";
						echo "<tr><td class=\"header\" colspan=\"2\">".$p_description[$i]."</td></tr>";
						echo "<tr><td class=\"data\">".$template['custom']['version']."</td><td class=\"value\">".$version_description[$version]."</td></tr>";
						echo "<tr><td class=\"data\">".$template['custom']['type']."</td><td class=\"value\">".$platform_description[$platform]."</td></tr>";

						if($p_size[$i]!="")
							echo "<tr><td class=\"data\">".$template['custom']['size']."</td><td class=\"value\">".$p_size[$i]."</td></tr>";
						if($p_author[$i]!="")
							echo "<tr><td class=\"data\">".$template['custom']['author']."</td><td class=\"value\">".$p_author[$i]."</td></tr>";
						if($p_details[$i]!="")
							echo "<tr><td class=\"value\" colspan=\"2\">".$p_details[$i]."</td></tr>";

						echo "<tr><td colspan=\"2\">";
						echo "<b>".$template['releases']['available']."</b><br /><br />";
						for($j=0;$j<$ftp_mirror_count;$j++){
							echo "<a href=\"".$ftp_mirror_link[$j]."/".$p_path[$i]."/".$p_filename[$i]."\">".$p_filename[$i]."</a><br />";
							echo $ftp_mirror_text[$j]."<br /><br />";
						}
						echo "</td></tr></table>";
				}
			}
		} else {
			// more than 1 group and $group has not been selected
			// now spit it out
			echo $template['releases']['text3'].".<br /><br />";
	
			for($i = 0;$i < $av_groups;$i++){
				$text=$av_group[$i];
				if(isset($group_description[$av_group[$i]]))
					$text=$group_description[$av_group[$i]];

				echo "<a href=\"?id=releases&amp;platform=$platform&amp;version=$version&amp;group=".$av_group[$i]."&amp;lang=$lang\">$text</a><br />";
				if(isset($group_details[$av_group[$i]])){
					$text=$group_details[$av_group[$i]];
					echo $text;
					echo "<br /><br />";
				}
				echo "<br />";
			}
		}
	}
	?>
</div>