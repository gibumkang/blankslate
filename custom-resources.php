<?php
/*
 * Template Name: Custom Resources Page
 * Description: Americana Property Homepage
 */
?>
<?php get_header();?>
<main id="content">
    <div class="main-wrapper">
        <div class="page-description">
            <h2><?php the_field('header_text')?></h2>
            <hr/>
            <p><?php the_field('header_description')?></p>
        </div>
        <div class="pt-50 pb-50">
            <?php wp_nav_menu( array( 'theme_location' => 'resources', 'container_class' => 'resources-links' ));?>
        </div>
    </div>
    <?php include 'contact-band.php' ?>
</main>
<?php get_sidebar();?>
<?php get_footer();?>