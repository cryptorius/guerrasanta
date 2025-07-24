<?php
include('../classes/classpag.php');
function clanlists($id_clan) {
$ran_clan=datos::clan($id_clan, "ran_clan");
$clan_ran=str_replace("::"," => ", $ran_clan);
$ran_parte = explode(',', $clan_ran);
asort($ran_parte);
foreach ($ran_parte as $keys => $value) {
$value_ran=strpbrk($value,'=>');
$keys_ran=trim(str_replace($value_ran, "" ,$value));
//echo $keys_clan;
$values_ran=trim(str_replace($keys_ran.' => ',"" ,$value));
//echo $values_clan;
$rangos_clan[$keys_ran]=$values_ran;
$clan['rangos']=$rangos_clan;
}
$mien_clan=datos::clan($id_clan, "mien_clan");
$clan_mien=str_replace("::"," => ", $mien_clan);
$mien_parte =explode(',', $clan_mien);
asort($mien_parte);
foreach ($mien_parte as $key => $value){
$values=str_replace(" => ","",strstr($value, " => "));
$keys=str_replace(" => ".$values,"",$value);
if(empty($rangos_clan[$keys])){$rangos_clan[$keys]="Esperando Rango";}
$cons_n_perso=gamemysql::query("SELECT n_perso FROM usu_personajes WHERE id_personaje_usu='".$values."'");
$n_perso=gamemysql::getArray($cons_n_perso);
if(empty($n_perso[0])){$n_perso[0]="No Registrado";}
$mien_total[$n_perso[0]]=$rangos_clan[$keys];
$clan['mien']=$mien_total;
}
return $clan;
}
$id_clan=1;

print_r(clanlists($id_clan));
?>