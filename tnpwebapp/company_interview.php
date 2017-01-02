<?php
include "db_driver.php";
$cid = @$_SESSION['cid'];
if(isset($cid)) $company = get_company($cid,$conn);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="iit ropar">
    <meta name="author" content="vishwash batra">
    <link rel="icon" href="../../favicon.ico">

    <title> Tnp-IIT Ropar- Company Portal </title>

    <!-- Bootstrap core CSS -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">

   
  </head>

  <body background="./images/green-bg_001.jpg">
	<?php include './header.php'?>
<br>
<br>
<br>

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">


        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">

          <div class="list-group">
            <a href="welcome_company.php" class="list-group-item"> Profile </a>
            <a href="company_interview.php" class="list-group-item active"> Interviews </a>
            <a href="company_students.php" class="list-group-item"> Students </a>
          
          </div>

        </div><!--/.sidebar-offcanvas-->

        <div class="col-xs-12 col-sm-9">
          <div class="jumbotron">
<?php
if ( isset($cid) ){
	$interviews = get_interviews( $cid, $conn);
	$interviews2 = get_interviews($cid, $conn);
?>
<h3 class="page-header"> Pending Interview Requests </h3> 
<div class="bs-example" data-example-id="striped-table">
    <table class="table table-striped">
      <thead>
        <tr>
          <th> # </th>
          <th> Date </th>
          <th> Time </th>
          <th> Type </th>
          <th> Job Location </th>
          <th> Job Salary </th>
        </tr>
      </thead>
      <tbody>
<?php
$num = 1;
while ($interview = $interviews->fetch(PDO::FETCH_ASSOC)){
if ($interview['approval_status']=='0'){
 echo "<tr> 
	<td> ".$num. " </td> 
	<td> ".$interview['date']." </td> 
	<td> ".$interview['time']." </td> 
	<td> ".$interview['type']." </td> 
	<td> ".$interview['job_location']." </td> 
	<td> ".$interview['job_salary']." </td> 
	</tr> ";
 $num++;
}
}
?>       
		</tbody>
    </table>
</div><!-- /example -->
<!--    Interviews which have been approved  -->

<h3 class="page-header"> Upcoming Scheduled Interviews </h3> 
<div class="bs-example" data-example-id="striped-table">
    <table class="table table-striped">
      <thead>
        <tr>
          <th> # </th>
          <th> Date </th>
          <th> Time </th>
          <th> Type </th>
		  <th> Job Location </th>
		  <th> Job Salary </th>
        </tr>
      </thead>
      <tbody>
<?php

$num = 1;
while ($interview = $interviews2->fetch(PDO::FETCH_ASSOC))
{
 if ($interview['approval_status']=='1')
{
 echo "<tr> 
	<td> ".$num. " </td> 
	<td> ".$interview['date']." </td> 
	<td> ".$interview['time']." </td> 
	<td> ".$interview['type']." </td> 
	<td> ".$interview['job_location']." </td> 
	<td> ".$interview['job_salary']." </td> 
	</tr> ";
 $num++;
}
}
?>       
		</tbody>
    </table>
  </div><!-- /example -->
<?php
}
else{
echo "<p> Your session has expired. Please log into continue </p> ";
}
?>
          </div>
      </div><!--/row-->
     </div>
      <hr>
      <footer>
        <p>&copy; Developed as part of Database Project for CSL451-2015, IIT Ropar </p>
      </footer>
    </div><!--/.container-->
    
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="static/jquery/jquery.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>

  </body>
</html>


