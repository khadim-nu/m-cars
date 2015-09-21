<?php $this->load->view('include/header'); ?>

<div id="buy-section" class="home-form-s">
    <div class="wrapper">
        <h2>BUY</h2>
        <form action="#" method="post">
            <div class="row">
                <div class="col-md-6">
                    <select>
                        <option value="" selected="selected">Make</option>
                        <option value="" >Make 1</option>
                        <option value="" >Make 2</option>
                        <option value="" >Make 3</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select>
                        <option value="" selected="selected">Model</option>
                        <option value="" >Model 1</option>
                        <option value="" >Model 2</option>
                        <option value="" >Model 3</option>
                    </select>
                </div>
            </div>
            <div class="range-slider-area">
                <input class="range-slider" type="hidden" value="25,75"/>
            </div><!--Range Slider Area-->
            <div class="row">
                <div class="col-md-6">
                    <h4>Finance</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="one-off">One Off</label>
                    <input name="one-off" type="radio" value="One-Off" /><br  />
                </div>
                <div class="col-md-6">
                    <label for="monthly">Monthly</label>
                    <input name="monthly" type="radio" value="Monthly" />
                </div>
            </div>
            <input type="submit" value="Car Show" />
        </form>
    </div><!--wrapper-->
</div><!--Buy Section-->
<div id="product-container" class="home-product-container">
    <div class="wrapper">
        <div class="heading-main star-bg">Related Posts</div><!--New Arrivals-->
        <div id="product-widget-area">
            <div class="product-widget">
                <div class="product-image">
                    <img src="<?= IMAGE_URL; ?>product-one-image.jpg" title="Product Image"  />
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
                        <a href="#" class="detail-buton">Details</a>
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
                        <a href="#" class="detail-buton">Details</a>
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
                        <a href="#" class="detail-buton">Details</a>
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