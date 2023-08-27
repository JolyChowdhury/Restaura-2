<?php

/*

type: layout
content_type: dynamic
name: Blog
position: 3
description: Blog

*/

?>
<?php include template_dir() . "header.php"; ?>

<style>

</style>

<!-- Breadcrumb Section Start -->
<section class="bredcrumb edit" id="bredcrumb" field="boost-breadcrumb" rel="module">
    <div class="container">
        <div class="breadcrumb-area">
            <div class="row mt-3">
                <div class="col-lg-12">
                    <module type="breadcrumb"/>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-12">
                <p class="sub-heading blog"><i class="ri-rss-fill"></i></p>
                <div class="section-heading">
                    <h2>News</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Start -->
<section class="blog edit" id="blog" rel="content" field="boost_blog_content_1">
    <div class="container">
        <div class="row offset-lg-3">
            <div class="col-lg-8">
                <div class="sticky-blog-right-wrapper">
                    <module type="posts" template="skin-3" data-css="boost" data-js="boost"/>
                </div>
            </div>
        </div>
        <!-- Video Section -->
        <div class="row">
            <div class="col-lg-12">
                <div class="boost-video">
                    <video width="100%" controls autoplay muted>
                        <source src="<?php print template_url(); ?>assets/image/boost-video.mp4" type="video/mp4">
                    </video>
                    <img src="assets/images/video-thumbnail.png" alt="boost-video" class="video-thumbnail">
                    <div class="video-content">
                        <h2 class="video-title">Making a toy <br> - the Noodoll way!</h2>
                        <a href="javascript:void(0)" class="video-play-btn">
                        <i class="ri-play-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

<?php include template_dir() . "footer.php"; ?>