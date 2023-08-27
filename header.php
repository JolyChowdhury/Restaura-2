<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" <?php print lang_attributes(); ?>>

<head>

    <title>{content_meta_title}</title>
    <?php if (Config::get('custom.disableGoggleIndex') == 1) : ?>
        <meta name="robots" content="noimageindex,nomediaindex" />
    <?php endif; ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="{content_meta_title}" />
    <meta name="keywords" content="{content_meta_keywords}" />
    <meta name="description" content="{content_meta_description}" />
    <meta property="og:type" content="{og_type}" />
    <meta property="og:url" content="{content_url}" />
    <meta property="og:image" content="{content_image}" />
    <meta property="og:description" content="{og_description}" />
    <meta property="og:site_name" content="{og_site_name}" />

    <script>
        $(document).ready(function() {
            mw.require('icon_selector.js');
            mw.lib.require('bootstrap_select');

            $('.selectpicker').selectpicker();
            mw.iconLoader()
            .addIconSet('fontAwesome')
            .addIconSet('iconsMindLine')
            .addIconSet('iconsMindSolid')
            .addIconSet('mwIcons')
            .addIconSet('materialIcons');
        });
    </script>

    <?php
    print(template_head(true));
    //Seo data for google anaylytical
    $is_installed_status = Config::get('microweber.is_installed');
    (@$is_installed_status) ? basicGoogleAnalytical() : '';
    //end code
    ?>

    <!-- Font Family -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/font-face.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/all.min.css">
    <!-- Remix Icon -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/remixicon/remixicon.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/slick.css">
    <!-- Bootstrap v5.3 -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/bootstrap.min.css">
    <!-- jQuery UI -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/jquery-ui.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/select2.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/owl.theme.green.css">
    <!-- Magnific Popup CSS -->
    <link href="<?php print template_url(); ?>assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" />
    <!-- Meanmenu CSS -->
    <link href="<?php print template_url(); ?>assets/plugins/meanmenu/meanmenu.min.css" rel="stylesheet" />
    <!-- Template CSS  -->
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php print template_url(); ?>assets/css/responsive.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?php print template_url(); ?>assets/<?php print template_url(); ?>assets/image/index.webp">

    <?php print get_template_stylesheet(); ?>
    <?php include('template_settings.php'); ?>

