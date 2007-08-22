<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

/* index.php start */
// languages
$template['index']['italian']="Italiano";
$template['index']['english']="Inglese";
$template['index']['german']="Tedesco";
$template['index']['russian']="Russo";
$template['index']['french']="Francese";
$template['index']['spanish']="Spagnolo";
$template['index']['bulgarian']="Bulgaro";
$template['index']['czech']="Ceco";
$template['index']['dutch']="Olandese";
$template['index']['polish']="Polacco";
$template['index']['portuguese']="Portoghese";
$template['index']['brazilian']="Brasiliano";
$template['index']['serbian']="Serbo";
$template['index']['hungarian']="Hungherese";
$template['index']['croatian']="Croato";
$template['index']['latvian']="Lettone";

// the project
$template['index']['theproject']="il progetto";
$template['index']['status']="stato";
$template['index']['features']="caratteristiche";
$template['index']['license']="licenza";
$template['index']['require']="richieste";
$template['index']['screens']="screenshot";
$template['index']['bugtrack']="KVIrc bugtrack";
// running kvirc
$template['index']['running']="usare KVIrc";
$template['index']['download']="download";
$template['index']['releases']="release ufficiali";
$template['index']['snapshots']="snapshot";
$template['index']['svn']="SVN";
$template['index']['install']="installazione";
// documentation
$template['index']['docs']="documentazione";
$template['index']['faq']="FAQ";
$template['index']['kviman']="manuale di KVIrc";
$template['index']['tutorials']="tutorial";
$template['index']['translations']="traduzioni";
// graphic suite
$template['index']['graphsuite']="suite grafica";
$template['index']['themes']="temi";
$template['index']['splash']="splash screen";
$template['index']['banners']="banner";
$template['index']['arts']="arte";
// misc
$template['index']['misc']="misc";
$template['index']['honor']="onore &amp; gloria";
$template['index']['scripts']="script";
$template['index']['addons']="addon";
$template['index']['tools']="strumenti";
$template['index']['changelog']="changeLog";
$template['index']['svncommits']="commit SVN";
// contact
$template['index']['contact']="contatti";
$template['index']['ml']="mailing list";
$template['index']['archive']="archivio";
$template['index']['contribute']="collaborazioni";
$template['index']['help']="aiuto";
$template['index']['donation']="fai una donazione";
// forum
$template['index']['forum']="forum";
// other
$template['index']['quickdnl']="download veloce";
// search
$template['index']['search']="Cerca";
$template['index']['go']="VAI";
// news
$template['index']['latestnews']="ultime notizie";
$template['index']['allnews']="Tutte le Notizie";
// mirrors
$template['index']['mirrors']="mirror";
$template['index']['wwwmirrors']="mirror WWW";
$template['index']['ftpmirrors']="mirror FTP";
$template['index']['mirrorstext1a']="Contribuire al progetto KVIrc facendo un mirror dei file &egrave; molto semplice e apprezzato; in";
$template['index']['mirrorstext1b']="questa pagina";
$template['index']['mirrorstext1c']="troverai le istruzioni passo passo per creare un mirror www o ftp (o entrambi).";
$template['index']['mirrorstext2']="FTP non europei sono molto richiesti.";
$template['index']['mirrorstitle']="mirror www e ftp";
// layouts
$template['index']['oldlayout']="layout vecchi";
$template['index']['oldsite']="vecchio sito";
$template['index']['iakkohome']="home di iakko";
// help
$template['index']['helptext1a']="se hai bisogno di aiuto il modo pi&ugrave; veloce &egrave; contattarci tramite";
$template['index']['helptext1b']="la mailing list pubblica di KVIrc";
$template['index']['helptext1c']="o entrare nei canali dedicati";
// bugs
$template['index']['bugreport']="bug report";
$template['index']['bugstext']="i bug possono essere riportati e visti usando il sistema di bugtrack di KVIrc disponibile al seguente link:";
// more docs
$template['index']['moredocs']="documentazione";
$template['index']['officialdocs']="documentazione ufficiale";
$template['index']['docsauto']="indice autogenerato";
// other
$template['index']['latestscreen']="ultimo screenshot";
$template['index']['footer']="questo sito si vede meglio con un monitor";
/* index.php end */

/* custom vars start */
$template['custom']['author']="Autore";
$template['custom']['description']="Descrizione";
$template['custom']['homepage']="Homepage";
$template['custom']['download']="Scarica";
$template['custom']['date']="Data";
$template['custom']['size']="Dimenzione";
$template['custom']['version']="Versione";
$template['custom']['type']="Tipo";
/* custom vars end */

/* addons.php start */
$template['addons']['title']="Addon";
$template['addons']['text1']="Qui puoi trovare un set di addon per KVIrc";
$template['addons']['text1b']="
	Tutti questi addon richiedono almeno la versione 3.2.1 (snapshot SVN).<br />
	<b>Scegli la versione</b> di KVIrc";
$template['addons']['text2']="Per installare un addon";
$template['addons']['tree1']="<b>Scarica</b> l'addon e <b>decomprimilo</b> da qualche parte";
$template['addons']['tree2']="
	Premi <b>CTRL+Alt+M</b> per aprire il Gestore degli Addon (o aprilo dal menu Impostazioni)";
$template['addons']['tree3']="Premi il pulsante \"<b>Installa Addon</b>\" sulla destra";
$template['addons']['tree4']="
	Naviga fino al punto dove hai decompresso l'addon e seleziona il file <b>install.kvs</b>";
$template['addons']['sorry']="Spiacente, non sono stati trovati addon per la versione di KVIrc specificata";
$template['addons']['addon1']="Dopo un periodo di inattivit&agrave; va automaticamente in away";
$template['addons']['addon2']="Fornisce dei pulsanti sulla toolbar per diverse operazioni sul canale";
$template['addons']['addon3']="Mostra le statistiche per un canale joinato";
$template['addons']['addon4']="Un semplice script per sapere da dove arriva una connessione";
$template['addons']['addon5']="Inserisce automaticamente dati crittati per le tue conversazioni crittate";
$template['addons']['addon6']="Fornisce scorciatoie e pulsanti sulla toolbar per il proxy IRC EZBounce";
$template['addons']['addon7']="Un semplice gioco uno-a-uno";
$template['addons']['addon8']="Un semplice F-Server";
$template['addons']['addon9']="Un semplice script per ridere, baciare e scrivere in modo divertente coi tasti F3-F8";
$template['addons']['addon10']="Un semplice sript per annunciare gli mp3 che stai ascoltando con possibilit&agrave; di condividerli";
$template['addons']['addon11']="Un simpatico \"passatempo\"";
$template['addons']['addon12']="Mostra feed RSS da varie sorgenti";
$template['addons']['addon13']="
	Permette la pubblicizzazione e la condivisione della canzone ascoltata su canali e query";
$template['addons']['addon14']="Un semplice script per gestire lezioni pubbliche";
$template['addons']['addon15']="Implementa un semplice Quiz Bot";
$template['addons']['addon16']="Permette di inviare messaggi SMS attraverso diversi servizi web";
$template['addons']['addon17']="Permette di avvisare, kickare e bannare u utente che dice parole proibite";
$template['addons']['addon18']="Un sistema di auto op/voice/ban per i tuoi canali (addon dallo script Twins)";
$template['addons']['addon19']="
	Colora il tuo testo nei canali, query e caht DCC (addon dallo script Twins)";
$template['addons']['addon20']="Una semplice barra per il lag con tre differenti colori (addon dallo script Twins)";
$template['addons']['addon21']="
	Controlla remotamente il tuo media player con una semplice interfaccia, e offre la tua musica agli utenti (addon dallo script Twins)";
$template['addons']['addon22']="Controlla l'host precedente di un utente";
$template['addons']['addon23']="Semplice gestore dei set di icone. Puoi scegliere le vecchie icone, le nuove icone coi i vecchi smile o le nuove icone";
/* addons.php end */

/* archive.php start */
$template['archive']['title']="Archivio Mailing List";
$template['archive']['text']="
	Qui puoi trovare gli archivi della mailing list: questo &egrave; il primo posto da guardare se hai qualche problema.<br />
	Puoi navigare gli archivi manualmente o usare il form sotto per cercare.";
$template['archive']['search']="Google Search";
$template['archive']['jan']="Gennaio";
$template['archive']['feb']="Febbraio";
$template['archive']['mar']="Marzo";
$template['archive']['apr']="Aprile";
$template['archive']['may']="Maggio";
$template['archive']['jun']="Giugno";
$template['archive']['jul']="Luglio";
$template['archive']['aug']="Agosto";
$template['archive']['sep']="Settembre";
$template['archive']['oct']="Ottovre";
$template['archive']['nov']="Novembre";
$template['archive']['dec']="Dicembre";
/* archive.php end */

/* arts.php start */
$template['arts']['title']="Arte";
$template['arts']['text']="Una collezione di arti varie relative a KVIrc.";
$template['arts']['desc1']="
	Sei variazioni di colori per un bel tema simil fumetto per questi splash screen. Devi solo salvare l'immagine scelta come \$HOME/.kvirc/pics/kvi_splash.png. Puoi anche usare questi splash come banner o come punto di partenza per la tua grafica.";
$template['arts']['desc2']="Un'altra visione di \"Marmalade\" by suspiria :)";
$template['arts']['desc3']="Huh ?";
$template['arts']['desc4']="Un punto di partenza per un avatar";
$template['arts']['desc6']="Lei usa questo come splash screen... :)";
/* arts.php end */

/* banners.php start */
$template['banners']['title']="Banner";
$template['banners']['text1']="
	Questa &egrave; una collezione di banner fatti da diversi artisti: salva le immagini e usale sul tuo sito :)";
$template['banners']['text2']="Invia i tuoi banner a";
$template['banners']['bannerby']="Banner di";
/* banners.php end */

/* contribute.php start */
$template['contribute']['title']="Collabora al progetto";
$template['contribute']['text1']="
	Il progetto KVIrc &egrave; aperto ai contributi in molte maniere. Puoi coinvolgerti in diversi processi che richiedono vari gradi di abilit&agrave; di sviluppo (da \"quasi nulla\" a \"guru\").";
$template['contribute']['text2']="Contribuire al codice";
$template['contribute']['text3']="
	La cosa principale &egrave; ovviamente la scrittura del codice. Lo sviluppo del cuore di KVIrc e dei moduli esterni richiedono una buona conoscenza di C++.<br />
	La GUI di KVIrc usa le librerie Qt (ed eventualmente KDE) e di conseguenza anche la conoscenza di queste librerie &egrave; richiesta. Ci sono molte aree di interesse nell'albero dei sorgenti: reti, crittografia, compressione dei dati, parser delle lingue...<br />
	Ogni livello di contributo &egrave; prezioso: dalle patch a doppia linea all'implementazione e mantenimento di nuove caratteristiche.";
$template['contribute']['text4']="Contribuire alla grafica";
$template['contribute']['text5']="
	La \"V\" in KVIrc sta per \"Visuale\". La grafica aiuta gli utenti a navigare nell'interfaccia del programma e a riconoscere velocemente le molte funzioni che il programma fornisce. Abbiamo bisogno di icone, immagini di dialogo, splash screen, loghi, un personaggio mascotte... Una bella idea sarebbe di implementare un tema completo di grafica...";
$template['contribute']['text6']="Contribuire alla documentazione";
$template['contribute']['text7']="
	La documentazione &egrave; importante come il programma stesso.<br />
	Molte caratteristiche di KVIrc sono invisibili all'utente medio perch&eacute; non sono menzionate in nessun documento pubblico.<br />
	Contribuire alla documentazione significa: collezionare le FAQ e metterle in un documento leggibile, scrivere documentazione di caratteristiche specifiche, scrivere tutorial.<br />
	Serve un \"introduzione a KVIrc per principianti\" ben scritto (pu&ograve; anche essere una sorta di introduzione a IRC).";
$template['contribute']['text8']="Tradurre i messaggi di KVIrc";
$template['contribute']['text9']="
	KVIrc &egrave; un'applicazione basata sul testo: le stringhe dell'interfaccia hanno bisogno di essere tradotte in pi&ugrave; lingue possibili. Devi solo conoscere una lingua non inglese: lo schema di traduzione &egrave; basato su gettext e richiede una conoscenza molto piccola di programmazione.";
$template['contribute']['text10']="Tradurre la documentazione";
$template['contribute']['text11']="
	La parte pi&ugrave; alla base della documentazione dovrebbe essere tradotta in lingue non inglesi cos&igrave; ognugno pu&ograve; capire completamente il \"cuore\" delle caratteristiche di KVIrc.<br />
	Questo richiede ancora meno conoscenza di programmazione della traduzione dei messaggi.";
$template['contribute']['text12']="Sviluppo e mantenimento del sito";
$template['contribute']['text13']="
	Il sito web ha bisogno di essere esteso e mantenuto.<br />
	Per questo processo devi conoscere php, xhtml, css e avere qualche idea :)";
