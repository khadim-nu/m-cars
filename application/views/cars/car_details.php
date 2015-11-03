<?php $this->load->view('include/header'); ?>
<div id="page-wrap">
    <div class="wrapper">
        <div id="content">
            <div class="heading-main similar-deals"><?= $car['make_title'] ?> , <?= $car['engine_size'] ?> , <?= $car['fuel'] ?> , <?= $car['transmission'] ?></div>
            <div id="single-slider">
                <ul class="bxslider">

                    <li><img src="<?= $car['image_url']; ?>"  alt="Slide" /></li>
                    <?php
                    if ($images && !empty($images)) {
                        foreach ($images as $key => $value) {
                            ?>
                            <li><img src="<?= base_url() . $value['image_url']; ?>"  alt="Slide" /></li>
                            <?php
                        }
                    }
                    ?>

                </ul>
                <div id="bx-pager">
                    <a data-slide-index="0" href="">
                        <img src="<?= $car['image_url']; ?>"  alt="Slide" />
                    </a>
                    <?php
                    if ($images && !empty($images)) {
                        foreach ($images as $key => $value) {
                            ?>
                            <a data-slide-index="<?= $key + 1 ?>" href="">
                                <img src="<?= base_url() . $value['image_url']; ?>"  alt="Slide" />
                            </a>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <!--Single Slider-->
            <div id="VDDetailsPanel">
                <h5>General - Info</h5>
                <div class="detailbox">
                    <ul class="">
                        <li><strong>£<?= $car['price1']; ?></strong><span>New Price:</span></li>
                        <li class="change-clor-list"><strong>£<?= $car['price2']; ?></strong><span>Our Price:</span></li>
                        <li><strong><?= $car['vehicle_type']; ?></strong><span>Vehicle Type:</span></li>
                        <li><strong><?= $car['body_type']; ?></strong><span>Body Type:</span></li>
                        <li><strong><?= $car['transmission']; ?></strong><span>Trans:</span></li>
                        <li><strong><?= $car['mileage']; ?></strong><span>Mileage:</span></li>
                        <li><strong><?= $car['fuel']; ?></strong><span>Fuel Type:</span></li>
                        <li><strong><?= $car['year']; ?></strong><span>Year:</span></li>
                        <li><strong><?= $car['registration']; ?></strong><span>Registration:</span></li>
                        <li><strong><?= $car['doors']; ?></strong><span>Doors:</span></li>
                        <li><strong><?= $car['engine_size']; ?></strong><span>Engine Size:</span></li>
                        <li><strong><?= $car['interior']; ?></strong><span>Interior:</span></li>
                        <li><strong><?= $car['exterior']; ?></strong><span>Exterior:</span></li>
                        <li><strong><?= $car['condition']; ?></strong><span>Condition:</span></li>
                        <li><strong><?= $car['service']; ?></strong><span>Service:</span></li>
                        <li class="vdcolour"><strong><?= $car['color']; ?></strong><span>Color:</span></li>
                                                <li><strong><?= $car['style']; ?></strong><span>Style:</span></li>
                        <li><strong><?= $car['speed']; ?></strong><span>Speed:</span></li>
                        <li><strong><?= $car['estate']; ?></strong><span>Estate:</span></li>

                        <li><strong><?= $car['no_of_owners']; ?></strong><span>Owners:</span></li>

                        <li><strong><?= $car['other']; ?></strong><span>Other:</span></li>

                        <div class="clear"></div>
                    </ul>
                </div>
                <h5>Features</h5>
                <div class="featuresbox">
                    <ul class="">
                        <?php
                        if ($feature && !empty($feature)) {
                            $features_arr = explode(",", $feature->list);
                            if (!empty($features_arr)) {
                                foreach ($features_arr as $feat) {
                                    ?>
                                    <li><?= $feat; ?></li>
                                    <?php
                                }
                            }
                        }
                        ?>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
        </div><!--Content-->
        <div id="sidebar">
            <div class="widget">
                <div class="prodect-detail-table">
                    <table>
                        <tr>
                            <td>Make</td>
                            <td><?= $car['make_title']; ?></td>
                        </tr>
                        <tr>
                            <td>Model</td>
                            <td><?= $car['model_title']; ?></td>
                        </tr>
                        <tr>
                            <td>Miles</td>
                            <td><?= $car['mileage']; ?></td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>£<?= $car['price']; ?></td>
                        </tr>
                        <tr>
                            <td>Transmission</td>
                            <td><?= $car['transmission']; ?></td>
                        </tr>
                        <tr>
                            <td>Fuel Type</td>
                            <td><?= $car['fuel']; ?></td>
                        </tr>
                    </table>
                </div>
                <!--Product Detail Table-->
                <h5>Contact To Buy :</h5>
                <form id="register" action="<?= base_url(); ?>car/contact_to_buy" method="post">
                    <input type="hidden" name="car_id" value="<?= $car['id']; ?>" />
                    <input type="text" name="name" placeholder="Name" data-trigger="change" data-parsley-required />
                    <input type="email" name="email" placeholder="Email" data-trigger="change" data-parsley-required />
                    <input type="tel" name="phone" placeholder="Telephone (optional)"/>
                    <textarea name="message" rows="3" placeholder="Message" data-trigger="change" data-parsley-required></textarea>
                    <input type="submit" value="Send"  />
                </form>
            </div>
            <!--Widget--> 
        </div>
        <!--Side Bar-->
        <div class="clear"></div>
    </div>
    <!--wrapper--> 
</div>
<!--Page Wrap-->
<div id="product-container" class="home-product-container">
    <?php $this->load->view("cars/available_cars_partial", array("heading" => "Available Cars")); ?>
</div><!--Product Container-->
<?php $this->load->view('include/footer'); ?>