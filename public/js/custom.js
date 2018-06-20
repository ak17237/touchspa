$(document).ready(function(){
    $("#lenguageSwitcher").change(function(){
        var locale = $(this).val();
        var _token = $("input[name=_token]").val();
        
        $.ajax({
            url: "/lenguage",
            type: 'POST',
            data: {locale: locale,_token:_token},
            datatype:'json',
            sucsess:function(data){},
            error: function(data){},
            beforeSend: function(){},
            complete: function(){
                window.location.reload(true);
            }
        });       
    });
});

