@@title:
Fixed 3.4.2 release for win32
@@short:
Fixed 3.4.2 for win32
@@author:
HelLViS69 (hellvis69 at netsons dot org)
@@body:

<p>Recently the win32 version of the 3.4.2 'Shiny' release was affected by<br />
some problems like the non-working Perl support and the IRC URI exploit</p>

<p>This release fixes these problems, and we replace the binary previously<br />
released as stable</p>

<p>About the exploit, it wasn't KVIrc's fault: the exploit works only if you<br />
have Internet Explorer set as default browser to handle irc[s[6]]:// urls and<br />
you run the exploit using it since it doesn't check for malformed or<br />
specially crafted URLs. Other browsers do this check and the exploit fails at start.</p>

<p>
You can download this binary <a href="javascript:opendoc('ftp://ftp.kvirc.de/pub/kvirc/3.4.2/binary/win32/KVIrc-3.4.2.1.exe');" title="FTP Mirror">clicking here</a>.
</p>

HelLViS69 and The KVIrc Development Team
