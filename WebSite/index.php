<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'; ?>
    <title>Home</title>
</head>
<body>

<?php include 'navbar.php'; ?>

<div id="loader"></div>

<div id="content">


    <div class="containter">
        <img src="images/banners/Top Boost/HOMEg.png" class="img-responsive" id="jumbotron">
        <h1>
            <a href="boosting.php" class="centered bottom-right"><span class="badge badge-secondary">Services</span></a>
        </h1>
    </div>
    <br><br>
    <br><br><br>
    <div class="container">
        <div class="row align-items-start">
            <div class="col-4">
                <div class="card" id="firstCard">
                    <div class="card-header" id="firstName">
                        Name
                    </div>
                    <img class="card-img-top slikaa" id="firstImg"
                         src="http://solarhythmia.com/art-gallery/vectors/800x600/rainbow-kirby-800x600.jpg"
                         data-toggle="modal" data-target="#myModal1">
                    <div id="myModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog modal-xl" style="text-align: center">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="http://solarhythmia.com/art-gallery/vectors/800x600/rainbow-kirby-800x600.jpg"
                                         name="firstImg" id="slikam" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="card-text" id="firstReview">
                        Review
                    </p>
                    <div class="card-footer">
                        <small class="text-muted"><b>Tap to expand!</b></small>
                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="card" id="secondCard">
                    <div class="card-header" id="secondName">
                        Name
                    </div>
                    <img class="card-img-top" id="secondImg"
                         src="http://www.fonditos3d.com/800x600/seta-de-mario-bros.jpg" data-toggle="modal"
                         data-target="#myModal2">
                    <div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog modal-xl" style="text-align: center">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="http://www.fonditos3d.com/800x600/seta-de-mario-bros.jpg" name="secondImg"
                                         id="slikam" class="img-responsive" style="max-height:1100px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="card-text" id="secondReview">
                        Review
                    </p>
                    <div class="card-footer">
                        <small class="text-muted"><b>Tap to expand!</b></small>
                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="card" id="thirdCard">
                    <div class="card-header" id="thirdName">
                        Name
                    </div>
                    <img class="card-img-top" id="thirdImg"
                         src="http://solarhythmia.com/art-gallery/fractals/800x600/birth-of-a-galaxy-800x600.jpg"
                         data-toggle="modal" data-target="#myModal3">
                    <div id="myModal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog  modal-xl" style="text-align: center">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img name="thirdImg"
                                         src="http://solarhythmia.com/art-gallery/fractals/800x600/birth-of-a-galaxy-800x600.jpg"
                                         id="slikam" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                    <p class="card-text" id="thirdReview">
                        Review
                    </p>
                    <div class="card-footer">
                        <small class="text-muted"><b>Tap to expand!</b></small>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="http://solarhythmia.com/art-gallery/vectors/800x600/rainbow-kirby-800x600.jpg" id="slikaa" class="img-fluid sticky">
            </div>
            <div class="col-md-8"><h1 style="text-align: center"><span class="badge badge-secondary">Why Are We the Best ?</span></h1>
                <ul>
                    <div id="accordion">
                        <li>
                            <div>
                                <div id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                            Security.
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        The developers were so dedicated to they invented a new way of boosting in order
                                        to grant YOU safety, so you can feel safe with us.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                            Price
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        The price and quality of our services is one of the best you can find.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                            Friendly Boosters
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Our team has years of experience so every one of them is friendly and
                                        is glad to hear you out and make sure that YOU are 101% satisfied.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div id="headingFour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                            VPN
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        The developers were so dedicated to they invented a new way of boosting in order
                                        to grant YOU safety, so you can feel safe with us.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div id="headingFive">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseFive" aria-expanded="false"
                                                aria-controls="collapseFive">
                                            Money back guarantee
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        And as a extra bonus to the security that we offer we want you to
                                        feel safe that that if you are not satisfied by our services you can freely
                                        email us and you
                                        will get Full Refund no questions asked.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div id="headingSix">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseSix" aria-expanded="false"
                                                aria-controls="collapseSix">
                                            Fast&Reliable
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        We are dedicated to satisfy your needs and thats why we offer fast&reliable
                                        results.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div id="headingSeven">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseSeven" aria-expanded="false"
                                                aria-controls="collapseSeven">
                                            24/7 Support
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        The support team is available 24/7 and will be glad to assist and help you
                                        any way they can.
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <h1><p style="text-align: center"><b>With us you can feel safe and be 101% sure that you will get better results
                than
                expected.</b></p></h1>

    <div class="container">
        <div class="row">
            <div class="col-md-8"><h1 style="text-align: center"><span class="badge badge-secondary">Top Boost features</span></h1>
                <ul>
                    <div id="accordion">
                        <li>
                            <div>
                                <div id="headingEight">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseEight"
                                                aria-expanded="true" aria-controls="collapseEight">
                                            Invisible to Riot
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseEight" class="collapse show" aria-labelledby="headingEight"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        The developers have been working so hard to offer 100% security so
                                        that RIOT have no way of detecting our service.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div id="headingNine">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseNine" aria-expanded="false"
                                                aria-controls="collapseNine">
                                            Kind 24/7 support
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Our support team is glad to assist you with any questions you might
                                        have at any time.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div id="headingTen">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseTen" aria-expanded="false"
                                                aria-controls="collapseTen">
                                            High Win Rate Percentage
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Our professionals guarantee you 95% win rate success
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div id="headingEleven">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse"
                                                data-target="#collapseEleven"
                                                aria-expanded="false" aria-controls="collapseEleven">
                                            Team of Professionals
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Our team of professionals is always there to satisfy you and give
                                        you results better than expected.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div id="headingTwelve">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseTwelve" aria-expanded="false"
                                                aria-controls="collapseTwelve">
                                            Pause Boost
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Menage your boost by pausing it when you chose.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div id="headingThirteen">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseThirteen" aria-expanded="false"
                                                aria-controls="collapseThirteen">
                                            Spectate Boost
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Keep track of your boost and learn how you can be better.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div id="headingFourteen">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseFourteen" aria-expanded="false"
                                                aria-controls="collapseFourteen">
                                            Check Progress
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        You can check the progress at any time.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div id="headingFifteen">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseFifteen" aria-expanded="false"
                                                aria-controls="collapseFifteen">
                                            Our Goal
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Our goal is to always keep the costumers satisfied and give them better results
                                        than expected.
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
                </ul>
            </div>
            <div class="col-md-4">
                <img src="http://www.fonditos3d.com/800x600/seta-de-mario-bros.jpg" id="slikaa" class="img-fluid sticky">

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="http://solarhythmia.com/art-gallery/fractals/800x600/birth-of-a-galaxy-800x600.jpg"
                     id="slikaa" class="img-fluid sticky">
            </div>
            <div class="col-md-8"><h1 style="text-align: center"><span class="badge badge-danger">More Apropriate Prices</span></h1>
                <ul class="no_bullet">
                <li><h1><a href="https://elo-boost.net/boosting/purchase"><span class="badge badge-primary">Elo Boost</span></a></h1></li>
                <li><h1><a href="https://eloboost24.eu/boosting"><span class="badge badge-primary">Elo Boost 24</span></a></h1></li>
                <li><h1><a href="https://rankedboost.com/league-of-legends/elo-boost/solo-queue/"><span class="badge badge-primary">Ranked Boost</span></a></h1></li>
                <li><h1><a href="https://boosteria.org/lol-elo-boosting"><span class="badge badge-primary">Boosteria</span></a></h1></li>
                </ul>
            </div>
        </div>
    </div>
    <img src="images/banners/Top%20Boost/bg_2.png" class="img-responsive" id="jumbotron">
</div>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
<script src="scripts/navscript.js"></script>
<script src="scripts/index.js"></script>
<script>

    function centerModal() {
        $(this).css('display', 'block');
        var $dialog = $(this).find(".modal-dialog");
        var offset = ($(window).height() - $dialog.height()) / 2;
        // Center modal vertically in window
        $dialog.css("margin-top", offset);
    }

    $('.modal').on('show.bs.modal', centerModal);
    $(window).on("resize", function () {
        $('.modal:visible').each(centerModal);
    });



</script>
</html>