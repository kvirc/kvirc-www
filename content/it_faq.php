<div class="title">FAQ</div>
<div class="text">
	<ul>
		<li><b>D: Come entro in un canale?</b><br />
		R: Digita /join #canale nella console.</li>

		<li><b>D: Non riesco a compilare KVIrc (valido per tutte le versioni).</b><br />
		R: LEGGI le istruzioni nel file INSTALL: i problemi pi&ugrave; comuni possono essere risolti impostando le variabili d'ambiente correte e utilizzando le opzioni del "./configure". Se il file INSTALL non ti aiuta puoi provare a entrare nel canale #KVIrc.net su Azzurra o #kvirc su IRCNet o FreeNode: ci sono molti utenti che possono provare ad aiutarti. Se non riesci proprio a risolvere il problema puoi provare a mandare una mail alla mailing list di KVIrc.</li>

		<li><b>D: Non riesco a collegarmi ai server IPv6.</b><br />
		R: Prima di tutto controlla che lo stack IPv6 sia installato correttamente e che sia funzionante:<br />
		Riesci a "pingare" (/bin/ping6) i server IPv6? <br /><br />
		# ping6 www.6bone.net<br /><br />
		Hai attivato il supporto IPv6 in KVIrc?<br />
		Per controllare digita<br /><br />
		/echo $features<br /><br />
		nella linea di comando di KVIrc, dovresti ottenere una lista delle opzioni compilate in KVIrc. Se la lista contiene "IPv6" allora il supporto IPv6 &egrave; presente, altrimenti controlla la fase di configurazione/compilazione per vedere se c'&egrave; qualcosa di errato.<br />
		Per collegarti ad un server IPv6 digita /server -i &lt;servername&gt; nella linea di comando di KVIrc.<br />
		Se puoi pingare i server IPv6, hai il supporto IPv6 correttamente compilato in KVIrc e non riesci a connetterti probabilmente hai trovato un bug. Segnalacelo.</li>

		<li><b>D: Come posso entrare nei canali automaticamente?</b><br />
		R: Ci sono vari modi per farlo:<br />
		Per esempio:<br />
		<ol>
			<li>Seleziona "Scripting/Events" dalla barra dei men&ugrave;, cerca "OnIrc" nel pannello di sinistra della finestra che si apre, clickaci con il tasto destro e seleziona "Nuovo gestore". Verr&agrave; creata una targhetta "predefinito", selezionala, ora nel pannello di destra scrivi:<br />
			join #kvirc<br />
			join #kde-users<br />
			join #somechannel<br />
			....<br />
			Adesso clicka su OK. Hai appena creato un azione da eseguire quando si verifica un evento ('OnIrc' in questo caso).<br />
			Collegati ad un server e KVIrc entrer&agrave; automaticamente nei canali che hai specificato.</li>

			<li>Un altro metodo (migliore se ti colleghi a pi&ugrave; server) &egrave; aprire la finestra di configurazione di KVIrc e andare su "Server", dopodich&eacute; cliccare su "Avanzate" sul server selezionato.<br />
			C'&egrave; una scheda apposta "Alla connessione...".</li>
		</ol></li>

		<li><b>D: Alcune volte KVIrc sembra essere lento su Windows.</b><br />
		R: Ci&ograve; &egrave; solitamnte causato dalla parte grafica: si pu&ograve; provare a rimuovere alcuni effetti grafici (per esempio la pseudo-transparenza). Ho anche testato che questo inconveniente capita quasi sempre sui display a 32 bit. Cambiando a 16 o 24 bit potrebbe risolvere il problema.</li>

		<li><b>D: Come mi connetto ad un server IRC con il supporto per SSL?</b><br />
		R: Digita /server -s &lt;nome_del_server&gt;<br />
		Dovrebbe funzionare anche assieme ad IPv6.<br />
		Se non funziona &egrave; probabile che non il supporto per SSL non sia compilato in KVIrc.<br />
		Per controllare digita<br /><br />
		/echo $features<br /><br />
		nella linea di comando di KVIrc, dovresti ottenere una lista delle opzioni compilate in KVIrc. Se la lista contiene "SSL" allora il supporto per SSL &egrave; presente, altrimenti controlla la fase di configurazione/compilazione per vedere se c'&egrave; qualcosa di errato.</li>

		<li><b>D: Come utilizzo la DCC chat attraverso SSL?</b><br />
		R: Digita<br />
		/dcc.chat -s &lt;nickname&gt;</li>

		<li><b>D: Ho bisogno di un certificato SSL?</b><br />
		R: Non dovrebbe essere necessario, ma puoi usarlo comunque se vuoi.</li>

		<li><b>D: Come creo un certificato SSL?</b><br />
		R: Puoi utilizzare il Perl script incluso nell'installazione di OpenSSL (CA.pl), entra nella directory dove si trova lo script e digita<br />
		'perl CA.pl -newcert'.</li>

		<li><b>D: Non riesco a far usare nessuno dei miei certificati SSL in una DCC.</b><br />
		R: Il protocollo SSL non richiede che il "lato client" invii il certificato: il certificato &egrave; inviato solo se il "lato server" lo richiede (che non &egrave; il caso di KVIrc).<br />
		Se la tua Chiave Privata &egrave; memorizzata nel certificato specifica lo stesso certificato sia nell'opzione "Certificato" che nell'opzione "Chiave Privata".<br />
		Ricordati di impostare una password se necessario.</li>

		<li><b>D: KVIrc va in crash quando uso un certificato SSL su Windows.</b><br />
		R: Questo &egrave; probabilmente un bug nella libreria SSL allegata alla versione per Windows di KVIrc. Puoi provare ad utilizzare un'altra versione di questa libreria.</li>

		<li><b>D: /me non supporta il caratere '$'.</b><br />
		R: Questo NON &egrave; un bug, &egrave; una caratteristica di KVIrc, esso infatti supporta (e sostituisce) le variabili in tutti i comandi.<br />
		Puoi evitare che il carattere $ indichi una variabile utilizzando il carattere backslash:<br />
		/me ha \$1000 in tasca.</li>

		<li><b>D: /me non supporta l'uso di '&quot;' (doppi apici).</b><br />
		R: Questo NON &egrave; un bug, &egrave; una caratteristica: una stringa racchiusa tra i doppi apici manterr&agrave; invariati gli spazi che ha mentre alle altre stringhe verranno semplificati.<br />
		Ci&ograve; &egrave; valido per ogni comando.<br />
		Puoi evitarlo utilizzando il carattere backslash ('\') prima degli apici:<br />
		/me odia \"codare\" con emacs.</li>

		<li><b>D: /me non pu&ograve; contenere il carattere ';'.</b><br />
		R: Questo NON &egrave; un bug, questa &egrave; una caratteristica: KVIrc supporta comandi multipli in un singola linea e usa ';' come separatore dei comandi.<br />
		Puoi evitarlo utilizzando il carattere backslash:<br />
		/me pensa che sia divertente \;).</li>

		<li><b>D: Non vedo pi&ugrave; i men&ugrave; del canale.</b><br />
		R; Se c'&egrave; qualche errore nelle impostazioni di KVIrc (un crash al momento del salvataggio delle impostazioni) o se hai commesso qualche errore nelle opzioni di scripting e vuoi tornare alle impostazioni originali (quelle di default della script) puoi andare su "Scripting/Ripristina script predefiniti" dal men&ugrave; di KVIrc.<br />
		(<b>ATTENZIONE:</b> Ci&ograve; canceller&agrave tutte le modifiche apportate a KVIrc).</li>

		<li><b>D: Ottengo questi errori di compilazione:<br />
		&nbsp; &nbsp; &nbsp; &nbsp; In file [somefile]:[someline] internal error:<br />
		&nbsp; &nbsp; &nbsp; &nbsp; Segmentation fault<br />
		&nbsp; &nbsp; &nbsp; &nbsp; Please submit a full bug report,<br />
		&nbsp; &nbsp; &nbsp; &nbsp; with preprocessed source if appropriate.<br />
		&nbsp; &nbsp; &nbsp; &nbsp; See &lt;URL:http:...</b><br />
		R: Questo errore pu&ograve; dipendere da pi&ugrave; cose.<br />
		<ol>
			<li>Un bug nel compilatore: il mio GCC 3.2 20020903 (default in RH 8.0) ne tira fuori 5-6 al giorno. Solitamente si risolve semplicemente dando nuovamente il comando 'make'.<br />
			Se l'errore rimane o diventa molto frequente puoi provare ad aggiornare il compilatore.</li>

			<li>Una corruzione della memoria, &egrave; veramente frequente: uno dei banchi di memoria sta sputando byte casuali. Solitamente il problema si presenta nei momenti in cui il sistema ha un alto utilizzo (la compilazione del kernel, di KDE o di KVIrc). Puoi testare l'eventuale corruzione provando altri banchi di RAM (o rimuovendoli uno alla volta per scoprire quello mal funzionante). Puoi anche provare un programma che si chiama memtest e/o applicare una patch per il kernel che fa ignorare il banco rotto (allocando permanentemente il banco ad un falso task del kernel).<br />
			Questi strumenti possono essere trovati cercando in Internet con il tuo motore di ricerca preferito.</li>

			<li>Un problema hardware peggiore: se aggiornare il compilatore e cambiare il banco di memoria non cambia nulla il problema pu&ograve; essere peggiore, un errore nel bus, problemi nel controller IDE (o SCSI) o una CPU con qualche problema...</li>
		</ol></li>

		<li><b>D: KVIrc va in crash quando viene mostrato un URL nella finestra di output.</b><br />
		R: Il crash pu&ograve; essere causato dal modulo URL, prova a dare il comando<br />
		/url.unload</li>

		<li><b>D: KVIrc va in crash quando viene aperta la barra per l'immissione di pi&ugrave; linee di testo (o nello script center).</b><br />
		R: Il problema si pu&ograve; verificare se hai installato una nuova versione di KVIrc sopra ad una installazione precedente o se hai cambiato (aggiornato) le librerie Qt a cui KVIrc &egrave; linkato oppure pu&ograve; essere causato da una configurazione errata dell'editor multitesto.<br />
		Prova a cancellare il file $HOME/.kvircssexeditorrc e a riaprire KVIrc.</li>
	</ul>

	Thanks to  <a href="mailto://nate@paranoici.REMOVE.THE.ANTISPAM.WORDS.org">Alessio Paoletti <acronym title="also known as">a.k.a</acronym> Nate Grey</a> who translated this FAQ to italian.
</div>