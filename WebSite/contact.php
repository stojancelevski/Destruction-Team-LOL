<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'; ?>
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="jumbotron banertext bg11">
    <h1>Contact</h1>
</div>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <form action="" id="form">
                    <div class="form-group">
                        <label for="inputState">Category</label>
                        <select id="category" class="form-control">
                            <option selected>Question</option>
                            <option>Order Issue</option>
                            <option>Coaching</option>
                            <option>Boosters Recruitment</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control" id="message" rows="3"
                        ></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit"/>
                </form>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <h3>Information</h3>
                <p>
                    If you have any questions feel free to contact us.
                    We will reply to your email within the next 12 hours.
                    <br>
                <h4 class="mail"> topboost.global@gmail.com</h4>

                </p>
            </div>
        </div> 
        <button onclick="topFunction()" id="scrollBtn" title="Go to top">Scroll to top</button>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
            integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="scripts/contactscript.js"></script>
    <footer id="myFooter">
        <?php include 'footer.php'; ?>

    </footer>
</body>
</html>