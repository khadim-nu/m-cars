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
                        <li><strong>£<?= $car['price']; ?></strong><span>New Price:</span></li>
                        <li class="change-clor-list"><strong>£<?= $car['price']; ?></strong><span>Our Price:</span></li>
                        <li><strong>---</strong><span>Body Type:</span></li>
                        <li><strong><?= $car['transmission']; ?></strong><span>Trans:</span></li>
                        <li><strong><?= $car['mileage']; ?></strong><span>Mileage:</span></li>
                        <li><strong><?= $car['fuel']; ?></strong><span>Fuel Type:</span></li>
                        <li><strong><?= $car['year']; ?></strong><span>Reg Year:</span></li>
                        <li><strong><?= $car['doors']; ?></strong><span>Doors:</span></li>
                        <li><strong><?= $car['engine_size']; ?></strong><span>Engine Size:</span></li>
                        <li class="vdcolour"><strong><?= $car['color']; ?></strong><span>Colour:</span></li>
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
                            <td>Miles</td>
                            <td><?= $car['mileage']; ?></td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>£<?= $car['price']; ?></td>
                        </tr>
                        <tr>
                            <td>Vehicle Type</td>
                            <td>Wagons</td>
                        </tr>
                        <tr>
                            <td>Transmission</td>
                            <td><?= $car['transmission']; ?></td>
                        </tr>
                        <tr>
                            <td>Exterior:</td>
                            <td>ORANGE METALIC </td>
                        </tr>
                        <tr>
                            <td>Interior</td>
                            <td>BLACK LEATHER</td>
                        </tr>
                        <tr>
                            <td>Engine Size</td>
                            <td><?= $car['engine_size']; ?></td>
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
                    <input type="text" name="name" placeholder="Name" />
                    <input type="email" name="email" placeholder="Email" />
                    <textarea name="message" rows="3" placeholder="Message"></textarea>
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