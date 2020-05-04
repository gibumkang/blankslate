<?php
/*
 * Template Name: Custom Tenants FAQs Page
 * Description: Americana Property Homepage
 */
?>
<?php get_header();?>
<main id="content">
    <div class="main-wrapper">
        <div class="accordion-navigation">
            <h3>Quickly navigate to each section:</h3>
            <div class="navigation-flex">
                <a href="#inquiring-tenants">Inquiring Tenants</a>
                <a href="#current-tenants">Current Tenants</a>
            </div>
        </div>
        <div class="accordion-flex">
            <?php include 'inquiring-tenants.php' ?>
            <?php include 'current-tenants.php' ?>
        </div>
    </div>
    <?php include 'contact-band.php' ?>
</main>
<?php get_sidebar();?>
<?php get_footer();?>