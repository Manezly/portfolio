
<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php
				$project_site_link = get_field('project_site_link');
			?>

			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<div class="container">
					<a class="site_link" href="<?= $project_site_link; ?>">Please check the site out here<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M11.293 4.707L17.586 11H4v2h13.586l-6.293 6.293 1.414 1.414L21.414 12l-8.707-8.707-1.414 1.414z"/>
                                        </svg></a>
					<div class="post_img_container">
						<?php the_post_thumbnail();  ?>
					</div>
					<h1>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h1>

					<?php the_content(); ?>

					<!-- <p><?php the_author(); ?></p> -->
				</div>
			<?php endif; ?>


		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
