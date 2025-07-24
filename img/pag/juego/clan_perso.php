<?php
include ('../../classes/classpag.php');
$id_idioma = configini('id_idioma');
if (isset($_SERVER['HTTP_REFERER'])){$pag=$_SERVER['HTTP_REFERER'];}else{$pag="";} 
$url_base = configini('url');
if($pag==$url_base){
session_start();
header('Content-type: text/html; charset=iso-8859-1');
echo '<html><head><meta name="author" content="Cryptorius"><title>Clan</title></head><body>';
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
echo '<h1>'.traductor($id_idioma , "tit Clan").'</h1><hr>';
echo '<div style="background-color:#000000;">';
$clan_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'], "clan_perso");
if ($clan_perso==0){echo '<h1>'.traductor($id_idioma , "error no clan").'</h1>';}else{
$n_clan=datos::clan($clan_perso, "n_clan");
$pres_clan=datos::clan($clan_perso, "pres_clan");
$clan=clanlist($clan_perso);
echo '<table align="center" border="0" cellspacing="0" cellpadding="0">';
echo '<tr><td valign="top">';
echo '<table align="center" border="0" cellspacing="0" cellpadding="0">';
echo '<tr><td style="background-image: url(img/juego/clan_rango_arriba.png);background-repeat:no-repeat; background-position:center; background-position:top;" width="400px" height="50px"></td></tr>';
echo '<tr><td style="background-image: url(img/juego/clan_rango_centro.png);background-repeat:repeat-y; background-position:center; background-position:top;"><h2><b>'.$n_clan.'</b></h2><hr width="250px"><p align="left" style=" margin-right: 60px; margin-left: 45px;"><img src="usu_img/logoclanes/clan_'.$n_clan.'.jpg" width="150" height="150" style="float:left; margin-right: 15px;">'.$pres_clan.'</p></td></tr>';
echo '<tr><td style="background-image: url(img/juego/clan_rango_abajo.png);background-repeat:no-repeat; background-position:center; background-position:top;" width="400px" height="50px"></td></tr>';
echo '</table></td><td>';
echo '<table align="center" border="0" cellspacing="0" cellpadding="0">';
echo '<tr><td colspan="4" align="center" style="background-image: url(img/juego/clan_rango_arriba.png);background-repeat:no-repeat; background-position:center; background-position:top;" width="400px" height="50px"></td></tr>';
echo '<tr><td style="background-image: url(img/juego/clan_rango_centro.png); background-repeat:repeat-y; background-position:center;">';
echo '<table border="0" align="center" width="300px">';
echo '<tr><td colspan="4" align="center" style="background-color:#CCCCCC; font-size:20px; color:#FFFFFF; height:30px;"><b>RANGOS del CLAN</b></td></tr>';
foreach ($clan['rangos'] as $key => $value){
if(empty($value)==false){
echo '<tr><td colspan="4" align="center" style="background-color:#AAAAAA; font-size:20px; color:#FFFFFF;"><b>'.$value.'</b></td></tr>';}
foreach ($clan['mien'] as $key2 => $value2){
if ($value2==$value){
echo '<tr><td colspan="2"><b>'.$key2.'</b></td><td><i>';
$cons_id_perso=gamemysql::getArrayassoc(gamemysql::query("SELECT id_personaje_usu FROM usu_personajes WHERE n_perso='".$key2."'"));
actividad($cons_id_perso['id_personaje_usu']);
echo '</i></td><td><i>Acciones</i><br>
<a href="javascript:ajaxpage(\'pag/juego/espi_perso.php\', \'contenido\');" title="Espiar"><img src="img/juego/bottom_espiar.gif" width="33" height="25" border="3" style="margin: 2px; color:#000000;"></a>
<a href="javascript:ajaxpage(\'pag/juego/lucha_perso.php\', \'contenido\');" title="Luchar"><img src="img/juego/bottom_luchar.gif" width="33" height="25" border="3" style="margin: 2px; color:#000000;"></a><br>
<a href="javascript:ajaxpage(\'pag/juego/mens_priv_perso.php\', \'contenido\');" title="Enviar mensaje"><img src="img/juego/bottom_mensaje_priv.gif" width="33" height="25" border="3" style="margin: 2px; color:#000000;"></a>
<a href="javascript:ajaxpage(\'pag/juego/obje_priv_perso.php\', \'contenido\');" title="Enviar objeto"><img src="img/juego/bottom_objeto.gif" width="33" height="25" border="3" style="margin: 2px; color:#000000;"></a>
</td></tr>';}
}
}
echo '</table><hr width="250px">';
echo '<table border="0" align="center" width="300px">';
echo '<tr><td colspan="4" align="center" style="background-color:#CCCCCC; font-size:20px; color:#FFFFFF; height:30px;"><b>ESPERANDO RANGO :</b></td></tr>';
foreach ($clan['mien'] as $key3 => $value3){
if ($value3=="Esperando Rango"){
$cons_id_perso=gamemysql::getArrayassoc(gamemysql::query("SELECT id_personaje_usu FROM usu_personajes WHERE n_perso='".$key3."'"));
echo '<tr><td colspan="2" align="center"><b>'.$key3.'</b></td>';
echo '<td colspan="2" align="center"><b>';
actividad($cons_id_perso['id_personaje_usu']);
echo '</b></td></tr>';
}
}
echo '</table>';
echo '<tr><td colspan="4" align="center" style="background-image: url(img/juego/clan_rango_abajo.png);background-repeat:no-repeat; background-position:center; background-position:bottom;" width="400px" height="50px"></td></tr>';
echo '</table>';}
echo '</td></tr></table>';

$clan_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'], "clan_perso");
if ($clan_perso!=0){
$n_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'], "n_perso");
$rango_person=$clan['mien'][$n_perso];
echo '<hr>';
$id_usu=datos::cuenta($_SESSION['id_usuario'], "id_usuario");
$id_perso=datos::personaje($_SESSION['id_usuario'],$_SESSION['num_perso'], "id_personaje_usu");
$id_usu_creador=datos::clan($clan_perso, "id_usu");
$id_perso_creador=datos::clan($clan_perso, "id_perso");
if (($id_usu==$id_usu_creador) and ($id_perso==$id_perso_creador)){echo '<h2>Como Creador usted puede:</h2>';}else{
if (isset($clan['accesos'][$n_perso]) || isset($clan['accesos'][$rango_person])){
echo '<h1>'.traductor($id_idioma , "tit acc clan").'</h1><hr width="250">';
echo '<div align="left">';
if (isset($clan['accesos'][$rango_person])){echo '<h2>'.traductor($id_idioma , "tit acc rango clan").'</h2><hr>';
accesoclan($clan['accesos'][$rango_person]);
}
if (isset($clan['accesos'][$n_perso])){echo '<h2>'.traductor($id_idioma , "tit acc nom clan").'</h2><hr>';
accesoclan($clan['accesos'][$n_perso]);
}
echo '</div>';

}else{echo '<div align="left"><b>'.datos::clan($clan_perso, "ani_clan").'</b></div><hr>';}}

}
echo '</div>';
}else{echo '<h1>'.traductor($id_idioma , "error no perso").'</h1>';}}
echo '</body></html>';
}else{echo'<meta http-equiv="refresh" content="0; url='.configini('url').'">';
}
?>