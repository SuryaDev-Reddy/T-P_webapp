<?php
include "db_driver.php";
$entryno = @$_SESSION['entryno'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="nitk surathkal;">
    <meta name="author" content="surya dev">
    <link rel="icon" href="../../favicon.ico">
    <title> Tnp-NITK Surathkal- Student Portal </title>

    <!-- Bootstrap core CSS -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">     
<script>
// for showing progress bar
	function _(el){
	return document.getElementById(el);
}
function uploadFile(){
	// get fil
	var file = _("resumefile").files[0];
	// alert(file.name+" | "+file.size+" | "+file.type);
	var formdata = new FormData();
	formdata.append("resumefile", file);
	formdata.append("entryno", _("entryno").value);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "student_upload_resume.php");
	ajax.send(formdata);
}

function uploadimage(){
	// get fil
	var file = _("profilepic").files[0];
	// alert(file.name+" | "+file.size+" | "+file.type);
	var formdata = new FormData();
	formdata.append("profilepic", file);
	formdata.append("entryno", _("entryno").value);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "student_upload_profilepic.php");
	ajax.send(formdata);
}

function progressHandler(event){
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	_("progressBar").value = 100;
}
function errorHandler(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status").innerHTML = "Upload Aborted";
}
</script>
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
            <a href="welcome_student.php" class="list-group-item active"> Profile </a>
			<a href="student_courses.php" class="list-group-item"> Courses Done </a>
            <a href="student_interview.php" class="list-group-item"> Interviews </a>
            <a href="student_apply.php" class="list-group-item"> Apply </a>
			
          
          </div>

        </div><!--/.sidebar-offcanvas-->

        <div class="col-xs-12 col-sm-9">
          <div class="jumbotron">
<?php
$student = get_student($entryno,$conn);
if (isset($_SESSION['entryno'])){
?>

<!--- Notify code-->
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


<?php
	if(isset($_POST['submit'])){
		if(isset($_FILES['profilepic']) && !empty($_FILES['profilepic'])){
			$target="profilepics/";
			$name=$_FILES['profilepic']['name'];
			$tmpname=$_FILES['profilepic']['tmp_name'];
			move_uploaded_file($tmpname,$target.$name);
			$picname=basename($name);	
			$sql = "update student set profile_pic = '".$picname."' where entryno='".$_SESSION['entryno']."' ;";
			$q = $conn->query($sql) or die('failed');
		}
	}
?>
<?php

$sql = "select profile_pic from student where entryno='".$_SESSION['entryno']."' ;";

 $q = $conn->query($sql) or die('failed');
 $r = $q->fetch(PDO::FETCH_ASSOC);
 $_SESSION['dp']=$r['profile_pic'];
 
?>

<div class="bs-docs-section">
<img src='<?php echo "profilepics/".$_SESSION['dp'];?>' width="150" height="150" style="float:right;">
  <h2 id="breadcrumbs" class="page-header"> Welcome <?php  echo $student['first_name']." ".$student['middle_name']." ".$student['last_name']; ?>   </h2>
  
  <p class="lead"> Your profile Information: <!--<button class="btn-primary"> Edit </button> --></p>
  
  <div class="bs-example" data-example-id="simple-breadcrumbs">
    <ol class="breadcrumb">
  <!-- this will be redirected too student_upload_resume.php via javascript function defined in beginning-->
	<form action="welcome_student.php" id= "profilepic" enctype="multipart/form-data"  method="POST">
		<li style="display: inline-block;"><a href="#">Upload Profile Pic: </a></li>
		<li  style="display: inline-block;class="active"> <input type="file" name="profilepic" id="profilepic"> </li>
		<input type="hidden" id="entryno" name="entryno" value="<?php echo $student['entryno'];?>" />
		<input type="submit" name="submit" />
		<p style="display: inline-block; font-size: 12px;" id="status"></p>
	</form>
    </ol>
  <ol class="breadcrumb">
      <li> Full Name </li>
      <li class="active"> <?php echo $student['first_name']." ".$student['middle_name']." ".$student['last_name']; ?> </li>
    </ol>
  <ol class="breadcrumb">
      <li> Email </li>
      <li class="active"> <?php echo $student['email'] ; ?> </li>
    </ol>
   
    <ol class="breadcrumb">
      <li> Department </li>
      <li class="active"> <?php echo $student['department']; ?> </li>
    </ol>
  <ol class="breadcrumb">
      <li> CGPA </li>
      <li class="active"> <?php echo $student['cgpa']; ?> </li>
    </ol>
  <ol class="breadcrumb">
      <li> 10th Percentage </li>
      <li class="active"> <?php echo $student['percen10']; ?> </li>
    </ol>
  <ol class="breadcrumb">
      <li> 12th Percentage </li>
      <li class="active"> <?php echo $student['percen12']; ?> </li>
    </ol>
  <ol class="breadcrumb">
  <!-- this will be redirected too student_upload_resume.php via javascript function defined in beginning-->
	<form id= "resumeup" enctype="multipart/form-data"  method="POST">
		<li style="display: inline-block;"><a href="#">Upload New Resume: </a></li>
		<li  style="display: inline-block;class="active"> <input type="file" name="resumefile" id="resumefile"> </li>
		<input type="hidden" id="entryno" name="entryno" value="<?php echo $student['entryno'];?>" />
		<input type="submit" onclick="uploadFile()"/>
		<p style="display: inline-block; font-size: 12px;" id="status"></p>
	</form>
    </ol>
   <ol class="breadcrumb">
      <li><a href="#"> Current Resume: </a></li>
	<?php 
		if($student['resume_link'] != ''){
	?>
		<li class="active"> <a class="btn btn-primary btn-md" href="student_viewresume.php?resumelink=<?php echo $student['resume_link']?>">View Resume</a> </li>
	<?php
		}
	else{
	?>	
		<li class="active"> No Resume Uploaded </li>
	<?php 
	}
	?>
    </ol>
  </div>
  </div>
<?php
}
else {
	echo "<p> Your session has expired. Please log into continue </p> ";
}
?>
      </div><!--/row-->
     </div>
	 </div>
      <hr>
      <footer>
        <p>&copy; Developed as part of Database Project for CS303-2016, NITK Surathkal </p>
      </footer>
    </div><!--/.container-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="static/jquery/jquery.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>

  </body>
</html>


