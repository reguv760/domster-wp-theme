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
						<div class="blog-post">
							<h2><?php the_title(); ?></h2>
	            <h5><?php the_date(get_option('date_format')); ?></h5>
					    <?php the_content(); ?>

					   </div>
					   <?php endwhile; endif; ?>
					</div>


				</section>

<?php get_footer(); ?>
