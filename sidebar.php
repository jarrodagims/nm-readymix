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
                                <a class="grid-3 column column-landscape" href="<?= SITEURL ?>/landscaping-supplies/">
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
