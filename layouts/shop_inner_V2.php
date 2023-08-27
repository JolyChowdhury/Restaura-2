<?php

/*

type: layout
content_type: static
name: Shop Inner V2
is_shop: y
description: Showcase single product informations.
position: 99
*/

?>

<?php include template_dir() . "header.php"; ?>
<script>
    $(document).ready(function() {
        $('.navigation-holder').addClass('not-transparent');
    })
</script>

<style>
    .product-holder.ph-classic {
        position: relative;
        display: block !important;
        min-height: 660px;
    }

    .product-holder.ph-classic .product-info-wrapper {
        position: relative;
        display: block !important;
    }

    .product-holder.ph-classic .product-gallery {
        position: relative;
        float: left;
        margin-right: 40px;
        margin-bottom: 30px;
    }

    .product-holder.ph-classic .product-info-wrapper  .row {
        display: block !important;
    }

    .product-holder.ph-classic .module-shop-cart-add,
    .readmore-btn-enabled+.module-shop-cart-add {
        /* float: left; */
        min-width: 46%;
        display: inline-block;
        margin: 10px auto;
    }

    .product-holder.ph-classic .product-info-wrapper .box {
        position: relative;
        text-align: center;
    }

    .product-holder.ph-classic .description {
        text-align: left;
    }
    .product-holder.ph-classic .product-info-wrapper .box {
        text-align: left;
    }
    .ph-classic .description p {
        clear: none;
    }
    .boost-body .next-previous-content {
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }
    .boost-body .tip.btn.btn-outline-default{
        color: #47C1BF;
    }
    .boost-body .tip.btn.btn-outline-default i{
        margin: 0 5px;
        font-size: 12px;
        vertical-align: middle;
    }
   .product-action-btn.template{
        text-align: left;
   }
   .product-action-btn.template .item-price{
        display: inline;
   }
   .product-action-btn.template .item-cart{
        display: block;
   }
   .product-action-btn span.mw-price-item-value{
        color: #230051;
        font-size: 34px;
        font-weight: 800;
        font-style: normal;
        line-height: 1.2em;
        letter-spacing: 0.0em;
        display: inline-block;
        margin-bottom: 15px;
   }
   .product-action-btn .product-tax-text{
        color: #230051;
        font-size: 18px;
   }
   .product-action-btn .item-cart-button button:hover{
        border: 1px solid #c8bfd4;
   }
   .product-action-btn button.paypal-checkout-button svg{
        width: auto;
   }
   .product-action-btn .product-details-tab{
        width: 200px;
   }
   .product-details-tab .elevatezoom-holder{
    margin-bottom: 20px;
   }
   .product-details-tab .elevatezoom-holder img.main-image{
        width: 600px !important;
   }
   .product-details-tab .zoomContainer{
        width: 650px;
   }
   .product-details-tab a#elevatezoom{
        height: 180px;
   }
   .boost-featured-product .product-sample-inner{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
   }
   .boost-featured-product .product-thumbnail,
   .boost-featured-product .product-content{
        flex-basis: 49%;
   }
   .boost-featured-product .product-content .product-sample-title h5{
        color: #230051;
        font-size: calc(34px * 1.18);
        font-family: 'Nunito Sans';
        font-weight: 800;
        line-height: 1.2em;
        letter-spacing: 0.0em;
        text-transform: none;
        word-break: break-word;
   }
   .boost-featured-product .product-content .product-tax-text span{
        color: #230051;
        font-size: 1.25rem;
        font-weight: 400;
        line-height: 1.6em;
        margin: 15px auto;
        max-width: 85%;
   }
   .boost-featured-product .product-content h6.product-sample-price{
        color: #230051;
        font-size: calc(34px * 1.765);
        font-family: 'Nunito Sans';
        font-weight: 800;
        line-height: 1.2em;
        letter-spacing: 0.0em;
        word-break: break-word;
        margin-top: 0;
        margin-bottom: 20px;
   }
   .boost-featured-product .product-content .product-sample-hover-right{
        display: none;
   }
   .boost-featured-product .product-sample-hover-bottom a{
        border: 0;
   }
   .boost-featured-product .product-sample-hover-bottom a i{
        font-size: 14px;
        vertical-align: middle;
   }
   .boost-products .shop-products .liked-product-content .product-sample-content a h5{
        color: #50248f;
        font-size: 18px;
        margin-top: 15px;
        transition: color 150ms;
        -o-transition: color 150ms;
        -webkit-transition: color 0.3s;
        -moz-transition: color 0.3s;
        -ms-transition: color 0.3s;
   }
   .boost-products .shop-products .liked-product-content .product-sample-content a h5:hover{
        color: #47C1BF;
   }
   .boost-products .shop-products .liked-product-content h6.product-sample-price{
        font-size: 1.25rem;
        color: #50248f;
   }

   .boost-products .shop-products .product-tax-text span,
   .boost-products .product-pagination-wrapper,
   .boost-products .shop-products .product-sample-hover-right,
   .boost-products .shop-products .product-sample-hover-bottom,
   .boost-featured-product span.saved-price,
   .boost-featured-product a.quick-buy-btn{
        display: none;
   }

   .boost-featured-product .product-single{
        margin-bottom: 0;
   }
   .boost-body .js-popup-gallery{
    position: relative;
   }
   .boost-body .js-popup-gallery .slick-arrow{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: -30px;
        cursor: pointer;
        font-size: 25px;
        color: #230051;
   }
   .boost-body .js-popup-gallery .slide-arrow-right.slick-arrow{
        left: inherit;
        right: -30px;
   }
   .boost-body span.readmore-btn{
        padding: 9px 22px;
        min-width: 118px;
        color: #ffffff;
        background-color: #50248f;
        font-size: 17px;
        font-weight: 700;
        line-height: 1.4em;
        border-radius: 30px;
        --button-border-color: rgba(35, 0, 81, 0.25);
        transition: all 100ms ease-in-out;
        cursor: pointer;
   }
   .boost-body #universal-product-alert {
        margin-bottom: 30px;
    }

    .product-holder.ph-classic .description .element {
        clear: none;
    }

    @media (max-width: 767px) {
        .product-holder.ph-classic .product-info-wrapper {
            display: flex !important;
            flex-direction: column;
        }

        .product-holder.ph-classic .product-gallery {
            width: 100%;
        }

        .product-holder.ph-classic .product-gallery {
            margin-top: 20px;
        }
    }

    /* .boost-body .product-details .container:last-child .cl-wrapper{
        overflow: hidden;
    }

    .boost-body .product-details .container:last-child .cl-wrapper .col-lg-6:first-child{
        float: left !important;
        max-width: 50%;
    }

    .boost-body .product-details .container:last-child .cl-wrapper .col-lg-6:first-child img{
        max-width: 500px;
    } */

