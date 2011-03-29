<?
// Security check
unset($checkNetHack);
unset($_GET['checkNetHack']);
$checkNetHack=0;

require("conf/packages.php");
require("conf/functions.php");

// Set environment
$docRoot=$_SERVER['DOCUMENT_ROOT'].dirname($_SERVER['SCRIPT_NAME']);

// Get the page using GET value
$id=trim(strip_tags(htmlentities($_GET['id'],ENT_QUOTES)));
if(strpos($id,"..")===TRUE) header("Location: .");

// Set browser lang
$lang=setlang();

require("conf/config.php");

// Search activated
search();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta name="robots" content="index,follow" />
	<meta name="copyright" content="etherea` ./LSD @ virg0.org | CreativeCode | KVIrc.net" />
	<meta name="copyright" content="HelLViS69 hellvis69 @ gmail.com | GPL | KVIrc.net" />
	<meta name="author" content="etherea` - graphics - ./LSD @ virg0.org" />
	<meta name="author" content="HelLViS69 - code - hellvis69 @ gmail.com" />
	<meta name="distribution" content="global" />
	<meta name="description" content="KVIrc.net - The K-Visual IRC client" />
	<meta name="keywords" content="KVIrc, KDE, IRC, Chat, pragma" />
	<!-- Google Diagnostic start -->
	<meta name="verify-v1" content="Q0B/rT+mLDe7URI4WfL8NQlJ5ksx3WMAMK3K0spUib4=" />
	<!-- Google Diagnostic end -->
	<link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/layout4_setup.css" />
	<link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/layout4_text.css" />
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="alternate" type="application/rss+xml" href="rss.php"  title="KVIrc News" />
	<script type="text/javascript" src="conf/functions.js"></script>
	<!-- Google Analytics start -->
	<script type="text/javascript" src="http://www.google-analytics.com/urchin.js"></script>
	<!-- Google Analytics end -->
	<title>KVIrc.net - The Visual IRC Client</title>
	<!-- AKVS head start v1.5 -->
	<style type="text/css">
	<!--
	div#akct {
		position: absolute; top:0px; right: 0px; z-index: 2342; width:113px; height:88px;
		background-image: url(http://wiki.vorratsdatenspeicherung.de/images/Akvse.gif);
		background-repeat: no-repeat;
		background-position: right top;
		border:none;
		padding:0;
		margin:0;
		text-align: right;
	}

	div#akct img {
		border:none;
		padding:0;
		margin:0;
		background: none;
	}

	div#akct a#akpeel img {
	        width: 113px;
	        height: 88px;
	}

	div#akct a, div#akct a:hover {
		text-decoration: none;
		border:none;
		padding:0;
		margin:0;
		display: block;
		background: none;
	}

	div#akct a#akpeel:hover {
		position: absolute; top:0px; right: 0px; z-index: 4223; width:500px; height:500px;
		display: block;
		background-image: url(http://wiki.vorratsdatenspeicherung.de/images/Akvsb.gif);
		background-repeat: no-repeat;
		background-position: right top;
	}

	div#akct a#akpreload {
		background-image: url(http://wiki.vorratsdatenspeicherung.de/images/Akvsb.gif);
		background-repeat: no-repeat;
		background-position: 234px 0px;
	}
	-->
	</style>
	<!--[if gte IE 5.5]>
	<![if lt IE 7]>
	<style type="text/css">
	div#akct a#akpeel:hover {
		right: -1px;
	}
	</style>
	<![endif]>
	<![endif]-->
	<!-- AKVS head end -->
