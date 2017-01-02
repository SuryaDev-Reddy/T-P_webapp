<?php

function get_conn()
{

$servername = "localhost";
$username = "postgres";
$password = "tendulkar10";
$dbname = "T&P";
$conn = new PDO("pgsql:host=$servername;dbname=$dbname",$username,$password);

return $conn;
}

?>


