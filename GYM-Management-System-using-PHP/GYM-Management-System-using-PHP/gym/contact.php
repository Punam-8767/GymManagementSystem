<?php 
session_start();
error_reporting(0);
include 'include/config.php';
$uid=$_SESSION['uid'];

if(isset($_POST['submit']))
{ 
$pid=$_POST['pid'];


$sql="INSERT INTO tblbooking (package_id,userid) Values(:pid,:uid)";

$query = $dbh -> prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Package has been booked.');</script>";
echo "<script>window.location.href='booking-history.php'</script>";

}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Gym Management System</title>
	<meta charset="UTF-8">
	<meta name="description" content="Ahana Yoga HTML Template">
	<meta name="keywords" content="yoga, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/nice-select.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>
	<!-- Page Preloder -->
	

	<!-- Header Section -->
	<?php include 'include/header.php';?>
	<!-- Header Section end -->

	

	                                                                              
	<!-- Page top Section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>Contact US</h2>
				</div>
			</div>
		</div>
	</section>


<br/>

    <section class="contact">
	    <div class="icons-container"; style="display:flex" >

            <div class="icons"; style="margin-right:20%; margin-left:15%; border:1px;">
                <i class="fas fa-phone"></i>
                <h3>Number</h3>
                <p>+123-456-7890</p>
                <!-- <p>+111-222-3333</p> -->
            </div>

            <div class="icons"; style="margin-right:20%">
                <i class="fas fa-envelope"></i>
                <h3>E-mail</h3>
                <p>info@yourdomain.com</p>   
            </div>

            <div class="icons"; style="margin-right:20%">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Address</h3>
                <p>mumbai, india</p>
            </div>
        </div>
		<label></label>
		<div class="row"; style="width:20%; height:40%;">
	        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1633968347413!5m2!1sen!2sin" allowfullscreen="" loading="lazy"; ></iframe>
        </div>
     </section>


 <br/>


	<!-- Pricing Section -->
	<section class="pricing-section spad">
		<div class="container">

			<div class="row">

				<div class="col-lg-12 col-sm-6">
                     <p><strong>Business details<br/>Legal name of business : </strong> info@yourdomain.com</p>
					 <p><strong>Address:</strong></p>
                     <p>101-B HOLY HOCK INDRA NARAYAN ROAD OPP. <br/>
                         JACK JILL SHOWROOM, <br/>
                         SANTACRUZ WEST MUMBAI, <br/>
                         MAHARASHTRA 400054, India</p>
                     
				</div>
			</div>
		</div>
	</section>
	

	<!-- Footer Section -->
	<?php include 'include/footer.php'; ?>
	<!-- Footer Section end -->

	<div class="back-to-top"><img src="img/icons/up-arrow.png" alt=""></div>

	<!-- Search model end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	</body>
</html>
