<?php
/*
 * Template Name: Custom Home Page
 * Description: Americana Property Homepage
 */
?>
<?php get_header();?>
<main id="content">
    <!--Main Slider-->
    <div class="full-width"><?php echo do_shortcode('[elfsight_slider id="1"]'); ?></div>
    <div class="main-wrapper">
        <!--Calllout Section-->
        <h2 class="text-center pt-50 pb-50"><?php the_field('homepage-header')?></h2>
        <div class="flex-callout">
            <div>
                <img src="<?php the_field('callout-one-image')?>" alt="">
                <h3><?php the_field('callout-one-header')?></h3>
                <p><?php the_field('callout-one-text')?></p>
            </div>
            <div>
                <img src="<?php the_field('callout-two-image')?>" alt="">
                <h3><?php the_field('callout-two-header')?></h3>
                <p><?php the_field('callout-two-text')?></p>
            </div>
        </div>
        <div class="flex-callout">
            <div>
                <img src="<?php the_field('callout-three-image')?>" alt="">
                <h3><?php the_field('callout-three-header')?></h3>
                <p><?php the_field('callout-three-text')?></p>
            </div>
            <div>
                <img src="<?php the_field('callout-four-image')?>" alt="">
                <h3><?php the_field('callout-four-header')?></h3>
                <p><?php the_field('callout-four-text')?></p>
            </div>
        </div>
    </div>
    <!--Full Width Chat Module-->
    <div class="full-width chat-bg">
        <div class="chat-module">
            <div class="photo">
                <img src="<?php echo $imagepath; ?>agent-icon.svg" alt="Chat With Us Today" />
            </div>
            <div class="text-area">
                Reach Out to us via <strong>Phone, Email,</strong> or <strong>Live Chat</strong>
                <span class="live-chat drift-open-chat">Live Chat Now</span>
            </div>
        </div>
    </div>
    <!--iPad Section-->
    <div class="main-wrapper pb-0">
        <div class="flex-ipad">
            <div>
                <ul class="hp-bullet">
                    <li>Make payments <strong>online</strong></li>
                    <li><strong>Calculate</strong> costs and services</li>
                    <li>Log-in from your <strong>phone</strong> or <strong>tablet</strong></li>
                    <li><a href="/free-proposal"><strong>Free online proposal</strong></a></li>
                </ul>
            </div>
            <div><img src="<?php echo $imagepath; ?>ipad-user-v2-min.png" alt="Visit Us Online"></div>
        </div>
    </div>
    <!--Full Width Banner-->
    <div class="full-width">
        <div class="banner-card">
            <div class="banner-container">
                <div class="banner-description">
                    <h3><?php the_field('homepage-banner-card-header')?></h3>
                    <?php the_field('homepage-banner-card-description')?>
                    <br/>
                    <a href="<?php the_field('homepage-banner-card-link')?>" class="button">Learn More ></a>
                </div>
            </div>
            <img src="<?php echo $imagepath; ?>hp-banner.jpg" alt="Americana Property Management" />
        </div>
    </div>
    <!--<?php if (have_posts()): while (have_posts()): the_post();?>
        <article id="post-<?php the_ID();?>" <?php post_class();?>>
            <header class="header">
                <h1 class="entry-title"><?php the_title();?></h1> <?php edit_post_link();?>
            </header>
            <div class="entry-content">
                <?php if (has_post_thumbnail()) {the_post_thumbnail();}?>
                <?php the_content();?>
                <div class="entry-links"><?php wp_link_pages();?></div>
            </div>
        </article>
        <?php if (comments_open() && !post_password_required()) {comments_template('', true);}?>
    <?php endwhile;endif;?>-->
</main>
<?php get_sidebar();?>
<?php get_footer();?>