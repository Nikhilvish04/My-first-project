<?php 

	include("controllers/authController.php");
 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="images/titlelogo.png">
	<style>

	</style>
	<title>PhoneTech</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/dropstyle.css">
	<link rel="stylesheet" type="text/css" href="css/webform1.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/page_footer.css">
</head>
<body bgcolor="#f1f3f6">
	<div class="header">
		<table border="0" width="100%" bgcolor="047BD5" class="table1">
			<tr>
			<td width="20%" class="logo"><img src="images/elogo.png"></td>
			<td class="se" width="20%" class="search1"><input type="search" name="searchBar" placeholder="Whats in your Mind....." style="font-size: 20px;"></td>
			<td class="butt"><button><i class="fa fa-search" aria-hidden="true" style="color: white;"></i></button></td>
			<td width="10%"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="color:white;"></i><font color="white">   Cart</font></td>
			<th><a href="signup.php"><i class="fa fa-sign-in" aria-hidden="true" style="color:white;"></i><font color="white">    Login & Signup</font></a></th>
			</tr>
		</table>
		<table border="0" width="100%" bgcolor="#f1f3f6" height="45" class="table2">
			<tr>
			<th width="16.5%">
				<div class="dropdown">
					<span>Refurbished Smartphones      <i class="fa fa-caret-down" aria-hidden="true"></i></span>
					<div class="dropdown-content">
						<p style=" font-size: 20px; padding-top: 5px; padding-left: 37px;"><br>BRANDS<br></p>
						<option val="b" class="select-hr"></option>
						<div class="column">
							<div class="column1">
								<p><a href="product-details/product-details.php">Xiaomi</a></p>
								<p>Samsung</p>
								<p>Apple</p>
								<p>Vivo</p>
								<p>Oppo</p>
								<p>OnePlus</p>
							</div>
							<div class="column2">
								<p>Motorola<p>
								<p>Lenovo</p>
								<p>Asus</p>
								<p>Gionee</p>
								<p>See All</p>
							</div>
						</div>

					</div>
				</div>
			</th>
			<th width="12.5%">
				<div class="dropdownimg">
					<span>Mobile Repair      <i class="fa fa-caret-down" aria-hidden="true"></i></span>
					<div class="dropdown-img">
						<div class="columnimg">
							<div class="columnimg1">
								<p style="padding-top:20px; padding-right: 40px; padding-left: 40px;">
								<img src="images/doorstep.jpg"><p style="color: skyblue;padding-left: 40px;">DoorStep Mobile Service</p>
								</p><option val="b" class="select-hr"></option>
							</div>
							<div class="columnimg2">
								<p style="padding-top:20px; padding-right: 40px; padding-left: 40px;">
								<img src="images/CHECK-REPAIR-STATUS.jpg"><p style="color: skyblue;padding-left: 40px;">Check your Device status</p>
								</p>
							</div>
						</div>

					</div>
				</div>

			</th>
			<th width="12.5%">
				<div class="dropdown">
					<span>Accessories      <i class="fa fa-caret-down" aria-hidden="true"></i> </span>
					<div class="dropdown-content">
						<p style=" font-size: 20px; margin-top: 20px; margin-left: 37px" >Accessories<br></p>
						<option val="b" class="select-hr" ></option>
						<div class="column">
							<div class="column1">
								<p>Power Bank</p>
								<p>charger</p>
								<p>Adapter</p>
								<p>USB</p>
								<p>Battery</p>
								<p>Back Cover</p>
							</div>
							<div class="column2">
								<p>Speakers<p>
								<p>Bluetooth</p>
								<p>Ear phone</p>
								<p>See All</p>
							</div>
						</div>

					</div>
				</div>
			</th>
			<th width="12.5%">Phone Cash</th>
			<th width="12.5%">Offer Zone</th>
			<th width="16.5%">Retailer Registration</th>
			</tr>
		</table>
		<hr>

	</div>







<table>
	<div class="w3-content">
	      <img class="mySlides" src="images/banner1.jpg" style="width:100%">
	      <img class="mySlides" src="images/banner2.jpg" style="width:100%">
	      <img class="mySlides" src="images/banner3.jpg" style="width:100%">
	      <img class="mySlides" src="images/banner4.jpg" style="width:100%">
	</div>
</table>


<script>
var slideIndex = 1;
var myIndex=0;
carousel();
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000);// Change image every 2 seconds
}

</script>
<div class="part2">
  <img class="bounce1" src="images/website_repair1.jpg">
  <img class="bounce1" src="images/website_refurbished1.jpg">
  <img class="bounce1" src="images/website_phonecash1.jpg">
</div>

<div class="part3">
  <img src="images/YAANTRA-MOBILE-REPAIR-BANNER.jpg">
</div>

<div class="part4">
  <img src="blue.png">
</div>

<div class="part5">
	<div class="logoslidemain">
		<h2 style="padding-left: 20px; color: black; font-size: 20px; font-weight: bold;">POPULAR BRANDS</h2>
		  <div class="partnerlogo">
  			<img class="partnerlogoslide"src="images/moto.png">
  			<img class="partnerlogoslide" src="images/mi.png">
  			<img class="partnerlogoslide" src="images/samsung.png">
  			<img class="partnerlogoslide" src="images/google.png">
  			<img class="partnerlogoslide" src="images/asus.png">
  			<img class="partnerlogoslide" src="images/apple.png">
  			<img class="partnerlogoslide" src="images/gionee.png">
  			<img class="partnerlogoslide" src="images/oppo.png">
  			<img class="partnerlogoslide" src="images/oneplus.png">
	    </div>
	 </div>
	</div>
</div>














	
	<div class="footer">
		<div class="inner-footer">
			<div class="footer-items">
				<h1>PhoneTech</h1>
				<p>
					Mobile, Resale, Refub, Repair.
				</p>
			</div>

			<div class="footer-items">
				<h2>Quick Links</h2>
				<div class="border"></div>
				<ul>
					<a href=""><li>About Us</li></a>
					<a href=""><li>Contact Us</li></a>
					<a href=""><li>Career</li></a>
					<a href=""><li>PhoneTech Offer</li></a>
					<a href=""><li>Book a Repair</li></a>
				</ul>
			</div>

			<div class="footer-items">
				<h2>Help</h2>
				<div class="border"></div>
				<ul>
					<a href=""><li>Privacy Policy</li></a>
					<a href=""><li>Cancellation Policy</li></a>
					<a href=""><li>Refund Policy</li></a>
					<a href=""><li>Return Policy</li></a>
					<a href=""><li>Sitemap</li></a>
				</ul>
			</div>


			<div class="footer-items">
				<h2>Contact Us</h2>
				<div class="border"></div>
				<ul>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>1. syz street, new delhi</li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>8286356618</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i>mwnikhilv143@gmail.com</li>
				</ul>
				<div class="social-media">
					<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>

				</div>

			</div>

		</div>
		<div class="footer-bottom">
			Copyright &copy; Computers & Codes 2019. All rights reserved.
		</div>
	</div>
</body>
</html>