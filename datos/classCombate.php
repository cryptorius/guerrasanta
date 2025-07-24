<?php
class combate {
// empieza la funcion presentacion
function presentacion ($pj){
combate::arm($pj);
$arpjn = $GLOBALS['arpjn'];
$imgusuario = file_exists("../usuario/".$pj['nick']."/".$pj['nick'].".png");
echo '<td width="350px"><div align="center" width="250px" height="350px"><div style="background-color:#000000; background-image:url(../imagenes/dioses/'.$pj['dios'].'.png); background-position:top; background-repeat:no-repeat" align="center" width="250px" height="350px"><br><br>';
echo "<img src='../";
if (($pj['prem'] == 'prem')){
if ($imgusuario){echo "usuario/".$pj['nick']."/".$pj['nick'].".png' width='250px' height='350px' />";
}else{if (count($pj['ar'])==0){echo "imagenes/caballeros/base.png' width='250px' height='350px' />";
}else{echo "imagenes/caballeros/Caballero_de_".$arpjn.".png' width='250px' height='350px' />";}}
}else{echo "imagenes/caballeros/base.png' width='250px' height='350px' />";}
echo "<img src='../imagenes/armaduras/Armadura_de_".$arpjn.".png' width='150px' height='150px' />";
echo '</div></div></td>';}
// finaliza la funcion presentacion
// empieza la funcion premium
function estado ($pj, $estados){
$cantestados = array_keys($estados);
$numeopciones = count($cantestados)-1;
if (($pj['prem']) == "free"){
$estoy =  $cantestados[rand(0,$numeopciones)];
//echo '<br>esta cuenta es free<br>';
}else{
$estoy =  $cantestados[rand(2,$numeopciones)];
//echo '<br>esta cuenta es premium<br>';
};
$ajuste = $estados[$estoy];
echo '<td align="center">';
switch ($estoy) {
    case 'Furioso';
        echo '<font color="#FF0000" size="+5" style="background-color:#000000"><b>'.$estoy.'</b></font>';
        break;
	case 'Confiado';
        echo '<font color="#cccccc" size="+5" style="background-color:#000000"><b>'.$estoy.'</b></font>';
        break;
  	case 'Confundido';
        echo '<font color="#00ff00" size="+5" style="background-color:#000000"><b>'.$estoy.'</b></font>';
        break;
	case 'Distraido';
        echo '<font color="#0000ff" size="+5" style="background-color:#000000"><b>'.$estoy.'</b></font>';
        break;}
echo '<br><b style="background-color:#000000">Tus puntos <font size="+2">';
echo combate::clase($pj);
echo '</font> estan al '.$ajuste.'%</b></td>';
$GLOBALS['ajuste'] = $ajuste;
}
// finaliza la funcion premium
// empieza la funcion tipo de personaje
function Clase($pj){
if ($pj['i'] > $pj['f']){$pjint = (($pj['i'])*(100/$pj['f']))-100;
if($pjint > 65){$pjtipo = "Cosmico";echo $pjtipo;$GLOBALS['tipo'] = $pjtipo;}else{$pjtipo = "Hibrido";echo $pjtipo; $GLOBALS['tipo'] = $pjtipo;}}else{$pjfuer = (($pj['f'])*(100/$pj['i']))-100;
if($pjfuer > 65 ){$pjtipo = "Fisico";echo $pjtipo;$GLOBALS['tipo'] = $pjtipo;}else{$pjtipo = "Hibrido";echo $pjtipo;$GLOBALS['tipo'] = $pjtipo;}}}
// finaliza la funcion tipo de personaje
// funcion armadura
function arm($pj){
$arpjbase = $pj['ar'];
$arpjn = key($arpjbase);
$arpjporce = current($arpjbase);
$GLOBALS['arpjn'] = $arpjn;
$GLOBALS['arpjporce'] = $arpjporce;
}
// fin funcion armadura
// empieza la funcion barra de vida y mana
function barra($pj, $pjv, $pjm, $dicc){
$vida = ($pjv)*(100/($pj['v']));
$pjv = (int) ($pjv);
$mana = ($pjm)*(100/($pj['m']));
$pjm = (int) ($pjm);
echo '<div align="center"><b>'.number_format($vida, 2).'% de Vida</b><br><div style="width:100px;background-color:#CCCCCC; height:15px; float:'.$dicc.'" align="'.$dicc.'"><div style="background-color:#FF0000; width:'.$vida.'%; height:15px"></div></div>';
echo '<br><font style="background-color:#000000">'.$pjv.'/'.($pj['v']).'</font>';
echo '<br><b>'.number_format($mana, 2).'% de Cosmo</b><br><div style="width:100px;background-color:#CCCCCC; height:15px; float:'.$dicc.'" align="'.$dicc.'"><div style="background-color:#0000FF; width:'.$mana.'%; height:15px"></div></div>';
echo '<br><font style="background-color:#000000">'.$pjm.'/'.($pj['m']).'</font></div>';
}
// finaliza la funcion barra de vida y mana
// daño
function dano ($pj, $pjv, $pjm, $pjf, $pji, $pja, $pjd, $pjr, $pjva, $pjvm){
switch ($pj['tipo']) {
    case "Fisico";
       $golpe = $pjf;
	   $dano = rand((($golpe*$pj['ajuste']/100)/2), $golpe);
	   echo 'Tienes '.$pjf.' de fuerza y se ajustara un '.$pj['ajuste'].'<br>Por lo tanto tu dano es de '.$dano.'<br>';
	   $pj['atknum'] = $pj['atknum'] + 1;
	   echo 'Has tirado un Puno de fuerza con un poder de '.$dano.' de daño';
	   $GLOBALS['atknum'] = $pj['atknum'];
	   $GLOBALS['dano'] = $dano;
        break;
	case "Hibrido";
        $golpe = (($pjf+$pji)/2);
		$dano = rand((($golpe*$pj['ajuste']/100)/2), $golpe);
		echo 'tenes '.$pjf.' de fuerza, con '.$pji.' de inteligencia y se ajustara un '.$pj['ajuste'].'<br>Por lo tanto tu dano es de '.$dano.'<br>';
		$pj['atknum'] = $pj['atknum'] + 1;
	    echo 'Has tirado un golpe de rafagas conbinadas con cosmo con un poder de '.$dano.' de daño';
		$GLOBALS['atknum'] = $pj['atknum'];
		$GLOBALS['dano'] = $dano;
		break;
    case "Cosmico";
       $golpe = $pji;
	   $dano = rand((($golpe*$pj['ajuste']/100)/2), $golpe);
	   echo 'tenes '.$pj['i'].' de fuerza y se ajustara un '.$pj['ajuste'].'<br>Por lo tanto tu dano es de '.$dano.'<br>';
	   $pj['atknum'] = $pj['atknum'] + 1;
	   echo 'Has tirado un Puno con cosmo con un poder de '.$dano.' de dano';
		$GLOBALS['atknum'] = $pj['atknum'];
		$GLOBALS['dano'] = $dano;
        break;}
}
// fin de daño
// empieza la funcion poder
function poder ($pj, $pjb,$pjv,$pjm,$pjf,$pji,$pja,$pjd,$pjr,$pjva,$pjvm,$pjbv,$pjbm,$pjbf,$pjbi,$pjba,$pjbd,$pjbr,$pjbva,$pjbvm, $turno, $tacticas){
// ataque con habilidad
$tacpjbase = $pj['tac'];
$tacpjhab = $tacpjbase['h'];
if (array_key_exists($pj['atknum'], $tacpjhab)) {
$habpjturn = $tacpjhab[$pj['atknum']];
$habpjn = key($habpjturn);
$habpjporce = current($habpjturn);
$tacservbasehab = $tacticas['h'];
$tacservbasehabn = $tacservbasehab[$habpjn];
$tacservbasehabprem = $tacservbasehabn['cuenta'];
if ($pj['prem'] == 'free'){$tacservbasehabacc = 'free';}else{$tacservbasehabacc = true;};
$tacservbasehabt = $tacservbasehabn['tipo'];
$tacservbasehaba = $tacservbasehabn['afecta'];
if(($pj['tipo'] == $tacservbasehabt) and ($pjm >= $tacservbasehaba['m']) and ( $tacservbasehabprem == $tacservbasehabacc)){
$tacservbasehabq = $tacservbasehabn['quien'];
echo '<font color="#008000" style="background-color:#000000"><b>Usando la Habilidad de '.$habpjn.'<br>';
echo 'Con una Intensidad del '.$habpjporce.'% <br></b></font>';
echo "<div align='center'><img src='../imagenes/ataques/habilidad_de_".$habpjn.".gif' width='150px' height='150px' /></div>";
if ($tacservbasehabq == 0){
$tacservbasehabav = $tacservbasehaba['v'];
$pjv = $pjv + ($tacservbasehabav*($habpjporce/100));
$tacservbasehabam = $tacservbasehaba['m'];
$pjm = $pjm + ($tacservbasehabam*($habpjporce/100));
$tacservbasehabaf = $tacservbasehaba['f'];
$pjf = $pjf + ($tacservbasehabaf*($habpjporce/100));
$tacservbasehabai = $tacservbasehaba['i'];
$pji = $pji + ($tacservbasehabai*($habpjporce/100));
$tacservbasehabaa = $tacservbasehaba['a'];
$pja = $pja + ($tacservbasehabaa*($habpjporce/100));
$tacservbasehabad = $tacservbasehaba['d'];
$pjd = $pjd + ($tacservbasehabad*($habpjporce/100));
$tacservbasehabar = $tacservbasehaba['r'];
$pjr = $pjr + ($tacservbasehabar*($habpjporce/100));
$tacservbasehabava = $tacservbasehaba['va'];
$pjva = $pjva + ($tacservbasehabava*($habpjporce/100));
$tacservbasehabavm = $tacservbasehaba['vm'];
$pjvm = $pjvm + ($tacservbasehabavm*($habpjporce/100));
echo '<font style="background-color:#000000"><b>Me afecta a mi y ';
}elseif($tacservbasehabq == 1){
$tacservbasehabavb = $tacservbasehaba['v'];
$pjbv = $pjbv + ($tacservbasehabavb*($habpjporce/100));
$tacservbasehabamb = $tacservbasehaba['m'];
$pjbm = $pjbm + ($tacservbasehabamb*($habpjporce/100));
$tacservbasehabafb = $tacservbasehaba['f'];
$pjbf = $pjbf + ($tacservbasehabafb*($habpjporce/100));
$tacservbasehabaib = $tacservbasehaba['i'];
$pjbi = $pjbi + ($tacservbasehabaib*($habpjporce/100));
$tacservbasehabaab = $tacservbasehaba['a'];
$pjba = $pjba + ($tacservbasehabaab*($habpjporce/100));
$tacservbasehabadb = $tacservbasehaba['d'];
$pjbd = $pjbd + ($tacservbasehabadb*($habpjporce/100));
$tacservbasehabarb = $tacservbasehaba['r'];
$pjbr = $pjbr + ($tacservbasehabarb*($habpjporce/100));
$tacservbasehabavab = $tacservbasehaba['va'];
$pjbva = $pjbva + ($tacservbasehabavab*($habpjporce/100));
$tacservbasehabavmb = $tacservbasehaba['vm'];
$pjbvm = $pjbvm + ($tacservbasehabavmb*($habpjporce/100));
echo '<font style="background-color:#000000"><b>Le afecta a el y ';}
$tacservbasehabd = $tacservbasehabn['duracion'];
$habpjfin = $turno +  $tacservbasehabd;
echo ' finaliza en el turno '.$habpjfin.'</b></font><br>'; 
$tacservbasehabtex = $tacservbasehabn['texto'];
echo '<h1>'.$tacservbasehabtex.'</h1>';
$tacservbasehabtu = $tacservbasehabn['tiempo'];
$GLOBALS['tiempo'] = $tacservbasehabtu;
}else{echo '<font style="background-color:#000000"><b>Tienes asiganda una habilidad pero no la se ejecuto por que no cumple con algun requisito</b></font><br>';}
}else{
//tecnicas
$tacpjtec = $tacpjbase['t'];
if (array_key_exists($pj['atknum'], $tacpjtec)) {
$tecpjturn = $tacpjtec[$pj['atknum']];
$tecpjn = key($tecpjturn);
$tecpjporce = current($tecpjturn);
$tacservbasetec = $tacticas['t'];
$tacservbasetecn = $tacservbasetec[$tecpjn];
$tacservbasetecprem = $tacservbasetecn['cuenta'];
if ($pj['prem'] == 'free'){$tacservbasetecacc = 'free';}else{$tacservbasetecacc = true;};
$tacservbasetect = $tacservbasetecn['tipo'];
$tacservbaseteca = $tacservbasetecn['afecta'];
// ataque con tecnica
if(($pj['tipo'] == $tacservbasetect) and ($pjm >= $tacservbaseteca['m']) and ( $tacservbasetecprem == $tacservbasetecacc)){
echo '<font color="#800000" style="background-color:#000000"><b>Usando la Tecnica '.$tecpjn.'<br>';
echo 'Con una Intensidad del '.$tecpjporce.'% </b></font><br>';
echo "<div align='center'><img src='../imagenes/ataques/tecnica_de_".$tecpjn.".gif' width='100px' height='100px' /></div>";
$tacservbasetecav = $tacservbaseteca['v'];
$pjv = $pjv + ($tacservbasetecav*($tecpjporce/100));
$tacservbasetecam = $tacservbaseteca['m'];
$pjm = $pjm + ($tacservbasetecam*($tecpjporce/100));
$tacservbasetecaf = $tacservbaseteca['f'];
$pjf = $pjf + ($tacservbasetecaf*($tecpjporce/100));
$tacservbasetecai = $tacservbaseteca['i'];
$pji = $pji + ($tacservbasetecai*($tecpjporce/100));
$tacservbasetecaa = $tacservbaseteca['a'];
$pja = $pja + ($tacservbasetecaa*($tecpjporce/100));
$tacservbasetecad = $tacservbaseteca['d'];
$pjd = $pjd + ($tacservbasetecad*($tecpjporce/100));
$tacservbasetecar = $tacservbaseteca['r'];
$pjr = $pjr + ($tacservbasetecar*($tecpjporce/100));
$tacservbasetecava = $tacservbaseteca['va'];
$pjva = $pjva + ($tacservbasetecava*($tecpjporce/100));
$tacservbasetecavm = $tacservbaseteca['vm'];
$pjvm = $pjvm + ($tacservbasetecavm*($tecpjporce/100));
$tacservbasetecd = $tacservbasetecn['duracion'];
$tecpjfin = $turno +  $tacservbasetecd;
echo ' finaliza en el turno '.$tecpjfin.'<br>'; 
$tacservbasetectex = $tacservbasetecn['texto'];
echo '<h1>'.$tacservbasetectex.'</h1>';
$tacservbasetectu = $tacservbasetecn['tiempo'];
$GLOBALS['tiempo'] = $tacservbasetectu;
}else{$GLOBALS['tiempo'] = 0;
echo '<font style="background-color:#000000"><b>Tienes asiganda una Tecnica pero no la se ejecuto por que no cumple con algun requisito</b></font><br>';}}else{
// tecnicas automaticas
if (array_key_exists(0, $tacpjtec)) {
$tecpjturnauto = $tacpjtec[0];
$tecpjautocant = count($tecpjturnauto);
$tecpjauto = array_keys($tecpjturnauto);
$tecpjauton = $tecpjauto[rand(0,$tecpjautocant-1)];
$tecpjautoporce = $tecpjturnauto[$tecpjauton];
echo '<font color="#800000" style="background-color:#000000"><b>Usando la Tecnica '.$tecpjauton.'<br>';
echo 'Con una Intensidad del '.$tecpjautoporce.'% <br></b></font>';
echo "<div align='center'><img src='../imagenes/ataques/tecnica_de_".$tecpjauton.".gif' width='150px' height='150px' /></div>";
$tacservbasetec = $tacticas['t'];
$tacservbasetecn = $tacservbasetec[$tecpjauton];
$tacservbaseteca = $tacservbasetecn['afecta'];
$tacservbasetecav = $tacservbaseteca['v'];
$pjv = $pjv + ($tacservbasetecav*($tecpjautoporce/100));
$tacservbasetecam = $tacservbaseteca['m'];
$pjm = $pjm + ($tacservbasetecam*($tecpjautoporce/100));
$tacservbasetecaf = $tacservbaseteca['f'];
$pjf = $pjf + ($tacservbasetecaf*($tecpjautoporce/100));
$tacservbasetecai = $tacservbaseteca['i'];
$pji = $pji + ($tacservbasetecai*($tecpjautoporce/100));
$tacservbasetecaa = $tacservbaseteca['a'];
$pja = $pja + ($tacservbasetecaa*($tecpjautoporce/100));
$tacservbasetecad = $tacservbaseteca['d'];
$pjd = $pjd + ($tacservbasetecad*($tecpjautoporce/100));
$tacservbasetecar = $tacservbaseteca['r'];
$pjr = $pjr + ($tacservbasetecar*($tecpjautoporce/100));
$tacservbasetecava = $tacservbaseteca['va'];
$pjva = $pjva + ($tacservbasetecava*($tecpjautoporce/100));
$tacservbasetecavm = $tacservbaseteca['vm'];
$pjvm = $pjvm + ($tacservbasetecavm*($tecpjautoporce/100));
$tacservbasetecd = $tacservbasetecn['duracion'];
$tecpjfin = $turno +  $tacservbasetecd;
echo ' finaliza en el turno '.$tecpjfin.'<br>'; 
$tacservbasetectex = $tacservbasetecn['texto'];
echo '<h1>'.$tacservbasetectex.'</h1>';
$tacservbasetectu = $tacservbasetecn['tiempo'];
$GLOBALS['tiempo'] = $tacservbasetectu;
}else{$GLOBALS['tiempo'] = 0;
echo '<font style="background-color:#000000"><b>Recuerda que puedes asignar una o varias tecnica en modo automateica</b></font><br>';}}}
combate::dano ($pj, $pjv, $pjm, $pjf, $pji, $pja, $pjd, $pjr, $pjva, $pjvm);
}
//fin de la funcion poder
// empieza la funcion Cambio de Guardia
function Guardia($pj, $pjvm, $pjatknum){
if (($pj['ajuste'] < 100) && ($pjatknum >= 2)) {$pjobtenido = rand(0,$pjvm);
$pjmitad = $pjvm*(50/100);
if ($pjobtenido >= $pjmitad){
$pj['ajuste'] = $pj['ajuste'] + 25;
$GLOBALS['ajuste'] = $pj['ajuste'];
echo '<div align="center">La Guardia de '.$pj['nick'].' a Aumentado<br>Ahora esta al '.$pj['ajuste'].'%<br></div>';}else{echo '<div align="center">La Guardia de '.$pj['nick'].' No cambio</div>';};}}
// finaliza la funcion Cambio de guardia
// rondas
function ronda($pj1, $pj2, $tacticas){
// turnos
$turno = 0;
$GLOBALS['tiempo'] = 0;
$pj1['atknum'] = 0;
$pj2['atknum'] = 0;
// puntos fijos
$pj1v = (int) ($pj1['v']);
$pj1m = (int) ($pj1['m']);	
$pj1f = $pj1['f'];
$pj1i = $pj1['i']; 
$pj1a = $pj1['a'];
$pj1d = $pj1['d'];
$pj1r = $pj1['r'];
$pj1va = $pj1['va'];
$pj1vm = $pj1['vm'];

$pj2v = (int) ($pj2['v']);
$pj2m = (int) ($pj2['m']);
$pj2f = $pj2['f'];
$pj2i = $pj2['i'];
$pj2a = $pj2['a'];
$pj2d = $pj2['d'];
$pj2r = $pj2['r'];
$pj2va = $pj2['va'];
$pj2vm = $pj2['vm'];
// fin puntos fijos

do {
$turno = $turno + 1;
// jugador 1

$pj1f = $pj1['f'] * ($pj1['ajuste'] / 100);
$pj1i = $pj1['i'] * ($pj1['ajuste'] / 100);
$pj1a = $pj1['a'] * ($pj1['ajuste'] / 100);
$pj1d = $pj1['d'] * ($pj1['ajuste'] / 100);
$pj1r = $pj1['r'] * ($pj1['ajuste'] / 100);
$pj1vm = $pj1['vm'] * ($pj1['ajuste'] / 100);

$pj2f = $pj2['f'] * ($pj2['ajuste'] / 100);
$pj2i = $pj2['i'] * ($pj2['ajuste'] / 100);
$pj2a = $pj2['a'] * ($pj2['ajuste'] / 100);
$pj2d = $pj2['d'] * ($pj2['ajuste'] / 100);
$pj2r = $pj2['r'] * ($pj2['ajuste'] / 100);
$pj2vm = $pj2['vm'] * ($pj2['ajuste'] / 100);

echo '<tr><td width="15%">';
echo combate::barra($pj1, $pj1v, $pj1m, 'left');
echo '</td><td width="70%" align="center"><hr><font size="5"><b>Ronda nº '.$turno.'</b></font><br>';
// combates
switch ($pj1va){
case ($pj1va > $pj2va):
echo '<div align="left">';
$pj1atknum = $pj1['atknum'] +1;
echo '<b><font size="5">'.$pj1['nick'].' Ataca ( nº '.$pj1atknum.')</font></b><br>';
combate::poder($pj1, $pj2, $pj1v,$pj1m,$pj1f,$pj1i,$pj1a,$pj1d,$pj1r,$pj1va,$pj1vm,$pj2v,$pj2m,$pj2f,$pj2i,$pj2a,$pj2d,$pj2r,$pj2va,$pj2vm, $turno, $tacticas);
$pj2['tiempo'] = $GLOBALS['tiempo'];
$pj2va = $pj2va + $pj2['va'] + $pj2['tiempo'];
$pj1['atknum'] = $GLOBALS['atknum'];
$pj1da = $GLOBALS['dano'];
$pj2v = $pj2v - $pj1da;
$GLOBALS['pj2v'] = $pj2v;
$GLOBALS['pj2m'] = $pj2m;
combate::Guardia($pj1, $pj1vm, $pj1atknum);
$pj1['ajuste'] = $GLOBALS['ajuste'];
break;
case ($pj1va == $pj2va):
echo 'En esta lucha se usan las 2 fuerzas';
echo '<div align="left">';
$pj1atknum = $pj1['atknum'] +1;
echo '<b><font size="5">'.$pj1['nick'].' Ataca ( nº '.$pj1atknum.')</font></b><br>';
combate::poder($pj1, $pj2, $pj1v,$pj1m,$pj1f,$pj1i,$pj1a,$pj1d,$pj1r,$pj1va,$pj1vm,$pj2v,$pj2m,$pj2f,$pj2i,$pj2a,$pj2d,$pj2r,$pj2va,$pj2vm, $turno, $tacticas);
$pj2['tiempo'] = $GLOBALS['tiempo'];
$pj2va = $pj2va + $pj2['va'] + $pj2['tiempo'];
$pj1['atknum'] = $GLOBALS['atknum'];
$pj1da = $GLOBALS['dano'];
$pj2v = $pj2v - $pj1da;
$GLOBALS['pj2v'] = $pj2v;
$GLOBALS['pj2m'] = $pj2m;
combate::Guardia($pj1, $pj1vm, $pj1atknum);
$pj1['ajuste'] = $GLOBALS['ajuste'];
echo '<div align="right">';
$pj2atknum = $pj2['atknum'] +1;
echo '<b><font size="5">'.$pj2['nick'].' Ataca ( nº '.$pj2atknum.')</font></b><br>';
combate::poder($pj2, $pj1, $pj2v,$pj2m,$pj2f,$pj2i,$pj2a,$pj2d,$pj2r,$pj2va,$pj2vm,$pj1v,$pj1m,$pj1f,$pj1i,$pj1a,$pj1d,$pj1r,$pj1va,$pj1vm, $turno, $tacticas);
$pj1['tiempo'] = $GLOBALS['tiempo'];
$pj1va = $pj1va + $pj1['va'] + $pj1['tiempo'];
$pj2['atknum'] = $GLOBALS['atknum'];
$pj2da = $GLOBALS['dano'];
$pj1v = $pj1v - $pj2da;
$GLOBALS['pj1v'] = $pj1v;
$GLOBALS['pj1m'] = $pj1m;
combate::Guardia($pj2, $pj2vm, $pj2atknum);
$pj2['ajuste'] = $GLOBALS['ajuste'];
break;
case ($pj1va < $pj2va):
echo '<div align="right">';
$pj2atknum = $pj2['atknum'] +1;
echo '<b><font size="5">'.$pj2['nick'].' Ataca ( nº '.$pj2atknum.')</font></b><br>';
combate::poder($pj2, $pj1, $pj2v,$pj2m,$pj2f,$pj2i,$pj2a,$pj2d,$pj2r,$pj2va,$pj2vm,$pj1v,$pj1m,$pj1f,$pj1i,$pj1a,$pj1d,$pj1r,$pj1va,$pj1vm, $turno, $tacticas);
$pj1['tiempo'] = $GLOBALS['tiempo'];
$pj1va = $pj1va + $pj1['va'] + $pj1['tiempo'];
$pj2['atknum'] = $GLOBALS['atknum'];
$pj2da = $GLOBALS['dano'];
$pj1v = $pj1v - $pj2da;
$GLOBALS['pj1v'] = $pj1v;
$GLOBALS['pj1m'] = $pj1m;
combate::Guardia($pj2, $pj2vm, $pj2atknum);
$pj2['ajuste'] = $GLOBALS['ajuste'];
break;
}
echo '</div></td><td width="15%">';
echo combate::barra($pj2, $pj2v, $pj2m, "right");
echo '</td></tr>';



$pj1f = $pj1['f'] * ($pj1['ajuste'] / 100);
$pj1i = $pj1['i'] * ($pj1['ajuste'] / 100);
$pj1a = $pj1['a'] * ($pj1['ajuste'] / 100);
$pj1d = $pj1['d'] * ($pj1['ajuste'] / 100);
$pj1r = $pj1['r'] * ($pj1['ajuste'] / 100);
$pj1vm = $pj1['vm'] * ($pj1['ajuste'] / 100);

$pj2f = $pj2['f'] * ($pj2['ajuste'] / 100);
$pj2i = $pj2['i'] * ($pj2['ajuste'] / 100);
$pj2a = $pj2['a'] * ($pj2['ajuste'] / 100);
$pj2d = $pj2['d'] * ($pj2['ajuste'] / 100);
$pj2r = $pj2['r'] * ($pj2['ajuste'] / 100);
$pj2vm = $pj2['vm'] * ($pj2['ajuste'] / 100);


}while(($pj1v >= 0) && ($pj2v >= 0) && ($pj1v != 0) && ($pj2v != 0));
}}


