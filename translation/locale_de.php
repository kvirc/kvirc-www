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
$template['index']['screens']="Bildschirmfotos";
$template['index']['bugtrack']="KVIrc Fehlerdatenbank";
// running kvirc
$template['index']['running']="KVIrc nutzen";
$template['index']['download']="runterladen";
$template['index']['releases']="offizielle Veröffentlichungen";
$template['index']['snapshots']="Snapshots";
$template['index']['svn']="SVN";
$template['index']['install']="Installation";
// documentation
$template['index']['docs']="Dokumentation";
$template['index']['faq']="häufig gestellte Fragen";
$template['index']['kviman']="KVIrc Handbuch";
$template['index']['tutorials']="Tutorien";
$template['index']['translations']="Übersetzungen";
// graphic suite
$template['index']['graphsuite']="Grafiken";
$template['index']['themes']="Themen";
$template['index']['splash']="Begrüßungsbildschirme";
$template['index']['banners']="Banner";
$template['index']['arts']="Kunst";
// misc
$template['index']['misc']="Diverses";
$template['index']['honor']="Ehre &amp; Ruhm";
$template['index']['scripts']="Skripte";
$template['index']['addons']="Zusätze";
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
$template['index']['quickdnl']="schnell herunterladen";
// search
$template['index']['search']="Suche";
$template['index']['go']="los";
// news
$template['index']['latestnews']="Neuigkeiten";
$template['index']['allnews']="Alle Neuheiten";
// mirrors
$template['index']['mirrors']="Spiegelserver";
$template['index']['wwwmirrors']="WWW Spiegel";
$template['index']['ftpmirrors']="FTP Spiegel";
$template['index']['mirrorstext1a']="Dem KVIrc-Projekt zu helfen, indem man Dateien spiegelt ist wirklich einfach und erwünscht; auf";
$template['index']['mirrorstext1b']="dieser Seite";
$template['index']['mirrorstext1c']="findest Du eine Schritt-für-Schritt-Anleitung, um einen www- oder ftp-Spiegelserver (oder beides) zu erstellen.";
$template['index']['mirrorstext2']="Ebenso werden aussereuropäische FTP-Server gebraucht.";
$template['index']['mirrorstitle']="www und ftp Spiegelung";
// layouts
$template['index']['oldlayout']="Alte Seitenlayouts";
$template['index']['oldsite']="alte KVIrc Seite";
$template['index']['iakkohome']="iakko's Homepage";
// help
$template['index']['helptext1a']="Wenn Du Hilfe brauchst, wende Dich an die";
$template['index']['helptext1b']="öffentliche KVIrc Mailingliste";
$template['index']['helptext1c']="oder besuche die entsprechenden IRC-Kanäle:";
// bugs
$template['index']['bugreport']="Fehlermeldung";
$template['index']['bugstext']="Fehler können in der KVIrc-Fehlerdatenbank gemeldet und eingesehen werden:";
// more docs
$template['index']['moredocs']="Mehr Dokumentation";
$template['index']['officialdocs']="offizielle KVIrc Dokumentation";
$template['index']['docsauto']="automatisch generierter Index";
// hardware, traffic and hosting donation
$template['index']['hwdonation']="Raketenantrieb";
$template['index']['hwdonationtext']="war so freundlich die Hardware zu stiften für den Betrieb von svn.kvirc.de";
$template['index']['tahdonation']="In die Luft geschoßen";
$template['index']['tahdonationtext']="finanziert Hosting und Datentransfer für svn.kvirc.de";
$template['index']['donationtextkvirc.de']="und diesen Spiegel";
// other
$template['index']['latestscreen']="neueste Screenshots";
$template['index']['footer']="Diese Seite ist am besten zu betrachten mit einem Monitor";
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
$template['addons']['title']="Zusätze";
$template['addons']['text1']="Hier kannst Du Zusatz-Skripte für KVIrc finden";
$template['addons']['text1b']="
	Jedes von diesen benötigt zumindest Version 3.2.1 (SVN Snapshot).<br />
	Bitte <b>wähle Deine Version</b> von KVIrc";
$template['addons']['text2']="Um einen Zusatz zu installieren";
$template['addons']['tree1']="<b>lade</b> den Zusatz und <b>unzip</b> es";
$template['addons']['tree2']="
	Drücke <b>CTRL+ALT+M</b>, um den Zusätze-verwalten-Dialog zu öffnen (oder öffne ihn über das Einstellungsmenü.";
$template['addons']['tree3']="Klicke auf \"<b>Zusatz installieren</b>\" auf der rechten Seite";
$template['addons']['tree4']="
	Klicke Dich zu dem Ort, an dem Du den Zusatz entpackt hast und wähle die Datei <b>install.kvs</b> aus";
$template['addons']['sorry']="Entschuldigung, es wurden keine Zusätze zu der ausgewählten KVIrc-Version gefunden";
$template['addons']['addon1']="Wechselt automatisch den away-Status nach einer Zeit der Inaktivität.";
$template['addons']['addon2']="Stellt Werkzeugleisten-Knöpfe für einige häufig benötigte Kanal-Tätigkeiten";
$template['addons']['addon3']="Zeigt Statistiken der betretenen Kanäle an";
$template['addons']['addon4']="Ein einfaches Skript, um zu wissen, wo der Computer herkommt";
$template['addons']['addon5']="Automatically enters cryption-data for your crypted objects";                    //TODO
$template['addons']['addon6']="Stellt Kurzformen und Werkzeugleistenknöpfe für EZBounce-IRC-Proxy-Befehle bereit";
$template['addons']['addon7']="Ein einfaches 1-gegen-1 Spiel";
$template['addons']['addon8']="Ein einfacher F-Server";
$template['addons']['addon9']="Ein einfaches Skript für \"lol\" und Kuss mit F3-F8 und für spaßiges Schreiben";
$template['addons']['addon10']="Ein einfaches Skript, um gespielte MP3 bekanntzugeben und Verteil-Option";
$template['addons']['addon11']="Ein netter \"Zeitvertreib\"";
$template['addons']['addon12']="Zeigt RSS-Nachrichten von verschiedenen Quellen an";
$template['addons']['addon13']="
	Erlaubt das Bewerben und eventuelle Tauschen von gerade gespielten MP3 in IRC-Kanälen und -queries";
$template['addons']['addon14']="Ein einfaches Script, um öffentliche Lektionen zu verwalten";
$template['addons']['addon15']="Implementiert einen einfachen Quiz-Bot";
$template['addons']['addon16']="Erlaubt das Senden von SMS-Nachrichten über verschiedene Web-basierte-Dienste";
$template['addons']['addon17']="Erlaubt dem Benutzer jemanden zu verwarnen, zu kicken und zu bannen, der verbotenen Wörter sagt";
$template['addons']['addon18']="Ein automatisches Op/Voice/Ban-System für Deine Kanäle (Zusatz vom Twins-Skript)";
$template['addons']['addon19']="
	Färbt Deine Texteingabe in Kanal, queries und DCC-Unterhaltungen (Zusatz vom Twins-Skript)";
$template['addons']['addon20']="Eine einfache Verzögerungsleiste mit drei verschiedenen Farben (Zusatz vom Twins-Skript)";
$template['addons']['addon21']="
	Bediene Deinen Medienspieler mit einer einfachen Benutzerschnittstelle fern, und biete anderen Benutzern Musik an (Zusatz vom Twins-Skript)";
$template['addons']['addon22']="Prüfe den letzten Host eines Benutzers";
$template['addons']['addon23']="Einfacher Icon-Set-Wechsler. Du kannst wählen zwischen alten Icons, neuen Icons mit alten Smilies oder neuen Icons";
/* addons.php end */

/* archive.php start */
$template['archive']['title']="Mailinglisten-Archiv";
$template['archive']['text']="
	Hier findest Du das Archiv der Mailingliste: Dies ist der erste Ort zum suchen, wenn Du Probleme hast.<br />
	Du kannst das Archive durchblättern, oder das Suchformular unten benutzen.";
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
	Sechs farbenfrohe Variationen eines netten Comix-artigen Themas für diese Begrüßungsbildschirm-Ersetzungen. Speichere einfach das gewünschte Bild als \$HOME/.kvirc/pics/kvi_splash.png. Du kannst diese netten Bilder auch als Banner nutzen, oder als Startpunkt für Deine eigene Kunst.
	";
$template['arts']['desc2']="Eine weitere Sichtweise von \"Marmalade\" von suspiria :)";
$template['arts']['desc3']="Häh?";
$template['arts']['desc4']="Ein Startpunkt für einen Avatar.";
$template['arts']['desc6']="Sie benutzt dies als Begrüßungsbildschirm... :)";
/* arts.php end */

/* banners.php start */
$template['banners']['title']="Banner";
$template['banners']['text1']="
	Dies ist eine Sammlung verschiedener KVIrc-Banner, erstellt durch unterschiedliche Künstler; speichere sie einfach und nutze sie auf Deiner eigenen Seite :)";
$template['banners']['text2']="Schicke Deine Banners an";
$template['banners']['bannerby']="Banner von";
/* banners.php end */