$template['contribute']['text14']="Mirror";
$template['contribute']['text15']="
	Mirror FTP e WWW sono sempre i benvenuti: attualmente non abbiamo mirror fuori dall'Europa.<br />
	Il sito &egrave; scritto in php e aggiornato via SVN, di conseguenza la macchina che fa il mirror deve avere installato php e un client SVN.<br />
	L'archivio FTP &egrave; attorno ai 200 MB; possono essere anche fatti mirror parziali.<br />
	Informazioni dettagliate per settare un mirror WWW o FTP sono disponibili <a href=\"?id=mirroring&amp;lang=$lang\">qui</a>.";
$template['contribute']['text16']="Relazioni pubbliche";
$template['contribute']['text17']="
	Abbiamo bisogno persone che parlino di KVIrc, scrivano articoli, descrizioni, riviste e che cerchino contributori...";
$template['contribute']['text18']="Chi contattare";
$template['contribute']['text19']="
	Una volta che decidi che vuoi contribuire in qualche modo puoi mandare la tua proposta via mail a <a href=\"mailto:pragma@kvirc.REMOVE.THE.ANTISPAM.WORDS.net\">Pragma</a>.<br />
	Un altro posto dove puoi inviare la tua proposta/disponibilit&agrave; &egrave; il canale <a href=\"irc://chat.ircnet.org/#kvirc\">#KVIrc</a> su IRCNet, <a href=\"irc://irc.azzurra.org/#KVIrc.net\">#KVIrc.net</a> su Azzurra o <a href=\"irc://irc.freenode.org/#kvirc\">#KVIrc</a> su FreeNode (conosciuta come rete OpenProjects).";
/* contribute.php end */

/* donate.php start */
$template['donate']['title']="Supporta il progetto KVIrc con Donazioni Monetarie";
$template['donate']['text1']="
	KVIrc &egrave; disponibile gratuitamente e sempre lo sar&agrave;: non &egrave; richiesto nessun pagamento per scaricare, usare, modificare e ridistribuire il codice.";
$template['donate']['text2']="
	Molte delle risorse fisiche su cui KVIrc vive (come i server WWW e FTP) sono donate gratuitamente dai membri del Team di KVIrc. Dall'altro lato il progetto richiede un incredibile ammontare di ore di programmazione cos&igrave; come molte cose che devono essere pagate come gli aggiornamenti hardware, registrazione del dominio, il costo dell'hosting, libri... Se ti piace KVIrc considera il supporto finanziario del progetto: puoi fare donazioni usando PayPal.";
$template['donate']['text3']="
	Il pulsante sotto ti porter&agrave; al sito di PayPal dove potrai specificare l'ammontare della donazione e la valuta che vuoi usare. Puoi donare qualsiasi ammontare che desideri: tutto verr&agrave; apprezzato. Se non hai mai usato PayPal prima d'ora, il sito ti chieder&agrave; i dettagli della tua carta di credito, il tuo paese, l'indirizzo e il numero di telefono di casa. Queste informazioni sono rischieste per fare la transazione e non &egrave; visibile in alcun modo dal Team KVIrc.";
$template['donate']['text4']="
	Dopo che hai fatto la donazione verrai contattato per e-mail e ti verr&agrave; chiesto se la tua donazione pu&ograve; essere listata in questa pagina. Una volta che il denaro donato viene usato, la sua destinazione verr&agrave; òostata insieme al donatore e all'ammontare della donazione.";
$template['donate']['text5']="Grazie! :)";
$template['donate']['title2']="Donazioni Recenti";
$template['donate']['donation']="donati da";
$template['donate']['alttext']="Fai una donazione al progetto KVIrc con PayPal";
/* donate.php end */

/* download.php start */
$template['download']['title']="Scarica KVIrc";
$template['download']['text1']="Puoi ottenere KVIrc in 3 modi:";
$template['download']['text2']="Pacchetti di release ufficiali";
$template['download']['text3']="
	I pacchetti ufficiali sono rilasciati meno frequentemente ma sono i pi&ugrave; stabili. Ogni pacchetto sorgente &egrave; ben testato e verr&agrave; probabilmente compilato sul tuo sistema. Puoi avere anche la possibilit&agrave; di trovare un pacchetto binario che vada bene per il tuo systema. Le FAQ e la documentazione si riferiscono a questo tipo di pacchetto.";
$template['download']['text4']="Snapshot di sviluppo";
$template['download']['text5']="
	Gli snapshot di sviluppo sono pacchetti non ufficiali estratti dall'SVN su una base non regolare. Ogni snapshot riflette lo stato dell'SVN ad una particolare revisione e puoi trovarne facilmente di molto recenti. I pacchetti sono stati testati su almeno due sistemi diversi e hanno una buona possibilit&agrave; di compilare per tuo conto. Sono anche disponibili alcuni pacchetti binari.";
$template['download']['text6']="Sorgenti aggiornati dall'SVN";
$template['download']['text7']="
	Gli ultimissimi sorgenti possono essere scaricati usando il sistema SVN. Stiamo cercando di tenere l'SVN il pi&ugrave; possibile \"pulito\" ma non &egrave; garantito che i sorgenti compilino. SVN fornisce solo sorgenti: non ci sono binari.";
/* download.php end */

/* faq.php start */
$template['faq']['title']="FAQ";
$template['faq']['text1a']="Come joino un canale";
$template['faq']['text1b']="Scrivi \"/join #nomedelcanale\"";
$template['faq']['text2a']="Non riesco a compiplare KVIrc (qualsiasi versione)";
$template['faq']['text2b']="
	LEGGI le istruzioni nel file INSTALL: molti problemi comuni possono essere risolti settando le corrette variabili d'ambiente e giocando con le opzioni del ./configure. Se il file INSTALL non ti aiuta puoi provare a entrare su #KVIrc su IRCnet o FreeNode o su #KVIrc.net su Azzurra: ci sono molti utenti esperti che possono aiutarti. Se ancora non riesci a uscirne, puoi postare il tuo errore sulla mailing list";
$template['faq']['text3a']="Non riesco a connettermi a un server IPv6";
$template['faq']['text3b1']="
	Prima di tutto assicurati che il tuo stack IPv6 sia settato correttamente.<br />
	Puoi eseguire un ping6 su altre macchine?";
$template['faq']['text3b2']="
	Il supporto IPv6 &egrave; abilitato nel tuo KVIrc?.<br />
	Per controllare, prova";
$template['faq']['text3b3']="
	nella riga di comando di KVIrc. Dovresti ottenere una lista di caratteristiche separate da virgola compilate nell'eseguibile. Se la lista contiene \"IPv6\" il supporto &egrave; compilato, altrimenti devi controllare la fase di compilazione per trovare cos'&egrave; andato storto.
	Per connettere a un server IPv6 puoi usare /server -i &lt;servername&gt;
	Se puoi pingare altre macchine IPv6, il supporto IPv6 &egrave; compilato e non riesci ancora a connettere ad un server IPv6 *esistente* potresti aver trovato un bug :) Segnalalo";
$template['faq']['text4a']="Come metto in autojoin i canali";
$template['faq']['text4b1']="
	Ci sono diversi modi per farlo.
	Ad esempio";
$template['faq']['text4b2']="
	Selezione \"Scripting/Modifica Eventi\" dal menu di KVIrc<br />
	Cerca l'evento \"OnIrc\" nel pannello di sinistra della finestra che apparir&agrave;.<br />
	Clicca col destro su quell'evento e seleziona \"Aggiungi gestore\".<br />
	Verr&agrave; creato un gestore \"predefinito\". Nel pannello di destra scrivi:<br />
	join #kvirc<br />
	join #kde-users<br />
	join #somechannel<br />
	....<br />
	Ora clicca OK e hai finito: hai appena creato un gestore per un evento.<br />
	Riconnetti al server e KVIrc autojoiner&agrave; i canali che hai scelto";
$template['faq']['text4b3']="
	Un'altra opzione (pi&ugrave; bella, se usi diversi server) &egrave; di andare nella pagina di configurazione dei server e cliccare il pulsante 'Avanzate' sul server selezionato.<br />
	C'&egrave; un evento specifico per il server chiamato \"Alla connessione\"";
$template['faq']['text5a']="Su Windows KVIrc sembra rallentare qualche volta";
$template['faq']['text5b']="
	Questo &egrave; causato di solito dalla grafica pesante: cerca di rimuovere un po' di effetti grafici come la falsa trasparenza. Ho sperimentato che succede spesso sui monitor a 32 bit. Cambiando in 16 o 24 bit ti pu&ograve; aiutare";
$template['faq']['text6a']="Come connetto a un server SSL";
$template['faq']['text6b1']="Usa";
$template['faq']['text6b2']="Dovrebbe funzionare anche su IPv6.<br />
	Se non funziona il tuo eseguibile potrebbe non avere il supporto SSL.<br />
	Per cercarlo scrivi";
$template['faq']['text6b3']="nella riga di comando di KVIrc. Se \"SSL\" non &egrave; nella lista devi tornare alla fase di compilazione e vedere cos'&egrave; andato storto";
$template['faq']['text7a']="Come uso le DCC con SSL";
$template['faq']['text7b']="dovrebbe funzionare";
$template['faq']['text8a']="Mi serve un certificato SSL";
$template['faq']['text8b']="No non dovresti averne bisogno, ma puoi usarlo se lo vuoi";
$template['faq']['text9a']="Come creo un certificato SSL";
$template['faq']['text9b']="
	Un certificato auto-firmato pu&ograve; essere creato usando lo script perl CA.pl incluso nella distribuzione OpenSSL. Sar&agrave; qualcosa del tipo";
$template['faq']['text10a']="Non riesco a far usare a KVIrc il mio certificato SSL in una DCC";
$template['faq']['text10b']="
	Il protocollo SSL non richiede che il \"client\" mandi il certificato: &egrave; inviato solo se \"l'altra parte\" lo richiede (non &egrave; il caso di KVIrc).<br />
	L'altra parte potrebbe avere un certificato e puoi settarlo nella pagina delle opzioni SSL.<br />
	Se la tua Chiave Privata &egrave; salvata dentro al certificato metti lo stesso file come Certificato e ChiavePrivata.<br />
	Ricorda di settare la password se &egrave; richiesta";
$template['faq']['text11a']="KVIrc crasha quando un certificato &egrave; usato sotto Windows";
$template['faq']['text11b']="
	Questo probabilmente &egrave; un bug della dll SSL fornita con la versione windows di KVIrc.<br />
	Prova a usare diverse versioni di questa dll";
$template['faq']['text12a']="/me non supporta il carattere '\$' character";
$template['faq']['text12b']="
	Questo NON &egrave; un bug: &egrave; una caratteristica. KVIrc supporta (e sostituisce!) le variabili in ogni comando. Puoi usare l'esape al carattere $ usando il carattere backslash: /me ha guadagnato \\\$100 funzioner&agrave; correttamente";
