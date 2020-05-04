<?php
/*
 * Template Name: Custom Proposal Page
 * Description: Americana Property Homepage
 */
?>
<?php get_header();?>
<main id="content">
    <div class="full-width proposal-container">
        <span><p><?php the_field('description')?></p></span>
        <span class="form">
            <?php echo do_shortcode('[wpforms id="323" title="false" description="false"]'); ?>
        </span>
    </div>
</main>
<?php get_sidebar();?>
<?php get_footer();?>