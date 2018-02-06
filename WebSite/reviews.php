<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'; ?>
    <title>Reviews</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
            integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="scripts/reviewscript.js"></script>
</head>
<body>
<?php include 'navbar.php'; ?>
<div id="loader"></div>
<div id="content">
    <div class="jumbotron banertext bg9">
        <h1>Reviews</h1>
    </div>

    <div class="container">
        <div class="card-deck" id="card-deck">
            <div class="card" id="firstCard">
                <div class="card-header" id="firstName">Name</div>
                <img class="card-img-top" id="firstImg" src='' alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" id="firstReview">Review</p>
                </div>
            </div>
            <div class="card" id="secondCard">
                <div class="card-header" id="secondName">Name</div>
                <img class="card-img-top" id="secondImg" src='' alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" id="secondReview">Review</p>
                </div>
            </div>
            <div class="card" id="thirdCard">
                <div class="card-header" id="thirdName">Name</div>
                <img class="card-img-top" id="thirdImg" src='' alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" id="thirdReview">Review</p>
                </div>
            </div>
        </div>
        <div class="card-deck" id="card-deck">
            <div class="card" id="fourthCard">
                <div class="card-header" id="fourthName">Name</div>
                <img class="card-img-top" id="fourthImg" src='' alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" id="fourthReview">Review</p>
                </div>
            </div>
            <div class="card" id="fifthCard">
                <div class="card-header" id="fifthName">Name</div>
                <img class="card-img-top" id="fifthImg" src='' alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" id="fifthReview">Review</p>
                </div>
            </div>
            <div class="card" id="sixthCard">
                <div class="card-header" id="sixthName">Name</div>
                <img class="card-img-top" id="sixthImg" src='' alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" id="sixthReview">Review</p>
                </div>
            </div>
        </div>
        <div class="jumbotron">
            <div class="container">
                <form method="post" id="form" enctype="multipart/form-data">
                    <!-- <input type="text" name="text" />-->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="name" class="form-control" id="name" aria-describedby="name"
                               placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="review">Review</label>
                        <textarea class="form-control" id="review" rows="3" placeholder="Enter your Review"></textarea>

                    </div>
                    <input type="file" name="file" id="file"/>
                    <input type="submit" id="submit" name="submit" value="Submit review" class="btn btn-info"
                           style="background-color: #E9D300; color:#375990 "/>
                </form>

            </div>
        </div>

    </div>
</div>
</div>

