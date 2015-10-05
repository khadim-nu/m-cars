<?php $this->load->view('include/header'); ?>
<div id="sell-section" class="home-form-s">
    <div class="wrapper">
        <h2>SELL</h2>
        <form id="register" action="#" method="post">
            <div class="form-left-fliled">
                <select name="make" data-trigger="change" data-parsley-required>
                    <option value="" selected="selected">Make</option>
                    <option value="" >Make 1</option>
                    <option value="" >Make 2</option>
                    <option value="" >Make 3</option>
                </select>
                <select name="model" data-trigger="change" data-parsley-required>
                    <option value="" selected="selected">Model</option>
                    <option value="" >Model 1</option>
                    <option value="" >Model 2</option>
                    <option value="" >Model 3</option>
                </select>
                <input type="text" name="mileage" placeholder="Mileage" data-trigger="change" data-parsley-required />
            </div>
            <div class="form-left-fliled">
                <select name="condition" data-trigger="change" data-parsley-required>
                    <option value="" selected="selected">Condition</option>
                    <option value="excellent" >Excellent!</option>
                    <option value="v.good" >V. Good</option>
                    <option value="good" >Good</option>
                    <option value="poor" >Poor</option>
                </select>
                <input type="text" name="registration" placeholder="Registration" data-trigger="change" data-parsley-required />
                <select name="service" data-trigger="change" data-parsley-required>
                    <option value="" selected="selected">Service</option>
                    <option value="full" >Full</option>
                    <option value="part" >Part</option>
                    <option value="none" >None</option>
                </select>
            </div>
            <div class="clear"></div>
            <label for="faults">Faults</label>
            <textarea name="faults" rows="5" data-trigger="change" data-parsley-required></textarea>
            <input type="submit" value="Submit" />
        </form>
    </div><!--wrapper-->
</div><!--sell Section-->
<div id="product-container" class="home-product-container">
    <?php $this->load->view("cars/available_cars_partial",array("heading"=>"Available Cars")); ?>
</div><!--Product Container-->
<?php $this->load->view('include/footer'); ?>