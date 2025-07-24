<?php
// finaliza buscarnivel
function buscarnivel ($nivel){
switch ($nivel) {

    case (strtolower($nivel)=='todos'):

        $nivel1=0;

		$con_niveles = gamemysql::query("SELECT nivel_ene FROM enemigos ORDER BY nivel_ene DESC");

		$arr_nivel=gamemysql::getArray($con_niveles);

		$nivel2=$arr_nivel[0];

		$nivel="(todos)";

		$cons_acep=1;

        break;

    case (is_numeric($nivel)):

        $nivel=$nivel;

		if (($nivel-3)<=0){$nivel1=0;}else{$nivel1=$nivel-3;}

		$nivel2=$nivel+7;

		$cons_acep=1;

		 break;

     case (strtolower($nivel)!='todos'):

       echo '<hr><div align="center">Por favor ingrese un Numero....</div>';

	   $_GET['nivel']="";

	   $cons_acep=0;

	    break;

}

if($cons_acep==1){

$cons_ene = gamemysql::query('SELECT * FROM enemigos WHERE nivel_ene >= '.$nivel1.' and nivel_ene <= '.$nivel2.' ORDER BY nivel_ene ASC');

$cons_zona = gamemysql::query('SELECT * FROM zonas');

$cons_arm = gamemysql::query('SELECT * FROM armaduras ');

$cons_hab = gamemysql::query('SELECT * FROM habilidades ');

$cuenta=gamemysql::numResults($cons_ene);

echo '<div align="center"><font size="4" face="Times New Roman, Times, serif"><b>Resultados del la busqueda por Nivel :<br>Seleccionaste  el nivel '.$nivel.', rango obtenido desde nivel '.$nivel1.' hasta '.$nivel2.'</b></font><br><b>Nota:</b>Segun el juego podras encontrar enemigos de 3 niveles por debajo de tu nivel hasta 7 niveles por arriba de tu nivel.<hr><h2>Has encontrado '.$cuenta.' enemigos</h2></div>';

// zona

while($dato1=gamemysql::getArray($cons_zona)){

$arr_zona[$dato1['id_zona']]=$dato1;

}

// enemigos

while($dato2=gamemysql::getArray($cons_ene)){

$arr_ene[$dato2['id_enemigo']]=$dato2;

}

// armadura

while($dato3=gamemysql::getArray($cons_arm)){

$arr_arm[$dato3['id_arm']]=$dato3;

}

// habilidades

while($dato4=gamemysql::getArray($cons_hab)){

$arr_hab[$dato4['id_habilidad']]=$dato4;

}

if(empty($arr_ene)){ echo "<hr><div align='center'><b>No se ha encontraro nada, por favor vuelve a intentarlo o selecciona otro metodo de busqueda</b></div>";$_GET['nivel']="";}else{

foreach($arr_ene as $key => $value){

	// nombre

	echo '<table width="100%" border="1" cellspacing="0" cellpadding="0"><tr><th>Datos del enemigo</th><th>Datos del la armadura</th></tr><tr><td valign="top" width="50%"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td colspan="4" align="center"><b>Nombre del enemigo : </b><h2> '.utf8_encode($arr_ene[$key]['n_ene']);

	//imagen fans enemigo

	echo '</h2></td></tr><tr><td rowspan="17" width="auto" align="center"><img src="imag/fans_ene/'.strtolower($arr_ene[$key]['n_ene']).'[www.pharaonwebsite.com].png" width="250" height="450">';

	//presentacion ene

	echo '<div>Presencacion :<hr>'.utf8_encode($arr_ene[$key]['tex_ene']).'<br>';

	// caracteristicas del ene	

	$arm=$arr_ene[$key]['id_arm'];   	

	// nivel

	echo '</div></td><td colspan="3" align="center"></td></tr><tr><td height="20px" align="right" width="30%">Nivel :</td><td width="20px"></td><td width="20%"> '.$arr_ene[$key]['nivel_ene'];

	// vida

	echo '</td></tr><tr><td height="20px" width="30%" align="right">Vida :</td><td width="20px"></td><td height="20px" width="30%" align="left"> '.$arr_ene[$key]['vid_ene'];

	// fuerza

	echo '</td></tr><tr><td height="20px"  colspan="3" align="center"></td></tr><tr><td height="20px" align="right">Fuerza :</td><td></td><td> '.$arr_ene[$key]['fuer_ene'].' <b>+</b> '.$arr_arm[$arm]['fuer_arm'];		// resistencia

	echo '</td></tr><tr><td height="20px" align="right">Resistencia :</td><td></td><td> '.$arr_ene[$key]['res_ene'].' <b>+</b> '.$arr_arm[$arm]['res_arm'];	   

	//	sabiduria

	echo '</td></tr><tr><td height="20px" align="right">Sabiduria :</td><td></td><td> '.$arr_ene[$key]['sab_ene'];		   

	// res. psiquica

	echo '</td></tr><tr><td height="20px" align="right">Res. Psiquica :</td><td></td><td> '.$arr_ene[$key]['respsi_ene'].' <b>+</b> '.$arr_arm[$arm]['respsi_arm'];		   

	// velocidad

	echo '</td></tr><tr><td height="20px" align="right">Velocidad :</td><td></td><td> '.$arr_ene[$key]['vel_ene'].' <b>+</b> '.$arr_arm[$arm]['vel_arm'];			   

	// precision

 	echo '</td></tr><tr><td height="20px" align="right">Precision  :</td><td></td><td> '.$arr_ene[$key]['prec_ene'].' <b>+</b> '.$arr_arm[$arm]['prec_arm'];			   

	// reflejo

	echo '</td></tr><tr><td height="20px" align="right">Reflejo :</td><td></td><td> '.$arr_ene[$key]['ref_ene'].' <b>+</b> '.$arr_arm[$arm]['ref_arm'];			   

	// persistencia

	echo '</td></tr><tr><td height="20px" align="right">Persistencia  :</td><td></td><td> '.$arr_ene[$key]['pers_ene'];	

	// zona

	$zonaene=$arr_ene[$key]['id_zona'];

	echo '</td></tr><tr><td height="20px"  colspan="3" align="center"></td></tr><tr><td height="20px"  colspan="3" align="center">Zona :</td></tr><tr><td height="20px"  colspan="3" align="center"> '.$arr_zona[$zonaene]['n_zona'];	   

	// exploracion

	echo '</td></tr><tr><td height="20px" align="right">Exp. Minima :</td><td></td><td> '.$arr_ene[$key]['req_explo_ene'];			   

	// armadura nombre

	echo ' min.</td></tr><tr><td colspan="3" align="center"></td></tr></table></td><td align="center" width="50%"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td colspan="6" align="center"><b>Nombre de la Armadura : </b><h2> '.utf8_encode($arr_arm[$arm]['n_arm']);

	// amradura presentacion

	echo '</h2></td></tr><tr><td colspan="3" align="center"></td><td rowspan="10" width="auto" align="center"><img src="imag/fans_arm/'.strtolower($arr_arm[$arm]['n_arm']).'[www.pharaonwebsite.com].png" width="250" height="250"><div>Presencacion :<hr>'.utf8_encode($arr_arm[$arm]['tex_arm']);		   

	// armadura material

	echo '</div></td></tr><tr><td height="20px" width="30%" align="center">Material : '.$arr_arm[$arm]['mat_arm'];

	// armadura estado

	echo '</td><td width="20px" ></td><td height="20px" width="20%" align="center">Estado : '.$arr_arm[$arm]['est_arm'].'%';

	// requisitos armadura nivel

	echo '</td></tr><tr><td height="20px"  colspan="3" align="center"><strong>Riquisitos :</strong></td></tr><tr><td height="20px" align="right">Nivel Minimo :</td><td></td><td> '.$arr_arm[$arm]['req_nivel_arm'];

	// requisitos armadura sabiduria

	echo '</td></tr><tr><td height="20px" align="right">Sabiduria Necesaria :</td><td></td><td> '.$arr_arm[$arm]['req_sab_arm'];

	// requisitos armadura signo			   

	echo '</td></tr><tr><td height="20px" align="right">Limitacion de Signo :</td><td></td><td> '.$arr_arm[$arm]['req_sig_arm'];				   

	// requisitos armadura honor

	echo '</td></tr><tr><td height="20px" align="right">Minimo de Honor  :</td><td></td><td> '.$arr_arm[$arm]['req_hon_arm'];			   

	// armadura tendencia			   

	echo '</td></tr><tr><td height="20px" colspan="3" align="center"></td></tr><tr><td height="20px" width="30%" align="center">Tendencia : '.$arr_arm[$arm]['tipo_arm'];			   

	// armadura comprable

	echo '</td><td width="20px"></td><td height="20px" width="20%" align="center">Comprable : (codificando)';

	// habilidades de la armadura

	echo '</td></tr><tr><td colspan="3" align="center"></td></tr></table></td></tr><tr><td colspan="2" align="center">Habilidades : <hr>';

			foreach($arr_hab as $key2 => $value2){ if($value2['id_arm']==$arm){

				// imagen y nombre de la habilidad

				echo '<div style="float:left; width:250px"><div style="float:left;"><img src="imag/habilidades/'.$value2['img_hab'].'" width="120" height="120" style="float:left"><br>'.utf8_encode($value2['tex_hab']).'</div><div style="float:left;"> Nombre :<br>'.$value2['n_hab']; 

			echo '<br>Nivel Necesario : '.$value2['req_nivel_hab'].'<br>';

			echo 'Limitacion de Signo : '.$value2['req_sig_hab'].'<br>';

			echo 'Ronda Minima : '.$value2['req_rond_hab'].'<br>';

			echo 'Sabiduria Necesaria : '.$value2['req_sab_hab'].'<br>';

			echo 'Septimo Sentido : '.$value2['req_sepsen_hab'].'<br>';

			echo 'Gasto de Cosmo : '.$value2['req_cos_hab'].'<br>';	

			echo 'Tipo de Hab. : '.$value2['tipo_hab'].'<br>';	

			echo 'Anula : '.$value2['anu_hab'].'<br>';

			echo 'Comprable por : '.$value2['val_hab'].'<br></div></div>';

							}}

   echo '</div></td></tr></table><br><br><br><br>';

/*	echo '<td><table width="100%" border="0" cellspacing="3" cellpadding="0"><tr><td align="center"><img src="imag/guerreros/'.$arr_ene[$key]['img_vic_ene'].'" width="150" height="300"><br><a href="#" title="Mirar imagen" onClick="window.open(\'http://www.seiyarpg.com/guerreros/'.str_replace("[www.seiyarpg.com]","",$arr_ene[$key]['img_vic_ene']).'\',\'nuevaVentana\',\'width=200, height=400\')">Mirar imagen</a></td><td align="center"><img src="imag/guerreros/'.$arr_ene[$key]['img_pres_ene'].'" width="150" height="300"><br><a href="#" title="Mirar imagen" onClick="window.open(\'http://www.seiyarpg.com/guerreros/'.str_replace("[www.seiyarpg.com]","",$arr_ene[$key]['img_pres_ene']).'\',\'nuevaVentana\',\'width=200, height=400\')">Mirar imagen</a></td></tr></table></td>';*/

}$_GET['nivel']=""; }

}}



