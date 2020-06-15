<?php
/*
 * Template Name: Custom Owner FAQs Page
 * Description: Americana Property Homepage
 */
?>
<?php get_header();?>
<main id="content" class="homes-bg">
    <div class="main-wrapper">
        <div class="accordion-navigation">
            <h3>Quickly navigate to each section:</h3>
            <div class="navigation-flex">
                <a href="#inquiring-owners">Inquiring Owners</a>
                <a href="#current-owners">Current Owners</a>
            </div>
        </div>
        <div class="accordion-flex">
            <?php include 'inquiring-owners.php' ?>
            <?php include 'current-owners.php' ?>
        </div>
    </div>
    <?php include 'contact-band.php' ?>
</main>
<?php get_sidebar();?>
<?php get_footer();?>