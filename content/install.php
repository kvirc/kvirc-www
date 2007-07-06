<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

echo "<h1 class=\"pagetitle\">".$template['install']['title1']."</h1>";
echo "<div class=\"column1-unit\">";
	echo "<br /><h3>".$template['install']['text1']."</h3>";
	echo "<a href=\"?id=install&amp;lang=$lang#guru\">1. ".$template['install']['title2']."</a><br />";
	echo "<a href=\"?id=install&amp;lang=$lang#hacker\">2. ".$template['install']['title3']."</a><br />";
	echo "<a href=\"?id=install&amp;lang=$lang#human\">3. ".$template['install']['title4']."</a><br />";
echo "</div><br />";

echo "<a name=\"guru\"></a>";
echo "<h1 class=\"pagetitle\">1. ".$template['install']['title2'].":</h1>";
echo "<div class=\"column1-unit\">";
	echo "<code>";
	    echo "# ./configure<br />";
	    echo "# make install";
	echo "</code>";
echo "</div><br />";

echo "<a name=\"hacker\"></a>";
echo "<h1 class=\"pagetitle\">2. ".$template['install']['title3'].":</h1>";
echo "<div class=\"column1-unit\">";

	echo "<br /><h3><b>".$template['install']['text2']."</b></h3>";

	echo "<p>".$template['install']['text3']."</p>";

	echo "<code># export QTDIR=\"".$template['install']['text4']."\"</code><br /><br />";

	echo "<p>".$template['install']['text5'].":</p>";

	echo "<code># export KDEDIR=\"".$template['install']['text6']."\"</code><br /><br />";

	echo "<p>".$template['install']['text7']."</p>";

	echo "<code>";
	    echo "# ./configure --help<br />";
	    echo "# ./configure [".$template['install']['text8']."]<br />";
	    echo "# make kvirc<br />";
	    echo "# make install<br />";
	echo "</code>";
echo "</div><br />";

