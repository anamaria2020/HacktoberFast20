$(function(){
    $("#contact-form").submit(function(e){
        e.preventDefault();
        
        $form = $(this);
        
        $.post(document.location.url, $(this).serialize(), function(data){
           $feedback = $("<div>").html(data).find(".form-feedback").hide();
           
           $form.prepend($feedback)[0].reset();
            $feedback.fadeIn(1500);
        });
    });
})