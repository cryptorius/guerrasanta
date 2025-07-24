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
<title>Registración</title>
</head>
<body>
<h2>'.ucfirst(traductor($id_idioma, 'registrate')).'</h2>
<form id="registrarte" action="#">
<table width="500" border="0" align="center">
  <tr><td>'.traductor($id_idioma , 'nom usu').' :</td><td><input name="n_usu" id="n_usu" type="text" value="'.traductor($id_idioma , 'nom usu').'" size="20" maxlength="19"></td></tr>
  <tr><td>'.traductor($id_idioma , 'con usu').' :</td><td><input name="con_usu" id="con_usu" type="password" value="'.traductor($id_idioma , 'con usu').'" size="20" maxlength="19"></td></tr>
  <tr><td>'.traductor($id_idioma , 'veri usu').' :</td><td><input name="ver_con_usu" id="ver_con_usu" type="password" value="'.traductor($id_idioma , 'veri usu').'" size="20" maxlength="19"></td></tr>
  <tr><td>'.traductor($id_idioma , 'fecha naci').' :</td><td>'.traductor($id_idioma , 'dia').' : <input name="dia" id="dia" type="text" size="3" maxlength="2"> '.traductor($id_idioma , 'mes').' : <input name="mes" id="mes" type="text" size="3" maxlength="2"> '.traductor($id_idioma , 'ano').' : <input name="ano" id="ano" type="text" size="5" maxlength="4"></td></tr>
  <tr><td>'.traductor($id_idioma , 'sexo').' :</td><td><select id="sexo" name="sexo">
<option value="1">'.traductor($id_idioma , 'femenino').'</option>
<option value="2">'.traductor($id_idioma , 'masculino').'</option>
</select></td></tr>
  <tr><td>'.traductor($id_idioma , 'correo').' :</td><td><input name="email" id="email" type="text" value="Correo electronico" size="30" maxlength="29"></td></tr>
 </table>
 <br>
'.traductor($id_idioma , 'conduc usu').'.
 <br>
  <input type="button" value="'.traductor($id_idioma , 'aceptar').'" onclick="enviarFormulario(\'pag/reg_usu.php\',\'registrarte\', \'contenido\');"/>
</form>
'.traductor($id_idioma , 'no lee reg').', <a href="javascript:ajaxpage(\'pag/reglamento.php\', \'contenedor\');" style="color:#FFFFFF; text-decoration:none;">'.traductor($id_idioma , 'aqui').'</a>
 <hr>
</body>
</html>';
}else{echo'<meta http-equiv="refresh" content="0; url='.configini('url').'">';
}
?>
