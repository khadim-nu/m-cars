<?php $this->load->view('include/header'); ?>
<div id="banner-slider-container" class="bx-styl">
    <ul class="homeslider" >
        <li>
            <img src="<?= IMAGE_URL; ?>slider-image1.jpg" alt="" />
        </li>
        <li>
            <img src="<?= IMAGE_URL; ?>slider-image2.jpg" alt="" />
        </li>
    </ul><!--Bx Slider-->
</div><!--Banner Slider Container-->
<div id="section-menu-container">
    <div class="wrapper">
        <div id="section-menu">
            <ul>
                <li>
                    <a href="#buy-section-link">
                        <h2>Buy</h2>
                        <p>Browse our selection of used cars available.</p>
                    </a>
                </li>
                <li>
                    <a href="#sell-section-link">
                        <h2>Sell</h2>
                        <P>Enter the details of your used vehicle in order for us to send you a quote via email.</P>
                    </a>
                </li>
                <li>
                    <a href="#source-section-link">
                        <h2>Source</h2>
                        <P>Allow us to find the right car for you. we’ll make sure we find a car that’s just right.</P>
                    </a>
                </li>
            </ul>
        </div><!--Sections Menu-->
    </div><!--wrapper-->
</div><!--Section Menu Container-->
<div id="buy-section-link"></div>
<div id="buy-section" class="home-form-s home-buy">
    <div class="wrapper">
        <h2>BUY</h2>
        <p>Browse our selection of used cars available</p>
        <a href="<?= base_url(); ?>car/buy" class="blue-button">Search for a specific used car</a>
    </div><!--wrapper-->
</div><!--Buy Section-->

<div id="sell-section-link"></div>
<div id="sell-section" class="home-form-s home-sell">
    <div class="wrapper">
        <h2>SELL</h2>
        <p>Enter the details of your used vehicle in order for us to send you a quote via email</p>
        <a href="<?= base_url(); ?>car/sell" class="blue-button">Request Quote! </a>
    </div><!--wrapper-->
</div><!--sell Section-->
<div id="source-section-link"></div>
<div id="source-section" class="home-form-s home-source">
    <div class="wrapper">
        <h2>SOURCE</h2>
        <p>Allow us to find the right car for you. Whether you know exactly what you want or just have a rough idea, we’ll make sure we find a car that’s just right. </p>
        <h4>HOW IT WORKS</h4>
        <p>
        <p>
            1. You enter as many (or as few) details about your ideal car
        </p>
        <p>
            2. Using our nationwide connections, we will locate a car that best matches your preferences
        </p>
        <p>
            3. We will send you the details of the car for you to look over
        </p>
        <p>
            4. If you’re happy, we take a small deposit from you before arranging a viewing
        </p>
        <p>
            5. Finalise total payment, then you can enjoy your hand-picked car! 
        </p>
        </p>
        <a href="<?= base_url(); ?>car/source" class="blue-button">Request Quote</a>
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
                <div class="client-image"><img src="<?= IMAGE_URL; ?>client-image.jpg" alt="Client Image"  /></div><!--Client Image-->
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
                    <img src="<?= IMAGE_URL; ?>product-one-image.jpg" title="Product Image"  />
                </div><!-- Product Image-->
                <div class="product-detail">
                    <h2>NISSAN ELGRAND 3.5 PETROL AUTOMATIC V6</h2>
                    <div class="order-buttons">
                        <a href="#" class="price-buton">£6495</a>
                        <a href="<?= base_url(); ?>car/car_details/1" class="detail-buton">Details</a>
                    </div><!--Order Buttons-->
                </div><!--Product Detail-->
                <div class="product-meta">
                    <ul>
                        <li><img src="<?= IMAGE_URL; ?>celendae-image.jpg" alt=""/> 2004(04)</li>
                        <li><img src="<?= IMAGE_URL; ?>product-cont-image.jpg" alt="" /> 57000</li>
                        <li><img src="<?= IMAGE_URL; ?>product-setting-icon.png" alt="" /> BLACK</li>
                    </ul>
                </div><!--Product Meta-->
            </div><!--Product Widget-->
            <div class="product-widget">
                <div class="product-image">
                    <img src="<?= IMAGE_URL; ?>product-one-image.jpg" title="Product Image"  />
                </div><!-- Product Image-->
                <div class="product-detail">
                    <h2>NISSAN ELGRAND 3.5 PETROL AUTOMATIC V6</h2>
                    <div class="order-buttons">
                        <a href="#" class="price-buton">£6495</a>
                        <a href="<?= base_url(); ?>car/car_details/1" class="detail-buton">Details</a>
                    </div><!--Order Buttons-->
                </div><!--Product Detail-->
                <div class="product-meta">
                    <ul>
                        <li><img src="<?= IMAGE_URL; ?>celendae-image.jpg" alt=""/> 2004(04)</li>
                        <li><img src="<?= IMAGE_URL; ?>product-cont-image.jpg" alt="" /> 57000</li>
                        <li><img src="<?= IMAGE_URL; ?>product-setting-icon.png" alt="" /> BLACK</li>
                    </ul>
                </div><!--Product Meta-->
            </div><!--Product Widget-->
            <div class="product-widget">
                <div class="product-image">
                    <img src="<?= IMAGE_URL; ?>product-one-image.jpg" title="Product Image"  />
                </div><!-- Product Image-->
                <div class="product-detail">
                    <h2>NISSAN ELGRAND 3.5 PETROL AUTOMATIC V6</h2>
                    <div class="order-buttons">
                        <a href="#" class="price-buton">£6495</a>
                        <a href="<?= base_url(); ?>car/car_details/1" class="detail-buton">Details</a>
                    </div><!--Order Buttons-->
                </div><!--Product Detail-->
                <div class="product-meta">
                    <ul>
                        <li><img src="<?= IMAGE_URL; ?>celendae-image.jpg" alt=""/> 2004(04)</li>
                        <li><img src="<?= IMAGE_URL; ?>product-cont-image.jpg" alt="" /> 57000</li>
                        <li><img src="<?= IMAGE_URL; ?>product-setting-icon.png" alt="" /> BLACK</li>
                    </ul>
                </div><!--Product Meta-->
            </div><!--Product Widget-->
            <div class="product-widget">
                <div class="product-image">
                    <img src="<?= IMAGE_URL; ?>product-one-image.jpg" title="Product Image"  />
                </div><!-- Product Image-->
                <div class="product-detail">
                    <h2>NISSAN ELGRAND 3.5 PETROL AUTOMATIC V6</h2>
                    <div class="order-buttons">
                        <a href="#" class="price-buton">£6495</a>
                        <a href="<?= base_url(); ?>car/car_details/1" class="detail-buton">Details</a>
                    </div><!--Order Buttons-->
                </div><!--Product Detail-->
                <div class="product-meta">
                    <ul>
                        <li><img src="<?= IMAGE_URL; ?>celendae-image.jpg" alt=""/> 2004(04)</li>
                        <li><img src="<?= IMAGE_URL; ?>product-cont-image.jpg" alt="" /> 57000</li>
                        <li><img src="<?= IMAGE_URL; ?>product-setting-icon.png" alt="" /> BLACK</li>
                    </ul>
                </div><!--Product Meta-->
            </div><!--Product Widget-->
            <div class="clear"></div>
        </div><!--Product Widget Area-->
    </div><!--wrapper-->
</div><!--Product Container-->

<?php $this->load->view('include/footer'); ?>