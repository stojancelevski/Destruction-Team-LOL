var prices = [3.5,7.5,23,35,30,25]
var champions;
$(document).ready(function(){
    $.ajax({
        url: 'champions.json',
        dataType: 'json',
        isLocal: true,
        method: 'GET',
        success: function(data)
        {
            var champion = $("#champion");
            champions = data;
            for(var i = 0;i<champions.length;i++)
            {
                $("<option>" + champions[i].name +"</option>").appendTo(champion);
            }
            $("#championImg").attr('src',champions[0].icon);
            var desired = $('#desiredLevel');
            for(var i = 2;i<=7;i++)
            {
                $("<option>" + i +"</option>").appendTo(desired);
            }
            desired.val(7);
            $('#price').html('Price: ' + getPrice() + '€');
            extra();
        },
        error: function (error) {
            console.log(error);
            alert('Something went wrong, please refresh the page');
        }
    })


});

$('#desiredLevel').on('change',function(){
    $('#price').html('Price: ' + getPrice() + '€');
    extra();
});
$("#champion").on('change',function () {
    for(var i =0;i<champions.length;i++)
    {
        if(champions[i].name == this.value)
        {
            $("#championImg").attr('src',champions[i].icon);
            break;
        }
    }
})

$('#myLevel').on('change',function(){
    var desiredLevelSelected = parseInt($("#desiredLevel :selected").val());
    var desired = $('#desiredLevel');
    desired.children().remove();
    var mylevel = parseInt(this.value);
    for(var i = mylevel+1;i<=7;i++)
    {
        $("<option>" + i +"</option>").appendTo(desired);
    }
    if(mylevel < desiredLevelSelected)
    {
        desired.val(desiredLevelSelected);
    }
    $('#price').html('Bonus price: '+getPrice()+ '€');
    extra();
});

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

    var price = 0;
    var start = parseInt($('#myLevel').val()) -1;
    var end = parseInt($('#desiredLevel').val()) -2;
    for(var i = start;i<=end;i++)
    {
        price+=prices[i];
    }
    if($("#safe").is(':checked'))
    {
        price+= price*0.21;
    }
    return Math.ceil(price);
}

function validate()
{
    var email = $("#email").val();
    var discord = $("#discord").val();
    return !(email == null && discord == null)
}
function extra()
{
    var price = getPrice();
    var extra = Math.ceil(price + (price * 0.15));
    $("#extraval").html('Original price: ' + extra +'€')
}