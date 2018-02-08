<!DOCTYPE html>
<html lang="en">
<head>

    <title>Honor Boost</title>
    <?php include 'head.php'; ?>

</head>
<body>
<?php include 'navbar.php'; ?>
<div class="jumbotron banertext bg5">
    <h1>Honor boosting</h1>
</div>
<div class="jumbotron shield" style="text-align: center">
    <br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2 backgroundH"></div>
        <div class="col-md-6" style="color: #375990">

            <input id="slider" data-slider-id='honorSlider' type="text" data-slider-handle="custom" data-slider-min="2"
                data-slider-max="5" data-slider-step="1" data-slider-value="2"/>
            <h5 id="level"></h5>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active" id="regularButton">
                    <input type="radio" name="options" autocomplete="off" id="regular" checked> Regular boost
                </label>
                <label class="btn btn-secondary" id="safeButton">
                    <input type="radio" name="options" autocomplete="off" id="safe"> Safe boost
                </label>
            </div>
            <h4 id="price"></h4>
            <h6>
                <del class="text text-danger" id="extraval"></del>
            </h6>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 form-group">
                    <div style="padding-top: 5px">
                        <select class="form-control" name="server" id="server">
                            <option>EU West</option>
                            <option>EU Nordic & East</option>
                            <option>Oceania</option>
                        </select>
                    </div>
                    <div style="padding-top: 5px">
                        <input type="text" class="form-control" id="champion" placeholder="Champions">
                    </div>
                    <div style="padding-top: 5px">
                        <input type="text" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div id="paypal-button">
            </div>
        </div>
        <div class="col-md-3 backgroundH"></div>
    </div>
    <br><br><br>
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
<script src="bootstrap-slider-master/dist/bootstrap-slider.min.js"></script>
<script src="scripts/honorboost.js"></script>
<script>
    function isValid() {
        return !($("#email").val() == '');
    }

    function onChangeEmailOrDiscord(actions) {
        if (!isValid()) {
            actions.disable()
        }
        else {
            actions.enable();
        }
    }

    function onChangeEmail(handler) {
        document.querySelector('#email').addEventListener('change', handler);
    }


    function post() {
        return new Promise(function (resolve, reject) {
            var type;
            type = "Honor boost, level: " + $("#slider").val();
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
                color: 'gold',
                size: 'small',
                label: 'pay',
                shape: 'rect'
            },
            client: {
                sandbox: 'AaPOkuI37X5O9DO2NOQo0gP2YyNCVCOA7_d1CnE3oZgyq1EqJKt5EqQAhVHtNqJ-rhHHEamHP2YqYgc2',
                production: 'AXJRo54FMZ6kkczNMyRsbw5kFI3aQZvgG_aLQn95WPNlXeEZklUUkaqeT_5N15rEU6quMohDGyHTE9P7'
            },
            validate: function (actions) {
                onChangeEmailOrDiscord(actions);
                onChangeEmail(function () {
                    onChangeEmailOrDiscord(actions);
                })
            },
            onClick: function () {
                if (!isValid()) {
                    alert('Please enter e-mail')
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
</body>
</html>