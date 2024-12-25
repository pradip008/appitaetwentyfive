<?php
get_header();



     if(have_posts()){
        while (have_posts()){
            the_post();
            ?>
    <!-- page-title -->
    <section class="page-title centred">
        <div class="bg-layer-two" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/background/page-title.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <ul class="bread-crumb clearfix">
                    <li><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li><?php the_title(); ?></li>
                </ul>
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </section>
    <!-- page-title end -->
            <?php
        }
     }
     ?>

     
     <!-- Portfolio details Start -->
    <section class="portfolio-details">
        <div class="auto-container">
            <div class="details-image-box">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/gallery/details-image-one.png" alt="">
            </div>
            <div class="medium-container">
                <div class="categore-items">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="category-details one">
                                <h4>Client:</h4>
                                <p>Adam Smith</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="category-details two">
                                <h4>Category:</h4>
                                <p>UI/UX design</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="category-details three">
                                <h4>Duration:</h4>
                                <p>05 Weeks</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="category-details four">
                                <h4>Website Link:</h4>
                                <p>example@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-box">
                <h2>Project overview</h2>
                <p>Mobile UX design is the design of user experiences for hand-held and wearable devices. Designers create solutions (typically applications) to meet mobile users’ unique requirements and restrictions. Designers focus on accessibility, discoverability and efficiency to optimize on-the-go interactive experiences.</p>
                <p>User Interface (UI) determines how the app will look like, while UX determines what problem it will solve in the users’ life. UI is revolves around visually directing the user about the app interface, while UX includes researching, testing, developing the app.</p>
            </div>
            <div class="text-box-two">
                <h4>What we did for this project</h4>
                <p>Mobile UX design is the design of user experiences for hand-held and wearable devices. Designers create solutions (typically applications) to meet mobile users’ unique requirements and restrictions. Designers focus on accessibility, discoverability and efficiency to optimize on-the-go interactive experiences.</p>
                <ul class="list-icons">
                    <li><i class="icon-5"></i><span>Flexible Solution</span></li>
                    <li><i class="icon-5"></i><span>Constant Updates</span></li>
                    <li><i class="icon-5"></i><span>Accounting Entry Methods</span></li>
                </ul>
            </div>
            <div class="text-box-two">
                <h4>Project results</h4>
                <p>The UI/UX design of software and applications helps improve customer experience and satisfaction. This ultimately helps increase the number of people using your product. If users encounter roadblocks when trying to complete actions on your product, they are very likely to drop off.</p>
                <p>Creating a brand with clear and targeted messaging was crucial in increasing conversions. Together with the Webflow team, we have compiled a new product page structure using the App model and packed that in an excellent cover.</p>
            </div>
        </div>
    </section>
    <!-- Portfolio details End -->




<?php get_footer(); ?>