$template['faq']['text13a']="/me non supporta il carattere '&quot;' (doppio apice)";
$template['faq']['text13b']="
	Questo NON &egrave; un bug: &egrave; una caratteristica. Una stringa racchiusa da doppi apici preserver&agrave; i suoi spazi bianchi mentre le altre stringhe avranno gli spazi bianchi semplificati. Questo &egrave; valido per ogni comando.<br />
	Puoi usare l'escape sul carattere &quot usando il carattere backslash: /me si sente un po' \\\"pazzo\\\" funzioner&agrave; correttamente";
$template['faq']['text14a']="/me non pu&ograve; contenere il carattere ';'";
$template['faq']['text14b']="
	Questo NON &egrave; un bug: &egrave; una caratteristica. KVIrc supporta pi&ugarve; comandi sulla stessa riga e usa ';' come separatore. Puoi usare l'escape sul carattere ';' usando il carattere backslash: /me &egrave; affamato \;) funzioner&agrave; correttamente";
$template['faq']['text15a']="Non vedo pi&ugrave; i menu popup del canale";
$template['faq']['text15b']="
	Se qualcosa &egrave; andato storto coi settaggi di KVIrc (un crash mentre la configurazione veniva salvata?) o se hai fatto casino con le opzioni e vuoi tornare indietro al comportamente orginale (script di default) puoi scegliere \"Scripting/Ripristina script predefiniti\" dal menu di KVIrc.<br />
	(<b>ATTENZIONE:</b> verranno cancellate tutte le modifiche agli script che hai fatto!)";
$template['faq']['text16a']="
	Ho errori di compilazione come questo:<br />
	I'm getting compile errors like this:<br />
	&nbsp; &nbsp; In file [somefile]:[someline] internal error:<br />
	&nbsp; &nbsp; Segmentation fault<br />
	&nbsp; &nbsp; Please submit a full bug report,<br />
	&nbsp; &nbsp; with preprocessed source if appropriate.<br />
	&nbsp; &nbsp; See &lt;URL:http:...";
$template['faq']['text16b1']="Questo errore pu&ograve; avere diverse ragioni";
$template['faq']['text16b1a']="
	Un bug del compilatore: il mio gcc 3.2 20020903 (default su RH 8.0) butta fuori 5-6 di questi al giorno. Di solito si risolve semplicemente riavviando il comando \"make\".<br />
	Se non va via o se esce di frequente e diventa annoiante puoi cercare di aggiornare il compilatore";
$template['faq']['text16b1b']="
	Corruzione della memoria: questo &egrave; molto frequente: uno dei tuoi banchi di memoria sta buttando fuori byte casuali. Di solito il problema viene fuori durante un pesante carico del sistema kernel, KDE o compilazione di KVIrc per esempio). Puoi controllare cercando diversi moduli di RAM (o rimuovendoli uno per volta per trovare il banco rotto). Puoi anche provare un programma chiamato memtest e una patch al kernel che forza i banchi di memoria rotti ad essere ignorati dal kernel (alloca permanentemente  a un processo farlocco del kernel).<br />
	Questi strumenti possono essere trovati navigando sul web col tuo motore di ricerca preferito";
$template['faq']['text16b1c']="
	Un pi&ugrave; profondo problema hardware: se aggiornare il compilatore e cambianre i banchi di memoria non ti aiuta, *potrebbe* essere un pi&ugrave; grosso problema hardware: errori del bus, controller IDE (o SCSI) danneggiati o magari la CPU buggata... Bene";
$template['faq']['text17a']="KVIrc crasha quando un URL viene printato nella finestra";
$template['faq']['text17b']="
	Questo potrebbe essere causato dal modulo URL: la causa verr&agrave; investigata.<br />Prova";
$template['faq']['text18a']="KVIrc crasha quando l'editor multilinea viene aperto (o negli editor degli script)";
$template['faq']['text18b']="
	Se hai installato una nuova versione di KVIrc sopra una vecchia installazione o hai cambiato le librerie Qt a cui KVIrc &egrave; linkato, potrebbe essere causato da una configurazione rotta dell'editor multilinea.<br />
	Prova a rimuovere \$HOME/.kvircssexeditorrc ed a riavviare KVIrc";
/* faq.php end */

/* features.php start */
$template['features']['title']="Caratteristiche";
$template['features']['text1']="
	Hmmm.. listare le caratteristiche di KVIrc?<br />
	Beh, perch&eacute; no?<br />
	Qui ci sono diversi frasi chiave che possono venirmi in mente.";
$template['features']['tree1']="Interfaccia utente";
$template['features']['tree1a']="Configurazione completamente nella GUI";
$template['features']['tree1b']="Finestre MDI volanti";
$template['features']['tree1c']="Browser dell'aiuto integrato";
$template['features']['tree1d']="Supporto ai temi (tutto configurabile da GUi o da script)";
$template['features']['tree1e']="Supporto alle false trasparenze (fino al desktop su KDE)";
$template['features']['tree1f']="Modifiche alla toolbar con Drag &amp; Drop";
$template['features']['tree1g']="Pop-Up che notifica l'attivit&agrave;";
$template['features']['tree1h']="Barra di stato con supporto applet";
$template['features']['tree1i']="Segnalatore del testo non letto";
$template['features']['tree1j']="Traduzione in 14 lingue";
$template['features']['tree2']="Rete";
$template['features']['tree2a']="Supporto proxy (SOCKSv4, SOCKSv5, HTTP)";
$template['features']['tree2b']="Pieno supporto IPv6 (anche per trasferimenti DCC)";
$template['features']['tree2c']="Supporto SSL (anche su IPv6)";
$template['features']['tree2d']="Supporto Micryption";
$template['features']['tree3']="Cuore";
$template['features']['tree3a']="
	Architettura modulare: caratteristiche non frequentemente usate risiedono in moduli esterni e caricati solo se necessario";
$template['features']['tree3b']="Estensibilit&agrave;: una enorme API per scrivere moduli di estensione";
$template['features']['tree3c']="Supporto Unicode";
$template['features']['tree4']="IRC";
$template['features']['tree4a']="Connessione multiserver";
$template['features']['tree4b']="Notify list (s&igrave;, WATCH &egrave; supportato)";
$template['features']['tree4c']="Ignore list";
$template['features']['tree4d']="Database utenti registrati";
$template['features']['tree4e']="Barra del lag";
$template['features']['tree4f']="Logging configurabile";
$template['features']['tree4g']="DCC CHAT standard e SEND (con resume) support";
$template['features']['tree4h']="Tipi di DCC estesa: VOICE, RSEND, GET, RECV";
$template['features']['tree4i']="DCC CHAT su SSL";
$template['features']['tree4j']="Limite di banda DCC (abilit&agrave; di settarlo \"al volo\")";
$template['features']['tree5']="Scripting";
$template['features']['tree5a']="Interprete del linguaggio di script integrato";
$template['features']['tree5a1']="scalari, array e hash...";
$template['features']['tree5a2']="alias";
$template['features']['tree5a3']="popup";
$template['features']['tree5a4']="eventi";
$template['features']['tree5a5']="toolbar scriptabili";
$template['features']['tree5a6']="Supporto perl";
$template['features']['tree5a7']="Abilit&agrave; di tradurre gli script (grazie alla funzione tr())";
$template['features']['tree5b']="
	Supporto agli oggetti nel linguaggio di scripting: s&igrave; ora puoi fare <acronym title=\"Progammazione Orientata agli Oggetti\">OOP</acronym>";
$template['features']['text2']="Hmmm... Spero che sia abbastanza per farti incuriosire :D";
/* features.php end */

/* help.php start */
$template['help']['title']="Aiuto richiesto";
$template['help']['text1']="
	Il primo posto dove guardare quando hai un problema &egrave; la mailing list.";
$template['help']['text2']="
	Se qualcosa va storto, o se hai una domanda, un suggerimento, o sei semplicemente interessato allo sviluppo di KVIrc, puoi registrarti alla";
$template['help']['text3']="
	Gli sviluppatori seguono la mailing list e risponderanno alle domande il prima possibile.";
$template['help']['text4a']="Il canale di supporto ufficiale di KVIrc &egrave; situato sulla";
$template['help']['text4b']="rete Freenode";
$template['help']['text4c']="e il canale &egrave; ovviamente chiamato";
$template['help']['text4d']="Il canale ufficiale Italiano &egrave;";
$template['help']['text4e']="sulla";
$template['help']['text4f']="rete Azzurra";
$template['help']['text4g']="Puoi anche trovare movimento sulla";
$template['help']['text4h']="rete IRCNet";
$template['help']['text4i']="nel canale";
$template['help']['text4j']=":)";
$template['help']['text5']="I bug possono essere riportati e visti usando il";
$template['help']['text6']="
	Per suggerimenti, notizie, correzioni o qualsiasi altra cosa relativa al sito manda una mail a";
$template['help']['text7']="
	Per ogni tipo di aiuto in grafica, traduzioni e documentazione contatta";
/* help.php end */

