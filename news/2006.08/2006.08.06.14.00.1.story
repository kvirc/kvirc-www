@@title:
KVIrc 3.2.4 released
@@short:
A new development release for all platforms.
@@author:
Alexey
@@body:
 
<p>
Changes:<br>
<br>
<pre>
[Pragma]
   - Comparison operators now prefer numeric operands instead of strings.
   - Added $str.printf()
[Alexey]
   - New -a | --all-networks switch for away and back commands to apply their action to all connected networks
   - Fixed bug with long channellins scrolling; removed horisontal scrollbar
   - Timestamp format now can be configured via options
   - Input saves string in history when it was send via Ctrl+Return
   - Fixed case sensivity mode handling in usermode popup
   - Added option to include MSGTYPE info in theme packs
   - Added support fot ports, greater than 65536
   - Fixed bug in language seletor
   - New XML load addon dialog
   - Show progress bar while indexing help
   - Added XML (single file) theme export/import
   - Added ability to delete installed themes
   - Fixed bugs in filetransfers window while operating with localized filenames
   - Renamed "orphan_servers" to "Standalone Servers"
   - Added e2k URL highlighting
   - Implemented help topics and keywords caching
   - Topic can be viewed via double-click for non-opers in read-only mode
   - Fixed PageUp/PageDown in logviewer
   - Fixed defsctipt. Kickban now uses mask from kvirc prefs
   - Fixed avatar handling while it trnsfered via DCC, filename contains space, but replacing spaces with _ enabled
   - Fixed connection to stupid win32 proxies
   - Added HTTP Proxy error displaying
   - New autojoin channel editor; fixed bugs in channel autojoining
   - Fixed DCC non-latin filenames handling
   - Fixed avatars with non-latin names handling
   - Fixed proxy connection (HTTP proxy doesn't require Server ip resolving now)
   - Fixed some CTCP handling as suggested by CtrlAltCa
   - foreach now doesn't iterate over empty variables unless the -a switch is used.
   - Added icons to some tooltips
   - Added Alt+DIGIT hotkey for window switching. Removed Ctrl+End hotkey(changed to Ctrl+F4)
   - Fixed join channels menu
   - Added insert text icon submenu to input editor popup
   - Added feature to autosave logs
[Ahinu]
   - Work on the mediaplayer module: more linux support + cmd/fnc cleaning
[Triskelios]
   - Moved event OnNotifyOnLine, OnNotifyOffLine and OnIRCConnectionEstabilished to OnNotifyOnline, OnNotifyOffline and OnIRCConnectionEstablished
[HelLViS69]
   - Added $str.urlencode()
   - Added gnotice to defscript   
[LoSko]
   - Fixed reverse DCC Chat xchat compatible
   - Added different color for own nick
</pre>
<a href="ftp://ftp.kvirc.net/pub/kvirc/snapshots/source/kvirc-3.2.4.tar.bz2">Download sources</a><br>
<a href="ftp://ftp.kvirc.net/pub/kvirc/snapshots/win32/KVIrc-3.2.4-dev-20060801.exe">Download for win32</a><br>
<a href="ftp://ftp.kvirc.net/pub/kvirc/snapshots/">Other downloads</a><br>
<p>
