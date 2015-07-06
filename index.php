<?php

//make connection
//mysql_connect('localhost','root','');

//sleect db
//mysql_select_db('db_travelling');

//$sql="SELECT * FROM tb_guidedetails";

//$records = mysql_query($sql);

/* function hello(){
	//$_SESSION['guideID'] = $id;
	echo '<script>alert("helo");</script>';
} */

?>


<html>
<head>
<title>Guided Gateway</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="Shortcut Icon" href="images/Waltrump_Icon.png">
<!--  jquery plguin -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- start gallery -->
	<script type="text/javascript" src="js/jquery.easing.min.js"></script>	
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
			
	});	
	</script>
<!-- Add fancyBox main JS and CSS files -->
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
		
		

</head>
<body>


<script>
function myFunction(id) {
	window.location.href = "about.php?id="+id;
	/* var x="<?php $_SESSION['guideID'] = "ankit"; ?>"; */
	 return false;
 }
</script>
			



<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="images/logo.png" alt=""/></a></h1>
		</div>
		<div class="h_right">
			<ul class="menu">
				<li class="active"><a href="index.php">home</a></li>
				<!-- <li><a href="about.html">about</a></li>
				<li><a href="portfolio.html">portfolio</a></li>
				<li><a href="blog.html">blog</a></li> -->
				<li><a href="contact.php">contact</a></li>
			</ul>
			<div id="sb-search" class="sb-search">
				<form>
					<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
					<input class="sb-search-submit" type="submit" value="">
					<span class="sb-icon-search"></span>
				</form>
			</div>
			<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
			<script>
				new UISearch( document.getElementById( 'sb-search' ) );
			</script>
			<!-- start smart_nav * -->
	        <nav class="nav">
	            <ul class="nav-list">
	                <li class="nav-item"><a href="index.php">Home</a></li>
	               <!--  <li class="nav-item"><a href="about.html">About</a></li>
	                <li class="nav-item"><a href="portfolio.html">Portfolio</a></li>
	                <li class="nav-item"><a href="blog.html">Blog</a></li> -->
	                <li class="nav-item"><a href="contact.php">Contact</a></li>
	                <div class="clear"></div>
	            </ul>
	        </nav>
	        <script type="text/javascript" src="js/responsive.menu.js"></script>
			<!-- end smart_nav * -->
		</div>
		<div class="clear"></div>
	</div>
	<div class="header_btm">
		<div class="h_left">
			<h2>Welcome All to the travelling Website.</h2>
			<h3>A more convinient way to find you travelling guide.</h3>
		</div>
		<div class="soc_icons">
			<h2>find us online </h2>
				<ul>
					<li><a class="icon1" href="#"></a></li>
					<li><a class="icon2" href="#"></a></li>
					<li><a class="icon3" href="#"></a></li>
					<li><a class="icon4" href="#"></a></li>
					<li><a class="icon5" href="#"></a></li>
					<div class="clear"></div>
				</ul>	
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
	
		
		<!-- start gallery  -->
		<div class="container">
			<ul id="filters" class="clearfix">
				<li><span class="filter active" data-filter="Delhi Mumbai Kolkata Chennai">Guide from all cities</span></li> /
				<li><span class="filter" data-filter="Delhi">Delhi</span></li> /
				<li><span class="filter" data-filter="Mumbai">Mumbai</span></li> /
				<li><span class="filter" data-filter="Kolkata">Kolkata</span></li> /
				<li><span class="filter" data-filter="Chennai">Chennai</span></li>
			</ul>
			
			<?php
			/* echo '<form action="about.php" method="GET">'; */
			echo '<div id="portfoliolist">';
				
			while($guide = mysql_fetch_assoc($records))
			{   
				echo '<a onclick="myFunction(' . $guide['id'] . ')" >';
				echo '<div class="portfolio ' . $guide['work_location'] . '" style="border: thin solid white" data-cat="Delhi">';
				echo '<div class="portfolio-wrapper">				';
				echo '<table>';
				echo '	<tr>';
				echo '	<td style="vertical-align:top">';
				echo '		<img src="images/guide_image/' . $guide['image'] . '" height="110" width="80"   alt="Image 2" />';
				echo '	</td>';
				echo '	<td width="15px"></td>';
				echo '	<td style="vertical-align:top">';
				echo '		<table>';
			echo '			<tr><td style="color:white; font-size:15px">Name: '  . $guide['guide_Name'] . '</td></tr>';
			echo '			<tr><td style="color:white; font-size:15px">Age: ' . $guide['age'] . '</td></tr>';
				echo '		<tr><td style="color:white; font-size:15px">Experiance: ' . $guide['experiance'] . ' Yr</td></tr>';
				echo '		<tr><td style="color:white; font-size:15px">Work Location: ' . $guide['work_location'] . '</td></tr>';
				echo '		<tr><td style="color:white; font-size:15px">Language Known: ' . $guide['languages_known'] . '</td></tr>';
				echo '	</table>';
				echo '	</td>';
				echo '	</tr>';
				echo '</table>';
				echo '<div class="label">';
			echo '	<div class="label-text">';
			echo '	<a class="btn" id="' . $guide['id'] . '" name="submit" onclick="myFunction(' . $guide['id'] . ')">Know more</a>';
			
			echo '	</div>';
				echo '	<div class="label-bg"></div>';
				echo '	</div>';
				
				echo '	</div>';
				echo '	</div>		';
				echo '	</a>';
			} 
			echo '	</div>';
			/* echo '</form>'; */
			
		echo '</div>';
		
		
		/* echo 'temp id = ' . $tempID;
		$sql2="SELECT * FROM tb_guidedetails where id = " . $tempID . "";
		$records2 = mysql_query($sql2);
		$guide2 = mysql_fetch_assoc($records2); */
		
		echo '<div id="popUp1" class="mfp-hide">';
			echo '<div class="pop_up">';
			echo ' 	<h2> Ankit Bhagat </h2>';
			echo ' 	<table>';
			echo '	<tr>';
			echo '	<td style="vertical-align:top">';
			echo '	<img src="images/guide_image/1_new.jpg" height="140px" width="120"  alt="Image 2" />';
			echo '	</td><td width="15px"></td>';
			echo '	<td style="vertical-align:top">';
			echo '	<table>';
			echo '	<tr><td>Name: Ankit Bhagat</td></tr>';
			echo '	<tr><td>Guide For the Location: Delhi</td></tr>';
				echo '<tr><td>Age: 25</td></tr>';
			echo '	<tr><td>Sex: Male</td></tr>';
				echo '<tr><td>Address: L2-1531 Shastri Nagar, Meerut</td></tr>';
			echo '	</table>';
			echo '	</td>';
			echo '	</tr>';
				echo '</table>';
				echo '<p>Ankit is a young, energitic guide, working for last 10 year in this location, so know all the beautiful place to make you visit, he has perfection in multiple languages english, fanch, german, itelian, spenish, hindi, punjabi, arebian.</p>';
			echo '	<a class="btn" href="details.html">Contact me</a>';
			echo '</div>';
		echo '</div>';
		?>
		<!-- end popup -->
		
	</div>
