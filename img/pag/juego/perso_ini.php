<?php
include ('../../classes/classpag.php');
$id_idioma = configini('id_idioma');
if (isset($_SERVER['HTTP_REFERER'])){$pag=$_SERVER['HTTP_REFERER'];}else{$pag="";} 
$url_base = configini('url');
if($pag==$url_base){
session_start();
header('Content-type: text/html; charset=iso-8859-1');
echo '<html>
<head>
<meta name="author" content="Cryptorius">
<title>Entrar</title>
</head>
<body>';
if(isset($_SESSION['id_usuario'])){$act_sess=$_SESSION['id_usuario'];}else{$act_sess=0;}
if ($act_sess==0){
echo '<h2>'.traductor($id_idioma , 'error tiempo').'</h2>
<form id="entrar" action="#">
<table border="0" align="center">
  <tr><td align="right">'.traductor($id_idioma , 'usuario').' :</td><td><input type="text" name="n_usu" id="n_usu" ></td></tr>
  <tr><td align="right">'.traductor($id_idioma , 'contra').' : </td><td><input type="password" name="con_usu" id="con_usu" ></td></tr>
</table>      
	    <br><br>
        <input type="button" value="'.traductor($id_idioma , 'entrar').'" onclick="enviarFormulario(\'pag/verificar_usuario.php\',\'entrar\', \'contenido\');">
        </form><hr>';
}else{
echo '<h1>Elige a un Personaje</h1><hr>';
echo '<div class="persoanejes" style="width:100%;"><div class="perso_1" style="float:left; width:30%;">';
$cons_perso1=gamemysql::query("SELECT id_perso1 FROM usu_personajes WHERE id_usu='".$_SESSION['id_usuario']."' and id_perso1=1");
$perso1=mysql_fetch_assoc($cons_perso1);
if($perso1['id_perso1']==1){
$est_perso=datos::personaje($_SESSION['id_usuario'], "1", "est_perso");
if($est_perso>2){echo 'Por el momento tu personaje esta siendo revisado por el Staff<br> Sentimos las molestias ocacionadas';}else{
$n_perso=datos::personaje($_SESSION['id_usuario'], "1", "n_perso");

echo '<div align="center" style="width:250px; height:350px;color:#ffffff;">
 <br><br><form id="entrar1" action="#" align="center">
<h3>Personaje 1</h3>
<h2>Nombre : '.$n_perso.'</h2>
   <input name="nume_perso" type="hidden" value="1">
        <input type="button" value="Entrar" onclick="enviarFormulario(\'pag/juego/index2.php\',\'entrar1\', \'contenedor\');">
        </form>
		 <br><br>
</div>';}
}else{echo 'No tienes un Personaje creado';}
echo '</div><div class="perso_2" style="float:left; width:30%;">';
$cons_perso2=gamemysql::query("SELECT id_perso2 FROM usu_personajes WHERE id_usu='".$_SESSION['id_usuario']."' and id_perso2=1");
$perso2=mysql_fetch_assoc($cons_perso2);
if($perso2['id_perso2']==1){
$est_perso=datos::personaje($_SESSION['id_usuario'], "2", "est_perso");
if($est_perso>2){echo 'Por el momento tu personaje esta siendo revisado por el Staff<br> Sentimos las molestias ocacionadas';}else{
$n_perso=datos::personaje($_SESSION['id_usuario'], "2", "n_perso");
echo '<div align="center" style="width:250px; height:350px;color:#ffffff;">
 <br><br><form id="entrar2" action="#" align="center">
<h3>Personaje 2</h3>
<h2>Nombre : '.$n_perso.'</h2>
   <input name="nume_perso" type="hidden" value="2">
        <input type="button" value="Entrar" onclick="enviarFormulario(\'pag/juego/index2.php\',\'entrar2\', \'contenedor\');">
        </form>
		 <br><br>
</div>';}
}else{echo 'No tienes un Personaje creado';}
echo '</div><div class="perso_3" style="float:left; width:30%;">';
$cons_perso3=gamemysql::query("SELECT id_perso3 FROM usu_personajes WHERE id_usu='".$_SESSION['id_usuario']."' and id_perso3=1");
$perso3=mysql_fetch_assoc($cons_perso3);
if($perso3['id_perso3']==1){
$est_perso=datos::personaje($_SESSION['id_usuario'], "3", "est_perso");
if($est_perso>2){echo 'Por el momento tu personaje esta siendo revisado por el Staff<br> Sentimos las molestias ocacionadas';}else{
$n_perso=datos::personaje($_SESSION['id_usuario'], "3", "n_perso");

echo '<div align="center" style="width:250px; height:350px;color:#ffffff;">
 <br><br><form id="entrar3" action="#" align="center">
<h3>Personaje 3</h3>
<h2>Nombre : '.$n_perso.'</h2>
   <input name="nume_perso" type="hidden" value="3">
        <input type="button" value="Entrar" onclick="enviarFormulario(\'pag/juego/index2.php\',\'entrar3\', \'contenedor\');">
        </form>
		 <br><br>
</div>';}
}else{echo 'No tienes un Personaje creado';}
echo '</div></div>';
}
echo '</body></html>';
}else{echo'<meta http-equiv="refresh" content="0; url='.configini('url').'">';
}
?>