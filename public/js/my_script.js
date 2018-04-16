$(document).ready(function(){

    $(document).mouseleave(function(){$('#cls_ctnr').show();});

    function makeid()
    {
        var text = "";
        var possible = "abcdefghijklmnopqrstuvwxyz";
        for( var i=0; i < 5; i++ )
            text += possible.charAt(Math.floor(Math.random() * possible.length));
        return text;
    }

    $(".left_adv").hover(function() {
        $(this).toggleClass("left_a");
        var price = $(this).html();
        var res = price / 100 * 10;
        $(this).html(res);
        $('.left_a').after('<div style="padding-left: 30px; width: 80%;"><p class="discount" style="border-radius: 5px; text-align: justify; background: white;">Купон на скидку  - '+ makeid() +'  – примените и получите скидку 10%</p></div>');
    }, function(){
        $(this).toggleClass();
        $(this).html('1000');
        $(".discount").remove()

        $(".right_adv").hover(function() {
            $(this).toggleClass("right_a");
            var price = $(this).html();
            var res = price / 100 * 10;
            $(this).html(res);
            $('.right_a').after('<div style="padding-left: 30px; width: 80%;"><p class="discount" style="border-radius: 5px; text-align: justify; background: white;">Купон на скидку  - '+ makeid() +'  – примените и получите скидку 10%</p></div>');
        }, function(){
            $(this).toggleClass();
            $(this).html('1000');
            $(".discount").remove()
    });

    }, function(){
        $(this).toggleClass();
        $(this).html('1000');
    });
});


// Уже уходите?
// А у нас еще много всякого интересного!!!