</style>

<script>
    (function () {
        var $window = $(window), $document = $(document);

        /* -- Elevate Zoom -- */
        $document.ready(function () {
            var elevateZoomTurnOn = $document.width() > 992 ? true : false;
            if (elevateZoomTurnOn) {
                $("#elevatezoom").elevateZoom({
                    gallery: 'elevatezoom-gallery',
                    cursor: "crosshair",
                    galleryActiveClass: 'active',
                    imageCrossfade: true,
                    zoomType: "inner"
                });

                //pass the images to Fancybox
                $("#elevatezoom").bind("click", function (e) {
                    var ez = $('#elevatezoom').data('elevateZoom');
                    var res = [];
                    $.each(ez.getGalleryList(), function () {
                        res.push({src: this.href});
                    });
                    $.magnificPopup.open({
                        items: res,
                        gallery: {
                            enabled: true
                        },
                        type: 'image'
                    });
                    return false;
                });
            }

            var eGallery = $('#elevatezoom-gallery');
            if (eGallery.length > 0) {
                eGallery.each(function () {
                    var el = $(this);
                    el.slick({
                        centerMode: false,
                        centerPadding: '1px',
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        arrows: true,
                        'prevArrow': '<div class="slide-arrow-left"><i class="ri-arrow-left-line"></i></div>',
		                'nextArrow': '<div class="slide-arrow-right"><i class="ri-arrow-right-line"></i></div>',
                        autoplay: true,
                        autoplaySpeed: 2000,
                        dots: false,
                        infinite: true,
                        responsive: [
                            {
                                breakpoint: 767,
                                settings: {
                                    slidesToShow: 3
                                }
                            }
                        ]
                    });
                });
            }
        });
        /* -- Elevate Zoom -- */
    })();
</script>

<?php
    $data = DB::table('product')
                ->where('url', url_segment(1))
                ->where('is_active', 1)
                ->join('group_product', 'product.id', 'group_product.product_id')
                ->join('categories_items', 'product.id', 'categories_items.rel_id')
                ->select('product.id', 'product.url', 'product.title', 'product.quantity', 'product.sku', 'product.position', 'product.content_body')
                ->first();
    $data = (array)$data;
    if(empty($data) or !isset($data)){
        return redirect()->to('/new_page')->send();
    }
    $next = next_content_V2($data['id'], 'next');
    $prev = prev_content_V2($data['id']);
