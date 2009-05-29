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
$template['index']['require']="requisitos";
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
$template['index']['kviman']="manual de KVIrc";
$template['index']['tutorials']="tutoriales";
$template['index']['translations']="traducciones";
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
/* honor.php end */

/* install.php start */
$template['install']['title1']="Instalación";
$template['install']['title2']="Instalación gurú";
$template['install']['title3']="Instalación hacker";
$template['install']['title4']="Instalación humana (detallada)";
$template['install']['text1']="Notas generales para la instalación de la versión 3.2.0 de KVIrc";
$template['install']['text2']="NECESITAS automake 1.5";
$template['install']['text3']="Si estás compilando la versión SVN de KVIrc ejecuta ./autogen.sh. Quizás debas especificar:";
$template['install']['text4']="la ruta de tu librería qt";
$template['install']['text5']="Y también en ocasiones";
$template['install']['text6']="la ruta de tu librería kde";
$template['install']['text7']="Estamos usando las herramientas GNU aquí:";
$template['install']['text8']="tus opciones";
$template['install']['text9']="
	Si no eres un gurú, o tienes problemas con la instalación lee estas instrucciones cuidadosamente.";
$template['install']['step']="Paso";
$template['install']['text10']="
	Si (y SOLO SI) estás compilando la versión SVN de KVIrc tienes que generar el script de configuración.";
$template['install']['text11']="
	Si no se ejecuta correctamente, comprueba tu versión de automake.<br />
	Necesitas automake 1.5, versiones más antiguas NO FUNCIONARÁN con el SVN actual.<br />
	Puedes comprobar la versión de automake con el comando";
$template['install']['text12']="
	Si tu versión de automake es anterior a 1.5 actualízala.<br />
	Puedes encontrarla en http://www.gnu.org/software/automake/ (versión de fuentes) o en el sitio de tu distribución favorita como un paquete de auto-instalación.<br /><br />
	Pista de la instalación de Automake: se instala en /usr/local/ por defecto.<br />
	Si tienes una versión de automake más antigua que esté en /usr/ es mejor eliminarla: los archivos a eliminar son /usr/bin/automake /usr/bin/aclocal /usr/share/automake /usr/share/aclocal<br />
	Si estás inseguro de eliminarlos, renómbralos.<br />
        También asegúrate de que /usr/local/bin está en tu \$PATH.<br /><br />
	Si has descargado las fuentes como tar.gz (o tar.bz2) o si ni siquiera sabes qué es SVN, ignora este paso y salta al siguiente.";
$template['install']['steptitle1']="Comprobando los requisitos";
$template['install']['tree1a']="
	Necesitas la librería Qt.<br />
        Puedes descargarte la última versión desde ftp.trolltech.com.<br />
        El sitio oficial de Qt es www.trolltech.com.<br />
        Nota para los maniáticos de GPL: Qt ES GPL.<br />
        La versión mínima requerida es 3.0.5 (versiones más antiguas *podrían* funcionar).<br />
        Descárgala e instálala siguiendo las instrucciones explicadas en la documentación que viene con la librería.";
$template['install']['tree1b']="
	Necesitas una implementación de pthread decente.<br />
        Esto normalmente viene incluído en tu distribución y ya está probablemente instalado. La librería es libpthread.so.<br />
        Puedes buscar el archivo con el comando \"find\"";
$template['install']['tree1btext1']="En mi sistema la salida es";
$template['install']['tree1btext2']="
	Si no lo tienes (el script configure te lo dirá) puedes descargarlo desde tu mirror GNU favorito.<br />
        En Solaris puedes usar la librería nativa libthread.so pero tendrás que pasar la opción específica a configure (mira abajo).<br />
        FreeBSD tiene una implementación nativa de pthreads en libc_r y el compilador gcc tiene una opción específica -pthread para vincular a ella.<br />
        Si estás en FreeBSD, usa la opción de configure --with-freebsd-pthread y asegúrate de que no tienes otros pthread instalados (que podrían colisionar con los archivos de cabeceras nativos).";
