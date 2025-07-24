<?php
include ('../classes/classpag.php');
if (isset($_SERVER['HTTP_REFERER'])){$pag=$_SERVER['HTTP_REFERER'];}else{$pag="";} 
$url_base = configini('url');
if($pag==$url_base){
header('Content-type: text/html; charset=iso-8859-1');
echo '<html>
<head>
<meta name="author" content="Cryptorius">
<title>Genesis</title>
</head>
<body>';
genesis ();
echo '</body>
</html>';
}else{echo'<meta http-equiv="refresh" content="0; url='.configini('url').'">';
}
?>