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

$("#safeButton").on('click',function()
{
    $("#safe").prop('checked',true);
    $("#regular").prop('checked',false);
    $('#price').html('Price: ' + getPrice() + '€');
    extra();
})
$("#regularButton").on('click',function()
{
    $("#safe").prop('checked',false);
    $("#regular").prop('checked',true);
    $('#price').html('Price: ' + getPrice() + '€');
    extra();
})
function getPrice() {
    var price = parseInt($('#slider').val())*10;
    if($("#safe").is(":checked"))
    {
        price+=price*0.21;
    }
    return Math.ceil(price);
}
function extra()
{
    var price = getPrice();
    var extra = Math.ceil(price + (price * 0.30));
    $("#extraval").html('Original price: ' + extra +'€')
}