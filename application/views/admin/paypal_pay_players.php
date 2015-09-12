<?php $this->load->view('include/admin/header'); ?>
<div id="main">
    <?php $this->load->view('include/admin/sidebar'); ?>
    <div id="content">
        <div class="page-head">
            <span class="page-heading">Withdrawal Requests with Paypal Accounts</span>
            <?php $this->load->view('message'); ?>
        </div>
<div id="container">
    <center>
        <br>
        <h1></h1>
        <div id="body">
            <?php
            if (!empty($players)) {
                foreach ($players as $player) {
                    echo '<a href="' . base_url() . 'player/details/' . $player['id'] . '">' . $player['userName'] . '</a> - <a href="'.base_url().'admin/decline_withdrawal/' .$player['id']. '/' .$player['player_id']. '">Decline</a><form action="' .base_url(). 'paypal/pay_adaptive" method="post"><input type="hidden" name="amount" type="number" value="' .$player['amount']. '" /><input name="player_id" type="hidden" value="' .$player['player_id']. '" /><input name="withdrawal_id" type="hidden" value="' .$player['id']. '" /><button type="submit" class="submit-disabled">Pay</button></form><br>';
                }
            } else {
                echo '<span class="italic">No Records Found</span>';
            }
            ?>
        </div>
    </center>
</div>
<?php $this->load->view('message'); ?>
            </div>
</div>
<?php $this->load->view('include/footer'); ?> 