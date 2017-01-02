<?php
	//include './bslines.php'

session_start();
include 'db.php';
$conn = get_conn();

?>
<!DOCTYPE html>
<html>
<title>gallery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
 <link href="static/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="index.css" type="text/css"/>
<body background="./images/green-bg_001.jpg">
	<?php
	include './header.php';
	?>

				<div class="row">
					<div class="col-lg-12  col-sm-12 col-xs-12 text-center">
						<h1 class="section-heading" style = "color:white;">GALLERY</h1>
						<h3 class="section-subheading text-muted" style = "color:white;">INSTILLS LIFE IN YOU</h3>
					</div>
				</div>
<div class = "container">
<div class="w3-row-padding">
  <div class="w3-container w3-third hvr-grow">
    <img src="./images/12.jpg" style="width:100%;cursor:pointer"
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third hvr-grow">
    <img src="./images/1.jpg" style="width:100%;cursor:pointer"
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third hvr-grow">
    <img src="./images/2.jpg" style="width:100%;cursor:pointer"
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
</div>

<div class="w3-row-padding " style = "margin-top:20px;">
  <div class="w3-container w3-third hvr-grow">
    <img src="./images/3.jpg" style="width:100%;cursor:pointer"
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third hvr-grow">
    <img src="./images/4.jpg" style="width:100%;cursor:pointer"
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third hvr-grow">
    <img src="./images/5.jpg" style="width:100%;cursor:pointer"
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
</div>

<div class="w3-row-padding" style = "margin-top:20px;">
  <div class="w3-container w3-third hvr-grow">
    <img src="./images/6.jpg" style="width:100%;cursor:pointer"
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third hvr-grow">
    <img src="./images/7.jpg" style="width:100%;cursor:pointer"
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third hvr-grow">
    <img src="./images/8.jpg" style="width:100%;cursor:pointer"
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
</div>

<div class="w3-row-padding" style = "margin-top:20px;">
  <div class="w3-container w3-third hvr-grow">
    <img src="./images/9.jpg" style="width:100%;cursor:pointer"
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third hvr-grow">
    <img src="./images/10.jpg" style="width:100%;cursor:pointer"
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
  <div class="w3-container w3-third hvr-grow">
    <img src="./images/13.jpg" style="width:100%;cursor:pointer"
    onclick="onClick(this)" class="w3-hover-opacity">
  </div>
</div>
</div>

<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-closebtn w3-hover-red w3-text-white w3-xxlarge w3-container w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
</div>

<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>
            
</body>
</html>
<?php
	include './footer.php';
?>