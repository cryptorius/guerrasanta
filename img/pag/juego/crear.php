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
echo '<h1>'.traductor($id_idioma , 'crear perso').'</h1><hr>';
$cons_personajes=gamemysql::query("SELECT id_personaje_usu FROM usu_personajes WHERE id_usu='".$_SESSION['id_usuario']."'");
if(mysql_num_rows($cons_personajes)==0){
echo '<h2>'.traductor($id_idioma , 'crear 1 perso').'</h2>';
echo '<b> '.traductor($id_idioma , 'saber crear 1 perso').'</b>.<br>';
echo '<div align="center"><div align="center" style="width:250px; height:350px;background-image:url(../../img/crear_fondo.jpg);color:#000000;">
 <br><br>
<form id="crear" action="#">
 '.traductor($id_idioma , 'nom perso').' :<br>
 <input type="text" name="n_perso" id="n_perso" 
   <br>'.traductor($id_idioma , 'mini nom perso').'<br>
   <input name="form" type="hidden" value="1">
        <input type="button" value="'.traductor($id_idioma , 'crear').'" onclick="enviarFormulario(\'pag/juego/crear_personaje.php\',\'crear\', \'contenido\');">
        </form>
	 <br><br>
</div></div>';
}else{
echo '<h2>Crear  Personajes</h2>';
echo '<div class="persoanejes" style="width:100%;"><div class="perso_1" style="float:left; border: 2px solid white; width:30%;">';
$cons_perso1=gamemysql::query("SELECT id_perso1 FROM usu_personajes WHERE id_usu='".$_SESSION['id_usuario']."' and id_perso1=1");
$perso1=gamemysql::getArrayassoc($cons_perso1);
if($perso1['id_perso1']==1){
echo '<h2>'.ucfirst(traductor($id_idioma , 'personaje')).' 1</h2><hr>';
$est_perso=datos::personaje($_SESSION['id_usuario'], "1", "est_perso");
if($est_perso>2){echo 'Por el momento tu personaje esta siendo revisado por el Staff<br> Sentimos las molestias ocacionadas';}else{
$n_perso=datos::personaje($_SESSION['id_usuario'], "1", "n_perso");
$exp_perso=datos::personaje($_SESSION['id_usuario'], "1", "exp_perso");
$zona_perso=datos::personaje($_SESSION['id_usuario'], "1", "zona_perso");
$cons_zona=gamemysql::query("SELECT n_zona FROM zonas WHERE id_zona='".$zona_perso."'");
$zona_n=mysql_fetch_assoc($cons_zona);
echo '<h2><b>Nombre :</b> '.$n_perso.'</h2>';
echo '<h2>Experiencia :</h2><b>'.$exp_perso.'</b>';
echo '<h2>Zona :</h2><b>'.$zona_n['n_zona'].'</b>';
}
}else{echo '<div align="center" style="width:250px; height:350px;background-image:url(../../img/crear_fondo.jpg);color:#000000;">
 <br><br>
<form id="crear" action="#">
 '.traductor($id_idioma , 'nom perso').' :<br>
 <input type="text" name="n_perso" id="n_perso" 
   <br>'.traductor($id_idioma , 'mini nom perso').'<br>
   <input name="form" type="hidden" value="1">
        <input type="button" value="'.traductor($id_idioma , 'crear').'" onclick="enviarFormulario(\'pag/juego/crear_personaje.php\',\'crear\', \'contenido\');">
        </form>
	 <br><br>
</div>';}
echo '</div><div class="perso_2" style="float:left; border: 2px solid white; width:30%;">';
// personaje 2
$cons_perso2=gamemysql::query("SELECT id_perso2 FROM usu_personajes WHERE id_usu='".$_SESSION['id_usuario']."' and id_perso2=1");
$perso2=mysql_fetch_assoc($cons_perso2);
if($perso2['id_perso2']==1){
echo '<h2>'.ucfirst(traductor($id_idioma , 'personaje')).' 2</h2><hr>';
$est_perso2=datos::personaje($_SESSION['id_usuario'], "2", "est_perso");
if($est_perso2>2){echo 'Por el momento tu personaje esta siendo revisado por el Staff<br> Sentimos las molestias ocacionadas';}else{
$n_perso=datos::personaje($_SESSION['id_usuario'], "2", "n_perso");
$exp_perso=datos::personaje($_SESSION['id_usuario'], "2", "exp_perso");
$zona_perso=datos::personaje($_SESSION['id_usuario'], "2", "zona_perso");
$cons_zona=gamemysql::query("SELECT n_zona FROM zonas WHERE id_zona='".$zona_perso."'");
$zona_n=mysql_fetch_assoc($cons_zona);
echo '<h2><b>Nombre :</b> '.$n_perso.'</h2>';
echo '<h2>Experiencia :</h2><b>'.$exp_perso.'</b>';
echo '<h2>Zona :</h2><b>'.$zona_n['n_zona'].'</b>';
}
}else{echo '<div align="center" style="width:250px; height:350px;background-image:url(../../img/crear_fondo.jpg);;color:#000000;">
 <br><br>
<form id="crear" action="#">
 '.traductor($id_idioma , 'nom perso').' :<br>
 <input type="text" name="n_perso" id="n_perso" 
   <br>'.traductor($id_idioma , 'mini nom perso').'<br>
   <input name="form" type="hidden" value="2">
        <input type="button" value="'.traductor($id_idioma , 'crear').'" onclick="enviarFormulario(\'pag/juego/crear_personaje.php\',\'crear\', \'contenido\');">
        </form>
	 <br><br>
</div>';}

echo '</div><div class="perso_3" style="float:left; border: 2px solid white; width:30%;">';
// personaje 3
$cons_perso3=gamemysql::query("SELECT id_perso3 FROM usu_personajes WHERE id_usu='".$_SESSION['id_usuario']."' and id_perso3=1");
$perso3=mysql_fetch_assoc($cons_perso3);
if($perso3['id_perso3']==1){
echo '<h2>'.ucfirst(traductor($id_idioma , 'personaje')).' 3</h2><hr>';
$est_perso3=datos::personaje($_SESSION['id_usuario'], "3", "est_perso");
if($est_perso3>2){echo 'Por el momento tu personaje esta siendo revisado por el Staff<br> Sentimos las molestias ocacionadas';}else{
$n_perso=datos::personaje($_SESSION['id_usuario'], "3", "n_perso");
$exp_perso=datos::personaje($_SESSION['id_usuario'], "3", "exp_perso");
$zona_perso=datos::personaje($_SESSION['id_usuario'], "3", "zona_perso");
$cons_zona=gamemysql::query("SELECT n_zona FROM zonas WHERE id_zona='".$zona_perso."'");
$zona_n=mysql_fetch_assoc($cons_zona);
echo '<h2><b>Nombre :</b> '.$n_perso.'</h2>';
echo '<h2>Experiencia :</h2><b>'.$exp_perso.'</b>';
echo '<h2>Zona :</h2><b>'.$zona_n['n_zona'].'</b>';
}
}else{echo '<div align="center" style="width:250px; height:350px;background-image:url(../../img/crear_fondo.jpg);color:#000000;">
 <br><br>
<form id="crear" action="#">
 '.traductor($id_idioma , 'nom perso').' :<br>
 <input type="text" name="n_perso" id="n_perso" 
   <br>'.traductor($id_idioma , 'mini nom perso').'<br>
   <input name="form" type="hidden" value="3">
        <input type="button" value="'.traductor($id_idioma , 'crear').'" onclick="enviarFormulario(\'pag/juego/crear_personaje.php\',\'crear\', \'contenido\');">
        </form>
	 <br><br>
</div>';}
echo '</div></div>';

}
}
echo '</body></html>';
}else{echo'<meta http-equiv="refresh" content="0; url='.configini('url').'">';
}
?>