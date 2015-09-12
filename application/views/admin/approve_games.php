<?php $this->load->view('include/admin/header'); ?>

<div id="main">
    <?php $this->load->view('include/admin/sidebar'); ?>
    <div id="content">
        <div class="page-head">
            <span class="page-heading">Games</span>
            <?php $this->load->view('message'); ?>
        </div>
        <div class="table-wrapper">
            <div class="holder">
                <div class="block wide-view">
                    <div class="row-fluid">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="sorting">title</th>
                                    <th>Package Name</th>
                                    <th>Developer Title</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Featured</th>
                                    <th >Status</th>
                                    <th>Approve</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($games) { ?>
                                    <?php foreach ($games as $row) { ?>
                                        <tr>
                                            <td><a href="<?= base_url(); ?>game/details/<?= $row['id']; ?>"><?= $row['gameTitle']; ?></a></td>
                                            <td><?= $row['packageName']; ?></td>
                                            <td><a href="<?= base_url(); ?>developer/details/<?= $row['developerID']; ?>"><?= $row['developerTitle']; ?></a></td>
                                            <td class="hidden-480"><?= $row['type']; ?></td>
                                            <td class="hidden-phone"><?= character_limiter($row['description'],50); ?></td>
                                            <td class="hidden-phone"><?= $row['isFeatured']; ?></td>
                                            <td class="hidden-phone"><?= get_status($row['status']); ?></td>
                                            <td class="hidden-phone"><a href="<?= base_url(); ?>admin/change_game_status/<?= $row['id']; ?>">Approve</a></td>
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