<?php include ('../classes/classpag.php');
if (isset($_SERVER['HTTP_REFERER'])){$pag=$_SERVER['HTTP_REFERER'];}else{$pag="";} 
$url_base = configini('url');
if($pag==$url_base){
echo '<html>
<head>
<title>Noticias</title>´
<link href="../estilo.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../pagi_ajax.js"></script>
<style>
a{
 text-decoration:underline;
 cursor:pointer;
}
</style>
</head>
<body>
	<li>
							<div class="title">Agilidad</div><div class="level"><span class="helpLink" onmouseover=\'showTip(this,"La agilidad permite ser flexible y hábil. ¡Pero eso no es todo! La agilidad permite también evitar los combates esquivando las emboscadas de los adversarios. Si aumentas la Agilidad, tu Dino <strong>podrá evitar algunos combates</strong>.","Agilidad")\' onmouseout="hideTip()"><img src="img/cosmo_boton.gif"></span> <img src="img/cargando.gif"></div>
						</li>

 <div id="noticias">';
include('paginador.php');
echo '</div>
</body>
</html>';
}else{echo'<meta http-equiv="refresh" content="0; url='.configini('url').'">';
}

 ?>