<?php
header('Content-type: text/html; charset=iso-8859-1');
$RegistrosAMostrar=3;

 //estos valores los recibo por GET
 if(isset($_GET['pag'])){
  $RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
  $PagAct=$_GET['pag'];
  //caso contrario los iniciamos
 }else{
  $RegistrosAEmpezar=0;
  $PagAct=1;
 }

 $cons_not=gamemysql::query("SELECT * FROM noticias ORDER BY fecha_noticia DESC LIMIT $RegistrosAEmpezar, $RegistrosAMostrar");
 while($row=gamemysql::getArrayassoc($cons_not))
{
$n_meses = array("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
echo '<hr><div class="noticia">';
$fecha = explode("-",$row["fecha_noticia"]);
if ($fecha[1]<10){$mes_limp=str_replace("0","",$fecha[1]);}else{$mes_limp=$fecha[1];}
$mes = $n_meses[$mes_limp];
echo '<div>El '.$fecha[2]." de ".$mes." del ".$fecha[0].' se publico esta noticia</div>';
echo '<table width="100%" border="0" cellspacing="0"><tr>';
echo '<td class="autor">Asunto:<br>'.$row['asunto_noticia'].'<br><br>';
echo  'Publicado por:<br>'.$row['autor_noticia'].'<br><br></td>';
echo '<td class="info">'.$row['texto_noticia'].'</td>';echo '</tr></table></div>';}  

 //******--------determinar las páginas---------******//
 $NroRegistros=gamemysql::numResults(gamemysql::query("SELECT * FROM noticias"));
 $PagAnt=$PagAct-1;
 $PagSig=$PagAct+1;
 $PagUlt=$NroRegistros/$RegistrosAMostrar;

 //verificamos residuo para ver si llevará decimales
 $Res=$NroRegistros%$RegistrosAMostrar;
 // si hay residuo usamos funcion floor para que me
 // devuelva la parte entera, SIN REDONDEAR, y le sumamos
 // una unidad para obtener la ultima pagina
 if($Res>0) $PagUlt=floor($PagUlt)+1;
 
 //desplazamiento
 echo "<a onclick=\"Pagina('1')\">Primero</a> ";
 if($PagAct>1) echo "<a onclick=\"Pagina('$PagAnt')\">Anterior</a> ";
 echo "<strong>Pagina ".$PagAct."/".$PagUlt."</strong>";
 if($PagAct<$PagUlt)  echo " <a onclick=\"Pagina('$PagSig')\">Siguiente</a> ";
 echo "<a onclick=\"Pagina('$PagUlt')\">Ultimo</a>";

?>
