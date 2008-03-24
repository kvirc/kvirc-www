<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

require_once("config.php");

// The available platforms
$platform_description["source"] = "Source package (all the platforms)";
$platform_details["source"]     = "C++ sources: you must to compile them to obtain a working executable. This means that you need a compiler and all the tools needed to compile a program on your system.";

$platform_description["win32"]  = "Windows binary package";
$platform_details["win32"]      = "Self-contained win32 KVIrc executable: it should run just after the installation.";

$platform_description["macosx"] = "MacOSX binary package";
$platform_details["macosx"]     = "Self-contained MaxOSX KVIrc executable: it should run just after the installation.";

$platform_description["unix"]   = "Unix flavor binary package";
$platform_details["unix"]       = "Pre-compiled packages are available for several unix systems (read \"distributions\"). If a package for your exact distribution is not available you might try to install the \"closest match\". If no package works for you, then you have to compile KVIrc from the sources.";

// The available versions
$version_description["2.1.1"]          = "2.1.1 : Very old stable release (May 2001)";
$version_details["2.1.1"]              = "The last release of the 2.1.1 branch. You probably don't want this unless you're using a very old system.";

$version_description["3.0.0-beta1"]    = "3.0.0 : Beta 1 (Jun 2002)";
$version_details["3.0.0-beta1"]        = "Old beta";

$version_description["3.0.0-beta2"]    = "3.0.0 : Beta 2 (Jan 2003)";
$version_details["3.0.0-beta2"]        = "Old beta.";

$version_description["3.0.0"]          = "3.0.0 : Stable (Apr 2004)";
$version_details["3.0.0"]              = "The first stable release of the 3.* series";

$version_description["3.0.1"]          = "3.0.1 : Stable (May 2004)";
$version_details["3.0.1"]              = "A bugfix release for 3.0.0";

$version_description["3.2.0"]          = "3.2.0 : Stable (Feb 2005)";
$version_details["3.2.0"]              = "The previous stable release.";

$version_description["3.4.0"]          = "3.4.0 : Stable (Mar 2008)";
$version_details["3.4.0"]              = "The latest stable release. This is the package you want :)";

// The package groups
$group_description["none"]      = "No group";
$group_details["none"]          = "This is a dummy package group: if you see this , you have found a bug in our site :D";

$group_description["slackware"] = "Slackware *.tgz binary package";
$group_details["slackware"]     = "Download this if you have a Slackware linux distribution.";

$group_description["debian"]    = "Debian *.deb binary package";
$group_details["debian"]        = "Download this if you have a Debian based system. The binary installation is splitted in two or three packages: executable , documentation and developement files";

$group_description["suse"]      = "SuSE linux binary *.rpm";
$group_details["suse"]          = "Download this if you have a SuSE linux distribution. This kind of package *might* also work on plain RedHat, Mandrake and other systems that can use rpms";

$group_description["fedora"]    = "Fedora linux binary *.rpm";
$group_details["fedora"]        = "Download this if you have a Fedora linux distribution. This kind of package *might* also work on plain RedHat, Mandrake and other systems that can use rpms";

$group_description["mandrake"]  = "Mandrake linux binary *.rpm";
$group_details["mandrake"]      = "Download this if you have a Mandrake linux distribution. This kind of package *might* also work on plain RedHat, SuSE and other rpm-enabled systems.";

////////////////////////////////////////////////////////////////////////////////////////////////
// The available packages

// newest releases should go on top of the list


// quickdownload links
$hua = $_SERVER['HTTP_USER_AGENT'];

if((strpos($hua,'Windows') !== false) || (strpos($hua,'WinXP') !== false))
{
	//$quickdownload_link = $ftp_mirror[1]['url']."/snapshots/win32/KVIrc-3.2.6-dev-20080303.exe";
	$quickdownload_link = $ftp_mirror[1]['url']."/3.4.0/binary/win32/KVIrc-3.4.0.exe";
	$quickdownload_version = "3.4.0";
} /*else if((strpos($hua,'Safari') !== false) || (strpos($hua,'Macintosh') !== false) ||
	(strpos($hua,'Mac OS X') !== false) || (strpos($hua,'Mac_PowerPC') !== false))
{
	$quickdownload_link = $ftp_mirror_link[0]."/3.2.0/binary/macosx/KVirc-3.2.0.dmg";
	$quickdownload_version = "3.2.0";
}*/ else {
	//$quickdownload_link = $ftp_mirror[1]['url']."/3.2.6/source/kvirc-3.2.6.tar.bz2";
	$quickdownload_link = $ftp_mirror[1]['url']."/3.4.0/source/kvirc-3.4.0.tar.bz2";
	$quickdownload_version = "3.4.0";
}


