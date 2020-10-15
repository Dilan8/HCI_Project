 <!-- Start Footer Area -->
 <footer class="footer">
     <!-- Footer Top -->
     <div class="footer-top section">
         <div class="container">
             <div class="row">
                 <div class="col-lg-5 col-md-6 col-12">
                     <!-- Single Widget -->
                     <div class="single-footer about">
                         <div class="logo">
                             <a href="index.html"><img src="images/slogo.png" alt="#"></a>
                         </div>
                         <p class="text">Sarasavi.lk is a website for an extensive collection of books but also an interactive and innovative destination designed to make it fun and exciting to discover and shop for new books and gifts online.</p>
                         <p class="call">Got Question? Call us 24/7<span><a href="(+94) 11 2820820">(+94) 11 2820820</a></span></p>
                     </div>
                     <!-- End Single Widget -->
                 </div>
                 <div class="col-lg-2 col-md-6 col-12">
                     <!-- Single Widget -->
                     <div class="single-footer links">
                         <h4>Information</h4>
                         <ul>
                             <li><a href="#">About Us</a></li>
                             <li><a href="#">Faq</a></li>
                             <li><a href="#">Terms & Conditions</a></li>
                             <li><a href="ContactUs.php">Contact Us</a></li>
                             <li><a href="#">Help</a></li>
                         </ul>
                     </div>
                     <!-- End Single Widget -->
                 </div>
                 <div class="col-lg-2 col-md-6 col-12">
                     <!-- Single Widget -->
                     <div class="single-footer links">
                         <h4>Customer Service</h4>
                         <ul>
                             <li><a href="#">Payment Methods</a></li>
                             <li><a href="#">Money-back</a></li>
                             <li><a href="#">Returns</a></li>
                             <li><a href="#">Shipping</a></li>
                             <li><a href="#">Privacy Policy</a></li>
                         </ul>
                     </div>
                     <!-- End Single Widget -->
                 </div>
                 <div class="col-lg-3 col-md-6 col-12">
                     <!-- Single Widget -->
                     <div class="single-footer social">
                         <h4>Get In Tuch</h4>
                         <!-- Single Widget -->
                         <div class="contact">
                             <ul>
                                 <li>2B Samudradevi Mawatha,</li>
                                 <li>Nugegoda.</li>
                                 <li>webadmin@sarasavi.lk</li>
                                 <li>(+94) 11 2820820</li>
                             </ul>
                         </div>
                         <!-- End Single Widget -->
                         <ul>
                             <li><a href="#"><i class="ti-facebook"></i></a></li>
                             <li><a href="#"><i class="ti-twitter"></i></a></li>
                             <li><a href="#"><i class="ti-flickr"></i></a></li>
                             <li><a href="#"><i class="ti-instagram"></i></a></li>
                         </ul>
                     </div>
                     <!-- End Single Widget -->
                 </div>
             </div>
         </div>
     </div>
     <!-- End Footer Top -->
     <div class="copyright">
         <div class="container">
             <div class="inner">
                 <div class="row">
                     <div class="col-lg-6 col-12">
                         <div class="left">
                             <p>Copyright © 2020 <a href="www.sarasavi.lk" target="_blank">Wpthemesgrid</a> - All Rights Reserved.</p>
                         </div>
                     </div>
                     <div class="col-lg-6 col-12">
                         <div class="right">
                             <img src="images/payments.png" alt="#">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- /End Footer Area -->

 <!-- Jquery -->
 <script src="js/jquery.min.js"></script>
 <script src="js/jquery-migrate-3.0.0.js"></script>
 <script src="js/jquery-ui.min.js"></script>
 <!-- Popper JS -->
 <script src="js/popper.min.js"></script>
 <!-- Bootstrap JS -->
 <script src="js/bootstrap.min.js"></script>
 <!-- Color JS -->
 <script src="js/colors.js"></script>
 <!-- Slicknav JS -->
 <script src="js/slicknav.min.js"></script>
 <!-- Owl Carousel JS -->
 <script src="js/owl-carousel.js"></script>
 <!-- Magnific Popup JS -->
 <script src="js/magnific-popup.js"></script>
 <!-- Waypoints JS -->
 <script src="js/waypoints.min.js"></script>
 <!-- Countdown JS -->
 <script src="js/finalcountdown.min.js"></script>
 <!-- Nice Select JS -->
 <script src="js/nicesellect.js"></script>
 <!-- Flex Slider JS -->
 <script src="js/flex-slider.js"></script>
 <!-- ScrollUp JS -->
 <script src="js/scrollup.js"></script>
 <!-- Onepage Nav JS -->
 <script src="js/onepage-nav.min.js"></script>
 <!-- Easing JS -->
 <script src="js/easing.js"></script>
 <!-- Active JS -->
 <script src="js/active.js"></script>
 <!--===============================================================================================-->
 <script src="js/Cletwin.js"></script>
 <script src="js/sweetalert.min.js"></script>
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>
      AOS.init();
   </script>

   <!--===============================================================================================-->
   <script>
	

    // Get the customModal
    var customModal = document.getElementById("myModal");
    
    // Get the button that opens the customModal
    var btn = document.getElementById("myBtn");
    var edit = document.getElementById("edit1");
    var cac = document.getElementById("cac");
    
    
    // Get the <span> element that closes the customModal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the customModal 
    btn.onclick = function() {
      customModal.style.display = "block";
    }
    edit.onclick = function() {
      customModal.style.display = "none";
    }
    cac.onclick = function() {
      customModal.style.display = "none";
    }
    
    // When the user clicks on <span> (x), close the customModal
    span.onclick = function() {
      customModal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the customModal, close it
    window.onclick = function(event) {
      if (event.target == customModal) {
        customModal.style.display = "none";
      }
    }
    </script>
 </body>

 </html>