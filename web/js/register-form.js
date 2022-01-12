(function ($) {

    "use strict";

    $('#register').click(function(e) {
        e.preventDefault();
        saveRegister();
    });

    function saveRegister(){
        var name        = $("#full-name").val();
        var phone       = $("#phone").val();

        var dataString = 'name='+name+'&phone='+phone;

        if ( (name.length > 1) || (phone.length > 1) ) {
            $.ajax({
                type: "POST",
                url: "index.php?r=forms/register",
                data: dataString,
                success: function (data) {
                    if(data==200){
                        $('.successContent').fadeIn(1000);
                        $('.errorContent').fadeOut(500);
                        deleteValues();
                        return true;
                    }else{
                        $('.errorContent').fadeIn(1000);
                        $('.successContent').fadeOut(500);
                        return false;
                    }
                },
                error: function (exception,data) {
                    $('.errorContent').fadeIn(1000);
                    $('.successContent').fadeOut(500);
                    return false;
                }
            });
        } else {
            $('.errorContent').fadeIn(1000);
            $('.successContent').fadeOut(500);
            return false;
        }
    }

    function deleteValues(){
        $("#full-name").val("");
        $("#phone").val("");
    }

})(jQuery);


