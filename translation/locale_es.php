<?
// Security check
if(isset($_GET['checkNetHack'])||!isset($checkNetHack))
	echo "<script type=\"text/javascript\">location.href='..';</script>";

/* index.php start */
// languages
$template['index']['brazilian']="Brasileño";
$template['index']['bulgarian']="Búlgaro";
$template['index']['catalan']="Catalán";
$template['index']['croatian']="Croata";
$template['index']['czech']="Checo";
$template['index']['dutch']="Holandés";
$template['index']['english']="Inglés";
$template['index']['finnish']="Finlandés";
$template['index']['french']="Francés";
$template['index']['german']="Alemán";
$template['index']['hungarian']="Húngaro";
$template['index']['italian']="Italiano";
$template['index']['latvian']="Letón";
$template['index']['polish']="Polaco";
$template['index']['portuguese']="Portugués";
$template['index']['russian']="Ruso";
$template['index']['serbian']="Serbio";
$template['index']['spanish']="Español";
$template['index']['ukrainian']="Ucraniano";

// the project
$template['index']['theproject']="el proyecto";
$template['index']['status']="estado";
$template['index']['features']="características";
$template['index']['license']="licencia";
$template['index']['screens']="capturas";
$template['index']['bugtrack']="KVIrc bugtrack";
// running kvirc
$template['index']['running']="usar KVIrc";
$template['index']['download']="descargar";
$template['index']['releases']="versiones oficiales";
$template['index']['snapshots']="snapshots";
$template['index']['svn']="SVN";
$template['index']['install']="instalación";
// documentation
$template['index']['docs']="documentación";
$template['index']['faq']="FAQ";
$template['index']['api']="API";
$template['index']['kviman']="manual de KVIrc";
$template['index']['tutorials']="tutoriales";
$template['index']['translations']="traducciones";
$template['index']['shortcuts']="Keyboard shortcuts";
// graphic suite
$template['index']['graphsuite']="suite gráfica";
$template['index']['themes']="temas";
$template['index']['splash']="splash screens";
$template['index']['banners']="banners";
$template['index']['arts']="diseños";
// misc
$template['index']['misc']="miscelánea";
$template['index']['honor']="honor y gloria";
$template['index']['scripts']="scripts";
$template['index']['addons']="addons";
$template['index']['tools']="herramientas";
$template['index']['changelog']="changeLog";
$template['index']['svncommits']="avisos SVN";
// contact
$template['index']['contact']="contacto";
$template['index']['ml']="lista de correo de KVIrc";
$template['index']['archive']="archivo";
$template['index']['contribute']="colaboraciones";
$template['index']['help']="buscando ayuda";
$template['index']['donation']="hacer una donación";
// KVIrc related
$template['index']['related']="más KVIrc";
$template['index']['forum']="foro oficial";
$template['index']['rusite']="sitio ruso";
$template['index']['frsite']="sitio francés";
$template['index']['frforum']="foro francés";
$template['index']['osxsite']="versión MacOS X";
// other
$template['index']['quickdnl']="descarga rápida";
// search
$template['index']['search']="Buscar";
$template['index']['go']="¡IR";
// news
$template['index']['latestnews']="noticias";
$template['index']['allnews']="Todas las noticias";
// mirrors
$template['index']['mirrors']="mirrors";
$template['index']['wwwmirrors']="mirrors WWW";
$template['index']['ftpmirrors']="mirrors FTP";
$template['index']['mirrorstext1a']="Contribuir al proyecto KVIrc creando y manteniendo un mirror es realmente fácil y apreciado, en";
$template['index']['mirrorstext1b']="esta página";
$template['index']['mirrorstext1c']="encontrarás instrucciones paso a paso de como crear un mirror www o ftp (o ambos).";
$template['index']['mirrorstext2']="Necesitamos ftps no-europeos.";
$template['index']['mirrorstitle']="mirrors www y ftp";
// layouts
$template['index']['oldlayout']="webs anteriores";
$template['index']['oldsite']="sitio KVIrc antiguo";
$template['index']['iakkohome']="web de iakko";
// help
$template['index']['helptext1a']="si necesitas algún tipo de ayuda, la manera más rápida es ir a la";
$template['index']['helptext1b']="lista de correo pública de KVIrc";
$template['index']['helptext1c']="o unirse a los canales dedicados";
// bugs
$template['index']['bugreport']="informar de bug";
$template['index']['bugstext']="los bugs pueden ser informados y vistos en el sistema bugtrack de KVIrc, disponible aquí:";
// more docs
$template['index']['moredocs']="documentación";
$template['index']['officialdocs']="documentación oficial de KVIrc";
$template['index']['docsauto']="peticiones del índice autogeneradas";
// hardware, traffic and hosting donation
$template['index']['hwdonation']="rocket-propelled";
$template['index']['hwdonationtext']="was so kind to donate hardware for running svn.kvirc.de";
$template['index']['tahdonation']="lifted into the air";
$template['index']['tahdonationtext']="is sponsoring hosting and traffic for svn.kvirc.de";
$template['index']['donationtextkvirc.de']="and this mirror";
// other
$template['index']['latestscreen']="última captura";
$template['index']['footer']="este sitio se ve mejor con un monitor";
/* index.php end */

/* custom vars start */
$template['custom']['author']="Autor";
$template['custom']['description']="Descripción";
$template['custom']['homepage']="Página web";
$template['custom']['download']="Descargar";
$template['custom']['downbig']="Grande";
$template['custom']['date']="Fecha";
$template['custom']['size']="Tamaño";
$template['custom']['version']="Versión";
$template['custom']['type']="Tipo";
$template['custom']['city']="Ciudad";
$template['custom']['maintainer']="Mantenedor";
$template['custom']['optional']="Optional";
/* custom vars end */

/* addons.php start */
$template['addons']['title']="Addons";
$template['addons']['text1']="Aquí puedes encontrar addons basados en scripts para KVIrc";
$template['addons']['text1b']="
	Todos estos addons requieren, como mínimo, la versión 3.2.1.<br />
	Por favor, <b>elige tu versión</b> de KVIrc.";
$template['addons']['text2']="Para instalar un addon";
$template['addons']['tree1']="<b>Descarga</b> el addon y <b>descomprímelo</b> en cualquier parte";
$template['addons']['tree2']="
	Pulsa <b>CTRL+Alt+M</b> para abrir el Gestor de Funcionalidades Adicionales (o ábrelo desde el menú de Configuración)";
$template['addons']['tree3']="Pulsa el botón \"<b>Instalar Funcionalidad Adicional</b>\", en la parte derecha";
$template['addons']['tree4']="
	Ve hasta el lugar donde hayas descomprimido el addon y selecciona el archivo <b>install.kvs</b>";
$template['addons']['sorry']="Lo siento, no hemos encontrado addons para la versión especificada de KVIrc";
$template['addons']['addon1']="Entra automáticamente en estado ausente después de un período de inactividad";
$template['addons']['addon2']="Provee botones en la barra de herramientas para operaciones de canal usadas frecuentemente";
$template['addons']['addon3']="Muestra estadísticas para un canal";
$template['addons']['addon4']="Un simple script para saber de dónde viene un host";
$template['addons']['addon5']="Automáticamente introduce datos de cifrado a tus objetos cifrados";
$template['addons']['addon6']="Provee botones en la barra de herramientas y accesos directos para los comandos del proxy IRC EZBounce";
$template['addons']['addon7']="Un juego uno-a-uno simple";
$template['addons']['addon8']="Un F-Server simple";
$template['addons']['addon9']="Un script simple para hacer lol y besar con las teclas F3-F8, también con escritura divertida";
$template['addons']['addon10']="Un script simple para anunciar mp3s que están siendo reproducidos, con opción de compartirlos";
$template['addons']['addon11']="Un simpático \"come tiempo\"";
$template['addons']['addon12']="Muestra feeds de noticias RSS desde cualquier fuente";
$template['addons']['addon13']="
	Permite anunciar y compartir la música que está siendo escuchada en canales y privados";
$template['addons']['addon14']="Un script simple para mantener los modales";
$template['addons']['addon15']="Implementa un simple bot de preguntas";
$template['addons']['addon16']="Permite enviar SMS a través de varios servicios basados en web";
$template['addons']['addon17']="Permite al usuario advertir, echar, y banear al que diga palabras prohibidas";
$template['addons']['addon18']="Un sistema de ops/voz/bans automáticos para tus canales (addon del script Twins)";
$template['addons']['addon19']="
	Coloriza tu texto en canales, privados y chats DCC (addon del script Twins)";
$template['addons']['addon20']="Una simple barra de lag con tres colores diferentes (addon del script Twins)";
$template['addons']['addon21']="
	Controla remotamente tu reproductor con una interfaz de usuario simple, y ofrece tu música a otros usuarios (addon del script Twins)";
$template['addons']['addon22']="Comprueba el host previo de un usuario";
$template['addons']['addon23']="Simple cambiador de sets de iconos. Puedes elegir iconos antiguos, iconos nuevos con caritas antiguas o iconos nuevos";
/* addons.php end */

/* archive.php start */
$template['archive']['title']="Archivo de la lista de correo";
$template['archive']['text']="
	Aquí puedes encontrar los archivos de la lista de correo: este es el primer lugar en el que deberías mirar si tuvieras algún problema.<br />
	Puedes buscar manualmente o usar el formulario de abajo.";
$template['archive']['search']="Buscar en Google";
$template['archive']['jan']="Enero";
$template['archive']['feb']="Febrero";
$template['archive']['mar']="Marzo";
$template['archive']['apr']="Abril";
$template['archive']['may']="Mayo";
$template['archive']['jun']="Junio";
$template['archive']['jul']="Julio";
$template['archive']['aug']="Agosto";
$template['archive']['sep']="Septiembre";
$template['archive']['oct']="Octubre";
$template['archive']['nov']="Noviembre";
$template['archive']['dec']="Diciembre";
/* archive.php end */

/* arts.php start */
$template['arts']['title']="Diseños";
$template['arts']['text']="Una colección de diseños misceláneos, relacionados con KVIrc.";
$template['arts']['desc1']="
	Seis coloridas variaciones de un tema al estilo cómic, hechas para reemplazar la pantalla de inicio. Simplemente guarda la imagen elegida como \$HOME/.kvirc/pics/kvi_splash.png. También puedes usar estas pantallas como banners o como un punto de inicio para tu propio diseño.
	";
