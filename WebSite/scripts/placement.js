
var divisions = [
    {name: 'Unranked',price:3,img:"unranked_1.png"},
    {name: 'Bronze',price:2,img:"bronze.png"},
    {name: 'Silver',price:3,img:"silver.png"},
    {name: 'Gold',price:4,img: "gold.png"},
    {name: 'Platinum',price:5,img:"platinum.png"},
    {name: 'Diamond',price:7.5,img:"diamond_5.png"}
];

$('#slider').slider();
var imageRoot = 'images/Divisions/';

$(document).ready(function(){
    var div = $('#divs');
    for(var i = 0;i<divisions.length;i++)
    {
        $("<option>"+divisions[i].name+"</option>").appendTo(div);
    }
    $("#divisionImg").attr('src',imageRoot+divisions[0].img)
    $('#number').html('Number of games: ' + $('#slider').val());
    $('#price').html('Price: ' + getPrice() + '€');
    extra();
    });

$('#slider').on('change',function(){
    $('#number').html('Number of games: ' + this.value);
    $('#price').html('Price: ' + getPrice() + '€');
    extra();
})

$("#divs").on('change',function () {

    changeImg();
    $('#price').html('Price: ' + getPrice() + '€');
    extra();
})
function getPrice()
{
    var nr = parseInt($('#slider').val());
    var division = $('#divs :selected').val();
    var price = -1;
    for(var i = 0;i<divisions.length;i++)
    {
        if(division === divisions[i].name)
        {
            var bonus = Math.floor(nr/10);
            price = divisions[i].price * (nr - bonus);
            break;
        }
    }
    if(price == -1)
    {
        throw new Error("Something went wrong!")
    }
    if($("#safe").is(":checked"))
    {
        price+=price*0.21;
    }
    return Math.ceil(price);
}
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
function changeImg()
{
    console.log('Image triggered');
    var div = $("#divs :selected").val();
    for(var i = 0;i<divisions.length;i++)
    {
        if(div == divisions[i].name)
        {
            $("#divisionImg").attr('src',imageRoot+divisions[i].img);
            $("#divisionImg2").attr('src',imageRoot+divisions[i].img);
        }
    }
}
function extra()
{
    var price = getPrice();
    var extra = Math.ceil(price + (price * 0.30));
    $("#extraval").html('Original price: ' + extra +'€')
}
