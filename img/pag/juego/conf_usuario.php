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

echo '<h1>Datos Personales</h1>';
$email_usu_reg=datos::cuenta($_SESSION['id_usuario'],"email_usu");
$n_usu_reg=datos::cuenta($_SESSION['id_usuario'],"n_usu");
$na_usu_reg=datos::cuenta($_SESSION['id_usuario'],"na_usu");
$na_usu_forma=date("d/m/Y", strtotime($na_usu_reg));
$na_usu_forma=str_replace("/"," del ",$na_usu_forma);
$sex_usu_reg=datos::cuenta($_SESSION['id_usuario'],"sex_usu");
switch ($sex_usu_reg){
case ($sex_usu_reg=='f'):
$n_sexo="Femenino";
break;
case ($sex_usu_reg=='m'):
$n_sexo="Masculino";
break;
}
echo '<div align="center"><table width="350" cellspacing="2" >
  <tr><td>Nombre del usuario:</td><td align="center">'.$n_usu_reg.'</td></tr>
  <tr><td>Contraseña del usuario:</td><td align="center">**********</td></tr>
  <tr><td>Nacimiento del usuario:</td><td align="center">'.$na_usu_forma.'</td></tr>
  <tr><td>Sexo del usuario:</td><td align="center">'.$n_sexo.'</td></tr>
  <tr><td>Email del usuario:</td><td align="center">'.$email_usu_reg.'</td></tr>
</table></div>';
echo '<hr>
<h2>Cambio de Correo</h2>
<form id="cambiar1" action="#">
<table width="450" border="0" align="center">
  <tr><td>Correo anterior:</td><td><input name="email_usu" id="email_usu" type="text" value="Correo electronico anterior" size="40" maxlength="39"></td></tr>
  <tr><td>Nuevo correo: </td><td><input name="email_usu_nueva" id="email_usu_nueva" type="text" value="Correo electronico nuevo" size="40" maxlength="39"></td></tr>
  </table>      
	    <br><input name="form" type="hidden" value="form1"><br>
        <input type="button" value="Cambiar correo" onclick="enviarFormulario(\'pag/juego/verificar_cambios.php\',\'cambiar1\', \'contenido\');">
        </form><hr>
<h2>Cambio de contraseña</h2>
<form id="cambiar2" action="#">
<table width="450" border="0" align="center">
  <tr><td>Contraseña Original :</td><td><input type="password" name="con_usu" id="con_usu"></td></tr>
  <tr><td>Contraseña Nueva: </td><td><input type="password" name="con_usu_nueva" id="con_usu_nueva"></td></tr>
  <tr><td>Repetir Contraseña Nueva: </td><td><input type="password" name="ver_con_usu_nueva" id="ver_con_usu_nueva"></td></tr>
</table>      
	    <br><input name="form" type="hidden" value="form2"><br>
        <input type="button" value="Cambiar contraseña" onclick="enviarFormulario(\'pag/juego/verificar_cambios.php\',\'cambiar2\', \'contenido\');">
        </form><hr>';
}
echo '</body></html>';
}else{echo'<meta http-equiv="refresh" content="0; url='.configini('url').'">';
}
?>