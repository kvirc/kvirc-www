<?php
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

require_once("config.php");

// The available platforms
$platform_description["source"]  = "Source package (all the platforms)";
$platform_details["source"]      = "C++ sources: you must to compile them to obtain a working executable. This means that you need a compiler and all the tools needed to compile a program on your system.";

$platform_description["win32"]   = "Windows 32 bit binary package";
$platform_details["win32"]       = "Self-contained win32 KVIrc executable: it should run just after the installation.";

$platform_description["win64"]   = "Windows 64 bit binary package";
$platform_details["win64"]       = "Self-contained win64 KVIrc executable: it should run just after the installation.";

$platform_description["macosx"]  = "OS X binary package";
$platform_details["macosx"]      = "Self-contained OS X KVIrc executable: it should run just after the installation.";

$platform_description["linux"]   = "Linux flavor binary package";
$platform_details["linux"]       = "Pre-compiled packages are available for several Linux systems (read \"distributions\"). If a package for your exact distribution is not available you might try to install the \"closest match\". If no package works for you, then you have to compile KVIrc from the sources.";

$platform_description["freebsd"] = "FreeBSD binary package";
$platform_details["freebsd"]     = "There is a FreeBSD port, which is available as a pre-compiled binary package or as a source package.";

// The available versions
$version_description["2.1.1"]       = "2.1.1 : Very old stable release (May 2001)";
$version_details["2.1.1"]           = "The last release of the 2.1.1 branch. You probably don't want this unless you're using a very old system.";

$version_description["3.0.0-beta1"] = "3.0.0 : Beta 1 (Jun 2002)";
$version_details["3.0.0-beta1"]     = "Old beta";

$version_description["3.0.0-beta2"] = "3.0.0 : Beta 2 (Jan 2003)";
$version_details["3.0.0-beta2"]     = "Old beta.";

$version_description["3.0.0"]       = "3.0.0 : Stable (Apr 2004)";
$version_details["3.0.0"]           = "The first stable release of the 3.* series";

$version_description["3.0.1"]       = "3.0.1 : Stable (May 2004)";
$version_details["3.0.1"]           = "A bugfix release for 3.0.0";

$version_description["3.2.0"]       = "3.2.0 : Stable (Feb 2005)";
$version_details["3.2.0"]           = "Old stable release.";

$version_description["3.4.0"]       = "3.4.0 : Stable (Mar 2008)";
$version_details["3.4.0"]           = "Old stable release.";

$version_description["3.4.2"]       = "3.4.2 : Stable (Oct 2008)";
$version_details["3.4.2"]           = "Old stable release.";

$version_description["4.0.0"]       = "4.0.0 : Stable (Jun 2010)";
$version_details["4.0.0"]           = "An old stable release";

$version_description["4.0.2"]       = "4.0.2 : Stable (Aug 2010)";
$version_details["4.0.2"]           = "An old stable release.";

$version_description["4.0.4"]       = "4.0.4 : Stable (Mar 2011)";
$version_details["4.0.4"]           = "An old stable release.";

$version_description["4.2.0"]       = "4.2.0 : Stable (Jul 2012)";
$version_details["4.2.0"]           = "An old stable release.";

$version_description["5.0.0"]       = "5.0.0 : Stable (Jan 2019)";
$version_details["5.0.0"]           = "An old stable release.";

$version_description["5.2.0"]       = "5.2.0 : Stable (Jan 2024)";
$version_details["5.2.0"]           = "Previous stable release.";

$version_description["5.2.2"]       = "5.2.2 : Stable (Mar 2024)";
$version_details["5.2.2"]           = "Previous stable release.";

$version_description["5.2.4"]       = "5.2.4 : Stable (May 2024)";
$version_details["5.2.4"]           = "Previous stable release.";

$version_description["5.2.6"]       = "5.2.6 : Stable (Oct 2024)";
$version_details["5.2.6"]           = "Previous stable release.";

$version_description["5.2.8"]       = "5.2.8 : Stable (Jul 2025)";
$version_details["5.2.8"]           = "The latest stable release.";

// The package groups
$group_description["none"]      = "No group";
$group_details["none"]          = "This is a dummy package group: if you see this, you have found a bug in our site :D";

$group_description["slackware"] = "Slackware *.txz binary package";
$group_details["slackware"]     = "Download this if you have a Slackware based system.";

$group_description["debian"]    = "Debian *.deb binary package";
$group_details["debian"]        = "Download this if you have a Debian based system.";

$group_description["opensuse"]  = "OpenSUSE *.rpm binary package";
$group_details["opensuse"]      = "Download this if you have an OpenSUSE Linux distribution. This kind of package *might* also work on plain RedHat, Mandrake and other systems that can use rpms.";

$group_description["fedora"]    = "Fedora Linux binary *.rpm";
$group_details["fedora"]        = "Download this if you have a Fedora Linux distribution. This kind of package *might* also work on plain RedHat, Mandrake and other systems that can use rpms.";

$group_description["mandrake"]  = "Mandrake Linux binary *.rpm";
$group_details["mandrake"]      = "Download this if you have a Mandrake Linux distribution. This kind of package *might* also work on plain RedHat, SuSE and other rpm-enabled systems.";

$group_description["ubuntu"]    = "Ubuntu *.deb binary package";
$group_details["ubuntu"]        = "Download this if you have a Ubuntu Linux distribution.";

$group_description["ubuntu_karmic"] = "Ubuntu Karmic *.deb binary package";
$group_details["ubuntu_karmic"] = "Download this if you have an Ubuntu Karmic Linux distribution.";

$group_description["ubuntu_lucid"] = "Ubuntu Lucid *.deb binary package";
$group_details["ubuntu_lucid"] = "Download this if you have an Ubuntu Lucid Linux distribution.";

$group_description["ubuntu_maverick"] = "Ubuntu Maverick *.deb binary package";
$group_details["ubuntu_maverick"] = "Download this if you have an Ubuntu Maverick Linux distribution.";

$group_description["mandriva"] = "Mandriva Linux binary *.rpm";
$group_details["mandriva"] = "Download this if you have a Mandriva Linux distribution. This kind of package *might* also work on plain RedHat, SuSE and other rpm-enabled systems.";


////////////////////////////////////////////////////////////////////////////////////////////////
// The available packages

// newest releases should go on top of the list


// quickdownload links
$hua = $_SERVER['HTTP_USER_AGENT'];

if((strpos($hua,'Windows') !== false) || (strpos($hua,'WinXP') !== false))
{
	$quickdownload_link = $ftp_mirror[1]['url']."/$current/binary/win32/KVIrc-$current-$codename.exe";
	$quickdownload_version = $current;
} else if((strpos($hua,'Macintosh') !== false) || (strpos($hua,'OS X') !== false) || (strpos($hua,'Mac_PowerPC') !== false))
{
	//$quickdownload_link = $ftp_mirror[1]['url']."/4.0.2/binary/macosx/KVIrc-4.0.2.dmg";
	// point to the download page that explains that the user needs to pre-installl Qt
	$quickdownload_link = "?id=releases&platform=macosx&version=$current&lang=en";
	$quickdownload_version = $current;
} else {
	$quickdownload_link = $ftp_mirror[1]['url']."/$current/source/kvirc-$current.tar.bz2";
	$quickdownload_version = $current;
}


$package_count = 0;

//================================================================================================
// 5.2.8
//================================================================================================

$p_filename[$package_count]    = "KVIrc-5.2.8.tar.gz";
$p_description[$package_count] = "KVIrc 5.2.8, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the gzip program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "5.2.8";
$p_size[$package_count]        = "6365703";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "The KVIrc Development Team";
$p_fullurl[$package_count]     = "https://github.com/kvirc/KVIrc/archive/refs/tags/5.2.8.tar.gz";
$package_count++;

$p_filename[$package_count]    = "KVIrc-5.2.8-Quasar-x86_64.exe";
$p_description[$package_count] = "KVIrc 5.2.8, Windows 64 bit Binary";
$p_details[$package_count]     = "Self-contained win64 KVIrc executable: it should run just after the installation.";
$p_platform[$package_count]    = "win64";
$p_version[$package_count]     = "5.2.8";
$p_size[$package_count]        = "50670453";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "The KVIrc Development Team";
$p_fullurl[$package_count]     = "https://github.com/kvirc/KVIrc/releases/download/5.2.8/KVIrc-5.2.8-Quasar-x86_64.exe";
$package_count++;

$p_filename[$package_count]    = "KVIrc-5.2.8-Quasar-Win7-x64.exe";
$p_description[$package_count] = "KVIrc 5.2.8, Windows 64 bit Binary for Windows 7 based on Qt 5";
$p_details[$package_count]     = "Self-contained win64 KVIrc executable: it should run just after the installation.";
$p_platform[$package_count]    = "win64";
$p_version[$package_count]     = "5.2.8";
$p_size[$package_count]        = "50670453";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "The KVIrc Development Team";
$p_fullurl[$package_count]     = "https://github.com/kvirc/KVIrc/releases/download/5.2.8/KVIrc-5.2.8-Quasar-Win7-x64.exe";
$package_count++;

$p_filename[$package_count]    = "KVIrc-5.2.8-Quasar.dmg";
$p_description[$package_count] = "KVIrc 5.2.8, Mac OS X Bundle";
$p_details[$package_count]     = "Self-contained OS X KVIrc executable: it should run just after the installation.";
$p_platform[$package_count]    = "macosx";
$p_version[$package_count]     = "5.2.8";
$p_size[$package_count]        = "43093377";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "The KVIrc Development Team";
$p_fullurl[$package_count]     = "https://github.com/kvirc/KVIrc/releases/download/5.2.8/KVIrc-5.2.8-Quasar.dmg";
$package_count++;

//================================================================================================
// 5.2.6
//================================================================================================

$p_filename[$package_count]    = "KVIrc-5.2.6.tar.gz";
$p_description[$package_count] = "KVIrc 5.2.6, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the gzip program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "5.2.6";
$p_size[$package_count]        = "6365703";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "The KVIrc Development Team";
$p_fullurl[$package_count]     = "https://github.com/kvirc/KVIrc/archive/refs/tags/5.2.6.tar.gz";
$package_count++;

$p_filename[$package_count]    = "KVIrc-5.2.6-Quasar-x86_64.exe";
$p_description[$package_count] = "KVIrc 5.2.6, Windows 64 bit Binary";
$p_details[$package_count]     = "Self-contained win64 KVIrc executable: it should run just after the installation.";
$p_platform[$package_count]    = "win64";
$p_version[$package_count]     = "5.2.6";
$p_size[$package_count]        = "50670453";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "The KVIrc Development Team";
$p_fullurl[$package_count]     = "https://github.com/kvirc/KVIrc/releases/download/5.2.6/KVIrc-5.2.6-Quasar-x86_64.exe";
$package_count++;

$p_filename[$package_count]    = "KVIrc-5.2.6-Quasar-Win7-x64.exe";
$p_description[$package_count] = "KVIrc 5.2.6, Windows 64 bit Binary for Windows 7 based on Qt 5";
$p_details[$package_count]     = "Self-contained win64 KVIrc executable: it should run just after the installation.";
$p_platform[$package_count]    = "win64";
$p_version[$package_count]     = "5.2.6";
$p_size[$package_count]        = "50670453";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "The KVIrc Development Team";
$p_fullurl[$package_count]     = "https://github.com/kvirc/KVIrc/releases/download/5.2.6/KVIrc-5.2.6-Quasar-Win7-x64.exe";
$package_count++;

