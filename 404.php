<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Bruno_Antichita
 */

get_header();
?>

<section class="page-404">
	<div class="container">
		<h1>404</h1>
		<h2><?php esc_html_e( 'Pagina non trovata', 'bruno-antichita' ); ?></h2>
		<p><?php esc_html_e( 'La pagina che stai cercando non esiste o è stata spostata.', 'bruno-antichita' ); ?></p>

		<div class="btn-group" style="justify-content: center; margin-top: 2rem;">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--primary">
				<?php esc_html_e( 'Torna alla homepage', 'bruno-antichita' ); ?>
			</a>
			<a href="<?php echo esc_url( home_url( '/contatti/' ) ); ?>" class="btn btn--secondary">
				<?php esc_html_e( 'Contattaci', 'bruno-antichita' ); ?>
			</a>
		</div>
	</div>
</section>

<?php
get_footer();
