<?php
require('../header.php');
?>

<title>Results</title>

<div class="container-hwch-body">

	<div class="top-bar">
		<div class="container">
			<h2>Your goals + our <strong>expertise</strong> = <strong>results</strong></h2>
		</div>
	</div>

    <img src="../img/results-top-graphic.jpg" srcset="../img/results-top-graphic-mobile.jpg 600w, ../img/results-top-graphic.jpg 1000w" class="photo-full-size">

	<br><br>

	<div class="container">
		<h3 class="hwch-lead">We work with innovative companies who understand that well crafted human experiences are good for business.</h3>
	</div>
	
	<br><br>
	
	<div class="container">
		<p style="font-size: 26px;">5 GOALS WE SEEK TO ACCOMPLISH WITH EVERY PROJECT</p>
		
		<h3 class="results-body-header">Communicate well</h3>
		<p class="results-body-paragraph">So your customer can understand you, relate to you, share you, and successfully accomplish any digital tasks.</p>
		
		<h3 class="results-body-header">Stand out with excellence</h3>
		<p class="results-body-paragraph">Be relevant to your customers―we'll connect the marketing and branding dots.</p>
		
		<h3 class="results-body-header">Leap frog the competition</h3>
		<p class="results-body-paragraph">Innovate against your competitors to find your competitive advantage.</p>
		
		<h3 class="results-body-header">Set direction for the next stage of growth</h3>
		<p class="results-body-paragraph">Your business will know how it should grow next and with a brilliant strategy.</p>
		
		<h3 class="results-body-header">Expect exceptional results</h3>
		<p class="results-body-paragraph">Your bottomline matters―we create for results.</p>
	</div>
	
	<br><br>
	
	<div class="results-menu-container">
		<div class="container">
			<ul class="results-menu-container-ul">
			</ul>
		</div>
	</div>
	
	<br>
	
	<div class="features container">
		<div class="row feature-zoomin">
			<div class="col-sm-7">
				<h3 class="feature-heading">Challenge</h3>
				<p class="feature-paragraph" id="result-challenge"></p>
				
				<h3 class="feature-heading">Approach</h3>
				<p class="feature-paragraph" id="result-approach"></p>
				
				<h3 class="feature-heading">Results</h3>
				<p class="feature-paragraph" id="result-results"></p>
				
				<h3 class="feature-heading">Capabilities</h3>
				<ul class="feature-list" id="result-capabilities"></ul>
			</div>
			<div id="results-slider" class="col-sm-5">
				<img class="img-responsive" id="slider-current-img">
				<div class="slider-pagination">
                    <center>
                        <img id="slider-pag-backward" src="../img/arrow_left_lblue.png">&nbsp;
                        <span id="slider-pag-number"></span>&nbsp;
                        <img id="slider-pag-forward" src="../img/arrow_right_lblue.png">
                    </center>
				</div>
			</div>
		</div>
		<br>
	</div>
	
	<div class="results-menu-container" style="height: 15px;"></div>
	
	<div class="results-quote">
		<div class="container">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<br>
				<p class="results-quote-body">Wanted to let you know the solution went to beta last week with our first retail client. Feedback has been very favorable on the design and intuitive nature of the product. Thanks for all the help and guideance in creating a good product and user experience.</p>
				<p class="results-quote-author">Charles Murphy <br><span class="results-quote-title">Online banking solution</span></p>
				<br>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>

	<div class="home-foot text-center">
		<h3>Looking for results?</h3>
		<p class="call-to-action-body">Explore our capabilities and see <a href="#">what we do.</a></p>
	</div>

</div>

<script>
var currentPag = 1;
var currentPagLength = 0;
var currentIndex = 0;
    
var resultData = null;
var imageDirectory = "../img/results/"
$(".menu li:nth-child(3) a").addClass("active-menu-item");
	
// Get all the result data and place it into resultData variable, also replace the starting data with the first result
$.getJSON('../js/results.json', function(data) {
	resultData = data;

	for (var i = 0; i < data.length; i++) {
  		$(".results-menu-container-ul").append("<li class='result-menu-item' resultid='"+ data[i].id +"'>" + data[i].title + "</li>");
    }
	$(".results-menu-container-ul li").width( (100 / data.length) + "%" );
	switchResult(0);
	$(".result-menu-item[resultid=0]").addClass("results-active");
    currentPagLength = resultData[0].images.length;
    currentIndex = 0;
});
	
function switchResult(id) {
	// Clean area up, replace with pertinent values
	$(".results-menu-container-ul li").removeClass("results-active");
	$("#result-capabilities").html('');
	$("#result-challenge").html(resultData[id].challenge);
	$("#result-approach").html(resultData[id].approach);
	$("#result-results").html(resultData[id].results);
    currentIndex = id;
    currentPag = 1;
    currentPagLength = resultData[currentIndex].images.length;
	
	// Fill capabilities
	var capabilities = resultData[id].capabilities;
	for (var i = 0; i < capabilities.length; i++) {
		$("#result-capabilities").append("<li>" + resultData[id].capabilities[i] + "</li>");
	}
	
	// Replace image with first pertinent image available
	$("#slider-current-img").attr("src", imageDirectory + resultData[id].images[0]);
	
	if (resultData[id].images.length > 1) {
		$("#slider-pag-forward").attr("src", "../img/arrow_right_blue.png");
	}
	
	var paginationNumbers = "<span class='pag-number pag-active' pag-number='1'>1&nbsp;</span>";
	for (var i = 2; i < resultData[id].images.length+1; i++) {
		paginationNumbers += "<span class='pag-number' pag-number='"+ i +"'>" + i + "</span>&nbsp;";
	}
    replaceArrows();
	
	$("#slider-pag-number").html(paginationNumbers);
}
  
$(document).on("click", "#slider-pag-forward", function() {
    if (currentPag != currentPagLength) {
        currentPag += 1;
		$(".pag-active").removeClass("pag-active");
        $(".pag-number[pag-number="+ currentPag +"]").addClass("pag-active");
        $("#slider-current-img").attr("src", imageDirectory + resultData[currentIndex].images[currentPag-1]);
        replaceArrows();
    }
});
    
$(document).on("click", "#slider-pag-backward", function() {
    if (currentPag != 1) {
        currentPag -= 1;
		$(".pag-active").removeClass("pag-active");
        $(".pag-number[pag-number="+ currentPag +"]").addClass("pag-active");
        $("#slider-current-img").attr("src", imageDirectory + resultData[currentIndex].images[currentPag-1]);
        replaceArrows();
    }
});
	
$(document).on("click", ".pag-number", function() {
	var id = parseInt($(this).html());
	currentPag = id;
	$(".pag-active").removeClass("pag-active");
    $(".pag-number[pag-number="+ currentPag +"]").addClass("pag-active");
    $("#slider-current-img").attr("src", imageDirectory + resultData[currentIndex].images[currentPag-1]);
    replaceArrows();
});
    
function replaceArrows() {
    if (currentPag === 1) {
        $("#slider-pag-backward").attr("src", "../img/arrow_left_lblue.png");
    }
    else {
        $("#slider-pag-backward").attr("src", "../img/arrow_left_blue.png");
    }
    
    if (currentPag === resultData[currentIndex].images.length) {
        $("#slider-pag-forward").attr("src", "../img/arrow_right_lblue.png");
    }
    else {
        $("#slider-pag-forward").attr("src", "../img/arrow_right_blue.png");
    }
}
	
$(document).on("click", ".result-menu-item", function() {
	var id = parseInt($(this).attr("resultid"));
	switchResult(id);
	$(this).addClass("results-active");
});
</script>

<?php
require('../footer.php');
?>
