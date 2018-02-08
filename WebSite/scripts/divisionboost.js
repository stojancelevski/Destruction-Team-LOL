
var divisions = [
    {div:'Bronze V', solo:[8,6,4],duo:[10,8,6],img:'bronze_5'},
    {div:'Bronze IV', solo:[8,6,4],duo:[10,8,6],img:'bronze_4'},
    {div:'Bronze III', solo:[8,6,4],duo:[10,8,6],img:'bronze_3'},
    {div:'Bronze II', solo:[8,6,4],duo:[10,8,6],img:'bronze_2'},
    {div:'Bronze I',solo:[10,8,5],duo:[12,10,8],img:'bronze_1'},
    {div:'Silver V',solo:[12,10,7],duo:[15,10,8],img:'silver_5'},
    {div:'Silver IV',solo:[12,10,7],duo:[15,10,8],img:'silver_4'},
    {div:'Silver III',solo:[12,10,7],duo:[15,10,8],img:'silver_3'},
    {div:'Silver II',solo:[12,10,7],duo:[15,10,8],img:'silver_2'},
    {div:'Silver I',solo:[17,15,7],duo:[19,13,10],img:'silver_1'},
    {div:'Gold V',solo:[17,14,9],duo:[20,17,12],img:'gold_5'},
    {div:'Gold IV',solo:[17,14,9],duo:[20,17,12],img:'gold_4'},
    {div:'Gold III',solo:[17,14,9],duo:[20,17,12],img:'gold_3'},
    {div:'Gold II',solo:[17,14,9],duo:[20,17,12],img:'gold_2'},
    {div:'Gold I',solo:[22,20,16],duo:[24,20,16],img:'gold_1'},
    {div:'Platinum V',solo:[28,26,22],duo:[33,25.5,21.5],img:'platinum_5'},
    {div:'Platinum IV',solo:[28,26,22],duo:[33,25.5,21.5],img:'platinum_4'},
    {div:'Platinum III',solo:[28,26,22],duo:[33,25.5,21.5],img:'platinum_3'},
    {div:'Platinum II',solo:[28,26,22],duo:[33,25.5,21.5],img:'platinum_2'},
    {div:'Platinum I',solo:[40,30,25],duo:[45,33,29],img:'platinum_1'},
    {div:'Diamond V',solo:[55,45,40],duo:[68.5,53,43.5],img:'diamond_5'},
    {div:'Diamond IV',solo:[65,55,50],duo:[81,60,50],img:'diamond_4'},
    {div:'Diamond III',solo:[75,65,60],duo:[92,70,57.5],img:'diamond_3'},
    {div:'Diamond II',solo:[115,100,95],duo:[142,109,94.5],img:'diamond_2'},
    {div:'Diamond I',solo:[180,150,140],duo:[245,230,215],img:'diamond_1'},
    {div:'Master',solo:[0,0,0],duo:[0,0,0],img:'master_1'}
];
var value=0;
var imageRoot = 'images/Divisions/';
$(document).ready(function(){

    var from = $('#from');
    var to = $('#to');
    for(var i = 0;i<divisions.length;i++)
    {
        if(i<divisions.length -1)
        {
            $("<option>" + divisions[i].div+"</option>").appendTo(from);
        }
        if(i>=1)
        {
            $("<option>" + divisions[i].div+"</option>").appendTo(to);
        }
    }
    var selectedTo = to.val();
    console.log('Document ready');
    var selectedFrom = from.val();
    for(var i = 0;i<divisions.length;i++) {
        if(divisions[i].div == selectedTo)
        {
            $('#toImg').attr('src', imageRoot + divisions[i].img + '.png');
        }
        if(divisions[i].div == selectedFrom)
        {
            $('#fromImg').attr('src', imageRoot + divisions[i].img +'.png');
        }
    }
    triggerValue();




})

$("#safeButton").on('click',function()
{
    $("#safe").prop('checked',true);
    $("#regular").prop('checked',false);
    triggerValue();
})
$("#regularButton").on('click',function()
{
    $("#safe").prop('checked',false);
    $("#regular").prop('checked',true);
    triggerValue();
})
$("#from").on('change',function(){

    var j = 1;
    var to = $("#to");
    var fromSelected = this.value;
    var toSelected = $("#to :selected").val();
    var fromIndex = -1;
    var toIndex = -1;
    for(var i = 0;i<divisions.length;i++)
    {
        if(divisions[i].div === fromSelected)
        {
            fromIndex = i;
        }
        if(divisions[i].div === toSelected)
        {
            toIndex = i;
        }
    }
    to.children().remove();
    for(var i = fromIndex+1;i<divisions.length;i++)
    {
        $("<option>" + divisions[i].div+"</options>").appendTo(to);
    }
    $('#fromImg').attr('src', imageRoot + divisions[fromIndex].img + '.png');
    if(fromIndex<toIndex) {
        to.val(divisions[toIndex].div);
        $('#toImg').attr('src', imageRoot + divisions[toIndex].img + '.png');
    }
    else
    {
        $('#toImg').attr('src',imageRoot + divisions[fromIndex+1].img + '.png');
    }
    triggerValue();
});
$("#lp").on('change',function(){
    triggerValue();
});
$("#type").on('change',function(){
    triggerValue();
});
$("#to").on('change',function(){
    var selectedTo = $("#to :selected").val();
    for(var i = 0;i<divisions.length;i++) {
        if(divisions[i].div == selectedTo)
        {
            $('#toImg').attr('src', imageRoot + divisions[i].img + '.png');
        }
    }
    triggerValue();
});


function triggerValue()
{
    var solo = $("#type :selected").val();
    var lpValue = $("#lp :selected").val();
    var from = $("#from :selected").val();
    var to = $("#to :selected").val();
    var startIndex = -1;
    var endIndex = 0;
    value = 0;
    for(var i = 0;i<divisions.length;i++)
    {
        if(from == divisions[i].div)
        {
            startIndex = i;
            break;
        }
    }
    for(var j = i+1;j<divisions.length;j++)
    {
        if(to == divisions[j].div)
        {
            endIndex = j-1;
            break;
        }
    }
    var bonus = 0;
    value = 0;
    for(var i = startIndex;i<=endIndex;i++)
    {
        if(solo === 'true')
        {
            value+=divisions[i].solo[lpValue];
        }
        else
        {
            value+=divisions[i].duo[lpValue];
        }
        bonus++;
        if(bonus == 4)
        {
            i++;
            bonus=0;
        }
    }

    if($("#safe").is(":checked"))
    {
        value+= value*0.21;
    }
    value = Math.ceil(value);
    var extraprice = Math.ceil(value + (value * 0.15));

    $("#value").html('Bonus price: '+value+'€');
    $("#extraval").html('Original price: ' + extraprice + '€')
}
function getValue()
{
    triggerValue();
    return value;
}


