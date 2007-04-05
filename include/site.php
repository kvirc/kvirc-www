<?php

	function site_header($szPageTitle = "")
	{
		$szTitle = "KVIrc - The Visual IRC Client";
		if($szPageTitle != "")
			$szTitle .= " - ".$szPageTitle;
	
		echo "<html>\n";
		echo  "<head>\n";
		echo   "<title>".$szTitle."</title>";
		echo   "<link href=\"css/default.css\" rel=\"stylesheet\" type=\"text/css\">\n";
		echo   "<link rel=\"shortcut icon\" href=\"favicon.ico\" />\n";
		echo   "<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />\n";
		echo   "<meta name=\"author\" content=\"KVIrc Development Team\" />\n";
		echo   "<meta name=\"keywords\" content=\"kvirc,irc,irc client,client,rfc 1459,chat,linux,unix,windows,mac osx,opensource,gpl\" />\n";
		echo   "<meta name=\"description\" content=\"A portable graphical IRC client\" />\n";
		echo   "<meta name=\"robots\" content=\"all\" />\n";
		echo  "</head>\n";
		echo  "<body onload=\"window.defaultStatus='".$szTitle."';\">\n";
		
		echo  "<div id=\"site\">";
		echo   "<div id=\"site_header\">";
		echo "HEADER CONTENTS HEADER CONTENTS HEADER CONTENTS HEADER CONTENTS HEADER CONTENTS HEADER CONTENTS HEADER CONTENTS HEADER CONTENTS HEADER CONTENTS HEADER CONTENTS";
		echo   "</div>";
		
		echo   "<div id=\"site_menu\">";

		echo    "<div id=\"site_menu_main\">";
		echo     "<ul>\n";
		echo      "<li><a href=\"features.php\">features</a></li>\n";
		echo      "<li><a href=\"authors.php\">authors</a></li>\n";
		echo     "</ul>\n";
		echo    "</div>";

		echo    "<div id=\"site_menu_download\">";
		echo     "<ul>\n";
		echo      "<li><a href=\"download.php\">download</a></li>\n";
		echo     "</ul>\n";
		echo    "</div>";


		echo    "<div id=\"site_menu_documentation\">";
		echo     "<ul>\n";
		echo      "<li><a href=\"installation.php\">installation</a></li>\n";
		echo      "<li><a href=\"faq.php\">faq</a></li>\n";
		echo      "<li><a href=\"manual.php\">manual</a></li>\n";
		echo      "<li><a href=\"wiki.php\">wiki</a></li>\n";
		echo     "</ul>\n";
		echo    "</div>";

		echo   "</div>";

		echo   "<div id=\"site_contents\">";
	}


	function site_footer()
	{
		echo   "</div>";

		echo   "<div id=\"site_footer\">";
		echo "FOOTTER CONTENTS FOOTTER CONTENTS FOOTTER CONTENTS FOOTTER CONTENTSFOOTTER CONTENTS FOOTTER CONTENTSFOOTTER CONTENTS FOOTTER CONTENTS FOOTTER CONTENTS FOOTTER CONTENTS FOOTTER CONTENTS";
		echo   "</div>";

		echo  "</div>";

		echo  "</body>\n";
		echo "</html>\n";
	}

?>
