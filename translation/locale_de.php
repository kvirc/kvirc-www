<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

/* index.php start */
// languages
$template['index']['brazilian']="brasilianisch";
$template['index']['bulgarian']="bulgarisch";
$template['index']['catalan']="katalanisch";
$template['index']['croatian']="kroatisch";
$template['index']['czech']="tschechisch";
$template['index']['dutch']="niederländisch";
$template['index']['english']="englisch";
$template['index']['finnish']="finnisch";
$template['index']['french']="französisch";
$template['index']['german']="deutsch";
$template['index']['hungarian']="ungarisch";
$template['index']['italian']="italienisch";
$template['index']['latvian']="lettisch";
$template['index']['polish']="polnisch";
$template['index']['portuguese']="portugiesisch";
$template['index']['russian']="russisch";
$template['index']['serbian']="serbisch";
$template['index']['spanish']="spanisch";
$template['index']['ukrainian']="ukrainisch";

// the project
$template['index']['theproject']="Projekt";
$template['index']['status']="Status";
$template['index']['features']="Eigenschaften";
$template['index']['license']="Lizenz";
$template['index']['screens']="Splashscreens";
$template['index']['bugtrack']="KVIrc Fehlerdatenbank";
// running kvirc
$template['index']['running']="KVIrc nutzen";
$template['index']['download']="Download";
$template['index']['releases']="offizielle Veröffentlichungen";
$template['index']['snapshots']="Snapshots";
$template['index']['svn']="SVN";
$template['index']['install']="Installation";
// documentation
$template['index']['docs']="Dokumentation";
$template['index']['faq']="häufig gestellte Fragen";
$template['index']['api']="API";
$template['index']['doc']="KVIrc Handbuch";
$template['index']['tutorials']="Tutorien";
$template['index']['translations']="Übersetzungen";
$template['index']['shortcuts']="Tastaturkürzel";
$template['index']['faq2']="häufig gestellte Fragen (Wiki) (englisch)";

// graphic suite
$template['index']['graphsuite']="Grafiken";
$template['index']['themes']="Themen";
$template['index']['splash']="Splashscreens";
$template['index']['banners']="Banner";
$template['index']['arts']="Kunst";
// misc
$template['index']['misc']="Diverses";
$template['index']['honor']="Ehre &amp; Ruhm";
$template['index']['scripts']="Skripte";
$template['index']['addons']="Erweiterungen";
$template['index']['tools']="Werkzeuge";
$template['index']['changelog']="Änderungsliste";
$template['index']['svncommits']="SVN Einreichungen";
// contact
$template['index']['contact']="Kontakt";
$template['index']['ml']="KVIrc Mailingliste";
$template['index']['archive']="Archiv";
$template['index']['contribute']="Zusammenarbeit";
$template['index']['help']="Hilfe finden";
$template['index']['donation']="Spenden";
// KVIrc related
$template['index']['related']="KVIrc-bezogen";
$template['index']['forum']="Forum";
$template['index']['rusite']="russische Seite";
$template['index']['frsite']="französische Seite";
$template['index']['frforum']="französisches Forum";
$template['index']['osxsite']="MacOS X Pakete";
// other
$template['index']['quickdnl']="Direktlink zum Download";
// search
$template['index']['search']="Suche";
$template['index']['go']="los";
// news
$template['index']['latestnews']="Neuigkeiten";
$template['index']['allnews']="Alle Neuheiten";
// mirrors
$template['index']['mirrors']="Spiegelserver";
$template['index']['wwwmirrors']="WWW-Spiegel";
$template['index']['ftpmirrors']="FTP-Spiegel";
$template['index']['mirrorstext1a']="Dem KVIrc-Projekt zu helfen, indem man Dateien spiegelt, ist wirklich einfach und erwünscht; auf";
$template['index']['mirrorstext1b']="dieser Seite";
$template['index']['mirrorstext1c']="ist eine Schritt-für-Schritt-Anleitung zu finden, um einen WWW- oder FTP-Spiegelserver (oder beides) zu erstellen.";
$template['index']['mirrorstext2']="Ebenso werden außereuropäische FTP-Server gebraucht.";
$template['index']['mirrorstitle']="WWW- und FTP-Spiegelung";
// layouts
$template['index']['oldlayout']="Alte Seitenlayouts";
$template['index']['oldsite']="alte KVIrc Seite";
$template['index']['iakkohome']="iakkos Homepage";
// help
$template['index']['helptext1a']="Wenn Sie Hilfe brauchen, wenden Sie sich an die";
$template['index']['helptext1b']="öffentliche KVIrc Mailingliste";
$template['index']['helptext1c']="oder besuchen Sie die entsprechenden IRC-Räume:";
// bugs
$template['index']['bugreport']="Fehlermeldung";
$template['index']['bugstext']="Fehler können in der KVIrc-Fehlerdatenbank gemeldet und eingesehen werden:";
// more docs
$template['index']['moredocs']="Dokumentation";
$template['index']['officialdocs']="offizielle KVIrc Dokumentation";
$template['index']['docsauto']="automatisch generierter Index";
// hardware, traffic and hosting donation
$template['index']['hwdonation']="Raketenantrieb";
$template['index']['hwdonationtext']="war so freundlich die Hardware zu stiften für den Betrieb von svn.kvirc.de";
$template['index']['tahdonation']="Abgehoben";
$template['index']['tahdonationtext']="finanziert Hosting und Datentransfer für svn.kvirc.de";
$template['index']['donationtextkvirc.de']="und diesen Spiegel";
// other
$template['index']['latestscreen']="neueste Screenshots";
$template['index']['footer']="Diese Seite lässt sich am besten mit einem Monitor betrachten";
/* index.php end */

/* custom vars start */
$template['custom']['author']="Autor";
$template['custom']['description']="Beschreibung";
$template['custom']['homepage']="Homepage";
$template['custom']['download']="Download";
$template['custom']['downbig']="Groß";
$template['custom']['date']="Datum";
$template['custom']['size']="Größe";
$template['custom']['version']="Version";
$template['custom']['type']="Typ";
$template['custom']['city']="Stadt";
$template['custom']['maintainer']="Ansprechpartner";
$template['custom']['optional']="Optional";
/* custom vars end */

/* addons.php start */
$template['addons']['title']="Erweiterungen";
$template['addons']['text1']="Hier sind zusätzliche Skripte für KVIrc zu finden";
$template['addons']['text1b']="
	Jede dieser Erweiterungen benötigt mindestens die KVIrc-Version 4.0.0.<br />
	Bitte die <b>entsprechende Version</b> von KVIrc auswählen:";
$template['addons']['text2']="Um eine Erweiterung zu installieren";
$template['addons']['tree1']="die Erweiterung <b>herunterladen</b>";
$template['addons']['tree2']="
	Mit <b>Strg+Alt+N</b> den Erweiterungsmanager-Dialog öffnen (oder über das Einstellungsmenü).";
$template['addons']['tree3']="Press the \"<b>Install Addon Package From Disk</b>\" button";
$template['addons']['tree4']="
	Navigate to the place where you have the addon package and select it";
$template['addons']['sorry']="Entschuldigung, es wurden keine Erweiterungen für die ausgewählte KVIrc-Version gefunden";
$template['addons']['addon1']="Wechselt automatisch in den away-Status nach einer bestimmten Zeit der Inaktivität.";
$template['addons']['addon2']="Stellt Werkzeugleistenknöpfe für einige häufig benötigte Channel-Tätigkeiten bereit";
$template['addons']['addon3']="Zeigt Statistiken der betretenen Räume an";
$template['addons']['addon4']="Ein einfaches Skript, um herauszufinden, wo der Computer herkommt";
$template['addons']['addon5']="Gibt automatisch die Daten der verschlüsselten Objekte an";
$template['addons']['addon6']="Stellt Kurzformen und Werkzeugleistenknöpfe für EZBounce-IRC-Proxy-Befehle bereit";
$template['addons']['addon7']="Ein einfaches 1-gegen-1 Spiel";
$template['addons']['addon8']="Ein einfacher F-Server";
$template['addons']['addon9']="Ein einfaches Skript, um \"lol\" und andere Chat-Kürzel mit F3-F8 zu schreiben";
$template['addons']['addon10']="Ein einfaches Skript, um gespielte MP3-Dateien bekanntzugeben; mit Verteil-Option";
$template['addons']['addon11']="Ein netter \"Zeitvertreib\"";
$template['addons']['addon12']="Zeigt RSS-Nachrichten von verschiedenen Quellen an";
$template['addons']['addon13']="
	Ermöglicht das Bekanntgeben und eventuelle Tauschen von gerade gespielten MP3-Dateien in IRC-Räumen und -Queries";
$template['addons']['addon14']="Ein einfaches Script, um öffentliche Lektionen zu verwalten";
$template['addons']['addon15']="Implementiert einen einfachen Quiz-Bot";
$template['addons']['addon16']="Erlaubt das Senden von SMS-Nachrichten über verschiedene Web-basierte-Dienste";
$template['addons']['addon17']="Erlaubt dem Benutzer jemanden zu verwarnen, zu kicken und zu bannen, der verbotenen Wörter sagt";
$template['addons']['addon18']="Ein automatisches Op/Voice/Ban-System für ihre Räume (Zusatz vom Twins-Skript)";
$template['addons']['addon19']="
	Färbt Deine Texteingabe in öffentlichen, privaten und DCC-Chats ein. (Zusatz vom Twins-Skript)";
$template['addons']['addon20']="Eine einfache Verzögerungsleiste mit drei verschiedenen Farben (Zusatz vom Twins-Skript)";
$template['addons']['addon21']="
	Den Medienspieler mit einer einfachen Benutzerschnittstelle fernbedienen, und anderen Benutzern Musik anbieten (Zusatz vom Twins-Skript)";
$template['addons']['addon22']="Prüfe den letzten Host eines Benutzers";
$template['addons']['addon23']="Einfacher Icon-Set-Wechsler. Es kann zwischen alten Icons, neuen Icons mit alten Smilies oder neuen Icons gewählt werden.";
/* addons.php end */

/* archive.php start */
$template['archive']['title']="Mailinglisten-Archiv";
$template['archive']['text']="
	Hier ist das Archiv der Mailingliste zu finden: Dies ist der erste Ort, um bei Probleme zu suchen.<br />
	Das Archiv kann durchgeblättert oder per Suchformular unten durchsucht werden.";
$template['archive']['search']="Google Suche";
$template['archive']['jan']="Januar";
$template['archive']['feb']="Februar";
$template['archive']['mar']="März";
$template['archive']['apr']="April";
$template['archive']['may']="Mai";
$template['archive']['jun']="Juni";
$template['archive']['jul']="Juli";
$template['archive']['aug']="August";
$template['archive']['sep']="September";
$template['archive']['oct']="Oktober";
$template['archive']['nov']="November";
$template['archive']['dec']="Dezember";
/* archive.php end */

/* arts.php start */
$template['arts']['title']="Kunst";
$template['arts']['text']="Eine Sammlung unterschiedlicher Kunst mit Bezug zu KVIrc";
$template['arts']['desc1']="
	Sechs farbenfrohe Variationen eines netten Comix-artigen Themas für diese Splashscreen-Ersetzungen. Einfach das gewünschte Bild als \$HOME/.kvirc/pics/kvi_splash.png speichern. Diese netten Bilder können auch als Banner oder als Idee für eigene Kunst genutzt werden.
	";
$template['arts']['desc2']="Eine weitere Sichtweise von \"Marmalade\" von suspiria :)";
$template['arts']['desc3']="Häh?";
$template['arts']['desc4']="Ein Startpunkt für einen Avatar.";
$template['arts']['desc6']="Sie nutzt dies als Begrüßungsbildschirm... :)";
/* arts.php end */

/* banners.php start */
$template['banners']['title']="Banner";
$template['banners']['text1']="
	Dies ist eine Sammlung verschiedener KVIrc-Banner, erstellt von unterschiedlichen Künstlern; einfach speichern und auf der eigenen Seite nutzen :)";
$template['banners']['text2']="Schicken Sie neue Banner an";
$template['banners']['bannerby']="Banner von";
/* banners.php end */

