<!-- Modal -->
    <div class="modal fade" id="orderRingModal" tabindex="-1" aria-labelledby="orderRingModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="h5 modal-title" id="orderRingModalLabel"><?php _e('Order ring', 'lasertag');?></div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="contact">
                        <div id="sendMessage2">
                            <form role="form" class="php-email-form">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="name" placeholder="<?php _e('Name', 'lasertag');?>" required="">
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="contact" placeholder="<?php _e('Phone or Email', 'lasertag');?>" required="">
                                </div>
                                <div class="form-group mt-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="consent-checkbox2" name="agree" checked="" required="">
                                        <label class="form-check-main_privace_policy_text" for="consent-checkbox2"><?php _e('I agree with', 'lasertag');?> <a href="/privacy-policy/" target="_blank"> <?php _e('personal data processing', 'lasertag');?></a></label>
                                    </div>
                                </div>
                                <div class="text-center mt-3"><button type="submit"><?php _e('Order ring', 'lasertag');?></button></div>
                            </form>
                            <div class="my-3">
                                <div class="error-message"></div>
                                <div class="sent-message"></div>
                            </div>
                        </div>
                    </div>
                </div>
      
            </div>
        </div>
    </div>