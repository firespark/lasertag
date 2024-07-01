<!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <span><?php echo $mainFieldsArr['services_title'];?></span>
                    <div class="h2"><?php echo $mainFieldsArr['services_title'];?></div>
                    <p><?php echo $mainFieldsArr['services_description'];?></p>
                </div>

                <div class="row">
                    <?php if(!empty($mainFieldsArr['services'])):?>
                    <?php foreach($mainFieldsArr['services'] as $service):?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-check"></i></div>
                            <div class="h4"><?php echo $service['title'];?></div>
                            <p><?php echo $service['description'];?></p>
                        </div>
                    </div>

                    <?php endforeach;?>
                    <?php endif;?>

                </div>
            </div>
        </section><!-- End Services Section -->