$template['arts']['desc2']="Otra visión de \"Marmalade\", por suspiria :)";
$template['arts']['desc3']="¿Eh?";
$template['arts']['desc4']="Un punto de inicio para un avatar.";
$template['arts']['desc6']="Ella usa esta pantalla de inicio... :)";
/* arts.php end */

/* banners.php start */
$template['banners']['title']="Banners";
$template['banners']['text1']="
	Esta es una colección de banners de KVIrc hecha por varios artistas: simplemente guarda la imagen y úsala en tu propio sitio :)";
$template['banners']['text2']="Envía tus banners a";
$template['banners']['bannerby']="Banners por";
/* banners.php end */

/* contribute.php start */
$template['contribute']['title']="Contribuyendo";
$template['contribute']['text1']="
	El proyecto KVIrc está abierto a contribuciones de varias maneras. Puedes contribuir en diferentes tareas que requieren varios grados de conocimiento (desde \"casi ninguno\" a \"gurú\").";
$template['contribute']['text2']="Contribuyendo con código";
$template['contribute']['text3']="
	La tarea principal es, obviamente, la escritura de código. El desarrollo del núcleo de KVIrc y los módulos externos requieren un conocimiento razonable de C++.<br />
	La GUI de KVIrc usa la librería Qt (y a veces KDE) así que algo de conocimiento de esas librerías también podría ser necesario. Hay otras áreas de interés en el árbol de código: redes, criptografía, compresión de datos, parseadores de lenguajes...<br />
	Cada nivel de contribución es preciado: desde parches de 2 líneas hasta la implementación y mantenimiento del núcleo.";
$template['contribute']['text4']="Contribuyendo con gráficos";
$template['contribute']['text5']="
	La \"V\" en KVIrc es de \"Visual\". Los gráficos ayudan a los usuarios a navegar en la interfaz del programa y a reconocer rápidamente algunas funciones que el programa tiene. Necesitamos iconos, imágenes de diálogos, pantallas de inicio, logos, una mascota... una buena idea sería implementar un tema completo de gráficos...";
$template['contribute']['text6']="Contribuyendo con documentación";
$template['contribute']['text7']="
	La documentación es tan importante como el programa en sí.<br />
	Algunas características de KVIrc son invisibles al usuario medio simplemente porque no son mencionadas en ningún documento público.<br />
	Contribuir con documentación significa: recolectar FAQs y ponerlas en un foro legible y buscable, escribir documentos sobre características específicas, escribir tutoriales...<br />
	Una buena \"introducción a KVIrc para principiantes\" es necesario (esto podría ser una introducción al IRC también).";
$template['contribute']['text8']="Traduciendo los mensajes de KVIrc";
$template['contribute']['text9']="
	KVIrc es una aplicación basada en texto: las frases de la interfaz necesitan ser traducidas a todos los lenguajes posibles. Solo tienes que conocer algún idioma que no sea el inglés: el esquema de traducción está basado en gettext, así que no requiere prácticamente ningún conocimiento de código.";
$template['contribute']['text10']="Traduciendo la documentación";
$template['contribute']['text11']="
	Las partes más básicas de la documentación deberían ser traducidas a otros idiomas para que todo el mundo pueda entender las características del \"núcleo\" de KVIrc.<br />
	Esto requiere aún menos conocimientos de código que traducir los mensajes.";
$template['contribute']['text12']="Mantenimiento y desarrollo de la web";
$template['contribute']['text13']="
	Este sitio web necesita ser extendido y mantenido.<br />
	Para esta tarea necesitas conocimientos de php, xhtml, css y algunas ideas :)";
$template['contribute']['text14']="Mirrors";
$template['contribute']['text15']="
	Mirrors FTP y WWW siempre son bienvenidos: actualmente necesitamos mirrors fuera de Europa.<br />
	El sitio www está escrito en php y es actualizado vía SVN así que el mirror debe ser capaz de usar php y debe tener un servidor SVN.<br />
	El archivo FTP tiene alrededor de 1.2GB; aunque si quieres puedes hacer un mirror parcial.<br />
	Las instrucciones detalladas para montar un mirror www o ftp están <a href=\"?id=mirroring&amp;lang=$lang\">aquí</a>.";
$template['contribute']['text16']="Relaciones públicas";
$template['contribute']['text17']="
	Necesitamos gente que hable de KVIrc, escriba artículos, descripciones, reviews, busque contribuyentes...";
$template['contribute']['text18']="Con quién contactar";
$template['contribute']['text19']="
	Una vez que hayas decidido que quieres contribuir de cualquier manera puedes enviar un mail con tu propuesta a <a href=\"mailto:pragma [at] kvirc [dot] net\">Pragma</a>.<br />
	Otro lugar en el que puedes anunciar tu disponibilidad/propuesta es en el canal de IRC <a href=\"irc://chat.ircnet.org/#kvirc\">#KVIrc</a> en IRCNet, <a href=\"irc://irc.azzurra.org/#KVIrc.net\">#KVIrc.net</a> en Azzurra o <a href=\"irc://irc.freenode.org/#kvirc\">#KVIrc</a> en FreeNode (también conocida como la OpenProjects Network).";
/* contribute.php end */

/* donate.php start */
$template['donate']['title']="Soportando el proyecto KVIrc haciendo donaciones económicas";
$template['donate']['text1']="
	KVIrc está disponible gratuitamente y siempre estará disponible gratuitamente: no hace falta pagar para descargar, usar, modificar y redistribuir el código fuente.";
$template['donate']['text2']="
	La mayor parte de los recursos físicos de los que KVIrc vive (como servidores www o ftp) son contribuídos por miembros del equipo KVIrc. Por otro lado, el proyecto requiere una increíble cantidad de horas de escritura de código, y otras cosas que deben ser pagadas como actualizaciones de hardware, registros de nombres de dominio, pagos del hosting, libros... Si disfrutas de KVIrc, por favor considera soportar el proyecto financiándolo: puedes hacer la donación usando PayPal.";
$template['donate']['text3']="
	El botón de abajo te llevará al sitio de PayPal donde podrás especificar la cantidad de la donación y la moneda que usarás. Puedes donar cualquiera cantidad que quieras: toda será apreciada. Si nunca has usado PayPal antes, el sitio te preguntará sobre los detalles de tu tarjeta de crédito, tu país, dirección y el número de teléfono de tu casa.  Esta información es requerida por PayPal para hacer la transacción y no es requerida o visible para el equipo de KVIrc.";
$template['donate']['text4']="
	Una vez que hayas hecho tu donación, serás contactado por e-mail y te preguntaremos si quieres que tu donación sea listada en esta página. Una vez que el dinero donado sea usado, su destino será listado junto al donador y la cantidad donada.";
$template['donate']['text5']="¡Gracias! :)";
$template['donate']['title2']="Donaciones recientes";
$template['donate']['donation']="donado por";
$template['donate']['alttext']="Haz una donación al proyecto KVIrc por PayPal";
/* donate.php end */

/* download.php start */
$template['download']['title']="Descargando KVIrc";
$template['download']['text1']="Puedes obtener KVIrc de tres maneras:";
$template['download']['text2']="Paquetes de versiones oficiales";
$template['download']['text3']="
	Los paquetes oficiales son lanzados con menos frecuencia pero son los más estables. Cada paquete oficial está probado y seguramente compilará en tu sistema. También tienes más posibilidades de encontrar un paquete binario para tu sistema. Las FAQs y documentación se refieren a este tipo de paquete.";
$template['download']['text4']="Snapshots en desarrollo";
$template['download']['text5']="
	Las snapshots en desarrollo son paquetes no-oficiales extraídos de la SVN en un estado no estable. Cada snapshot refleja el estado SVN de una revisión particular, así que probablemente quieras encontrar una reciente. Los paquetes han sido probados en al menos unos pocos sistemas y tienen una alta posibilidad de compilar en el tuyo. Hay también algunos binarios disponibles.";
$template['download']['text6']="Fuentes actualizadas de SVN";
$template['download']['text7']="
	La última versión de las fuentes puede ser descargada usando el sistema SVN. Intentamos mantener el SVN tan \"limpio\" como sea posible pero no está garantizado que las fuentes compilen. El método SVN sólo da fuentes: no hay binarios.";
/* download.php end */

/* faq.php start */
$template['faq']['title']="FAQ";
$template['faq']['text1a']="¿Cómo unirse a un canal";
$template['faq']['text1b']="Escribe \"/join #nombredelcanal\"";
$template['faq']['text2a']="¡No puedo compilar KVIrc (cualquier versión)";
$template['faq']['text2b']="
	LEE las instrucciones en el archivo INSTALL: los problemas más comunes pueden ser resueltos configurando correctamente las variables de entorno y jugando con las opciones de ./configure. Si es archivo INSTALL no te ayuda puedes intentar entrando en #kvirc en IRCNet o FreeNode: hay muchos usuarios expertos que podrían intentar ayudarte. Si todavía no puedes conseguirlo, publica tu error en la lista de correo de KVIrc";
$template['faq']['text3a']="No me puedo conectar a un servidor IPV6";
$template['faq']['text3b1']="
	Primero de todo asegúrate de que tu pila IPV6 está bien configurada.<br />
	¿Puedes hacer ping6 a otras máquinas IPV6?";
$template['faq']['text3b2']="
	Asegúrate de que el soporte IPV6 está activado en tu ejecutable KVIrc.<br />
	¿No estás seguro";
$template['faq']['text3b3']="
	Escribe eso en la línea de comandos de KVIrc. Deberías obtener una lista de características compiladas en el ejecutable, separadas por comas. Si la lista contiene \"IPV6\" entonces el soporte está compilado, si no es así deberías recompilar el ejecutable para ver qué está mal.
	Para conectar a un servidor IPV6 puedes usar /server -i &lt;nombredelservidor&gt;
	Si puedes hacer ping a otras máquinas IPv6, el soporte IPv6 está compilado en tu ejecutable y aún así no puedes conectar aun servidor IPv6 *existente*, podrías haber encontrado un bug :) Repórtalo, por favor";