//funcion buscarnivel1

function buscarnivel1 ($nivel){

$cons_ene = gamemysql::query('SELECT * FROM enemigos WHERE nivel_ene ='.$nivel.'');

$cons_zona = gamemysql::query('SELECT * FROM zonas');

$cons_arm = gamemysql::query('SELECT * FROM armaduras ');

$cons_hab = gamemysql::query('SELECT * FROM habilidades ');

	

echo '<div align="center"><font size="6" face="Times New Roman, Times, serif">Resultados del la busqueda por Nivel : <br>Seleccionaste nivel '.$nivel.'</font><br><b><br>';

// zona

while($dato1=gamemysql::getArray($cons_zona)){

$arr_zona[$dato1['id_zona']]=$dato1;

}

// enemigos

while($dato2=gamemysql::getArray($cons_ene)){

$arr_ene[$dato2['id_enemigo']]=$dato2;

}

// armadura

while($dato3=gamemysql::getArray($cons_arm)){

$arr_arm[$dato3['id_arm']]=$dato3;

}

// habilidades

while($dato4=gamemysql::getArray($cons_hab)){

$arr_hab[$dato4['id_habilidad']]=$dato4;

}

if(empty($arr_ene)){ echo "<hr><div align='center'><b>No se ha encontraro nada, por favor vuelve a intentarlo o selecciona otro metodo de busqueda</b></div>";$_GET['nivel']="";}else{

foreach($arr_ene as $key => $value){

	// nombre

	echo '<table width="100%" border="1" cellspacing="0" cellpadding="0"><tr><th>Datos del enemigo</th><th>Datos del la armadura</th></tr><tr><td valign="top" width="50%"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td colspan="4" align="center"><b>Nombre del enemigo : </b><h2> '.utf8_encode($arr_ene[$key]['n_ene']);

	//imagen fans enemigo

	echo '</h2></td></tr><tr><td rowspan="17" width="auto" align="center"><img src="imag/fans_ene/'.strtolower($arr_ene[$key]['n_ene']).'[www.pharaonwebsite.com].png" width="250" height="450">';

	//presentacion ene

	echo '<div>Presencacion :<hr>'.utf8_encode($arr_ene[$key]['tex_ene']).'<br>';

	// caracteristicas del ene	

	$arm=$arr_ene[$key]['id_arm'];   	

	// nivel

	echo '</div></td><td colspan="3" align="center"></td></tr><tr><td height="20px" align="right" width="30%">Nivel :</td><td width="20px"></td><td width="20%"> '.$arr_ene[$key]['nivel_ene'];

	// vida

	echo '</td></tr><tr><td height="20px" width="30%" align="right">Vida :</td><td width="20px"></td><td height="20px" width="30%" align="left"> '.$arr_ene[$key]['vid_ene'];

	// fuerza

	echo '</td></tr><tr><td height="20px"  colspan="3" align="center"></td></tr><tr><td height="20px" align="right">Fuerza :</td><td></td><td> '.$arr_ene[$key]['fuer_ene'].' <b>+</b> '.$arr_arm[$arm]['fuer_arm'];		// resistencia

	echo '</td></tr><tr><td height="20px" align="right">Resistencia :</td><td></td><td> '.$arr_ene[$key]['res_ene'].' <b>+</b> '.$arr_arm[$arm]['res_arm'];	   

	//	sabiduria

	echo '</td></tr><tr><td height="20px" align="right">Sabiduria :</td><td></td><td> '.$arr_ene[$key]['sab_ene'];		   

	// res. psiquica

	echo '</td></tr><tr><td height="20px" align="right">Res. Psiquica :</td><td></td><td> '.$arr_ene[$key]['respsi_ene'].' <b>+</b> '.$arr_arm[$arm]['respsi_arm'];		   

	// velocidad

	echo '</td></tr><tr><td height="20px" align="right">Velocidad :</td><td></td><td> '.$arr_ene[$key]['vel_ene'].' <b>+</b> '.$arr_arm[$arm]['vel_arm'];			   

	// precision

 	echo '</td></tr><tr><td height="20px" align="right">Precision  :</td><td></td><td> '.$arr_ene[$key]['prec_ene'].' <b>+</b> '.$arr_arm[$arm]['prec_arm'];			   

	// reflejo

	echo '</td></tr><tr><td height="20px" align="right">Reflejo :</td><td></td><td> '.$arr_ene[$key]['ref_ene'].' <b>+</b> '.$arr_arm[$arm]['ref_arm'];			   

	// persistencia

	echo '</td></tr><tr><td height="20px" align="right">Persistencia  :</td><td></td><td> '.$arr_ene[$key]['pers_ene'];	

	// zona

	$zonaene=$arr_ene[$key]['id_zona'];

	echo '</td></tr><tr><td height="20px"  colspan="3" align="center"></td></tr><tr><td height="20px"  colspan="3" align="center">Zona :</td></tr><tr><td height="20px"  colspan="3" align="center"> '.$arr_zona[$zonaene]['n_zona'];	   

	// exploracion

	echo '</td></tr><tr><td height="20px" align="right">Exp. Minima :</td><td></td><td> '.$arr_ene[$key]['req_explo_ene'];			   

	// armadura nombre

	echo ' min.</td></tr><tr><td colspan="3" align="center"></td></tr></table></td><td align="center" width="50%"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td colspan="6" align="center"><b>Nombre de la Armadura : </b><h2> '.utf8_encode($arr_arm[$arm]['n_arm']);

	// amradura presentacion

	echo '</h2></td></tr><tr><td colspan="3" align="center"></td><td rowspan="10" width="auto" align="center"><img src="imag/fans_arm/'.strtolower($arr_arm[$arm]['n_arm']).'[www.pharaonwebsite.com].png" width="250" height="250"><div>Presencacion :<hr>'.utf8_encode($arr_arm[$arm]['tex_arm']);		   

	// armadura material

	echo '</div></td></tr><tr><td height="20px" width="30%" align="center">Material : '.$arr_arm[$arm]['mat_arm'];

	// armadura estado

	echo '</td><td width="20px" ></td><td height="20px" width="20%" align="center">Estado : '.$arr_arm[$arm]['est_arm'].'%';

	// requisitos armadura nivel

	echo '</td></tr><tr><td height="20px"  colspan="3" align="center"><strong>Riquisitos :</strong></td></tr><tr><td height="20px" align="right">Nivel Minimo :</td><td></td><td> '.$arr_arm[$arm]['req_nivel_arm'];

	// requisitos armadura sabiduria

	echo '</td></tr><tr><td height="20px" align="right">Sabiduria Necesaria :</td><td></td><td> '.$arr_arm[$arm]['req_sab_arm'];

	// requisitos armadura signo			   

	echo '</td></tr><tr><td height="20px" align="right">Limitacion de Signo :</td><td></td><td> '.$arr_arm[$arm]['req_sig_arm'];				   

	// requisitos armadura honor

	echo '</td></tr><tr><td height="20px" align="right">Minimo de Honor  :</td><td></td><td> '.$arr_arm[$arm]['req_hon_arm'];			   

	// armadura tendencia			   

	echo '</td></tr><tr><td height="20px" colspan="3" align="center"></td></tr><tr><td height="20px" width="30%" align="center">Tendencia : '.$arr_arm[$arm]['tipo_arm'];			   

	// armadura comprable

	echo '</td><td width="20px"></td><td height="20px" width="20%" align="center">Comprable : (codificando)';

	// habilidades de la armadura

	echo '</td></tr><tr><td colspan="3" align="center"></td></tr></table></td></tr><tr><td colspan="2" align="center">Habilidades : <hr>';

			foreach($arr_hab as $key2 => $value2){ if($value2['id_arm']==$arm){

				// imagen y nombre de la habilidad

				echo '<div style="float:left; width:250px"><div style="float:left;"><img src="imag/habilidades/'.$value2['img_hab'].'" width="120" height="120" style="float:left"><br>'.utf8_encode($value2['tex_hab']).'</div><div style="float:left;"> Nombre :<br>'.$value2['n_hab']; 

			echo '<br>Nivel Necesario : '.$value2['req_nivel_hab'].'<br>';

			echo 'Limitacion de Signo : '.$value2['req_sig_hab'].'<br>';

			echo 'Ronda Minima : '.$value2['req_rond_hab'].'<br>';

			echo 'Sabiduria Necesaria : '.$value2['req_sab_hab'].'<br>';

			echo 'Septimo Sentido : '.$value2['req_sepsen_hab'].'<br>';

			echo 'Gasto de Cosmo : '.$value2['req_cos_hab'].'<br>';	

			echo 'Tipo de Hab. : '.$value2['tipo_hab'].'<br>';	

			echo 'Anula : '.$value2['anu_hab'].'<br>';

			echo 'Comprable por : '.$value2['val_hab'].'<br></div></div>';

							}}

   echo '</div></td></tr></table><br><br><br><br>';}$_GET['nivel1']=""; }}



