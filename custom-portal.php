<?php
/*
 * Template Name: Custom Portal Page
 * Description: Americana Property Portal
 */
?>
<?php get_header();?>
<main id="content">
    <div class="main-wrapper">
        <div class="pt-50 pb-50" id="grid-links">
            <?php wp_nav_menu( array( 'theme_location' => 'portal', 'container_class' => 'portal-links' ));?>
        </div>
    </div>
    <?php include 'contact-band.php' ?>
</main>
<?php get_sidebar();?>
<?php get_footer();?>