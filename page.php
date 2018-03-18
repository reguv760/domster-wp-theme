<?php get_header(); ?>

				<?php if ( dynamic_sidebar( 'social-icons' ) ); ?>
			</aside>

			<div class="rightCol">

				<header>
					<div class="logo">
						<?php if ( dynamic_sidebar( 'logo-full-width' ) ); ?>
					</div>
				</header>

				<section>
					<div class="content">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="page-content">
	            <h2><?php the_title(); ?></h2>
		          <!-- WP function that outputs post content -->
		          <?php the_content(); ?>
		         </div>

	        <?php endwhile; else: ?>
	           <!-- we run this else if there is no content -->
	          <div class="page-content">
	            <h2>Wups!</h2>
	         		<p>Looks like we have no content for this page?</p>
	         	</div>

	        <?php endif; ?>
					</div>


				</section>

<?php get_footer(); ?>
