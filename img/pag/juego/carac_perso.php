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
if (isset($_SESSION['num_perso'])){
echo '<h1>Entrenar Caracteristicas</h1><hr>';
$pc_ini_perso=datos::personaje($_SESSION['id_usuario'], $_SESSION['num_perso'],'pc_ini_perso');
if($pc_ini_perso==0){
$pc_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pc_perso");
$pe_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pe_perso");
echo 'Tienes '.$pc_perso.' de Puntos de Cualidades para distribuir<br> Tienes '.$pe_perso.' de Puntos de entrenamiento para usar';
}else{echo 'Los Puntos de Cualidades que restan son '.$pc_ini_perso.' para continuar';}
if(isset($_POST['carac_perso'])){
$carac_perso=$_POST['carac_perso'];
$perso_id=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"id_personaje_usu");
$nivel_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"nivel_perso");
$pun_nece=round($nivel_perso * ($nivel_perso/2) * 1.5);
echo '<br>Necesitas '.$pun_nece.' puntos de entrenamiento para poder cambiar Un punto de cualidad<br>';
// caracteristicas
switch ($carac_perso){
case ($carac_perso=="vid"):
$pe_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pe_perso");
$pc_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pc_perso");
if($pe_perso>=$pun_nece AND $pc_perso>0 ){
$vid_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"vid_perso");
$vid_perso_punto=$vid_perso+1;
$pc_perso_punto=$pc_perso-1;
$pe_perso_punto=$pe_perso-$pun_nece;
$num_perso=$_SESSION['num_perso'];
gamemysql::query("UPDATE usu_personajes SET vid_perso='".$vid_perso_punto."', pc_perso='".$pc_perso_punto."', pe_perso='".$pe_perso_punto."'  WHERE id_personaje_usu='".$perso_id."'")or die(mysql_error());
unset($_POST['carac_perso']);
if($pc_ini_perso>0){$pc_ini_perso=$pc_ini_perso-1;
gamemysql::query("UPDATE usu_personajes SET pc_ini_perso='".$pc_ini_perso."' WHERE id_personaje_usu='".$perso_id."'")or die(mysql_error());}
echo 'As Aumentado tus puntos de vida';}else{echo 'No tienes PUNTOS DE ENTRENAMIENTO o PUNTOS DE CUALIDAD necesarios';}
break;
case ($carac_perso=="cosm"):
$pe_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pe_perso");
$pc_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pc_perso");
if($pe_perso>=$pun_nece AND $pc_perso>0 ){
$cosm_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"cosm_perso");
$cosm_perso_punto=$cosm_perso+1;
$pc_perso_punto=$pc_perso-1;
$pe_perso_punto=$pe_perso-$pun_nece;
$num_perso=$_SESSION['num_perso'];
gamemysql::query("UPDATE usu_personajes SET cosm_perso='".$cosm_perso_punto."', pc_perso='".$pc_perso_punto."', pe_perso='".$pe_perso_punto."' WHERE id_personaje_usu='".$perso_id."'")or die(mysql_error());
unset($_POST['carac_perso']);
if($pc_ini_perso>0){$pc_ini_perso=$pc_ini_perso-1;
gamemysql::query("UPDATE usu_personajes SET pc_ini_perso='".$pc_ini_perso."' WHERE id_personaje_usu='".$perso_id."'")or die(mysql_error());}
echo 'As Aumentado tus puntos de Cosmo';}else{echo 'No tienes PUNTOS DE ENTRENAMIENTO o PUNTOS DE CUALIDAD necesarios';}
break;
case ($carac_perso=="fuer"):
$pe_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pe_perso");
$pc_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pc_perso");
if($pe_perso>=$pun_nece AND $pc_perso>0 ){
$fuer_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"fuer_perso");
$fuer_perso_punto=$fuer_perso+1;
$pc_perso_punto=$pc_perso-1;
$pe_perso_punto=$pe_perso-$pun_nece;
$num_perso=$_SESSION['num_perso'];
gamemysql::query("UPDATE usu_personajes SET fuer_perso='".$fuer_perso_punto."', pc_perso='".$pc_perso_punto."', pe_perso='".$pe_perso_punto."' WHERE id_personaje_usu='".$perso_id."'")or die(mysql_error());
unset($_POST['carac_perso']);
if($pc_ini_perso>0){$pc_ini_perso=$pc_ini_perso-1;
gamemysql::query("UPDATE usu_personajes SET pc_ini_perso='".$pc_ini_perso."' WHERE id_personaje_usu='".$perso_id."'")or die(mysql_error());}
echo 'As Aumentado tus puntos de Fuerza';}else{echo 'No tienes PUNTOS DE ENTRENAMIENTO o PUNTOS DE CUALIDAD necesarios';}
break;
case ($carac_perso=="inte"):
$pe_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pe_perso");
$pc_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pc_perso");
if($pe_perso>=$pun_nece AND $pc_perso>0 ){
$inte_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"inte_perso");
$inte_perso_punto=$inte_perso+1;
$pc_perso_punto=$pc_perso-1;
$pe_perso_punto=$pe_perso-$pun_nece;
$num_perso=$_SESSION['num_perso'];
gamemysql::query("UPDATE usu_personajes SET inte_perso='".$inte_perso_punto."', pc_perso='".$pc_perso_punto."', pe_perso='".$pe_perso_punto."' WHERE id_personaje_usu='".$perso_id."'")or die(mysql_error());
unset($_POST['carac_perso']);
if($pc_ini_perso>0){$pc_ini_perso=$pc_ini_perso-1;
gamemysql::query("UPDATE usu_personajes SET pc_ini_perso='".$pc_ini_perso."' WHERE id_personaje_usu='".$perso_id."'")or die(mysql_error());}
echo 'As Aumentado tus puntos de Inteligencia';}else{echo 'No tienes PUNTOS DE ENTRENAMIENTO o PUNTOS DE CUALIDAD necesarios';}
break;
case ($carac_perso=="agi"):
$pe_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pe_perso");
$pc_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pc_perso");
if($pe_perso>=$pun_nece AND $pc_perso>0 ){
$agi_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"agi_perso");
$agi_perso_punto=$agi_perso+1;
$pc_perso_punto=$pc_perso-1;
$pe_perso_punto=$pe_perso-$pun_nece;
$num_perso=$_SESSION['num_perso'];
gamemysql::query("UPDATE usu_personajes SET agi_perso='".$agi_perso_punto."', pc_perso='".$pc_perso_punto."', pe_perso='".$pe_perso_punto."' WHERE id_personaje_usu='".$perso_id."'")or die(mysql_error());
unset($_POST['carac_perso']);
if($pc_ini_perso>0){$pc_ini_perso=$pc_ini_perso-1;
gamemysql::query("UPDATE usu_personajes SET pc_ini_perso='".$pc_ini_perso."' WHERE id_personaje_usu='".$perso_id."'")or die(mysql_error());}
echo 'As Aumentado tus puntos de Agilidad';}else{echo 'No tienes PUNTOS DE ENTRENAMIENTO o PUNTOS DE CUALIDAD necesarios';}
break;
case ($carac_perso=="des"):
$pe_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pe_perso");
$pc_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pc_perso");
if($pe_perso>=$pun_nece AND $pc_perso>0 ){
$des_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"des_perso");
$des_perso_punto=$des_perso+1;
$pc_perso_punto=$pc_perso-1;
$pe_perso_punto=$pe_perso-$pun_nece;
$num_perso=$_SESSION['num_perso'];
gamemysql::query("UPDATE usu_personajes SET des_perso='".$des_perso_punto."', pc_perso='".$pc_perso_punto."', pe_perso='".$pe_perso_punto."' WHERE id_personaje_usu='".$perso_id."'")or die(mysql_error());
unset($_POST['carac_perso']);
if($pc_ini_perso>0){$pc_ini_perso=$pc_ini_perso-1;
gamemysql::query("UPDATE usu_personajes SET pc_ini_perso='".$pc_ini_perso."' WHERE id_personaje_usu='".$perso_id."'")or die(mysql_error());}
echo 'As Aumentado tus puntos de Destresa';}else{echo 'No tienes PUNTOS DE ENTRENAMIENTO o PUNTOS DE CUALIDAD necesarios';}
break;
case ($carac_perso=="res"):
$pe_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pe_perso");
$pc_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pc_perso");
if($pe_perso>=$pun_nece AND $pc_perso>0 ){
$res_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"res_perso");
$res_perso_punto=$res_perso+1;
$pc_perso_punto=$pc_perso-1;
$pe_perso_punto=$pe_perso-$pun_nece;
$num_perso=$_SESSION['num_perso'];
gamemysql::query("UPDATE usu_personajes SET res_perso='".$res_perso_punto."', pc_perso='".$pc_perso_punto."', pe_perso='".$pe_perso_punto."' WHERE id_personaje_usu='".$perso_id."'")or die(mysql_error());
unset($_POST['carac_perso']);
if($pc_ini_perso>0){$pc_ini_perso=$pc_ini_perso-1;
gamemysql::query("UPDATE usu_personajes SET pc_ini_perso='".$pc_ini_perso."' WHERE id_personaje_usu='".$perso_id."'")or die(mysql_error());}
echo 'As Aumentado tus puntos de Resistencia';}else{echo 'No tienes PUNTOS DE ENTRENAMIENTO o PUNTOS DE CUALIDAD necesarios';}
break;
case ($carac_perso=="vel_ataq"):
$pe_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pe_perso");
$pc_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pc_perso");
if($pe_perso>=$pun_nece AND $pc_perso>0 ){
$vel_ataq_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"vel_ataq_perso");
$vel_ataq_perso_punto=$vel_ataq_perso+1;
$pc_perso_punto=$pc_perso-1;
$pe_perso_punto=$pe_perso-$pun_nece;
$num_perso=$_SESSION['num_perso'];
gamemysql::query("UPDATE usu_personajes SET vel_ataq_perso='".$vel_ataq_perso_punto."', pc_perso='".$pc_perso_punto."', pe_perso='".$pe_perso_punto."' WHERE id_personaje_usu='".$perso_id."'")or die(mysql_error());
unset($_POST['carac_perso']);
if($pc_ini_perso>0){$pc_ini_perso=$pc_ini_perso-1;
gamemysql::query("UPDATE usu_personajes SET pc_ini_perso='".$pc_ini_perso."' WHERE id_personaje_usu='".$perso_id."'")or die(mysql_error());}
echo 'As Aumentado tus puntos de Vel. de Ataque';}else{echo 'No tienes PUNTOS DE ENTRENAMIENTO o PUNTOS DE CUALIDAD necesarios';}
break;
case ($carac_perso=="vel_mov"):
$pe_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pe_perso");
$pc_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pc_perso");
if($pe_perso>=$pun_nece AND $pc_perso>0 ){
$vel_mov_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"vel_mov_perso");
$vel_mov_perso_punto=$vel_mov_perso+1;
$pc_perso_punto=$pc_perso-1;
$pe_perso_punto=$pe_perso-$pun_nece;
$num_perso=$_SESSION['num_perso'];
gamemysql::query("UPDATE usu_personajes SET vel_mov_perso='".$vel_mov_perso_punto."', pc_perso='".$pc_perso_punto."', pe_perso='".$pe_perso_punto."' WHERE id_personaje_usu='".$perso_id."'")or die(mysql_error());
unset($_POST['carac_perso']);
if($pc_ini_perso>0){$pc_ini_perso=$pc_ini_perso-1;
gamemysql::query("UPDATE usu_personajes SET pc_ini_perso='".$pc_ini_perso."' WHERE id_personaje_usu='".$perso_id."'")or die(mysql_error());}
echo 'As Aumentado tus puntos de Vel. de Movimiento';}else{echo 'No tienes PUNTOS DE ENTRENAMIENTO o PUNTOS DE CUALIDAD necesarios';}
break;
}
unset($_POST['carac_perso']);
}

