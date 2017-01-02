<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <meta name="description" content="nitk surathkal">
    <meta name="author" content="surya dev">
    <link rel="icon" href="../../favicon.ico">

    <title> Training and Placement Cell- NITK Surathkal </title>

  
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="index.css" type="text/css"/>
   
  </head>

  <body background="./images/green-bg_001.jpg">
      <script src="static/jquery/jquery.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
  		<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>
	<?php include './header.php' ?>
    <div class="container-fluid">
		<?php
		include './carousel.php'
		?>
		<?php
		include './rightSide.inc.php';
		include './homeContent.php';
		?>
     <!-- <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1> TnP Cell- NITK Surathkal</h1>
            <p> welcome to online portal for all information related to training and placement of students of National Institute of Technology Karnataka, Surathkal</p>
	-->

<?php
 if (isset($_SESSION['notify']))
 {
?>

 <div class="bs-example bs-example-standalone" data-example-id="dismissible-alert-js">
    <div class="alert alert-warning alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong> New Notification: </strong> <?php echo $_SESSION['notify']; ?>
    </div>


<?php
 unset($_SESSION['notify']);

 }
?>
          
          <div class="row">
            <div class="col-xs-6 col-lg-6">

About NITK-Surathkal will come here..

            </div><!--/.col-xs-6.col-lg-4-->

  
</div>
<br>
<br>

       
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
      
           

        </div><!--/.sidebar-offcanvas-->
    
  </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Developed as part of Database Project for CS303, NITK-Surathkal </p>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>

