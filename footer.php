		<footer class="footer" role="contentinfo">
            
            <div class="footer-wrapper">

                <div class="container-fluid">
                    <div class="col-sm-4 foot-cont" style="padding-left: 0px; padding-right: 40px;">
                        <strong>ABOUT US</strong>
                        <p>We're innovation thinkers ready to help grow your business by creating valuable customer experiences.</p>
                        <a href="<?php echo $dom;?>about" class="btn btn-lg btn-primary">LEARN MORE</a>
                    </div>
                    <div class="col-sm-4 foot-cont" style="padding-left: 40px; padding-right: 40px;">
                        <strong>OUR WORK</strong>
                        <p>We translate your business goals into solutions that facilitate positive customer perceptions and relationships.</p>
                        <a href="<?php echo $dom;?>results" class="btn btn-lg btn-primary">SEE OUR WORK</a>
                    </div>
                    <div class="col-sm-4 foot-cont" style="padding-left: 40px; padding-right: 0px;">
                        <strong>CONNECT</strong>
                        <p style="padding-bottom: 0px;">We'd love to hear from (and about) you! Let's meet and tweet!</p>
                        <p style="padding-top: 0px; padding-bottom: 0px;">+ 913 624-1612</p>
                        <p style="padding-top: 0px; padding-bottom: 0px; color: #BBBBBB !important;" class="connect"><a href="http://www.twitter.com/letsziv" style="color: #BBBBBB !important;"><img src="<?php echo $dom; ?>img/twitter.png" style="height: 14px;"> TWITTER &nbsp;&nbsp; <a href="https://www.linkedin.com/company/boxspring-design" style="color: #BBBBBB !important;"><img src="<?php echo $dom; ?>img/linkedin.png" style="height: 14px;"> LINKEDIN</a></p>
                    </div>

                </div>

                <div class="container-fluid">
                    <!-- copyright -->
                    <div class="copyright">
                        &copy;
                        <?php echo date( 'Y'); ?> Copyright ZIV Inc.
                    </div>
                    <!-- /copyright -->
                </div>
                
            </div>
		</footer>
		<div class="container" style="margin-top: 5px; margin-bottom: 5px;">
			<a href="<?php echo $dom; ?>terms">Terms</a>
		</div>

	</body>

<script>
	$(function () {
		$('.container-header').data('size', 'big');
	});

	$(window).scroll(function () {
		if ($(document).scrollTop() > 175) {
			if ($('.container-header').data('size') == 'big') {
				$('.container-header').data('size', 'small');
				$('.container-header').removeClass('container-header-bigger');
				$('.container-header').addClass('container-header-smaller');
				$('.logo-img').removeClass('bigger-logo');
				$('.logo-img').addClass('smaller-logo');
				$('.menu').removeClass('menu-bigger');
				$('.menu').addClass('menu-smaller');
                $(".menu-mobile-button").css("margin-top", "13px");
			}
		}
        else {
			if ($('.container-header').data('size') == 'small') {
				$('.container-header').data('size', 'big');
				$('.container-header').removeClass('container-header-smaller');
				$('.container-header').addClass('container-header-bigger');
				$('.logo-img').removeClass('smaller-logo');
				$('.logo-img').addClass('bigger-logo');
				$('.menu').removeClass('menu-smaller');
				$('.menu').addClass('menu-bigger');
                $(".menu-mobile-button").css("margin-top", "0px");
			}
		}
	});
    
    $(".menu-mobile-button").click(function() {
        $(".menu-mobile").fadeIn();
    });
    
    $("#closeMobileMenuButton").click(function(e) {
        e.preventDefault();
         $(".menu-mobile").fadeOut();
    });

  /* Google Analytics script */
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56509234-1', 'auto');
  ga('send', 'pageview');

</script>

</html>
