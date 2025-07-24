<?php
include_once('classconect.php');
include_once('classaccion.php');
// configuraciones iniciales
function configini ($n_conf){
$cons_conf=gamemysql::query("SELECT val_conf FROM config WHERE n_conf='".$n_conf."'"); 
 	 $arr_conf=gamemysql::getArrayassoc($cons_conf);
 	    $v_conf=$arr_conf['val_conf'];
	   		return $v_conf;}

// funcion de la cabezera
function cabesera ($titulo, $estilo){
echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html><head>
<style type="text/css" media="all">
@import url("fonts/fonts.css");
</style>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<meta name="author" content="Cryptorius">
	<title>'.$titulo.'</title>
	<link href="estilo.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="lib_ajax.js"></script>
<script type="text/javascript" src="ajax_runtime.js"></script>
</head><body class="'.$estilo.'" >';}

//Funcion del pie de la web
function pie ($id_idioma, $div){echo '<br><br>
/ <b><a href="javascript:ajaxpage(\'pag/reglamento.php\', \'contenedor\');" style="text-size:16px;color:#FFFFFF; text-decoration:none;">Reglamento</a></b> /
<br>
<a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fsavfergame.webcindario.com%2F&profile=css3&usermedium=all&warning=2"><img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="¡CSS Válido!"></a>
<font style="background-color:#000000">Copyright &copy; 2009 - '.date("Y").' <a href="http://'.configini('urlcreador').'" target="_parent">'.configini('urlcreador').'</a>,<br> '.traductor($id_idioma, "hecho").' de '.configini('creador').', '.traductor($id_idioma, "derechos").'</font><br>
<br>
<!-- http://contadores.miarroba.com  -->
<script type="text/javascript" src="http://contadores.miarroba.com/ver.php?id=608563"></script>
<!-- http://contadores.miarroba.com  --><br>
'.$div;
echo '</body></html>';}

// presentacion del juego
function presgame ($titulo, $id_idioma){
		echo '<div align="center"><table width="1050px" height="200px" border="0" cellspacing="0" cellpadding="0">
  <tr><td background="'.configini('url_img').'logo.gif" class="pres"><b>'.ucwords($titulo).'</b></td><td width="200px" height="200px" align="center" ';
  $horaser=date("H");
  if (($horaser < "19") AND ($horaser >= "07")){echo 'background="'.configini('url_img').'dedia.jpg" style="color:#000000" >';}else{echo 'background="'.configini('url_img').'denoche.jpg" style="color:#FFFFFF" >';}
 servertiempo($id_idioma);
 echo '</td></tr></table></div>';
}

// menu inicial
function menu ($id_idioma, $pagina, $acceso){
	$cons_menu=gamemysql::query("SELECT * FROM paginas WHERE acc_pag<='".$acceso."' AND pag_menu='".$pagina."'");
	
	while($datos=gamemysql::getArrayassoc($cons_menu)){
$arr_menu[$datos['secc_menu']][$datos['sub_secc_menu']]=$datos; //Print_r($arr_menu);
}
echo '<div class="menu"><ul>';
foreach ($arr_menu as $key => $value) {
			echo '<li><center>'.traductor($id_idioma , $key).'</center></li>';
			echo '<ul>';
		foreach ($arr_menu[$key] as $key2 => $value2) {
		echo '<li><a href="javascript:ajaxpage(\''.$value2['url_pag'].'\', \'contenido\');" title="'.traductor($id_idioma , ($value2['alt_menu'])).'">'.traductor($id_idioma , $key2).'</a></li>'; }
		echo '</ul>';}
	echo '</ul></div>';
}

//funcion para el orden de los genesis
function genesis (){
	$cons_gene=gamemysql::query("SELECT * FROM genesis ORDER BY id_genesis ASC");
	
	while($datos=gamemysql::getArrayassoc($cons_gene)){
$arr_gene[$datos['id_genesis']]=$datos;//Print_r($arr_gene);
}

echo '<div class="gene">';
foreach ($arr_gene as $key => $value) {
    echo '<div style="color:#ffffff;width: 250px;height: 450px;float: left;text-decoration: none;text-transform:capitalize;padding: 5px 3px 0px;"><h2>Genesis del '.$value['tit_gene'].'</h2>';
    echo '<a href="javascript:ajaxpage(\'pag/gene/'.str_replace(" ","_",$value['tit_gene']).'.php\', \'contenido\');" style="text-decoration: none;text-transform:capitalize;color:#FFFFFF;" ><div align="center"><img src="/img/gene/'.$value['tit_gene'].'_portada.jpg" width="200" height="300" align="middle"></div>';
    echo 'Leer Genesis del '.$value['tit_gene'].'</a><br>'; 
    echo 'Creado por <b>'.$value['autor_gene'].'</b><br></div>';}
echo '</div>';
}
?>