$p_filename[$package_count]    = "KVIrc-5.2.6-Quasar.dmg";
$p_description[$package_count] = "KVIrc 5.2.6, Mac OS X Bundle";
$p_details[$package_count]     = "Self-contained OS X KVIrc executable: it should run just after the installation.";
$p_platform[$package_count]    = "macosx";
$p_version[$package_count]     = "5.2.6";
$p_size[$package_count]        = "43093377";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "The KVIrc Development Team";
$p_fullurl[$package_count]     = "https://github.com/kvirc/KVIrc/releases/download/5.2.6/KVIrc-5.2.6-Quasar.dmg";
$package_count++;

//================================================================================================
// 5.2.4
//================================================================================================

// 5.2.4
// BZip 2 sources
$p_filename[$package_count]    = "KVIrc-5.2.4.tar.gz";
$p_description[$package_count] = "KVIrc 5.2.4, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the gzip program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "5.2.4";
$p_size[$package_count]        = "6365703";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "The KVIrc Development Team";
$p_fullurl[$package_count]     = "https://github.com/kvirc/KVIrc/archive/refs/tags/5.2.4.tar.gz";
$package_count++;

$p_filename[$package_count]    = "KVIrc-5.2.4-Quasar-x86_64.exe";
$p_description[$package_count] = "KVIrc 5.2.4, Windows 64 bit Binary";
$p_details[$package_count]     = "Self-contained win64 KVIrc executable: it should run just after the installation.";
$p_platform[$package_count]    = "win64";
$p_version[$package_count]     = "5.2.4";
$p_size[$package_count]        = "50670453";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "The KVIrc Development Team";
$p_fullurl[$package_count]     = "https://github.com/kvirc/KVIrc/releases/download/5.2.4/KVIrc-5.2.4-Quasar-x86_64.exe";
$package_count++;

$p_filename[$package_count]    = "KVIrc-5.2.4-Quasar.dmg";
$p_description[$package_count] = "KVIrc 5.2.4, Mac OS X Bundle";
$p_details[$package_count]     = "Self-contained OS X KVIrc executable: it should run just after the installation.";
$p_platform[$package_count]    = "macosx";
$p_version[$package_count]     = "5.2.4";
$p_size[$package_count]        = "43093377";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "The KVIrc Development Team";
$p_fullurl[$package_count]     = "https://github.com/kvirc/KVIrc/releases/download/5.2.4/KVIrc-5.2.4-Quasar.dmg";
$package_count++;

//================================================================================================
// 5.2.2
//================================================================================================

// 5.2.2
// BZip 2 sources
$p_filename[$package_count]    = "KVIrc-5.2.2.tar.gz";
$p_description[$package_count] = "KVIrc 5.2.2, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the gzip program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "5.2.2";
$p_size[$package_count]        = "6365703";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "The KVIrc Development Team";
$p_fullurl[$package_count]     = "https://github.com/kvirc/KVIrc/archive/refs/tags/5.2.2.tar.gz";
$package_count++;

$p_filename[$package_count]    = "KVIrc-5.2.2-Quasar-x86_64.exe";
$p_description[$package_count] = "KVIrc 5.2.2, Windows 64 bit Binary";
$p_details[$package_count]     = "Self-contained win64 KVIrc executable: it should run just after the installation.";
$p_platform[$package_count]    = "win64";
$p_version[$package_count]     = "5.2.2";
$p_size[$package_count]        = "50670453";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "The KVIrc Development Team";
$p_fullurl[$package_count]     = "https://github.com/kvirc/KVIrc/releases/download/5.2.2/KVIrc-5.2.2-Quasar-x86_64.exe";
$package_count++;

$p_filename[$package_count]    = "KVIrc-5.2.2-Quasar.dmg";
$p_description[$package_count] = "KVIrc 5.2.2, Mac OS X Bundle";
$p_details[$package_count]     = "Self-contained OS X KVIrc executable: it should run just after the installation.";
$p_platform[$package_count]    = "macosx";
$p_version[$package_count]     = "5.2.2";
$p_size[$package_count]        = "43093377";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "The KVIrc Development Team";
$p_fullurl[$package_count]     = "https://github.com/kvirc/KVIrc/releases/download/5.2.2/KVIrc-5.2.2-Quasar.dmg";
$package_count++;

//================================================================================================
// 5.2.0
//================================================================================================

// 5.2.0
// BZip 2 sources
$p_filename[$package_count]    = "KVIrc-5.2.0.tar.gz";
$p_description[$package_count] = "KVIrc 5.2.0, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the gzip program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "5.2.0";
$p_size[$package_count]        = "6365703";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "The KVIrc Development Team";
$p_fullurl[$package_count]     = "https://github.com/kvirc/KVIrc/archive/refs/tags/5.2.0.tar.gz";
$package_count++;

$p_filename[$package_count]    = "KVIrc-5.2.0-Quasar-x86.exe";
$p_description[$package_count] = "KVIrc 5.2.0, Windows 32 bit Binary";
$p_details[$package_count]     = "Self-contained win32 KVIrc executable: it should run just after the installation.";
$p_platform[$package_count]    = "win32";
$p_version[$package_count]     = "5.2.0";
$p_size[$package_count]        = "35970143";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "The KVIrc Development Team";
$p_fullurl[$package_count]     = "https://github.com/kvirc/KVIrc/releases/download/5.2.0/KVIrc-5.2.0-Quasar-x86.exe";
$package_count++;

$p_filename[$package_count]    = "KVIrc-5.2.0-Quasar-x86_64.exe";
$p_description[$package_count] = "KVIrc 5.2.0, Windows 64 bit Binary";
$p_details[$package_count]     = "Self-contained win64 KVIrc executable: it should run just after the installation.";
$p_platform[$package_count]    = "win64";
$p_version[$package_count]     = "5.2.0";
$p_size[$package_count]        = "50670453";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "The KVIrc Development Team";
$p_fullurl[$package_count]     = "https://github.com/kvirc/KVIrc/releases/download/5.2.0/KVIrc-5.2.0-Quasar-x86_64.exe";
$package_count++;

$p_filename[$package_count]    = "KVIrc-5.2.0-Quasar.dmg";
$p_description[$package_count] = "KVIrc 5.2.0, Mac OS X Bundle";
$p_details[$package_count]     = "Self-contained OS X KVIrc executable: it should run just after the installation.";
$p_platform[$package_count]    = "macosx";
$p_version[$package_count]     = "5.2.0";
$p_size[$package_count]        = "43093377";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "The KVIrc Development Team";
$p_fullurl[$package_count]     = "https://github.com/kvirc/KVIrc/releases/download/5.2.0/KVIrc-5.2.0-Quasar.dmg";
$package_count++;

//================================================================================================
// 5.0.0
//================================================================================================

// 5.0.0
// BZip 2 sources
$p_filename[$package_count]    = "KVIrc-5.0.0.tar.bz2";
$p_path[$package_count]        = "5.0.0/source";
$p_description[$package_count] = "KVIrc 5.0.0, sources (bzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the bzip2 program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "5.0.0";
$p_size[$package_count]        = "4329467";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "The KVIrc Development Team";
$package_count++;


$p_filename[$package_count]    = "KVIrc-5.0.0-x86.exe";
$p_path[$package_count]        = "5.0.0/binary/win32";
$p_description[$package_count] = "KVIrc 5.0.0, Windows 32 bit Binary";
$p_details[$package_count]     = "Self-contained win32 KVIrc executable: it should run just after the installation.";
$p_platform[$package_count]    = "win32";
$p_version[$package_count]     = "5.0.0";
$p_size[$package_count]        = "33713940";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "DarthGandalf";
$package_count++;

$p_filename[$package_count]    = "KVIrc-5.0.0-x86_64.exe";
$p_path[$package_count]        = "5.0.0/binary/win64";
$p_description[$package_count] = "KVIrc 5.0.0, Windows 64 bit Binary";
$p_details[$package_count]     = "Self-contained win64 KVIrc executable: it should run just after the installation.";
$p_platform[$package_count]    = "win64";
$p_version[$package_count]     = "5.0.0";
$p_size[$package_count]        = "37998478";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "DarthGandalf";
$package_count++;

$p_filename[$package_count]    = "KVIrc-5.0.0.dmg";
$p_path[$package_count]        = "5.0.0/binary/macosx";
$p_description[$package_count] = "KVIrc 5.0.0, Mac OS X Bundle";
$p_details[$package_count]     = "Self-contained OS X KVIrc executable: it should run just after the installation.";
$p_platform[$package_count]    = "macosx";
$p_version[$package_count]     = "5.0.0";
$p_size[$package_count]        = "23144136";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Asokolov";
$package_count++;

//============================================================================================================================================
// 4.2.0
//============================================================================================================================================


// 4.2.0
// BZip 2 sources
$p_filename[$package_count]    = "kvirc-4.2.0.tar.bz2";
$p_path[$package_count]        = "4.2.0/source";
$p_description[$package_count] = "KVIrc 4.2.0, sources (bzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the bzip2 program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "4.2.0";
$p_size[$package_count]        = "5461587";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Fabio Bas (ctrlaltca at gmail dot com)";
$package_count++;

// 4.2.0
// Gzip sources
$p_filename[$package_count]    = "kvirc-4.2.0.tar.gz";
$p_path[$package_count]        = "4.2.0/source";
$p_description[$package_count] = "KVIrc 4.2.0, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the bzip2 program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "4.2.0";
$p_size[$package_count]        = "7216161";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Fabio Bas (ctrlaltca at gmail dot com)";
$package_count++;

// 4.2.0
// Windows
$p_filename[$package_count]    = "KVIrc-4.2.0-Equilibrium.exe";
$p_path[$package_count]        = "4.2.0/binary/win32";
$p_description[$package_count] = "KVIrc 4.2.0, Windows binary, 32-bit";
$p_details[$package_count]     = "The self-installing binary package for Windows built with Mingw 4.4 on top of Qt 4.8.2. Just double click on it after downloading.";
$p_platform[$package_count]    = "win32";
$p_version[$package_count]     = "4.2.0";
$p_size[$package_count]        = "19210067";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Fabio Bas (ctrlaltca at gmail dot com)";
$package_count++;

// 4.2.0
// MacOSX
$p_filename[$package_count]    = "KVIrc-4.2.0-Equilibrium.dmg";
$p_path[$package_count]        = "4.2.0/binary/osx";
$p_description[$package_count] = "KVIrc 4.2.0, OS X image, 64-bit, 32-bit";
$p_details[$package_count]     = "The OS X image for OS X built on clang on top of Qt 4.8.1. Known to work at least on OS X 10.7x64 and 10.6x32";
$p_platform[$package_count]    = "macosx";
$p_version[$package_count]     = "4.2.0";
$p_size[$package_count]        = "31002661";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Fabio Bas (ctrlaltca at gmail dot com)";
$package_count++;


//============================================================================================================================================
// 4.0.4
//============================================================================================================================================


// 4.0.4
// BZip 2 sources
$p_filename[$package_count]    = "kvirc-4.0.4.tar.bz2";
$p_path[$package_count]        = "4.0.4/source";
$p_description[$package_count] = "KVIrc 4.0.4, sources (bzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the bzip2 program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "4.0.4";
$p_size[$package_count]        = "5355332";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Fabio Bas (ctrlaltca at gmail dot com)";
$package_count++;

