
/*--------------------------------------------------------------
# Register Form
--------------------------------------------------------------*/

$(function(){
    $("#register_form").submit(function(evt){
        evt.preventDefault(); //Prevent the form from submitting
        var formAction = $(this).attr('action');
        var postData = $(this).serialize();
        
        $.post(formAction, postData, function(o){
            
        }, 'json');
    });
});

