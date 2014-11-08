<?php
require('../header.php');
?>

<div class="container-hwch-body">

	<div class="top-bar">
		<div class="container">
			<h2 id="mastKeywords">We bring <strong id="firstKeyword"></strong> to life so they <strong id="secondKeyword"></strong> with customers</h2>
		</div>
	</div>

	<img src="../img/about-top-photo.jpg" class="photo-full-size">

	<br><br>

	<div class="container">
		<h3 class="hwch-lead">Hello, we're ZIV, a group of multi-national, multi-cultural, multi-talented individuals, anchored by our commitment to live exceptional lives and create extraordinary work and having an impact all over the world. Nice to meet you!</h3>
	</div>
	
	<div class="container">
		<h3 class="about-header" style="margin-bottom: 30px; margin-top: 45px;">Meet your team</h3>
		<div class="row">
			<div class="col-sm-3">
				<img src="#" class="img-responsive about-team-image"><br>
				<h4 class="about-team-name">
					<a href="#">
						<img src="../img/linkedin2.png" style="float: right;">
					</a>
					Cara Miller<br>
					<span class="about-team-title">Chief Experience Officer</span>
				</h4>
			</div>
			<div class="col-sm-3">
				<img src="#" class="img-responsive about-team-image"><br>
				<h4 class="about-team-name">
					<a href="#">
						<img src="../img/linkedin2.png" style="float: right;">
					</a>
					Lyssa Surface<br>
					<span class="about-team-title">Account Management</span>
				</h4>
			</div>
			<div class="col-sm-3">
				<img src="#" class="img-responsive about-team-image"><br>
				<h4 class="about-team-name">
					<a href="#">
						<img src="../img/linkedin2.png" style="float: right;">
					</a>
					DeAnn Garret<br>
					<span class="about-team-title">Office Administrator and Project coordinator</span>
				</h4>
			</div>
			<div class="col-sm-3">
				<img src="#" class="img-responsive about-team-image"><br>
				<h4 class="about-team-name">
					<a href="#">
						<img src="../img/linkedin2.png" style="float: right;">
					</a>
					Lindsay Lovejoy<br>
					<span class="about-team-title">Designer<br>Go-to Girl</span>
				</h4>
			</div>
		</div>
	</div>
	
	<br><br><br>
	
	<div class="bluebar"></div>
	
	<div class="about-greybg container-fluid">
		<div class="container">
			<br><br>
			<p class="cap-subtitle">OUR HISTORY</p>
			<center>
				<img src="../img/about-timeline.jpg" class="img-responsive"><br><br><br>
				<img src="../img/about-map.jpg" class="img-responsive"><br>
			</center>
		</div>
	</div>
	
	<br><br><br>
	
	<div class="container">
		<p class="cap-subtitle">WHY WE DO WHAT WE DO</p>
		<h3 class="about-header">70% of the 1.6 billion people living in extreme poverty are women. We give back by investing in disadvantaged women so they are empowered to change the world.</h3>
	</div>
	
	<br><br><br>
	
	<img src="../img/about-infographic.png" class="img-responsive">

	<div class="home-foot text-center">
		<h3>Need to grow your reach?</h3>
		<p>Great! We'd like to talk with you. <a href="#">Reach out to join our team.</a></p>
	</div>

</div>

<script>
    $(".menu li:nth-child(3) a").addClass("active-menu-item");

    var first_keywords = ["ideas", "concepts", "initiatives"];
    var second_keywords = ["click", "resonate", "thrive"];

    $(function () {
        var intervalID = setInterval(function () {
            setRandomKeywords();
        }, 10000);
    });

    function setRandomKeywords() {
        var first_keyword = first_keywords[Math.floor(Math.random() * first_keywords.length)];
        var second_keyword = second_keywords[Math.floor(Math.random() * second_keywords.length)];
        $("#firstKeyword").html(first_keyword);
        $("#secondKeyword").html(second_keyword);
    }

    setRandomKeywords();
</script>

<?php
require('../footer.php');
?>
