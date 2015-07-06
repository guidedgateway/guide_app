<?php

$id =$_GET['id'];
mysql_connect('localhost','root','');
mysql_select_db('db_travelling');
$sql="SELECT * FROM tb_guidedetails where id = " . $id . "";
$records = mysql_query($sql);
while ($row = mysql_fetch_array($records))
{
	$guide_Name = $row['guide_Name'];
	$age = $row['age'];
	$experiance = $row['experiance'];
	$work_location = $row['work_location'];
	$languages_known = $row['languages_known'];
	$address = $row['address'];
	$description = $row['description'];
	$image = $row['image'];
}
?>
<html>
<head>
<title>Waltrump's sample for traveling website</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--  jquery plguin -->
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="images/logo.png" alt=""/></a></h1>
		</div>
		<div class="h_right">
			<ul class="menu">
				<li><a href="index.php">home</a></li>
				<!-- <li class="active"><a href="about.html">about</a></li>
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
	                <!-- <li class="nav-item"><a href="about.html">About</a></li>
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
</div>
</div>
<!-- start slider -->
<div class="slider_bg">
<div class="wrap">
	<div class="slider">
		<h2>about us</h2>
		<h3>What we Think, get in touch</h3>
	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
		<div class="content">
			<!-- start about -->
			<div class="about">
					 <div class="cont-grid-img img_style">
			     		<center><img height="300" width="250"	src="images/guide_image/<?php echo ($image); ?>" alt=""></center>
					</div>
			       <div class="cont-grid">
					       	<h4><?php echo ($guide_Name . ' [ ' . $work_location . ' ] ') ?></h4>
					       	<p class="para">
						<table>
						<tr><td style="color:gray; font-size:15px">Age: <?php echo $age ?></td></tr>
						<tr><td style="color:gray; font-size:15px">Experiance: <?php echo $experiance ?> Yr</td></tr>
						<tr><td style="color:gray; font-size:15px">Work Location: <?php echo $work_location ?></td></tr>
						<tr><td style="color:gray; font-size:15px">Language Known: <?php echo $languages_known ?></td></tr>
						<tr><td style="color:gray; font-size:15px">Complete Address: <?php echo $address ?></td></tr>
						</table>
							</p><br>
					       	<p class="para">
							<?php echo $description ?>
							</p>
			      	</div>
			      	<div class="clear"></div>
			    	
			</div>
			<!-- end about -->
		</div>
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