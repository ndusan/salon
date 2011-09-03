$(document).ready(function(){
    
    
    //Form validation
    $('form').submit(function(e){
        e.preventDefault();
        var formName = $(this).attr('id');
        
        var allOk = true;
        $('.required').each(function(){
            if($(this).val().length<=0){
                $(this).addClass('warning');
                allOk = false;
            }else{
                $(this).removeClass('warning');
            }
        });
        
        if(!allOk) return false; 
        
        $.ajax({
           type: "POST",
           url:  $('#'+formName).attr('action'),
           data: $('#'+formName).serialize(),
           success: function(data){
             var resClass='error';
             if(data.error != true){
                 //Reset fields
                 $('#'+formName).find('input[type="text"]').val('');
                 $('#'+formName).find('textarea').val(''); 
                 resClass = 'success';
             }else if(data.error == true){
                 //Error
                 resClass = 'error';
             }
             //Show message
             $('#'+formName).append('<div class="message '+resClass+'">'+data.msg+'</div>');
             setTimeout(function () {
                $('.message').fadeOut(function(){
                    $(this).remove();
                });
             }, 1000);
           }
        });
    });
    
    
    //Toggle form
    $('.toggle-form').click(function(e){
        e.preventDefault();
        
        //Check stage
        var toggleID = $(this).attr('rel');
        var stage = $('#'+toggleID).attr('title');
        
        if(stage == 'hide'){
            //Show specific div
            $('#'+toggleID).slideDown().attr('title', 'show');
            
        }else if(stage == 'show'){
            //Hide speficic div
            $('#'+toggleID).slideUp().attr('title', 'hide');
        }
    });
    
    
    //News
    $('#news').bxSlider({
        mode: 'vertical',
        pager: false,
        controls: false,
        auto: true,
        autoHover: true,
        speed: 1000,
        pause: 8000
    });
});
