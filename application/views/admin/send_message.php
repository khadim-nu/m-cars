<?php $this->load->view('include/admin/header'); ?>
<div id="main">
    <?php $this->load->view('include/admin/sidebar'); ?>
    <div id="content">
        <div class="page-head">
            <span class="page-heading">Send Message</span>
            <?php
            $this->load->view('message');
            $form_data = $this->session->flashdata('form_data');
            ?>
        </div>
        <div id="form-wrap">
            <form  id="send-message" method="post" action="<?= base_url(); ?>admin/send_message">
                <fieldset>

                    <div class="row">
                        <div class="input-wrap">
                            <select name="appId" data-trigger="change" data-parsley-required>
                                <option value="">select player</option>
                                <?php
                                if ($players) {
                                    foreach ($players as $row) {
                                        ?>
                                        <option value="<?= $row['airship_key']; ?>" <?php
                                        if (count($form_data) > 0) {
                                            if ($form_data['appId'] == $row['airship_key']) {
                                                echo 'selected="true"';
                                            }
                                        }
                                        ?> ><?= $row['fName'] . ' ' . $row['lName']; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        (max <?= DESC_LIMIT_MAX; ?> characters)
                        <textarea name="message" data-trigger="change" data-parsley-minlength="<?= DESC_LIMIT_MIN; ?>" data-parsley-maxlength="<?= DESC_LIMIT_MAX;?>" data-parsley-required placeholder="Type Alert message"><?php if (count($form_data) > 0) { echo $form_data['message'];} ?></textarea>
                    </div>
                    <div class="row">
                        <input type="submit" value="Send">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('include/admin/footer'); ?> 