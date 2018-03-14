<?php get_header(); ?>

				<ul class="socialIcons">
					<li class="newsletter">
						<p>Sign up for our Newsletter</p>
					</li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</aside>

			<div class="rightCol">

				<header>
					<?php if ( dynamic_sidebar( 'logo-full-width' ) ); ?>
				</header>

				<section>
					<div class="content">
						<h2>Blog</h2>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				    <?php the_content(); ?>

				    <?php endwhile; endif; ?>
					</div>


				</section>

<?php get_footer(); ?>