/* contribute.php start */
$template['contribute']['title']="Beteilige Dich";
$template['contribute']['text1']="
	Das KVIrc-Projekt ist in mehrenen Arten offen für Beiträge. Du kannst Dich bei verschiedenen Aufgaben beteiligen, die unterschiedliche Anforderungen anProgrammierkenntnissen voraussetzen (von \"fast keine\" bis \"Guru\").";
$template['contribute']['text2']="Quelltext beisteuern";
$template['contribute']['text3']="
	Die Hauptaufgabe ist offensichtlich Quellcode schreiben. Die Entwickler des KVIrc-Kerns und externer Module benötigen eine vernünfitige Kenntnis von C++.<br />
	Die grafische Benutzerschnittstelle von KVIrc benutzt die Qt-Bibliothek (und schließlich KDE), so dass einige Kenntnisse dieser Bibliotheken auch gebraucht werden könnte. Es gibt viele Interessensgebiete im Quelltext: Netzwerkbetrieb, Verschlüsselung, Datenkompression, Sprach-Analysierer ...<br />
	Jede Stufe des Beitrags ist wichtig: Vom zweizeiligen Patch bis zu Kernfunktionen und Wartung.";
$template['contribute']['text4']="Kunstwerke beisteuern";
$template['contribute']['text5']="
	Das \"V\" in KVIrc steht für \"visuell\". Grafiken helfen den Benutzern das Programm zu benutzen und die vielen Funktionen, die das Programm bietet, wieder zu erkennen. Wir brauchen Icons, Dialog-Bilder, Begrüßungsbildschirme, Logos, ein Maskottchen... Eine gute Idee ist es, ein komplettes Thema zu implementieren...";
$template['contribute']['text6']="Dokumentation beisteuern";
$template['contribute']['text7']="
	Dokumentation is genauso wichtig wie das Programm selbst.<br />
	Viele KVIrc-Merkmale sind für einen durchschnittlichen Benutzer nicht sichtbar, weil sie in keinem öffentlich zugänglichen Dokument erwähnt werden.<br />
	Dokumentation beitragen heißt: häufig gestellte Fragen zusammentragen, und diese in einer les- und durchsuchbaren Form zusammenstellen, Dokumentation über besondere Merkmale schreiben, Tutorien schreiben.<br />
	Es wird auch eine gutgeschriebene \"Einführung in KVIrc für Anfänger\" gebraucht (dies kann auch eine Art Einführung in IRC sein).";
$template['contribute']['text8']="KVIrc Meldungen übersetzen";
$template['contribute']['text9']="
	KVIrc ist eine Text-basierte Anwendung: Die Schnittstellenbeschriftungen müssen in so viele Sprachen wie möglich übersetzt werden. Du brauchst nur Kenntnisse in einer nicht-englischen Sprache: Das Übersetzungsschema ist gettext-basiert und benötigt kaum Programmierwissen.";
$template['contribute']['text10']="Dokumentation übersetzen";
$template['contribute']['text11']="
	Der größte Teil der Dokumentation sollte in verschiedene Sprachen übersetzt werden, so dass jeder die \"Kern\"-Merkmale von KVIrc verstehen kann.<br />
	Dies benötigt weit weniger Programmierkenntnisse als Meldungen zu übersetzen.";
$template['contribute']['text12']="Website Verwaltung/Entwicklung";
$template['contribute']['text13']="
	Die Website muss erweitert und gewartet werden.<br />
	Für diese Aufgabe brauchst Du Kenntnisse in php, xhtml, css und einige Ideen :)";
$template['contribute']['text14']="Spiegelung";
$template['contribute']['text15']="
	FTP- und WWW-Spiegel sind immer willkommen: Wir bruachen momentan Spiegel ausserhalb Europas.<br />
	Die Website ist in php geschrieben und wird via SVN aktualisiert, daher muss ein Spiegelserver php-fähig sein und einen SVN-Client installiert haben.<br />
	Das FTP-Archiv umfasst ca. 1.2GB; eine teilweise Spiegelung kann ebenso arrangiert werden.<br />
	Eine detailierte Anleitung um einen WWW- oder FTP-SPiegelserver einzurichten ist <a href0\"?id=mirroring&amp;lang=$lang\">hier</a> verfügbar.";
$template['contribute']['text16']="Öffentlichkeitsarbeit";
$template['contribute']['text17']="
	Wir brauchen Leute, die über KVIrc sprechen, Artikel, Beschreibungen, Kritiken schreiben, nach Beitragenden suchen ...";
$template['contribute']['text18']="Wen kontaktieren";
$template['contribute']['text19']="
	Wenn Du Dich entschieden hast, mitzuwirken, kannst Du Dein Angebot an <a href=\"mailto:pragma [at] kvirc [dot] net\">Pragma</a> senden.<br />
	Ein weiterer Platz um Deine Bereitschaft anzukündigen, ist der <a href=\"irc://chat.ircnet.org/#kvirc\">#KVIrc</a>-IRC-Kanal bei IRCNet, <a href=\"irc://irc.azzura.org/#KVIrc.net\">#KVIrc.net</a> bei Azzura oder <a href=\"irc://irc.freenode.org/'KVirc\">#KVIrc</a> bei FreeNode (früher bekannt als OpenProjects network).";
/* contribute.php end */

/* donate.php start */
$template['donate']['title']="Unterstütze das KVIrc-Projekt mit Geldspenden";
$template['donate']['text1']="
	KVIrc ist kostenlos verfügbar und wird immer frei verfügbar bleiben: es ist keine Zahlug erforderlich um es zu laden, zu benutzen, zu verändern und den Quelltext weiterzugeben.";
$template['donate']['text2']="
	Die meisten materiellen Ressourcen, von denen KVIrc lebt (wie www- oder ftp-Server), werden von den KVIrc-Team-Mitgliedern kostenlos zur Verfügung gestellt. Auf der anderen Seite benötigt das Projekt eine immense Zahl an Programmierstunden, sowie Sachen, für die gezahlt werden muss, wie Computeraufrüstungen, Domain-Namenregistration, Hosting-Kosten, Bücher... Wenn Dir KVIrc gefällt, denke bitte darüber nach, das Projekt finanziell zu unterstützen: Du kannst zum Spenden PayPal benutzen.";
$template['donate']['text3']="
	Der Knopf unten bringt Dich zu PayPal, wo Du den Betrag und die Währung bestimmen kannst. Du kannst jeden Betrag spenden, alles ist willkommen. Wenn Du PayPal nie vorher benutzt hast, wird Dich PayPal wegen Deiner Kreditkarte, Dein Land, Adresse und Deiner Telefonnummer fragen. Diese Informationen werden von PayPal benötigt, um die Geldspende abzuwickeln &ndash sie werden weder vom KVIrc-Team benötigt, ncoh sind sie diesem sichtbar.";
$template['donate']['text4']="
	Nachdem Du Deine Spende gemacht hast, wirst Du per E-Mail kontaktiert und gefragt, ob Deine Spende auf dieser Seite gelistet werden kann. Wenn der gespendete Betrag verbraucht ist, wird die Verwendung neben dem Spender und dem Betrag gelistet.";
$template['donate']['text5']="Danke! :)";
$template['donate']['title2']="Neueste Spenden";
$template['donate']['donation']="gespendet von";
$template['donate']['alttext']="Spende an das KVIrc-Projekt via PayPal";
/* donate.php end */

/* download.php start */
$template['download']['title']="Lade KVIrc";
$template['download']['text1']="Du kannst KVIrc auf drei Arten erhalten:";
$template['download']['text2']="Offiziell veröffentlichte Pakete";
$template['download']['text3']="
	Die offiziellen Pakete werden weniger häufig veröffentlicht, sind aber die stabilsten. Jedes offizielle Quelltext-Paket ist gut getestet und wird wahrscheinlich auf Deinem System kompilieren. Du hast auch mehrere Möglichkeiten, ein zu Deinem System passendes Binärpaket zu finden. Die hier abrufbaren hüfig-gestellten-Fragen und die Dokumentation beziehen sich auf diese Pakete.";
$template['download']['text4']="Entwicklungs-Snapshots";
$template['download']['text5']="
	Die Snapshots des Quelltextes sind inoffizielle Pakete, gewonnen aus dem SVN auf einer nicht regelmäßigen Basis. Jeder Snapshot spiegelt den SVN-Status zu einer bestimmten Revision wider und gewöhnlich findest Du eine aktuelle. Diese Pakete wurden zumindest auf ein paar Systemen getestet und eine hohe Wahrscheinlichkeit, dass sie auch auf Deinem System kopilieren. Es sind auch einige Binärpakete verfügbar.";
$template['download']['text6']="Aktuelle Quellen aus dem SVN";
$template['download']['text7']="
	Den aktuellsten Quelltext kann über das SVN-System geladen werden. Wir versuchen SVN so \"sauber\" wie möglich zu halten, aber trotzdem kann nicht garantiert werden, dass der Quelltext kompiliert. Der SVN-Methode stellt nur den Quelltext zur Verfügung, es gibt keine Binärpakete.";
/* download.php end */

/* faq.php start */
$template['faq']['title']="Häufig gestellte Fragen";
$template['faq']['text1a']="Wie betrete ich einen Kanal";
$template['faq']['text1b']="Tippe \"/join #Kanalname\"";
$template['faq']['text2a']="Ich kann KVIrc nicht kompilieren (jede Version)";
$template['faq']['text2b']="
	LIES die Anweisungen in der Datei INSTALL; die meisten üblichen Probleme können gelöst werden, indem man die Umgebungsvariablen richtig setzt und mit den Optionen von ./configure \"spielt\". Wenn Dir die Datei INSTALL nicht hilft, kannst Du versuchen, #kvirc bei IRCNet oder bei FreeNode zu betreten: Hier sind viele erfahrene Benutzer, die versuchen können, Dir zu helfen. Wenn Du es immer noch nicht lösen konntest, schreibe Dein Problem/Fehler an die KVIrc-Mailingliste";
$template['faq']['text3a']="Ich kann mich nicht zu einem IPv6-Server verbinden";
$template['faq']['text3b1']="
	Zuerst stelle sicher, dass IPv6 bei Deinem System korrekt eingerichtet ist.<br />
	Kannst Du andere IPv6-Maschinen anpingen via ping6";
