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
    <?php $this->load->view("cars/available_cars_partial",array("heading"=>"Available Cars")); ?>
</div><!--Product Container-->
<?php $this->load->view('include/footer'); ?>