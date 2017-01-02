<?php

include "db_driver.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="NITK Surathkal">
    <meta name="author" content="Surya Dev">
    <link rel="icon" href="../../favicon.ico">

    <title> Tnp-NITK Surathkal- Student Portal </title>

    <!-- Bootstrap core CSS -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">

   
  </head>

  <body background="./images/green-bg_001.jpg">
  	<script type="text/javascript">
				var pgNo=0;
		var count=0;
		entry_number="";
			function visibility_arrows(inc)
		{
			count=parseInt(count)+parseInt(String(inc));
			//alert(count);
			if(count==1)
			{
				//document.getElementById("previous").setAttribute("style","display:none");
			}
			else if(count==6)
			{
				//document.getElementById("next").setAttribute("style","display:none");
			}
			else
			{
				document.getElementById("previous").setAttribute("style","display:inline-block");
				document.getElementById("next").setAttribute("style","display:inline-block");
			}

		}
		
		function changeIt(changeMe)
		{
			ids = changeMe.getAttribute("id");
			ids = ids.substr(0,ids.length-1);
			st=ids;
			st=st.replace("estar","employee_attitude");
			st=st.replace("pstar","work_strategy");
			st=st.replace("cstar","quantity_of_work");
			st=st.replace("mstar","quality_of_work");
			document.getElementById(st).value=changeMe.getAttribute("id").substr(changeMe.getAttribute("id").length-1,changeMe.getAttribute("id").length);
			if(changeMe.getAttribute("class")=="glyphicon glyphicon-star-empty")
			  {
			    switch(changeMe.getAttribute("id")) {
				    case ids+'5':
				        document.getElementById(ids+'5').setAttribute("class","glyphicon glyphicon-star");
				    case ids+'4':
				        document.getElementById(ids+'4').setAttribute("class","glyphicon glyphicon-star");
				    case ids+'3':
				    	document.getElementById(ids+'3').setAttribute("class","glyphicon glyphicon-star");
				    case ids+'2':
				    	document.getElementById(ids+'2').setAttribute("class","glyphicon glyphicon-star");
				    case ids+'1':
				    	document.getElementById(ids+'1').setAttribute("class","glyphicon glyphicon-star");
				    default:
				        break;
				}
			 }
			  else
			  {
			  		document.getElementById(st).value=0;
			        document.getElementById(ids+'5').setAttribute("class","glyphicon glyphicon-star-empty");
			        document.getElementById(ids+'4').setAttribute("class","glyphicon glyphicon-star-empty");
			    	document.getElementById(ids+'3').setAttribute("class","glyphicon glyphicon-star-empty");
			    	document.getElementById(ids+'2').setAttribute("class","glyphicon glyphicon-star-empty");
			    	document.getElementById(ids+'1').setAttribute("class","glyphicon glyphicon-star-empty");
			  }
		}
	
		function loadFeedback()
		{
		var xmlhttp;
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		    {
		    	document.getElementById("projectDetails").innerHTML="Feedback";
		    	document.getElementById("insideFeed").setAttribute("style","display:block");
				document.getElementById("insideDesc").setAttribute("style","display:none");
				//$('#apply4it').attr('style','display:none');
				$('#feedback').attr('style','display:none');
		    	document.getElementById("insideFeed").innerHTML=xmlhttp.responseText;
		    }
		}
		xmlhttp.open("GET","fbCo.php",true);
		xmlhttp.send();
		}
		
		function submitForm2()
		{
			//feedback form
			document.getElementById("applyingForm").setAttribute("action","./feedComp.php");
			document.getElementById("applyingForm").submit();
		}
	</script>
  <?php include './header.php' ?>
 
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
<br>
<br>
<br>

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">


        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">

        <div class="list-group">
            <a href="welcome_company.php" class="list-group-item"> Profile </a>
            <a href="company_interview.php" class="list-group-item"> Interviews </a>
            <a href="company_students.php" class="list-group-item"> Students </a>
            <a href="#" class="list-group-item active"> View Student </a>
          
          </div>

        </div><!--/.sidebar-offcanvas-->

        <div class="col-xs-12 col-sm-9">
          <div class="jumbotron">
<?php


$student = get_student($_REQUEST['a'],$conn);


if (isset($_SESSION['cid']))
{
?>
     <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title text-info" id="projectDetails"></h4>
         </div>

<form class="form-horizontal" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" id="applyingForm" method="POST">
<div class="bs-docs-section">
  <h2 id="breadcrumbs" class="page-header"> <?php  echo $_REQUEST['a']; ?>   </h2>
	 <div id="insideFeed"></div>
  <div class="bs-example" data-example-id="simple-breadcrumbs" id = "insideDesc">
  <ol class="breadcrumb">
      <li><a href="#"> Full Name </a></li>
      <li class="active"> <?php echo $student['first_name']." ".$student['middle_name']." ".$student['last_name']; ?> </li>
    </ol>
  <ol class="breadcrumb">
      <li><a href="#"> Email </a></li>
      <li class="active"> <?php echo $student['email'] ; ?> </li>
    </ol>
   
    <ol class="breadcrumb">
      <li><a href="#"> Department </a></li>
      <li class="active"> <?php echo $student['department']; ?> </li>
    </ol>
  <ol class="breadcrumb">
      <li><a href="#"> CGPA </a></li>
      <li class="active"> <?php echo $student['cgpa']; ?> </li>
    </ol>
  <ol class="breadcrumb">
      <li><a href="#"> 10th Percentage </a></li>
      <li class="active"> <?php echo $student['percen10']; ?> </li>
    </ol>
  <ol class="breadcrumb">
      <li><a href="#"> 12th Percentage </a></li>
      <li class="active"> <?php echo $student['percen12']; ?> </li>
    </ol>
  <ol class="breadcrumb">
      <li><a href="#"> Resume: </a></li>
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
  <?php 
	if (chk_selected($_REQUEST['a'],$_SESSION['cid'],$conn)) {
	?>
  <div class =""modal-footer"">
	   <button type="button" class="btn btn-success" onclick="loadFeedback(),visibility_arrows();" id="feedback">Give Feedback</button>
  </div>
  <?php 
	}
	?>
<?php

   }

else {

echo "<p> Your session has expired. Please log in to continue </p> ";
   }

?>

          </div>
		</form>
      </div><!--/row-->
     </div>
  </div> <!-- container -->
	
      <hr>

      <footer>
        <p>&copy; Developed as part of Database Project for CS303, NITK Surathkal </p>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="static/jquery/jquery.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>

  </body>
</html>


