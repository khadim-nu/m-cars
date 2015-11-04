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

<div id="footer-container">
    <div class="wrapper">
        <div id="footer-widgets">
            <div class="widget">
                <h4>About US</h4>
                <span class="address">Horn Jewelers <br /> M-cars 24 Salisbury Road </span>
                <span class="phone">Telephone: 01273 724738</span>
            </div><!--widget-->
            <div class="widget">
                <h4>Quick Links</h4>
                <!--                <ul>
                                    <li>
                                        <a href="<?= base_url(); ?>welcome/contact_us">Contact</a>
                                        <a class="quick-link" href="<?= base_url(); ?>welcome/payment_options">Payment Options</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url(); ?>welcome/about_us">About</a>
                                        <a class="quick-link" href="<?= base_url(); ?>welcome/piece_of_mind">Piece Of Mind</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url(); ?>welcome/etc">ETC!</a>
                                        <a class="quick-link" href="<?= base_url(); ?>welcome/appendix">Appendix</a>
                                    </li>
                                </ul>-->
                <div class="quicklinks-group">
                    <ul class="quicklinks-list">
                        <li><a href="<?= base_url(); ?>welcome/contact_us">Contact</a></li>
                        <li><a href="<?= base_url(); ?>welcome/about_us">About</a></li>
                        <li><a href="<?= base_url(); ?>welcome/etc">ETC!</a></li>
                    </ul>
                    <ul class="quicklinks-list">
                        <li><a href="<?= base_url(); ?>welcome/payment_options">Payment Options</a></li>
                        <li><a href="<?= base_url(); ?>welcome/piece_of_mind">Piece Of Mind</a></li>
                        <li><a href="<?= base_url(); ?>welcome/appendix">Appendix</a></li>
                    </ul>
                </div>
            </div><!--widget-->
            <div class="widget last">
                <h4>Social</h4>
                <div class="footer-timing">
                    <div class="header-socials">
                        <ul id="social_links">
                            <li><a href="#"><img src="<?= IMAGE_URL; ?>fb.png" alt="facebook"></a></li>
                            <li><a href="#"><img src="<?= IMAGE_URL; ?>twitter.png" alt="twiiter"></a></li>
                            <li><a href="#"><img src="<?= IMAGE_URL; ?>google.png" alt="google"></a></li>
                        </ul>
                    </div><!--Header Socials-->
                </div><!--footer timing-->
            </div><!--widget-->

            <div class="clear"></div>
        </div><!--footer widgets-->

    </div><!--wrapper-->
</div><!--footer container-->



<div id="footer">
    <div class="wrapper">
        <div class="copy-right">© 2015 Created by <span>Speed_Programer</span></div><!--Copy Right-->
        <div id="footer-menu">
            <ul>
                <li>All rights reserved.</li>
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