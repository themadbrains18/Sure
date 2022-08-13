<?php get_header(); ?>

<!-- Header start -->
<header class="cursor-light">
    <nav class="navbar navbar-top-default navbar-expand-lg static-nav transparent-bg black nav-bottom-line">
        <div class="container">
            <a class="logo link absoulteLogo" href="<?php echo site_url(); ?>">
                <img src="<?php echo TEMPLATE_URL; ?>/images/partners/p12.svg" alt="logo" title="Logo" class="logo-default">
                <img src="<?php echo TEMPLATE_URL; ?>/images/partners/p12.svg" alt="logo" title="Logo" class="logo-scrolled">
            </a>
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"> <a href="<?php echo site_url(); ?>/#home" class="scroll nav-link link">Home</a></li>
                    <li class="nav-item"> <a href="<?php echo site_url(); ?>/#about" class="scroll nav-link link">About</a></li>
                    <li class="nav-item"> <a href="<?php echo site_url(); ?>/#partners" class="scroll nav-link link">Partners</a></li>
                    <li class="nav-item"> <a href="<?php echo site_url(); ?>/#goals" class="scroll nav-link link">Goals</a></li>
                    <li class="nav-item"> <a href="<?php echo site_url(); ?>/#signatories" class="scroll nav-link link">Signatories</a></li>
                    <li class="nav-item"> <a href="<?php echo site_url(); ?>/#events" class="scroll nav-link link">Highlights</a></li>
                    <li class="nav-item"> <a href="<?php echo site_url(); ?>/#blog" class="scroll nav-link link">Media</a></li>
                    <li class="nav-item"> <a href="<?php echo site_url(); ?>/#clients" class="scroll nav-link link">Industry Speaks</a></li>
                    <li class="nav-item"> <a href="<?php echo site_url(); ?>/#contact" class="scroll nav-link link">Contact</a></li>
                </ul>
                <!-- <ul class="nav navbar-nav ">
                    
                </ul> -->
            </div>

            <!-- side menu open button -->
            <a class="menu_bars d-inline-block menu-bars-setting animated-wrap" id="sidemenu_toggle">
                <div class="menu-lines animated-element">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </div>
    </nav>

    <!-- Side Menu -->
    <div class="side-menu d-none">
        <div class="inner-wrapper nav-icon">
            <span class="btn-close link" id="btn_sideNavClose"></span>
            <nav class="side-nav w-100">
                <div class="navbar-nav">
                    <a class="nav-link link scroll active" href="<?php echo site_url(); ?>/#home">Home</a>
                    <a class="nav-link link scroll" href="<?php echo site_url(); ?>/#about">About</a>
                    <a class="nav-link link scroll" href="<?php echo site_url(); ?>/#partners">Partners</a>
                    <a class="nav-link link scroll" href="<?php echo site_url(); ?>/#goals">Goals</a>
                    <a class="nav-link link scroll" href="<?php echo site_url(); ?>/#signatories">Signatories</a>
                    <a class="nav-link link scroll" href="<?php echo site_url(); ?>/#events">Highlights</a>
                    <a class="nav-link link scroll" href="<?php echo site_url(); ?>/#blog">Media</a>
                    <a class="nav-link link scroll" href="<?php echo site_url(); ?>/#clients">Industry Speaks</a>
                    <a class="nav-link link scroll" href="<?php echo site_url(); ?>/#contact">Contact</a>
                    <span class="menu-line"><i class="ti ti-angle-right" aria-hidden="true"></i></span>
                </div>
            </nav>

        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!--Side Menu-->
</header>
<!-- Header end -->


