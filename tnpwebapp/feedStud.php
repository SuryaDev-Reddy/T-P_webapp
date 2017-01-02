<?php

include "db.php";
session_start();
$conn = get_conn();

$work_environment = $_POST['work_environment'];
$work_provide = $_POST['work_provided'];
$office =  $_POST['office_activities'];
$commun = $_POST['communication'];
$monitor = $_POST['monitoring'];
$additionally = $_POST['additionally'];
$emailid =  $_POST['email'];

$sql = "insert into feed_stud values(".$work_environment.",".$work_provide.",'".$_SESSION['entryno']."','".$office."','".$commun."','".$monitor."','".$additionally."','".$emailid."'); ";
//$sql = "INSERT INTO feed_stud (work_environment, work_provided, entry_number, Office_activities, Communication, Monitoring, Additionally,company_email_id) VALUES(%s,%s,'%s',%s,%s,%s,'%s','%s')",$_POST['work_environment'],$_POST['work_provided'],$_SESSION['entryno'],$_POST['office_activities'],$_POST['communication'],$_POST['monitoring'],$_POST['additionally'],$_POST['email']);
echo $sql;

$q = $conn->exec($sql) or die('failed');

?>
