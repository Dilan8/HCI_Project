<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact V14</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="img/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/ContactUs.css">
    <!--===============================================================================================-->
</head>

<?php include 'header.php'; ?>
<body>


    <div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form">
                <span class="contact100-form-title">
					Contact Us
				</span>

                <label class="label-input100" for="first-name">Your Name *</label>
                <div class="wrap-input100 rs1 validate-input">
                    <input id="first-name" class="input100" type="text" name="first-name" placeholder="First name">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1 validate-input">
                    <input class="input100" type="text" name="last-name" placeholder="Last name">
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="email">Email Address *</label>
                <div class="wrap-input100 validate-input">
                    <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="phone">Phone Number</label>
                <div class="wrap-input100">
                    <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +94-77-000000">
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="message">Message *</label>
                <div class="wrap-input100 validate-input">
                    <textarea id="message" class="input100" name="message" placeholder="Please enter your message..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                
                    <button class="contact100-form-btn">
						<span>
							Submit
							<i class="zmdi zmdi-arrow-right m-l-8"></i>
						</span>
					</button>
                </div>
            </form>
        </div>
    </div>


    <!--===============================================================================================-->
    <script src="js/Cletwin.js"></script>



</body>
<?php include 'footer.php'; ?>

</html>