/* honor.php start */
$template['honor']['title']="Onore e Gloria";
$template['honor']['text1']="Questa &egrave; una lista di persone che hanno contribuito in qualche maniera al progetto KVIrc.";
$template['honor']['text2']="Questa lista &egrave; ben lontana dall'essere completa. Molte persone pi&ugrave; o meno \"anonime\" hanno speso le loro risorse di tempo, occhi, banda e cervello su questo progetto. Se sei uno di questi, bene, non esitare a contattarci";
$template['honor']['text3']="Se il tuo avatar non appare, o &egrave; sbagliato, inviami la giusta immagine. Se hai trovato qualcosa di sbagliato, link rotti, o qualcosa di mancante nella pagina, manda una mail a";
$template['honor']['made1']="Il \"Creatore\" di KVIrc. Lavoro mentale, lavoro manuale, consumo di occhi e bevitore di caff&egrave;";
$template['honor']['quote1']="I'll check... lemme check...&quot;<br />&quot;I'll fix it tomorrow...&quot;<br />&quot;KVIrc: the client that can't make coffee";
$template['honor']['made2']="Webmaster, cacciatore di bug, manutentore di snapshot, supporta gay^Wguy :o) e l'uomo che fa andare KVIrc su IPv6";
$template['honor']['made3']="Documentazione, ricerca di bug, relazioni pubbliche";
$template['honor']['quote3']="No idea of what you're talking about... or why you need it :)";
$template['honor']['made4']="Cacciatore di bug, sviluppatore di plugin, fix dei bug, porting su windows e snapshot";
$template['honor']['quote4']="&lt;YaP&gt; why you haven't implemented a class like DoEverythingByYourself ? :)&quot;<br />&quot;&lt;Pragma&gt; a wonderful recursive function :)&quot;<br />&quot;&lt;YaP&gt; Damn...I knew it eheheheheh";
$template['honor']['made5']="Tester di script, cacciatore di bug, ideatore &amp; creatore del primo first www.kvirc.net";
$template['honor']['quote5']="whassup?";
$template['honor']['made6']="Il manuale ufficiale di C++ e sviluppatore di plugin";
$template['honor']['quote6']="prepare yourselves..&quot; &quot; #include &lt;iostream.h&gt;&quot;<br />&quot;class testing {...&quot;<br />&quot;&lt;oehansen&gt; I must admit, I'm getting confused :-)&quot;<br />&quot;&lt;Pragma&gt; Me too , at this point :)";
$template['honor']['made7']="Pacchetti Slackware";
$template['honor']['made8']="Traduzione italiana, cacciatore di bug, supporto morale :))))";
$template['honor']['quote8']="KVIrc? Ah! The dinosaur...";
$template['honor']['made9']="Traduzione tedesca, cacciatore di bug, nuove idee. Un po' di scripting, miglioramenti al codice e nuovo codice ;)";
$template['honor']['quote9']="Pragma: Short question...";
$template['honor']['made10']="Rompe tutto e corregge la grammatica quando non c'&egrave; altro da rompere. Inoltre, ascolta le richieste di Aeri e sviluppate circa la met&agrave;...";
$template['honor']['quote10']="Hey, it's not my responsibility to find a funny quote of myself ^_~";
$template['honor']['made11']="Traduzione italiana, migliorie al codice e molti suggerimenti";
$template['honor']['made12']="Fornitore ufficiale di birra polacca e sviluppatore di plugin";
$template['honor']['quote12']="echo &quot;STOP IT&quot; &gt; /dev/neighbour&quot; &quot;cd ./neighbour &amp;&amp; make clean&quot;<br />&quot;Pragma...erm...bugs ? WHICH bugs ? ;))";
$template['honor']['made13']="Creatore del vecchio sito, qualche suggerimento, bevitore di te (Grazie Szymon, il tuo te &egrave; eccellente ;) ) e... perch&eacute; sono listato qui?";
$template['honor']['quote13']="Hey mum, look!! My name is in the KVIrc Honor &amp; Glory section!!";
$template['honor']['made14']="Autore di news, bugtracker e costante supporto agli utenti su #kvirc";
$template['honor']['made15']="Traduzione francese, betatesting e pesante caccia ai bug";
$template['honor']['made16']="Sviluppatore delle classi di oggetti, migliorie al codice, betatesting, fix dei bug, script esotici, documentazione...";
$template['honor']['quote16']="&lt;Grifisx&gt;...damned brackets ! ...there are always too many...<br />&lt;Noldor&gt;....or too few...";
$template['honor']['made17']="Sviluppatore delle classi di oggetti, migliorie al codice, betatesting, fix dei bug, script esotici, documentazione...";
$template['honor']['quote17']="&lt;Grifisx&gt; The difference between me and you is just that, You see things and you say &quot;Why?&quot; But I dream things that never were and I say...&quot;Why not?";
$template['honor']['made18']="Internazionalizzazione, fix dei bug, caccia ai bug, nuove idee e altro...";
$template['honor']['made19']="Creatore del nuovo sito, manutentore del sito, traduzione italiana, scripting, caccia ai bug, pacchetti Slackware, patch allo script di default, nuove idee...";
$template['honor']['quote19']="&lt;HelLViS69&gt; Blessed gdb, in the name of ritchie, kerningham and rms";
$template['honor']['made20']="Traduzione italiana, grafica, vera credente";
$template['honor']['quote20']="Time makes no sense";
$template['honor']['made21']="FAQ e traduzione italiana";
$template['honor']['made22']="Pacchetti Debian, supporto morale";
$template['honor']['quote22']="One must make one's self superior to humanity, in power, in loftiness of soul, in contempt. - Friedrich Nietzsche";
$template['honor']['made23']="Caccia e fix dei bug, fix della documentazione, scripting (NGL File Server)";
$template['honor']['quote23']="I don't know what I want, but I know how to get it.";
$template['honor']['made24']="Sistema di away, nick colorati, programmazione generale, traduzione spagnola";
$template['honor']['quote24']="Pragma: think of KVIrc as a tool for scripters... we have to left them something to do :)";
$template['honor']['made25']="La 'luce' dentro le nuvole GNU. Supportatore generico (??!) ufficiale del progetto :)";
$template['honor']['quote25']="Pragma: seems that kvirc with all its plugins is becoming a desktop environment&quot; &quot;echo espresso &gt; /dev/coffee&quot; &quot;Pragma: you reached the user limit. WTF!";
$template['honor']['made26']="Ideatore di www.kvirc.org";
$template['honor']['quote26']="This free project is better that shareware&quot; &quot;mIrc for windows even in alpha stage";
$template['honor']['made27']="Si accerta che nessuno sia pigro, cacciatore di bug, un SACCO di suggerimenti e creatore di RealityX IRC.";
$template['honor']['quote27']="Skydiving is almost as exciting as KVIrc scripting!&quot;<br />&quot;Pragma: could you add these functions: \$rubmyback() and \$makecoffe()?";
$template['honor']['made28']="Debug e migliorie.";
$template['honor']['quote28']="I'm just *really* good at doing things when I have no idea of what I'm actually doing";
$template['honor']['made29']="Migliorie al codice di KVIrc e della conoscenza di linux. Mi piace pensare a lui come una 'guida spirituale'... :D";
$template['honor']['made30']="L'uomo KDE! Si assicura che KVIrc sia una ragione per avere una K all'inizio";
$template['honor']['quote30']="Could I please make KVIrc a pure KDE application today?? Pleeease...";
$template['honor']['made31']="Alcuni \"piccoli\" pezzi di codice.";
$template['honor']['quote32']="&lt;Error403&gt;Number1: I imagined you looking crazy :)&quot;<br />&quot;&lt;NumeroUno&gt; I was drunk";
$template['honor']['made33']="La \"mano aperta\" per il progetto KVIrc. Fornisce il servizio SVN, mirror WWW e FTP, banda, grandi idee e si diverte mentre programma.";
$template['honor']['made34']="Caccia ai bug, nuove idee :)";
$template['honor']['quote34']="buy a pigeon traveller and pass dcc transfers to him";
$template['honor']['made35']="Vari migliorie funky.";
$template['honor']['quote35']="I can program anything I set my mind to!";
$template['honor']['made36']="Beta testing, migliorie alla struttura delle lingue.";
$template['honor']['quote36']="...it's enough for 100 IPs per meter on earth, so every lightswitch can have its own IP...then you telnet to your lightswitch and turn it off!";
$template['honor']['made37']="Porting su MacOSX";
$template['honor']['made38']="Traduzione portoghese, patch allo script di default.";
$template['honor']['made39']="Traduzione russa";
/* honor.php end */

/* install.php start */
$template['install']['title1']="Installazione";
$template['install']['title2']="Installazione Guru";
$template['install']['title3']="Installazione Hacker";
$template['install']['title4']="Installazione Umana (dettagliata)";
$template['install']['text1']="Note generali per l'installazione della release 3.2.0 di KVIrc";
$template['install']['text2']="DEVI avere automake 1.5";
$template['install']['text3']="Se stai compilando la versione SVN di KVIrc lancia ./autogen.sh";
$template['install']['text4']="path delle librerie qt";
$template['install']['text5']="eventualmente";
$template['install']['text6']="path delle librerie kde";
$template['install']['text7']="Usiamo strmenti GNU qui.";
$template['install']['text8']="tue opzioni";
$template['install']['text9']="
	Se non sei un guru, o hai problemi con l'installazione leggi queste istruzioni attentamente.";
$template['install']['step']="Passo";
$template['install']['text10']="
	Se (e SOLO SE) stai compilando la versione SVN di KVIrc devi generare lo script configure.";
$template['install']['text11']="
	Se non viene eseguito correttamente, controlla la tua versione di automake.<bt />
	Devi avere automake 1.5 o successivo, versioni pi&ugrave; vecchie NON FUNZIONERANNO con l'SVN corrente.<br />
	Puoi controllare la versione di automake col comando";
$template['install']['text12']="
	Se la tua versione di automake &egrave; inferiore alla 1.5 aggiornalo.<br />
	Puoi trovarlo a http://www.gnu.org/software/automake/ (sorgenti) o il pacchetto autoinstallante sul sito della tua distribuzione.<br /><br />
	Suggerimento per l'installazione di automake: automake si installa in /usr/local/ come default.<br />
	Se hai un automake pi&ugrave; vecchio che risiede in /usr/ &egrave; meglio rimuoverlo: i file da rimuovere sono /usr/bin/automake /usr/bin/aclocal /usr/share/automake /usr/share/aclocal<br />
	Se non sei sicuro sulla rimozione, rinominalo.<br />
	Accertati anche che /usr/local/bin &egrave; nel tuo \$PATH.<br /><br />
	Se hai scaricato i sorgenti come tar.gz (o tar.bz2) o non sai cosa sia SVN, ignora questo passaggio e vai al prossimo.";
$template['install']['steptitle1']="Soddisfare le richieste";
$template['install']['tree1a']="
	Hai bisogno delle librerie Qt.<br />
	Puoi scaricare l'ultima versione da ftp.trolltech.com.<br />
	Il sito principale di Qt &egrave; www.trolltech.com.<br />
	Note per i maniaci della GPL: Qt E' GPL.<br />
	La versione minima richiesta &egrave; la 3.0.5 (versioni pi&ugrave; vecchie *potrebbero* funzionare)<br />
	Scarica e installa seguendo le direttive spiegate nella documentazione fornita con la libreria";
$template['install']['tree1b']="
	Hai bisogno un'implementazione decente di pthread.<br />
	Solitamente &egrave; inclusa nella distribuzione ed &egrave; probabilmente gi&agrave; installata. La libreria egrave; libpthread.so.<br />
	Puoi cercarla usando il comando \"find\"";
$template['install']['tree1btext1']="Sul mio sistema l'output &egrave;";
$template['install']['tree1btext2']="
	Se non ce l'hai (lo script configure te lo dir&agrave;) puoi scaricarla dal tuo mirror GNU preferito.<br />
	Su Solaris puoi usare la libreria libthread.so nativa ma dovrai passare le opzioni specifiche al configure (guarda sotto).<br />
	FreeBSD ha un'implementazione nativa di pthreads in libc_r e il compilatore gcc ha una flag speciale -pthread per linkarla.<br />
	Se sei su FreeBSD, usa l'opzione --with-freebsd-pthread del configure e accertati che non hai altri wrapper pthread installati (potrebbero collidere con i file header nativi).";
$template['install']['tree1btext3']="
	Lo script configure fallir&agrave; anche se la libreria &egrave; nascosta da qualche parte sul tuo sistema (es: non in /lib , /usr/lib o /usr/local/lib): dovrai probabilmente spostarla";
$template['install']['tree1c']="
	Devi avere la libreria d'interfaccia al linker dinamico libdl.so.<br />
	Solitamente &egrave; installata sul tuo sistema, quindi non preoccuparti finch&eacute; il configure non si lamenta. Alcuni sistemi hanno l'interfaccia compilata nelle libc. Lo script configure la pu&ograve; trovare";
$template['install']['tree1d']="
	(Opzionale) Se vuoi compilare il supporto per l'integrazione on KDE ovviamente hai bisogno di KDE. Il pacchetto kdelibs dovrebbe bastare. Su alcune distro devi installare kdelibs-devel";
$template['install']['tree1e']="
	(Opzionale) Se vuoi che DCC VOICE supporti il codec gsm, devi avere una copia recente di libgsm. Non &egrave; necessariamente richiesta per compilare dal momento che KVIrc la cercher&agrave; a runtime, e solo se &egrave; richiesta DCC VOICE col codec gsm.<br />
	Puoi controllare libgsm usando il comando 'find'.";
$template['install']['tree1etext1']="L'output dovrebbe essere qualcosa come";
$template['install']['tree1etext2']="
	Questa libreria &egrave; inclusa in molte distribuzioni. Alcune distro hanno solo la versione statica della libreria \"libgsm.a\": se il find precedente ritorna qualcosa simile a \"/usr/lib/libgsm.a\" , dovrai creare manualmente l'archivio condiviso eseguendo:";
$template['install']['tree1etext3']="
	Se non ce l'hai installato del tutto, dovrai guardare sul CD della tua distribuzione, o scaricarla dal web";
$template['install']['tree1f']="
	(Opzionale) Se vuoi che il plugin /snd suoni diversi formati audio avrai bisogno di artsd , un demone esd o una libreria audiofile recente.
	Senza questi KVIrc sar&agrave; capace solo di suonare file *.au";
$template['install']['tree1g']="
	(Opzionale) Se vuoi generare la documentazione online devi avere perl: qualsiasi versione funziona (lo spero)";
$template['install']['tree1h']="
	(Opzionale) Se vuoi il supporto a secure socket layer (SSL) devi avere la libreria OpenSSL e gli header. (libssl.so e openssl/ssl.h)";
$template['install']['steptitle2']="Eseguire lo script configure (obbligatorio)";
$template['install']['text13']="
	Prima di tutto devi eseguire lo script che fornir&agrave; diverse informazioni circa il tuo sistema e prepara la compilazione.<br />
	Puoi provare a lanciare una \"compilazione semplice\" e vedere se funziona... lo script configure cerca di essere furbo, ma in molti casi falli&agrave;.<br /><br />
	Quindi prima di lanciare make controlla che la variabile d'ambiente \$QTDIR punta alla giusta directory. Ti aiuter&agrave; a trovare la corretta versione di Qr.<br />
	Puoi eventualmente settarla col comando:";
