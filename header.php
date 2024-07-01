<?php
global $optionsArr;
$front_page = is_front_page();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <?php wp_head();?>


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


</head>

<body <?php body_class() ?>>
    <?php wp_body_open(); ?>
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:<?php echo $optionsArr['main_email'];?>"><?php echo $optionsArr['main_email'];?></a>
            </div>
            <div class="social-links d-none d-md-block">

                <i class="bi bi-phone-fill phone-icon"></i><a href="tel:<?php echo get_numbers_from_str($optionsArr['main_phone']);?>"><?php echo $optionsArr['main_phone'];?></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <?php if(isset($optionsArr['main_logo']['url'])):?>
            <a href="/" class="logo"><img src="<?php echo $optionsArr['main_logo']['url'];?>" alt="<?php echo $optionsArr['main_logo']['alt'];?>" class="img-fluid"></a>
            <?php else:?>
            <div class="h1 logo"><a href="/"><?php echo $optionsArr['main_logo_text'];?></a></div>
            <?php endif;?>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/#hero"><?php _e('Home', 'lasertag');?></a></li>
                    <li><a class="nav-link scrollto" href="/#about"><?php _e('What is it', 'lasertag');?></a></li>
                    <li><a class="nav-link scrollto" href="/#why-us"><?php _e('Features', 'lasertag');?></a></li>
                    <li><a class="nav-link scrollto " href="/#suitable"><?php _e('Suitable for', 'lasertag');?></a></li>
                    <li><a class="nav-link scrollto" href="/#pricing"><?php _e('Pricing', 'lasertag');?></a></li>
                    <li><a class="nav-link scrollto" href="/#services"><?php _e('Polygon', 'lasertag');?></a></li>
                    <li><a class="nav-link scrollto" href="/#contact"><?php _e('Contacts', 'lasertag');?></a></li>
                    <li><a href="#" class="btn-buy" data-bs-toggle="modal" data-bs-target="#orderRingModal"><?php _e('Order ring', 'lasertag');?></a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <?php
    if($front_page){
        require_once( __DIR__ . '/inc/main_banner.php');
    }
    ?>
    <main id="main">
    