$template['faq']['text3b2']="
	Ist IPv6-Unterstützung aktiviert in KVIrc?<br />
	Um dies herauszufinden, gib";
$template['faq']['text3b3']="
	auf der KVIrc-Kommandozeile ein. Du solltest eine komma-separierte Liste mit den einkompilierten Merkmalen erhalten. Wenn die Liste \"IPv6\" enthält, ist die Unterstützung einkompiliert, ansonsten musst Du die Kompilierungsphase überprüfen und rausfinden, was falsch läuft.
	Du kannst /server -i &lt;servername&gt; verwenden, um zu einem IPv6-Server zu verbinden.
	Wenn Du andere IPv6-Systeme anpingen kannst, die IPv6-Unterstützun einkompiliert wurde ud Du ncoh immer nicht zu einem *existierenden* IPv6-Server verbinden kann, hast Du vielleicht einen FEhler im Programm entdeckt :) Melde ihn";
$template['faq']['text4a']="Wie betrete ich Kanäle automatisch";
$template['faq']['text4b1']="
	Es gibt viele Wege die zu tun.
	Zum Beispiel";
$template['faq']['text4b2']="
	Wähle \"Skripte/Ereignisse bearbeiten\"aus dem KVIrc-Menü.<br />
	Suche \"OnIRC\" in der linken Leiste des aufgegangenen Fensters.<br />
	Rechtsklick auf diesen Eintrag und wähle \"Neuer Handler\".<br />
	Ein \"Standard\"-Handler wird erstellt. Auf der rechten Seite schreib:<br />
	join #kvirc<br />
	join #kde-users<br />
	join #somechannel<br />
	....<br />
	Jetzt klicke auf OK und fertig: Du hast gerade einen Handler für ein Ereignis erstellt.<br />
	Verbinde Dich erneut zu einem Server und KVIrc wird die ausgewählten Kanäle automatisch betreten.";
$template['faq']['text4b3']="
	Eine weitere Möglichkeit (besser, wenn Du mehrere Server nutzt) ist, zu den Server-Optionen zu gehen und dort auf den Knopf 'Erweitert' zu klicken.<br />
	Dort ist ein Server-spezifisches \"Beim Verbinden\"-Ereignis.";
$template['faq']['text5a']="Unter Windows scheint KVIrc manchmal zu verlangsamen";
$template['faq']['text5b']="
	Dies ist gewöhnlich verursacht durch große Grafiken; versuche einige grafische Effekte wie \"Falsche Transparenz\" zu deaktivieren. Ich habe herausgefunden, dass es fast immer bei 32-bit Farbtiefe auftritt. Ein Wechsel zu 16 oder 24 bit kann ebenso helfen.";
$template['faq']['text6a']="Wie kann ich zu einem SSL-fähigen IRC-Server verbinden";
$template['faq']['text6b1']="Nutze";
$template['faq']['text6b2']="Es sollte auch über IPv6 funktionieren.<br />
	Wenn es nicht funktioniert, ist es möglich, dass keine SSL-Unterstützung einkompiliert wurde.<br />
	Um dies herauszufinden, tippe";
$template['faq']['text6b3']="in die KVIrc-Kommandozeile. Wenn \"SSL\" nicht in der Liste enthalten ist, überprüfe die Kompilierungsphase";
$template['faq']['text7a']="Wie kann ich DCC über SSL nutzen";
$template['faq']['text7b']="sollte funktionieren";
$template['faq']['text8a']="Brauche ich ein SSL-Zertifikat";
$template['faq']['text8b']="Nein, Du solltest keins brauchen, aber Du kannst es nutzen, wenn Du willst.";
$template['faq']['text9a']="Wie erstelle ich ein SSL-Zertifikat";
$template['faq']['text9b']="
	Ein selbst-signiertes Test-Zertifikat kann durch das CA.pl Perl-Skript erstellt werden, welches in der OpenSSL-Distribution enthalten ist. Es wird in etwa sein wie";
$template['faq']['text10a']="Ich kann KVIrc nicht dazu bringern, mein SSL-Zertifikat in DCC zu nutzen";
$template['faq']['text10b']="
	Das SSL-Protokoll fordert von der \"Client\"-Seite nicht, dass Zertifikat zu senden; es wird nur verwendet, wenn die \"Server\"-Seite es anfordert (dies ist nicht der Fall bei KVIrc).<br />
	Die Server-Seite kann ein Zertifikat haben, und Du kannst es auf der SSL-Optionen-Seite einstellen.<br />
	Wenn Dein privater Schlüssel im Zertifikat gespeichert ist, wähle den gleichen Dateinamen bei SSL-Zertifikat und SSL-Schlüssel.<br />
	Denke daran, dass Passwort anzugeben, falls nötig";
$template['faq']['text11a']="Unter Windows stürzt KVirc ab, wenn ein Zertifikat benutzt wird";
$template['faq']['text11b']="
	Dies ist wahrscheinlich ein Fehler der SSL-dll, welche mit der Windowsversion von KVIrc ausgeliefert wird.<br />
	Du kannst es mit einer anderen Version dieser dll versuchen";
$template['faq']['text12a']="/me unterstützt das '\$'-Zeichen nicht";
$template['faq']['text12b']="Dies ist KEIN Fehler &ndash dies ist eine Besonderheit. KVIrc unterstützt (und ersetzt) Variablen in allen Befehlen. Du kannst das $-Zeichen maskieren, indem Du einen Rückwärtsschrägstrich benutzt: \"/me hat \\\$100 verdient\" funktioniert";
$template['faq']['text13a']="/me unterstützt '&quot;' (doppelte Anführungszeichen) nicht";
$template['faq']['text13b']="
	Dies ist KEIN Fehler &ndash dies ist eine Besonderheit. Bei einer in doppelten Anführungszeichen eingeschlossene Zeichenfolge werden die Leerzeichen erhalten, während bei anderen Zeichenketten die Leerzeichen bereinigt werden. Dies ist gültig für JEDEN Befehl.<br />
	Du kannst das &quot;-Zeichen maskieren, indem Du einen Rückwärtsschrägstrich benutzt: /me fühlt sich ein wenig \\\"mäh\\\"";
$template['faq']['text14a']="/me kann kein ';' enthalten";
$template['faq']['text14b']="
	Dies ist KEIN Fehler &ndash dies ist eine Besonderheit. KVIrc unterstützt mehrere Befehle in einer Zeile und benutzt ';' als Befehlstrenner. Du kannst das ';' mit einem Rückwärtsschrägstrich maskieren: /me hat hunger \;)";
$template['faq']['text15a']="Ich kann das aufklappende Kanal-Menü nicht mehr sehen";
$template['faq']['text15b']="Wenn etwas schiefgegangen ist bei den KVIrc-Einstellungen (ein Absturz wenn die Einstellungen gespeichert werden?), oder wenn Du die Skript-Optionen durcheinander gebracht hast und Du zum Originalverhalten (Standard-Skript) zurückkehren möchtest, kannst Du \"Skripte/Standardskript wiederherstellen\" im KVIrc Hauptmenü auswählen.<br />
	(<b>ACHTUNG:</b> Dies löscht alle Skript-Veränderungen von Dir!)";
$template['faq']['text16a']="Ich erhalte Kompilierfehler wie diesen:<br />
	&nbsp; &nbsp; In file [somefile]:[someline] internal error:<br />
	&nbsp; &nbsp; Segmentation fault<br />
	&nbsp; &nbsp; Please submit a full bug report,<br />
	&nbsp; &nbsp; with preprocessed source if appropriate.<br />
	&nbsp; &nbsp; See &lt;URL:http:...";
$template['faq']['text16b1']="Dieser Fehler kann verschiedene Ursachen haben";
$template['faq']['text16b1a']="
	Ein Kompiliererfehler: mein GCC 3.2 20020903 (Standard bei RH 8.0) gibt täglich 5-6 von diesen Fehlern aus. Normalerweise lassen die sich einfach lösen, indem man das Kommando \"make\"  erneut aufruft. <br />
	Wenn dies nicht hilft, oder es ziemlich häufig auftritt und es störend ist, kannst Du Deinen Kompilierer aktualisieren";
$template['faq']['text16b1b']="
	Eine Speicherverfälschung: Dies ist wirklich häufig. Eine der Speicherbänke gibt manchmal wahllos Bytes zurück. Normalerweise tritt das Problem unter hoher Systemlast auf (z. B. Kern, KDE oder KVIrc Kompilation). Du kannst auf diesen Fehler testen, indem Du verschiedene RAM-Module testest (oder eins nach dem anderen ausbaust, um das defelte zu finden). Du kannst auch das Programm memtest testen und ein Kernel-Patch kann das kaputte Speichermodul ignorieren (wird permanent einer Scheinaufgabe des Kernels zugewiesen).<br />
	Diese Werkzeuge kasnt Du mit Deiner Lieblingssuchmaschine im Web finden";
$template['faq']['text16b1c']="
	Ein tieferes Hardware-Problem: Wenn das Aktualisieren des Kompilierers und das tauschen des Speichers keine Verbesserung brachten, *kann* es ein tiefers Hardware-Problem sein: Bus-Fehler, fehlerhafter IDE- (oder SCSI-) Controller, oder sogar ein fehlerhafter Prozessor...";
$template['faq']['text17a']="KVIrc stürzt ab, wenn eine URL im Ausgabe-Fenster angezeigt wird";
$template['faq']['text17b']="
	Dies kann vom URL-Modul kommen, die Ursachen werden untersucht.<br /> Versuche";