// formularios
$vid_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"vid_perso");
$cosm_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"cosm_perso");
$fuer_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"fuer_perso");
$inte_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"inte_perso");
$agi_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"agi_perso");
$des_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"des_perso");
$res_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"res_perso");
$vel_ataq_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"vel_ataq_perso");
$vel_mov_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"vel_mov_perso");
echo '<div align="center" style="text-transform:capitalize;">';
echo '<form id="punto1" action="#" align="center">
<table width="400">
<tr><td align="left"><font size="+2"><b>Vida : '.$vid_perso.'</b></font><input name="carac_perso" type="hidden" value="vid"></td>
<td align="right"><input type="button" value="+1" onclick="enviarFormulario(\'pag/juego/carac_perso.php\',\'punto1\', \'contenido\');"></td>
  </tr></table></form>';
echo '<form id="punto2" action="#" align="center">
<table width="400">
<tr><td align="left"><font size="+2"><b>Cosmo : '.$cosm_perso.'</b></font><input name="carac_perso" type="hidden" value="cosm"></td>
<td align="right"><input type="button" value="+1" onclick="enviarFormulario(\'pag/juego/carac_perso.php\',\'punto2\', \'contenido\');"></td>
  </tr></table></form>';
  echo '<form id="punto3" action="#" align="center">
