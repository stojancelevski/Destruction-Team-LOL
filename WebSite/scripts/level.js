

$(document).ready(function()
{
    var to = $("#desiredLevel");
    var from = $("#startLevel");
    for(var i = 1;i<=174;i++)
    {
        if(i>1)
        {
            $("<option>" + i +"</option>").appendTo(to);
        }
        $("<option>" + i +"</option>").appendTo(from);
    }
    $("<option>175</option>").appendTo(to);
    $('#price').html('Price: ' + getPrice() + '€');
    extra();
})

$("#desiredLevel").on('change',function()
{
    $('#price').html('Price: ' + getPrice() + '€');
    extra();
})
$("#startLevel").on('change',function()
{
    var to = $("#desiredLevel");
    var fromSelected = this.value;
    var toSelected = $("#desiredLevel :selected").text();
    var fromIndex = -1;
    var toIndex = -1;
    for(var i=1;i<=175;i++)
    {
        if(i == fromSelected)
        {
            fromIndex = i;
        }
        if(i == toSelected)
        {
            toIndex = i;
        }
    }
    to.children().remove();
    for(var i = fromIndex+1;i<=175;i++)
    {
        $("<option>" + i +"</options>").appendTo(to);
    }
    if(fromIndex<toIndex) {
        to.val(toIndex);
    }

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

    var from = parseInt($("#startLevel").val());
    var to = parseInt($("#desiredLevel").val());
    var price = 0;
    for(var i = from;i<to;i++)
    {
        if(i<=30)
        {
            price+=3.5;
        }
        else if(i>30 && i<=60)
        {
            price+=5;
        }
        else if(i>60 && i<=100)
        {
            price+=10;
        }
        else
        {
            price+=12.5;
        }
    }
    if($("#safe").is(":checked"))
    {
        price+=price*0.21;
    }
    return Math.ceil(price);
}

function extra()
{
    var price = getPrice();
    var extra = Math.ceil(price + (price * 0.15));
    $("#extraval").html('Original price: ' + extra +'€')
}

