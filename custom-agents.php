<?php
/*
 * Template Name: Custom Agents Page
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
            <?php include 'agents-grid.php' ?>
        </div>
    </div>
    <?php include 'contact-band.php' ?>
</main>
<?php get_sidebar();?>
<?php get_footer();?>