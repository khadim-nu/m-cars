<?php $this->load->view('include/header'); ?>
<div id="sell-section" class="home-form-s">
    <div class="wrapper">
    	<h2>SELL</h2>
       <form action="#" method="post">
       		<div class="form-left-fliled">
                <select>
                    <option value="" selected="selected">Make</option>
                    <option value="" >Make 1</option>
                    <option value="" >Make 2</option>
                    <option value="" >Make 3</option>
                </select>
                <select>
                    <option value="" selected="selected">Model</option>
                    <option value="" >Model 1</option>
                    <option value="" >Model 2</option>
                    <option value="" >Model 3</option>
                </select>
                <input type="text" name="mileage" placeholder="Mileage" />
            </div>
            <div class="form-left-fliled">
                <select>
                    <option value="" selected="selected">Condition</option>
                    <option value="excellent" >Excellent!</option>
                    <option value="v.good" >V. Good</option>
                    <option value="good" >Good</option>
                    <option value="poor" >Poor</option>
                </select>
                <input type="text" name="registration" placeholder="Registration" />
                <select>
                    <option value="" selected="selected">Service</option>
                    <option value="full" >Full</option>
                    <option value="part" >Part</option>
                    <option value="none" >None</option>
                </select>
            </div>
            <div class="clear"></div>
            <label for="faults">Faults</label>
            <textarea name="faults" rows="5"></textarea>
            <input type="submit" value="Request Quote!" />
       </form>
    </div><!--wrapper-->
</div><!--sell Section-->
<div id="product-container" class="home-product-container">
	<div class="wrapper">
    	<div class="heading-main star-bg">Related Posts</div><!--New Arrivals-->
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
<?php $this->load->view('include/footer'); ?>