<table width="400">
<tr><td align="left"><font size="+2"><b>fuerza : '.$fuer_perso.'</b></font><input name="carac_perso" type="hidden" value="fuer"></td>
<td align="right"><input type="button" value="+1" onclick="enviarFormulario(\'pag/juego/carac_perso.php\',\'punto3\', \'contenido\');"></td>
  </tr></table></form>';
  echo '<form id="punto4" action="#" align="center">
<table width="400">
<tr><td align="left"><font size="+2"><b>inteligencia : '.$inte_perso.'</b></font><input name="carac_perso" type="hidden" value="inte"></td>
<td align="right"><input type="button" value="+1" onclick="enviarFormulario(\'pag/juego/carac_perso.php\',\'punto4\', \'contenido\');"></td>
  </tr></table></form>';
  echo '<form id="punto5" action="#" align="center">
<table width="400">
<tr><td align="left"><font size="+2"><b>agilidad : '.$agi_perso.'</b></font><input name="carac_perso" type="hidden" value="agi"></td>
<td align="right"><input type="button" value="+1" onclick="enviarFormulario(\'pag/juego/carac_perso.php\',\'punto5\', \'contenido\');"></td>
  </tr></table></form>';
  echo '<form id="punto6" action="#" align="center">
<table width="400">
<tr><td align="left"><font size="+2"><b>Destresa : '.$des_perso.'</b></font><input name="carac_perso" type="hidden" value="des"></td>
<td align="right"><input type="button" value="+1" onclick="enviarFormulario(\'pag/juego/carac_perso.php\',\'punto6\', \'contenido\');"></td>
  </tr></table></form>';
  echo '<form id="punto7" action="#" align="center">
