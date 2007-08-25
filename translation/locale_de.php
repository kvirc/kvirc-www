<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

/* index.php start */
// languages
$template['index']['italian']="italienisch";
$template['index']['english']="englisch";
$template['index']['german']="deutsch";
$template['index']['russian']="russisch";
$template['index']['french']="französisch";
$template['index']['spanish']="spanisch";
$template['index']['bulgarian']="bulgarisch";
$template['index']['czech']="tschechisch";
$template['index']['dutch']="niederländisch";
$template['index']['polish']="polnisch";
$template['index']['portuguese']="portugiesisch";
$template['index']['brazilian']="brasilianisch";
$template['index']['serbian']="serbisch";
$template['index']['hungarian']="ungarisch";
$template['index']['croatian']="kroatisch";
$template['index']['latvian']="lettisch";

// the project
$template['index']['theproject']="das Projekt";
$template['index']['status']="Status";
$template['index']['features']="Eigenschaften";
$template['index']['license']="Lizenz";
$template['index']['require']="Voraussetzungen";
$template['index']['screens']="Bildschirmfotos";
$template['index']['bugtrack']="KVIrc Fehlerdatenbank";
// running kvirc
$template['index']['running']="KVIrc benutzen";
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
$template['index']['misc']="Verschiedenes";
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
// other
$template['index']['latestscreen']="neueste Screenshots";
$template['index']['footer']="Diese Seite ist am besten zu betrachten mit einem Monitor";
/* index.php end */

/* custom vars start */
$template['custom']['author']="Autor";
$template['custom']['description']="Beschreibung";
$template['custom']['homepage']="Homepage";
$template['custom']['download']="Download";
$template['custom']['date']="Datum";
$template['custom']['size']="Größe";
$template['custom']['version']="Version";
$template['custom']['type']="Typ";
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
	Das FTP-Archiv umfasst ca. 200MB; eine teilweise Spiegelung kann ebenso arrangiert werden.<br />
	Eine detailierte Anleitung um einen WWW- oder FTP-SPiegelserver einzurichten ist <a href0\"?id=mirroring&amp;lang=$lang\">hier</a> verfügbar.";
$template['contribute']['text16']="Öffentlichkeitsarbeit";
$template['contribute']['text17']="
	Wir brauchen Leute, die über KVIrc sprechen, Artikel, Beschreibungen, Kritiken schreiben, nach Beitragenden suchen ...";
$template['contribute']['text18']="Wen kontaktieren";
$template['contribute']['text19']="
	Wenn Du Dich entschieden hast, mitzuwirken, kannst Du Dein Angebot an <a href=\"mailto:pragma@kvirc.REMOVE.THE.ANTISPAM.WORDS.net\">Pragma</a> senden.<br />
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
$template['download']['text2']="Offiziell veröffentlichte Palete";
$template['download']['text3']="
	Die offiziellen Pakete werden weniger häufig veröffentlicht, sind aber die stabilsten. Jedes offizielle Quelltext-Paket ist gut getestet und wird wahrscheinlich auf Deinem System kompilieren. Du hast auch mehrere Möglichkeiten, ein zu Deinem System passendes Binärpaket zu finden. Die hier abrufbaren hüfig-gestellten-Fragen und die Dokumentation beziehen sich auf diese Pakete.";
$template['download']['text4']="Entwicklungs-Snapshots";
$template['download']['text5']="
	Die Snapshots des Quelltextes sind inoffizielle Pakete, gewonnen aus dem SVN auf einer nicht regelmäßigen Basis. Jeder Snapshot spiegelt den SVN-Status zu einer bestimmten Revision wider und gewöhnlich findest Du eine aktuelle. Diese Pakete wurden zumindest auf ein paar Systemen getestet und eine hohe Wahrscheinlichkeit, dass sie auch auf Deinem System kopilieren. Es sind auch einige Binärpakete verfügbar.";
$template['download']['text6']="Aktuelle Quellen aus dem SVN";
$template['download']['text7']="
	Den aktuellsten Quelltext kann über das SVN-System geladen werden. Wir versuchen SVN so \"suaber\" wie möglich zu halten, aber trotzdem kann nicht garantiert werden, dass der Quelltext kompiliert. Der SVN-Methode stellt nur den Quelltext zur Verfügung, es gibt keine Binärpakete.";
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
	Wenn dies nciht hilft, oder es ziemlich häufig auftritt und es störend ist, kannst Du Deinen Kompilierer aktualisieren";
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
$template['honor']['made38']="Portuguese translation, default script patches and Mandriva (MDE) packager.";
$template['honor']['made39']="Russische Übersetzung";
/* honor.php end */

