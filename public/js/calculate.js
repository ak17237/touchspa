jQuery('document').ready(function(){
    
    if($("#type").val() == "yesfees")jQuery('#fevent').hide();
    var sf,cc,result;
    function calculate(s,c){

        var a = $('#quan').val() * $('#amount').val();
        var b,c,d,f;
        a = parseInt(a);
        jQuery('.gross').html(a);
        b = a * 0.03;
        jQuery('.ticket-fee').html(b.toFixed(0));
        c = a * (s/100) + (0.25 * c);
        jQuery('.stripe-total').html(c.toFixed(2));
        d = b + c;
        jQuery('.estimated-fees').html(d.toFixed(2));
        f = a - d;
        jQuery('.estimated-total').html(f.toFixed(2));
    }

    jQuery('#type').change(function(){

        var val = $(this).val();

        if(val == "nofees"){

            jQuery('#con').hide();
            jQuery('#calculation').hide();
            jQuery('#fevent').show();

        }
        else if(val == "yesfees"){

        jQuery('#con').show();
        jQuery('#calculation').show();
        jQuery('#fevent').hide();
    
        }
    });
if($(".money").val() == "Australia" || $(".money").val() == "dollars"){

    jQuery('#currency').val($('#dol').val());
    jQuery(".js-currency").html("$");
    sf = 2.9; cc = 1; result = cc * 25;
    jQuery('.max-fee-per-ticket').html(result.toFixed(2));
    result = 0.25 * cc;
    jQuery('.stripe-per-transaction').html(result.toFixed(2));
    calculate(sf,cc);

}
jQuery('.money').change(function(){

    var val = $(this).val();
    var v1 = $('#dol').val();
    var v2 = $('#pou').val();
    var v3 = $('#eur').val();
   
    if(val == "Australia" || val == "dollars"){

        jQuery('#currency').val(v1);
        jQuery(".js-currency").html("$");
        cc = 1; result = cc * 25;
        jQuery('.max-fee-per-ticket').html(result.toFixed(2));
        result = 0.25 * cc;
        jQuery('.stripe-per-transaction').html(result.toFixed(2));
        if(val == "Australia"){
            
            sf = 2.9;
            jQuery('.stripe-percentage').html(sf);

    }
    calculate(sf,cc);
    }
    else if(val == "Britan" || val == "pound"){

        jQuery('#currency').val(v2);
        jQuery(".js-currency").html("£");
        cc = 0.765834587; result = cc * 25;
        jQuery('.max-fee-per-ticket').html(result.toFixed(2));
        result = 0.25 * cc;
        jQuery('.stripe-per-transaction').html(result.toFixed(2));
        if(val == "Britan"){
            
            sf = 1.4;
            jQuery('.stripe-percentage').html(sf);
            
    }
    calculate(sf,cc);
    }
    
    else if(val == "Germany" || val == "euro"){

        jQuery('#currency').val(v3);
        jQuery(".js-currency").html("€");
        cc = 0.873724908; result = cc * 25;
        jQuery('.max-fee-per-ticket').html(result.toFixed(2));
        result = 0.25 * cc;
        jQuery('.stripe-per-transaction').html(result.toFixed(2));
        if(val == "Germany"){
            
            sf = 1.4;
            jQuery('.stripe-percentage').html(sf);
            
    }
    calculate(sf,cc);
    }
});
  jQuery('.form-control').on('keyup',function(){

    calculate(sf,cc);

  });


});
