<?php

/*

  type: layout
  content_type: static
  name: Error 404
  position: 11
  description: Error 404

*/

?>

<?php include template_dir() . "header.php"; ?>

<style>
    .error-page{
        text-align: center;
    }

    .error-page h1{
        color: #47C1BF;
        font-weight: 800;
        font-family: Montserrat;
        font-size: 7rem;
        line-height: 1;
    }

    .error-page a{
        margin-top: 25px;
        font-family: Montserrat;
        font-size: 1rem;
        font-weight: 600;
        padding: 0.5rem 1.75rem;
        letter-spacing: 0em;
        border: 1px solid #47C1BF;
        border-radius: 3px;
        background: #47C1BF;
        -webkit-transition: 0.4s;
        -moz-transition: 0.4s;
        -ms-transition: 0.4s;
        -o-transition: 0.4s;
        transition: 0.4s;
    }

    .error-page a:hover{
        opacity: 0.7;
        border-color: #47C1BF;
    }
</style>

<div class="edit error-page py-5" rel="content" field="error_page_content">
    <h1>404</h1>
    <h2>Page Not Found</h2>
    <a href="<?php print site_url(); ?>" class="btn btn-primary">Go Home</a>
</div>
<?php include template_dir() . "footer.php"; ?>

<script type="text/javascript">
$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "<?php print site_url(); ?>";
    }, 6000);
})
</script>
