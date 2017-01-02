<?php
include "db_driver.php";
$cid = @$_REQUEST['a'];
$entryno = @$_SESSION['entryno'];
if($cid !=null) $company = get_company($cid,$conn);
else{
	header("Location: error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Nitk surathkal">
    <meta name="author" content="SuryaDev">
    <link rel="icon" href="../../favicon.ico">

    <title> Tnp-NITK Surathkal- Company Portal </title>

    <!-- Bootstrap core CSS -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">

   
  </head>

  <body background="./images/green-bg_001.jpg">
	<script type="text/javascript">
		var pgNo=0;
		var count=0;
		emailid="";
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
			st=st.replace("estar","work_environment");
			st=st.replace("pstar","work_provided");
			st=st.replace("astar","office_activities");
			st=st.replace("cstar","communication");
			st=st.replace("mstar","monitoring");
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
	
		function setEmail () {
			document.getElementById('email').value=emailid;
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
		xmlhttp.open("GET","fbSt.php",true);
		xmlhttp.send();
		}
		
		function submitForm2()
		{
			//feedback form
			document.getElementById("applyingForm").setAttribute("action","./feedStud.php");
			document.getElementById("applyingForm").submit();
		}
	</script>
	<?php include './header.php' ?>
<br>
<br>
<br>

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">


        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">

          <div class="list-group">
            <a href="welcome_student.php" class="list-group-item"> Profile </a>
            <a href="student_courses.php" class="list-group-item"> Courses Done </a>
            <a href="student_interview.php" class="list-group-item"> Interviews </a>
            <a href="student_apply.php" class="list-group-item"> Apply </a>
            <a href="#" class="list-group-item active"> View Company </a>
          </div>

        </div><!--/.sidebar-offcanvas-->

        <div class="col-xs-12 col-sm-9">
          <div class="jumbotron">
<?php
if (isset($cid)){
?>
      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title text-info" id="projectDetails"></h4>
         </div>
		
		<form class="form-horizontal" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" id="applyingForm" method="POST">
		
<div class="bs-docs-section">
  <h2 id="breadcrumbs" class="page-header"> Feedback <?php  echo $company['name']; ?>   </h2>
  <div id="insideFeed"></div>
  <div class="bs-example" data-example-id="simple-breadcrumbs" id = "insideDesc">
  <ol class="breadcrumb">
      <li><a href="#"> Company Name </a></li>
      <li class="active"> <?php echo $company['name']; ?> </li>
    </ol>
  <ol class="breadcrumb">
      <li><a href="#"> Contact Email </a></li>
      <li class="active"> <?php echo $company['contact_email'] ; ?> </li>
    </ol>
   
    <ol class="breadcrumb">
      <li><a href="#"> Contact Person </a></li>
      <li class="active"> <?php echo $company['contact_person']; ?> </li>
    </ol>
  <ol class="breadcrumb">
      <li><a href="#"> Contact Number </a></li>
      <li class="active"> <?php echo $company['contact_number']; ?> </li>
    </ol>
  </div>
  <?php 
	if (chk_selected($_SESSION['entryno'],$_REQUEST['a'],$conn)) {
	?>
  <div class = "modal-footer">
 <button type="button" class="btn btn-success" onclick="loadFeedback(),visibility_arrows();" id="feedback">Give Feedback</button>
  </div>
  <?php
	}
	?>
  </form>
<?php
}
else{
	echo "<p> Your session has expired. Please log into continue </p> ";
}
?>
		  </div>
		</div><!--/row-->
	  </div>
	 </div> <!-- container -->
      <hr>
      <footer>
        <p>&copy; Developed as part of Database Project for CS303, NITK surathkal </p>
      </footer>
    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="static/jquery/jquery.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>

  </body>
</html>


