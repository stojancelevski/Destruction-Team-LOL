var url = "https://script.google.com/macros/s/AKfycbw43JwsUCkJceL_R9rnKtfx-BP6G-oauNO-LpyMaz_Zc1V29XXB/exec?type=POST";
var getUrl = "https://script.google.com/macros/s/AKfycbw43JwsUCkJceL_R9rnKtfx-BP6G-oauNO-LpyMaz_Zc1V29XXB/exec?type=GET";
var imageRoot = "images/reviewImages/";


$(document).ready(function(){
    var content = $("#content");
    var loader = $("#loader");
    content.hide();
    loader.show();

    $.get(getUrl).then(
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
    if(data.length <= 0)
    {
        $("#firstCard").hide();
        $("#secondCard").hide();
        $("#thirdCard").hide();
        $("#fourthCard").hide();
        $("#fifthCard").hide();
        $("#sixthCard").hide();
    }
    else if(data.length == 1)
    {
        $("#firstImg").attr('src',imageRoot + data[data.length-1].image);
        $("#firstName").html(data[data.length-1].name);
        $("#firstReview").html(data[data.length-1].text);
        $("#secondCard").hide();
        $("#thirdCard").hide();
        $("#fourthCard").hide();
        $("#fifthCard").hide();
        $("#sixthCard").hide();
    }
    else if(data.length == 2)
    {
        $("#firstImg").attr('src',imageRoot + data[data.length-1].image);
        $("#firstName").html(data[data.length-1].name);
        $("#firstReview").html(data[data.length-1].text);
        $("#secondImg").attr('src',imageRoot + data[data.length-2].image);
        $("#secondName").html(data[data.length-2].name);
        $("#secondReview").html(data[data.length-2].text);
        $("#thirdCard").hide();
        $("#fourthCard").hide();
        $("#fifthCard").hide();
        $("#sixthCard").hide();
    }
    else if(data.length ==3)
    {
        $("#firstImg").attr('src',imageRoot + data[data.length-1].image);
        $("#firstName").html(data[data.length-1].name);
        $("#firstReview").html(data[data.length-1].text);
        $("#secondImg").attr('src',imageRoot + data[data.length-2].image);
        $("#secondName").html(data[data.length-2].name);
        $("#secondReview").html(data[data.length-2].text);
        $("#thirdImg").attr('src',imageRoot + data[data.length-3].image);
        $("#thirdName").html(data[data.length-3].name);
        $("#thirdReview").html(data[data.length-3].text);
        $("#fourthCard").hide();
        $("#fifthCard").hide();
        $("#sixthCard").hide();
    }
    else if(data.length == 4)
    {
        $("#firstImg").attr('src',imageRoot + data[data.length-1].image);
        $("#firstName").html(data[data.length-1].name);
        $("#firstReview").html(data[data.length-1].text);
        $("#secondImg").attr('src',imageRoot + data[data.length-2].image);
        $("#secondName").html(data[data.length-2].name);
        $("#secondReview").html(data[data.length-2].text);
        $("#thirdImg").attr('src',imageRoot + data[data.length-3].image);
        $("#thirdName").html(data[data.length-3].name);
        $("#thirdReview").html(data[data.length-3].text);
        $("#fourthImg").attr('src',imageRoot + data[data.length-4].image);
        $("#fourthName").html(data[data.length-4].name);
        $("#fourthReview").html(data[data.length-4].text);
        $("#fifthCard").hide();
        $("#sixthCard").hide();
    }
    else if(data.length == 5)
    {
        $("#firstImg").attr('src',imageRoot + data[data.length-1].image);
        $("#firstName").html(data[data.length-1].name);
        $("#firstReview").html(data[data.length-1].text);
        $("#secondImg").attr('src',imageRoot + data[data.length-2].image);
        $("#secondName").html(data[data.length-2].name);
        $("#secondReview").html(data[data.length-2].text);
        $("#thirdImg").attr('src',imageRoot + data[data.length-3].image);
        $("#thirdName").html(data[data.length-3].name);
        $("#thirdReview").html(data[data.length-3].text);
        $("#fourthImg").attr('src',imageRoot + data[data.length-4].image);
        $("#fourthName").html(data[data.length-4].name);
        $("#fourthReview").html(data[data.length-4].text);
        $("#fifthImg").attr('src',imageRoot + data[data.length-5].image);
        $("#fifthName").html(data[data.length-5].name);
        $("#fifthReview").html(data[data.length-5].text);
        $("#sixthCard").hide();
    }
    else
    {
        $("#firstImg").attr('src',imageRoot + data[data.length-1].image);
        $("#firstName").html(data[data.length-1].name);
        $("#firstReview").html(data[data.length-1].text);
        $("#secondImg").attr('src',imageRoot + data[data.length-2].image);
        $("#secondName").html(data[data.length-2].name);
        $("#secondReview").html(data[data.length-2].text);
        $("#thirdImg").attr('src',imageRoot + data[data.length-3].image);
        $("#thirdName").html(data[data.length-3].name);
        $("#thirdReview").html(data[data.length-3].text);
        $("#fourthImg").attr('src',imageRoot + data[data.length-4].image);
        $("#fourthName").html(data[data.length-4].name);
        $("#fourthReview").html(data[data.length-4].text);
        $("#fifthImg").attr('src',imageRoot + data[data.length-5].image);
        $("#fifthName").html(data[data.length-5].name);
        $("#fifthReview").html(data[data.length-5].text);
        $("#sixthImg").attr('src',imageRoot + data[data.length-6].image);
        $("#sixthName").html(data[data.length-6].name);
        $("#sixthReview").html(data[data.length-6].text);
    }


}


