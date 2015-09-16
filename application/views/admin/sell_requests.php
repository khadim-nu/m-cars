<?php $this->load->view('include/admin/header'); ?>
<div id="main">
    <?php $this->load->view('include/admin/sidebar'); ?>
    <div id="content">
        <div class="page-head">
            <span class="page-heading"><?= $title; ?></span>
            <?php $this->load->view('message'); ?>

        </div>
        <div class="table-wrapper">
            <div class="holder">
                <div class="block wide-view">
                    <div class="row-fluid">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="sorting">Make</th>
                                    <th class="hidden-480">Model</th>
                                    <th class="hidden-480">Name</th>
                                    <th class="hidden-480">Email</th>
                                    <th class="hidden-480">Phone</th>
                                    <th class="hidden-480">created_at</th>
                                    <th class="hidden-480">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                if ($data) {
                                    foreach ($data as $row) {
                                        ?>
                                        <tr>
                                            <td class="sorting"><?= $row['make_title']; ?></td>
                                            <td class="sorting"><?= $row['model_title']; ?></td>
                                            <td class="sorting"><?= $row['name']; ?></td>
                                            <td class="sorting"><?= $row['email']; ?></td>
                                            <td class="sorting"><?= $row['phone']; ?></td>
                                            <td class="hidden-phone"><?= ($row['created_at']); ?></td>
                                           <td class="hidden-phone"><a href="<?= base_url(); ?>admin/delete_model/<?= $row['id']; ?>">Delete</a> | <a href="<?= base_url(); ?>cars/car_datail/<?= $row['id']; ?>">Details</a></td>

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