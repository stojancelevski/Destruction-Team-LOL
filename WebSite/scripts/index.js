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
        console.log(res);
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
    if(data.length <= 0)
    {
        $("#firstCard").hide();
        $("#secondCard").hide();
        $("#thirdCard").hide();
    }
    else if(data.length == 1)
    {
        $("#firstImg").attr('src',escapeHtml(imageRoot + data[data.length-1].image));
        $("#firstName").html(escapeHtml(data[data.length-1].name));
        $("#firstReview").html(escapeHtml(data[data.length-1].text));
        $("[name = 'firstImg']").attr('src',escapeHtml(imageRoot + data[data.length-1].image));
        $("#secondCard").hide();
        $("#thirdCard").hide();
    }
    else if(data.length == 2)
    {
        $("#firstImg").attr('src',escapeHtml(imageRoot + data[data.length-1].image));
        $("#firstName").html(escapeHtml(data[data.length-1].name));
        $("#firstReview").html(escapeHtml(data[data.length-1].text));
        $("[name = 'firstImg']").attr('src',escapeHtml(imageRoot + data[data.length-1].image));
        $("#secondImg").attr('src',escapeHtml(imageRoot + data[data.length-2].image));
        $("#secondName").html(escapeHtml(data[data.length-2].name));
        $("#secondReview").html(escapeHtml(data[data.length-2].text));
        $("[name = 'secondImg']").attr('src',escapeHtml(imageRoot + data[data.length-2].image));
        $("#thirdCard").hide();
    }
    else
    {
        $("#firstImg").attr('src',escapeHtml(imageRoot + data[data.length-1].image));
        $("#firstName").html(escapeHtml(data[data.length-1].name));
        $("#firstReview").html(escapeHtml(data[data.length-1].text));
        $("[name = 'firstImg']").attr('src',escapeHtml(imageRoot + data[data.length-1].image));
        $("#secondImg").attr('src',escapeHtml(imageRoot + data[data.length-2].image));
        $("#secondName").html(escapeHtml(data[data.length-2].name));
        $("#secondReview").html(escapeHtml(data[data.length-2].text));
        $("[name = 'secondImg']").attr('src',escapeHtml(imageRoot + data[data.length-2].image));
        $("#thirdImg").attr('src',escapeHtml(imageRoot + data[data.length-3].image));
        $("#thirdName").html(escapeHtml(data[data.length-3].name));
        $("#thirdReview").html(escapeHtml(data[data.length-3].text));
        $("[name = 'thirdImg']").attr('src',escapeHtml(imageRoot + data[data.length-3].image));
    }

}