/* contribute.php start */
$template['contribute']['title']="Beteiligen Sie sich";
$template['contribute']['text1']="
	Das KVIrc-Projekt ist in mehrenen Arten offen für Beiträge. Man kann sich bei verschiedenen Aufgaben beteiligen, die unterschiedliche Anforderungen an Programmierkenntnissen voraussetzen (von \"fast keine\" bis \"Guru\").";
$template['contribute']['text2']="Quelltext beisteuern";
$template['contribute']['text3']="
	Die Hauptaufgabe ist – offensichtlich – Quellcode schreiben. Die Entwickler des KVIrc-Kerns und externer Module benötigen eine vernünftige Kenntnis von C++.<br />
	Die grafische Benutzerschnittstelle von KVIrc benutzt die Qt-Bibliothek (und auch KDE), so dass einige Kenntnisse dieser Bibliotheken auch gebraucht werden. Es gibt viele Interessensgebiete im Quelltext: Netzwerkbetrieb, Verschlüsselung, Datenkompression, Sprach-Analysierer ...<br />
	Jede Stufe von Beiträgen ist nützlich: Vom zweizeiligen Patch bis zu Kernfunktionen und Wartung.";
$template['contribute']['text4']="Kunstwerke beisteuern";
$template['contribute']['text5']="
	Das \"V\" in KVIrc steht für \"visuell\". Grafiken helfen den Benutzern das Programm zu benutzen und die vielen Funktionen, die das Programm bietet, zu verstehen/erkennen. Wir brauchen Icons, Dialog-Bilder, Splashscreens, Logos, ein Maskottchen... Eine gute Idee ist es, ein komplettes Thema zu implementieren...";
$template['contribute']['text6']="Dokumentation beisteuern";
$template['contribute']['text7']="
	Die Dokumentation is genauso wichtig wie das Programm selbst.<br />
	Viele KVIrc-Funktionen sind für einen durchschnittlichen Benutzer nicht sichtbar, weil sie in keinem öffentlich zugänglichen Dokument erwähnt werden.<br />
	Dokumentation beitragen heißt: häufig gestellte Fragen zusammentragen, und diese in einer les- und durchsuchbaren Form zusammenstellen, Dokumentation über besondere Funktionen schreiben, Tutorien schreiben.<br />
	Es wird auch eine gut geschriebene \"Einführung in KVIrc für Anfänger\" gebraucht (dies kann auch eine Art Einführung in IRC sein).";
$template['contribute']['text8']="KVIrc Meldungen übersetzen";
$template['contribute']['text9']="
	KVIrc ist eine textbasierte Anwendung: Die Programmtexte müssen in so viele Sprachen wie möglich übersetzt werden. Es werden nur Kenntnisse in einer nicht-englischen Sprache benötigt: Das Übersetzungsschema ist gettext-basiert und benötigt kaum Programmierwissen.";
$template['contribute']['text10']="Dokumentation übersetzen";
$template['contribute']['text11']="
	Der größte Teil der Dokumentation sollte in verschiedene Sprachen übersetzt werden, so dass jeder die \"Kern\"-Merkmale von KVIrc verstehen kann.<br />
	Dies benötigt weit weniger Programmierkenntnisse als Meldungen zu übersetzen.";
$template['contribute']['text12']="Website Verwaltung/Entwicklung";
$template['contribute']['text13']="
	Die Website muss erweitert und gewartet werden.<br />
	Für diese Aufgabe werden Kenntnisse in PHP, XHTML, CSS gebraucht – und einige Ideen :)";
$template['contribute']['text14']="Spiegelung";
$template['contribute']['text15']="
	FTP- und WWW-Spiegel sind immer willkommen: Wir brauchen momentan Spiegel außerhalb Europas.<br />
	Die Website ist in PHP geschrieben und wird via SVN aktualisiert, daher muss ein Spiegelserver PHP-fähig sein und einen SVN-Client installiert haben.<br />
	Das FTP-Archiv umfasst ca. 1.2GB; eine teilweise Spiegelung kann ebenso arrangiert werden.<br />
	Eine detailierte Anleitung um einen WWW- oder FTP-Spiegelserver einzurichten ist <a href=\"?id=mirroring&amp;lang=$lang\">hier</a> verfügbar.";
$template['contribute']['text16']="Öffentlichkeitsarbeit";
$template['contribute']['text17']="
	Wir brauchen Leute, die über KVIrc sprechen, Artikel, Beschreibungen, Kritiken schreiben, nach Unterstützern suchen, ...";
$template['contribute']['text18']="Wen kontaktieren";
$template['contribute']['text19']="
	Wenn Sie sich entschieden haben mitzuwirken, können Sie ihr Angebot an <a href=\"mailto:pragma [at] kvirc [dot] net\">Pragma</a> senden.<br />
	Ein weiterer Platz um die Bereitschaft anzuzeigen, ist der <a href=\"irc://chat.ircnet.org/#kvirc\">#KVIrc</a>-IRC-Raum bei IRCNet, <a href=\"irc://irc.azzura.org/#KVIrc.net\">#KVIrc.net</a> bei Azzura oder <a href=\"irc://irc.freenode.org/'KVirc\">#KVIrc</a> bei FreeNode (früher bekannt als OpenProjects network).";
/* contribute.php end */

/* donate.php start */
$template['donate']['title']="Das KVIrc-Projekt mit Geldspenden unterstützen";
$template['donate']['text1']="
	KVIrc ist kostenlos und frei verfügbar und wird immer frei verfügbar bleiben: es ist keine Zahlug erforderlich um es herunterzuladen, zu benutzen, zu verändern und den Quelltext weiterzugeben.";
$template['donate']['text2']="
	Die meisten materiellen Ressourcen, von denen KVIrc lebt (wie WWW- oder FTP-Server), werden von den KVIrc-Team-Mitgliedern kostenlos zur Verfügung gestellt. Allerdings benötigt das Projekt eine immense Zahl an Programmierstunden, sowie Sachen, für die gezahlt werden muss, wie Computeraufrüstungen, Domain-Namenregistration, Hosting-Kosten, Bücher ... Wenn Ihnen KVIrc gefällt, denken Sie bitte darüber nach, das Projekt finanziell zu unterstützen: Zum Spenden kann PayPal benutzt werden.";
$template['donate']['text3']="
	Der Knopf unten bringt Sie zu PayPal, wo Sie den Betrag und die Währung bestimmen können. Jeden Betrag kann gespendet werden, alles ist willkommen. Wenn Sie PayPal nie vorher benutzt haben, wird PayPal Sie nach Ihrer Kreditkarte/Bankverbindung, Land, Adresse usw. fragen. Diese Informationen werden von PayPal benötigt, um die Geldspende abzuwickeln – sie werden weder vom KVIrc-Team benötigt, noch sind sie diesem sichtbar.";
$template['donate']['text4']="
	Nachdem Sie ihre Spende getätigt haben, werden Sie per E-Mail kontaktiert und gefragt, ob die Spende auf dieser Seite gelistet werden kann. Wenn der gespendete Betrag verbraucht ist, wird die Verwendung neben dem Spender und dem Betrag gelistet.";
$template['donate']['text5']="Danke! :)";
$template['donate']['title2']="Neueste Spenden";
$template['donate']['donation']="gespendet von";
$template['donate']['alttext']="Spende an das KVIrc-Projekt via PayPal";
/* donate.php end */

/* download.php start */
$template['download']['title']="KVIrc herunterladen";
$template['download']['text1']="Man kann KVIrc auf drei Arten erhalten:";
$template['download']['text2']="Offiziell veröffentlichte Pakete";
$template['download']['text3']="
	Die offiziellen Pakete werden weniger häufig veröffentlicht, sind aber die stabilsten. Jedes offizielle Quelltext-Paket ist gut getestet und wird wahrscheinlich auf ihrem System problemlos kompiliert werden können. Es bestehen auch mehrere Möglichkeiten, ein zum jeweiligen System passendes Binärpaket zu finden. Die hier abrufbaren häufig-gestellten-Fragen und die Dokumentation beziehen sich auf diese Pakete.";
$template['download']['text4']="Entwicklungs-Snapshots";
$template['download']['text5']="
	Die Snapshots des Quelltextes sind inoffizielle Pakete, gewonnen aus dem SVN auf einer nicht regelmäßigen Basis. Jeder Snapshot spiegelt den SVN-Status zu einer bestimmten Revision wider. Diese Pakete wurden zumindest auf ein paar Systemen getestet und werden mit hoher Wahrscheinlichkeit auch auf ihrem System kopilieren. Es sind auch einige Binärpakete verfügbar.";
$template['download']['text6']="Aktuelle Quellen aus dem SVN";
$template['download']['text7']="
	Der aktuelle Quelltext kann über das SVN-System geladen werden. Wir versuchen SVN so \"sauber\" wie möglich zu halten, aber trotzdem kann nicht garantiert werden, dass der Quelltext kompiliert. Der SVN-Methode stellt nur den Quelltext zur Verfügung, es gibt keine Binärpakete.";
/* download.php end */

/* faq.php start */
$template['faq']['title']="Häufig gestellte Fragen";
$template['faq']['text1a']="Wie betrete ich einen Raum";
$template['faq']['text1b']="Tippen Sie \"/join #Raumname\"";
$template['faq']['text2a']="Ich kann KVIrc nicht kompilieren (jede Version)";
$template['faq']['text2b']="
	LESEN Sie die Anweisungen in der Datei INSTALL; die meisten üblichen Probleme können gelöst werden, indem man die Umgebungsvariablen richtig setzt und mit den Optionen von ./configure \"spielt\". Wenn die Datei INSTALL nicht hilft, kann eine entsprechende Frage in #kvirc bei Freenode oder im IRCNet gestellt werden: Hier sind viele erfahrene Benutzer, die versuchen können/werden, zu helfen. Falls dies das Problem immer noch nicht lösen konnte, sollte eine E-Mail mit der Problem-/Fehlerbeschreibung an die KVIrc-Mailingliste geschrieben werden";
$template['faq']['text3a']="Ich kann mich nicht zu einem IPv6-Server verbinden";
$template['faq']['text3b1']="
	Zuerst sollte sicher gestellt werden, dass IPv6 auf dem System korrekt eingerichtet ist.<br />
	Kann eine andere IPv6-Maschinen angepingt werden mit ping6";
$template['faq']['text3b2']="
	Ist die IPv6-Unterstützung in KVIrc aktiviert?<br />
	Um dies herauszufinden, hilft";
$template['faq']['text3b3']="
	auf der KVIrc-Kommandozeile. Es sollte eine komma-separierte Liste mit den einkompilierten Merkmalen ausgeben. Wenn die Liste \"IPv6\" enthält, ist die Unterstützung einkompiliert, ansonsten muss die Kompilierungsphase überprüft werden, um rausfinden, was falsch läuft.
	Mit /server -i &lt;servername&gt; kann eine Verbindung zu einem IPv6-Server aufgebaut werden.
	Wenn andere IPv6-Systeme angepingt werden können, die IPv6-Unterstützun einkompiliert wurde, aber immer noch keine Verbindung zu einem *existierenden* IPv6-Server aufgebaut werden kann, so haben Sie vielleicht einen Fehler im Programm entdeckt :) Melde Sie ihn";
$template['faq']['text4a']="Wie betrete ich Chat-Räume automatisch";
$template['faq']['text4b1']="
	Es gibt viele Wege dies zu tun.
	Zum Beispiel";
$template['faq']['text4b2']="
	Wählen Sie \"Skripte/Ereignisse bearbeiten\"aus dem KVIrc-Menü.<br />
	Suchen Sie \"OnIRC\" in der linken Leiste des aufgegangenen Fensters.<br />
	Klicken Sie rechts auf diesen Eintrag und wählen \"Neuer Handler\".<br />
	Ein \"Standard\"-Handler wird erstellt. Auf der rechten Seite werden die Befehle eingetragen:<br />
	join #kvirc<br />
	join #irgendeinraum<br />
	join #irgendeinandererraum<br />
	....<br />
	Jetzt noch auf OK und fertig: Gerade haben Sie einen Handler für ein Ereignis erstellt.<br />
	Bei jeder neuen Verbindung zu einem Server wird KVIrc die ausgewählten Räume automatisch betreten.";
$template['faq']['text4b3']="
	Eine weitere Möglichkeit (besser, wenn mehrere Server genutzt werden) ist es, zu den Server-Optionen zu gehen und dort auf den Knopf 'Erweitert' zu klicken.<br />
	Dort ist ein Server-spezifisches \"Beim Verbinden\"-Ereignis.";
$template['faq']['text5a']="Unter Windows scheint KVIrc manchmal zu verlangsamen";
$template['faq']['text5b']="
	Dies wird gewöhnlich durch zu hohe Grafiklast verursacht; es kann versucht werden, einige grafische Effekte wie \"Falsche Transparenz\" zu deaktivieren. Meistens tritt dieses Problem bei 32-bit Farbtiefe auf; ein Wechsel zu 16 oder 24 bit kann also helfen.";
$template['faq']['text6a']="Wie kann ich zu einem SSL-fähigen IRC-Server verbinden";
$template['faq']['text6b1']="Nutzen Sie";
$template['faq']['text6b2']="Es sollte auch über IPv6 funktionieren.<br />
	Wenn es nicht funktioniert, ist es möglich, dass keine SSL-Unterstützung einkompiliert wurde.<br />
	Um dies herauszufinden, tippen Sie";
$template['faq']['text6b3']="in die KVIrc-Kommandozeile. Wenn \"SSL\" nicht in der Liste enthalten ist, überprüfen Sie die Kompilierungsphase";
$template['faq']['text7a']="Wie kann ich DCC über SSL nutzen";
$template['faq']['text7b']="sollte funktionieren";
$template['faq']['text8a']="Brauche ich ein SSL-Zertifikat";
$template['faq']['text8b']="Nein, es wird keins gebraucht, aber es kann eins genutzt werden, wenn gewollt.";
$template['faq']['text9a']="Wie erstelle ich ein SSL-Zertifikat";
$template['faq']['text9b']="
	Ein selbst-signiertes Test-Zertifikat kann durch das CA.pl Perl-Skript erstellt werden, welches in der OpenSSL-Distribution enthalten ist. Es wird in etwa sein wie";
