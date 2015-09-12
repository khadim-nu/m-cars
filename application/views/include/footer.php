<footer id="footer">

</footer>
<script type="text/javascript" src="<?= JS_URL; ?>highcharts.js"></script>
<script type="text/javascript" src="<?= JS_URL; ?>exporting.js"></script>

<script type="text/javascript" src="<?= JS_URL; ?>jquery.dataTables.min.js"></script>

<script type="text/javascript" src="<?= JS_URL; ?>jquery-ui.js"></script>

<script type="text/javascript" src="<?= JS_URL; ?>jquery.main.js"></script>
<script type="text/javascript" src="<?= JS_URL; ?>bootstrap.min.js"></script>
<script type="text/javascript" src="<?= JS_URL; ?>customize.js"></script>

<!-- For parsley  -->
<script type="text/javascript" src="<?= JS_URL; ?>parsley.js"></script>
<script type="text/javascript" src="<?= JS_URL; ?>script.js"></script>


<!--<script src="<?= JS_URL; ?>jquery-1.7.1.min.js"></script>-->
<script src="<?= JS_URL; ?>jquery.range.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script type="text/javascript" src="<?= JS_URL; ?>jquery.slicknav.js"></script>
<script type="text/javascript" src="<?= JS_URL; ?>query.bxslider.js"></script>
<script type="text/javascript" src="<?= JS_URL; ?>jquery.sticky.js"></script>
<script type="text/javascript" src="<?= JS_URL; ?>scripts_custom.js"></script>
<script type="text/javascript" src="<?= JS_URL; ?>jquery.easing.1.3.js"></script>




<input type ="hidden" value ="<?= $_SERVER['HTTP_HOST'] ?>" id = "current-enviroment">
<script>
    $(document).ready(function() {
        
        var default_img = <?= json_encode(base_url() . DEFAULT_SRC); ?>;
        $( 'img' ).on('error', function() {
            $(this).attr("src", default_img);
        });
    });
</script>
</body>
</html>