echo "<a name=\"human\"></a>";
echo "<h1 class=\"pagetitle\">3. ".$template['install']['title4'].":</h1>";
echo "<div class=\"column1-unit\">";

        echo "<br /><h3>".$template['install']['text9']."</h3>";

	echo "<h1>".$template['install']['step']." 0</h1>";

        echo "<p>".$template['install']['text10']."</p>";

	echo "<code># ./autogen.sh</code><br /><br />";

	echo "<p>".$template['install']['text11']."</p>";

	echo "<code># automake --version</code><br /><br />";

	echo "<p>".$template['install']['text12']."</p>";

	echo "<h1>".$template['install']['step']." 1 : ".$template['install']['steptitle1']."</h1>";

	echo "<ul>";
		echo "<li>".$template['install']['tree1a']."</li>";

		echo "<li>".$template['install']['tree1b'].":<br /><br />";
		echo "<code># find / -name libpthread.so</code><br /><br />";
		echo $template['install']['tree1btext1'].":<br /><br />";
		echo "<code># /usr/lib/libpthread.so</code><br /><br />";
		echo $template['install']['tree1btext2']."<br /><br />";
		echo $template['install']['tree1btext3']."</li>";

		echo "<li>".$template['install']['tree1c']."</li>";

		echo "<li>".$template['install']['tree1d']."</li>";

		echo "<li>".$template['install']['tree1e']."<br /><br />";
		echo "<code># find / -name libgsm*</code><br /><br />";
		echo $template['install']['tree1etext1']."<br />";
		echo "<code># /usr/lib/libgsm.so</code><br /><br />";
		echo $template['install']['tree1etext2']."<br /><br />";

	echo "<code>";
		echo "# cd /usr/lib<br />";
        	echo "# ld --whole-archive -shared -o libgsm.so.1 libgsm.a<br />";
        	echo "# ln -s libgsm.so.1 libgsm.so<br />";
        	echo "# ldconfig";
	echo "</code><br /><br />";

        echo $template['install']['tree1etext3']."</li>";

	echo "<li>".$template['install']['tree1f']."</li>";

	echo "<li>".$template['install']['tree1g']."</li>";

	echo "<li>".$template['install']['tree1h']."</li>";
	echo "</ul>";

	echo "<h1>".$template['install']['step']." 2 : ".$template['install']['steptitle2']."</h1>";

        echo "<p>".$template['install']['text13']."</p>";

	echo "<code># export QTDIR=\"".$template['install']['text14']."\"</code><br /><br />";

        echo "<p>".$template['install']['text15']."</p>";

	echo "<code># export QTDIR=\"/usr/local/kde/qt\"</code><br /><br />";

        echo "<p>".$template['install']['text16']."</p>";

	echo "<code># export KDEDIR=\"".$template['install']['text17']."\"</code><br /><br />";

        echo "<p>".$template['install']['text18']."</p>";

	echo "<code># export KDEDIR=\"/usr/local/kde\"</code><br /><br />";

        echo "<p>".$template['install']['text19']."</p>";

	echo "<code># ./configure --help</code><br /><br />";

        echo "<p>".$template['install']['text20']."</p>";
	echo "<ul>";
		echo "<li>--enable-debug<br /><br />";
		echo $template['install']['tree2a']."</li>";

		echo "<li>--with-pipes<br /><br />";
		echo $template['install']['tree2b']."</li>";

		echo "<li>--enable-objprelink<br /><br />";
		echo $template['install']['tree2c']."<br /><br />";

		echo "<code>";
			echo "# cd admin<br />";
			echo "# make objprelink<br />";
			echo "# cp objprelink /".$template['install']['tree2ctext1']."<br />";
		echo "</code><br /><br />";

		echo $template['install']['tree2ctext2']."</li>";

		echo "<li>--with-ix86-asm<br /><br />";
		echo $template['install']['tree2d']."</li>";

		echo "<li>--with-optimisation=&lt;NUMBER&gt;<br /><br />";
		echo $template['install']['tree2e']."</li>";

		echo "<li>--with-no-pthread-check<br /><br />";
		echo $template['install']['tree2f']."</li>";

		echo "<li>--x-includes=DIR<br /><br />";
		echo $template['install']['tree2g']."</li>";

		echo "<li>--x-libraries=DIR<br /><br />";
		echo $template['install']['tree2h']."</li>";

		echo "<li>--with-qt-name=&lt;NAME&gt;<br /><br />";
		echo $template['install']['tree2i']."</li>";

		echo "<li>--disable-qt-mt<br /><br />";
		echo $template['install']['tree2j']."</li>";

		echo "<li>--with-qt-library-dir=&lt;DIR&gt;<br /><br />";
		echo $template['install']['tree2k']."</li>";

		echo "<li>--with-qt-include-dir=&lt;DIR&gt;<br /><br />";
		echo $template['install']['tree2l']."</li>";

		echo "<li>--with-qt-moc=&lt;PATH&gt;<br /><br />";
		echo $template['install']['tree2m']."</li>";

		echo "<li>--without-qt-check<br /><br />";
		echo $template['install']['tree2n']."</li>";

		echo "<li>--without-kde-support<br /><br />";
		echo $template['install']['tree2o']."</li>";

		echo "<li>--with-kde-library-dir=&lt;DIR&gt;<br /><br />";
		echo $template['install']['tree2p']."</li>";

		echo "<li>--with-kde-include-dir=&lt;DIR&gt;<br /><br />";
		echo $template['install']['tree2q']."</li>";

		echo "<li>--with-kde-services-dir=&lt;DIR&gt;<br /><br />";
		echo $template['install']['tree2r']."</li>";

		echo "<li>--without-kde-check<br /><br />";
		echo $template['install']['tree2s']."</li>";

		echo "<li>--without-ipv6-support<br /><br />";
		echo $template['install']['tree2t']."</li>";

		echo "<li>--without-system-memmove<br /><br />";
		echo $template['install']['tree2u']."</li>";

		echo "<li>--with-ignore-sigalarm<br /><br />";
		echo $template['install']['tree2v']."</li>";

		echo "<li>--without-crypt-support<br /><br />";
		echo $template['install']['tree2w']."</li>";

		echo "<li>--without-transparency<br /><br />";
		echo $template['install']['tree2x']."</li>";

		echo "<li>--with-solaris-lthread<br /><br />";
		echo $template['install']['tree2y']."</li>";

		echo "<li>--with-freebsd-pthread<br /><br />";
		echo $template['install']['tree2z']."</li>";

		echo "<li>--with-libresolv<br /><br />";
		echo $template['install']['tree2a1']."</li>";

		echo "<li>--with-libsocket<br /><br />";
		echo $template['install']['tree2a2']."</li>";

		echo "<li>--with-libnsl<br /><br />";
		echo $template['install']['tree2a3']."</li>";

		echo "<li>--with-libcompat<br /><br />";
		echo $template['install']['tree2a4']."</li>";

		echo "<li>--with-fno-rtti<br /><br />";
		echo $template['install']['tree2a5']."</li>";

		echo "<li>--without-x-bell<br /><br />";
		echo $template['install']['tree2a6']."</li>";

		echo "<li>--with-qt-embedded<br /><br />";
		echo $template['install']['tree2a7']."</li>";

		echo "<li>--with-other-libs=&lt;libraries&gt;<br /><br />";
		echo $template['install']['tree2a8']."</li>";

		echo "<li>--with-other-ldirs=&lt;paths&gt;<br /><br />";
		echo $template['install']['tree2a9']."</li>";

		echo "<li>--with-other-idirs=&lt;paths&gt;<br /><br />";
		echo $template['install']['tree2b1']."</li>";

		echo "<li>--without-ipc<br /><br />";
		echo $template['install']['tree2b2']."</li>";

		echo "<li>--without-dyn-labels<br /><br />";
		echo $template['install']['tree2b3']."</li>";

		echo "<li>--without-x-calls<br /><br />";
		echo $template['install']['tree2b4']."</li>";

		echo "<li>--without-splash-screen<br /><br />";
		echo $template['install']['tree2b5']."</li>";

		echo "<li>--without-info-tips<br /><br />";
		echo $template['install']['tree2b6']."</li>";

		echo "<li>--without-gsm<br /><br />";
		echo $template['install']['tree2b7']."</li>";

		echo "<li>--without-dcc-sound<br /><br />";
		echo $template['install']['tree2b8']."</li>";

		echo "<li>--without-ssl-support<br /><br />";
		echo $template['install']['tree2b9']."</li>";

		echo "<li>--with-memory-profile<br /><br />";
		echo $template['install']['tree2c1']."</li>";

		echo "<li>--with-memory-checks<br /><br />";
		echo $template['install']['tree2c2']."</li>";

		echo "<li>--with-big-channels<br /><br />";
		echo $template['install']['tree2c3']."</li>";
	echo "</ul><br />";

        echo "<p>".$template['install']['text21']."</p>";

	echo "<code># ./configure &lt;".$template['install']['text8']."&gt;</code><br /><br />";

        echo "<p>".$template['install']['text22']."</p>";

	echo "<code># ./configure --with-pipes --with-debug-symbols --with-ix86-asm</code><br /><br />";

	echo $template['install']['text23']."<br />";

	echo "<code># ./configure --with-qt-name=qt2 --with-qt-moc=/&lt;PATH_HERE&gt;/moc2 --with-freebsd-pthread</code>";

	echo "<p>".$template['install']['text24']."</p>";

	echo "<h1>".$template['install']['step']." 3 : ".$template['install']['text25']."</h1>";

        echo "<p>".$template['install']['text26']."</p>";
        echo "<p>".$template['install']['text27']."</p>";

	echo "<code># make kvirc</code><br /><br />";

        echo "<p>".$template['install']['text28']."</p>";

        echo "<code># make install</code><br /><br />";

        echo "<p>".$template['install']['text29']."</p>";

	echo "<code># ldconfig</code><br /><br />";

	echo "<p>".$template['install']['text30']."</p>";

	echo "<h1>".$template['install']['step']." 4: ".$template['install']['text31']."</h1>";

	echo "<code># kvirc &amp;</code><br /><br />";

        echo "<p>".$template['install']['text32']."</p>";
echo "</div>";
?>