<?php

function get_conn()
{

#$servername = "10.1.4.12";
$servername = "localhost";
$username = "postgres";
$password = "tendulkar10";
$port = 5432;
$dbname = "T&P";
$conn = new PDO("pgsql:host=$servername;dbname=$dbname;port=$port",$username,$password);
return $conn;
}

?>


