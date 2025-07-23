<?php
// Funciones para paginas

// traduccion del sitio
function traductor($id_idioma, $texto){
    $cons_trad=gamemysql::query("SELECT tex_trad FROM traduccion WHERE id_idioma='".$id_idioma."' AND tex_base='".$texto."'"); 
 	$arr_trad=gamemysql::getArrayassoc($cons_trad);
 	    $traduccion=$arr_trad['tex_trad'];		
    return $traduccion;}

// fecha y hora del servidor
function servertiempo ($id_idioma){
	$n_dias = array("", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
	$n_meses = array("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
$dia = $n_dias[date("N")];
$mes = $n_meses[date("n")];
echo "<b>".traductor($id_idioma , 'server')." :<br>".$dia." ".date("d").",<br> de ".$mes." del ".date("Y")."<br>";
echo traductor($id_idioma , 'hora')." : ".date("H:i:s")."</b>";
}


// Funciones para el juego
// class de usuario y personaje
class datos {
function cuenta($id_usuario, $dato){
$cons_usu=gamemysql::query("SELECT * FROM usuarios WHERE id_usuario='".$id_usuario."'");
while($datos=gamemysql::getArrayassoc($cons_usu)){
$cuenta_info['id_usuario']=$datos['id_usuario'];
$cuenta_info['n_usu']=$datos['n_usu'];
$cuenta_info['con_usu']=$datos['con_usu'];
$cuenta_info['na_usu']=$datos['na_usu'];
$cuenta_info['sex_usu']=$datos['sex_usu'];
$cuenta_info['email_usu']=$datos['email_usu'];
$cuenta_info['ult_act_usu']=$datos['ult_act_usu'];
$cuenta_info['acc_usu']=$datos['acc_usu'];
$cuenta_info['est_usu']=$datos['est_usu'];
$cuenta_info['ult_ip_usu']=$datos['ult_ip_usu'];
$cuenta_info['sig_usu']=$datos['sig_usu'];
}
return $cuenta_info[$dato];//Print_r($cuenta_info);
}
function personaje($id_usu, $num_perso, $dato){
switch ($num_perso){
case ($num_perso==1):
$person_num="id_perso1";
break;
case ($num_perso==2):
$person_num="id_perso2";
break;
case ($num_perso==3):
$person_num="id_perso3";
break;
}
$cons_usu=gamemysql::query("SELECT * FROM usu_personajes WHERE id_usu='".$id_usu."' AND $person_num=1");
while($datos=gamemysql::getArrayassoc($cons_usu)){
$perso_info['id_personaje_usu']=$datos['id_personaje_usu'];
$perso_info['n_perso']=$datos['n_perso']; 
$perso_info['nivel_perso']=$datos['nivel_perso'];  
$perso_info['exp_perso']=$datos['exp_perso']; 
$perso_info['zona_perso']=$datos['zona_perso'];   
$perso_info['vid_perso']=$datos['vid_perso'];  
$perso_info['vid_actu_perso']=$datos['vid_actu_perso']; 
$perso_info['cosm_perso']=$datos['cosm_perso'];  
$perso_info['cosm_actu_perso']=$datos['cosm_actu_perso'];
$perso_info['fuer_perso']=$datos['fuer_perso'];  
$perso_info['inte_perso']=$datos['inte_perso'];  
$perso_info['agi_perso']=$datos['agi_perso'];  
$perso_info['des_perso']=$datos['des_perso'];  
$perso_info['res_perso']=$datos['res_perso'];  
$perso_info['vel_ataq_perso']=$datos['vel_ataq_perso'];  
$perso_info['vel_mov_perso']=$datos['vel_mov_perso'];  
$perso_info['id_arm']=$datos['id_arm'];  
$perso_info['esta_arm']=$datos['esta_arm'];  
$perso_info['tec_perso']=$datos['tec_perso'];   
$perso_info['hab_perso']=$datos['hab_perso'];  
$perso_info['maes_econ_perso']=$datos['maes_econ_perso'];  
$perso_info['pc_ini_perso']=$datos['pc_ini_perso'];   
$perso_info['pc_perso']=$datos['pc_perso'];  
$perso_info['pp_perso']=$datos['pp_perso']; 
$perso_info['pd_perso']=$datos['pd_perso'];   
$perso_info['pe_perso']=$datos['pe_perso'];   
$perso_info['moch_perso']=$datos['moch_perso'];   
$perso_info['miss_perso']=$datos['miss_perso'];   
$perso_info['dios_perso']=$datos['dios_perso'];    
$perso_info['tipo_perso']=$datos['tipo_perso'];    
$perso_info['est_perso']=$datos['est_perso'];   
$perso_info['ult_ene']=$datos['ult_ene'];  
$perso_info['ubi_ciu_perso']=$datos['ubi_ciu_perso'];
$perso_info['skin_perso']=$datos['skin_perso'];
$perso_info['pres_perso']=$datos['pres_perso'];
$perso_info['sig_perso']=$datos['sig_perso'];
$perso_info['clan_perso']=$datos['clan_perso'];
$sex_perso=$datos['sex_perso'];
if($sex_perso=="f"){$perso_info['sex_perso']="Femenino";}elseif($sex_perso=="m"){$perso_info['sex_perso']="Masculino";}
//Print_r($perso_info);
}
return $perso_info[$dato];
}
function armadura($id_arm, $dato){
$cons_arm=gamemysql::query("SELECT * FROM armaduras WHERE id_armadura='".$id_arm."'");
while($datos=gamemysql::getArrayassoc($cons_arm)){
$arm_info['n_arm']=$datos['n_arm'];
$arm_info['sig_arm']=$datos['sig_arm'];
$arm_info['vid_arm']=$datos['vid_arm'];
$arm_info['cosm_arm']=$datos['cosm_arm'];  
$arm_info['fuer_arm']=$datos['fuer_arm'];  
$arm_info['inte_arm']=$datos['inte_arm'];  
$arm_info['agi_arm']=$datos['agi_arm'];  
$arm_info['des_arm']=$datos['des_arm'];  
$arm_info['res_arm']=$datos['res_arm'];  
$arm_info['vel_ataq_arm']=$datos['vel_ataq_arm'];  
$arm_info['vel_mov_arm']=$datos['vel_mov_arm'];
 $arm_info['bonif_arm']=$datos['bonif_arm'];
$arm_info['pres_arm']=$datos['pres_arm'];
$arm_info['rest_bat_arm']=$datos['rest_bat_arm'];
$arm_info['mate_arm']=$datos['mate_arm'];
$arm_info['img_arm']=$datos['img_arm'];
$arm_info['req_nivel_arm']=$datos['req_nivel_arm'];
$arm_info['req_sig_arm']=$datos['req_sig_arm'];
$arm_info['req_vid_arm']=$datos['req_vid_arm'];
$arm_info['req_cosm_arm']=$datos['req_cosm_arm'];  
$arm_info['req_fuer_arm']=$datos['req_fuer_arm'];  
$arm_info['req_inte_arm']=$datos['req_inte_arm'];  
$arm_info['req_agi_arm']=$datos['req_agi_arm'];  
$arm_info['req_des_arm']=$datos['req_des_arm'];  
$arm_info['req_res_arm']=$datos['req_res_arm'];  
$arm_info['req_vel_ataq_arm']=$datos['req_vel_ataq_arm'];  
$arm_info['req_vel_mov_arm']=$datos['req_vel_mov_arm']; 
}
return $arm_info[$dato];//Print_r($arm_info);
}
function dios($id_dios, $dato){
$cons_dios=gamemysql::query("SELECT * FROM dioses WHERE id_dios='".$id_dios."'");
while($datos=gamemysql::getArrayassoc($cons_dios)){
$dios_info['id_dios']=$datos['id_dios'];
$dios_info['n_dios']=$datos['n_dios'];
$dios_info['vid_dios']=$datos['vid_dios'];
$dios_info['cosm_dios']=$datos['cosm_dios'];  
$dios_info['fuer_dios']=$datos['fuer_dios'];  
$dios_info['inte_dios']=$datos['inte_dios'];  
$dios_info['agi_dios']=$datos['agi_dios'];  
$dios_info['des_dios']=$datos['des_dios'];  
$dios_info['res_dios']=$datos['res_dios'];  
$dios_info['vel_ataq_dios']=$datos['vel_ataq_dios'];  
$dios_info['vel_mov_dios']=$datos['vel_mov_dios'];
}
return $dios_info[$dato];//Print_r($dios_info);
}

function clan($id_clan, $dato){
$cons_clan=gamemysql::query("SELECT * FROM clanes WHERE id_clan='".$id_clan."'");
while($datos=gamemysql::getArrayassoc($cons_clan)){
$clan_info['id_clan']=$datos['id_clan'];
$clan_info['n_clan']=$datos['n_clan'];
$clan_info['pres_clan']=$datos['pres_clan'];
$clan_info['id_usu']=$datos['id_usu'];  
$clan_info['id_perso']=$datos['id_perso']; 
$clan_info['ran_clan']=$datos['ran_clan'];  
$clan_info['acc_clan']=$datos['acc_clan'];  
$clan_info['def_ran_clan']=$datos['def_ran_clan'];  
$clan_info['mien_clan']=$datos['mien_clan'];  
$clan_info['ani_clan']=$datos['ani_clan']; 
}
return $clan_info[$dato];//Print_r($clan_info);
}

}

// funcion para la ciudad (ordena los distintos establecimientos)
function orden_ciudad($id_zona){
$cons_ciu=gamemysql::query("SELECT * FROM ciudades WHERE id_zona='".$id_zona."'");
while($datos=gamemysql::getArrayassoc($cons_ciu)){
$ciu_dato['orden']=$datos['orden'];//Print_r($cuenta_info);
$ciu_dato['alt_ciu']=$datos['alt_ciu'];
$ciu_dato['link_ciu']=$datos['link_ciu'];
}
return $ciu_dato;
}
// Funcion Lista del Clan + Rango
function clanlist($id_clan) {
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
//print_r($clan);
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
//print_r($clan);
}
$acc_clan=datos::clan($id_clan, "acc_clan");
$clan_acc=str_replace("::"," => ", $acc_clan);
$acc_parte = explode(',', $clan_acc);
asort($acc_parte);
foreach ($acc_parte as $keys => $value) {
$value_acc=strpbrk($value,'=>');
$keys_acc=trim(str_replace($value_acc, "" ,$value));
if(is_numeric($keys_acc)){
$cons_n_perso=gamemysql::query("SELECT n_perso FROM usu_personajes WHERE id_personaje_usu='".$keys_acc."'");
$n_perso=gamemysql::getArrayassoc($cons_n_perso);
if(empty($n_perso['n_perso'])){$n_perso['n_perso']="No Registrado";}
$keys_acces=$n_perso['n_perso'];
}else{$keys_acces=$keys_acc;}
$values_acc=trim(str_replace($keys_acc.' => ',"" ,$value));
//echo $values_clan;
$accesos_clan[$keys_acces]=$values_acc;
$clan['accesos']=$accesos_clan;
//print_r($clan);
}
return $clan;
}

// funcion de soporte para acciones de inyeccion de texto
function limpiar($text){
$text = str_replace("<","",$text);
$text = str_replace(">","",$text);
$text = str_replace("[","",$text);
$text = str_replace("]","",$text);
$text = str_replace("(","",$text);
$text = str_replace(")","",$text);
$text = str_replace("{","",$text);
$text = str_replace("}","",$text);
$text = str_replace(".","",$text);
$text = str_replace("'","",$text);
$text = str_replace('"',"",$text);
$text = str_replace("\\","",$text);
$text = str_replace("&","",$text);
return $text;
} 
function limpiaracentos($text){
$text = str_replace("á","a",$text);
$text = str_replace("é","e",$text);
$text = str_replace("í","i",$text);
$text = str_replace("ó","o",$text);
$text = str_replace("u","u",$text);
$text = str_replace("Á","A",$text);
$text = str_replace("É","E",$text);
$text = str_replace("Í","I",$text);
$text = str_replace("Ó","O",$text);
$text = str_replace("Ú","U",$text);
return $text;
}

// verificaciones 

// Veridicacion de usuario
function comprobar_n_usuario($n_usuario){
    //comprobar que se puede usar ese nombre
  if(isset($n_usuario)){
  $cons_usu=gamemysql::numResults(gamemysql::query("SELECT * FROM usuarios WHERE n_usu='$n_usuario'"));
   if($cons_usu>0){
      echo $n_usuario.", ya esta siendo usado por otro usuario. <br>";
      return false;
   }
      //compruebo que el tamaño del string sea válido.
   if (strlen($n_usuario)<3 || strlen($n_usuario)>25){
      echo $n_usuario.", no cumple con el minimo y el maximo establesido caracteres para el nombre. <br>";
      return false;
   }
   //compruebo que los caracteres sean los permitidos
   $permitidos = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789-_ ";
   for ($i=0; $i<strlen($n_usuario); $i++){
      if (strpos($permitidos, substr($n_usuario,$i,1))===false){
         echo $n_usuario . ", no cumple con los caracteres permitidos, de la A hasta la Z y del 0 al 9, se pueden agregar el signo - y el _ . <br>";
         return false;
      }
   }
    return true;}}

// verificar contraseñas
function Con_verif($con1, $con2){
    if ($con1 == $con2){
       return true;
	   $permitidos = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789-_*$·?¿+!ºª#,:; ";
   for ($i=0; $i<strlen($con1); $i++){
      if (strpos($permitidos, substr($con1,$i,1))===false){
         echo 'contraseña no cumple con los caracteres permitidos, de la A hasta la Z y del 0 al 9, se pueden agregar el signo *$·?¿+!ºª#,:;. <br>';
         return false;}}
		 for ($i=0; $i<strlen($con2); $i++){
      if (strpos($permitidos, substr($con2,$i,1))===false){
         echo 'la verificacion de contraseña no cumple con los caracteres permitidos, de la A hasta la Z y del 0 al 9, se pueden agregar el signo *$·?¿+!ºª#,:;. <br>';
         return false;}}
      }else{
       echo "Las contraseñas son Coinciden";
	   return false;}
} 

// verificar fecha de nacimiento
function comprobar_fecha($dia, $mes, $ano){
if ((is_numeric($dia) && is_numeric($mes) && is_numeric($ano))===false){
echo 'El dia, mes o año, no es un numero';
return false;
}
  if ($dia<1 || $dia>31){
      echo $dia.", no cumple con el minimo y el maximo establesido para el dia. <br>";
      return false;
   }
     if ($mes<1 || $mes>12){
      echo $mes.", no cumple con el minimo y el maximo establesido para el mes. <br>";
      return false;
   }
     if ($ano<1910 || $ano>(date("Y")-8)){
	    echo $ano.", no cumple con el minimo y el maximo establesido para el año. <br>";
      return false;
   }
return true;
}

// verificacion de EMAIL
function verif_email($email){
// el correo si esta en uso
$cons_usu=gamemysql::numResults(gamemysql::query("SELECT * FROM usuarios WHERE email_usu='".$email."'"));
   if($cons_usu>0){
      echo $email.", ya esta siendo usado ese correo. <br>";
      return false;
   }
//compruebo que los caracteres sean los permitidos
   $permitidos = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789-_@.";
   for ($i=0; $i<strlen($email); $i++){
      if (strpos($permitidos, substr($email,$i,1))===false){
         echo $email . ", no cumple con los caracteres permitidos, de la A hasta la Z y del 0 al 9, se pueden agregar el signo - _ . @ <br>";
         return false;
      }}
	  
$usu_email = strpbrk($email,"@");
$cabdelemail = str_replace($usu_email,"",$email);
$cab_email = str_replace(" ","",$cabdelemail);
$per_car = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789-_.";
for ($i=0; $i<strlen($cab_email); $i++){
      if (strpos($per_car, substr($cab_email,$i,1))===false){
         echo $email.", no cumple con los caracteres permitidos, de la A hasta la Z y del 0 al 9, se pueden agregar el signo - _ . <br>";
         return false;
      }}
$fin_email = strpbrk($email,".");
$cabycendelemail = str_replace($fin_email,"",$email);
$cen_email = str_replace($cabdelemail.'@',"",$cabycendelemail);
$limcen_email = str_replace(" ","",$cen_email);	  
for ($i=0; $i<strlen($limcen_email); $i++){
      if (strpos($per_car, substr($limcen_email,$i,1))===false){
         echo $email.", no cumple con los caracteres permitidos, de la A hasta la Z y del 0 al 9, se pueden agregar el signo - _ . <br>";
         return false;
      }}	  
$can_ext=substr_count($fin_email, '.');
switch ($can_ext){
case ($can_ext==1):
$fin1_email = strtok($fin_email,".");
$lim_extemail = str_replace(" ","",$fin1_email);
if(empty($lim_extemail)==true){echo 'no tienes una extencion<br>';return false;}else{

if(strlen($lim_extemail) < 6){return true;}else{echo 'No se puede prosesar ese tipo de extenciones';}
}
break;
case ($can_ext==2):
$parte_email=explode('.',$fin_email);
$fin1_email=$parte_email[1];
$fin2_email=$parte_email[2];
if(empty($fin1_email)==true){echo 'no tienes una extencion';
return false;
}else{
if(strlen($fin1_email) < 6){return true;}else{echo 'No se puede prosesar ese tipo de extenciones';}
}
if(empty($fin2_email)==true){echo 'no tienes una extencion';
return false;
}else{
if(strlen($fin2_email) < 3){return true;}else{echo 'No se puede prosesar ese tipo de extenciones';}
}
break;
case ($can_ext>2):
echo 'no se puede prosesar ese tipo de correos';
return false;
break;
}
return true;
}

// verificar si el nombre del personaje es correcto
function comprobar_n_perso($n_perso){
    //comprobar que se puede usar ese nombre
  if(isset($n_perso)){
  $cons_perso=gamemysql::numResults(gamemysql::query("SELECT * FROM usu_personajes WHERE n_perso='$n_perso'"));
   if($cons_perso>0){
      echo $n_perso.", ya esta siendo usado por otro personaje. <br>";
      return false;
   }
      //compruebo que el tamaño del string sea válido.
   if (strlen($n_perso)<4 || strlen($n_perso)>25){
      echo $n_perso.", no cumple con el minimo y el maximo establesido caracteres para el nombre. <br>";
      return false;
   }
   //compruebo que los caracteres sean los permitidos
   $permitidos = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789-_ ";
   for ($i=0; $i<strlen($n_perso); $i++){
      if (strpos($permitidos, substr($n_perso,$i,1))===false){
         echo $n_perso . ", no cumple con los caracteres permitidos, de la A hasta la Z y del 0 al 9, se pueden agregar el signo - y el _ . <br>";
         return false;
      }
   }
    return true;}}

// Tipo de personaje (fisico, cosmico, hibrido, Fisico-Hibrido, Fisico-Hibrido)
function tipo_perso($fuerza, $inteligencia){
if($fuerza <= 0){$fuerza=1;}
if($inteligencia <= 0){$inteligencia=1;}
if($fuerza > $inteligencia){$caso=1;}
if($fuerza < $inteligencia){$caso=2;}
if($fuerza == $inteligencia){$caso=3;}
switch ($caso){
case ($caso==1):
$pjfisico=(($fuerza*100)/$inteligencia)-100;
if($pjfisico > 65 ){$tipo_perso="Fisico";
return $tipo_perso;
}elseif($pjfisico < 65 ){$tipo_perso="Fisico-Hibrido";
return $tipo_perso;}
break;
case ($caso==2):
$pjcosmico = (($inteligencia*100)/$fuerza)-100;
if($pjcosmico > 65 ){$tipo_perso="Cosmico";
return $tipo_perso;
}elseif($pjcosmico < 65 ){$tipo_perso="Cosmico-Hibrido";
return $tipo_perso;}
break;
case ($caso==3):
$tipo_perso="Hibrido";
return $tipo_perso;
break;
}}
// tomar la ip del usuario por el cual se conecto
function getIP() {
if (isset($_SERVER)) {
if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
return $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
return $_SERVER['REMOTE_ADDR'];
}
} else {
if (isset($GLOBALS['HTTP_SERVER_VARS']['HTTP_X_FORWARDER_FOR'])) {
return $GLOBALS['HTTP_SERVER_VARS']['HTTP_X_FORWARDED_FOR'];
} else {
return $GLOBALS['HTTP_SERVER_VARS']['REMOTE_ADDR'];
}}}

