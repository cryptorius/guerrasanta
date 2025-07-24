<?php
include ('../classes/classpag.php');
$id_idioma = configini('id_idioma');
if (isset($_SERVER['HTTP_REFERER'])){$pag=$_SERVER['HTTP_REFERER'];}else{$pag="";} 
$url_base = configini('url');
if($pag==$url_base){
header('Content-type: text/html; charset=iso-8859-1');
echo '<html>
<head>
<meta name="author" content="Cryptorius">
<title>Verificar usuarios</title>
</head>
<body>';
$n_usu= limpiar(trim($_POST['n_usu']));
$con_usu= limpiar(trim($_POST['con_usu']));
$consulta=gamemysql::query("SELECT * FROM usuarios WHERE n_usu='".$n_usu."' AND con_usu='".$con_usu."'")or die(mysql_error());
if(gamemysql::numResults($consulta)==1){
session_start();
echo '<h1>'.traductor($id_idioma , 'bienvenido').' '.$n_usu.'!!</h1>
<div class="pie"><a href="javascript:ajaxpage(\'pag/juego/index2.php\', \'contenedor\');"><img src="img/cosmo_boton.gif"><br><font style="size:+2;"><b>'.traductor($id_idioma , 'ingresar').'!</b></font></a></div>
<br><br><br><br><br><br><br>
'.traductor($id_idioma , 'nota ingresar').'.';
$_SESSION['n_usu']=$n_usu;
$idusu=gamemysql::query("SELECT id_usuario FROM usuarios WHERE n_usu='".$n_usu."' AND con_usu='".$con_usu."'")or die(mysql_error());
$idusuario=gamemysql::getArrayassoc($idusu);
$_SESSION['id_usuario']=$idusuario['id_usuario'];
unset($_SESSION['num_perso']);
}else{
echo '
<h1>'.traductor($id_idioma , 'error ingresar').'!!</h1>
<div class="error">'.traductor($id_idioma , 'error usu contra').'</div>
<div class="reg">'.traductor($id_idioma , 'error no cuenta').', <a href="javascript:ajaxpage(\'pag/regis.php\', \'contenido\');">'.traductor($id_idioma , 'regis').'!</a></div>';}
echo '</body></html>';
}else{echo'<meta http-equiv="refresh" content="0; url='.configini('url').'">';
}
?>