$template['faq']['text10a']="Ich kann KVIrc nicht dazu bringen, mein SSL-Zertifikat in DCC zu nutzen";
$template['faq']['text10b']="
	Das SSL-Protokoll fordert von der \"Client\"-Seite nicht, das Zertifikat zu senden; es wird nur verwendet, wenn die \"Server\"-Seite es anfordert (dies ist nicht der Fall bei KVIrc).<br />
	Die Server-Seite kann ein Zertifikat haben, welches auf der SSL-Optionen-Seite eingestellt werden kann.<br />
	Wenn der private Schlüssel im Zertifikat gespeichert ist, den gleichen Dateinamen bei SSL-Zertifikat und SSL-Schlüssel eintragen.<br />
	Falls nötig, muss dass Passwort angegeben werden";
$template['faq']['text11a']="Unter Windows stürzt KVIrc ab, wenn ein Zertifikat benutzt wird";
$template['faq']['text11b']="
	Dies ist wahrscheinlich ein Fehler der SSL-dll, welche mit der Windowsversion von KVIrc ausgeliefert wird.<br />
	Es kann mit einer anderen Version dieser dll versucht werden";
$template['faq']['text12a']="/me unterstützt das '\$'-Zeichen nicht";
$template['faq']['text12b']="Dies ist KEIN Fehler – dies ist eine Besonderheit. KVIrc unterstützt (und ersetzt) Variablen in allen Befehlen. Das $-Zeichen kann maskiert werden, indem man einen Rückwärtsschrägstrich benutzt: \"/me hat \\\$100 verdient\" funktioniert";
$template['faq']['text13a']="/me unterstützt '&quot;' (doppelte Anführungszeichen) nicht";
$template['faq']['text13b']="
	Dies ist KEIN Fehler – dies ist eine Besonderheit. Bei einer in doppelten Anführungszeichen eingeschlossene Zeichenfolge werden die Leerzeichen erhalten, während bei anderen Zeichenketten die Leerzeichen bereinigt werden. Dies ist gültig für JEDEN Befehl.<br />
	Das &quot;-Zeichen kann maskiert werden, indem man einen Rückwärtsschrägstrich benutzt: /me fühlt sich ein wenig \\\"mäh\\\"";
$template['faq']['text14a']="/me kann kein ';' enthalten";
$template['faq']['text14b']="
	Dies ist KEIN Fehler – dies ist eine Besonderheit. KVIrc unterstützt mehrere Befehle in einer Zeile und benutzt ';' als Befehlstrenner. Das ';' kann mit einem Rückwärtsschrägstrich maskiert werden: /me hat hunger \;)";
$template['faq']['text15a']="Ich kann das aufklappende Raum-Menü nicht mehr sehen";
$template['faq']['text15b']="Wenn etwas schiefgegangen ist bei den KVIrc-Einstellungen (ein Absturz wenn die Einstellungen gespeichert werden?), oder wenn die Skript-Optionen durcheinander gebracht wurden und zum Originalverhalten (Standard-Skript) zurückgekehrt werden soll, kann \"Skripte/Standardskript wiederherstellen\" im KVIrc Hauptmenü ausgewählt werden.<br />
	(<b>ACHTUNG:</b> Dies löscht alle eigenen Skript-Veränderungen!)";
$template['faq']['text16a']="Ich erhalte Kompilierfehler wie diesen:<br />
	&nbsp; &nbsp; In file [somefile]:[someline] internal error:<br />
	&nbsp; &nbsp; Segmentation fault<br />
	&nbsp; &nbsp; Please submit a full bug report,<br />
	&nbsp; &nbsp; with preprocessed source if appropriate.<br />
	&nbsp; &nbsp; See &lt;URL:http:...";
$template['faq']['text16b1']="Dieser Fehler kann verschiedene Ursachen haben";
$template['faq']['text16b1a']="
	Ein Kompiliererfehler: Mein GCC 3.2 20020903 (Standard bei RH 8.0) gibt täglich 5–6 von diesen Fehlern aus. Normalerweise lassen die sich einfach lösen, indem man das Kommando \"make\"  erneut aufruft. <br />
	Wenn dies nicht hilft, oder es ziemlich häufig auftritt und störend ist, kann der Kompilierer aktualisiert werden";
$template['faq']['text16b1b']="
	Eine Speicherverfälschung: Dies ist wirklich häufig. Eine der Speicherbänke gibt manchmal wahllos Bytes zurück. Normalerweise tritt das Problem unter hoher Systemlast auf (z. B. Kernel, KDE oder KVIrc Kompilation). Auf diesen Fehler kann man testen, indem man verschiedene RAM-Module testet (oder eins nach dem anderen ausbauen, um das defekte zu finden). Man kann auch das Programm memtest ausführen und ein Kernel-Patch kann das kaputte Speichermodul ignorieren (wird permanent einer Scheinaufgabe des Kernels zugewiesen).<br />
	Diese Werkzeuge können mit der Lieblingssuchmaschine im Web gefunden werden";
$template['faq']['text16b1c']="
	Ein tieferes Hardware-Problem: Wenn das Aktualisieren des Kompilierers und das Tauschen des Speichers keine Verbesserung brachten, *kann* es ein tieferes Hardware-Problem sein: Bus-Fehler, fehlerhafter IDE- (oder SCSI-) Controller, oder sogar ein fehlerhafter Prozessor...";
$template['faq']['text17a']="KVIrc stürzt ab, wenn eine URL im Ausgabe-Fenster angezeigt wird";
$template['faq']['text17b']="
	Dies kann vom URL-Modul kommen, die Ursachen werden untersucht.<br /> Versuche";
$template['faq']['text18a']="KVIrc stürzt ab, wenn die Mehrzeileneingabe geöffnet wird (oder im Skript-Center)";
$template['faq']['text18b']="
	Wenn eine neue Version von KVIrc über eine alte installiert wurde, oder wenn die Qt-Bibliotheken, gegen die KVIrc gelinked ist, getauscht wurden, dann kann damit ein kaputter Mehrzeileneditor verursacht werden.<br />
	Möglicherweise hilft es, \$HOME/.kvircssexeditorrc zu löschen und KVIrc neu zu starten";
/* faq.php end */

/* features.php start */
$template['features']['title']="Merkmale";
$template['features']['text1']="
	Hmmm... alle KVIrc-Merkmale auflisten?<br />
	Nun... warum nicht?<br />
	Hier sind einige Kernaussagen.";
$template['features']['tree1']="Benutzerschnittstelle";
$template['features']['tree1a']="komplette grafische Konfiguration";
$template['features']['tree1b']="bewegliche MDI-Fenster";
$template['features']['tree1c']="eingebauter Hilfe-Betrachter";
$template['features']['tree1d']="Unterstützung für Themen (komplett konfigurierbar über eine grafische Schnittstelle oder via Skripte)";
$template['features']['tree1e']="Pseudo-Transparenz-Unterstützung";
$template['features']['tree1f']="Werkzeugleiste via \"Drag &amp; Drop\" veränderbar";
$template['features']['tree1g']="Aktivitätsbenachrichtigungs-Popup";
$template['features']['tree1h']="Statusleiste mit Unterstützung für Minianwendungen";
$template['features']['tree1i']="Markierung für ungelesenen Text";
$template['features']['tree1j']="Übersetzung in 14 Sprachen";
$template['features']['tree2']="Netzwerk";
$template['features']['tree2a']="Proxy-Unterstützung (SOCKSv4, SOCKSv5, HTTP)";
$template['features']['tree2b']="Volle IPv6-Unterstützung (auch für DCC-Übertragungen)";
$template['features']['tree2c']="SSL-Unterstützung (auch über IPv6)";
$template['features']['tree2d']="Unterstützung für Mircryption";
$template['features']['tree3']="Kern";
$template['features']['tree3a']="
	Modulare Architektur: Selten gebrauchte Merkmale befinden sich in externen Modulen und werden nur bei Bedarf geladen";
$template['features']['tree3b']="Erweiterbarkeit: Eine große Programmierschnittstelle, um Erweiterungsmodule zu schreiben";
$template['features']['tree3c']="UNICODE-Unterstützung";
$template['features']['tree4']="IRC";
$template['features']['tree4a']="Verbindungen zu mehreren Servern";
$template['features']['tree4b']="Benachrichtigungslisten (ja, WATCH wird unterstützt)";
$template['features']['tree4c']="Ignorierlisten";
$template['features']['tree4d']="Registrierte-Benutzer-Datenbank";
$template['features']['tree4e']="Lag-Anzeige";
$template['features']['tree4f']="Konfigurierbare Protokollierung";
$template['features']['tree4g']="Unterstützung für Standard-DCC-CHAT und -SEND (mit Wiederaufnahme)";
$template['features']['tree4h']="Erweiterte DCC-Arten: VOICE, RSEND, GET, RECV";
$template['features']['tree4i']="DCC CHAT über SSL";
$template['features']['tree4j']="DCC Bandbreitenlimitierung (mit der Fähigkeit, diese \"spontan\" zu setzen)";
$template['features']['tree5']="Skripte";
$template['features']['tree5a']="Eingebauter Skriptsprachen-Interpreter";
$template['features']['tree5a1']="Skalare, Felder (arrays) und Hashes...";
$template['features']['tree5a2']="Aliase";
$template['features']['tree5a3']="Popups";
$template['features']['tree5a4']="Ereignisse";
$template['features']['tree5a5']="Skriptfähige Werkzeugleisten";
$template['features']['tree5a6']="Perl-Unterstützung";
$template['features']['tree5a7']="Fähigkeit, Skripte zu übersetzen (im Sinne der tr()-Funktion)";
$template['features']['tree5b']="
	Unterstützung für Objekte in der Skriptsprache: Ja, jetzt kann <acronym title=\"Objektorientierte Programmierung\">OOP</acronym> verwendet werden";
$template['features']['text2']="Hmmm...Ich hoffe, das reicht, um die Neugier zu wecken :D";
/* features.php end */

/* help.php start */
$template['help']['title']="Hilfe gewünscht";
$template['help']['text1']="
	Die erste Stelle, wo Sie vorbeischauen sollten, wenn Sie ein Problem mit KVIrc haben, ist die KVIrc Mailingliste";
$template['help']['text2']="
	Wenn etwas falsch läuft, Sie Fragen oder Anregungen haben, oder einfach an der KVIrc-Entwicklung interessiert sind, abonnieren Sie die";
$template['help']['text3']="
	Die Entwickler verfolgen die Mailingliste und werden Fragen so schnell wie möglich beantworten.";
$template['help']['text4a']="Der offizielle KVIrc-Support-Raum ist im";
$template['help']['text4b']="Freenode Netzwerk";
$template['help']['text4c']="und der Raum heißt – wer hätte es gedacht – ";
$template['help']['text4d']="Der offizielle italienische Raum ist";
$template['help']['text4e']="im";
$template['help']['text4f']="Azzurra Netzwerk";
$template['help']['text4g']="Etwas Regung kann auch gefunden werden im";
$template['help']['text4h']="IRCNet Netzwerk";
$template['help']['text4i']="im";
$template['help']['text4j']="Raum :)";
$template['help']['text5']="Fehler können gemeldet und eingesehen werden unter";
$template['help']['text6']="
	Für Anregungen, Neuigkeiten, Verbesserungen oder Sonstiges in Bezug zur Web-Site, schicken Sie eine E-Mail an";
$template['help']['text7']="
	Für jede Art von Hilfe für Grafik, Übersetzungen und Dokumentation kontaktieren Sie bitte";
/* help.php end */

