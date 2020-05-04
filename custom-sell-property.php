<?php
/*
 * Template Name: Custom Sell Property Page
 * Description: Americana Property Homepage
 */
?>
<?php get_header();?>
<main id="content">
    <div class="full-width sell-property-bg">
        <video autoplay muted loop id="video">
            <source src="<?php echo $videopath; ?>sell-property.mp4" type="video/mp4">
        </video>
        <div class="content">
            <h2><?php the_field('header_text')?></h2>
            <div class="grid-1-4">
                <div><img src="<?php the_field('agent_photo_1')?>" alt=""></div>
                <div><img src="<?php the_field('agent_photo_2')?>" alt=""></div>
                <div><img src="<?php the_field('agent_photo_3')?>" alt=""></div>
                <div><img src="<?php the_field('agent_photo_4')?>" alt=""></div>
            </div>
            <p><?php the_field('header_description')?></p>
            <a href="#" class="button">See All Agents</a>
        </div>
    </div>
    <?php include 'contact-band.php' ?>
</main>
<?php get_sidebar();?>
<?php get_footer();?>