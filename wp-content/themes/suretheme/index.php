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
                    <li class="nav-item"> <a href="#home" class="scroll nav-link link">Home</a></li>
                    <li class="nav-item"> <a href="#about" class="scroll nav-link link">About</a></li>
                    <li class="nav-item"> <a href="#partners" class="scroll nav-link link">Partners</a></li>
                    <li class="nav-item"> <a href="#goals" class="scroll nav-link link">Goals</a></li>
                    <li class="nav-item"> <a href="#signatories" class="scroll nav-link link">Signatories</a></li>
                    <li class="nav-item"> <a href="#events" class="scroll nav-link link">Highlights</a></li>
                    <li class="nav-item"> <a href="#blog" class="scroll nav-link link">Media</a></li>
                    <li class="nav-item"> <a href="#clients" class="scroll nav-link link">Industry Speaks</a></li>
                    <li class="nav-item"> <a href="#contact" class="scroll nav-link link">Contact</a></li>
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
                    <a class="nav-link link scroll active" href="#home">Home</a>
                    <a class="nav-link link scroll" href="#about">About</a>
                    <a class="nav-link link scroll" href="#partners">Partners</a>
                    <a class="nav-link link scroll" href="#goals">Goals</a>
                    <a class="nav-link link scroll" href="#signatories">Signatories</a>
                    <a class="nav-link link scroll" href="#events">Highlights</a>
                    <a class="nav-link link scroll" href="#blog">Media</a>
                    <a class="nav-link link scroll" href="#clients">Industry Speaks</a>
                    <a class="nav-link link scroll" href="#contact">Contact</a>
                    <span class="menu-line"><i class="ti ti-angle-right" aria-hidden="true"></i></span>
                </div>
            </nav>

        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!--Side Menu-->
</header>
<!-- Header end -->

<!-- Slider start -->
<?php if ( have_rows( 'main_slider' ) ) : ?>
<section id="home" class="p-0 no-transition cursor-light">
    <h2 class="d-none">heading</h2>
    <!--Main Slider-->
    <div id="rev_slider_346_1_wrapper" class="rev_slider_wrapper fullscreen-container two-images bg-dark" data-alias="beforeafterslider1" data-source="gallery">
        <!-- START REVOLUTION SLIDER 5.4.3.3 fullscreen mode -->
        <div id="main-slider-four" class="rev_slider fullscreenbanner" data-version="5.4.8.1">
            <ul>

            	<?php $i=1; ?>
            	<?php while ( have_rows( 'main_slider' ) ) : the_row(); ?>
            		<?php $slider = get_sub_field( 'slider' ); ?>
            		<?php if ( $slider ) : ?>

            			<li data-index="rs-<?php echo 965+$i; ?>" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
            			    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
            			    data-thumb="<?php echo esc_url( $slider['url'] ); ?>" data-rotate="0" data-saveperformance="off"
            			    data-title="Slide" data-param1="0<?php echo $i; ?>" data-param2="" data-param3="" data-param4="" data-param5=""
            			    data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
            			    <!-- MAIN IMAGE -->
            			    <img src="<?php echo esc_url( $slider['url'] ); ?>" alt="" data-bgposition="center center" data-kenburns="on">
            			    <!-- LAYERS -->
            			</li>

            		<?php $i++; ?>
            		<?php endif; ?>
            	<?php endwhile; ?>
                
            </ul>
            <div class="tp-bannertimer tp-bottom hidden"></div>
        </div>
    </div>
    <!--Main Slider ends -->   
</section>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
<!-- Slider end -->


