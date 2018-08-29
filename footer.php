<section class="home-module-8">
    <div class="container">
        <div class="row logo-row">
            <div class="col-xs-12">
                <div class="logo">
                    <img src="<?= IMGURL ?>logo.png" alt="NM Ready Mix" height="162" />
                </div>
            </div>
        </div>
        <div class="flex-row row">
            <div class="col-md-6 flex-col">
                <p><strong class="brand">OFFICE HOURS</strong><br/>
                    Monday - Friday: <strong>7:00am - 4:00pm</strong><br />
                    Saturday - Sunday: <strong>Closed</strong></p>
            </div>

            <div class="col-md-6 flex-col">
                <a href="<?= SITEURL ?>/contact-us/">
                    <button class="btn btn-primary">REQUEST A QUOTE</button>
                </a>
            </div>
        </div>

        <div class="row flex-row">
            <div class="col-md-6">
                <div class="location-map map-roswell">
                    <img src="<?=IMGURL ?>map-pin.png" alt="Map Pin" />
                </div>
                <div class="location-bottom">ROSWELL READY MIX <div class="icons"><span class="icon-map"></span> <span class="icon-chevron"></span></div></div>
                <p class="text-center">4100 S Lea Ave, Roswell, NM 88203<br />
                    <strong>575.622.1186</strong></p>
            </div>
            <div class="col-md-6">
                <div class="location-map map-lea">
                    <img src="<?=IMGURL ?>map-pin.png" alt="Map Pin" />
                </div>
                <div class="location-bottom">LEA COUNTY CONCRETE <div class="icons"><span class="icon-map"></span> <span class="icon-chevron"></span></div></div>
                <p class="text-center">5505 W Dunnam St, Hobbs, NM 88240<br />
                    <strong>575.392.1317</strong></p>
            </div>
        </div>
        <div class="row visible-xs text-center">
            <div class="col-xs-12">
                <?php $sm = new SocialMedia(array('facebook', 'twitter'));
                $sm->setSize('sm');
                $sm->showNetworkButtons();
                $sm->setColorType('singleColor');
                ?>
            </div>
        </div>
    </div>
</section>
<section class="footer-nav hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php echo non_responsive_bs_menu('footer'); ?>
            </div>
        </div>
    </div>
</section>
<section id="sub-footer">
    <div class="container">
        <div class="flex-row row">
            <div class="flex-col col-md-12 col-xs-12">
                <div class="hidden-xs hidden-sm"><?php $sm = new SocialMedia(array('facebook', 'twitter'));
                    $sm->setSize('sm');
                    $sm->showNetworkButtons();
                    $sm->setColorType('singleColor');
                    ?></div>
                <div>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | All Rights Reserved</div>
            </div>
        </div>
</section>
<?php wp_footer(); ?>
</body>
</html>