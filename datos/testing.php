<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form action="#" method="get">
<input name="fecha" type="text" />
<input name="consulta" type="button" />
</form>

<?php
if (isset($_GET['fecha'])){

$fecha_naci_usu=$_GET['fecha'];

function signo($fecha_naci_usu){
//Fecha usuario
$usu_fecha=explode("-",$fecha_naci_usu);
//calculo timestam de las dos fechas
$fecha_ini = mktime(0,0,0,$usu_fecha[1],$usu_fecha[2],$usu_fecha[0]);
$fecha_final = mktime(0,0,0,12,31,$usu_fecha[0]-1); 
//resto a una fecha la otra
$segundos_diferencia = $fecha_ini - $fecha_final;
//echo $segundos_diferencia; 
//convierto segundos en días
$dias_diferencia = $segundos_diferencia / (60 * 60 * 24);
//obtengo el valor absoulto de los días (quito el posible signo negativo)
$dias_diferencia = abs($dias_diferencia);
//quito los decimales a los días de diferencia
$dias_diferencia = floor($dias_diferencia);
// año bisiesto
$año_ini = mktime(0,0,0,12,31,$usu_fecha[0]);
$año_final = mktime(0,0,0,12,31,$usu_fecha[0]-1); 
$seg_dif = $año_ini - $año_final;
$dias_dif = $seg_dif / (60 * 60 * 24);
$dias_dif = abs($dias_dif);
$dias_dif = floor($dias_dif);
echo $dias_dif;
if (($dias_dif=366)and($dias_diferencia > 59)){
$dias_diferencia=$dias_diferencia-1;}

switch ($dias_diferencia){
case (($dias_diferencia <= 20) AND ($dias_diferencia >= 1)):
echo "Capricornio";
break;
case (($dias_diferencia <= 50) AND ($dias_diferencia >= 21)):
echo "Acuario";
break;
case (($dias_diferencia <= 79) AND ($dias_diferencia >= 51)):
echo "Piscis";
break;
case (($dias_diferencia <= 110) AND ($dias_diferencia >= 80)):
echo "Aries";
break;
case (($dias_diferencia <= 141) AND ($dias_diferencia >= 111)):
echo "Tauro";
break;
case (($dias_diferencia <= 172) AND ($dias_diferencia >= 142)):
echo "Géminis";
break;
case (($dias_diferencia <= 205) AND ($dias_diferencia >= 172)):
echo "Cancer";
break;
case (($dias_diferencia <= 236) AND ($dias_diferencia >= 206)):
echo "Leo";
break;
case (($dias_diferencia <= 268) AND ($dias_diferencia >= 237)):
echo "Virgo";
break;
break;
case (($dias_diferencia <= 298) AND ($dias_diferencia >= 269)):
echo "Libra";
break;
break;
case (($dias_diferencia <= 327) AND ($dias_diferencia >= 299)):
echo "Escorpio";
break;
break;
case (($dias_diferencia <= 356) AND ($dias_diferencia >= 328)):
echo "Sagitario";
break;
case (($dias_diferencia <= 366) AND ($dias_diferencia >= 357)):
echo "Capricornio";
break;
}}
echo 'signo : ';
signo($fecha_naci_usu);}
?>
</body>
</html>