// 4.0.4
// Gzip sources
$p_filename[$package_count]    = "kvirc-4.0.4.tar.gz";
$p_path[$package_count]        = "4.0.4/source";
$p_description[$package_count] = "KVIrc 4.0.4, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the bzip2 program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "4.0.4";
$p_size[$package_count]        = "7012020";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Fabio Bas (ctrlaltca at gmail dot com)";
$package_count++;

// 4.0.4
// Windows
$p_filename[$package_count]    = "KVIrc-4.0.4-Insomnia.exe";
$p_path[$package_count]        = "4.0.4/binary/win32";
$p_description[$package_count] = "KVIrc 4.0.4, Windows binary, 32-bit";
$p_details[$package_count]     = "The self-installing binary package for Windows built on top of the LGPL version of the Qt library. Just double click on it after downloading.";
$p_platform[$package_count]    = "win32";
$p_version[$package_count]     = "4.0.4";
$p_size[$package_count]        = "17276436";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Gizmokid2005";
$package_count++;

// 4.0.4
// Slackware 13.37
$p_filename[$package_count]    = "kvirc-4.0.4-x86_64-1hel.txz";
$p_path[$package_count]        = "4.0.4/binary/slackware";
$p_description[$package_count] = "KVIrc 4.0.4, Slackware 13.37 binary, x86_64";
$p_details[$package_count]     = "The self-installing binary package for Slackware 13.37 built on top of glibc 2.13. Just use pkgtool to install after downloading.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.4";
$p_size[$package_count]        = "5259516";
$p_group[$package_count]       = "slackware";
$p_author[$package_count]      = "HelLViS69 (hellvis69 at gmail dot com)";
$package_count++;

// 4.0.4
// Ubuntu Maverick
$p_filename[$package_count]    = "kvirc_4.0.4-1_amd64.deb";
$p_path[$package_count]        = "4.0.4/binary/ubuntu/maverick";
$p_description[$package_count] = "KVIrc 4.0.4, Ubuntu Maverick, amd64 architecture.";
$p_details[$package_count]     = "Data files for the self-installing binary packages (all architectures). You also need one of the binary packages above.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.4";
$p_size[$package_count]        = "2178476";
$p_group[$package_count]       = "ubuntu_maverick";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.4
// Ubuntu Maverick
$p_filename[$package_count]    = "kvirc_4.0.4-1_i386.deb";
$p_path[$package_count]        = "4.0.4/binary/ubuntu/maverick";
$p_description[$package_count] = "KVIrc 4.0.4, Ubuntu Maverick, i386 architecture.";
$p_details[$package_count]     = "Data files for the self-installing binary packages (all architectures). You also need one of the binary packages above.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.4";
$p_size[$package_count]        = "1960614";
$p_group[$package_count]       = "ubuntu_maverick";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.4
// Ubuntu Maverick
$p_filename[$package_count]    = "kvirc-data_4.0.4-1_all.deb";
$p_path[$package_count]        = "4.0.4/binary/ubuntu/maverick";
$p_description[$package_count] = "KVIrc 4.0.4, Ubuntu Maverick, data files.";
$p_details[$package_count]     = "Data files for the self-installing binary packages (all architectures). You also need one of the binary packages above.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.4";
$p_size[$package_count]        = "2415060";
$p_group[$package_count]       = "ubuntu_maverick";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;


//============================================================================================================================================
// 4.0.2
//============================================================================================================================================


// 4.0.2
// BZip 2 sources
$p_filename[$package_count]    = "kvirc-4.0.2.tar.bz2";
$p_path[$package_count]        = "4.0.2/source";
$p_description[$package_count] = "KVIrc 4.0.2, sources (bzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the bzip2 program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "5279602";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Szymon Tomasz Stefanek (pragma at kvirc dot net)";
$package_count++;

// 4.0.2
// Gzip sources
$p_filename[$package_count]    = "kvirc-4.0.2.tar.gz";
$p_path[$package_count]        = "4.0.2/source";
$p_description[$package_count] = "KVIrc 4.0.2, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the bzip2 program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "6918688";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Szymon Tomasz Stefanek (pragma at kvirc dot net)";
$package_count++;

// 4.0.2
// Windows
$p_filename[$package_count]    = "KVIrc-4.0.2-Insomnia.exe";
$p_path[$package_count]        = "4.0.2/binary/win32";
$p_description[$package_count] = "KVIrc 4.0.2, Windows binary, 32-bit";
$p_details[$package_count]     = "The self-installing binary package for Windows built on top of the LGPL version of the Qt library. Just double click on it after downloading.";
$p_platform[$package_count]    = "win32";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "17035771";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Gizmokid2005";
$package_count++;

// 4.0.2
// Slackware 13.1
$p_filename[$package_count]    = "kvirc-4.0.2-x86_64-1hel.txz";
$p_path[$package_count]        = "4.0.2/binary/slackware";
$p_description[$package_count] = "KVIrc 4.0.2, Slackware 13.1 binary, x86_64";
$p_details[$package_count]     = "The self-installing binary package for Slackware 13.1 built on top of glibc 2.11.1. Just use pkgtool to install after downloading.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "5034052";
$p_group[$package_count]       = "slackware";
$p_author[$package_count]      = "HelLViS69 (hellvis69 at gmail dot com)";
$package_count++;

// 4.0.2
// Ubuntu Karmic
$p_filename[$package_count]    = "kvirc_4.0.2-1_amd64.deb";
$p_path[$package_count]        = "4.0.2/binary/ubuntu/karmic";
$p_description[$package_count] = "KVIrc 4.0.2, Ubuntu Karmic, amd64 architecture.";
$p_details[$package_count]     = "The self-installing binary package for Ubuntu Karmic on amd64. You also need kvirc-data_4.0.2-1_all.deb below.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "3319744";
$p_group[$package_count]       = "ubuntu_karmic";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.2
// Ubuntu Karmic
$p_filename[$package_count]    = "kvirc_4.0.2-1_i386.deb";
$p_path[$package_count]        = "4.0.2/binary/ubuntu/karmic";
$p_description[$package_count] = "KVIrc 4.0.2, Ubuntu Karmic, i386 architecture.";
$p_details[$package_count]     = "The self-installing binary package for Ubuntu Karmic on i386. You also need kvirc-data_4.0.2-1_all.deb below.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "2984480";
$p_group[$package_count]       = "ubuntu_karmic";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.2
// Ubuntu Karmic
$p_filename[$package_count]    = "kvirc-data_4.0.2-1_all.deb";
$p_path[$package_count]        = "4.0.2/binary/ubuntu/karmic";
$p_description[$package_count] = "KVIrc 4.0.2, Ubuntu Karmic, data files.";
$p_details[$package_count]     = "Data files for the self-installing binary packages (all architectures). You also need one of the binary packages above.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "3626430";
$p_group[$package_count]       = "ubuntu_karmic";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.2
// Ubuntu Karmic
$p_filename[$package_count]    = "kvirc-dbg_4.0.2-1_amd64.deb";
$p_path[$package_count]        = "4.0.2/binary/ubuntu/karmic";
$p_description[$package_count] = "KVIrc 4.0.2, Ubuntu Karmic, amd64 architecture, Debug Symbols";
$p_details[$package_count]     = "The amd64 debug symbols package for Ubuntu Karmic: useful if you want to report bugs. You also need kvirc_4.0.2-1_amd64.deb and kvirc-data_4.0.2-1_all.deb above.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "783828";
$p_group[$package_count]       = "ubuntu_karmic";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.2
// Ubuntu Karmic
$p_filename[$package_count]    = "kvirc-dbg_4.0.2-1_i386.deb";
$p_path[$package_count]        = "4.0.2/binary/ubuntu/karmic";
$p_description[$package_count] = "KVIrc 4.0.2, Ubuntu Karmic, i386 architecture, Debug Symbols";
$p_details[$package_count]     = "The i386 debug symbol package for Ubuntu Karmic: useful if you want to report bugs. You also need kvirc_4.0.2-1_i386.deb and kvirc-data_4.0.2-1_all.deb above.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "777258";
$p_group[$package_count]       = "ubuntu_karmic";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.2
// Ubuntu Lucid
$p_filename[$package_count]    = "kvirc_4.0.2-1_amd64.deb";
$p_path[$package_count]        = "4.0.2/binary/ubuntu/lucid";
$p_description[$package_count] = "KVIrc 4.0.2, Ubuntu Lucid, amd64 architecture.";
$p_details[$package_count]     = "The self-installing binary package for Ubuntu Lucid on amd64. You also need kvirc-data_4.0.2-1_all.deb below.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "2245198";
$p_group[$package_count]       = "ubuntu_lucid";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.2
// Ubuntu Lucid
$p_filename[$package_count]    = "kvirc_4.0.2-1_i386.deb";
$p_path[$package_count]        = "4.0.2/binary/ubuntu/lucid";
$p_description[$package_count] = "KVIrc 4.0.2, Ubuntu Lucid, i386 architecture.";
$p_details[$package_count]     = "The self-installing binary package for Ubuntu Lucid on i386. You also need kvirc-data_4.0.2-1_all.deb below.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "2029624";
$p_group[$package_count]       = "ubuntu_lucid";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.2
// Ubuntu Lucid
$p_filename[$package_count]    = "kvirc-data_4.0.2-1_all.deb";
$p_path[$package_count]        = "4.0.2/binary/ubuntu/lucid";
$p_description[$package_count] = "KVIrc 4.0.2, Ubuntu Lucid, data files.";
$p_details[$package_count]     = "Data files for the self-installing binary packages (all architectures). You also need one of the binary packages above.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "2356674";
$p_group[$package_count]       = "ubuntu_lucid";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.2
// Ubuntu Lucid
$p_filename[$package_count]    = "kvirc-dbg_4.0.2-1_amd64.deb";
$p_path[$package_count]        = "4.0.2/binary/ubuntu/lucid";
$p_description[$package_count] = "KVIrc 4.0.2, Ubuntu Karmic, amd64 architecture, Debug Symbols";
$p_details[$package_count]     = "The amd64 debug symbols package for Ubuntu Lucid: useful if you want to report bugs. You also need kvirc_4.0.2-1_amd64.deb and kvirc-data_4.0.2-1_all.deb above.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "475022";
$p_group[$package_count]       = "ubuntu_lucid";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.2
// Ubuntu Lucid
$p_filename[$package_count]    = "kvirc-dbg_4.0.2-1_i386.deb";
$p_path[$package_count]        = "4.0.2/binary/ubuntu/lucid";
$p_description[$package_count] = "KVIrc 4.0.2, Ubuntu Karmic, i386 architecture, Debug Symbols";
$p_details[$package_count]     = "The i386 debug symbol package for Ubuntu Lucid: useful if you want to report bugs. You also need kvirc_4.0.2-1_i386.deb and kvirc-data_4.0.2-1_all.deb above.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "475654";
$p_group[$package_count]       = "ubuntu_lucid";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.2
// openSUSE 11.2
$p_filename[$package_count]    = "kvirc-4.0.2-1.1.x86_64.rpm";
$p_path[$package_count]        = "4.0.2/binary/opensuse/11.2";
$p_description[$package_count] = "KVIrc 4.0.2, OpenSUSE 11.2 binary, x86_64";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 11.2.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "5360608";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// 4.0.2
// openSUSE 11.2
$p_filename[$package_count]    = "kvirc-4.0.2-1.1.i586.rpm";
$p_path[$package_count]        = "4.0.2/binary/opensuse/11.2";
$p_description[$package_count] = "KVIrc 4.0.2, OpenSUSE 11.2 binary, i586";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 11.2.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "5102449";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// 4.0.2
// openSUSE 11.3
$p_filename[$package_count]    = "kvirc-4.0.2-1.1.x86_64.rpm";
$p_path[$package_count]        = "4.0.2/binary/opensuse/11.3";
$p_description[$package_count] = "KVIrc 4.0.2, OpenSUSE 11.3 binary, x86_64";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 11.3";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "4795474";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// 4.0.2
// openSUSE 11.3
$p_filename[$package_count]    = "kvirc-4.0.2-1.1.i586.rpm";
$p_path[$package_count]        = "4.0.2/binary/opensuse/11.3";
$p_description[$package_count] = "KVIrc 4.0.2, OpenSUSE 11.3 binary, i586";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 11.3";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "4555259";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// 4.0.2
// openSUSE factory
$p_filename[$package_count]    = "kvirc-4.0.2-1.2.x86_64.rpm";
$p_path[$package_count]        = "4.0.2/binary/opensuse/factory";
$p_description[$package_count] = "KVIrc 4.0.2, OpenSUSE Factory binary, x86_64";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE Factory.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "4790242";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// 4.0.2
// openSUSE factory
$p_filename[$package_count]    = "kvirc-4.0.2-1.2.i586.rpm";
$p_path[$package_count]        = "4.0.2/binary/opensuse/factory";
$p_description[$package_count] = "KVIrc 4.0.2, OpenSUSE Factory binary, i586";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE Factory.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "4547025";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// 4.0.2
// MacOSX
$p_filename[$package_count]    = "KVIrc-4.0.2.dmg";
$p_path[$package_count]        = "4.0.2/binary/macosx";
$p_description[$package_count] = "KVIrc 4.0.2, OS X binary";
$p_details[$package_count]     = "The universal (ppc/i386) bundle for OS X built on Snow Leopard 10.6.4. You need <a href=\"javascript:opendoc('http://qt.nokia.com/downloads/qt-for-open-source-cpp-development-on-mac-os-x');\">Qt4.6.3</a> installed on your system. Copy the bundle to a suitable location and double click.";
$p_platform[$package_count]    = "macosx";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "12168084";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Gizmokid2005 (gizmokid2005 at gmail dot com)";
$package_count++;