/* install.php start */
$template['install']['title1']="Installation";
$template['install']['title2']="Guru Installation";
$template['install']['title3']="Hacker Installation";
$template['install']['title4']="Humane (detailierte) Installation";
$template['install']['text1']="Generelle Anmerkung zur Installation von KVIrc Version 3.2.0";
$template['install']['text2']="Du MUSST automake 1.5 haben";
$template['install']['text3']="Wenn Du die SVN-Version von KVIrc kompilierst, starte ./autogen.sh";
$template['install']['text4']="Pfad zur Qt-Bibliothek";
$template['install']['text5']="schließlich";
$template['install']['text6']="Pfad zur KDE-Bibliothek";
$template['install']['text7']="Wir benutzen hier die GNU-Werkzeuge.";
$template['install']['text8']="Deine Optionen";
$template['install']['text9']="
	Wenn Du kein Guru bist, oder Probleme mit der Installation hast, lies diese Anleitung sorgfältig.";
$template['install']['step']="Schritt";
$template['install']['text10']="
	Wenn (und NUR dann) Du die SVN-Version von KVIrc kompilierst, musst Du das configure-Skript generieren.";
$template['install']['text11']="
	Wenn es nicht erfolgreich durchläuft, überprüfe Deine automake-Version.<br />
	Du brauchst automake 1.5, ältere Versionen arbeiten NICHT mit der SVN-Version.<br />
	Du kannst die Version von automake überprüfen mit";
$template['install']['text12']="
	Wenn Deine Version von automake kleiner als 1.5 ist, aktualisiere es.<br />
	Du kannst es finden unter http://www.gnu.org/software/automake (Quelltext), oder in der Paketverwaltung deiner Distribution.<br /><br />
	Hinweis zur automake-Installation: Standardmäßig installiert sich automake nach /usr/local.<br />
	Wenn Du eine ältere Version von automake in /usr hast, ist es besser sie zu entfernen: Die Dateien, die gelöscht werden müssen sind /usr/bin/automake, /usr/bin/aclocal, /usr/share/automake und /usr/share/aclocal<br />
	Wenn Du unsicher bist, die Dateien zu entfernen, benenne sie um.<br />
	Stelle ebenfalls sicher, dass /usr/local/bin in deinem Pfad (\$PATH) enthalten ist.<br /><br />
	Wenn Du die Quellen als tar.gz (oder tar.bz2) geladen hast, oder du nicht weißt, was SVN ist, ignoriere diesen Schritt und gehe zum nächsten.";
$template['install']['steptitle1']="Die Voraussetzungen";
$template['install']['tree1a']="
	Du brauchst die Qt-Bibliothek.<br />
		Die kannst die aktuellste Version bei ftp.trolltech.com herunterladen.ybr />
		Die Qt-Hauptseite ist www.trolltech.com.<br />
		Hinweis für die GPL-Fanatiker: Qt IST GPL.<br />
		Die zumindest benötigte Version ist 3.0.5 (älter Versionen *können* funktionieren)<br />
		Lade und installiere es, indem Du der Anleitung folgst, die der Bibliothek beiliegt";
$template['install']['tree1b']="
	Du brauchst eine korrekte pthread-Implementierung.<br />
		Diese ist normalerweise in Deiner Distributuion enthalten und schon installiert. Die Bibliothek heißt libpthread.so.<br />
		Du kannst sie suchen mit dem \"find\"-Befehl";
$template['install']['tree1btext1']="Auf meinem System lautet die Ausgabe";
$template['install']['tree1btext2']="
	Wenn Du es nicht hast (das configure-Skript wird es Dir sagen), kannst Du es von Deinem bevorzugten GNU-Spiegel laden.<br />
		Unter Solaris kannst Du stattdessen die systemeigene Bibliothek libthread.so nutzen, aber Du musst die entsprechenden Option bei configure angeben (siehe unten).<br />
		FreeBSD hat eine eigene Implementierung von pthread in libc_r und der gcc-Kompilierer hat ein spezielles -pthread Flag, um dagegen zu linken.<br />
		Wenn Du unter FreeBSD arbeitest, benutze die \"--with-freebsd-pthread\"-configure-Option, und stelle sicher, dass Du keinen anderen pthread-wrapper installiert hast (dieser könnte mit den systemeigenen Header-Dateien kollidieren).";
$template['install']['tree1btext3']="
	Das configure-Skript schlägt auch fehl, wenn die Bibliothek irgendwo in Deinem System versteckt ist (z. B. nicht in /lib, /usr/lib oder /usr/local/lib): Du solltest sie wahrscheinlich verschieben";
$template['install']['tree1c']="
	Du brauchst die Schnittstellenbibliothek des Dynamischen Linkers libdl.so<br />
		Diese ist normalerweise auf Deinem System installiert, so dass Du Dich nicht darum kümmern musst, ausser configure beschwert sich darüber. Einige Systeme haben die Schnittstelle in libs integriert. Das configure-Skript kann dieses feststellen";
$template['install']['tree1d']="
	(Optional) Wenn Du die KDE-Unterstützung einkompiliert haben möchtest, brauchst Du natürlich KDE. Das Paket kdelibs sollte ausreichen. Bei einigen Distributionen musst Du auch kdelibs-devel installieren";