// funcion buscarZona

function buscarzona ($zona){

$cons_zona = gamemysql::query('SELECT * FROM zonas ORDER BY n_zona ASC');
// zona
if(is_numeric($zona)){while($datos1=gamemysql::getArray($cons_zona)){
$arrs_zona[$datos1['id_zona']]=$datos1['n_zona'];}
$cons_ene = gamemysql::query("SELECT * FROM enemigos where id_zona='".$zona."' or id_zona=16 ORDER BY nivel_ene ASC");
$zona_n=$arrs_zona[$zona];
$zonacorecta=1;
}else{$zona_des=ucwords(strtolower($zona));
while($datos1=gamemysql::getArray($cons_zona)){
$arrs_zona[$datos1['n_zona']]=$datos1['id_zona'];}
if (array_key_exists($zona_des, $arrs_zona)){
$cons_ene = gamemysql::query("SELECT * FROM enemigos where id_zona='".$arrs_zona[$zona_des]."' or id_zona=16 ORDER BY nivel_ene ASC");
$zona_n=$zona_des;	
$zonacorecta=1;
}else{
	$zonacorecta=0;
	echo "<hr><div><center>No existe esa zona, por favor vuelva a intentarlo</center></div>";  $_GET['zona']="";}
}
if($zonacorecta==1){
$cons_arm = gamemysql::query('SELECT * FROM armaduras ');
$cons_hab = gamemysql::query('SELECT * FROM habilidades ');
$cuenta=gamemysql::numResults($cons_ene);

echo '<div align="center"><font size="4" face="Times New Roman, Times, serif"><b>Resultados del la busqueda por Zona :<br>Seleccionaste "'.$zona_n.'", se agregan tambien los que estan en todas las zonas</b></font><br><b>Nota:</b>hay personajes que estan en todas las zonas, por eso se creo una zona llamada "Todas".<br><h2>Has encontrado '.$cuenta.' enemigos</h2></div>';

// enemigos
while($dato2=gamemysql::getArray($cons_ene)){
$arr_ene[$dato2['id_enemigo']]=$dato2;}
// armadura
while($dato3=gamemysql::getArray($cons_arm)){
$arr_arm[$dato3['id_arm']]=$dato3;}

// habilidades
while($dato4=gamemysql::getArray($cons_hab)){
$arr_hab[$dato4['id_habilidad']]=$dato4;}

if(empty($arr_ene)){ echo "<hr><div align='center'><b>No se ha encontraro nada, por favor vuelve a intentarlo o selecciona otro metodo de busqueda</b></div>";$_GET['nivel']="";}else{
foreach($arr_ene as $key => $value){
	// nombre
	echo '<table width="100%" border="1" cellspacing="0" cellpadding="0"><tr><th>Datos del enemigo</th><th>Datos del la armadura</th></tr><tr><td valign="top" width="50%"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td colspan="4" align="center"><b>Nombre del enemigo : </b><h2> '.utf8_encode($arr_ene[$key]['n_ene']);
	//imagen fans enemigo
	echo '</h2></td></tr><tr><td rowspan="17" width="auto" align="center"><img src="imag/fans_ene/'.strtolower($arr_ene[$key]['n_ene']).'[www.pharaonwebsite.com].png" width="250" height="450">';
	//presentacion ene
	echo '<div>Presencacion :<hr>'.utf8_encode($arr_ene[$key]['tex_ene']).'<br>';
	// caracteristicas del ene	
	$arm=$arr_ene[$key]['id_arm'];   	
	// nivel
	echo '</div></td><td colspan="3" align="center"></td></tr><tr><td height="20px" align="right" width="30%">Nivel :</td><td width="20px"></td><td width="20%"> '.$arr_ene[$key]['nivel_ene'];
	// vida
	echo '</td></tr><tr><td height="20px" width="30%" align="right">Vida :</td><td width="20px"></td><td height="20px" width="30%" align="left"> '.$arr_ene[$key]['vid_ene'];
	// fuerza
	echo '</td></tr><tr><td height="20px"  colspan="3" align="center"></td></tr><tr><td height="20px" align="right">Fuerza :</td><td></td><td> '.$arr_ene[$key]['fuer_ene'].' <b>+</b> '.$arr_arm[$arm]['fuer_arm'];		// resistencia
	echo '</td></tr><tr><td height="20px" align="right">Resistencia :</td><td></td><td> '.$arr_ene[$key]['res_ene'].' <b>+</b> '.$arr_arm[$arm]['res_arm'];	   
	//	sabiduria
	echo '</td></tr><tr><td height="20px" align="right">Sabiduria :</td><td></td><td> '.$arr_ene[$key]['sab_ene'];		   
	// res. psiquica
	echo '</td></tr><tr><td height="20px" align="right">Res. Psiquica :</td><td></td><td> '.$arr_ene[$key]['respsi_ene'].' <b>+</b> '.$arr_arm[$arm]['respsi_arm'];		   
	// velocidad
	echo '</td></tr><tr><td height="20px" align="right">Velocidad :</td><td></td><td> '.$arr_ene[$key]['vel_ene'].' <b>+</b> '.$arr_arm[$arm]['vel_arm'];			   
	// precision
 	echo '</td></tr><tr><td height="20px" align="right">Precision  :</td><td></td><td> '.$arr_ene[$key]['prec_ene'].' <b>+</b> '.$arr_arm[$arm]['prec_arm'];			   
	// reflejo
	echo '</td></tr><tr><td height="20px" align="right">Reflejo :</td><td></td><td> '.$arr_ene[$key]['ref_ene'].' <b>+</b> '.$arr_arm[$arm]['ref_arm'];			   
	// persistencia
	echo '</td></tr><tr><td height="20px" align="right">Persistencia  :</td><td></td><td> '.$arr_ene[$key]['pers_ene'];	
	// zona
	$zonaene=$arr_ene[$key]['id_zona'];
	echo '</td></tr><tr><td height="20px"  colspan="3" align="center"></td></tr><tr><td height="20px"  colspan="3" align="center">Zona :</td></tr><tr><td height="20px"  colspan="3" align="center"> ',$zona_n;	   	// exploracion
	echo '</td></tr><tr><td height="20px" align="right">Exp. Minima :</td><td></td><td> '.$arr_ene[$key]['req_explo_ene'];			   
	// armadura nombre
	echo ' min.</td></tr><tr><td colspan="3" align="center"></td></tr></table></td><td align="center" width="50%"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td colspan="6" align="center"><b>Nombre de la Armadura : </b><h2> '.utf8_encode($arr_arm[$arm]['n_arm']);
	// amradura presentacion
	echo '</h2></td></tr><tr><td colspan="3" align="center"></td><td rowspan="10" width="auto" align="center"><img src="imag/fans_arm/'.strtolower($arr_arm[$arm]['n_arm']).'[www.pharaonwebsite.com].png" width="250" height="250"><div>Presencacion :<hr>'.utf8_encode($arr_arm[$arm]['tex_arm']);		   
	// armadura material
	echo '</div></td></tr><tr><td height="20px" width="30%" align="center">Material : '.$arr_arm[$arm]['mat_arm'];
	// armadura estado
	echo '</td><td width="20px" ></td><td height="20px" width="20%" align="center">Estado : '.$arr_arm[$arm]['est_arm'].'%';
	// requisitos armadura nivel
	echo '</td></tr><tr><td height="20px"  colspan="3" align="center"><strong>Riquisitos :</strong></td></tr><tr><td height="20px" align="right">Nivel Minimo :</td><td></td><td> '.$arr_arm[$arm]['req_nivel_arm'];
	// requisitos armadura sabiduria
	echo '</td></tr><tr><td height="20px" align="right">Sabiduria Necesaria :</td><td></td><td> '.$arr_arm[$arm]['req_sab_arm'];
	// requisitos armadura signo			   
	echo '</td></tr><tr><td height="20px" align="right">Limitacion de Signo :</td><td></td><td> '.$arr_arm[$arm]['req_sig_arm'];				   
	// requisitos armadura honor
	echo '</td></tr><tr><td height="20px" align="right">Minimo de Honor  :</td><td></td><td> '.$arr_arm[$arm]['req_hon_arm'];			   
	// armadura tendencia			   
	echo '</td></tr><tr><td height="20px" colspan="3" align="center"></td></tr><tr><td height="20px" width="30%" align="center">Tendencia : '.$arr_arm[$arm]['tipo_arm'];			   
	// armadura comprable
	echo '</td><td width="20px"></td><td height="20px" width="20%" align="center">Comprable : (codificando)';
	// habilidades de la armadura
	echo '</td></tr><tr><td colspan="3" align="center"></td></tr></table></td></tr><tr><td colspan="2" align="center">Habilidades : <hr>';
			foreach($arr_hab as $key2 => $value2){ if($value2['id_arm']==$arm){
				// imagen y nombre de la habilidad
				echo '<div style="float:left; width:250px"><div style="float:left;"><img src="imag/habilidades/'.$value2['img_hab'].'" width="120" height="120" style="float:left"><br>'.utf8_encode($value2['tex_hab']).'</div><div style="float:left;"> Nombre :<br>'.$value2['n_hab']; 

			echo '<br>Nivel Necesario : '.$value2['req_nivel_hab'].'<br>'; 
			echo 'Limitacion de Signo : '.$value2['req_sig_hab'].'<br>';
			echo 'Ronda Minima : '.$value2['req_rond_hab'].'<br>';
			echo 'Sabiduria Necesaria : '.$value2['req_sab_hab'].'<br>';
			echo 'Septimo Sentido : '.$value2['req_sepsen_hab'].'<br>';
			echo 'Gasto de Cosmo : '.$value2['req_cos_hab'].'<br>';	
			echo 'Tipo de Hab. : '.$value2['tipo_hab'].'<br>';	
			echo 'Anula : '.$value2['anu_hab'].'<br>';
			echo 'Comprable por : '.$value2['val_hab'].'<br></div></div>';}}
   echo '</div></td></tr></table><br><br><br><br>';$_GET['zona']="";}$_GET['zona']=""; }}}



