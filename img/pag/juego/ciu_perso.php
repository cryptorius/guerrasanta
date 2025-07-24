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
echo '<h1>La Ciudad en la que esta tu Personaje</h1><hr>';
$ubi_perso=datos::personaje($_SESSION['id_usuario'], $_SESSION['num_perso'], "ubi_ciu_perso");
$zona_perso=datos::personaje($_SESSION['id_usuario'], $_SESSION['num_perso'], "zona_perso");
$ciu_dato=orden_ciudad($zona_perso);
$ciu_opc=explode("-", $ciu_dato['orden']);
$ciu_opc_alt=explode("-", $ciu_dato['alt_ciu']);
$ciu_opc_link=explode("-", $ciu_dato['link_ciu']);
if($ubi_perso==0){echo $ciu_opc[0].'<br>º_º';}
echo '<table border="0" cellspacing="0" cellpadding="0" width="390px" align="center"  style="color:#000000">
  <tr>
    <td width="24px" height="24px" background="../../img/juego/calle_4_esq.jpg"></td>
    <td width="95px" height="24px" background="../../img/juego/calle_hori.jpg"></td>
    <td width="24px" height="24px" background="../../img/juego/calle_4_esq.jpg"></td>
    <td width="95px" height="24px" background="../../img/juego/calle_hori.jpg"></td>
    <td width="24px" height="24px" background="../../img/juego/calle_4_esq.jpg"></td>
    <td width="95px" height="24px" background="../../img/juego/calle_hori.jpg"></td>
    <td width="24px" height="24px" background="../../img/juego/calle_4_esq.jpg"></td>
  </tr>
  <tr>
    <td width="24px" height="95px" background="../../img/juego/calle_vert.jpg"></td>
    <td width="95px" height="95px" background="../../img/juego/edi_base.png"><a href="javascript:ajaxpage(\''.$ciu_opc_link[1].'\', \'contenido\');" title="'.$ciu_opc_alt[1].'">'.$ciu_opc[1].'</a>';
	if($ubi_perso==1){echo '<br>º_º';}
	echo '</td>
    <td width="24px" height="95px" background="../../img/juego/calle_vert.jpg"></td>
    <td width="95px" height="95px" background="../../img/juego/edi_base.png"><a href="javascript:ajaxpage(\''.$ciu_opc_link[2].'\', \'contenido\');" title="'.$ciu_opc_alt[2].'">'.$ciu_opc[2].'</a>';
	if($ubi_perso==2){echo '<br>º_º';}
	echo '</td>
    <td width="24px" height="95px" background="../../img/juego/calle_vert.jpg"></td>
    <td width="95px" height="95px" background="../../img/juego/edi_base.png"><a href="javascript:ajaxpage(\''.$ciu_opc_link[3].'\', \'contenido\');" title="'.$ciu_opc_alt[3].'">'.$ciu_opc[3].'</a>';
	if($ubi_perso==3){echo '<br>º_º';}
	echo '</td>
    <td width="24px" height="95px" background="../../img/juego/calle_vert.jpg"></td>
  </tr>
    <tr>
    <td width="24px" height="24px" background="../../img/juego/calle_4_esq.jpg"></td>
    <td width="95px" height="24px" background="../../img/juego/calle_hori.jpg"></td>
    <td width="24px" height="24px" background="../../img/juego/calle_4_esq.jpg"></td>
    <td width="95px" height="24px" background="../../img/juego/calle_hori.jpg"></td>
    <td width="24px" height="24px" background="../../img/juego/calle_4_esq.jpg"></td>
    <td width="95px" height="24px" background="../../img/juego/calle_hori.jpg"></td>
    <td width="24px" height="24px" background="../../img/juego/calle_4_esq.jpg"></td>
  </tr>
  <tr>
    <td width="24px" height="95px" background="../../img/juego/calle_vert.jpg"></td>
    <td width="95px" height="95px" background="../../img/juego/edi_base.png"><a href="javascript:ajaxpage(\''.$ciu_opc_link[4].'\', \'contenido\');" title="'.$ciu_opc_alt[4].'">'.$ciu_opc[4].'</a>';
	if($ubi_perso==4){echo '<br>º_º';}
	echo '</td>
    <td width="24px" height="95px" background="../../img/juego/calle_vert.jpg"></td>
    <td width="95px" height="95px" background="../../img/juego/edi_base.png"><a href="javascript:ajaxpage(\''.$ciu_opc_link[5].'\', \'contenido\');" title="'.$ciu_opc_alt[5].'">'.$ciu_opc[5].'</a>';
	if($ubi_perso==5){echo '<br>º_º';}
	echo '</td>
    <td width="24px" height="95px" background="../../img/juego/calle_vert.jpg"></td>
    <td width="95px" height="95px" background="../../img/juego/edi_base.png"><a href="javascript:ajaxpage(\''.$ciu_opc_link[6].'\', \'contenido\');" title="'.$ciu_opc_alt[6].'">'.$ciu_opc[6].'</a>';
	if($ubi_perso==6){echo '<br>º_º';}
	echo '</td>
    <td width="24px" height="95px" background="../../img/juego/calle_vert.jpg"></td>
  </tr>
  <tr>
    <td width="24px" height="24px" background="../../img/juego/calle_4_esq.jpg"></td>
    <td width="95px" height="24px" background="../../img/juego/calle_hori.jpg"></td>
    <td width="24px" height="24px" background="../../img/juego/calle_4_esq.jpg"></td>
    <td width="95px" height="24px" background="../../img/juego/calle_hori.jpg"></td>
    <td width="24px" height="24px" background="../../img/juego/calle_4_esq.jpg"></td>
    <td width="95px" height="24px" background="../../img/juego/calle_hori.jpg"></td>
    <td width="24px" height="24px" background="../../img/juego/calle_4_esq.jpg"></td>
  </tr>
  <tr>
    <td width="24px" height="95px" background="../../img/juego/calle_vert.jpg"></td>
    <td width="95px" height="95px" background="../../img/juego/edi_base.png"><a href="javascript:ajaxpage(\''.$ciu_opc_link[7].'\', \'contenido\');" title="'.$ciu_opc_alt[7].'">'.$ciu_opc[7].'</a>';
	if($ubi_perso==7){echo '<br>º_º';}
	echo '</td>
    <td width="24px" height="95px" background="../../img/juego/calle_vert.jpg"></td>
    <td width="95px" height="95px" background="../../img/juego/edi_base.png"><a href="javascript:ajaxpage(\''.$ciu_opc_link[8].'\', \'contenido\');" title="'.$ciu_opc_alt[8].'">'.$ciu_opc[8].'</a>';
	if($ubi_perso==8){echo '<br>º_º';}
	echo '</td>
    <td width="24px" height="95px" background="../../img/juego/calle_vert.jpg"></td>
    <td width="95px" height="95px" background="../../img/juego/edi_base.png"><a href="javascript:ajaxpage(\''.$ciu_opc_link[9].'\', \'contenido\');" title="'.$ciu_opc_alt[9].'">'.$ciu_opc[9].'</a>';
	if($ubi_perso==9){echo '<br>º_º';}
	echo '</td>
    <td width="24px" height="95px" background="../../img/juego/calle_vert.jpg"></td>
  </tr>
  <tr>
    <td width="24px" height="24px" background="../../img/juego/calle_4_esq.jpg"></td>
    <td width="95px" height="24px" background="../../img/juego/calle_hori.jpg"></td>
    <td width="24px" height="24px" background="../../img/juego/calle_4_esq.jpg"></td>
    <td width="95px" height="24px" background="../../img/juego/calle_hori.jpg"></td>
    <td width="24px" height="24px" background="../../img/juego/calle_4_esq.jpg"></td>
    <td width="95px" height="24px" background="../../img/juego/calle_hori.jpg"></td>
    <td width="24px" height="24px" background="../../img/juego/calle_4_esq.jpg"></td>
  </tr>
</table>';
}else{echo '<h1>'.traductor($id_idioma , "error no perso").'</h1>';}}
echo '</body></html>';
}else{echo'<meta http-equiv="refresh" content="0; url='.configini('url').'">';
}
?>