/* honor.php start */
$template['honor']['title']="Ehre und Ruhm";
$template['honor']['text1']="Dies ist eine Liste der Leute, die zu KVIrc beigetragen haben.";
$template['honor']['text2']="Diese Liste ist bei weitem nicht vollständig. Einige mehr oder weniger \"anonyme\" Personen haben ihre Zeit, Augen, Bandbreite und Gehirn bei diesem Projekt verbraucht. Wenn Du einer von ihnen bist, zögere nicht, uns zu kontaktieren";
$template['honor']['text3']="Wenn dein Avatar nicht richtig erscheint oder falsch ist, schicke mir das richtige Bild. Wenn Du einen Fehler, eine kaputte Verknüpfung oder eine fehlende Seite findest, schicke bitte eine E-Mail an";
$template['honor']['made1']="Der \"Schöpfer\" von KVIrc. Kopfarbeit, Handarbeit, \"eyes consuming\" und Kaffee trinken";
$template['honor']['quote1']="Ich prüf's... lass es mich checken...&quot;<br />&quot;Ich reparier's morgen...&quot;<br />&quot;KVIrc: Der Client, der keinen Kaffee kochen kann";
$template['honor']['made2']="Webmaster, Fehlerjäger, Schnappschuss-Verwalter, Supporter, und der Mann, der KVIrc IPv6 gegeben hat.";
$template['honor']['made3']="Dokumentation, Fehlersuche, Öffentlichkeitsarbeit";
$template['honor']['quote3']="Ich habe keine Ahnung, wovon du sprichst... oder warum du es haben willst :)";
$template['honor']['made4']="Fehlersuche, Plugin-Entwicklung, Fehlerbeseitigung, Windows-Portierung und Schnappschüsse";
$template['honor']['quote4']="&lt;YaP&gt; Warum hast du nicht eine Funktion MachAllesSelber geschrieben? :)&quot;<br />&quot;&lt;Pragma&gt; Eine wunderbar rekursive Funktion :)&quot;<br />&quot;&lt;YaP&gt; Verdammt... Ich wusste es eheheheheh";
$template['honor']['made5']="Test scripter, Fehlersuche, Ideengeber &amp; Ersteller des ersten www.kvirc.net";
$template['honor']['quote5']="Was'n?";
$template['honor']['made6']="Das offizielle C++-Handbuch und Plugin-Entwickler";
$template['honor']['quote6']="Bereitet euch vor..&quot; &quot; #include &lt;iostream.h&gt;&quot;<br />&quot;class testing {...&quot;<br />&quot;&lt;oehansen&gt; Ich muss zugeben, Ich bin verwirrt :-)&quot;<br />&quot;&lt;Pragma&gt; Ich auch, an diesem Punkt  :)";
$template['honor']['made7']="Pakete für Slackware";
$template['honor']['made8']="Italienische Übersetzung, Fehlersuche, moralische Unterstützung :))))";
$template['honor']['quote8']="KVIrc? Ah! Der Dinosaurier...";
$template['honor']['made9']="Deutsche Übersetzung, Fehlersuche, neue Ideen. ein paar Skripte, Quelltextverbesserungen + neuer code ;)";
$template['honor']['quote9']="Pragma: Kurze Frage...";
$template['honor']['made10']="Macht alles kaputt, und verbessert die Grammatik, wenn es nichts mehr zu zerstören gibt. Hört auch auf Aeris Anfragen, und hat schon die Hälfte davon erledigt...";
$template['honor']['quote10']="Hey, ich bin nicht zuständig, um ein lustiges Zitat von mir zu finden ^_~";
$template['honor']['made11']="Italienische Übersetzung, Quelltextverbesserung und viele nützliche Vorschläge";
$template['honor']['made12']="Offizieller polnischer Bierlieferant und Plugin-Entwickler";
$template['honor']['quote12']="echo &quot;STOP IT&quot; &gt; /dev/neighbour&quot; &quot;cd ./neighbour &amp;&amp; make clean&quot;<br />&quot;Pragma...erm...Fehler? WELCHE Fehler? ;))";
$template['honor']['made13']="Ersteller der alten Website, einige Vorschläge, Teetrinker (Danke Szymon, dein Tee ist großartig ;) ) und.. warum bin ich hier gelistet?";
$template['honor']['quote13']="Hey Mami, schau!! Mein Name steht in der KVIrc Ehre-&amp;-Ruhm-Rubrik!!";
$template['honor']['made14']="Nachrichtenautor, Bugtracker und stetige Benuzterunterstützung in #kvirc";
$template['honor']['made15']="Französische Übersetzung, Betatester und starker Fehlerjäger";
$template['honor']['made16']="Objektklassenentwickler, Code-Verbesserungen, Betatester, Fehlerausbesserungen, exotische Skripte, Dokumentation...";
$template['honor']['quote16']="&lt;Grifisx&gt;...verdammte Klammern! ...es sind immer zu viele...<br />&lt;Noldor&gt;....oder zu wenige...";
$template['honor']['made17']="Objektklassenentwickler, Code-Verbesserungen, Betatester, Fehlerausbesserungen, exotische Skripte, Dokumentation...";
$template['honor']['quote17']="&lt;Grifisx&gt; Der Unterschied zwischen uns beiden ist: Du siehst Dinge und fragst &quot;Warum?&quot;, ich träume von Dingen, die es nicht gibt und frage &quot;Warum nicht?";
$template['honor']['made18']="Internationalisierung, Fehlerausbesserungen, Fehlersuche, neue Ideen und mehr...";
$template['honor']['made19']="Ersteller der neuen Webpräsenz und -verwalter, italienische Übersetzung, Skripte, Fehlersuche, Slackware-Pakete, neue Ideen...";
$template['honor']['quote19']="&lt;HelLViS69&gt; heiliger gdb, im Namen Ritchies, Kerninghams und rms'";
$template['honor']['made20']="Italienische Übersetzung, Grafiken, true believer";
$template['honor']['quote20']="Zeit hat keinen Sinn";
$template['honor']['made21']="FAQ und italienische Übersetzung";
$template['honor']['made22']="Debian-Pakete, moralische Unterstützung";
$template['honor']['quote22']="Man muß der Menschheit überlegen sein durch Kraft, durch Höhe der Seele, - durch Verachtung. - Friedrich Nietzsche";
$template['honor']['made23']="Fehlersuche und -ausbesserungen, Ausbesserung der Dokumentation, Skripte (NGL File Server)";
$template['honor']['quote23']="Ich weiß nicht, was ich will, aber ich weiß, wie ich es kriege.";
$template['honor']['made24']="Away-System, farbige Spitznamen, generelle Programmierung, spanische Überseetzung";
$template['honor']['quote24']="Pragma: stell' Dir KVIrc als Werkzeug für Skript-Programmierer vor... wir müssen ihnen etwas zu tun übrig lassen :)";
$template['honor']['made25']="Das 'Licht' innerhalb der GNU-Wolken. Allgemeiner (??!) offizieller Project-Unterstützer :)";
$template['honor']['quote25']="Pragma: scheint so, als ob KVIrc mit all seinen Zusatzmodulen eine komplette Arbeitsumgebung wird&quot; &quot;echo espresso &gt; /dev/coffee&quot; &quot;Pragma: Du hast das Benutzerlimit erreicht. WTF!";
$template['honor']['made26']="Ideengeber für www.kvirc.org";
$template['honor']['quote26']="Dieses freie Projekt ist besser als Shareware&quot; &quot;mIrc für Windows sogar im Alphastadium";
$template['honor']['made27']="Stellt sicher, dass niemand faul ist, Fehlersucher, eine MENGE Vorschläge und Ersteller von RealityX IRC.";
$template['honor']['quote27']="Fallschirmsprigen ist fast so aufregend wie KVIrc-Skripte schreiben!&quot;<br />&quot;Pragma: kannst du diese Funktionen hinzufügen: \$rubbelmeinenRuecken() and \$machKaffee()?";
$template['honor']['made28']="Fehlerbehebung und Verbesserungen.";
$template['honor']['quote28']="Ich kann *wirklich* gut Sachen erledigen, wenn ich keine AHnung habe, was ich gerade tue";
$template['honor']['made29']="Verbesserungen von KVIrc und meiner Linux-Kenntnisse. Ich mag an ihn als einen 'seelischen Führer' denken... :D";
$template['honor']['made30']="Der KDE-Mann! Stellt sicher, dass KVIrc einen Grund hat, das K am Anfang des Namens zu haben";
$template['honor']['quote30']="Kann ich heute bitte aus KVIrc eine reine KDE-Applikation machen?? Bitteee...";
$template['honor']['made31']="Einige \"kleine\" Stücke Quelltext.";
$template['honor']['quote32']="&lt;Error403&gt;Number1: Ich stellte mir vor, dass du verrückt aussiehst :)&quot;<br />&quot;&lt;NumeroUno&gt; Ich war betrunken";
$template['honor']['made33']="Der \"großzügige\" für das KVIrc-Projekt. Stellt SVN-Service, WWW- &amp; FTP-Spiegelung und Bandbreite zur Verfügung, großartige Ideen und Spaß während dem Programmieren.";
$template['honor']['made34']="Fehlersucher, Ideenquelle :)";
$template['honor']['quote34']="buy a pigeon traveller and pass dcc transfers to him";							//TODO
$template['honor']['made35']="Verschiedene irre Verbesserungen.";
$template['honor']['quote35']="Ich kann alles programmieren, woran ich denke!";
$template['honor']['made36']="Betatester, Sprachstrukturverbesserungen.";
$template['honor']['quote36']="...es reicht für 100 IPs pro Meter der Erde, so dass jeder Lichtschalter seine eigene IP haben kann...dann kannst du dich per telnet zu deinem Lichtschalter verbinden und ihn ausschalten!";
$template['honor']['made37']="MacOSX-Portierung";
$template['honor']['made38']="Portugiesische Übersetzung, Standardskript-Patches und Mandriva (MDE) Paketierer.";
$template['honor']['made39']="Russische Übersetzung";
$template['honor']['made41']="FreeBSD Port mantainer";
$template['honor']['quote37']="FreeBSD Gimp.";
/* honor.php end */

/* install.php start */
$template['install']['title1']="Installation";
$template['install']['title2']="Minimale Anforderungen";
$template['install']['title3']="Konfigurieren der Umgebung";
$template['install']['title4']="Interaktiver Modus";
$template['install']['title5']="Kompilieren";
$template['install']['title6']="Kompilieren unter MacOS X";
$template['install']['title7']="Kompilieren unter Win32";
$template['install']['title8']="Hacker-level Installation";
$template['install']['title9']="Ein KVIrc Paket erstellen";
$template['install']['title10']="Viel Spaß!";
$template['install']['text1']="Allgemeine Hinweise zur Installation von KVIrc 4.0";
$template['install']['text2']="Um KVIrc 4.0 kompilieren zu können, wird mindestens diese Software benötigt";
$template['install']['text3']="
	Wenn Ihre Distribution KDE installiert hat, ist auch Qt bereits installiert. Falls nicht, einfach Qt4 aus den Depots Ihrer Distributuin installieren.";
$template['install']['text4']="
	Bevor cmake aufgerufen wird, bitte sicherstellen, dass \$QTDIR auf das richtige Verzeichnis zeigt. Dies erleichtert das Auffinden der richtigen Qt-Version.";
$template['install']['text5a']="\$QTDIR kann mit diesem Befehl eingestellt werden";
$template['install']['text5b']="Ihr Qt-Verzeichnis";
$template['install']['text6']="Auf meinem System ist Qt z. B. im Verzeichnis /usr/lib64/qt installiert, daher rufe ich den Befehl so auf";
$template['install']['text7']="Um sicher zu gehen, dass die richtige Qt-Version installiert ist, einfach diesen Befehl aufrufen";
$template['install']['text8']="Bei mir lautet die Ausgabe beispielsweise";
$template['install']['text9']="
	Wenn mehrere Versionen von Qt installiert sind und eine bestimmte Version genutzt werden soll, reicht das exportieren von QTDIR nicht aus. Da das CMake-Modul, welches QT4 sucht, selbst qmake aufruft, um das Verzeichnis der Qt4-Bibliotheken zu finden, kann der PATH angepasst werden. Damit kann CMake dazu gebracht werden, die gewünschte qmake-Version zu nutzen";
$template['install']['text10']="
	Bitte beachten: Kompilieren mit KDE4-Unterstützung veranlasst KVIrc gegen die gleiche Qt4-Version zu linken, die auch KDE4 nutzt. Dies kann zu Link-Problemen führen. Deaktivieren der KDE4-Unterstützung ist die einzige bekannte Lösung zur Zeit.<br />
	Weiterhin ist zu beachten, dass dann die Qt-Bibliotheken beim Start von KVIrc angegeben werden müssen";
$template['install']['text11']="
	Dies ist normalerweise in neueren Distributionen enthalten.<br />
	Um dies zu überprüfen reicht folgender Befehl";
$template['install']['text12']="
	Es wird ein vernünftiger C++ Compiler benötigt. Normal ist unter Linux der gcc von den GNU Tools. Es wird die Version 4.3 von gcc bevorzugt.<br />
	Um dies zu überpüfen reicht dieser Befehl";
$template['install']['text13']="
	Dies ist normalerweise in der Distribution enthalten und bereits installiert. Die Bibliothek heißt libpthread.so.<br />
	Sie kann mit dem Befehl \"find\" gesucht werden";
$template['install']['text14']="
	Wenn sie nicht vorhanden ist (CMake wird einen Hinweis ausgeben), kann sie vom bevorzugten GNU-Spiegelserver heruntergeladen werden.<br />
	Das configure-Skript wird auch fehlschlagen, wenn die Bibliothek irgendwo auf dem System versteckt ist (z. B. nicht in /lib, /usr/lib oder /usr/local/lib): Dann sollte sie wohl verschoben werden.";
$template['install']['text15']="
	Es wird die Bibliothek des dynamischen Linkers benötigt: libdl.so.<br />
	Diese ist gewöhnlich bereits installiert, solang keine Fehlermeldung deswegen erscheint, braucht man sich nicht hierum zu kümmern. Einige Systeme haben diese Schnittstelle bereits in der libc integriert.";
$template['install']['text16a']="
	Wenn die KDE-Unterstützung mitkompiliert werden soll, wird natürlich KDE benötigt.<br />
	Das Paket kdelibs sollte ausreichen.</p>
	<p>Bevor cmake aufgerufen wird, muss sichergestellt sein, dass die Variable \$KDEDIR auf das richtige Verzeichnis zeigt.</p>
	<p>Diese kann bei Bedarf wie folgt eingestellt werden";
