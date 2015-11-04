<?php $this->load->view('include/head'); ?>
<body>
    <div id="header">
        <div class="wrapper">
            <div id="logo">
                <a href="<?= base_url(); ?>welcome"><img src="<?= IMAGE_URL; ?>logo.png" alt="Logo" style="height: 110px"  /></a>
            </div><!--Logo-->
            <div id="main-menu">
                <ul>
                    <li><a href="<?= base_url(); ?>welcome">Home </a></li>
                    <li><a href="<?= base_url(); ?>car/buy">Stock List</a></li>
                    <li><a href="<?= base_url(); ?>welcome/about_us">About Us</a></li>
                    <li><a href="<?= base_url(); ?>welcome/contact_us">Contact Us</a></li>
                </ul>
            </div><!--Main Menu-->
            <div id="header-right" >
                <div id="header-right-bottom">
                    M:<a href="tel:1234567891">07771356796</a><br>
                    T :<a href="tel:1234567891">01273724738</a>
                   
                </div><!--Header Right Bottom-->
            </div><!--Header Right-->
            <div class="clear"></div>
        </div><!--wrapper-->
    </div><!--Header-->