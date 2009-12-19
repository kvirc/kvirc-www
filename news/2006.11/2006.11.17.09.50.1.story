@@title:
KVIrc 3.2.5 new Win32 dev released
@@short:
A new release for Win32
@@author:
Grifisx &lt;grifisx@barmes.org&gt;
@@body:
 

<p>
Changes since last 3.2.5-dev:<br>
<br>
<pre> 
   [Alexey]
   - Added a simple browser-like address bar to console
   - Clicking on nick in channel ircview now selects it in the userlist
   - Avatar dcc send rejected if avatar size greater, then max filesize, setted in options
   [HelLViS69]
   - Added a checkbox on AwayIndicator applet popup to choose to go away
     on all IRC Contexts
   [Pragma]
   - Moved the userlist feature options page to the theme option dialog
     and splitted all the userlist options in tabs
   - Corrected some typos around
   - Reworked the output options page
   - Updated the directory selection dialog under KDE
   - Avatars bigger than 1024x768 make KVIrc complain when setting them
     and are scaled to a saner size when they are received from others.
   - Added $object.instances(): useful when implementing singletons.
   - Fixed a small image dialog issue
   - Added support for chunked HTTP transfer encoding as required by HTTP/1.1
   - A fix for object toolbar position not saved properly
   - A fix for the addon management dialog not repainted correctly
   - A fix for loading of files by the means of KviFileUtils::loadFile()...
     /parse is one of them and it expects an utf8 encoded file.
     (read: all *.kvs files must be utf8 encoded, there is no other decent
     portable way to preserve the national characters...)
   - A fix for KviStr handling incorrectly multibyte strings (fixes some localization issues)
   - A simple hack-in for a protocol filter.. maybe msn ?
   - Various minor fixes around
   - Splitted the core small icons libraries in separate icons.
   - Moved the small icons to a subdirectory to speed up the loading (we are already at more than 280 icons...)
</pre>
<br>

<a href="ftp://ftp.kvirc.net/pub/kvirc/snapshots/win32/KVIrc-3.2.5-dev-20061117.exe">Download for win32</a><br><br>
<p>