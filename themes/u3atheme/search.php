<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package u3atheme
 */

get_header(); ?>

<?php
if ( have_posts() ) : ?>

	<header class="page-header">
		<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'u3atheme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	</header><!-- .page-header -->

<?php
else :

	get_template_part( 'template-parts/content', 'none' );
	return;

endif; ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();

			/**
			 * Run the loop for the search to output the results.
			 * If you want to overload this in a child theme then include a file
			 * called content-search.php and that will be used instead.
			 */
			get_template_part( 'template-parts/content' );

		endwhile;

		the_posts_pagination( array(
			'prev_text' => u3atheme_get_svg( array( 'icon' => 'arrow-long-left', 'fallback' => true ) ) . __( 'Newer', 'u3atheme' ),
			'next_text' => __( 'Older', 'u3atheme' ) . u3atheme_get_svg( array( 'icon' => 'arrow-long-right' , 'fallback' => true ) ),
			'before_page_number' => '<span class="screen-reader-text">' . __( 'Page ', 'u3atheme' ) . '</span>',
		));

		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
