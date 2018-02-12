var url = "https://script.google.com/macros/s/AKfycbw43JwsUCkJceL_R9rnKtfx-BP6G-oauNO-LpyMaz_Zc1V29XXB/exec?type=POST";
var getUrl = "https://script.google.com/macros/s/AKfycbw43JwsUCkJceL_R9rnKtfx-BP6G-oauNO-LpyMaz_Zc1V29XXB/exec?type=GET";
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

$(document).ready(function(){
    var content = $("#content");
    var loader = $("#loader");
    content.hide();
    loader.show();

    $.get(getUrl).then(
        res => {
        if(res.error != null)
    {
        alert('Something might be wrong!\n If the problem persists, please report a bug!')
        console.log(res);
    }
else{
        console.log(res);
        mapReviews(res);
    }

    loader.hide();
    content.show();

},
    err => {
        alert('Something went wrong, \n If the problem persists, please report a bug!')
        console.log("Error");
        loader.hide();
        content.show();
    }
);


    $('#form').on('submit',function(e)
        {
            e.preventDefault();
            var name = $("#name").val();
            if(!name)
            {
                alert('Please enter name');
            }
            else {
                var review = $("#review").val();
                if (!review) {
                    alert('Please enter review');
                }
                else {

                    var params = "&name=" + $("#name").val() + "&text=" + $("#review").val() + "&image=";
                    var myfile = $('#form #file').get(0).files[0];

                    if (myfile == null) {
                        alert('Please upload a file!')
                    }
                    else {
                        var formdata = new FormData();
                        formdata.append('file', myfile);
                        $.ajax(
                            {
                                type: 'POST',
                                dataType: 'json',
                                url: "controllers/reviewcontroller.php",
                                data: formdata,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: function (data) {
                                    if (data.error != null) {
                                        alert(data.error);
                                    }
                                    else {
                                        console.log(data.message);
                                        content.hide();
                                        loader.show();

                                        $.get(url + params + data.message).then(res => {
                                            console.log('Ok');
                                        console.log(res);
                                        alert(res);
                                        location.reload();

                                    },
                                        err =>{
                                            console.log(err);
                                            alert(err.responseText);

                                            location.reload();
                                        });
                                    }
                                },
                                error: function (xhr, ajaxOptions, thrownError) {
                                    console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                                    alert('Something went wrong, \n If the problem persists, please report a bug!')
                                }
                            }
                        )
                    }
                }
            }
        }
    );

});



function mapReviews(data)
{
    for(var i = 1;i<=12;i++)
    {
        if(i-1>=data.length)
        {
            $("#Card"+i).hide();
        }
        else
        {
            $("#cardName"+i).html(escapeHtml(data[data.length -i].name))
            $("#Review"+i).html(escapeHtml(data[data.length -i].text))
            $("#cardImg"+i).attr('src',imageRoot+escapeHtml(data[data.length-i].image));
        }
    }
}