//empieza los datos pre fijados
$estados = array("Distraido" => 25, "Confundido" => 50, "Confiado" => 75, "Furioso" => 100);
$tacticas = array ( "h" => array("Curar" => array( "cuenta" => 'free', "tipo" => 'Hibrido', "quien" => 0, "afecta" => array( 'v' => 100, 'm' => -100, 'f' => 0, 'i' => 0, 'a' => -10, 'd' => 0, 'r' => 0, 'va' => 0, 'vm' => 0), "tiempo" => 75, "duracion" => 2, "texto" => "Cura cosmo Rojo"),"Curar" => array( "cuenta" => 'prem', "tipo" => 'Hibrido', "quien" => 0, "afecta" => array( 'v' => 100, 'm' => -100, 'f' => 0, 'i' => 0, 'a' => -10, 'd' => 0, 'r' => 0, 'va' => 0, 'vm' => 0), "tiempo" => 75, "duracion" => 2, "texto" => "Cura cosmo Rojo"), "Curarlo" => array( "cuenta" => 'prem', "tipo" => 'Hibrido', "quien" => 1, "afecta" => array('v' => 400, 'm' => -100, 'f' => 0, 'i' => 0, 'a' => -20, 'd' => 0, 'r' => 0, 'va' => 0, 'vm' => 0), "tiempo" => 75, "duracion" => 2, "texto" => "Cura cosmo Azul")), 
"t" => array("Puno" => array( "cuenta" => 'free', "tipo" => 'Hibrido', "quien" => 0, "afecta" => array( 'v' => 0, 'm' => -20, 'f' => 10, 'i' => 0, 'a' => 0, 'd' => 0, 'r' => 0, 'va' => 0, 'vm' => 0), "tiempo" => 100, "duracion" => 1, "texto" => "Puno de luz"),"Patada" => array( "cuenta" => 'prem', "tipo" => 'Hibrido', "quien" => 0, "afecta" => array( 'v' => 0, 'm' => 0, 'f' => 20, 'i' => 0, 'a' => 0, 'd' => 0, 'r' => 0, 'va' => 200, 'vm' => 0), "tiempo" => 200, "duracion" => 1, "texto" => "patada de luz"), "Rodillaso" => array( "cuenta" => 'free', "tipo" => 'Hibrido', "quien" => 0, "afecta" => array( 'v' => 0, 'm' => 10, 'f' => 30, 'i' => 0, 'a' =>0, 'd' => 0, 'r' => 0, 'va' => 0, 'vm' => 0), "tiempo" => 100, "duracion" => 1, "texto" => "rodillazo Rojo"),"Cabezaso" => array( "cuenta" => 'free', "tipo" => 'Hibrido', "quien" => 0, "afecta" => array( 'v' => 0, 'm' => 50, 'f' => 150, 'i' => 0, 'a' => 0, 'd' => 0, 'r' => 0, 'va' => 200, 'vm' => 0), "tiempo" => 200, "duracion" => 1, "texto" => "cabezaso Rojo")));
//termina los datos pre fijados


?>