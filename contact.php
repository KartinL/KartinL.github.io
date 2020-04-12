<!DOCTYPE html>
<html lang="en">
<head>
<!--

Template 2082 Pure Mix

http://www.tooplate.com/view/2082-pure-mix

-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- Site title
   ================================================== -->
	<title>Contact Me</title>

	<!-- Bootstrap CSS
   ================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="css/animate.min.css">

	<!-- Font Icons CSS
   ================================================== -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">

	<!-- Main CSS
   ================================================== -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Google web font 
   ================================================== -->	
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
	
</head>
<body>


<!-- Preloader section
================================================== -->
<div class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- Navigation section
================================================== -->
<div class="nav-container">
   <nav class="nav-inner transparent">

      <div class="navbar">
         <div class="container">
            <div class="row">

              <div class="brand">
                <a href="index.html">Kartin Leung</a>
              </div>

              <div class="navicon">
                <div class="menu-container">

                  <div class="circle dark inline">
                    <i class="icon ion-navicon"></i>
                  </div>

                  <div class="list-menu">
                    <i class="icon ion-close-round close-iframe"></i>
                    <div class="intro-inner">
                     	<ul id="nav-menu">
                         <li><a href="index.html">Home</a></li>
                       	 <li><a href="about.html">About</a></li>
						 <li><a href="thesis.html">Thesis</a></li>
						 <li><a href="sideproject.html">Side Project</a></li>
                       	 <li><a href="contact.html">Contact</a></li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>

            </div>
         </div>
      </div>

   </nav>
</div>


<!-- Header section
================================================== -->
<section id="header">
	<!-- <div class="container"> -->
		<!-- <div class="row"> -->

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
            	<div class="header-thumb">
					 <h3 class="wow fadeInUp" data-wow-delay="0.9s">Want to work together?</h3>
              		 <h1 class="wow fadeIn" data-wow-delay="0.6s">Contact Me!</h1>
              		 <!-- <h3 class="wow fadeInUp" data-wow-delay="0.9s">Vestibulum at aliquam lorem</h3> -->
           		</div>
			</div>

		<!-- </div> -->
	<!-- </div>		 -->
</section>


<!-- Contact section
================================================== -->
<section id="contact">
   <div class="container">
      <div class="row-big-padding">

         <!-- <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.3s">
         	<div class="google_map">
				<div id="map-canvas"></div>
			</div>
		</div> -->

		<div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.6s">
			<h1>Let's get in contact!</h1>
			<div class="contact-form">
				<form id="contact-form" method="post" action="mailer-new.php">
					<div class="row">
                        <?php
                        if($_GET['success'] == 1 ) {
                            echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";
                        }
                        if ($_GET['success'] == -1 ) {
                            echo "<div class=\"form-messages error\">Oops! There seems to be an error. Please try again.</div>";
                        }
                        ?>
                    </div>
					<input name="name" type="text" class="form-control" placeholder="Your Name" required>
					<input name="email" type="email" class="form-control" placeholder="Your Email" required>
					<textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea>
					<div class="contact-submit">
						<input type="submit" class="form-control submit" value="Send a message">
					</div>
				</form>
			</div>
		</div>

		<div class="clearfix"></div>
<!-- 
			<div class="col-md-4 col-sm-4">
				<div class="wow fadeInUp media" data-wow-delay="0.3s">
					<div class="media-object pull-left">
						<i class="fa fa-tablet"></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">Phone</h3>
						<p>0420 636 321</p>
					</div>
				</div>
			</div> -->

			<div class="col-md-5 col-sm-4">
				<div class="wow fadeInUp media" data-wow-delay="0.6s">
					<div class="media-object pull-left">
						<i class="fa fa-envelope"></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">Email</h3>
						<p>kartinleung@gmail.com</p>
					</div>
				</div>
			</div>

			<div class="col-md-5 col-sm-4">
				<div class="wow fadeInUp media" data-wow-delay="0.9s">
					<div class="media-object pull-left">
						<i class="fa fa-globe"></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">Location</h3>
						<p>Sydney, NSW, Australia<br>
                        </p>
					</div>
				</div>
			</div>

      </div>
   </div>
</section>


<!-- Footer section
================================================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp"  data-wow-delay="0.3s">Copyright © 2020 Kartin Leung - Designed by Tooplate</p>
				<ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
					<!-- <li><a href="#" class="fa fa-facebook"></a></li> -->
					<!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
					<!-- <li><a href="#" class="fa fa-dribbble"></a></li> -->
					<!-- <li><a href="#" class="fa fa-behance"></a></li> -->
					<!-- <li><a href="#" class="fa fa-google-plus"></a></li> -->
					<li><a href="https://www.linkedin.com/in/kartin-leung-431986149/" class="fa fa-linkedin"></a></li>
					<!-- <li><a href="#" class="fa fa-dribbble"></a></li> -->
					<li><a href="https://www.instagram.com/kartinleung/" class="fa fa-instagram"></a></li>
				</ul>
			</div>
			
		</div>
	</div>
</footer>

<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-163380980-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-163380980-1');
</script>


</body>
</html>