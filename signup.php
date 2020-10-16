<?php include 'header.php'; ?>


    <section class="login-block">
        <div class="container login-main">
            <div class="row">

                <div class="col-lg-6 login-sec">
                    <div class="d-flex justify-content-center h-100" style="padding:36px;" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <div class="card">
                            <div class="card-header">
                                <h3>Sign Up</h3>
                                <div class="d-flex justify-content-end social_icon">
                                    <span><i class="fas fa-user"></i></span>

                                </div>
                            </div>
                            <div class="card-body">
                        
                                <form id="signupForm"  action="signin.php">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" data-validation="required" class="form-control" placeholder="username" required>
                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input data-validation="required phone" class="form-control" placeholder="mobile" required>
                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input data-validation="required email"  class="form-control"  placeholder="Email" required>
                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" id="password" class="form-control" name="password" placeholder="password" required>
                                        <span class="input-group-text"><i style="cursor: pointer;" class="far fa-eye" id="togglePassword" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" id="confirmPassword" class="form-control" name="confirmPassword" placeholder="confirm password" required>
                                        <span class="input-group-text"><i style="cursor: pointer;" class="far fa-eye" id="togglePassword" aria-hidden="true"></i></span>
                                    </div>

                                    <div class="form-group" style="position: relative; left:10px;">
                                        <input style="text-align: center;" type="submit" value="Register" class="btn float-right login_btn">
                                    </div>
                                    <div class="form-group">
                                        <input type="button" onclick="myFunction()" value="Reset" class="btn float-right login_btn">
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-center links">
                                    have an account?<a href="signin.php">Sign In</a>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <a href="#">Forgot your password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 back-img-signup" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="wrapper-tick">
                        <div id="tick-mark"></div>
                        <h5>Get you favourite book in your door step</h5>
                    </div>
                    <div class="wrapper-tick">
                        <div id="tick-mark"></div>
                        <h5>Save your favourite book as your whilist list</h5>
                    </div>
                    <div class="wrapper-tick">
                        <div id="tick-mark"></div>
                        <h5>Don't get tired in Searching your favourite book</h5>
                    </div>
                    <div class="wrapper-tick">
                        <div id="tick-mark"></div>
                        <h5>Searching for the school related book? Yes, here its is</h5>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


<?php include 'footer.php'; ?>