// 4.0.2
// FreeBSD 8
$p_filename[$package_count]    = "kvirc-4.0.2.tbz";
$p_path[$package_count]        = "4.0.2/binary/freebsd/8";
$p_description[$package_count] = "KVIrc 4.0.2, FreeBSD 8 binary";
$p_details[$package_count]     = "FreeBSD Port; Can be installed with pkg_add -r kvirc <br/>or compiled by source by doing:<br/>cd /usr/ports/irc/kvirc && make install clean";
$p_platform[$package_count]    = "freebsd";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "6285320";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Cpet (chris at cpetservices dot com)";
$package_count++;

// 4.0.2
// FreeBSD 8
$p_filename[$package_count]    = "kvirc-4.0.2-x86_64.tbz";
$p_path[$package_count]        = "4.0.2/binary/freebsd/8";
$p_description[$package_count] = "KVIrc 4.0.2, FreeBSD 8 64-bit binary";
$p_details[$package_count]     = "FreeBSD Port; Can be installed with pkg_add -r kvirc <br/>or compiled by source by doing:<br/>cd /usr/ports/irc/kvirc && make install clean";
$p_platform[$package_count]    = "freebsd";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "6332157";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Cpet (chris at cpetservices dot com)";
$package_count++;

// 4.0.2
// FreeBSD 7
$p_filename[$package_count]    = "kvirc-4.0.2.tbz";
$p_path[$package_count]        = "4.0.2/binary/freebsd/7";
$p_description[$package_count] = "KVIrc 4.0.2, FreeBSD 7 binary";
$p_details[$package_count]     = "FreeBSD Port; Can be installed with pkg_add -r kvirc <br/>or compiled by source by doing:<br/>cd /usr/ports/irc/kvirc && make install clean";
$p_platform[$package_count]    = "freebsd";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "6285831";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Cpet (chris at cpetservices dot com)";
$package_count++;

// 4.0.2
// FreeBSD 7
$p_filename[$package_count]    = "kvirc-4.0.2-x86_64.tbz";
$p_path[$package_count]        = "4.0.2/binary/freebsd/7";
$p_description[$package_count] = "KVIrc 4.0.2, FreeBSD 7 64-bit binary";
$p_details[$package_count]     = "FreeBSD Port; Can be installed with pkg_add -r kvirc <br/>or compiled by source by doing:<br/>cd /usr/ports/irc/kvirc && make install clean";
$p_platform[$package_count]    = "freebsd";
$p_version[$package_count]     = "4.0.2";
$p_size[$package_count]        = "6333727";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Cpet (chris at cpetservices dot com)";
$package_count++;

//================================================================================================
// 4.0.0
//================================================================================================

// 4.0.0
// BZip 2 sources
$p_filename[$package_count]    = "kvirc-4.0.0.tar.bz2";
$p_path[$package_count]        = "4.0.0/source";
$p_description[$package_count] = "KVIrc 4.0.0, sources (bzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the bzip2 program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "5257838";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Szymon Tomasz Stefanek (pragma at kvirc dot net)";
$package_count++;

// 4.0.0
// Gzip sources
$p_filename[$package_count]    = "kvirc-4.0.0.tar.gz";
$p_path[$package_count]        = "4.0.0/source";
$p_description[$package_count] = "KVIrc 4.0.0, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the bzip2 program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "6831235";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Szymon Tomasz Stefanek (pragma at kvirc dot net)";
$package_count++;

// 4.0.0
// Windows
$p_filename[$package_count]    = "KVIrc-4.0.0-Insomnia.exe";
$p_path[$package_count]        = "4.0.0/binary/win32";
$p_description[$package_count] = "KVIrc 4.0.0, Windows binary, 32-bit";
$p_details[$package_count]     = "The self-installing binary package for Windows built on top of the LGPL version of the Qt library. Just double click on it after downloading.";
$p_platform[$package_count]    = "win32";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "16611211";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "CtrlAltCa (ctrlaltca at gmail dot com)";
$package_count++;

// 4.0.0
// Slackware 13.1
$p_filename[$package_count]    = "kvirc-4.0.0-x86_64-1hel.txz";
$p_path[$package_count]        = "4.0.0/binary/slackware";
$p_description[$package_count] = "KVIrc 4.0.0, Slackware 13.1 binary, x86_64";
$p_details[$package_count]     = "The self-installing binary package for Slackware 13.1 built on top of glibc 2.11.1. Just use pkgtool to install after downloading.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "5000612";
$p_group[$package_count]       = "slackware";
$p_author[$package_count]      = "HelLViS69 (hellvis69 at gmail dot com)";
$package_count++;

// 4.0.0
// openSUSE 11.1
$p_filename[$package_count]    = "kvirc-4.0.0-2.2.x86_64.rpm";
$p_path[$package_count]        = "4.0.0/binary/opensuse/11.1";
$p_description[$package_count] = "KVIrc 4.0.0, OpenSUSE 11.1 binary, x86_64";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 11.1.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "5184455";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// 4.0.0
// openSUSE 11.1
$p_filename[$package_count]    = "kvirc-4.0.0-2.2.i586.rpm";
$p_path[$package_count]        = "4.0.0/binary/opensuse/11.1";
$p_description[$package_count] = "KVIrc 4.0.0, OpenSUSE 11.1 binary, ix86";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 11.1.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "4937338";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// 4.0.0
// openSUSE 11.2
$p_filename[$package_count]    = "kvirc-4.0.0-2.1.x86_64.rpm";
$p_path[$package_count]        = "4.0.0/binary/opensuse/11.2";
$p_description[$package_count] = "KVIrc 4.0.0, OpenSUSE 11.2 binary, x86_64";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 11.2.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "5316809";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// 4.0.0
// openSUSE 11.2
$p_filename[$package_count]    = "kvirc-4.0.0-2.1.i586.rpm";
$p_path[$package_count]        = "4.0.0/binary/opensuse/11.2";
$p_description[$package_count] = "KVIrc 4.0.0, OpenSUSE 11.2 binary, ix86";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 11.2.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "5057332";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// 4.0.0
// openSUSE factory
$p_filename[$package_count]    = "kvirc-4.0.0-2.1.x86_64.rpm";
$p_path[$package_count]        = "4.0.0/binary/opensuse/factory";
$p_description[$package_count] = "KVIrc 4.0.0, OpenSUSE Factory binary, x86_64";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE Factory.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "4761654";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// 4.0.0
// openSUSE factory
$p_filename[$package_count]    = "kvirc-4.0.0-2.1.i586.rpm";
$p_path[$package_count]        = "4.0.0/binary/opensuse/factory";
$p_description[$package_count] = "KVIrc 4.0.0, OpenSUSE Factory binary, ix86";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE Factory.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "4521538";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// 4.0.0
// MacOSX
$p_filename[$package_count]    = "KVIrc-4.0.0.dmg";
$p_path[$package_count]        = "4.0.0/binary/macosx";
$p_description[$package_count] = "KVIrc 4.0.0, OS X binary";
$p_details[$package_count]     = "The universal (ppc/i386) bundle for OS X built on Leopard 10.5.8. You need <a href=\"javascript:opendoc('http://qt.nokia.com/downloads/qt-for-open-source-cpp-development-on-mac-os-x');\">Qt4.6.3</a> installed on your system. Copy the bundle to a suitable location and double click.";
$p_platform[$package_count]    = "macosx";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "12565912";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Thomas Kalla (xtx at gmx dot de)";
$package_count++;

