$('#slider').slider();
$(document).ready(function ($) {
    $('#number').html('Number of missions: ' + $('#slider').val());
    $('#price').html('Price: '+ getPrice() +'€')
    extra();
})

$('#slider').on('slide',function(){
    $('#number').html('Number of missions: ' + $('#slider').val());
    $('#price').html('Price: '+ getPrice() +'€');
    extra();
})

function getPrice() {
    return parseInt($('#slider').val())*10;
}
function extra()
{
    var price = getPrice();
    var extra = price + (price * 0.15);
    $("#extraval").html('Original price: ' + extra +'€')
}