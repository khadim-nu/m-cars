<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?= APP_NAME; ?></title>
        <style>
            img {
                display:block;
                margin:0;
                padding:0;
            }
        </style>
    </head>
    <body>
        <div id="wrapper" style="max-width:750px; margin:0 auto; font-size:18px; line-height:23px; border:2px solid #4472c4; padding:20px;font-family:Arial, Helvetica, sans-serif;">
            <div class="add-txt" style="overflow:hidden; margin:0 0 25px;">
                <p style="margin:0 0 10px;">Hi <?= ADMIN_NAME . ',' ?></p>
            </div>
            <div class="txt" style="overflow:hidden; padding:0 0 10px; line-height:30px;">
                <p style="margin:0 0 10px;">A client has contacted you.</p>
            </div>
            <div class="txt" style="overflow:hidden; padding:0 0 10px; line-height:30px;">
                <p style="margin:0 0 10px;"> <strong>Client Details:</strong></p>
            </div>
            <div class="txt" style="overflow:hidden; padding:0 0 10px; line-height:30px;">
                <p style="margin:0 0 10px;"> Name: <?= $name; ?></p>
            </div>
            <div class="txt" style="overflow:hidden; padding:0 0 10px; line-height:30px;">
                <p style="margin:0 0 10px;">Email: <?= $email; ?></p>
            </div>
            <div class="txt" style="overflow:hidden; padding:0 0 10px; line-height:30px;">
                <p style="margin:0 0 10px;">Phone: <?= $phone; ?></p>
            </div>
            <div class="txt" style="overflow:hidden; padding:0 0 10px; line-height:30px;">
                <p style="margin:0 0 10px;">"<?= $message; ?>"</p>
            </div>

            <div class="txt-box" style="overflow:hidden; margin:0 0 25px;">
                <p style="margin:0 0 2px;"></p>
                <a href="javascript:void(0);">
                    <img src="<?= base_url() . 'assets/images/logo.png' ?>" alt="images description">
                </a>
            </div>
            <div class="footer-txt" style="font-size:12px; line-height:15px;">
                <span style="display:block; font-size:14px; line-height:17px; margin:0 0 12px;">This email was intended for</span>
                <p style="margin:0 0 10px;color:#696969;">This message is confidential. It may also be privileged or otherwise protected by work product immunity or other legal rules. If you have received it by mistake, please let us know by forwarding it to <a href="#" style="color:#53a9eb; text-decoration:none;"><?= APP_EMAIL; ?></a> and delete it from your system; you may not copy this message or disclose its contents to anyone. The integrity and security of this message cannot be guaranteed on the Internet.</p>
            </div>
        </div>
    </body>
</html>