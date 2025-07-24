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
echo '<div style="background-color: black; text-align:left; padding: 10px 10px 10px 20px;"><h2><img style="float: left; margin-right: 8px;" title="El Comienzo - Mitologia Griega" src="img/gene/comienzo.jpg" alt="El comienzo en la Mitologia Griega " height="251" width="250">Desde la Mitolog�a Griega, este interesante relato que describe el  origen del universo y la tierra, y como de la nada fueron surgiendo  todos los seres que la poblaron.</h2>
<p>En el inicio, antes del Cosmos, solamente exist�a Caos,  el vac�o informe y primordial. En �l se encontraba todo lo que habr�a  de existir, el pasado y el futuro, pero en desorden y sin forma. Dentro  del Caos crecieron sus hijos, que fueron los elementos que dieron orden al universo. Los hijos del Caos fueron Nix y �rebo,  las tinieblas primigenias. (Resulta curioso contrastar este mito con la  tradici�n cristiana, en la que lo primero que fue creado fue la luz.  Para los antiguos <b>griegos</b>, primero surgi� la obscuridad).<br>
  Nix representa la noche, la obscuridad superior. De ella nacieron muchos poderes que a�n habitan el mundo. Entre ellos figuran Hipnos, el sue�o, Moro, la suerte, Momo, el sarcasmo, Filotes, la ternura, Geras, la vejez, Eris, la discordia, N�mesis, el castigo divino, y �pate, el enga�o. Hijos de Nix son tambi�n los Sue�os, la Angustia, y las Hesp�rides, ninfas del crep�sculo.<br>
  �rebo representa a las tinieblas inferiores, las subterr�neas. Se uni� con Nix, la noche, y de esta uni�n nacieron H�mera, la luz del d�a, y �ter, la personificaci�n del aire superior, y donde la luz es m�s pura.<br>
  H�mera se uni� con �ter, su hermano. Juntos engendraron a <b>Gea</b>, Urano y Ponto, las potencias del mundo.<br>
  Gea es la Tierra, el elemento primordial del que  nacieron los dioses. Tambi�n es considerada una diosa de la muerte,  pues al ser la Tierra llama a todas las criaturas de regreso a ella.<br>
  Urano es la personificaci�n del Cielo. Lleg� a ser el  gobernante de los dioses, y fue el esposo de Gea, su hermana, con la  que tuvo muchos hijos. Urano, el cielo, es el que cubre a Gea, la  Tierra, y es el �nico que se le puede comparar en grandeza.<br>
  Ponto, la �Ola�, es la fuerza masculina del Mar.<br>
  De esta manera fueron creados las grandes regiones del Universo.<br>
  De Gea y Urano nacieron los Titanes, los <b>C�clopes</b>, y los Hecat�nquiros, monstruos gigantescos de cien brazos. De entre los Titanes, el m�s poderoso fue Cronos.  Urano odiaba a sus hijos y no les permit�a ver la luz, oblig�ndolos a  vivir en el seno de su madre, la Tierra. �sta decidi� liberar a sus  hijos, pero s�lo Cronos acept� vengarse de su padre. Gea  le entreg� una filoza hoz de acero, y en la noche, cuando Urano se  acerc� a Gea y la cubri�, Cronos cort� de un golpe los test�culos de su  padre. De la sangre de la herida de Urano, que cay� sobre la Tierra,  nacieron las Erinias, los <b>Gigantes</b> y las divinidades de los bosques. (Seg�n ciertas tradiciones, de los test�culos de Urano, que cayeron al mar, naci� <b>Afrodita</b>, la diosa del Amor).<br>
  Lleg� entonces el reino de los Titanes, que estuvieron sometidos a Cronos, y durante el cual se crearon las primeras razas de los hombres. De Cronos y su hermana Rea nacieron los dioses Ol�mpicos, el m�s poderoso de los cuales fue <b>Zeus</b>, quien le arrebatar�a a Cronos el dominio del universo.</p></div>';
echo '<h3>Fuente : http://www.blogdemitologia.com.ar/mitologia-griega/mito-sobre-la-creacion.htm</h3>';
echo '</body>
</html>';
}else{echo'<meta http-equiv="refresh" content="0; url='.configini('url').'">';
}
?>
