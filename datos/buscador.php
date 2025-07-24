<?php
include ("../classes/classpag.php");
cabesera ("Buscador", "Buscador");
$sql="SELECT COUNT(*) FROM enemigos"; 
$consulta=mysql_query($sql);
$rcount=mysql_result($consulta,0);
$sql2="SELECT COUNT(*) FROM armaduras"; 
$consulta2=mysql_query($sql2);
$rcount2=mysql_result($consulta2,0);
$sql3="SELECT COUNT(*) FROM habilidades"; 
$consulta3=mysql_query($sql3);
$rcount3=mysql_result($consulta3,0);
$sql4="SELECT COUNT(*) FROM zonas"; 
$consulta4=mysql_query($sql4);
$rcount4=mysql_result($consulta4,0);
echo 'Hasta el momento tenemos : '.$rcount.' Enemigos, '.$rcount2.' de Armaduras, '.$rcount3.' de Habilidades, y '.$rcount4.' Zonas' ;
?>
<table width="100%" border="3" cellspacing="0" cellpadding="0">
  <tr>
    <td width="33%"><?php 
		if(!isset($_get['zona'])){?><div align="center"><form action="../pag/pag/resultados.php" method="get" name="zona" target="resultado">
Selecione la Zona de la lista: <br>
<select name="zona" size="auto" maxlength="18">
<option value="">Seleccione una Zona</option>
<?php 
$cons_zona=gamemysql::query("SELECT * FROM zonas ORDER BY n_zona ASC");
while($datos1=gamemysql::getArray($cons_zona)){
$arr_zona[$datos1['id_zona']]=$datos1['n_zona'];
}
 foreach($arr_zona as $key => $value){
echo '<option value="'.$key.'">'.utf8_encode($value).'</option>';}
?>
</select><input name="botton" onclick="javascript:ajaxpage('pag/resultados.php', \'resultados\');" value="<- Haya voy!!"></form>
<form action="../pag/pag/resultados.php" method="get" name="zona" target="resultado">
o Escriba el nombre de la Zona :<br><input name="zona" type="text" value="Escriba una Zona" size="23" maxlength="22">
<input name="botton" value="Llegare aca?" type="submit">
    </form></div>
<?php }
?></td>
<td width="33%"><?php 
if(!isset($_GET['nivel']) or !isset($_GET['nivel1'])){?>
<div align="center">
<form action="../pag/pag/resultados.php" method="get" name="nivel1" target="resultado">
Selecione un nivel de la lista: <br>
<select name="nivel1" size="auto">
<option value="">Selecione un Nivel</option>
<?php 
$consulta=gamemysql::query("SELECT  MAX(nivel_ene) FROM enemigos"); 
$arr_const=gamemysql::getArray($consulta);
for ($val = 0; $val <= $arr_const[0]; $val++) {
echo '<option value="'.$val.'">'.$val.'</option>';}
}
?>
</select><input name="botton" onclick="submit" value="<- en este nivel!!!"></form>
<form action="../pag/pag/resultados.php" method="get" name="nivel" target="resultado">
o Escribe tu nivel :<br><input name="nivel" type="text" size="7" maxlength="5" >
<input name="botton" value="que hay por mi nivel?" type="submit">
</form></div>
</td>
   <td width="33%"><?php if(!isset($_get['nombre'])){?><div align="center"><form action="../pag/pag/resultados.php" method="get" name="nombre" target="resultado">
Selecione el Enemigo de la lista: 
<select name="nombre" size="auto">
<option value="">Seleccione un Nombre</option>
<?php 
$cons_ene=gamemysql::query("SELECT * FROM enemigos ORDER BY n_ene ASC");
while($dato2=gamemysql::getArray($cons_ene)){
$arr_ene[$dato2['n_ene']]=$dato2;
}
 foreach($arr_ene as $key2 => $value2){
echo '<option value="'.$value2['n_ene'].'">'.utf8_encode($value2['n_ene']).'</option>';}
?>
</select><input name="botton" type="submit" value="<- con ese peleare!!"></form>
<form action="../pag/pag/resultados.php" method="get" name="nombre" target="resultado">
o Escriba el nombre del Enemigo :<br><input name="nombre" type="text" value="Escriba un Nombre" size="30" maxlength="29">
<input name="botton" value="le decias asi?" type="submit">
</form></div>
<?php }
?></td></tr><tr>
    <td><?php if(!isset($_get['armadura'])){?><div align="center"><form action="../pag/pag/resultados.php" method="get" name="armadura" target="resultado">
selecione la Armadura de la lista: 
<select name="armadura" size="auto">
<option value="">Seleccione una Armadura</option>
<?php 
$cons_arm=gamemysql::query("SELECT * FROM armaduras ORDER BY n_arm ASC");
while($dato3=gamemysql::getArray($cons_arm)){
$arr_arm[$dato3['id_arm']]=$dato3['n_arm'];
}
 foreach($arr_arm as $key3 => $value3){
echo '<option value="'.$value3.'">'.utf8_encode($value3).'</option>';}
?>
</select><input name="botton" type="submit" value="<- usare esta!!"></form>
<form action="../pag/pag/resultados.php" method="get" name="armadura" target="resultado">
o Escriba el nombre de la armdura :<br><input name="armadura" type="text" value="Escriba una Armadura" size="23" maxlength="22">
<input name="botton" value="hay esta armadura?" type="submit">
</form></div>
<?php }
?></td>
    <td><?php if(!isset($_get['hab'])){?><div align="center"><form action="../pag/pag/resultados.php" method="get" name="hab" target="resultado">
Seleccione la Habilidad de la lista:<br>
<select name="hab" size="auto">
<option value="">Seleccione una Habilidad</option>
<?php
$cons_hab=gamemysql::query("SELECT * FROM habilidades ORDER BY n_hab ASC");
while($dato4=gamemysql::getArray($cons_hab)){
$arr_hab[$dato4['id_habilidad']]=$dato4;
}
 foreach($arr_hab as $key4 => $value4){
echo '<option value="'.$value4['n_hab'].'">'.utf8_encode($value4['n_hab']).'</option>';}
?>
</select><input name="botton" type="submit" value="<- es la ganadora!!"></form>
<form action="../pag/pag/resultados.php" method="get" name="hab" target="resultado">
o Escribra el nombre de la Habilidad :<br><input name="hab" type="text" value="Escriba una habilidad" size="23" maxlength="22">
<input name="botton" value="se llamaba asi?" type="submit">
</form></div>
<?php }
?></td>
	<td><?php if(!isset($_get['general'])){?><div align="center"><form action="../pag/pag/resultados.php" method="get" name="general" target="resultado">
consultas generales :<br><input name="	" type="text" value="general" size="23" maxlength="22">
<input name="botton" value="como era?" type="submit">
</form></div>
<?php }
?></td>
	  </tr>
</table>
<div id="resultado" class="resultados">Elegi una tipo de busqueda</div>
<div align="center"><a href="#"><img src="../pag/img/boton_arriba.gif" width="50" height="50" style="position: fixed; bottom: 10px;  left: 45%;" title="Volver arriba" alt="Volver arriba" ></a></div>
<?php pie(); ?>