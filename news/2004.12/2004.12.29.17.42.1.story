@@title:
AVATAR support for eggrop
@@short:
A little patch that adds AVATAR support
to eggdrop is available.
@@author:
Pragma
@@body:
 
<p>
Today I have written a trivial patch that adds the AVATAR protocol support
to the eggdrop bots. The patch is against version 1.6.12 but
it will probably apply cleanly on any other recent version too.
</p>
<p>
You need to apply the patch to the eggdrop sources and recompile by
running make and make install. You also need to specify the
CTCP AVATAR reply in the configuration file in the following way:
</p>
<p>
<code><pre>
set ctcp-mode 2
set ctcp-avatar "http://some.host/some.image.jpg"
</pre></code>
</p>
<p>
The AVATAR requests are ignored in ctcp modes other than 2 (just like
any other CTCP request that is not PING or CHAT). The avatar must be
an url pointing to an image (preferably jpg or png). DCC based avatars
are not supported at this time.
</p>
<p>
Grab the patch <a href="/news/data/eggdrop.avatar.support.diff">here</a> 
and...
</p>
<p>
Have fun :)
</p>
<p>
Szymon Stefanek
</p>