$template['faq']['text4a']="¿Cómo auto-entro en canales";
$template['faq']['text4b1']="
	Hay varias maneras de hacerlo.
	Por ejemplo";
$template['faq']['text4b2']="
	Selecciona \"Scripting/Editar Eventos\" desde el menú KVIrc<br />
	Busca la entrada \"OnIrc\" en el panel izquierdo de la ventana que ha aparecido.<br />
	Haz clic con el botón derecho en esa entrada y selecciona \"Añadir manejador\".<br />
	Un manejador \"por defecto\" será creado. En el panel derecho escribe:<br />
	join #kvirc<br />
	join #kde<br />
	join #otrocanal<br />
	....<br />
	Ahora haz clic en OK y ya está: has creado un manejador para un evento.<br />
	Reconecta a algún servidor y KVIrc reentrará en los canales que hayas seleccionado";
$template['faq']['text4b3']="
	Otra opción (mejor, si usas varios servidores) es ir a la página de opciones de servidores y hacer clic en el botón llamado 'Avanzado'.<br />
	Hay un evento específico llamado \"En conexión\", úsalo igual que en el otro método.";
$template['faq']['text5a']="En Windows, KVIrc se vuelve lento a veces";
$template['faq']['text5b']="
	Esto normalmente está causado por gráficos pesados: intenta quitar algunos efectos gráficos como la pseudo-transparencia. He experimentado que pasa casi siempre en las pantallas de 32 bits. Cambiar a 16 o 24 bits podría ayudar";
$template['faq']['text6a']="¿Cómo me conecto a un servidor IRC con SSL";
$template['faq']['text6b1']="Usa";
$template['faq']['text6b2']="Esto también debería funcionar en IPv6.<br />
	Si no funciona es porque tu ejecutable podría no haber sido compilado con soporte SSL.<br />
	Para averiguarlo escribe";
$template['faq']['text6b3']="en la línea de comandos de KVIrc. Si \"SSL\" no está en la lista, deberías recompilar el ejecutable con capacidades SSL.";
$template['faq']['text7a']="¿Cómo uso SSL en DCC";
$template['faq']['text7b']="debería funcionar";
$template['faq']['text8a']="¿Necesito un certificado SSL";
$template['faq']['text8b']="No deberías necesitarlo, pero puedes usarlo si quieres";
$template['faq']['text9a']="¿Cómo creo un certificado SSL";
$template['faq']['text9b']="
	Un certificado de pruebas firmado por ti mismo puede ser creado usando el script en perl CA.pl incluido en OpenSSL. Será algo como";
$template['faq']['text10a']="No consigo que KVIrc use mi certificado SSL en DCC";
$template['faq']['text10b']="
	El protocolo SSL no requiere que el \"cliente\" envíe el certificado: es enviado solo si el \"servidor\" lo requiere (y ese no es el caso de KVIrc).<br />
	El servidor podría tener un certificado y puedes configurarlo en la página de opciones de SSL.<br />
	Si tu clave privada está en el archivo de certificado, pon el mismo nombre de archivo en la opción Certificado y Clave Privada.<br />
	Recuerda poner la contraseña si es necesaria";
$template['faq']['text11a']="KVIrc falla cuando se usa un certificado en Windows";
$template['faq']['text11b']="
	Posiblemente haya un bug en la dll de SSL que viene con la versión de Windows de KVIrc.<br />
	Inténtalo con una versión diferente de esa dll";
$template['faq']['text12a']="/me no soporta la letra '\$'";
$template['faq']['text12b']="
	Esto NO es un bug, es una característica: kvirc soporta (¡y sustituye!) variables en todos los comandos. Puedes escapar el símbolo $ usando la barra invertida: /me ha ganado 100\\\$ funcionará correctamente";
$template['faq']['text13a']="/me no soporta el carácter de comillas &quot;";
$template['faq']['text13b']="
	Esto NO es un bug, es una característica, y es válida para CUALQUIER comando.<br />
	Puedes escapar el símbolo &quot; usando el carácter de barra invertida: /me se siente un poco \\\"raro\\\" funcionará correctamente";
$template['faq']['text14a']="/me no puede contener el carácter ';'";
$template['faq']['text14b']="
	Esto NO es un bug, es una característica: kvirc soporta múltiples comandos en una única línea y usa ';' como un separador de comandos. Puedes escapar el símbolo ';' usando el carácter de barra invertida: /me tiene hambre \;) funcionará correctamente";
$template['faq']['text15a']="No veo los menús de los canales";
$template['faq']['text15b']="
	Si algo va mal en las configuraciones de KVIrc (¿quizá falló el programa mientras se guardaba la configuración?) o si has tocado algo en las opciones de scripting y quieres de nuevo el comportamiento original (el script por defecto) puedes elegir \"Scripting/Restaurar script por defecto\" desde el menú de KVIrc.<br />
	(<b>ATENCIÓN:</b> ¡Esto borrará cualquier modificación que hayas hecho!)";
$template['faq']['text16a']="
	Estoy obteniendo errores de compilación como estos::<br />
	&nbsp; &nbsp; In file [algunarchivo]:[algunalinea] internal error:<br />
	&nbsp; &nbsp; Error de segmentación<br />
	&nbsp; &nbsp; Please submit a full bug report,<br />
	&nbsp; &nbsp; with preprocessed source if appropriate.<br />
	&nbsp; &nbsp; See &lt;URL:http:...";
$template['faq']['text16b1']="Este error puede tener múltiples motivos";
$template['faq']['text16b1a']="
	Un bug del compilador: mi GCC 3.2 20020903 (por defecto en RH 8.0) suelta 5 o 6 de estos cada día. Normalmente se soluciona simplemente reiniciando el comando \"make\".<br />
	Si el error no desaparece o se vuelve frecuente y pesado, deberías intentar actualizar el compilador";
$template['faq']['text16b1b']="
	Un problema en la RAM: esto es muy frecuente: uno de tus módulos de memoria está soltando bytes aleatorios. Normalmente los problemas vienen cuando hay carga pesada en el sistema (kernel, KDE o compilación del propio kvirc, por ejemplo). Puedes comprobar si la memoria RAM está corrupta probando diferentes módulos RAM (o quitándolos de uno en uno para descubrir el módulo roto). También puedes intentar solucionarlo con un programa llamado memtest y un parche en el kernel que fuerce al sistema a ignorar la parte del módulo que está estropeada.<br />
	Estas herramientas pueden ser encontradas buscando en Internet con tu buscador favorito";
$template['faq']['text16b1c']="
	Un problema más importante de hardware: si actualizar el compilador y cambiar los módulos de memoria no te ayuda, *podría* ser un problema más importante: errores de bus, un controlador IDE (o SCSI) estropeado o incluso una CPU con problemas... bien";
$template['faq']['text17a']="KVIrc falla cuando se muestra una URL por pantalla";
$template['faq']['text17b']="
	Esto podría ser causado por el módulo URL: las causas están siendo investigadas.<br />Prueba";
$template['faq']['text18a']="KVIrc falla cuando se abre el campo de entrada de texto multilínea (o en el editor de scripts)";
$template['faq']['text18b']="
	Si has instalado una nueva versión de KVIrc sobre una instalación anterior o si has cambiado las librerías Qt a las que KVIrc está vinculado, podría estar causado por un error en al configuración.<br />
	Prueba a eliminar \$HOME/.kvircssexeditorrc y reinicia KVIrc";
/* faq.php end */

/* features.php start */
$template['features']['title']="Características";
$template['features']['text1']="
	Estooo... ¿que quieres que te diga qué tiene KVIrc?<br />
	Bien, ¿por qué no? :D<br />
	He aquí algunas cosas que me vienen a la memoria...";
$template['features']['tree1']="Interfaz de usuario";
$template['features']['tree1a']="Configuración totalmente basada en la GUI";
$template['features']['tree1b']="Ventanas flotantes MDI";
$template['features']['tree1c']="Navegador de ayuda integrado";
$template['features']['tree1d']="Soporte de temas (totalmente configurable por GUI o scripting)";
$template['features']['tree1e']="Soporte de pseudo-transparencia (en el escritorio KDE)";
$template['features']['tree1f']="Barras de herramientas con arrastrar y colocar";
$template['features']['tree1g']="Pop-Up notificador de actividad";
$template['features']['tree1h']="Barra de estado con soporte para applets";
$template['features']['tree1i']="Marca de texto no leído";
$template['features']['tree1j']="Traducción a 14 idiomas";
$template['features']['tree2']="Red";
$template['features']['tree2a']="Soporte de proxys (SOCKSv4, SOCKSv5, HTTP)";
$template['features']['tree2b']="Soporte completo de IPv6 (también para transferencias DCC)";
$template['features']['tree2c']="Soporte SSL (también en IPv6)";
$template['features']['tree2d']="Soporte de Micryption";
$template['features']['tree3']="Núcleo";
$template['features']['tree3a']="
	Arquitectura modular: los módulos menos usados son cargados únicamente cuando son necesarios";
$template['features']['tree3b']="Extensibilidad: una API gigante para escribir módulos";
$template['features']['tree3c']="Soporte de UNICODE";
$template['features']['tree4']="IRC";
$template['features']['tree4a']="Conexión multiservidor";
$template['features']['tree4b']="Listas de notificación NOTIFY (sí, soporta WATCH)";
$template['features']['tree4c']="Listas de ignore";
$template['features']['tree4d']="Base de datos de usuarios registrados";
$template['features']['tree4e']="Lagómetro";
$template['features']['tree4f']="Logging (registro) configurable";
$template['features']['tree4g']="Chat DCC estándar y envío de archivos (con soporte para reanudar transferencias interrumpidas)";
$template['features']['tree4h']="Tipos de DCC extendidos: VOICE, RSEND, GET, RECV";
$template['features']['tree4i']="Chat DCC con SSL";
$template['features']['tree4j']="Límite de ancho de banda DCC (es posible configurarlo sobre la marcha)";
$template['features']['tree5']="Scripting";
$template['features']['tree5a']="Intérprete de scripting integrado";
$template['features']['tree5a1']="scalars, arrays y hashes...";
$template['features']['tree5a2']="aliases";
$template['features']['tree5a3']="popups";
$template['features']['tree5a4']="eventos";
$template['features']['tree5a5']="barras de herramientas configurables por script";
$template['features']['tree5a6']="soporte de perl";
$template['features']['tree5a7']="Posibilidad de traducir scripts (usando la función tr())";
$template['features']['tree5b']="
	Soporte de objetos en el lenguaje de scripting: sí, ahora puedes hacer <acronym title=\"Programación orientada a objetos\">OOP</acronym>";
