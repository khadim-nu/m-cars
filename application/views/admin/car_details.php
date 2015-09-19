<?php $this->load->view('include/admin/header'); ?>
<div id="main">
    <?php $this->load->view('include/admin/sidebar'); ?>
    <div id="content">
        <div class="page-head">
            <span class="page-heading"><?= $title; ?></span>
            <?php $this->load->view('message'); ?>
        </div>
        <div id="form-wrap">
            <div class="row">
                <div class="col-md-4 item_image">
                    <div class="row">
                        <img src="<?= $car['image_url']; ?>" />
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <span class="add-new-link delete_item" data-url="<?= base_url(); ?>index.php/admin/delete_car/<?= $car['id']; ?>">Delete</span>
                        </div>
<!--                        <div class="col-md-5">
                            <a class="add-new-link"  href="<?= base_url(); ?>admin/delete_car/<?= $car['id']; ?>">Edit</a>
                        </div>-->
                    </div>
                </div>

                <div class="col-md-8 item_details">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-xs-5">
                                <span class="item_detail_title">Make</span>
                            </div>
                            <div class="col-xs-7">
                                <span class="item_detail_value"><?= $car['make_title']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-xs-5">
                                <span class="item_detail_title">Model</span>
                            </div>
                            <div class="col-xs-7">
                                <span class="item_detail_value"><?= $car['model_title']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-xs-5">
                                <span class="item_detail_title">Price</span>
                            </div>
                            <div class="col-xs-7">
                                <span class="item_detail_value"><?= $car['price']; ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-xs-5">
                                <span class="item_detail_title">Status</span>
                            </div>
                            <div class="col-xs-7">
                                <span class="item_detail_value"><?= get_status($car['status']); ?></span>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-xs-5">
                                <span class="detail_sub_heading">Attributes</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-xs-5">
                                <span class="item_detail_title">Year</span>
                            </div>
                            <div class="col-xs-7">
                                <span class="item_detail_value"><?= $attribute->year; ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-xs-5">
                                <span class="item_detail_title">Mileage</span>
                            </div>
                            <div class="col-xs-7">
                                <span class="item_detail_value"><?= $attribute->mileage; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-xs-5">
                                <span class="item_detail_title">Style</span>
                            </div>
                            <div class="col-xs-7">
                                <span class="item_detail_value"><?= $attribute->style; ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-xs-5">
                                <span class="item_detail_title">Estate</span>
                            </div>
                            <div class="col-xs-7">
                                <span class="item_detail_value"><?= $attribute->estate; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-xs-5">
                                <span class="item_detail_title">Transmission</span>
                            </div>
                            <div class="col-xs-7">
                                <span class="item_detail_value"><?= $attribute->transmission; ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-xs-5">
                                <span class="item_detail_title">Speed</span>
                            </div>
                            <div class="col-xs-7">
                                <span class="item_detail_value"><?= $attribute->speed; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-xs-5">
                                <span class="item_detail_title">Engine Size</span>
                            </div>
                            <div class="col-xs-7">
                                <span class="item_detail_value"><?= $attribute->engine_size; ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-xs-5">
                                <span class="item_detail_title">Fuel Type</span>
                            </div>
                            <div class="col-xs-7">
                                <span class="item_detail_value"><?= $attribute->fuel; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-xs-5">
                                <span class="item_detail_title">Color</span>
                            </div>
                            <div class="col-xs-7">
                                <span class="item_detail_value"><?= $attribute->color; ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-xs-5">
                                <span class="item_detail_title">No. of doors</span>
                            </div>
                            <div class="col-xs-7">
                                <span class="item_detail_value"><?= $attribute->doors; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-xs-5">
                                <span class="item_detail_title">No. of Owners</span>
                            </div>
                            <div class="col-xs-7">
                                <span class="item_detail_value"><?= $attribute->no_of_owners; ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-xs-5">
                                <span class="item_detail_title">Other</span>
                            </div>
                            <div class="col-xs-7">
                                <span class="item_detail_value"><?= $attribute->other; ?></span>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-xs-5">
                                <span class="detail_sub_heading">Features</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <?php
                        if (!empty($feature)) {
                            if (!empty($feature->list)) {
                                $features_list = explode(",", ($feature->list));
                                foreach ($features_list as $key => $value) {
                                    ?>
                                    <div class="col-md-6">
                                        <div class="col-xs-5">
                                            <span class="item_detail_title">Feature-<?= $key + 1; ?></span>
                                        </div>
                                        <div class="col-xs-7">
                                            <span class="item_detail_value"><?= $value ?></span>
                                        </div>
                                    </div>

                                    <?php
                                }
                            }
                        }
                        ?>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-xs-5">
                                <span class="detail_sub_heading">Description</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $feature->desc; ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-xs-5">
                        <span class="detail_sub_heading">Gallary</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                if (!empty($images)) {
                    foreach ($images as $key => $value) {
                        if ($key % 3 == 0) {
                            ?>
                        </div>
                        <div class="row">
                        <?php }
                        ?>
                        <div class="col-md-4">
                            <img class="gallary_img" src="<?= base_url() . $value['image_url']; ?>"/>
                        </div>

                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <?php $this->load->view('include/footer'); ?> 