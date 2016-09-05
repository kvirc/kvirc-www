<?php 
// Security check
unset($checkNetHack);
unset($_GET['checkNetHack']);
$checkNetHack=0;

require('conf/packages.php');
require('conf/functions.php');

// Set environment
$docRoot = $_SERVER['DOCUMENT_ROOT'].dirname($_SERVER['SCRIPT_NAME']);

// Get the page using GET value
$id = trim(strip_tags(htmlentities($_GET['id'],ENT_QUOTES)));
if(strpos($id, '..') === TRUE)
	header('Location: .');

// Set browser lang
$lang = setlang();

require('conf/config.php');

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
	<title>KVIrc.net - The Visual IRC Client</title>
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
					<li><a href="?id=<?php echo $id?>&amp;lang=it" title="<?php echo $template['index']['italian']?>"><img src="./img/flags/Italy.png" alt="<?php echo $template['index']['italian']?>" /></a></li>
					<li><a href="?id=<?php echo $id?>&amp;lang=en" title="<?php echo $template['index']['english']?>"><img src="./img/flags/United-States.png" alt="<?php echo $template['index']['english']?>" /></a></li>
					<li><a href="?id=<?php echo $id?>&amp;lang=de" title="<?php echo $template['index']['german']?>"><img src="./img/flags/Germany.png" alt="<?php echo $template['index']['german']?>" /></a></li>
					<li><a href="?id=<?php echo $id?>&amp;lang=es" title="<?php echo $template['index']['spanish']?>"><img src="./img/flags/Spain.png" alt="<?php echo $template['index']['spanish']?>" /></a></li>
					<li><a href="?id=<?php echo $id?>&amp;lang=fr" title="<?php echo $template['index']['french']?>"><img src="./img/flags/France.png" alt="<?php echo $template['index']['french']?>" /></a></li>
					<li><a href="?id=<?php echo $id?>&amp;lang=uk" title="<?php echo $template['index']['ukrainian']?>"><img src="./img/flags/Ukraine.png" alt="<?php echo $template['index']['ukrainian']?>" /></a></li>
					<?php /*
					<li><a href="?id=<?php echo $id?>&amp;lang=ru" title="<?php echo $template['index']['russian']?>"><img src="./img/flags/Russia.png" alt="<?php echo $template['index']['russian']?>" /></a></li>
					<li><a href="?id=<?php echo $id?>&amp;lang=bg" title="<?php echo $template['index']['bulgarian']?>"><img src="./img/flags/Bulgaria.png" alt="<?php echo $template['index']['bulgarian']?>" /></a></li>
					<li><a href="?id=<?php echo $id?>&amp;lang=cz" title="<?php echo $template['index']['czech']?>"><img src="./img/flags/Czech-Republic.png" alt="<?php echo $template['index']['czech']?>" /></a></li>
					<li><a href="?id=<?php echo $id?>&amp;lang=nl" title="<?php echo $template['index']['dutch']?>"><img src="./img/flags/Netherlands.png" alt="<?php echo $template['index']['dutch']?>" /></a></li>
					<li><a href="?id=<?php echo $id?>&amp;lang=pl" title="<?php echo $template['index']['polish']?>"><img src="./img/flags/Poland.png" alt="<?php echo $template['index']['polish']?>" /></a></li>
					<li><a href="?id=<?php echo $id?>&amp;lang=pt" title="<?php echo $template['index']['portuguese']?>"><img src="./img/flags/Portugal.png" alt="<?php echo $template['index']['portuguese']?>" /></a></li>
					<li><a href="?id=<?php echo $id?>&amp;lang=br" title="<?php echo $template['index']['brazilian']?>"><img src="./img/flags/Brazil.png" alt="<?php echo $template['index']['brazilian']?>" /></a></li>
					<li><a href="?id=<?php echo $id?>&amp;lang=sr" title="<?php echo $template['index']['serbian']?>"><img src="./img/flags/Serbia.png" alt="<?php echo $template['index']['serbian']?>" /></a></li>
					<li><a href="?id=<?php echo $id?>&amp;lang=hu" title="<?php echo $template['index']['hungarian']?>"><img src="./img/flags/Hungary.png" alt="<?php echo $template['index']['hungarian']?>" /></a></li>
					<li><a href="?id=<?php echo $id?>&amp;lang=hr" title="<?php echo $template['index']['croatian']?>"><img src="./img/flags/Croatia.png" alt="<?php echo $template['index']['croatian']?>" /></a></li>
					<li><a href="?id=<?php echo $id?>&amp;lang=lv" title="<?php echo $template['index']['latvian']?>"><img src="./img/flags/Latvia.png" alt="<?php echo $template['index']['latvian']?>" /></a></li>*/?>
				</ul>
			</div>
			<div class="header-bottom">
				<div class="nav2">
					<ul>
						<li><a href=".">Home</a></li>
					</ul>
					<ul>
						<li><a href="#"><?php echo $template['index']['theproject']?></a>
							<ul>
								<li><a href="?id=status&amp;lang=<?php echo $lang?>"><?php echo $template['index']['status']?></a></li>
								<li><a href="?id=features&amp;lang=<?php echo $lang?>"><?php echo $template['index']['features']?></a></li>
								<li><a href="?id=license&amp;lang=<?php echo $lang?>"><?php echo $template['index']['license']?></a></li>
								<li><a href="?id=screen&amp;lang=<?php echo $lang?>"><?php echo $template['index']['screens']?></a></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li><a href="#"><?php echo $template['index']['running']?></a>
							<ul>
								<li><a href="?id=download&amp;lang=<?php echo $lang?>"><?php echo $template['index']['download']?></a></li>
								<li><a href="?id=releases&amp;lang=<?php echo $lang?>"><?php echo $template['index']['releases']?></a></li>
								<li><a href="javascript:opendoc('https://github.com/kvirc/KVIrc/wiki/Downloading-KVIrc's-nightly-source-or-binaries');"><?php echo $template['index']['snapshots']?></a></li>
								<li><a href="javascript:opendoc('https://github.com/kvirc/KVIrc/wiki/Downloading-KVIrc's-nightly-source-or-binaries#source-downloads-master');"><?php echo $template['index']['git']?></a></li>
								<li><a href="?id=install&amp;lang=<?php echo $lang?>"><?php echo $template['index']['install']?></a></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li><a href="#"><?php echo $template['index']['docs']?></a>
							<ul>
								<li><a href="?id=faq&amp;lang=<?php echo $lang?>"><?php echo $template['index']['faq']?></a></li>
								<li><a href="javascript:opendoc('https://github.com/kvirc/KVIrc/wiki/FAQ');"><?php echo $template['index']['faq2']?></a></li>
								<li><a href="javascript:opendoc('api');"><?php echo $template['index']['api']?></a></li>
								<li><a href="javascript:opendoc('doc');"><?php echo $template['index']['doc']?></a></li>
								<li><a href="?id=tutorials&amp;lang=<?php echo $lang?>"><?php echo $template['index']['tutorials']?></a></li>
								<li><a href="javascript:opendoc('https://github.com/kvirc/KVIrc/wiki/Keyboard-shortcuts');"><?php echo $template['index']['shortcuts']?></a></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li><a href="#"><?php echo $template['index']['graphsuite']?></a>
							<ul>
								<li><a href="?id=themes&amp;lang=<?php echo $lang?>"><?php echo $template['index']['themes']?></a></li>
								<li><a href="?id=splash&amp;lang=<?php echo $lang?>"><?php echo $template['index']['splash']?></a></li>
								<li><a href="?id=banners&amp;lang=<?php echo $lang?>"><?php echo $template['index']['banners']?></a></li>
								<li><a href="?id=arts&amp;lang=<?php echo $lang?>"><?php echo $template['index']['arts']?></a></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li><a href="#"><?php echo $template['index']['misc']?></a>
							<ul>
								<li><a href="?id=honor&amp;lang=<?php echo $lang?>"><?php echo $template['index']['honor']?></a></li>
								<li><a href="?id=translation&amp;lang=<?php echo $lang?>"><?php echo $template['index']['translations']?></a></li>
								<li><a href="?id=scripts&amp;lang=<?php echo $lang?>"><?php echo $template['index']['scripts']?></a></li>
								<li><a href="?id=addons&amp;lang=<?php echo $lang?>"><?php echo $template['index']['addons']?></a></li>
								<li><a href="?id=tools&amp;lang=<?php echo $lang?>"><?php echo $template['index']['tools']?></a></li>
								<li><a href="?id=changelog&amp;lang=<?php echo $lang?>"><?php echo $template['index']['changelog']?></a></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li><a href="#"><?php echo $template['index']['contact']?></a>
							<ul>
								<li><a href="?id=mailinglist&amp;lang=<?php echo $lang?>"><?php echo $template['index']['ml']?></a></li>
								<li><a href="?id=archive&amp;lang=<?php echo $lang?>"><?php echo $template['index']['archive']?></a></li>
								<li><a href="?id=contribute&amp;lang=<?php echo $lang?>"><?php echo $template['index']['contribute']?></a></li>
								<li><a href="?id=help&amp;lang=<?php echo $lang?>"><?php echo $template['index']['help']?></a></li>
								<li><a href="?id=donate&amp;lang=<?php echo $lang?>"><?php echo $template['index']['donation']?></a></li>
								<li><a href="javascript:opendoc('https://github.com/kvirc/KVIrc/issues');" title="KVIrc bugtrack"><?php echo $template['index']['bugtrack']?></a></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li><a href="#"><?php echo $template['index']['related']?></a>
							<ul>
								<li><a href="javascript:opendoc('http://forum.kvirc.ru/');"><?php echo $template['index']['forum']?></a></li>
								<li><a href="javascript:opendoc('http://www.kvirc.ru/');"><?php echo $template['index']['rusite']?></a></li>
								<?php /*
								<li><a href="javascript:opendoc('http://kvirc.fr/');"><?php echo $template['index']['frsite']?></a></li>
								<li><a href="javascript:opendoc('http://kvircfr.les-forums.com/');"><?php echo $template['index']['frforum']?></a></li>
								<li><a href="javascript:opendoc('http://kvirc.dotadata.de/');"><?php echo $template['index']['osxsite']?></a></li>
								*/?>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<div class="header-breadcrumbs">
				<ul>
					<li><a href="https://github.com/kvirc/KVIrc/wiki/Downloading-KVIrc's-nightly-source-or-binaries" title="Get the latest build"><?php echo $template['index']['quickdnl']?></a></li>
					<!--
					<li><a href="<?php echo $quickdownload_link?>" title="Get the Latest Release"><?php echo $template['index']['quickdnl']?></a></li>
					<li><a href="ftp://ftp.kvirc.de/pub/kvirc/snapshots/" title="get snapshots"><?php echo $template['index']['snapshots']?></a></li>
					<li><a href="?id=themes&amp;lang=<?php echo $lang?>" title="themes and appearance"><?php echo $template['index']['themes']?></a></li>
					//-->
				</ul>
				<div class="searchform">
					<form action="<?php echo "?id=$id&amp;lang=$lang"?>" method="post" class="form">
						<fieldset>
							<input type="text" name="keywords" value="<?php echo $template['index']['search']?>..." class="field" onclick="this.value=''" />
							<input type="hidden" name="type" value="site" />
							<input type="submit" name="button" value="<?php echo $template['index']['go']?>!" class="button" />
						</fieldset>
					</form>
				</div>
			</div>
		</div>

		<div class="main">
			<div class="main-navigation">
				<div class="round-border-topright"></div>
				<h1 class="first"><img src="img/internet-news-reader.png" alt="<?php echo $template['index']['latestnews']?>" width="16" height="16" class="noborder" /><?php echo $template['index']['latestnews']?></h1>

				<!-- inserire codeswitch news-->
				<dl class="nav3-grid">
					<?php 
					$latestnews = array();
					news_scan_dir($docRoot . '/news/latest', $latestnews);
					for($i = 0; $i < 10; $i++):
						if(basename($latestnews[$i]) == ''):
							break;
						endif;
						$x['dummy'] = '';
						news_read_entry($latestnews[$i], $x);
						$news = $x['day'] . ' ' . $x['monthname'] . ' ' . $x['year'] . '<br />' . $x['short'];
						?>
						<dt><a href="?id=news&amp;story=<?php echo basename($latestnews[$i])?>&amp;dir=latest&amp;lang=<?php echo $lang?>"><?php echo $news?></a></dt>
					<?php endfor; ?>
					<dt><a href="?id=news&amp;dir=latest&amp;lang=<?php echo $lang?>"><?php echo $template['index']['allnews']?></a></dt>
				</dl>

				<h1><img src="img/internet-web-browser.png" alt="<?php echo $template['index']['mirrors']?>" class="noborder" /><?php echo $template['index']['mirrors']?></h1>
				<h3><?php echo $template['index']['wwwmirrors']?></h3>
				<p>
					<?php foreach($www_mirror as $key => $value): ?>
						<a href="<?php echo $value['url']?>" class="info"><?php echo $value['name']?><span><br /><?php echo $value['desc']?><br /><?php echo $template['custom']['city']?>: <?php echo $value['city']?><br /><?php echo $template['custom']['maintainer']?>: <?php echo $value['maintainer']?></span></a><br />
					<?php endforeach; ?>
				</p>
				<h3><?php echo $template['index']['ftpmirrors']?></h3>
				<p>
					<?php foreach($ftp_mirror as $key => $value): ?>
						<a href="<?php echo $value['url']?>" class="info"><?php echo $value['name']?><span><br /><?php echo $value['desc']?><br /><?php echo $template['custom']['city']?>: <?php echo $value['city']?><br /><?php echo $template['custom']['maintainer']?>: <?php echo $value['maintainer']?></span></a><br />
					<?php endforeach; ?>
				</p>
				<p><br />
					<?php echo $template['index']['mirrorstext1a']?> <a href="?id=mirroring&amp;lang=<?php echo $lang?>" title="<?php echo $template['index']['mirrorstitle']?>"><?php echo $template['index']['mirrorstext1b']?></a> <?php echo $template['index']['mirrorstext1c']?><br />
					<?php echo $template['index']['mirrorstext2']?>
				</p>

				<h1><img src="img/network-offline.png" alt="<?php echo $template['index']['oldlayout']?>" class="noborder" /><?php echo $template['index']['oldlayout']?></h1>
				<p>
					<img src="img/th_oldsite_1.gif" alt="<?php echo $template['index']['oldsite']?>" width="159" height="105" /><br />
					<a href="javascript:opendoc('http://old.kvirc.de/');" title="<?php echo $template['index']['oldsite']?>">old.kvirc.de</a> by istari
				</p>
				<?php /*
        <p>
					<img src="img/th_oldsite_2.gif" alt="<?php echo $template['index']['oldsite']?>" width="159" height="105" /><br />
					kvirc.virg0.org/old by <a href="javascript:opendoc('http://iakko.net/');" title="<?php echo $template['index']['iakkohome']?>">iakko</a>
				</p>
				*/?>
			</div>
 
			<div class="main-content">
				<?php 
				// checking for page existance
				if(!file_exists("./content/$id.php")):
					include("content/welcome.php");
				else:
					include("./content/$id.php");
				endif;
				?>
				<hr class="clear-contentunit" />
			</div>

			<div class="main-subcontent">
				<!-- <div class="subcontent-unit-border">
					<div class="round-border-topleft"></div><div class="round-border-topright"></div>
					<h1><img src="img/applications-graphics.png" alt="<?php echo $template['index']['latestscreen']?>" /><?php echo $template['index']['latestscreen']?></h1>
					<p class="center">
						<img src="img/themes/thumb_anger.png" alt="Anger Theme - KVIrc &quot;Anomalies&quot;" /><br />

						<a href="javascript:opendoc('http://kvirc.virg0.org/themes.htm');" title="Anger Theme @ kvirc.virg0.org">Anger theme</a> - <a href="mailto:cle [at] virg0 [dot] org" title="mail etherea`">etherea`</a><br />
						KVIrc Anomalies
					</p>
				</div> //-->
				<div class="subcontent-unit-border">
					<div class="round-border-topleft"></div>
					<div class="round-border-topright"></div>
					<h1><img src="img/help-browser.png" alt="finding help" /><?php echo $template['index']['help']?></h1>
					<p class="center">
						<?php echo $template['index']['helptext1a']?> <a href="?id=mailinglist&amp;lang=<?php echo $lang?>" title="<?php echo $template['index']['helptext1b']?>"><?php echo $template['index']['helptext1b']?></a><br /><br /><?php echo $template['index']['helptext1c']?><br />

						<a href="irc://irc.eutelia.it/KVIrc">#kvirc@IRCnet</a><br /><a href="irc://irc.azzurra.org/KVIrc.net">#kvirc.net@azzurra</a><br /><a href="irc://irc.freenode.org/KVIrc">#kvirc@freenode</a>
					</p>
				</div>
				<div class="subcontent-unit-border-orange">
					<div class="round-border-topleft"></div>
					<div class="round-border-topright"></div>
					<h1 class="orange"><img src="img/media-record.png" alt="<?php echo $template['index']['bugreport']?>" /><?php echo $template['index']['bugreport']?></h1>
					<p class="center">
						<?php echo $template['index']['bugstext']?> <a href="javascript:opendoc('https://github.com/kvirc/KVIrc/issues');" title="<?php echo $template['index']['bugtrack']?>"><?php echo $template['index']['bugtrack']?></a>
					</p>
				</div>
				<div class="subcontent-unit-border">
					<div class="round-border-topleft"></div>
					<div class="round-border-topright"></div>
					<h1><img src="img/document-open.png" alt="<?php echo $template['index']['moredocs']?>" /><?php echo $template['index']['moredocs']?></h1>
					<p class="center">
						<a href="javascript:opendoc('/doc');" title="<?php echo $template['index']['officialdocs']?>"><?php echo $template['index']['officialdocs']?></a><br /><?php echo $template['index']['docsauto']?>
					</p>
				</div>
				<div class="subcontent-unit-border-white">
					<div class="round-border-topleft"></div>
					<div class="round-border-topright"></div>
					<h1><img src="img/dialog-information.png" alt="<?php echo $template['index']['hwdonation']?>" /><?php echo $template['index']['hwdonation']?></h1>
					<p class="center">
						<a href="javascript:opendoc('http://www.waaf.net');" title="waaf.net - the hosting &amp; development company"><img src="img/waaf.net.gif" alt="waaf.net - the hosting &amp; development company" /></a><br />
						<a href="javascript:opendoc('http://www.waaf.net');" title="waaf.net - the hosting &amp; development company">waaf.net</a> <?php echo $template['index']['hwdonationtext']?>
						<?php if(getHostKvircde()): ?>
							<?php echo $template['index']['donationtextkvirc.de']?>
						<?php endif; ?>
					</p>
				</div>
				<div class="subcontent-unit-border-white">
					<div class="round-border-topleft"></div>
					<div class="round-border-topright"></div>
					<h1><img src="img/dialog-information.png" alt="<?php echo $template['index']['tahdonation']?>" /><?php echo $template['index']['tahdonation']?></h1>
					<p class="center">
						<a href="javascript:opendoc('http://www.tmt.de');"><img src="img/tmtlogo.gif" alt="TMT" /></a><br />
						<a href="javascript:opendoc('http://www.tmt.de');">TMT Teleservice</a> <?php echo $template['index']['tahdonationtext']?>
						<?php if(getHostKvircde()): ?>
							<?php echo $template['index']['donationtextkvirc.de']?>
						<?php endif; ?>
					</p>
				</div>
			</div>
		</div>

		<div class="footer">
			<p>KVIrc.net | (c) 2007-<?php echo date("Y")?> ./LSD - CreativeCode | <?php echo $template['index']['footer']?></p>
			<p class="credits"><a href="javascript:opendoc('http://validator.w3.org/check/referer');" title="Validate XHTML code">XHTML 1.1</a> | <a href="javascript:opendoc('http://jigsaw.w3.org/css-validator/check/referer');" title="Validate CSS code">CSS 2.1</a> | credits</p>
		</div>
	</div>
	<?php if(stristr(($_SERVER["SERVER_NAME"]),'kvirc.de')): ?>
		<div id="akct">
			<a id="akpeel" href="javascript:opendoc('http://www.vorratsdatenspeicherung.de');" title="Stoppt die Vorratsdatenspeicherung! Jetzt klicken &amp; handeln!">
				<img src="http://wiki.vorratsdatenspeicherung.de/images/Akvst.gif" alt="Stoppt die Vorratsdatenspeicherung! Jetzt klicken &amp; handeln!" />
			</a>
			<a id="akpreload" href="javascript:opendoc('http://wiki.vorratsdatenspeicherung.de/?title=Online_Demo');" title="Willst du auch bei der Aktion teilnehmen? Hier findest du alle relevanten Infos und Materialien:">
				<img src="http://wiki.vorratsdatenspeicherung.de/images/Akvsi.gif" alt="Willst du auch bei der Aktion teilnehmen? Hier findest du alle relevanten Infos und Materialien:" />
			</a>
		</div>
	<?php endif; ?>
</body>
</html>