$template['install']['tree1btext3']="
	El script configure también fallará si la librería está escondida en alguna parte de tu sistema (por ejemplo, no en /lib , /usr/lib o /usr/local/lib): deberías moverla.";
$template['install']['tree1c']="
	Necesitas la librería de interfaz de enlazador dinámico libdl.so.<br />
        Normalmente estará instalada en tus sistema, así que no te procupes a no ser que configure se queje. Algunos sistemas tienen la interfaz libdl embebida en libc. El script configure puede detectarlo";
$template['install']['tree1d']="
	(Opcional) Si quieres compilar el soporte de la integración de KDE obviamente necesitas KDE. El paquete kdelibs debería ser suficiente. En algunas distros tendrás que instalar también kdelibs-devel.";
$template['install']['tree1e']="
	(Opcional) Si quieres que DCC VOICE soporte el códec gsm, necesitas una copia reciente de libgsm. Esto no es estrictamente requerido en el momento de la compilación ya que KVIrc buscará la librería en tiempo de ejecución, y sólo si se ha pedido un DCC VOICE con el códec gsm.<br />
        Puedes buscar libgsm usando el comando 'find'.";
$template['install']['tree1etext1']="La salida debería ser algo como";
$template['install']['tree1etext2']="
	Esta librería está incluída en la mayoría de las distribuciones. Algunas distribuciones vienen solo con la versión estática de la librería \"libgsm.a\": si el find previo devolvió algo similar a \"/usr/lib/libgsm.a\" , debes crear manualmente el archivo compartido ejecutando:";
$template['install']['tree1etext3']="
	Si no la tienes instalada, deberías echarle un vistazo al CD de tu distribución, o descargarla de Internet.";
$template['install']['tree1f']="
	(Opcional) Si quieres que el plugin /snd reproduzca varios formatos de audio
        necesitas tener o artsd ejecutándose, esd ejecutándose una librería audiofile razonablemente reciente.
        Sin estas KVIrc solo será capaz de reproducir archivos *.au";
$template['install']['tree1g']="
	(Opcional) Si quieres generar la documentación online también necesitas perl: cualquier versión funcionará (o eso espero)";
$template['install']['tree1h']="
	(Opcional) Si quieres que el soporte de SSL sea compilado
        necesitas la librería OpenSSL y sus cabeceras. (libssl.so y openssl/ssl.h)";
$template['install']['steptitle2']="Ejecutando el script configure (obligatorio)";
$template['install']['text13']="
	Lo primero de todo, tienes que ejecutar el script configure que adivinará alguna información de tu sistema y preparará la compilación.<br />
        Deberías intentar \"simplemente ejecutarlo\" y comprobar si funciona... el script cofnigure intenta ser inteligente, pero en muchos casos fallará.<br /><br />
        Así que antes de ejecutar el script asegúrate de que la variable de entorno \$QTDIR apunta al lugar correcto. Esto ayudará a encontrar la versión correcta de Qt.<br />
        Podrías configurarlo con el comando:";
$template['install']['text14']="tu directorio qt";
$template['install']['text15']="
	En mi sistema Qt está instalado en /usr/local/kde/qt<br />
        así que ejecuto";
$template['install']['text16']="
	Si quieres compilar el soporte KDE podrías querer hacer lo mismo con \$KDEDIR";
$template['install']['text17']="tu directorio kde";
$template['install']['text18']="En mi caso KDE está instalado en /usr/local/kde así que uso";
$template['install']['text19']="El script configure tiene un montón de opciones que pueden ser listadas usando";
$template['install']['text20']="Aquí hay una lista con explicaciones (las más comunes están arriba):";
$template['install']['tree2a']="
	Esto es para depuración y para informar de problemas. Configura las opciones del compilador para dejar las informaciones de depuración dentro del ejecutable kvirc y las librerías.
	De esta manera podrás generar una traza inversa con gdb, en caso de que el programa falle.<br />
	NECESITAS ESTA OPCIÓN SI QUIERES INFORMAR DE UN FALLO DEL PROGRAMA";
