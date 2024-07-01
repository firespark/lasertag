<?php $mainFieldsArr = get_fields();?>
<!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" style="background: url('<?php echo $mainFieldsArr['banner_img']['url'];?>') top center;">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
            <h1><?php echo $mainFieldsArr['banner_title'];?></h1>
            <h2><?php echo $mainFieldsArr['banner_description'];?></h2>
            <?php if($mainFieldsArr['banner_order_text']):?>
            <a href="#" class="btn-get-started scrollto" data-bs-toggle="modal" data-bs-target="#orderRingModal"><?php echo $mainFieldsArr['banner_order_text'];?></a>
            <?php endif;?>
        </div>
    </section><!-- End Hero -->