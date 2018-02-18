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
            <div class="card" id="Card1">
                <div class="card-header" id="cardName1">Name</div>
                <img class="card-img-top" id="cardImg1" src='' alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" id="Review1">Review</p>
                </div>
            </div>
            <div class="card" id="Card2">
                <div class="card-header" id="cardName2">Name</div>
                <img class="card-img-top" id="cardImg2" src='' alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" id="Review2">Review</p>
                </div>
            </div>
            <div class="card" id="Card3">
                <div class="card-header" id="cardName3">Name</div>
                <img class="card-img-top" id="cardImg3" src='' alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" id="Review3">Review</p>
                </div>
            </div>
        </div>
        <div class="card-deck" id="card-deck">
            <div class="card" id="Card4">
                <div class="card-header" id="cardName4">Name</div>
                <img class="card-img-top" id="cardImg4" src='' alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" id="Review4">Review</p>
                </div>
            </div>
            <div class="card" id="Card5">
                <div class="card-header" id="cardName5">Name</div>
                <img class="card-img-top" id="cardImg5" src='' alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" id="Review5">Review</p>
                </div>
            </div>
            <div class="card" id="Card6">
                <div class="card-header" id="cardName6">Name</div>
                <img class="card-img-top" id="cardImg6" src='' alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" id="Review6">Review</p>
                </div>
            </div>
        </div>
        <div class="card-deck" id="card-deck">
            <div class="card" id="Card7">
                <div class="card-header" id="cardName7">Name</div>
                <img class="card-img-top" id="cardImg7" src='' alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" id="Review7">Review</p>
                </div>
            </div>
            <div class="card" id="Card8">
                <div class="card-header" id="cardName8">Name</div>
                <img class="card-img-top" id="cardImg8" src='' alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" id="Review8">Review</p>
                </div>
            </div>
            <div class="card" id="Card9">
                <div class="card-header" id="cardName9">Name</div>
                <img class="card-img-top" id="cardImg9" src='' alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" id="Review9">Review</p>
                </div>
            </div>
        </div>
        <div class="card-deck" id="card-deck">
            <div class="card" id="Card10">
                <div class="card-header" id="cardName10">Name</div>
                <img class="card-img-top" id="cardImg10" src='' alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" id="Review10">Review</p>
                </div>
            </div>
            <div class="card" id="Card11">
                <div class="card-header" id="cardName11">Name</div>
                <img class="card-img-top" id="cardImg11" src='' alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" id="Review11">Review</p>
                </div>
            </div>
            <div class="card" id="Card12">
                <div class="card-header" id="cardName12">Name</div>
                <img class="card-img-top" id="cardImg12" src='' alt="Card image cap">
                <div class="card-body">
                    <p class="card-text" id="Review12">Review</p>
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
                    <div class="form-group">
                        <input type="file" name="file" id="file"/>
                    </div>
                    <input type="submit" id="submit" name="submit" value="Submit review" class="btn btn-info"
                           style="background-color: #E9D300; color:#375990 "/>
                </form>

            </div>
        </div>
        <button onclick="topFunction()" id="scrollBtn" title="Go to top">Scroll to top</button>
    </div>

<footer id="myFooter">
    <?php include 'footer.php'; ?>

</footer>
</div>
</body>
</html>