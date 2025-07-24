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
if(isset($_POST['n_perso'])){
echo '<h1>Tu solicitud de incripcion arrojo lo siguiente:</h1><br>';
$n_perso= limpiar(trim($_POST['n_perso']));
if (comprobar_n_perso($n_perso)==true){
echo 'Has creado tu personaje correctamente';
$perso_num=$_POST['form'];
switch ($perso_num){
case ($perso_num=='1'):
$perso_ubi="1', '0', '0";
break;
case ($perso_num=='2'):
$perso_ubi="0', '1', '0";
break;
case ($perso_num=='3'):
$perso_ubi="0', '0', '1";
break;
}
$id_usuario=$_SESSION['id_usuario'];
$sex_perso=datos::cuenta($id_usuario,"sex_usu");
$sig_perso=datos::cuenta($id_usuario,"sig_usu");
gamemysql::query("
INSERT INTO usu_personajes (
id_personaje_usu ,id_usu ,id_perso1 ,id_perso2 ,id_perso3 ,n_perso ,nivel_perso ,exp_perso ,zona_perso ,ubi_ciu_perso ,vid_perso ,vid_actu_perso ,cosm_perso ,cosm_actu_perso ,fuer_perso ,inte_perso ,agi_perso ,des_perso ,res_perso ,vel_ataq_perso ,vel_mov_perso ,id_arm, esta_arm, tec_perso ,hab_perso ,maes_econ_perso ,pc_ini_perso ,pc_perso ,pp_perso ,pd_perso ,pe_perso ,moch_perso ,miss_perso ,dios_perso ,tipo_perso ,est_perso ,ult_ene ,ult_act_perso ,skin_perso ,sex_perso ,sig_perso ,pres_perso)
VALUES (
NULL, '".$id_usuario."', '".$perso_ubi."', '".$_POST['n_perso']."', '1', '0', '1', '0', '100', '100', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '', '', '', '100', '100', '0', '0', '110', '', '', '1', 'g', '0', '0', '0', 'larry', '".$sex_perso."', '".$sig_perso."', '');");

}
}
}
echo '</body></html>';
}else{echo'<meta http-equiv="refresh" content="0; url='.configini('url').'">';
}
?>