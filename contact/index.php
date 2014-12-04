<?php 
require( '../header.php');
?>

<title>Contact Us</title>

<div class="container-hwch-body">

	<div class="top-bar">
		<div class="container">
			<h2 id="mastKeywords">We'd love to <strong id="firstKeyword"></strong> you.</h2>
		</div>
	</div>
	
	<br>

	<div class="container">
		<h3 class="hwch-lead">We create products and build ideas that redefine markets, delight users, and drive innovation. Looks like you're ready to talk about your next project!</h3>
	</div>
	
	<br>

	<div class="container">
		<div class="row">
			<div class="col-sm-7">
                <div class="alert alert-success" role="alert" id="messageGood">Thank you for your message! We will be in contact with you shortly.</div>
                <div class="alert alert-danger" role="alert" id="messageBad">An error occurred when processing your form.</div>
				<form role="form">
					<div class="form-group">
						<label for="ziv-name">Name</label>
						<input type="text" class="form-control" id="ziv-name">
					</div>
					<div class="form-group">
						<label for="ziv-email">Email</label>
						<input type="text" class="form-control" id="ziv-email">
					</div>
					<div class="form-group">
						<label for="ziv-subject">Subject</label>
						<input type="text" class="form-control" id="ziv-subject">
					</div>
					<div class="form-group">
						<label for="ziv-body">What can we do for you?</label>
						<textarea class="form-control" rows="5" id="ziv-body"></textarea>
					</div>
                    <div class="form-group">
						<label for="ziv-body">Security question: Is fire hot or cold?</label>
						<input type="text" class="form-control" id="ziv-security">
                        <span style="font-size: 15px; color: #858585;">(So we know you're a real person)</span>
					</div>
					<button type="button" class="btn btn-primary btn-lg" style="padding-left: 30px; padding-right: 30px;" id="ziv-submit">SEND</button>
				</form>
			</div>
			<div class="col-sm-4 col-sm-offset-1">
				<h4 class="contact-sidebar-header">You can find us here</h4>
				<p class="contact-sidebar-paragraph">
					<span class="contact-sidebar-place">Kansas City</span><br>
                    8527 Bluejacket St<br>Lenexa, KS, 66214<br>
                    
					<a class="contact-sidebar-link" href="https://www.google.com/maps/place/8527+Bluejacket,+Lenexa,+KS+66214/@38.9739495,-94.7100959,17z/data=!3m1!4b1!4m2!3m1!1s0x87c0eb5edc1497d1:0xde7fe472608cbd37">Get Directions</a>
				</p>
				<p class="contact-sidebar-paragraph">
					<span class="contact-sidebar-place">Boulder</span><br>
					1310 College Avenue,<br>Boulder, CO, 80302<br>
					<a class="contact-sidebar-link" href="https://www.google.com/maps/place/1310+E+College+Ave,+Boulder,+CO+80302/@40.0071585,-105.2760413,17z/data=!4m7!1m4!3m3!1s0x876bec30cff21e91:0xbd7cdcfc563b1d4f!2s1310+E+College+Ave,+Boulder,+CO+80302!3b1!3m1!1s0x876bec30cff21e91:0xbd7cdcfc563b1d4f">Get Directions</a>
				</p>
				
				<hr class="contact-sidebar-hr">
				
				<h4 class="contact-sidebar-header">Call us</h4>
				<p class="contact-sidebar-paragraph">+ 913 624-1612</p>
				
				<hr class="contact-sidebar-hr">
				
				<h4 class="contact-sidebar-header">Email</h4>
				<p class="contact-sidebar-paragraph"><a href="mailto:info@letsziv.com">info@letsziv.com</a></p>
				
				<hr class="contact-sidebar-hr">
				
				<h4 class="contact-sidebar-header">Stay informed on all things ZIV</h4>
				
				<!-- Begin MailChimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
				<style type="text/css">
					#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
					/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
					   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
				</style>
				<div id="mc_embed_signup">
				<form action="//noteroo.us5.list-manage.com/subscribe/post?u=5577102d1725680a86547940e&amp;id=03a490def2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" style="padding: 0px;" novalidate>
					<div id="mc_embed_signup_scroll">
					<input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="email address" required>
					<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;"><input type="text" name="b_5577102d1725680a86547940e_03a490def2" tabindex="-1" value=""></div>
						<br>
					<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-lg" style="color: white; padding-right: 30px; border-radius: 4px !important;"></div>
					</div>
				</form>
				</div>

				<!--End mc_embed_signup-->
			</div>
		</div>
	</div>
	
	<br><br><br>

</div>

<script>
	$(".menu li:nth-child(5) a").addClass("active-menu-item");
    
    var first_keywords = ["hear from", "work with", "talk with"];
    var first_keyword = first_keywords[Math.floor(Math.random() * first_keywords.length)];
	$("#firstKeyword").html(first_keyword);

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
                $("#firstKeyword").html(first_keyword);
                $("#mastKeywords").removeClass("fade");
            }, 2000);
            $("#mastKeywords").addClass("fade");
        }
    }
    
    setRandomKeywords();
    
    $("#ziv-submit").click(function(e) {
        e.preventDefault();
        
        var name = $("#ziv-name").val();
        var email = $("#ziv-email").val();
        var subject = $("#ziv-subject").val();
        var body = $("#ziv-body").val();
        
        if ( name.length > 0 && email.length > 0 && subject.length > 0 && body.length > 0)
        {
            if ( ($("#ziv-security").val() == "hot") || ($("#ziv-security").val() == "Hot")) {
                $.ajax({
                  type: "POST",
                  url: "../processForm.php",
                  data: { 
                      name: name,
                      email: email,
                      subject: subject,
                      body: body
                  }
                })
                .done(function( msg ) {
                    $("#messageBad").slideUp();
                    $("#messageGood").slideDown();
                    setTimeout(function(){
                        $("#messageGood").slideUp();
                    }, 8000);
                    $("#ziv-name").val('');
                    $("#ziv-email").val('');
                    $("#ziv-subject").val('');
                    $("#ziv-body").val('');
                    $("#ziv-security").val('');
                });
            }
            else {
                $("#messageBad").html("Security question is incorrect.");
                $("#messageBad").slideDown();
                setTimeout(function(){
                    $("#messageBad").slideUp();
                }, 5000);
            }
        }
        else {
            $("#messageBad").html("All fields are required to submit.");
            $("#messageBad").slideDown();
            setTimeout(function(){
                $("#messageBad").slideUp();
            }, 5000);
        }
        
        
        
    });
</script>

<?php require( '../footer.php'); ?>