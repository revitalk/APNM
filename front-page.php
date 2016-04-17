<?php
/**
 * The template for displaying the home page.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package apnm
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			<?php wp_reset_query(); ?>
		<div class="row">
			<div class="col-3">
			<?php query_posts('category_name=news-home&posts_per_page=1'); ?>
				<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>
			<?php wp_reset_query(); ?>
			</div>
			<div class="col-3">
			<?php query_posts('category_name=events-home&posts_per_page=1'); ?>
				<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>
			<?php wp_reset_query(); ?>
			</div>
			<div class="col-3">
			<?php query_posts('category_name=contests-home&posts_per_page=1'); ?>
				<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			<?php wp_reset_query(); ?>
			</div>
		</div><!-- .row -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