$template['install']['text14']="tua directory Qt";
$template['install']['text15']="
	Sul mio sistema qt &egrave; installato in /usr/local/kde/qt<br />
	quindi io eseguo";
$template['install']['text16']="
	Se vuoi compilare il supporto KDE devi fare lo stesso con \$KDEDIR";
$template['install']['text17']="tua directory KDE";
$template['install']['text18']="Nel mio caso KDE &egrave; installato in /usr/local/kde quindi uso";
$template['install']['text19']="Lo script configure ha un sacco di opzioni che possono essere listate usando";
$template['install']['text20']="Qui c'&egrave; una lista di spiegazioni (le pi&ugrave; comuni sono in cima):";
$template['install']['tree2a']="
	Questa &egrave; per il debug e riportare i problemi. Setta le opzioni del compilatore in modo da lasciare le informazioni di debug nell'eseguibile kvirc e nelle librerie.
	In questo modo sarai capace di produrre un backtrace gdb in caso di crash.<br />
	TI SERVE QUESTA OPZIONE SE VUOI RIPORTARE UN CRASH";
$template['install']['tree2b']="
	Chiede al compilatore di usare i pipe invece dei file per la fase di compilazione. I pipe aiutano riducendo l'uso del disco e probabilmente accorciando un po' la compilazione. Usa questa opzione se la tua piattaforma li supporta";
$template['install']['tree2c']="
	Questo &egrave; un supporto sperimentale per il prelink degli oggetti che migliora significantemente il tempo di avvio dell'eseguibile. Se vuoi usarlo devi avere il programma \"objprelink\" nel PATH. Il programma objprelink &egrave; incluso nella distribuzione nella directory admin. Per usarlo, devi:";
$template['install']['tree2ctext1']="da_qualche_parte_nel_tuo_path";
$template['install']['tree2ctext2']="Tutto questo DOPO aver eseguito ./configure e PRIMA di eseguire make";
$template['install']['tree2d']="
	KVIrc contiene qualche routine assembly ix86 che potrebbe eseguire alcune cose velocemente (non &egrave; sempre vero, dipende dal compilatore). Potresti provare a usarlo";
$template['install']['tree2e1']="NUMERO";
$template['install']['tree2e']="
	Abilita le ottimizzazioni del compilatore -o&lt;NUMERO&gt;.<br />
	Valori possibili sono 0, 1, 2 e 3 (ma se il tuo compilatore supporta pi&ugrave; livelli di ottimizzazione, potresti usare altri numeri qui).<br />
	Incrementa il tempo di compilazione ma produce eseguibili pi&ugrave; veloci";