</div>
</div>
<div class="footer_bg">
<div class="wrap">
	<div class="footer">
		<div class="span_of_4">
			<div class="f_nav1">
				<h4 style="color:gray">about us</h4>
				<p style="color:gray">Waltrump Technology presenting a beautiful website prototype for a travelling portal.</p>
				<span style="color:gray">Address</span>
				<p style="color:gray" class="top">L2-1531 Shastri Nagar, Meerut City, UP</p>
				<p style="color:gray">Phone:(+91) 9368541767</p>
				<div class="f_icons">
						<ul>
							<li><a class="icon2" href="#"></a></li>
							<li><a class="icon1" href="#"></a></li>
							<li><a class="icon3" href="#"></a></li>
							<li><a class="icon4" href="#"></a></li>
							<li><a class="icon5" href="#"></a></li>
						</ul>	
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="footer_top">
			<div class="f_nav1">
				<ul>
					<li><a href="index.php">home</a></li>
					<!-- <li><a href="about.html">about</a></li>
					<li><a href="portfolio.html">portfolio</a></li>
					<li><a href="blog.html">blog</a></li>
					<li><a href="index.html">features</a></li> -->
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
			<div class="copy">
				<p class="link"><span>© All rights reserved | Created By&nbsp;<a href="http://waltrump.com/"> Waltrump</a></span></p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>
</body>
</html>