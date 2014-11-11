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
					</div>
					<button type="button" class="btn btn-primary btn-lg" style="padding-left: 30px; padding-right: 30px;" id="ziv-submit">SEND</button>
				</form>
			</div>
			<div class="col-sm-4 col-sm-offset-1">
				<h4 class="contact-sidebar-header">You can find us here</h4>
				<p class="contact-sidebar-paragraph">
					<span class="contact-sidebar-place">Kansas City</span><br>
                    8527 Bluejacket St<br>Lenexa, KS 66214<br>
                    
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
					<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-lg" style="color: white; padding-right: 30px;"></div>
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
    
    $("#ziv-submit").click(function(e) {
        e.preventDefault();
        
        var name = $("#ziv-name").val();
        var email = $("#ziv-email").val();
        var subject = $("#ziv-subject").val();
        var body = $("#ziv-body").val();
        
        if ( name.length > 0 && email.length > 0 && subject.length > 0 && body.length > 0)
        {
            if ($("#ziv-security").val() == "hot") {
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