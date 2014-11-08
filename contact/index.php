<?php 
require( '../header.php');
?>

<div class="container-hwch-body">

	<div class="top-bar">
		<div class="container">
			<h2 id="mastKeywords">We'd love to <strong id="firstKeyword"></strong> you.</h2>
		</div>
	</div>
	
	<br>

	<div class="container">
		<h3 class="hwch-lead">We create products and build ideas that redefine markets, delight users and drive innovation. Looks like you are ready to talk about your next project.</h3>
	</div>
	
	<br>

	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<form role="form">
					<div class="form-group">
						<label for="exampleInputEmail1">Name</label>
						<input type="text" class="form-control" id="exampleInputEmail1">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Email</label>
						<input type="text" class="form-control" id="exampleInputPassword1">
					</div>
					<div class="form-group">
						<label for="exampleInputFile">Subject</label>
						<input type="text" class="form-control" id="exampleInputPassword1">
					</div>
					<div class="form-group">
						<label for="exampleFormInputBlock">What can we do for you?</label>
						<textarea class="form-control" rows="5"></textarea>
					</div>
					<button type="submit" class="btn btn-primary btn-lg" style="padding-left: 30px; padding-right: 30px;">SEND</button>
				</form>
			</div>
			<div class="col-sm-4 col-sm-offset-1">
				<h4 class="contact-sidebar-header">You can find us here</h4>
				<p class="contact-sidebar-paragraph">
					<span class="contact-sidebar-place">Kansas City</span><br>
					12460 S Gallery St<br>Olathe, Kansas 66062<br>
					<a class="contact-sidebar-link">Get Directions</a>
				</p>
				<p class="contact-sidebar-paragraph">
					<span class="contact-sidebar-place">Boulder</span><br>
					25501 West Valley Parkway,<br>Boulder, Colorado 66061<br>
					<a class="contact-sidebar-link">Get Directions</a>
				</p>
				
				<hr class="contact-sidebar-hr">
				
				<h4 class="contact-sidebar-header">Call us</h4>
				<p class="contact-sidebar-paragraph">913-393-2053</p>
				
				<hr class="contact-sidebar-hr">
				
				<h4 class="contact-sidebar-header">Email</h4>
				<p class="contact-sidebar-paragraph">info@zivinc.com</p>
				
				<hr class="contact-sidebar-hr">
				
				<h4 class="contact-sidebar-header">Keep informed on all things ZIV</h4>
				<input type="text" class="form-control"><br>
				<button type="submit" class="btn btn-lg" style="color: white; padding-left: 30px; padding-right: 30px;">SIGN UP</button>
			</div>
		</div>
	</div>
	
	<br><br><br>

</div>

<script>
	$(".menu li:nth-child(4) a").addClass("active-menu-item");
    
    var first_keywords = ["hear from", "work with", "talk with"];

    $(function () {
        var intervalID = setInterval(function () {
            setRandomKeywords();
        }, 10000);
    });

    function setRandomKeywords() {
        var first_keyword = first_keywords[Math.floor(Math.random() * first_keywords.length)];
        $("#firstKeyword").html(first_keyword);
    }

    setRandomKeywords();
</script>

<?php require( '../footer.php'); ?>