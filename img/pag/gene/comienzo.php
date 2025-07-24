<?php
include ('../../classes/classpag.php');
if (isset($_SERVER['HTTP_REFERER'])){$pag=$_SERVER['HTTP_REFERER'];}else{$pag="";} 
$url_base = configini('url');
if($pag==$url_base){
header('Content-type: text/html; charset=iso-8859-1');
echo '<html>
<head>
<meta name="author" content="Cryptorius">
<title>Entrar</title>
</head>
<body>';
echo '<div style="background-color: black; text-align:left; padding: 10px 10px 10px 20px;"><h2><img style="float: left; margin-right: 8px;" title="El Comienzo - Mitologia Griega" src="img/gene/comienzo.jpg" alt="El comienzo en la Mitologia Griega " height="251" width="250">Desde la Mitología Griega, este interesante relato que describe el  origen del universo y la tierra, y como de la nada fueron surgiendo  todos los seres que la poblaron.</h2>
<p>En el inicio, antes del Cosmos, solamente existía Caos,  el vacío informe y primordial. En él se encontraba todo lo que habría  de existir, el pasado y el futuro, pero en desorden y sin forma. Dentro  del Caos crecieron sus hijos, que fueron los elementos que dieron orden al universo. Los hijos del Caos fueron Nix y Érebo,  las tinieblas primigenias. (Resulta curioso contrastar este mito con la  tradición cristiana, en la que lo primero que fue creado fue la luz.  Para los antiguos <b>griegos</b>, primero surgió la obscuridad).<br>
  Nix representa la noche, la obscuridad superior. De ella nacieron muchos poderes que aún habitan el mundo. Entre ellos figuran Hipnos, el sueño, Moro, la suerte, Momo, el sarcasmo, Filotes, la ternura, Geras, la vejez, Eris, la discordia, Némesis, el castigo divino, y Ápate, el engaño. Hijos de Nix son también los Sueños, la Angustia, y las Hespérides, ninfas del crepúsculo.<br>
  Érebo representa a las tinieblas inferiores, las subterráneas. Se unió con Nix, la noche, y de esta unión nacieron Hémera, la luz del día, y Éter, la personificación del aire superior, y donde la luz es más pura.<br>
  Hémera se unió con Éter, su hermano. Juntos engendraron a <b>Gea</b>, Urano y Ponto, las potencias del mundo.<br>
  Gea es la Tierra, el elemento primordial del que  nacieron los dioses. También es considerada una diosa de la muerte,  pues al ser la Tierra llama a todas las criaturas de regreso a ella.<br>
  Urano es la personificación del Cielo. Llegó a ser el  gobernante de los dioses, y fue el esposo de Gea, su hermana, con la  que tuvo muchos hijos. Urano, el cielo, es el que cubre a Gea, la  Tierra, y es el único que se le puede comparar en grandeza.<br>
  Ponto, la “Ola”, es la fuerza masculina del Mar.<br>
  De esta manera fueron creados las grandes regiones del Universo.<br>
  De Gea y Urano nacieron los Titanes, los <b>Cíclopes</b>, y los Hecatónquiros, monstruos gigantescos de cien brazos. De entre los Titanes, el más poderoso fue Cronos.  Urano odiaba a sus hijos y no les permitía ver la luz, obligándolos a  vivir en el seno de su madre, la Tierra. Ésta decidió liberar a sus  hijos, pero sólo Cronos aceptó vengarse de su padre. Gea  le entregó una filoza hoz de acero, y en la noche, cuando Urano se  acercó a Gea y la cubrió, Cronos cortó de un golpe los testículos de su  padre. De la sangre de la herida de Urano, que cayó sobre la Tierra,  nacieron las Erinias, los <b>Gigantes</b> y las divinidades de los bosques. (Según ciertas tradiciones, de los testículos de Urano, que cayeron al mar, nació <b>Afrodita</b>, la diosa del Amor).<br>
  Llegó entonces el reino de los Titanes, que estuvieron sometidos a Cronos, y durante el cual se crearon las primeras razas de los hombres. De Cronos y su hermana Rea nacieron los dioses Olímpicos, el más poderoso de los cuales fue <b>Zeus</b>, quien le arrebataría a Cronos el dominio del universo.</p></div>';
echo '<h3>Fuente : http://www.blogdemitologia.com.ar/mitologia-griega/mito-sobre-la-creacion.htm</h3>';
echo '</body>
</html>';
}else{echo'<meta http-equiv="refresh" content="0; url='.configini('url').'">';
}
?>
