var url = "https://script.google.com/macros/s/AKfycbw43JwsUCkJceL_R9rnKtfx-BP6G-oauNO-LpyMaz_Zc1V29XXB/exec?type=GET";
var imageRoot = "images/reviewImages/";
var entityMap = {
    '&': '&amp;',
    '<': '&lt;',
    '>': '&gt;',
    '"': '&quot;',
    "'": '&#39;',
    '/': '&#x2F;',
    '`': '&#x60;',
    '=': '&#x3D;'
};

function escapeHtml (string) {
    return String(string).replace(/[&<>"'`=\/]/g, function (s) {
        return entityMap[s];
    });
}
$("#loader").show();
$("#content").hide();
$(document).ready(function(){

    $.get(url).then(
        res => {
        if(res.message != null)
            {
                alert('Something might be wrong!\n If the problem persists, please report a bug!')
                console.log(res);
            }
        else{
            mapReviews(res);
        }

            $("#loader").hide();
            $("#content").show();

        },
    err => {
        alert('Something went wrong, \n If the problem persists, please report a bug!')
            console.log("Error");
        $("#loader").hide();
        $("#content").show();
    }
    );
});



function mapReviews(data)
{
    console.log(data);
    for(var i = 1;i<=6;i++)
    {
        if(i-1>=data.length)
        {
            $("#Card"+i).hide();
        }
        else
        {
            $("#cardName"+i).html(escapeHtml(data[data.length -i].name))
            $("#Review"+i).html(escapeHtml(data[data.length -i].text))
            $("#cardImg"+i).attr('src',escapeHtml(imageRoot+data[data.length-i].image));
            $("#slikam"+i).attr('src',escapeHtml(imageRoot+data[data.length-i].image));
        }
    }
}
