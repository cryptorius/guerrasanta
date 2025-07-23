<?php
// mysql datos
//localhost
$hostname_server = "localhost";
$database_server = "savfergame";
$username_server = "savfergame";
$password_server = "mibd123ahora*";

// servidor en uso
/*
$hostname_server = "mysql6.000webhost.com";
$database_server = "a4152308_game1";
$username_server = "a4152308_Cryptor";
$password_server = "mibd123ahora*";*/

$server = mysql_pconnect($hostname_server, $username_server, $password_server) or die('No se puede conectar con el servidor: ' . mysql_error());
$server = mysql_select_db($database_server, $server) or die('No se encuentra la tabla: ' . mysql_error());

//Class Mysql
class gamemysql {
	// consultas
    function query($qry) {
    $res = mysql_query($qry) or die('Error in query: '.mysql_error());
    return $res;}
    // resultados
  function numResults($res) {
    $num = mysql_num_rows($res);
    return $num;}
  // array  
  function getArray($res) {
    return mysql_fetch_array($res);}
  // array con los datos
  function getArrayassoc($res) {
    return mysql_fetch_assoc($res);}
  // contador de resultados
  function getRow($res) {
    return mysql_fetch_row($res);}
}

?>