$template['features']['text2']="Mmm... espero que sea suficiente como para despertar tu curiosidad :D";
/* features.php end */

/* help.php start */
$template['help']['title']="Buscando ayuda";
$template['help']['text1']="
	El primer lugar en el que debes mirar cuando tengas un problema es en la lista de correo de KVIrc.";
$template['help']['text2']="
	Si algo va mal, o tienes una pregunta, sugerencia, o simplemente estás interesado en el desarrollo de KVIrc, puedes unirte a la";
$template['help']['text3']="
	Los desarrolladores siguen la lista de correo y responderán a las preguntas tan pronto como sea posible.";
$template['help']['text4a']="El canal oficial de soporte de KVIrc está en la ";
$template['help']['text4b']="red Freenode";
$template['help']['text4c']="y se llama obviamente";
$template['help']['text4d']="El canal oficial en italiano es";
$template['help']['text4e']="en la";
$template['help']['text4f']="red Azzurra";
$template['help']['text4g']="También puedes encontrar algo de movimiento en la";
$template['help']['text4h']="red IRCNet";
$template['help']['text4i']="en el canal";
$template['help']['text4j']=":)";
$template['help']['text5']="Los bugs pueden ser informados y vistos usando la";
$template['help']['text6']="
	Para sugerencias, noticias, correcciones y lo que sea relacionado con el sitio web, por favor suéltale un email a";
$template['help']['text7']="
	Para cualquier tipo de ayuda en relación a gráficos, traducciones y documentación, por favor contacta con";
/* help.php end */

/* honor.php start */
$template['honor']['title']="Honor y gloria";
$template['honor']['text1']="Esta es una lista de gente que ha contribuido de cualquier manera con el proyecto KVIrc.";
$template['honor']['text2']="Esta lista queda lejos de estar completa. Un montón de gente más o menos \"anónima\" ha gastado su tiempo, ojos, ancho de banda y recursos cerebrales en este proyecto. Si eres uno de ellos, no dudes en contactar con";
$template['honor']['text3']="Si tu avatar no aparece, o es incorrecto, envíame la foto correcta. Si has encontrado algo incorrecto o enlaces rotos, suéltale un email a";
$template['honor']['made1']="El \"creador\" de KVIrc. Trabajo mental, trabajo manual, consumición de ojos y muuucho café";
$template['honor']['quote1']="I'll check... lemme check...&quot;<br />&quot;I'll fix it tomorrow...&quot;<br />&quot;KVIrc: the client that can't make coffee";
$template['honor']['made2']="Webmaster, cazador de bugs, mantenedor de las snapshots, chico del soporte :o) y el tío que te lleva KVIrc a través de IPv6";
$template['honor']['made3']="Documentación, búsqueda de bugs, relaciones públicas";
$template['honor']['quote3']="No idea of what you're talking about... or why you need it :)";
$template['honor']['made4']="Caza de bugs, desarrollo de plugins, solución de bugs, portabilidad a windows y snapshots";
$template['honor']['quote4']="&lt;YaP&gt; why you haven't implemented a class like DoEverythingByYourself ? :)&quot;<br />&quot;&lt;Pragma&gt; a wonderful recursive function :)&quot;<br />&quot;&lt;YaP&gt; Damn...I knew it eheheheheh";
$template['honor']['made5']="Test de scripts, cazador de bugs, ideador y creador del primer www.kvirc.net";
$template['honor']['quote5']="whassup?";
$template['honor']['made6']="El desarrollador oficial del manual y plugins C++";
$template['honor']['quote6']="prepare yourselves..&quot; &quot; #include &lt;iostream.h&gt;&quot;<br />&quot;class testing {...&quot;<br />&quot;&lt;oehansen&gt; I must admit, I'm getting confused :-)&quot;<br />&quot;&lt;Pragma&gt; Me too , at this point :)";
$template['honor']['made7']="Paquetes Slackware";
$template['honor']['made8']="Traducción al italiano, caza de bugs, soporte moral :))))";
$template['honor']['quote8']="KVIrc? Ah! The dinosaur...";
$template['honor']['made9']="Traducción al alemán, caza de bugs, nuevas ideas. Algo de scripting, mejora del código + nuevo código ;)";
$template['honor']['quote9']="Pragma: Short question...";
$template['honor']['made10']="Romperlo todo, y corregir la gramática cuando no quedaba nada que romper. También, escuchar las peticiones de Aeri y conseguir hacer la mitad de ellas...";
$template['honor']['quote10']="Hey, it's not my responsibility to find a funny quote of myself ^_~";
$template['honor']['made11']="Traducción al italiano, mejoras del código y muchas sugerencias útiles";
$template['honor']['made12']="Proveedor oficial de cerveza polaca y desarrollador de plugins";
$template['honor']['quote12']="echo &quot;STOP IT&quot; &gt; /dev/neighbour&quot; &quot;cd ./neighbour &amp;&amp; make clean&quot;<br />&quot;Pragma...erm...bugs ? WHICH bugs ? ;))";
$template['honor']['made13']="Creador de la web antigua, algunas sugerencias, bebedor de té (Gracias Szymon, tu té es excelente ;) ) y... ¿por qué estoy aquí?";
$template['honor']['quote13']="Hey mum, look!! My name is in the KVIrc Honor &amp; Glory section!!";
$template['honor']['made14']="Autora de las noticias, tracker de bugs y soporte constante en #kvirc";
$template['honor']['made15']="Traducción al francés, betatesting y caza de grandes bugs";
$template['honor']['made16']="Desarrollador de clases de objetos, mejoras del código, betatesting, solución de errores, scripting exótico, documentación...";
$template['honor']['quote16']="&lt;Grifisx&gt;...damned brackets ! ...there are always too many...<br />&lt;Noldor&gt;....or too few...";
$template['honor']['made17']="Desarrollador de clases de objetos, mejoras del código, betatesting, solución de errores, scripting exótico, documentación...";
$template['honor']['quote17']="&lt;Grifisx&gt; The difference between me and you is just that, You see things and you say &quot;Why?&quot; But I dream things that never were and I say...&quot;Why not?";
$template['honor']['made18']="Internationalización, solución de bugs, caza de bugs, nuevas ideas y más...";
$template['honor']['made19']="Creador del nuevo sitio, mantenedor del sitio, traducción al italiano, scripting, caza de bugs, paquetes Slackware, nuevas ideas...";
$template['honor']['quote19']="&lt;HelLViS69&gt; Blessed gdb, in the name of ritchie, kerningham and rms";
$template['honor']['made20']="Traducción al italiano, gráficos, verdadera creyente";
$template['honor']['quote20']="Time makes no sense";
$template['honor']['made21']="FAQ y traducciones al italiano";
$template['honor']['made22']="Paquetes de Debian, soporte moral";
$template['honor']['quote22']="One must make one's self superior to humanity, in power, in loftiness of soul, in contempt. - Friedrich Nietzsche";
$template['honor']['made23']="Caza y arreglo de bugs, arreglo de documentos, scripting (Servidor de archivos NGL)";
$template['honor']['quote23']="I don't know what I want, but I know how to get it.";
$template['honor']['made24']="Sistema de ausencia, nicks coloreados, programación en general, traducción al español";
$template['honor']['quote24']="Pragma: think of KVIrc as a tool for scripters... we have to left them something to do :)";
$template['honor']['made25']="La 'luz' detrás de las nubes GNU. Soporte genérico (???!) y oficial del proyecto :)";
$template['honor']['quote25']="Pragma: seems that kvirc with all its plugins is becoming a desktop environment&quot; &quot;echo espresso &gt; /dev/coffee&quot; &quot;Pragma: you reached the user limit. WTF!";
$template['honor']['made26']="Ideador de www.kvirc.org";
$template['honor']['quote26']="This free project is better that shareware&quot; &quot;mIrc for windows even in alpha stage";
$template['honor']['made27']="Se asegura de que nadie es perezoso, cazabugs, un MONTÓN de sugerencias y creador del IRC RealityX.";
$template['honor']['quote27']="Skydiving is almost as exciting as KVIrc scripting!&quot;<br />&quot;Pragma: could you add these functions: \$rubmyback() and \$makecoffe()?";
$template['honor']['made28']="Depuración y mejoras.";
$template['honor']['quote28']="I'm just *really* good at doing things when I have no idea of what I'm actually doing";
$template['honor']['made29']="Mejoras del código de KVIrc y de mi conocimiento de Linux. Me gusta imaginarle como una 'guía espiritual'... :D";
$template['honor']['made30']="¡El hombre de KDE! Se asegura de que KVIrc tenga una razón para tener una K al principio";
$template['honor']['quote30']="Could I please make KVIrc a pure KDE application today?? Pleeease...";
$template['honor']['made31']="Algunas \"pequeñas\" piezas de código.";
$template['honor']['quote32']="&lt;Error403&gt;Number1: I imagined you looking crazy :)&quot;<br />&quot;&lt;NumeroUno&gt; I was drunk";
$template['honor']['made33']="La \"mano abierta\" para el proyecto KVIrc. Proveedor del servicio SVN, mirrors www y ftp, ancho de banda, grandes ideas y diversión mientras escribimos código.";
$template['honor']['made34']="Caza bugs, fuente de ideas :)";
$template['honor']['quote34']="buy a pigeon traveller and pass dcc transfers to him";
$template['honor']['made35']="Varias mejoras.";
$template['honor']['quote35']="I can program anything I set my mind to!";
$template['honor']['made36']="Beta testing, mejoras en la estructura del lenguaje.";
$template['honor']['quote36']="...it's enough for 100 IPs per meter on earth, so every lightswitch can have its own IP...then you telnet to your lightswitch and turn it off!";
$template['honor']['made37']="Portabilidad a MacOS X";
$template['honor']['made38']="Traducción al portugués, parches del script por defecto y paquetes de Mandriva.";
$template['honor']['made39']="Traducción al ruso";
$template['honor']['made40']="Arreglo de bugs, escritura de código, portabilidad a mingw32, soporte al usuario";
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
$template['install']['text27a']="
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
$template['install']['tree16']="Disable KDE4 support.";
$template['install']['tree17']="
	Disables the Secure Socket Layer support. The SSL support is automatically enabled if OpenSSL is detected by CMake.";
