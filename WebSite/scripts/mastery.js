var prices = [3.5,7.5,23,35,30,25]

$(document).ready(function(){
    var desired = $('#desiredLevel');
    for(var i = 2;i<=7;i++)
    {
        $("<option>" + i +"</option>").appendTo(desired);
    }
    $('#price').html('Bonus price: ' + getPrice() + '€');
    extra();
});

$('#desiredLevel').on('change',function(){
    $('#price').html('Bonus price: '+getPrice()+ '€');
    extra();
});

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
    $('#price').html('Bonus price: ' +getPrice() +'€');
    extra();
})
$("#regularButton").on('click',function()
{
    $("#safe").prop('checked',false);
    $("#regular").prop('checked',true);
    $('#price').html('Bonus price: ' +getPrice() +'€');
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
    console.log($("#safe").is(':checked'));
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