$template['install']['tree1e']="
	(Optional) Wenn Du bei DCC VOICE Unterstützung für den gsm-codec haben möchtest, brauchst Du eine aktuelle Version von libgsm. Diese wird nicht zwangsläufig bei der Kompilierung benötigt, da KVIrc sie zur Laufzeit sucht, wenn DCC VOICE mit gsm-codec gebraucht wird.<br />
		Du kannst nacht libgsm mit dem \"find\"-Befehl suchen.";	
$template['install']['tree1etext1']="Die Ausgabe sollte aussehen wie";
$template['install']['tree1etext2']="
	Diese Bibliothek is bei den meisten Distributionen enthalten. Einige liefern nur die statische Version der Bibliothek \"libgsm.a\" mit. Wenn das vorherige find etwas in der Art \"/usr/lib/libgsm.a\" ausgegeben hat, kannst Du mit den folgenden Befehlen die dynamische erstellen:";
$template['install']['tree1etext3']="
	Wenn Du es gar nicht installiert hast, kannst Du auf der CD Deiner Distribution suchen, oder es aus dem Web laden";
$template['install']['tree1f']="
	(Optional) Wenn Du willst, dass das /snd-Plugin verschiedene Audioformate spielt
		brauchst Du entweder einen laufenden artsd, einen laufenden esd oder eine aktuelle audiofile-Bibliothek.
		Ohne diese wird KVIrc nur *.au-Dateien abspielen";
$template['install']['tree1g']="
	(Optional) Wenn Du die Online-Dokumentation erstellen willst, brauchst Du auch Perl, Version egal (wahrscheinlich)";
$template['install']['tree1h']="
	(Optional) Wenn Du SSL-Unterstützung kompiliert haben möchtest
		brauchst Du die OpenSSL-Bibliothek und -Headers. (libsshl.so und openssl/ssl.h)";
$template['install']['steptitle2']="Das configure-Skript aufrufen (erfoderlich)";
$template['install']['text13']="
	Zuerst musst Du das configure-Skript aufrufen, dass einige Infos über Dein System sammelt und die Kompilierung vorbereitet.<br />
		Du kannst einen \"einfachen Lauf\" probieren und sehen, ob dies reicht... Das configure-Skript versucht schlau zu sein, aber in einigen Fällen wird es versagen.<br /><br />
		Bevor Du das Skript startest, stelle sicher, dass die Umgebungsvariable \$QTDIR auf das richtige Verzeichnis zeigt. Dies hilft, die richtige Version von Qt zu finden.<br />
		Du kannst sie setzen mit dem Befehl:";
$template['install']['text14']="Dein Qt-Verzeichnis";
$template['install']['text15']="
	Auf meinem System ist Qt in /usr/local/kde/qt installiert<br />
		daher führe ich aus";
$template['install']['text16']="
	Wenn Du KDE-Unterstützung kompilieren möchtest, musst Du das gleiche mit \$KDEDIR machen";
$template['install']['text17']="Dein KDE-Verzeichnis";
$template['install']['text18']="In meinem Fall ist KDE in /usr/local/kde installier, daher nutze ich";
$template['install']['text19']="Das configure-Skript hat eine Menge Optionen, die aufgelistet werden können mit";
$template['install']['text20']="Hier ist eine Liste mit Erklärungen (die gebräuchlichsten stehen oben):";
$template['install']['tree2a']="
	Dies ist für Fehlersuche und Problemberichte. Es setzt die Kompilieroptionen, die die Informationen zur Fehlerfindung im lauffähigen KVIrc und den Bibliotheken lässt.
	In diesem Fall hast Du die Möglichkeit, gdb-Ablaufverfolgungen im Falle eines Absturzes zu erstellen.<br />
	DU BRAUCHST DIESE OPTION, WENN DU EINEN PROGRAMMABSTURZ MELDEN WILLST";
$template['install']['tree2b']="
	Weist den Kopilierer an, pipes anastatt von Dateien während der Kompilation zu verwenden. Pipes helfen, Festplattenbeanspruchung zu senken und verkürzen die Kompilierzeit ein wenig. Nutze diese Option, wenn Deine Platform sie unterstützt";
$template['install']['tree2c']="
	Dies ist eine experimentelle Unterstützung für Objektvorverknüpfungen, die spürbar die Startzeit des Programms verbessert. Um es zu nutzen, musst Du das \"objprelink\"-Programm in Deinem Pfad haben. Das objprelink-Programm ist im admin-Verzeichnis enthalten. Um es zu nutzen, musst Du:";
$template['install']['tree2ctext1']="irgendwo_in_Deinem_Pfad";
$template['install']['tree2ctext2']="All dieses NACH ./configure und VOR make";
$template['install']['tree2d']="
	KVIrc beinhaltet einige ix86 Assemblerroutinen, die einige Dinge beschleunigen können (trifft nicht immer zu, hängt vom Kompilierer ab). Du willst es vielleicht ausprobieren";
$template['install']['tree2e1']="NUMMER";
$template['install']['tree2e']="
	Aktiviert das Kompiliereroptimierungskennzeichen -o&lt;NUMMER&gt;.<br />
	Mögliche WErte sind 0, 1, 2 und 3 (aber wenn Dein Kompilierer mehr optimierungsstufen unterstützt, kannst Du diese Nummern hier auch nutzen).<br />
	Verlängert die Kompilierungszeit, produziert aber ein etwas schnelleres Programm";
