<?php $this->load->view('include/header'); ?>
<div id="page-wrap">
    <div class="wrapper">
        <div id="content" class="content_text">
            <div class="heading-main contact-us-heding-bg">Thanks for your interest!</div>
            <p><strong>Email has been sent!</strong></p>
            <p><strong>Our Agent will contact you soon.</strong></p>
            <?php if (isset($car_id)) { ?>
            <a href="<?= base_url(); ?>car/car_details/<?= $car_id; ?>" class="blue-button back-btn">Back</a>
            <?php } ?>
        </div><!--Content-->
        <div class="clear">

        </div>
    </div><!--wrapper-->
</div><!--Page Wrap-->
<?php $this->load->view('include/footer'); ?>