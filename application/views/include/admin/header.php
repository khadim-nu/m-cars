<?php $this->load->view('include/head'); ?>
<body class="admin-page">
    <header id="header">
        <div class="top-bar">
            <div class="right-pane">
                <div class="image">
                    <a href="<?= base_url(); ?>index.php/admin/basic_info"> <img src="<?= $this->session->userdata('user_data')->image_url; ?>" alt=""> </a>
                </div>
                <span class="user">
                    <span class="name">
                        <a href="<?= base_url(); ?>index.php/admin/basic_info"><?= $this->session->userdata('user_data')->name;?></a>
                    </span>
                    <span class="arrow"><a href="<?= base_url(); ?>admin"></a></span>
                </span>
                <ul class="dropdown">
                    <li><a href="<?= base_url(); ?>index.php/admin/changepassword">Change Password</a></li>
                    <li><a href="<?= base_url(); ?>index.php/admin/edit_basic_info">Edit Account</a></li>
                    <li><a href="<?= base_url(); ?>index.php/admin/logout">Logout</a></li>
                </ul>
            </div>
            <strong class="logo"><a href="<?= base_url(); ?>"></a></strong>
            <div class="links">
                    <a class="add-game" href="<?= base_url(); ?>index.php/admin/add_new_car">add new Car</a>
            </div>
        </div>
    </header>