$package_count = 0;

$p_filename[$package_count]    = "kvirc-3.4.0.tar.bz2";
$p_path[$package_count]        = "3.4.0/source";
$p_description[$package_count] = "KVIrc 3.4.0, sources (bzipped package)";
$p_details[$package_count]     = "Source tarball for both unix and windows version. The package is crompressed using the bzip2 program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "5311152";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Szymon Stefanek (pragma at kvirc dot net)";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.4.0.tar.gz";
$p_path[$package_count]        = "3.2.0/source";
$p_description[$package_count] = "KVIrc 3.2.0, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both unix and windows version. The package is compressed using the gzip program, if you have bzip2 grab the *.bz2 format instead.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "7062650";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Szymon Stefanek (pragma at kvirc dot net)";
$package_count++;

$p_filename[$package_count]    = "KVIrc-3.4.0.exe";
$p_path[$package_count]        = "3.4.0/binary/win32";
$p_description[$package_count] = "KVIrc 3.4.0, Windows binary";
$p_details[$package_count]     = "The self-installing binary package for Windows built on top of the non-commercial version of the Qt library. Just double click on it after downloading.";
$p_platform[$package_count]    = "win32";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "6853916";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Noldor (elfonol at gmail dot com)";
$package_count++;




// Older releases


$p_filename[$package_count]    = "kvirc-3.2.0.tar.bz2";
$p_path[$package_count]        = "3.2.0/source";
$p_description[$package_count] = "KVIrc 3.2.0, sources (bzipped package)";
$p_details[$package_count]     = "Source tarball for both unix and windows version. The package is crompressed using the bzip2 program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.2.0";
$p_size[$package_count]        = "3704445";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Szymon Stefanek (pragma at kvirc dot net)";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.2.0.tar.gz";
$p_path[$package_count]        = "3.2.0/source";
$p_description[$package_count] = "KVIrc 3.2.0, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both unix and windows version. The package is compressed using the gzip program, if you have bzip2 grab the *.bz2 format instead.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.2.0";
$p_size[$package_count]        = "4878741";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Szymon Stefanek (pragma at kvirc dot net)";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.2.0-setup.exe";
$p_path[$package_count]        = "3.2.0/binary/win32";
$p_description[$package_count] = "KVIrc 3.2.0, Windows binary";
$p_details[$package_count]     = "The self-installing binary package for Windows built on top of the non-commercial version of the Qt library. Just double click on it after downloading.";
$p_platform[$package_count]    = "win32";
$p_version[$package_count]     = "3.2.0";
$p_size[$package_count]        = "5758677";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Szymon Stefanek (pragma at kvirc dot net)";
$package_count++;