</head>

    <body class="boost-body <?php print helper_body_classes(); print 'member-nav-inverse ' . $header_style . ' ' . $sticky_header . ' ' . $footer_top_sticky . ' ' . $footer_copyright_sticky. ' ' . $member_menu_icon;  if(defined('IS_HOME')){ print ' homepage'; }?> " >
        <input type="hidden" id="page_id_for_layout_copy" value="<?= PAGE_ID; ?>">
        <?=preloader_html($preloader_shop_name, $count_character);?>
   <!-- header start -->
   <header id="home">
    <nav class="navbar navbar-expand-lg main_menu">
      <div class="container">
        <a class="navbar-brand logo" href="#"><img src="<?php print template_url(); ?>assets/image/log3.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">about</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#chef">chef</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#menu" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                menu
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">menu 01</a></li>
                <li><a class="dropdown-item" href="#">menu 02</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="pages" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                pages
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">services</a></li>
                <li><a class="dropdown-item" href="#">booking table</a></li>
                <li><a class="dropdown-item" href="#">team</a></li>
                <li><a class="dropdown-item" href="#">testimonial</a></li>
                <li><a class="dropdown-item" href="#">gallery</a></li>
                <li><a class="dropdown-item" href="#">chefs</a></li>
                <li><a class="dropdown-item" href="#">404</a></li>
                <li><a class="dropdown-item" href="#">faq</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#discover">discover</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#blog">blog</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#contact">contact us</a>
            </li>
         
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- header end -->


        <script>
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
                $(".header-member-user").on('click', function(){
                    $(".header-user-dropdown").toggleClass("show");
                });
                $('.header-main-menu ul[role="menu"]').clone().appendTo(".mobile-menu-inherit-desktop");
                $('.nav-for-mobile .navbar_new ul').removeClass();
                $('.nav-for-mobile .navbar_new li').removeClass();
                $('.nav-for-mobile .navbar_new li a').removeClass();
                // Mean Menu JS
                $('.nav-for-mobile .navbar_new').meanmenu({
                    meanScreenWidth: "1024",
                    meanMenuContainer: '.nav-for-mobile'
                });

                $(".login_register").on("click",function(){
                    mw.load_module('users/register', '#loginModalModuleRegister');
                });

                $('#loginModal').on('show.bs.modal', function(e) {
                    // $('#loginModalModuleLogin').reload_module();
                    mw.reload_module('users/register');
                    mw.load_module('captcha', '#captcha_login');

                })

                <?php if (isset($_GET['mw_payment_success'])) { ?>
                    $('#js-ajax-cart-checkout-process').attr('mw_payment_success', true);
                <?php } ?>

                $('.js-show-register-window').on('click', function() {
                    $('.js-login-window').hide();
                    $('.js-register-window').show();
                    mw.load_module('captcha/templates/skin-1', '#captcha_register');
                })

                $('.js-show-login-window').on('click', function() {
                    $('.js-register-window').hide();
                    $('.js-login-window').show();
                    mw.load_module('captcha', '#captcha_login');
                })

                $('.header-cat ul').removeClass('nav');
                $('.header-cat ul').removeClass('nav-list');
                $('.header-cat ul li').removeClass('has-sub-menu');
                $('.header-cat ul').removeClass('active-parent');
                $('.header-cat ul li').removeClass('active-parent');
                $('.header-cat ul li a').removeClass('active-parent');
                $('.header-cat .well>ul').addClass('sm sm-simple sm-luminous');
                $('.header-cat .well>ul').smartmenus();
            });
        </script>

        <!--  Wishlist Modal  -->
        <div class="modal fade" id="wishlistModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php (!isset($_GET['slug'])) ? include template_dir() . 'layouts' . DS . "wishlist.php" : ''; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Schließen</button>
                    </div>
                </div>
            </div>
        </div>

        <?php if($sticky_header) : ?>
        <script>
            // Sticky header
            $(window).scroll(function () {
                if ($(window).scrollTop() >= 250) {
                    $(".boost-body .header-area").addClass("sticky-top");
                } else {
                    $(".boost-body .header-area").removeClass("sticky-top");
                }

            });
        </script>
        <?php endif; ?>

<?php if ($user_id) : ?>
    <script>
        $(document).ready(function() {
            $('#ordersModal').on('shown.bs.modal', function(e) {
                mw.reload_module('#user_orders_modal')
            });
        });
    </script>
<?php endif; ?>

<!-- ============= Add to cart ============= -->
<script>
    $(document).ready(function() {
        // Registration modal
        $(".login_register").on("click",function(){
            var params = {};
            params.css = "boost";
            mw.load_module('users/register', '#loginModalModuleRegister', null, params)
        });

        $('#loginModal').on('show.bs.modal', function(e) {
            // $('#loginModalModuleLogin').reload_module();
            mw.reload_module('users/register');
            mw.load_module('captcha', '#captcha_login');

        })

        <?php if (isset($_GET['mw_payment_success'])) { ?>
            $('#js-ajax-cart-checkout-process').attr('mw_payment_success', true);

        <?php } ?>

        $('.js-show-register-window').on('click', function() {
            $('.js-login-window').hide();
            $('.js-register-window').show();
            mw.load_module('captcha/templates/skin-1', '#captcha_register');
        })
        $('.js-show-login-window').on('click', function() {

            $('.js-register-window').hide();
            $('.js-login-window').show();
            mw.load_module('captcha', '#captcha_login');
        })

        // User menu toggle
        $('.user-menu-open').on('click', function() {
            $('.user-menu-dropdown').toggleClass('show');
        })

        // Hide user menu on document click
        $(document).click(function(event) {
            if (!$(event.target).closest('.header-user-menu').length) {
                $('.user-menu-dropdown').removeClass('show');
            }
        });

        $('.js-example-basic-multiple').select2();
        $('.nav-for-mobile .navbar_new ul').removeClass();
        $('.nav-for-mobile .navbar_new li').removeClass();
        $('.nav-for-mobile .navbar_new li a').removeClass();
        // Mean Menu JS
        $('.nav-for-mobile .navbar_new').meanmenu({
            meanScreenWidth: "1024",
            meanMenuContainer: '.nav-for-mobile'
        });
    })
</script>

<?php
    if(file_exists(module_dir('')."global_template_header.php")){
        include module_dir('') . "global_template_header.php";
    }
?>

