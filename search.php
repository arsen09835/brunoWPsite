<?php
/**
 * The template for displaying search results.
 *
 * @package Bruno_Antichita
 */

get_header();
?>

<section class="page-hero">
	<div class="container">
		<h1>
			<?php
			/* translators: %s: search query. */
			printf( esc_html__( 'Risultati per: %s', 'bruno-antichita' ), '<em>' . get_search_query() . '</em>' );
			?>
		</h1>
	</div>
</section>

<section class="section">
	<div class="container">

		<div style="margin-bottom: 2rem;">
			<?php get_search_form(); ?>
		</div>

		<?php if ( have_posts() ) : ?>

		<div class="archive-grid">
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
					<div class="post-card__body">
						<span class="post-card__date"><?php bruno_posted_on(); ?></span>
						<h2 class="post-card__title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
						<p class="post-card__excerpt"><?php echo get_the_excerpt(); ?></p>
					</div>
				</article>

			<?php endwhile; ?>
		</div>

		<?php bruno_pagination(); ?>

		<?php else : ?>

		<p><?php esc_html_e( 'Nessun risultato trovato. Prova con parole chiave diverse.', 'bruno-antichita' ); ?></p>

		<?php endif; ?>

	</div>
</section>

<?php
get_footer();
