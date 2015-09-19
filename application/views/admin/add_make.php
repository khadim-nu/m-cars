<?php $this->load->view('include/admin/header'); ?>
<div id="main">
    <?php $this->load->view('include/admin/sidebar'); ?>
    <div id="content">
        <div class="page-head">
            <span class="page-heading"><?= $title; ?></span>
            <?php $this->load->view('message'); ?>
        </div>
        <div id="form-wrap">
            <form id="admin-create-comeptiton" method="post" action="<?= base_url(); ?>index.php/admin/add_make" enctype="multipart/form-data">
                <fieldset>
                    <?php $form_data = $this->session->flashdata('form_data');
                    ?>
                    <div class="row">     
                        <div class="input-wrap">
                            <input type="text" name="title" 
                                   placeholder="Make Title" data-trigger="change" autofocus="autofocus" data-parsley-required data-parsley-minlength="<?= TITLE_LIMIT_MIN ?>" data-parsley-maxlength="<?= TITLE_LIMIT_MAX ?>">
                        </div>

                    </div>	
                    <div class="row">
                        <input type="submit" value="Save">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('include/footer'); ?> 