$template['install']['tree2f']="
	Non controlla se pthread funziona<.br />
	Se il configure fallisce nel controllo della libreria pthread, potresti provare questo... (ma poi dovrai veramente \"pregare\" che il controllo sia rotto da qualche \"strana\" condizione e che la compilazione abbia successo)";
$template['install']['tree2g']="
	Specifica esplicitamente il path agli header di X. Potresti usarlo se il configure ha problemi a trovarli";
$template['install']['tree2h']="
	Specifica esplicitamente il path delle librerie di X. Potresti usarlo se il configure ha problemi a trovarli";
$template['install']['tree2i']="
	Usa &lt;NOME&gt; invece di \"qt\" come nome della libreria Qt.<br />
	Questo serve su sistemi dove Qt &egrave; stata installata con un nome differente del default \"qt\".<br />
	Succede spesso che per permettere diverse copie di Qt la nuova abbia la versione in fondo al nome.<br />
	Per esempio, su FreeBSD ho trovato \"qt\" come Qt1.* e \"qt2\" come Qt2.*. Dal momento che ti serve Qt 3.* per compilare kvirc, devi usare --with-qt-name=qt3.<br />
	Se usi questa opzione, probabilmente dovrai remappare il nome/path del compilatore moc con --with-qt-moc";
$template['install']['tree2j']="
	Disabilita il controllo delle versioni multithread di Qt. Per default, KVIrc cercher&agrave; di linkare la versione multithread se trovata sul sistema.<br />
	NOTA: se abiliti il supporto KDE, KVIrc DEVE essere linkato alla libreria qt a cui KDE &egrave; linkato";
$template['install']['tree2k']="
	Cerca la libreria qt in &lt;DIR&gt;.<br />
	Potresti usarlo se il configure ha problemi a trovare la libreria qt.<br />
	Non dovresti aver problemi se esporti QTDIR=\"&lt;DIR&gt;\" prima di lanciare il configure, ma potrebbe aiutarti se hai un'installazione non standard di Qt";
$template['install']['tree2l']="
	Cerca gli header qt in &lt;DIR&gt;.<br />
	Potresti usarlo se il configure ha problemi a trovare gli header qt.<br />
	Non dovresti avere problemi se esporti QTDIR=\"&lt;DIR&gt;\" prima di lanciare il configure, ma potrebbe aiutarti se hai un'installazione non standard di Qt";
$template['install']['tree2m']="
	Usa il compilatore meta-oggetto di qt trovato in &lt;PATH&gt;<br />
	Il path solitamente &egrave; \$QTDIR/bin/moc , e il configure dovrebbe trovarlo se hai un'installazione standard di Qt e \$QTDIR punta alla giusta directory.<br />
	Di conseguenza non dovresti aver problemi se esporti QTDIR=\"&lt;DIR&gt;\" prima di lanciare il configure, ma potrebbe aiutarti se hai un'installazione non standard delle Qt.<br />
	Ti aiuter&agrave; anche se hai il compilatore moc chiamato in altri modi: come \"moc2\" o altro...<br />
	&lt;PATH&gt; in questo caso &egrave; un path ASSOLUTO: directory/nome_del_programma!";
$template['install']['tree2n']="
	Questo disabilita il controllo Qt in compilazione.<br />
	Se questa &egrave; l'unica maniera di compilare e lanciare kvirc, c'&egrave; qualcosa di sbagliato nel configure";
$template['install']['tree2o']="
	Il configure cercher&agrave; gli header KDE e le librerie se vengono trovare e abiliter&agrave; il supporto KDE. Se non vuoi il supporto KDE anche se KDE viene rilevato, usa questo switch";
$template['install']['tree2p']="
	Cerca le librerie KDE in &lt;DIR&gt;<br />
	Se \$KDEDIR punta al giusto posto, non dovresti averne bisogno";
$template['install']['tree2q']="
	Cerca gli header KDE in &lt;DIR&gt;<br />
	Se \$KDEDIR punta al giusto posto, non dovresti averne bisogno";
$template['install']['tree2r']="
	Installa i file di protocollo dei servizi KDE in &lt;DIR&gt;<br />
	Se \$KDEDIR punta al giusto posto, non dovresti averne bisogno.<br />
	Questo &egrave; non critico per kvirc: se il configure non trova questa directory, hai solo perso il supporto per gli url irc:// in konqueror";
$template['install']['tree2s']="Simile a --without-qt-check ma per KDE";
$template['install']['tree2t']="
	Il supporto IPv6 &egrave; compilato di default nelle piattaforme che lo supportano: questa opzione lo disabilita.<br />
	Anche se hai una connessione solamente IPv4, potresti voler tenere il supporto IPv6: potrai risolvere host IPv6";
$template['install']['tree2u']="
	Questo disabilita l'uso delle funzioni di sistema memmove() memcpy() e memset() e abilita le implementazioni fornite da kvirc. Usalo se hai referenze indefinite a queste funzioni mentre compili";
$template['install']['tree2v']="
	Qeusto &egrave; un hack principalmente per Solaris.<br />
	Usa questa opzione se kvirc esce senza nessuna apparente ragione e il sistema printa un messaggio relativo a un \"Allarme\" :)";
$template['install']['tree2w']="
	Disabilita i motori di crittazione e tutto il supporto crittografia/trasformazione del testo. Produce un eseguibile pi&ugrave; piccolo.<br />
	Comunque, se non sai cosa sia il supporto alla crittografia, ti suggerisco di evitare questa opzione";
$template['install']['tree2x']="
	Questa opzione disabilita il supporto alla falsa trasparenza.<br />
	La falsa trasparenza dona alle finestre di KVIrc un look semi-trasparente (questo NON &egrave; vera trasparenza: &egrave; solo un hack).<br />
	Se il supporto KDE &egrave; installato, KVIrc avr&agrave; un'opzione che mostra su tutte le finestre l'immagine di sfondo di KDE come sfondo. Senza il supporto KDE potrai scegliere una immagine di sfondo e usarla come sfondo. (Puoi scegliere lo sfondo del desktop: questo (pi&ugrave; o meno) funzioner&agrave; in tutti i window manager). E' molto bello esteticamente ma consuma un po' di memoria quando abilitato e incrementa la dimensione dell'eseguibile.<br />
	Questa opzione permette di disabilitare la falsa trasparenza";
$template['install']['tree2y']="
	Se sei su Solaris e non hai la libreria pthread (un wrapper penso) puoi provare questa opzione: cerca di usare il supporto ai thread nativo di Solaris";
$template['install']['tree2z']="
	Se sei su FreeBSD, DEVI mettere questa opzione. Abilita l'uso dell'implementazione nativa dei pthread di FreeBSD che sono in libc_r.<br />
	Richiede che usi il compilatore gcc nativo: ha una speciale flag -pthread che abilita il link con libc_r invece della normale libc";
$template['install']['tree2a1']="Linka a libresolv. Credo che sia richiesto per Solaris";
$template['install']['tree2a2']="Linka a libsocket. Credo che sia richiesto per Solaris";
$template['install']['tree2a3']="Linka a libnsl. Credo che sia richiesto per Solaris";
$template['install']['tree2a4']="
	Linka a libcompat. Potrebbe essere richiesto per qualche sistema...<br />
	ma non ho idea su quali. Se trovi che ti serve: mandami una mail";
$template['install']['tree2a5']="
	Disabilita la generazione delle informazioni dei tipi in compilazione. Questo viene richiesto con qt-embedded";
$template['install']['tree2a6']="
	Disabilita l'uso della funzione XBell (richiesta se vuoi compilare KVIrc con qt-embedded (niente X del tutto))";
$template['install']['tree2a7']="Hai bisogno di questa per compilare KVIrc con qt-embedded";
$template['install']['tree2a8']="
	Linka esplicitamente le librerie specificate.<br />
	Esempio: --with-other-libs=\"-lmylib -lstranosupportodisistema -lpatchalmiocervellodanneggiato\"";
$template['install']['tree2a9']="
	Aggiunge esplicitamente il percorso di ricerca delle librerie specificate<br />
	Esempio: --with-other-ldirs=\"-L/home/pippo/lib/ -L/mio/posto/delle/librerie/\"";
$template['install']['tree2b1']="
	Aggiunge esplicitamente il percorso di ricerca degli include specificati<br />
	Esempio: --with-other-idirs=\"-I/home/pippo/include/ -I/tmp/include/\"";
$template['install']['tree2b2']="
	Disabilita il supporto per la comunicazione inter-processo.<br />
	Non sarai in grado di inviare comandi remoti a sessioni KVIrc in esecuzione: questo significa che ogni volta che avvii KVirc, verr&agrave; creata una nuova sessione.<br />
	Se non usi questo switch, verr&agrave; creata una nuova sessione solo se non ci sono altre sessioni sullo stesso display o viene forzata una \"nuova sessione\" da riga di comando.<br />
	Se una sessione &egrave; gi&agrave; in esecuzione, la riga di comando verr&agrave; passata a quella sessione via IPC (comunicazione basata sugli eventi di X). Questa opzione toglie qualche KB dall'eseguibile di KVIrc, quindi se sei a corto di memoria, potresti usarla; in altri casi IPC &egrave; una bella feature.";
$template['install']['tree2b3']="
	Non dovresti aver bisogno di questa opzione.<br />
	Disabilita la compilazione del codice che risiede su una particolare caratteristica del compilatore (saltando a una etichetta dinamica con un goto). Non tutti i compilatori la supportano, ma il configure dovrebbe rilevarla automaticamente. Comunque, se hai errori di compilazione su kvi_ircview.cpp, dovresti provare questa opzione...<br />
	Questo potrebbe aiutare se il configure sembra agganciare mentre cerca il \"supporto a etichette dinamiche\"";
$template['install']['tree2b4']="
	Disabilita completamente le chiamate di disegno di X (sempre abiltate con Qt >= 3.0.0).
	Questo potrebbe aiutarti se hai problemi di font nelle finestre";
$template['install']['tree2b5']="
	Non compila il codice dello splash screen.<br />
	Questo rimuover&agrave; quella bella immagine \"banner\" che verr&agrave; fuori mentre KVIrc si avvia. Potrebbe forse aiutarti in fare eseguibili pi&ugrave; piccoli di un paio di KB e velocizzare di un paio di millisecondi l'avvio. Usalo se stai provando a compilare un eseguibile leggero e veloce e sei a corto di memoria e velocit&agrave; della CPU :)";
$template['install']['tree2b6']="
	Questo disabilita alcuni tooltip di informazione nelle finestre delle opzioni. Ti aiuter&agrave; a fare un eseguibile e moduli pi&ugrave; piccoli. Usa questa opzione se sei un guru di KVIrc e non hai bisogno questi suggerimenti mentre usi le opzioni";
$template['install']['tree2b7']="
	Disabilita esplicitamente l'uso della libreria GSM. Questo disabilita il codec gsm nelle DCC VOICE ma potrebbe aiutare quando la compilazione si ferma lamentandosi di qualcosa relativo al GSM :)";
$template['install']['tree2b8']="
	Disabilita esplicitamente il supporto sonoro alla DCC VOICE. Questo potrebbe aiutare se hai problemi nella compilazione di src/modules/dcc/voice.cpp. Verr&agrave; disabilitato il supporto sonoro (e di conseguenza la DCC VOICE non sar&agrave; usabile)";
$template['install']['tree2b9']="
	Disabilita il supporto ai socket sicuri (SSL). Il supporto SSL &egrave; automaticamente abilitato se OpenSSL viene trovato dal configure. Questa opzione forza a lasciarlo fuori";
$template['install']['tree2c1']="Cose di debug... abilita il profiling all'allocazione di memoria (non usarlo :)";
$template['install']['tree2c2']="
	Abilita i controlli di memoria malloc(). Questo stamper&agrave; un bel messaggio se il tuo sistema finisce la memoria... non pu&ograve; salvarti dal comprare nuova RAM, ma almeno saprai che il tuo sistema ha finito la memoria e non &egrave; un problema di KVIrc. Attualmente non hai motivo per usarlo";
$template['install']['tree2c3']="
	Ottimizzazioni minori alla tabella hash: uso pi&ugrave; alto della memoria ma risoluzine degli utenti pi&ugrave; veloce. Usalo se stai spesso in canali con molti utenti. (questo non &egrave; critico comunque)";
$template['install']['text21']="Finalmente devi eseguire";
$template['install']['text22']="Per esempio, le mie opzioni comuni sono:";
$template['install']['text23']="Su FreeBSD ho trovato un'ottima linea di comando:";
$template['install']['text24']="Una volta che il configure finisce con successo puoi andare al prossimo passo.";
$template['install']['text25']="Compilazione (obbligatorio)";
$template['install']['text26']="Questo passo &egrave; facile:";
$template['install']['text27']="Incrocia le dita e lancia";
$template['install']['text28']="
	Se il tuo make non &egrave; GNU make (questo succede su FreeBSD per esempio) dovresti usare \"gmake\".<br />
	Il processo di compilazione andr&agrave; dai 6-7 minuti a diverse ore dipendentemente dalla capacit&agrave; della macchina e dal carico.<br />br />
	Una volta che la compilazione &egrave; finita con successo, esegui";
$template['install']['text29']="
	Come sopra: usa \"gmake install\" se il tuo make non &egrave; GNU make.<br /><br />
	Questo installer&agrave; l'eseguibile in /usr/local/bin<br />
	(se non hai specificato una diversa opzione --prefix nel configure), le librerie in /usr/local/lib e i dati condivisi in /usr/local/share/kvirc.<br />
	Se hai una vecchia installazione di kvirc, il prefix di default si riferir&agrave; alla directory dove viene trovato il vecchio eseguibile di KVIrc.<br /><br />
	Accertati che /usr/local/lib sia nel tuo /etc/ld.so.conf, se non c'&egrave; metticelo ed esegui";
$template['install']['text30']="
	Se hai deciso di usare il supporto KDE l'installazione dovrebbe aver messo tutti i file nell'albero in \$KDEDIR invece che in /usr/local. In questo caso dovrebbe essere tutto OK dal momento che KDE richiede che la sua directory delle librerie sia in /etc/ld.so.conf";
$template['install']['text31']="Divertiti";
$template['install']['text32']="E' tutto ragazzi.";
/* install.php end */

/* license.php start */
$template['license']['title']="La Licenza di KVIrc";
$template['license']['text']="KVIrc &egrave; software libero: &egrave; rilasciato sotto un'estesa versione della General Public License.";
$template['license']['text2']="
	Questa &egrave; la licenza di KVIrc Irc Client.<br />
	E' basata sulla GNU General Public License Version 2.<br />
	Contiene tutti i termini e condizioni della GPL e aggiunge un'estensione speciale (vedi Termini e Condizioni, clausola 13) alle limitazioni della distribuzione.<br /><br />
	Nota che la GPL sotto ha il copyright della Free Software Foundation, ma l'istanza del codice a cui si riderisce &egrave; copyright di Szymon Stefanek e gli altri membri del KVIrc Development Team.<br /><br />
	Il codice sorgente di tutte le versioni di KVIrc &egrave; disponibile a <a href=\"?id=releases&amp;platform=source&amp;lang=$lang\">questo url</a>.<br /><br />
	Divertiti!";
/* license.php end */

/* mailinglist.php start */
$template['ml']['title']="Mailing List Pubblica di KVIrc";
$template['ml']['text1a']="
	Se qualcosa va storto, o hai una domanda, un suggerimento, o sei semplicemente interessato allo sviluppo di KVIrc, puoi sottoscrivere la mailing list pubblica di KVIrc.";
$template['ml']['text1b']="
	Gli sviluppatori seguono la mailing list e risponderanno alle domande appena possono.";
$template['ml']['text2']="Interfaccia web";
$template['ml']['text3']="
	La lista ha un'interfaccia web disponibile <a href=\"http://lists.omnikron.net/mailman/listinfo/kvirc/\">qui</a>.<br />
	L'interfaccia ti permette di iscriverti, cancellarti e gestire il tuo account.";
$template['ml']['text4']="Per iscriverti via mail";
$template['ml']['text5']="
	Invia una mail vuota (corpo vuoto, oggetto vuoto) a <a href=\"mailto:kvirc-subscribe@lists.omnikron.net\">questo indirizzo</a> dall'indirizzo con cui ti vuoi iscrivere.<br />
	In pochi minuti riceverai una mail di conferma che conterr&agrave; le istruzioni per completare l'iscrizione.";
$template['ml']['text6']="Per cancellarti via mail";
$template['ml']['text7']="
	Invia una mail vuota (lascia corpo e oggetto vuoto) a <a href=\"mailto:kvirc-unsubscribe@lists.omnikron.net\">questo indirizzo</a> dall'indirizzo con cui ti cancellare.<br />
	In pochi minuti riceverai una mail di conferma che conterr&agrave; le istruzioni per completare la cancellazione.";
$template['ml']['text8']="Archivi mailing list";
$template['ml']['text9']="
	L'archivio completo dei messaggi della mailing list &egrave; disponibile <a href=\"http://lists.omnikron.net/pipermail/kvirc/\">qui</a>.";
/* mailinglist.php end */

/* mirroring.php start */
$template['mirror']['title']="Creare un mirror per il Progetto KVIrc";
$template['mirror']['text1']="
	Questa pagina contiene le istruzioni passo passo per creare un mirror ftp";
$template['mirror']['text2']="
	Contribuire al progetto KVIrc creando un mirror dei suoi file &egrave; molto semplice.<br />";
$template['mirror']['text3']="Mirror ftp non europei sono molto graditi";
$template['mirror']['title2']="Settare un mirror di ftp.kvirc.net";
$template['mirror']['tree']="Requisiti";
$template['mirror']['tree1']="Un server ftp";
$template['mirror']['tree2']="Un demone cron (o equivalente) per tenere il mirror sincronizzato";
$template['mirror']['text4']="Procedura di setup";
$template['mirror']['text5']="
	Settare un mirror ftp &egrave; molto semplice: viene eseguito usando le caratteristiche del programma";
$template['mirror']['text6']="
	La linea di comando per recuperare l'intero archivio ftp &egrave; la seguente:";
$template['mirror']['text7']="tua_root_del_server_ftp";
$template['mirror']['text8']="
	Tutto quello di cui hai bisogno &egrave; di poter accettare connessioni anonime e di istruire cron per sincronizzare il mirror ogni N ore.";
$template['mirror']['text9']="
	Ora hai bisogno di settare gli aggiornamenti automatici.<br />
	Viene svolto dal demone cron e basta aggiungere un padio di righe nel crontab.<br />
	Un esempio di crontab pu&ograve; essere:";
$template['mirror']['text10a']="
	Questo crontab dice al demone cron di eseguire il comando";
$template['mirror']['text10b']="alle 6.30 di ogni giorno";
$template['mirror']['text11a']="In questo caso";
$template['mirror']['text11b']="sar&agrave; il seguente:";
$template['mirror']['text12']="tuodominio";
$template['mirror']['text13']="
	Al momento in cui si scrive il completo archivio ftp si aggira intorno ai 500 MB. Se non hai lo spazio per un mirror completo si pu&ograve; accordare un mirror parziale recuperando solo un po' delle directory di ftp.kvirc.net.";
$template['mirror']['text14']="
	Una volta che hai settato con successo il tuo mirror manda una mail a <b>pragma at kvirc dot net</b> o in <a href=\"?id=mailinglist&amp;lang=$lang\">mailing list</a> cos&igrave; possiamo linkarti sul sito principale.";
/* mirroring.php end */

/* news.php start */
$template['news']['title']="Archivi Notizie";
$template['news']['latest']="Ultime notizie";
$template['news']['error']="Errore durante la lettura della notizia";
$template['news']['nonews']="Nessuna notizia.";
$template['news']['news']="News";
$template['news']['readmore']="Continua";
/* news.php end */

/* releases.php start */
$template['releases']['title']="Scarica Release Ufficiali";
$template['releases']['text1']="
	Qui puoi scaricare i pacchetti delle <b>release ufficiali</b> di KVIrc.<br />
	I pacchetti ufficiali sono rilasciati meno frequentemente ma sono i pi&ugrave; stabili.<br />
	Seleziona il tipo di pacchetto che vuoi scaricare";
$template['releases']['text2']="
	Sotto hai una lista di versioni disponibili per la piattaforma che hai selezionato.<br />
	Scegli la versione del pacchetto che vuoi scaricare";
$template['releases']['text3']="
	Sono disponibili pi&ugrave; di un gruppo di pacchetti per la piattaforma e versione che hai selezionato.<br /><br />
	Scegli il gruppo che vuoi scaricare";
$template['releases']['latest']="Ultima release";
$template['releases']['older']="Relese vecchie";
$template['releases']['available']="Mirror disponibili per il download";
/* releases.php end */

/* require.php start */
$template['require']['title']="Requisiti (ramo 3.0.0)";
$template['require']['tree1']="Versione Unix (sorgenti):";
$template['require']['tree1a']="Un sistema UNIX funzionante in grado di compilare";
$template['require']['tree1b']="
	Il <a href=\"http://www.trolltech.com\">toolkit GUI QT</a> >= 3.0.5 (versioni pi&ugrave; <b>potrebbero</b> funzionare)";
$template['require']['tree1c']="
	<a href=\"http://www.gnu.org/software/automake/\">automake</a> 1.5";
$template['require']['tree1d']="<a href=\"http://www.zlib.org/\">Libreria zlib</a>";
$template['require']['tree1e']="
	<a href=\"http://www.cpan.org\">Perl</a> (per generare la documentazione online)";
$template['require']['tree1f']="
	Librerie <a href=\"http://www.kde.org\">KDE</a> linkate <b>alla stessa</b> versione di Qt (opzionale)";
$template['require']['tree1g']="
	Controlla se la tua distro splitta le librerie di sviluppo; se &egrave; cos&igrave; devi installare i pacchetti che le contengono. Quei pacchetti spesso hanno \"-dev\" nel nome";
$template['require']['tree2']="Versione Unix (binari):";
$template['require']['tree2a']="Un sistema Unix funzionante";
$template['require']['tree2b']="
	Il <a href=\"http://www.trolltech.com\">toolkit GUI QT</a> >= 3.0.5 (versioni pi&ugrave; <b>potrebbero</b> funzionare)";
$template['require']['tree3']="Versione Windows (sorgenti):";
$template['require']['tree3a']="
	La versione libera del <a href=\"ftp://ftp.trolltech.com\">toolkit GUI QT</a> per Windows >= 2.3.0";
$template['require']['tree3b']="Libreria <a href=\"http://www.zlib.org/\">zlib</a>";
$template['require']['tree3c']="Un po' di fortuna";
$template['require']['tree4']="Versione Windows (binari):";
$template['require']['tree4a']="Se tutto va bene nulla";
$template['require']['tree5']="MacOS X (sorgenti):";
$template['require']['tree5a']="Segui le istruzioni in \"doc (INSTALL-MacOS.txt)\"";
$template['require']['tree6']="MacOS X (binari):";
$template['require']['tree6a']="
	Se tutto va bene nulla. Apri il file .dmg e trascina l'icona nella tua cartella applicazioni.";
$template['require']['titleold']="Requisiti (vecchio ramo 2.1.1)";
$template['require']['treeold1']="Un sistema UNIX funzionante";
$template['require']['treeold2']="Il <a href=\"http://www.trolltech.com\">toolkit GUI QT</a> >= 2.3.0";
$template['require']['treeold3']="Librerie <a href=\"http://www.kde.org\">KDE</a> (opzionale)";
/* require.php end */

/* screen.php start */
$template['screen']['title']="Screenshot";
$template['screen']['text']="Hai un bello screenshot? Invialo a";
$template['screen']['prev']="indietro";
$template['screen']['next']="avanti";
$template['screen']['screen1']="Opzioni Generali";
$template['screen']['screen2']="Centro Script";
$template['screen']['screen3']="Plugin URL &amp; uno script mail";
$template['screen']['screen4']="Pi&ugrave; dialog";
$template['screen']['screen5']="Popup del canale";
$template['screen']['screen6']="Ban del canale &amp; Dialog dei Modi";
$template['screen']['screen7']="Browser Aiuto";
$template['screen']['screen8']="Browser Directory";
$template['screen']['screen9']="KVIrc CVS funziona su Solaris";
$template['screen']['screen10']="Lista finestre, DCC send e Popup Utenti";
$template['screen']['screen11']="Grafico I/O, Emulatore Terminale e Avatar";
$template['screen']['screen12']="3 connessioni attive";
$template['screen']['screen13']="Avatar, Grafico I/O e Link dei server";
$template['screen']['screen14']="S&igrave;! credi ai tuoi occhi! KVIrc in aberrazione :)";
$template['screen']['screen15']="Finestra d'aiuto e widget";
$template['screen']['screen16']="Tema Fancy di default con finestra Trasferimenti";
$template['screen']['screen17']="Tema Minimalist e un menu popup contestuale";
$template['screen']['screen18']="
	4 finestre speciali. Trasferimenti, Log, Terminale e File Condivisi: per semplificare la tua chat quotidiana.";
$template['screen']['screen19']="Sei uno scripter? KVIrc ha vari strumenti per te.";
$template['screen']['screen20']="Helix su 3 server e un sacco di canali";
$template['screen']['screen21']="Helix connesso attraverso psyBNC e il collegamento sul desktop :D";
$template['screen']['screen22']="
	4 server. Nota le 3 finestre sulla sinistra che mostrano il canale pi&ugrave; attivo.";
$template['screen']['screen23']="L'exploit delle DCC non funziona con KVIrc :)";
$template['screen']['screen24']="Uno screenshot di bongwater: sta girando da 10 giorni :)";
$template['screen']['screen25']="
	Uno screenshot di <a href=\"http://kvirc.virg0.org\">etherea`</a>: Time makes no sense";
$template['screen']['screen26']="Uno screenshot di Xemanth^: un KVIrc 'hacker' su windows";
$template['screen']['screen27']="
	Uno screenshot di <a href=\"http://kvirc.virg0.org\">etherea`</a>: Newsticker di Pragma in azione :)";
$template['screen']['screen28']="
	Uno screenshot di <a href=\"http://hellvis69.altervista.org\">HelLViS69</a>: Clonescanner in funzione :)";
$template['screen']['screen29']="
	Lo script Twins' e il suo <a href=\"?id=addons&amp;lang=$lang&amp;version=3.2.3\">media player</a> su 'Anomalies'. Il nuovo ambiente di scripting coi namespace nella finestra dell'editor alias.";
$template['screen']['screen30']="
	Il tema SilverIRC, il default da KVIrc 3.2.6 dopo una nuova installazione. Screenshot fornito da thexception";
$template['screen']['screen31']="
	Tema SilverIRC. Il gestore dei temi. Screenshot fornito da thexception";
$template['screen']['screen32']="Tema SilverIRC. L'editor Alias. Screenshot fornito da thexception";
$template['screen']['screen33']="Tema SilverIRC. L'editor Eventi. Screenshot fornito da thexception";
$template['screen']['screen34']="Tema SilverIRC. L'editor Popup. Screenshot fornito da thexception";
/* screen.php end */

/* scripts.php start */
$template['scripts']['title']="Script";
$template['scripts']['text1']="Script di esempio sono inclusi nella distribuzione e sull'SVN";
$template['scripts']['text2a']="Usa";
$template['scripts']['text2b']="per installare lo script. Lo script di default dovrebbe essere installato ";
$template['scripts']['script1']="
	Script italiano con autojoin, controllo dei caps, autovoice... Completamente configurabile via GUI.";
$template['scripts']['script2']="
	SaNVirC &egrave; uno script per KVIrc che include funzioni come identificazione nick, autojoin, difesa, attacco, gestione dei bot, sistema di away, ecc.<br />E' stato scritto per i bot IRC-Hispano ma &egrave; molto facile adattarlo ad altri server.";
$template['scripts']['script3']="
	Savage Script &egrave; uno script per Giocatori con supporto XQF, informazioni di sistema, qauth...";
$template['scripts']['script4']="
	Questa &egrave; la prima release pubblica dello script con alcume migliorie per la notify list. Include funzioni AutoOp, AutoVoice, canali OPless, ecc.";
/* scripts.php end */

/* snapshots.php start */
$template['snapshots']['title']="Snapshot di Sviluppo";
$template['snapshots']['text1']="
	Gli snapshot di sviluppo sono pacchetti non ufficiali estratti dall'SVN su una base non regolare. Ogni snapshot riflette lo stato dell'SVN in una particolare data e potresti trovarne una molto recente. I pacchetti sono stati testati almeno su un paio di sistemi e hanno una buona possibilit&agrave; di compilare sul tuo. Sono disponibili inoltre alcuni pacchetti binari.";
$template['snapshots']['text2']="
	Gli snapshot sorgente sono forniti dal Team di Sviluppo KVIrc.<br />
	Onore e Gloria! :)";
