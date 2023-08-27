
  <!-- ============================================
                    Footer part start
    ==============================================-->
<footer id="contact" style="background: url(<?php print template_url(); ?>assets/image/footer2.jpg) no-repeat center/cover">
    <section id="footer_part section_divider">
      <div class="footer-background-shadow">
        <div class="ftr_logo_area">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <a href="index.html"><img src="<?php print template_url(); ?>assets/image/log3.png" class="img-responsive" alt="ftr-logo"></a>
              </div>
            </div>
          </div>
        </div>
        <!-- ftr_logo_area ends -->
        <div class="ftr_content_area">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <h3>Opening Hours</h3>
                <ul>
                  <li><span class='day'>Monday</span><span class='time'>05:00 A.M. - 11:00 P.M.</span></li>

                  <li><span class='day'>Tuesday</span><span class='time'>05:00 A.M. - 11:00 P.M.</span></li>
                  <li><span class='day'>wednesday</span><span class='time'>05:00 A.M. - 11:00 P.M.</span></li>
                  <li><span class='day'>Thursday</span><span class='time'>05:00 A.M. - 11:00 P.M.</span></li>
                  <li><span class='day'>Friday</span><span class='time'>05:00 A.M. - 11:00 P.M.</span></li>
                  <li><span class='day'>Saturday</span><span class='time'>07:00 A.M. - 09:00 P.M.</span></li>
                  <li><span class='day'>Sunday</span><span class='time'>Closed</span></li>
                  <li><span class='day'>Holiday</span><span class='time'>Closed</span></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h3>Twetter Feed</h3>
                <p>We want to introduce you to a new ess theme GYMNASIUM persue new press theme. This the new idea for
                  theme, hope you will like.<br>24 July 2017 </p>
                <p class="p_end">We want to introduce you to a new ess theme GYMNASIUM persue new press theme.<br>20
                  July 2017 </p>
              </div>
              <div class="col-lg-4">
                <div class="col-sm-12 contact">
                  <h3>Contact</h3>
                  <ul>
                    <li><i class="fa fa-map-marker"></i>1234 Park Street Avenue, NY City America.</li>
                    <li><i class="fa fa-map-marker"></i>+88 017 386 96914, +88 017 419 69683</li>
                    <li><i class="fa fa-map-marker"></i>info@admin.com, admin@info.com</li>
                  </ul>
                </div>
                <div class="col-sm-12 social">
                  <h3>get Social</h3>
                  <ul>
                    <li><i class="fa-brands fa-facebook-f"></i></li>
                    <li><i class="fa-brands fa-instagram"></i></li>
                    <!-- <li><a target="_blank" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                      <li><a target="_blank" href="#"><i class="fa-brands fa-behance"></i></li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ftr_bottom">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <p>Copyright &copy; All rights reserved by <span>Restaurant.</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 </footer>

  <!-- footer part ends here -->
<?php
if(is_logged()){
    print chat_footer();
}
?>

<button id="to-top" class="btn" style="display: block;"></button>

