<?php $this->load->view('include/admin/header'); ?>
<div id="main">
    <?php $this->load->view('include/admin/sidebar'); ?>
    <div id="content">
        <div class="page-head">
            <span class="page-heading">Account detail</span>
            <?php $this->load->view('message'); ?>
        </div>
        <div class="all-detail">
            <div class="holder-wrap">
                <div class="row">
                    <div class="col-md-3">
                        <div class="image-area">
                            <div class="holder">
                                <div class="image">
                                    <img src="<?= $this->session->userdata('user_data')->image_url; ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-xs-5">
                                    <span class="item_detail_title">Name</span>
                                </div>
                                <div class="col-xs-7">
                                    <span><?= $this->session->userdata('user_data')->name; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-xs-5">
                                    <span class="item_detail_title">Email</span>
                                </div>
                                <div class="col-xs-7">
                                    <span><?= $this->session->userdata('user_data')->email; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-xs-5">
                                    <span class="item_detail_title">Created at</span>
                                </div>
                                <div class="col-xs-7">
                                    <span><?= $this->session->userdata('user_data')->created_at; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-xs-5">
                                    <span class="item_detail_title">Updated at</span>
                                </div>
                                <div class="col-xs-7">
                                    <span><?= $this->session->userdata('user_data')->updated_at; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-xs-5">
                                    <div class="btn-row">
                                        <a class="btn" href="<?= base_url(); ?>admin/edit_basic_info">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php $this->load->view('include/footer'); ?> 
