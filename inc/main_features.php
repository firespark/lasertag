<!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="section-title">
                    <span><?php echo $mainFieldsArr['features_title'];?></span>
                    <div class="h2"><?php echo $mainFieldsArr['features_title'];?></div>
                    <p><?php echo $mainFieldsArr['features_description'];?></p>
                </div>

                <div class="row">
                    <?php if(!empty($mainFieldsArr['features'])):?>
                    <?php foreach($mainFieldsArr['features'] as $feature):?>
                    <div class="col-lg-4 mt-4" data-aos="fade-up">
                        <div class="box">
                            <span><img src="<?php echo $feature['img']['url'];?>" class="img-fluid" alt="<?php echo $feature['img']['alt'];?>"></span>
                            <div class="h4"><?php echo $feature['title'];?></div>
                            <p><?php echo $feature['description'];?></p>
                        </div>
                    </div>

                    <?php endforeach;?>
                    <?php endif;?>

                </div>

            </div>
        </section><!-- End Why Us Section -->