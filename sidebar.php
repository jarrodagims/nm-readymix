<div id="sidebar">
    <?php if (is_page('contact-us')) : ?>
        <div id="contact-form">
            <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
                echo do_shortcode('[contact-form-7 id="41" title="Contact Form"]');
            } else {
                echo do_shortcode('[contact-form-7 id="41" title="Contact Form"]');
            }
            ?>
        </div>
        <section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3369.2751584876796!2d-104.23985168482794!3d32.38498498109216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e3791d17083c67%3A0xc6bc1d4efff06c97!2sConstructors%2C+Inc.!5e0!3m2!1sen!2sus!4v1534792873987" width="100%" height="100%" frameborder="0" style="border:0; display: block;" allowfullscreen></iframe>
        </section>
    <?php endif; ?>
    <?php if (!is_page('contact-us')) : ?>
        <section>
            <div class="flex-col bg">
                <div class="container-half">
                    <div class="header">
                            <div class="title">Concrete Contractor</div>
                            <div class="sub-title">Serving <span>New Mexico’s Lea County</span><br /> and <span>Roswell</span></div>
                            <a href="<?= SITEURL ?>/contact-us/">
                                <button class="btn btn-primary">Request a Quote</button>
                            </a>
                    </div>

                    <div class="home-module-2">
                       <div class="h2">Concrete, Sand <br/>& Gravel Supplier</div>
                    </div>
                            <div class="grid">
                                <a class="grid-2 column column-sand" href="<?= SITEURL ?>/contact-us/">
                                    Sand
                                </a>
                                <a class="grid-2 column column-gravel" href="<?= SITEURL ?>/contact-us/">
                                    Gravel
                                </a>
                                <a class="grid-3 column column-concrete" href="<?= SITEURL ?>/contact-us/">
                                    Mixed Concrete
                                </a>
                                <a class="grid-3 column column-landscape" href="<?= SITEURL ?>/contact-us/">
                                    Landscape Rock
                                </a>
                                <a class="grid-3 column column-crushed" href="<?= SITEURL ?>/contact-us/">
                                    Crushed Aggregate
                                </a>
                                <a class="column column-cement" href="<?= SITEURL ?>/contact-us/">
                                    Cement
                                </a>
                            </div>

                    <div class="sidebar-bottom"><img src="<?= IMGURL ?>construction.svg" alt="Construction Supplies" height="115"/>
                    <div class="heading">All The Construction Supplies You Need, <strong>DELIVERED TO <br />THE JOB SITE</strong></div>
                    <a href="<?= SITEURL ?>/contact-us/">
                        <button class="btn btn-primary">CONTACT US TODAY</button>
                    </a></div>
                </div>
            </div>
        </section>
    <?php endif; ?>
</div>
