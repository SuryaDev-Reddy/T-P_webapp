<?php
#$c_p = str_replace("/","",$_SERVER["PHP_SELF"]);//current page
$c_p = basename($_SERVER["PHP_SELF"]);
?>

<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="background-color:transparent">
		<div class="container-fluid">
			<div class="container-fluid">
			<div class="panel panel-success">
			<div class="panel-body">
			<div class="col-xs-2">
				<img class="img-responsive" src="./images/NITK_Surthkal_logo.png" style="width:120px;height:auto;">
			</div>
			<div class="col-xs-10"><h1 class="infoself">National Institute of Technology,Karnataka Surathkal</h1>
			<h3 class="infoself hidden-xs">Training & Placement portal</h3></div>
			</div>
			</div>
			</div>
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" id="toggled" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span
					<span class="icon-bar"></span>
				</button>
			<div class="navbar-brand">T&P Hub</div>
			</div>
		<div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
           <!-- <li style="margin-left:10px;"class="active"><a href="homeredirect.php">Home</a></li>-->
			<li style = "margin-left:10px;" class = "<?php echo ($c_p=="homeredirect.php" || $c_p=="" || $c_p=="index.php" || $c_p=="welcome_student.php")?'active':'';?>"><a href="homeredirect.php">Home</a></li>
            <li style="margin-left:10px;" class = "<?php echo ($c_p=="about.php")?'active':'';?>"><a href="about.php">About</a></li>
            <li style="margin-left:10px;" class = "<?php echo ($c_p=="contact.php")?'active':'';?>"><a href="contact.php">Contact</a></li>
			<li style="margin-left:10px;" class = "<?php echo ($c_p=="gallery.php")?'active':'';?>"><a href="gallery.php">Gallery</a></li>
			<li style="margin-left:10px;" class = "<?php echo ($c_p=="company.php")?'active':'';?>"><a href="company.php">companies</a></li>
			
 <?php
   if (isset($_SESSION['cid']) or isset($_SESSION['entryno']))
           {
 ?>
         <li style="margin-left:10px;"><a href="logout.php">Log Out</a></li>
 <?php
           }
    
 ?>

          </ul>
        </div><!-- /.nav-collapse -->
		</div>
	</nav>