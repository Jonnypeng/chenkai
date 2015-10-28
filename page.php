<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div id="page">
		<div class="container">
			<div class="row" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>
				<div class="col-xs-12 col-md-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
	
	
<?php get_footer(); ?>