<table width="400">
<tr><td align="left"><font size="+2"><b>resistencia : '.$res_perso.'</b></font><input name="carac_perso" type="hidden" value="res"></td>
<td align="right"><input type="button" value="+1" onclick="enviarFormulario(\'pag/juego/carac_perso.php\',\'punto7\', \'contenido\');"></td>
  </tr></table></form>';
  echo '<form id="punto8" action="#" align="center">
<table width="400">
<tr><td align="left"><font size="+2"><b>Vel. de ataque : '.$vel_ataq_perso.'</b></font><input name="carac_perso" type="hidden" value="vel_ataq"></td>
<td align="right"><input type="button" value="+1" onclick="enviarFormulario(\'pag/juego/carac_perso.php\',\'punto8\', \'contenido\');"></td>
  </tr></table></form>';
  echo '<form id="punto9" action="#" align="center">
<table width="400">
<tr><td align="left"><font size="+2"><b>Vel. de Mov : '.$vel_mov_perso.'</b></font><input name="carac_perso" type="hidden" value="vel_mov"></td>
<td align="right"><input type="button" value="+1" onclick="enviarFormulario(\'pag/juego/carac_perso.php\',\'punto9\', \'contenido\');"></td>
  </tr></table></form>';
echo '</div>';
}else{echo '<h1>'.traductor($id_idioma , "error no perso").'</h1>';}}
echo '</body></html>';
}else{echo'<meta http-equiv="refresh" content="0; url='.configini('url').'">';
}
?>