?>

<div class="edit inner-page-empty " field="boost-shop-inner-v2-top" rel="content">
</div>

<!-- Breadcrumb Section Start -->
<section class="bredcrumb" id="bredcrumb">
    <div class="container">
        <div class="breadcrumb-area">
            <div class="row mt-3">
                <div class="col-lg-12">
                    <ul class="breadcrumb-nav d-flex justify-content-start align-items-center">
                        <li><a href="index.html">home</a></li>
                        <li class="breadcrumb-arrow"><i class="ri-arrow-right-s-line"></i></li>
                        <li><a href="products.html">dust</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Products Section Start -->
<section class="product-details" id="shop-content-<?php print $data['id']; ?>">

    <!-- Next and previous product -->
    <div class="container">
        <div class="next-prev-wrapper">
            <div class="next-previous-content">
                <?php if ($prev != false) { ?>
                    <a href="<?php print $prev['url']; ?>" class="next-content tip btn btn-outline-default" data-tip="#next-tip"><i class="fas fa-chevron-left"></i><?php _e('PREV'); ?></a>

                    <div id="next-tip" style="display: none">
                        <div class="next-previous-tip-content text-center">
                            <img src="<?php print $prev['webp_image'] ?? $prev['resize_image'] ?? $prev['filename']; ?>" alt="" width="90" />
                            <h6><?php print $prev['title']; ?></h6>
                        </div>
                    </div>
                <?php } ?>
                <?php if ($next != false) { ?>
                    <a href="<?php print $next['url']; ?>" class="prev-content tip btn btn-outline-default" data-tip="#prev-tip"><?php _e('Next'); ?><i class="fas fa-chevron-right"></i></a>
                    <div id="prev-tip" style="display: none">
                        <div class="next-previous-tip-content text-center">
                            <img src="<?php print $next['webp_image'] ?? $next['resize_image'] ?? $next['filename']; ?>" alt="" width="90" />
                            <h6><?php print $next['title']; ?></h6>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="container">

        <?php $check_value = get_option('classic_layout', 'product_classic_layout') ?? 0; ?>
        <?php $check_readmore_value = get_option('readMoreOption', 'product_readmore_layout') ?? 0; ?>
        <?php $checkWordLimit_value = get_option('readMoreLimit', 'product_readmore_limit') ?? 0; ?>

        <!-- Product Action -->
        <?php  if($check_value == "1") : ?>
            <div class="row product-holder ph-classic">
                <div class="col-12 col-lg-12 relative product-info-wrapper">
                    <div class="product-info text-center">
                        <div class="product-info-content">
                            <div class="box">
                                <div class="heading mobile-view-hide">
                                    <h2 class=""><?php print $data['title']; ?></h2>
                                </div>
                                <div class="category-list">
                                    <?php
                                    if (function_exists('category_shop_inner_show')) {
                                        echo category_shop_inner_show($data['id']);
                                    }
                                    ?>
                                </div>
                                <div class="pi-info-stock">
                                        <?php $in_stock = true;
                                        if (isset($data['quantity']) and $data['quantity'] != 'nolimit' and intval($data['quantity']) == 0) {
                                            $in_stock = false;
                                        }
                                        ?>

                                        <?php if (isset($data['sku'])) : ?>
                                            <p class="labels"><b><?php _lang("SKU Number") ?>: </b><span>#<?php print $data['sku']; ?></span></p>
                                        <?php endif; ?>

                                    <?php
                                    $data_show = Config::get('custom.isShow');
                                    if(isset($data_show) and $data_show == "null"): ?>

                                        <?php if ($in_stock == true) : ?>
                                            <p class="labels"><b><?php _lang("Verfügbarkeit") ?>:</b> <span><?php _lang("Auf Lager") ?></span></p>
                                        <?php else : ?>
                                            <p class="labels"><b><?php _lang("Verfügbarkeit") ?>:</b> <span><?php _lang("Ausverkauft") ?></span></p>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                </div>

                                <div class="row desc-text">
                                    <div class="col-12">
                                        <div class="description <?php  if($check_readmore_value == "1") { echo "readmore-btn-enabled"; } ?>">
                                            <div class="typography-area">
                                                <?php print $data['content_body']; ?>
                                            </div>
                                            <?php  if($check_readmore_value == "1") { ?>
                                                <span class="readmore-btn">....mehr lesen</span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <module type="shop/cart_add_V2" product-id="<?=$data['id']; ?>"/>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
        <div class="row">
            <div class="col-lg-6">
                <div class="product-media-wrapper mt-3">
                    <div class="product-details-tab">
                        <module type="pictures" rel="product" product-id="<?=$data['id']?>" template="skin-1" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shop-inner-content">
                    <div class="product-content">
                        <h2 class="single-product-title"><?php print $data['title']; ?></h2>
                        <p class="product-info">by <a href="products.html">noodoll</a></p>
                        <p class="product-info">
                            <a href="products.html">
                                <?php
                                    if (function_exists('category_shop_inner_show')) {
                                        echo category_shop_inner_show($data['id']);
                                    }
                                ?>
                            </a>
                        </p>
                        <p class="product-info"> <a href="products.html">
                            <?php if (isset($data['sku'])) : ?>
                                <p class="labels"><b><?php _lang("SKU Number") ?>: </b><span>#<?php print $data['sku']; ?></span></p>
                            <?php endif; ?>
                        </a></p>

                        <div class="description <?php  if($check_readmore_value == "1") { echo "readmore-btn-enabled"; } ?>">
                            <div class="typography-area">
                                <?php print $data['content_body']; ?>
                            </div>
                            <?php  if($check_readmore_value == "1") { ?>
                                <span class="readmore-btn">....mehr lesen</span>
                            <?php } ?>
                        </div>

                        <div class="product-action-btn template">
                            <module type="shop/cart_add_V2" product-id="<?=$data['id']; ?>"/>
                        </div>
                    </div>
                    <div class="shop-inner-accordion accordion" id="shopAccordion">
                        <!-- Accoundion Item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="ri-truck-line"></i> Shipping & Delivery
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#shopAccordion">
                                <div class="accordion-body">
                                    <p>To guarantee next day delivery please select Express Delivery at checkout and place your order before 13:00</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accoundion Item -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="ri-heart-line"></i> Plush toy care guide
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#shopAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Out plush toys are machine washable on a cold (30º max) and gentle cycle. Make sure to air-dry your toy to keep it in the best condition.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gift-text mt-4">
                        <h4>Is this a gift?</h4>
                        <p>Add a gift message in the basket</p>
                    </div>
                    <div class="share mt-4">
                        <p>Share</p>
                        <ul class="share-buttons d-flex justify-content-start align-items-center">
                            <li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>


        <!-- Product Descriptoin Tab -->
        <div class="row mt-5">
            <div class="col-lg-6 offset-lg-3">
                <div class="single-products-description edit" field="<?php print rand(); ?>" rel="module">
                    <div class="productView-tab layout-horizontal">
                        <div class="container container-1170">
                            <ul class="nav nav-tabs tabs-horizontal" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-description">
                                    Description
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a  class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-fabric">
                                    Fabric
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a  class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-size-chart">
                                    Size Chart
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content tabs-contents-horizontal">
                                <div class="tab-pane fade show active" id="tab-description" tabindex="0">
                                    <div class="wrapper-content">
                                        <p class="desc">
                                            Achoo! Dust is a big bundle of love all rolled into one supersized cushion! The perfect pal to snuggle up to while watching TV or for writing love letters to your secret admirer. Dust is made of the softest black fur with an embroidered face and body. He’s holding a little envelope to keep those love letters nice and safe. If you treat him nicely, maybe he’ll send you one!
                                        </p>
                                        <p class="desc">
                                            Dust is part of the popular Noodoll cushion range. These are a fun way to brighten up bedtimes, nurseries, playrooms and sofas. Great for hugs, even better for naps. CE certified for ages 0+.
                                        </p>
                                        <p>All products featured with kind permission from noodoll.com. <a href="index.html">Click here</a> to purchase.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" data-tabcontent id="tab-fabric" tabindex="1">
                                    <div class="toggle-content custom-scrollbar" id="tab-fabric-mobile">
                                        <div class="wrapper-content">
                                            <ul>
                                                <li>CE certified for ages 0+.</li>
                                                <li>Made from soft fibres.</li>
                                                <li>Embroidered face.</li>
                                                <li>Machine washable cold.</li>
                                                <li>Size: 20 x 19 cm.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" data-tabcontent id="tab-size-chart" tabindex="2">
                                    <div class="toggle-content custom-scrollbar" id="tab-additional-shipping-mobile">
                                        <img src="<?php print template_url(); ?>assets/image/size-chart.webp" alt="size chart">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END:Products Tabs -->
                </div>
            </div>
        </div>
        <!-- Featured Product -->
        <div class="featured-product mt-5">
            <div class="featured-product-wrapper">
                <div class="row align-items-center">
                    <div class="boost-featured-product" id="shop_products_col4_1"></div>
                </div>
            </div>
        </div>
        <!-- Story -->
        <div class="row">
            <div class="col-lg-12">
                <div class="story-content edit" field="layout-story-content-<?php print rand(); ?>">
                    <div class="section-heading">
                        <h2>Playful designs for big and little ones</h2>
                    </div>
                    <p>From day one, our mission has been to make honest quality products, whether in it’s design, production, customer service or our ethos of fair trading. Everything we do is based on this ethos.</p>
                    <a href="story-page.html">Read more here</a>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        <?php
            $related_product_setting  = get_option('related_product_setting', 'related_product_on_off');
            if($related_product_setting == 1 || $related_product_setting == false){
        ?>

        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="section-heading edit" field="section-heading-<?php print rand(); ?>">
                    <h2>Dies könnte Sie auch interessieren</h2>
                </div>
            </div>
            <div class="boost-products">
                <div class="col-md-12" id="shop_products_module">
                    <div class="shop-productsv2-module-preloader show"></div>
                </div>
            </div>
        </div>
        <?php } ?>

        <!-- Testimonial -->
        <div class="row my-5">
            <module type="layouts" template="testimonial/testimonial" data-css="boost"/>
        </div>
    </div>
</section>
<!-- Products Section End -->


<form action="" id="checkout_form_paypal_checkout"></form>

<script>
    $("#varianted_option").on("change", function() {
        var dataid = $("#varianted_option option:selected").attr('data-id');
        var selectedVariantImageURL = $("[image-id='" + dataid + "']").attr("href");
        $(".shop-inner-page .elevatezoom .elevatezoom-holder img").attr("href", selectedVariantImageURL);
        $(".shop-inner-page .elevatezoom .elevatezoom-holder img").attr("src", selectedVariantImageURL);
        $(".zoomWindow").css("background-image", "url('" + selectedVariantImageURL + "')");
    });

    var full_text = "";
    $(document).ready(function(){
        //$('.readmore-btn-enabled .typography-area p').contents().unwrap();
        var full_text = $('.readmore-btn-enabled .typography-area').html();
        var splittedWord = full_text.split(/\s+/).slice(0,<?php echo $checkWordLimit_value; ?>).join(" ");
        $('.readmore-btn-enabled .typography-area').html(splittedWord);


        $(".readmore-btn").on("click", function(){
            $(".description").toggleClass("readmore-btn-enabled");
            if ($(this).text() == "....mehr lesen") {
                $(this).text("... Ansicht minimieren");
                $('.description .typography-area').html(full_text);
            } else {
                $(this).text("....mehr lesen");
                $('.readmore-btn-enabled .typography-area').html(splittedWord);
            };
        });
    });

    // Deactive class layout for small screens
    if ($(window).width() < 991) {
        $('.shop-inner-page .product-holder').removeClass('ph-classic');
    }
</script>

<script>
    $(document).ajaxComplete(function(){
        $('.boost-carousel .product-sample-image').removeClass('product-sample-image').addClass('product-media-wrapper');
    });
</script>

<!-- ##### featured product ##### -->
<?php
    $page = 0;
    $paging = sha1("shop_products_col4_1");
    if(isset($_GET[$paging])){
        $page = $_GET[$paging];
    }
?>

<script>
    $( document ).ready(function() {
        var paramProducts ={};
        paramProducts.hide_paging=true;
        paramProducts.limit=1;
        paramProducts.col_count=1;
        paramProducts.css="boost";
        paramProducts.template="skin-1";
        paramProducts.page_number=<?=$page?>;
        mw.load_module('shop/productsv2','#shop_products_col4_1',null,paramProducts);
    });
</script>

<script>
    $(document).ajaxComplete(function(){
        $('.boost-featured-product .shop-products .col-lg-6').removeClass('col-lg-6').addClass('col-lg-12');
        $('.boost-featured-product .shop-products .product-sample-image').removeClass('product-sample-image').addClass('product-thumbnail');
        $('.boost-featured-product .shop-products .promo-product-text').removeClass('promo-product-text').addClass('product-content');
        $('.boost-featured-product a.btn.btn-primary.product-cart-icon').addClass('purple-btn');
    });
</script>

<!-- ##### related products ##### -->
<script>
    $(document).ajaxComplete(function(){
        $('.boost-products .product-sample-wrapper').removeClass('product-sample-wrapper').addClass('related-product-single');
        $('.boost-products .product-sample-inner .product-sample-image').removeClass('product-sample-image').addClass('related-products-media');
        $('.boost-products .product-sample-inner .product-content').removeClass('product-content').addClass('liked-product-content');

    });
</script>

<?php include template_dir() . "footer.php"; ?>