$template['faq']['text18a']="KVIrc stürzt ab, wenn die Mehrzeileneingabe geöffnet wird (oder im Skript-Center)";
$template['faq']['text18b']="
	Wenn Du eine neue Version von KVIrc über eine alte installiert hast, oder wenn Du die Qt-Bibliotheken, gegen die KVIrc gelinked ist, getauscht hast, dann kann damit ein kaputter Mehrzeileneditor verursacht werden.<br />
	Versuche, \$HOME/.kvircssexeditorrc und starte KVIrc erneut";
/* faq.php end */

/* features.php start */
$template['features']['title']="Merkmale";
$template['features']['text1']="
	Hmmm... alle KVIrc-Merkmale auflisten?<br />
	Nun... warum nicht?<br />
	Hier sind einige Kernaussagen.";
$template['features']['tree1']="Benutzerschnittstelle";
$template['features']['tree1a']="komplette grafische Konfiguration";
$template['features']['tree1b']="MDI floatable windows";                      //TODO
$template['features']['tree1c']="eingebauter Hilfe-Betrachter";
$template['features']['tree1d']="Unterstützung für Themen (komplett konfigurierbar über eine grafische Schnittstelle oder via Skripte)";
$template['features']['tree1e']="Pseudo-transparency support (up to the desktop on KDE)";
$template['features']['tree1f']="Werkzeugleiste via \"Drag &amp; Drop\" veränderbar";
$template['features']['tree1g']="Aktivitätsbenachrichtigungs-Popup";
$template['features']['tree1h']="Statusleiste mit Unterstützung für Minianwendungen";
$template['features']['tree1i']="Markierung für ungelesenen Text";
$template['features']['tree1j']="Übersetzung in 14 Sprachen";
$template['features']['tree2']="Netzwerk";
$template['features']['tree2a']="Proxy-Unterstützung (SOCKSv4, SOCKSv5, HTTP)";
$template['features']['tree2b']="Volle IPv6-Unterstützung (auch für DCC-Übertragungen)";
$template['features']['tree2c']="SSL-Unterstützung (auch über IPv6)";
$template['features']['tree2d']="Unterstützun für Micryption";
$template['features']['tree3']="Kern";
$template['features']['tree3a']="
	Modulare Architektur: selten gebrauchte Merkmale sind in externen Modulen und werden nur bei Bedarf geladen";
$template['features']['tree3b']="Erweiterbarkeit: Eine große Programmierschnittstelle, um Erweiterungsmodule zu schreiben";
$template['features']['tree3c']="UNICODE-Unterstützung";
$template['features']['tree4']="IRC";
$template['features']['tree4a']="Verbindungen zu mehreren Servern";
$template['features']['tree4b']="Benachrichtigungslisten (ja, WATCH wird unterstützt)";
$template['features']['tree4c']="Ignorierlisten";
$template['features']['tree4d']="Registrierte-Benutzer-Datenbank";
$template['features']['tree4e']="Lag meter";
$template['features']['tree4f']="Konfigurierbare Protokollierung";
$template['features']['tree4g']="Unterstützung fürStandard-DCC-CHAT und -SEND (mit Wiederaufnahme)";
$template['features']['tree4h']="Erweiterte DCC-Arten: VOICE, RSEND, GET, RECV";
$template['features']['tree4i']="DCC CHAT über SSL";
$template['features']['tree4j']="DCC Bandbreitenlimitierung (mit der Fähigkeit,es  \"spontan\" zu setzen)";
$template['features']['tree5']="Skripte";
$template['features']['tree5a']="Eingebauter Skriptsprachen-Interpreter";
$template['features']['tree5a1']="Skalare, Felder (arrays) und hashes...";
$template['features']['tree5a2']="Aliase";
$template['features']['tree5a3']="Popups";
$template['features']['tree5a4']="Ereignisse";
$template['features']['tree5a5']="Skriptfähige Werkzeugleisten";
$template['features']['tree5a6']="Perl-Unterstützung";
$template['features']['tree5a7']="Fähigkeit, Skripte zu übersetzen (im Sinne der tr()-Funktion)";
$template['features']['tree5b']="
	Unterstützung für Objekte in der Skriptsprache: Ja, jetzt kannst Du <acronym title=\"Objektorientierte Programmierung\">OOP</acronym> verwenden";
$template['features']['text2']="Hmmm...Ich hoffe, das reicht, um Dich neugierig zu machen :D";
/* features.php end */

/* help.php start */
$template['help']['title']="Hilfe gewünscht";
$template['help']['text1']="
	Die erste Stelle, wo Du vorbeischauen solltest, wenn Du ein Problem hast, ist die KVIrc Mailingliste";
$template['help']['text2']="
	Wenn etwas falsch läuft, Du Fragen oder Anregungen hast, oder einfach an der KVIrc-Entwicklung interessiert bist, abonniere die";
$template['help']['text3']="
	Die Entwickler verfolgen die Mailingliste und werde Fragen so schnell wie möglich beantworten.";
$template['help']['text4a']="Der offizielle KVIrc-Support-Raum ist im";
$template['help']['text4b']="Freenode Netzwerk";
$template['help']['text4c']="und der Kanal heißt offensichtlich";
$template['help']['text4d']="Der offizielle italienische Kanal ist";
$template['help']['text4e']="bei dem";
$template['help']['text4f']="Azzurra Netzwerk";
$template['help']['text4g']="Du kannst auch etwas Regung finden im";
$template['help']['text4h']="IRCNet Netzwerk";
$template['help']['text4i']="im";
$template['help']['text4j']="Kanal :)";
$template['help']['text5']="Fehler können gemeldet und eingesehen werden unter";
$template['help']['text6']="
	Für Anregungen, Neuigkeiten, Verbesserungen oder sonstiges in Bezug zur Web-Site, schicke eine E-Mail an";
$template['help']['text7']="
	Für jede Art von Hilfe in Grafik, Übersetzungen und Dokumentation kontaktiere bitte";
/* help.php end */

/* honor.php start */
$template['honor']['title']="Ehre und Ruhm";
$template['honor']['text1']="Dies ist eine Liste der Leute, die zu KVIrc beigetragen haben.";
$template['honor']['text2']="Diese Liste ist bei weitem nicht vollständig. Einige mehr oder weniger \"anonyme\" Personen haben ihre Zeit, Augen, Bandbreite und Gehirn bei diesem Projekt verbraucht. Wenn Du einer von ihnen bist, zögere nicht, uns zu kontaktieren";
$template['honor']['text3']="Wenn Dein Avatar nicht richtig erscheint oder falsch ist, schicke mir das richtige Bild. Wenn Du einen Fehler, eine kaputte Verknüpfung oder eine fehlende Seite findest, schicke bitte eine E-Mail an";
$template['honor']['made1']="Der \"Schöpfer\" von KVIrc. Kopfarbeit, Handarbeit, eyes consuming und Kaffee trinken";	//TODO
$template['honor']['quote1']="Ich prüf's... lass es mich checken...&quot;<br />&quot;Ich reparier's morgen...&quot;<br />&quot;KVIrc: Der Client, der keinen Kaffee kochen kann";
$template['honor']['made2']="Webmaster, Fehlerjäger, Schnappschuss-Verwalter, Supporter, und der Mann, der KVIrc IPv6 gegeben hat.";
$template['honor']['made3']="Dokumentation, Fehlersuche, Öffentlichkeitsarbeit";
$template['honor']['quote3']="Ich habe keine Ahnung, wovon Du sprichst... oder warum Du es haben willst :)";
$template['honor']['made4']="Fehlersuche, Plugin-Entwicklung, Fehlerbeseitigung, Windows-Portierung und Schnappschüsse";
$template['honor']['quote4']="&lt;YaP&gt; Warum hast Du nicht eine Funktion MachAllesSelber geschrieben? :)&quot;<br />&quot;&lt;Pragma&gt; Eine wunderbar rekursive Funktion :)&quot;<br />&quot;&lt;YaP&gt; Verdammt... Ich wusste es eheheheheh";
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
$template['honor']['made13']="Ersteller der alten Website, einige Vorschläge, Teetrinker (Danke Szymon, Dein Tee ist großartig ;) ) und.. warum bin ich hier gelistet?";
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
$template['honor']['quote27']="Fallschirmsprigen ist fast so aufregend wie KVIrc-Skripte schreiben!&quot;<br />&quot;Pragma: kannst Du diese Funktionen hinzufügen: \$rubbelmeinenRuecken() and \$machKaffee()?";
$template['honor']['made28']="Fehlerbehebung und Verbesserungen.";
$template['honor']['quote28']="Ich kann *wirklich* gut Sachen erledigen, wenn ich keine AHnung habe, was ich gerade tue";
$template['honor']['made29']="Verbesserungen von KVIrc und meiner Linux-Kenntnisse. Ich mag an ihn als einen 'seelischen Führer' denken... :D";
$template['honor']['made30']="Der KDE-Mann! Stellt sicher, dass KVIrc einen Grund hat, das K am Anfang des Namens zu haben";
$template['honor']['quote30']="Kann ich heute bitte aus KVIrc eine reine KDE-Applikation machen?? Bitteee...";
$template['honor']['made31']="Einige \"kleine\" Stücke Quelltext.";
$template['honor']['quote32']="&lt;Error403&gt;Number1: Ich stellte mir vor, dass Du verrückt aussiehst :)&quot;<br />&quot;&lt;NumeroUno&gt; Ich war betrunken";
$template['honor']['made33']="Der \"großzügige\" für das KVIrc-Projekt. Stellt SVN-Service, www &amp; ftp Spiegelung und Bandbreite zur Verfügung, großartige Ideen und Spaß während dem Programmieren.";
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
$template['install']['title2']="Minimal Requirements";
$template['install']['title3']="Configuring the Environment";
$template['install']['title4']="Interactive Mode";
$template['install']['title5']="Compiling";
$template['install']['title6']="Compiling on MacOS X";
$template['install']['title7']="Compiling on Win32";
$template['install']['title8']="Hacker-level Installation";
$template['install']['title9']="Creating a KVIrc Package";
$template['install']['title10']="Have fun!";
$template['install']['text1']="General notes for the installation of the release 4.0 of KVIrc";
$template['install']['text2']="In order to compile KVIrc 4.0 you need at least these softwares";
$template['install']['text3']="
	If your distro has KDE installed then Qt is already installed. If not, simply install qt4 from your distro's repositories.";
