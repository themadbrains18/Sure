<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta property="og:image" content="<?php echo TEMPLATE_URL; ?>/images/sure.jpg">
    <?php wp_head(); ?>
    
    <link rel="canonical" href="<?php echo site_url(); ?>">
    <!-- <link rel="icon" href="<?php echo TEMPLATE_URL; ?>/images/favicon.png" type="image/png" sizes="72x72"> -->

    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>/css/font-awesome.min.css">
    <!-- Animate CSS File -->
    <link rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>/css/animate.min.css">
    <!-- Cube Portfolio CSS File -->
    <link rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>/css/cubeportfolio.min.css">
    <!-- Fancy Box CSS File -->
    <link rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>/css/jquery.fancybox.min.css">
    <!-- Revolution Slider CSS Files -->
    <link rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>/css/navigation.css">
    <link rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>/css/settings.css">
    <!-- Swiper CSS File -->
    <link rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>/css/swiper.min.css">
    <!-- Owl Carousel CSS Files -->
    <link rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>/css/owl.theme.default.min.css">
    <!-- Style CSS File -->
    <link rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>/css/before-after-img.css">
    <!-- Style CSS File -->
    <link rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>/css/style.css">
    <!-- Custom Style CSS File -->
    <link rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>/css/custom.css">
    <link rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>/css/sure-main.css">

    <script type="text/javascript">
        var template_path = '<?php echo TEMPLATE_URL; ?>';
        var site_url = '<?php echo site_url(); ?>';
    </script>

</head>
<body data-spy="scroll" data-target=".navbar-nav" data-offset="90">

<!-- Loader -->
<div class="loader" id="loader-fade">
    <div class="loader-container center-block">
        <div class="grid-row">
            <div class="col center-block">
                <ul class="loading reversed">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Loader ends -->