<!-- About Title start -->
<section id="about" class="sureAboutWrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                   <!--  <h5> ABOUT </h5> -->
                    <h2> ABOUT </h2>
                    <p><?php the_field( 'about_text' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Title ends -->


<!-- About Content start -->
<?php if ( have_rows( 'about_images' ) ) : ?>
<section class="sureAboutVideoWrapper">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="team-classic1 owl-about owl-carousel wow fadeInUp">

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
            </div>
        </div>
    </div>
</section>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
<!-- About Content ends -->




<!-- Partners start -->

<section id="partners" class="bg-light-gray">
    <div class="container">
        <div class="row wow fadeIn" data-wow-delay="300ms">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <!-- <h5> Heros of our company </h5> -->
                    <h2> Partners </h2>
                    <p><?php the_field( 'partners_text' ); ?></p>
                </div>
            </div>
        </div>
        <div class="row">

            <ul class="partnersLogoWrapper">
                
                <?php if ( have_rows( 'partners_logo_line_1' ) ) : ?>
                <?php while ( have_rows( 'partners_logo_line_1' ) ) : the_row(); ?>
                    <?php 
                        $logo = get_sub_field( 'logo' );
                        $link_url = get_sub_field( 'link_url' ); 
                        $text = get_sub_field( 'text' ); 
                    ?>

                    <?php if ( $logo ) : ?>

                    <li class="wow fadeIn" data-wow-delay="300ms">
                        <div class="imgWrapper">
                            <a href="<?php echo !empty( $link_url ) ? $link_url : 'javascript:void(0);'; ?>" <?php echo !empty( $link_url ) ? 'target="_blank"' : ''; ?> >
                                <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
                            </a>
                        </div>
                        <div class="partnerInfo">
                            <p><?php echo $text; ?></p>
                        </div>
                    </li>

                    <?php endif; ?>
                <?php endwhile; ?>

                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>

                
            </ul>
            
        </div>
    </div>
</section>


<?php /* ?>
<section id="partners" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <!-- <h5> Heros of our company </h5> -->
                    <h2> Partners </h2>
                    <p><?php the_field( 'partners_text' ); ?></p>
                </div>
            </div>
        </div>
        <div class="row">

            <?php if ( have_rows( 'partners_logo_line_1' ) ) : ?>
            <div class="signatoriesLogoWrapper">

                <?php while ( have_rows( 'partners_logo_line_1' ) ) : the_row(); ?>
                    <?php $logo = get_sub_field( 'logo' ); ?>
                    <?php $link_url = get_sub_field( 'link_url' ); ?>
                    <?php if ( $logo ) : ?>
                        <div class="item">
                            <a href="<?php echo !empty( $link_url ) ? $link_url : 'javascript:void(0);'; ?>" <?php echo !empty( $link_url ) ? 'target="_blank"' : ''; ?> >
                                <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
                
            </div>
            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>


            <?php if ( have_rows( 'partners_logo_line_2' ) ) : ?>
            <div class="signatoriesLogoWrapper">
                <?php while ( have_rows( 'partners_logo_line_2' ) ) : the_row(); ?>
                    <?php $logo = get_sub_field( 'logo' ); ?>
                    <?php $link_url = get_sub_field( 'link_url' ); ?>
                    <?php if ( $logo ) : ?>
                        <div class="item">
                            <a href="<?php echo !empty( $link_url ) ? $link_url : 'javascript:void(0);'; ?>" <?php echo !empty( $link_url ) ? 'target="_blank"' : ''; ?> >
                                <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
                
            </div>
            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>

            
        </div>
    </div>
</section>
<?php */ ?>
<!-- Partners ends -->





<!-- Goals start -->

<section id="goals" class="bg-light-gray half-section p-0">
    <!-- <h2 class="d-none">heading</h2> -->
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="container">
                <div class="main-title wow fadeIn sureMt" data-wow-delay="300ms">
                   <!--  <h5> ABOUT </h5> -->
                    <h2> GOALS </h2>
                    <!-- <p>SU.RE: Sustainable Resolution is Indian Apparel Industry’s Largest Commitment to Move Towards Sustainable Fashion</p> -->
                </div>
            </div>
            <!-- <div class="col-lg-6 col-md-12 p-0 order-lg-2">
                <div class="hover-effect">
                    <img alt="about" src="<?php echo get_template_directory_uri(); ?>/images/about.jpg" class="about-img">
                </div>
            </div> -->

            <div class="col-lg-12 col-md-12">
                <div class="skill-box container">

                    <?php the_field( 'goals' ); ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Goals ends -->


<!-- Signatories starts -->
<?php if ( have_rows( 'signatories' ) ) : ?>
<section id="signatories">
    <h2 class="d-none">heading</h2>
    <div class="container">
        <div class="main-title mb-5 text-md-center wow fadeIn" data-wow-delay="300ms">
           <!--  <h5> Goals: </h5> -->
            <h2>Signatories</h2>
        </div>

        <?php while ( have_rows( 'signatories' ) ) : the_row(); ?>
        
	        <?php if ( have_rows( 'line_1_logos' ) ) : ?>
	        <div class="signatoriesLogoWrapper wow fadeIn" data-wow-delay="300ms">

	        	<?php while ( have_rows( 'line_1_logos' ) ) : the_row(); ?>
					<?php $logo_image = get_sub_field( 'logo_image' ); ?>
					<?php $logo_link_url = get_sub_field( 'logo_link_url' ); ?>
					<?php if ( $logo_image ) : ?>
			            <div class="item">
			            	<a href="<?php echo !empty( $logo_link_url ) ? $logo_link_url : 'javascript:void(0);'; ?>" <?php echo !empty( $logo_link_url ) ? 'target="_blank"' : ''; ?> >
								<img src="<?php echo esc_url( $logo_image['url'] ); ?>" alt="<?php echo esc_attr( $logo_image['alt'] ); ?>" />
							</a>
			            </div>
					<?php endif; ?>
				<?php endwhile; ?>
	            
	        </div>
	        <?php else : ?>
    			<?php // no rows found ?>
    		<?php endif; ?>


    		<?php if ( have_rows( 'line_2_logos' ) ) : ?>
	        <div class="signatoriesLogoWrapper wow fadeIn" data-wow-delay="300ms">

	            <?php while ( have_rows( 'line_2_logos' ) ) : the_row(); ?>
					<?php $logo_image = get_sub_field( 'logo_image' ); ?>
					<?php $logo_link_url = get_sub_field( 'logo_link_url' ); ?>
					<?php if ( $logo_image ) : ?>
			            <div class="item">
			            	<a href="<?php echo !empty( $logo_link_url ) ? $logo_link_url : 'javascript:void(0);'; ?>" <?php echo !empty( $logo_link_url ) ? 'target="_blank"' : ''; ?> >
								<img src="<?php echo esc_url( $logo_image['url'] ); ?>" alt="<?php echo esc_attr( $logo_image['alt'] ); ?>" />
							</a>
			            </div>
					<?php endif; ?>
				<?php endwhile; ?>
	            
	        </div>
	        <?php else : ?>
    			<?php // no rows found ?>
    		<?php endif; ?>


    		<?php if ( have_rows( 'line_3_logos' ) ) : ?>
	        <div class="signatoriesLogoWrapper wow fadeIn" data-wow-delay="300ms">

	            <?php while ( have_rows( 'line_3_logos' ) ) : the_row(); ?>
					<?php $logo_image = get_sub_field( 'logo_image' ); ?>
					<?php $logo_link_url = get_sub_field( 'logo_link_url' ); ?>
					<?php if ( $logo_image ) : ?>
			            <div class="item">
			            	<a href="<?php echo !empty( $logo_link_url ) ? $logo_link_url : 'javascript:void(0);'; ?>" <?php echo !empty( $logo_link_url ) ? 'target="_blank"' : ''; ?> >
								<img src="<?php echo esc_url( $logo_image['url'] ); ?>" alt="<?php echo esc_attr( $logo_image['alt'] ); ?>" />
							</a>
			            </div>
					<?php endif; ?>
				<?php endwhile; ?>
	            
	        </div>
	        <?php else : ?>
    			<?php // no rows found ?>
    		<?php endif; ?>

        <?php endwhile; ?>
    </div>
</section>
<?php endif; ?>
<!-- Signatories ends -->


<!-- Events start -->
<section id="events" class="bg-light-gray surePadding">
    <h2 class="d-none">heading</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                   <!--  <h5>  Read our blogs </h5> -->
                    <h2> Highlights </h2>
                    <!-- <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus.                    </p> -->
                </div>
            </div>
        </div>
        <div class="row wow fadeIn" data-wow-delay="300ms">

        	<?php 
        	$args = array( 
        			'post_type'       => 'post',
        			'orderby'         => 'modified', //date
        			'order'           => 'DESC',
        			'category_name'   => 'events',
        			'posts_per_page'  => 99,
        			'offset'          => 0,
        		);
        	$results = new WP_Query($args);
        	if($results->have_posts()): while($results->have_posts()): $results->the_post(); ?>
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

            <?php endwhile; endif; wp_reset_query(); ?>


        </div>
    </div>
</section>
<!-- Events ends -->


<!-- Media Title start -->
<section id="blog" class="sureAboutWrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                   <!--  <h5> ABOUT </h5> -->
                    <h2> Media </h2>
                    <!-- <p>SU.RE: Sustainable Resolution is Indian Apparel Industry’s Largest Commitment to Move Towards Sustainable Fashion</p> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Media Title ends -->


<!-- Media Content start -->
<?php if ( have_rows( 'media' ) ) : ?>
<section class="sureAboutVideoWrapper mediawrapper">
    <div class="container">

        <div class="row wow fadeIn" data-wow-delay="300ms">
            <div class="col-sm-12">
                <div class="team-classic1 owl-media owl-carousel wow fadeInUp">

                	<?php while ( have_rows( 'media' ) ) : the_row(); ?>
            		<?php $thumbnail = get_sub_field( 'thumbnail' ); ?>
	                    <div class="item">
	                        <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
	                            <div class="image">
	                                <a target="_blank" href="<?php the_sub_field( 'link' ); ?>" target="_blank">
	                                    <img src="<?php echo esc_url( $thumbnail['url'] ); ?>" alt="<?php echo esc_attr( $thumbnail['alt'] ); ?>" class="img-responsive" data-no-retina>
	                                </a>
	                            </div>
	                            <div class="team-classic-content">
	                                <h4 class="color-black font-weight-normal m-0 text-capitalize pl-2"><?php the_sub_field( 'title' ); ?></h4>
	                            </div>
	                        </div>
	                    </div>
                    <?php endwhile; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
<!-- Media Content ends -->








<!-- Industry speaks start -->
<?php if ( have_rows( 'industry_speaks' ) ) : ?>
<section id="clients" class="bg-white p-0 cursor-light no-transition">
    <h2 class="d-none">heading</h2>
    <div class="section-padding parallax-setting parallaxie parallax1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center wow fadeIn" data-wow-delay="300ms">
                    <h2 class="mb-25px line-height-normal black color-black industryspeaks_title"> INDUSTRY SPEAKS</h2>
                </div>
            </div>

            <div class="row align-items-center position-relative">
                <div class="col-md-12">
                    <div class="owl-carousel owl-industryspeaks testimonial-two  mx-auto wow zoomIn" data-wow-delay="400ms">

	                    <?php while ( have_rows( 'industry_speaks' ) ) : the_row(); ?>	
	                    	<?php $avatar = get_sub_field( 'avatar' ); ?>
	                        <div class="testimonial-item">
	                            <p class="color-black testimonial-para mb-15px"><?php the_sub_field( 'quote' ); ?></p>

	                            <div class="testimonial-post">
	                                <a href="javascript:void(0)" class="post"><img src="<?php echo esc_url( $avatar['url'] ); ?>" alt="image"></a>
	                                <div class="text-content">
	                                    <h5 class="color-black text-capitalize"><?php the_sub_field( 'author' ); ?></h5>
                                        <p><?php the_sub_field( 'designation' ); ?></p>
	                                </div>
	                            </div>
	                        </div>

	                    <?php endwhile; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
<!-- Industry speaker ends -->



<!-- Contact starts -->
<section id="contact" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title contact-title wow fadeIn" data-wow-delay="300ms">
                    <h5> Leave a message </h5>
                    <h2> CONTACT </h2>
                    <p><?php the_field( 'contacts' ); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 contact-form-center wow fadeInUp" data-wow-delay="400ms">

                <div class="col-sm-12 p-0" id="result"></div>

                <div class="company-contact-form">
                    <!-- <form class="contact-form-outer" onsubmit="return false;"> -->
                    	<?php echo do_shortcode('[contact-form-7 id="97" title="Contact Form"]'); ?>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact ends -->


<section class="bg-white">
    <div class="content-setting center-block text-center wow fadeIn" id="mailchimpsubs" data-wow-delay="300ms">
        <h3 class="color-black mb-4">Subscribe Newsletter to get Updates</h3>
        <!-- <p class="color-black mb-4">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin.</p> -->
        <!-- Subscribe Area -->
        <form class="subscribe-two" method="post" action="">
            <div class="input-group newsletterdiv">
                <input type="email" class="form-control" id="email_id_newsletter" placeholder="Your Email Address" required="">
                <?php wp_nonce_field( 'newsletter_mailchimp', 'newsletter_mailchimp_nonce' ); ?>
                <button type="submit" class="btn-setting btn-hvr-setting-main btn-yellow text-white btn-hvr"><b class="font-weight-normal" id="mailchimp_submit">Subscribe</b>
                    <span class="btn-hvr-setting btn-hvr-summer-sky">
                            <span class="btn-hvr-setting-inner">
                                <span class="btn-hvr-effect"></span>
                                <span class="btn-hvr-effect"></span>
                                <span class="btn-hvr-effect"></span>
                                <span class="btn-hvr-effect"></span>
                            </span>
                        </span>
                </button>
            </div>
            <span class="errormsg" id="newsletter_error"></span>
        </form>
    </div>
</section>

<?php get_footer(); ?>