<!-- Blog starts -->
<section class="bg-light-gray text-left eventdetailsection">
     <div class="container">
       <div class="row">
         <div class="col col-lg-1"></div>

           <!-- Blog Left Listing -->
         <div class="col-lg-10 col-md-12">
             <div class="blog-box heading-space m-md-0">
                 <!-- Blog List Inner -->
                 <div class="blog-listing-inner news_item">
                     <div class="news_desc">
                         <h3 class="text-capitalize font-weight-500 mb-50px"><a href="javascript:void(0);" class="color-black"><?php echo the_title(); ?></a></h3>
                         <ul class="meta-tags mt-20px mb-20px">
                         </ul>

                         <?php if ( have_rows( 'about_images' ) ) : ?>
                         <div class="team-classic1 owl-about owl-carousel wow owl-eventdetail fadeInUp">

                            <?php while ( have_rows( 'about_images' ) ) : the_row(); ?>
                            <?php $thumbnail_image = get_sub_field( 'thumbnail_image' ); ?>
                            <?php $image = get_sub_field( 'image' ); ?>

                                <?php if( !empty( get_sub_field( 'external_url' ) ) ): ?>
                                    <div class="item">
                                        <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                                            <div class="image"> <!--  -->
                                                <a href="<?php the_sub_field( 'external_url' ); ?>" class="" target="_blank">
                                                    <img src="<?php echo esc_url( $thumbnail_image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" class="img-responsive" data-no-retina>
                                                </a>
                                            </div>
                                            <div class="team-classic-content">
                                                <h4 class="carouselitemshadow color-black font-weight-normal m-0 text-capitalize pl-2"><?php the_sub_field( 'title' ); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php elseif( !empty( get_sub_field( 'image' ) ) ): ?>
                                    <div class="item">
                                        <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                                            <div class="image ">
                                                 <a data-fancybox="" href="<?php echo esc_url( $image['url'] ); ?>" class="">
                                                    <img src="<?php echo esc_url( $thumbnail_image['url'] ); ?>" alt="<?php echo esc_attr( $thumbnail_image['alt'] ); ?>" class="img-responsive" data-no-retina>
                                                 </a>
                                            </div>
                                             <a data-fancybox="" href="<?php echo esc_url( $image['url'] ); ?>" class="video-play-button position-absolute video-center">
                                                <i class="ti ti-control-play"></i>
                                            </a>
                                            <div class="team-classic-content">
                                                <h4 class="carouselitemshadow color-black font-weight-normal m-0 text-capitalize"><?php the_sub_field( 'title' ); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="item">
                                        <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                                            <div class="image ">
                                                 <a data-fancybox="" href="<?php the_sub_field( 'youtube_url' ); ?>" class="">
                                                    <img src="<?php echo esc_url( $thumbnail_image['url'] ); ?>" alt="<?php echo esc_attr( $thumbnail_image['alt'] ); ?>" class="img-responsive" data-no-retina>
                                                 </a>
                                            </div>
                                             <a data-fancybox="" href="<?php the_sub_field( 'youtube_url' ); ?>" class="video-play-button position-absolute video-center">
                                                <i class="ti ti-control-play"></i>
                                            </a>
                                            <div class="team-classic-content">
                                                <h4 class="carouselitemshadow color-black font-weight-normal m-0 text-capitalize"><?php the_sub_field( 'title' ); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                            <?php endwhile; ?>

                         </div>
                         <?php else : ?>
                            <?php // no rows found ?>
                         <?php endif; ?>

                         <br>
                         
                         <?php echo the_content(); ?>

                     </div>

                 </div>
             </div>
         </div>

         <div class="col col-lg-1"></div>

         <!-- Related Events start -->
         <?php 
         $args = array( 
                 'post_type'       => 'post',
                 'orderby'         => 'modified', //date
                 'order'           => 'DESC',
                 'category_name'   => 'events',
                 'posts_per_page'  => 99,
                 'offset'          => 0,
                 'post__not_in'    => array($post->ID)
             );
         $results = new WP_Query($args);
         if($results->have_posts()): ?>

         <section class="surePadding eventdetailrelated">
             <h2 class="d-none">heading</h2>
             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="main-title wow fadeIn" data-wow-delay="300ms">
                            <!--  <h5>  Read our blogs </h5> -->
                             <h3> Related Highlights </h3>
                             <!-- <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus.                    </p> -->
                         </div>
                     </div>
                 </div>
                 <div class="row">

                    
                        <?php while($results->have_posts()): $results->the_post(); ?>
                        <?php $featuredimage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                        <div class="col-md-4 col-sm-12 single_event_main">
                            <div class="news_item shadow blog-one">
                                <div class="image split-blog-scale">
                                    <img src="<?php echo $featuredimage; ?>" alt="" class="img-fluid">
                                </div>
                                <div class="news_desc">
                                    <h3 class="text-capitalize line-height-normal equalheight">
                                        <a href="<?php the_permalink(); ?>" class="color-black"><?php the_title(); ?></a>
                                    </h3>
                                   <!--  <p class="mb-35px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p> -->
                                    <a href="<?php the_permalink(); ?>" class="btn-setting btn-hvr-setting-main btn-yellow text-white btn-hvr">Read more
                                        <span class="btn-hvr-setting btn-hvr-summer-sky">
                                     <span class="btn-hvr-setting-inner">
                                     <span class="btn-hvr-effect"></span>
                                     <span class="btn-hvr-effect"></span>
                                     <span class="btn-hvr-effect"></span>
                                     <span class="btn-hvr-effect"></span>
                                     </span>
                                    </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>

                 </div>
             </div>
         </section>

         <?php endif; wp_reset_query(); ?>
         <!-- Events ends -->

       </div>
     </div>
</section>
<!-- Blog ends -->

<?php get_footer(); ?>
