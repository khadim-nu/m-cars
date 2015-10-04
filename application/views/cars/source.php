<?php $this->load->view('include/header'); ?>

<div id="source-section" class="home-form-s">
    <div class="wrapper">
        <h2>SOURCE</h2>
        <form action="#" method="post">
            <div class="form-left-fliled">
                <select>
                    <option value="" selected="selected">Age</option>
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
                <select>
                    <option value="" selected="selected">Mileage</option>
                    <option value="" >0</option>
                    <option value="" >1</option>
                    <option value="" >150,000</option>
                </select>
            </div>


            <div class="form-left-fliled">
                <select>
                    <option value="" selected="selected">Colour</option>
                    <option value="" >Colour 1</option>
                    <option value="" >Colour 2</option>
                    <option value="" >Colour 3</option>
                </select>
                <select>
                    <option value="" selected="selected">Fuel type</option>
                    <option value="" >Bi-fuel</option>
                    <option value="" >Diesel</option>
                    <option value="" >Petrol</option>
                    <option value="" >Electric</option>
                    <option value="" >Hybrid</option>
                    <option value="" >LPG</option>
                </select>

            </div>
            <div class="form-left-fliled">

                <select>
                    <option value="" selected="selected">Min Seats</option>
                    <option value="1" >1</option>
                    <option value="2" >2</option>
                    <option value="3" >3</option>
                    <option value="4" >4</option>
                    <option value="5" >5</option>
                    <option value="6" >6</option>
                    <option value="7" >7</option>
                </select>
                <select>
                    <option value="" selected="selected">Dors</option>
                    <option value="1" >1</option>
                    <option value="2" >2</option>
                    <option value="3" >3</option>
                    <option value="4" >4</option>
                    <option value="5" >5</option>
                </select>
            </div>
            <div class="form-left-fliled">

                <select>
                    <option value="" selected="selected">Max Seats</option>
                    <option value="1" >1</option>
                    <option value="2" >2</option>
                    <option value="3" >3</option>
                    <option value="4" >4</option>
                    <option value="5" >5</option>
                    <option value="6" >6</option>
                    <option value="7" >7</option>
                </select>
                <div class="range-slider-area">
                    <input class="range-slider" type="hidden" value="25,75"/>
                </div><!--Range Slider Area-->
            </div>
    </div>
    <div class="clear"></div>
    <label for="faults">Source information!</label>
    <textarea name="faults" rows="5"></textarea>
    <input type="submit" value="Request Quote" />
</form>
</div><!--wrapper-->
</div><!--Source Section--><div id="product-container" class="home-product-container">
  <?php $this->load->view("cars/available_cars_partial",array("heading"=>"Available Cars")); ?>
</div><!--Product Container-->
<?php $this->load->view('include/footer'); ?>