<?php

global $optionsArr;
$front_page = is_front_page();
?>
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="">
                            <div class="h4"><?php echo $optionsArr['main_footer_title'];?></div>
                            <p><?php echo $optionsArr['main_footer_text'];?></p>
              
                        </div>
                    </div>

                    <div class="col-md-4 footer-links">

                        <ul>
                            <li><a class="scrollto" href="/#hero">&rsaquo;&nbsp;&nbsp;<?php _e('Home', 'lasertag');?></a></li>
                            <li><a class="scrollto" href="/#about">&rsaquo;&nbsp;&nbsp;<?php _e('What is it', 'lasertag');?></a></li>
                            <li><a class="scrollto" href="/#why-us">&rsaquo;&nbsp;&nbsp;<?php _e('Features', 'lasertag');?></a></li>
                            <li><a class="scrollto" href="/#suitable">&rsaquo;&nbsp;&nbsp;<?php _e('Suitable for', 'lasertag');?></a></li>
                            <li><a class="scrollto" href="/#pricing">&rsaquo;&nbsp;&nbsp;<?php _e('Pricing', 'lasertag');?></a></li>
                            <li><a class="scrollto" href="/#services">&rsaquo;&nbsp;&nbsp;<?php _e('Polygon', 'lasertag');?></a></li>
                            <li><a class="scrollto" href="/#contact">&rsaquo;&nbsp;&nbsp;<?php _e('Contacts', 'lasertag');?></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="">
              
                            <p>
                                <strong><?php _e('Address', 'lasertag');?>:</strong><br>
                                <?php echo $optionsArr['main_address'];?><br>
                                <?php echo $optionsArr['main_city'];?><br><br>
                                <strong><?php _e('Phone', 'lasertag');?>:</strong> <a href="tel:<?php echo get_numbers_from_str($optionsArr['main_phone']);?>"><?php echo $optionsArr['main_phone'];?></a><br>
                                <strong><?php _e('Email', 'lasertag');?>:</strong> <a href="mailto:<?php echo $optionsArr['main_email'];?>"><?php echo $optionsArr['main_email'];?></a><br>
                            </p>
              
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; <?php _e('Copyright', 'lasertag');?> © <?php echo date('Y');?> <?php echo $optionsArr['main_copy'];?>
            </div>
      
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <?php require_once( __DIR__ . '/inc/modal_ring.php');?>

    <?php wp_footer();?>
    
</body>

</html>