$template['install']['text4']="
	So before running cmake make sure that the environment variable \$QTDIR points to the right location. This will help in finding the correct version of Qt.";
$template['install']['text5a']="You might eventually set it with the command";
$template['install']['text5b']="your qt dir";
$template['install']['text6']="On my system qt is installed in /usr/lib64/qt so I actually execute";
$template['install']['text7']="To check you have the right version of Qt, simply run";
$template['install']['text8']="On my system the output is";
$template['install']['text9']="
	If you have multiple versions of Qt4 installed in your system and you want to use a specific version, exporting QTDIR won't suffice. Since the CMake module searching for Qt4 uses qmake itself to determine the Qt4 library dir, you can set your PATH to have CMake using using your preferred qmake version";
$template['install']['text10']="
	Please note that compiling with KDE4 support enabled will force kvirc to link against the Qt4 version that KDE4 is using, and this may lead to problems in linking. Disabling KDE4 support is the only known solution at the moment.<br />
	Note also that you'll need to override the Qt libraries used when running KVIrc";
$template['install']['text11']="
	This is usually included in the last distros.<br />
	To check which cmake you have, simply run";
$template['install']['text12']="
	You need a decent C++ compiler. Usually under linux it is gcc from GNU tools. It is preferred to use gcc 4.3.<br />
	To check your gcc version, just run";
$template['install']['text13']="
	This is usually included in your distribution and is probably already installed. The library is called libpthread.so.<br />
	You can look for it with the \"find\" command";
$template['install']['text14']="
	If you don't have it (CMake will tell you) you can download it from your favorite GNU mirror.<br />
	The configure script will also fail if the library is hidden somewhere on your system (eg. not in /lib , /usr/lib or /usr/local/lib): you should probably move it.";
$template['install']['text15']="
	You need the dynamic linker interface library libdl.so.<br />
	This is usually installed on your system , so don't care until configure complains about it. Some system have the interface builtin in libc.";
$template['install']['text16a']="
	If you want to compile the KDE integration support you obviousy need KDE.<br />
	The kdelibs package should suffice.</p>
	<p>So before running cmake make sure that the environment variable \$KDEDIR points to the right location.</p>
	<p>You might eventually set it with the command";
$template['install']['text16b']="your kde dir";
$template['install']['text17']="In my case KDE is installed in /usr so I use";
$template['install']['text18']="
	If you want the translations to non-english languages to work then you need the GNU gettext package. In particular KVIrc uses the msgfmt program.</p>
	<p>This is usually included in your distribution and is probably already installed. You can check it by running";
$template['install']['text19']="
	KVIrc will not complain if the command above is missing: it will just skip the creation of the translation files.<br />
	If the command above fails then you need to install the gettext package if you want any language other than english.";
$template['install']['text20']="
	If you want the secure socket layer (SSL) support to be compiled you need the OpenSSL library and headers (libssl.so and openssl/ssl.h).";
$template['install']['text21']="
	If you want to generate the on-line documentation you also need perl: any version will do (I guess).";
$template['install']['text22']="
	If you want perl scripting support to be compiled you need a working perl installation. Your libperl.so MUST be compiled with the MULTIPLICITY option.<br />
	You can check it with perl -V<br />
	The way external software can emebed perl has changed between perl version 5.8 and 5.10; KVIrc should play nice with perl if >= 5.004, but 5.10 is strongly suggested, since future updates can break back compatibility.";
$template['install']['text23']="
	If you want DCC VOICE to support the GSM codec, you need a recent copy of libgsm.<br />
	This is not strictly required at compile time since KVIrc will look for the library at run-time, and only if the DCC VOICE with the GSM codec is requested.<br />
	You can check for libgsm using the \"find\" command";
$template['install']['text24']="
	This library is included in most distributions. Some distros ship only the static version of the library \"libgsm.a\": if the previous find returned only something similar to \"/usr/lib64/libgsm.a\", you might create manually the shared archive by running";
$template['install']['text25']="
	If you don't have it installed at all, you might have a look in your distribution CD, or download it from the web";
$template['install']['text26']="
	If you want the /snd plugin to play various audio formats you either need a running sound system like phonon, a running sound daemon like esd or a reasonably recent audiofile library. Without these KVIrc will be only able to play *.au files.";
$template['install']['text27']="
	Since KVIrc 4.0 uses CMake as build system, we have to use it to create the Makefile's rules for make program.<br />
	To do it, we encourage the \"out-of-source\" building: build all files without dirtying the sources directory.";
$template['install']['text27b']="your options";
$template['install']['text28']="
	In this way you have just created an out-of-source environment useful to have a clean working directory.<br />
	Note that the final dots are required or cmake will NOT create the right environment.";
$template['install']['text29']="
	The CMake rules support some flags. If you don't specify them, CMake will try to make a good environment for you :)<br />
	To use these flags, you have to pass a bool value or a string.</p>
	<p>For example, to install in /usr instead of /usr/local and disable Phonon support, the command would be";
$template['install']['text30']="Here's a list with explainations";
$template['install']['tree1']="
	Compiles the executable with debug symbols.<br />
        Useful to report bugs.";
$template['install']['tree2']="Generate verbose output when compiling.";
$template['install']['tree3']="It will install all stuff under /path directory";
$template['install']['tree4']="
	It will install libkvilib and kvirc modules under \${CMAKE_INSTALL_PREFIX}/lib\${LIB_SUFFIX} directory. It defaults to an empty suffix. Mainly used for 64 bit distros (-DLIB_SUFFIX=64).";
$template['install']['tree5']="
	Append version information to kvirc and libkvilib, so that different KVIrc versions can cohexist in the same system.";
$template['install']['tree6']="
	KVIrc install rules won't try to figure out and set CMAKE_C(XX)_FLAGS; instead, it will let CMake use the ones from environment variables. Activating this flag will override -DDEBUG.";
$template['install']['tree7']="
	It will re-initialize the installation path to a good default.<br />
	Following compilations should use the correct path value cached by CMake.<br />
	This flag is useful to solve MacOS X install problems.";
$template['install']['tree8']="Compile universal binary for MacOS X platform";
$template['install']['tree9']="Use pre-compiled headers";
$template['install']['tree10']="Disable Phonon audio backend support.";
$template['install']['tree11']="
	Disable OSS audio backend support. This automatically disables Audiofile support, too.";
$template['install']['tree12']="Disable Audiofile audio backend support.";
$template['install']['tree13']="Disable Esd audio backend support.";
$template['install']['tree14']="Disable Qt-DBus support.";
$template['install']['tree15']="Disable Qt-WebKit support.";
$template['install']['tree16']="Disable Audiofile support.";
$template['install']['tree17']="Disable KDE4 support.";
$template['install']['tree18']="
	Disables the Secure Socket Layer support. The SSL support is automatically enabled if OpenSSL is detected by CMake.";
$template['install']['tree19']="
	Disables the cryptographic engines and the whole cryptography/text transformation support. Produces a slightly smaller executable";
$template['install']['tree20']="
	The IPv6 support is compiled by default on the platforms that support it: this option disables it.<br />
	Even if you have a plain IPv4-only connection, you might want to keep the IPv6 support: you will be able to lookup IPv6 hostnames.";
$template['install']['tree21']="
	This option disables pseudo-transparency support.<br />
	The pseudo transparency support makes the KVIrc windows look like semi-transparent (this is NOT real transparency: this is just a nice-looking hack).<br />
	If KDE support is enabled, KVIrc will have an option that makes all windows use a faded KDE desktop background image as background. Without KDE support you will be able to choose a fake background image and use it as background. (You can still
        choose your desktop wallpaper: this will (more-or-less) work in all the window managers).<br />
	It is cool-looking but usually eats some memory when enabled.<br />
	It also eats some executable size.<br />
	So this option allows to disable the pseudo-transparency.";
$template['install']['tree22']="
	Forcibly disable perl support.<br />
        You will not be able to use perl scripts inside KVIrc.";
$template['install']['tree23']="
	Forcibly disable python support.<br />
        You will not be able to use python scripts inside KVIrc.";
$template['install']['tree24']="
	Disables support for inter-process communication.<br />
	You will be not able to send remote commands to running KVIrc sessions: this basically means that every time you run the KVIrc executable, a new session will be started.<br />
	If you don't use this switch, a new session will be started only if no session is running on the same display or \"new session\" has been forced by a commandline switch.<br />
	If a session is already running, the commandline will be passed to that session via IPC (X-event-based communication).<br />
	This option saves some KB of the KVIrc executable, so if you're really short in memory, you might use it, otherwise, IPC is a nice feature.";
$template['install']['tree25']="Disables the use of GetText to generate translation files.";
$template['install']['tree26']="Disables docs generation through Doxygen.";
$template['install']['tree27']="
	This will disable the use of the system memmove() memcpy() and memset() functions and enable the bundled implementations. Use it if you have undefined references to these functions while compiling.";
$template['install']['tree28']="
	Explicitly disable the usage of the GSM library. This will disable the DCC VOICE gsm codec but might help when the compilation stops complaining of something related to GSM :)";
$template['install']['tree29']="
	KVIrc contains some ix86 assembly routines that *could* performs some things faster (this is not always true, depends on the compiler).<br />
	You might want to try it if your KVIrc seems to be really slow...";
