<?php $this->load->view('include/header'); ?>

<div id="buy-sectionx" class="home-form-s">








    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <form method="get" action="<?= base_url(); ?>advertisement/search">


            <div class="navbar-form navbar" role="search">



                <div class="form-group">
                    <select name="make" class="form-control form-inline search-filter">
                        <option value="" selected="selected">Make</option>
                        <option value="" >Make 1</option>
                        <option value="" >Make 2</option>
                        <option value="" >Make 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <!--<label for="category"></label>-->
                    <select name="model"class="form-control form-inline search-filter">
                        <option value="" selected="selected">Model</option>
                        <option value="" >Model 1</option>
                        <option value="" >Model 2</option>
                        <option value="" >Model 3</option>
                    </select>
                </div>
                <div class="form-group form-inline">
                    <div class="range-slider-area">
                        <input class="range-slider" type="hidden" value="25,75"/>
                    </div>
                </div> 
<!--                <div class="form-group">
                    <input type="text" name="search_text" id="search_text"
                           placeholder="Search Ad here" class="form-control search-text search-filter">
                </div>-->
                <button type="submit" class="btn btn-default search-btn form-control" >Search</button>
            </div>
        </form>
    </div>












    <!--    <div class="wrapper">
            <form action="#" method="post">
                <div class="row">
                    <div class="col-md-3">
                        <select>
                            <option value="" selected="selected">Make</option>
                            <option value="" >Make 1</option>
                            <option value="" >Make 2</option>
                            <option value="" >Make 3</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select>
                            <option value="" selected="selected">Model</option>
                            <option value="" >Model 1</option>
                            <option value="" >Model 2</option>
                            <option value="" >Model 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="range-slider-area">
                        <input class="range-slider" type="hidden" value="25,75"/>
                    </div>Range Slider Area
                </div>
                <div class="col-md-3">
                    <input type="submit" value="Car Show" />
                </div>
            </form>
        </div>-->
</div><!--Buy Section-->
<div id="product-container" class="home-product-container">
    <?php $this->load->view("cars/available_cars_partial", array("heading" => "Available Cars")); ?>
</div><!--Product Container-->
<?php $this->load->view('include/footer'); ?>