<!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-12">

            <div class="row">

                <div class="col-sm-6">

                  <div class="footer-info">
                    <h3>Petition</h3>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                  </div>

                  <div class="footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem.</p>
                    <form action="" method="post">
                      <input type="email" name="email"><input type="submit"  value="Subscribe">
                    </form>
                  </div>

                </div>

                <div class="col-sm-3">
                  <div class="footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><a href="<?php echo base_url();?>information/index">Home</a></li>
                      <li><a href="<?php echo base_url();?>information/about-us">About us</a></li>
                      <!--<li><a href="#">Services</a></li>-->
                      <li><a href="<?php echo base_url();?>information/term-and-condition">Terms of service</a></li>
                      <li><a href="<?php echo base_url();?>information/privacy-policy">Privacy policy</a></li>
                    </ul>
                  </div>
                </div>
                  <div class="col-sm-3">
                  <div class="footer-links">
                    <h4>Contact Us</h4>
                    <p>
					 <!-- Pru Digital Media<br>
					  Noida One, Sector 62, Noida<br>
                      <strong>Phone:</strong> +1 5589 55488 55<br>-->
                      <strong>Email:</strong> info@callupon.org<br>
                    </p>
                  </div>

                  <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>

                </div>

            </div>

          </div>

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Petition</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
        Designed by <a href="">Prudigital Media Pvt Ltd</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->
<script>
  $(function () {
  $(document).scroll(function () {
	  var $nav = $("#header");
	  $nav.toggleClass('header-scrolled', $(this).scrollTop() > $nav.height());
	});
});
  </script>
  <!-- JavaScript Libraries -->
  <script src="<?php base_url();?>/assets/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php base_url();?>/assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php base_url();?>/assets/lib/easing/easing.min.js"></script>
  <script src="<?php base_url();?>/assets/lib/mobile-nav/mobile-nav.js"></script>
  <script src="<?php base_url();?>/assets/lib/wow/wow.min.js"></script>
  <script src="<?php base_url();?>/assets/lib/waypoints/waypoints.min.js"></script>
  <script src="<?php base_url();?>/assets/lib/counterup/counterup.min.js"></script>
  <script src="<?php base_url();?>/assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php base_url();?>/assets/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php base_url();?>/assets/lib/lightbox/js/lightbox.min.js"></script>
</body>
</html>
