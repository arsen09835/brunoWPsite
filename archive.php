<?php
/**
 * The template for displaying archive pages.
 *
 * @package Bruno_Antichita
 */

get_header();
?>

<section class="page-hero">
	<div class="container">
		<?php the_archive_title( '<h1>', '</h1>' ); ?>
		<?php the_archive_description( '<p>', '</p>' ); ?>
	</div>
</section>

<section class="section">
	<div class="container">

		<?php if ( have_posts() ) : ?>

		<div class="archive-grid">
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
					<div class="object-card__image">
						<?php bruno_post_thumbnail( 'bruno-card' ); ?>
					</div>
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

		<p><?php esc_html_e( 'Nessun contenuto trovato in questa categoria.', 'bruno-antichita' ); ?></p>

		<?php endif; ?>

	</div>
</section>

<?php get_template_part( 'template-parts/contact-cta' ); ?>

<?php
get_footer();
