<?php
/**
 * The template for displaying single posts.
 *
 * Used for both "Articoli" (blog posts) and "Oggetti acquistati" posts.
 *
 * @package Bruno_Antichita
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-content' ); ?>>

	<header>
		<h1><?php the_title(); ?></h1>
		<p class="single-meta">
			<?php bruno_posted_on(); ?>
			<?php
			$categories = get_the_category();
			if ( ! empty( $categories ) ) {
				echo ' &mdash; ' . esc_html( $categories[0]->name );
			}
			?>
		</p>
	</header>

	<?php if ( has_post_thumbnail() ) : ?>
		<div style="margin-bottom: 2rem;">
			<?php the_post_thumbnail( 'large', array( 'loading' => 'lazy' ) ); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<footer style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid var(--color-border);">
		<p>
			<strong><?php esc_html_e( 'Hai oggetti simili?', 'bruno-antichita' ); ?></strong>
			<?php esc_html_e( 'Se possiedi pezzi simili e vuoi ricevere una valutazione, contattaci.', 'bruno-antichita' ); ?>
		</p>
		<div class="btn-group">
			<a href="<?php echo esc_url( bruno_whatsapp_url() ); ?>" class="btn btn--whatsapp" target="_blank" rel="noopener noreferrer">
				&#128247; Invia foto su WhatsApp
			</a>
			<a href="<?php echo esc_url( bruno_phone_url() ); ?>" class="btn btn--secondary">
				&#128222; Chiama ora
			</a>
		</div>
	</footer>

</article>

<?php endwhile; ?>

<?php get_template_part( 'template-parts/contact-cta' ); ?>

<?php
get_footer();
