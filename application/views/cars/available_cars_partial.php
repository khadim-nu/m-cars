

<div class="wrapper">
    <div class="heading-main star-bg"><?= $heading; ?></div><!--New Arrivals-->
    <div id="product-widget-area">
        <?php
        if ($cars && !empty($cars)) {
            foreach ($cars as $car) {
                ?>
                <div class="product-widget">
                    <div class="product-image">
                        <img src="<?= $car['image_url']; ?>" title="Product Image"  />
                    </div><!-- Product Image-->
                    <div class="product-detail">
                        <h2><?= $car['make_title'] ?> <?= $car['transmission']; ?> <?= $car['fuel']; ?> <?= $car['style']; ?></h2>
                        <div class="order-buttons">
                            <a href="#" class="price-buton">£<?= $car['price']; ?></a>
                            <a href="<?= base_url(); ?>car/car_Details/<?= $car['id']; ?>" class="detail-buton">Details</a>
                        </div><!--Order Buttons-->
                    </div><!--Product Detail-->
                    <div class="product-meta">
                        <ul>
                            <li><img src="<?= IMAGE_URL; ?>celendae-image.jpg" alt=""/> <?= $car['year']; ?></li>
                            <li><img src="<?= IMAGE_URL; ?>product-cont-image.jpg" alt="" /> <?= $car['speed']; ?></li>
                            <li><img src="<?= IMAGE_URL; ?>product-setting-icon.png" alt="" /> <?= $car['color']; ?></li>
                        </ul>
                    </div><!--Product Meta-->
                </div><!--Product Widget-->
            <?php }
        } ?>
        <div class="clear"></div>
    </div><!--Product Widget Area-->
</div><!--wrapper-->