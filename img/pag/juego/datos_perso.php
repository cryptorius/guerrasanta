<?php
include ('../../classes/classpag.php');
$id_idioma = configini('id_idioma');
if (isset($_SERVER['HTTP_REFERER'])){$pag=$_SERVER['HTTP_REFERER'];}else{$pag="";} 
$url_base = configini('url');
if($pag==$url_base){
session_start();
header('Content-type: text/html; charset=iso-8859-1');
echo '<html><head><meta name="author" content="Cryptorius"><title>Datos del personaje</title></head><body>';
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
echo '<h1>Los datos de tu Personaje</h1><hr>';

$n_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"n_perso");
$nivel_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"nivel_perso");
 $cons_exp=gamemysql::getArrayassoc(gamemysql::query("SELECT req_exp_nivel FROM niveles WHERE id_nivel='".($nivel_perso+1)."'")); 
$exp_final_perso=$cons_exp['req_exp_nivel'];
$exp_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"exp_perso");

$zona_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"zona_perso");
$ubi_ciu_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"ubi_ciu_perso");
$dios_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"dios_perso");
$n_dios=datos::dios($dios_perso,"n_dios");
$bon_vid_dios=datos::dios($dios_perso,"vid_dios");
$bon_cosm_dios=datos::dios($dios_perso,"cosm_dios");
$bon_fuer_dios=datos::dios($dios_perso,"fuer_dios");
$bon_inte_dios=datos::dios($dios_perso,"inte_dios");
$bon_des_dios=datos::dios($dios_perso,"des_dios");
$bon_agi_dios=datos::dios($dios_perso,"agi_dios");
$bon_res_dios=datos::dios($dios_perso,"res_dios");
$bon_vel_ataq_dios=datos::dios($dios_perso,"vel_ataq_dios");
$bon_vel_mov_dios=datos::dios($dios_perso,"vel_mov_dios");

$skin_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"skin_perso");$sex_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"sex_perso");
$sig_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"sig_perso");
$pres_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pres_perso");

$clan_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"clan_perso");
if($clan_perso==0){$n_clan="Ninguno"; $rango_clan="Ninguno";}else{
$n_clan=datos::clan($clan_perso, "n_clan");
$lista_clan=clanlist($clan_perso);
$rango_clan=$lista_clan['mien'][$n_perso];
}
$vid_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"vid_perso");
$vid_actu_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"vid_actu_perso");
$cosm_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"cosm_perso");
$cosm_actu_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"cosm_actu_perso");
$fuer_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"fuer_perso");
$inte_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"inte_perso");
$agi_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"agi_perso");
$des_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"des_perso");
$res_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"res_perso");
$vel_ataq_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"vel_ataq_perso");
$vel_mov_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"vel_mov_perso");

$id_arm=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"id_arm");
$esta_arm=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"esta_arm");
$n_arm=datos::armadura($id_arm, "n_arm");
$sig_arm=datos::armadura($id_arm, "sig_arm");
if (($sig_arm==$sig_perso) || ($sig_arm=="Todos")){
$bonif_arm=datos::armadura($id_arm, "bonif_arm");
$total_bonif_arm=$bonif_arm*($esta_arm/100);
}else{$bonif_arm=0;}

$pc_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pc_perso");
$pp_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pp_perso");
$pd_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pd_perso");
$pe_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'],"pe_perso");

$bon_vid=($fuer_perso/4)+($res_perso/4);
$desc_vid=($inte_perso/4)+($agi_perso/4)+($des_perso/4);
$total_bon_vid=round($bon_vid-$desc_vid)+0;
$total_bon_vid_por_arm=round(($vid_perso+$total_bon_vid)*($total_bonif_arm/100))+0;


$bon_cosm=($inte_perso/4)+($agi_perso/4);
$desc_cosm=($fuer_perso/4)+($res_perso/4)+($des_perso/4);
$total_bon_cosm=round($bon_cosm-$desc_cosm)+0;
$total_bon_cosm_por_arm=round(($cosm_perso+$total_bon_cosm)*($total_bonif_arm/100))+0;

$bon_fuer=($des_perso/4)+($res_perso/4);
$desc_fuer=($inte_perso/4)+($agi_perso/4);
$total_bon_fuer=round($bon_fuer-$desc_fuer)+0;
$total_bon_fuer_por_arm=round(($fuer_perso+$total_bon_fuer)*($total_bonif_arm/100))+0;

