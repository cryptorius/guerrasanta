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
<title>Registracion de usuario</title>
</head>
<body>';
$control1=false;
$control2=false;
$control3=false;
$control4=false;
if(isset($_POST['n_usu']) or isset($_POST['con_usu']) or isset($_POST['ver_con_usu']) or isset($_POST['dia']) or isset($_POST['mes']) or isset($_POST['ano']) or isset($_POST['sexo']) or isset($_POST['email'])){
echo '<h1>Tu solicitud de incripcion arrojo lo siguiente:</h1><br>';
$n_usu= limpiar(trim($_POST['n_usu']));
if (comprobar_n_usuario($n_usu)==true){
$control1=true;
echo traductor($id_idioma , 'nom usu').' : <b>'.$n_usu.'</b><br>';
$con_usu= trim($_POST['con_usu']);
$ver_con_usu= trim($_POST['ver_con_usu']);
if (Con_verif($con_usu, $ver_con_usu)==true){
$control2=true;
echo traductor($id_idioma , 'con usu').' : <b>******</b> '.traductor($id_idioma , 'con correcta usu').'<br>';
$dia = trim($_POST['dia']);
$mes = trim($_POST['mes']);
$ano = trim($_POST['ano']);
$sexo = trim($_POST['sexo']);
if(comprobar_fecha($dia, $mes, $ano)==true){
$control3=true;
echo traductor($id_idioma , 'fecha naci').' : '.$dia.' del '.$mes.' del '.$ano.'<br>';
$fecha_naci=$ano.'-'.$mes.'-'.$dia;
$sig=signo($fecha_naci);
echo traductor($id_idioma , 'signo').' : '.$sig.'<br>';
switch ($sexo){
case ($sexo==1):
$sex="f";
$n_sexo=ucfirst(traductor($id_idioma , 'femenino'));
break;
case ($sexo==2):
$sex="m";
$n_sexo=ucfirst(traductor($id_idioma , 'masculino'));
break;
}
echo traductor($id_idioma , 'sexo').' : '.$n_sexo.'<br>';
$email=$_POST['email'];
if (verif_email($email)==true){
$control4=true;
echo traductor($id_idioma , 'correo').' : '.$email.'<br>';}
}
}
}
if ($control1 && $control2 && $control3 && $control4){

// registracion Correcta editar a mano

echo '<div class="reg">Tu registracion fue un exito.......<br>Identificate y Entra! '.$n_usu.' a demostrar que eres el mejor
<br><br><br>NOTA: puede que te llegue el correo a la casilla de spam.</div>';
$message = '<html><head>
  <title>Registración exitosa</title>
</head>
<body>
¡Ya eres un Caballero!,<br>
Bienvenido a La Guerra de los Santos.<br>
Aquí están tus datos de usuario:<br>
<br>
'.traductor($id_idioma , 'nom usu').': '.$n_usu.'<br>
'.traductor($id_idioma , 'con usu').': '.$con_usu.'<br>
'.traductor($id_idioma , 'correo').' : '.$email.'<br>
'.traductor($id_idioma , 'fecha naci').': '.$dia.' del '.$mes.' del '.$ano.'<br>
'.traductor($id_idioma , 'signo').': '.signo($fecha_naci).'<br>
'.traductor($id_idioma , 'sexo').': '.$n_sexo.'<br>
<br>
<br>
¡Bienvenido al mundo de los caballeros!<br>
http://savferdesign.comuv.com <br>
</body>
</html>';
// To send HTML mail, the Content-type header must be set
    $headers .= 'MIME-Version: 1.0' . "\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Additional headers
$headers .= 'From: SaVFeR Game <savfergame@savferdesign.comuv.com>' . "\r\n";
gamemysql::query("INSERT INTO usuarios (id_usuario, n_usu, con_usu, na_usu, sig_usu, sex_usu, email_usu, ult_act_usu, acc_usu, est_usu, ult_ip_usu)
VALUES (null, '".$n_usu."', '".$con_usu."', '".$fecha_naci."', '".$sig."', '".$sex."', '".$email."', '0000-00-00 00:00:00', '1', '0', '')");
mail($email, 'Registracion exitosa', utf8_encode($message), $headers);
}
}
echo '</body>
</html>';
}else{echo'<meta http-equiv="refresh" content="0; url='.configini('url').'">';
}
?>
