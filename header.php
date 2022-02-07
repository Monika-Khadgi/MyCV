<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>" charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php 
		if ( function_exists( 'wp_body_open' ) ) {
			wp_body_open(); 
		}
		?>

		<header class="site-header group">
    <div class="profile-wrap">
          <p class="my-photo">
            <img src="<?php the_post_thumbnail_url(); ?>" />
          </p>
      </div>
			<?php $site_title_elem = is_front_page() || ( is_home() && get_option( 'show_on_front' ) == 'posts' ) ? 'h1' : 'p'; ?>

			<<?php echo $site_title_elem; ?> class="site-title"><a href="<?php echo esc_url( home_url() ); ?>" class="site-name"><?php bloginfo( 'name' ); ?></a></<?php echo $site_title_elem; ?>>

			<?php if ( get_bloginfo( 'description' ) ) : ?>

				<div class="site-description"><?php echo wpautop( get_bloginfo( 'description' ) ); ?></div>

			<?php endif; ?>

			<div class="menu-wrapper">

				<ul class="main-menu desktop">

					<?php

					if ( has_nav_menu( 'main-menu' ) ) {

						$main_menu_args = array(
							'container' 		=> '',
							'items_wrap' 		=> '%3$s',
							'theme_location' 	=> 'main-menu',
						);

						wp_nav_menu( $main_menu_args );

					} else {

						$fallback_args = array(
							'container' => '',
							'title_li' 	=> '',
						);

						wp_list_pages( $fallback_args );
					}
					?>
				</ul>

			</div><!-- .menu-wrapper -->
		</header><!-- header -->

		<main class="site-content" id="site-content">