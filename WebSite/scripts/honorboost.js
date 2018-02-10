$('#slider').slider();



$(document).ready(function()
{
    checkSlider();
    $('#level').html('Level: ' + $('#slider').val());
    $('#price').html('Price: ' + getPrice() + '€');
    extra();
})

$('#slider').on("slide",function () {

    checkSlider();
    $('#level').html('Level: ' + this.value);
    $('#price').html('Price: ' + getPrice() + '€');
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
function getPrice()
{
    var sliderValue = parseInt($('#slider').val());
    var value= 0;
    switch(sliderValue)
    {
        case 2: value = 10; break;
        case 3: value = 15; break;
        case 4: value = 30; break;
        case 5: value = 50; break;
        default: throw new Error('Something went wrong!');
    }
    if($("#safe").is(":checked"))
    {
        value+=value*0.21
    }
    return Math.ceil(value);
}

function extra()
{
    var price = getPrice();
    var extra = Math.ceil(price + (price * 0.15));
    $("#extraval").html('Original price: ' + extra +'€')
}

function checkSlider()
{
/*
    var sliderValue = parseInt($("#slider").val());
    if(sliderValue <= 2)
    {

        $(".slider.slider-horizontal.slider-track").css("height", "100px");
        $(".slider.slider-horizontal.slider-track").css("width", "100%");

    }
    else
    {

        $(".slider.slider-horizontal.slider-track").css("height", "10px");
        $(".slider.slider-horizontal.slider-track").css("width", "100%");
    }
    */
}