$template['snapshots']['text3']="
	Per scaricare l'ultimo snapshot devi navigare nell'<a href=\"ftp://ftp.kvirc.net/pub/kvirc/snapshots/\">ftp di KVIrc</a> o nella sottodirectory \"snapshots\" di uno dei mirror ftp.";
/* snapshots.php end */

/* splash.php start */
$template['splash']['title']="Splash Screen";
$template['splash']['text']="Questa &egrave; una collezione di splash screen che KVIrc ha usato in passato.";
$template['splash']['date']="Data Rilascio";
$template['splash']['in']="Splash Presente in";
/* splash.php end */

/* status.php start */
$template['status']['title']="Stato del Progetto";
$template['status']['text']="
	<p>Dopo 7 anni di sviluppo KVIrc &egrave; un client IRC maturo e pieno di caratteristiche, un eccellente compagno per le chattate quotidiane.</p>
	<p>L'ultima release stabile &egrave; <a href=\"/?id=news&amp;story=2005.02.27.16.29.1.story&amp;dir=2005.02&amp;lang=$lang\">3.2.0 \"Realia\"</a>. E' stata pubblicata il 27 Febbraio 2005. Pu&ograve; essere ottenuta come sorgenti dalla pagina di <a href=\"?id=download&amp;lang=$lang\">download</a>.</p>
	<p>Se stai cercando una release ufficiale dai un occhio a <a href=\"?id=releases&amp;lang=$lang\">questa sezione</a>, sono rilasciate meno spesso ma sono le pi&ugrave; stabili. Scegli la tua release tra Linux, MacOS X, Windows o sorgenti.</p>
	<p>Gli snapshot sono situati <a href=\"?id=snapshots&amp;lang=$lang\">qui</a> mentre l'SVN <a href=\"?id=SVN&amp;lang=$lang\">qui</a>.</p>
	<p>Accertati di controllare le <a href=\"?id=install&amp;lang=$lang\">note d'installazione</a>, i <a href=\"?id=tutorials&amp;lang=$lang\">tutorial</a>, le <a href=\"?id=translation&amp;lang=$lang\">traduzioni</a> e i <a href=\"?id=themes&amp;lang=$lang\">temi</a> per una pi&ugrave; personalizzata versione del tuo KVIrc =)</p>";
/* status.php end */

/* SVN.php start */
$template['svn']['title']="Scaricare da SVN";
$template['svn']['text1']="
	Dal server SVN puoi scaricare l'ultima versione di sviluppo di KVIrc.<br />
	Una volta che ti sei accertato che il tuo sistema abbia Subversion, devi solo digitare questo comando:";
$template['svn']['text2']="
	Scaricherai il sorgente di KVIrc.<br />
	Se vuoi scaricare anche il sorgente dei moduli devi digitare questo comando:";
$template['svn']['text3']="
	Per compilare l'eseguibile e i moduli entra nella directory dei sorgenti::";
$template['svn']['text4']="
	e segui le <a href=\"?id=install&amp;lang=$lang\">istruzioni d'installazione</a>.<br />
	Le ultime istruzioni d'installazione per l'SVN possono anche essere trovate nel file INSTALL.<br />
	Stiamo cercando di mantenere l'SVN pi&ugrave; \"pulito\" possibile ma *potrebbe* capitare che i sorgenti che hai scaricato non compilino o vengono eseguito correttamente.<br />
	Puoi anche navigare l'SVN cliccando su <a href=\"https://SVN.kvirc.de/kvirc/browser/\">https://SVN.kvirc.de/</a>";
/* SVN.php end */

