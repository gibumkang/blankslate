<?php include 'variables.php' ?>
<!DOCTYPE html>
    <html <?php language_attributes();?>>
        <head>
            <meta charset="<?php bloginfo('charset');?>" />
            <meta name="viewport" content="width=device-width" />
            <?php wp_head();?>
        </head>
        <body <?php body_class();?>>
            <div id="wrapper" class="hfeed">
                <?php if ( is_front_page() ) : ?>
                    <!--Absolutely positioned on top of slider, only displays on front page-->
                    <header id="front-header">
                <?php else : ?>
                    <!--Positioned relatively-->
                    <header id="main-header">
                <?php endif; ?>
                        <div id="branding">
                            <div id="site-title">
                                <!--<?php if (is_front_page() || is_home() || is_front_page() && is_home()) {echo '<h1>';}?><?php if (is_front_page() || is_home() || is_front_page() && is_home()) {echo '</h1>';}?>-->
                                <!--<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home"><?php echo esc_html(get_bloginfo('name')); ?></a>-->
                                <a id="main-logo" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home">
                                    <img src="<?php if ( is_front_page() ) : ?><?php echo $imagepath; ?>white-americana-logo.svg<?php else : ?><?php echo $imagepath; ?>rgb-americana-logo.svg<?php endif; ?>" alt="<?php echo esc_html(get_bloginfo('name')); ?>" />
                                </a>
                                <nav id="menu">
                                    <?php wp_nav_menu(array('theme_location' => 'main-menu'));?>
                                    <!--<div id="search"><?php get_search_form();?></div>-->
                                    <i class="fas fa-bars" id="mobile-menu"></i>
                                </nav>
                            </div>
                            <!--<div id="site-description"><?php bloginfo('description');?></div>-->
                        </div>
                    </header>
                    <?php if ( !is_front_page() ) : ?>
                    <div class="full-width page-name-container">
                        <div class="page-title"><h1><?php the_title() ?></h1></div>
                    </div>
                    <?php endif; ?>
                <div id="container">
                <!--Mobile Menu is intentionally placed out of header to avoid same styling-->
                <?php include 'mobile-menu.php' ?>