// 4.0.0
// ubuntu_karmic
$p_filename[$package_count]    = "kvirc_4.0.0-1_amd64.deb";
$p_path[$package_count]        = "4.0.0/binary/ubuntu/karmic";
$p_description[$package_count] = "KVIrc 4.0.0, Ubuntu Karmic, amd64 architecture.";
$p_details[$package_count]     = "The self-installing binary package for Ubuntu Karmic on amd64. You also need kvirc-data_4.0.0-1_all.deb below.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "3314046";
$p_group[$package_count]       = "ubuntu_karmic";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.0
// ubuntu_karmic
$p_filename[$package_count]    = "kvirc_4.0.0-1_i386.deb";
$p_path[$package_count]        = "4.0.0/binary/ubuntu/karmic";
$p_description[$package_count] = "KVIrc 4.0.0, Ubuntu Karmic, i386 architecture.";
$p_details[$package_count]     = "The self-installing binary package for Ubuntu Karmic on i386. You also need kvirc-data_4.0.0-1_all.deb below.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "2976080";
$p_group[$package_count]       = "ubuntu_karmic";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.0
// ubuntu_karmic
$p_filename[$package_count]    = "kvirc-data_4.0.0-1_all.deb";
$p_path[$package_count]        = "4.0.0/binary/ubuntu/karmic";
$p_description[$package_count] = "KVIrc 4.0.0, Ubuntu Karmic, data files.";
$p_details[$package_count]     = "Data files for the self-installing binary packages (all architectures). You also need one of the binary packages above.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "3568132";
$p_group[$package_count]       = "ubuntu_karmic";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.0
// ubuntu_karmic
$p_filename[$package_count]    = "kvirc-dbg_4.0.0-1_amd64.deb";
$p_path[$package_count]        = "4.0.0/binary/ubuntu/karmic";
$p_description[$package_count] = "KVIrc 4.0.0, Ubuntu Karmic, amd64 architecture, Debug Symbols";
$p_details[$package_count]     = "The amd64 debug symbols package for Ubuntu Karmic: useful if you want to report bugs. You also need kvirc_4.0.0-1_amd64.deb and kvirc-data_4.0.0-1_all.deb above.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "783274";
$p_group[$package_count]       = "ubuntu_karmic";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.0
// ubuntu_karmic
$p_filename[$package_count]    = "kvirc-dbg_4.0.0-1_i386.deb";
$p_path[$package_count]        = "4.0.0/binary/ubuntu/karmic";
$p_description[$package_count] = "KVIrc 4.0.0, Ubuntu Karmic, i386 architecture, Debug Symbols";
$p_details[$package_count]     = "The i386 debug symbol package for Ubuntu Karmic: useful if you want to report bugs. You also need kvirc_4.0.0-1_i386.deb and kvirc-data_4.0.0-1_all.deb above.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "776226";
$p_group[$package_count]       = "ubuntu_karmic";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.0
// ubuntu_lucid
$p_filename[$package_count]    = "kvirc_4.0.0-1_amd64.deb";
$p_path[$package_count]        = "4.0.0/binary/ubuntu/lucid";
$p_description[$package_count] = "KVIrc 4.0.0, Ubuntu Lucid, amd64 architecture.";
$p_details[$package_count]     = "The self-installing binary package for Ubuntu Lucid on amd64. You also need kvirc-data_4.0.0-1_all.deb below.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "2242514";
$p_group[$package_count]       = "ubuntu_lucid";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.0
// ubuntu_lucid
$p_filename[$package_count]    = "kvirc_4.0.0-1_i386.deb";
$p_path[$package_count]        = "4.0.0/binary/ubuntu/lucid";
$p_description[$package_count] = "KVIrc 4.0.0, Ubuntu Lucid, i386 architecture.";
$p_details[$package_count]     = "The self-installing binary package for Ubuntu Lucid on i386. You also need kvirc-data_4.0.0-1_all.deb below.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "2026390";
$p_group[$package_count]       = "ubuntu_lucid";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.0
// ubuntu_lucid
$p_filename[$package_count]    = "kvirc-data_4.0.0-1_all.deb";
$p_path[$package_count]        = "4.0.0/binary/ubuntu/lucid";
$p_description[$package_count] = "KVIrc 4.0.0, Ubuntu Lucid, data files.";
$p_details[$package_count]     = "Data files for the self-installing binary packages (all architectures). You also need one of the binary packages above.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "2326796";
$p_group[$package_count]       = "ubuntu_lucid";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.0
// ubuntu_lucid
$p_filename[$package_count]    = "kvirc-dbg_4.0.0-1_amd64.deb";
$p_path[$package_count]        = "4.0.0/binary/ubuntu/lucid";
$p_description[$package_count] = "KVIrc 4.0.0, Ubuntu Karmic, amd64 architecture, Debug Symbols";
$p_details[$package_count]     = "The amd64 debug symbols package for Ubuntu Lucid: useful if you want to report bugs. You also need kvirc_4.0.0-1_amd64.deb and kvirc-data_4.0.0-1_all.deb above.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "475932";
$p_group[$package_count]       = "ubuntu_lucid";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.0
// ubuntu_lucid
$p_filename[$package_count]    = "kvirc-dbg_4.0.0-1_i386.deb";
$p_path[$package_count]        = "4.0.0/binary/ubuntu/lucid";
$p_description[$package_count] = "KVIrc 4.0.0, Ubuntu Karmic, i386 architecture, Debug Symbols";
$p_details[$package_count]     = "The i386 debug symbol package for Ubuntu Lucid: useful if you want to report bugs. You also need kvirc_4.0.0-1_i386.deb and kvirc-data_4.0.0-1_all.deb above.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "476392";
$p_group[$package_count]       = "ubuntu_lucid";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// 4.0.0
// mandriva
$p_filename[$package_count]    = "kvirc-4.0.0-2mde2010.1.x86_64.rpm";
$p_path[$package_count]        = "4.0.0/binary/mandriva/2010.1/x86_64";
$p_description[$package_count] = "KVIrc 4.0.0, Mandriva 2010.1, x86_64 architecture";
$p_details[$package_count]     = "The self-installing binary package for Mandriva 2010.1 on x86_64 bit systems. You also need lib64kvirc4-4.0.0-1mde2010.1.x86_64.rpm below.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "4318575";
$p_group[$package_count]       = "mandriva";
$p_author[$package_count]      = "Z&eacute; (ze at mandriva dot org)";
$package_count++;

// 4.0.0
// mandriva
$p_filename[$package_count]    = "lib64kvirc4-4.0.0-2mde2010.1.x86_64.rpm";
$p_path[$package_count]        = "4.0.0/binary/mandriva/2010.1/x86_64";
$p_description[$package_count] = "KVIrc 4.0.0, Mandriva 2010.1, x86_64 architecture";
$p_details[$package_count]     = "The kvirc library for Mandriva 2010.1 on x86_64 bit systems. This is a dependency of kvirc-4.0.0-1mde2010.1.x86_64.rpm above.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "236459";
$p_group[$package_count]       = "mandriva";
$p_author[$package_count]      = "Z&eacute; (ze at mandriva dot org)";
$package_count++;

// 4.0.0
// mandriva
$p_filename[$package_count]    = "kvirc-debug-4.0.0-2mde2010.1.x86_64.rpm";
$p_path[$package_count]        = "4.0.0/binary/mandriva/2010.1/x86_64";
$p_description[$package_count] = "KVIrc 4.0.0, Mandriva 2010.1, x86_64 architecture, Debug Version";
$p_details[$package_count]     = "The self-installing binary package for Mandriva 2010.1 on x86_64 bit systems. This also contains debug symbols and is useful if you want to report kvirc bugs.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "15777914";
$p_group[$package_count]       = "mandriva";
$p_author[$package_count]      = "Z&eacute; (ze at mandriva dot org)";
$package_count++;

// 4.0.0
// mandriva
$p_filename[$package_count]    = "kvirc-devel-4.0.0-2mde2010.1.x86_64.rpm";
$p_path[$package_count]        = "4.0.0/binary/mandriva/2010.1/x86_64";
$p_description[$package_count] = "KVIrc 4.0.0, Mandriva 2010.1, x86_64 architecture, Optional Development Files";
$p_details[$package_count]     = "Optional development files for the packages above.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "4.0.0";
$p_size[$package_count]        = "18734";
$p_group[$package_count]       = "mandriva";
$p_author[$package_count]      = "Z&eacute; (ze at mandriva dot org)";
$package_count++;


// ========================================================================== //
//                                OLDER RELEASES                              //
// ========================================================================== //

// 3.4.2
// BZip 2 sources
$p_filename[$package_count]    = "kvirc-3.4.2.tar.bz2";
$p_path[$package_count]        = "3.4.2/source";
$p_description[$package_count] = "KVIrc 3.4.2, sources (bzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the bzip2 program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "5421405";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Fabio Bas (ctrlaltca at gmail dot com)";
$package_count++;

// GZip sources
$p_filename[$package_count]    = "kvirc-3.4.2.tar.gz";
$p_path[$package_count]        = "3.4.2/source";
$p_description[$package_count] = "KVIrc 3.4.2, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the gzip program, if you have bzip2 grab the *.bz2 format instead.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "7143238";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Fabio Bas (ctrlaltca at gmail dot com)";
$package_count++;

// Slackware 12.1
$p_filename[$package_count]    = "kvirc-3.4.2-i686-1.tgz";
$p_path[$package_count]        = "3.4.2/binary/slackware";
$p_description[$package_count] = "KVIrc 3.4.2, Slackware 12.1 binary";
$p_details[$package_count]     = "The self-installing binary package for Slackware 12.1 built on top of glibc 2.7. Just use pkgtool to install after downloading.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "8682100";
$p_group[$package_count]       = "slackware";
$p_author[$package_count]      = "HelLViS69 (hellvis69 at gmail dot com)";
$package_count++;

// Slamd64 12.1
$p_filename[$package_count]    = "kvirc-3.4.2-x86_64-1.tgz";
$p_path[$package_count]        = "3.4.2/binary/slamd64";
$p_description[$package_count] = "KVIrc 3.4.2, Slamd64 12.1 binary";
$p_details[$package_count]     = "The self-installing binary package for Slamd64 12.1 built on top of glibc 2.7. Just use pkgtool to install after downloading.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "8417994";
$p_group[$package_count]       = "slackware";
$p_author[$package_count]      = "CtrlAltCa (ctrlaltca at gmail dot com)";
$package_count++;

// Bluewhite64 12.1
$p_filename[$package_count]    = "kvirc-3.4.2-x86_64-1.tgz";
$p_path[$package_count]        = "3.4.2/binary/bluewhite64";
$p_description[$package_count] = "KVIrc 3.4.2, Bluewhite64 12.1 binary";
$p_details[$package_count]     = "The self-installing binary package for Bluewhite64 12.1 built on top of glibc 2.7. Just use pkgtool to install after downloading.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "7837879";
$p_group[$package_count]       = "slackware";
$p_author[$package_count]      = "Kenjiro (jedi dot kenjiro at gmail dot com)";
$package_count++;

// Ubuntu 8.04
$p_filename[$package_count]    = "kvirc-3.4.2-i386.deb";
$p_path[$package_count]        = "3.4.2/binary/ubuntu";
$p_description[$package_count] = "KVIrc 3.4.2, Ubuntu 8.04 binary";
$p_details[$package_count]     = "The self-installing binary package for Ubuntu 8.04.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "7617176";
$p_group[$package_count]       = "debian";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// Ubuntu 8.04 amd64
$p_filename[$package_count]    = "kvirc-3.4.2-amd64.deb";
$p_path[$package_count]        = "3.4.2/binary/ubuntu";
$p_description[$package_count] = "KVIrc 3.4.2, Ubuntu 8.04 binary for amd64";
$p_details[$package_count]     = "The self-installing binary package for Ubuntu 8.04 for amd64.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "7792552";
$p_group[$package_count]       = "debian";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

// openSUSE 11.1
$p_filename[$package_count]    = "kvirc-3.4.2-3.1.i586.rpm";
$p_path[$package_count]        = "3.4.2/binary/opensuse/11.1";
$p_description[$package_count] = "KVIrc 3.4.2, OpenSUSE 11.1 binary";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 11.1.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "5563848";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

$p_filename[$package_count]    = "kvirc-devel-3.4.2-3.1.i586.rpm";
$p_path[$package_count]        = "3.4.2/binary/opensuse/11.1";
$p_description[$package_count] = "KVIrc 3.4.2, OpenSUSE 11.1 binary";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 11.1.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "225641";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// openSUSE 11.1 64-bit
$p_filename[$package_count]    = "kvirc-3.4.2-3.1.x86_64.rpm";
$p_path[$package_count]        = "3.4.2/binary/opensuse/11.1";
$p_description[$package_count] = "KVIrc 3.4.2, OpenSUSE 11.1 binary for 64-bit";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 11.1 64-bit.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "5635416";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