$template['install']['tree2f']="
	Teste nicht, ob pthread funktioniert.<br />
	Wenn configure während dem pthread-Bibliotheks-Check (pthread library check) fehlschlägt, kannst Du dieses ausprobieren...  (Aber dann musst Du wirklich \"beten\", dass der Test durch \"ungewöhnliche\" Umstände fehlschlug und die Kompilierung erfolgreich verläuft.)";
$template['install']['tree2g']="
	Gibt explizit den Pfad zu den X-Header-Dateien an. Du kannst dies nutzen, wenn configure Probleme hat, sie zu finden";
$template['install']['tree2h']="
	Gibt explizit den Pfand zu den X-Bibliotheken an. Du kannst dies nutzen, wenn configure Probleme hat, sie zu finden";
$template['install']['tree2i']="
	Nutze &lt;NAME&gt; anstatt \"qt\", als Qt-Bibliothekenname.<br />
	Dies ist nützlich auf Systemen, wo Qt unter einem anderen als dem Standardnamen \"qt\" installiert ist.<br />
	Es passiert oft, um verschiedene Versionen von Qt zu ermöglichen, dass die Version an den Namen angehangen wird.<br />
	Bei FreeBSD zum Beispiel ist \"qt\" Qt1.* und \"qt2\" Qt 2.*. Da Du Qt 3.* brauchst, damit KVIrc funktioniert, musst Du --with-qt-name=qt3 angeben.<br />
	Wenn Du diese Option nutzt, wirst Du wahrscheinlich auch den Pfad/Namen für den moc-Kompilierer mit --with-qt-moc angeben müssen";
$template['install']['tree2j']="
	Deaktiviert das Überprüfen, ob die Qt-Version \"multithreaded\" ist. Standardmäßig wird KVIrc versuchen gegen die \"multithreaded\"-Version zu linken, wenn sie auf dem System gefunden wird.<br />
	HINWEIS: Wenn Du KDE-Unterstützung aktivierst, muss KVIrc gegen die gleiche QT-Version gelinked werden, gegen die auch KDE gelinked ist";
$template['install']['tree2k']="
	Suche die Qt-Bibliothek in &lt;DIR&gt;.<br />
	Du kannst dies benutzen, wenn configure Probleme hat, die Qt-Bibliothek zu finden.<br />
	Du solltest keine Probleme haben, wenn Du export QTDIR=\"&lt;DIR&gt;\" ausführst, bevor Du configure startest. Es kann aber nützlich sein, wenn Du keine standardmäßige Qt-Installation hast";
$template['install']['tree2l']="
	Suche die Qt-Header in &lt;DIR&gt;.<br />
	Du kannst dies benutzen, wenn configure Probleme hat, die Qt-Header zu finden.<br />
	Du solltest keine Probleme haben, wenn Du export QTDIR=\"&lt;DIR&gt;\" ausführst, bevor Du configure startest. Es kann aber nützlich sein, wenn Du keine standardmäßige Qt-Installation hast";
$template['install']['tree2m']="
	Benutze den Qt-Meta-Objekt-Kompilierer (moc) in &lt;PATH&gt;<br />
	Der Pfad ist gewöhnlich \$QTDIR/bin/moc und configure wird ihn automatisch finden, wenn Du eine Standard-Qt-Installation hast und \$QTDIR auf das richtige Verzeichnis zeigt.<br />
	Dieses sollte kein Problem sein, wenn Du export QTDIR=\"&lt;DIR&gt;\" ausführst, bevor Du configure startest. Es kann aber nützlich sein, wenn Du keine Standard-Qt-Installation hast.<br />
	Dies hilft Dir auch, wenn Du den moc-Kompilierer umbenannt hast, wie z. B. \"moc2\" oder ähnliches...<br />
	&lt;PATH&gt; ist in diesem Fall der VOLLE Pfad: Verzeichnis/Programmname!";
$template['install']['tree2n']="
	Dies deaktiviert das Überprüfen von Qt zur Kompilierungszeit.<br />
	Wenn dies der einzige Weg ist, KVIrc zu kompilieren und aufzurufen, dann stimmt was mit dem configure-Skript nicht";
$template['install']['tree2o']="
	Das configure-Skript sucht die KDE-Headers und -Bibliotheken und wenn es sie findet, aktiviert es die KDE-Unterstützung. Wenn Du die KDE-Unterstützung nicht haben willst, obwohl KDE gefunden wurde, nutze diesen Schalter";
$template['install']['tree2p']="
	Suche die KDE-Bibliotheken in &lt;DIR&gt;<br />
	Wenn \$KDEDIR auf den richtigen Ort zeigt, solltest Du dies nciht brauchen";
$template['install']['tree2q']="
	Suche die KDE-Headers in &lt;DIR&gt;<br />
	Wenn \$KDEDIR auf den richtigen Ort zeigt, solltest Du dies nciht brauchen";
$template['install']['tree2r']="
	Installiere die KDE-Service-Protokoll-Dateien nach &lt;DIR&gt;<br />
	Wenn \$KDEDIR auf den richtigen Ort zeigt, solltest Du dies nciht brauchen<br />
	Dies ist für KVIrc nicht kritisch: Wenn configure dieses Verzeichnis nicht finden kann, verlierst Du nur die Unterstützung für irc://-URLs in Konqueror";
$template['install']['tree2s']="Wie --without-qt-check, aber für KDE";
$template['install']['tree2t']="
	Die IPv6-Unterstützung wird normalerweise auf Platformen, die dies unterstützuen, einkompiliert. Diese Option unterbindet dies.<br />
	Selbst wenn Du nur eine reine IPv4-Verbindung hast, kannst Du IPv6-Unterstützung aktiviert lassen, Du kannst dann IPv6-Hostnamen nachschlagen";
$template['install']['tree2u']="
	Dies deaktiviert die Nutzung der Systemfunktionen memmove(), memcpy() und memset() und aktiviert die Nutzung der eigenen Implementierung. Nutze dies, wenn Du undefinierte Referenzen (undefined references) zu diesen Funktionen während der Kompilierung hast";
$template['install']['tree2v']="
	Dies ist ein hack hauptsächlich für Solaris.<br />
	Nutze diese Option, wenn sich KVIrc ohne sichtbaren Grund beendet und das System eine Nachricht bezüglich eines \"Alarms\" ausgibt :)";
$template['install']['tree2w']="
	Deaktiviert die Verschlüüselungseinheit und die ganze Verschlüsselungs-/Textumwandlungsunterstützung. Erstellt ein etwas kleineres Programm.<br />
	Falls Du nicht weißt, was Verschlüsselungs-/Textumwandlungsunterstützung ist, empfehle ich Dir, diese Option zu meiden";
$template['install']['tree2x']="
	Diese Option deaktiviert die Scheintransparenz-Unterstützung.<br />
	Die Scheintransparenzunterstützung lässt das KVIrc-Fenster halbtransparent aussehen (dies ist KEINE echte Transparenz, dies ist nur ein gutaussehender hack).<br />
	Wenn die KDE-Unterstützung eingeschaltet ist, wird KVIrc eine Option haben, das alle Fenster ein abgedunkeltes Bild der KDE-Arbeitsfläche als Hintergrund haben. Ohne KDE-Unterstützung hast Du die Möglichkeit, ein Hintergrundbild einzustellen. (Du kannst weiterhin den Hintergrund der Arbeitsfläche nehmen; dies wird (mehr oder weniger) bei jedem Fenstermanager funktionieren.) Es sieht gut aus, belegt aber einigen Speicher. Es vergrössert auch die Programmdatei.<br />
	Diese Option erlaubt Dir, die Scheintransparenz zu deaktivieren";
$template['install']['tree2y']="
	Wenn Du Solaris nutzt und keine pthread-Bibliothek hast, kannst Du diese Option probieren: Es versucht die Solaris-eigene threading-Bibliothek zu nutzen";
$template['install']['tree2z']="
	Wenn Du FreeBSD nutzt, BRAUCHST Du diese Option. Sie aktiviert die Nutzung der FreeBSD-eigenen pthread-Implementierung in libc_r.<br />
	Dies setzt voraus, dass Du den gcc-Kompilierer nutzt, denn dieser hat einen speziellen Schalter \"-pthread\", der das linken gegen libc_r anstatt der normalen libc ermöglicht";
$template['install']['tree2a1']="Linke gegen libresolv. Ich vermute, dies wird bei Solaris benötigt";
$template['install']['tree2a2']="Linke gegen libsocket. Ich vermute, dies wird bei Solaris benötigt";
$template['install']['tree2a3']="Linke gegeb libnsl. Ich vermute, dies wird bei Solaris benötigt";
$template['install']['tree2a4']="
	Linke gegen libcompat. Dies kann bei einigen Systemen benötigt sein...<br />
	aber ich weiß nciht, bei welchen. Wenn Du es hilfreich findest, schick mir ein E-Mail";
$template['install']['tree2a5']="
	Deaktiviert die Erstellung der Laufzeit-Type-Informationen des Kompiliererscompiler. Dies wird hauptsächlich für Qt-embedded gebraucht";
$template['install']['tree2a6']="
	Deaktiviere die Nutzung der XBell-Funktion (nötig, wenn Du KVIrc mit qt-embedded kompilieren willst (kein X))";
$template['install']['tree2a7']="Du brauchst diese Option, um KVIrc mit qt-embedded zu kompilieren";
$template['install']['tree2a8']="
	Linke explizit gegen die angegebenen Bibliotheken.<br />
	Beispiel: --with-other-libs=\"-lmylib -lstrangesystemsupport -lmybraindamagedsyscallfix\"";
$template['install']['tree2a9']="
	Füge die angegebenen Bibliothekensuchpfade explizit hinzu.<br />
	Beispiel: --with-other-ldirs=\"-L/home/pippo/lib/ -L/meine/sicheren/Bibliotheken/\"";
$template['install']['tree2b1']="
	Füge die angegebenen include-Suchpfade explizit hinzu.<br />
	Beispiel: --with-other-idirs=\"-I/home/pippo/include/ -I/tmp/include/\"";
$template['install']['tree2b2']="
	Deaktiviere die Inter-Prozess-Kommunikation.<br />
	Es wird Dir nicht möglich sein, Befehle von ausserhalb an laufende KVIrc-Sitzungen zu senden. Das heißt, dass jedesmal, wenn Du KVIrc aufrufst, eine neue Sitzung gestartet wird.<br />
	Wenn Du diesen Schalter nicht benutzt, wird eine neue Sitzung nur dann gestertet, falls keine auf dem gleichen Display läuft, oder eine \"neue Sitzung\" über einen Kommandozeilenschalter erzwungen wurde.<br />
	Wenn eine Sitzung bereits läuft, wird die Kommandozeile an diese Sitzung via IPC (X-basierte Kommunikation) weitergereicht. Diese Option spart einige KB an KVIrc. Du kannst sie nutzen, wenn Du wirklich wenig Speicher hast, andernfalls ist IPC ein nettes Merkmal";
$template['install']['tree2b3']="
	Du solltest diese Option nicht brauchen.<br />
	Sie verhindert die Kompilierung von Code, der auf einem bestimmten Kompilierermerkmal beruht (Sprung zu einer dynamischen Marke mit einem goto). Nicht alle Kompilierer unterstützen dies, aber configure sollte dies automatisch erkennen. Wenn Du Kompilierungsfehler bei kvi_ircview.cpp bekommst, solltest Du diese Option ausprobieren...<br />
	Dies kann auch helfen, wenn configure scheinbar bei der Prüfung von \"Kompilierunterstützung für dynamische Marken (compiler dynamic label support)\" hängt";
$template['install']['tree2b4']="
	Deaktiviert die X-drawing-Aufrufe (immer aktiviert mit Qt >= 3.0.0). Dies kann helfen, wenn Du Probleme mit Schriften im View-Fenster hast";
$template['install']['tree2b5']="
	Kompiliere nicht den Begrüßungsbildschirm-Code.<br />
	Die entfernt das sczöne \"Banner\", das erscheint, während KVIrc startet. Dies hilft, die ausführbare Datei ein paar KB kleiner zu machen und ein paar Millisekunden während des Starts zu sparen. Nutze dies, wenn Du versuchst, ein leistungskritisches Programm zu erstellen und Du sowohl wenig Speicher, als auch wenig CPU-Zeit hast :)";
$template['install']['tree2b6']="
	Dies aktiviert einige Kurzinfos in den Optionsdialogen. Es ist hilfreich, um ein kleineres Programm und Module zu erhalten. Nutze diese Option, wenn Du ein KVIrc-Guru bist und keine Tipps für den den Umgang mit den Optionen brauchst";
$template['install']['tree2b7']="
	Deaktiviere explizit die Nutzung der GSM-Bibliothek. Dies sperrt den DCC VOICE gsm codec, aber kann vielleicht helfen, wenn die Kompilierung wegen irgendwas bezüglich GSM abbricht :)";
