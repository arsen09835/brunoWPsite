<?php
/**
 * Template Name: Pagina Servizio
 *
 * Used for SEO service pages like:
 * - Valutazione antiquariato Firenze
 * - Vendere oggetti antichi Firenze
 * - Acquisto oggettistica d'antiquariato a Firenze
 * - Valutazione dipinti antichi Firenze
 * - Acquisto antiquariato Toscana
 *
 * Structure:
 * 1. Hero with title & subtitle
 * 2. Page content (from editor)
 * 3. How it works (reusable)
 * 4. CTA
 *
 * @package Bruno_Antichita
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

<!-- Service Hero -->
<section class="hero">
	<div class="container">
		<div class="hero-grid">
			<div class="hero-content">
				<h1><?php the_title(); ?></h1>
				<?php if ( has_excerpt() ) : ?>
					<p class="hero-subtitle"><?php echo get_the_excerpt(); ?></p>
				<?php endif; ?>

				<div class="btn-group">
					<a href="<?php echo esc_url( bruno_whatsapp_url() ); ?>" class="btn btn--whatsapp" target="_blank" rel="noopener noreferrer">
						&#128247; Invia foto su WhatsApp
					</a>
					<a href="<?php echo esc_url( bruno_phone_url() ); ?>" class="btn btn--secondary">
						&#128222; Chiama ora
					</a>
				</div>
			</div>

			<div class="hero-image">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'bruno-hero' ); ?>
				<?php else : ?>
					<div class="placeholder-img placeholder-img--hero">
						<span>
							<strong>Immagine Servizio</strong><br>
							Formato: 4:3 (1200×800 px)<br>
							Contenuto suggerito: foto pertinente al servizio
						</span>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<!-- Page Content -->
<section class="page-content">
	<div class="container">
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	</div>
</section>

<?php endwhile; ?>

<!-- Reusable Steps -->
<?php get_template_part( 'template-parts/steps' ); ?>

<!-- Reusable Trust Signals -->
<?php get_template_part( 'template-parts/trust-signals' ); ?>

<!-- Final CTA -->
<?php get_template_part( 'template-parts/contact-cta' ); ?>

<?php
get_footer();
