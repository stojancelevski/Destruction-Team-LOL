<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'; ?>
    <link rel="canonical" href="https://top-boost.com/win-boost" />
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="jumbotron banertext bg3">
    <h1>Win boosting</h1>
</div>
<div class="jumbotron textura2 container-fixed">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="images/Packs/box-win_boost.png" alt="">
            </div>
            <div class="col-md-5" style="text-align: center;">
                <div class="card">
                    <div class="card-header">
                        <h2 id="number"></h2>

                        <input id="slider" data-slider-id='winSlider' type="text" data-slider-handle="custom"
                               data-slider-min="1" data-slider-max="20" data-slider-step="1" data-slider-value="1"/>
                    </div>

                    <br><select class="form-control" name="divs" id="divs"></select><br>
                    <select class="form-control" name="type" id="type">
                        <option value=0>Solo</option>
                        <option value=1>Duo</option>
                    </select><br>
                    <select class="form-control" name="server" id="server">
                        <option>EU West</option>
                        <option>EU Nordic & East</option>
                        <option>Oceania</option>
                    </select><br>
                    <div style="text-align: center;">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn sinabg active" id="regularButton">
                                <input type="radio" name="options" autocomplete="off" id="regular" checked> Regular
                                boost
                            </label>
                            <label class="btn btn-success" id="safeButton">
                                <input type="radio" name="options" autocomplete="off" id="safe"> Safe boost
                            </label>
                        </div>
                    </div>
                    <div style="padding-top: 5px">
                        <input type="text" class="form-control" id="champions" placeholder="Champions">
                    </div>
                    <h2 id="number"></h2>
                    <div class="form-group">
                        <div style="padding-top: 5px">
                            <input type="text" class="form-control" id="email" placeholder="Email">
                        </div>

                    </div>
                    <span class="badge badge-secondary" style="background-color: #375990">
                            <h3 id="price" style="color: #E9D300">

                            </h3>
                        </span>
                    <h5>
                        <del class="text text-danger" id="extraval"></del>
                    </h5>
                    <div id="paypal-button">

                    </div>
                </div>


            </div>
            <div class="col-md-3">
                <img class="card-img-top" id="winimg" src="" alt="Div image">

            </div>
        </div>
    </div>
    <button onclick="topFunction()" id="scrollBtn" title="Go to top">Buy Elo Boost</button>
    <?php include 'safe and regular.php'; ?>
    <br>
    <h1 style="text-align: center;color: white;">Other Cheap Elo Boost LOL Services </h1>
    <div class="row">

        <div class="col-md-1"></div>
        <div class="col-md-2">
            <a href="mission-completition"> <img src="images/Packs/box-mission_completion.png" alt="" width="125"
                                                     height="196"></a>
        </div>
        <div class="col-md-2">
            <a href="placement-matches"> <img src="images/Packs/box-placement_matches.png" alt="" width="125" height="196">
            </a>
        </div>
        <div class="col-md-2">
            <a href="division-boosting"> <img src="images/Packs/box-division_boost.png" alt="" width="125"
                                              height="196">
            </a>
        </div>
        <div class="col-md-2">
            <a href="level-boost"> <img src="images/Packs/box-honor_boost.png" alt="" width="125"
                                        height="196">
            </a>
        </div>
        <div class="col-md-2">
            <a href="champion-mastery-boost"> <img src="images/Packs/box-champion_mastery_boost.png" alt="" width="125" height="196">
            </a>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
<footer id="myFooter">
    <?php include 'footer.php'; ?>
</footer>
</body>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="bootstrap-slider-master/dist/bootstrap-slider.min.js"></script>
<script src="scripts/winboost.js"></script>
<script>
    function isValidEmail() {
        return !($("#email").val() == '');
    }

    function isValidChampion() {
        return !($("#champion").val() == '')
    }

    function onChangeEmailOrDiscord(actions) {
        if (!isValidEmail() || !isValidChampion()) {
            actions.disable()
        }
        else {
            actions.enable();
        }
    }


    function onChangeEmail(handler) {
        document.querySelector('#email').addEventListener('change', handler);
    }

    function onChangeChampion(handler) {
        document.querySelector('#champion').addEventListener('change', handler);
    }

    function post() {
        return new Promise(function (resolve, reject) {
            var solo = $("#type :selected").text();
            var type;

            type = solo + " win boost, division: " + $("#divs :selected").text() + ", games: " + $("#slider").val();
            var url = "https://script.google.com/macros/s/AKfycbwVOncurWvdCEDRlviH-c4wtUtGLy-xJUTy_dihMZH46nV0CnUu/exec?email="
                + $("#email").val() + "&champion=" + $("#champion").val() + "&price=" + getPrice() + "&type=" + type + "&server=" + $("#server :selected").text();
            $.ajax(
                {
                    url: url,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        resolve(data);
                    },
                    error: function (data) {
                        resolve(data);
                    }
                }
            );
        });
    }

    $(document).ready(function () {

        paypal.Button.render({
            env: 'production', // Or 'sandbox',

            commit: true, // Show a 'Pay Now' button

            style: {
                label: 'pay',
                color: 'gold',
                size: 'responsive',
                shape: 'rect'
            },
            client: {
                sandbox: 'AaPOkuI37X5O9DO2NOQo0gP2YyNCVCOA7_d1CnE3oZgyq1EqJKt5EqQAhVHtNqJ-rhHHEamHP2YqYgc2',
                production: 'AXJRo54FMZ6kkczNMyRsbw5kFI3aQZvgG_aLQn95WPNlXeEZklUUkaqeT_5N15rEU6quMohDGyHTE9P7'
            },
            validate: function (actions) {
                onChangeEmailOrDiscord(actions);
                onChangeChampion(function () {
                    onChangeEmailOrDiscord(actions);
                })
                onChangeEmail(function () {
                    onChangeEmailOrDiscord(actions);
                })
            },
            onClick: function () {
                if (!isValidEmail() && !isValidChampion()) {
                    alert('Please enter e-mail and champion')
                }
                else if (!isValidEmail()) {
                    alert('Please enter e-mail');
                }
                else if (!isValidChampion()) {
                    alert('Please enter champions')
                }
                else {
                    console.log('Ok');
                }
            },
            payment: function (data, actions) {

                return actions.payment.create({
                    payment: {
                        transactions: [
                            {
                                amount: {total: getPrice(), currency: 'EUR'}
                            }
                        ]
                    }
                });

            },

            onAuthorize: function (data, actions) {
                return actions.payment.execute().then(function (payment) {
                    post().then(function (data) {
                        console.log(data);
                        if (data.responseText == 'Ok!') {
                            alert('Order successful, we will contact you in a short while.');
                        }
                        else {
                            alert('Something went wrong with our system.\nIf you already paid, please send us an e-mail.');
                        }
                    }).catch(function (data) {
                        if (data.responseText == 'Ok!') {
                            alert('Order successful, we will contact you in a short while.');
                        }
                        else {
                            alert('Something went wrong with our system.\nIf you already paid, please send us an e-mail.');
                        }
                        console.log('Exception is thrown');
                        console.log(data);
                    });
                });
            },

            onCancel: function (data, actions) {
                console.log(data);
            },

            onError: function (err) {
                console.log(err);
                alert('Something went wrong! Please try again later')
            }
        }, '#paypal-button');
    });
</script>

</html>