$template['install']['text16b']="Ihr KDE-Verzeichnis";
$template['install']['text17']="In meinem Fall ist KDE in /usr installiert, daher benutze ich";
$template['install']['text18']="
	Wenn eine andere Sprache als Englisch verwendet werden soll, wird das Paket GNU gettext benötigt. Speziell msgfmt wird von KVIrc genutzt.</p>
	<p>Dies ist gewöhnlich in den Distributionen enthalten und meistens bereits installiert. Dies kann überprüft werden mit";
$template['install']['text19']="
	KVIrc wird sich nicht beschweren, wenn das obige Programm fehlt, es wird dann die Erstellung der Übersetzungen überspringen.<br />
	Wenn der obige Befehl fehlschlägt, muss das Paket gettext installiert werden, wenn eine andere Sprache als Englisch genutzt werden soll.";
$template['install']['text20']="
	Wenn Secure-Socket-Layer-Unterstützung (SSL) mitkompiliert werden soll, werden die OpenSSL-Bibliothek und -Header benötigt (libssl.so und openssl/ssl.h).";
$template['install']['text21']="
	Wenn die integrierte Dokumentation erstellt werden soll, wird auch Perl benötigt. Jede Version sollte funktionieren.";
$template['install']['text22']="
	Wenn die Unterstützung für Perlskripte kompiliert werden soll, wird eine funktionierende Perl-Installation benötigt. libperl.so MUSS mit der MULTPLICITY-Option kompiliert worden sein.<br />
	Dies kann mit 'perl -V' überprüft werden.<br />
	Die Art, wie Programme Perl einbetten können, hat sich von Version 5.8 zu Version 5.10 geändert. KVIrc sollte mit Perl >= 5.004 zusammenarbeiten, aber 5.10 wird empfohlen, vor allem, da zukünftige Aktualisierungen die Kompatibilität brechen können.";
$template['install']['text23']="
	Wenn DCC VOICE den GSM-Codec unterstützen soll, wird eine neuere Version von libgsm benötigt.<br />
	Diese ist nicht unbedingt zur Kompilierzeit erforderlich, da KVIrc diese nur zur Ausführungszeit sucht, wenn DCC VOICE mit GSM-Codec benutzt werden soll.<br />
	Diese kann mit dem Befehl \"find\" gesucht werden";
$template['install']['text24']="
	Die meisten Distributionen enthalten diese Bibliothek. Einige liefern sie nur als statische Version \"libgsm.a\" aus: Wenn der vorherige 'find'-Befehl nur etwas wie \"/usr/lib64/libgsm.a\" ausgegeben hat, kann mit folgenden Befehlen manuell ein 'dynamisches' Archiv erstellt werden";
$template['install']['text25']="
	Wenn sie gar nicht installiert ist, kann sie über die Distribution nachinstalliert oder aus dem Web heruntergeladen werden.";
$template['install']['text26']="
	Wenn das /snd-Modul verschiedene Audioformate abspielen können soll, muss entweder ein Soundsystem wie Phonon, ein Sound-Daemon wie esd oder eine neue Version der audiofile-Bibliothek benutzt werden. Ohne dies wird KVIrc nur *.au Dateien wiedergeben können.";
$template['install']['text27a']="
	Da KVIrc 4.0 CMake als Build-System nutzt, muss dies zur Erstellung der Makefiles für das Programm make genutzt werden.<br />
	Dafür empfehlen wir die \"außerhalb-der-Quellen\"-Methode: Alle Dateien werden erstellt, ohne das Quellenverzeichnis zu beschmutzen.";
$template['install']['text27b']="Ihre Optionen";
$template['install']['text28']="
	Hiermit wurde eine außerhalb-der-Quellen-Umgebung erschaffen; nützlich, um ein sauberes Arbeitsverzeichnis zu haben.<br />
	Zu beachten ist, dass die abschließenden Punkte für cmake benötigt werden; ansonsten wird cmake NICHT die richtige Umgebung erzeugen.";
$template['install']['text29']="
	Die CMake-Regeln unterstützen einige Flags. Wenn keine angegeben werden, wird CMake versuchen, eine passende Umgebung zu erstellen :)<br />
	Wenn Flags benutzt weren sollen, müssen diesen ein Wahrheitswert oder eine Zeichenkette übergeben werden.</p>
	<p> Um z. B. nach /usr zu installieren anstatt nach /usr/local und die Phonon-Unterstützung zu deaktivieren, würde der Befehl so lauten";
$template['install']['text30']="Hier ist eine Liste mit Erklärungen";
$template['install']['tree1']="
	Kompiliert das Programm mit Symbolen zur Fehlersuche.<br />
	    Nützlich für Fehlerberichte.";
$template['install']['tree2']="Ausfürhliche Ausgaben während des Kompilierens erzeugen.";
$template['install']['tree3']="Dies wird alles unterhalb von /path installieren.";
$template['install']['tree4']="
	libkvilib und die KVIrc Module werden unterhalb des Verzeichnisses \${CMAKE_INSTALL_PREFIX}/lib\${LIB_SUFFIX} installiert. Standard ist ein leeres Suffix. Wird hauptsächlich bei 64bit Distributionen verwendet (-DLIB_SUFFIX=64).";
$template['install']['tree5']="
	Versionsinformationen an kvirc und libkvilib anhängen, so dass unterschiedliche KVIrc-Versionen nebeneinander auf dem gleichen System existieren können.";
$template['install']['tree6']="
	Die KVIrc Installationsregeln werden nicht versuchen, CMAKE_C(XX)_FLAGS zu setzen, stattdessen wird CMake diese Variablen aus der Arbeitsumgebung verwenden. Dieses Flag wird -DDEBUG überstimmen.";
$template['install']['tree7']="
	Dies wird den Installationspfad erneut auf die Standardwerte initialisieren.<br />
	Nachfolgende Kompilierungen sollten den korrekten Pfad verwenden, der von CMake zwischengespeichert wird.<br />
	Dieses Flag ist nützlich, um Installationsprobleme unter MacOS X zu beheben.";
$template['install']['tree8']="Universelles Binärprogramm für die MacOS X Plattform kompilieren.";
$template['install']['tree9']="Vorkompilierte Header verwenden.";
$template['install']['tree10']="\"Phonon Audio Backend\"-Unterstützung deaktivieren.";
$template['install']['tree11']="
	\"OSS Audio Backend\"-Unterstützung deaktivieren. Dies deaktiviert auch die Unterstützung für Audiofile.";
$template['install']['tree12']="\"Audiofile Audio Backend\"-Unterstützung deaktivieren.";
$template['install']['tree13']="\"Esd Audio Backend\"-Unterstützung deaktivieren.";
$template['install']['tree14']="Qt-DBus-Unterstützung deaktivieren.";
$template['install']['tree15']="Qt-WebKit-Unterstützung deaktivieren.";
$template['install']['tree16']="KDE4-Unterstützung deaktivieren.";
$template['install']['tree17']="
	\"Secure Socket Layer\"-Unterstützung deaktivieren. Die SSL-Unterstützung ist automatisch aktiviert, wenn CMake OpenSSL findet.";
$template['install']['tree18']="
	Deaktiviert die Kryptografiemodule und die komplette Kryptografie- und Textersetzungsfunktionen. Erzeugt ein etwas kleineres Programm";
$template['install']['tree19']="
	Die IPv6-Unterstützung wird standardmäßig auf allen Plattformen aktiviert, die dies unterstützen; diese Option deaktiviert dies.<br />
	Auch bei reinen IPv4-Verbindungen kann die IPv6-Unterstützung beibehalten werden, um IPv6-Hostnamen aufzulösen.";
$template['install']['tree20']="
	Diese Option deaktiviert die Pseudotransparenz.<br />
	Die Pseudotransparenz-Unterstützung lässt das KVIrc-Fenster halbtransparent aussehen (KEINE echte Transparenz, nur ein gutaussehender Hack).<br />
	Wenn KDE-Unterstützung aktiviert ist, wird KVIrc eine Option haben, die den verblassten KDE-Hintergrund allen KVIrc-Fenstern als Hintergrund zuweist. Ohne KDE-Unterstützung ist es möglich, selbst ein Bild als Hintergrund auszuwählen. (Es kann natürlich auch das Bild des Arbeitsflächenhintergrunds gewählt werden; dies funktioniert bei (fast) allen Fenstermanagern).<br />
	Es sieht gut aus, aber wird etwas Speicher benötigen, wenn es aktiviert ist.<br />
	Auch wird es die Programmgröße etwas erhöhen.<br />
	Diese Option erlaubt das Deaktivieren der Pseudotransparenz.";
$template['install']['tree21']="
	Perl-Unterstützung ausdrücklich deaktivieren.<br />
	Es können keine Perl-Skripte innerhalb von KVIrc ausgeführt werden.";
$template['install']['tree22']="
	Python-Unterstützung ausdrücklich deaktivieren.<br />
	Es können keine Python-Skripte in KVIrc ausgeführt werden.";
$template['install']['tree23']="
	Unterstützung für Inter-Prozess-Kommunikation (IPC) deaktivieren.<br />
	Dadurch wird es nicht möglich sein, entfernte Befehle an eine laufende KVIrc-Sitzung zu senden: Generell bedeutet dies, dass bei jedem Aufruf von KVIrc eine neue Sitzung gestartet wird.<br />
	Wenn dieser Schalter nicht angegeben wird, wird eine neue Sitzung nur gestartet, falls keine für das aktuelle DISPLAY besteht oder eine neue Sitzung über die Befehlszeile erzwungen wurde.<br />
	Wenn eine Sitzung bereits besteht, wird die Befehlszeile via IPC an die laufende Sitzung weitergeleitet (X-event-basierte Kommunikation).<br />
	Diese Option spart ein paar KB bei der Programmdatei: Wenn wenig Speicher zur Verfügung steht, kann diese Option verwendet werden, sonst ist IPC eine gute Funktion.";
$template['install']['tree24']="Deaktiviert die Verwendung von GetText zur Erstellung der Übersetzungen.";
$template['install']['tree25']="Deaktiviert die Erstellung der Dokumentation durch Doxygen.";
$template['install']['tree26']="
	Dies deaktiviert die Nutzung der Systemfunktionen memmove(), memcpy() und memset() und nutzt stattdessen die integrierten Implementationen. Wenn 'undefinierte Referenzen' während des Kompilierens auftreten kann dies genutzt werden.";
$template['install']['tree27']="
	Die Verwendung der GSM Bibliothek ausdrücklich deaktivieren. Dies deaktiviert den DCC VOICE GSM Codec, kann aber helfen, wenn die Kompilierung wegen eines GSM-bezogenen Fehlers abbricht :)";
$template['install']['tree28']="
	KVIrc enthält einige ix86 Assembler-Routinen, die einige Sachen schneller ausführen *können* (dies hängt stark vom Compiler ab).<br />
	Wenn KVIrc sich wirklich langsam anfühlt, kann diese Option probiert werden ...";
$template['install']['tree29']="
	Ausdrücklich die DCC VOICE Unterstützung deaktivieren. Bei Kompilierungsproblemen in src/modules/dcc/voice.cpp kann dies helfen.<br />
	Dies deaktiviert die Sound-Unterstützung (und macht somit DCC VOICE unbrauchbar).";
$template['install']['tree30']="
	Debug Kram ... Aktiviert 'memory allocation profiling' (nicht benutzen :))";
$template['install']['tree31']="
	Aktiviert malloc()-Speicherprüfung. Gibt eine schöne Nachricht aus, wenn das System keinen Speicher mehr hat ... <br />
	Es kann keinen neuen Arbeitsspeicher kaufen, aber zumindest darauf hinweisen, dass das System keinen Speicher mehr zur Verfügung hat und es kein Fehler von KVIrc ist.<br />
	Eigentlich gibt es wohl keinen Grund, dies zu aktivieren.";
$template['install']['tree32']="
	Die Revisionsnummer manuell setzen, wenn Subversion nicht auf dem System gefunden werden kann.<br />
	Dies ist meistens unter Windows nützlich.";
$template['install']['tree33']="Pizza zum Essen :)";
$template['install']['tree34']="Bier zum Chatten :)";
$template['install']['text31']="
	Das CMake Build System bietet auch einen interaktiven Modus an, um alle Einstellungen vor dem Kompilieren vorzunehmen.<br >
	Auch hier unterstützen wir das Erstellen \"außerhalb-der-Quellen\": Alles erstellen, ohne das Quellverzeichnis zu verunreinigen.";
$template['install']['text32']="
	Jetzt sind Sie im interaktiven Modus, folgen Sie den Anweisungen auf dem Bildschirm, um die Kompilierumgebung zu erstellen.";
$template['install']['text33']="Dieser Schritt ist einfach :)<br />Finger kreuzen und folgendes ausführen";
$template['install']['text34']="
	Wenn make nicht GNU make ist (z. B. unter FreeBSD), sollte stattdessen \"gmake\" verwendet werden.<br />
	Die Kompilierung kann zwischen 3-4 Minuten und enigen Stunden dauern, je nach Computer und dessen Auslastung.<br />
	Wenn es eine langsame CPU ist, aber ein paar davon zur Verfügung stehen, kann distcc (verteiltes Kompilieren) eine Überlegung wert sein.</p>
	<p>Wenn das Kompilieren erfolgreich beendet ist, diesen Befehl ausführen";