$template['install']['tree2b8']="
	Deaktiviere explizit die DCC-VOICE-Sound-Unterstützung. Dies kann helfen, wenn Du Probleme hast, src/modules/dcc/voice.cpp zu kompilieren. Es deaktiviert die Sound-Unterstützung (und daher ist DCC VOICE nicht benutzbar)";
$template['install']['tree2b9']="
	Deaktiviert SSL. Die SSL-Unterstützun ist automatisch aktiviert, wenn configure OpenSSL findet. Diese Option lässt diese Suche aus";
$template['install']['tree2c1']="Debug stuff...enables memory allocation profiling (Nutze es nicht :)";			//TODO
$template['install']['tree2c2']="
	Aktiviert malloc() Speicherchecks. Dies gibt eine nette Nachricht aus, wenn Deinem System der Speicher ausgeht... Es kann Dir nciht ersparen, neuen RAM zu kaufen, aber zumindest weißt Du, dass Dein System zu wenig Speicher hat und es nicht die Schuld von KVIrc ist. Eigentlich solltest Du keinen Grund haben, es zu nutzen";
$template['install']['tree2c3']="
	Kleinere Hash-Tabellen-Optimierungen: Höhere Speichernutzung, aber schnellere Benutzersuchen. Nutze dies, wenn Du öfters in Kanälen mit vielen Benutzern bist. (Dies ist nicht kritisch)";
