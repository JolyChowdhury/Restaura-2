<?php

/*

type: layout
content_type: static
name: Blog Post
description: Blog inner
position: 9
*/


?>


<?php include template_dir() . "header.php";?>

<style>
    .comment-skin-1 .heading.left h3{
        font-family: 'Montserrat', sans-serif !important;
        font-size: 1.5rem;
        font-weight: 800;
        margin-top: 0;
        color: #1d1d1d;
    }

    .comment-skin-1 .heading.left p.bold,
    .comment-skin-1 .comments-user-profile div{
        font-family: Nunito Sans;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.6;
        margin-top: 0;
        color: #1d1d1d;
    }

    .comment-skin-1 .comments-user-profile div span{
        margin-left: 5px;
        font-size: 16px;
    }

    .comment-skin-1 .comments-user-profile a.btn-default{
        width: 100%;
        margin-left: 12px;
        font-size: 1rem;
        padding: 0.75rem 1.125rem;
        line-height: 1.15;
        letter-spacing: 0em;
        color: #1d1d1d;
        background-color: #ffffff;
        border: 1px solid #f04f36;
        font-family: Nunito Sans;
        font-weight: 700;
        display: inline-block;
        border-radius: 3px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        transition: all 125ms;
    }

    .comment-skin-1 .comments-user-profile a.btn-default:hover{
        color: #f04f36;
    }

    .comment-skin-1 .info h4{
        margin-bottom: 0;
        color: #1d1d1d;
        font-family: Nunito Sans;
        font-style: italic;
        font-size: 1.125rem;
        font-weight: 700;
        margin-bottom: 0;
    }

    .comment-skin-1 .info p{
        color: #1d1d1d;
        font-family: Nunito Sans;
        font-size: 1rem;
        line-height: 1.625;
        font-weight: 400;
    }

    .blog-social-share {
        margin: 10px 10px 20px 15px;
        padding-right: 30px;
        display: flex;
        align-items: center;
        /* flex-wrap: wrap; */
        gap: 20px;
    }

    .blog-social-share .share-link {
        font-size: 32px;
        text-decoration: none;
        border: none;
        background: transparent;
    }

    .blog-social-share .share-link.fb {
        color: #1977F2;
    }

    .blog-social-share .share-link.twitter {
        color: #1DA1F2;
    }

    .blog-social-share .share-link.linkedin {
        color: #017DBA;
    }

    .blog-social-share .share-link.print,
    .blog-social-share .share-link.email,
    .blog-social-share .share-link.pdf{
        color: red;
    }

    .blog-social-share .share-link.xing {
        color: #08767a;
    }

    .blog-social-share .share-link:hover {
      text-decoration: none;
    }
    .blog-inner-page a:hover {
      text-decoration: none !important;
    }

    .inner-page-empty {
        margin-top: 20px;
        min-height: 10px;
    }

    .blog-inner-page .mw-pictures-clean{
        text-align: center;
    }

    .blog-inner-page .mw-pictures-clean a {
        width: 100%;
    }

    .blog-inner-page .mw-pictures-clean-item {
        width: 100%;
    }

    .blog-inner-page .posts-navigation.prev {
        text-align: left;
    }

    @media (max-width: 575px) {
        .blog-social-share {
            gap: 15px;
        }
    }

    /* Blog layout */
    .boost-body .blog-inner-page .mw-pictures-clean-item img{
        height: 520px;
        object-fit: cover;
        border-radius: 30px
    }
    .boost-body .blog-inner-page p.blog-date{
        color: #7b6697;
        font-size: 0.75rem;
        line-height: 1.5em;
    }
    .boost-body .blog-inner-page .blog-content h1{
        color: #47C1BF;
        font-size: 32px;
        font-weight: 500;
        line-height: 1.2;
        margin-bottom: 15px;
        transition: color 150ms;
        -o-transition: color 150ms;
        -webkit-transition: color 150ms;
        -moz-transition: color 150ms;
        -ms-transition: color 150ms;
    }
    .boost-body .blog-inner-page p.element,
    .boost-body .blog-inner-page .social-share span{
        color: #230051;
        font-size: 18px;
        line-height: 1.6em;
        font-weight: 400;
        text-align: left;
    }
    .boost-body .blog-inner-page .blog-content a.dtModalBtn{
        background-color: #47C1BF !important;
        border-radius: 50px !important;
    }
    .boost-body .blog-inner-page .posts-navigation a{
        display: flex;
    }
    .boost-body .blog-inner-page .next-post-title{
        max-width: 75%;
        margin: 15px 0;
    }
    .boost-body .blog-inner-page .next-post-title a{
        color: #230051;
        font-size: 24px;
        font-weight: 500;
        line-height: 1.2;
        transition: color 150ms;
        -o-transition: color 150ms;
        -webkit-transition: color 150ms;
        -moz-transition: color 150ms;
        -ms-transition: color 150ms;
    }
    .boost-body .blog-inner-page .next-post-title a:hover{
        color: #47C1BF;
    }
    .boost-body .blog-inner-page .comment-section{
        padding: 50px;
        border-radius: 25px;
        background-color: #f8f8f8;
        margin-top: 30px;
    }
    .boost-body .blog-inner-page .comment-section h4{
        margin-left: 12px;
    }
    .boost-body .blog-inner-page .heading.comment-form h4{
        margin-left: 0;
    }
    .boost-body .blog-inner-page .comment-form input,
    .boost-body .blog-inner-page .comment-form textarea{
        padding: 15px 15px;
        font-size: 14px;
        border: 1px solid #c8bfd4;
        border-radius: 23px;
        font-family: 'Nunito Sans';
        font-weight: 400;
        line-height: 1.4em;
        transition: all .15s;
    }
    .boost-body .blog-inner-page .comment-form button{
        display: block;
        width: 100%;
        font-size: 18px;
        line-height: 1.4em;
        padding: 11px 39px;
        text-align: center;
        text-decoration: none;
        border-radius: 25px;
        border: 0;
        background-color: #50248f;
        color: #ffffff;
        transition: all 100ms ease-in-out;
    }
    .boost-body .blog-inner-page .comment-form textarea,
    .boost-body .blog-inner-page a.btn.btn-default.btn-xs.pull-right{
        margin-top: 10px;
    }
    .boost-body .blog-inner-page .comment-form button:hover{
        background-color: #47C1BF;
    }

    /* pagination */
    ul.pagination.pagination-left-padding li{
        margin: 0 10px !important;
        display: none !important;
    }