$template['install']['tree18']="
	Disables the cryptographic engines and the whole cryptography/text transformation support. Produces a slightly smaller executable";
$template['install']['tree19']="
	The IPv6 support is compiled by default on the platforms that support it: this option disables it.<br />
	Even if you have a plain IPv4-only connection, you might want to keep the IPv6 support: you will be able to lookup IPv6 hostnames.";
$template['install']['tree20']="
	This option disables pseudo-transparency support.<br />
	The pseudo transparency support makes the KVIrc windows look like semi-transparent (this is NOT real transparency: this is just a nice-looking hack).<br />
	If KDE support is enabled, KVIrc will have an option that makes all windows use a faded KDE desktop background image as background. Without KDE support you will be able to choose a fake background image and use it as background. (You can still
        choose your desktop wallpaper: this will (more-or-less) work in all the window managers).<br />
	It is cool-looking but usually eats some memory when enabled.<br />
	It also eats some executable size.<br />
	So this option allows to disable the pseudo-transparency.";
$template['install']['tree21']="
	Forcibly disable perl support.<br />
        You will not be able to use perl scripts inside KVIrc.";
$template['install']['tree22']="
	Forcibly disable python support.<br />
        You will not be able to use python scripts inside KVIrc.";
$template['install']['tree23']="
	Disables support for inter-process communication.<br />
	You will be not able to send remote commands to running KVIrc sessions: this basically means that every time you run the KVIrc executable, a new session will be started.<br />
	If you don't use this switch, a new session will be started only if no session is running on the same display or \"new session\" has been forced by a commandline switch.<br />
	If a session is already running, the commandline will be passed to that session via IPC (X-event-based communication).<br />
	This option saves some KB of the KVIrc executable, so if you're really short in memory, you might use it, otherwise, IPC is a nice feature.";
$template['install']['tree24']="Disables the use of GetText to generate translation files.";
$template['install']['tree25']="Disables docs generation through Doxygen.";
$template['install']['tree26']="
	This will disable the use of the system memmove() memcpy() and memset() functions and enable the bundled implementations. Use it if you have undefined references to these functions while compiling.";
$template['install']['tree27']="
	Explicitly disable the usage of the GSM library. This will disable the DCC VOICE GSM codec but might help when the compilation stops complaining of something related to GSM :)";
$template['install']['tree28']="
	KVIrc contains some ix86 assembly routines that *could* performs some things faster (this is not always true, depends on the compiler).<br />
	You might want to try it if your KVIrc seems to be really slow...";
$template['install']['tree29']="
	Explicitly disable the DCC VOICE sound support. This might help if you have problems in compilation of src/modules/dcc/voice.cpp.<br />
	It will disable the sound support (and thus make DCC VOICE not usable).";
$template['install']['tree30']="
	Debug stuff... enables memory allocation profiling (don't use it :)";
$template['install']['tree31']="
	Enables malloc() memory checks. This will print a nice message if your system goes out of memory...<br />
	It can't save you from buying new RAM, but at least you will know that your system went out of memory and it is not a proper kvirc fault.<br />
	Actually you probably have no reason in using it.";
$template['install']['tree32']="
	Manually set a revision number if subversion is not found on your system.<br />
	This is useful mostly on windows.";
$template['install']['tree33']="Add some pizza for dinner :)";
$template['install']['tree34']="Add some beers to chat :)";
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
	<p>Alternatively, you can try the experimental CPack support included in CMakeLists.txt to build a package: in this case, please refer to the CPack documentation.";
$template['install']['text41']="That's all folks.";
/* install.php end */

/* license.php start */
$template['license']['title']="Licencia de KVIrc";
$template['license']['text']="KVIrc es software libre: tiene una versión extendida de la General Public License.";
$template['license']['text2']="
	Esta es la licencia del cliente de IRC KVIrc.<br />
	Está basada en la GNU General Public License Versión 2.<br />
	Contiene todos los términos y condiciones de la GPL y añade una excepción especial (mira Terms and Conditions, cláusula 13) a las limitaciones de distribución.<br /><br />
	Ten en cuenta que la GPL de abajo tiene copyright por parte de la Free Software Foundation, pero el código al que se refiere tiene copyright de Szymon Stefanek y otros miembros del equipo de desarrollo KVIrc.<br /><br />
	El código fuente para todas las versiones de KVIrc está disponible en <a href=\"?id=releases&amp;platform=source&amp;lang=$lang\">esta url</a>.<br /><br />
	¡Diviértete!";
/* license.php end */

/* mailinglist.php start */
$template['ml']['title']="Lista de correo pública de KVIrc";
$template['ml']['text1a']="
	Si algo va mal, o tienes una pregunta, sugerencia, o simplemente estás interesado en el desarrollo de KVIrc, puedes unirte a la lista de correo pública.";
$template['ml']['text1b']="
	Los desarrolladores siguen la lista de correo y responderán todas las preguntas tan rápido como sea posible.";
$template['ml']['text2']="Interfaz web";
$template['ml']['text3']="
	La lista tiene una interfaz web disponible <a href=\"http://lists.omnikron.net/mailman/listinfo/kvirc/\">aquí</a>.<br />
	La interfaz te permite suscribirte, cancelar tu suscripción y administrar tu cuenta.";
$template['ml']['text4']="Para suscribirse por mail";
$template['ml']['text5']="
	Envía un mail vacío (con el cuerpo vacío, y el asunto vacío) a <a href=\"mailto:kvirc-subscribe@lists.omnikron.net\">esta dirección</a> desde la dirección en la que quieres suscribirte.<br />
	En algunos minutos recibirás un mail de confirmación que contendrá las instrucciones para completar tu suscripción.";
$template['ml']['text6']="Para desuscribirse mediante mail";
$template['ml']['text7']="
	Envía un mail vacío a <a href=\"mailto:kvirc-unsubscribe@lists.omnikron.net\">esta dirección</a> desde la dirección que quieras desuscribir.<br />
	En algunos minutos recibirás un mail que contiene las instrucciones para completar tu desuscripción.";
$template['ml']['text8']="Archivos de la lista de correo";
$template['ml']['text9']="
	La lista completa de mensajes está disponible <a href=\"http://lists.omnikron.net/pipermail/kvirc/\">aquí</a>.";
/* mailinglist.php end */

/* mirroring.php start */
$template['mirror']['title']="Haciendo mirrors del proyecto KVIrc";
$template['mirror']['text1']="
	Esta página contiene instrucciones paso a paso para crear un mirror ftp";
$template['mirror']['text2']="
	Contribuir al proyecto KVIrc haciendo mirrors de sus archivos es realmente fácil.<br />";
$template['mirror']['text3']="¡Necesitamos especialmente mirrors ftp no-europeos";
$template['mirror']['title2']="Configurando un mirror de ftp-master.admin.kvirc.de";
$template['mirror']['tree']="Requisitos";
$template['mirror']['tree1']="Un servidor ftp";
$template['mirror']['tree2']="Un demonio cron (o equivalente) para poder mantener el mirror sincronizado";
$template['mirror']['text4']="Procedimiento de instalación";
$template['mirror']['text5']="
	Configurar un mirror ftp es realmente fácil: está hecho usando la prestación de mirror del programa";
$template['mirror']['text6']="
	La línea de comandos para recuperar todo el archivo ftp es la siguiente:";
$template['mirror']['text7']="raiz_de_tu_servidor_ftp";
$template['mirror']['text8']="
	Así que todo lo que tienes que hacer es configurar tu servidor ftp para aceptar conexiones anónimas y configurar cron para sincronizar el mirror cada X horas.";
$template['mirror']['text9']="
	Ahora todo lo que tienes que hacer es configurar las actualizaciones automáticas.<br />
	Esto suele ser tarea del demonio cron y supone añadir unas cuantas líneas al crontab.<br />
	Un ejemplo de archivo crontab podría ser:";
$template['mirror']['text10a']="
	Este archivo crontab le dice al demonio cron que ejecute el comando";
$template['mirror']['text10b']="a las 6.30 de la mañana cada día.";
$template['mirror']['text11a']="En este caso";
$template['mirror']['text11b']="sería el siguiente:";
$template['mirror']['text12']="tudominio";
$template['mirror']['text13']="
	En el momento de escribir esto el archivo ftp completo es de alrededor de 1.5 GB. Si no tienes espacio suficiente para hacer un mirror completo puedes intentar hacer un mirror parcial recuperando solo una parte de los directorios de ftp.kvirc.net.";
$template['mirror']['text14']="
	Una vez que hayas configurado tu mirror adecuadamente, suéltale un mail a <b>pragma at kvirc dot net</b> o a la <a href=\"?id=mailinglist&amp;lang=$lang\">lista de correo</a> de manera que pongamos un enlace desde el sitio principal.";
/* mirroring.php end */

/* news.php start */
$template['news']['title']="Archivos de noticias";
$template['news']['latest']="Últimas noticias";
$template['news']['error']="Error leyendo la noticia";
$template['news']['nonews']="Esa noticia no existe.";
$template['news']['news']="Noticias";
$template['news']['readmore']="Leer más";
/* news.php end */

/* releases.php start */
$template['releases']['title']="Descargar versiones oficiales";
$template['releases']['text1']="
	Desde aquí puedes descargar los paquetes de <b>versión oficial</b> de KVIrc.<br />
	Los paquetes oficiales salen menos con mucha menos frecuencia pero son los más estables.<br />
	Por favor, selecciona el tipo de paquete que quieres descargar";
$template['releases']['text2']="
	Debajo tienes una lista de versiones disponibles para la plataforma que has seleccionado.<br />Por favor selecciona la versión del paquete que quieres descargar";
$template['releases']['text3']="
	Hay más de un grupo de paquetes disponible para la plataforma y versión que has elegido.<br /><br />Por favor, selecciona el grupo que quieres descargar";
$template['releases']['latest']="La última versión";
$template['releases']['older']="Versiones más antiguas";
$template['releases']['available']="Lugares de descarga disponibles";
/* releases.php end */

/* screen.php start */
$template['screen']['title']="Capturas de pantalla";
$template['screen']['text']="¿Tienes una bonita screenshot? Envíala a";
$template['screen']['prev']="anterior";
$template['screen']['next']="siguiente";
$template['screen']['screen1']="Diálogo de opciones generales";
$template['screen']['screen2']="Centro de Scripting";
$template['screen']['screen3']="Plugin de URLs y un script de objeto de correo";
$template['screen']['screen4']="Más diálogos";
$template['screen']['screen5']="Popups de menús del canal";
$template['screen']['screen6']="Bans del canal y más diálogos";
$template['screen']['screen7']="Navegador de ayuda y directorios";
$template['screen']['screen8']="Navegador de directorios";
$template['screen']['screen9']="KVIrc CVS funcionando felizmente en Solaris";
$template['screen']['screen10']="Lista de ventanas, envíos DCC y Popup de la lista de usuarios";
$template['screen']['screen11']="Gráfico E/S, emulador de terminal y avatares";
$template['screen']['screen12']="3 conexiones a servidores activas";
$template['screen']['screen13']="Avatares, gráfico E/S y enlaces al servidor";
$template['screen']['screen14']="¡Sí! ¡Cree lo que ves! KVIrc sobre aberraciones :)";
$template['screen']['screen15']="Ventana de ayuda y el widget de estado";
$template['screen']['screen16']="El bonito tema por defecto y la ventana de transferencias";
$template['screen']['screen17']="Tema minimalista y una popup contextual";
$template['screen']['screen18']="
	Cuatro ventanas especiales. Transferencia de archivos, visor del Registro, Terminal y Archivos compartidos: la manera de simplificar tu IRC diario.";
$template['screen']['screen19']="¿Eres un scripter? KVIrc tiene varias herramientas para ti.";
$template['screen']['screen20']="Helix en tres servidores y un montón de canales";
$template['screen']['screen21']="Helix conectándose a través de psyBNC y un bonito acceso directo de KVIrc en el escritorio :D";
$template['screen']['screen22']="
	Cuatro servidores. Fíjate en que la ventana en forma de árbol de la parte izquierda muestra los canales más activos.";
$template['screen']['screen23']="Los exploits DCC no funcionan con KVIrc :)";
$template['screen']['screen24']="Una captura de bongwater: lleva funcionando desde hace 10 días :)";
$template['screen']['screen25']="
	Una captura de <a href=\"http://kvirc.virg0.org\">etherea`</a>: Time makes no sense";
$template['screen']['screen26']="Una captura de Xemanth^: un KVIrc 'hackish' en windows";
$template['screen']['screen27']="
	Una captura de <a href=\"http://kvirc.virg0.org\">etherea`</a>: El newsticker de Pragma en acción :)";
$template['screen']['screen28']="
	Una captura de <a href=\"http://hellvis69.altervista.org\">HelLViS69</a>: escáner de clones funcionando :)";
$template['screen']['screen29']="
	El script Twins y su <a href=\"?id=addons&amp;lang=$lang&amp;version=3.2.3\">reproductor</a> en 'Anomalies'. También el nuevo entorno de scripting basado en espacios de nombres en la ventana del editor de aliases.";
$template['screen']['screen30']="
	El tema SilverIRC, por defecto tras KVIrc 3.2.6 después de una instalación limpia. Captura hecha por thexception";
$template['screen']['screen31']="
	Tema SilverIRC. El administrador de temas. Captura hecha por thexception";
$template['screen']['screen32']="Tema SilverIRC. El editor de Aliases. Captura hecha por thexception";
$template['screen']['screen33']="Tema SilverIRC. El editor de Eventos. Captura hecha por thexception";
$template['screen']['screen34']="Tema SilverIRC. El editor de Popups. Captura hecha por thexception";
/* screen.php end */

/* scripts.php start */
$template['scripts']['title']="Scripts";
$template['scripts']['text1']="En la distribución y el SVN están incluidos algunos scripts de ejemplo";
$template['scripts']['text2a']="Usa";
$template['scripts']['text2b']="para instalar el script. El script por defecto debería ser instalado en";
$template['scripts']['script1']="
	Script en italiano con autojoin, control de mayúsculas, autovoz... completamente configurable de manera gráfica.";
$template['scripts']['script2']="
	SaNVirC es un script para KVIrc que incluye funciones como identificación del nick, autojoin, defensa, ataque, mantenimiento de los bots, un sistema de away, etc.<br /> Fue escrito para los bots del IRC-Hispano pero es muy fácil de adaptar a otras redes.";
$template['scripts']['script3']="
	El Script Savage es un script para gamers con soporte de XQF, informaciones del sistema, qauth...";
$template['scripts']['script4']="
	Esta es la primera versión pública del script con algunas mejoras para la lista de notificaciones. También añade AutoOp, AutoVoz, arregla los canales sin OPs, etc.";
/* scripts.php end */

/* snapshots.php start */
$template['snapshots']['title']="Snapshots en desarrollo";
$template['snapshots']['text1']="
	Las snapshots en desarrollo son paquetes no-oficiales extraídos de la SVN en un estado no estable. Cada snapshot refleja el estado SVN de una revisión particular, así que probablemente quieras encontrar una reciente. Los paquetes han sido probados en al menos unos pocos sistemas y tienen una alta posibilidad de compilar en el tuyo. Hay también algunos binarios disponibles.";
$template['snapshots']['text2']="
	La fuente de los snapshots es proveída por el equipo de desarrollo de KVIrc.<br />
	¡Honor y gloria! :)";