// funcion buscarnombre

function buscarnombre ($nombre){

$crit_nom=str_replace(" ","%",$nombre);

$cons_ene = gamemysql::query("SELECT * FROM enemigos where n_ene like '%".$crit_nom."%' ORDER BY nivel_ene ASC");

$cuenta=gamemysql::numResults($cons_ene);



$cons_zona = gamemysql::query('SELECT * FROM zonas ORDER BY n_zona ASC');

$cons_arm = gamemysql::query('SELECT * FROM armaduras ');

$cons_hab = gamemysql::query('SELECT * FROM habilidades ');

$cuenta=gamemysql::numResults($cons_ene);



echo '<div align="center"><font size="6" face="Times New Roman, Times, serif">Resultados del la busqueda por Nombre : <br>Estas buscando "'.$nombre.'", dentro de los nombre de los enemigos.</font><br><b>Nota:</b>cuanto mas exacto pongas el nombre menor va a ser la lista.<br>';

echo '<h1>Has encontrado '.$cuenta.' enemigos</h1>';



//zona

while($dato1=gamemysql::getArray($cons_zona)){

$arr_zona[$dato1['id_zona']]=$dato1;}

// enemigos

while($dato2=gamemysql::getArray($cons_ene)){

$arr_ene[$dato2['id_enemigo']]=$dato2;}

// armadura

while($dato3=gamemysql::getArray($cons_arm)){

$arr_arm[$dato3['id_arm']]=$dato3;}

// habilidades

while($dato4=gamemysql::getArray($cons_hab)){

$arr_hab[$dato4['id_habilidad']]=$dato4;}

if(empty($arr_ene)){ echo "<hr><div align='center'><b>No se ha encontraro nada, por favor vuelve a intentarlo o selecciona otro metodo de busqueda</b></div>";$_GET['nivel']="";}else{

foreach($arr_ene as $key => $value){

	// nombre

	echo '<table width="100%" border="1" cellspacing="0" cellpadding="0"><tr><th>Datos del enemigo</th><th>Datos del la armadura</th></tr><tr><td valign="top" width="50%"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td colspan="4" align="center"><b>Nombre del enemigo : </b><h2> '.utf8_encode($arr_ene[$key]['n_ene']);

	//imagen fans enemigo

	echo '</h2></td></tr><tr><td rowspan="17" width="auto" align="center"><img src="imag/fans_ene/'.strtolower($arr_ene[$key]['n_ene']).'[www.pharaonwebsite.com].png" width="250" height="450">';

	//presentacion ene

	echo '<div>Presencacion :<hr>'.utf8_encode($arr_ene[$key]['tex_ene']).'<br>';

	// caracteristicas del ene	

	$arm=$arr_ene[$key]['id_arm'];   	

	// nivel

	echo '</div></td><td colspan="3" align="center"></td></tr><tr><td height="20px" align="right" width="30%">Nivel :</td><td width="20px"></td><td width="20%"> '.$arr_ene[$key]['nivel_ene'];

	// vida

	echo '</td></tr><tr><td height="20px" width="30%" align="right">Vida :</td><td width="20px"></td><td height="20px" width="30%" align="left"> '.$arr_ene[$key]['vid_ene'];

	// fuerza

	echo '</td></tr><tr><td height="20px"  colspan="3" align="center"></td></tr><tr><td height="20px" align="right">Fuerza :</td><td></td><td> '.$arr_ene[$key]['fuer_ene'].' <b>+</b> '.$arr_arm[$arm]['fuer_arm'];		// resistencia

	echo '</td></tr><tr><td height="20px" align="right">Resistencia :</td><td></td><td> '.$arr_ene[$key]['res_ene'].' <b>+</b> '.$arr_arm[$arm]['res_arm'];	   

	//	sabiduria

	echo '</td></tr><tr><td height="20px" align="right">Sabiduria :</td><td></td><td> '.$arr_ene[$key]['sab_ene'];		   

	// res. psiquica

	echo '</td></tr><tr><td height="20px" align="right">Res. Psiquica :</td><td></td><td> '.$arr_ene[$key]['respsi_ene'].' <b>+</b> '.$arr_arm[$arm]['respsi_arm'];		   

	// velocidad

	echo '</td></tr><tr><td height="20px" align="right">Velocidad :</td><td></td><td> '.$arr_ene[$key]['vel_ene'].' <b>+</b> '.$arr_arm[$arm]['vel_arm'];			   

	// precision

 	echo '</td></tr><tr><td height="20px" align="right">Precision  :</td><td></td><td> '.$arr_ene[$key]['prec_ene'].' <b>+</b> '.$arr_arm[$arm]['prec_arm'];			   

	// reflejo

	echo '</td></tr><tr><td height="20px" align="right">Reflejo :</td><td></td><td> '.$arr_ene[$key]['ref_ene'].' <b>+</b> '.$arr_arm[$arm]['ref_arm'];			   

	// persistencia

	echo '</td></tr><tr><td height="20px" align="right">Persistencia  :</td><td></td><td> '.$arr_ene[$key]['pers_ene'];	

	// zona

	$zonaene=$arr_ene[$key]['id_zona'];

	echo '</td></tr><tr><td height="20px"  colspan="3" align="center"></td></tr><tr><td height="20px"  colspan="3" align="center">Zona :</td></tr><tr><td height="20px"  colspan="3" align="center"> '.$arr_zona[$zonaene]['n_zona'];	   

	// exploracion

	echo '</td></tr><tr><td height="20px" align="right">Exp. Minima :</td><td></td><td> '.$arr_ene[$key]['req_explo_ene'];			   

	// armadura nombre

	echo ' min.</td></tr><tr><td colspan="3" align="center"></td></tr></table></td><td align="center" width="50%"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td colspan="6" align="center"><b>Nombre de la Armadura : </b><h2> '.utf8_encode($arr_arm[$arm]['n_arm']);

	// amradura presentacion

	echo '</h2></td></tr><tr><td colspan="3" align="center"></td><td rowspan="10" width="auto" align="center"><img src="imag/fans_arm/'.strtolower($arr_arm[$arm]['n_arm']).'[www.pharaonwebsite.com].png" width="250" height="250"><div>Presencacion :<hr>'.utf8_encode($arr_arm[$arm]['tex_arm']);		   

	// armadura material

	echo '</div></td></tr><tr><td height="20px" width="30%" align="center">Material : '.$arr_arm[$arm]['mat_arm'];

	// armadura estado

	echo '</td><td width="20px" ></td><td height="20px" width="20%" align="center">Estado : '.$arr_arm[$arm]['est_arm'].'%';

	// requisitos armadura nivel

	echo '</td></tr><tr><td height="20px"  colspan="3" align="center"><strong>Riquisitos :</strong></td></tr><tr><td height="20px" align="right">Nivel Minimo :</td><td></td><td> '.$arr_arm[$arm]['req_nivel_arm'];

	// requisitos armadura sabiduria

	echo '</td></tr><tr><td height="20px" align="right">Sabiduria Necesaria :</td><td></td><td> '.$arr_arm[$arm]['req_sab_arm'];

	// requisitos armadura signo			   

	echo '</td></tr><tr><td height="20px" align="right">Limitacion de Signo :</td><td></td><td> '.$arr_arm[$arm]['req_sig_arm'];				   

	// requisitos armadura honor

	echo '</td></tr><tr><td height="20px" align="right">Minimo de Honor  :</td><td></td><td> '.$arr_arm[$arm]['req_hon_arm'];			   

	// armadura tendencia			   

	echo '</td></tr><tr><td height="20px" colspan="3" align="center"></td></tr><tr><td height="20px" width="30%" align="center">Tendencia : '.$arr_arm[$arm]['tipo_arm'];			   

	// armadura comprable

	echo '</td><td width="20px"></td><td height="20px" width="20%" align="center">Comprable : (codificando)';

	// habilidades de la armadura

	echo '</td></tr><tr><td colspan="3" align="center"></td></tr></table></td></tr><tr><td colspan="2" align="center">Habilidades : <hr>';

			foreach($arr_hab as $key2 => $value2){ if($value2['id_arm']==$arm){

				// imagen y nombre de la habilidad

				echo '<div style="float:left; width:250px"><div style="float:left;"><img src="imag/habilidades/'.$value2['img_hab'].'" width="120" height="120" style="float:left"><br>'.utf8_encode($value2['tex_hab']).'</div><div style="float:left;"> Nombre :<br>'.$value2['n_hab']; 

			echo '<br>Nivel Necesario : '.$value2['req_nivel_hab'].'<br>';

			echo 'Limitacion de Signo : '.$value2['req_sig_hab'].'<br>';

			echo 'Ronda Minima : '.$value2['req_rond_hab'].'<br>';

			echo 'Sabiduria Necesaria : '.$value2['req_sab_hab'].'<br>';

			echo 'Septimo Sentido : '.$value2['req_sepsen_hab'].'<br>';

			echo 'Gasto de Cosmo : '.$value2['req_cos_hab'].'<br>';	

			echo 'Tipo de Hab. : '.$value2['tipo_hab'].'<br>';	

			echo 'Anula : '.$value2['anu_hab'].'<br>';

			echo 'Comprable por : '.$value2['val_hab'].'<br></div></div>';

							}}

   echo '</div></td></tr></table><br><br><br><br>';}$_GET['nombre']=""; }}





