<?php 
include ("../classes/classpag.php");
if (empty($_GET['nivel'])==FALSE){buscarnivel($_GET['nivel']);}
elseif (empty($_GET['nivel1'])==FALSE){buscarnivel1($_GET['nivel1']);}
elseif (empty($_GET['zona'])==FALSE){buscarzona($_GET['zona']);}
elseif (empty($_GET['nombre'])==FALSE){buscarnombre($_GET['nombre']);}
elseif (empty($_GET['armadura'])==FALSE){buscararmadura($_GET['armadura']);}
elseif (empty($_GET['hab'])==FALSE){buscarhabilidad($_GET['hab']);}
elseif (empty($_GET['general'])==FALSE){buscargeneral($_GET['general']);}
?>


