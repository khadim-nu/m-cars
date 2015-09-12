<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <?php $this->load->view('include/variables'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>M-Cars</title>
<link rel="stylesheet" href="<?= CSS_URL; ?>style.css" />
<link rel="stylesheet" href="<?= CSS_URL; ?>slicknav.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?= CSS_URL; ?>jquery.bxslider.css" type="text/css" media="screen" />
<link href="<?= CSS_URL; ?>fonts_googleapis.css" rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?= CSS_URL; ?>jquery.range.css">
    

<script src="<?= JS_URL; ?>jquery-1.7.1.min.js"></script>
<script src="<?= JS_URL; ?>jquery.range.js"></script>
<script type="text/javascript" src="<?= JS_URL; ?>modernizr.min.js"></script>
<script type="text/javascript" src="<?= JS_URL; ?>jquery.slicknav.js"></script>
<script type="text/javascript" src="<?= JS_URL; ?>jquery.bxslider.js"></script>
<script type="text/javascript" src="<?= JS_URL; ?>jquery.sticky.js"></script>
<script type="text/javascript" src="<?= JS_URL; ?>scripts_custom.js"></script>
<script type="text/javascript" src="<?= JS_URL; ?>jquery.easing.1.3.js"></script>
</head>
<body>
<div id="header">
	<div class="wrapper">
    	<div id="main-menu">
            <ul>
                <li><a href="index.html">Home Button</a>
                    <ul>
                        <li><a href="#">T&C’s </a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">ETC!</a></li>
                    </ul>
                </li>
                <li><a href="#">T&C’s </a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">ETC!</a></li>
            </ul>
        </div><!--Main Menu-->
    	<div id="logo">
        	<a href="index.html"><img src="<?=  IMAGE_URL; ?>logo.png" alt="Logo"  /></a>
        </div><!--Logo-->
        <div id="header-right">
        	<div id="header-right-top">
            	<div class="header-socials">
                    <ul>
                        <li><a href="#"><img src="<?=  IMAGE_URL; ?>facebook-icon.png" alt="facebook"></a></li>
                        <li><a href="#"><img src="<?=  IMAGE_URL; ?>twitter-icon.png" alt="twiiter"></a></li>
                        <li><a href="#"><img src="<?=  IMAGE_URL; ?>linl-icon.png" alt="link-din"></a></li>
                        <li><a href="#"><img src="<?=  IMAGE_URL; ?>pintrest-icon.png" alt="pintrest"></a></li>
                    </ul>
                </div><!--Header Socials-->
            </div><!--Header Right Top-->
            <div id="header-right-bottom">
            	Address , <a href="tel:1234567891">(123) 456-7891</a>
            </div><!--Header Right Bottom-->
        </div><!--Header Right-->
        <div class="clear"></div>
    </div><!--wrapper-->
   <!-- <div id="mobile-menu"></div>-->
</div><!--Header-->
<div id="section-menu-container">
	<div class="wrapper">
    	<p>Welcome to M-cars, a Brighton-based Car dealership allowing you to buy, sell or source used vehicles locally and throughout the UK. </p>
    	
    </div><!--wrapper-->
</div><!--Section Menu Container-->
<div id="banner-slider-container" class="bx-styl">
	<ul class="homeslider" >
    	<li>
        	<img src="<?=  IMAGE_URL; ?>slider-image1.jpg" alt="" />
            <div class="bx-caption">
                <div class="wrapper">
                    <div id="section-menu">
            <ul>
                <li>
                	<a href="#buy-section-link">
                		<h2>Buy</h2>
                		<p>Browse our selection of used cars available</p>
                	</a>
                </li>
                <li>
                    <a href="#sell-section-link">
                       <h2>Sell</h2>
                       <P>Browse our selection of used cars available</P>
                    </a>
                </li>
                <li>
                    <a href="#source-section-link">
                        <h2>Source</h2>
                        <P>Browse our selection of used cars available</P>
                    </a>
                </li>
            </ul>
        </div><!--Sections Menu-->
                </div>
            </div>
    	</li>
    	<li>
        	<img src="<?=  IMAGE_URL; ?>slider-image2.jpg" alt="" />
            <div class="bx-caption">
                <div class="wrapper">
                    <div id="section-menu">
            <ul>
                <li>
                	<a href="#buy-section-link">
                		<h2>Buy</h2>
                		<p>Browse our selection of used cars available</p>
                	</a>
                </li>
                <li>
                    <a href="#sell-section-link">
                       <h2>Sell</h2>
                       <P>Browse our selection of used cars available</P>
                    </a>
                </li>
                <li>
                    <a href="#source-section-link">
                        <h2>Source</h2>
                        <P>Browse our selection of used cars available</P>
                    </a>
                </li>
            </ul>
        </div><!--Sections Menu-->
                </div>
            </div>
    	</li>
    </ul><!--Bx Slider-->
</div><!--Banner Slider Container-->

<div id="buy-section-link"></div>
<div id="buy-section" class="home-form-s home-buy">
    <div class="wrapper">
    	<h2>BUY</h2>
      	<p>Browse our selection of used cars available</p>
        <a href="buy.html" class="blue-button">Search for a specific used car</a>
    </div><!--wrapper-->
</div><!--Buy Section-->
<div id="compines-logo-area">
	<div class="wrapper">
    	<ul>
        	<li><img src="<?=  IMAGE_URL; ?>bugatti-logo.png" alt="bugatti"></li>
            <li><img src="<?=  IMAGE_URL; ?>bmw-logo.png" alt="BMW"></li>
            <li><img src="<?=  IMAGE_URL; ?>bentley-logo.png" alt="bentley"></li>
            <li><img src="<?=  IMAGE_URL; ?>audi-logo.png" alt="audi"></li>
            <li><img src="<?=  IMAGE_URL; ?>hyundai-logo.png" alt="hyundai"></li>
            <li><img src="<?=  IMAGE_URL; ?>hyunda-logo.png" alt="hyunda"></li>
            <li><img src="<?=  IMAGE_URL; ?>dodge-logo.png" alt="dodge"></li>
            <li><img src="<?=  IMAGE_URL; ?>daihatsu-logo.png" alt="daihatsu"></li>
            <li><img src="<?=  IMAGE_URL; ?>mitsubishi-logo.png" alt="mitsubishi"></li>
            <li><img src="<?=  IMAGE_URL; ?>nissan-logo.png" alt="nissan"></li>
        </ul>
    </div><!--wrapper-->
</div>

<div id="sell-section-link"></div>
<div id="sell-section" class="home-form-s home-sell">
    <div class="wrapper">
    	<h2>SELL</h2>
       <p>Enter the details of your used vehicle in order for us to send you a quote via email</p>
       <a href="sell.html" class="blue-button">Request Quote! </a>
    </div><!--wrapper-->
</div><!--sell Section-->
<div id="source-section-link"></div>
<div id="source-section" class="home-form-s">
    <div class="wrapper">
    	<h2>SOURCE</h2>
      	<p>Allow us to find the right car for you. Whether you know exactly what you want or just have a rough idea, we’ll make sure we find a car that’s just right. </p>
        <h4>HOW IT WORKS</h4>
        <form action="#" method="post">
            <label>1.	You enter as many (or as few) details about your ideal car</label>
            <textarea rows="4" name="" > </textarea>
            <label>Using our nationwide connections, we will locate a car that best matches your preferences</label>
            <textarea rows="4" name=""> </textarea>
            <label>We will send you the details of the car for you to look over</label>
            <textarea rows="4" name=""> </textarea>
            <label>If you’re happy, we take a small deposit from you before arranging a viewing </label>
            <textarea rows="4" name="" ></textarea>
            <label>Finalise total payment, then you can enjoy your hand-picked car!</label>
            <textarea rows="4" name=""></textarea>
            <input type="submit" value="Request Quote" />
       </form>
    </div><!--wrapper-->
</div><!--Source Section-->
<div id="about-Section">
	<div class="wrapper">
    	<div class="section-title">
        	<h2>About the company</h2>
            <p>M-cars was created by Emily Cook in 2015 and is a used car dealership in Brighton, UK. !</p>
            <p>M-cars was established upon a simple philosophy: used cars don’t have to be for experts! Our company aims to provide a transparent and efficient service, whilst maintaining low prices for our customers. We are able to accomplish this by maintaining low overheads as we do not operate using a forecourt, we do not advertise, nor do we employ sales agents earning commission by encouraging you to buy extras/gimmicks with your purchase - instead we simply provide a 3 month warranty as standard with all our vehicles sold. What all this means is we are able to pass a large proportion of these savings to you, the customer, by keeping our costs as low as possible. By keeping our company streamlined and dedicated to one goal, we are able to offer a far more flexible and personalised service to our customers, which larger corporate dealerships simply cannot compete with. </p>
        </div><!--Section Title-->
        <div class="textimonial">
			<blockquote> “Having had 7 years experience in the used car industry, I decided to establish my own business
buying, selling and sourcing specific cars for customers at the best available prices. My costs are
kept low by not paying for show-room space or for a forecourt, the savings of which I can pass on”
            </blockquote>
            <div class="client-detail">
            	<div class="client-image"><img src="<?=  IMAGE_URL; ?>client-image.jpg" alt="Client Image"  /></div><!--Client Image-->
            	<div class="client-name">To my customers</div><!--Client Name-->
                <div class="clear"></div>
            </div><!--Client Detail-->
        </div><!--Testimonial-->
        <div class="home-video">
        	<iframe src="https://player.vimeo.com/video/57909173" width="100%" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div><!--Home video-->
    </div><!--wrapper-->
</div><!--About Section-->
<div id="product-container" class="home-product-container">
	<div class="wrapper">
    	<div class="heading-main star-bg">New Arrivals</div><!--New Arrivals-->
        <div id="product-widget-area">
            <div class="product-widget">
            	<div class="product-image">
            		<img src="<?=  IMAGE_URL; ?>product-one-image.jpg" title="Product Image"  />
                </div><!-- Product Image-->
                <div class="product-detail">
                	<h2>NISSAN ELGRAND 3.5 PETROL AUTOMATIC V6</h2>
                    <div class="order-buttons">
                    	<a href="#" class="price-buton">£6495</a>
                        <a href="#" class="detail-buton">Details</a>
                    </div><!--Order Buttons-->
                </div><!--Product Detail-->
                <div class="product-meta">
                	<ul>
                    	<li><img src="<?=  IMAGE_URL; ?>celendae-image.jpg" alt=""/> 2004(04)</li>
                        <li><img src="<?=  IMAGE_URL; ?>product-cont-image.jpg" alt="" /> 57000</li>
                        <li><img src="<?=  IMAGE_URL; ?>product-setting-icon.png" alt="" /> BLACK</li>
                    </ul>
                </div><!--Product Meta-->
            </div><!--Product Widget-->
            <div class="product-widget">
            	<div class="product-image">
            		<img src="<?=  IMAGE_URL; ?>product-one-image.jpg" title="Product Image"  />
                </div><!-- Product Image-->
                <div class="product-detail">
                	<h2>NISSAN ELGRAND 3.5 PETROL AUTOMATIC V6</h2>
                    <div class="order-buttons">
                    	<a href="#" class="price-buton">£6495</a>
                        <a href="#" class="detail-buton">Details</a>
                    </div><!--Order Buttons-->
                </div><!--Product Detail-->
                <div class="product-meta">
                	<ul>
                    	<li><img src="<?=  IMAGE_URL; ?>celendae-image.jpg" alt=""/> 2004(04)</li>
                        <li><img src="<?=  IMAGE_URL; ?>product-cont-image.jpg" alt="" /> 57000</li>
                        <li><img src="<?=  IMAGE_URL; ?>product-setting-icon.png" alt="" /> BLACK</li>
                    </ul>
                </div><!--Product Meta-->
            </div><!--Product Widget-->
            <div class="product-widget">
            	<div class="product-image">
            		<img src="<?=  IMAGE_URL; ?>product-one-image.jpg" title="Product Image"  />
                </div><!-- Product Image-->
                <div class="product-detail">
                	<h2>NISSAN ELGRAND 3.5 PETROL AUTOMATIC V6</h2>
                    <div class="order-buttons">
                    	<a href="#" class="price-buton">£6495</a>
                        <a href="#" class="detail-buton">Details</a>
                    </div><!--Order Buttons-->
                </div><!--Product Detail-->
                <div class="product-meta">
                	<ul>
                    	<li><img src="<?=  IMAGE_URL; ?>celendae-image.jpg" alt=""/> 2004(04)</li>
                        <li><img src="<?=  IMAGE_URL; ?>product-cont-image.jpg" alt="" /> 57000</li>
                        <li><img src="<?=  IMAGE_URL; ?>product-setting-icon.png" alt="" /> BLACK</li>
                    </ul>
                </div><!--Product Meta-->
            </div><!--Product Widget-->
            <div class="product-widget">
            	<div class="product-image">
            		<img src="<?=  IMAGE_URL; ?>product-one-image.jpg" title="Product Image"  />
                </div><!-- Product Image-->
                <div class="product-detail">
                	<h2>NISSAN ELGRAND 3.5 PETROL AUTOMATIC V6</h2>
                    <div class="order-buttons">
                    	<a href="#" class="price-buton">£6495</a>
                        <a href="#" class="detail-buton">Details</a>
                    </div><!--Order Buttons-->
                </div><!--Product Detail-->
                <div class="product-meta">
                	<ul>
                    	<li><img src="<?=  IMAGE_URL; ?>celendae-image.jpg" alt=""/> 2004(04)</li>
                        <li><img src="<?=  IMAGE_URL; ?>product-cont-image.jpg" alt="" /> 57000</li>
                        <li><img src="<?=  IMAGE_URL; ?>product-setting-icon.png" alt="" /> BLACK</li>
                    </ul>
                </div><!--Product Meta-->
            </div><!--Product Widget-->
            <div class="clear"></div>
        </div><!--Product Widget Area-->
    </div><!--wrapper-->
</div><!--Product Container-->
<div id="singup-area">
	<div class="wrapper">
    	<div class="singup-area-text">Signup for our email to celebrate great specials </div><!--Singup Area Text-->
        <div class="singup-area-form">
        	<form action="" method="post">
            	<input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Email">
                <div class="signup-button">
                	<input type="submit" value="">
                </div>
            </form>
        </div><!--Singup Area Form-->
        <div class="clear"></div>
    </div><!--wrapper-->
</div>
<div id="footer">
	<div class="wrapper">
        <div class="copy-right">© 2015 Created by <span>Speed_Programer</span></div><!--Copy Right-->
        <div id="footer-menu">
             <ul>
                <li><a href="#">Home Button</a></li>
                <li><a href="#">T&C’s </a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">ETC!</a></li>
            </ul>
        </div><!--Footer Menu-->
        <div class="clear"></div>
	</div><!--wrapper-->
</div>
</body>
</html>
