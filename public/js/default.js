$(document).ready(function(){
    
    
    //Form validation
    $('form').submit(function(e){
        e.preventDefault();
        
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
           url:  $('form').attr('action'),
           data: $('form').serialize(),
           success: function(msg){
             alert( "Data Saved: " + msg );
           }
        });
    });
});