$p_filename[$package_count]    = "kvirc-devel-3.4.2-3.1.x86_64.rpm";
$p_path[$package_count]        = "3.4.2/binary/opensuse/11.1";
$p_description[$package_count] = "KVIrc 3.4.2, OpenSUSE 11.1 binary for 64-bit";
$p_details[$package_count]     = "The self-installing devel binary package for OpenSUSE 11.1 64-bit.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "225607";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// openSUSE 11.0
$p_filename[$package_count]    = "kvirc-3.4.2-1.1.i586.rpm";
$p_path[$package_count]        = "3.4.2/binary/opensuse/11.0";
$p_description[$package_count] = "KVIrc 3.4.2, OpenSUSE 11.0 binary";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 11.0.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "5567011";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

$p_filename[$package_count]    = "kvirc-devel-3.4.2-1.1.i586.rpm";
$p_path[$package_count]        = "3.4.2/binary/opensuse/11.0";
$p_description[$package_count] = "KVIrc 3.4.2, OpenSUSE 11.0 devel binary";
$p_details[$package_count]     = "The self-installing devel binary package for OpenSUSE 11.0.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "225372";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// openSUSE 11.0 64-bit
$p_filename[$package_count]    = "kvirc-3.4.2-1.1.x86_64.rpm";
$p_path[$package_count]        = "3.4.2/binary/opensuse/11.0";
$p_description[$package_count] = "KVIrc 3.4.2, OpenSUSE 11.0 binary for 64-bit";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 11.0 64-bit.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "5660041";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

$p_filename[$package_count]    = "kvirc-devel-3.4.2-1.1.x86_64.rpm";
$p_path[$package_count]        = "3.4.2/binary/opensuse/11.0";
$p_description[$package_count] = "KVIrc 3.4.2, OpenSUSE 11.0 binary for 64-bit";
$p_details[$package_count]     = "The self-installing devel binary package for OpenSUSE 11.0 64-bit.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "225392";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// openSUSE 10.3
$p_filename[$package_count]    = "kvirc-3.4.2-1.1.i586.rpm";
$p_path[$package_count]        = "3.4.2/binary/opensuse/10.3";
$p_description[$package_count] = "KVIrc 3.4.2, OpenSUSE 10.3 binary";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 10.3.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "6392791";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

$p_filename[$package_count]    = "kvirc-devel-3.4.2-1.1.i586.rpm";
$p_path[$package_count]        = "3.4.2/binary/opensuse/10.3";
$p_description[$package_count] = "KVIrc 3.4.2, OpenSUSE 10.3 devel binary";
$p_details[$package_count]     = "The self-installing devel binary package for OpenSUSE 10.3.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "206087";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// openSUSE 10.3 64-bit
$p_filename[$package_count]    = "kvirc-3.4.2-1.1.x86_64.rpm";
$p_path[$package_count]        = "3.4.2/binary/opensuse/10.3";
$p_description[$package_count] = "KVIrc 3.4.2, OpenSUSE 10.3 binary for 64-bit";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 10.3 64-bit.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "6532598";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

$p_filename[$package_count]    = "kvirc-devel-3.4.2-1.1.x86_64.rpm";
$p_path[$package_count]        = "3.4.2/binary/opensuse/10.3";
$p_description[$package_count] = "KVIrc 3.4.2, OpenSUSE 10.3 binary for 64-bit";
$p_details[$package_count]     = "The self-installing devel binary package for OpenSUSE 10.3 64-bit.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "205690";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// Debian
$p_filename[$package_count]    = "kvirc_3.4.2-0_i386.deb";
$p_path[$package_count]        = "3.4.2/binary/debian";
$p_description[$package_count] = "KVIrc 3.4.2, Debian sid binary";
$p_details[$package_count]     = "The self-installing binary package for Debian.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "3595356";
$p_group[$package_count]       = "debian";
$p_author[$package_count]      = "Kebianizao";
$package_count++;

$p_filename[$package_count]    = "kvirc-data_3.4.2-0_all.deb";
$p_path[$package_count]        = "3.4.2/binary/debian";
$p_description[$package_count] = "KVIrc 3.4.2, Debian sid binary";
$p_details[$package_count]     = "The self-installing binary package for Debian.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "3571320";
$p_group[$package_count]       = "debian";
$p_author[$package_count]      = "Kebianizao";
$package_count++;

$p_filename[$package_count]    = "kvirc-dev_3.4.2-0_i386.deb";
$p_path[$package_count]        = "3.4.2/binary/debian";
$p_description[$package_count] = "KVIrc 3.4.2, Debian sid binary";
$p_details[$package_count]     = "The self-installing binary package for Debian.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "361062";
$p_group[$package_count]       = "debian";
$p_author[$package_count]      = "Kebianizao";
$package_count++;

// Debian 64-bit
$p_filename[$package_count]    = "kvirc_3.4.2-0_amd64.deb";
$p_path[$package_count]        = "3.4.2/binary/debian";
$p_description[$package_count] = "KVIrc 3.4.2, Debian sid binary";
$p_details[$package_count]     = "The self-installing binary package for Debian.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "3727396";
$p_group[$package_count]       = "debian";
$p_author[$package_count]      = "Kebianizao";
$package_count++;

$p_filename[$package_count]    = "kvirc-data_3.4.2-0_all.deb";
$p_path[$package_count]        = "3.4.2/binary/debian";
$p_description[$package_count] = "KVIrc 3.4.2, Debian sid binary";
$p_details[$package_count]     = "The self-installing binary package for Debian.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "3734430";
$p_group[$package_count]       = "debian";
$p_author[$package_count]      = "Kebianizao";
$package_count++;

$p_filename[$package_count]    = "kvirc-dev_3.4.2-0_amd64.deb";
$p_path[$package_count]        = "3.4.2/binary/debian";
$p_description[$package_count] = "KVIrc 3.4.2, Debian sid binary";
$p_details[$package_count]     = "The self-installing binary package for Debian.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "378988";
$p_group[$package_count]       = "debian";
$p_author[$package_count]      = "Kebianizao";
$package_count++;

// FreeBsd Port
$p_filename[$package_count]    = "kvirc-3.4.2_1.tbz";
$p_path[$package_count]        = "3.4.2/binary/freebsd";
$p_description[$package_count] = "KVIrc 3.4.2, FreeBSD binary";
$p_details[$package_count]     = "FreeBSD Port; Can be installed with pkg_add -r kvirc <br/>or compiled by source by doing:<br/>cd /usr/ports/irc/kvirc && make install clean";
$p_platform[$package_count]    = "freebsd";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "8557506";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Cpet (chris [at] officialunix [dot] com)";
$package_count++;

// Sources
$p_filename[$package_count]    = "kvirc-3.4.0.tar.bz2";
$p_path[$package_count]        = "3.4.0/source";
$p_description[$package_count] = "KVIrc 3.4.0, sources (bzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the bzip2 program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "5311152";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Szymon Stefanek (pragma at kvirc dot net)";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.4.0.tar.gz";
$p_path[$package_count]        = "3.4.0/source";
$p_description[$package_count] = "KVIrc 3.4.0, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the gzip program, if you have bzip2 grab the *.bz2 format instead.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "7062650";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Szymon Stefanek (pragma at kvirc dot net)";
$package_count++;

// Windows
$p_filename[$package_count]    = "KVIrc-3.4.2.1.exe";
$p_path[$package_count]        = "3.4.2/binary/win32";
$p_description[$package_count] = "KVIrc 3.4.2, Windows binary";
$p_details[$package_count]     = "The self-installing binary package for Windows built on top of the non-commercial version of the Qt library. Just double click on it after downloading.";
$p_platform[$package_count]    = "win32";
$p_version[$package_count]     = "3.4.2";
$p_size[$package_count]        = "7012470";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "CtrlAltCa (ctrlaltca at gmail dot com)";
$package_count++;

// Windows
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

// Windows with Classic Icons
$p_filename[$package_count]    = "KVIrc-3.4.0-classic.exe";
$p_path[$package_count]        = "3.4.0/binary/win32";
$p_description[$package_count] = "KVIrc 3.4.0, Windows Classic binary";
$p_details[$package_count]     = "The self-installing binary package for Windows built on top of the non-commercial version of the Qt library. It uses the classic icon set. Just double click on it after downloading.";
$p_platform[$package_count]    = "win32";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "6821414";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Noldor (elfonol at gmail dot com)";
$package_count++;

// Slackware 12.1
$p_filename[$package_count]    = "kvirc-3.4.0-i486-1.tgz";
$p_path[$package_count]        = "3.4.0/binary/slackware";
$p_description[$package_count] = "KVIrc 3.4.0, Slackware 12.1 binary";
$p_details[$package_count]     = "The self-installing binary package for Slackware 12.1 built on top of glibc 2.7. Just use pkgtool to install after downloading.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "8386977";
$p_group[$package_count]       = "slackware";
$p_author[$package_count]      = "HelLViS69 (hellvis69 at gmail dot com)";
$package_count++;

// MacOS X Intel
$p_filename[$package_count]    = "KVIrc-3.4.0-intel.dmg";
$p_path[$package_count]        = "3.4.0/binary/macosx";
$p_description[$package_count] = "KVIrc 3.4.0, Macintosh Intel binary";
$p_details[$package_count]     = "The self-installing binary package for Macintosh built on OS X Leopard (10.5.2). It should run on Tiger (10.4.x) as well.";
$p_platform[$package_count]    = "macosx";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "10808707";
$p_group[$package_count]       = "slackware";
$p_author[$package_count]      = "Thomas Kalla (xtx@gmx.de)";
$package_count++;

// MacOS X PPC
$p_filename[$package_count]    = "KVIrc-3.4.0-ppc.dmg";
$p_path[$package_count]        = "3.4.0/binary/macosx";
$p_description[$package_count] = "KVIrc 3.4.0, Macintosh PPC binary";
$p_details[$package_count]     = "The self-installing binary package for Macintosh built on OS X Panther (10.3.9).";
$p_platform[$package_count]    = "macosx";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "11391024";
$p_group[$package_count]       = "slackware";
$p_author[$package_count]      = "Thomas Kalla (xtx@gmx.de)";
$package_count++;

// openSUSE 10.3
$p_filename[$package_count]    = "kvirc-3.4.0-4.3.i586.rpm";
$p_path[$package_count]        = "3.4.0/binary/opensuse/10.3";
$p_description[$package_count] = "KVIrc 3.4.0, OpenSUSE 10.3 binary";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 10.3.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "6290556";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

$p_filename[$package_count]    = "kvirc-devel-3.4.0-4.3.i586.rpm";
$p_path[$package_count]        = "3.4.0/binary/opensuse/10.3";
$p_description[$package_count] = "KVIrc 3.4.0, OpenSUSE 10.3 binary";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 10.3.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "205661";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// openSUSE 10.3 64-bit
$p_filename[$package_count]    = "kvirc-3.4.0-4.3.x86_64.rpm";
$p_path[$package_count]        = "3.4.0/binary/opensuse/10.3";
$p_description[$package_count] = "KVIrc 3.4.0, OpenSUSE 10.3 binary for 64-bit";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 10.3 for 64-bit.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "6435643";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

$p_filename[$package_count]    = "kvirc-devel-3.4.0-4.3.x86_64.rpm";
$p_path[$package_count]        = "3.4.0/binary/opensuse/10.3";
$p_description[$package_count] = "KVIrc 3.4.0, OpenSUSE 10.3 binary for 64-bit";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 10.3 for 64-bit.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "205776";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// openSUSE 11.0
$p_filename[$package_count]    = "kvirc-3.4.0-4.2.i586.rpm";
$p_path[$package_count]        = "3.4.0/binary/opensuse/11.0";
$p_description[$package_count] = "KVIrc 3.4.0, OpenSUSE 11.0 binary";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 11.0.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "5450961";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

