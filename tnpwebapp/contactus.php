<?php

include "db.php";
session_start();
$conn = get_conn();

# addcourse.php



$sql = "insert into contactus values('".$_REQUEST['name']."','".$_REQUEST['emailId']."','".$_REQUEST['subject']."','".$_REQUEST['message']."'); " ;

$q = $conn->exec($sql) or die('failed');

$_SESSION['notify'] = "your response has been successfully recorded.we will get back to you soon";

header('Location: contact.php');

?>
