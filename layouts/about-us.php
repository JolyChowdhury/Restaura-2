<?php

/*

type: layout
content_type: static
name: About Us
position: 7
description: About us Layout

*/


?>
<?php include template_dir() . "header.php"; ?>
 <!-- About-us Page Start -->
<div class="edit" rel="content" field="boost_about_content-<?php print rand(); ?>">
    <module type="breadcrumb"/>
        <div class="container">
            <div class="row mt-3 offset-lg-3">
                <div class="col-lg-8">
                    <div class="section-heading left">
                        <h2>About us</h2>
                    </div>
                </div>
            </div>
        </div>
    <section class="about mb-5 pb-5" id="about">
        <div class="container">
            <div class="row offset-lg-3">
                <div class="col-lg-8">
                    <div class="blog-details-content">
                        <p>Noodoll is a contemporary character-led design brand based in East London. Established by designer Yiying Wang in 2009, Noodoll began as an illustrated book featuring a cast of monsters who were made from rice and noodles. We now make a host of products featuring our happy Ricemonsters including plush toys, stationery and accessories.</p>
                        <p>At the heart of Noodoll’s design ethos is playfulness, uniqueness and quality! Our toys bridge the gap between collectable design items and children’s plush toys, and with this they make great design accessible to everyone. Noodoll products fit seamlessly into the modern home and we encourage everyone to add a roarsome touch to their life!</p>
                        <p>We relish bringing our characters to life and sending them out into the world. We design each of our monsters complete with a personality and we know there’s a Ricemonster for everyone!</p>
                        <p>All products featured with kind permission from Noodoll. <a href="shop-inner.html">Click here</a> to purchase</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- About-us Page End -->
</div>
<?php include template_dir() . "footer.php"; ?>
