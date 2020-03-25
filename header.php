<!DOCTYPE html>
    <html <?php language_attributes();?>>
        <head>
            <meta charset="<?php bloginfo('charset');?>" />
            <meta name="viewport" content="width=device-width" />
            <?php wp_head();?>
        </head>
        <body <?php body_class();?>>
            <div id="wrapper" class="hfeed">
                <header id="header">
                    <div id="branding">
                        <div id="site-title">
                            <!--<?php if (is_front_page() || is_home() || is_front_page() && is_home()) {echo '<h1>';}?><?php if (is_front_page() || is_home() || is_front_page() && is_home()) {echo '</h1>';}?>-->
                            <!--<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home"><?php echo esc_html(get_bloginfo('name')); ?></a>-->
                            <a id="main-logo" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home">
                                <img src="https://via.placeholder.com/200x75" alt="<?php echo esc_html(get_bloginfo('name')); ?>" />
                            </a>
                            <nav id="menu">
                                <?php wp_nav_menu(array('theme_location' => 'main-menu'));?>
                                <!--<div id="search"><?php get_search_form();?></div>-->
                            </nav>
                        </div>
                        <!--<div id="site-description"><?php bloginfo('description');?></div>-->
                    </div>
                </header>
                <div id="container">