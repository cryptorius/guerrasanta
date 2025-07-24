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
if(isset($_POST['nume_perso'])){$_SESSION['num_perso']=$_POST['nume_perso'];}
$id_idioma = configini('id_idioma');
$acceso=datos::cuenta($_SESSION['id_usuario'],"acc_usu");
$ip_usu=getIP();
gamemysql::query("UPDATE usuarios SET ult_act_usu='".date("Y-n-j G:i:s")."', ult_ip_usu='".$ip_usu."'  WHERE id_usuario='".$_SESSION['id_usuario']."' ")or die(mysql_error());
header('Content-type: text/html; charset=iso-8859-1');
if (isset($_SESSION['n_usu'])){ // Si existe
 echo 'Bienvenido '.$_SESSION['n_usu'].'('.$_SESSION['id_usuario'].'), ';
 if (isset($_SESSION['num_perso'])){
$n_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"n_perso");
$id_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"id_personaje_usu");
gamemysql::query("UPDATE usu_personajes SET ult_act_perso='".date("Y-m-d G:i:s")."' WHERE id_personaje_usu='".$id_perso."' ")or die(mysql_error());
 echo 'estas usando ha '.$n_perso;
 }else{echo traductor($id_idioma , "error no perso");}
}else{ // Si no existe
 echo 'No es posible identificarte como usuario ';}
echo '<div id="contenedor" style="float:inherit;">';
echo '<div style="float:left; width:25%px">';
     menu ($id_idioma,'juego', $acceso);
  echo '</div>
    <div id="contenido" style="float:right; width:82%; text-align:center; margin-top: 20px;">
	</div>
  </div>';}
echo '</body></html>';
}else{echo'<meta http-equiv="refresh" content="0; url='.configini('url').'">';
}
 ?>
 