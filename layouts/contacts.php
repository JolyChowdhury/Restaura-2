<?php

/*

type: layout
content_type: static
name: Contacts
position: 6
description: Contacts

*/

?>

<?php include template_dir(). "header.php"; ?>
<div class="edit" rel="content" field="boost_contact_content_5">
<module type="breadcrumb"/>
    <section class="bredcrumb" id="bredcrumb">
    <div class="container">
            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Contact us</h2>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                <h5>Please get in touch</h5>
                <p>We'd love to hear from you!</p>
                </div>
                <div class="col-lg-6">
                <module type="google_maps"/> 
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
</div>
<?php include template_dir(). "footer.php"; ?>