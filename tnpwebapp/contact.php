<?php

session_start();
include 'db.php';
$conn = get_conn();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <meta name="description" content="NITK surathkal">
    <meta name="author" content="Surya Dev">
    <link rel="icon" href="../../favicon.ico">

    <title> Training and Placement Cell- NITK Surathkal </title>

  
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
   
  </head>

  <body background="./images/green-bg_001.jpg">
	<?php include './header.php'?>

		<div class="wrappers">
	<div class="container-fluid">
		<div class="col-md-6 col-md-push-3 col-sm-8 col-sm-push-2">
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
    
			<div class="panel panel-primary">
				<div class="panel-body" style="background-color:transparent;">
					<div>
					<h2 class="text-primary">Contact Us</h2>
					<br>
						<h5><b>For any Feedback/Suggestions You can write to us by using the form below</b></h5>
						<form class="form-horizontal" action="./Contactus.php" method="POST">
							<label for="name">Name : </label><input required type="text" maxlength="25" class="form-control" name="name" maxlength="25">
							<br><label for="email">Email Id : </label><input required type="text" maxlength="30" class="form-control" name="emailId" maxlength="50">
							<br><label for="subject">Subject : </label><input required type="text" maxlength="50" class="form-control" name="subject" maxlength="100">
							<br><label for="message">Message : </label><textarea required name="message" class="form-control" rows="6" cols="22" maxlength="500"></textarea>
							<br>
							<div class="form-group">
								<div class="col-xs-push-5 col-xs-2">
									<input type="submit" value="Submit" class="btn btn-warning">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

<br>
<br>
<br>
<br>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="static/jquery/jquery.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>

  </body>
</html>
<?php
	include './footer.php';
?>

