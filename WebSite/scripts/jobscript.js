
var url = 'https://script.google.com/macros/s/AKfycbysjTarKPbsLcE8C9nSa2GZ2rYME9QsHLYhqhNanqfmHExtCCk/exec';
$("#country").countrySelect(
    {
        responsiveDropdown: true
    }
);

$('#submit-job').on('click',function(e)
{
    var age = $('#age').val();
    var boosterwork = $('#boosterwork').val();
    var country = $("#country").countrySelect("getSelectedCountryData");
    var specification = $('#specification').val();
    var coaching = $('#coaching').val();
    var rank = $('#rank :selected').text();
    var languages = $('#languages').val();
    var lanes = $('#lanes').val();
    var hours = $('#hours :selected').text();
    var skype = $('#skype').val();
    var percentage = $('#percentage').val();
    var goals = $('#goals').val();
    var server = $('#server :selected').val();
    var champions = $('#champion').val();
    var type = $('#type').val();
    var info = $('#info').val();
    var email = $('#email').val();


    var newUrl = url+'?age='+age+'&boosterwork='+boosterwork +'&country='+country.name+'&specification='+specification
    +'&coaching='+coaching +'&rank='+rank+'&languages='+ languages +'&lanes='+lanes+'&hours='+hours+'&skype='+skype
    +'&percentage='+percentage+'&goal='+goals+'&server='+server+'&champions='+champions+'&type='+type+'&info='+info
    +'&email='+email;
    $("#loader").show();
    $("#content").hide();
    $.getJSON(newUrl).then(res => {
        if(res =='Ok!')
        {
            alert('Thank you for your application. You will be contacted in a short period!');
            location.reload();
        }
        else
        {
            alert('Something went wrong, please try again later or check your validation \n'+
            'If the problem persists, please report a bug!')
            console.log(res);   
        }
    $("#loader").hide();
    $("#content").show();
    },
    err =>{
        console.log(err);
    $("#loader").show();
    $("#content").hide();
}
);
})