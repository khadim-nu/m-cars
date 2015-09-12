<?php $this->load->view('include/admin/header'); ?>
<div id="main">
    <?php $this->load->view('include/admin/sidebar'); ?>
    <div id="content">
        <div class="page-head">
            <span class="page-heading">Choose a payment gateway for viewing players with withdrawal requests who have accounts associated with this gateway</span>
            <?php $this->load->view('message'); ?>
        </div>
<center>
    <a href="<?= base_url(); ?>admin/paypal_pay_players"> Pay Players with Paypal</a>
    <a href="#"> Pay Players with other payments systems</a>
</center>
            </div>
</div>
<?php $this->load->view('include/footer'); ?> 