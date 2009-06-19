@@title:
New server hardware for svn.kvirc.de
@@short:
New server hardware
@@author:
spion (waja at kvirc dot de)
@@body:

<p>Good morning starshine, The earth says hello ...</p>

<p>Maybe some of you have noticed, svn.kvirc.de was running under heavy load recently while it was smashed by search engine crawlers.<p>

<p>First we tried to tweak the trac installation, which caused the heavy load, when running the spiders trough. But it turned out, that this doesn't has the effect to recover the situation, since the trac tree is growing (with the svn tree and revisions). So the spiders have more to crawle and taking more resources away.</p>

<p><img width="400" src="img/load_yearly.png"></p>

<p>We checked our relations and we where lucky to find with <a href="javascript:opendoc('http://www.waaf.net');">waaf.net</a> a sponsor for new server hardware.</p>

<p>Some features of our new ProLiant DL360 server we baptized '<a href="javascript:opendoc('http://en.wikipedia.org/wiki/Baikonur');">baikonur</a>':
<ul class="list">
	<li>Dual Core Processor</li>
	<li>2 GB RAM</li>
	<li>Compaq Smart Array Raid Controller</li>
	<li>2x 72.8 GB IBM Ultra3 10K</li>
	<li>2x Gigabit Ethernet</li>
	<li>Integrated Lights Out</li>
</ul></p>

<p>The migration was quite relaxed. svn.kvirc.de is a virtual maschine, so we did setup the new host and proudly racked it up at the bandnew hosting center of <a href="javascript:opendoc('http://www.tmt.de/');">TMT Teleservice</a> as first (sponsored) customer. The last step was to migrate the system over to the new host and change the DNS records. The outage was something about 5-10 minutes basically caused by the TTL of 600.</p>

<p>Looking into the Load Average I think we have enought resources for a couple of more svn revisions and search engine spiders.</p>

<p><img width="400" src="img/load_daily.png"></p>

<p>That's all, happy ircing, and happy developing. :)</p>

spion and The KVIrc Development Team
