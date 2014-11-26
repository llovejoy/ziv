<?php
	date_default_timezone_set('America/Chicago');
	$dom = "http://www.boxspringdesign.com/ziv/";
	//$dom = "http://ziv.local/";
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
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/main.css">
		<link rel="stylesheet" href="../css/style.css">
		<script src="../js/vendor/jquery.js"></script>
        <script src="../js/vendor/modernizr-2.6.2.min.js"></script>
		<script src="../js/vendor/bootstrap.js"></script>
        <script src="../js/vendor/textFit.min.js"></script>
    </head>
    <body>
		
		<div class="container-header">
            
            <div class="menu-mobile">
                <div class="row">
                    <div class="col-xs-8">
                        <ul class="menu-mobile-list">
                            <li><a href="<?php echo $dom; ?>">home</a></li>
                            <li><a href="<?php echo $dom; ?>how-we-can-help">how we can help</a></li>
                            <li><a href="<?php echo $dom; ?>results">results</a></li>
                            <li><a href="<?php echo $dom; ?>about">about</a></li>
                            <li><a href="<?php echo $dom; ?>contact">contact</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-4">
                        <br>
                        <button type="button" class="btn btn-default" id="closeMobileMenuButton"><span class="glyphicon glyphicon-remove"></span> Close</button>
                    </div>
                </div>
            </div>
            
			<div class="container-menu">
				
				<div class="container">
					<a href="<?php echo $dom; ?>index.php">
						<img src="<?php echo $dom; ?>img/logo.png" class="logo-img bigger-logo">
					</a>
                    <ul class="menu clearfix">
                        <li><a href="<?php echo $dom; ?>">home</a></li>
                        <li><a href="<?php echo $dom; ?>how-we-can-help">how we can help</a></li>
                        <li><a href="<?php echo $dom; ?>results">results</a></li>
                        <li><a href="<?php echo $dom; ?>about">about</a></li>
                        <li><a href="<?php echo $dom; ?>contact">contact</a></li>
                    </ul>
				</div>
                
                <div class="menu-mobile-button pull-right">
                    <button class="btn btn-default"><span class="glyphicon glyphicon-list"></span>&nbsp;Menu</button>
                </div>
			</div>
		</div>