</style>
<div class="blog-inner-page inner-page" id="blog-content-<?php print CONTENT_ID; ?>">
    <?php
        $post = DB::table('blogs_new')->where('is_deleted',0)->where('url', url_segment(1))->first();
        if(empty($post)){
            return redirect()->to('/')->send();
        }
        $post = json_decode(json_encode($post),true);
        $next_article = get_blog_article($post['id']);
        $prev_article = get_blog_article($post['id'], 'prev');
        $status = Config::get('custom.blog_status');
        if(@$post['content'] && is_logged() != true && trim(strip_tags($post['content']))){
            if($status == 1 or is_null($status) or $post['require_login'] == 1) {
                $limit = blog_word_limit();
                $make_the_limit = last_word_check(limitTextWords($post['content'],$limit,true,true));
                $make_the_limit['text'] = $post['content'];
                $get_content_with_html = random_word_check($make_the_limit) ?? $post['content'];
                $post['content'] = $get_content_with_html.'<br><span style="overflow: hidden;position: relative;display: block;"><a href="#" class="dtModalBtn" data-toggle="modal" data-target="#loginModal" style="float: right;background-color: #4592ff;color: #fff;padding: 15px 35px;border-radius: 5px;display: inline-block;text-decoration: none;">Einloggen und Bericht in voller Länge kostenfrei lesen</a></span>';
            }
        }

        if(isset($post['id'])){
            $itemTags = DB::table('tagging_tagged')->where('taggable_type','content')->where('taggable_id', $post['id'])->get('tag_name');
        }
    ?>

    <!-- Blog Details Section Start -->
    <section id="blogDetails" class="blog-details comment-skin-1 py-5">
       <div class="container">
            <module type="breadcrumb" />
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-thumbnail mb-5">
                        <?php if ($post['is_rss'] == 1) { ?>
                            <div class="dt_rss_img" style="background-image: url('<?php print $post['rss_image']; ?>')"></div>
                        <?php }else{ ?>
                            <module type="pictures" rel="blog" template="skin-2" id="blog-post-pictures" blog-id="<?php print $post['id'] ?>"/>
                        <?php } ?>
                    </div>
                </div>
            </div>
       </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="social-share">
                        <span>Share</span>
                        <?php
                            $shareOption = get_option('blog_share_option', 'blog_share');
                            $blogUrl = site_url('post/').$post['url'];
                        ?>
                        <?php if(intval($shareOption) == 1){ ?>
                            <div class="blog-social-share">
                                <!-- Facebook -->
                                <a class="share-link fb" href="http://www.facebook.com/sharer.php?u=<?=$blogUrl ?>" target="_blank">
                                   <i class="fab fa-facebook"></i>
                                </a>
                                <!-- Twitter -->
                                <a class="share-link twitter" href="http://twitter.com/share?url=<?=$blogUrl ?>" target="_blank">
                                    <i class="fab fa-square-twitter"></i>
                                </a>
                                <!-- Xing -->
                                <a class="share-link xing" href="https://www.xing.com/social_plugins/share?url=<?=$blogUrl ?>" target="_blank">
                                <i class="fab fa-xing-square"></i>
                                </a>

                                <!-- LinkedIn -->
                                <a class="share-link linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url=<?=$blogUrl ?>" target="_blank">
                                <i class="fa-brands fa-linkedin"></i>
                                </a>
                                <!-- Print -->
                                <button class="share-link print" onclick="blogPrint()">
                                 <i class="fa-solid fa-print"></i>
                                </button>
                                <!-- Mail -->
                                <a class="share-link email" href="mailto:?subject=I wanted you to see this link&amp;body=Check out this link <?=$blogUrl ?>"title="Share by Email"><i class="fa-solid fa-envelope"></i></a>
                                <!-- PDF -->
                                <a class="share-link pdf" href="javascript:generatePDF()"><i class="fa-solid fa-file-pdf"></i></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog-content">
                        <p class="blog-date"> <?php echo date('F d, Y', strtotime($post['created_at'])); ?></p>
                        <h1> <?php print $post['title']; ?> </h1>
                        <?php if($post['content']){ ?>
                            <?php print $post['content']; ?>
                        <?php } ?>
                    </div>
                    <div class="post-navigation-wrapper d-flex justify-content-between">
                        <?php if($prev_article): ?>
                        <div class="posts-navigation prev">
                            <a href="<?=$prev_article['url'] ?>"><i class="ri-arrow-left-s-line"></i>Prev article </a>
                            <div class="next-post-title">
                                <a href="<?=$prev_article['url'] ?>">
                                <?=$prev_article['title'] ?>
                                </a>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if($next_article): ?>
                        <div class="posts-navigation">
                            <a href="<?=$next_article['url'] ?>">Next article <i class="ri-arrow-right-s-line"></i></a>
                            <div class="next-post-title">
                                <a href="<?=$next_article['url'] ?>">
                                <?=$next_article['title'] ?>
                                </a>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="comment-section">
                        <h4>comments</h4>
                        <module type="comments" template="comment-skin-1" data-content-id="<?php print CONTENT_ID; ?>"/>
                        <!-- <div class="comment-single">
                            <p class="commenter-info"> Dexter Bridges - <span>March 5, 2021</span> </p>
                            <p class="comment">Really insightful stuff here. Thanks for taking the time to reflect on organization.</p>
                        </div>
                        <div class="comment-single">
                            <p class="commenter-info"> Stacy Collins - <span>March 5, 2021</span> </p>
                            <p class="comment">This article was so helpful! Looking forward to keeping some of these things in mind!</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->
</div>

<script>
    function blogPrint() {
        var printContents = document.getElementById("single_blog").innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    function generatePDF() {
        $('#single_blog img').css({
            'width': '200px',
        });
        var doc = new jsPDF();  //create jsPDF object
        doc.fromHTML(document.getElementById("single_blog"), // page element which you want to print as PDF
        10,
        10,
        {
            margin: [10, 10, 10, 10],
            autoPaging: 'text',
            x: 0,
            y: 0,
            width: 190, //target width in the PDF document
            windowWidth: 675 //window width in CSS pixels
        },

        function(a){
            doc.save("blog.pdf"); // save file name as HTML2PDF.pdf
        });
        setTimeout(function(){
            $('#single_blog img').css({
                'width': '100%',
            });
        }, 5000);
    }
</script>

<div class="edit inner-page-empty" field="boost-blog-inner-v2-bottom" rel="content">
<!-- <module type="layouts" template="empty"/> -->
</div>

<?php include template_dir() . "footer.php"; ?>