$bon_inte=($des_perso/4)+($agi_perso/4);
$desc_inte=($fuer_perso/4)+($res_perso/4);
$total_bon_inte=round($bon_inte-$desc_inte)+0;
$total_bon_inte_por_arm=round(($inte_perso+$total_bon_inte)*($total_bonif_arm/100))+0;

$bon_des=0;
$desc_des=($fuer_perso/4)+($inte_perso/4)+($agi_perso/4)+($res_perso/4);
$total_bon_des=round($bon_des-$desc_des+1)+0;
$total_bon_des_por_arm=round(($des_perso+$total_bon_des)*($total_bonif_arm/100))+0;

$bon_agi=($inte_perso/4)+($des_perso/4);
$desc_agi=($fuer_perso/4)+($res_perso/4);
$total_bon_agi=round($bon_agi-$desc_agi)+0;
$total_bon_agi_por_arm=round(($agi_perso+$total_bon_agi)*($total_bonif_arm/100))+0;

$bon_res=($fuer_perso/4)+($des_perso/4);
$desc_res=($inte_perso/4)+($agi_perso/4);
$total_bon_res=round($bon_res-$desc_res)+0;
$total_bon_res_por_arm=round(($res_perso+$total_bon_res)*($total_bonif_arm/100))+0;

$bon_vel_ataq=0;
$desc_vel_ataq=($des_perso/4)+($agi_perso/4)+($res_perso/4);
$total_bon_vel_ataq=round($bon_vel_ataq-$desc_vel_ataq)+1;
$total_bon_vel_ataq_por_arm=round(($vel_ataq_perso+$total_bon_vel_ataq)*($total_bonif_arm/100))+0;

$bon_vel_mov=($agi_perso/4)+($res_perso/4);
$desc_vel_mov=($fuer_perso/4)+($inte_perso/4)+($des_perso/4);
$total_bon_vel_mov=round($bon_vel_mov-$desc_vel_mov)+0;
$total_bon_vel_mov_por_arm=round(($vel_mov_perso+$total_bon_vel_mov)*($total_bonif_arm/100))+0;

$vid_con_bon=round($vid_perso+$total_bon_vid+$total_bon_vid+$total_bon_vid_por_arm+$bon_vid_dios)+0;
if($vid_con_bon < 1){$vid_perso_con_bon=1;}else{$vid_perso_con_bon=round($vid_perso+$total_bon_vid+$total_bon_vid_por_arm+$bon_vid_dios)+0;}
$cosm_con_bon=round($cosm_perso+$total_bon_cosm+$total_bon_vid+$total_bon_cosm_por_arm+$bon_cosm_dios)+0;
if($cosm_con_bon < 1){$cosm_perso_con_bon=1;}else{$cosm_perso_con_bon=round($cosm_perso+$total_bon_cosm+$total_bon_cosm_por_arm+$bon_cosm_dios)+0;}

