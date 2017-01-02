<?php

include "db.php";
session_start();
$conn = get_conn();
$password = MD5($_REQUEST['password']);


//$sql = "insert into company values('".$_REQUEST['cid']."','".$_REQUEST['name']."','".$_REQUEST['password']."','0','".$_REQUEST['contact_person']."','".$_REQUEST['contact_email']."','".$_REQUEST['contact_number']."') ;";
$sql = "insert into company values('".$_REQUEST['cid']."','".$_REQUEST['name']."','$password','0','".$_REQUEST['contact_person']."','".$_REQUEST['contact_email']."','".$_REQUEST['contact_number']."') ;";

echo $sql;

$q = $conn->exec($sql) or die('failed');

$_SESSION['notify'] = "request for registration has been sent to the administrator";

header("Location: index.php");

?>