$template['install']['tree2b']="
	Pide al compilador que use tuberías en vez de archivos para la etapa de compilación. Las tuberías reducirán el uso de disco y probablemente acorten la compilación un poco. Usa esta opción si tu plataforma la soporta";
$template['install']['tree2c']="
	Este es un soporte experimental para preenlazado de objetos que mejora significativamente el tiempo de inicio del ejecutable. Para usarlo tendrás que tener el programa \"objprelink\" en el PATH. El programa objprelink está incluido en la distribución en el directorio admin. Para usarlo, tendrás que hacer:";
$template['install']['tree2ctext1']="algún_lugar_en_tu_path";
$template['install']['tree2ctext2']="Todo esto DESPUÉS de ejecutar ./configure y ANTES de ejecutar make";
$template['install']['tree2d']="
	KVIrc contiene algunas rutinas en ensamblador ix86 que podrían hacer las cosas más rápido (esto no es siempre cierto, depende del compilador). Podrías intentar probarlo";
$template['install']['tree2e1']="NÚMERO";
$template['install']['tree2e']="
	Activa el flag de optimización del compilador -o&lt;NÚMERO&gt;.<br />
	Los valores posibles son 0, 1, 2 y 3 (pero si tu compilador soporta más niveles de optimización, podrías probar a usar otros números aquí).<br />
	Incrementa el tiempo de compilación pero podría producir un ejecutable ligeramente más rápido";
