<!--<div id="singup-area">
        <div class="wrapper">
        <div class="singup-area-text">Signup for our email to celebrate great specials </div>Singup Area Text
        <div class="singup-area-form">
                <form action="" method="post">
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Email">
                <div class="signup-button">
                        <input type="submit" value="">
                </div>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>-->
<div id="compines-logo-area">
    <div class="wrapper">
        <ul>
            <li><img src="<?= IMAGE_URL; ?>bugatti-logo.png" alt="bugatti"></li>
            <li><img src="<?= IMAGE_URL; ?>bmw-logo.png" alt="BMW"></li>
            <li><img src="<?= IMAGE_URL; ?>bentley-logo.png" alt="bentley"></li>
            <li><img src="<?= IMAGE_URL; ?>audi-logo.png" alt="audi"></li>
            <li><img src="<?= IMAGE_URL; ?>hyundai-logo.png" alt="hyundai"></li>
            <li><img src="<?= IMAGE_URL; ?>hyunda-logo.png" alt="hyunda"></li>
            <li><img src="<?= IMAGE_URL; ?>dodge-logo.png" alt="dodge"></li>
            <li><img src="<?= IMAGE_URL; ?>daihatsu-logo.png" alt="daihatsu"></li>
            <li><img src="<?= IMAGE_URL; ?>mitsubishi-logo.png" alt="mitsubishi"></li>
            <li><img src="<?= IMAGE_URL; ?>nissan-logo.png" alt="nissan"></li>
        </ul>
    </div><!--wrapper-->
</div>
<div id="footer">
    <div class="wrapper">
        <div class="copy-right">© 2015 Created by <span>Speed_Programer</span></div><!--Copy Right-->
        <div id="footer-menu">
            <ul>
                <li><a href="<?= base_url(); ?>welcome">Home Button</a></li>
                <li><a href="<?= base_url(); ?>welcome/t_and_c">T&C’s </a></li>
                <li><a href="<?= base_url(); ?>welcome/contact_us">Contact</a></li>
                <li><a href="<?= base_url(); ?>welcome/about_us">About</a></li>
                <li><a href="<?= base_url(); ?>welcome/etc">ETC!</a></li>
            </ul>
        </div><!--Footer Menu-->
        <div class="clear"></div>
    </div><!--wrapper-->
</div>

<script>
    $(document).ready(function () {

        var default_img = <?= json_encode(base_url() . DEFAULT_SRC); ?>;
        $('img').on('error', function () {
            $(this).attr("src", default_img);
        });
    });
</script>
</body>
</html>