</body>
<script>
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
            $("#firstImg").attr('src',escapeHtml(imageRoot + data[data.length-1].image));
            $("#firstName").html(escapeHtml(data[data.length-1].name));
            $("#firstReview").html(escapeHtml(data[data.length-1].text));
            $("#secondCard").hide();
            $("#thirdCard").hide();
            $("#fourthCard").hide();
            $("#fifthCard").hide();
            $("#sixthCard").hide();
        }
        else if(data.length == 2)
        {
            $("#firstImg").attr('src',escapeHtml(imageRoot + data[data.length-1].image));
            $("#firstName").html(escapeHtml(data[data.length-1].name));
            $("#firstReview").html(escapeHtml(data[data.length-1].text));
            $("#secondImg").attr(escapeHtml('src',imageRoot + data[data.length-2].image));
            $("#secondName").html(escapeHtml(data[data.length-2].name));
            $("#secondReview").html(escapeHtml(data[data.length-2].text));
            $("#thirdCard").hide();
            $("#fourthCard").hide();
            $("#fifthCard").hide();
            $("#sixthCard").hide();
        }
        else if(data.length ==3)
        {
            $("#firstImg").attr('src',escapeHtml(imageRoot + data[data.length-1].image));
            $("#firstName").html(escapeHtml(data[data.length-1].name));
            $("#firstReview").html(escapeHtml(data[data.length-1].text));
            $("#secondImg").attr('src',escapeHtml(imageRoot + data[data.length-2].image));
            $("#secondName").html(escapeHtml(data[data.length-2].name));
            $("#secondReview").html(escapeHtml(data[data.length-2].text));
            $("#thirdImg").attr('src',escapeHtml(imageRoot + data[data.length-3].image));
            $("#thirdName").html(escapeHtml(data[data.length-3].name));
            $("#thirdReview").html(escapeHtml(data[data.length-3].text));
            $("#fourthCard").hide();
            $("#fifthCard").hide();
            $("#sixthCard").hide();
        }
        else if(data.length == 4)
        {
            $("#firstImg").attr('src',escapeHtml(imageRoot + data[data.length-1].image));
            $("#firstName").html(escapeHtml(data[data.length-1].name));
            $("#firstReview").html(escapeHtml(data[data.length-1].text));
            $("#secondImg").attr('src',escapeHtml(imageRoot + data[data.length-2].image));
            $("#secondName").html(escapeHtml(data[data.length-2].name));
            $("#secondReview").html(escapeHtml(data[data.length-2].text));
            $("#thirdImg").attr('src',escapeHtml(imageRoot + data[data.length-3].image));
            $("#thirdName").html(escapeHtml(data[data.length-3].name));
            $("#thirdReview").html(escapeHtml(data[data.length-3].text));
            $("#fourthImg").attr('src',escapeHtml(imageRoot + data[data.length-4].image));
            $("#fourthName").html(escapeHtml(data[data.length-4].name));
            $("#fourthReview").html(escapeHtml(data[data.length-4].text));
            $("#fifthCard").hide();
            $("#sixthCard").hide();
        }
        else if(data.length == 5)
        {
            $("#firstImg").attr('src',escapeHtml(imageRoot + data[data.length-1].image));
            $("#firstName").html(escapeHtml(data[data.length-1].name));
            $("#firstReview").html(escapeHtml(data[data.length-1].text));
            $("#secondImg").attr('src',escapeHtml(imageRoot + data[data.length-2].image));
            $("#secondName").html(escapeHtml(data[data.length-2].name));
            $("#secondReview").html(escapeHtml(data[data.length-2].text));
            $("#thirdImg").attr('src',escapeHtml(imageRoot + data[data.length-3].image));
            $("#thirdName").html(escapeHtml(data[data.length-3].name));
            $("#thirdReview").html(escapeHtml(data[data.length-3].text));
            $("#fourthImg").attr('src',escapeHtml(imageRoot + data[data.length-4].image));
            $("#fourthName").html(escapeHtml(data[data.length-4].name));
            $("#fourthReview").html(escapeHtml(data[data.length-4].text));
            $("#fifthImg").attr('src',escapeHtml(imageRoot + data[data.length-5].image));
            $("#fifthName").html(escapeHtml(data[data.length-5].name));
            $("#fifthReview").html(escapeHtml(data[data.length-5].text));
            $("#sixthCard").hide();
        }
        else
        {
            $("#firstImg").attr('src',escapeHtml(imageRoot + data[data.length-1].image));
            $("#firstName").html(escapeHtml(data[data.length-1].name));
            $("#firstReview").html(escapeHtml(data[data.length-1].text));
            $("#secondImg").attr('src',escapeHtml(imageRoot + data[data.length-2].image));
            $("#secondName").html(escapeHtml(data[data.length-2].name));
            $("#secondReview").html(escapeHtml(data[data.length-2].text));
            $("#thirdImg").attr('src',escapeHtml(imageRoot + data[data.length-3].image));
            $("#thirdName").html(escapeHtml(data[data.length-3].name));
            $("#thirdReview").html(escapeHtml(data[data.length-3].text));
            $("#fourthImg").attr('src',escapeHtml(imageRoot + data[data.length-4].image));
            $("#fourthName").html(escapeHtml(data[data.length-4].name));
            $("#fourthReview").html(escapeHtml(data[data.length-4].text));
            $("#fifthImg").attr('src',escapeHtml(imageRoot + data[data.length-5].image));
            $("#fifthName").html(escapeHtml(data[data.length-5].name));
            $("#fifthReview").html(escapeHtml(data[data.length-5].text));
            $("#sixthImg").attr('src',escapeHtml(imageRoot + data[data.length-6].image));
            $("#sixthName").html(escapeHtml(data[data.length-6].name));
            $("#sixthReview").html(escapeHtml(data[data.length-6].text));
        }


    }



</script>
</html>