$template['install']['text21']="Schließlich musst Du aufrufen:";
$template['install']['text22']="Meine normalen Optionen sind zum Beispiel:";
$template['install']['text23']="Auf FreeBSD fand ich diese Befehlszeile nützlich:";
$template['install']['text24']="Wenn das configure-Skript erfolgreich durchgelaufen ist, kannst Du zum nächsten Schritt übergehen.";
$template['install']['text25']="Kompilieren (erforderlich)";
$template['install']['text26']="Dieser Schritt ist einfach:";
$template['install']['text27']="Kreuze Deine Finger und starte";
$template['install']['text28']="
	Wenn Dein make kein GNU make ist (zum Beispiel auf FreeBSD), solltest Du stattdessen \"gmake\" nutzen.<br />
	Die Kompilierung dauert zwischen 6-7 Minuten bis hin zu mehreren Stunden, abhänging vom System und dessen Auslastung.<br /><br />
	Wenn die Kompilierung erfolgreich war, starte";
$template['install']['text29']="
	Das selbe wie oben: Nutze \"gmake install\", wenn Dein make kein GNU make ist.<br /><br />
		Die installiert das ausführbare Programm nach /usr/local/bin<br />
		Falls Du eine vorhergehende KVIrc-Installation hattest, wird der Standard-prefix auf das Verzeichnis zeigen, in dem die alte ausführbare KVIrc-Datei gefunden wurde.<br /><br />
		Stelle sicher, dass /usr/local/lib in Deiner /etc/ld.so.conf enthalten ist. Falls nicht, füge es hinzu und starte";
