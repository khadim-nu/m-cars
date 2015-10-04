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
            <li><img src="<?= IMAGE_URL; ?>checkedwithhpi1540.png" alt="checked with hpi1540"></li>
            <li><img src="<?= IMAGE_URL; ?>Motonovo_finance.jpg" alt="Motonovo finance"></li>
            <li><img src="<?= IMAGE_URL; ?>WarrantyWiseLogo.jpg" alt="Warranty Wise"></li>
        </ul>
    </div><!--wrapper-->
</div>
<div id="footer">
    <div class="wrapper">
        <div class="copy-right">© 2015 Created by <span>Speed_Programer</span></div><!--Copy Right-->
        <div id="footer-menu">
            <ul>
                <li><a href="<?= base_url(); ?>welcome/payment_options">Payment options</a></li>
                <li><a href="<?= base_url(); ?>welcome/piece_of_mind">Piece of mind</a></li>
                <li><a href="<?= base_url(); ?>welcome/appendix">Appendix</a></li>
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