<?php
	session_start();
	include "db.php";
	$conn = get_conn();
?>
<DOCTYPE! html>
	<html>
		<head>
			<title>Companies visiting</title>
			<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"> -->
			 <link href="static/css/bootstrap.min.css" rel="stylesheet">
			<link rel="stylesheet" href="./cmarquee1.css">
			<!--<link rel="stylesheet" href="index.css" type="text/css-->
		</head>
		<body background="./images/green-bg_001.jpg">
		
				<div class="wrappers">
					<?php
					include './header.php';
					?>
					<?php
					$sql = "select name from company;";
					$q = $conn->query($sql) or die ('failed');
					?>
			<div class="container1">
            <div class="row">
                <div class="col-lg-12  col-sm-12 col-xs-12 text-center">
                    <h1 class="section-heading" style="color:white;">COMPANIES</h1>
                    <h3 class="section-subheading text-muted" style="color:white;">Highlights</h3>
                </div>
            </div>
			<div class="container2">
		   	          
		               
				        <div class="col-md-6" style="background-color: white; height: 600px;">
							    <img src="./images/company_logo5.jpg" alt="MBA" style="width:670px;height:600px;"/>
				        </div>
				        
		
						<div class="col-md-6" style="background-color: black; height: 600px;">
							<marquee  direction="up" style="text-align:center; color: white; background-color: black; height: 400px; margin-top: 100px;" hspace="100"
							onmouseover="this.stop();" onmouseout="this.start();">
							<?php 
							while ($company =$q->fetch(PDO::FETCH_ASSOC)) {
								echo "".$company['name']."<br>";
							}
							?>
							<!--MYNTRA DESIGNS <br>
								AMAZON<br>
								ADOBE SYSTEMS<br>
								BAJAJ AUTO<br>
								VISA INC.<br>
								PRACTO<br>
								MORGAN STANLEY<br>
								TEXAS INSTRUMENTS<br>
								GOLDMAN SACHS<br>
								AVAYA INDIA <br>
								THOROGOOD ASSOCIATES<br>
								FIDELITY INVESTMENTS<br>
								ARYAKA NETWORKS<br>
								NATIONAL INSTRUMENTS<br>
								ITTIAM SYSTEMS<br>
								MU SIGMA BUSINESS <br>
								ZS ASSOCIATES <br>
								ROBERT BOSCH <br>
								SIGMOID<br>
								WIPRO LIMITED<br>
								RIVERBED TECHNOLOGIES<br>
								URBAN ONLINE SERVICES <br>
								ORACLE INDIA <br>
								TEKSYSTEMS <br>
								SABRE TRAVEL TECHNOLOGIES <br>
								AMADEUS SOFTWARE <br>
								QUIKR.COM<br>
								CODENATION<br>
								INTUIT<br>
								EDGEVERVE SYSTEMS <br>
								TEMENOS INDIA <br>
								DIEBOLD SYSTEMS <br>
								ROVI CORPORATION <br>
								CISCO SYSTEMS <br>
								GROFERS INDIA <br>
								QUALCOMM INDIA<br>
								MICROSOFT<br>
								PHILIPS INNOVATION <br>
								DELL INTERNATIONAL <br>
								DIRECTI <br>
								DR. REDDYS LAB<br>
								SAMSUNG R & D <br>
								CAPITAL ONE <br>
								NETAPP<br>
								SANDISK<br>
								WOOQER<br>
								WELLS FARGO INDIA <br>
								3DPLM SOFTWARE <br>
								SASKEN COMMUNICATIONS <br>
								NESTLE INDIA<br>-->
							 </marquee>
						</div>
						
			</div>
		</div>
						
		</body>
	</html>
<?php
	include './footer.php';
?>