$p_filename[$package_count]    = "kvirc-devel-3.4.0-4.2.i586.rpm";
$p_path[$package_count]        = "3.4.0/binary/opensuse/11.0";
$p_description[$package_count] = "KVIrc 3.4.0, OpenSUSE 11.0 binary";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 11.0.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "225143";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// openSUSE 11.0 64-bit
$p_filename[$package_count]    = "kvirc-3.4.0-4.2.x86_64.rpm";
$p_path[$package_count]        = "3.4.0/binary/opensuse/11.0";
$p_description[$package_count] = "KVIrc 3.4.0, OpenSUSE 11.0 binary for 64-bit";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 11.0.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "5535974";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

$p_filename[$package_count]    = "kvirc-devel-3.4.0-4.2.x86_64.rpm";
$p_path[$package_count]        = "3.4.0/binary/opensuse/11.0";
$p_description[$package_count] = "KVIrc 3.4.0, OpenSUSE 11.0 binary for 64-bit";
$p_details[$package_count]     = "The self-installing binary package for OpenSUSE 11.0.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "225109";
$p_group[$package_count]       = "opensuse";
$p_author[$package_count]      = "Klaas Tammling (webmaster at st-city dot net)";
$package_count++;

// Debian
$p_filename[$package_count]    = "kvirc_3.4-0_i386.deb";
$p_path[$package_count]        = "3.4.0/binary/debian";
$p_description[$package_count] = "KVIrc 3.4.0, Debian sid binary";
$p_details[$package_count]     = "The self-installing binary package for Debian.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "3586642";
$p_group[$package_count]       = "debian";
$p_author[$package_count]      = "k0sm|k0 (k0smik0 at logorroici dot org)";
$package_count++;

$p_filename[$package_count]    = "kvirc-data_3.4-0_all.deb";
$p_path[$package_count]        = "3.4.0/binary/debian";
$p_description[$package_count] = "KVIrc 3.4.0, Debian sid binary";
$p_details[$package_count]     = "The self-installing binary package for Debian.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "3606396";
$p_group[$package_count]       = "debian";
$p_author[$package_count]      = "k0sm|k0 (k0smik0 at logorroici dot org)";
$package_count++;

$p_filename[$package_count]    = "kvirc-dev_3.4-0_i386.deb";
$p_path[$package_count]        = "3.4.0/binary/debian";
$p_description[$package_count] = "KVIrc 3.4.0, Debian sid binary";
$p_details[$package_count]     = "The self-installing binary package for Debian.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "380016";
$p_group[$package_count]       = "debian";
$p_author[$package_count]      = "k0sm|k0 (k0smik0 at logorroici dot org)";
$package_count++;

$p_filename[$package_count]    = "kvirc_3.4.0-1_i386.deb";
$p_path[$package_count]        = "3.4.0/binary/ubuntu";
$p_description[$package_count] = "KVIrc 3.4.0, Ubuntu 8.04 binary";
$p_details[$package_count]     = "The self-installing binary package for Ubuntu 8.04.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "7423242";
$p_group[$package_count]       = "ubuntu";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

$p_filename[$package_count]    = "kvirc_3.4.0-1_amd64.deb";
$p_path[$package_count]        = "3.4.0/binary/ubuntu";
$p_description[$package_count] = "KVIrc 3.4.0, Ubuntu 8.04 binary for amd64";
$p_details[$package_count]     = "The self-installing binary package for Ubuntu 8.04.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.4.0";
$p_size[$package_count]        = "7467628";
$p_group[$package_count]       = "ubuntu";
$p_author[$package_count]      = "ambossarm (ambossarm at gmail dot com)";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.2.0.tar.bz2";
$p_path[$package_count]        = "3.2.0/source";
$p_description[$package_count] = "KVIrc 3.2.0, sources (bzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the bzip2 program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.2.0";
$p_size[$package_count]        = "3704445";
$p_group[$package_count]       = "none";
$p_author[$package_count]      = "Szymon Stefanek (pragma at kvirc dot net)";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.2.0.tar.gz";
$p_path[$package_count]        = "3.2.0/source";
$p_description[$package_count] = "KVIrc 3.2.0, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the gzip program, if you have bzip2 grab the *.bz2 format instead.";
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
$p_description[$package_count] = "KVIrc 3.2.0, OS X binary";
$p_details[$package_count]     = "OS X bundle built on top of the non-commercial version of the Qt library. Just double click on it after downloading.";
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
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.2.0";
$p_size[$package_count]        = "5026451";
$p_group[$package_count]       = "slackware";
$p_author[$package_count]      = "Claudiu Cismaru <claudiu at cnixs dot com>";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.2.0-i386-1-HelLViS69.tgz";
$p_path[$package_count]        = "3.2.0/binary/slackware";
$p_description[$package_count] = "KVIrc 3.2.0, Slackware binary package";
$p_details[$package_count]     = "Binary package for Slackware Linux. Built on Slackware 10.1 with testing gcc 3.4 (needs libstdc++6!)";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.2.0";
$p_size[$package_count]        = "5229278";
$p_group[$package_count]       = "slackware";
$p_author[$package_count]      = "HelLViS69";
$package_count++;

$p_filename[$package_count]    = "KVirc-3.2.0-debug.dmg";
$p_path[$package_count]        = "3.2.0/binary/macosx";
$p_description[$package_count] = "KVIrc 3.2.0, OS X binary, debug version";
$p_details[$package_count]     = "Debug version of the OS X bundle. It is huge and may run slower but will help in detecting bugs.";
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
$p_details[$package_count]    .= "The distribution is split in three packages and you will need all of them to get a working KVIrc installation.<br><br>";
$p_details[$package_count]    .= "The official Debian packages are available at http://ftp.&lt;country&gt;.debian.org/debian/pool/main/k/kvirc/<br>";
$p_details[$package_count]    .= "Debian users can automatically update from KVIrc 2.x by adding the following line ";
$p_details[$package_count]    .= "to their /etc/apt/sources.list:<br>";
$p_details[$package_count]    .= "&nbsp;deb http://ftp.&lt;country&gt;.debian.org/debian/ experimental main<br>";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.2.0";
$p_size[$package_count]        = "2552784";
$p_author[$package_count]      = "Andrea Briganti (see <a href=\"http://kbytesys.altervista.org/linux/kvirc/\">http://kbytesys.altervista.org/linux/kvirc/</a>)";
$p_group[$package_count]       = "debian";
$package_count++;

$p_filename[$package_count]    = "kvirc-data_3.2.0-sarge2_all.deb";
$p_path[$package_count]        = "3.2.0/binary/debian";
$p_description[$package_count] = "KVIrc 3.2.0, Debian (Sarge) package, data files";
$p_details[$package_count]     = "These are the non official Debian Sarge binaries built by Andrea Briganti. ";
$p_details[$package_count]    .= "The distribution is split in three packages and you will need all of them to get a working KVIrc installation.<br><br>";
$p_details[$package_count]    .= "The official Debian packages are available at http://ftp.&lt;country&gt;.debian.org/debian/pool/main/k/kvirc/<br>";
$p_details[$package_count]    .= "Debian users can automatically update from KVIrc 2.x by adding the following line ";
$p_details[$package_count]    .= "to their /etc/apt/sources.list:<br>";
$p_details[$package_count]    .= "&nbsp;deb http://ftp.&lt;country&gt;.debian.org/debian/ experimental main<br>";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.2.0";
$p_size[$package_count]        = "2458096";
$p_author[$package_count]      = "Andrea Briganti (see <a href=\"http://kbytesys.altervista.org/linux/kvirc/\">http://kbytesys.altervista.org/linux/kvirc/</a>)";
$p_group[$package_count]       = "debian";
$package_count++;

$p_filename[$package_count]    = "kvirc-dev_3.2.0-sarge2_i386.deb";
$p_path[$package_count]        = "3.2.0/binary/debian";
$p_description[$package_count] = "KVIrc 3.2.0, Debian (Sarge) package, development headers";
$p_details[$package_count]     = "These are the non official Debian Sarge binaries built by Andrea Briganti. ";
$p_details[$package_count]    .= "The distribution is split in three packages and you will need all of them to get a working KVIrc installation.<br><br>";
$p_details[$package_count]    .= "The official Debian packages are available at http://ftp.&lt;country&gt;.debian.org/debian/pool/main/k/kvirc/<br>";
$p_details[$package_count]    .= "Debian users can automatically update from KVIrc 2.x by adding the following line ";
$p_details[$package_count]    .= "to their /etc/apt/sources.list:<br>";
$p_details[$package_count]    .= "&nbsp;deb http://ftp.&lt;country&gt;.debian.org/debian/ experimental main<br>";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.2.0";
$p_size[$package_count]        = "342664";
$p_author[$package_count]      = "Andrea Briganti (see <a href=\"http://kbytesys.altervista.org/linux/kvirc/\">http://kbytesys.altervista.org/linux/kvirc/</a>)";
$p_group[$package_count]       = "debian";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.1.tar.bz2";
$p_path[$package_count]        = "3.0.1/source";
$p_description[$package_count] = "KVIrc 3.0.1, sources (bzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the bzip2 program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.0.1";
$p_size[$package_count]        = "2679737";
$p_author[$package_count]      = "Szymon Stefanek (pragma at kvirc dot net)";
$p_group[$package_count]       = "none";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.1.tar.gz";
$p_path[$package_count]        = "3.0.1/source";
$p_description[$package_count] = "KVIrc 3.0.1, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the gzip program, if you have bzip2 grab the *.bz2 format instead.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.0.1";
$p_size[$package_count]        = "3487410";
$p_author[$package_count]      = "Szymon Stefanek (pragma at kvirc dot net)";
$p_group[$package_count]       = "none";
$package_count++;

$p_filename[$package_count]    = "kvirc3_3.0.1-2_i386.deb";
$p_path[$package_count]        = "3.0.1/binary/debian";
$p_description[$package_count] = "KVIrc 3.0.0, Debian GNU/Linux (sid/unstable)";
$p_details[$package_count]     = "Debian GNU/Linux binaries.<br> You may need also the development files and the documentation below.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.1";
$p_size[$package_count]        = "3323416";
$p_group[$package_count]       = "debian";
$package_count++;

$p_filename[$package_count]    = "kvirc3-dev_3.0.1-2_i386.deb";
$p_path[$package_count]        = "3.0.1/binary/debian";
$p_description[$package_count] = "KVIrc 3.0.0, Debian GNU/Linux (sid/unstable)";
$p_details[$package_count]     = "Debian GNU/Linux development files.<br> You need this in order to compile the KVIrc plugins on your system.<br>You need also the binary package above and maybe the documentation below.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.1";
$p_size[$package_count]        = "207750";
$p_group[$package_count]       = "debian";
$package_count++;

