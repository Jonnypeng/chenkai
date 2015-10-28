<?php get_header(); ?>

<div id="main">

	  <div class="container text-center" id="main-index">
		  <div class="col-md-4 col-xs-4">
			<h1><i class="fa fa-th-list fa-2x"></i></h1>
			<h3>所授课程</h3>
			<p class="more"><a href="http://chenkai.aliapp.com/%E6%89%80%E6%8E%88%E8%AF%BE%E7%A8%8B" class="">了解更多 »</a></p>
		  </div>

		  <div class="col-md-4 col-xs-4">
			<h1><i class="fa fa-camera-retro fa-2x "></i></h1>
			<h3>课堂留影</h3>
			<p class="more"><a href="http://chenkai.aliapp.com/%E8%AF%BE%E5%A0%82%E7%95%99%E5%BD%B1" class="">了解更多 »</a></p>
		  </div>

		  <div class="col-md-4 col-xs-4">
			<h1><i class="fa fa-comments-o fa-2x"></i></h1>
			<h3>媒体报道</h3>
			<p class="more"><a href="http://chenkai.aliapp.com/%E5%AA%92%E4%BD%93%E6%8A%A5%E9%81%93" class="">了解更多 »</a></p>
		  </div>
	</div>

	<div class="container well text-center" id="weibo">
	  <h4>
		<i class="fa fa-weibo fa-2x"></i>&nbsp;&nbsp;想了解最新的财经及战略管理评论,就
		<a href="http://weibo.com/319177708" target="_blank">
		  
		  <span>点击这里,就可以添加我的新浪微博</span>
		</a>
	  </h4>
</div>

	<div class="container">
	  <div class="row">
				<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">

			<?php if ( current_user_can( 'edit_posts' ) ) :
				// Show a different message to a logged-in user who can add posts.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'No posts to display', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwelve' ), admin_url( 'post-new.php' ) ); ?></p>
				</div><!-- .entry-content -->

			<?php else :
				// Show the default message to everyone else.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			<?php endif; // end current_user_can() check ?>

			</article><!-- #post-0 -->

		<?php endif; // end have_posts() check ?>
	  </div>
	</div>
</div>

<?php get_footer(); ?>