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

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    

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
					<h2>Home</h2>
					<p>Physical Activity Or Can Improve Your Health</p>
				</div>
			</div>
		</div>
	</section>
<br/>

    	
<!-- slider section starts -->
<div class="container">
                <!-- <h2>
                    Carousel Example
                </h2> -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                       

                        <div class="item active">
                            <img src="https://cdn-bpeme.nitrocdn.com/sbFHNRwAVtFsQVqYtMYUaAfirmxYnMYE/assets/images/optimized/rev-e634be6/wp/wp-content/uploads/2022/02/services.png" style="width:100%; height: 30%;" />
                            <div class="carousel-caption">
                                <h3>Jewellery Shopping</h3>
                                <p>20% off</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="https://cdn-bpeme.nitrocdn.com/sbFHNRwAVtFsQVqYtMYUaAfirmxYnMYE/assets/images/optimized/rev-e634be6/wp/wp-content/uploads/2022/02/services.png" style="width: 100%; height: 60%" />
                            <div class="carousel-caption">
                                <h3> Electronis</h3>
                                <p>25% off</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="https://cdn-bpeme.nitrocdn.com/sbFHNRwAVtFsQVqYtMYUaAfirmxYnMYE/assets/images/optimized/rev-e634be6/wp/wp-content/uploads/2022/02/services.png" alt="Chicago" style="width: 100%; height: 40%;" />
                            <div class="carousel-caption">
                                <h3>Black Friday Sale</h3>
                                <p>20% off</p>
                            </div>
                        </div>

                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left">
                        </span><span class="sr-only">Previous</span>
                    </a><a class="right carousel-control"
                           href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right">
                        </span><span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
<!-- image slider End -->

<!-- Payment mode starts -->
        <div class="container center ">
            <div class="row ">
                <div class="col-lg-4">
                    <img class="img-rectangle" style="margin-left:100px" src="https://d1ilnltdtrvmj1.cloudfront.net/cb_images/icici-bank-offers-myntra-offer-get-extra-10-25-instant-discount-on-icici-bank-credit-a-debit-cards-offers-deals-cashback-coupons-11610911.jpeg" alt="thumb" width="270" height="230" />
                </div>

                <div class="col-lg-4">
                    <img class="img-rectangle" style="margin-top:70px; margin-left:40px;" src="https://hotdealszone.in/wp-content/uploads/2019/07/Amazon-HDFC-Offer-15-16-July-1024x264.jpg" alt="thumb" width="300" height="85" />
                </div>

                <div class="col-lg-4" style="margin-top:50px;">
                    <h3>10% additional off on </h3>
                    <h3>Credit debit cards...</h3>
                </div>

            </div>
        </div> <hr />
<!-- Payment mode ends -->

<!-- Middle Contents start -->
        <div class="container center ">
            <div class="row ">
                <div class="col-lg-4">
                    <img class="img-circle " src="https://i.pinimg.com/736x/24/54/48/245448f231a37e946c5974a6e8cbce18.jpg" alt="thumb" width="185" height="140" />
                    <h2> Fitness Finest</h2>
                    <p>
                    At CrossFit House, our mission is to provide an exceptional fitness experience that empowers individuals to reach their full potential. We believe that with the right guidance, support, and motivation, everyone can achieve their goals and live a healthier, more fulfilling life.
                    </p>  
                    <p>
                        <a class="btn btn-default " href="#" role="button">View More &raquo;</a>
                    </p>
                </div>

                <div class="col-lg-4">
                    <img class="img-circle " src="https://www.shutterstock.com/image-vector/fitness-logo-vector-symbol-icon-600w-1926906863.jpg" alt="thumb" width="160" height="140" />
                    <h2> Fitness club</h2>
                    <p>
                    Our team of experienced and passionate coaches is dedicated to helping you succeed in your fitness journey. We provide personalized coaching, innovative workouts, and a supportive community to help you build strength, increase endurance, and improve your overall well-being.
                    </p>
                    <p>
                    
                        <a class="btn btn-default " href="#" role="button">View More &raquo;</a>
                    </p>
                </div>

                <div class="col-lg-4">
                    <img class="img-circle " src="https://marketplace.canva.com/EAFXQWIAFVA/1/0/1600w/canva-black-and-white-vintage-gym-and-fitness-logo-MzICys7rUvU.jpg" alt="thumb" width="160" height="140" />
                    <h2> Gym & Fitness</h2>
                    <p>
                    Our state-of-the-art facility features top-of-the-line equipment, spacious workout areas, and a comfortable, friendly environment that fosters camaraderie and teamwork. We take pride in creating an inclusive atmosphere where athletes of all skill levels can thrive and grow together.
                    </p>
                    <p>
                        <a class="btn btn-default " href="#" role="button">View More &raquo;</a>
                    </p>
                </div>
            </div>
        </div>
<!-- Middle Contents End-->

	<!-- Pricing Section -->
	<section class="pricing-section spad">
		<div class="container">
			<div class="section-title text-center">
				<img src="img/icons/logo-icon.png" alt="">
				<h2>Pricing plans</h2>
				<p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p>
			</div>
			<div class="row">
				        <?php 

$sql ="SELECT id, category, titlename, PackageType, PackageDuratiobn, Price, uploadphoto, Description, create_date from tbladdpackage";
$query= $dbh -> prepare($sql);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
foreach($results as $result)
{
?>
				<div class="col-lg-3 col-sm-6">
					<div class="pricing-item begginer">
						<div class="pi-top">
							<h4><?php echo $result->titlename;?></h4>
						</div>
						<div class="pi-price">
							<h3><?php echo htmlentities($result->Price);?></h3>
							<p>	<?php echo $result->PackageDuratiobn;?></p>
						</div>
						<ul>
							<?php echo $result->Description;?>
							
						</ul>
						<?php if(strlen($_SESSION['uid'])==0): ?>
						<a href="login.php" class="site-btn sb-line-gradient">Booking Now</a>
						<?php else :?>
							<!-- <a href="#" class="site-btn sb-line-gradient">Booking Now</a> -->
							 <form method='post'>
                            <input type='hidden' name='pid' value='<?php echo htmlentities($result->id);?>'>
                          

                        <input class='site-btn sb-line-gradient' type='submit' name='submit' value='Booking Now' onclick="return confirm('Do you really want to book this package.');"> 
                        </form> 
							 <?php endif;?>
					</div>
				</div>
				<?php  $cnt=$cnt+1; } } ?>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">

	</body>
</html>