$template['install']['tree2f']="
	No comprobar si las cosas de pthread funcionan.<br />
	Si configure falla en la comprobación de la librería pthread, podrías querer probar esto... (pero entonces tendrás que \"rezar\" para que la comprobación haya fallado por alguna condición \"inusual\" y la compilación funcionará)";
$template['install']['tree2g']="
	Especifica explícitamente la ruta a las cabeceras de las X. Podrías intentar usar esto si el script configure tiene algún problema encontrándolas";
$template['install']['tree2h']="
	Especifica explícitamente la ruta a las librerías X. Podrías intentar usar esto si el script configure tiene algún problema encontrándolas";
$template['install']['tree2i']="
	Usa &lt;NAME&gt; en vez de \"qt\" como el nombre de la librería Qt.<br />
	Esto es útil en sistemas donde Qt ha sido instalado con un nombre diferente que \"qt\".<br />
	Esto ocurre cuando hay varias copias de Qt instaladas, con el número de versión incluído en el nombre.<br />
	Por ejemplo, en FreeBSD hemos encontrado que Qt1.* era \"qt\" y que Qt2.* era \"qt2\"*. Ya que necesitas Qt3.* para ejecutar kvirc, tendrás que usar --with-qt-name=qt3.<br />
	Si usas esta opción, probablemente tengas que remapear el nombre y ruta del compilador moc con --with-qt-moc";
$template['install']['tree2j']="
	Desactiva la comprobación de la versión multihilo de Qt. Por defecto, KVIrc intentará vincular a la versión multihilo si la encuentra.<br />
	NOTA: si activas el soporte de KDE, KVIrc DEBE ser vinculada a la librería Qt a la que KDE está vinculada";
$template['install']['tree2k']="
	Busca la librería qt en &lt;DIR&gt;.<br />
	Podrías usar esto si el script configure tiene algún problema buscando la librería qt.<br />
	No deberías tener problemas si usas export QTDIR=\"&lt;DIR&gt;\" antes de ejecutar el script configure, pero podría ayudarte si no tienes tienes una instalación de Qt no-estándar.";
$template['install']['tree2l']="
	Busca las cabeceras qt en &lt;DIR&gt;.<br />
	Podrías querer usar esto si el script ocnfigure tiene algún problema encontrando las cabeceras qt.<br />
	No deberías tener problemas si usas export QTDIR=\"&lt;DIR&gt;\" antes de ejecutar el script configure, pero podría ayudarte si no tienes tienes una instalación de Qt no-estándar";
$template['install']['tree2m']="
	Usa el compilador de meta-objetos encontrado en &lt;PATH&gt;<br />
	La ruta es normalmente \$QTDIR/bin/moc , y el script configure lo encontrará si tienes una instalación estándar de Qt y \$QTDIR apunta al directorio correcto.<br />
	De todas formas no deberías tener problemas si usas export QTDIR=\"&lt;DIR&gt;\" bantes de ejecutar el script configure, pero podría ayudarte si no tienes tienes una instalación de Qt no-estándar.<br />
	Esto también te ayudará si tienes el compilador moc con otro nombre: algo como \"moc2\" o sth...<br />
	&lt;PATH&gt; en este caso es una ruta ABSOLUTA: directorio/nombre_del_programa!";
$template['install']['tree2n']="
	Esto desactiva la comprobación de Qt al momento de la compilación.<br />
	Si es esta la única manera de compilar y ejecutar el ejecutable de kvirc, entonces hay algo mal en el script configure";
$template['install']['tree2o']="
	El script configure buscará las cabeceras y librerías KDE y si son encontradas, se activará el soporte KDE. Si no quieres soporte de KDE aunque KDE sea encontrado, simplemente usa esta opción";
$template['install']['tree2p']="
	Busca las cabeceras KDE en &lt;DIR&gt;<br />
	Si \$KDEDIR apunta al lugar correcto, no deberías necesitar esto";
$template['install']['tree2q']="
	Busca las cabeceras KDEen &lt;DIR&gt;<br />
	Si \$KDEDIR apunta al lugar correcto, no deberías necesitar esto";
$template['install']['tree2r']="
	Instala el protocolo de servicio KDE en &lt;DIR&gt;<br />
	Si \$KDEDIR apunta al lugar correcto, no deberías necesitar esto.<br />
	Esto tampoco es muy importante para kvirc: si el script configure no encuentra este directorio, sólo perderás el soporte para urls irc.// en konqueror";
$template['install']['tree2s']="Similar a --without-qt-check pero para KDE";
$template['install']['tree2t']="
	El soporte IPv6 está compilado por defecto en las plataformas que lo soportan: esta opción lo desactiva.<br />
	Incluso aunque tengas una conexión solo de IPv4, podrías querer mantener el soporte IPv6: así podrás buscar resolver hosts IPv6";
$template['install']['tree2u']="
	Esto desactivará el uso de las funciones del sistema memmove() memcpy() y memset() y activará las implementaciones nativas. Úsala si tienes referencias no definidas a estas funciones durante la compilación";
$template['install']['tree2v']="
	Esto es para Solaris.<br />
	Usa esta opción si kvirc sale sin razón aparente y el sistema imprime un mensaje relacionado con una \"Alarma\" :)";
$template['install']['tree2w']="
	Desactiva los motores de cifrado y el soporte de criptografía/transformación de texto. Produce un ejecutable ligeramente más pequeño.<br />
	De todas maneras, si no sabes qué es esto, te sugiero evitar usar esta opción";
$template['install']['tree2x']="
	Esta opción desactiva el soporte de pseudo-transparencia.<br />
	La pseudo transparencia hace que las ventanas de KVIrc parezcan semi-transparentes (esto NO es transparencia real: solo es un hack para hacerlo más bonito).<br />
	Si el soporte de KDE está activado, KVIrc tendrá una opción que hace todas las ventanas usen el fondo de escritorio de KDE como fondo. Sin el soporte de KDE podrás elegir una imagen de fondo y usarla. (Puedes usar tu propio fondo de pantalla: esto funcionará (más o menos) en todos los entornos de escritorio). Es muy bonito pero normalmente usa más memoria de la habitual. También hará que el ejecutable ocupe más de lo habitual.<br />
	Así que esta opción te permite desactivar la pseudo-transparencia";
$template['install']['tree2y']="
	Si estás en Solaris y no tienes la librería pthread (un wrapper supongo) deberías intentar esta opción: intenta usar el sistema nativo de Solaris";
$template['install']['tree2z']="
	Si estás en FreeBSD, NECESITAS esta opción. Activará el uso de la implementación nativa de FreeBSD de pthread, encontrada en libc_r.<br />
	Esto requiere que uses el compilador nativo gcc: tiene una opción especial -pthread que activa el vinculado a libc_r en vez de libc";
$template['install']['tree2a1']="Enlace a libresolv. Creo que es necesario para Solaris";
$template['install']['tree2a2']="Enlace a libsocket. Creo que es necesario para Solaris";
$template['install']['tree2a3']="Enlace a libnsl. Creo que es necesario para Solaris";
$template['install']['tree2a4']="
	Enlace a libcompat. Esto podría ser necesario en algunos sistemas...<br />
	pero no tengo ni idea de en cuáles. Si lo encuentras útil: mándame un email.";
$template['install']['tree2a5']="
	Desactiva la generación de información de tipos del compilador en tiempo real. Esto es necesario con qt-embedded";
$template['install']['tree2a6']="
	Desactiva el uso de la función XBell (necesario si quieres compilar KVIrc con with qt-embedded (sin las X))";
$template['install']['tree2a7']="Necesitas esto para compilar KVIrc con qt-embedded";
$template['install']['tree2a8']="
	Vincula explícitamente las librerías especificadas.<br />
	Ejemplo: --with-other-libs=\"-lmilibreria -lsoporteparasistemaextraño -lsoluciónparalallamadaalsistemaquefalla\"";
$template['install']['tree2a9']="
	Añade explícitamente rutas de búsqueda para las librerías<br />
	Ejemplo: --with-other-ldirs=\"-L/home/pipo/lib/ -L/mi/lugar/seguro/para/librerias/\"";
$template['install']['tree2b1']="
	Añade explícitamente rutas de búsqueda para includes<br />
	Ejemplo: --with-other-idirs=\"-I/home/pipo/include/ -I/tmp/includes/\"";
$template['install']['tree2b2']="
	Desactiva el soporte para comunicación entre procesos.<br />
	No será posible el envío de comandos remotos a sesiones de KVIrc: esto básicamente significa que cada vez que ejecutes KVIrc, se iniciará una nueva sesión.<br />
	Si no usas esto, solo se iniciará una nueva sesión si no existe ya otra en la misma pantalla o se ha forzado una \"nueva sesión\" mediante la línea de comandos.<br />
	Si ya se está ejecutando una sesión, la línea de comandos será pasada a dicha sesión mediante IPC (comunicación basada en eventos de X). Esta opción hará el ejecutable unos KB más pequeño, así que si realmente estás corto de memoria, deberías usarla, de otro modo, IPC es una bonita función";
$template['install']['tree2b3']="
	No deberías necesitar esta opción.<br />
	Desactiva la compilación de código que usa alguna función específica del compilador (saltar a una etiqueta dinámica con un goto). No todos los compiladores soportan esto, pero configure debería detectarlo automáticamente. De todas maneras, si obtienes errores de compilación en kvi_ircview.cpp, podrías intentar esta opción...<br />
	Esto también podría ayudar si el script configure parece quedarse colgado cuando está comprobando el \"compiler dynamic label support\"";
$template['install']['tree2b4']="
	Desactiva completamente las llamadas de dibujado de las X (siempre activadas con Qt >= 3.0.0). Esto puede ayudar si tienes problemas con las fuentes en la ventana principal";
$template['install']['tree2b5']="
	No compilar el código de la splash screen.<br />
	Esto eliminará ese bonito \"banner\" que aparece mientras KVIrc está iniciándose. Ayudará haciendo un ejecutable más pequeño por unos cuantos KB y hará que el inicio dure unos milisegundos menos. Usa esto si estás intentando compilar un ejecutable de rendimiento máximo y tienes poca memoria y CPU :)";
$template['install']['tree2b6']="
	Esto desactivará algunas algunas informaciones emergentes en los diálogos de opciones. Ayudará a hacer un ejecutable y unos módulos más pequeños. Usa esta opción si eres un gurú de KVIrc y no necesitas ayuda usando las opciones";
$template['install']['tree2b7']="
	Desactiva explícitamente el uso de la librería GSM. Desactivará el códec gsm de DCC VOICE pero podría ayudar cuando la compilación se queda parada pidiendo algo relacionado con GSM :)";
