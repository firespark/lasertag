<?php

get_header();
the_post();

$fieldsArr = get_fields();

?>
        
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <?php custom_breadcrumbs();?>

                <h1>404</h1>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">

            <?php _e('Page not found', 'lasertag');?>
        </div>
        </section>

    </main><!-- End #main -->


<?php

get_footer();

?>