<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ippo
 */

get_header(); ?>

	<div class="container container-fluid">

		<header class="page-header">
			<?php if(!is_front_page()) { ?>
			<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
			<?php } ?>
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'ippo' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</header><!-- .page-header -->

		<div class="row">

			<div id="primary" class="content-area <?php ippo_content_classes(); ?>">
				<main id="main" class="site-main container-fluid" role="main">

						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'templates/template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							comments_template();

						endwhile; // End of the loop.
						?>

				</main><!-- #main -->
			</div><!-- #primary -->

			<?php get_sidebar(); ?>

		</div><!-- .row -->

	</div><!-- .container.container-medium -->

<?php
get_footer();
