validation = {
    
    checkSubmitData: function(){
        $('button[id="submit"]').click(function(e){
            e.preventDefault();
            var is_error = false;
            var form = $(this).parents('form');
            form.find('input[type="text"]').each(function(){
                var input = $(this);
                if(input.val() == ""){
                    is_error = true;
                    input.addClass('error');
                }
            });
            if(! is_error)
                form.find('#send').click();
        });
    },
      
    checkInputs: function(){
        $('input').keypress(function(){
            $(this).removeClass('error');
        });
    },
}
$(function(){
    validation.checkSubmitData();
    validation.checkInputs();
});