$template['install']['text35']="
	Genau wie oben: \"gmake install\", falls make kein GNU make ist.</p>
	<p>Dies wird das ausführbare Programm nach /usr/local/bin installieren (falls nichts anderes angegeben wurde bei -DCMAKE_INSTALL_PREFIX), die Bibliotheken nach /usr/local/lib (wenn kein -DLIB_SUFFIX angegeben) und die gemeinsam genutzen Daten nach /usr/local/share/kvirc.</p>
	<p>Bitte sicherstellen, dass /usr/local/lib in /etc/ld.so.conf enthalten ist; wenn nicht, dort eintragen und dies ausführen";
$template['install']['text36']="
	Bei KDE-Unterstützung kann es sein, dass die Installation alle Dateien unterhalb von \$KDEDIR installiert hat, anstatt unter /usr/local.<br />
	Dies ist ok, da KDE seine Bibliotheksverzeichnisse bereits in /etc/ld.so.conf benötigt";
$template['install']['text37']="
	Für MacOS X gibt es eine detailierte Kompilierungs- und Installationsanweisung im Verzeichnis doc/. Sie heißt INSTALL-MacOS.txt";
$template['install']['text38']="
	Für Win32-Systeme gibt es eine ausführliche Kompilierungs- und Installationsanweisung im Verzeichnis doc/. Sie heißt INSTALL-Win32.txt";
$template['install']['text39']="
	CMake unterstützt das Argument DESTDIR.<br />
	Wenn ein Paket für die eigene Distribution erstellt werden soll, wird dieses  \"make install\" angegeben: Die installierten Dateien werden in diesen Pfad geschrieben.<br />
	Die Syntax lautet";
$template['install']['text40']="
	Nach diesem Schritt einfach den Regeln der jeweiligen Distribution folgen, um das Paket zu erstellen.</p>
	<p>Alternativ kann die experimentelle CPack-Unterstützung probiert werden, die in CMakeLists.txt enthalten ist: in diesem Fall bitte die CPack-Dokumentation konsultieren.";
$template['install']['text41']="Das war's, Leute.";
/* install.php end */

/* license.php start */
$template['license']['title']="Die KVIrc Lizenz";
$template['license']['text']="KVIrc ist freie Software: Es wird unter einer erweiterten Version der General Public License veröffentlicht.";
$template['license']['text2']="
	Dies ist die KVIrc Irc Client Lizenz.<br />
	Sie basiert auf der GNU General Public License Version 2.<br />
	Sie beinhaltet alle Bedingungen und Abmachungen der GPL und fügt eine spezielle Ausnahme für Distributionsbeschränkungen hinzu (siehe 'Terms and Conditions', Punkt 13).<br /><br />
	Die untenstehende GPL unterliegt dem Copyright der Free Software Foundation, aber die Quelltexte, auf die sie sich bezieht, unterliegen dem Copyright von Szymon Stefanek und anderen Mitgliedern des KVIrc Entwicklungsteams.<br /><br />
	Der Quelltext aller KVIrc Versionen ist unter <a href=\"?id=releases&amp;platform=source&amp;lang=$lang\">dieser URL</a> verfügbar.<br /><br />
	Viel Spaß!";
/* license.php end */

/* mailinglist.php start */
$template['ml']['title']="öffentliche KVIrc Mailingliste";
$template['ml']['text1a']="
	Falls etwas schief läuft, Sie eine Frage oder einen Vorschlag haben oder einfach an der KVIrc-Entwicklung interessiert sind, können Sie der öffentlichen KVIrc-Mailingliste beitreten.";
$template['ml']['text1b']="
	Die Entwickler verfolgen die Mailingliste und werden so schnell wie möglich antworten.";
$template['ml']['text2']="Web-Schnittstelle";
$template['ml']['text3']="
	Die Mailingliste hat <a href=\"http://lists.omnikron.net/mailman/listinfo/kvirc/\">hier</a> ein Web-Interface.<br />
	Über dieses Interface können Sie die Liste abonnieren, das Abo kündigen und Ihre Daten verwalten.";
$template['ml']['text4']="Um per E-Mail zu abonnieren";
$template['ml']['text5']="
	Senden Sie eine leere E-Mail (leerer Hauptteil, leerer Betreff) an <a href=\"mailto:kvirc-subscribe@lists.omnikron.net\">diese Adresse</a>, von der Adresse, mit der Sie die Liste abonnieren wollen.<br />
	Nach einigen Minuten erhalten Sie eine Bestätigungsabfrage, die das weitere Vorgehen beschreibt.";
$template['ml']['text6']="Per E-Mail das Abo kündigen";
$template['ml']['text7']="Senden Sie eine leere E-Mail (Hauptteil und Betreff leer) an <a href=\"mailto:kvirc-unsubscribe@lists.omnikron.net\">diese Adresse</a>, von der Adresse aus, für die Sie das Abo kündigen möchten.<br />
	Nach einigen Minuten erhalten Sie eine Bestätigungsabfrage, die das weitere Vorgehen beschreibt.";
$template['ml']['text8']="Mailinglistenarchiv";
$template['ml']['text9']="
	Das komplette Archiv der Mailingliste ist <a href=\"http://lists.omnikron.net/pipermail/kvirc/\">hier</a> verfügbar.";
/* mailinglist.php end */

/* mirroring.php start */
$template['mirror']['title']="Das KVIrc-Projekt spiegeln";
$template['mirror']['text1']="
	Diese Seite enthält eine Schritt-für-Schritt-Anleitung, um einen FTP-Spiegel zu erstellen";
$template['mirror']['text2']="
	Das KVIrc-Projekt durch das Spiegeln der Dateien zu unterstützen ist wirklich einfach.<br />";
$template['mirror']['text3']="Vor allem werden außereuropäische FTP-Spiegel gebraucht";
$template['mirror']['title2']="Aufsetzen eines Spiegels von ftp-master.admin.kvirc.de";
$template['mirror']['tree']="Voraussetzungen";
$template['mirror']['tree1']="Einen FTP-Server";
$template['mirror']['tree2']="Einen cron-Dämon (oder vergleichbares), um den Spiegel synchron zu halten";
$template['mirror']['text4']="Einrichtungsablauf";
$template['mirror']['text5']="
	Das einrichten eines FTP-Spiegels ist wirklich einfach mit der Spiegel-Funktion des Programms";
$template['mirror']['text6']="
	Die Befehlszeile, um das komplette KVIrc-FTP-Archive zu erhalten, ist die folgende:";
$template['mirror']['text7']="Dein_FTP_Server_Hauptverzeichnis";
$template['mirror']['text8']="
	Alles was Sie machen müssen, ist,  den FTP-Server so einzurichten, dass er anonyme Verbindungen akzeptiert und cron so einstellen, dass der Spiegel alle N Stunden syncoronisiert wird.";
$template['mirror']['text9']="
	Jetzt brauchen Sie die automatische Aktualisierung.<br />
	Dies wird gewöhnlich durch den cron-Dämon geleistet und erfordert das Hinzufügen mehrerer Zeilen zur crontab.<br />
	Hier ein solches Beispiel für crontab:";
$template['mirror']['text10a']="
	Dieser Eintrag weist cron an, den Befehl";
$template['mirror']['text10b']="täglich um 6.30 auszuführen.";
$template['mirror']['text11a']="In diesem Fall würde";
$template['mirror']['text11b']="wie folgt aussehen:";
$template['mirror']['text12']="IhreDomain";
$template['mirror']['text13']="
	Zur Zeit der Seitenerstellung umfasst das komplette FTP-Archiv ca. 1,5 GB. Wenn Sie nicht den Platz für einen kompletten Spiegel haben, können Sie einen Teilspiegel errichten, indem Sie nur ausgewählte Verzeichnisse von ftp.kvirc.net spiegeln.";
$template['mirror']['text14']="
	Wenn Sie den Spiegelserver erfolgreich eingerichtet haben, schreiben Sie bitte eine E-Mail an <b>pragma at kvirc Punkt net</b> oder an die <a href=\"?id=mailinglist&amp;lang=$lang\">Mailingliste</a>, damit wir ihn auf der Hauptseite verknüpfen können.";
/* mirroring.php end */

/* news.php start */
$template['news']['title']="Nachrichtenarchiv";
$template['news']['latest']="Neueste Nachrichten";
$template['news']['error']="Fehler: Eintrag nicht gefunden.";
$template['news']['nonews']="Eintrag nicht gefunden.";
$template['news']['news']="Nachrichten";
$template['news']['readmore']="weiterlesen";
/* news.php end */

/* releases.php start */
$template['releases']['title']="Offizielle Veröffentlichungen laden";
$template['releases']['text1']="
	Hier können Sie die <b>offiziell veröffentlichten</b> Pakete von KVIrc laden.<br />
	Die offiziellen Pakete werden weniger häufig veröffentlicht, sind dafür aber die stabilsten.<br />
	Bitte wählen Sie den Typ des Pakets, dass Sie laden möchten";
$template['releases']['text2']="
	Unten ist eine Liste der verfügbaren Versionen für die ausgewählte Platform.<br />Bitte wählen Sie die Version des Pakets, die Sie laden möchten";
$template['releases']['text3']="
	Mehr als eine Paketgruppe ist für die gewählte Platform und Version verfügbar.<br /><br />Bitte wählen Sie die Gruppe aus, die Sie laden möchten";
$template['releases']['latest']="Neueste Ausgabe";
$template['releases']['older']="Ältere Ausgaben";
$template['releases']['available']="Verfügbare Orte zum Herunterladen";
/* releases.php end */

/* screen.php start */
$template['screen']['title']="Bildschirmfotos";
$template['screen']['text']="Du hast ein schönes Bildschirmfoto? Schick es an";
$template['screen']['prev']="zurück";
$template['screen']['next']="weiter";
$template['screen']['screen1']="Allgemeiner Optionsdialog";
$template['screen']['screen2']="Skript Center";	
$template['screen']['screen3']="URL plugin &amp; an object mail script";			//TODO
$template['screen']['screen4']="Mehr Dialoge";
$template['screen']['screen5']="Raum-Aufklappmenüs";
$template['screen']['screen6']="Raum-Ban &amp; -Modus Dialoge";
$template['screen']['screen7']="Hilfe und Verzeichnisbetrachter";
$template['screen']['screen8']="Verzeichnisbetrachter";
$template['screen']['screen9']="KVIrc CVS läuft glücklicherweise auf Solaris";
$template['screen']['screen10']="Fensterliste, DCC send und Benutzerlisten-Aufklappmenü";
$template['screen']['screen11']="E/A Graph, Terminal-Emulation und Avatare";
$template['screen']['screen12']="3 aktive Server-Verbindungen";
$template['screen']['screen13']="Avatare, E/A Graph und Server-Verknüpfungen";
$template['screen']['screen14']="Ja! Trauen Sie Ihren Augen! KVIrc auf Abwegen :)";
$template['screen']['screen15']="Hilfefenster und Andockobjekt";
$template['screen']['screen16']="Schickes Standardthema mit Übertragungsfenster";
$template['screen']['screen17']="Minimalistisches Thema und eines der Kontextmenüs";
$template['screen']['screen18']="
	Vier Spezialfenster: Dateiübertragungen, Protokollansicht, Terminal und freigegebene Dateien; dazu da, um ihren IRC-Alltag zu vereinfachen";
$template['screen']['screen19']="Schreiben Sie Skripte? KVIrc hat verschiedene Werkzeuge für Sie.";
$template['screen']['screen20']="Helix auf drei Servern und vielen Räumen";
$template['screen']['screen21']="Helix verbindet sich über psyBNC und eine schöne Arbeitsflächenverknüpfung mit KVIrc :D";
$template['screen']['screen22']="
	Vier Server. Beachten Sie das \"Baumansichts-Fenster\" links, das die aktivsten Räume anzeigt.";
$template['screen']['screen23']="DCC exploits funktionieren nicht mit KVIrc :)";
$template['screen']['screen24']="Ein snapshot von bongwater: es läuft seit 10 Tagen :)";
$template['screen']['screen25']="
	Ein snapshot von <a href=\"http://kvirc.virg0.org\">etherea`</a>: Time makes no sense";
$template['screen']['screen26']="Ein Bild von Xemanth^: ein 'hackish'-KVIrc auf Windows";
$template['screen']['screen27']="
	Ein snapshot von <a href=\"http://kvirc.virg0.org\">etherea`</a>: Pragma's Newsticker in action :)";
$template['screen']['screen28']="
	Ein snapshot von <a href=\"http://hellvis69.altervista.org\">HelLViS69</a>: Clonescanner arbeitet :)";
$template['screen']['screen29']="
	Das Twins-Skript und sein <a href=\"?id=addons&amp;lang=$lang&amp;version=3.2.3\">Medienspieler</a> auf 'Anomalies'. Ebenso die neue Skript-Namensraumumgebung im Alias-Editorfenster.";
$template['screen']['screen30']="
	Das SilverIRC-Thema, die Voreinstellung seit KVIrc 3.2.6 nach einer neuen Installation. Screenshot zur Verfügung gestellt von thexception";
