@@title:
3.2.0 'Realia' is out!
@@short:
Version 3.2.0 of KVIrc has been released.
Time to upgrade and play with the new features :)
@@author:
Pragma
@@body:
 
<p>
Here we go again: Version 3.2.0 of KVIrc has been released!
</p>
<p>
The long road to stability has reached an important milestone. The previous
releases of the 3.* series were the first ones after a huge codebase rewrite.
3.2.0 is a result of several months of testing, debugging and improving.
You will surely find it more stable, fast and user friendly.
</p>
<p>
The old scripting toolbars have been replaced by the new "action" based
approach. Besides the scripting flexibility of the actions we have also
gained "drag & drop" toolbar editing. Just select "Settings -> Toolbars
-> Customize" from the menu and drag your favorite actions (buttons!) to the
toolbars you wish. You can obviously create new toolbars on the fly and destroy
old ones. There is a set of builtin actions and new ones can be added
by the means of the action editor (another new feature) accessible from
the Scripting menu. Play with it :)
</p>
<p>
The UNICODE support has been improved yet more. Now you can set global,
per-network, per-server and per-window encodings! There is also a new
set of "smart" encoding engines that first try to decode the text as UTF8
and in case of failure fallback to your standard encoding.
</p>
<p>
The translators did a really good (and hard) job: we actually have KVIrc
translated in 14 languages. I'm really happy about that.
</p>
<p>
There is a new nice Instant-Messager-like notifier window that pops up when
a query message arrives and KVIrc is not the active application. Yes,
you can disable it, but I'm sure you will not. The notifier is also fully
scriptable and we're working on a simple skinning engine for it.
</p>
<p>
We also have perl support: now you can use perl from KVS and
KVS from perl. The engine is still quite essential but with some hacking
you can obtain really good results from it.
</p>
<p>
The small IRC-Context-Display has been removed from the toolbar and has been
replaced by a real status bar that is capable of displaying the same
informations in a much cleaner way. The IRC-Context-Display is still
available as an action so you can just drag it back in its place
and hide the status bar to return to the previous release configuration.
The statusbar also supports applets that can be added/dragged/removed by the
means of the mouse: just try the right click.
</p>
<p>
The scripting engine has been improved and there are several new object
classes. An interesting new feature here is the $tr() function that allows
your scripts to be translated with the standard gettext mechanism. The
widely requested DCOP communication function has been implemented too.
</p>
<p>
Out-of-the-box mircryption support has been added. The KVIrc's mircryption
engine supports the standard ECB mode and the new CBC mode
</p>
<p>
The DCC transfers have been improved and seveal related bugs have been
fixed. It is also possible to limit the bandwidth for each transfer.
</p>
<p>
There is a lot of minor new features that will make your IRC sessions funnier
and more exciting: some of them are described in the ChangeLog file and
other can be found by exploring the user interface.
</p>
<p>
The small one-man-project has grown to the level of a small community.
People from around the world have joined our development efforts and are
constantly donating their time, eyes and bandwidth in order to make KVIrc
a really good IRC client. Besides of simply giving you a free (as in freedom!)
and nice program for chatting, they are giving you the great opportunity to see
what's behind the scenes: you have the source code for the whole application.
In practical terms this means more or less 300.000 lines of tested, debugged and
commented C++ code, several perl scripts, dozens of makefiles and all the means
that you need to produce a working KVIrc executable on all the supported platforms.
There is a lot of knowledge (some people call it "technology" because it sells better)
inside, ready to be acquired by an attentive reader. Don't forget that the freedom of
building your own executable from the sources gives you the opportunity
of verifying the source itself: for example you might be interested in verifying
that KVIrc will not run any malware code on your machine nor will collect
your private data and sell it to someone while you're happily chatting with a friend.
We call it freedom, please respect it :)
</p>
<p>
Our community is contantly growing and this release was possible thanks to the
contribution of really many people. There are new mighty developers, new addicted
fans and we have seen a lot of new users. The list of the major contributors
can be found on the KVIrc site, in the about dialog and all around the sources.
If you want to meet them please join the #kvirc channel on your favorite
IRC network or subscribe to our mailing list.
</p>
<p>
Ah, I was going to forget it: you might have noticed that there is
a version bump from 3.0.1 to 3.2.0. It's a typo that we arbitrairly
decided not to fix :)
</p>
<p>
The packages can be downloaded by following <a href="http://www.kvirc.net/?id=download">this link</a>
or by browsing manually one of our ftp mirrors. The fingerprint of the GPG key used for signing is 
<b>6C67 D848 3DCC 5044 2EB2 D6EC 46EF AA91 0616 F101</b> and the public key itself can be fetched 
<a href="http://www.pragmaware.net/misc/Szymon_Stefanek.asc">here</a> or from your favorite keyserver.
</p>
<p>
Have fun :)
</p>
<p>
Szymon Stefanek and <b>The KVIrc Development Team</b>
</p>


