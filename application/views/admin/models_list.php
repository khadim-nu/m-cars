<?php $this->load->view('include/admin/header'); ?>
<div id="main">
    <?php $this->load->view('include/admin/sidebar'); ?>
    <div id="content">
        <div class="page-head">
            <span class="page-heading"><?= $title; ?></span>
            <?php $this->load->view('message'); ?>

            <a  href="<?= base_url(); ?>admin/add_model">
                <span class="add-new-link">Add Model</span>
            </a>

        </div>
        <div class="table-wrapper">
            <div class="holder">
                <div class="block wide-view">
                    <div class="row-fluid">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="sorting">Model Title</th>
                                    <th class="hidden-480">created_at</th>
                                    <th class="hidden-480">updated_at</th>
                                    <th class="hidden-480">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                if ($data) {
                                    foreach ($data as $row) {
                                        ?>
                                        <tr>
                                            <td class="sorting"><?= $row['title']; ?></td>
                                            <td class="hidden-phone"><?= ($row['created_at']); ?></td>
                                            <td class="hidden-phone"><?= $row['updated_at']; ?></td>
                                            <td class="hidden-phone">
                                                <span class="delete-link delete_item" data-url="<?= base_url(); ?>admin/delete_model/<?= $row['id']; ?>">Delete</span>    
                                            </td>

                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>

        </div>
    </div>
</div>
<?php $this->load->view('include/footer'); ?> 