$template['install']['tree30']="
	Explicitly disable the DCC VOICE sound support. This might help if you have problems in compilation of src/modules/dcc/voice.cpp.<br />
	It will disable the sound support (and thus make DCC VOICE not usable).";
$template['install']['tree31']="
	Debug stuff... enables memory allocation profiling (don't use it :)";
$template['install']['tree32']="
	Enables malloc() memory checks. This will print a nice message if your system goes out of memory...<br />
	It can't save you from buying new RAM, but at least you will know that your system went out of memory and it is not a proper kvirc fault.<br />
	Actually you probably have no reason in using it.";
$template['install']['tree33']="
	Manually set a revision number if subversion is not found on your system.<br />
	This is useful mostly on windows.";
$template['install']['tree34']="Add some pizza for dinner :)";
$template['install']['tree35']="Add some beers to chat :)";
$template['install']['text31']="
	The CMake build system provide also an interactive mode to configure the environment before compiling.<br />
	Again, we encourage the \"out-of-source\" building: build all files without dirting the sources directory.";
$template['install']['text32']="
	Now you're in interactive mode, just follow the instructions on screen to configure your compilation environment.";
$template['install']['text33']="This step is easy :)<br />Cross your fingers and run";
$template['install']['text34']="
	If your make is not a GNU make (this happens on FreeBSD for example) you should use \"gmake\" instead.<br />
	The compilation process will take from 3-4 minutes to some hours depending on the machine capabilities and load.<br />
	If you have a slow cpu but have a couple of computers in a lan you might consider using distcc to distribute the compilation.</p>
	<p>Once the compilation has been successfull, run";
$template['install']['text35']="
	Same as above: use \"gmake install\" if your make is not GNU make.</p>
	<p>This will install the executable in /usr/local/bin (if you don't have specified a different -DCMAKE_INSTALL_PREFIX option in the cmake rules), the libraries in /usr/local/lib (if you don't have specified a different -DLIB_SUFFIX option in the cmake rules) and the shared data in /usr/local/share/kvirc.</p>
	<p>Make sure that /usr/local/lib is in your /etc/ld.so.conf , if it isn't there, put it there and run";
$template['install']['text36']="
	If you have decided to use the KDE support the installation might have placed all these files in your \$KDEDIR tree instead of /usr/local.<br />
	In this case you should be OK since KDE requires its library dir to be in /etc/ld.so.conf";
$template['install']['text37']="
	There is a detailed compilation and installation HOWTO for MacOS X systems located in the doc/ directory. It's named INSTALL-MacOS.txt";
$template['install']['text38']="
	There is a detailed compilation and installation HOWTO for Win32 systems located in the doc/ directory. It's named INSTALL-Win32.txt";
$template['install']['text39']="
	CMake supports DESTDIR argument.<br />
	So, if you want to make a package for your distro, you simply have to pass it at \"make install\" stage: your install files will go to the choosed path.<br />
	The synthax is";
$template['install']['text40']="
	After this step, just follow your distribution's rules to make a good package for the distro you're running.</p>
	<p>Alternatively, you can try the experimental CPack support included in CMakelist.txt to build a package: in this case, please refer to the CPack documentation.";
$template['install']['text41']="That's all folks.";
/* install.php end */

/* license.php start */
$template['license']['title']="The KVIrc License";
$template['license']['text']="KVIrc is a free software: it is released under an extended version of the General Public License.";
$template['license']['text2']="
	This is the KVIrc Irc Client license.<br />
	It is based on the GNU General Public License Version 2.<br />
	It contains all the GPL terms and conditions and adds a special exception (see Terms and Conditions, clause 13) to the distribution limitations.<br /><br />
	Note that the GPL below is copyrighted by the Free Software Foundation, but the instance of code that it refers to is copyrighted by Szymon Stefanek and other members of the KVIrc Development Team.<br /><br />
	The source code for all versions of KVIrc is available at <a href=\"?id=releases&amp;platform=source&amp;lang=$lang\">this url</a>.<br /><br />
	Have fun!";
/* license.php end */

/* mailinglist.php start */
$template['ml']['title']="öffentliche KVIrc Mailingliste";
$template['ml']['text1a']="
	Falls etwas schief läuft, Du eine Frage oder einen Vorschlag hast oder Einfach an der KVIrc-Entwicklung interessiert bist, kannst Du der öffentlichen KVIrc-Mailingliste beitreten.";
$template['ml']['text1b']="
	Die Entwickler verfolgen die Mailingliste und werden so schnell wie möglich antworten.";
$template['ml']['text2']="Web-Schnittstelle";
$template['ml']['text3']="
	Die Mailingliste hat <a href=\"http://lists.omnikron.net/mailman/listinfo/kvirc/\">hier</a> ein Interface.<br />
	Über dieses Interface kannst Du die Liste abonnieren, das Abo kündigen und Deine Daten verwalten.";
$template['ml']['text4']="Um per E-Mail zu abonnieren";
$template['ml']['text5']="
	Sende eine leere E-Mail (leerer Hauptteil, leerer Betreff) an <a href=\"mailto:kvirc-subscribe@lists.omnikron.net\">diese Adresse</a>, von der Adresse, mit der Du die Liste abonnieren willst.<br />
	In einigen Minuten erhälst Du eine Bestätigungsabfrage, die die weitere Vorgehensweise beschreibt.";
$template['ml']['text6']="Per E-Mail das Abo kündigen";
$template['ml']['text7']="Sende eine leere E-Mail (Hauptteil und Betreff leer) an <a href=\"mailto:kvirc-unsubscribe@lists.omnikron.net\">diese Adresse</a>, von der Adresse aus, für die Du das Abo kündigen willst.<br />
	In einigen Minuten erhälst Du eine Bestätigungsabfrage, die die weitere Vorgehensweise beschreibt.";
$template['ml']['text8']="Mailinglistenarchiv";
$template['ml']['text9']="
	Das komplette Archiv der Mailingliste ist <a href=\"http://lists.omnikron.net/pipermail/kvirc/\">hier</a> verfügbar.";
/* mailinglist.php end */

/* mirroring.php start */
$template['mirror']['title']="Das KVIrc-Projekt spiegeln";
$template['mirror']['text1']="
	Diese Seite enthält eine Schritt-für-Schritt-Anleitung, um einen FTP-Spiegel zu erstellen";
$template['mirror']['text2']="
	Das KVIrc-Projekt durch spiegeln der Dateien zu unterstützen ist wirklich einfach.<br />";
$template['mirror']['text3']="Aussereuropäische FTP-Spiegel werden insbesondere gebraucht";
$template['mirror']['title2']="Aufsetzen eines Spiegels von ftp-master.admin.kvirc.de";
$template['mirror']['tree']="Voraussetzungen";
$template['mirror']['tree1']="Einen FTP-Server";
$template['mirror']['tree2']="Einen cron-Dämon (oder vergleichbares), um den Spiegel synchron zu halten";
$template['mirror']['text4']="Einrichtungsablauf";
$template['mirror']['text5']="
	Das einrichten eines FTP-Spiegels ist wirklich einfach: Einfach die Spiegelfähigkeit nutzen von dem Programm";
$template['mirror']['text6']="
	Die Befehlszeile, um das komplette KVIrc-FTP-Archive zu erhalten, ist die folgende:";
$template['mirror']['text7']="Dein_FTP_Server_Hauptverzeichnis";
$template['mirror']['text8']="
	Alles was Du machen musst, ist Deinen FTP-Server so einzurichten, dass er anonyme Verbindungen akzeptiert und cron so einstellen, dass der Spiegel alle N Stunden syncoronisiert wird.";
$template['mirror']['text9']="
	Jetzt brauchst Du die automatische Aktualisierung.<br />
	Dies wird gewöhlinch durch den cron-Dämon geleistet und erfordert das Hinzufügen mehrerer Zeilen zur crontab.<br />
	Hier ein solches Beispiel für crontab:";
$template['mirror']['text10a']="
	Dieser Eintrag weist cron an, den Befehl";
$template['mirror']['text10b']="täglich um 6.30 auszuführen.";
$template['mirror']['text11a']="In diesem Fall würde";
$template['mirror']['text11b']="wie folgt aussehen:";
$template['mirror']['text12']="DeineDomain";
$template['mirror']['text13']="
	Zur Zeit der Seitenerstellung umfasst das komplette FTP-Archiv ca. 1,5 GB. Wenn Du nicht den Platz für einen kompletten Spiegel hast, kannst Du einen Teilspiegel errichten, indem Du nur ausgewählte Verzeichnisse von ftp.kvirx.net spiegelst.";
$template['mirror']['text14']="
	Wenn Du den Spiegelserver erfolgreich eingerichtet hast, schreibe bitte eine E-Mail an <b>pragma at kvirc Punkt net</b> oder an die <a href=\"?id=mailinglist&amp;lang=$lang\">Mailingliste</a>, damit wir ihn auf der Hauptseite verknüpfen können.";
/* mirroring.php end */

/* news.php start */
$template['news']['title']="Nachrichtenarchive";
$template['news']['latest']="Neueste Nachrichten";
$template['news']['error']="Fehler: Eintrag nicht gefunden.";
$template['news']['nonews']="Eintrag nicht gefunden.";
$template['news']['news']="Nachrichten";
$template['news']['readmore']="weiterlesen";
/* news.php end */

/* releases.php start */
$template['releases']['title']="Offizielle Ausgaben laden";
$template['releases']['text1']="
	Hier kannst Du die <b>offiziellen veröffentlichten</b> Pakete von KVIrc laden.<br />
	Die offiziellen Pakete werden weniger häufig veröffentlicht, sind dafür aber die stabilsten.<br />
	Bitte wähle den Typ des Pakets, dass Du laden möchtest";
$template['releases']['text2']="
	Unten ist eine Liste verfügbarer Versionen für die von Dir ausgewählte Platform.<br />Bitte wähle die Version des Pakets, die Du laden möchtest";
$template['releases']['text3']="
	Mehr als eine Paketgruppe ist für die gewählte Platform und Version verfügbar.<br /><br />Bitte wähle die Gruppe aus, die Du laden möchtest";
$template['releases']['latest']="Neueste Ausgabe";
$template['releases']['older']="Ältere Ausgaben";
$template['releases']['available']="Verfügbare Orte zum herunterladen";
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
$template['screen']['screen5']="Kanal-Aufklappmenüs";
$template['screen']['screen6']="Kanel Ban &amp; Modus Dialoge";
$template['screen']['screen7']="Hilfe und Verzeichnisbetrachter";
$template['screen']['screen8']="Verzeichnisbetrachter";
$template['screen']['screen9']="KVIrc CVS läuft glücklicher Weise auf Solaris";
$template['screen']['screen10']="Fensterliste, DCC send und Benutzerlisten-Aufklappmenü";
$template['screen']['screen11']="E/A Graph, Terminal-Emulation und Avatare";
$template['screen']['screen12']="3 aktive Server-Verbindungen";
$template['screen']['screen13']="Avatare, E/A Graph und Server-Verknüpfungen";
$template['screen']['screen14']="Ja! Trau Deinen Augen! KVIrc auf Abwegen :)";
$template['screen']['screen15']="Hilfefenster und Andockobjekt";
$template['screen']['screen16']="Schickes Standardthema mit Übertragungsfenster";
$template['screen']['screen17']="Minimalistisches Thema und eines der Kontextmenüs";
$template['screen']['screen18']="
	Vier Spezialfenster: Dateiübertragungen, Protokollansicht, Terminal und freigegebene Dateien; hier um Deinen IRC-Alltag zu vereinfachen";
$template['screen']['screen19']="Schreibst Du Skripte? KVIrc hat verschiedene Werkzeuge für Dich.";
$template['screen']['screen20']="Helix auf drei Servern und vielen Kanälen";
$template['screen']['screen21']="Helix verbindet sich über psyBNC und eine schöne Arbeitsflächenverknüpfung mit KVIrc :D";
$template['screen']['screen22']="
	Vier Server. Beachte das \"Baumansichts-Fenster\" links, das die aktivsten Kanäle anzeigt.";
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
	Italienisches Skript mit autom. Kanalbetreten, Kontrolle der Feststelltaste, autovoice... Komplett über grafische Oberfläche einstellbar.";
$template['scripts']['script2']="
	SaNVirC ist ein Skript für KVIrc, dass Funktionen wie Spitznamenidentifikation, autom. Kanalbetreten, Abwehr, Angriff, Bot-Verwaltung, ein Abwesend-System, etc.<br /> Es wurde für IRC-Hispano-Bots geschrieben, lässt sich aber leicht an andere Server anpassen.";
$template['scripts']['script3']="
	Savaga Script ist ein Skript für Spieler mit XQF-Unterstützun, Systeminformationen, qauth...";
$template['scripts']['script4']="
	Dies ist die erste öffentliche Ausgabe dieses Skripts mit einigen Verbesserungen für die Benachrichtigungsliste. Es fügt ausserdem AutoOp hinzu, AutoVoice-Funktionen, fix OPlose Räume, etc.";
/* scripts.php end */

/* snapshots.php start */
$template['snapshots']['title']="Entwicklungs-Snapshots";
$template['snapshots']['text1']="
	Die Entwicklungs-Snapshots sind inoffizielle Pakete, die nicht regelmäßig aus dem SVN gebildet werden. Jeder Snapshot spiegelt den SVN-Stand zu einem bestimmten Datum wieder und Du wirst wahrscheinlich einen aktuellen finden. Die Pakete sind zumindest auf ein paar Systemen getestet und die Wahrscheinlichkeit, dass sie auf Deinem System kompilieren ist gut. Es sind auch einige Binärpakete verfügbar.";
$template['snapshots']['text2']="
	Die Quelltext-Snapshots werden freundlicherweise vom KVIrc-Entwicklungsteam zur Verfügung gestellt.<br />
	Ehre und Ruhm! :)";