$template['install']['text30']="
	Wenn Du KDE-Unterstützung gewählt hast, kann es sein, dass die Installation die Dateien unterhalb von \$KDEDIR anstatt /usr/local platziert hat. Dies sollte ok sein, da
		KDE erfordert, dass sein Bibliothekenverzeichnis in /etc/ld.so.conf steht";
$template['install']['text31']="Viel Spaß";
$template['install']['text32']="Dies ist alles, Leute.";
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
	Die Mailingliste hat <a href=\"http://lists.omikron.net/mailman/listinfo/kvirc/\">hier</a> ein Interface.<br />
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
$template['mirror']['title2']="Aufsetzen eines Spiegels von ftp.kvirc.net";
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
	Zur Zeit der Seitenerstellung umfasst das komplette FTP-Archiv ca. 500 MB. Wenn Du nicht den Platz für einen kompletten Spiegel hast, kannst Du einen Teilspiegel errichten, indem Du nur ausgewählte Verzeichnisse von ftp.kvirx.net spiegelst.";
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

/* require.php start */
$template['require']['title']="Voraussetzungen (3.0.0 Zweig)";
$template['require']['tree1']="Unix Version (Quelltext):";
$template['require']['tree1a']="Ein funktionierendes UNIX-System, kompilationstauglich";
$template['require']['tree1b']="
	Das <a href=\"http://www.trolltech.com\">QT GUI toolkit</a> >= 3.0.5 (ältere Versionen <b>können</b> funktionieren)";
$template['require']['tree1c']="
	<a href=\"http://www.gnu.org/software/automake/\">automake</a> 1.5";
$template['require']['tree1d']="<a href=\"http://www.zlib.org/\">Zlib Bibliothek</a>";
$template['require']['tree1e']="
	<a href=\"http://www.cpan.org\">Perl</a> (Um die Online-Dokumentation zu erstellen)";
$template['require']['tree1f']="
	<a href=\"http://www.kde.org\">KDE</a> Bibliotheken gegen <b>die gleiche</b> Version von Qt gelinked (optional)";
$template['require']['tree1g']="
	Prüfe, ob Deine Distribution separate Entwicklungsbibliotheken hat. Falls ja, musst Du diese Pakete installieren. Diese Pakete haben oft \"-dev\" im Namen";
$template['require']['tree2']="Unix Version (Binärpakete):";
$template['require']['tree2a']="Ein funktionierendes Unix System";
$template['require']['tree2b']="
	Das <a href=\"http://www.trolltech.com\">QT GUI toolkit</a> >= 3.0.5 (ältere Versions <b>können</b> funktionieren)";
$template['require']['tree3']="Windows Version (Quelltext):";
$template['require']['tree3a']="
	Die freie Version vom <a href=\"ftp://ftp.trolltech.com\">QT GUI toolkit</a> für Windows >= 2.3.0";
$template['require']['tree3b']="<a href=\"http://www.zlib.org/\">Zlib Bibliothek</a>";
$template['require']['tree3c']="Etwas Glück";
$template['require']['tree4']="Windows Version (Binärpakete):";
$template['require']['tree4a']="Hoffentlich nichts";
$template['require']['tree5']="Mac OS X (Quelltext):";
$template['require']['tree5a']="Folge den Instruktionen in \"doc (INSTALL-MacOS.txt)\"";
$template['require']['tree6']="Mac OS X (Binärpakete):";
$template['require']['tree6a']="
	Hoffentlich nichts. Öffne einfach die .dmg-Datei und ziehe das Icon in Deinen Applikationsordner.";
