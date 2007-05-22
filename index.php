<?
// Security check
unset($checkNetHack);
unset($_GET['checkNetHack']);
$checkNetHack=0;

require("conf/packages.php");
require("conf/functions.php");

// Set environment
setenv();
$docRoot=$_SERVER['DOCUMENT_ROOT'].dirname($_SERVER['SCRIPT_NAME']);

// Get the page using GET value
$id=trim(strip_tags(addslashes($_GET['id'])));

// Set browser lang
$lang=setlang();

// Include language templates
if(!file_exists("./translation/locale_$lang.php"))
	include("./translation/locale_en.php");
else include("./translation/locale_$lang.php");

require("conf/config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta name="robots" content="index,follow" />
	<meta name="publisher" content="etherea` ./LSD @ virg0.org - CreativeCode" />
	<meta name="copyright" content="etherea` ./LSD @ virg0.org | CreativeCode | KVIrc.net" />
	<meta name="author" content="etherea` - graphics - ./LSD @ virg0.org" />
	<meta name="author" content="HelLViS69 - code - hellvis69 @ netsons.org" />
	<meta name="distribution" content="global" />
	<meta name="description" content="KVIrc.net - The K-Visual IRC client" />
	<meta name="keywords" content="KVIrc, KDE, IRC, Chat, pragma" />
	<!-- Google diagnostic start -->
	<meta name="verify-v1" content="Q0B/rT+mLDe7URI4WfL8NQlJ5ksx3WMAMK3K0spUib4=" />
	<!-- Google diagnostic end -->
	<link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/layout4_setup.css" />
	<link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/layout4_text.css" />
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
	<link rel="alternate" href="rss.php" type="application/rss+xml" title="KVIrc News" />
	<!--<script type="text/javascript" src="http://www.google-analytics.com/urchin.js" />-->
	<title> >. KVIrc.net - The Visual IRC Client</title>
</head>
<body>
	<!-- Google Analytics start
	<script type="text/javascript">
		_uacct="UA-881180-2";
		urchinTracker();
	</script>
	Google Analytics end -->
	<div class="page-container">
		<div class="header">
			<div class="header-top">
				<div class="sitename">
					<h1><a href="." title="KVIrc.net Home">KVIrc.net <span style="font-weight:normal;font-size:50%;">&nbsp;the visual IRC client </span></a></h1>
					<h2>no boundaries on the net</h2>
				</div>
				<div class="nav0">
					<ul>
						<li><a href="?id=<?echo $id;?>&amp;lang=it" title="<?echo $template['index']['italian'];?>"><img src="./img/flags/Italy.png" alt="<?echo $template['index']['italian'];?>" /></a></li>
						<li><a href="?id=<?echo $id;?>&amp;lang=en" title="<?echo $template['index']['english'];?>"><img src="./img/flags/United-States.png" alt="<?echo $template['index']['english'];?>" /></a></li>
						<li><a href="?id=<?echo $id;?>&amp;lang=de" title="<?echo $template['index']['german'];?>"><img src="./img/flags/Germany.png" alt="<?echo $template['index']['german'];?>" /></a></li>
						<li><a href="?id=<?echo $id;?>&amp;lang=ru" title="<?echo $template['index']['russian'];?>"><img src="./img/flags/Russia.png" alt="<?echo $template['index']['russian'];?>" /></a></li>
						<li><a href="?id=<?echo $id;?>&amp;lang=fr" title="<?echo $template['index']['french'];?>"><img src="./img/flags/France.png" alt="<?echo $template['index']['french'];?>" /></a></li>
						<li><a href="?id=<?echo $id;?>&amp;lang=es" title="<?echo $template['index']['spanish'];?>"><img src="./img/flags/Spain.png" alt="<?echo $template['index']['spanish'];?>" /></a></li>
						<li><a href="?id=<?echo $id;?>&amp;lang=bg" title="<?echo $template['index']['bulgarian'];?>"><img src="./img/flags/Bulgaria.png" alt="<?echo $template['index']['bulgarian'];?>" /></a></li>
						<li><a href="?id=<?echo $id;?>&amp;lang=cz" title="<?echo $template['index']['czech'];?>"><img src="./img/flags/Czech-Republic.png" alt="<?echo $template['index']['czech'];?>" /></a></li>
						<li><a href="?id=<?echo $id;?>&amp;lang=nl" title="<?echo $template['index']['dutch'];?>"><img src="./img/flags/Netherlands.png" alt="<?echo $template['index']['dutch'];?>" /></a></li>
						<li><a href="?id=<?echo $id;?>&amp;lang=pl" title="<?echo $template['index']['polish'];?>"><img src="./img/flags/Poland.png" alt="<?echo $template['index']['polish'];?>" /></a></li>
						<li><a href="?id=<?echo $id;?>&amp;lang=pt" title="<?echo $template['index']['portuguese'];?>"><img src="./img/flags/Portugal.png" alt="<?echo $template['index']['portuguese'];?>" /></a></li>
						<li><a href="?id=<?echo $id;?>&amp;lang=br" title="<?echo $template['index']['brazilian'];?>"><img src="./img/flags/Brazil.png" alt="<?echo $template['index']['brazilian'];?>" /></a></li>
						<li><a href="?id=<?echo $id;?>&amp;lang=sr" title="<?echo $template['index']['serbian'];?>"><img src="./img/flags/Serbia.png" alt="<?echo $template['index']['serbian'];?>" /></a></li>
						<li><a href="?id=<?echo $id;?>&amp;lang=hu" title="<?echo $template['index']['hungarian'];?>"><img src="./img/flags/Hungary.png" alt="<?echo $template['index']['hungarian'];?>" /></a></li>
						<?/*<li><a href="?id=<?echo $id;?>&amp;lang=hr" title="<?echo $template['index']['croatian'];?>"><img src="./img/flags/Croatia.png" alt="<?echo $template['index']['croatian'];?>" /></a></li>*/?>
					</ul>
				</div>
				<div class="nav1">
					<ul>
						<li><a href="?id=status&amp;lang=<?echo $lang;?>" title="KVIrc status"><?echo $template['index']['status'];?></a></li>
						<li><a href="<?echo $quickdownload_link;?>" title="get the latest release"><?echo $template['index']['quickdnl'];?></a></li>
						<li><a href="?id=themes&amp;lang=<?echo $lang;?>" title="themes and appearance"><?echo $template['index']['themes'];?></a></li>
					</ul>
				</div>
			</div>
			<div class="header-middle">
				<div class="sitemessage">
					<h1>KVIrc is a <a href="http://www.gnu.org/" title="GNU.org" target="_blank">free</a> portable <a href="http://en.wikipedia.org/wiki/Internet_Relay_Chat" title="Internet Relay Chat" target="_blank">IRC</a> client based on<br />the <a href="http://www.trolltech.com/" title="QT Trolltech" target="_blank">QT GUI Toolkit</a></h1>

					<h2><br />is being written by <a href="http://www.pragmaware.net/" title="Pragma's home" target="_blank">Szymon Stefanek</a> and<br />the KVIrc Development Team with the<br />contribution of many IRC addicted<br />developers around the world.</h2>
					<h3><a href="help" title="how to help the KVIrc project">&rsaquo;&rsaquo;&nbsp;be part of the project!</a></h3>
				</div>
			</div>
			<div class="header-bottom">
				<div class="nav2">
					<ul>
						<li><a href=".">home</a></li>
					</ul>
					<ul>
						<li><a href="#"><?echo $template['index']['theproject'];?></a>
							<ul>
								<li><a href="?id=status&amp;lang=<?echo $lang;?>"><?echo $template['index']['status'];?></a></li>
								<li><a href="?id=features&amp;lang=<?echo $lang;?>"><?echo $template['index']['features'];?></a></li>
								<li><a href="?id=license&amp;lang=<?echo $lang;?>"><?echo $template['index']['license'];?></a></li>
								<li><a href="?id=require&amp;lang=<?echo $lang;?>"><?echo $template['index']['require'];?></a></li>
								<li><a href="?id=screen&amp;lang=<?echo $lang;?>"><?echo $template['index']['screens'];?></a></li>
								<li><a href="http://bugtrack.kvirc.omnikron.net/" target="_blank" title="KVIrc bugtrack"><?echo $template['index']['bugtrack'];?></a></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li><a href="#"><?echo $template['index']['running'];?></a>
							<ul>
								<li><a href="?id=download&amp;lang=<?echo $lang;?>"><?echo $template['index']['download'];?></a></li>
								<li><a href="?id=releases&amp;lang=<?echo $lang;?>"><?echo $template['index']['releases'];?></a></li>
								<li><a href="?id=snapshots&amp;lang=<?echo $lang;?>"><?echo $template['index']['snapshots'];?></a></li>
								<li><a href="?id=svn&amp;lang=<?echo $lang;?>"><?echo $template['index']['svn'];?></a></li>
								<li><a href="?id=install&amp;lang=<?echo $lang;?>"><?echo $template['index']['install'];?></a></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li><a href="#"><?echo $template['index']['builds'];?></a>
							<ul>
								<li><a href="macosx">MacOS X</a></li>
								<li><a href="suse">SUSe</a></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li><a href="#"><?echo $template['index']['docs'];?></a>
							<ul>
								<li><a href="?id=faq&amp;lang=<?echo $lang;?>"><?echo $template['index']['faq'];?></a></li>
								<li><a href="http://www.kvirc.de/docu/"><?echo $template['index']['kviman'];?></a></li>
								<li><a href="http://www.aclibre.org/archives/kvric-es.pdf"><?echo $template['index']['spanishman'];?></a></li>
								<li><a href="http://we-are-teh-b.org/~kvirc/index.php/Main_Page"><?echo $template['index']['kviwiki'];?></a></li>
								<li><a href="?id=tutorials&amp;lang=<?echo $lang;?>"><?echo $template['index']['tutorials'];?></a></li>
								<li><a href="?id=translation&amp;lang=<?echo $lang;?>"><?echo $template['index']['translations'];?></a></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li><a href="#"><?echo $template['index']['graphsuite'];?></a>
							<ul>
								<li><a href="?id=themes&amp;lang=<?echo $lang;?>"><?echo $template['index']['themes'];?></a></li>
								<li><a href="startups"><?echo $template['index']['startup'];?></a></li>
								<li><a href="?id=splash&amp;lang=<?echo $lang;?>"><?echo $template['index']['splash'];?></a></li>
								<li><a href="?id=banners&amp;lang=<?echo $lang;?>"><?echo $template['index']['banners'];?></a></li>
								<li><a href="?id=arts&amp;lang=<?echo $lang;?>"><?echo $template['index']['arts'];?></a></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li><a href="#"><?echo $template['index']['misc'];?></a>
							<ul>
								<li><a href="?id=honor&amp;lang=<?echo $lang;?>"><?echo $template['index']['honor'];?></a></li>
								<li><a href="?id=scripts&amp;lang=<?echo $lang;?>"><?echo $template['index']['scripts'];?></a></li>
								<li><a href="?id=addons&amp;lang=<?echo $lang;?>"><?echo $template['index']['addons'];?></a></li>
								<li><a href="?id=changelog&amp;lang=<?echo $lang;?>"><?echo $template['index']['changelog'];?></a></li>
								<li><a href="http://cia.navi.cx/stats/project/kvirc" target="_blank" title="CIA commits on KVIrc project"><?echo $template['index']['svncommits'];?></a></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li><a href="#"><?echo $template['index']['contact'];?></a>
							<ul>
								<li><a href="?id=mailinglist&amp;lang=<?echo $lang;?>"><?echo $template['index']['ml'];?></a></li>
								<li><a href="?id=archive&amp;lang=<?echo $lang;?>"><?echo $template['index']['archive'];?></a></li>
								<li><a href="?id=contribute&amp;lang=<?echo $lang;?>"><?echo $template['index']['contribute'];?></a></li>
								<li><a href="?id=help&amp;lang=<?echo $lang;?>"><?echo $template['index']['help'];?></a></li>
								<li><a href="?id=donate&amp;lang=<?echo $lang;?>"><?echo $template['index']['donation'];?></a></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li><a href="http://forum.kvirc.ru/" target="_blank" title="KVIrc forum"><?echo $template['index']['forum'];?></a></li>
					</ul>
				</div>
			</div>
			<div class="header-breadcrumbs">
				<ul>
					<li><a href="#">KVIrc</a></li>
					<li><a href="#">human interface</a></li>
					<li>navigation</li>
				</ul>

				<div class="searchform">
					<form action="#" method="get" class="form">
						<fieldset>
							<input value=" <?echo $template['index']['search'];?>..." name="field" class="field" />
							<input type="submit" value="<?echo $template['index']['go'];?>!" name="button" class="button" />
						</fieldset>
					</form>
				</div>
			</div>
		</div>

		<div class="main">
			<div class="main-navigation">
				<div class="round-border-topright"></div>
				<h1 class="first"><img src="img/internet-news-reader.png" alt="<?echo $template['index']['latestnews'];?>" width="16" height="16" border="0"/><?echo $template['index']['latestnews'];?></h1>

				<!-- inserire codeswitch news-->
				<dl class="nav3-grid">
					<?
					$latestnews=array();
					news_scan_dir("news/latest",$latestnews);
					for($i=0;$i<10;$i++){
						if(basename($latestnews[$i])=="") break;
						$x["dummy"] = "";
						news_split_filename(basename($latestnews[$i]),$x);
						echo "<dt><a href=\"?id=news&amp;lang=$lang&amp;story=".basename($latestnews[$i])."&amp;dir=latest\">".$x["day"]." ".$x["monthname"]." ".$x["year"]."</a></dt>\n";
					}
					echo "<dt><a href=\"?id=news&amp;lang=$lang&amp;dir=latest\">".$template['index']['allnews']."</a></dt>";
					?>
				</dl>

				<h1><img src="img/internet-web-browser.png" alt="<?echo $template['index']['mirrors'];?>" border="0" /><?echo $template['index']['mirrors'];?></h1>
				<h3><?echo $template['index']['wwwmirrors'];?></h3>
				<p>
					<?
					foreach($www_mirror as $key => $value)
						echo "<a href=\"".$value['url']."\" title=\"".$value['name']." - mirror\">".$value['name']."</a><br />";
					?>
				</p>
				<h3><?echo $template['index']['ftpmirrors'];?></h3>
				<p>
					<?
					foreach($ftp_mirror as $key => $value)
						echo "<a href=\"".$value['url']."\" title=\"".$value['name']." - mirror\">".$value['name']."</a><br />";
					?>
				</p>
				<p><br />
					<?
					echo $template['index']['mirrorstext1a']." <a href=\"?id=mirroring&amp;lang=$lang\" title=\"".$template['index']['mirrorstitle']."\">".$template['index']['mirrorstext1b']."</a> ".$template['index']['mirrorstext1c']."<br />";
					echo $template['index']['mirrorstext2'];
					?>
				</p>

				<h1><img src="img/network-offline.png" alt="<?echo $template['index']['oldlayout'];?>" border="0" /><?echo $template['index']['oldlayout'];?></h1>
				<p>
					<img src="img/th_oldsite_1.gif" alt="<?echo $template['index']['oldsite'];?>" width="159" height="105" /><br />
					<a href="http://old.kvirc.de/" title="<?echo $template['index']['oldsite'];?>" target="_blank">old.kvirc.de</a> by istari</a>
				</p>
				<p>
					<img src="img/th_oldsite_2.gif" alt="<?echo $template['index']['oldsite'];?>" width="159" height="105" /><br />
					kvirc.virg0.org/old by <a href="http://iakko.net/" title="<?echo $template['index']['iakkohome'];?>" target="_blank">iakko</a>
				</p>
			</div>
 
			<div class="main-content">
				<?
				// checking for page existance
				if(!file_exists("./content/$id.php"))
					include('content/welcome.php');
				else include("./content/$id.php");
				/*?>

				<!-- Pagetitle -->
				<h1 class="pagetitle">it's all about KVIrc, babe </h1>
				<!-- Content unit - One column -->
				<div class="column1-unit">
					<h1>beh</h1>
					<h3>bah bah </h3>
					<p>miao miao miao </p>
				</div>
				*/?>
				<hr class="clear-contentunit" />
			</div>

			<div class="main-subcontent">
				<div class="subcontent-unit-border">
				<div class="round-border-topleft"></div><div class="round-border-topright"></div>
					<h1><img src="img/applications-graphics.png" alt="<?echo $template['index']['latestscreen'];?>" /><?echo $template['index']['latestscreen'];?></h1>
					<p align="center">
						<img src="img/th_theme_anger.gif" alt="Anger Theme - KVIrc &quot;Anomalies&quot;" /><br />

						<a href="http://kvirc.virg0.org/themes.htm" title="Anger Theme @ kvirc.virg0.org" target="_blank">Anger theme</a> - <a href="mailto:cle [at] virg0 [dot] org" title="mail etherea`">etherea`</a><br />
						KVIrc Anomalies
					</p>
				</div>
				<div class="subcontent-unit-border">
				<div class="round-border-topleft"></div><div class="round-border-topright"></div>
					<h1><img src="img/help-browser.png" alt="finding help" /><?echo $template['index']['help'];?></h1>
					<p align="center">
						<?echo $template['index']['helptext1a']." <a href=\"?id=mailinglist&amp;lang=$lang\" title=\"".$template['index']['helptext1b']."\">".$template['index']['helptext1b']."</a><br /><br />".$template['index']['helptext1c']."<br />";?>

						<a href="irc://irc.eutelia.it/#KVIrc">#kvirc@IRCnet</a><br /><a href="irc://irc.azzurra.org/#KVIrc.net">#kvirc.net@azzurra</a><br /><a href="irc://irc.freenode.org/#KVIrc">#kvirc@freenode</a>
					</p>
				</div>
				<div class="subcontent-unit-border-orange">
				<div class="round-border-topleft"></div><div class="round-border-topright"></div>
					<h1 class="orange"><img src="img/media-record.png" alt="<?echo $template['index']['bugreport'];?>" /><?echo $template['index']['bugreport'];?></h1>
					<p align="center">
						<?echo $template['index']['bugstext'];?> <a href="http://bugtrack.kvirc.omnikron.net/" title="<?echo $template['index']['bugtrack'];?>" target="_blank"><?echo $template['index']['bugtrack'];?></a>
					</p>
				</div>
				<div class="subcontent-unit-border">
				<div class="round-border-topleft"></div><div class="round-border-topright"></div>
					<h1><img src="img/document-open.png" alt="<?echo $template['index']['moredocs'];?>" /><?echo $template['index']['moredocs'];?></h1>
					<p align="center">
						<a href="http://www.kvirc.de/docu/" title="<?echo $template['index']['officialdocs'];?>" target="_blank"><?echo $template['index']['officialdocs'];?></a><br /><?echo $template['index']['docsauto'];?>
					</p>
				</div>
			</div>
		</div>

		<div class="footer">
			<p>KVIrc.net | (c) 2007 ./LSD - CreativeCode | <?echo $template['index']['footer'];?></p>
			<p class="credits"><a href="http://validator.w3.org/check/referer" title="Validate XHTML code">XHTML 1.1</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="Validate CSS code">CSS 2.0</a> | credits</p>
		</div>
	</div>
</body>
</html>