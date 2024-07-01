<!-- ======= Cta Section ======= -->
        <section id="cta" class="cta" style="background: linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo $mainFieldsArr['cta_img']['url'];?>') fixed center center;">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <div class="h3"><?php echo $mainFieldsArr['cta_title'];?></div>
                    <p><?php echo $mainFieldsArr['cta_description'];?></p>
                    <?php if($mainFieldsArr['cta_order_text']):?>
                    <a class="cta-btn" href="#" data-bs-toggle="modal" data-bs-target="#orderRingModal"><?php echo $mainFieldsArr['cta_order_text'];?></a>
                    <?php endif;?>
                </div>

            </div>
        </section><!-- End Cta Section -->