// funcion buscararmadura

function buscararmadura ($nombrearm){

$crit_nom=str_replace(" ","%",$nombrearm);

$cons_arm = gamemysql::query("SELECT * FROM armaduras where n_arm like '%".$crit_nom."%' ORDER BY req_sig_arm ASC ");

// armadura

while($dato3=gamemysql::getArray($cons_arm)){

$arr_arm[$dato3['id_arm']]=$dato3;}



$cuenta=gamemysql::numResults($cons_arm);



$cons_ene = gamemysql::query('SELECT * FROM enemigos');

$cons_zona = gamemysql::query('SELECT * FROM zonas ORDER BY n_zona ASC');

$cons_hab = gamemysql::query('SELECT * FROM habilidades');





echo '<div align="center"><font size="6" face="Times New Roman, Times, serif">Resultados del la busqueda por Nombre : <br>Estas buscando "'.$nombrearm.'", dentro de los nombre de las Armaduras.</font><br><b>Nota:</b>cuanto mas exacto pongas el nombre menor va a ser la lista.<br>';

echo '<h1>Has encontrado '.$cuenta.' enemigos</h1>';



//zona

while($dato1=gamemysql::getArray($cons_zona)){

$arr_zona[$dato1['id_zona']]=$dato1;}

// enemigos

while($dato2=gamemysql::getArray($cons_ene)){

$arr_ene[$dato2['id_arm']]=$dato2;}

// habilidades

while($dato4=gamemysql::getArray($cons_hab)){

$arr_hab[$dato4['id_habilidad']]=$dato4;}



if(empty($arr_ene)){ echo "<hr><div align='center'><b>No se ha encontraro nada, por favor vuelve a intentarlo o selecciona otro metodo de busqueda</b></div>";$_GET['nivel']="";}else{

foreach($arr_arm as $key => $value){

	// nombre

	echo '<table width="100%" border="1" cellspacing="0" cellpadding="0"><tr><th>Datos del enemigo</th><th>Datos del la armadura</th></tr><tr><td valign="top" width="50%"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td colspan="4" align="center"><b>Nombre del enemigo : </b><h2> '.utf8_encode($arr_ene[$key]['n_ene']);

	//imagen fans enemigo

	echo '</h2></td></tr><tr><td rowspan="17" width="auto" align="center"><img src="imag/fans_ene/'.strtolower($arr_ene[$key]['n_ene']).'[www.pharaonwebsite.com].png" width="250" height="450">';

	//presentacion ene

	echo '<div>Presencacion :<hr>'.utf8_encode($arr_ene[$key]['tex_ene']).'<br>';

	// caracteristicas del ene	

	$arm=$arr_ene[$key]['id_arm'];   	

	// nivel

	echo '</div></td><td colspan="3" align="center"></td></tr><tr><td height="20px" align="right" width="30%">Nivel :</td><td width="20px"></td><td width="20%"> '.$arr_ene[$key]['nivel_ene'];

	// vida

	echo '</td></tr><tr><td height="20px" width="30%" align="right">Vida :</td><td width="20px"></td><td height="20px" width="30%" align="left"> '.$arr_ene[$key]['vid_ene'];

	// fuerza

	echo '</td></tr><tr><td height="20px"  colspan="3" align="center"></td></tr><tr><td height="20px" align="right">Fuerza :</td><td></td><td> '.$arr_ene[$key]['fuer_ene'].' <b>+</b> '.$arr_arm[$arm]['fuer_arm'];		// resistencia

	echo '</td></tr><tr><td height="20px" align="right">Resistencia :</td><td></td><td> '.$arr_ene[$key]['res_ene'].' <b>+</b> '.$arr_arm[$arm]['res_arm'];	   

	//	sabiduria

	echo '</td></tr><tr><td height="20px" align="right">Sabiduria :</td><td></td><td> '.$arr_ene[$key]['sab_ene'];		   

	// res. psiquica

	echo '</td></tr><tr><td height="20px" align="right">Res. Psiquica :</td><td></td><td> '.$arr_ene[$key]['respsi_ene'].' <b>+</b> '.$arr_arm[$arm]['respsi_arm'];		   

	// velocidad

	echo '</td></tr><tr><td height="20px" align="right">Velocidad :</td><td></td><td> '.$arr_ene[$key]['vel_ene'].' <b>+</b> '.$arr_arm[$arm]['vel_arm'];			   

	// precision

 	echo '</td></tr><tr><td height="20px" align="right">Precision  :</td><td></td><td> '.$arr_ene[$key]['prec_ene'].' <b>+</b> '.$arr_arm[$arm]['prec_arm'];			   

	// reflejo

	echo '</td></tr><tr><td height="20px" align="right">Reflejo :</td><td></td><td> '.$arr_ene[$key]['ref_ene'].' <b>+</b> '.$arr_arm[$arm]['ref_arm'];			   

	// persistencia

	echo '</td></tr><tr><td height="20px" align="right">Persistencia  :</td><td></td><td> '.$arr_ene[$key]['pers_ene'];	

	// zona

	$zonaene=$arr_ene[$key]['id_zona'];

	echo '</td></tr><tr><td height="20px"  colspan="3" align="center"></td></tr><tr><td height="20px"  colspan="3" align="center">Zona :</td></tr><tr><td height="20px"  colspan="3" align="center"> '.$arr_zona[$zonaene]['n_zona'];	   	// exploracion

	echo '</td></tr><tr><td height="20px" align="right">Exp. Minima :</td><td></td><td> '.$arr_ene[$key]['req_explo_ene'];			   

	// armadura nombre

	echo ' min.</td></tr><tr><td colspan="3" align="center"></td></tr></table></td><td align="center" width="50%"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td colspan="6" align="center"><b>Nombre de la Armadura : </b><h2> '.utf8_encode($arr_arm[$arm]['n_arm']);

	// amradura presentacion

	echo '</h2></td></tr><tr><td colspan="3" align="center"></td><td rowspan="10" width="auto" align="center"><img src="imag/fans_arm/'.strtolower($arr_arm[$arm]['n_arm']).'[www.pharaonwebsite.com].png" width="250" height="250"><div>Presencacion :<hr>'.utf8_encode($arr_arm[$arm]['tex_arm']);		   

	// armadura material

	echo '</div></td></tr><tr><td height="20px" width="30%" align="center">Material : '.$arr_arm[$arm]['mat_arm'];

	// armadura estado

	echo '</td><td width="20px" ></td><td height="20px" width="20%" align="center">Estado : '.$arr_arm[$arm]['est_arm'].'%';

	// requisitos armadura nivel

	echo '</td></tr><tr><td height="20px"  colspan="3" align="center"><strong>Riquisitos :</strong></td></tr><tr><td height="20px" align="right">Nivel Minimo :</td><td></td><td> '.$arr_arm[$arm]['req_nivel_arm'];

	// requisitos armadura sabiduria

	echo '</td></tr><tr><td height="20px" align="right">Sabiduria Necesaria :</td><td></td><td> '.$arr_arm[$arm]['req_sab_arm'];

	// requisitos armadura signo			   

	echo '</td></tr><tr><td height="20px" align="right">Limitacion de Signo :</td><td></td><td> '.$arr_arm[$arm]['req_sig_arm'];				   

	// requisitos armadura honor

	echo '</td></tr><tr><td height="20px" align="right">Minimo de Honor  :</td><td></td><td> '.$arr_arm[$arm]['req_hon_arm'];			   

	// armadura tendencia			   

	echo '</td></tr><tr><td height="20px" colspan="3" align="center"></td></tr><tr><td height="20px" width="30%" align="center">Tendencia : '.$arr_arm[$arm]['tipo_arm'];			   

	// armadura comprable

	echo '</td><td width="20px"></td><td height="20px" width="20%" align="center">Comprable : (codificando)';

	// habilidades de la armadura

	echo '</td></tr><tr><td colspan="3" align="center"></td></tr></table></td></tr><tr><td colspan="2" align="center">Habilidades : <hr>';

			foreach($arr_hab as $key2 => $value2){ if($value2['id_arm']==$arm){

				// imagen y nombre de la habilidad

				echo '<div style="float:left; width:250px"><div style="float:left;"><img src="imag/habilidades/'.$value2['img_hab'].'" width="120" height="120" style="float:left"><br>'.utf8_encode($value2['tex_hab']).'</div><div style="float:left;"> Nombre :<br>'.$value2['n_hab']; 

			echo '<br>Nivel Necesario : '.$value2['req_nivel_hab'].'<br>';

			echo 'Limitacion de Signo : '.$value2['req_sig_hab'].'<br>';

			echo 'Ronda Minima : '.$value2['req_rond_hab'].'<br>';

			echo 'Sabiduria Necesaria : '.$value2['req_sab_hab'].'<br>';

			echo 'Septimo Sentido : '.$value2['req_sepsen_hab'].'<br>';

			echo 'Gasto de Cosmo : '.$value2['req_cos_hab'].'<br>';	

			echo 'Tipo de Hab. : '.$value2['tipo_hab'].'<br>';	

			echo 'Anula : '.$value2['anu_hab'].'<br>';

			echo 'Comprable por : '.$value2['val_hab'].'<br></div></div>';

							}}

   echo '</div></td></tr></table><br><br><br><br>';}$_GET['armadura']=""; }}









