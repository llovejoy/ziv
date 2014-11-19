<?php
require('../header.php');
?>

<title>About Us</title>

<div class="container-hwch-body">

	<div class="top-bar">
		<div class="container">
			<h2 id="mastKeywords">We bring <strong id="firstKeyword"></strong> to life so they <strong id="secondKeyword"></strong> with customers</h2>
		</div>
	</div>

    <img src="../img/about-top-photo.jpg" srcset="../img/about-top-photo-mobile.jpg 600w, ../img/about-top-photo.jpg 1000w" class="photo-full-size">

	<br><br>

	<div class="container">
		<h3 class="hwch-lead">Hello, we're ZIV, a group of multi-national, multi-cultural, and multi-talented individuals anchored by our commitment to live exceptional lives, create extraordinary work, and have an impact all over the world. Nice to meet you!</h3>
	</div>
	
	<div class="container">
		<h3 class="about-header" style="margin-bottom: 30px; margin-top: 45px;">Meet your team</h3>
		<div class="row">
			<div class="col-sm-3">
				<img src="<?php echo $dom; ?>img/profiles/cara.jpg" class="img-responsive"><br>
				<h4 class="about-team-name">
					<a href="https://www.linkedin.com/in/ricardamiller">
						<img src="../img/linkedin2.png" style="float: right;">
					</a>
					Cara Miller<br>
					<span class="about-team-title">Chief Creative Strategist</span>
				</h4>
			</div>
			<div class="col-sm-3">
				<img src="<?php echo $dom; ?>img/profiles/lyssa.jpg" class="img-responsive"><br>
				<h4 class="about-team-name">
					<a href="https://www.linkedin.com/pub/lyssa-surface/7/4a6/ba9">
						<img src="../img/linkedin2.png" style="float: right;">
					</a>
					Lyssa Surface<br>
					<span class="about-team-title">Director of Accounts and Insights</span>
				</h4>
			</div>
			<div class="col-sm-3">
				<img src="<?php echo $dom; ?>img/profiles/deann.jpg" class="img-responsive"><br>
				<h4 class="about-team-name">
					<a href="https://www.linkedin.com/pub/deann-garrett/82/3b8/53">
						<img src="../img/linkedin2.png" style="float: right;">
					</a>
					DeAnn Garret<br>
					<span class="about-team-title">Office Administrator and Project coordinator</span>
				</h4>
			</div>
			<div class="col-sm-3">
				<img src="<?php echo $dom; ?>img/profiles/lindsay.jpg" class="img-responsive"><br>
				<h4 class="about-team-name">
					<a href="https://www.linkedin.com/pub/lindsay-lovejoy/98/b29/63">
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
				<a href="../contact"><img src="../img/about-map.jpg" class="img-responsive" usemap="#image-maps-2014-11-17-192001"></a><br>
			</center>
		</div>
	</div>
	
	<br><br><br>
	
    <!--
	<div class="container">
		<p class="cap-subtitle">WHY WE DO WHAT WE DO</p>
		<h3 class="about-header">70% of the 1.6 billion people living in extreme poverty are women. We give back by investing in disadvantaged women so they are empowered to change the world.</h3>
	</div>
	
	<br><br><br>
	
	<img src="../img/about-infographic.png" class="img-responsive">
    -->
    
    <div class="container">
        <p class="cap-subtitle">WHY WE DO WHAT WE DO</p>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <p class="why-lead">
                    <span>Only 3% of creative directors</span><br>
                    <span>are women yet women make</span><br>
                    <span>85% of buying decisions.</span></p>
                <p class="why-body">
                    <span>Female consumers were asked if brands</span><br>
                    <span>understood them - <a href="http://www.fastcompany.com/3006255/where-are-all-women-creative-directors">90% said no</a>. We</span><br>
                    <span>bring a refreshing perspective to</span><br>
                    <span>connecting with your customers.</span></p>
            </div>
            <div class="col-sm-4">
                <p class="why-lead">
                    <span>Kid’s needs, daycare costs,</span><br>
                    <span>and no flexible options often</span><br>
                    <span>push women out of careers.</span></p>
                <p class="why-body">
                   <span>Given women’s desire to stay in their</span><br>
                    <span>career we offer an alternative to the</span><br>
                    <span>demands of corporate america and</span><br>
                    <span>traditional agency work life balance.</span></p>
            </div>
            <div class="col-sm-4">
                <p class="why-lead">Women make up 70% of the</span><br>
                    <span>1.6 billion people globally</span><br>
                    <span>who live in extreme poverty.</span></p>
                <p class="why-body">
                    <span>Women in developing countries spend</span><br>
                    <span>earnings on family, reducing poverty</span><br>
                    <span>generationally. We support groups</span><br>
                    <span>who transform women economically.</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <center>
                    <br><br>
                    <a href="#"><img src="../img/worldvision.png" class="why-logo img-responsive"></a>&nbsp;
                    <a href="#"><img src="../img/womensemployment.png" class="why-logo img-responsive"></a>
                </center>
                <br><br><br>
            </div>
        </div>
        
    </div>

	<div class="home-foot text-center" style="background-color: #ebebeb;">
		<h3>Want to make a difference?</h3>
		<p class="call-to-action-body">Great! We'd like to talk with you. <a href="../contact/index.php">Reach out to join our team.</a></p>
	</div>

</div>

<script>
    textFit($(".why-lead span"), { maxFontSize: 19 });
    textFit($(".why-body span"), { maxFontSize: 15 });
    
    $(".menu li:nth-child(4) a").addClass("active-menu-item");

    var first_keywords = ["ideas", "concepts", "initiatives"];
    var second_keywords = ["click", "resonate", "thrive"];
var first_keyword = first_keywords[Math.floor(Math.random() * first_keywords.length)];
    var second_keyword = second_keywords[Math.floor(Math.random() * second_keywords.length)];
	$("#firstKeyword").html(first_keyword);
	$("#secondKeyword").html(second_keyword);

    /* Set a timer of 2 seconds to set firstRound to true
       Fixes the first round bug and will only change AFTER
       12 seconds now */
    var firstRound = false;
    setTimeout(function(){
        firstRound = true;
    }, 2000);

    // Fire setRandomKeywords every 12 seconds
    var si = setInterval(setRandomKeywords, 12000);

    /* Fired from above ^ every 12 seconds
       Will get two random words from the word pools and will fade in and fade out */
    function setRandomKeywords() {
        if (firstRound == true) {
            setTimeout(function(){
                first_keyword = first_keywords[Math.floor(Math.random() * first_keywords.length)];
                second_keyword = second_keywords[Math.floor(Math.random() * second_keywords.length)];
                $("#firstKeyword").html(first_keyword);
                $("#secondKeyword").html(second_keyword);
                $("#mastKeywords").removeClass("fade");
            }, 2000);
            $("#mastKeywords").addClass("fade");
        }
    }
    
    setRandomKeywords();
</script>

<?php
require('../footer.php');
?>
