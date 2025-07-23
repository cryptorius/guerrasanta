<?php
include('classes/classpag.php');
session_start();
session_destroy();
$id_idioma = configini('id_idioma');
$nombredeljuego = traductor($id_idioma , 'n_juego');
cabesera ($nombredeljuego, "index");
presgame ($nombredeljuego, $id_idioma);
echo '<div align="center"><div id="contenedor" style="float:none;width:1050px;"><div style="float:left;">';
$acceso=0;
   menu ($id_idioma,"index",$acceso);
  echo '</div>
    <div id="contenido" style="float:right; width:82%; text-align:center; margin-top: 20px;">';
	include('noticias.php');
echo '</div></div></div>';
echo '<div class="pie">';
pie ($id_idioma, "</div>"); 
?>
 