// funcion buscarhabilidad

function buscarhabilidad ($habilidad){

$crit_nom=str_replace(" ","%",$habilidad);

$cons_hab = gamemysql::query("SELECT * FROM habilidades where n_hab like '%".$crit_nom."%' ORDER BY req_sig_hab ASC");



// habilidades

while($dato4=gamemysql::getArray($cons_hab)){

$arr_hab[$dato4['id_habilidad']]=$dato4;}

$cuenta=gamemysql::numResults($cons_hab);



$cons_arm = gamemysql::query("SELECT * FROM armaduras");

$cons_ene = gamemysql::query('SELECT * FROM enemigos');

$cons_zona = gamemysql::query('SELECT * FROM zonas ORDER BY n_zona ASC');





echo '<div align="center"><font  size="6" face="Times New Roman, Times, serif">Resultados del la busqueda por habilidad : <br>Estas buscando "'.$habilidad.'", dentro de los nombre de las Habilidades.</font><br><b>Nota:</b>cuanto mas exacto pongas el nombre menor va a ser la lista.<br>';

echo '<h1>Has encontrado '.$cuenta.' enemigos</h1>';



//zona

while($dato1=gamemysql::getArray($cons_zona)){

$arr_zona[$dato1['id_zona']]=$dato1;}

// enemigos

while($dato2=gamemysql::getArray($cons_ene)){

$arr_ene[$dato2['id_arm']]=$dato2;}

// armadura

while($dato3=gamemysql::getArray($cons_arm)){

$arr_arm[$dato3['id_arm']]=$dato3;}



if(empty($arr_ene)){ echo "<hr><div align='center'><b>No se ha encontraro nada, por favor vuelve a intentarlo o selecciona otro metodo de busqueda</b></div>";$_GET['nivel']="";}else{

foreach($arr_hab as $key => $value){

	// nombre

	echo '<table width="100%" border="1" cellspacing="0" cellpadding="0"><tr><th>Datos del enemigo</th><th>Datos del la armadura</th></tr><tr><td valign="top" width="50%"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td colspan="4" align="center"><b>Nombre del enemigo : </b><h2> '.utf8_encode($arr_ene[$key]['n_ene']);

	//imagen fans enemigo

	echo '</h2></td></tr><tr><td rowspan="17" width="auto" align="center"><img src="imag/fans_ene/'.strtolower($arr_ene[$key]['n_ene']).'[www.pharaonwebsite.com].png" width="250" height="450">';

	//presentacion ene

	echo '<div>Presencacion :<hr>'.utf8_encode($arr_ene[$key]['tex_ene']).'<br>';

	// caracteristicas del ene	

	$arm=$arr_ene[$key]['id_arm'];   	

	// nivel

	echo '</div></td><td colspan="3" align="center"></td></tr><tr><td height="20px" align="right" width="30%">Nivel :</td><td width="20px"></td><td width="20%"> '.$arr_ene[$key]['nivel_ene'];

	// vida

	echo '</td></tr><tr><td height="20px" width="30%" align="right">Vida :</td><td width="20px"></td><td height="20px" width="30%" align="left"> '.$arr_ene[$key]['vid_ene'];

	// fuerza

	echo '</td></tr><tr><td height="20px"  colspan="3" align="center"></td></tr><tr><td height="20px" align="right">Fuerza :</td><td></td><td> '.$arr_ene[$key]['fuer_ene'].' <b>+</b> '.$arr_arm[$arm]['fuer_arm'];		// resistencia

	echo '</td></tr><tr><td height="20px" align="right">Resistencia :</td><td></td><td> '.$arr_ene[$key]['res_ene'].' <b>+</b> '.$arr_arm[$arm]['res_arm'];	   

	//	sabiduria

	echo '</td></tr><tr><td height="20px" align="right">Sabiduria :</td><td></td><td> '.$arr_ene[$key]['sab_ene'];		   

	// res. psiquica

	echo '</td></tr><tr><td height="20px" align="right">Res. Psiquica :</td><td></td><td> '.$arr_ene[$key]['respsi_ene'].' <b>+</b> '.$arr_arm[$arm]['respsi_arm'];		   

	// velocidad

	echo '</td></tr><tr><td height="20px" align="right">Velocidad :</td><td></td><td> '.$arr_ene[$key]['vel_ene'].' <b>+</b> '.$arr_arm[$arm]['vel_arm'];			   

	// precision

 	echo '</td></tr><tr><td height="20px" align="right">Precision  :</td><td></td><td> '.$arr_ene[$key]['prec_ene'].' <b>+</b> '.$arr_arm[$arm]['prec_arm'];			   

	// reflejo

	echo '</td></tr><tr><td height="20px" align="right">Reflejo :</td><td></td><td> '.$arr_ene[$key]['ref_ene'].' <b>+</b> '.$arr_arm[$arm]['ref_arm'];			   

	// persistencia

	echo '</td></tr><tr><td height="20px" align="right">Persistencia  :</td><td></td><td> '.$arr_ene[$key]['pers_ene'];	

	// zona

	$zonaene=$arr_ene[$key]['id_zona'];

	echo '</td></tr><tr><td height="20px"  colspan="3" align="center"></td></tr><tr><td height="20px"  colspan="3" align="center">Zona :</td></tr><tr><td height="20px"  colspan="3" align="center"> '.$arr_zona[$zonaene]['n_zona'];	   	// exploracion

	echo '</td></tr><tr><td height="20px" align="right">Exp. Minima :</td><td></td><td> '.$arr_ene[$key]['req_explo_ene'];			   

	// armadura nombre

	echo ' min.</td></tr><tr><td colspan="3" align="center"></td></tr></table></td><td align="center" width="50%"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td colspan="6" align="center"><b>Nombre de la Armadura : </b><h2> '.utf8_encode($arr_arm[$arm]['n_arm']);

	// amradura presentacion

	echo '</h2></td></tr><tr><td colspan="3" align="center"></td><td rowspan="10" width="auto" align="center"><img src="imag/fans_arm/'.strtolower($arr_arm[$arm]['n_arm']).'[www.pharaonwebsite.com].png" width="250" height="250"><div>Presencacion :<hr>'.utf8_encode($arr_arm[$arm]['tex_arm']);		   

	// armadura material

	echo '</div></td></tr><tr><td height="20px" width="30%" align="center">Material : '.$arr_arm[$arm]['mat_arm'];

	// armadura estado

	echo '</td><td width="20px" ></td><td height="20px" width="20%" align="center">Estado : '.$arr_arm[$arm]['est_arm'].'%';

	// requisitos armadura nivel

	echo '</td></tr><tr><td height="20px"  colspan="3" align="center"><strong>Riquisitos :</strong></td></tr><tr><td height="20px" align="right">Nivel Minimo :</td><td></td><td> '.$arr_arm[$arm]['req_nivel_arm'];

	// requisitos armadura sabiduria

	echo '</td></tr><tr><td height="20px" align="right">Sabiduria Necesaria :</td><td></td><td> '.$arr_arm[$arm]['req_sab_arm'];

	// requisitos armadura signo			   

	echo '</td></tr><tr><td height="20px" align="right">Limitacion de Signo :</td><td></td><td> '.$arr_arm[$arm]['req_sig_arm'];				   

	// requisitos armadura honor

	echo '</td></tr><tr><td height="20px" align="right">Minimo de Honor  :</td><td></td><td> '.$arr_arm[$arm]['req_hon_arm'];			   

	// armadura tendencia			   

	echo '</td></tr><tr><td height="20px" colspan="3" align="center"></td></tr><tr><td height="20px" width="30%" align="center">Tendencia : '.$arr_arm[$arm]['tipo_arm'];			   

	// armadura comprable

	echo '</td><td width="20px"></td><td height="20px" width="20%" align="center">Comprable : (codificando)';

	// habilidades de la armadura

	echo '</td></tr><tr><td colspan="3" align="center"></td></tr></table></td></tr><tr><td colspan="2" align="center">Habilidades : <hr>';

			foreach($arr_hab as $key2 => $value2){ if($value2['id_arm']==$arm){

				// imagen y nombre de la habilidad

				echo '<div style="float:left; width:250px"><div style="float:left;"><img src="imag/habilidades/'.$value2['img_hab'].'" width="120" height="120" style="float:left"><br>'.utf8_encode($value2['tex_hab']).'</div><div style="float:left;"> Nombre :<br>'.$value2['n_hab']; 

			echo '<br>Nivel Necesario : '.$value2['req_nivel_hab'].'<br>';

			echo 'Limitacion de Signo : '.$value2['req_sig_hab'].'<br>';

			echo 'Ronda Minima : '.$value2['req_rond_hab'].'<br>';

			echo 'Sabiduria Necesaria : '.$value2['req_sab_hab'].'<br>';

			echo 'Septimo Sentido : '.$value2['req_sepsen_hab'].'<br>';

			echo 'Gasto de Cosmo : '.$value2['req_cos_hab'].'<br>';	

			echo 'Tipo de Hab. : '.$value2['tipo_hab'].'<br>';	

			echo 'Anula : '.$value2['anu_hab'].'<br>';

			echo 'Comprable por : '.$value2['val_hab'].'<br></div></div>';

							}}

   echo '</div></td></tr></table><br><br><br><br>';}$_GET['armadura']=""; }}

//funcion buscargeneral

function buscargeneral ($general){echo 'En construccion por favor utilizi los otros sistemas de busqueda';}

?>