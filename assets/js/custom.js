function sendAjaxFilesMessage(blockSelector, method){
    const form = $(blockSelector + " form");
    $(blockSelector +' .error-message').hide().text('');
    $(blockSelector +' .sent-message').hide().text('');

    let str = form.serialize();
    str += '&action=' + method;

    $.ajax({
        type: 'POST',
        url: adminAjaxObj.ajaxUrl,
        dataType: 'json',
        data: str,
        success: function(data) {
            if(data.success == true) {
              
              form.hide();
              
              $(blockSelector +' .sent-message').fadeIn().html(data.output);

            }
            else {
                  
                $(blockSelector +' .error-message').fadeIn().html(data.output);                        
            }
        }
    });
  
}

jQuery(document).ready(function ($) {

    $('#sendMessage form').submit(function(e) {
        e.preventDefault();
        sendAjaxFilesMessage('#sendMessage', 'send_message');
      
    });
    $('#sendMessage2 form').submit(function(e) {
        e.preventDefault();
        sendAjaxFilesMessage('#sendMessage2', 'send_message');
      
    });


});