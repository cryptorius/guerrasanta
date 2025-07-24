  <?php
include ('../classes/classpag.php');
if (isset($_SERVER['HTTP_REFERER'])){$pag=$_SERVER['HTTP_REFERER'];}else{$pag="";} 
$url_base = configini('url');
if($pag==$url_base){
header('Content-type: text/html; charset=iso-8859-1');
echo '
<div class="Regla" style="background-color:#000000">
<html>
<head>
<meta name="author" content="Cryptorius">
<title>Reglamento</title>
<style>
<!--
/* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
text-align:left;	
font-size:11.0pt;
	font-family:"Times New Roman","serif";}
h1
	{mso-style-link:"T\00EDtulo 1 Car";
	margin-top:24.0pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	page-break-after:avoid;
	font-size:18.0pt;
	font-family:"Times New Roman","serif";
	color:#FFFFFF;
	font-weight:bold;}
h2
	{mso-style-link:"T\00EDtulo 2 Car";
	margin-top:10.0pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	page-break-after:avoid;
	font-size:15.0pt;
	font-family:"Times New Roman","serif";;
	color:#FFFFFF;
	font-weight:bold;}
p
	{
text-align:left;
margin-right:0cm;
	margin-left:0cm;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";}
-->
</style>
</head>
<body><br>
<a href="'.$url_base.'" style="color:#FFFFFF">Volver a la pagina principal</a><br>
<h1>Preámbulo</h1>
<p class=MsoNormal>SaVFeR - Design, es quien se encarga de diseñar, actualizar y mejorar los distintos archivos que componen SaVFeR - Game, Quien se dedica exclusivamente a controlar el buen uso de las mismas.</p>
<p class=MsoNormal>La finalidad de este Reglamento es procurar que todos los jugadores experimenten en SaVFeR - Game como un juego interesante, cautivador y agradable a largo plazo. Una parte importante del juego es la comunicación entre los jugadores. Para eso, SaVFeR - Design pone a disposición diferentes sistemas de comunicación como por ejemplo foros o un propio sistema interno de  Mensajería privada y el chat. Tienes la posibilidad de comunicarte con otros jugadores vía textos y gráficos. Por favor ten en cuenta que de esta manera estás comunicándote con personas que esperan ser tratadas amable y cortésmente. Todas las reglas de comunicaciones válidas en una conversación entre dos personas también deberían usarse al comunicarse dentro de cualquier  Juego de SaVFeR - Game.</p>
<p class=MsoNormal>Tú siempre eres responsable de tus artículos. SaVFeR - Design solo te pone a disposición la plataforma para poder transmitir tus artículos a todos o algunos de tus compañeros. Siempre tiene validez la ley. Por eso siempre se presta atención a la ley, en especial a los derechos de autor. Por favor solo usa textos y gráficos que sabes que estás autorizado legalmente a poner a disposición de otros jugadores dentro del cualquier juego de SaVFeR - Game. En caso de no ser así se tomaran las medidas necesarias para no interrumpir el buen uso del mismo.</p>
<h1>Reglamento</h1>
<p class=MsoNormal>SaVFeR - Game crea normas, directrices y la etiqueta se guiaran por los principios básicos de sentido común, la equidad y respeto para todos. Es a través de todos los Usuarios de SaVFeR - Game, que estas reglas van tomando la forma para crear y mantener un ambiente agradable para todos los usuarios. Si usted entiende y reconoce estos principios, usted no tendrá ningún problema de jugar y disfrutar del juego, siempre y cuando no salga de las normas y directrices establecidas. A cambio, SaVFeR - Design, pondrá como objetivos para ofrecerle, el medio ambiente de calidad de juego con actualizaciones regulares, adiciones y mejoras y para minimizar los errores y el tiempo de parada.</p>
<p class=MsoNormal>Este REGLAMENTO se divide en dos partes:</p>
<p class=MsoNormal>* "Las Reglas para todos los usuarios" tienen validez para todos los usuarios de SaVFeR - Game - independientemente de que usen servicios de pago o no.</p>
<p class=MsoNormal>* "Las Reglas adicionales para cuenta Premium" solo valen para los usuarios de SaVFeR - Game que registran o Adquieren su cuenta Premium pagando por ello.</p>
<p class=MsoNormal>&nbsp;</p>
<p class=MsoNormal>&nbsp;</p>
<h2>Artículo 1 - Modificación de las Reglas.</h2>
<p class=MsoNormal>A. SaVFeR - Game podrá modificar estas Reglas de vez en cuando a su única discreción. Cada vez que se conecte en algún juego de SaVFeR - Game, se considerará que han aceptado tales cambios. En el caso de estas Condiciones del buen uso se han modificado, SaVFeR - Game se reserva el derecho (a su discreción) para darle aviso de tales cambios en el foro o algún otro medio de comunicación entre SaVFeR - Game y el usuario.</p>
<p class=MsoNormal>B. Ya que el reglamento están sujetos a cambio en cualquier momento, es responsabilidad propia del usuario para asegurarse de que se respeten estas reglas, para evitar el castigo. La ignorancia no es una excusa.</p>
<p class=MsoNormal>C. Cada caso de la interpretación de las normas son de la competencia del Staff de SaVFeR - Game y no están grabados en piedra. Si está en desacuerdo con una situación, puede alertar a algún personal del Staff o al Administrador, que no es y nunca será una excusa para una conducta inapropiada o la rudeza de su parte.</p>
<h2>Artículo 2 - Registración.</h2>
<p class=MsoNormal>SaVFeR - Game, da como entendido que con la registración de una cuenta declaras que has leído las reglas y aceptas su contenido, para seguir las reglas y ser castigado si el Staff así lo decidiera. Te obligues a comprobar si hay cambios en las reglas. No siendo consciente de las reglas no es excusa para que las rompa.</p>
<h2>Artículo 3 - Lenguaje Inapropiado.</h2>
<p class=MsoNormal>SaVFeR - Game, se reserva el derecho (a la discreción del Staff) de determinar la censurar de cualquier lenguaje inapropiado, sin previo aviso, por ejemplo, sustitución de las vocales con los símbolos, que puede o no evocar una palabra en un uso no ético o mal empleada, no por ello es aceptable. Esto incluye a todos los medios de comunicación provistos. Las sanciones serán entregadas a discreción del Staff de SaVFeR - Game, y no son discutibles. El Staff son los únicos jueces de lo que se considera apropiado o no.</p>
<p class=MsoNormal>SaVFeR - Game, se reserva el derecho (a la discreción del Staff) de determinar lo ofensivo de los nombres de Personajes y/o todo lo expresado por los usuarios en los distintos medios de comunicación, estos están sujetos a ser prohibidos y en algunas ocasiones solo cambiados. Consideramos que el usuario conscientemente da un nombre a un Personajes, sea o no de índole ofensivo, si fuese de índole ofensivo esto está en contra de las reglas y no será tolerado con lo cual se puede llegar a bloquear la cuenta de usuario y su posterior eliminación. Esto se puede hacer en cualquier momento, por lo que no se aconseja probar su suerte. Es una regla que rige cualquier tipo de cuenta, si usted piensa que puede ser ofensivo, probablemente lo es. El Staff son los únicos jueces de lo que se considera apropiado o no.</p>
<p class=MsoNormal>Nota: hay algunas excepciones en las palabras empleada que ya sea por las traducciones o interpretación en los distintos lenguajes puede incurrir en falta, en este tipo de excepciones no se la bloqueara o eliminara y recibirá una advertencia, ya que por la diversidad de lenguajes y  las posibles malas traducciones de dichas palabra, no hay una intención directa de ser ofensivo.</p>
<h2>Artículo 4 - Lenguaje en otros Idiomas</h2>
<p class=MsoNormal>SaVFeR - Game se reserva el derecho (a la discreción del Staff) de determinar si el idioma empleado en cualquier medio de comunicación previsto, este dentro de lo entendible y comprensible para todos los usuarios, en caso de no ser así se lo borrara inmediatamente de la vista de otros usuario lo expuesto, por la razón de que no todos los usuario manejan el idioma del expresado, y/o pueden interpretarse mal las traducciones, por lo que lleva a una mala comunicación entre usuario.</p>
<p class=MsoNormal>Nota: los mensajes privados entre usuarios, puede darse como excepción, pero siempre y cuando no se lo denuncie, si se llegase a dar dicha denuncia, este pasara a ser revisado, quedando a la discreción del Staff de SaVFeR - Game, el cual decidirá si es esta cumpliendo el reglamento. El Staff son los únicos jueces de lo que se considera apropiado o no.</p>
<h2>Artículo 5 - Recopilación de direcciones ip</h2>
<p class=MsoNormal>SaVFeR- Game puede conservar y usar las direcciones IP de los usuarios para una posterior identificación de las mismas bajo demanda de una autoridad judicial, policial o cualquier otra autoridad habilitada por la ley.</p>
<h2>Articulo 5.1 - Multi-cuentas</h2>
<p class=MsoNormal>SaVFeR - Game se reserva el derecho (a la discreción del Staff) de determinar Si el usuario está incurriendo en la falta en el uso de Multi-cuentas, puede darse el caso de un grupo de personas (familiares, cliente de un cyber, compañeros de trabajo, etc.), este jugando simultáneamente en la misma red, por lo tanto usaran la misma IP, puede darse el caso también, del uso compartido del mismo ordenador, pero si estos usuarios o personajes que poseen la misma ip, no interactúan en ninguna de las acciones permitidas del juego, no incurrirán en falta. Este margen de duda se otorga para casos como por ejemplo cuando un usuario que es amigo de la zona o que el mismo usuario concurre al mismo cyber, puede enseñarnos como jugar o bien aconsejarnos en algún modo sobre el juego.</p>
<p class=MsoNormal>Nota: En algunos casos en el cual un usuario abuse o sea denunciado, se tendrá en cuenta si el personaje en cuestión hizo abuso de esta clausula y por ayuda o por mutuo acuerdo con otro usuario, hizo que su personaje obtuviera cierto beneficio o ventaja, este accionar será sancionado con el bloqueo de las usuarios interviniente y las posterior eliminación de las cuentas.</p>
<h2>Artículo 6 - Manipulación de cuentas</h2>
<p class=MsoNormal>SaVFeR - Game se reserva el derecho (a la discreción del Staff) de determinar si el usuario está incurriendo en la falta de compartir, comerciar (vender o comprar o todo lo relacionado a una acción de comercio), intercambiar,  realizar trueque, o distribuir de cualquier forma la cuenta de usuario a otra persona o usuario, este accionar está  expresamente prohibido, todas las cuentas involucradas en este proceso serán suspendidas por un plazo no menor de 1 mes, y la cuenta que cambio la titularidad por lo antes mencionado se bloqueara para su posterior eliminación.</p>
<p class=MsoNormal>SaVFeR - Game se reserva el derecho (a la discreción del Staff) de determinar si el usuario está incurriendo en la falta al ver que uno o más personajes de un mismo usuario no comparte la misma ip de actividad, esto puede interpretarse como compartir una cuenta, lo cual está incurriendo en falta.</p>
<p class=MsoNormal>Nota: Bajo ningún caso un miembro del Staff le pedirá su contraseña ya tienen acceso a esta información y nunca la Necesitarán.</p>
<h2>Artículo 7 - Soporte Externo</h2>
<p class=MsoNormal>SaVFeR - Game se reserva el derecho (a la discreción del Staff) de determinar si el usuario está incurriendo en la falta cuando usa cualquier forma de intrusión manipuladora externa no impuesta por el juego. Especialmente, el usuario no está autorizado a tomar medidas o usar mecanismos y/o software que pudieran interferir en la función o el desarrollo del juego. Tampoco se le permite bloquear, sobrescribir o modificar contenidos generados por el uso del juego, así como tampoco acceder al mismo de una forma que pudiese resultar dañina para el mismo. Al usuario le está completamente prohibido acceder a cualquier parte de SaVFeR - Game (incluyendo a todos concerniente a SaVFeR - Game) con cualquier otro programa que no sea el navegador de Internet. Esto hace relación, sobretodo, a los así llamados "bots" o programa de funcionamiento automatizado, así como a otras herramientas que puedan sustituir o complementar la interfaz Web. También queda prohibido el uso de scripts o programas totalmente automatizados o sólo en parte, que supongan una ventaja del usuario frente al resto de jugadores. Entre estos programas cuentan las funciones de auto-recarga de la página así como otros mecanismos integrados del navegador de Internet, siempre y cuando se trate de procesos automatizados.</p>
<p class=MsoNormal>Bajo ningún concepto el usuario podrá:</p>
<p class=MsoNormal>a) Crear o usar cheats, mods y/o hacks, así como cualquier otro tipo de software creado por terceros que modifique el transcurso del juego.</p>
<p class=MsoNormal>b) Utilizar software que permita el "datamining" o que, de otro modo, envíe o acumule información relacionada con el juego online.</p>
<p class=MsoNormal>Nota: </p>
<h2>Artículo 8 – Imagen subidas por el usuario.</h2>
<p class=MsoNormal>SaVFeR - Game se reserva el derecho (a la discreción del Staff) de determinar si el usuario está incurriendo en la falta cuando usa imágenes que no sean de su propiedad o que por razones de denuncia o cualquier otro motivo estén sujetas a la moderación, se considera que el usuario de forma consiente usa inapropiadamente una imagen, cuando el personal del Staff de SaVFeR – Game, determina que esa imagen esta en falta, esta se eliminará de la vista, y el usuario que la publico recibirá una sanción.</p>
<h2>Artículo 9 – Las responsabilidades del usuario</h2>
<p class=MsoNormal>SaVFeR – Game, no se responsabiliza de los perjuicios derivados de cualquier problema resultante por la manipulación de la cuenta sin la autorización del usuario registrado. Por lo tanto el Usuario es el responsable de todo lo que ocurre en su cuenta. Ya sea por Hackers, por terceros, o cualquier otra acción que misteriosamente ocurra, no son excusa. El usuario recibirá los datos que completo cuando se registro al e-mail que introdujo. El usuario es responsable de mantener la confidencialidad de la contraseña y cuenta todo el tiempo, y El usuario es completamente responsable de todas las actividades que ocurran bajo su contraseña y/o cuenta. Usted se compromete a notificar inmediatamente a SaVFeR – Game de cualquier uso no autorizado de su contraseña y/o cuenta o cualquier otra violación de seguridad. SaVFeR – Game no puede y no será responsable por cualquier pérdida o daños derivados de su incumplimiento de la presente Artículo 9.</p>
<p class=MsoNormal>Nota: El usuario registrado es el único responsable de lo que sucede en su cuenta y en su cuenta. Su contraseña debe ser debidamente guardada y  se aconseja que si el usuario comparte un ordenador de acceso público, no la guarde en el ordenador.</p>
<h2>Artículo 10 - Reporte</h2>
<p class=MsoNormal>SaVFeR - Game se reserva el derecho (a la discreción del Staff) de tomar una decisión con respecto a cualquier Reporte realizado, ya que esta función del juego es para garantizar el buen uso, existen casos en que son usado para que se le bloque a un usuario y por lo tanto ganar ventaja de eso. Por ello SaVFeR – Game, analizara y vera cada Reporte con la mayor rapidez y diligencia posible, para evitar desentendimientos, o acciones malogradas.</p>
<p class=MsoNormal>Nota: Los Reportes están a disposicion de cualquier miembro del Staff de SaVFeR – Game, por lo que puede evaluarse en todo momento, y dado el caso de cambiar una acción hecha por cualquier otro miembro, así se podrán accionar de forma rápida y eficiente.</p>
<h2>Artículo 11 - Inactividad</h2>
<p class=MsoNormal>SaVFeR – Game, se reserva el derecho (a la discreción del Staff) de tomar una decisión con respecto a todo usuario que por un plazo de entre 6 a 12 meses de no haberse conectado, se lo considera como inactivo, por lo tanto se lo eliminara a la brevedad posible, para alivianar el servidor y también dar lugar a nuevos usuarios. En algunos casos extremos o de entendimiento por parte del Staff de SaVFeR – Game, se podría reintegrar la cuenta y sus personajes desde el último respaldo hecho. Si tienes cuenta Premium y has indicado que tu personaje va a estar inactivo. Este será almacenado y guardado, pero solo podrás recuperarlo si aun poseas la cuenta Premium.</p>
<p class=MsoNormal>Nota: La reintegración de las cuentas también está sometida a la evolución por parte del Staff de SaVFeR – Game, si la cuenta fue o no Advertida en alguna ocasión, por lo que quizás esta acción esta puesta para aquellos usuarios que jugaron limpio y que apoyaron el juego.</p>
<h2>Artículo 12 - Sanciones</h2>
<p class=MsoNormal>SaVFeR - Game, se reserva el derecho (a la discreción del Staff) de dar dos o ninguna advertencias. Las advertencias serán entregadas a través de los medios de comunicación y/o por medio de algún anuncio por parte de Staff, de la transgresión a las reglas anteriormente mencionadas. Los Usuarios que son advertidos por primera vez pueden esperar hasta un día para ser desbloqueado, si repiten los Usuarios pueden esperar desde una semana hasta un mes para ser desbloqueado y el bloqueado total con la posterior eliminación de la cuenta, en caso de que los delitos persistan. Cualquier tipo de comportamientos del usuario considerado inapropiado o que vaya en contra del reglamento, el cual fuera visto por algún miembro del Staff de SaVFeR - Game, tendrá una advertencia y/o el  Bloqueo de su cuenta dependiendo de la falta cometida.</p>
<p class=MsoNormal>Nota: En caso de detectarse alguna transgresión del reglamento, SaVFeR - Game, sancionara al usuario o los usuarios involucrados, SaVFeR - Game, no se responsabiliza de los perjuicios derivados de dicha sanción.</p>
<h2>Artículo 13 – Conectividad.</h2>
<p class=MsoNormal>SaVFeR - Game, no se responsabiliza por las posibles interferencias o interrupciones o supresión del Servicio, ya que este excede el posible control que tiene SaVFeR - Game y SaVFeR – Design del mismo, tampoco SaVFeR - Game, no se responsabiliza de los perjuicios derivados de dichas interferencias o interrupciones o corte definitivo del servicio.</p>
<p class=MsoNormal>Nota: Si llegase a presentar algún problema con el mismo el Staff de SaVFeR – Game, hará un comunicado OFICIAL, para exponer lo sucedido, y las medidas tomadas al respecto.</p>
<h2>Artículo 14 – Edad del Usuario.</h2>
<p class=MsoNormal>El Staff de SaVFeR - Game, junto con los colaboradores, invitamos a los padre (s) o tutor legal (s), de ser positiva y activa de modelos para sus hijos y pasar tiempo juntos en línea con sus niños, familiarizándose con el Servicio y la supervisión de cualquier comunicación entre sus hijos y los otros usuarios. Se aconseja que los padre (s) o tutor legal (s) de educar a sus hijos acerca de la conducta en línea, específicamente incluyendo pero no limitado a, nunca revelar, distribuir o comunicar su información de identificación personal, como nombres reales, imágenes, direcciones o números de teléfono sin el permiso de los padre (s) o tutor legal (s) cuando utilizan Internet.</p>
<p class=MsoNormal>El Staff de SaVFeR - Game, junto con los colaboradores, intentan o se esfuerzan por todos los medios posibles de que la participación de los usuarios dentro del juego no involucre una edad determinada, pero por acciones más a allá de las reglas establecidas o del buen comportamiento esperado de los usuarios, hay gente que siempre atenta contra este deseo o pensamiento de respeto e integración. Por ese motivo, el Staff de SaVFeR - Game, se ve obligado a que los usuarios menores de edad estén supervisado por los padre (s) o tutor legal (s), a la hora de registrarse o adquirir cualquier de los servicios que ofrece SaVFeR – Game, también para efectuar cualquier acción que involucre dinero real, como por ejemplo la adquisición de una cuenta Premium o cualquier otro beneficio otorgado por un pago. SaVFeR - Game, no se responsabiliza por las acciones realizadas por menores sin una supervisión y no abra devolución del dinero.</p>
<h2>Artículo 15 -  Casos no Articulados.</h2>
<p class=MsoNormal>SaVFeR – Game, se reserva el derecho (a la discreción del Staff) de tomar una decisión con respecto a advertir o eliminar una cuenta según su juicio en los casos de no respetar las reglas para usuario, así también como en todo caso que no estuviere mencionados o no puede ser catalogado bajo ningún artículo.</p>
<br><a href="'.$url_base.'" style="color:#FFFFFF">Volver a la pagina principal</a><br>
</body>
</html>';
echo '<div>';
}else{echo'<meta http-equiv="refresh" content="0; url='.configini('url').'">';
}
?>

