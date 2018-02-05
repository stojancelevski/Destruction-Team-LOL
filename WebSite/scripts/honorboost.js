$('#slider').slider();

$(document).ready(function()
{
    $('#level').html('Level: ' + $('#slider').val());
    $('#price').html('Bonus price: ' + getPrice() + '€');
    extra();
})

$('#slider').on("slide",function () {

    $('#level').html('Level: ' + this.value);
    $('#price').html('Bonus price: ' + getPrice() + '€');
    extra();
})

function getPrice()
{
    var sliderValue = parseInt($('#slider').val());
    switch(sliderValue)
    {
        case 2: return 10;
        case 3: return 15;
        case 4: return 30;
        case 5: return 50;
        default: throw new Error('Something went wrong!');
    }
}

function extra()
{
    var price = getPrice();
    var extra = price + (price * 0.15);
    $("#extraval").html('Original price: ' + extra +'€')
}