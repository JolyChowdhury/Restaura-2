<?php

/*

type: layout
content_type: dynamic
name: Shop
is_shop: y
description: Showcase shop items in a sylish grid arrangement.
position: 2
*/

?>

<?php include template_dir() . "header.php"; ?>

<div class="edit shop-main-wrapper py-5" rel="content" field="boost_shop_content">
    <?php
        $is_edited = \DB::table('content_fields')->where('field','boost_shop_content')->where('rel_id',PAGE_ID)->first();
        if($is_edited){
            print $is_edited->value;
    ?>

    <?php }else{?>
    <div class="container">
        <div class="shop-breadcumb">
            <div class="shop-breadcumb-header allow-drop">
                <h1 class="">Shop</h1>
            </div>
            <module type="breadcrumb"/>
        </div>
        <module type="layouts" template="products/shop-layout-V2"/>
    </div>
    <?php } ?>
</div>


<?php include template_dir() . "footer.php"; ?>
