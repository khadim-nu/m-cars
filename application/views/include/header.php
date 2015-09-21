<?php $this->load->view('include/head'); ?>
<body>
<div id="header">
	<div class="wrapper">
    	<div id="logo">
        	<a href="<?= base_url(); ?>welcome"><img src="<?=  IMAGE_URL; ?>logo.png" alt="Logo"  /></a>
        </div><!--Logo-->
        <div id="main-menu">
            <ul>
                        <li><a href="<?= base_url(); ?>welcome">Home </a></li>
                        <li><a href="<?= base_url(); ?>welcome/t_and_c">T&C’s </a></li>
                        <li><a href="<?= base_url(); ?>welcome/contact_us">Contact</a></li>
                        <li><a href="<?= base_url(); ?>welcome/about_us">About</a></li>
                        <li><a href="<?= base_url(); ?>welcome/etc">ETC!</a></li>
            </ul>
        </div><!--Main Menu-->
        <div id="header-right">
        	<div id="header-right-top">
            	<div class="header-socials">
                    <ul>
                        <li><a href="#"><img src="<?=  IMAGE_URL; ?>facebook-icon.png" alt="facebook"></a></li>
                        <li><a href="#"><img src="<?=  IMAGE_URL; ?>twitter-icon.png" alt="twiiter"></a></li>
                        <li><a href="#"><img src="<?=  IMAGE_URL; ?>linl-icon.png" alt="link-din"></a></li>
                        <li><a href="#"><img src="<?=  IMAGE_URL; ?>pintrest-icon.png" alt="pintrest"></a></li>
                    </ul>
                </div><!--Header Socials-->
            </div><!--Header Right Top-->
            <div id="header-right-bottom">
            	M-cars 24 Salisbury Road , T:<a href="tel:1234567891">01273 724738</a>
            </div><!--Header Right Bottom-->
        </div><!--Header Right-->
        <div class="clear"></div>
    </div><!--wrapper-->
</div><!--Header-->