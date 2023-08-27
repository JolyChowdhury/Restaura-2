<?php
$showHeader = temp_blog_collapse();
?>

<div class="<?php print @$showHeader['sidebar']; ?>">
    <div class="sidebar__widget custom-sidebar-style categorySideBar">
        <h6><?php _lang("Kategorien", "templates/bamboo"); ?></h6>
        <hr>
        <div class="edit" field="blog_cat_content" rel="content">
            <module type="categories" content-id="<?php print $GLOBALS['blog_data'][0]['id'] ?? 11; ?>"/>
        </div>
    </div>
</div>