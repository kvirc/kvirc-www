<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";
?>

<h1 class="pagetitle"><?=$template['install']['title1']?></h1>
<div class="column1-unit">
	<br /><h3><?=$template['install']['text1']?></h3>
	<ol>
		<li><a href="?id=install&amp;lang=<?=$lang?>#requirements"><?=$template['install']['title2']?></a></li>
		<li><a href="?id=install&amp;lang=<?=$lang?>#configure"><?=$template['install']['title3']?></a></li>
		<li><a href="?id=install&amp;lang=<?=$lang?>#interactive"><?=$template['install']['title4']?></a></li>
		<li><a href="?id=install&amp;lang=<?=$lang?>#compile"><?=$template['install']['title5']?></a></li>
		<li><a href="?id=install&amp;lang=<?=$lang?>#compile-mac"><?=$template['install']['title6']?></a></li>
		<li><a href="?id=install&amp;lang=<?=$lang?>#compile-win"><?=$template['install']['title7']?></a></li>
		<li><a href="?id=install&amp;lang=<?=$lang?>#hacker"><?=$template['install']['title8']?></a></li>
		<li><a href="?id=install&amp;lang=<?=$lang?>#package"><?=$template['install']['title9']?></a></li>
	</ol>
</div><br />

<a name="requirements"></a>
<h1 class="pagetitle"><?=$template['install']['title2']?></h1>
<div class="column1-unit">
	<p><?=$template['install']['text2']?>:</p>
	<ul class="list">
		<li><a href="?id=install&amp;lang=<?=$lang?>#qt">Qt GUI Toolkit 4.5</a> - <a href="javascript:opendoc('http://www.qtsoftware.com');">http://www.qtsoftware.com</a></li>
		<li><a href="?id=install&amp;lang=<?=$lang?>#cmake">CMake 2.6.4</a> - <a href="javascript:opendoc('http://www.cmake.org');">http://www.cmake.org</a></li>
		<li><a href="?id=install&amp;lang=<?=$lang?>#cpp">C++ compiler</a> - <a href="javascript:opendoc('http://gcc.gnu.org');">http://gcc.gnu.org</a></li>
		<li><a href="?id=install&amp;lang=<?=$lang?>#pthread">Pthread</a></li>
		<li><a href="?id=install&amp;lang=<?=$lang?>#dl">Dynamic Linker</a></li>
		<?/*<li><a href="?id=install&amp;lang=<?=$lang?>#zlib">ZLib</a> - <a href="javascript:opendoc('http://www.zlib.org');">http://www.zlib.org</a></li>*/?>
		<li><a href="?id=install&amp;lang=<?=$lang?>#kde">KDE (<?=$template['custom']['optional']?>)</a> - <a href="javascript:opendoc('http://www.kde.org');">http://www.kde.org</a></li>
		<li><a href="?id=install&amp;lang=<?=$lang?>#gettext">GNU gettext (<?=$template['custom']['optional']?>)</a> - <a href="javascript:opendoc('http://www.gnu.org/software/gettext');">http://www.gnu.org/software/gettext</a></li>
		<li><a href="?id=install&amp;lang=<?=$lang?>#ssl">OpenSSL (<?=$template['custom']['optional']?>)</a> - <a href="javascript:opendoc('http://www.openssl.org');">http://www.openssl.org</a></li>
		<li><a href="?id=install&amp;lang=<?=$lang?>#perl">Perl (<?=$template['custom']['optional']?>)</a> - <a href="javascript:opendoc('http://www.perl.com');">http://www.perl.com</a></li>
		<li><a href="?id=install&amp;lang=<?=$lang?>#sound">Sound System</a></li>
	</ul>

	<p><a name="qt"></a></p>
	<h3><b>Qt GUI Toolkit</b></h3>
	<p><?=$template['install']['text3']?></p>
	<p><?=$template['install']['text4']?></p>
	<p><?=$template['install']['text5a']?>:</p>
	<code># export QTDIR="<?=$template['install']['text5b']?>"</code>
	<p><?=$template['install']['text6']?>:</p>
	<code># export QTDIR=/usr/lib64/qt</code>
	<p><?=$template['install']['text7']?>:</p>
	<code># qmake -v</code>
	<p><?=$template['install']['text8']?>:</p>
	<code>
	QMake version 2.01a<br />
	Using Qt version 4.7.0 in /usr/lib64/qt/lib
	</code>
	<p><?=$template['install']['text9']?>:</p>
	<code>#PATH=/opt/qt4.5/bin/:$PATH cmake ..</code>
	<p><?=$template['install']['text10']?>:</p>
	<code>#LD_LIBRARY_PATH=/opt/qt4.5/lib/ kvirc4</code>

	<p><a name="cmake"></a></p>
	<h3><b>CMake</b></h3>
	<p><?=$template['install']['text11']?></p>
	<code># cmake --version</code>
	<p><?=$template['install']['text8']?>:</p>
	<code>cmake version 2.8.3</code>

	<p><a name="cpp"></a></p>
	<h3><b>C++ Compiler</b></h3>
	<p><?=$template['install']['text12']?>:</p>
	<code># gcc -v</code>
	<p><?=$template['install']['text8']?>:</p>
	<code>
	Reading specs from /usr/lib64/gcc/x86_64-slackware-linux/4.5.2/specs<br />
	COLLECT_GCC=gcc<br />
	COLLECT_LTO_WRAPPER=/usr/libexec/gcc/x86_64-slackware-linux/4.5.2/lto-wrapper<br />
	Target: x86_64-slackware-linux<br />
	Configured with: ../gcc-4.5.2/configure --prefix=/usr --libdir=/usr/lib64<br />
	--mandir=/usr/man --infodir=/usr/info --enable-shared --enable-bootstrap<br />
	--enable-languages=ada,c,c++,fortran,java,objc,lto --enable-threads=posix<br />
	--enable-checking=release --with-system-zlib --enable-libssp --enable-lto<br />
	--with-python-dir=/lib64/python2.6/site-packages --disable-libunwind-exceptions<br />
	--enable-__cxa_atexit --with-gnu-ld --verbose --disable-multilib<br />
	--target=x86_64-slackware-linux --build=x86_64-slackware-linux --host=x86_64-slackware-linux<br />
	Thread model: posix<br />
	gcc version 4.5.2 (GCC)
	</code>

	<p><a name="pthread"></a></p>
	<h3><b>Pthread Implementation</b></h3>
	<p><?=$template['install']['text13']?>:</p>
	<code># find / -name libpthread.so</code>
	<p><?=$template['install']['text8']?>:</p>
	<code># /usr/lib64/libpthread.so</code>
	<p><?=$template['install']['text14']?></p>

	<p><a name="dl"></a></p>
	<h3><b>Dynamic Linker Interface</b></h3>
	<p><?=$template['install']['text15']?></p>

	<p><a name="kde"></a></p>
	<h3><b>KDE (<?=$template['custom']['optional']?>)</b></h3>
	<p><?=$template['install']['text16a']?>:</p>
	<code># export KDEDIR="<?=$template['install']['text16b']?>"</code>
	<p><?=$template['install']['text17']?>:</p>
	<code># export KDEDIR=/usr</code>

	<p><a name="gettext"></a></p>
	<h3><b>GNU gettext (<?=$template['custom']['optional']?>)</b></h3>
	<p><?=$template['install']['text18']?>:</p>
	<code># msgfmt --version</code>
	<p><?=$template['install']['text19']?></p>

	<p><a name="ssl"></a></p>
	<h3><b>OpenSSL (<?=$template['custom']['optional']?>)</b></h3>
	<p><?=$template['install']['text20']?></p>

	<p><a name="perl"></a></p>
	<h3><b>Perl (<?=$template['custom']['optional']?>)</b></h3>
	<p><?=$template['install']['text21']?></p>
	<p><?=$template['install']['text22']?></p>

	<p><a name="sound"></a></p>
	<h3><b>Sound System (<?=$template['custom']['optional']?>)</b></h3>
	<p><?=$template['install']['text23']?>:</p>
	<code> # find / -name libgsm*</code>
	<p><?=$template['install']['text8']?>:</p>
	<code># /usr/lib64/libgsm.so</code>
	<p><?=$template['install']['text24']?>:</p>
	<code>
	# cd /usr/lib64<br />
	# ld --whole-archive -shared -o libgsm.so.1 libgsm.a<br />
	# ln -s libgsm.so.1 libgsm.so<br />
	# ldconfig
	</code>
	<p><?=$template['install']['text25']?></p>
	<p><?=$template['install']['text26']?></p>
