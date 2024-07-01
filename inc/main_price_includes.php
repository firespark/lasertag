<!-- ======= Price Includes Section ======= -->
        <section id="price-includes" class="why-us">
            <div class="container">

                <div class="section-title">
                    <span><?php echo $mainFieldsArr['price_includes_title'];?></span>
                    <div class="h2"><?php echo $mainFieldsArr['price_includes_title'];?></div>
                    <p><?php echo $mainFieldsArr['price_includes_description'];?></p>
                </div>

                <div class="row">
                    <?php if(!empty($mainFieldsArr['price_includes'])):?>
                    <?php foreach($mainFieldsArr['price_includes'] as $price_include):?>
                    <div class="col-lg-4 mt-4" data-aos="fade-up">
                        <div class="box">
                            <span><img src="<?php echo $price_include['img']['url'];?>" alt="<?php echo $price_include['img']['alt'];?>" class="img-fluid"></span>
                            <div class="h4"><?php echo $price_include['title'];?></div>
              
                        </div>
                    </div>

                    <?php endforeach;?>
                    <?php endif;?>

                </div>

            </div>
        </section><!-- End Main Price Includes Section -->