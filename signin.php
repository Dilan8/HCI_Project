<!DOCTYPE html>
<html lang="en">

<head>
    <title>SignIp</title>
    <link rel="stylesheet" href="css/signin.css">
</head>
<?php include 'header.php'; ?>

<body>

    <section class="login-block">
        <div class="container login-main">
            <div class="row">
                <div class="col-lg-6 back-img" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">

                </div>
                <div class="col-lg-6 login-sec">




                    <div class="d-flex justify-content-center h-100" style="padding:36px;" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <div class="card">
                            <div class="card-header">
                                <h3>Sign In</h3>
                                <div class="d-flex justify-content-end social_icon">
                                    <span><i class="fas fa-user"></i></span>

                                </div>
                            </div>
                            <div class="card-body">
                                <div id="error"></div>
                                <form id="form">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" id="name" class="form-control" name="name" placeholder="username">

                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" id="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    <div class="row align-items-center remember">
                                        <input type="checkbox">Remember Me
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Login" class="btn float-right login_btn">
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-center links">
                                    Don't have an account?<a href="signup.php">Sign Up</a>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <a href="#">Forgot your password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</body>
<?php include 'footer.php'; ?>

</html>