$template['snapshots']['text3']="
	Para descargar la última snapshot tienes que entrar en
	<a href=\"ftp://ftp.kvirc.de/pub/kvirc/snapshots/\">el ftp de KVIrc</a> o en el subdirectorio \"snapshots\" de uno de los mirrors ftp.";
/* snapshots.php end */

/* splash.php start */
$template['splash']['title']="Splash screens";
$template['splash']['text']="Esta es una colección de splash screens que KVIrc usó en el pasado.";
$template['splash']['date']="Fecha";
$template['splash']['in']="Splash presente en";
/* splash.php end */

/* status.php start */
$template['status']['title']="Estado del proyecto";
$template['status']['text']="
	<p>Después de 9 años de desarrollo KVIrc es un cliente de IRC maduro y lleno de prestaciones, una excelente compañía para tus sesiones diarias de IRC.</p>
	<p>La última versión estable es <a href=\"?id=news&story=2008.10.14.16.59.1.story&dir=latest&lang==$lang\">3.4.2 \"Shiny\"</a>.
	Fue publicada el 14 de Octubre de 2008.
	Puede ser obtenida en código desde la página de <a href=\"?id=download&amp;lang=$lang\">descargas</a>.</p>
	<p>Si estás buscando versiones oficiales, échale un vistazo a <a href=\"?id=releases&amp;lang=$lang\">esta sección</a>, estas versiones son liberadas menos frecuentemente pero son las más estables. Elige tu versión entre Linux, Windows, MacOS X o el paquete de código fuente.</p>
	<p>Las snapshots están <a href=\"?id=snapshots&amp;lang=$lang\">aquí</a> y el SVN está <a href=\"?id=SVN&amp;lang=$lang\">aquí</a>.</p>
	<p>También asegúrate de mirar las <a href=\"?id=install&amp;lang=$lang\">notas de instalación</a>, <a href=\"?id=tutorials&amp;lang=$lang\">tutoriales</a>, <a href=\"?id=translation&amp;lang=$lang\">traducciones</a> y <a href=\"?id=themes&amp;lang=$lang\">temas</a> para tener una versión más personalizada de KVIrc =)</p>";
/* status.php end */

/* svn.php start */
$template['svn']['title']="Usando SVN";
$template['svn']['text1']="
	Desde el servidor SVN puedes descargar la última versión en desarrollo de KVIrc.<br />
	Una vez que te hayas asegurado de que subversion está instalado en tu sistema solo tienes que introducir la siguiente línea:";
$template['svn']['text2']="
	Estarás descargando el código fuente del núcleo de KVIrc.<br />
	Si quieres sacar también el código fuente de los módulos tienes que introducir la siguiente línea:";
$template['svn']['text3']="
	Para compilar el ejecutable y los módulos del núcleo simplemente introduce en el directorio de las fuentes:";
$template['svn']['text4']="
	y entonces sigue las <a href=\"?id=install&amp;lang=$lang\">instrucciones de instalación</a> comunes.<br />
	Las siguientes instrucciones de instalación para la versión SVN de KVIrc pueden también ser encontradas en el archivo INSTALL.<br />
	Intentamos mantener el SVN tan \"limpio\" como sea posible pero *podría* pasar que las fuentes que te descargues no compilen o no se ejecuten correctamente.<br />
	También puedes navegar por el SVN mediante <a href=\"https://svn.kvirc.de/kvirc/browser/\">https://svn.kvirc.de/</a>";
/* svn.php end */

