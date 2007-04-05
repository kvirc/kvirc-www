@@title:
New binaries
@@short:
A new Win32 package from cvs
@@author:
Grifisx-Noldor
@@body:
 
<p>
A newer version of KVIrc for Win32, which is based on a newer CVS snapshot.<br>
-some fixes in documentation <br>
-some fixes in dcc, aliaseditor, raweditor and eventeditor<br>
-more commands and functions for the mediaplayer module<br>
-the "wrapper" object class has been added: <br>
it allows to hook the kvirc's interface objects and modify them<br>
-$setProperty() and $property() have been added: the functions can be used to obtain
strange genetic mutations, like the following:<br>
<pre><code>%Wrapper=$new(wrapper,0,test,KviFrame::kvirc_framevKviStatusBar::statusbar)<br>
%Wrapper->$setBackGroundColor(FFFFFF)</code></pre><br>
or...this <br>
<code><pre>%Wrapper=$new(wrapper,0,test,KviFrame::kvirc_frame,QToolButton::kvirc.identityoptions)<br>
%Wrapper->$setProperty(usesBigPixmap,0)</code></pre><br>
or this...<br>
<code><pre>%Wrapper=$new(wrapper,0,,KviFrame::kvirc_frame,KviStatusBar::statusbar)<br>
%Status=$new(lineedit,%Wrapper)<br>
%y=%Status->$fontmetricsheight()<br>
%Status->$move(500,0)<br>
%Status->$resize(50,$(%y+10))<br>
%Status->$show()</code></pre><br>
Stay tuned!<br>
<p>
