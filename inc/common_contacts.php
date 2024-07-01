<!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <span><?php echo $mainFieldsArr['contacts_title'];?></span>
                    <div class="h2"><?php echo $mainFieldsArr['contacts_title'];?></div>
                    <p><?php echo $mainFieldsArr['contacts_description'];?></p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <div class="h3"><?php _e('Address', 'lasertag');?></div>
                            <p><?php echo $optionsArr['main_address'];?></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <div class="h3"><?php _e('Email', 'lasertag');?></div>
                            <p><a href="mailto:<?php echo $optionsArr['main_email'];?>"><?php echo $optionsArr['main_email'];?></a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <div class="h3"><?php _e('Phone', 'lasertag');?></div>
                            <p><a href="tel:<?php echo get_numbers_from_str($optionsArr['main_phone']);?>"><?php echo $optionsArr['main_phone'];?></a></p>
                        </div>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">

                    <div class="col-lg-6 ">
                        <?php echo $mainFieldsArr['contacts_map'];?>
                    </div>

                    <div class="col-lg-6">
                        <div id="sendMessage">
                            <form role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" placeholder="<?php _e('Name', 'lasertag');?>" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="text" class="form-control" name="contact" placeholder="<?php _e('Phone or Email', 'lasertag');?>" required>
                                    </div>
                                </div>
                
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="<?php _e('Message', 'lasertag');?>" required></textarea>
                                </div>
                                <div class="form-group mt-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="consent-checkbox" name="agree" checked="" required="">
                                        <label class="form-check-main_privace_policy_text" for="consent-checkbox"><?php _e('I agree with', 'lasertag');?> <a href="/privacy-policy/" target="_blank"> <?php _e('personal data processing', 'lasertag');?></a></label>
                                    </div>
                                </div>
                                
                                <div class="text-center mt-3"><button type="submit"><?php _e('Send', 'lasertag');?></button></div>
                            </form>
                            <div class="my-3">
                                <div class="error-message"></div>
                                <div class="sent-message"></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->