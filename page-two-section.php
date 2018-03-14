<?php
/*
  Template Name: Two Sections
 */
?>

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

						<?php if ( dynamic_sidebar( 'single-width' ) ); ?>
					</div>
				</section>

				<section>
					<div class="content">
						<?php if ( dynamic_sidebar( 'single-width' ) ); ?>
					</div>
				</section>

<?php get_footer(); ?>
