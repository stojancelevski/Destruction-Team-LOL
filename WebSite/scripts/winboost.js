var divisions = [
    {name: 'Bronze V-I',price:[2,3],img:'bronze.png'},
    {name: 'Silver V-I',price:[3,4.5],img:'silver.png'},
    {name: 'Gold V-I',price:[4,6],img:'gold.png'},
    {name: 'Platinum V-I',price:[5.5,8.5],img:'platinum.png'},
    {name: 'Diamond V',price:[7.5,12.5],img:'diamond_5.png'},
    {name: 'Diamond IV',price:[8.5,14],img:'diamond_4.png'},
    {name: 'Diamond III',price:[12.5,19.5],img:'diamond_3.png'},
    {name: 'Diamond II',price:[15,22],img:'diamond_2.png'},
    {name: 'Diamond I',price:[17.5,27],img:'diamond_1.png'},
    ]


$('#slider').slider();

var imageRoot = 'images/Divisions/';
$(document).ready(function()
{
    console.log('Document ready');
    $('#number').html('Number of games: ' + $('#slider').val());
    var div = $('#divs');
    for(var i =0;i<divisions.length;i++)
    {
        $("<option>"+divisions[i].name+"</option>").appendTo(div);
    }
    $('#winimg').attr('src',imageRoot +divisions[0].img);
    $('#price').html('Price: ' + getPrice() + '€');
    extra();
})

$('#slider').on('slide',function () {

    console.log('sliding');
    $('#number').html('Number of games: ' + this.value);
    $('#price').html('Price: ' + getPrice() + '€');
    extra();
})

$('#type').on('change',function () {
    $('#price').html('Price: ' + getPrice() + '€');
    extra();
})

$('#divs').on('change',function () {
    for(var i = 0;i<divisions.length;i++)
    {
        if(divisions[i].name == this.value)
        {
            $('#winimg').attr('src',imageRoot + divisions[i].img);
            break;
        }
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
    var type = parseInt($('#type').val());
    var nr = parseInt($('#slider').val());
    var div = $("#divs :selected").val();
    var price = -1;
    for(var i =0;i<divisions.length;i++)
    {
        if(div == divisions[i].name)
        {
            price = divisions[i].price[type]*nr;
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

function extra()
{
    var price = getPrice();
    var extra = Math.ceil(price + (price * 0.30));
    $("#extraval").html('Original price: ' + extra +'€')
}

