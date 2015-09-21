
<script type="text/javascript" src="<?= JS_URL; ?>jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?= JS_URL; ?>jquery-ui.js"></script>

<script type="text/javascript" src="<?= JS_URL; ?>jquery.main.js"></script>
<script type="text/javascript" src="<?= JS_URL; ?>bootstrap.min.js"></script>
<!-- For parsley  -->
<script type="text/javascript" src="<?= JS_URL; ?>parsley.js"></script>
<script type="text/javascript" src="<?= JS_URL; ?>script.js"></script>


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