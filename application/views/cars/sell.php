<?php $this->load->view('include/header'); ?>
<div id="sell-section" class="home-form-s">
    <div class="wrapper">
        <h2>SELL
            <span class="display_error"></span>
        </h2>
        <form id="register" action="<?= base_url(); ?>car/sell" method="post">
            <div class="form-left-fliled">
                <select class="form-control" name="make" data-trigger="change" data-parsley-required>
                    <option value="">Select Make</option>
                    <?php
                    if (!empty($makes)) {
                        foreach ($makes as $make) {
                            ?>
                            <option value="<?= $make['id']; ?>"><?= $make['title'] ?> </option>
                            <?php
                        }
                    }
                    ?>
                </select>
                <select class="form-control" name="model" data-trigger="change" data-parsley-required>
                    <option value="">Select Model</option>
                    <?php
                    if (!empty($models)) {
                        foreach ($models as $model) {
                            ?>
                            <option value="<?= $model['id']; ?>"><?= $model['title'] ?> </option>
                            <?php
                        }
                    }
                    ?>
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
                <select name="service" data-trigger="change" data-parsley-required>
                    <option value="" selected="selected">Service</option>
                    <option value="full" >Full</option>
                    <option value="part" >Part</option>
                    <option value="none" >None</option>
                </select>
                <input type="text" name="registration" placeholder="Registration" data-trigger="change" data-parsley-required />
            </div>
            <textarea name="comment" rows="5" placeholder="Write faults and features here!" data-trigger="change" data-parsley-required></textarea>
             <label for="name">Contact Details</label>
             <div class="clear"></div>
            <div class="form-left-fliled">
                <input type="text" name="name" placeholder="Name" data-trigger="change" data-parsley-required />
            </div>
            <div class="form-left-fliled">
                <input type="email" name="email" placeholder="Email" data-trigger="change" data-parsley-required />
            </div>
            <input type="submit" value="Submit" />
        </form>
    </div><!--wrapper-->
</div><!--sell Section-->
<div id="product-container" class="home-product-container">
    <?php $this->load->view("cars/available_cars_partial", array("heading" => "Available Cars")); ?>
</div><!--Product Container-->
<?php $this->load->view('include/footer'); ?>