echo '<table border="1" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td style="background-image:url(img/juego/dioses/'.$n_dios.'.png);background-position:bottom; background-repeat:no-repeat; vertical-align:bottom;" width="350" height="600"><img src="img/juego/personajes/'.$skin_perso.'.png" width="250" height="500"></td>
    <td width="550">
	<table style="text-align:center" bgcolor="#000000" width="100%">
     <tr>
    <td rowspan="4"><font color="#FFFFFF" size="+2"><b>'.$n_perso.'</b></font><br><br><font color="#CCCCCC" size="+1"><b>Signo : </b><b style="color:#FFFFFF;">'.$sig_perso.'</b></font><br><font color="#CCCCCC" size="+1"><b>Sexo : </b><b style="color:#FFFFFF;">'.$sex_perso.'</b></font><br></td>
  </tr>
    <tr>
     <td colspan="4" align="center">
	 <font color="#CCCCCC" size="+1"><b>Nivel : </b><b style="color:#FFFFFF;">'.$nivel_perso.'</b></font>
	 <div style="background-image:url(img/juego/barra_base.png); background-repeat:repeat-x; width:200px; height:10px"><img align="left" style="background-color:#FFFFFF; margin-top: 2px; width:'.(($exp_perso*100)/$exp_final_perso).'%; height:8px;"></div><font color="#CCCCCC" size="+1"><b>Experiencia : <b style="color:#FFFFFF;">'.$exp_perso.'</b> / '.$exp_final_perso.'</b></font></td>
	 </tr>
	  <tr>
     <td colspan="4" align="center"><div style="background-image:url(img/juego/barra_base.png); background-repeat:repeat-x; width:200px; height:10px"><img align="left" style="background-color:#FFFFFF; margin-top: 2px; width:'.(($vid_actu_perso*100)/$vid_perso_con_bon).'%; height:8px;"></div><font color="#CCCCCC" size="+1"><b>Vida : <b style="color:#FFFFFF;">'.$vid_actu_perso.'</b> / '.$vid_perso_con_bon.'</b></font></td>
	 </tr>
	  <tr>
     <td colspan="4" align="center"><div style="background-image:url(img/juego/barra_base.png); background-repeat:repeat-x; width:200px; height:10px"><img align="left" style="background-color:#0000FF; margin-top: 2px; width:'.(($cosm_actu_perso*100)/$cosm_perso_con_bon).'%; height:8px;"></div><font color="#CCCCCC" size="+1"><b>Cosmo : <b style="color:#FFFFFF;">'.$cosm_actu_perso.'</b> / '.$cosm_perso_con_bon.'</b></font></td>
   </tr>
   <tr>
   <td colspan="5" align="center"><hr><div align="left" style="color:#CCCCCC;"><font size="+1" style="margin-left: 5%"><b>Clan : </b><b style="color:#FFFFFF;">'.$n_clan.'</b></font><font size="+1" style="margin-left: 25%"><b> Rango : </b><b style="color:#FFFFFF;">'.$rango_clan.'</b></font></div><hr><font size="+2" color="#FFFFFF"><b>'.$n_arm.'</b></font><br><font color="#CCCCCC" size="+1"><b>Estado de la armadura al </b></font><font size="+2" style="color:#FFFFFF;"><b>'.$esta_arm.'%</b></font>
</td>
   </tr>
      <tr>
	  <td colspan="3" align="right"><font color="#CCCCCC" size="+1"><b>Bonif. armadura por el signo :</b></font></td>
	   <td colspan="2" align="left"><font size="+2" style="color:#FFFFFF;"><b>'.$bonif_arm.'%</b></font></td>
  </tr>
   <tr style="color:#CCCCCC;">
     <td align="right"><font size="+1"><b>Caracteristicas :</font></b></td>
     <td width="70"><font size="+1"><b>Puntos</b></font></td>
     <td width="80"><font size="+1"><b>+ Bonif.</b></font></td>
     <td width="80"><font size="+1"><b>+ Arm.</b></font></td>
     <td width="80"><font size="+1"><b>+ Dios</b></font></td>
   </tr>
   <tr>
     <td align="right" style="color:#CCCCCC;"><font size="+1"><b>Vida : </b></font></td>
     <td><font size="+2">'.$vid_perso.'</font></td>
     <td>';
