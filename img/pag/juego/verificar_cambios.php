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
if(isset($_POST['con_usu']) or isset($_POST['con_usu_nueva']) or isset($_POST['ver_con_usu_nueva']) or isset($_POST['email_usu']) or isset($_POST['email_usu_nueva'])){
echo 'Has intentado cambiar un dato personal, <br>con el siguiente resultado : ';
if ($_POST['form']=="form1"){
echo 'El Email<br><br><br>';
$email_usu_ant= trim($_POST['email_usu']);
$email_usu_nueva= trim($_POST['email_usu_nueva']);
$email_usu_reg=datos::cuenta($_SESSION['id_usuario'],"email_usu");
if($email_usu_ant=$email_usu_reg){
if(verif_email($email_usu_nueva)==true){
$idusu=gamemysql::query("UPDATE usuarios SET email_usu='".$email_usu_nueva."' WHERE id_usuario='".$_SESSION['id_usuario']."' ")or die(mysql_error());
echo 'El cambio de correo se realizo con exito.....';
$n_usu_reg=datos::cuenta($_SESSION['id_usuario'],"n_usu");
$message = '<html><head>
  <title>Cambio de correo exitoso</title>
</head>
<body>
Este correo es para informar del cambio de correo realizado,<br>
<br>
Señor usuario '.$n_usu_reg.', usted a cambiando su contraseña por:<br>
Correo Anterior: '.$email_usu_ant.'<br>
Correo nuevo: '.$email_usu_nueva.'<br>
<br>
<br>
¡Gracias por jugar en savferdesign.comuv.com!<br>
Esperamos que se siga divirtiendo <br>
</body>
</html>';
// To send HTML mail, the Content-type header must be set
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'From: SaVFeR Game <savfergame@savferdesign.comuv.com>' . "\r\n";
$headers .= 'To: '.$email_usu_nueva.', '.$email_usu_ant.'' . "\r\n";
$headers .= 'Bcc: SaVFeR Game <savfergame@savferdesign.comuv.com>' . "\r\n";
$emails=$email_usu_nueva.','.$email_usu_ant;
mail($emails, 'Cambio de Correo exitoso', utf8_encode($message), $headers);
}else{echo 'El correo ingresado con coincide con el atnerior';}
}
}elseif($_POST['form']=="form2"){
echo 'La Contraseña<br>';
$con_usu= trim($_POST['con_usu']);
$con_usu_nueva= trim($_POST['con_usu_nueva']);
$ver_con_usu_nueva= trim($_POST['ver_con_usu_nueva']);
if (Con_verif($con_usu_nueva, $ver_con_usu_nueva)==true){
$con_usu_reg=datos::cuenta($_SESSION['id_usuario'],"con_usu");
if($con_usu==$con_usu_nueva){echo 'Estas ingresando la misma Contraseña...';
}else{echo 'El cambio de Contraseña se realizo con exito.....';
$idusu=gamemysql::query("UPDATE usuarios SET con_usu='".$con_usu_nueva."' WHERE id_usuario='".$_SESSION['id_usuario']."' ")or die(mysql_error());
$n_usu_reg=datos::cuenta($_SESSION['id_usuario'],"n_usu");
$message = '<html><head>
<title>El cambio de Contraseña exitoso</title>
</head>
<body>
Este correo es para informar del cambio de Contraseña realizado,<br>
<br>
Señor usuario '.$n_usu_reg.', usted a cambiando su contraseña por:<br>
Contraseña nueva: '.$con_usu_nueva.'<br>
<br>
<br>
¡Gracias por jugar en savferdesign.comuv.com!<br>
Esperamos que se siga divirtiendo <br>
</body>
</html>';
// To send HTML mail, the Content-type header must be set
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: SaVFeR Game <savfergame@savferdesign.comuv.com>' . "\r\n";
$email_usu_reg=datos::cuenta($_SESSION['id_usuario'],"email_usu");
$headers .= 'To: '.$email_usu_reg.'' . "\r\n";
$headers .= 'Bcc: SaVFeR Game <savfergame@savferdesign.comuv.com>' . "\r\n";
mail($email_usu_reg, 'Cambio de contraseña exitoso', utf8_encode($message), $headers);}
}
}
}
}
echo '</body></html>';
}else{echo'<meta http-equiv="refresh" content="0; url='.configini('url').'">';
}
?>