</div><br />

<a name="configure"></a>
<h1 class="pagetitle"><?=$template['install']['title3']?></h1>
<div class="column1-unit">
	<p><?=$template['install']['text27a']?></p>
	<code>
	# mkdir release<br />
	# cd release<br />
	# cmake [<?=$template['install']['text27b']?>] ..
	</code>
	<p><?=$template['install']['text28']?></p>
	<p><?=$template['install']['text29']?>:</p>
	<code># cmake -DCMAKE_INSTALL_PREFIX=/usr -DWANT_PHONON=0 ..</code>
	<p><?=$template['install']['text30']?>:</p>
	<ul class="list">
		<li>-DWANT_DEBUG (default: OFF)<br />
		<?=$template['install']['tree0']?></li>
		<li>-DWANT_STRIP (default: OFF)<br />
		<?=$template['install']['tree1']?></li>
		<li>-DWANT_VERBOSE(default: OFF)<br />
		<?=$template['install']['tree2']?></li>
		<li>-DCMAKE_INSTALL_PREFIX=PATH (default: a system-dependant directory)<br />
		<?=$template['install']['tree3']?></li>
		<li>-DLIB_SUFFIX=SUFFIX (default: empty)<br />
		<?=$template['install']['tree4']?></li>
		<li>-DMANDIR=DIRECTORY (default: $CMAKE_INSTALL_PREFIX/share/man)<br />
		<?=$template['install']['tree5']?></li>
		<li>-DCOEXISTENCE (default: OFF)<br />
		<?=$template['install']['tree6']?></li>
		<li>-DUSE_ENV_FLAGS (default: OFF)<br />
		<?=$template['install']['tree7']?></li>
		<li>-DCMAKE_INSTALL_PREFIX_INITIALIZED_TO_DEFAULT (default: OFF, not cached<br />
		<?=$template['install']['tree8']?></li>
		<li>-DWANT_UNIVERSAL_BINARY (default: OFF)<br />
		<?=$template['install']['tree9']?></li>
		<li>-DWANT_PHONON (default: ON)<br />
		<?=$template['install']['tree10']?></li>
		<li>-DWANT_OSS (default: ON)<br />
		<?=$template['install']['tree11']?></li>
		<li>-DWANT_AUDIOFILE (default: ON)<br />
		<?=$template['install']['tree12']?></li>
		<li>-DWANT_ESD (default: ON)<br />
		<?=$template['install']['tree13']?></li>
		<li>-DWANT_QTDBUS (default: ON)<br />
		<?=$template['install']['tree14']?></li>
		<li>-DWANT_QTWEBKIT (default: ON)<br />
		<?=$template['install']['tree15']?></li>
		<li>-DWANT_KDE4 (default: ON)<br />
		<?=$template['install']['tree16']?></li>
		<li>-DWANT_SSL (default: ON)<br />
		<?=$template['install']['tree17']?></li>
		<li>-DWANT_CRYPTOPP (default: OFF)<br />
		<?=$template['install']['tree18']?></li>


		<li>-DWANT_CRYPT (default: ON)<br />
		<?=$template['install']['tree19']?></li>
		<li>-DWANT_IPV6 (default: ON)<br />
		<?=$template['install']['tree20']?></li>
		<li>-DWANT_TRANSPARENCY (default: ON)<br />
		<?=$template['install']['tree21']?></li>
		<li>-DWANT_PERL (default: ON)<br />
		<?=$template['install']['tree22']?></li>
		<li>-DWANT_PYTHON (default: ON)<br />
		<?=$template['install']['tree23']?></li>
		<li>-DWANT_IPC (default: ON)<br />
		<?=$template['install']['tree24']?></li>
		<li>-DWANT_GETTEXT (default: ON)<br />
		<?=$template['install']['tree25']?></li>
		<li>-DWANT_DOXYGEN (default: ON)<br />
		<?=$template['install']['tree26']?></li>
		<li>-DWANT_GSM (default: ON)<br />
		<?=$template['install']['tree27']?></li>
		<li>-DWANT_IGNORE_SIGALARM (default: OFF)<br />
		<?=$template['install']['tree28']?></li>
		<li>-DWANT_DCC_VOICE (default: ON)<br />
		<?=$template['install']['tree29']?></li>
		<li>-DWANT_DCC_VIDEO (default: OFF)<br />
		<?=$template['install']['tree30']?></li>
		<li>-DWANT_OGG_THEORA (default: OFF)<br />
		<?=$template['install']['tree31']?></li>
		<li>-DWANT_DCC_CANVAS (default: OFF)<br />
		<?=$template['install']['tree32']?></li>
		<li>-DWANT_MEMORY_PROFILE (default: OFF)<br />
		<?=$template['install']['tree33']?></li>
		<li>-DWANT_MEMORY_CHECKS (default: OFF)<br />
		<?=$template['install']['tree34']?></li>
		<li>-DMANUAL_REVISION (default: empty)<br />
		<?=$template['install']['tree35']?></li>
		<li>-DWANT_PIZZA (default: OFF)<br />
		<?=$template['install']['tree36']?></li>
		<li>-DWANT_BEER (default: OFF)<br />
		<?=$template['install']['tree37']?></li>
		<li>-DWANT_NO_EMBEDDED_CODE (default: OFF)<br />
		<?=$template['install']['tree38']?></li>
	</ul>
</div><br />

<a name="interactive"></a>
<h1 class="pagetitle"><?=$template['install']['title4']?></h1>
<div class="column1-unit">
	<p><?=$template['install']['text31']?></p>
	<code>
	# mkdir release<br />
	# cd release<br />
	# ccmake ..
	</code>
	<p><?=$template['install']['text32']?></p>
</div><br />

<a name="compile"></a>
<h1 class="pagetitle"><?=$template['install']['title5']?></h1>
<div class="column1-unit">
	<p><?=$template['install']['text33']?>:</p>
	<code># make</code>
	<p><?=$template['install']['text34']?>:</p>
	<code># make install</code>
	<p><?=$template['install']['text35']?>:</p>
	<code># ldconfig</code>
	<p><?=$template['install']['text36']?></p>
</div><br />

<a name="compile-mac"></a>
<h1 class="pagetitle"><?=$template['install']['title6']?></h1>
<div class="column1-unit">
	<p><?=$template['install']['text37']?></p>
</div><br />

<a name="compile-win"></a>
<h1 class="pagetitle"><?=$template['install']['title7']?></h1>
<div class="column1-unit">
	<p><?=$template['install']['text38']?></p>
</div><br />

<a name="hacker"></a>
<h1 class="pagetitle"><?=$template['install']['title8']?></h1>
<div class="column1-unit">
	<code>
	# mkdir release &amp;&amp; cd release<br />
	# cmake ..<br />
	# make install
	</code>
</div><br />

<a name="package"></a>
<h1 class="pagetitle"><?=$template['install']['title9']?></h1>
<div class="column1-unit">
	<p><?=$template['install']['text39']?>:</p>
	<code># make install DESTDIR=/tmp/kvirc-4.0</code>
	<p><?=$template['install']['text40']?></p>
</div>

<h1 class="pagetitle"><?=$template['install']['title10']?></h1>
<div class="column1-unit">
	<code># kvirc &amp;</code>
	<p><?=$template['install']['text41']?></p>
</div>
