<?php
include ('../../classes/classpag.php');
if (isset($_SERVER['HTTP_REFERER'])){$pag=$_SERVER['HTTP_REFERER'];}else{$pag="";} 
$url_base = configini('url');
if($pag==$url_base){
header('Content-type: text/html; charset=iso-8859-1');
echo '<div style="background-color: black; text-align:left; padding: 10px 10px 10px 20px;">
<html>
<head>
<style>
<!--
/* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal	{
 	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	text-align:left;	
	font-size:14.0pt;
	font-family:"Times New Roman","serif";}
h1 {
	mso-style-link:"T\00EDtulo 1 Car";
	margin-top:24.0pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	page-break-after:avoid;
	font-size:18.0pt;
	font-family:"Times New Roman","serif";
	text-align: center;
	color:#FFFFFF;
	font-weight:bold;}
h2 {
	mso-style-link:"T\00EDtulo 2 Car";
	margin-top:10.0pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	page-break-after:avoid;
	font-size:16.0pt;
	font-family:"Times New Roman","serif";
	text-align: center;
	color:#FFFFFF;
	font-weight:bold;}
p {
	text-align:left;
	margin-right:0cm;
	margin-left:0cm;
	font-size:14.0pt;
	font-family:"Times New Roman","serif";}
-->
</style>
</head>
<body><br>
<h1>Los 3 Guerreros</h1>
<p class=MsoNormal>Entre todos los guerreros que defendieron la paz y la justicia, solo tres se diferencias del resto, probablemente se los puede considerar como humanos ordinarios, o no llegar a ser catalogados como santo por no tener desarrollado su cosmo, también no se los nombre mucho en las leyendas e historias. Estos Guerreros, tiene también la peculiaridad de que sus armaduras son mecánicas, por lo tanto no fueron creadas a pedido por ningún dios, quizás si se indaga mas afondo pueden considerarse a los que la portan como un <i>Santos de Athena</i>, pero eso queda a criterio del lector, por lo que se tiene entendido su origen se remonta a la llegada de la reencarnación de Athena a manos de <b>Mitsumasa Kido</b>.</p>
<div><img style="float: left; margin-right: 8px;" src="img/gene/mitsumasakido.png" width="150" height="250" >
<p class=MsoNorma>El multimillonario Mitsumasa Kido, en unos de sus viajes por la región de Grecia, se encuentra con <b>Aioros</b>, en un estado moribundo, este le cuenta que las fuerzas del mal se han apoderado del Santuario*, y han tratado de matar al bebé que lleva consigo. Le dice que ella es la reencarnación de la diosa Athena, y por lo tanto los Caballeros de Athena tienen que volver para que se conserve la paz y la justicia en todo el mundo, para eso deberá entrenar a varios niños. Aioros le entrega a <b>Athena</b>, el <b>báculo de Niké</b>** y la <b>Armadura de Sagitario</b>***, finalmente Aioros muere y Kido adopta a la pequeña bebé como su nieta y le pone de nombre Saori. </p></div>
<div align="center">
<img style="float: center; margin-right: 8px;" src="img/gene/bebesaori.png" width="150" height="150" >
<img style="float: center;" src="img/gene/baculonike.png" width="150" height="250" >
<img style="float: center;" src="img/juego/armaduras/sagitario_caja.png" width="250" height="250" >
</div>
<div><img style="float: right;" src="img/gene/doctormamori.jpg" width="150" height="250" >
<p class=MsoNorma>Entonces Kido, reúne en la <b>Fundación Graude</b> a los cien hijos que tuvo alrededor del mundo, luego los envía a realizar el entrenamiento en las distintas regiones del mundo con el objetivo de formar una nueva legión de Santos, cumpliendo con lo solicitado por Aioros antes de morir, también y de forma secreta le solicita al <b>Doctor Mamori</b> (o Asamori) del <i>Centro Científico Graude</i>, que cree armaduras para ser las que ayuden o sean de soporte de los caballeros de bronce, Mamori se compromete aun mas con la tarea encomendada al ver como los 3 jóvenes escogidos se esfuerzan en su entrenamiento, después de 10 años de trabajo, logra crear 3 armaduras.</p></div>
<br>
<h2>Armadura Aérea</h2> (Armadura del Tucán): es de color rojo y tiene forma de un aparato volador, inspirado en la constelación del Tucán, cuenta con un aparato en el brazo izquierdo capaz de aspirar y devolver la energía de los ataques enemigos.<br>
<div align="right"><img src="img/juego/armaduras/aerea.png" width="250" height="250" ></div><br>
<h2>Armadura Terrestre</h2> (Armadura del Zorro): es de color amarilla y tiene forma de un aparato terrestre, inspirado en la constelación del Zorro. No se describen ningún tipo de aparato.<br>
<div align="center"><img src="img/juego/armaduras/terrestre.png" width="250" height="250" ></div><br>
<h2>Armadura Acuática</h2> (Armadura del Pez Espada o Dorado): es de color celeste y tiene forma de un submarino, inspirado en la constelación del Pez Espada o Dorado, cuenta con un aparato en el casco que puede captar movimientos de ondas mentales e interrumpirlas.<br>
<div align="left"><img src="img/juego/armaduras/acuatica.png" width="250" height="250" ></div><br>
<p class=MsoNorma>Las Armaduras de Acero están hechas de acero y poseen las tecnologías de ese entonces,  cubren una porción del cuerpo similar a las Armaduras de bronce, pero presumiblemente son menos resistentes, no poseen componentes como el Orichalnum, el Gammanium y el polvo de estrella.<br>
Los jóvenes que fueron escogidos para portar estas armaduras pasaron por el mismo entrenamiento y supervisado por el Doctor Mamori (o Asamori), todos lograron desarrollar una habilidad llamada Huracán de acero. No se sabe mucho sobre esta habilidad. A cada joven se le asigno una armadura, La armadura Terrestre la usara Daichi, la Armadura Acuática la usara Ushio, y La armadura Aérea la usara Sho.</p>
<div align="center">
<img style="float: center;" src="img/juego/personajes/sho_sin_armadura.png" width="250" height="500" >
<img style="float: center;" src="img/juego/personajes/daichi_sin_armadura.png" width="250" height="500" >
<img style="float: center;" src="img/juego/personajes/ushio_sin_armadura.png" width="250" height="500" ><br>
<img style="float: center;" src="img/gene/guerrerosdeacero.jpg" width="450" height="450" ></div>
<hr>
* Tras muchas generaciones Athena, construyó el Santuario en Athena en Grecia. Este Santuario contaba con una estructura jerárquica, liderada por la diosa y seguida por el Patriarca o Sumo Sacerdote que a su vez lideraba a los 88 Santos.<br>
** El báculo de Niké que representaba a la diosa de la Victoria, portadora de buena suerte para la victoria.<br>
*** La Armadura de Sagitario, es una de las 88 armaduras de Santos de Athena, esta pertenece a las 12 armaduras del meridiano, o mejor conocidas como armaduras doradas.
</body></html></div>';
echo '<h3>Fuente : '.configini('url').'<br> Imagenes: http://www.pharaonwebsite.com/ </h3><hr>';
}else{echo'<meta http-equiv="refresh" content="0; url='.configini('url').'">';
}
?>
