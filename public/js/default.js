$(document).ready(function(){
    
    
    //Form validation
    $('form').submit(function(e){
        
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
    });
});