/* themes.php start */
$template['themes']['title']="Temi";
$template['themes']['text1']="Qui puoi scaricare alcuni temi carini";
$template['themes']['text2a']="Come posso installare un tema";
$template['themes']['text2b1']="Scarica il tema";
$template['themes']['text2b2']="Decomprimi il file scaricato in";
$template['themes']['text2b2a']="percorso al file scaricato";
$template['themes']['text2b3']="Apri il Gestore dei Temi";
$template['themes']['text2b4']="Doppio clicca il nuovo tema";
$template['themes']['text2b5']="Divertiti";
$template['themes']['text3a']="Come posso creare un tema";
$template['themes']['text3b1']="C'&egrave; un piccolo HOWTO, puoi trovarlo";
$template['themes']['text3b2']="qui";
$template['themes']['text3b3']="e la versione italiana";
$template['themes']['text3b4']="La versione inglese dell'HOWTO &egrave; inclusa nella distribuzione di KVIrc";
$template['themes']['text4a']="Ho fatto un tema. Come lo condivido";
$template['themes']['text4b']="Puoi mandarlo a";
$template['themes']['text4c']="col nome del tema, descrizione, versione, nickm homepage e mail, permettendoci o no di mostrarla sulla pagina";
$template['themes']['screenshot']="screenshot";
$template['themes']['theme1']="Versione caramellosa basata sulle icone Marble.";
$template['themes']['theme2']="Una versione pulita con le icone Crystal. Alcune icone sono prese dal tema Marble.";
$template['themes']['theme3']="Un tema con sfondo verde.";
$template['themes']['theme4']="Un tema scuro.";
$template['themes']['theme5']="Acqua bianca.";
$template['themes']['theme6']="Giusto un esempio in rosa...";
$template['themes']['theme7']="Un tema trasparente per usare con lo sfondo di KDE. Settato per grande visibilit&agrave; e contrasto.";
$template['themes']['theme8']="Un tema rilassante ispiranto al sito http://www.PayneReactor.com";
$template['themes']['theme9']="Un bel tema nero, basato sul tema Crystal :)";
$template['themes']['theme10']="Un altro tema scuro col logo Slackware e una pantera nera";
$template['themes']['theme11']="Un tema scuro basato sul tema XCrystall-black";
$template['themes']['theme12']="Puro Amore. Puro Bianco. Un pulito e ordinato tema.";
$template['themes']['theme13']="Un tema scuro a vetro";
$template['themes']['theme14']="Ancora un altro tema scuro";
$template['themes']['theme15']="Un tema natalizio per KVIrc";
$template['themes']['theme16']="La Perversione &egrave; un'altro modo di vivere; tema scuro con poca gamma.";
$template['themes']['theme17']="erotica.. mh..";
$template['themes']['theme18']="Anger &egrave; una variante di erotica. Leccati le labbra!";
$template['themes']['theme19']="Dark Blue &egrave; una variante di Marble. Divertiti con lui";
/* themes.php end */

/* tools.php start */
$template['tools']['title']="Strumenti";
$template['tools']['text1']="Qui puoi trovare alcuni strumenti relativi a KVIrc";
$template['tools']['tool1']="Sintassi colorata di KVS per Notepad++";
$template['tools']['tool2']="A simple tcl for eggdrops to make them reply to some CTCP requests";
/* tools.php end */

/* translation.php start */
$template['translation']['title']="Traduzioni";
$template['translation']['step']="Passo";
$template['translation']['text1']="
	In questa pagina puoi trovare informazioni sullo stato delle traduzioni di KVIrc. Per vedere se la tua lingua &egrave; supportata, dai un occhio alla lista qui sotto.";
$template['translation']['text2']="
	Molte persono stanno lavorando duramente per supportare pi&ugrave; lingue possibili. Per dare una mano l'unica cosa che ti serve sapere &egrave; la tua lingua: <b>non servono esperienze di programmazione</b>.";
$template['translation']['text3']="
	Tutti i traduttori <b>DEVONO USARE UTF-8</b> come standard di codifica. I file di traduzione in altri standard saranno deprecati.";
$template['translation']['text4']="
	Se sei interessato nella traduzione di KVIrc in una nuova lingua puoi trovare un semplice How-to.<br />
	Alcune lingue sono aggiornate (quasi) giornalmente, altre hanno bisogno di trovare un nuovo mantainer. Se vuoi aiutare a migliorare il supporto corrente della tua lingua, contatta il suo <b>ultimo traduttore</b>, listato qui:";
$template['translation']['text5a']="Non dimenticarti di iscriverti alla";
$template['translation']['text5b']="per rimanere in contatto con gli sviluppatori!";
$template['translation']['text6']="Questo mini-howto descrive la procedura per tradurre KVIrc in una nuova lingua";
$template['translation']['text7']="Scaricare i giusti sorgenti";
$template['translation']['text8a']="
	Prima di tutto hai bisogno l'ultima versione SVN di KVIrc. Per ottenerla puoi seguire le istruzioni su";
$template['translation']['text8b']="Le traduzioni sono in";
$template['translation']['text9']="Trovare il tuo codice lingua";
$template['translation']['text10a']="
	Devi trovare i contenuti del tuo codice lingua. Solitamente &egrave; una stringa formata da almeno due lettere e pu&ograve; essere trovata esaminando il contenuto della tua variabile di shell \$LANG o guardando";
$template['translation']['text10b']="qui";
$template['translation']['text10c']="Esempi di questi codici sono";
$template['translation']['text11']="Generare la lista di messaggi da tradurre";
$template['translation']['text12']="
	Devi seguire questo passo solo se &egrave; la prima volta che KVIrc viene tradotto nella tua lingua. Se devi aggiornare una traduzione esistente puoi passare direttamente al Passo 3.<br />
	Esegui il comando per estrarre i messaggi dai sorgenti.";
$template['translation']['text13']="
	Verr&agrave; creato un file chiamato <code>kvirc.pot</code>. Devi rinominarlo in <code>kvirc_xxx.po</code>, dove xxx &egrave; il codice della tua lingua trovato al Passo 1.";
$template['translation']['text14']="Tradurre i messaggi";
$template['translation']['text15a']="
	Se hai seguito il Passo 2 hai appena creato il file <code>kvirc_xxx.po</code> dove xxx sta per il tuo codice lingua (trovato al Passo 1).<br />
	Se sei saltato qui direttamente dal Passo 2 allora devi trovare il file <code>kvirc_xxx.po</code> nella directory <code>kvirc/po/kvirc</code>.<br />
	Se non c'&egrave; torna al Passo 2.";
$template['translation']['text15b']="
	Il file <code>kvirc_xxx.po</code> contiene un set di stringhe come la seguente:";
$template['translation']['text100a']="/percorso/al/file/che/contiene/la/stringa: numero della linea";
$template['translation']['text100b']="Messaggio da tradurre";
$template['translation']['text100c']="La traduzione va qui";
$template['translation']['text16']="
	La stringa <i>msgid</i> &egrave; il messaggio originale che deve essere tradotto e la stringa <i>msgstr</i> &egrave; la traduzione (che sar&agrave; vuota all'inizio, quando il file <code>kvirc_xxx.po</code> viene creato).";
$template['translation']['text17']="
	La stringa msgid contiene tag html, escape tipo \"\\n\" e formattazioni specifiche come \"%s\". Tu <b>DEVI</b> mantenere i tag, escape e formattazioni nella stringa msgstr. <b>Dai speciale attenzione</b> alle specifiche di formattazione (%s, %W, %Q...).<br />
	Devono rimanere <b>ESATTAMENTE nello stesso ordine</b> come in msgid: cambiare l'ordine o scrivere una formattazione sbagliata far&agrave; crashare KVIrc prima o poi.";
$template['translation']['text18']="Aggiungere la traduzione al Makefile.am";
$template['translation']['text19']="
	Una volta tradotte le stringhe puoi provare a far partire la traduzione in KVIrc. Se stai aggiornando una traduzione esistente puoi passare direttamente al Passo 5.";
$template['translation']['text20']="
	Devi forzare il processo di make a prendere la tua traduzione e compilarla. Questo &egrave; ancora un passo che va fatto una sola volta. In <code>kvirc/src/kvirc</code> c'&egrave; un file chiamato <code>Makefile.am</code>. Dovresti editarlo e aggiungere <code>kvirc_xxx.po</code> dove sono menzionati gli altri file *.po. Non dovresti aver problemi a trovare cosa va aggiunto guardando le altre voci in quel file.";
$template['translation']['text21']="Ora esegui:";
$template['translation']['text22']="
	e compila KVIrc come al solito. Dopo che ha finito di compilare, lancia KVIrc dopo essere certo che la tua variabile \$LANG &egrave; settata correttamente.";
$template['translation']['text23']="Provare la traduzione";
$template['translation']['text24']="Lancia make e aspetta finch&eacute; finisce.";
$template['translation']['text25']="KVIrc dovrebbe prendere la tua traduzione e usarla.";
$template['translation']['text26']="Aggiornare la traduzione quando il sorgente cambia";
$template['translation']['text27']="
	Mentre lo svilupo va avanti vengono aggiunti nuovi messaggi ai sorgenti e una piccola parte dei messaggi esistenti cambiano. Quando esegui un aggiornamento SVN per ottenere gli ultimi sorgenti dovresti entrare nella directory <code>kvirc/po/kvirc</code> ed eseguire:";
$template['translation']['text28']="
	Questa procedura aggiorner&agrave; il tuo file <code>kvirc_xxx.po</code> con i nuovi messaggi e marcher&agrave; i vecchi come <i>fuzzy</i> o invalidi. Le voci invalide devono essere ri-tradotte completamente mente quelle <i>fuzzy</i> hanno cambiamenti minori e possono essere aggiustate in pochi secondi.";
$template['translation']['text29']="Misc";
$template['translation']['text30']="
	Se sei in dubbio riguardo alcune traduzioni, dovresti guardare a come stringhe simili sono state tradotte nei file *.po di KDE: dovrebbero esserci dei file di traduzione di KDE sul loro SVN.";
$template['translation']['text31']="
	Dal momento che molti moduli hanno la loro traduzione la procedura sopra potrebbe essere (ma non sempre) ripetuta per le sottodirectory <code>po/modules/*/</code>";
$template['translation']['text32a']="
	Quando sei soddisfatto della tua traduzione puoi inviare il tuo file *.po a";
$template['translation']['text32b']="
	chiedendo l'inclusione nell'SVN. Se vuoi mantenere la traduzione allora puoi chiedere un accesso SVN in scrittura.";
$template['translation']['text33']="Felice traduzione :)";
/* translation.php end */

/* tutorials.php start */
$template['tutorials']['title']="Tutorial";
$template['tutorials']['archive']="Archivio completo";
$template['tutorials']['tutorial']="Tutorial";
$template['tutorials']['madeby']="scritto da";
$template['tutorials']['text1a']="The Art Of Scripting";
$template['tutorials']['text1b']="Un tutorial molto ricco sullo scripting";
$template['tutorials']['tree1c']="Introduzione al linguaggio";
$template['tutorials']['tree1d']="Cicli, condizioni e alias";
$template['tutorials']['tree1e']="Array, dizionari, oggetti e classi";
$template['tutorials']['tree1f']="Eventi e popup";
$template['tutorials']['tree1g']="Oggetti grafici e layout";
$template['tutorials']['tree1h']="La classe wrapper";
$template['tutorials']['tree1i']="Slot e segnali";
$template['tutorials']['tree1j']="Eventi Raw e azioni";
$template['tutorials']['tree1k']="Socket e perl";
$template['tutorials']['text2a']="Compilazione di KVIrc per Win32";
$template['tutorials']['text2b']="Un tutorial su come compilare KVIrc su Win32";
$template['tutorials']['text3a']="Tutorial sullo Scripting di KVIrc per principianti";
$template['tutorials']['text3b']="Una guida per principianti";
$template['tutorials']['text4a']="Installazione di KVIrc su Win32";
$template['tutorials']['text4b']="Un piccolo tutorial su come installare KVIrc, connettere a un server e joinare un canale su finestre";
$template['tutorials']['dropmail']="Se hai scritto una FAQ, un tutorial o una guida a KVIrc in qualsiasi linguaggio manda una mail a";
/* tutorials.php end */

/* welcome.php start */
$template['welcome']['title']="Benvenuto!";
$template['welcome']['text']="
	KVIrc &egrave; un client <acronym title=\"Internet Relay Chat\">IRC</acronym> <a href=\"http://www.gnu.org\">libero</a> e portabile basato sull'eccellente <a href=\"http://www.trolltech.com\">Qt GUI toolkit</a>.
	KVIrc &egrave; scritto da <a href=\"http://www.pragmaware.net\">Szymon Stefanek</a> e dal Team di Sviluppo di KVIrc col contributo di molti sviluppatori tossici di IRC in tutto il mondo.";
$template['welcome']['text2']="fai parte del progetto!";
$template['welcome']['alttext']="come aiutare il progetto KVIrc";
/* welcome.php end */
?>