$template['screen']['screen31']="
	SilverIRC Thema. Der Themenmanager. Screenshot zur Verfügung gestellt von thexception";
$template['screen']['screen32']="SilverIRC Thema. Der Alias-Editor. Screenshot zur Verfügung gestellt von thexception";
$template['screen']['screen33']="SilverIRC Thema. Der Ereigniseditor. Screenshot zur Verfügung gestellt von thexception";
$template['screen']['screen34']="SilverIRC Thema. Der Aufklappmenü-Editor. Screenshot zur Verfügung gestellt von thexception";
/* screen.php end */

/* scripts.php start */
$template['scripts']['title']="Skripte";
$template['scripts']['text1']="Beispielskripte liegen den Paketen und der SVN-Version bei";
$template['scripts']['text2a']="Führe";
$template['scripts']['text2b']="aus, um das Skript zu installieren. Das Standardskript sollte installiert sein unter";
$template['scripts']['script1']="
	Italienisches Skript mit autom. Raumbetreten, Kontrolle der Feststelltaste, Autovoice... Komplett über grafische Oberfläche einstellbar.";
$template['scripts']['script2']="
	SaNVirC ist ein Skript für KVIrc, dass Funktionen wie Spitznamenidentifikation, autom. Raumbetreten, Abwehr, Angriff, Bot-Verwaltung, ein Abwesend-System, etc. bietet<br /> Es wurde für IRC-Hispano-Bots geschrieben, lässt sich aber leicht an andere Server anpassen.";
$template['scripts']['script3']="
	Savaga Script ist ein Skript für Spieler mit XQF-Unterstützun, Systeminformationen, qauth...";
$template['scripts']['script4']="
	Dies ist die erste öffentliche Ausgabe dieses Skripts mit einigen Verbesserungen für die Benachrichtigungsliste. Es fügt außerdem AutoOp hinzu, AutoVoice-Funktionen, fix Op-lose Räume, etc.";
/* scripts.php end */

/* snapshots.php start */
$template['snapshots']['title']="Entwicklungs-Snapshots";
$template['snapshots']['text1']="
	Die Entwicklungs-Snapshots sind inoffizielle Pakete, die nicht regelmäßig aus dem SVN gebildet werden. Jeder Snapshot spiegelt den SVN-Stand zu einem bestimmten Datum wieder und sehr wahrscheinlich sind auch sehr aktuelle zu finden. Die Pakete sind zumindest auf ein paar Systemen getestet und die Wahrscheinlichkeit, dass sie auf ihrem System kompilieren, ist gut. Es sind auch einige Binärpakete verfügbar.";
$template['snapshots']['text2']="
	Die Quelltext-Snapshots werden freundlicherweise vom KVIrc-Entwicklungsteam zur Verfügung gestellt.<br />
	Ehre und Ruhm! :)";
$template['snapshots']['text3']="
	Um den aktuellsten Snapshot zu laden, müssen Sie in
	<a href=\"ftp://ftp.kvirc.de/pub/kvirc/snapshots/\">dem KVIrc FTP</a> oder im \"snapshots\"-Verzeichnis eines FTP-Spiegels schauen.";
/* snapshots.php end */

/* splash.php start */
$template['splash']['title']="Splashscreens";
$template['splash']['text']="Dies ist eine Zusammenstellung von Splashscreens, die KVirc in der Vergangenheit benutzt hat.";
$template['splash']['date']="Veröffentlichungsdatum";
$template['splash']['in']="Enthalten in";
/* splash.php end */

/* status.php start */
$template['status']['title']="Projektstatus";
$template['status']['text']="
	<p>Nach 9 Jahren Entwicklung ist KVIrc ein ausgereifter und voll ausgestatteter IRC-Client, ein exzellenter Begleiter für die täglichen IRC-Aktivitäten.</p>
	<p>Die aktuelle stabile Version ist <a href=\"?id=news&story=2008.10.14.16.59.1.story&dir=latest&lang=$lang\">3.4.2 \"Shiny\"</a>.
	Sie wurde am 14. Oktober 2008 veröffentlicht.

	Sie kann als Quelltext von der <a href=\"?id=download&amp;lang=$lang\">download</a>-Seite bezogen werden.</p>
	<p>Wenn Sie offizielle Veröffentlichungen suchen, schauen Sie in <a href=\"?id=releases&amp;lang=$lang\">diese Rubrik</a>, diese werden seltener veröffentlicht, sind aber die stabilsten. Wählen Sie ihre Version zwischen Linux, Windows, MacOSX oder Quelltextpaket.</p>
	<p>Snapshots befinden sich <a href=\"?id=snapshots&amp;lang=$lang\">hier</a>, während SVN <a href=\"?id=SVN&amp;lang=$lang\">hier</a> gefunden werden kann.</p>
	<p>Beachten Sie auch die <a href=\"?id=install&amp;lang=$lang\">Installationshinweise</a>, <a href=\"?id=tutorials&amp;lang=$lang\">Tutorien</a>, <a href=\"?id=translation&amp;lang=$lang\">Übersetzungen</a> und <a href=\"?id=themes&amp;lang=$lang\">Themen</a>, um eine mehr angepasste KVIrc-Version zu erhalten =)</p>";
/* status.php end */

/* svn.php start */
$template['svn']['title']="SVN auschecken";
$template['svn']['text1']="
	Vom SVN-Server kann die aktuellste KVIrc-Version geladen werden.<br />
	Wenn Subversion auf ihrem System installiert ist, brauchen Sie nur noch folgende Zeile eingeben:";
$template['svn']['text2']="
	Damit werden die KVIrc-Kernquellen heruntergeladen.<br />
	Wenn auch die Module ausgecheckt werden sollen, muss diese Zeile eingegeben werden:";
$template['svn']['text3']="
	Um das Programm zu kompilieren, in das Quellenverzeichnis wechseln:";
$template['svn']['text4']="
	und dann den <a href=\"?id=install&amp;lang=$lang\">Installationsanweisungen</a> folgen.<br />
	Die aktuellsten Installationsanweisungen für die SVN-Version stehen auch in der Datei INSTALL.<br />
	Wir versuchen SVN so \"sauber\" wie möglich zu halten, aber es kann passieren, dass die heruntergeladenen Quelltexte nicht kompiliert werden können oder dass das Programm nicht korrekt läuft.<br />
	Im SVN kann via <a href=\"https://svn.kvirc.de/kvirc/browser/\">https://svn.kvirc.de/</a> gestöbert werden";
/* svn.php end */

/* themes.php start */
$template['themes']['title']="Themen";
$template['themes']['text1']="Hier können einige schöne Themen heruntergeladen werden";
$template['themes']['text2a']="Wie kann ich ein Thema installieren";
$template['themes']['text2b1']="Das Thema herunterladen";
$template['themes']['text2b2']="Den KVIrc Themenmanager öffnen";
$template['themes']['text2b3']="Auf den \"Installiere-Thema-von-Disk\"-Knopf klicken";
$template['themes']['text2b4']="Auf das neue Thema doppelklicken";
$template['themes']['text2b5']="Viel Spaß";
$template['themes']['text3a']="Wie kann ich ein Thema erstellen";
$template['themes']['text3b1']="Es gibt eine kleine Kurzanleitung (englisch), die";
$template['themes']['text3b2']="hier";
$template['themes']['text3b3']="gefunden werden kann und eine italienische Version";
$template['themes']['text3b4']="Die englische Kurzanleitung ist auch im KVIrc-Paket enthalten";
$template['themes']['text4a']="Ich habe ein Thema erstellt. Wie kann ich es mit anderen teilen";	
$template['themes']['text4b']="Sie können es an";
$template['themes']['text4c']="senden, inklusive eines Themennamens, Beschreibung, Version, Spitzname, Homepage und E-Mail; erlaube Sie uns (oder nicht) diese auf der Homepage zu zeigen";
$template['themes']['text5']="Alle Downloads sind für eine Auflösung von 1024x768 gedacht.<br />Wenn eine 1280x1024-Version verteilt werden soll, senden sie diese einfach mit einer 1024x768 Version ein.";
$template['themes']['screenshot']="Screenshot";
$template['themes']['theme1']="Eine Augenweide, basierend auf dem Marble-Icon-Set.";
$template['themes']['theme2']="Ein klares Thema mit Crystal-Icons. Einige Icons sind dem Marble-Icon-Set entnommen.";
$template['themes']['theme3']="Ein Thema mit grünem Hintergrund.";
$template['themes']['theme4']="Ein dunkles Thema.";
$template['themes']['theme5']="Aqua, weiß, abgerundete Ecken.";
$template['themes']['theme6']="Einfach ein rosafarbenes Beispiel...";
$template['themes']['theme7']="Ein transparentes Thema, hauptsächlich für die Nutzung des KDE-Hintergrunds. Eingestellt für gute Sicht und Kontrast.";
$template['themes']['theme8']="Ein ziemlich entspanntes Thema, inspiriert durch http://www.PayneReactor.com";
$template['themes']['theme9']="Ein schönes schwarzes Thema, basierend auf dem anderen Crystall-Thema :)";
$template['themes']['theme10']="Ein weiteres dunkles Thema mit Slackware-Logo und einem schwarzen Baghira";
$template['themes']['theme11']="Ein dunkles Thema basierend auf XCrystall-black";
$template['themes']['theme12']="Pure Liebe. Pures weiß. Ein sauberes, übersichtliches Thema";
$template['themes']['theme13']="Ein gläsernes dunkles Thema";
$template['themes']['theme14']="Ein weiteres dunkles Thema";
$template['themes']['theme15']="Ein Weihnachtsthema für KVIrc";
$template['themes']['theme16']="Perversion ist eine andere Art zu leben; dunkles Thema mit wenig Gamma";
$template['themes']['theme17']="Erotica.. mh..";
$template['themes']['theme18']="Anger ist eine Variation von Erotica. Lecke Deine Lippen weiter!";
$template['themes']['theme19']="Dark Blue ist eine Abwandlung von marble. Genieße es";
$template['themes']['theme20']="Nach vielen \"dunklen\" Hintergründen ein angenehmer blauer zum leichteren Lesen";
$template['themes']['theme21']="Ein ruhiges, verschneites Weihnachtsthema";
$template['themes']['theme22']="Ein verschneiter Wald zum Entspannen beim IRC";
$template['themes']['theme23']="Ein grünes Thema mit KDE-Logo";
$template['themes']['theme24']="Sehr puristisches Thema";
$template['themes']['theme25']="Ein Thema mit leicht gelben Hintergrund, basierend auf Pure von etherea`";
$template['themes']['theme26']="Ein sonniges Sommerthema";
$template['themes']['theme27']="Ein dunkles Thema, portiert von einem mIRC-Skript";
$template['themes']['theme28']="Ein Thema, dass KVIrc wie mIRC aussehen lässt";
$template['themes']['theme29']="Ein äußerst minimalistisches Thema";
$template['themes']['theme30']="Ein Thema, welches den Geist erhellt";
$template['themes']['theme31']="Ein Thema inspiriert durch R.A. Salvatores Romane über die Drow (Dunkelelfen) und besonders Drizzt Do'Urden";
$template['themes']['theme32']="...weil die ganze Welt ein schönes Fraktal ist!";
$template['themes']['theme33']="Ein dunkleres technisch aussehendes Thema mit einfachen und beschreibenden Symbolen";
$template['themes']['theme34']="Dieses Thema wurde vom CoreZeam.org Portal erstellt";
$template['themes']['theme35']="Ein schwarz-basiertes Thema, angenehm zu sehen und zu erkennen";
$template['themes']['theme36']="Ein rosafarbenes Thema inspiriert von »Hello Kitty«";
$template['themes']['theme37']="Easy-on-eyes refreshing waterfall wallpaper... diffused with light turquoise transparency. Coherent text colors with the source of the message";
/* themes.php end */

/* tools.php start */
$template['tools']['title']="Werkzeuge";
$template['tools']['text1']="Hier sind einige KVIrc-bezoge Werkzeuge zu finden";
$template['tools']['tool1']="KVS-Syntax-Hervorhebung für Notepad++";
$template['tools']['tool2']="Ein einfaches TCL-Skript für eggdrop-Bots, damit diese auf einige CTCP-Anfragen antworten";
$template['tools']['tool3']="Ein RSS-Sydikations-TCL-Skript für eggdrop-Bots, um diese per Befehl SVN- und RSS-Feeds abrufen zu lassen.";
$template['tools']['tool4']="Ein einfaches TCL-Skript, um gettext-Übersetzungen zu prüfen und evtl. Fehler zu melden";
$template['tools']['tool5']="Ein einfaches PHP-CLI-Skript, welches KVIrc-Logs in einfachen Text wandelt, indem es Farbcodes und Kontrollzeichen entfernt";
/* tools.php end */

/* translation.php start */
$template['translation']['title']="Übersetzungen";
$template['translation']['step']="Schritt";
$template['translation']['text1']="
	Auf dieser Seite sind einige Informationen über den Status der KVIrc-Übersetzungen zusammengestellt. Um zu sehen, ob ihre Sprache unterstützt wird, schauen Sie bitte unten in die Liste.";
