<?php $this->load->view('include/admin/header'); ?>
<div id="main">
    <?php $this->load->view('include/admin/sidebar'); ?>
    <div id="content">
        <div class="page-head">
            <span class="page-heading">dashboard</span>
            <?php $this->load->view('message'); ?>
        </div>
        <div class="inner-content">
            <div class="site-info-wrap">
                <div class="box">
                    <strong class="title"><?= 123; ?></strong>
                    <span class="data">Bought Cars</span>
                </div>
                <div class="box even">
                    <strong class="title"><?= 123; ?></strong>
                    <span class="data">Sold Cars</span>
                </div>
                <div class="box">
                    <strong class="title"><?= 123; ?></strong>
                    <span class="data">Source Cars</span>
                </div>
                <div class="box even">
                    <strong class="title"><?= 123; ?></strong>
                    <span class="data"> Registered Admins</span>
                </div>
            
            </div> 
            <div class="slides-wrapper">
                <div class="holder">
                    <div class="block">
                        <div class="carousel">
                            <div class="mask">
                                <div class="slideset">
                                    <div class="slide">
                                        <div class="user-wrap">
                                            <strong class="title">Recently Source Cars</strong>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn-prev" href="#">Previous</a>
                            <a class="btn-next" href="#">Next</a>
                        </div>
                    </div>
                    <div class="block">
                        <div class="carousel">
                            <div class="mask">
                                <div class="slideset">
                                    <div class="slide">
                                        <div class="user-wrap">
                                            <strong class="title">Recently Sold Cars</strong>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn-prev" href="#">Previous</a>
                            <a class="btn-next" href="#">Next</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('include/footer'); ?> 