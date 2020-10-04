<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Home</title>
    <style>
        .item {
            border: 1px solid #0c4da2;
            padding: 36px 10px;
            cursor: pointer;
            position: relative;
            width: 250px;
        }

        .item h3 {
            font-size: 16px;
            text-transform: uppercase;
            font-weight: bold;
            margin-bottom: 10px;
            height: 22px;
            overflow: hidden;
            text-overflow: ellipsis;
            text-align: center;
        }
        .item p{
            text-align: center;
            font-weight: bold;
        }
        .owl-prev {
            left: -30px;
        }

        .owl-next {
            right: -30px;
        }

        .owl-prev,
        .owl-next {
            position: absolute;
            top: 30%
        }

        .owl-prev span,
        .owl-next span {

            font-size: 60px;
            color: #007bff;
        }

        .owl-theme .owl-nav [class*=owl-] {
            background: none;
        }
    </style>
</head>
<?php include 'header.php'; ?>

<body>
    <!--Home Page Animation for advertisment-->
    <section class="warpper" style="background: linear-gradient(45deg, white, lightblue);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    ` <div class="owl-one owl-carousel owl-theme">
                        <div class="item-top">
                            <img src="img/03.jpg" class="rounded" alt="Mountains">
                        </div>
                        <div class="item-top">
                            <img src="img/03.jpg" class="rounded" alt="Mountains">
                        </div>
                        <div class="item-top">
                            <img src="img/02.jpg" class="rounded" alt="Mountains">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--Home Page Slide Show for Top 10 best selling ....-->

    <section class="wrapper1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading_section">Top 10 best selling...</h2>
                    ` <div class="owl-two owl-carousel owl-theme">
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <div class="item">
                                <img style="padding: 10px;left: 158px;top: 14px; padding: 10px;position: absolute;width: 101px;height: 100px;" src="img/rating1.png" class="rating" alt="Mountains">
                                <img style="padding: 10px;" src="img/09.jpg" alt="Mountains">
                                <h3>book name</h3>
                                <h3>Gener</h3>
                                <h3>author</h3>
                                <div class="btn-wrapper">
                                    <button type="button" class="btn btn-primary btn-xs">BUY</button>
                                    <button type="button" class="btn btn-warning btn-xs"><i class="fas fa-cart-plus"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <div class="item">
                                <img style="padding: 10px;left: 158px;top: 14px; padding: 10px;position: absolute;width: 101px;height: 100px;" src="img/rating1.png" class="rating" alt="Mountains">
                                <img style="padding: 10px;" src="img/08.jpg" alt="Mountains">
                                <h3>book name</h3>
                                <h3>Gener</h3>
                                <h3>author</h3>
                                <div class="btn-wrapper">
                                    <button type="button" class="btn btn-primary btn-xs">BUY</button>
                                    <button type="button" class="btn btn-warning btn-xs"><i class="fas fa-cart-plus"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-heart"></i></button>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <div class="item">
                                <img style="padding: 10px;left: 158px;top: 14px; padding: 10px;position: absolute;width: 101px;height: 100px;" src="img/rating1.png" class="rating" alt="Mountains">
                                <img style="padding: 10px;" src="img/09.jpg" alt="Mountains">
                                <h3>book name</h3>
                                <h3>Gener</h3>
                                <h3>author</h3>
                                <div class="btn-wrapper">
                                    <button type="button" class="btn btn-primary btn-xs">BUY</button>
                                    <button type="button" class="btn btn-warning btn-xs"><i class="fas fa-cart-plus"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-heart"></i></button>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <div class="item">
                                <img style="padding: 10px;left: 158px;top: 14px; padding: 10px;position: absolute;width: 101px;height: 100px;" src="img/rating1.png" class="rating" alt="Mountains">
                                <img style="padding: 10px;" src="img/11.jpg" alt="Mountains">
                                <h3>book name</h3>
                                <h3>Gener</h3>
                                <h3>author</h3>
                                <div class="btn-wrapper">
                                    <button type="button" class="btn btn-primary btn-xs">BUY</button>
                                    <button type="button" class="btn btn-warning btn-xs"><i class="fas fa-cart-plus"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Home Page Slide Show for The months new Arivel-->
    <section class="wrapper2" style="background: linear-gradient(180deg, white, #007bff);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading_section">Top 10 best selling...</h2>
                    ` <div class="owl-two owl-carousel owl-theme">
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <div class="item" style="background-color: white;">

                                <img style="padding: 10px;" src="img/09.jpg" alt="Mountains">
                                <h3>book name</h3>
                                <h3>Gener</h3>
                                <h3>author</h3>
                                <div class="btn-wrapper">
                                    <button type="button" class="btn btn-primary btn-xs">BUY</button>
                                    <button type="button" class="btn btn-warning btn-xs"><i class="fas fa-cart-plus"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <div class="item" style="background-color: white;">
                                <img style="padding: 10px;" src="img/08.jpg" alt="Mountains">
                                <h3>book name</h3>
                                <h3>Gener</h3>
                                <h3>author</h3>
                                <div class="btn-wrapper">
                                    <button type="button" class="btn btn-primary btn-xs">BUY</button>
                                    <button type="button" class="btn btn-warning btn-xs"><i class="fas fa-cart-plus"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-heart"></i></button>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <div class="item" style="background-color: white;">
                                <img style="padding: 10px;" src="img/09.jpg" alt="Mountains">
                                <h3>book name</h3>
                                <h3>Gener</h3>
                                <h3>author</h3>
                                <div class="btn-wrapper">
                                    <button type="button" class="btn btn-primary btn-xs">BUY</button>
                                    <button type="button" class="btn btn-warning btn-xs"><i class="fas fa-cart-plus"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-heart"></i></button>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <div class="item" style="background-color: white;">
                                <img style="padding: 10px;" src="img/11.jpg" alt="Mountains">
                                <h3>book name</h3>
                                <h3>Gener</h3>
                                <h3>author</h3>
                                <div class="btn-wrapper">
                                    <button type="button" class="btn btn-primary btn-xs">BUY</button>
                                    <button type="button" class="btn btn-warning btn-xs"><i class="fas fa-cart-plus"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
    </section>

    <!--Home Page Slide Show for Best Selling Sinhala Fiction-->
    <section class="wrapper3">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading_section">Best Selling Sinhala Fiction</h2>
                    ` <div class="owl-two owl-carousel owl-theme">
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <div class="item">

                                <img style="padding: 10px;" src="img/09.jpg" alt="Mountains">
                                <h3>book name</h3>
                                <h3>Gener</h3>
                                <h3>author</h3>
                                <div class="btn-wrapper">
                                    <button type="button" class="btn btn-primary btn-xs">BUY</button>
                                    <button type="button" class="btn btn-warning btn-xs"><i class="fas fa-cart-plus"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <div class="item">
                                <img style="padding: 10px;" src="img/08.jpg" alt="Mountains">
                                <h3>book name</h3>
                                <h3>Gener</h3>
                                <h3>author</h3>
                                <div class="btn-wrapper">
                                    <button type="button" class="btn btn-primary btn-xs">BUY</button>
                                    <button type="button" class="btn btn-warning btn-xs"><i class="fas fa-cart-plus"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-heart"></i></button>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <div class="item">
                                <img style="padding: 10px;" src="img/09.jpg" alt="Mountains">
                                <h3>book name</h3>
                                <h3>Gener</h3>
                                <h3>author</h3>
                                <div class="btn-wrapper">
                                    <button type="button" class="btn btn-primary btn-xs">BUY</button>
                                    <button type="button" class="btn btn-warning btn-xs"><i class="fas fa-cart-plus"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-heart"></i></button>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <div class="item">

                                <img style="padding: 10px;" src="img/09.jpg" alt="Mountains">
                                <h3>book name</h3>
                                <h3>Gener</h3>
                                <h3>author</h3>
                                <div class="btn-wrapper">
                                    <button type="button" class="btn btn-primary btn-xs">BUY</button>
                                    <button type="button" class="btn btn-warning btn-xs"><i class="fas fa-cart-plus"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <button id="button" title="Go to top">TOP</button>


    <script>
        var btn = $('#button');

        $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });

        btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, '300');
        });
    </script>

</body>
<?php include 'footer.php'; ?>

</html>