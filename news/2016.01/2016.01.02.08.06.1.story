@@title:
KVIrc 4.3.2 Dev Progress, The Road to Next 5.x Stable Nears.
@@short:
KVIrc Dev News
@@author:
un1versal
@@body:


<p>
Since moving to GitHub, a great deal has happened to the KVIrc you know and love.
Change and progress are inevitable and as with all things, some people find changes harder to get used to than others, but here is to hoping you like KVIrc as much as ever, smiley-face.<br>
This news post isn't suppose to be an accurate account of all changes/fixes that KVIrc has undergone since moving to GitHub, but not a great deal has been posted since last time and I personally feel this post goes some way into bridging this long silence, So here goes nothing, wink, wink, nudge nudge.
<p>
A very visible change, something you may notice as a existing user, is the new complete set of graphics and application icons that has been added by yours truly. That's over 400+ icons and other graphics.<br>
While the old icon set was replaced, its certainly not gone, for the die-hard fans who find change disconcerting,
they can still find it at its new home at <a href="https://github.com/kvirc/kvirc-themes ">the KVIrc themes GitHub repository</a>.<br>
There's has been much progress in this area but much cleanup remains to be done as a result of the many changes KVIrc has undergone.<br><br>
We have said our goodbyes to KviMdiManager and welcomed KviWindowStack thanks to the continued development by Pragma, this alone fixed a few issues in KVIrc and were hoping to have some cleanup done to remove dead code related to MDI before long, so fingers crossed.<br>
Much much more has been added, changed and fixed by our beloved leader, but enough tooting his horn, we wouldn't want him to get big headed or anything. Wide grin!
<br><br>
Amongst other such many, many, many other changes and fixes here is a nice <i>random</i> dip;
<b>SASL identification was fixed</b> on freenode, however seems that special characters <a href="https://github.com/kvirc/KVIrc/issues/1413">in SASL password, issue #1413</a> still cause issues in this area, though with some luck we can also squash this issue before release (no promises).<br>
Another team member, wodim, <a href="https://github.com/kvirc/KVIrc/commit/b2aa6e4da9e87ee1a99124cd7ada34ca7e05e829">fixed a bug with breeze on KDE5 yesterday, issue #1799</a>, which caused corrupt display in KVIrc, so good news to all KDE5 users switching to breeze.</p><p>
A long standing feature request, dating back to 2007, asking for <a href="https://github.com/kvirc/KVIrc/issues/24">spell-checker</a> support for aspell type dictionaries, was finally added by DarthGandalf, and it works a treat, so now the days of blaming your atrocious typing on your keyboard or cat, are numbered! Sarcastic smiley face...
<br>staticfox whom has recently joined our ranks, has also been busy, amongst a few of his contributions, a optional way to favorite servers option was added, and it doesn't stop there, but we cant spoil the surprise, for you guys to come and discover what other goodies await you.<br>
We all continue to work really hard on improving the look and consistency of KVIrc, and hope to have a new stable for you soon. In the meanwhile if you're on Windows, Debian or Ubuntu please visit the <a href="https://github.com/kvirc/KVIrc/wiki/Downloading-KVIrc's-nightly-source-or-binaries">Our GitHub downloads page</a> and grab a nightly build to use and test, its quite save and stable to use daily.
<br><br>One of those changes are the core strings and help texts which have been and are still undergoing and ongoing revision.<br>
It is our hope our users wont stumble into quite so many typos (even if the odd one slipped through), but also our hard working translators that will hopefully not have to work around issues with core strings in their translations anymore.
Many string consistencies have been addressed, its possible some have managed to slip through though, but we hope to squash them all eventually.<br>
We certainly would appreciate that our translators/users report any issues at our <a href="https://github.com/kvirc/KVIrc/issues">KVIrc issue tracker</a>, like broken syntax a.k.a. broken English or any other issue, so we can instead of working around it in translations, fix it in core instead.
<br></p><p>
While I'm personally not a fan of stats and these don't account for some data due mostly due to some changes merged directly (i.e. not via a pull request and because I wont sift through hundreds of commits to get accurate data :p), the move to GitHub will make collating these changes a much simpler process in future; here are some stats you may find interesting:
</p><li> With a random commit today made a nice round <a href="https://github.com/kvirc/KVIrc/commit/6c7203936f98e782c23e365ebc368919c4623004">6000 code commits</a> which have made its way into KVIrc code base to this day, and you could also join in to help us increase that number.
</li><li><a href="https://github.com/kvirc/KVIrc/issues?q=label:Enhancement+is:closed">71 tagged enhancements have been merged</a>. We count as enhancements, specific or general improvements to KVIrc, that aren't bug fixes or features, but rather improve KVIrc's usability.
</li><li><a href="https://github.com/kvirc/KVIrc/issues?q=label%3A%22Feature+Request%22+is%3Aclosed">278 tagged feature requests have been filled</a> in some way or another, some had been added previously to making the move to GitHub.
</li><li><a href="https://github.com/kvirc/KVIrc/issues?q=label:Bug+is:closed">1,034 tagged bugs have been squashed</a>, so you know everyone's a little more muscle toned from all that bug swatting. Huge Grin!
</li><li><a href="https://github.com/kvirc/KVIrc/pulls?q=is:pr+label:Cleanup+is:closed">16 tagged general code cleanups</a> made its way into source, and I'm sure much more would be needed in long run...
</li><p>
It's very boring job to go through hundreds of commits to get a full list of changes and present it in a easily digestible list. So we invite you to click around in the links above and familiarize yourself with how things are shaping up for KVIrc in GitHub.
<br><br>
We all want to release the next greatest KVIRc to you, but there's a couple of issues there's would like to resolve before making a stable release, we will soon maybe release a beta can't confirm nor deny at this time, nor really give you a date set in stone for the release of next stable either, except it will likely be bumped to 5.x version codename Aria.
</p><p>
2 developers have joined <i>The KVIrc Development Team</i>, their work sure has brought positive changes to KVIrc, and they have certainly been busy and we welcome them to the team with open arms.<br>
Many other existing members haven't been mentioned here or their contributions, but their continued dedication and work are equally as important and they have helped enormously to bring a better KVIrc to you, so here are our thanks to everyone and all their continued support.<br> As a user, I certainly appreciate the hard work and contributions which have helped KVIrc along throughout the years. Thank you, huge wide smile.
<br><br>
I hope you all enjoyed this <i>small</i> progress report and are now trying the nightly versions and <a href="https://github.com/kvirc/KVIrc/issues/new">report any outstanding issues</a> to us so things can have a chance to be fixed.
<br>All going well, we should be back soon with other news about KVIrc's progress
<br><br>
Have fun in IRC and Happy New Year from <i>The KVIrc Development Team</i></p>