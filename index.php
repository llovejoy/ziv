<?php 
	date_default_timezone_set( 'America/Chicago'); 
	//$dom = "http://www.nathanfrancy.com/test/ziv/";
	$dom = "http://localhost/ziv/";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/vendor/jquery.js"></script>
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="js/vendor/bootstrap.js"></script>
</head>

<body>

	<div class="container-header">
		<div class="container-menu">
			<ul class="menu clearfix">
				<li><a href="<?php echo $dom; ?>how-we-can-help">how we can help</a>
				</li>
				<li><a href="<?php echo $dom; ?>results">results</a>
				</li>
				<li><a href="<?php echo $dom; ?>about">about</a>
				</li>
				<li><a href="<?php echo $dom; ?>contact">contact</a>
				</li>
			</ul>
			<div class="container">
				<a href="index.php">
					<img src="http://www.nathanfrancy.com/test/ziv/img/logo.png" class="logo-img">
				</a>
			</div>
		</div>
	</div>


	<img src="img/home-photo.png" class="photo-offset">

	<div class="container-home-body">
		<div class="home-body-text container">
			<p class="text-home-lead-body" style="position: relative; top: -30px;">We offer experience innovation, inter-disciplinary strategic, creative and technical skills that meet today's marketing demands.</p>
			<br>
			<p class="lead" style="font-size: 24px;">Whether, it's creating a brand or implementing a digital solution to disrupt your industry, transforming your customer's experience to gain loyalty, or executing a marketing strategy for needed growth - <strong>we've got you covered.</strong>
			</p>
			<br>
			<div class="row">
				<div class="col-sm-4 home-sections">
					<h3 class="column-header">Disrupt</h3>
					<p>Strategy grounded in insight and research is the key to innovation and launching successful products and services. We gather in-depth feedback, analyze, test, retest, and use 30+ years of first-hand user research experience to push into <strong>new market territory</strong>.</p>
				</div>
				<div class="col-sm-4 home-sections">
					<h3 class="column-header">Transform</h3>
					<p>Your customer's experience and perception determines if they buy from you. We are experts in UX design, branding, and marketing; ensuring you reach your business goals by building a brand that is relational and meaningful. You'll gian maximum advantage and <strong>measureable results</strong>.</p>
				</div>
				<div class="col-sm-4 home-sections">
					<h3 class="column-header">Grow</h3>
					<p>Your business should always be evolving. Powerful brand story-telling, impactful design and valuable content conveyed in engaging new ways means growth with maximum reach and <strong>profitable growth</strong>.</p>
				</div>
			</div>
			<br>
			<h2 class="text-center" style="font-size: 44.5px;">Because every business could use a polish/boost.</h2>
			<br>
			<br>
		</div>
		<div class="home-blueorange-bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<h1 style="font-size: 45px;"><strong>Being said...</strong></h1>
						<p style="font-size: 23px;">The lowdown on emotional branding ow.ly/zvozU
							<br><small>Aug 13</small>
						</p>
					</div>
					<div class="col-sm-5 col-sm-offset-2">
						<h1 style="font-size: 45px;"><strong>What we're up to</strong></h1>
						<p style="font-size: 23px;">Our startup client hit their 3 month projection out of the gate.
							<br><small>Aug 13</small>
						</p>
					</div>
				</div>

			</div>
		</div>

		<div class="home-foot text-center">
			<h3>How can we help you?</h3>
			<p>We're happy to have a conversation. <a href="#">Connect with us.</a>
			</p>
		</div>

	</div>


	<?php require( 'footer.php'); ?>