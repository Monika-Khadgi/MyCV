<?php

get_header();

if ( have_posts() ) :

	while ( have_posts() ) : the_post(); 

		$post_type = get_post_type();
	
		?>

		<article <?php post_class(); ?>>

			<header class="entry-header section-inner">
				<?php
				the_title( '<h1 class="entry-title">', '</h1>' );
        ?>
			</header><!-- .entry-header -->

			<div class="entry-content section-inner">
				<?php the_content(); ?>
			</div> <!-- .content -->
		<?php
	endwhile;
endif;

get_footer(); ?>
