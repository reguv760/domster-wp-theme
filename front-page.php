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
							<?php the_content(); ?>
							<!-- <?php get_template_part( 'content', get_post_format() ); ?> -->
						</div>
						<?php endwhile; endif; ?>
					</div>

					<!-- tour date widget -->
					<div class="content">
						<div class="page-content">
							<?php if ( dynamic_sidebar( 'single-width' ) ); ?>
						</div>
					</div>
				</section>



<?php get_footer(); ?>
