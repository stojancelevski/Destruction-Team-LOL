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
                    <div class="form-group">
                        <input type="file" name="file" id="file"/>
                    </div>
                    <input type="submit" id="submit" name="submit" value="Submit review" class="btn btn-info"
                           style="background-color: #E9D300; color:#375990 "/>
                </form>

            </div>
        </div>

    </div>

<footer id="myFooter">
    <?php include 'footer.php'; ?>

</footer>
</div>
</body>
</html>