$template['snapshots']['text3']="
	Um den aktuellsten Snapshot zu laden, musst Du in
	<a href=\"ftp://ftp.kvirc.de/pub/kvirc/snapshots/\">dem KVIrc FTP</a> oder im \"snapshots\"-Verzeichnis eines FTP-Spiegels schauen.";
/* snapshots.php end */

/* splash.php start */
$template['splash']['title']="Begrüßungsbildschirme";
$template['splash']['text']="Dies ist eine Zusammenstellung von Begrüßungsbildschirmen, die KVirc in der Vergangenheit benutzt hat.";
$template['splash']['date']="Veröffentlichungsdatum";
$template['splash']['in']="Bildschirm enthalten in";
/* splash.php end */

/* status.php start */
$template['status']['title']="Projektstatus";
$template['status']['text']="
	<p>Nach 9 Jahren Entwicklung ist KVIrc ein ausgereifter und voll ausgestatteter IRC-Client, ein exzellenter Begleiter für die täglichen IRC-Versammlungen.</p>
	<p>Die aktuelle stabile Version ist <a href=\"?id=news&story=2008.10.14.16.59.1.story&dir=latest&lang=$lang\">3.4.2 \"Shiny\"</a>.
	Sie wurde am 14. Oktober 2008 veröffentlicht.

	Sie kann als Quelltext von der <a href=\"?id=download&amp;lang=$lang\">download</a>-Seite bezogen werden.</p>
	<p>Wenn Du offizielle Veröffentlichungen suchst, schau mal in <a href=\"?id=releases&amp;lang=$lang\">diese Rubrik</a>, diese werden seltener veröffetnlicht, sind aber die stabilsten. Wähle Deine Version zwischen Linux, Windows, MacOSX oder Quelltextpaket.</p>
	<p>Snapshots befinden sich <a href=\"?id=snapshots&amp;lang=$lang\">hier</a>, während SVN <a href=\"?id=SVN&amp;lang=$lang\">hier</a> gefunden werden kann.</p>
	<p>Beachte auch die <a href=\"?id=install&amp;lang=$lang\">Installationshinweise</a>, <a href=\"?id=tutorials&amp;lang=$lang\">Tutorien</a>, <a href=\"?id=translation&amp;lang=$lang\">Übersetzungen</a> und <a href=\"?id=themes&amp;lang=$lang\">Themen</a>, um eine mehr angepasste KVIrc-Version zu erhalten =)</p>";
/* status.php end */

/* svn.php start */
$template['svn']['title']="SVN auschecken";
$template['svn']['text1']="
	Vom SVN-Server kannst Du die aktuellste KVIrc-Version laden.<br />
	Wenn Du sichergestellt hast, dass Subversion auf Deinem System installiert ist, brauchst Du nur noch folgende Zeile eingeben:";
$template['svn']['text2']="
	Damit lädst Du die KVIrc-Kernquellen herunter.<br />
	Wenn Du auch die Module auschecken willst, musst Du diese Zeile eingeben:";
$template['svn']['text3']="
	Um das Programm zu kompilieren, wechsele in das Quellenverzeichnis:";
$template['svn']['text4']="
	und folge dann den <a href=\"?id=install&amp;lang=$lang\">Installationsanweisungen</a>.<br />
	Die aktuellsten Installationsanweisungen für die SVN-Version stehen auch in der Datei INSTALL.<br />
	Wir versuchen SVN so \"sauber\" wie möglich zu halten, aber es kann passieren, dass die heruntergeladenen Quelltexte nicht kompilieren oder das Programm nicht korrekt läuft.<br />
	Du kannst auch im SVN stöbern via <a href=\"https://svn.kvirc.de/kvirc/browser/\">https://svn.kvirc.de/</a>";
/* svn.php end */

/* themes.php start */
$template['themes']['title']="Themen";
$template['themes']['text1']="Hier kannst Du einige schöne Themen herunterladen";
$template['themes']['text2a']="Wie kann ich ein Thema installieren";
$template['themes']['text2b1']="Lade das Thema herunter";
$template['themes']['text2b2']="Öffne den KVIrc Themenmanager";
$template['themes']['text2b3']="Klicke auf den \"Installiere-Thema-von-Disk\"-Knopf ";
$template['themes']['text2b4']="Doppelklicke auf das neue Thema";
$template['themes']['text2b5']="Viel Spaß";
$template['themes']['text3a']="Wie kann ich ein Thema erstellen";
$template['themes']['text3b1']="Es gibt eine kleine Kurzanleitung (englisch), die Du";
$template['themes']['text3b2']="hier";
$template['themes']['text3b3']="finden kannst und eine italienische Version";
$template['themes']['text3b4']="Die englische Kurzanleitung ist auch im KVIrc-Paket enthalten";
$template['themes']['text4a']="Ich habe ein Thema erstellt. Wie kann ich es mit anderen teilen";	
$template['themes']['text4b']="Du kannst es an";
$template['themes']['text4c']="senden, inklusive eines Themennamens, Beschreibung, Version, Spitzname, Homepage und E-Mail, erlaube uns (oder nicht) diese auf der Homepage zu zeigen";
$template['themes']['text5']="Alle Downloads sind für eine Auflösung von 1024x768 gedacht.<br />Wenn Du eine 1280x1024-Version verteilen willst, sende sie einfach mit einer 1024x768 Version ein.";
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
$template['themes']['theme30']="Ein Thema, welches Deinen Geist erhellt";
$template['themes']['theme31']="Ein Thema inspiriert durch R.A. Salvatores Romane über die Drow (Dunkelelfen) und besonders Drizzt Do'Urden";
$template['themes']['theme32']="...weil die ganze Welt ein schönes Fraktal ist!";
$template['themes']['theme33']="Ein dunkleres technisch aussehendes Thema mit einfachen und beschreibenden Symbolen";
$template['themes']['theme34']="Dieses Thema wurde vom CoreZeam.org Portal erstellt";
$template['themes']['theme35']="Ein schwarz-basiertes Thema, angenehm zu sehen und zu erkennen";
/* themes.php end */

