<?php $this->load->view('include/admin/header'); ?>
<div id="main">
    <?php $this->load->view('include/admin/sidebar'); ?>
    <div id="content">
        <div class="page-head">
            <span class="page-heading"><?= $title; ?></span>
            <?php $this->load->view('message'); ?>
        </div>
        <div id="form-wrap">
            <form id="admin-create-comeptiton" method="post" action="<?= base_url(); ?>admin/add_new_car" enctype="multipart/form-data">
                <fieldset>
                    <?php $form_data = $this->session->flashdata('form_data');
                    ?>
                    <div class="row">
                        
                        <div class="input-wrap">
                         <select class="form-control" name="make" data-trigger="change" data-parsley-required>
                                <option value="">Select Make</option>
                                <?php
                                if (!empty($makes)) {
                                    foreach ($makes as $make) {
                                        ?>
                                        <option value="<?= $make['id']; ?>"><?= $make['title'] ?> </option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-wrap">
                            <select class="form-control" name="model" data-trigger="change" data-parsley-required>
                                <option value="">Select Model</option>
                                <?php
                                if (!empty($models)) {
                                    foreach ($models as $model) {
                                        ?>
                                        <option value="<?= $model['id']; ?>"><?= $model['title'] ?> </option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>

                    </div>	


                    <div class="row">
                        <div class="input-wrap file">
                            <input type="file" name="image_url" id="bannerImage" data-trigger="change" data-parsley-required data-jcf='{"buttonText": "Browse", "placeholderText": "Car image"}'>
                        </div>
                        <div class="input-wrap">
                            <span id="err"></span>
                            <input class="number-num" type="number" name="price" id="entryfee"
                                   placeholder="Price"  data-trigger="change"  data-type="integer" min="<?= FEE_MIN + 1 ?>" max="<?= FEE_MAX + 1 ?>">
                        </div>
                    </div>
                    <div class="row">
                        (max. <?= DESC_LIMIT_MAX; ?> characters)
                        <textarea placeholder="Description" name="desc"data-parsley-minlength="<?= DESC_LIMIT_MIN ?>" data-parsley-maxlength="<?= DESC_LIMIT_MAX ?>" data-trigger="change" data-parsley-required><?php if (isset($form_data['desc'])) echo $form_data['desc']; ?></textarea>
                    </div>
                    <div class="row">
                        <input  type="submit" value="Save">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('include/footer'); ?> 