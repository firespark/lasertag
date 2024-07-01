<!-- ======= Suitable Section ======= -->
        <section id="suitable" class="team">
            <div class="container">

                <div class="section-title">
                    <span><?php echo $mainFieldsArr['suitable_title'];?></span>
                    <div class="h2"><?php echo $mainFieldsArr['suitable_title'];?></div>
                    <p><?php echo $mainFieldsArr['suitable_description'];?></p>
                </div>

                <div class="row">
                    <?php if(!empty($mainFieldsArr['suitables'])):?>
                    <?php foreach($mainFieldsArr['suitables'] as $suitable):?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                        <div class="member">
                            <img src="<?php echo $suitable['img']['url'];?>" alt="<?php echo $suitable['img']['alt'];?>">
                            <div class="h4"><?php echo $suitable['title'];?></div>
              
                            <p><?php echo $suitable['description'];?></p>
              
                        </div>
                    </div>

                    <?php endforeach;?>
                    <?php endif;?>

                </div>

            </div>
        </section><!-- End Suitable Section -->