$p_filename[$package_count]    = "KVirc-3.2.0.dmg";
$p_path[$package_count]        = "3.2.0/binary/macosx";
$p_description[$package_count] = "KVIrc 3.2.0, MacOSX binary";
$p_details[$package_count]     = "MacOSX bundle built on top of the non-commercial version of the Qt library. Just double click on it after downloading.";
$p_platform[$package_count]    = "macosx";
$p_version[$package_count]     = "3.2.0";
$p_size[$package_count]        = "9673489";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Thomas Kalla (see <a href=\"http://kvirc.lithitux.org/\">http://kvirc.lithitux.org/</a>)";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.2.0-i386-1-CC.tgz";
$p_path[$package_count]        = "3.2.0/binary/slackware";
$p_description[$package_count] = "KVIrc 3.2.0, Slackware binary package";
$p_details[$package_count]     = "Binary package for Slackware Linux. Built on Slackware 10.1 with Qt 3.3.4";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.2.0";
$p_size[$package_count]        = "5026451";
$p_group[$package_count]       = "slackware";
$p_author[$package_count]      = "Claudiu Cismaru <claudiu at cnixs dot com>";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.2.0-i386-1-HelLViS69.tgz";
$p_path[$package_count]        = "3.2.0/binary/slackware";
$p_description[$package_count] = "KVIrc 3.2.0, Slackware binary package";
$p_details[$package_count]     = "Binary package for Slackware Linux. Built on Slackware 10.1 with testing gcc 3.4 (needs libstdc++6!)";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.2.0";
$p_size[$package_count]        = "5229278";
$p_group[$package_count]       = "slackware";
$p_author[$package_count]      = "HelLViS69";
$package_count++;

$p_filename[$package_count]    = "KVirc-3.2.0-debug.dmg";
$p_path[$package_count]        = "3.2.0/binary/macosx";
$p_description[$package_count] = "KVIrc 3.2.0, MacOSX binary, debug version";
$p_details[$package_count]     = "Debug version of the MacOSX bundle. It is huge and may run slower but will help in detecting bugs.";
$p_platform[$package_count]    = "macosx";
$p_version[$package_count]     = "3.2.0";
$p_size[$package_count]        = "60973208";
$p_author[$package_count]      = "Thomas Kalla (see <a href=\"http://kvirc.lithitux.org/\">http://kvirc.lithitux.org/</a>)";
$p_group[$package_count]       = "none";
$package_count++;

$p_filename[$package_count]    = "kvirc_3.2.0-sarge2_i386.deb";
$p_path[$package_count]        = "3.2.0/binary/debian";
$p_description[$package_count] = "KVIrc 3.2.0, Debian (Sarge) package, core files";
$p_details[$package_count]     = "These are the non official Debian Sarge binaries built by Andrea Briganti. ";
$p_details[$package_count]    .= "The distribution is splitted in three packages and you will need all of them to get a working KVIrc installation.<br><br>";
$p_details[$package_count]    .= "The official debian packages are available at http://ftp.&lt;country&gt;.debian.org/debian/pool/main/k/kvirc/<br>";
$p_details[$package_count]    .= "Debian users can automatically update from KVIrc 2.x by adding the following line ";
$p_details[$package_count]    .= "to their /etc/apt/sources.list:<br>";
$p_details[$package_count]    .= "&nbsp;deb http://ftp.&lt;country&gt;.debian.org/debian/ experimental main<br>";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.2.0";
$p_size[$package_count]        = "2552784";
$p_author[$package_count]      = "Andrea Briganti (see <a href=\"http://kbytesys.altervista.org/linux/kvirc/\">http://kbytesys.altervista.org/linux/kvirc/</a>)";
$p_group[$package_count]       = "debian";
$package_count++;

$p_filename[$package_count]    = "kvirc-data_3.2.0-sarge2_all.deb";
$p_path[$package_count]        = "3.2.0/binary/debian";
$p_description[$package_count] = "KVIrc 3.2.0, Debian (Sarge) package, data files";
$p_details[$package_count]     = "These are the non official Debian Sarge binaries built by Andrea Briganti. ";
$p_details[$package_count]    .= "The distribution is splitted in three packages and you will need all of them to get a working KVIrc installation.<br><br>";
$p_details[$package_count]    .= "The official debian packages are available at http://ftp.&lt;country&gt;.debian.org/debian/pool/main/k/kvirc/<br>";
$p_details[$package_count]    .= "Debian users can automatically update from KVIrc 2.x by adding the following line ";
$p_details[$package_count]    .= "to their /etc/apt/sources.list:<br>";
$p_details[$package_count]    .= "&nbsp;deb http://ftp.&lt;country&gt;.debian.org/debian/ experimental main<br>";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.2.0";
$p_size[$package_count]        = "2458096";
$p_author[$package_count]      = "Andrea Briganti (see <a href=\"http://kbytesys.altervista.org/linux/kvirc/\">http://kbytesys.altervista.org/linux/kvirc/</a>)";
$p_group[$package_count]       = "debian";
$package_count++;

$p_filename[$package_count]    = "kvirc-dev_3.2.0-sarge2_i386.deb";
$p_path[$package_count]        = "3.2.0/binary/debian";
$p_description[$package_count] = "KVIrc 3.2.0, Debian (Sarge) package, development headers";
$p_details[$package_count]     = "These are the non official Debian Sarge binaries built by Andrea Briganti. ";
$p_details[$package_count]    .= "The distribution is splitted in three packages and you will need all of them to get a working KVIrc installation.<br><br>";
$p_details[$package_count]    .= "The official debian packages are available at http://ftp.&lt;country&gt;.debian.org/debian/pool/main/k/kvirc/<br>";
$p_details[$package_count]    .= "Debian users can automatically update from KVIrc 2.x by adding the following line ";
$p_details[$package_count]    .= "to their /etc/apt/sources.list:<br>";
$p_details[$package_count]    .= "&nbsp;deb http://ftp.&lt;country&gt;.debian.org/debian/ experimental main<br>";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.2.0";
$p_size[$package_count]        = "342664";
$p_author[$package_count]      = "Andrea Briganti (see <a href=\"http://kbytesys.altervista.org/linux/kvirc/\">http://kbytesys.altervista.org/linux/kvirc/</a>)";
$p_group[$package_count]       = "debian";
$package_count++;





$p_filename[$package_count]    = "kvirc-3.0.1.tar.bz2";
$p_path[$package_count]        = "3.0.1/source";
$p_description[$package_count] = "KVIrc 3.0.1, sources (bzipped package)";
$p_details[$package_count]     = "Source tarball for both unix and windows version. The package is crompressed using the bzip2 program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.0.1";
$p_size[$package_count]        = "2679737";
$p_author[$package_count]      = "Szymon Stefanek (pragma at kvirc dot net)";
$p_group[$package_count]       = "none";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.1.tar.gz";
$p_path[$package_count]        = "3.0.1/source";
$p_description[$package_count] = "KVIrc 3.0.1, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both unix and windows version. The package is compressed using the gzip program, if you have bzip2 grab the *.bz2 format instead.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.0.1";
$p_size[$package_count]        = "3487410";
$p_author[$package_count]      = "Szymon Stefanek (pragma at kvirc dot net)";
$p_group[$package_count]       = "none";
$package_count++;

$p_filename[$package_count]    = "kvirc3_3.0.1-2_i386.deb";
$p_path[$package_count]        = "3.0.1/binary/debian";
$p_description[$package_count] = "KVIrc 3.0.0, Debian GNU/Linux (sid/unstable)";
$p_details[$package_count]     = "Debian GNU/Linux binaries.<br> You may need also the developement files and the documentation below.";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.1";
$p_size[$package_count]        = "3323416";
$p_group[$package_count]       = "debian";
$package_count++;

$p_filename[$package_count]    = "kvirc3-dev_3.0.1-2_i386.deb";
$p_path[$package_count]        = "3.0.1/binary/debian";
$p_description[$package_count] = "KVIrc 3.0.0, Debian GNU/Linux (sid/unstable)";
$p_details[$package_count]     = "Debian GNU/Linux development files.<br> You need this in order to compile the KVIrc plugins on your system.<br>You need also the binary package above and maybe the documentation below.";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.1";
$p_size[$package_count]        = "207750";
$p_group[$package_count]       = "debian";
$package_count++;

$p_filename[$package_count]    = "kvirc3-doc_3.0.1-2_all.deb";
$p_path[$package_count]        = "3.0.1/binary/debian";
$p_description[$package_count] = "KVIrc 3.0.0, Debian GNU/Linux (sid/unstable)";
$p_details[$package_count]     = "Debian GNU/Linux documentation files.<br> You need also the binary package above.";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.1";
$p_size[$package_count]        = "386950";
$p_group[$package_count]       = "debian";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.1-i386-1.tgz";
$p_path[$package_count]        = "3.0.1/binary/slackware";
$p_description[$package_count] = "KVIrc 3.0.1,  Slackware 9.1 binary package";
$p_details[$package_count]     = "Slackware 9.1 binary package, linked to KDE 3.1.4 and QT 3.2.1. Installs in /usr";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.1";
$p_size[$package_count]        = "3814547";
$p_group[$package_count]       = "slackware";
$package_count++;


$p_filename[$package_count]    = "kvirc-3.0.1.exe";
$p_path[$package_count]        = "3.0.1/binary/win32";
$p_description[$package_count] = "KVIrc 3.0.01, Windows binary";
$p_details[$package_count]     = "Self-installing binary package for Windows built on top of the non-commercial version of the Qt library. Just double click on it after downloading.";
$p_platform[$package_count]    = "win32";
$p_version[$package_count]     = "3.0.1";
$p_size[$package_count]        = "5904101";
$p_group[$package_count]       = "none";
$package_count++;


$p_filename[$package_count]    = "kvirc-3.0.0.exe";
$p_path[$package_count]        = "3.0.0/binary/win32";
$p_description[$package_count] = "KVIrc 3.0.0, Windows binary";
$p_details[$package_count]     = "The old self-installing binary package for Windows built on top of the non-commercial version of the Qt library. Just double click on it after downloading.";
$p_platform[$package_count]    = "win32";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "5937725";
$p_author[$package_count]      = "Szymon Stefanek (pragma at kvirc dot net)";
$p_group[$package_count]       = "none";
$package_count++;


$p_filename[$package_count]    = "kvirc-3.0.0.tar.bz2";
$p_path[$package_count]        = "3.0.0/source";
$p_description[$package_count] = "KVIrc 3.0.0, sources (bzipped package)";
$p_details[$package_count]     = "Source tarball for both unix and windows version. The package is crompressed using the bzip2 program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "2807216";
$p_group[$package_count]       = "none";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0.tar.gz";
$p_path[$package_count]        = "3.0.0/source";
$p_description[$package_count] = "KVIrc 3.0.0, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both unix and windows version. The package is compressed using the gzip program, if you have bzip2 grab the *.bz2 format above.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "3653347";
$p_group[$package_count]       = "none";
$package_count++;


$p_filename[$package_count]    = "kvirc-3.0.0-i686-1.tgz";
$p_path[$package_count]        = "3.0.0/binary/slackware";
$p_description[$package_count] = "KVIrc 3.0.0,  Slackware 9.1 binary package";
$p_details[$package_count]     = "Slackware binary package, linked to KDE 3.2.1. Installs in /opt/kde";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "4682758";
$p_group[$package_count]       = "slackware";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-i686-2.tgz";
$p_path[$package_count]        = "3.0.0/binary/slackware";
$p_description[$package_count] = "KVIrc 3.0.0,  Slackware 9.1 binary package";
$p_details[$package_count]     = "Slackware binary package, i686 optimized, installs in /opt/kde, use KDE 3.2.1, 3.2.2";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "4759241";
$p_group[$package_count]       = "slackware";
$package_count++;


$p_filename[$package_count]    = "kvirc-3.0.0-i686-no-KDE.tgz";
$p_path[$package_count]        = "3.0.0/binary/slackware";
$p_description[$package_count] = "KVIrc 3.0.0,  Slackware 9.1 binary package. No KDE";
$p_details[$package_count]     = "Slackware binary package, installs in /usr. Linked to QT 3.2.1, compiled without KDE support";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "3838016";
$p_group[$package_count]       = "slackware";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-1mdk.i586.rpm";
$p_path[$package_count]        = "3.0.0/binary/mandrake/";
$p_description[$package_count] = "KVIrc 3.0.0, Mandrake 10 official binary package";
$p_details[$package_count]     = "Mandrake 10 binary package ";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "4009613";
$p_group[$package_count]       = "mandrake";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-1mdk.i386.rpm";
$p_path[$package_count]        = "3.0.0/binary/mandrake";
$p_description[$package_count] = "KVIrc 3.0.0, Mandrake 10 binary package (should also work on Mandrake 9.2)";
$p_details[$package_count]     = "Mandrake binary package, linked to KDE-3.2.0. Build agains libc-2.3.2 and qt-3.2.3";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "4009613";
$p_group[$package_count]       = "mandrake";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-suse82_kde311_qt311-1.i386.rpm";
$p_path[$package_count]        = "3.0.0/binary/suse/8.2";
$p_description[$package_count] = "KVIrc 3.0.0, SuSE 8.2 RPM, KDE 3.1.1";
$p_details[$package_count]     = "SuSE 8.2 binary RPM linked to KDE 3.1.1, QT 3.1.1.";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "3937926";
$p_group[$package_count]       = "suse";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-1suse82.i686.rpm";
$p_path[$package_count]        = "3.0.0/binary/suse/8.2";
$p_description[$package_count] = "KVIrc 3.0.0, SuSE 8.2 RPM, i686 optimized";
$p_details[$package_count]     = "SuSE 8.2 binary RPM.";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "3767602";
$p_group[$package_count]       = "suse";
$package_count++;

$p_filename[$package_count]    = "kvirc-devel-3.0.0-1suse82.i686.rpm";
$p_path[$package_count]        = "3.0.0/binary/suse/8.2";
$p_description[$package_count] = "KVIrc 3.0.0, SuSE 8.2 Devel RPM, i686 optimized";
$p_details[$package_count]     = "SuSE 8.2 Devel RPM.";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "196598";
$p_group[$package_count]       = "suse";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0_suse90_kde322-1.i586.rpm";
$p_path[$package_count]        = "3.0.0/binary/suse/9.0";
$p_description[$package_count] = "KVIrc 3.0.0, SuSE 9.0 RPM, KDE 3.2.2";
$p_details[$package_count]     = "SuSE 9.0 binary RPM linked to KDE 3.2.2. Optimized for i586";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "3957944";
$p_group[$package_count]       = "suse";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-1suse90.i686.rpm";
$p_path[$package_count]        = "3.0.0/binary/suse/9.0";
$p_description[$package_count] = "KVIrc 3.0.0, SuSE 9.0 RPM, i686 optimized";
$p_details[$package_count]     = "SuSE 9.0 binary RPM. Optimized for i686";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "3786249";
$p_group[$package_count]       = "suse";
$package_count++;

$p_filename[$package_count]    = "kvirc-devel-3.0.0-1suse90.i686.rpm";
$p_path[$package_count]        = "3.0.0/binary/suse/9.0";
$p_description[$package_count] = "KVIrc 3.0.0, SuSE 9.0 Devel RPM, i686 optimized";
$p_details[$package_count]     = "SuSE 9.0 Devel RPM. Optimized for i686";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "190982";
$p_group[$package_count]       = "suse";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-1suse90.src.rpm";
$p_path[$package_count]        = "3.0.0/binary/suse/source";
$p_description[$package_count] = "KVIrc 3.0.0, SuSE 9.0 Source RPM";
$p_details[$package_count]     = "SuSE 9.0 Source RPM.";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "2801085";
$p_group[$package_count]       = "suse";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0_fedora_core1-1.i386.rpm";
$p_path[$package_count]        = "3.0.0/binary/fedora";
$p_description[$package_count] = "KVIrc 3.0.0, Fedora Core 1 RPM";
$p_details[$package_count]     = "Fedora Core 1 binary RPM";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "3951429";
$p_group[$package_count]       = "fedora";
$package_count++;

$p_filename[$package_count]    = "";
$p_path[$package_count]        = "3.0.0/binary/debian";
$p_description[$package_count] = "KVIrc 3.0.0, Debian GNU/Linux (sid/unstable)";
$p_details[$package_count]     = "Debian GNU/Linux (sid/unstable) binaries.<br><br>Put one of these lines in your /etc/apt/source.list and do 'apt-get update && apt-get install kvirc3 kvirc3-doc kvirc3-dev'!<br>Alternatively you can download all debs and do 'dpkg -i ./kvirc3*.deb'.";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "3979162";
$p_group[$package_count]       = "debian";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-beta2.tar.bz2";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/source";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, sources (bzipped package)";
$p_details[$package_count]     = "Source tarball for both unix and windows version.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "2197822";
$p_group[$package_count]       = "none";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-beta2.tar.gz";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/source";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both unix and windows version.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "2815485";
$p_group[$package_count]       = "none";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-beta2-i386.tgz";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/binary/slackware";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, slackware binary package";
$p_details[$package_count]     = "Slackware 8.1 binary package, linked to KDE-3.1 final";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "4350602";
$p_group[$package_count]       = "slackware";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-20030127-suse81-kde31-debug.i386.rpm";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/binary/suse";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, SuSE 8.1 RPM, KDE3.1 final, debug";
$p_details[$package_count]     = "SuSE 8.1 binary RPM linked to KDE-3.1 final and compiled with debug symbols (HUGE!).";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "17656348";
$p_group[$package_count]       = "suse";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-20030128-suse81-kde31.i386.rpm";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/binary/suse";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, SuSE 8.1 RPM, KDE3.1 final";
$p_details[$package_count]     = "SuSE 8.1 binary RPM linked to KDE-3.1 final , no debug symbols";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "4131094";
$p_group[$package_count]       = "suse";
$package_count++;

$p_filename[$package_count]    = "kvirc3-20030104-suse81-kde31beta2-1.i386.rpm";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/binary/suse";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, SuSE 8.1 RPM, linked to KDE3.1 beta2";
$p_details[$package_count]     = "SuSE 8.1 binary RPM linked to KDE-3.1-beta2";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "4119060";
$p_group[$package_count]       = "suse";
$package_count++;

$p_filename[$package_count]    = "kvirc3-qt_2.99.beta2-2_i386.deb";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/binary/debian";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, Debian package, no KDE";
$p_details[$package_count]     = "Debian package linked to QT only (no KDE needed): documentation and developement files NOT included, check out the kvirc3-doc and kvirc3-qt-dev packages below";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "3078880";
$p_group[$package_count]       = "debian";
$package_count++;

$p_filename[$package_count]    = "kvirc3-qt-dev_2.99.beta2-2_i386.deb";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/binary/debian";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, Debian package with developement files (no KDE)";
$p_details[$package_count]     = "Headers and tools for KVIrc beta2 module developement: qt support only: no KDE";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "3072";
$p_group[$package_count]       = "debian";
$package_count++; 

$p_filename[$package_count]    = "kvirc3_2.99.beta2-2_i386.deb";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/binary/debian";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, Debian package, linked to KDE";
$p_details[$package_count]     = "Debian package linked to KDE: documentation and developement files NOT included, check out the kvirc3-doc and kvirc3-dev packages below";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "3120636";
$p_group[$package_count]       = "debian";
$package_count++; 

$p_filename[$package_count]    = "kvirc3-dev_2.99.beta2-2_i386.deb";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/binary/debian";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, Debian package with developement files (linked to KDE)";
$p_details[$package_count]     = "Headers and tools for KVIrc beta2 module developement: linked to KDE";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "3162";
$p_group[$package_count]       = "debian";
$package_count++; 

$p_filename[$package_count]    = "kvirc3-doc_2.99.beta2-2_all.deb";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/binary/debian";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, Documentation debian package";
$p_details[$package_count]     = "Documentation in HTML format for KVIrc beta 2";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "347036";
$p_group[$package_count]       = "debian";
$package_count++; 

$p_filename[$package_count]    = "kvirc-3.0.0-beta1.tar.bz2";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta1/source";
$p_description[$package_count] = "KVIrc 3.0.0 beta 1, sources (bzipped package)";
$p_details[$package_count]     = "Source tarball for both unix and windows version. Please note that this is an <b>unstable</b> version.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.0.0-beta1";
$p_size[$package_count]        = "1995081";
$p_group[$package_count]       = "none";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-beta1.tar.gz";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta1/source";
$p_description[$package_count] = "KVIrc 3.0.0 beta 1, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both unix and windows version. Please note that this is an <b>unstable</b> version.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.0.0-beta1";
$p_size[$package_count]        = "2565299";
$p_group[$package_count]       = "none";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-1mdk.i586.rpm";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta1/binary";
$p_description[$package_count] = "KVIrc 3.0.0 beta 1, i586 binary";
$p_details[$package_count]     = "i586 binary package for Mandrake linux. This might work also on plain RedHat. Please note that this is an <b>unstable</b> version.";
$p_platform[$package_count]    = "unix";
$p_version[$package_count]     = "3.0.0-beta1";
$p_size[$package_count]        = "3049004";
$p_group[$package_count]       = "mandrake";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-beta1.zip";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta1/win32";
$p_description[$package_count] = "KVIrc 3.0.0 beta 1, win32 binary";
$p_details[$package_count]     = "Binary package for Windows";
$p_platform[$package_count]    = "win32";
$p_version[$package_count]     = "3.0.0-beta1";
$p_size[$package_count]        = "4813611";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Szymon Stefanek (pragma at kvirc dot net)";
$package_count++;

$p_filename[$package_count]    = "kvirc-2.1.1.tar.gz";
$p_path[$package_count]        = "2.1.1/source";
$p_description[$package_count] = "KVIrc 2.1.1, latest stable, source package";
$p_details[$package_count]     = "Really old stable source tarball. Use only if you have a really old system where the newest releases do not run.";
$p_platform[$package_count]    = "source";
$p_group[$package_count]       = "none";
$p_version[$package_count]     = "2.1.1";
$p_size[$package_count]        = "";
$p_author[$package_count]      = "Szymon Stefanek (pragma at kvirc dot net)";
$package_count++;
?>