$template['install']['tree2b8']="
	Desactiva explícitamente el soporte del sonido DCC VOICE. Esto podría ayudar si tienes problemas en la compilación de src/modules/dcc/voice.cpp. Desactivará el soporte de sonido (y hará que el DCC VOICE no funcione)";
$template['install']['tree2b9']="
	Desactiva el soporte SSL. Será activado si ./configure detecta OpenSSL. Esta opción fuerza al compilador a no usarlo";
$template['install']['tree2c1']="Cosas de depuración... activa los perfiles de asignación de memoria (no lo uses :)";
$template['install']['tree2c2']="
	Activa las comprobaciones de memoria malloc(). Esto imprimirá un bonito mensaje si tu ordenador se queda sin memoria... no puedo ayudarte a comprar nueva RAM, pero al menos puedo hacerte ver cuando tu sistema se queda sin memoria y no es culpa de kvirc. Actualmente no creo que haya alguna razón para usarlo";
$template['install']['tree2c3']="
	Optimizaciones menores de la tabla de hashes: mayor uso de memoria pero una localización de usuarios más rápida. Úsalo si estás habitualmente en canales con un montón de usuarios. (Esto no es crítico de todas maneras)";
$template['install']['text21']="Así que finalmente tienes que ejecutar";
$template['install']['text22']="Por ejemplo, mis opciones comunes son:";
$template['install']['text23']="En FreeBSD he encontrado útil esta línea de comandos:";
$template['install']['text24']="Una vez que el script configure se haya ejecutado correctamente puedes ir al siguiente paso.";
$template['install']['text25']="Compilar (necesario)";
$template['install']['text26']="Este paso es fácil:";
$template['install']['text27']="Cruza los dedos y ejecuta";
$template['install']['text28']="
	Si tu make no es el make de GNU (esto pasa en FreeBSD por ejemplo) deberías usar \"gmake\".<br />
	El proceso de compilación tardará de 6-7 minutos hasta varias horas dependiendo de las capacidades de la máquina.<br />br />
	Una vez que la compilación haya sido satisfactoria, ejecuta";
