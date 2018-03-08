
var imgUrl = "images/Level%20icons/";

$(document).ready(function()
{
    var to = $("#desiredLevel");
    var from = $("#startLevel");
    for(var i = 1;i<=174;i++)
    {
        if(i>=106)
        {
            $("<option>" + i +"</option>").appendTo(to);
        }
        $("<option>" + i +"</option>").appendTo(from);
    }
    $("<option>175</option>").appendTo(to);
    from.val(50);
    to.val(106);
    makeImages();
    $('#price').html('Price: ' + getPrice() + '€');
    extra();
})

$("#desiredLevel").on('change',function()
{
    $('#price').html('Price: ' + getPrice() + '€');
    extra();
    makeImages();
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
    makeImages();
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

function makeImages()
{
    var from = parseInt($("#startLevel :selected").text());
    var to = parseInt($("#desiredLevel :selected").text());
    console.log(from);
    console.log(to);
    var fromImg = $("#fromLevelImg");
    var toImg = $("#toLevelImg");
    $("#fromLevelText").html(from);
    $("#toLevelText").html(to);
    if(from<30)
    {
        fromImg.attr('src',imgUrl+'lvl_0.png'); 
    }
    else if(from >= 30 && from < 50)
    {
        fromImg.attr('src',imgUrl+'lvl_30.png'); 
    }
    else if(from >= 50 && from < 75)
    {
        fromImg.attr('src',imgUrl+'lvl_50.png')
    }
    else if(from >= 75 && from < 100)
    {
        fromImg.attr('src',imgUrl+'lvl_75.png')
    }
    else if(from >= 100 && from <125)
    {
        fromImg.attr('src',imgUrl+'lvl_100.png')
    }
    else if(from >= 125 && from < 150)
    {
        fromImg.attr('src',imgUrl+'lvl_125.png')
    }
    else if (from >= 150 && from < 175)
    {
        fromImg.attr('src',imgUrl+'lvl_150.png')
    }
    else
    {
        fromImg.attr('src',imgUrl+'lvl_175.png')
    }
    if(to < 30)
    {
        toImg.attr('src',imgUrl+'lvl_0.png'); 
    }
    else if(to >= 30 && to < 50)
    {
        toImg.attr('src',imgUrl+'lvl_30.png'); 
    }
    else if(to >= 50 && to < 75)
    {
        toImg.attr('src',imgUrl+'lvl_50.png')
    }
    else if(to >= 75 && to < 100)
    {
        to.attr('src',imgUrl+'lvl_75.png')
    }
    else if(to >= 100 && to <125)
    {
        toImg.attr('src',imgUrl+'lvl_100.png')
    }
    else if(to >= 125 && to < 150)
    {
        toImg.attr('src',imgUrl+'lvl_125.png')
    }
    else if (to >= 150 && to < 175)
    {
        toImg.attr('src',imgUrl+'lvl_150.png')
    }
    else
    {
        toImg.attr('src',imgUrl+'lvl_175.png')
    }
}