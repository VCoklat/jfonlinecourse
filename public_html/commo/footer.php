   <!--==========================
    Contact Section
  ============================-->
    <section id="contact" style="border-radius: 50px 50px 0px 0px; background:#292929; margin-top: -50px">
        <div class="container">


            <div class="row wow fadeInUp">

                <div class="col-md-3">
                    <div class="map mb-4 mb-lg-0">
                        <h1 class="font-weight-bold big text-white" style="font-size:calc(20px + 2vw);">Reach Us</h1>
                    </div>
                </div>

                <div class="col-md-9 ">


                    <div class="form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="#" method="post" role="form" class="contactForm">
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" data-rule="email"
                                        data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" data-rule="minlen:4"
                                    data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required"
                                    data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-left"><button type="submit" title="Send Message"
                                    class="btn btn-outline-warning">Send Message</button></div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #contact -->

</main>

            </div>
            <!--==========================
        Footer
      ============================-->
 <!--==========================
        Footer
      ============================-->
            <footer id="footer">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">

                            <div class=" col-md-3 footer-info pt-3">
                                <img src="img/logo1.png" alt="" width="80%" class="img-fluid">

                            </div>



                            <div class=" col-md-6 footer-contact ">

                                <p class="mb-1"><i class="fa fa-map-marker maincolor"></i>&nbsp;&nbsp;&nbsp&nbsp; Kembang Wangi II no K3</p>
                                <p class="mb-1"><i class="fa fa-whatsapp maincolor"></i>&nbsp;&nbsp;&nbsp; 0878-8858-5502</p>
                                <p class="mb-1"><i class="fa fa-envelope maincolor"></i>&nbsp;&nbsp; hello@commocreative.com</p>



                            </div>

                            <div class=" col-md-3 footer-newsletter text-center">
                                <div class="social-links">
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" class="google-plus"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </footer><!-- #footer -->

            <!--<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>-->
            <!-- Uncomment below i you want to use a preloader -->
            <!-- <div id="preloader"></div> -->
            <script>
                $(window).scroll(function() {
   var t=$(window).scrollTop()+1;
   var c=$('html').outerHeight();
   var p=(t/c*100).toFixed(0);
   if (p>3) {
        $('icon_logo').hide()
   }
});
            </script>
            <!-- JavaScript Libraries -->
            <script src="lib/jquery/jquery.min.js"></script>
            <script src="lib/jquery/jquery-migrate.min.js"></script>
            <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/mobile-nav/mobile-nav.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/counterup/counterup.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="lib/isotope/isotope.pkgd.min.js"></script>
            <script src="lib/lightbox/js/lightbox.min.js"></script>
            <!-- Contact Form JavaScript File -->
            <script src="contactform/contactform.php"></script>

            <!-- Template Main Javascript File -->
            <script src="js/main.js"></script>

</body>


<!-- Mirrored from commo.jfonlinecourse.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jan 2020 05:42:35 GMT -->
</html>
