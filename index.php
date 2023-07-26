 <?php 
            ob_start();
            require_once 'library/lib.php';
            require_once 'classes/crud.php';

            $lib=new Lib;
            $crud=new Crud;

            ?>

<!DOCTYPE html>
<!-- html -->
<html>
<!-- head -->
<head>
	<title>MOVIE TICKET RESERVATION SYSTEM</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-CSS -->
	<link rel="stylesheet" href="css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /><!-- Fontawesome-CSS -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<link href="images/bsu2.jpg" rel="icon" type="image/jpg">
	<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />	
	<!--//theme-style-->
	<!--meta data-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="MOVIE TICKET RESERVATION SYSTEM " />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--//meta data-->
	<!-- online fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- /online fonts -->
	
</head>
<!-- //head -->
<!-- body -->
<body >
	<header>
	<div class="container">
		<!--logo-->
			<div class="logo">
				<h1><a href="index.php"><span class="fa fa-youtube-play"></span>&nbsp;&nbsp;MOVIE TICKET RESERVATION SYSTEM</a></h1>
			</div>
		<!--//logo-->
		  <div class="w3layouts-login">
				<a  href="login.php"><i class="glyphicon glyphicon-user"> </i>Login/Register</a>
			</div>    
				<div class="clearfix"></div>
    
    </div>
</header>

<!--//-->	
	<div class=" header-right">
		<div class="banner">
			 <div class="slider">
			    <div class="callbacks_container">
			      <ul class="rslides" id="slider">	
<li>
			          	 <div class="banner5">
			           		<div class="caption" style="background-color: #000;opacity: .6;">
					          	<h3><span>Welcome</span> to MOVIE TICKET RESERVATION SYSTEM</h3>
					          	<p><a href="#mobilew3layouts" class="scroll">Happy you visited</a></p>
			          		</div>
			          	</div>
			         </li>				  
						
						
						<li>
			          	 <div class="banner3">
			           		<div class="caption" style="background-color: #000;opacity: .6;">
					          	<h3><span>Book </span>at Affordable Price</h3>
					          	<p><a href="#mobilew3layouts" class="scroll">Be Assured</a></p>
			          		</div>
			          	</div>
			         </li>		
						
						
			      </ul>
			  </div>
			</div>
		</div>
	</div>

<!-- 	<div class="w3l-support">
		<div class="container">
			<div class="col-md-5 w3_agile_support_left">
				<img src="images/cus.jpg" alt=" " class="img-responsive" />
			</div>
			<div class="col-md-7 w3_agile_support_right">
				<h5>Phone Billing System</h5>
				<h3>24/7 Customer Service Support</h3>
				<p>We are always happy to hear from you,when you encounter challenges.</p>
				<div class="agile_more">
					
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div> -->
	<br>
<h1 style="text-align: center;text-decoration: underline;">WATCH LIST MOVIES</h1>

	<div class="w3l-support">
		<div class="container">
			<?php
			$qt= $crud->displayAllSpecificWithOrder('movie_info','status','0','id','desc');
			if ($qt) {
				foreach($qt as $dy){
			?>
			<div class="col-md-6" style="padding: 10px;">

			<div class="row">

				<div class="col-md-7 offset-md-4">
				<img src="movie_images/<?php echo $dy['image']; ?>" width="300" height="210" alt="no image" />
			</div>

			<div class="col-md-5" style="word-wrap: break-word;">
				<b><u><?php echo strtoupper($dy['name']); ?></u></b>
				<p><?php echo $dy['info']; ?></p>
			</div>

			</div>

			</div>
			<?php
                      }

                    } else {
                      echo "<p><center>No Movie at the moment</center</p>";
                    }
                    ?>

		
			


		</div>
	</div>

	<br><br><br>
	<!-- script -->
	<script>
		$(document).ready(function() {
			$("#tab2").hide();
			$("#tab3").hide();
			$("#tab4").hide();
			$(".tabs-menu a").click(function(event){
				event.preventDefault();
				var tab=$(this).attr("href");
				$(".tab-grid").not(tab).css("display","none");
				$(tab).fadeIn("slow");
			});
		});
	</script>


<div class="clearfix"> </div>
</div>
</div>
<div class="w3l-footer-bottom">
	<div class="container-fluid">
		<div class="col-md-4 w3-footer-logo">
			<h2><a href="index.html"></a></h2>
		</div>
		<div class="col-md-8 agileits-footer-class">
			<p >© 2022 MOVIE TICKET RESERVATION SYSTEM.|  All Rights Reserved  <a href="http://w3layouts.com/" target="_blank"></a> </p>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
</footer>
<!--//footer-->

<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working --><!-- Responsive-slider -->
<!-- Banner-slider -->
<script src="js/responsiveslides.min.js"></script>
<script>
	$(function () {
		$("#slider").responsiveSlides({
			auto: true,
			speed: 500,
			namespace: "callbacks",
			pager: true,
		});
	});
</script>
<!-- //Banner-slider -->
<!-- //Responsive-slider -->   


<!-- easy-responsive-tabs -->    
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
<script src="js/easyResponsiveTabs.js"></script>
<!-- //easy-responsive-tabs --> 
<!-- here stars scrolling icon -->
<script type="text/javascript">
	$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
						*/
						
						$().UItoTop({ easingType: 'easeOutQuart' });
						
					});
				</script>
				<!-- start-smoth-scrolling -->
				<script type="text/javascript" src="js/move-top.js"></script>
				<script type="text/javascript" src="js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
				<!-- start-smoth-scrolling -->
				<!-- //here ends scrolling icon -->
			</body>
			<!-- //body -->
			</html>
<!-- //html -->