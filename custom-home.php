<?php
/*
 * Template Name: Custom Home Page
 * description: Custom Americana Property Homepage
 */
?>
<?php get_header();?>
<main id="content">
    <div class="full-width">
        <img src="https://via.placeholder.com/1200x400" class="cover-image" />
    </div>
    <div class="main-wrapper">
        <h2 class="text-center">Let Us Help You With Your Rental Property</h2>
        <div class="flex-callout">
            <div>One</div>
            <div>Two</div>
        </div>
        <div class="flex-callout">
            <div>One</div>
            <div>Two</div>
        </div>
    </div>
    <?php if (have_posts()): while (have_posts()): the_post();?>
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
	<?php endwhile;endif;?>
</main>
<?php get_sidebar();?>
<?php get_footer();?>