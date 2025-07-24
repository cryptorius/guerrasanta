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
<h1>Pre�mbulo</h1>
<p class=MsoNormal>SaVFeR - Design, es quien se encarga de dise�ar, actualizar y mejorar los distintos archivos que componen SaVFeR - Game, Quien se dedica exclusivamente a controlar el buen uso de las mismas.</p>
<p class=MsoNormal>La finalidad de este Reglamento es procurar que todos los jugadores experimenten en SaVFeR - Game como un juego interesante, cautivador y agradable a largo plazo. Una parte importante del juego es la comunicaci�n entre los jugadores. Para eso, SaVFeR - Design pone a disposici�n diferentes sistemas de comunicaci�n como por ejemplo foros o un propio sistema interno de  Mensajer�a privada y el chat. Tienes la posibilidad de comunicarte con otros jugadores v�a textos y gr�ficos. Por favor ten en cuenta que de esta manera est�s comunic�ndote con personas que esperan ser tratadas amable y cort�smente. Todas las reglas de comunicaciones v�lidas en una conversaci�n entre dos personas tambi�n deber�an usarse al comunicarse dentro de cualquier  Juego de SaVFeR - Game.</p>
<p class=MsoNormal>T� siempre eres responsable de tus art�culos. SaVFeR - Design solo te pone a disposici�n la plataforma para poder transmitir tus art�culos a todos o algunos de tus compa�eros. Siempre tiene validez la ley. Por eso siempre se presta atenci�n a la ley, en especial a los derechos de autor. Por favor solo usa textos y gr�ficos que sabes que est�s autorizado legalmente a poner a disposici�n de otros jugadores dentro del cualquier juego de SaVFeR - Game. En caso de no ser as� se tomaran las medidas necesarias para no interrumpir el buen uso del mismo.</p>
<h1>Reglamento</h1>
<p class=MsoNormal>SaVFeR - Game crea normas, directrices y la etiqueta se guiaran por los principios b�sicos de sentido com�n, la equidad y respeto para todos. Es a trav�s de todos los Usuarios de SaVFeR - Game, que estas reglas van tomando la forma para crear y mantener un ambiente agradable para todos los usuarios. Si usted entiende y reconoce estos principios, usted no tendr� ning�n problema de jugar y disfrutar del juego, siempre y cuando no salga de las normas y directrices establecidas. A cambio, SaVFeR - Design, pondr� como objetivos para ofrecerle, el medio ambiente de calidad de juego con actualizaciones regulares, adiciones y mejoras y para minimizar los errores y el tiempo de parada.</p>
<p class=MsoNormal>Este REGLAMENTO se divide en dos partes:</p>
<p class=MsoNormal>* "Las Reglas para todos los usuarios" tienen validez para todos los usuarios de SaVFeR - Game - independientemente de que usen servicios de pago o no.</p>
<p class=MsoNormal>* "Las Reglas adicionales para cuenta Premium" solo valen para los usuarios de SaVFeR - Game que registran o Adquieren su cuenta Premium pagando por ello.</p>
<p class=MsoNormal>&nbsp;</p>
<p class=MsoNormal>&nbsp;</p>
<h2>Art�culo 1 - Modificaci�n de las Reglas.</h2>
<p class=MsoNormal>A. SaVFeR - Game podr� modificar estas Reglas de vez en cuando a su �nica discreci�n. Cada vez que se conecte en alg�n juego de SaVFeR - Game, se considerar� que han aceptado tales cambios. En el caso de estas Condiciones del buen uso se han modificado, SaVFeR - Game se reserva el derecho (a su discreci�n) para darle aviso de tales cambios en el foro o alg�n otro medio de comunicaci�n entre SaVFeR - Game y el usuario.</p>
<p class=MsoNormal>B. Ya que el reglamento est�n sujetos a cambio en cualquier momento, es responsabilidad propia del usuario para asegurarse de que se respeten estas reglas, para evitar el castigo. La ignorancia no es una excusa.</p>
<p class=MsoNormal>C. Cada caso de la interpretaci�n de las normas son de la competencia del Staff de SaVFeR - Game y no est�n grabados en piedra. Si est� en desacuerdo con una situaci�n, puede alertar a alg�n personal del Staff o al Administrador, que no es y nunca ser� una excusa para una conducta inapropiada o la rudeza de su parte.</p>
<h2>Art�culo 2 - Registraci�n.</h2>
<p class=MsoNormal>SaVFeR - Game, da como entendido que con la registraci�n de una cuenta declaras que has le�do las reglas y aceptas su contenido, para seguir las reglas y ser castigado si el Staff as� lo decidiera. Te obligues a comprobar si hay cambios en las reglas. No siendo consciente de las reglas no es excusa para que las rompa.</p>
<h2>Art�culo 3 - Lenguaje Inapropiado.</h2>
<p class=MsoNormal>SaVFeR - Game, se reserva el derecho (a la discreci�n del Staff) de determinar la censurar de cualquier lenguaje inapropiado, sin previo aviso, por ejemplo, sustituci�n de las vocales con los s�mbolos, que puede o no evocar una palabra en un uso no �tico o mal empleada, no por ello es aceptable. Esto incluye a todos los medios de comunicaci�n provistos. Las sanciones ser�n entregadas a discreci�n del Staff de SaVFeR - Game, y no son discutibles. El Staff son los �nicos jueces de lo que se considera apropiado o no.</p>
<p class=MsoNormal>SaVFeR - Game, se reserva el derecho (a la discreci�n del Staff) de determinar lo ofensivo de los nombres de Personajes y/o todo lo expresado por los usuarios en los distintos medios de comunicaci�n, estos est�n sujetos a ser prohibidos y en algunas ocasiones solo cambiados. Consideramos que el usuario conscientemente da un nombre a un Personajes, sea o no de �ndole ofensivo, si fuese de �ndole ofensivo esto est� en contra de las reglas y no ser� tolerado con lo cual se puede llegar a bloquear la cuenta de usuario y su posterior eliminaci�n. Esto se puede hacer en cualquier momento, por lo que no se aconseja probar su suerte. Es una regla que rige cualquier tipo de cuenta, si usted piensa que puede ser ofensivo, probablemente lo es. El Staff son los �nicos jueces de lo que se considera apropiado o no.</p>
<p class=MsoNormal>Nota: hay algunas excepciones en las palabras empleada que ya sea por las traducciones o interpretaci�n en los distintos lenguajes puede incurrir en falta, en este tipo de excepciones no se la bloqueara o eliminara y recibir� una advertencia, ya que por la diversidad de lenguajes y  las posibles malas traducciones de dichas palabra, no hay una intenci�n directa de ser ofensivo.</p>
<h2>Art�culo 4 - Lenguaje en otros Idiomas</h2>
<p class=MsoNormal>SaVFeR - Game se reserva el derecho (a la discreci�n del Staff) de determinar si el idioma empleado en cualquier medio de comunicaci�n previsto, este dentro de lo entendible y comprensible para todos los usuarios, en caso de no ser as� se lo borrara inmediatamente de la vista de otros usuario lo expuesto, por la raz�n de que no todos los usuario manejan el idioma del expresado, y/o pueden interpretarse mal las traducciones, por lo que lleva a una mala comunicaci�n entre usuario.</p>
<p class=MsoNormal>Nota: los mensajes privados entre usuarios, puede darse como excepci�n, pero siempre y cuando no se lo denuncie, si se llegase a dar dicha denuncia, este pasara a ser revisado, quedando a la discreci�n del Staff de SaVFeR - Game, el cual decidir� si es esta cumpliendo el reglamento. El Staff son los �nicos jueces de lo que se considera apropiado o no.</p>
<h2>Art�culo 5 - Recopilaci�n de direcciones ip</h2>
<p class=MsoNormal>SaVFeR- Game puede conservar y usar las direcciones IP de los usuarios para una posterior identificaci�n de las mismas bajo demanda de una autoridad judicial, policial o cualquier otra autoridad habilitada por la ley.</p>
<h2>Articulo 5.1 - Multi-cuentas</h2>
<p class=MsoNormal>SaVFeR - Game se reserva el derecho (a la discreci�n del Staff) de determinar Si el usuario est� incurriendo en la falta en el uso de Multi-cuentas, puede darse el caso de un grupo de personas (familiares, cliente de un cyber, compa�eros de trabajo, etc.), este jugando simult�neamente en la misma red, por lo tanto usaran la misma IP, puede darse el caso tambi�n, del uso compartido del mismo ordenador, pero si estos usuarios o personajes que poseen la misma ip, no interact�an en ninguna de las acciones permitidas del juego, no incurrir�n en falta. Este margen de duda se otorga para casos como por ejemplo cuando un usuario que es amigo de la zona o que el mismo usuario concurre al mismo cyber, puede ense�arnos como jugar o bien aconsejarnos en alg�n modo sobre el juego.</p>
<p class=MsoNormal>Nota: En algunos casos en el cual un usuario abuse o sea denunciado, se tendr� en cuenta si el personaje en cuesti�n hizo abuso de esta clausula y por ayuda o por mutuo acuerdo con otro usuario, hizo que su personaje obtuviera cierto beneficio o ventaja, este accionar ser� sancionado con el bloqueo de las usuarios interviniente y las posterior eliminaci�n de las cuentas.</p>
<h2>Art�culo 6 - Manipulaci�n de cuentas</h2>
<p class=MsoNormal>SaVFeR - Game se reserva el derecho (a la discreci�n del Staff) de determinar si el usuario est� incurriendo en la falta de compartir, comerciar (vender o comprar o todo lo relacionado a una acci�n de comercio), intercambiar,  realizar trueque, o distribuir de cualquier forma la cuenta de usuario a otra persona o usuario, este accionar est�  expresamente prohibido, todas las cuentas involucradas en este proceso ser�n suspendidas por un plazo no menor de 1 mes, y la cuenta que cambio la titularidad por lo antes mencionado se bloqueara para su posterior eliminaci�n.</p>
<p class=MsoNormal>SaVFeR - Game se reserva el derecho (a la discreci�n del Staff) de determinar si el usuario est� incurriendo en la falta al ver que uno o m�s personajes de un mismo usuario no comparte la misma ip de actividad, esto puede interpretarse como compartir una cuenta, lo cual est� incurriendo en falta.</p>
<p class=MsoNormal>Nota: Bajo ning�n caso un miembro del Staff le pedir� su contrase�a ya tienen acceso a esta informaci�n y nunca la Necesitar�n.</p>
<h2>Art�culo 7 - Soporte Externo</h2>
<p class=MsoNormal>SaVFeR - Game se reserva el derecho (a la discreci�n del Staff) de determinar si el usuario est� incurriendo en la falta cuando usa cualquier forma de intrusi�n manipuladora externa no impuesta por el juego. Especialmente, el usuario no est� autorizado a tomar medidas o usar mecanismos y/o software que pudieran interferir en la funci�n o el desarrollo del juego. Tampoco se le permite bloquear, sobrescribir o modificar contenidos generados por el uso del juego, as� como tampoco acceder al mismo de una forma que pudiese resultar da�ina para el mismo. Al usuario le est� completamente prohibido acceder a cualquier parte de SaVFeR - Game (incluyendo a todos concerniente a SaVFeR - Game) con cualquier otro programa que no sea el navegador de Internet. Esto hace relaci�n, sobretodo, a los as� llamados "bots" o programa de funcionamiento automatizado, as� como a otras herramientas que puedan sustituir o complementar la interfaz Web. Tambi�n queda prohibido el uso de scripts o programas totalmente automatizados o s�lo en parte, que supongan una ventaja del usuario frente al resto de jugadores. Entre estos programas cuentan las funciones de auto-recarga de la p�gina as� como otros mecanismos integrados del navegador de Internet, siempre y cuando se trate de procesos automatizados.</p>
<p class=MsoNormal>Bajo ning�n concepto el usuario podr�:</p>
<p class=MsoNormal>a) Crear o usar cheats, mods y/o hacks, as� como cualquier otro tipo de software creado por terceros que modifique el transcurso del juego.</p>
<p class=MsoNormal>b) Utilizar software que permita el "datamining" o que, de otro modo, env�e o acumule informaci�n relacionada con el juego online.</p>
<p class=MsoNormal>Nota: </p>
<h2>Art�culo 8 � Imagen subidas por el usuario.</h2>
<p class=MsoNormal>SaVFeR - Game se reserva el derecho (a la discreci�n del Staff) de determinar si el usuario est� incurriendo en la falta cuando usa im�genes que no sean de su propiedad o que por razones de denuncia o cualquier otro motivo est�n sujetas a la moderaci�n, se considera que el usuario de forma consiente usa inapropiadamente una imagen, cuando el personal del Staff de SaVFeR � Game, determina que esa imagen esta en falta, esta se eliminar� de la vista, y el usuario que la publico recibir� una sanci�n.</p>
<h2>Art�culo 9 � Las responsabilidades del usuario</h2>
<p class=MsoNormal>SaVFeR � Game, no se responsabiliza de los perjuicios derivados de cualquier problema resultante por la manipulaci�n de la cuenta sin la autorizaci�n del usuario registrado. Por lo tanto el Usuario es el responsable de todo lo que ocurre en su cuenta. Ya sea por Hackers, por terceros, o cualquier otra acci�n que misteriosamente ocurra, no son excusa. El usuario recibir� los datos que completo cuando se registro al e-mail que introdujo. El usuario es responsable de mantener la confidencialidad de la contrase�a y cuenta todo el tiempo, y El usuario es completamente responsable de todas las actividades que ocurran bajo su contrase�a y/o cuenta. Usted se compromete a notificar inmediatamente a SaVFeR � Game de cualquier uso no autorizado de su contrase�a y/o cuenta o cualquier otra violaci�n de seguridad. SaVFeR � Game no puede y no ser� responsable por cualquier p�rdida o da�os derivados de su incumplimiento de la presente Art�culo 9.</p>
<p class=MsoNormal>Nota: El usuario registrado es el �nico responsable de lo que sucede en su cuenta y en su cuenta. Su contrase�a debe ser debidamente guardada y  se aconseja que si el usuario comparte un ordenador de acceso p�blico, no la guarde en el ordenador.</p>
<h2>Art�culo 10 - Reporte</h2>
<p class=MsoNormal>SaVFeR - Game se reserva el derecho (a la discreci�n del Staff) de tomar una decisi�n con respecto a cualquier Reporte realizado, ya que esta funci�n del juego es para garantizar el buen uso, existen casos en que son usado para que se le bloque a un usuario y por lo tanto ganar ventaja de eso. Por ello SaVFeR � Game, analizara y vera cada Reporte con la mayor rapidez y diligencia posible, para evitar desentendimientos, o acciones malogradas.</p>
<p class=MsoNormal>Nota: Los Reportes est�n a disposicion de cualquier miembro del Staff de SaVFeR � Game, por lo que puede evaluarse en todo momento, y dado el caso de cambiar una acci�n hecha por cualquier otro miembro, as� se podr�n accionar de forma r�pida y eficiente.</p>
<h2>Art�culo 11 - Inactividad</h2>
<p class=MsoNormal>SaVFeR � Game, se reserva el derecho (a la discreci�n del Staff) de tomar una decisi�n con respecto a todo usuario que por un plazo de entre 6 a 12 meses de no haberse conectado, se lo considera como inactivo, por lo tanto se lo eliminara a la brevedad posible, para alivianar el servidor y tambi�n dar lugar a nuevos usuarios. En algunos casos extremos o de entendimiento por parte del Staff de SaVFeR � Game, se podr�a reintegrar la cuenta y sus personajes desde el �ltimo respaldo hecho. Si tienes cuenta Premium y has indicado que tu personaje va a estar inactivo. Este ser� almacenado y guardado, pero solo podr�s recuperarlo si aun poseas la cuenta Premium.</p>
<p class=MsoNormal>Nota: La reintegraci�n de las cuentas tambi�n est� sometida a la evoluci�n por parte del Staff de SaVFeR � Game, si la cuenta fue o no Advertida en alguna ocasi�n, por lo que quiz�s esta acci�n esta puesta para aquellos usuarios que jugaron limpio y que apoyaron el juego.</p>
<h2>Art�culo 12 - Sanciones</h2>
<p class=MsoNormal>SaVFeR - Game, se reserva el derecho (a la discreci�n del Staff) de dar dos o ninguna advertencias. Las advertencias ser�n entregadas a trav�s de los medios de comunicaci�n y/o por medio de alg�n anuncio por parte de Staff, de la transgresi�n a las reglas anteriormente mencionadas. Los Usuarios que son advertidos por primera vez pueden esperar hasta un d�a para ser desbloqueado, si repiten los Usuarios pueden esperar desde una semana hasta un mes para ser desbloqueado y el bloqueado total con la posterior eliminaci�n de la cuenta, en caso de que los delitos persistan. Cualquier tipo de comportamientos del usuario considerado inapropiado o que vaya en contra del reglamento, el cual fuera visto por alg�n miembro del Staff de SaVFeR - Game, tendr� una advertencia y/o el  Bloqueo de su cuenta dependiendo de la falta cometida.</p>
<p class=MsoNormal>Nota: En caso de detectarse alguna transgresi�n del reglamento, SaVFeR - Game, sancionara al usuario o los usuarios involucrados, SaVFeR - Game, no se responsabiliza de los perjuicios derivados de dicha sanci�n.</p>
<h2>Art�culo 13 � Conectividad.</h2>
<p class=MsoNormal>SaVFeR - Game, no se responsabiliza por las posibles interferencias o interrupciones o supresi�n del Servicio, ya que este excede el posible control que tiene SaVFeR - Game y SaVFeR � Design del mismo, tampoco SaVFeR - Game, no se responsabiliza de los perjuicios derivados de dichas interferencias o interrupciones o corte definitivo del servicio.</p>
<p class=MsoNormal>Nota: Si llegase a presentar alg�n problema con el mismo el Staff de SaVFeR � Game, har� un comunicado OFICIAL, para exponer lo sucedido, y las medidas tomadas al respecto.</p>
<h2>Art�culo 14 � Edad del Usuario.</h2>
<p class=MsoNormal>El Staff de SaVFeR - Game, junto con los colaboradores, invitamos a los padre (s) o tutor legal (s), de ser positiva y activa de modelos para sus hijos y pasar tiempo juntos en l�nea con sus ni�os, familiariz�ndose con el Servicio y la supervisi�n de cualquier comunicaci�n entre sus hijos y los otros usuarios. Se aconseja que los padre (s) o tutor legal (s) de educar a sus hijos acerca de la conducta en l�nea, espec�ficamente incluyendo pero no limitado a, nunca revelar, distribuir o comunicar su informaci�n de identificaci�n personal, como nombres reales, im�genes, direcciones o n�meros de tel�fono sin el permiso de los padre (s) o tutor legal (s) cuando utilizan Internet.</p>
<p class=MsoNormal>El Staff de SaVFeR - Game, junto con los colaboradores, intentan o se esfuerzan por todos los medios posibles de que la participaci�n de los usuarios dentro del juego no involucre una edad determinada, pero por acciones m�s a all� de las reglas establecidas o del buen comportamiento esperado de los usuarios, hay gente que siempre atenta contra este deseo o pensamiento de respeto e integraci�n. Por ese motivo, el Staff de SaVFeR - Game, se ve obligado a que los usuarios menores de edad est�n supervisado por los padre (s) o tutor legal (s), a la hora de registrarse o adquirir cualquier de los servicios que ofrece SaVFeR � Game, tambi�n para efectuar cualquier acci�n que involucre dinero real, como por ejemplo la adquisici�n de una cuenta Premium o cualquier otro beneficio otorgado por un pago. SaVFeR - Game, no se responsabiliza por las acciones realizadas por menores sin una supervisi�n y no abra devoluci�n del dinero.</p>
<h2>Art�culo 15 - �Casos no Articulados.</h2>
<p class=MsoNormal>SaVFeR � Game, se reserva el derecho (a la discreci�n del Staff) de tomar una decisi�n con respecto a advertir o eliminar una cuenta seg�n su juicio en los casos de no respetar las reglas para usuario, as� tambi�n como en todo caso que no estuviere mencionados o no puede ser catalogado bajo ning�n art�culo.</p>
<br><a href="'.$url_base.'" style="color:#FFFFFF">Volver a la pagina principal</a><br>
</body>
</html>';
echo '<div>';
}else{echo'<meta http-equiv="refresh" content="0; url='.configini('url').'">';
}
?>