if($total_bon_vid >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $total_bon_vid.'</font></td>
     <td>';
if($total_bon_vid_por_arm >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $total_bon_vid_por_arm.'</td>
	 <td>';
if($bon_vid_dios >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $bon_vid_dios.'</td>
   </tr>
   <tr>
     <td align="right" style="color:#CCCCCC;"><font size="+1"><b>Cosmo : </b></font></td>
     <td><font size="+2">'.$cosm_perso.'</font></td>
     <td>';
if($total_bon_cosm >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $total_bon_cosm.'</td>
     <td>';
if($total_bon_cosm_por_arm >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $total_bon_cosm_por_arm.'</td>
	 <td>';
if($bon_cosm_dios >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $bon_cosm_dios.'</td>
   </tr>
  <tr>
    <td align="right" style="color:#CCCCCC;"><font size="+1"><b>Fuerza : </b></font></td>
    <td><font size="+2">'.$fuer_perso.'</font></td>
    <td>';
if($total_bon_fuer >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $total_bon_fuer.'</td>
    <td>';
if($total_bon_fuer_por_arm >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $total_bon_fuer_por_arm.'</td>
	<td>';
if($bon_fuer_dios >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $bon_fuer_dios.'</td>
  </tr>
  <tr>
    <td align="right" style="color:#CCCCCC;"><font size="+1"><b>Inteligencia : </b></font></td>
    <td><font size="+2">'.$inte_perso.'</font></td>
    <td>';
if($total_bon_inte >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';};
echo $total_bon_inte.'</td>
    <td>';
if($total_bon_inte_por_arm >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $total_bon_inte_por_arm.'</td>
	<td>';
if($bon_inte_dios >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $bon_inte_dios.'</td>
  </tr>
  <tr>
    <td align="right" style="color:#CCCCCC;"><font size="+1"><b>Destresa : </b></font></td>
    <td><font size="+2">'.$des_perso.'</font></td>
    <td>';
if($total_bon_des >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $total_bon_des.'</td>
    <td>';
if($total_bon_des_por_arm >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $total_bon_des_por_arm.'</td>
	<td>';
if($bon_des_dios >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $bon_des_dios.'</td>
  </tr>
    <tr>
    <td align="right" style="color:#CCCCCC;"><font size="+1"><b>Agilidad : </b></font></td>
    <td><font size="+2">'.$agi_perso.'</font></td>
    <td>';
if($total_bon_agi >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $total_bon_agi.'</td>
    <td>';
if($total_bon_agi_por_arm >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $total_bon_agi_por_arm.'</td>
	<td>';
if($bon_agi_dios >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $bon_agi_dios.'</td>
  </tr>
  <tr>
    <td align="right" style="color:#CCCCCC;"><font size="+1"><b>Resistencia : </b></font></td>
    <td><font size="+2">'.$res_perso.'</font></td>
    <td>';
if($total_bon_res >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $total_bon_res.'</td>
    <td>';
if($total_bon_res_por_arm >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $total_bon_res_por_arm.'</td>
	<td>';
if($bon_res_dios >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $bon_res_dios.'</td>
  </tr>
  <tr>
    <td align="right" style="color:#CCCCCC;"><font size="+1"><b>Vel. de Ataque : </b></font></td>
    <td><font size="+2">'.$vel_ataq_perso.'</font></td>
    <td>';
if($total_bon_vel_ataq >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $total_bon_vel_ataq.'</td>
    <td>';
if($total_bon_vel_ataq_por_arm >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $total_bon_vel_ataq_por_arm.'</td>
	<td>';
if($bon_vel_ataq_dios >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $bon_vel_ataq_dios.'</td>	
    </tr>
  <tr>
    <td align="right" style="color:#CCCCCC;"><font size="+1"><b>Vel. de Movimiento : </b></font></td>
    <td><font size="+2">'.$vel_mov_perso.'</font></td>
    <td>';
if($total_bon_vel_mov >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $total_bon_vel_mov.'</td>
    <td>';
if($total_bon_vel_mov_por_arm >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $total_bon_vel_mov_por_arm.'</td>
	<td>';
if($bon_vel_mov_dios >=0){echo '<font color="#0000FF" size="+2">';}else{echo '<font color="#FF0000" size="+2">';}
echo $bon_vel_mov_dios.'</td>
  </tr>
     <tr>
      <td colspan="5" align="right"><hr></td>
  </tr>
  <tr>
    <td rowspan="3">';
$fuer_perso_con_bon=$fuer_perso+$total_bon_fuer+$total_bon_fuer_por_arm+$bon_fuer_dios;
$inte_perso_con_bon=$inte_perso+$total_bon_inte+$total_bon_inte_por_arm+$bon_inte_dios;
$des_perso_con_bon=$des_perso+$total_bon_des+$total_bon_des_por_arm+$bon_des_dios;
$agi_perso_con_bon=$agi_perso+$total_bon_agi+$total_bon_agi_por_arm+$bon_agi_dios;
$res_perso_con_bon=$res_perso+$total_bon_res+$total_bon_res_por_arm+$bon_res_dios;
$tipo_perso=tipo_perso($fuer_perso_con_bon, $inte_perso_con_bon);
switch ($tipo_perso){
case ($tipo_perso=="Fisico"):
echo '<font color="#FF0000" size="+2"><b>Fisico</b></font>';
if ($des_perso_con_bon < 0){$final_des=$des_perso_con_bon+($des_perso_con_bon/2);}else{$final_des=$des_perso_con_bon/2;}
$maxi_de_ataq=round($fuer_perso_con_bon+$final_des);
$mini_de_ataq=round($fuer_perso_con_bon-$final_des);
if($mini_de_ataq > $maxi_de_ataq){$max_de_ataq=$maxi_de_ataq;
$min_de_ataq=$maxi_de_ataq;}else{$max_de_ataq=$maxi_de_ataq;
$min_de_ataq=$mini_de_ataq;}
$maxi_de_def=round($res_perso_con_bon+$final_des);
$mini_de_def=round($res_perso_con_bon-$final_des);
if($mini_de_def > $maxi_de_def){ $max_de_def=$maxi_de_def;
$min_de_def=$maxi_de_def;}else{$max_de_def=$maxi_de_def;
$min_de_def=$mini_de_def;}
$maxi_de_esq=round($agi_perso_con_bon+$final_des);
$mini_de_esq=round($agi_perso_con_bon-$final_des);
if($mini_de_esq > $maxi_de_esq){ $max_de_esq=$maxi_de_esq;
$min_de_esq=$maxi_de_esq;}else{$max_de_esq=$maxi_de_esq;
$min_de_esq=$mini_de_esq;}
break;
case ($tipo_perso=="Fisico-Hibrido"):
echo '<font color="#FFFF00" size="+2"><b>Fisico-Hibrido</b></font>';
if ($des_perso_con_bon < 0){$final_des=$des_perso_con_bon+($des_perso_con_bon/2);}else{$final_des=$des_perso_con_bon/2;}
$maxi_de_ataq=round($fuer_perso_con_bon-$inte_perso_con_bon/2+$final_des);
$mini_de_ataq=round($fuer_perso_con_bon-$final_des);
if($mini_de_ataq > $maxi_de_ataq){ $max_de_ataq=$maxi_de_ataq;
$min_de_ataq=$maxi_de_ataq;}else{$max_de_ataq=$maxi_de_ataq;
$min_de_ataq=$mini_de_ataq;}
$maxi_de_def=round($res_perso_con_bon+$final_des);
$mini_de_def=round($res_perso_con_bon-$final_des);
if($mini_de_def > $maxi_de_def){ $max_de_def=$maxi_de_def;
$min_de_def=$maxi_de_def;}else{$max_de_def=$maxi_de_def;
$min_de_def=$mini_de_def;}
$maxi_de_esq=round($agi_perso_con_bon+$final_des);
$mini_de_esq=round($agi_perso_con_bon-$final_des);
if($mini_de_esq > $maxi_de_esq){ $max_de_esq=$maxi_de_esq;
$min_de_esq=$maxi_de_esq;}else{$max_de_esq=$maxi_de_esq;
$min_de_esq=$mini_de_esq;}
break;
case ($tipo_perso=="Hibrido"):
echo '<font color="#00FF00" size="+2"><b>Hibrido</b></font>';
if ($des_perso_con_bon < 0){$final_des=$des_perso_con_bon+($des_perso_con_bon/2);}else{$final_des=$des_perso_con_bon/2;}
$maxi_de_ataq=round($fuer_perso_con_bon+$inte_perso_con_bon+$final_des);
$mini_de_ataq=round($fuer_perso_con_bon+$inte_perso_con_bon-$final_des);
if($mini_de_ataq > $maxi_de_ataq){ $max_de_ataq=$maxi_de_ataq;
$min_de_ataq=$maxi_de_ataq;}else{$max_de_ataq=$maxi_de_ataq;
$min_de_ataq=$mini_de_ataq;}
$maxi_de_def=round($res_perso_con_bon+$final_des);
$mini_de_def=round($res_perso_con_bon-$final_des);
if($mini_de_def > $maxi_de_def){ $max_de_def=$maxi_de_def;
$min_de_def=$maxi_de_def;}else{$max_de_def=$maxi_de_def;
$min_de_def=$mini_de_def;}
$maxi_de_esq=round($agi_perso_con_bon+$final_des);
$mini_de_esq=round($agi_perso_con_bon-$final_des);
if($mini_de_esq > $maxi_de_esq){$max_de_esq=$maxi_de_esq;
$min_de_esq=$maxi_de_esq;}else{$max_de_esq=$maxi_de_esq;
$min_de_esq=$mini_de_esq;}
break;
case ($tipo_perso=="Cosmico-Hibrido"):
echo '<font color="#00FFFF" size="+2"><b>Cosmico-Hibrido</b></font>';
if ($des_perso_con_bon < 0){$final_des=$des_perso_con_bon+($des_perso_con_bon/2);}else{$final_des=$des_perso_con_bon/2;}
$maxi_de_ataq=round($inte_perso_con_bon-$fuer_perso_con_bon/2+$final_des);
$mini_de_ataq=round($inte_perso_con_bon-$final_des);
if($mini_de_ataq > $maxi_de_ataq){ $max_de_ataq=$maxi_de_ataq;
$min_de_ataq=$maxi_de_ataq;}else{$max_de_ataq=$maxi_de_ataq;
$min_de_ataq=$mini_de_ataq;}
$maxi_de_def=round($res_perso_con_bon+$final_des);
$mini_de_def=round($res_perso_con_bon-$final_des);
if($mini_de_def > $maxi_de_def){ $max_de_def=$maxi_de_def;
$min_de_def=$maxi_de_def;}else{$max_de_def=$maxi_de_def;
$min_de_def=$mini_de_def;}
$maxi_de_esq=round($agi_perso_con_bon+$final_des);
$mini_de_esq=round($agi_perso_con_bon-$final_des);
if($mini_de_esq > $maxi_de_esq){ $max_de_esq=$maxi_de_esq;
$min_de_esq=$maxi_de_esq;}else{$max_de_esq=$maxi_de_esq;
$min_de_esq=$mini_de_esq;}
break;
case ($tipo_perso=="Cosmico"):
echo '<font color="#0000FF" size="+2"><b>Cosmico</b></font>';
if ($des_perso_con_bon < 0){$final_des=$des_perso_con_bon+($des_perso_con_bon/2);}else{$final_des=$des_perso_con_bon/2;}
$maxi_de_ataq=round($inte_perso_con_bon+$final_des);
$mini_de_ataq=round($inte_perso_con_bon-$final_des);
if($mini_de_ataq > $maxi_de_ataq){ $max_de_ataq=$maxi_de_ataq;
$min_de_ataq=$maxi_de_ataq;}else{$max_de_ataq=$maxi_de_ataq;
$min_de_ataq=$mini_de_ataq;}
$maxi_de_def=round($res_perso_con_bon+$final_des);
$mini_de_def=round($res_perso_con_bon-$final_des);
if($mini_de_def > $maxi_de_def){ $max_de_def=$maxi_de_def;
$min_de_def=$maxi_de_def;}else{$max_de_def=$maxi_de_def;
$min_de_def=$mini_de_def;}
$maxi_de_esq=round($agi_perso_con_bon+$final_des);
$mini_de_esq=round($agi_perso_con_bon-$final_des);
if($mini_de_esq > $maxi_de_esq){ $max_de_esq=$maxi_de_esq;
$min_de_esq=$maxi_de_esq;}else{$max_de_esq=$maxi_de_esq;
$min_de_esq=$mini_de_esq;}
break;
}
echo '</td>
    <td colspan="2" align="right" style="color:#CCCCCC;"><font size="+1"><b>Prom. de Ataque :</b></font></td>
    <td colspan="2"><font size="+2">'.$min_de_ataq.' ~ '.$max_de_ataq.'</font></td>
  </tr>
  <tr>
    <td colspan="2" align="right" style="color:#CCCCCC;"><font size="+1"><b>Prom. de Defenza :</b></font></td>
    <td colspan="2"><font size="+2">'.$min_de_def.' ~ '.$max_de_def.'</font></td>
  </tr>
  <tr>
    <td colspan="2" align="right" style="color:#CCCCCC;"><font size="+1"><b>Prom. de Esquivo :</b></font></td>
    <td colspan="2"><font size="+2">'.$min_de_esq.' ~ '.$max_de_esq.'</font></td>
  </tr>
</table>
	</td>
  </tr>
  <tr>
    <td colspan="2">Presentacion :<br><br>'.$pres_perso.'</td>
  </tr>
</table>';


}else{echo '<h1>'.traductor($id_idioma , "error no perso").'</h1>';}}
echo '</body></html>';
}else{echo'<meta http-equiv="refresh" content="0; url='.configini('url').'">';
}
?>