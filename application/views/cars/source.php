<?php $this->load->view('include/header'); ?>

<div id="source-section" class="home-form-s">
    <div class="wrapper">
        <h2>SOURCE</h2>
        <form id="register" action="<?= base_url(); ?>car/source" method="post">
            <div class="form-left-fliled">
                <select name="age" data-trigger="change" data-parsley-required>
                    <option value="" >Age</option>
                    <option value="1" >1</option>
                    <option value="2" >2</option>
                    <option value="3" >3</option>
                    <option value="4" >4</option>
                    <option value="5" >5</option>
                    <option value="6" >6</option>
                    <option value="7" >7</option>
                    <option value="8" >8</option>
                    <option value="8" >9</option>
                    <option value="10" >10</option>
                </select>
                <select name="mileage" data-trigger="change" data-parsley-required>
                    <option value="" >Mileage</option>
                    <option value="0" >0</option>
                    <option value="1" >1</option>
                    <option value="150,000" >150,000</option>
                </select>
            </div>


            <div class="form-left-fliled">
                <select name="color" data-trigger="change" data-parsley-required>
                    <option value="" >Colour</option>
                    <option value="black" >Black</option>
                    <option value="blue" >Blue</option>
                    <option value="white" >White</option>
                    <option value="gary" >Gray</option>
                    <option value="silver" >Silver</option>
                </select>
                <select name="fuel" data-trigger="change" data-parsley-required>
                    <option value="" >Fuel type</option>
                    <option value="Bi-fuel" >Bi-fuel</option>
                    <option value="Diesel" >Diesel</option>
                    <option value="Petrol" >Petrol</option>
                    <option value="Electric" >Electric</option>
                    <option value="Hybrid" >Hybrid</option>
                    <option value="LPG" >LPG</option>
                </select>

            </div>
            <div class="form-left-fliled">

                <select name="min_seats" data-trigger="change" data-parsley-required>
                    <option value="" >Min Seats</option>
                    <option value="1" >1</option>
                    <option value="2" >2</option>
                    <option value="3" >3</option>
                    <option value="4" >4</option>
                    <option value="5" >5</option>
                    <option value="6" >6</option>
                    <option value="7" >7</option>
                </select>
                <select name="doors" data-trigger="change" data-parsley-required>
                    <option value="" >Doors</option>
                    <option value="1" >1</option>
                    <option value="2" >2</option>
                    <option value="3" >3</option>
                    <option value="4" >4</option>
                    <option value="5" >5</option>
                </select>
            </div>
            <div class="form-left-fliled">

                <select name="max_seats" data-trigger="change" data-parsley-required>
                    <option value="" >Max Seats</option>
                    <option value="1" >1</option>
                    <option value="2" >2</option>
                    <option value="3" >3</option>
                    <option value="4" >4</option>
                    <option value="5" >5</option>
                    <option value="6" >6</option>
                    <option value="7" >7</option>
                </select>
                <div class="range-slider-area">
                    <input name="range" class="range-slider" type="hidden" value="25,75" data-trigger="change" data-parsley-required/>
                </div><!--Range Slider Area-->
            </div>
    </div>
    <div class="clear"></div>
    <label for="faults">Source information!</label>
    <textarea name="faults" rows="3" data-trigger="change" data-parsley-required></textarea>
    <input type="submit" value="Submit" />
</form>
</div><!--wrapper-->
</div><!--Source Section--><div id="product-container" class="home-product-container">
    <?php $this->load->view("cars/available_cars_partial", array("heading" => "Available Cars")); ?>
</div><!--Product Container-->
<?php $this->load->view('include/footer'); ?>