/* themes.php start */
$template['themes']['title']="Temas";
$template['themes']['text1']="Aquí puedes descargar unos bonitos temas";
$template['themes']['text2a']="¿Cómo instalo un tema";
$template['themes']['text2b1']="Descarga el tema";
$template['themes']['text2b2']="Abre el Administrador de Temas de KVIrc";
$template['themes']['text2b3']="Haz clic en el botón \"Instalar tema desde el disco\"";
$template['themes']['text2b4']="Haz doble clic en el nuevo tema";
$template['themes']['text2b5']="Disfruta";
$template['themes']['text3a']="¿Cómo puedo crear un tema";
$template['themes']['text3b1']="Hay un pequeño HOWTO, que puedes encontrar";
$template['themes']['text3b2']="aquí";
$template['themes']['text3b3']="y una versión en italiano";
$template['themes']['text3b4']="El HOWTO en inglés también está incluido en el paquete de KVIrc";
$template['themes']['text4a']="He hecho un tema. ¿Cómo puedo compartirlo";
$template['themes']['text4b']="Puedes enviarlo a";
$template['themes']['text4c']="incluyendo el nombre del tema, descripción, versión, tu nick, página web y email, permitiéndonos o no mostrarlo en la web";
$template['themes']['text5']="Todos los temas tienen una resolución de 1024x768.<br />Si quieres compartir una versión de 1280x1024, simplemente envíala junto a una versión 1024x768.";
$template['themes']['screenshot']="captura de pantalla";
$template['themes']['theme1']="Bonita a la vista, y basada en el set de iconos Marble.";
$template['themes']['theme2']="Un tema claro con iconos Crystal. Algunos iconos han sido tomados del set Marble.";
$template['themes']['theme3']="Un tema con fondo verde.";
$template['themes']['theme4']="Un tema oscuro.";
$template['themes']['theme5']="Un tema blanco y redondeado.";
$template['themes']['theme6']="Simplemente un ejemplo rosa...";
$template['themes']['theme7']="Un tema transparente hecho para ser usado con el fondo KDE. Configurado para buena visibilidad o contraste.";
$template['themes']['theme8']="Un tema relajado inspirado por el sitio http://www.PayneReactor.com";
$template['themes']['theme9']="Un bonito tema negro, basado en otro tema cristal :)";
$template['themes']['theme10']="Otro tema oscura con el logo de Slackware y un baghira negro";
$template['themes']['theme11']="Un tema oscuro basado en XCrystall-black";
$template['themes']['theme12']="Amor puro. Blanco puro. Un tema limpio y puro";
$template['themes']['theme13']="Un tema de cristal oscuro";
$template['themes']['theme14']="Simplemente otro tema oscuro";
$template['themes']['theme15']="Un tema de navidad para KVIrc";
$template['themes']['theme16']="La perversión es otra manera de vivir; un tema más oscuro con menos gamma";
$template['themes']['theme17']="erotica... mmm...";
$template['themes']['theme18']="Anger es una variación de erotica.";
$template['themes']['theme19']="Dark Blue es una variación de marble. Disfrútala";
$template['themes']['theme20']="Después de varios fondos \"oscuros\", un azul suave para una lectura agradable";
$template['themes']['theme21']="Un tema calmado y nevado de Navidad";
$template['themes']['theme22']="Un tema calmado para relajarte en el IRC";
$template['themes']['theme23']="Un tema verde con el logo de KDE";
$template['themes']['theme24']="Un tema muy minimalista";
$template['themes']['theme25']="Un tema con un fondo amarillo, basado en Pure de etherea`";
$template['themes']['theme26']="Un tema soleado de verano";
$template['themes']['theme27']="Un tema oscuro portado de un script de mIRC";
$template['themes']['theme28']="Un tema que convierte tu KVIrc en un mIRC";
$template['themes']['theme29']="Un tema ultraminimalista";
$template['themes']['theme30']="El tema que iluminará vuestras mentes";
$template['themes']['theme31']="Un tema inspirado en las novelas de R.A. Salvatore sobre el Drow (Dark Elves) y especialmente Drizzt Do'Urden";
$template['themes']['theme32']="...¡porque todo el mundo es un bonito fractal!";
$template['themes']['theme33']="Un tema más oscuro al estilo techno y con iconos simples y descriptivos";
$template['themes']['theme34']="Un tema hecho por el portal CoreZeam.org";
$template['themes']['theme35']="A black-based theme easy to see and distinguish";
$template['themes']['theme36']="A pink theme inspired on Hello Kitty";
/* themes.php end */

/* tools.php start */
$template['tools']['title']="Herramientas";
$template['tools']['text1']="Aquí puedes encontrar algunas herramientas relacionadas con KVIrc";
$template['tools']['tool1']="Resaltado de la sintaxis KVS para Notepad++";
$template['tools']['tool2']="Un simple tcl para eggdrops para hacerlos responder a algunas peticiones CTCP";
$template['tools']['tool3']="Un tcl de sindicación RSS para eggdrops, para hacerlos responder a algunos eventos como cambios en el SVN y feeds RSS de Tracking de bugs";
$template['tools']['tool4']="Un script simple escrito en TCL para comprobar archivos de traducción GetText e informar de posibles errores";
$template['tools']['tool5']="Un script PHP-CLI simple que convierte logs formateados de KVIrc en texto plano quitando los códigos de colores y caracteres de control";
/* tools.php end */

/* translation.php start */
$template['translation']['title']="Traducciones";
$template['translation']['step']="Paso";
$template['translation']['text1']="
	En esta página encontrarás información sobre el estado de las traducciones de KVIrc. Para ver si tu idioma está soportado, mira en la lista de abajo.";
$template['translation']['text2']="
	Mucha gente está trabajando duro para soportar tantos idiomas como sea posible. Para unirte a ellos todo lo que necesitas es conocer tu propio idioma: <b>no es necesario saber escribir código</b>.";
$template['translation']['text3']="
	Todos los traductores <b>DEBEN USAR UTF-8</b> como estándar. Archivos de traducción con otros estándares serán rechazados.";
$template['translation']['text4']="
	Si estás interesado en traducir KVIrc en un nuevo idioma puedes encontrar aquí un bonito How-To.<br />
	Algunos idiomas son actualizados (casi) diariamente, otros necesitan un nuevo mantenedor. Si quieres ayudar a mejor el soporte actual de tu idioma, por favor contacta con su <b>Último traductor</b>, listado aquí:";
$template['translation']['text5']="unmaintained";
$template['translation']['text6a']="
	Talking about \"unmaintained\", we encourage you to help us translating.<br />
	To do so, subscribe to the";
$template['translation']['text6b']="
	to keep in touch with the developers and to talk about your interest in translating KVIrc.";
$template['translation']['text7']="
	This mini-howto describes the procedure for translating KVIrc in a new language";
$template['translation']['text8']="Getting the right sources.";
$template['translation']['text9a']="
	First of all you need the SVN version of KVIrc. To obtain the SVN version you can follow the instructions on";
$template['translation']['text9b']="The translation stuff is in";
$template['translation']['text10']="Initialize the build environment";
$template['translation']['text11']="
	Enter the directory containing the KVIrc code and follow the doc/INSTALL documentation on how to run CMake to generate the needed Makefiles.";
$template['translation']['text12']="Finding out your language code";
$template['translation']['text13']="
	You must find out the contents of your language code. Usually this is a string formed of at least two letters and it can be found by examining the contents of your \$LANG shell variable or by looking at";
$template['translation']['text14']="Examples of such codes are";
$template['translation']['text15']="Generating the list of messages to translate";
$template['translation']['text16']="
	You must perform this step only if it is the first time that KVIrc is translated into your language. If you're going to update an existing translation then you can jump directly to step 4.<br />
	Enter your build directory and run this command to extract the messages from the
sources:";
$template['translation']['text17']="
	A series of .pot files will be created in the subdirs of build_directory/po/<br />
	Each file refers to a specific component of KVIrc: eg. the main translation file is located in build_directory/po/core/kvirc/kvirc.pot<br />
	Create a copy for each of these files named file_xxx.po where file is the name of the component and xxx is your language code found in step 2.";
$template['translation']['text18']="
	...and so on for all the other modules; you are not forced to translate all the files at once, but creating the files skeleton for all components is recommended.";
$template['translation']['text19']="Translating the messages";
$template['translation']['text20']="
	If you just followed step 3 then you have just created the *_xxx.po (eg. kvirc_it.po) files where xxx stands for your language code (found in step 2).<br />
	If you jumped directly here from 2 then you need to find the existing *_xxx.po files in the kvirc/po subdirectories.<br />
	If no such files exist for your locale, you probably missed to create them in step 3.";
$template['translation']['text21']="
	You can translate *.po files using a simple text editor (that <b>HAVE</b> to support the UTF-8 encoding), but it's strongly advised that you use a translation software such as lokalize for linux/kde or poedit for windows.";
$template['translation']['text22']="
	Note on the format of the translation files.<br />
	The *.po files contains a set of strings like the following one:";
$template['translation']['text23a']="/path/to/the/file/which/contains/the/string: line number";
$template['translation']['text23b']="The original english message";
$template['translation']['text23c']="The translation goes here";
$template['translation']['text24']="
	The <i>msgid</i> is the original message that needs to be translated and <i>msgstr</i> is the translation (that will be initially empty, when the kvirc_xxx.po file is created).";
$template['translation']['text25']="
	The msgid can contain html tags, escapes like \"\\n\" and format strings like \"%s\". You <b>MUST</b> match the tags, escapes and format specs in the msgstr strings. Keep special attention to the format specifications (%s, %W, %Q, ...).<br />
	They must remain <b>EXACTLY</b> the same order as in the msgid: exchanging the order or writing a wrong format spec will lead to crashes sooner or later.";
$template['translation']['text26']="Adding the translation to the install system";
$template['translation']['text27']="
	Once you have translated some strings you can try to run the translation in KVIrc. If you are updating an existing translation then you can jump directly to step 6.";
$template['translation']['text28']="
	You need to force the build system to pick up your newly created translation files and compile it. This is again an one time step. You'll just need to clean your CMakeCache.txt (located in your build directory) and re-run CMake again for it to pick up the new translation file, then build KVIrc as usual.<br />
	When it has finished building, move to the next step.";
$template['translation']['text29']="Trying the translation";
$template['translation']['text30']="Run make and wait until it finishes.";
$template['translation']['text31']="
	Check your \$LANG enviroment variable.<br />
	If you are translating to same language as your system/user language environment is, there is probably no need to change the language.<br />
	Otherwise you need to pass the \$LANG variable to the environment when running KVIrc.";
$template['translation']['text32']="
	KVIrc should then pick up your translation file and use it.";
$template['translation']['text33']="Updating the translation when the sources change";
$template['translation']['text34']="
	In the process of KVIrc development, new message strings gets added inside the source files, while some others can change or even get removed.<br />
	When you do a svn update to obtain the latest sources you should then enter your build directory and run:";
