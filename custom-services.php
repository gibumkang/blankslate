<?php
/*
 * Template Name: Custom Services Page
 * Description: Americana Property Homepage
 */
?>
<?php get_header();?>
<main id="content">
    <div class="main-wrapper">
        <div class="spacer">
            <p>
                <?php the_field('introduction')?>
            </p>
        </div>
        <div class="blockquote">
            A smart investor once said that, <em>'Nobody will ever manage your property as well as you do.'</em>
            Unfortunately, that person had never heard of Americana.
            <strong class="source">-Owner Review</strong>
        </div>
        <p>
            Contact one of our licensed property managers today for a free, no-obligation management proposal. More information is also available on our FAQ page.
        </p>
        <br/>
        <div class="banner-card">
            <div class="banner-container">
                <div class="banner-description">
                    <h3><?php the_field('technology_header')?></h3>
                    <?php the_field('technology_description')?>
                </div>
            </div>
            <img src="<?php echo $imagepath; ?>services-banner.jpg" alt="Americana Property Management" />
        </div>
    </div>
    <!--Full Width-->
    <?php include('proposal-banner.php') ?>
    <div class="main-wrapper">
        <div class="spacer">
            <?php include('callout-grid.php') ?>
        </div>
    </div>
</main>
<?php get_sidebar();?>
<?php get_footer();?>