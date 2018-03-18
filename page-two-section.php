<?php
/*
  Template Name: Two Sections
 */
?>

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
						<div class="page-content">
							<?php if ( dynamic_sidebar( 'single-width' ) ); ?>
						</div>
					</div>
				</section>

				<section>
					<div class="content">
						<div class="page-content">
							<?php if ( dynamic_sidebar( 'single-width' ) ); ?>
						</div>
					</div>
				</section>

<?php get_footer(); ?>