$template['translation']['text35']="
	This procedure will update your *_xxx.po files with the new messages and mark the old messages as either fuzzy or invalid.<br />
	The invalid entries must be re-translated completely again while the fuzzy entries have minor changes and can be probably adjusted in few seconds.";
$template['translation']['text36']="Misc notes";
$template['translation']['text37']="
	If you're in doubt about some translation, you could take a look at how similar sentences have been translated in the KDE *.po files, or in other softwares. If you need some further help, contact us on our mailing list or on irc (irc://irc.freenode.net/#KVIrc).";
$template['translation']['text38']="
	Since many of the modules have their own translation files then the procedure above may be repeated for the po/modules/*/ subdirectories.<br />
	Anyway you are not forced to translate all the files at once: a partial translation will work anyway.";
$template['translation']['text39']="
	When you're satisfied with your translation you may send your *.po files to the KVIrc mailing list asking for inclusion in the SVN. If you want to maintain the translation in the future then you may also apply for a SVN account.";
$template['translation']['text40']="Happy translating :)";
/*
$template['translation']['text4a']="no mantenido";
$template['translation']['text4b']="
	Hablando de \"no mantenido\", te animamos a ayudarnos traduciendo.<br />
	Envía un mail a la lista de correo si estás interesado :)";
$template['translation']['text5a']="¡No te olvides de subscribirte a la";
$template['translation']['text5b']="para mantenerte en contacto con los desarrolladores!";
$template['translation']['text6']="Este mini-howto describe el procedimiento para traducir KVIrc a un nuevo idioma";
$template['translation']['text7']="Conseguir el código fuente.";
$template['translation']['text8a']="
	Lo primero de todo es conseguir la versión SVN de KVIrc. Para obtenerla puedes seguir las instrucciones de";
$template['translation']['text8b']="Las cosas de la traducción están en";
$template['translation']['text9']="Consiguiendo tu código de idioma";
$template['translation']['text10a']="
	Debes conseguir los contenidos de tu código de idioma. Normalmente son dos letras o más y puedes encontrarla examinando los contenidos de la variable \$LANG de tu shell o mirando";
$template['translation']['text10b']="aquí";
$template['translation']['text10c']="Ejemplos de dichos códigos son";
$template['translation']['text11']="Generando la lista de mensajes a traducir";
$template['translation']['text12']="
	Debes realizar este paso sólo si es la primera vez que KVIrc es traducido a tu idioma. Si vas a actualizar una traducción existente puedes saltar directamente al Paso 3.<br />
	Ejecuta el comando para extraer los mensajes del código fuente.";
$template['translation']['text13']="
	Un archivo llamado <code>kvirc.pot</code> será creado. Tienes que renombrar este archivo a <code>kvirc_xxx.po</code> donde xxx es tu código de idioma (el del Paso 1).";
$template['translation']['text14']="Traduciendo los mensajes";
$template['translation']['text15a']="
	Si has hecho el Paso 2 acabas de crear el archivo <code>kvirc_xxx.po</code> donde xxx es tu código de idioma (el del Paso 1).<br />
	Si has saltado directamente aquí desde el 1 tienes que encontrar el archivo <code>kvirc_xxx.po</code> existente en la carpeta <code>kvirc/po/kvirc</code><br />
	Si no hay uno vuelve al Paso 2.";
$template['translation']['text15b']="
	El archivo <code>kvirc_xxx.po</code> contiene una lista de frases como la siguiente:";
$template['translation']['text100a']="/ruta/al/archivo/que/contiene/la/frase: número de línea";
$template['translation']['text100b']="Traduciendo los mensajes";
$template['translation']['text100c']="La traducción va aquí";
$template['translation']['text16']="
	El <i>msgid</i> es el mensaje original que debe ser traducido y <i>msgstr</i> es la traducción (inicialmente estará vacía, cuando el archivo <code>kvirc_xxx.po</code> es creado)";
$template['translation']['text17']="
	El msgid puede contener tags html, escapes como \"\\n\" y especificaciones de formato como \"%s\". <b>DEBES</b> dejar las tags, escapes y especificaciones de formato en las cadenas msgstr. <b>Presta especial atención</b> a las especificaciones de formato (%s, %W, %Q...).<br />
	Deben llevar <b>EXACTAMENTE el mismo orden</b> que en el msgid: cambiando el orden o escribiendo una spec de formato incorrecta hará que KVIrc falle tarde o temprano.";
$template['translation']['text18']="Añadiendo la traducción al Makefile.am";
$template['translation']['text19']="
	Una vez hayas traducido algunas cadenas puedes intentar ejecutar la traducción en KVIrc. Si estás actualizando una traducción existente puedes saltar directamente al Paso 5.";
$template['translation']['text20']="
	Debes forzar al proceso make a coger tu traducción y compilarla. Esto es una cosa que debes hacer una sola vez. En <code>kvirc/src/kvirc</code> hay un archivo llamado <code>Makefile.am</code> Debes editarlo y añadir <code>kvirc_xxx.po</code> donde los otros archivos *.po son mencionados. No deberías tener problemas en adivinar que tiene que ser añadido mirando a las otras entradas *.po de ese archivo.";
$template['translation']['text21']="Entonces simplemente ejecuta:";
$template['translation']['text22']="
	y compila KVIrc normalmente. Una vez haya finalizado el proceso, ejecuta KVIrc asegurándote de que la variable \$LANG está configurada correctamente.";
$template['translation']['text23']="Probando la traducción";
$template['translation']['text24']="Ejecuta make y espera hasta que acabe";
$template['translation']['text25']="KVIrc debería coger tu archivo de traducción y usarlo.";
$template['translation']['text26']="Actualizando la traducción cuando el código fuente cambie";
$template['translation']['text27']="
	Mientras el desarrollo avanza nuevos mensajes son añadidos a las fuentes y una pequeña parte de los mensajes actuales cambia. Cuando hagas una actualizacion SVN para obtener las últimas fuentes deberías ir al directorio <code>kvirc/po/kvirc</code> y ejecutar:";
$template['translation']['text28']="
	Este procedimiento actualizará tu archivo <code>kvirc_xxx.po</code> con los nuevos mensajes y marcará los antiguos mensajes como <i>difusos</i> o no válidos. Las entradas no válidas deben ser traducidas completamente de nuevo mientras que las entradas <i>difusas</i> tienen cambios menores y podrán ser ajustadas probablemente en pocos segundos.";
$template['translation']['text29']="Miscelánea";
$template['translation']['text30']="
	Si tienes dudas sobre alguna traducción, deberías echar un vistazo a como frases similares han sido traducidas en los archivos *.po de KDE: debería haber un archivo de traducción para KDE disponible en el SVN de KDE.";
$template['translation']['text31']="
	Ya que muchos módulos tienen sus propios archivos de traducción entonces el procedimiento anterior podría ser repetido para los subdirectorios <code>po/modules/*</code>";
$template['translation']['text32a']="
	Cuando estés satisfecho con tu traducción podrías enviar tus archivos *.po a";
$template['translation']['text32b']="
	pidiendo su inclusión en el SVN. Si quieres mantener la traducción también podrías pedir una cuenta SVN con acceso a escritura.";
$template['translation']['text33']="Feliz traducción :)";
/* translation.php end */

/* tutorials.php start */
$template['tutorials']['title']="Tutoriales";
$template['tutorials']['archive']="Archivo completo";
$template['tutorials']['tutorial']="Tutorial";
$template['tutorials']['madeby']="hecho por";
$template['tutorials']['text1a']="El arte del scripting";
$template['tutorials']['text1b']="Un buen tutorial de scripting";
$template['tutorials']['tree1c']="Introducción al lenguaje";
$template['tutorials']['tree1d']="Ciclos, condiciones y aliases";
$template['tutorials']['tree1e']="Matrices, diccionarios, objetos y clases";
$template['tutorials']['tree1f']="Eventos y popups";
$template['tutorials']['tree1g']="Objetos gráficos y entorno";
$template['tutorials']['tree1h']="La clase envolvedora";
$template['tutorials']['tree1i']="Slots y señales";
$template['tutorials']['tree1j']="Eventos puros y acciones";
$template['tutorials']['tree1k']="Sockets y perl";
$template['tutorials']['text2a']="Compilación de KVIrc en Win32";
$template['tutorials']['text2b']="Un tutorial para compilar KVIrc Win32";
$template['tutorials']['text3a']="Tutorial de scripting para principiantes";
$template['tutorials']['text3b']="Una guía para los totalmente principiantes";
$template['tutorials']['text4a']="Instalación de KVIrc bajo Win32";
$template['tutorials']['text4b']="Un pequeño tutorial para instalar KVIrc, conectarse a un servidor y unirse a un canal en Windows";
$template['tutorials']['dropmail']="Si has escrito un FAQ, tutorial o guía de KVIrc en cualquier idioma por favor envía un mail a";
$template['tutorials']['text5a']="HowTo de temas";
$template['tutorials']['text5b']="Un pequeño howto sobre cómo hacer un buen tema";
$template['tutorials']['text6a']="Modificación del instalador bajo Win32";
$template['tutorials']['text6b']="Un tutorial sobre cómo reempaquetar el instalador de windows para incluir un script por defecto modificado, un nuevo tema o lo que sea"; 
$template['tutorials']['text7a']="Registered Users";
$template['tutorials']['text7b']="Tutorial on how to manage the registered users database";
/* tutorials.php end */

/* welcome.php start */
$template['welcome']['title']="¡Bienvenido!";
$template['welcome']['text']="
	KVIrc es un cliente de <acronym title=\"Internet Relay Chat\">IRC</acronym> <a href=\"http://www.gnu.org\">libre</a> y portable basado en el excelente <a href=\"http://www.trolltech.com\">Qt GUI toolkit</a>.
	KVIrc está siendo escrito por <a href=\"http://www.pragmaware.net\">Szymon Stefanek</a> y el equipo de desarrollo de KVIrc con la contribución de muchos desarrolladores adictos al IRC alrededor del mundo.";
$template['welcome']['text2']="¡forma parte del proyecto!";
$template['welcome']['alttext']="como ayudar en el proyecto KVIrc";
/* welcome.php end */
?>