</head>
<body>
	<!-- Google Analytics start -->
	<script type="text/javascript">
		_uacct="UA-881180-2";
		urchinTracker();
	</script>
	<!-- Google Analytics end -->
	<div class="page-container">
		<div class="header">
			<div class="header-top"></div>
			<div class="header-middle">
				<ul>
				<li><a href="?id=<?=$id;?>&amp;lang=it" title="<?=$template['index']['italian'];?>"><img src="./img/flags/Italy.png" alt="<?=$template['index']['italian'];?>" /></a></li>
				<li><a href="?id=<?=$id;?>&amp;lang=en" title="<?=$template['index']['english'];?>"><img src="./img/flags/United-States.png" alt="<?=$template['index']['english'];?>" /></a></li>
				<li><a href="?id=<?=$id;?>&amp;lang=de" title="<?=$template['index']['german'];?>"><img src="./img/flags/Germany.png" alt="<?=$template['index']['german'];?>" /></a></li>
				<li><a href="?id=<?=$id;?>&amp;lang=es" title="<?=$template['index']['spanish'];?>"><img src="./img/flags/Spain.png" alt="<?=$template['index']['spanish'];?>" /></a></li>
				<li><a href="?id=<?=$id;?>&amp;lang=fr" title="<?=$template['index']['french'];?>"><img src="./img/flags/France.png" alt="<?=$template['index']['french'];?>" /></a></li>
				<?/*
				<li><a href="?id=<?=$id;?>&amp;lang=ru" title="<?=$template['index']['russian'];?>"><img src="./img/flags/Russia.png" alt="<?=$template['index']['russian'];?>" /></a></li>
				<li><a href="?id=<?=$id;?>&amp;lang=bg" title="<?=$template['index']['bulgarian'];?>"><img src="./img/flags/Bulgaria.png" alt="<?=$template['index']['bulgarian'];?>" /></a></li>
				<li><a href="?id=<?=$id;?>&amp;lang=cz" title="<?=$template['index']['czech'];?>"><img src="./img/flags/Czech-Republic.png" alt="<?=$template['index']['czech'];?>" /></a></li>
				<li><a href="?id=<?=$id;?>&amp;lang=nl" title="<?=$template['index']['dutch'];?>"><img src="./img/flags/Netherlands.png" alt="<?=$template['index']['dutch'];?>" /></a></li>
				<li><a href="?id=<?=$id;?>&amp;lang=pl" title="<?=$template['index']['polish'];?>"><img src="./img/flags/Poland.png" alt="<?=$template['index']['polish'];?>" /></a></li>
				<li><a href="?id=<?=$id;?>&amp;lang=pt" title="<?=$template['index']['portuguese'];?>"><img src="./img/flags/Portugal.png" alt="<?=$template['index']['portuguese'];?>" /></a></li>
				<li><a href="?id=<?=$id;?>&amp;lang=br" title="<?=$template['index']['brazilian'];?>"><img src="./img/flags/Brazil.png" alt="<?=$template['index']['brazilian'];?>" /></a></li>
				<li><a href="?id=<?=$id;?>&amp;lang=sr" title="<?=$template['index']['serbian'];?>"><img src="./img/flags/Serbia.png" alt="<?=$template['index']['serbian'];?>" /></a></li>
				<li><a href="?id=<?=$id;?>&amp;lang=hu" title="<?=$template['index']['hungarian'];?>"><img src="./img/flags/Hungary.png" alt="<?=$template['index']['hungarian'];?>" /></a></li>
				<li><a href="?id=<?=$id;?>&amp;lang=hr" title="<?=$template['index']['croatian'];?>"><img src="./img/flags/Croatia.png" alt="<?=$template['index']['croatian'];?>" /></a></li>
				<li><a href="?id=<?=$id;?>&amp;lang=lv" title="<?=$template['index']['latvian'];?>"><img src="./img/flags/Latvia.png" alt="<?=$template['index']['latvian'];?>" /></a></li>*/?>
				</ul>
			</div>
			<div class="header-bottom">
				<div class="nav2">
					<ul>
						<li><a href=".">home</a></li>
					</ul>
					<ul>
						<li><a href="#"><?=$template['index']['theproject'];?></a>
							<ul>
								<li><a href="?id=status&amp;lang=<?=$lang;?>"><?=$template['index']['status'];?></a></li>
								<li><a href="?id=features&amp;lang=<?=$lang;?>"><?=$template['index']['features'];?></a></li>
								<li><a href="?id=license&amp;lang=<?=$lang;?>"><?=$template['index']['license'];?></a></li>
								<li><a href="?id=screen&amp;lang=<?=$lang;?>"><?=$template['index']['screens'];?></a></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li><a href="#"><?=$template['index']['running'];?></a>
							<ul>
								<li><a href="?id=download&amp;lang=<?=$lang;?>"><?=$template['index']['download'];?></a></li>
								<li><a href="?id=releases&amp;lang=<?=$lang;?>"><?=$template['index']['releases'];?></a></li>
								<li><a href="?id=snapshots&amp;lang=<?=$lang;?>"><?=$template['index']['snapshots'];?></a></li>
								<li><a href="?id=svn&amp;lang=<?=$lang;?>"><?=$template['index']['svn'];?></a></li>
								<li><a href="?id=install&amp;lang=<?=$lang;?>"><?=$template['index']['install'];?></a></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li><a href="#"><?=$template['index']['docs'];?></a>
							<ul>
								<li><a href="?id=faq&amp;lang=<?=$lang;?>"><?=$template['index']['faq'];?></a></li>
								<li><a href="javascript:opendoc('https://svn.kvirc.de/kvirc/wiki/FAQ');"><?=$template['index']['faq2'];?></a></li>
								<li><a href="javascript:opendoc('api');"><?=$template['index']['api'];?></a></li>
								<li><a href="javascript:opendoc('doc');"><?=$template['index']['doc'];?></a></li>
								<li><a href="?id=tutorials&amp;lang=<?=$lang;?>"><?=$template['index']['tutorials'];?></a></li>
								<li><a href="javascript:opendoc('https://svn.kvirc.de/kvirc/wiki/KeyboardShortcuts');"><?=$template['index']['shortcuts'];?></a></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li><a href="#"><?=$template['index']['graphsuite'];?></a>
							<ul>
								<li><a href="?id=themes&amp;lang=<?=$lang;?>"><?=$template['index']['themes'];?></a></li>
								<li><a href="?id=splash&amp;lang=<?=$lang;?>"><?=$template['index']['splash'];?></a></li>
								<li><a href="?id=banners&amp;lang=<?=$lang;?>"><?=$template['index']['banners'];?></a></li>
								<li><a href="?id=arts&amp;lang=<?=$lang;?>"><?=$template['index']['arts'];?></a></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li><a href="#"><?=$template['index']['misc'];?></a>
							<ul>
								<li><a href="?id=honor&amp;lang=<?=$lang;?>"><?=$template['index']['honor'];?></a></li>
								<li><a href="?id=translation&amp;lang=<?=$lang;?>"><?=$template['index']['translations'];?></a></li>
								<li><a href="?id=scripts&amp;lang=<?=$lang;?>"><?=$template['index']['scripts'];?></a></li>
								<li><a href="?id=addons&amp;lang=<?=$lang;?>"><?=$template['index']['addons'];?></a></li>
								<li><a href="?id=tools&amp;lang=<?=$lang;?>"><?=$template['index']['tools'];?></a></li>
								<li><a href="?id=changelog&amp;lang=<?=$lang;?>"><?=$template['index']['changelog'];?></a></li>
								<li><a href="javascript:opendoc('http://cia.vc/stats/project/kvirc');" title="CIA commits on KVIrc project"><?=$template['index']['svncommits'];?></a></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li><a href="#"><?=$template['index']['contact'];?></a>
							<ul>
								<li><a href="?id=mailinglist&amp;lang=<?=$lang;?>"><?=$template['index']['ml'];?></a></li>
								<li><a href="?id=archive&amp;lang=<?=$lang;?>"><?=$template['index']['archive'];?></a></li>
								<li><a href="?id=contribute&amp;lang=<?=$lang;?>"><?=$template['index']['contribute'];?></a></li>
								<li><a href="?id=help&amp;lang=<?=$lang;?>"><?=$template['index']['help'];?></a></li>
								<li><a href="?id=donate&amp;lang=<?=$lang;?>"><?=$template['index']['donation'];?></a></li>
								<li><a href="javascript:opendoc('https://svn.kvirc.de/kvirc/');" title="KVIrc bugtrack"><?=$template['index']['bugtrack'];?></a></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li><a href="#"><?=$template['index']['related'];?></a>
							<ul>
								<li><a href="javascript:opendoc('http://forum.kvirc.ru/');"><?=$template['index']['forum'];?></a></li>
								<li><a href="javascript:opendoc('http://www.kvirc.ru/');"><?=$template['index']['rusite'];?></a></li>
								<li><a href="javascript:opendoc('http://kvirc.fr/');"><?=$template['index']['frsite'];?></a></li>
								<li><a href="javascript:opendoc('http://kvircfr.les-forums.com/');"><?=$template['index']['frforum'];?></a></li>
								<li><a href="javascript:opendoc('http://kvirc.dotadata.de/');"><?=$template['index']['osxsite'];?></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<div class="header-breadcrumbs">
				<ul>
					<li><a href="<?=$quickdownload_link;?>" title="get the latest release"><?=$template['index']['quickdnl'];?></a></li>
					<!--
					<li><a href="ftp://ftp.kvirc.de/pub/kvirc/snapshots/" title="get snapshots"><?=$template['index']['snapshots'];?></a></li>
					<li><a href="?id=themes&amp;lang=<?=$lang;?>" title="themes and appearance"><?=$template['index']['themes'];?></a></li>
					//-->
				</ul>
				<div class="searchform">
					<form action="<?="?id=$id&amp;lang=$lang";?>" method="post" class="form">
						<fieldset>
							<input type="text" name="keywords" value="<?=$template['index']['search'];?>..." class="field" onclick="this.value=''" />
							<input type="hidden" name="type" value="site" />
							<input type="submit" name="button" value="<?=$template['index']['go'];?>!" class="button" />
						</fieldset>
					</form>
				</div>
			</div>
		</div>

		<div class="main">
			<div class="main-navigation">
				<div class="round-border-topright"></div>
				<h1 class="first"><img src="img/internet-news-reader.png" alt="<?=$template['index']['latestnews'];?>" width="16" height="16" class="noborder" /><?=$template['index']['latestnews'];?></h1>

				<!-- inserire codeswitch news-->
				<dl class="nav3-grid">
					<?
					$latestnews=array();
					news_scan_dir($docRoot."/news/latest",$latestnews);
					for($i=0;$i<10;$i++){
						if(basename($latestnews[$i])=="") break;
						$x["dummy"] = "";
						news_read_entry($latestnews[$i],$x);
						echo "<dt><a href=\"?id=news&amp;story=".basename($latestnews[$i])."&amp;dir=latest&amp;lang=$lang\">".$x["day"]." ".$x["monthname"]." ".$x["year"]."<br />".$x['short']."</a></dt>\n";
					}
					echo "<dt><a href=\"?id=news&amp;dir=latest&amp;lang=$lang\">".$template['index']['allnews']."</a></dt>";
					?>
				</dl>

				<h1><img src="img/internet-web-browser.png" alt="<?=$template['index']['mirrors'];?>" class="noborder" /><?=$template['index']['mirrors'];?></h1>
				<h3><?=$template['index']['wwwmirrors'];?></h3>
				<p>
					<?
					foreach($www_mirror as $key => $value)
						echo "<a href=\"".$value['url']."\" class=\"info\">".$value['name']."<span><br />".$value['desc']."<br />".$template['custom']['city'].": ".$value['city']."<br />".$template['custom']['maintainer'].": ".$value['maintainer']."</span></a><br />";
					?>
				</p>
				<h3><?=$template['index']['ftpmirrors'];?></h3>
				<p>
					<?
					foreach($ftp_mirror as $key => $value)
						echo "<a href=\"".$value['url']."\" class=\"info\">".$value['name']."<span><br />".$value['desc']."<br />".$template['custom']['city'].": ".$value['city']."<br />".$template['custom']['maintainer'].": ".$value['maintainer']."</span></a><br />";
					?>
				</p>
				<p><br />
					<?
					echo $template['index']['mirrorstext1a']." <a href=\"?id=mirroring&amp;lang=$lang\" title=\"".$template['index']['mirrorstitle']."\">".$template['index']['mirrorstext1b']."</a> ".$template['index']['mirrorstext1c']."<br />";
					echo $template['index']['mirrorstext2'];
					?>
				</p>

				<h1><img src="img/network-offline.png" alt="<?=$template['index']['oldlayout'];?>" class="noborder" /><?=$template['index']['oldlayout'];?></h1>
				<p>
					<img src="img/th_oldsite_1.gif" alt="<?=$template['index']['oldsite'];?>" width="159" height="105" /><br />
					<a href="javascript:opendoc('http://old.kvirc.de/');" title="<?=$template['index']['oldsite'];?>">old.kvirc.de</a> by istari
				</p>
				<p>
					<img src="img/th_oldsite_2.gif" alt="<?=$template['index']['oldsite'];?>" width="159" height="105" /><br />
					kvirc.virg0.org/old by <a href="javascript:opendoc('http://iakko.net/');" title="<?=$template['index']['iakkohome'];?>">iakko</a>
				</p>
			</div>
 
			<div class="main-content">
				<?
				// checking for page existance
				if(!file_exists("./content/$id.php"))
					include('content/welcome.php');
				else include("./content/$id.php");
				?>
				<hr class="clear-contentunit" />
			</div>

			<div class="main-subcontent">
				<div class="subcontent-unit-border">
					<div class="round-border-topleft"></div><div class="round-border-topright"></div>
					<h1><img src="img/applications-graphics.png" alt="<?=$template['index']['latestscreen'];?>" /><?=$template['index']['latestscreen'];?></h1>
					<p class="center">
						<img src="img/themes/th_theme_anger.gif" alt="Anger Theme - KVIrc &quot;Anomalies&quot;" /><br />

						<a href="javascript:opendoc('http://kvirc.virg0.org/themes.htm');" title="Anger Theme @ kvirc.virg0.org">Anger theme</a> - <a href="mailto:cle [at] virg0 [dot] org" title="mail etherea`">etherea`</a><br />
						KVIrc Anomalies
					</p>
				</div>
				<div class="subcontent-unit-border">
					<div class="round-border-topleft"></div><div class="round-border-topright"></div>
					<h1><img src="img/help-browser.png" alt="finding help" /><?=$template['index']['help'];?></h1>
					<p class="center">
						<?=$template['index']['helptext1a']." <a href=\"?id=mailinglist&amp;lang=$lang\" title=\"".$template['index']['helptext1b']."\">".$template['index']['helptext1b']."</a><br /><br />".$template['index']['helptext1c']."<br />";?>

						<a href="irc://irc.eutelia.it/KVIrc">#kvirc@IRCnet</a><br /><a href="irc://irc.azzurra.org/KVIrc.net">#kvirc.net@azzurra</a><br /><a href="irc://irc.freenode.org/KVIrc">#kvirc@freenode</a>
					</p>
				</div>
				<div class="subcontent-unit-border-orange">
					<div class="round-border-topleft"></div><div class="round-border-topright"></div>
					<h1 class="orange"><img src="img/media-record.png" alt="<?=$template['index']['bugreport'];?>" /><?=$template['index']['bugreport'];?></h1>
					<p class="center">
						<?=$template['index']['bugstext'];?> <a href="javascript:opendoc('https://svn.kvirc.de/kvirc/');" title="<?=$template['index']['bugtrack'];?>"><?=$template['index']['bugtrack'];?></a>
					</p>
				</div>
				<div class="subcontent-unit-border">
					<div class="round-border-topleft"></div><div class="round-border-topright"></div>
					<h1><img src="img/document-open.png" alt="<?=$template['index']['moredocs'];?>" /><?=$template['index']['moredocs'];?></h1>
					<p class="center">
						<a href="javascript:opendoc('http://www.kvirc.net/doc');" title="<?=$template['index']['officialdocs'];?>"><?=$template['index']['officialdocs'];?></a><br /><?=$template['index']['docsauto'];?>
					</p>
				</div>
				<div class="subcontent-unit-border-white">
					<div class="round-border-topleft"></div><div class="round-border-topright"></div>
					<h1><img src="img/dialog-information.png" alt="<?=$template['index']['hwdonation'];?>" /><?=$template['index']['hwdonation'];?></h1>
					<p class="center">
						<a href="javascript:opendoc('http://www.waaf.net');" title="waaf.net - the hosting &amp; development company"><img src="img/waaf.net.gif" alt="waaf.net - the hosting &amp; development company" /></a><br />
						<a href="javascript:opendoc('http://www.waaf.net');" title="waaf.net - the hosting &amp; development company">waaf.net</a> <?=$template['index']['hwdonationtext'];?>
						<?if(getHostKvircde()) echo " ".$template['index']['donationtextkvirc.de'];?>
					</p>
				</div>
				<div class="subcontent-unit-border-white">
					<div class="round-border-topleft"></div><div class="round-border-topright"></div>
					<h1><img src="img/dialog-information.png" alt="<?=$template['index']['tahdonation'];?>" /><?=$template['index']['tahdonation'];?></h1>
					<p class="center">
						<a href="javascript:opendoc('http://www.tmt.de');"><img src="img/tmtlogo.gif" alt="TMT Teleservice" /></a><br />
						<a href="javascript:opendoc('http://www.tmt.de');">TMT Teleservice</a> <?=$template['index']['tahdonationtext'];?>
						<?if(getHostKvircde()) echo " ".$template['index']['donationtextkvirc.de'];?>
					</p>
				</div>
			</div>
		</div>

		<div class="footer">
			<p>KVIrc.net | (c) 2007-<?=date("Y");?> ./LSD - CreativeCode | <?=$template['index']['footer'];?></p>
			<p class="credits"><a href="javascript:opendoc('http://validator.w3.org/check/referer');" title="Validate XHTML code">XHTML 1.1</a> | <a href="javascript:opendoc('http://jigsaw.w3.org/css-validator/check/referer');" title="Validate CSS code">CSS 2.1</a> | credits</p>
		</div>
	</div>
	<?
	if (stristr(gethostbyaddr (gethostbyname ($_SERVER["SERVER_NAME"])),'kvirc.de')){
		echo "<div id=\"akct\"><a id=\"akpeel\" href=\"javascript:opendoc('http://www.vorratsdatenspeicherung.de');\" title=\"Stoppt die Vorratsdatenspeicherung! Jetzt klicken &amp; handeln!\"><img src=\"http://wiki.vorratsdatenspeicherung.de/images/Akvst.gif\" alt=\"Stoppt die Vorratsdatenspeicherung! Jetzt klicken &amp; handeln!\" /></a><a id=\"akpreload\" href=\"javascript:opendoc('http://wiki.vorratsdatenspeicherung.de/?title=Online_Demo');\" title=\"Willst du auch bei der Aktion teilnehmen? Hier findest du alle relevanten Infos und Materialien:\"><img src=\"http://wiki.vorratsdatenspeicherung.de/images/Akvsi.gif\" alt=\"Willst du auch bei der Aktion teilnehmen? Hier findest du alle relevanten Infos und Materialien:\" /></a></div>\n";
	}
	?>
</body>
</html>