$template['install']['text29']="
	Igual que antes: usa \"gmake install\" si tu make no es de GNU.<br /><br />
        Esto instalará el ejecutable en /usr/local/bin<br />
        (si no has especificado una opción --prefix diferente en el script configure), las librerías en /usr/local/lib y los datos compartidos en /usr/local/share/kvirc.<br />
        Si tenías una instalación de kvirc previa, el prefijo por defecto se referirá al directorio donde el ejecutable antiguo de kvirc fue encontrado.<br /><br />
        Asegúrate de que /usr/local/lib está en tu /etc/ld.so.conf, si no está ahí, ponlo y ejecuta";
$template['install']['text30']="
	Si has decidido usar el soporte KDE la instalación podría haber localizado esos archivos en \$KDEDIR en vez de /usr/local. En este caso debería estar bien ya que
        KDE requiere que su directorio esté en /etc/ld.so.conf";
$template['install']['text31']="Divertirse";
$template['install']['text32']="Eso es todo amigos.";
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

/* require.php start */
$template['require']['title']="Requisitos (familia 4.0)";
$template['require']['tree1']="Versión Unix (fuentes):";
$template['require']['tree1a']="Un sistema UNIX funcional para compilar las cosas";
$template['require']['tree1b']="
	El <a href=\"http://www.trolltech.com\">Qt GUI Toolkit</a> >= 4.4.0";
