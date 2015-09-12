<?php

function change_status_email($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');

    $body = '<h3>Account Status Changed successfully</h3>';
    $body = $body . 'Your account status is changed by Admin. <br>';
    $body = $body . 'Current status is  <strong>' . $email_data['value1'] . '.</strong> <br> <br>';
    $body = $body . 'For more information clicke here  ' . base_url();
    $body = $body . '<hr>';
    $body = $body . 'You have received this notification because you have either subscribed to it, or are involved in it.
            To change your notification preferences, please click here: http://hostname/my/account';
    // setting parameters in array
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['name'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = 'Account Status Changed';
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function seed_email($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');
    $body = '<h3>Registered in ' . APP_NAME . ' successfully</h3>';
    $body = $body . 'Your account is created as <strong>' . $email_data['type'] . '</strong>  by Super Admin. <br>';
    $body = $body . '<h4>Login Information</h4>';
    $body = $body . 'Login ID : <strong>' . $email_data['email'] . '</strong> <br>';
    $body = $body . 'Password :<strong>' . $email_data['password'] . '</strong> <br>';
    $body = $body . 'Current status is  <strong> Active </strong> <br> <br>';
    $body = $body . 'For more information clicke here  ' . base_url();
    $body = $body . '<hr>';
    $body = $body . 'You have received this notification because you have either subscribed to it, or are involved in it.
            To change your notification preferences, please click here: http://hostname/my/account';
    // setting parameters in array
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['name'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = 'Registratation';
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function register_email($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');
    if ($email_data['type'] != 'Player') {
        $body = '<h3>Registered in ' . APP_NAME . ' successfully </h3>';
        $body = $body . 'Your account is created as <strong>' . $email_data['type'] . ' </strong>. <br>';
        $body = $body . '<strong>Login Details:</strong> <br>';
        $body = $body . '   Login ID : <strong>' . $email_data['email'] . '</strong> <br>';
        $body = $body . '   Password : <strong>' . $email_data['password'] . '</strong> <br>';


        if (isset($email_data['token'])) {
            $body = $body . 'Current status is  <strong> Not Verified </strong> ';
            $body = $body . 'To verify Click on <h3>' . $email_data['url'] . ' </h3>';
        } else {
            $body = $body . 'Current status is  <strong> Not Verified </strong>. verification request is sent to Admin. <br>';
            $body = $body . 'On verification you will be notified. <br><br>';
        }
        $body = $body . 'For more information clicke here  ' . base_url();
        $body = $body . '<hr>';
        $body = $body . 'You have received this notification because you have either subscribed to it, or are involved in it.
            To change your notification preferences, please click here: http://hostname/my/account';
    } else {
        $body = $CI->load->view('email_notifications/player_register', $email_data, TRUE);
    }
    // setting parameters in array
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['name'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = 'User Registration and Account Verification';
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function admin_registration_verification_email($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');
    $body = '<h3>Verify Registration for ' . APP_NAME . ' </h3>';
    $body = $body . 'User is registered as Admin in ' . APP_NAME . '. <br>';
    $body = $body . 'Email id is : <strong>' . $email_data['email'] . '</strong> <br>';
    $body = $body . 'Current status is  <strong> Not Verified </strong> ';
    $body = $body . 'To verify Click on <h3>' . $email_data['url'] . ' </h3>';

    $body = $body . '<br>For more information clicke here  ' . base_url();
    $body = $body . '<hr>';
    $body = $body . 'You have received this notification because you have either subscribed to it, or are involved in it.
            To change your notification preferences, please click here: http://hostname/my/account';

    // setting parameters in array
    $data = array();
    $data['to'] = ADMIN_EMAIL;
    $data['to_name'] = ADMIN_NAME;
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = 'Registratation Verification Request';
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function verify_registration_email($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');

    $body = '<h3>Account Registration is Verified successfully</h3>';
    $body = $body . 'Your account registration request is verified as <strong> ' . $email_data['type'] . ' </strong>. <br>';
    $body = $body . 'Current status is  <strong> Active </strong>. <br>';
    $body = $body . 'You can Login as <strong> ' . $email_data['type'] . ' </strong>. <br> <br>';
    $body = $body . 'Your Password is <strong> ' . $email_data['password'] . ' </strong>. <br> <br>';    
    $body = $body . 'For more information click here  ' . base_url().$email_data['url'];
    $body = $body . '<hr>';
    $body = $body . 'You have received this notification because you have either subscribed to it, or are involved in it.
            To change your notification preferences, please click here: http://hostname/my/account';
    // setting parameters in array
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['name'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = 'Registration Verified';
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function update_password_email($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');

    $body = '<h3>Password Changed successfully</h3>';
    $body = $body . 'Your password is changed. <br>';
    $body = $body . 'New password is  <strong>' . $email_data['password'] . ' </strong> <br> <br>';
    $body = $body . 'For more information clicke here  ' . base_url();
    $body = $body . '<hr>';
    $body = $body . 'You have received this notification because you have either subscribed to it, or are involved in it.
            To change your notification preferences, please click here: http://hostname/my/account';
    // setting parameters in array
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['name'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = 'Password Changed';
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function forgot_password_email($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');

//    $body = '<h3>Forgot password request</h3>';
//    $body = $body . 'You have  requested to to retrieve password. <br>';
//    $body = $body . 'Please click here to change password  <a href="' . $email_data['url'] . '"><strong>Change password</strong></a> <br> <br>';
//    $body = $body . 'For more information clicke here  ' . base_url();
//    $body = $body . '<hr>';
//    $body = $body . 'You have received this notification because you have either subscribed to it, or are involved in it.
//            To change your notification preferences, please click here: http://hostname/my/account';
    $body = $CI->load->view('email_notifications/forgot_password', $email_data, TRUE);

    // setting parameters in array
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['name'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = 'Forgot Password';
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function personal_message_email($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');

    $body = '<h3>New Message Received</h3>';
    $body = $body . 'Your have received new message from Admin. <br>';
    $body = $body . 'Message is  <strong>' . $email_data['message'] . ' </strong> <br> <br>';
    $body = $body . 'For more information clicke here  ' . base_url();
    $body = $body . '<hr>';
    $body = $body . 'You have received this notification because you have either subscribed to it, or are involved in it.
            To change your notification preferences, please click here: http://hostname/my/account';
    // setting parameters in array
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['name'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    ;
    $data['subject'] = 'New Message';
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function email_edit_basic_info($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');

    $body = '<h3>Account Basic Information Updated Successfully</h3>';
    $body = $body . 'Your have Updated Account Basic Information. <br>';
    $body = $body . 'Your New <strong>Information Details are:</strong> <br>';

    if (isset($email_data['lname'])) {
        $body = $body . '   First Name: ' . $email_data['fname'] . ' <br>';
        $body = $body . '   Last Name: ' . $email_data['lname'] . '<br>';
    } else {
        $body = $body . 'Name: ' . $email_data['fname'] . '<br>';
    }
    $body = $body . '<br>For more information clicke here  ' . base_url();
    $body = $body . '<hr>';
    $body = $body . 'You have received this notification because you have either subscribed to it, or are involved in it.
            To change your notification preferences, please click here: http://hostname/my/account';
    // setting parameters in array
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['name'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = 'Basic Info Updated';
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function email_game_approved($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');

    $body = '<h3>Game Approved successfully</h3>';
    $body = $body . 'Your uploaded game is <strong>' . $email_data['value1'] . '</strong> by Admin. <br>';
    $body = $body . 'Game Deatils are: <br>';
    $body = $body . 'Game Title: Deatils are: <strong>' . $email_data['gameTitle'] . '.</strong><br>';
    $body = $body . 'Game Package Name: <strong>' . $email_data['packageName'] . '.</strong><br><br>';
    $body = $body . 'For more information clicke here  ' . base_url();
    $body = $body . '<hr>';
    $body = $body . 'You have received this notification because you have either subscribed to it, or are involved in it.
            To change your notification preferences, please click here: http://hostname/my/account';
    // setting parameters in array
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['name'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = 'Game Approved';
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function email_game_uploaded($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');

    $body = '<h3>Game Uploaded Successfully</h3>';
    $body = $body . 'Your have upladed a new game in  <strong>' . APP_NAME . '</strong>. <br>';
    $body = $body . 'Game Deatils are: <br>';
    $body = $body . 'Game Title: <strong>' . $email_data['gameTitle'] . '.</strong><br>';
    $body = $body . 'Game Package Name: <strong>' . $email_data['packageName'] . '.</strong><br>';
    $body = $body . 'Approval request is sent to Admin. Once your game is approved. You will be notified. Thanks <br><br>';
    $body = $body . 'For more information clicke here  ' . base_url();
    $body = $body . '<hr>';
    $body = $body . 'You have received this notification because you have either subscribed to it, or are involved in it.
            To change your notification preferences, please click here: http://hostname/my/account';
    // setting parameters in array
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['name'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = 'Game Uploaded';
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function email_competiton_created($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');
    $body = $CI->load->view('email_notifications/create_competition', $email_data, TRUE);
    // setting parameters in array
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['name'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = 'New Ozoneplay open leaderboard competition';
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function email_competiton_close($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');
    // setting parameters in array
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['email'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = 'Ozoneplay open leaderboard competition Winners!';
    $data['body'] = $email_data['body'];
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function email_competiton_winner($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');
    // setting parameters in array
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['email'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = 'Ozoneplay open leaderboard competition Winners!';
    $data['body'] = $email_data['body'];
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}
function email_1_1_competiton_winner($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');
    // setting parameters in array
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['email'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = 'One-to-One competition Result';
    $data['body'] = $email_data['body'];
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function email_withdraw_request($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');

    // setting parameters in array
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['name'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = $email_data['subject'];
    $data['body'] = $email_data['body'];
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function email_custom_competition_friend_invite($email_data, $body = false) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');
    if (!$body) {
        $body = '<h3>You have been invited to play a competition by ' . $email_data['userName'] . '</h3>';
        $body = $body . 'Comeptiton is created in  <strong>' . APP_NAME . '</strong>. <br>';
        $body = $body . 'Comeptiton Details are: <br>';
        $body = $body . 'Game Title: <strong>' . $email_data['gameTitle'] . '.</strong><br>';
        $body = $body . 'You can participate in this competition by playing the above game. Thank you.<br><br>';
        $body = $body . 'For more information click here  ' . base_url();
        $body = $body . '<hr>';
        $body = $body . 'You have received this notification because you have either subscribed to it, or are involved in it.To '
                . 'change your notification preferences, please click here: http://hostname/my/account';
        // setting parameters in array
    } else {
        $body = $body;
    }
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['name'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = $email_data['subject'];
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function email_invite_friend($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');

    $body = '<h3>You have been invited to ' . APP_NAME . '</h3><br />';
    $body = $body . 'Please click the link below to register against this invitation: <br>';
    $body = $body . $email_data['referral_link'] . '<br><br><br>';
    $body = $body . 'For more information click here  ' . base_url();
    $body = $body . '<hr>';
    $body = $body . 'You have received this notification because you have either subscribed to it, or are involved in it.To '
            . 'change your notification preferences, please click here: http://hostname/my/account';
    // setting parameters in array
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = 'New User';
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = $email_data['subject'];
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function simple_email($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');

    // setting parameters in array
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['name'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = $email_data['subject'];
    $data['body'] = $email_data['body'];
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function developer_email($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');
    $body = '<h3>A new Developer has registered in ' . APP_NAME . ' with the following details: </h3><br /><b>Title: </b>' . $email_data['name'] . '<br /><b>Email: </b>' . $email_data['email'] . '<br />';
    $data = array();
    $data['to'] = DEVELOPER_ADMIN_EMAIL;
    $data['to_name'] = 'Developer Admin';
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = 'New Developer Registration';
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function winner_email($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['userName'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = "Congratulation – you won playing " . $email_data['userName'] . "’s multiplayer competition";
    $data['body'] = $CI->load->view('email_notifications/competition_winner', $email_data, TRUE);
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function leaderboard_competition_result_email($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');
    $body = '<h3>A new Developer has registered in ' . APP_NAME . ' with the following details: </h3><br /><b>Title: </b>' . $email_data['name'] . '<br /><b>Email: </b>' . $email_data['email'] . '<br />';
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['userName'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = "Ozoneplay open leaderboard competition Winners!";
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function leaderboard_competition_winner_email($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');
    $body = '<h3>A new Developer has registered in ' . APP_NAME . ' with the following details: </h3><br /><b>Title: </b>' . $email_data['name'] . '<br /><b>Email: </b>' . $email_data['email'] . '<br />';
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['userName'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = "Ozoneplay open leaderboard competition Winners!";
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}