$template['translation']['text2']="
	Viele Leute arbeiten hart, um so viele Sprachen wie möglich zu unterstützen. Um ihnen beizutreten, müssen Sie nur ihre eigene Sprache kennen, <b>es werden keine Programmierkenntnisse benötigt.</b>";
$template['translation']['text3']="
	Alle Übersetzer <b>MÜSSEN UTF-8</b> als Kodierungsformat <b>BENUTZEN.</b> Übersetzungsdateien mit anderen Formaten werden abgelehnt.";
$template['translation']['text4']="
	Wenn Sie Interesse haben, KVIrc in eine neue Sprache zu übersetzen, finden Sie hier eine gute Kurzanleitung.<br />
	Einige Sprachen werden (fast) täglich aktualisiert, andere müssen einen neuen Bearbeiter finden. Wenn Sie helfen wollen, die aktuelle Unterstützung für ihre Sprache zu verbessern, kontaktieren Sie bitte den <b>letzten Bearbeiter,</b> welcher hier gelistet ist:";
$template['translation']['text5']="nicht gepflegt";
$template['translation']['text6a']="
	Wo wir grade bei \"nicht gepflegt\" sind: Wir ermutigen Sie, uns beim Übersetzen zu helfen.<br />
	Bei Interesse, melden Sie sich auf der";
$template['translation']['text6b']="
	an, um mit den Entwicklern in Kontakt zu treten und ihre Hilfe bei der Übersetzung anzubieten.";
$template['translation']['text7']="
	Diese kleine Schritt-für-Schritt-Anleitung beschreibt das Vorgehen, um KVIrc in eine neue Sprache zu übersetzen";
$template['translation']['text8']="Die richtigen Quellen bekommen.";
$template['translation']['text9a']="
	Als erstes wird die SVN-Version von KVIrc gebraucht. Um diese zu erhalten, folgen Sie der Anleitung auf";
$template['translation']['text9b']="Die zu übersetzenden Dateien sind in";
$template['translation']['text10']="Die Kompilierungsumgebung initialisieren";
$template['translation']['text11']="
	Wechseln Sie ins Verzeichnis mit den KVIrc-Code und folgen Sie der Dokumentation in doc/INSTALL, um mit CMake die benötigten Makefiles zu erstellen.";
$template['translation']['text12']="Den Sprachcode herausfinden";
$template['translation']['text13']="
	Es muss der Sprachcode herausgefunden werden. Normalerweise ist das eine Zeichenkette mit mindestens zwei Buchstaben und kann herausgefunden werden, indem man die Shell-Variable \$LANG prüft oder hier nachsieht";
$template['translation']['text14']="Beispiele für solche Codes sind";
$template['translation']['text15']="Liste der zu übersetzenden Meldungen generieren";
$template['translation']['text16']="
	Dieser Schritt muss nur ausgeführt werden, wenn KVIrc zum ersten mal in diese Sprache übersetzt wird. Wenn eine bestehende Übersetzung aktualisiert wird, kann direkt zu Schritt 4 übergegangen werden.<br />
	Wechseln Sie ins Kompilierverzeichnis und rufen folgenden Befehl auf, um die Meldungen zu extrahieren:";
$template['translation']['text17']="
	Es werden in den Unterverzeichnissen von Kompilierungsverzeichnis/po eine Reihe .pot-Dateien erstellt<br />
	Jede Datei gehört zu einem bestimmten Teil von KVIrc: z. B. ist die Hauptsprachdatei in Kompilierungsverzeichnis/po/core/kvirc/kvirc.pot<br />
	Erstellen Sie für jede dieser Dateien eine Kopie namens modul_xxx.po, wobei modul das KVIrc-Modul ist und xxx der Sprachcode aus Schritt 2.";
$template['translation']['text18']="
	... und so weiter für alle Module; es müssen nicht alle Dateien auf einmal übersetzt werden, aber es wird empfohlen, die Skelettdateien für alle Module anzulegen.";
$template['translation']['text19']="Die Meldungen übersetzen";
$template['translation']['text20']="
	Wenn Schritt 3 ausgeführt wurde, wurde die Datei *_xxx.po (z. B. kvirc_de.po) erstellt, wobei xxx der Sprachcode aus Schritt 2 ist.<br />
	If you jumped directly here from 2 then you need to find the existing *_xxx.po files in the kvirc/po subdirectories.<br />
	Wenn diese Datei nicht für ihre Sprache existiert, wurde wahrscheinlich Schritt 3 ausgelassan.";
$template['translation']['text21']="
	*.po-Dateien können mit einem einfachen Texteditor (welcher die UTF-8-Kodierung unterstützen <b>MUSS</b>) übersetzt werden, aber ein spezielles Übersetzungsprogramm wie z. B. lokalize für Linux/KDE oder poedit für Windows.";
$template['translation']['text22']="
	Ein Hinweis zum Format der Übersetzungsdateien:<br />
	Die *.po-Dateien enthalten eine Reihe von Zeichenketten wie die folgende:";
$template['translation']['text23a']="/Pfad/zu/den/Dateien/welche/die/Zeichenkette/enthält: Zeilennummer";
$template['translation']['text23b']="Der englische Originaltext";
$template['translation']['text23c']="Die Übersetzung kommt hierhin";
$template['translation']['text24']="
	Die <i>msgid</i> ist die originale Meldung, welche übersetzt werden soll und <i>msgstr</i> ist die Übersetzung (welche anfangs leer ist, wenn die *_xxx.po-Datei neu erstellt wurde).";
$template['translation']['text25']="
	Die msgid kann html-tags, Escape-Sequenzen wie \"\\n\" und Formatspezifikationen wie \"%s\" enthalten. Diese <b>MÜSSEN</b> mit den Tags, Escape-Sequenzen und Formatspezifikationen im msgstr übereinstimmen. Besondere Vorsicht ist bei den Formatspezifikationen (%s, %W, %Q, ...) geboten:<br />
	Diese müssen in <b>EXAKT</b> der gleichen Reihenfolge wie in der msgid verbleiben: Ein Vertauschen der Reihenfolge oder ein falscher Spezifikator wird KVIrc früher oder später abstürzen lassen.";
$template['translation']['text26']="Die Übersetzung zum Installationssystem hinzufügen";
$template['translation']['text27']="
	Nachdem einige Zeichenketten übersetzt wurden, kann versucht werden, KVIrc mit den Übersetzungen auszuführen. Wenn eine bestehende Übersetzung aktualisiert wurde, kann direkt zu Schritt 6 gesprungen werden.";
$template['translation']['text28']="
	Das Kompilierungssystem muss angewiesen werden, die neu erstellten Übersetzungsdateien einzubinden und zu kompilieren. Dies ist auch wieder nur einmal nötig. Es muss nur die Datei CMakeCache.txt (im Kompilierungsverzeichnis) gelöscht werden und CMake erneut aufgerufen werden, um die neuen Dateien einzubinden und KVIrc wie normal kompiliert werden.<br />
	Nach der Kompilierung geht's mit dem nächsten Schritt weiter.";
$template['translation']['text29']="Die Übersetzung testen";
$template['translation']['text30']="Make aufrufen und warten, bis es beendest ist.";
$template['translation']['text31']="
	Üperprüfen Sie ihre \$LANG-Variable.<br />
	Wenn ihre Übersetzung die gleiche Sprache ist, wie ihre System/Benutzerumgebung, besteht im Allgemeinen kein Grund die Sprache zu ändern.<br />
	Ansonsten müssen Sie die \$LANG-Variable an die Umgebung exportieren, wenn Sie KVIrc aufrufen.";
$template['translation']['text32']="
	KVIrc sollte dann die neue Übersetzung annehmen und benutzen.";
$template['translation']['text33']="Aktualisieren der Übersetzung, wenn die Quellen sich ändern";
$template['translation']['text34']="
	Während der Entwicklung werden neue Meldungen hinzugefügt, einige ändern sich oder werden gelöscht.<br />
	Nachdem ein \"svn update\" ausgeführt wurde, um die neusten Quellen zu erhalten, sollten Sie danach ins Kompilationsverzeichnis wechseln und diesen Befehl ausführen:";
$template['translation']['text35']="
	Dies wird die *_xxx.po-Dateien mit den neuen Meldungen aktualisieren und evtl. einige alte als entweder »fuzzy« oder ungültig (invalid) markieren.<br />
	Die ungültigen Einträge müssen neu übersetzt werden; die mit »fuzzy« markierten haben kleinere Änderungen und können wahrscheinlich in ein paar Sekunden angepasst werden.";
$template['translation']['text36']="Verschiedenes";
$template['translation']['text37']="
	Wenn Zweifel bei manchen Übersetzungen bestehen, kann geguckt werden, wie ähnliche Sätze in den KDE *.po-Dateien, oder in anderen Programmen, übersetzt wurden. Wenn weitere Hilfe benötigt wird, können Sie uns über unsere Mailingliste oder im Irc (irc://irc.freenode.net/#KVIrc) erreichen.";
$template['translation']['text38']="
	Da viele Module ihre eigene Übersetzungsdateien haben, kann der obige Ablauf für die po/modules/*-Unterverzeichnisse wiederholt werden.<br />
	Sie werden nicht gezwungen, alle Dateien auf einmal zu übersetzen; eine teilweise Übersetzung funktioniert auch.";
$template['translation']['text39']="
	Wenn Sie mit ihrer Übersetzung zufrieden sind, können Sie ihre *.po-Dateien an die KVIrc-Mailingliste schicken, um sie ins SVN aufzunehmen. Wenn Sie die Übersetzung weiterhin pflegen möchten, kann auch ein SVN-Zugang mit Schreibberechtigung gewährt werden.";
$template['translation']['text40']="Fröhlichen Übersetzen :)";
/* translation.php end */

/* tutorials.php start */
$template['tutorials']['title']="Tutorien";
$template['tutorials']['archive']="Komplettes Archiv";
$template['tutorials']['tutorial']="Tutorium";
$template['tutorials']['madeby']="erstellt von";
$template['tutorials']['old']="outdated";
$template['tutorials']['text1a']="Die Kunst des Skriptens";
$template['tutorials']['text1b']="Ein umfangreiches Skriptingtutorium";
$template['tutorials']['tree1c']="Sprachvorstellung";
$template['tutorials']['tree1d']="Schleifen, Bedingungen und Aliase";
$template['tutorials']['tree1e']="Felder (Arrays), Verzeichnisse, Objekte und Klassen";
$template['tutorials']['tree1f']="Ereignisse und Aufklappmenüs";
$template['tutorials']['tree1g']="Grafische Objekte und Layout";
$template['tutorials']['tree1h']="Die Wrapper-Klasse";
$template['tutorials']['tree1i']="Slots und Signale";
$template['tutorials']['tree1j']="unbearbeitet Ereignisse und Aktionen";
$template['tutorials']['tree1k']="Sockets und Perl";
$template['tutorials']['text2a']="Win32 KVIrc Kompilierung";
$template['tutorials']['text2b']="Ein Tutorium, um KVIrc unter Win32 zu kompilieren";
$template['tutorials']['text3a']="KVIrc Skript-Tutorium für Anfänger";
$template['tutorials']['text3b']="Eine Einführung für völlige Anfänger";
$template['tutorials']['text4a']="KVIrc-Installation unter Win32";
$template['tutorials']['text4b']="Dieses kurze Tutorium beschreibt, wie man unter Windows KVIrc installiert, sich zu einem Server verbindet und einen Raum betritt";
$template['tutorials']['dropmail']="Wenn Sie eine FAQ, Tutorium oder Anleitung zu KVIrc geschrieben haben, egal in welcher Sprache, senden Sie bitte eine E-Mail an";
$template['tutorials']['text5a']="Themen-Kurzanleitung";
$template['tutorials']['text5b']="Ein kleiner Ratgeber, um ein gutes Thema zu erstellen";
$template['tutorials']['text6a']="Installer-Modifikation unter Win32";
$template['tutorials']['text6b']="Eine Anleitung, um den Windows-Installer neu zu packen und modifizierte Themen, Standard-Skript, usw. beizupacken";
$template['tutorials']['text7a']="Registrierte Benutzer";
$template['tutorials']['text7b']="Anleitung zur Verwaltung der registrierten-Benutzer-Datenbank";
/* tutorials.php end */

/* welcome.php start */
$template['welcome']['title']="Willkommen!";
$template['welcome']['text']="
	KVIrc ist ein <a href=\"http://www.gnu.org\">freies</a> portables <acronym title=\"Internet Relay Chat\">IRC</acronym>-Anwenderprogramm, basierend auf dem großartigen <a href=\"http://www.trolltech.com\">Qt GUI Toolkit</a>.
	KVirc wird entwickelt von <a href=\"http://www.pragmaware.net\">Szymon Stefanek</a> und dem KVIrc Entwicklungsteam, mit Unterstützung von vielen IRC-\"süchtigen\" Entwicklern weltweit.";
$template['welcome']['text2']="sei Teil des Projekts!";
$template['welcome']['alttext']="Wie kann ich dem KVIrc-Projekt helfen";
/* welcome.php end */
?>
