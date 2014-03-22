jQuery.fn.ForceNumericOnly = function() {
    return this.each(function() {
        $(this).keydown(function(e) {
            var key = e.charCode || e.keyCode || 0;
            return (
                key == 8 || 
                key == 9 ||
                key == 46 ||
                key == 173 ||
                key == 190 ||
                key == 110 ||
                key == 189 ||
                (key >= 37 && key <= 40) ||
                (key >= 48 && key <= 57) ||
                (key >= 96 && key <= 105));
        });
    });
};

validation = {
    
    checkSubmitData: function(){
        $('button[id="send"]').click(function(e){
            e.preventDefault();
            var is_error = false;
            var form = $(this).parents('form');
            form.find('input.required').each(function(){
                var input = $(this);
                if(input.val() == ""){
                    is_error = true;
                    input.addClass('error');
                }
            });
            if(! is_error){
                $("#show_progress").show();
                $("#submit").click();
            }
        });
    },
      
    checkInputs: function(){
        $('input').keypress(function(){
            $(this).removeClass('error');
        });
    },
            
    checkMiniInput: function(){
        $('.input-mini').click(function(){
            $(this).ForceNumericOnly();
        });
    }
}
$(function(){
    validation.checkSubmitData();
    validation.checkInputs();
    validation.checkMiniInput();
});
