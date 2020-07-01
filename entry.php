<div class="content-entry">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header>
        <?php if ( is_singular() ) {
        echo '<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><h1 class="entry-title">';
        } else {
        echo '<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><h2 class="entry-title">';
        } ?>
        <?php the_title(); ?>
        <?php if ( is_singular() ) {
        echo '</h1></a>';
        } else {
        echo '</h2></a>';
        } ?> <?php edit_post_link(); ?>
        <?php if ( ! is_search() ) { get_template_part( 'entry', 'meta' ); } ?>
        </header>
        <?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
        <?php if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>
        <hr />
    </article>
</div>