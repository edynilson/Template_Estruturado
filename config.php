<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$host="localhost";
$port=3308;
$socket="";
$user="root";
$password="";
$dbname="tec_ponte";

$link = new mysqli($host, $user, $password, $dbname, $port, $socket)
or die ('Could not connect to the database server' . mysqli_connect_error());
 $link -> set_charset("utf8");

if ($link->connect_error) {
    die("Erro de ligação à base de dados: " . $link->connect_error);

}


?>
