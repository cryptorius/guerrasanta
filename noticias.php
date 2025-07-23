<?php
echo '<html>
<head>
<title>Noticias</title>
<script type="text/javascript" src="pagi_ajax.js"></script>
<style>
a{
 text-decoration:underline;
 cursor:pointer;
}
</style>
</head>
<body>

 <div id="noticias">';
include('pag/paginador.php');
echo '</div>
</body>
</html>';

?>