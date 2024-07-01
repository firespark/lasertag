<!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="section-title">
                    <span><?php echo $mainFieldsArr['about_title'];?></span>
                    <div class="h2"><?php echo $mainFieldsArr['about_title'];?></div>
                    <p><?php echo $mainFieldsArr['about_description'];?></p>
                </div>
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                        <?php if($mainFieldsArr['about_img']['url']):?>
                        <img src="<?php echo $mainFieldsArr['about_img']['url'];?>" class="img-fluid" alt="<?php echo $mainFieldsArr['about_img']['alt'];?>">
                        <?php endif;?>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                        <?php echo $mainFieldsArr['about_content'];?>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->