<script>
    jQuery(window).on('load', function() {

    if (jQuery(".categorySideBar .module-categories>.well>ul.nav>li").length > 5) {
            jQuery(".categorySideBar").append("<span class='viewMoreCategory'>weitere anzeigen</span>");
        }

        jQuery(".viewMoreCategory").on("click", function() {
            jQuery(".categorySideBar .module-categories>.well>ul.nav").toggleClass("show_ucmAll");

            var currentVMBtnText = jQuery(".viewMoreCategory").text();
            if (currentVMBtnText === "weitere anzeigen") {
                jQuery(".viewMoreCategory").html("ausblenden");
            } else {
                jQuery(".viewMoreCategory").html("weitere anzeigen");
            }
        });

    });

    $(window).on("load", function() {
        $(".categorySideBar .module-categories ul li:has(ul)").addClass("hasSubCat");
        $(".hasSubCat").append(
            "<span class='clickExpandBtn'><i class='fa fa-caret-down' aria-hidden='true'></i></span>");
    });

    $(window).bind("load resize", function(e) {
        $(".categorySideBar .module-categories .well>ul.nav li .clickExpandBtn").on("click", function() {
            $(this).parent().toggleClass("showDropCat");
            $(this).children().toggleClass("fa-caret-up");
        });
    });

    // Sickty footer
    $(document).ready(function() {
        var $body = $('body');
        var $footer = $('footer');
        var footerHeight = $footer.outerHeight();
        var scrollThreshold = $(document).height() - $(window).height() - footerHeight;
        var isTopSticky = $body.hasClass('footer-top-sticky');
        var isCopyRightSticky = $body.hasClass('footer-copyright-sticky');
        var isBothSticky = $body.hasClass('footer-copyright-sticky') && $body.hasClass('footer-top-sticky');

        function footerSticky() {
            var isSticky = $(window).scrollTop() >= 50;
            if (isTopSticky) {
                $footer.toggleClass('footer-top-sticky', isSticky);
            } else if (isCopyRightSticky) {
                $footer.toggleClass('copyright-sticky', isSticky);
            }

            if (isBothSticky) {
                $footer.toggleClass('both-sticky', isSticky);
            }
        }

        function destroySticky() {
            var shouldDestroySticky = $(window).scrollTop() >= scrollThreshold;
            $footer.toggleClass('destroy-sticky', shouldDestroySticky);
        }

        $(window).scroll(function () {
            footerSticky();
            destroySticky();
        });

    })
</script>

        <!-- Jquery UI-->
        <script type="text/javascript" src="<?php print template_url(); ?>assets/js/jquery-ui.min.js"></script>
        <!-- Bootstrap -->
        <script type="text/javascript" src="<?php print template_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php print template_url('assets/js/bootstrap-4.6.min.js'); ?>"></script>
        <!-- Select2 -->
        <script type="text/javascript" src="<?php print template_url('assets/js/select2.min.js'); ?>"></script>
        <!-- Slick -->
        <script type="text/javascript" src="<?php print template_url('assets/js/slick.min.js'); ?>"></script>
        <!-- WOW Js -->
        <script type="text/javascript" src="<?php print template_url('assets/js/wow.min.js'); ?>"></script>
        <!-- Owl Carousel -->
        <script type="text/javascript" src="<?php print template_url('assets/js/owl.carousel.min.js'); ?>"></script>
        <!-- Rasing Main-->
        <script type="text/javascript" src="<?php print template_url('assets/js/raising-main.js'); ?>"></script>
        <!-- Elevate Zoom -->
        <script src="<?php print template_url(); ?>assets/plugins/elevatezoom/jquery.elevatezoom.js"></script>
        <!-- Magnific Popup -->
        <script type="text/javascript" src="<?php print template_url(); ?>assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
        <!-- Meanmenu JS -->
        <script type="text/javascript" src="<?php print template_url(); ?>assets/plugins/meanmenu/jquery.meanmenu.min.js"></script>
        <script>
            mw.lib.require('slick');
            mw.lib.require('collapse_nav');
        </script>
        <!-- Main Script -->
        <script type="text/javascript" src="<?php print template_url('assets/js/main.js'); ?>"></script>

        <script>
            $('.header-member-user i').click(function(){
                $('ul.header-user-dropdown').toggleClass('show')
            });

            $(document).ready(function() {
                var social_param ={};
                social_param.id="footer_socials";
                mw.load_module('social_links','#footer_socials',null,social_param);

                $(".inner-page .breadcrumb").addClass("container");
                var menu_param ={};
                menu_param.template="footer";
                menu_param.id="footer_menu";
                menu_param.name="footer_menu";
                mw.load_module('menu','#footermenu',null,menu_param);

                mw.load_module('legals/shipping-info','#legalShipping');
            });
        </script>

        <!--Pricing Ultra Layout-->
        <?php
            if(file_exists(module_dir('')."global_code_add_for_template.php")){
                include module_dir('')."global_code_add_for_template.php";
            }
            if(file_exists(module_dir('')."global_template_footer.php")){
                include module_dir('')."global_template_footer.php";
            }
        ?>

    </body>
</html>