$template['require']['titleold']="Voraussetzungen (alter 2.1.1 Zweig)";
$template['require']['treeold1']="Ein funktionierendes UNIX System";
$template['require']['treeold2']="Das <a href=\"http://www.trolltech.com\">QT GUI toolkit</a> >= 2.3.0";
$template['require']['treeold3']="<a href=\"http://www.kde.org\">KDE</a> Bibliotheken (optional)";
/* require.php end */

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
	<a href=\"ftp://ftp.kvirc.net/pub/kvirc/snapshots/\">dem KVIrc FTP</a> oder im \"snapshots\"-Verzeichnis eines FTP-Spiegels schauen.";
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
	<p>Nach sieben Jahren Entwicklung ist KVIrc ausgereift und ein komplett ausgestattetes IRC-Anwenderprogramm, ein exzellenter Begleiter für Deine täglichen IRC-Sitzungen.</p
	<p>Die letzte stabile Version is <a href=\"/?id=news&amp;story=2005.02.27.16.29.1.story&amp;dir=2005.02&amp;lang=$lang\">3.2.0 \"Realia\"</a>.
	Sie wurde am 27. Februar 2005 veröffenticht.
	Sie kann als Quelltext von der <a href=\"?id=download&amp;lang=$lang\">download</a>-Seite bezogen werden.</p>
	<p>Wenn Du offizielle Veröffentlichungen suchst, schau mal in <a href=\"?id=releases&amp;lang=$lang\">diese Rubrik</a>, diese werden seltener veröffetnlicht, sind aber die stabisten. Wähle Deine Version zwischen Linux, Windows, MacOSX oder Quelltextpaket.</p>
	<p>Snapshots befinden sich <a href=\"?id=snapshots&amp;lang=$lang\">hier</a>, während SVN <a href=\"?id=SVN&amp;lang=$lang\">hier</a> gefunden werden kann.</p>
	<p>Beachte auch die <a href=\"?id=install&amp;lang=$lang\">Installationshinweise</a>, <a href=\"?id=tutorials&amp;lang=$lang\">Tutorien</a>, <a href=\"?id=translation&amp;lang=$lang\">Übersetzungen</a> und <a href=\"?id=themes&amp;lang=$lang\">Themen</a>, um eine mehr angepasste KVIrc-Version zu erhalten =)</p>";
/* status.php end */

/* SVN.php start */
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
	Du kannst auch im SVN stöbern via <a href=\"https://SVN.kvirc.de/kvirc/browser/\">https://SVN.kvirc.de/</a>";
/* SVN.php end */

/* themes.php start */
$template['themes']['title']="Themen";
$template['themes']['text1']="Hier kannst Du einige schöne Themen herunterladen";
$template['themes']['text2a']="Wie kann ich ein Thema installieren";
$template['themes']['text2b1']="Lade das Thema herunter";
$template['themes']['text2b2']="Entpacke die heruntergeladene Datei in";
$template['themes']['text2b2a']="Pfad zur heruntergeladenen Themendatei";
$template['themes']['text2b3']="Öffne den KVIrc Themenmanager";
$template['themes']['text2b4']="Doppelklicke auf das neue Thema";
$template['themes']['text2b5']="Viel Spaß";
$template['themes']['text3a']="Wie kann ich ein Thema erstellen";
$template['themes']['text3b1']="Es gibt eine kleine Kurzanleitung (englisch), die Du";
$template['themes']['text3b2']="hier";
$template['themes']['text3b3']="finden kannst und eine italienische Version";
$template['themes']['text3b4']="Die englische Kurzanleitung ist auch im KVIrc-Paket enthalten";
$template['themes']['text4a']="Ich habe ein Thema erstellt. Wie kann ich es mit anderen teilen";	
$template['themes']['text4b']="Du kannst es an";
$template['themes']['text4c']="senden, inklusive eines Themennamens, Beschreibung, Version, Spitzname, Homepage und E-Mail, erlaube uns (oder nciht) diese auf der Homepage zu zeigen";
$template['themes']['screenshot']="Screenshot";
$template['themes']['theme1']="Eine Augenweide, basierend auf dem Marble-Icon-Set.";
$template['themes']['theme2']="Ein klares Thema mit Crystal-Icons. Einige Icons sind dem Marble-Icon-Set entnommen.";
$template['themes']['theme3']="Ein Thema mit grünem Hintergrund.";
$template['themes']['theme4']="Ein dunkles Thema.";
$template['themes']['theme5']="White aqua rounded.";
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
/* themes.php end */

/* tools.php start */
$template['tools']['title']="Werkzeuge";
$template['tools']['text1']="Hier findest Du einige KVIrc-bezoge Werkzeuge";
$template['tools']['tool1']="KVS-Syntax-Hervorhebung für Notepad++";
$template['tools']['tool2']="Ein einfaches TCL-Skript für eggdrop-Bots, damit diese auf einige CTCP-Anfragen antworten";
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
	Wenn Du interessiert bist, KVIrc in eine neue Sprache zu übersetzen, kannst Du hier eine nette Kurzanleitung finden.<br />
	Einige Sprachen werden (fast) täglich aktualisiert, andere müssen einen neuen Bearbeiter finden. Wenn Du helfen willst, die aktuelle Unterstützung für Deine Sprache zu verbessern, kontaktiere bitte den <b>letzten Bearbeiter,</b> welcher hier gelistet ist:";
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
	Wenn sie nciht dort ist, gehe zurück zu Schritt 2.";
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
