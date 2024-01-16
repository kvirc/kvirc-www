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
	<link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/layout4_setup.css" />
	<link rel="stylesheet" type="text/css" media="screen,projection,print" href="./css/layout4_text.css" />
	<link rel="icon" type="image/x-icon" href="favicon.ico" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="alternate" type="application/rss+xml" href="rss.php"  title="KVIrc News" />
	<script type="text/javascript" src="conf/functions.js"></script>
	<title>KVIrc.net - The Visual IRC Client</title>
</head>
<body>
	<div class="page-container">
		<div class="header">
			<div class="header-top"></div>
			<div class="header-middle">
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
								<li><a href="https://github.com/kvirc/KVIrc/wiki/Downloading-KVIrcs-nightly-source-or-binaries#source-downloads-master"><?php echo $template['index']['snapshots']?></a></li>
								<li><a href="https://github.com/kvirc/KVIrc"><?php echo $template['index']['git']?></a></li>
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
								<li><a href="?id=help&amp;lang=<?php echo $lang?>"><?php echo $template['index']['help']?></a></li>
								<li><a href="?id=contribute&amp;lang=<?php echo $lang?>"><?php echo $template['index']['contribute']?></a></li>
								<li><a href="?id=donate&amp;lang=<?php echo $lang?>"><?php echo $template['index']['donation']?></a></li>
								<li><a href="javascript:opendoc('https://github.com/kvirc/KVIrc/issues');" title="KVIrc bugtrack"><?php echo $template['index']['bugtrack']?></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<div class="header-breadcrumbs">
				<ul>
					<li><a href="https://github.com/kvirc/KVIrc/releases" title="Get the latest build"><?php echo $template['index']['quickdnl']?></a></li>
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
						<?php echo $template['index']['helptext1a']?> <a href="https://github.com/kvirc/KVIrc/issues" title="<?php echo $template['index']['helptext1b']?>"><?php echo $template['index']['helptext1b']?></a><br /><br /><?php echo $template['index']['helptext1c']?><br />

						<a href="irc://irc.libera.chat/KVIrc">#kvirc@libera</a>
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
			</div>
		</div>

		<div class="footer">
			<p>KVIrc.net | (c) 2007-<?php echo date("Y")?> ./LSD - CreativeCode | <?php echo $template['index']['footer']?></p>
			<p class="credits"><a href="javascript:opendoc('http://validator.w3.org/check/referer');" title="Validate XHTML code">XHTML 1.1</a> | <a href="javascript:opendoc('http://jigsaw.w3.org/css-validator/check/referer');" title="Validate CSS code">CSS 2.1</a> | credits</p>
		</div>
	</div>
</body>
</html>
