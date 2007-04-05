@@title:
KVIrc 3.2.5 new dev released
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
   - Added unreal NAMESX and UHNAMES support
   - Fixed $hexToAscii function
   - Make DCC File Open/Save dialogs have native look on windows
   - Fixes in filesystem handling. Fixed bug when KVIrc unable to load translation from non-latin folders
   - Fixed actions' accelerators
   - CTCP Page dialog now stays on top of desktop
   - Fixed in tray minimizing/restoring on win32
   - WIN32 compiling need QTTAG env var with "mtnc321" value for non-commercial QT 3.2.1 or "mt336" for QT 3.3.6
   - New win32 tray icon
   - Added snd.mute, snd.unmute, $snd.isMuted to KVS
   - Moved theme selection out from theme options to avoid partyally applying of themes
   - Added some lost functions to "painter" class
   - Fixed ignore system
   - Fixed input themeing (black on black bug)
   - "play" command is now alias for snd.play
   - IMPORTANT: fixed proper soket closing on win32
   - Fixed crash after first run wizard on *nix
   - Make possible installation on USB removable drives (WIN32). KVIrc can store settings in program folder
   - Make pathes in configs system-independent
</pre>
<br>

<a href="ftp://ftp.kvirc.net/pub/kvirc/snapshots/win32/KVIrc-3.2.5-dev-20061104.exe">Download for win32</a><br><br>
<p>