/* tools.php start */
$template['tools']['title']="Werkzeuge";
$template['tools']['text1']="Hier findest Du einige KVIrc-bezoge Werkzeuge";
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
	Auf dieser Seite findest Du einige Informationen über den Status der KVIrc-Übersetzungen. Um zu sehen, ob Deine Sprache unterstützt wird, schau bitte unten in die Liste.";
$template['translation']['text2']="
	Viele Leute arbeiten hart, um so viele Sprachen wie möglich zu unterstützen. Um ihnen beizutreten, musst Du nur Deine eigene Sprache kennen, <b>es werden keine Programmierkenntnisse benötigt.</b>";
$template['translation']['text3']="
	Alle Übersetzer <b>MÜSSEN UTF-8</b> als Kodierungsformat <b>BENUTZEN.</b> Übersetzungsdateien mit anderen Formaten werden abgelehnt.";
$template['translation']['text4']="
	Wenn Du Interesse hast, KVIrc in eine neue Sprache zu übersetzen, findest Du hier eine gute Kurzanleitung.<br />
	Einige Sprachen werden (fast) täglich aktualisiert, andere müssen einen neuen Bearbeiter finden. Wenn Du helfen willst, die aktuelle Unterstützung für Deine Sprache zu verbessern, kontaktiere bitte den <b>letzten Bearbeiter,</b> welcher hier gelistet ist:";
$template['translation']['text4a']="nicht gepflegt";
$template['translation']['text4b']="
	Wo wir bei \"nicht gepflegt\" sind: Wir ermutigen Dich, uns beim Übersetzen zu helfen.<br />
	Bei Interesse schick eine E-Mail an die Mailinglist :)";
$template['translation']['text5a']="Vergiss nicht die";
$template['translation']['text5b']="zu abonnieren, um mit den Entwicklern in Verbindung zu bleiben!";
$template['translation']['text6']="Diese kleine Schritt-für-Schritt-Anleitung beschreibt das Vorgehen, um KVIrc in eine neue Sprache zu übersetzen";
$template['translation']['text7']="Die richtigen Quellen bekommen.";
$template['translation']['text8a']="
	Als erstes brauchst Du die SVN-Version von KVIrc. Um die SVN-Version zu erhalten, folge den Anweisungen auf";
$template['translation']['text8b']="Das Übersetzungsmaterial ist in";
$template['translation']['text9']="Den Sprachcode herausfinden";
$template['translation']['text10a']="
	Du musst Deinen Sprachcode herausfinden. Normalerweise ist dies eine Zeichenfolge aus mindestens zwei Buchstaben und kann herausgefunden werden, indem man die Shell-Variable \$LANG prüft, oder schaue";
$template['translation']['text10b']="hier";
$template['translation']['text10c']="Beispiele für solche Codes sind";
$template['translation']['text11']="Die Liste der zu übersetzenden Meldungen generieren";
$template['translation']['text12']="
	Du musst diese Schritte nur ausführen, wenn dies das erste Mal ist, dass KVIrc in Deine Sprache übersetzt wird. Wenn Du eine bestehende Übersetzung aktualisierst, kannst Du direkt zu Schritt 3 übergehen.<br />
	Starte den Befehl, um die Nachrichten aus dem Quelltext zu extrahieren.";
$template['translation']['text13']="
	Eine Datei namens <code>kvirc.pot</code> wird erstellt. Du musst diese Datei zu <code>kvirc_xxx.po</code> umbenennen, wobei xxx Dein Sprachcode ist, den Du in Schritt 1 herausgefunden hast.";
$template['translation']['text14']="Die Meldungen übersetzen";
$template['translation']['text15a']="
	Wenn Du Schritt 2 ausgeführt hast, hast Du die Datei <code>kvirc_xxx.po</code> erstellt, wobei xxx für den Sprachcode (aus Schritt 1) steht.<br />
	Wenn Du direkt von Schritt 1 kommst, dann musst Du die existierende Datei <code>kvirc_xxx.po</code> in dem <code>kvirc/po/kvirc</code>-Verzeichnis finden.<br />
	Wenn sie nicht dort ist, gehe zurück zu Schritt 2.";
$template['translation']['text15b']="
	Die Datei <code>kvirc_xxx.po</code> enthält eine Reihe von Zeichenketten, wie die folgende:";
+$template['translation']['text100a']="/Pfad/zu/der/Datei/die/die/Zeichenkette/enthält: Zeilennummer";
+$template['translation']['text100b']="Übersetze die Meldung";
+$template['translation']['text100c']="Die Übersetzung kommt hierhin";
$template['translation']['text16']="
	Die <i>msgid</i> ist die Originalmeldung, die übersetzt werden muss, und <i>msgstr</i> ist die Übersetzung (dies ist zunächst leer, wenn die Datei <code>kvirc_xxx.po</code> erstellt wird).";
$template['translation']['text17']="
	Die msgid can HTML-Kennzeichen, Maskierungen wie \"\\n\" und Formatspezifikationen wie \"%s\" enthalten. Du <b>MUSST</b> diese Kennzeichen, Maskierungen und Formatspezifikationen nach msgstr übernehmen. <b> Achte besonders</b> auf die Formatspezifikationen (%s, %W, %Q...).<br />
	Diese müssen in <b>EXAKT der gleichen Reihenfolge</b> wie in msgid stehen: Ein Vertauschen der Reihenfolge, oder eine falsche Formatspezifikation wird KVIrc früher oder später abstürzen lassen.";
$template['translation']['text18']="Die Übersetzung zu Makefile.am hinzufügen";
$template['translation']['text19']="Wenn Du einige Zeichenketten übersetzt hast, kannst Du versuchen, KVIrc mit den Übersetzungen laufen zu lassen. Wenn Du eine bestehende Übersetzung aktualisierst, kannst Du direkt zu Schritt 5 springen.";
$template['translation']['text20']="
	Du musst den make_prozess zwingen, Deine Übersetzung zu nutzen und es kompilieren. Dies ist wiederum ein einmaliger Schritt. In <code>kvirc/src/kvirc</code> ist eine Datei namens <code>Makefile.am</code>. Du editierst sie und fügst <code>kvirc_xxx.po</code>dort hinzu, wo die anderen *.po-Dateien genannt werden. Du solltest keine Probleme haben, zu erraten, was hinzugefügt werden muss, wenn Du Dir die anderen *.po Einträge in dieser Datei anschaust.";
$template['translation']['text21']="Dann starte:";
$template['translation']['text22']="
	und erstelle KVIrc wie gewöhnlich. Nachdem das Erstellen abgeschlossen ist, starte KVIrc, nachdem Du sichergestellt hast, dass Deine \$LANG-Variable richtig gesetzt ist.";
$template['translation']['text23']="Die Übersetzung testen";
$template['translation']['text24']="Lass make laufen und warte, bis es fertig ist.";
$template['translation']['text25']="KVIrc sollte dann Deine Übersetzung annehmen und benutzen.";
$template['translation']['text26']="Aktualisieren der Übersetzung, wenn die Quellen sich ändern";
$template['translation']['text27']="
	Während der Entwicklung werden neue Meldungen hinzugefügt, und einige der existierenden Meldungen ändern sich. Wenn Du ein \"svn update\" ausführst, um die neusten Quellen zu erhalten, solltest Du ins Verzeichnis <code>kvirc/po/kvirc</code> wechseln und";
$template['translation']['text28']="
	ausführen. Dies wird Deine Datei <code>kvirc_xxx.po</code> mit den neuesten Meldungen aktualisieren, und alte als entweder <i>fuzzy</i> oder ungültig (invalid). Die ungültigen Einträge müssen erneut übersetzt werden, während die mit <i>fuzzy</i> markierten kleinere Änderungen haben, die wahrscheinlich in Sekunden angepasst werden können.";
$template['translation']['text29']="Verschiedenes";
$template['translation']['text30']="
	Wenn Du Zweifel bei manchen Übersetzungen hast, kannst Du gucken, wie ähnliche Sätze in den KDE *.po-Dateien übersetzt worden sind; dort sollte es eine Übersetzungsdatei geben, verfügbar über KDE SVN.";
$template['translation']['text31']="
	Da viele Module ihre eigene Übersetzungsdateien haben, kann (nicht muss) der obige Ablauf für die <code>po/modules/*/</code>-Unterverzeichnisse wiederholt werden.";
$template['translation']['text32a']="
	Wenn Du mit der Übersetzung zufrieden bist, kannst Du Deine *.po-Dateien an";
$template['translation']['text32b']="
	schicken, um sie ins SVN aufzunehmen. Wenn Du die Übersetzung pflegen willst, kannst Du auch nach einem SVN-Zugang mit Schreiberlaubnis fragen.";
$template['translation']['text33']="Föhliches Übersetzen :)";
/* translation.php end */

/* tutorials.php start */
$template['tutorials']['title']="Tutorien";
$template['tutorials']['archive']="Komplettes Archiv";
$template['tutorials']['tutorial']="Tutorium";
$template['tutorials']['madeby']="erstellt von";
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
$template['tutorials']['dropmail']="Wenn Du ein FAQ, Tutorium oder Anleitung zu KVIrc geschrieben hast, egal in welcher Sprache, sende bitte eine E-Mail an";
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
