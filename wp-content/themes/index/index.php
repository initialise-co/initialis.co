<?php get_header(); ?>
    <h1>Init.co</h1>
    <?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

<!-- Template for setting up columns and the like
<div class="row">
		<div class="large-12 medium-12 small-12 columns">
		    <div class="header-top">
		        <div class="branding"><a class="logo" href="<?php echo site_url(); ?>"></a></div>
		        <ul class="social-media-top">
		            <li><a href="" id="facebook-top"></a></li>
		            <li><a href="" id="instagram-top"></a></li>
		            <li><a href="" id="twitter-top"></a></li>
		        </ul>
		    </div>
		</div>
	</div>
	-->
<?php get_footer(); ?>