$p_filename[$package_count]    = "kvirc3-doc_3.0.1-2_all.deb";
$p_path[$package_count]        = "3.0.1/binary/debian";
$p_description[$package_count] = "KVIrc 3.0.0, Debian GNU/Linux (sid/unstable)";
$p_details[$package_count]     = "Debian GNU/Linux documentation files.<br> You need also the binary package above.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.1";
$p_size[$package_count]        = "386950";
$p_group[$package_count]       = "debian";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.1-i386-1.tgz";
$p_path[$package_count]        = "3.0.1/binary/slackware";
$p_description[$package_count] = "KVIrc 3.0.1,  Slackware 9.1 binary package";
$p_details[$package_count]     = "Slackware 9.1 binary package, linked to KDE 3.1.4 and Qt 3.2.1. Installs in /usr";
$p_platform[$package_count]    = "linux";
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
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the bzip2 program.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "2807216";
$p_group[$package_count]       = "none";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0.tar.gz";
$p_path[$package_count]        = "3.0.0/source";
$p_description[$package_count] = "KVIrc 3.0.0, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. The package is compressed using the gzip program, if you have bzip2 grab the *.bz2 format above.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "3653347";
$p_group[$package_count]       = "none";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-i686-1.tgz";
$p_path[$package_count]        = "3.0.0/binary/slackware";
$p_description[$package_count] = "KVIrc 3.0.0,  Slackware 9.1 binary package";
$p_details[$package_count]     = "Slackware binary package, linked to KDE 3.2.1. Installs in /opt/kde";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "4682758";
$p_group[$package_count]       = "slackware";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-i686-2.tgz";
$p_path[$package_count]        = "3.0.0/binary/slackware";
$p_description[$package_count] = "KVIrc 3.0.0,  Slackware 9.1 binary package";
$p_details[$package_count]     = "Slackware binary package, i686 optimized, installs in /opt/kde, use KDE 3.2.1, 3.2.2";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "4759241";
$p_group[$package_count]       = "slackware";
$package_count++;


$p_filename[$package_count]    = "kvirc-3.0.0-i686-no-KDE.tgz";
$p_path[$package_count]        = "3.0.0/binary/slackware";
$p_description[$package_count] = "KVIrc 3.0.0,  Slackware 9.1 binary package. No KDE";
$p_details[$package_count]     = "Slackware binary package, installs in /usr. Linked to Qt 3.2.1, compiled without KDE support";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "3838016";
$p_group[$package_count]       = "slackware";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-1mdk.i586.rpm";
$p_path[$package_count]        = "3.0.0/binary/mandrake/";
$p_description[$package_count] = "KVIrc 3.0.0, Mandrake 10 official binary package";
$p_details[$package_count]     = "Mandrake 10 binary package ";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "4009613";
$p_group[$package_count]       = "mandrake";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-1mdk.i386.rpm";
$p_path[$package_count]        = "3.0.0/binary/mandrake";
$p_description[$package_count] = "KVIrc 3.0.0, Mandrake 10 binary package (should also work on Mandrake 9.2)";
$p_details[$package_count]     = "Mandrake binary package, linked to KDE-3.2.0. Build against libc-2.3.2 and qt-3.2.3";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "4009613";
$p_group[$package_count]       = "mandrake";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-suse82_kde311_qt311-1.i386.rpm";
$p_path[$package_count]        = "3.0.0/binary/suse/8.2";
$p_description[$package_count] = "KVIrc 3.0.0, SuSE 8.2 RPM, KDE 3.1.1";
$p_details[$package_count]     = "SuSE 8.2 binary RPM linked to KDE 3.1.1, Qt 3.1.1.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "3937926";
$p_group[$package_count]       = "suse";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-1suse82.i686.rpm";
$p_path[$package_count]        = "3.0.0/binary/suse/8.2";
$p_description[$package_count] = "KVIrc 3.0.0, SuSE 8.2 RPM, i686 optimized";
$p_details[$package_count]     = "SuSE 8.2 binary RPM.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "3767602";
$p_group[$package_count]       = "suse";
$package_count++;

$p_filename[$package_count]    = "kvirc-devel-3.0.0-1suse82.i686.rpm";
$p_path[$package_count]        = "3.0.0/binary/suse/8.2";
$p_description[$package_count] = "KVIrc 3.0.0, SuSE 8.2 Devel RPM, i686 optimized";
$p_details[$package_count]     = "SuSE 8.2 Devel RPM.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "196598";
$p_group[$package_count]       = "suse";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0_suse90_kde322-1.i586.rpm";
$p_path[$package_count]        = "3.0.0/binary/suse/9.0";
$p_description[$package_count] = "KVIrc 3.0.0, SuSE 9.0 RPM, KDE 3.2.2";
$p_details[$package_count]     = "SuSE 9.0 binary RPM linked to KDE 3.2.2. Optimized for i586";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "3957944";
$p_group[$package_count]       = "suse";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-1suse90.i686.rpm";
$p_path[$package_count]        = "3.0.0/binary/suse/9.0";
$p_description[$package_count] = "KVIrc 3.0.0, SuSE 9.0 RPM, i686 optimized";
$p_details[$package_count]     = "SuSE 9.0 binary RPM. Optimized for i686";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "3786249";
$p_group[$package_count]       = "suse";
$package_count++;

$p_filename[$package_count]    = "kvirc-devel-3.0.0-1suse90.i686.rpm";
$p_path[$package_count]        = "3.0.0/binary/suse/9.0";
$p_description[$package_count] = "KVIrc 3.0.0, SuSE 9.0 Devel RPM, i686 optimized";
$p_details[$package_count]     = "SuSE 9.0 Devel RPM. Optimized for i686";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "190982";
$p_group[$package_count]       = "suse";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-1suse90.src.rpm";
$p_path[$package_count]        = "3.0.0/binary/suse/source";
$p_description[$package_count] = "KVIrc 3.0.0, SuSE 9.0 Source RPM";
$p_details[$package_count]     = "SuSE 9.0 Source RPM.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "2801085";
$p_group[$package_count]       = "suse";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0_fedora_core1-1.i386.rpm";
$p_path[$package_count]        = "3.0.0/binary/fedora";
$p_description[$package_count] = "KVIrc 3.0.0, Fedora Core 1 RPM";
$p_details[$package_count]     = "Fedora Core 1 binary RPM";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "3951429";
$p_group[$package_count]       = "fedora";
$package_count++;

$p_filename[$package_count]    = "";
$p_path[$package_count]        = "3.0.0/binary/debian";
$p_description[$package_count] = "KVIrc 3.0.0, Debian GNU/Linux (sid/unstable)";
$p_details[$package_count]     = "Debian GNU/Linux (sid/unstable) binaries.<br><br>Put one of these lines in your /etc/apt/source.list and do 'apt-get update && apt-get install kvirc3 kvirc3-doc kvirc3-dev'!<br>Alternatively you can download all debs and do 'dpkg -i ./kvirc3*.deb'.";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0";
$p_size[$package_count]        = "3979162";
$p_group[$package_count]       = "debian";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-beta2.tar.bz2";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/source";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, sources (bzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "2197822";
$p_group[$package_count]       = "none";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-beta2.tar.gz";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/source";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "2815485";
$p_group[$package_count]       = "none";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-beta2-i386.tgz";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/binary/slackware";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, slackware binary package";
$p_details[$package_count]     = "Slackware 8.1 binary package, linked to KDE-3.1 final";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "4350602";
$p_group[$package_count]       = "slackware";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-20030127-suse81-kde31-debug.i386.rpm";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/binary/suse";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, SuSE 8.1 RPM, KDE3.1 final, debug";
$p_details[$package_count]     = "SuSE 8.1 binary RPM linked to KDE-3.1 final and compiled with debug symbols (HUGE!).";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "17656348";
$p_group[$package_count]       = "suse";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-20030128-suse81-kde31.i386.rpm";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/binary/suse";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, SuSE 8.1 RPM, KDE3.1 final";
$p_details[$package_count]     = "SuSE 8.1 binary RPM linked to KDE-3.1 final , no debug symbols";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "4131094";
$p_group[$package_count]       = "suse";
$package_count++;

$p_filename[$package_count]    = "kvirc3-20030104-suse81-kde31beta2-1.i386.rpm";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/binary/suse";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, SuSE 8.1 RPM, linked to KDE3.1 beta2";
$p_details[$package_count]     = "SuSE 8.1 binary RPM linked to KDE-3.1-beta2";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "4119060";
$p_group[$package_count]       = "suse";
$package_count++;

$p_filename[$package_count]    = "kvirc3-qt_2.99.beta2-2_i386.deb";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/binary/debian";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, Debian package, no KDE";
$p_details[$package_count]     = "Debian package linked to Qt only (no KDE needed): documentation and development files NOT included, check out the kvirc3-doc and kvirc3-qt-dev packages below";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "3078880";
$p_group[$package_count]       = "debian";
$package_count++;

$p_filename[$package_count]    = "kvirc3-qt-dev_2.99.beta2-2_i386.deb";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/binary/debian";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, Debian package with development files (no KDE)";
$p_details[$package_count]     = "Headers and tools for KVIrc beta2 module development: Qt support only: no KDE";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "3072";
$p_group[$package_count]       = "debian";
$package_count++; 

$p_filename[$package_count]    = "kvirc3_2.99.beta2-2_i386.deb";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/binary/debian";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, Debian package, linked to KDE";
$p_details[$package_count]     = "Debian package linked to KDE: documentation and development files NOT included, check out the kvirc3-doc and kvirc3-dev packages below";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "3120636";
$p_group[$package_count]       = "debian";
$package_count++; 

$p_filename[$package_count]    = "kvirc3-dev_2.99.beta2-2_i386.deb";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/binary/debian";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, Debian package with development files (linked to KDE)";
$p_details[$package_count]     = "Headers and tools for KVIrc beta2 module development: linked to KDE";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "3162";
$p_group[$package_count]       = "debian";
$package_count++; 

$p_filename[$package_count]    = "kvirc3-doc_2.99.beta2-2_all.deb";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta2/binary/debian";
$p_description[$package_count] = "KVIrc 3.0.0 beta 2, Documentation Debian package";
$p_details[$package_count]     = "Documentation in HTML format for KVIrc beta 2";
$p_platform[$package_count]    = "linux";
$p_version[$package_count]     = "3.0.0-beta2";
$p_size[$package_count]        = "347036";
$p_group[$package_count]       = "debian";
$package_count++; 

$p_filename[$package_count]    = "kvirc-3.0.0-beta1.tar.bz2";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta1/source";
$p_description[$package_count] = "KVIrc 3.0.0 beta 1, sources (bzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. Please note that this is an <b>unstable</b> version.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.0.0-beta1";
$p_size[$package_count]        = "1995081";
$p_group[$package_count]       = "none";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-beta1.tar.gz";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta1/source";
$p_description[$package_count] = "KVIrc 3.0.0 beta 1, sources (gzipped package)";
$p_details[$package_count]     = "Source tarball for both UNIX and Windows versions. Please note that this is an <b>unstable</b> version.";
$p_platform[$package_count]    = "source";
$p_version[$package_count]     = "3.0.0-beta1";
$p_size[$package_count]        = "2565299";
$p_group[$package_count]       = "none";
$package_count++;

$p_filename[$package_count]    = "kvirc-3.0.0-1mdk.i586.rpm";
$p_path[$package_count]        = "3.0.0/pre-releases/3.0.0-beta1/binary";
$p_description[$package_count] = "KVIrc 3.0.0 beta 1, i586 binary";
$p_details[$package_count]     = "i586 binary package for Mandrake Linux. This might work also on plain RedHat. Please note that this is an <b>unstable</b> version.";
$p_platform[$package_count]    = "linux";
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
