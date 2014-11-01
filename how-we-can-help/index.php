<?php
require('../header.php');

// Initialize keywords
$first_keyword_array = array("invent", "research", "explore", "build");
$second_keyword_array = array("future", "plan", "scope", "solutions");

// Get random index from the arrays
$first_keyword_index = array_rand($first_keyword_array);
$second_keyword_index = array_rand($second_keyword_array);

// Assign keyword to variable
$first_keyword = $first_keyword_array[$first_keyword_index];
$second_keyword = $second_keyword_array[$second_keyword_index];
?>

<div class="container-hwch-body">

	<div class="top-bar">
		<div class="container">
			<h2>Let's <strong><?php echo $first_keyword; ?></strong> the <strong><?php echo $second_keyword; ?></strong> together.</h2>
		</div>
	</div>

	<img src="../img/hwch-body.jpg" class="photo-full-size">

	<br><br>

	<div class="container">
		<h3 class="hwch-lead">We shine a light in a discovery phase and study your<br> business landscape. This research sparks innovation that we<br> synthesize into digital, branding or marketing solutions, that<br> are sustainable and profitable.</h3>
	</div>

	<br><br><br>

    <p class="cap-subtitle">CORE SERVICES</p>
    <div style="background-color: #F6F6F6; width: 100%; max-width: 100%;">
        <div class="container-fluid grey-blocks">
            <div class="row">
                <div class="container">
                    
                    <div class="col-sm-6" style="border-right: 5px white solid;">
                        <h3 class="column-header">Innovation and Branding</h3>
                        <p class="core-service-intro">Facilitating the entire process to ensure truly<br>breakthrough and disruptive outcomes.</p>
                        <ul>
                            <li>Indeation &amp; Product management</li>
                            <li>Naming and branding</li>
                            <li>Product Licensing</li>
                            <li>Manufacturing</li>
                            <li>Brand and collateral design</li>
                        </ul>
                    </div>
                   
                    <div class="col-sm-6" style="border-left: 5px white solid;">
                        <h3 class="column-header">Experience Design</h3>
                        <p class="core-service-intro">Experiences for your customers that grows<br>your business and a loyal consumer base.</p>
                        <ul>
                            <li>Information architecture</li>
                            <li>Content Strategy</li>
                            <li>UX (Customer experience design)</li>
                            <li>User Research</li>
                            <li>Interface &amp; Visual Design</li>
                            <li>Front-end development</li>
                        </ul>
                    </div>
                </div>
            </div>
             <div style="position: absolute;left: 0; width: 100%; height: 10px; background-color: white;"></div>
            <div class="row" class="padding-top: 0px !important;">
                <div class="container">
                    <div class="col-sm-6" style="border-right: 5px white solid;">
                        <h3 class="column-header">Strategic Consulting</h3>
                        <p class="core-service-intro">The right growth in the right direction with the<br>ability to pivot in an evolving market.</p>
                        <ul>
                            <li>Consumer &amp; Business Insights (VOC)</li>
                            <li>Brand Strategy</li>
                            <li>Business Strategy</li>
                        </ul>
                    </div>
                        <div class="col-sm-6" style="border-left: 5px white solid;">
                            <h3 class="column-header">Relational Marketing</h3>
                            <p class="core-service-intro">Making sure every touchpoint works to<br>retain the customer.</p>
                            <ul>
                                <li>Social Media Strategy</li>
                                <li>PR Strategy</li>
                                <li>SEO</li>
                                <li>Advertising</li>
                                <li>Content Marketing</li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>

	<br><br>
    
        <div class="container">
            <p class="cap-subtitle">INDUSTRIES WE SPECIALIZE IN</p>
            <div class="row">
                <div class="col-sm-4">
                    <div class="bordered-block">Agriculture and<br>animal sciences</div>
                </div>
                <div class="col-sm-4">
                    <div class="bordered-block">Well funded startups<br>and tech companies</div>
                </div>
                <div class="col-sm-4">
                    <div class="bordered-block">Non-profit and<br>Humanitarian causes</div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="bordered-block">City government<br>and CVBs</div>
                </div>
                <div class="col-sm-4">
                    <div class="bordered-block">Financial services</div>
                </div>
                <div class="col-sm-4">
                    <div class="bordered-block">Relational e-retailers</div>
                </div>
            </div>
        </div>

	<div class="home-foot text-center">
		<h3>Need a partner for your next initiative?</h3>
		<p>Let's talk. <a href="#">Connect with us.</a></p>
	</div>

</div>

<script>
$(".menu li:nth-child(1) a").addClass("active-menu-item");
    
textFit($('.hwch-lead'), { multiLine : true, maxFontSize: 34})
textFit($('.core-service-intro'), { multiLine : true, maxFontSize: 14})
textFit($('.bordered-block'), { multiLine : true, maxFontSize: 20, minFontSize: 20, alignVert: true})
</script>

<?php
require('../footer.php');
?>