// obtener el signo
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
if (($dias_dif=366)and($dias_diferencia > 59)){
$dias_diferencia=$dias_diferencia-1;}

switch ($dias_diferencia){
case (($dias_diferencia <= 20) AND ($dias_diferencia >= 1)):
$signo="Capricornio";
return $signo;
break;
case (($dias_diferencia <= 50) AND ($dias_diferencia >= 21)):
$signo="Acuario";
return $signo;
break;
case (($dias_diferencia <= 79) AND ($dias_diferencia >= 51)):
$signo="Piscis";
return $signo;
break;
case (($dias_diferencia <= 110) AND ($dias_diferencia >= 80)):
$signo="Aries";
return $signo;
break;
case (($dias_diferencia <= 141) AND ($dias_diferencia >= 111)):
$signo="Tauro";
return $signo;
break;
case (($dias_diferencia <= 172) AND ($dias_diferencia >= 142)):
$signo="Géminis";
return $signo;
break;
case (($dias_diferencia <= 205) AND ($dias_diferencia >= 172)):
$signo="Cancer";
return $signo;
break;
case (($dias_diferencia <= 236) AND ($dias_diferencia >= 206)):
$signo="Leo";
return $signo;
break;
case (($dias_diferencia <= 268) AND ($dias_diferencia >= 237)):
$signo="Virgo";
return $signo;
break;
case (($dias_diferencia <= 298) AND ($dias_diferencia >= 269)):
$signo="Libra";
return $signo;
break;
case (($dias_diferencia <= 327) AND ($dias_diferencia >= 299)):
$signo="Escorpio";
return $signo;
break;
case (($dias_diferencia <= 356) AND ($dias_diferencia >= 328)):
$signo="Sagitario";
return $signo;
break;
case (($dias_diferencia <= 366) AND ($dias_diferencia >= 357)):
$signo="Capricornio";
return $signo;
break;
}}

