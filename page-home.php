<?php get_header();

/*
    Template Name: Home
*/ ?>
    <section id="home-main">
        <div class="container-fluid">
            <div class="row flex-row">
                <div class="jumbotron">


                    <div class="jumbo-content waypoint active text-center">
                        <a class="logo" href='<?php echo get_site_url(); ?>'><img
                                    src="<?= IMGURL; ?>logo.png"
                                    alt="<?php echo get_bloginfo(
                                        'description'
                                    ); ?>"/></a>
                        <div class="fade-down"><h1><strong>NM</strong> Ready Mix</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div> <!-- end home-bg -->

    <section class="home-module-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Concrete Contractor
                        <span>Serving <strong>New Mexico’s</strong> <strong>Lea County</strong> and <strong>Roswell</strong></span></h1>


                    <a href="<?= SITEURL ?>/contact-us/">
                        <button class="btn btn-primary">REQUEST A QUOTE</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="home-module-2">
        <div class="container">
            <div class="row flex-row">

                <div class="col-md-6 flex-col"><h2 class="h2">Concrete, Sand & <br/>Gravel Supplier</h2></div>
                <div class="visible-xs expander" data-target="#expand"><span>We are proud to be New Mexico’s best concrete supplier</span></div>
                <div class="col-md-6">
                    <h3>
                        <ul class="expand" id="expand">
                                <li class="hidden-xs">We are proud to be New Mexico’s best concrete supplier</li>
                                <li>NM Ready Mix provides top rated service in SE New Mexico</li>
                                <li>Highly reviewed residential and commercial concrete</li>
                                <li>Team up with a local business that’s dedicated to your needs</li>
                                <li>We always listen to what our clients have to say. Take a look at our reviews!</li>
                                <li>We are New Mexico’s go-to team when it comes to concrete supply needs</li>
                                <li>NM Ready Mix is ready to work with you!</li>
                        </ul>
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="home-module-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="grid hidden-xs">
                        <div class="flex-row">
                            <a class="grid-2 column column-sand" href="<?= SITEURL ?>/sand-and-gravel/">
                                <button class="btn btn-primary">Sand</button>
                            </a>
                            <a class="grid-2 column column-gravel" href="<?= SITEURL ?>/sand-and-gravel/">
                                <button class="btn btn-primary">Gravel</button>
                            </a>
                        </div>
                        <div class="flex-row">
                            <a class="grid-3 column column-concrete" href="<?= SITEURL ?>/ready-mixed-concrete/">
                                <button class="btn btn-primary">Mixed Concrete</button>
                            </a>
                            <a class="grid-3 column column-landscape" href="<?= SITEURL ?>/landscaping-supplies/">
                                <button class="btn btn-primary">Landscape Rock</button>
                            </a>
                            <a class="grid-3 column column-crushed" href="<?= SITEURL ?>/aggregate/">
                                <button class="btn btn-primary">Crushed Aggregate</button>
                            </a>
                        </div>
                        <a class="column column-cement" href="<?= SITEURL ?>/cement/">
                            <button class="btn btn-primary">Cement</button>
                        </a>
                    </div>

                    <div class="grid grid-2">
                        <a class="grid-2 column column-sand" href="<?= SITEURL ?>/sand-and-gravel/">
                            Sand
                        </a>
                        <a class="grid-2 column column-gravel" href="<?= SITEURL ?>/sand-and-gravel/">
                            Gravel
                        </a>
                        <a class="grid-3 column column-concrete" href="<?= SITEURL ?>/ready-mixed-concrete/">
                            Mixed Concrete
                        </a>
                        <a class="grid-3 column column-landscape" href="<?= SITEURL ?>/landscaping-supplies/">
                            Landscape Rock
                        </a>
                        <a class="grid-3 column column-crushed" href="<?= SITEURL ?>/aggregate/">
                            Crushed Aggregate
                        </a>
                        <a class="column column-cement" href="<?= SITEURL ?>/cement/">
                            Cement
                        </a>
                    </div>
                </div>
    </section>

    <section class="home-module-4">
        <img class="visible-xs visible-sm" src="<?= IMGURL ?>nm-ready-mix.jpg" alt="NM Ready Mix" />
        <div class="container">
            <div class="col-md-6 hidden-xs">
            </div>
            <div class="col-md-6 col-xs-12 bg-gray">
                    <div class="extra-padding"><h2><strong>NM Ready Mix</strong> provides high-quality concrete, sand, and gravel for projects of any size or type.</h2>
                        <p>In fact, we are the highest quality provider on the market! Our commitment to quality separates NM
                            Ready Mix from the competition.
                            Whether you’re working on a small backyard job or a large-scale industrial project,
                            we can provide the best materials to get the job done right the first time.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="home-module-5">
        <div class="container">
            <div class="row">
                <div class="extra-padding"><h2>In order for any job to be as effective as possible, not only is it necessary for the materials to be
                    of the highest quality, but they need to be ready to go.</h2>
                <p>For this reason, NM Ready Mix offers full ready-mixed concrete so you won’t have to mix any bags.
                    The precise mixture of our ready-mixed concrete yields just right over time and will be ready for use
                    whenever you need it.
                    If you’re in Lea County or Roswell, NM Ready Mix can help. For commercial and residential
                    ready-mixed concrete, sand, and crushed aggregate, choose NM Ready Mix. </p></div>
            </div>
        </div>
    </section>

    <section class="home-module-6">
        <div class="container">
            <div class="row flex-row">
                <div class="col-md-6 flex-col">
                    <div class="extra-padding"><img src="<?= IMGURL ?>construction.svg" alt="Construction Supplies" height="115"/>

                    <h2>All The Construction Supplies <span>You Need, <strong>DELIVERED TO <span>YOUR JOB SITE</span></strong></span></h2>
                    <a href="<?= SITEURL ?>/contact-us/">
                        <button class="btn btn-primary">CONTACT US TODAY</button>
                    </a></div>
                </div>
                <div class="col-md-6">
                    <div class="extra-padding"><p class="blurb">The <strong>NM Ready Mix</strong> team is devoted to making your next project as stress-free as
                        possible.</p>

                    <p class="blurb blurb-smaller">No matter where you are, we can easily deliver and pour the product you need whenever you need it. At NM Ready Mix, we have a fleet of over <span>20 trucks</span> that can meet any demand and delivery schedule. Give us a call today to find out if your job site is in our coverage area.</p>

                    <p>If you have any questions or concerns about special conditions at job sites pertaining to the pouring of concrete, our team of professionals can help. Time is of the essence when it comes to construction jobs. As such, NM Ready Mix strives to make your project as successful and effortless as possible. There’s no need to worry about where you’ll buy the concrete, how to transport it, or how to pour it. We will take care of it all so you can focus on what really matters!
                    </p></div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-module-7">
        <div class="container-fluid">
            <div class="row flex-row flex-order">

                <div class="col-xs-12 col-md-6  flex-col bg-blue left">
                    <div class="container-half"><h2>NM Ready Mix is the Right Supply Team</h2>
                    <p class="blurb">
                        NM Ready Mix understands the needs of the client. We’re devoted to providing all-encompassing service.
                    </p>

                    <p>No matter what you need, when or where you need it, our team will get it to you. Since we work with do-it-yourselfers and professional construction crews alike, our team is able to answer any questions or concerns. Our overall goal is for your construction project to be a success. Since we provide materials of the highest quality along with the best delivery, you will be able to focus on your project. If your construction project is in Southeastern New Mexico, NM Ready Mix can help.</p></div>
                </div>

                <div class="col-xs-12 col-md-6 flex-col bg-supply">
                    <img src="<?=IMGURL ?>supply-sm.jpg" alt="" class="visible-xs visible-sm" />
                </div>
            </div>
        </div>
    </section>



<?php if (is_active_sidebar('form_widgets')) { //if the field is not empty
    ?>
    <section id="contact-form" class="visible-xs">
        <div class="container" id="contact-form2">
            <div class="row">
                <div class="<?= FULLWIDTH ?>">
                    <?php dynamic_sidebar('form_widgets'); ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php get_footer(); ?>