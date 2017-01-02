<?php
include "db_driver.php";
$cid = @$_SESSION['cid'];
if($cid !=null) $company = get_company($cid,$conn);
?>

<?php
	if(isset($_POST['submit'])){
		if(isset($_FILES['logos']) && !empty($_FILES['logos'])){
			$target="logos/";
			$name=$_FILES['logos']['name'];
			$tmpname=$_FILES['logos']['tmp_name'];
			move_uploaded_file($tmpname,$target.$name);
			$picname=basename($name);	
			$sql = "update company set logo = '".$picname."' where cid='".$_SESSION['cid']."' ;";
			$q = $conn->query($sql) or die('failed');
		}
	}
?>
<?php

$sql = "select logo from company where cid='".$_SESSION['cid']."' ;";

 $q = $conn->query($sql) or die('failed');
 $r = $q->fetch(PDO::FETCH_ASSOC);
 $_SESSION['logo']=$r['logo'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="NITK Surathkal">
    <meta name="author" content="SuryaDev">
    <link rel="icon" href="../../favicon.ico">

    <title> Tnp-NITK Surathkal- Company Portal </title>

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
            <a href="welcome_company.php" class="list-group-item active"> Profile </a>
            <a href="company_interview.php" class="list-group-item"> Interviews </a>
            <a href="company_students.php" class="list-group-item"> Students </a>
          
          </div>

        </div><!--/.sidebar-offcanvas-->

        <div class="col-xs-12 col-sm-9">
          <div class="jumbotron">
<?php
if (isset($_SESSION['cid'])){
?>
<div class="bs-docs-section">
<img src='<?php echo "logos/".$_SESSION['logo'];?>' width="150" height="150" style="float:right;">
  <h2 id="breadcrumbs" class="page-header"> Welcome <?php  echo $company['name']; ?>   </h2>
  <form action="welcome_company.php" id= "profilepic" enctype="multipart/form-data"  method="POST">
		<li style="display: inline-block;"><a href="#">Upload Profile Pic: </a></li>
		<li  style="display: inline-block;class="active"> <input type="file" name="logos" id="logos"> </li>
		<input type="hidden" id="entryno" name="entryno" />
		<input type="submit" name="submit" />
		<p style="display: inline-block; font-size: 12px;" id="status"></p>
	</form>
<!--- Notification Code-->
<?php
if (isset($_SESSION['notify'])){
?>
 <div class="bs-example bs-example-standalone" data-example-id="dismissible-alert-js">
    <div class="alert alert-warning alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong> New Notification: </strong> <?php echo $_SESSION['notify']; ?>
    </div>
	</div>
<?php
 unset($_SESSION['notify']);
}
?>
<br><br>
  <p class="lead"> Your profile <a href="edit_company.php"> <button class="btn btn-primary"> Edit </button> </a> </p>
  <div class="bs-example" data-example-id="simple-breadcrumbs">
  <ol class="breadcrumb">
      <li> Company Name </li>
      <li class="active"> <?php echo $company['name']; ?> </li>
    </ol>
  <ol class="breadcrumb">
      <li> Contact Email </li>
      <li class="active"> <?php echo $company['contact_email'] ; ?> </li>
    </ol>
   
    <ol class="breadcrumb">
      <li> Contact Person </li>
      <li class="active"> <?php echo $company['contact_person']; ?> </li>
    </ol>
  <ol class="breadcrumb">
      <li> Contact Number </li>
      <li class="active"> <?php echo $company['contact_number']; ?> </li>
    </ol>
  
  </div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Set up an Interview 
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Enter details of the interview </h4>
      </div>
      <div class="modal-body">
        

<form action="add_interview.php" method="POST">
  <div class="form-group">
    <label for="Date"> Date of the Interview </label>
    <input type="date" class="form-control" name="date" placeholder="date(mm-dd-yyyy)"> 
  </div>
  <div class="form-group">
    <label for="Time"> Time </label>
    <input type="time" class="form-control" name="time" placeholder="time(23:55)">
  </div>
  <div class="form-group">
    <label for="type"> Type </label>
    <input type="radio" name="type" value="placement"> Placement
    <input type="radio" name="type" value="training"> Training
  </div>
  <div class="form-group">
    <label for="numberOfRounds"> Number of Rounds </label>
    <input type="text" class="form-control" name="num_of_rounds" placeholder="rounds">
  </div>
  <div class="form-group">
	<label  for="resumeShortlist"> Resume Shortlisting: &nbsp; </label>
	<label class="checkbox-inline">
		<input type="checkbox"  name="resume_shortlist" value="True">.
	</label>
    <!--<input type="checkbox" class="form-control" name="resume_shortlist" value="True">-->
  </div>
  <div class="form-group">
    <label for="resumeShortlist"> Hiring Branch </label><br/>
	<div style="font-size: 16px;">
		<label class="checkbox-inline">
			<input type="checkbox"  name="CS" value="CS"> Computer Science
		</label>
		<label class="checkbox-inline">
			<input  type="checkbox"  name="EE" value="EE"> Electrical Engineering
		</label>
		<label class="checkbox-inline">
			<input  type="checkbox"  name="ME" value="ME"> Mechanical Engineering
		</label>
		<!--
		<input type="checkbox" class="form-control" name="CS" value="CS">Computer Science </input>
		<input type="checkbox" class="form-control" name="EE" value="EE">  Electrical Engineering </input>
		<input type="checkbox" class="form-control" name="ME" value="ME"> Mechanical Engineering</input>
	-->
	</div>
  </div>
  <div class="form-group">
    <label for="minCGPA"> Minimum CGPA Criteria </label>
    <input type="text" class="form-control" name="min_cgpa" placeholder="Minimum CGPA">
  </div>
  <div class="form-group">
    <label for="min10th"> Minimum 10th Standard Percentage </label>
    <input type="text" class="form-control" name="min_10th_percen" placeholder="%">
  </div>
 <div class="form-group">
    <label for="min12th"> Minimum 12th Standard Percentage </label>
    <input type="text" class="form-control" name="min_12th_percen" placeholder="%">
  </div>
 <div class="form-group">
    <label for="degree"> Degree Requirements </label>
    <input type="text" class="form-control" name="degree" placeholder="degree">
  </div>
 <label> Job Details </label> 
 <div class="form-group">
    <label class="sr-only" for="jobLocation">Job Location</label>
    <input type="text" class="form-control" name="job_location" placeholder="Location">
  </div>
  <div class="form-group">
    <label class="sr-only" for="jobDesignation"> Job Designation</label>
    <input type="text" class="form-control" name="job_designation" placeholder="Designation">
  </div>
  
	<div class="form-group">
		<label class="sr-only" for="JobSalary">Amount (in rupees)</label>
		<div class="input-group">
		  <div class="input-group-addon">Rs</div>
		  <input type="text" class="form-control" name="job_salary" placeholder="Amount">
		  <div class="input-group-addon">.00</div>
		</div>
	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
</form>

    </div>
  </div>
</div>
</div>

<?php
}
else{
	echo "<p> Your session has expired. Please log into continue </p> ";
}
?>

      </div><!--/row-->
     </div>
  </div> <!-- container -->

      <hr>

      <footer>
        <p>&copy; Developed as part of Database Project for CSL454-2015, IIT Ropar </p>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="static/jquery/jquery.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>

  </body>
</html>


