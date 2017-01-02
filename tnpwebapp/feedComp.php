<?php

include "db.php";
session_start();
$conn = get_conn();

$employee_attitude = $_POST['employee_attitude'];
$work_strategy = $_POST['work_strategy'];
$quantity =  $_POST['quantity_of_work'];
$quality = $_POST['quality_of_work'];
$additionally = $_POST['additionally'];
$entry_number =  $_POST['entry_num'];

$sql = "insert into feed_comp values(".$employee_attitude.",".$work_strategy.",".$quantity.",".$quality.",'".$additionally."','".$_SESSION['cid']."',''); ";
//$sql = "INSERT INTO feed_stud (work_environment, work_provided, entry_number, Office_activities, Communication, Monitoring, Additionally,company_email_id) VALUES(%s,%s,'%s',%s,%s,%s,'%s','%s')",$_POST['work_environment'],$_POST['work_provided'],$_SESSION['entryno'],$_POST['office_activities'],$_POST['communication'],$_POST['monitoring'],$_POST['additionally'],$_POST['email']);
echo $sql;

$q = $conn->exec($sql) or die('failed');

?>