function actividad($id_perso){
//Ultima Fecha de actividad
$cons_ult_act=gamemysql::getArrayassoc(gamemysql::query("SELECT ult_act_perso FROM usu_personajes WHERE id_personaje_usu='".$id_perso."'"));
//calculo timestam de las dos fechas
$fecha_perso = getdate(strtotime($cons_ult_act['ult_act_perso']));
$fecha_actual = getdate(); 
//resto a una fecha la otra
if ($fecha_perso["year"]==$fecha_actual["year"]){
if ($fecha_perso["mon"]==$fecha_actual["mon"]){
if ($fecha_perso["mday"]==$fecha_actual["mday"]){
echo '<font style="font-size:16px; color:#00FF00;"><b>Super Activo';
}else{
echo '<font style="font-size:16px; color:#FFFF00;"><b>Activo';
}
}else{
echo '<font style="font-size:16px; color:#FF0000;"><b>Inactivo';
}
}else{
echo '<font style="font-size:16px; color:#999999;"><b>Sin Actividad';
}
echo '</b></font><br>';
$hora = date("H:i:s", strtotime($cons_ult_act['ult_act_perso']));
$dia = date("j", strtotime($cons_ult_act['ult_act_perso']));

$mes = date("n", strtotime($cons_ult_act['ult_act_perso']));
$ano = date("Y", strtotime($cons_ult_act['ult_act_perso']));
echo $dia.'/'.$mes.'/'.$ano.'<br>'.$hora;
}

function accesoclan($acc_perso){

switch ($acc_perso){
case ($acc_perso==0):
echo 'Acceso Total';
echo 'Escribir Descripción, subir logo, Crear Rangos, Asignar accesos > 0, Escribir mensaje Generales,';
break;
case ($acc_perso==1):
echo 'Acceso Semi-Total';
echo 'Asignar accesos > 1, Escribir mensaje Generales, ';
break;
case ($acc_perso==2):
echo 'Acceso Parcial';
echo 'Asignar accesos > 2, Escribir mensaje Generales, ';
break;
case ($acc_perso==3):
echo 'Acceso Semi-Parcial';
echo 'Asignar accesos > 3, Escribir mensaje Generales, ';
break;
case ($acc_perso==4):
echo 'Acceso Basico';
echo 'Asignar accesos > 4, Escribir mensaje Generales, ';
break;
case ($acc_perso==5):
echo 'Acceso Semi-Basico';
echo 'Asignar accesos > 5, Escribir mensaje Generales, ';
break;
case ($acc_perso>6):
echo 'Acceso No Registrado';
break;
}
}
?>