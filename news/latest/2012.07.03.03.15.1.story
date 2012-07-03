@@title:
4.2.0 Released!
@@short:
KVIrc 4.2.0 released
@@author:
Szymon Stefanek (pragma at kvirc dot net)
@@body:


<p>Here we go again!</p>

<p>A new major stable version of KVIrc is ready!</p>

<p>
Two years have passed since the first KVIrc 4 release. While the original
4.0 code was put in maintenance mode, a lot of time has been dedicated
to merge new features inside KVIrc. Today we present the result of this
development.
</p>

<p>
Support for new os/architectures:
<ul>
	<li>- Mac OSX support, clang support</li>
	<li>- 64-bit Windows support</li>
	<li>- improved FreeBSD integration</li>
	<li>- an experimental OS/2 patch</li>
</ul>
</p>

<p>
More scripting power:
<ul>
	<li>- the interface to the popup subsystem has been rewritten: the new popup module</li>
	<li>- a new interface to the userlist: the userlist module</li>
	<li>- a new webView class that embeds a webkit</li>
	<li>- improved SQL classes</li>
	<li>- a new trayicon KVS class</li>
	<li>- added a default script manager to restore default scripts without overwriting custom user scripts</li>
	<li>- lots of new functions: $file.time(), $insideAlias(), $log.export(), 
	   $file.diskspace(), $isBot(), $gender(), $context.connectionStartTime,
	   $context.lastMessageTime, $listtimers(), $window.isDocked, $aliasBody(),
	   $file.readBytes(), $file.writeBytes(), window.savePropertiesAsDefault,
	   $chan.modeParam(), ...</li>
	<li>- new SSL certificate related stuff: $dcc.getSSLCertInfo(), $certificate(),
	   $str.evpSign(), $str.evpVerify()</li>
</ul>
</p>

<p>
A lot of new miscelaneous features:
<ul>
	<li>- a module to support FiSH irc encryption</li>
	<li>- smart logging paths using KVS</li>
	<li>- improved medialayer support: VLC, Spotify, Totem, Clementine, ...</li>
	<li>- a rewritten log viewer module</li>
	<li>- dynamic support for custom channel modes</li>
	<li>...</li>
</ul>
</p>

<p>
And finally, as usual, a lot of bugfixes and minor enchancements.
</p>

<p>
The source packages are available <a href="javascript:opendoc('?id=releases&platform=source&version=4.2.0');">here</a>.
Binaries for Windows and Mac OS X are available in the <a href="javascript:opendoc('?id=releases');">download section</a>.
Binaries for other platforms will be available soon in the same location as well as from your favorite distribution
repositories.
</p>

<p>There is also a portable version for Windows available on <a href="http://portableapps.com/apps/internet/kvirc_portable">portableapps.com</a>.</p>

<p>
As usual, any bug for this release should be reported by using the bugtrack system
available at <a href="https://svn.kvirc.de/kvirc">https://svn.kvirc.de/kvirc</a>.
</p>

<p>
We'd like to thank again all the people supporting the KVIrc project: the mighty coders,
people submitting patches, the translators, the testers and even the ones simply
providing suggestions. A big hug to the resident users of <a href="irc://freenode/kvirc">#kvirc@Freenode</a> for their
continuous effort on bridging the gap between developers and users.
</p>

<p>Honor and Glory to everyone involved!</p>
<br>

<p>Enjoy... and remember: we have no boundaries on the net! :)</p>
<br>
<p>Fabio Bas and <b>The KVIrc Development Team</b></p>