$template['require']['tree1c']="
	El <a href=\"http://www.cmake.org\">generador de Makefiles CMake</a> >= 2.6";
$template['require']['tree1d']="
	Un compilador C++, como <a href=\"http://gcc.gnu.org\">GCC (g++)</a>";
$template['require']['tree1e']="Una implementación Pthread decente";
$template['require']['tree1f']="
	La <a href=\"http://www.zlib.org\">librería Zlib</a>, para crear y compartir addons y paquetes de temas";
$template['require']['tree1g']="
	<a href=\"http://www.cpan.org\">Perl</a>, para generar la documentación integrada (opcional)";
$template['require']['tree1h']="
	Las <a href=\"http://www.kde.org\">librerías KDE</a> unidas a <b>la misma</b> versión de Qt (opcional)";
$template['require']['tree1i']="
	La <a href=\"http://www.gnu.org/software/gettext\">suite GNU GetText</a> para generar archivos de traducción (opcional)";
$template['require']['tree1j']="
	La <a href=\"http://www.openssl.org\">librería OpenSSL</a>, para establecer conexiones seguras a los servidores IRC (opcional)";
$template['require']['tree1k']="
	Comprueba si tu distribución separa las librerías de desarrollo de los paquetes principales; si es así tendrás que instalar los paquetes que las contienen. Esos paquetes suelen acabar en \"-dev\"";
$template['require']['tree2']="Versión Unix (binarios):";
$template['require']['tree2a']="Un sistema funcional";
$template['require']['tree2b']="
	El <a href=\"http://www.trolltech.com\">Qt GUI Toolkit</a> >= 4.4.0";
$template['require']['tree3']="Versión Windows (fuentes):";
$template['require']['tree3a']="
	Seguir las instrucciones de \"doc/INSTALL-Win32.txt\"";
$template['require']['tree4']="Versión Windows (binarios):";
$template['require']['tree4a']="Agraciadamente nada";
$template['require']['tree5']="Mac OS X (fuentes):";
$template['require']['tree5a']="Seguir las instrucciones en \"doc/INSTALL-MacOS.txt\"";
$template['require']['tree6']="Mac OS X (binarios):";
$template['require']['tree6a']="
	Agraciadamente nada. Simplemente abre el archivo .dmg y arrastra el icono a la carpeta de tu aplicación.";
$template['require']['titleold']="Requisitos (antigua familia 3.4)";
$template['require']['treeold1']="Versión Unix (fuentes):";
$template['require']['treeold2']="Un sistema UNIX funcional para compilar cosas";
$template['require']['treeold3']="
	El <a href=\"http://www.trolltech.com\">QT GUI toolkit</a> >= 3.0.5 (versiones más antiguas <b>podrían</b> funcionar)";
$template['require']['treeold4']="
	<a href=\"http://www.gnu.org/software/automake/\">automake</a> 1.5";
$template['require']['treeold5']="<a href=\"http://www.zlib.org/\">Librería Zlib</a>";
$template['require']['treeold6']="
	<a href=\"http://www.cpan.org\">Perl</a> (para generar la documentación online)";
$template['require']['treeold1f']="Librerías <a href=\"http://www.kde.org\">KDE</a> vinculadas a <b>la misma</b> versión de Qt (opcional)";
$template['require']['treeold7']="
	Comprueba si tu distribución separa las librerías de desarrollo de los paquetes principales; si es así tendrás que instalar los paquetes que las contienen. Esos paquetes suelen acabar en \"-dev\"";
/* require.php end */

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
	Ya que muchos módulos tienen sus propios archivos de traducción entonces el procedimiento anterior podría ser repetido para los subdirectorios <code>po/modules/*/</code>";
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
