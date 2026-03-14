<?php
/**
 * Template Name: Pagina Contatti
 *
 * Contact page with form, phone, WhatsApp, map placeholder, address, hours.
 *
 * @package Bruno_Antichita
 */

get_header();
?>

<section class="page-hero">
	<div class="container">
		<h1><?php esc_html_e( 'Contatti', 'bruno-antichita' ); ?></h1>
		<p><?php esc_html_e( 'Puoi contattarci telefonicamente, tramite WhatsApp, oppure compilando il modulo qui sotto.', 'bruno-antichita' ); ?></p>
	</div>
</section>

<section class="section">
	<div class="container">

		<div class="bottega-grid">

			<!-- Left: Contact Info -->
			<div>
				<h2><?php esc_html_e( 'Dove siamo', 'bruno-antichita' ); ?></h2>

				<p>
					<strong>Antichità e Restauro di Bruno Balzano</strong><br>
					<?php echo esc_html( get_theme_mod( 'bruno_address', 'Viale Don Giovanni Minzoni 60/R, Firenze' ) ); ?>
				</p>

				<p>
					<strong><?php esc_html_e( 'Telefono', 'bruno-antichita' ); ?></strong><br>
					<a href="<?php echo esc_url( bruno_phone_url() ); ?>">
						<?php echo esc_html( get_theme_mod( 'bruno_phone', '+39 055 1234567' ) ); ?>
					</a>
				</p>

				<p>
					<strong>WhatsApp</strong><br>
					<a href="<?php echo esc_url( bruno_whatsapp_url() ); ?>" target="_blank" rel="noopener noreferrer">
						<?php esc_html_e( 'Invia messaggio su WhatsApp', 'bruno-antichita' ); ?>
					</a>
				</p>

				<p>
					<strong>Email</strong><br>
					<a href="mailto:<?php echo esc_attr( get_theme_mod( 'bruno_email', 'info@brunoantichita.it' ) ); ?>">
						<?php echo esc_html( get_theme_mod( 'bruno_email', 'info@brunoantichita.it' ) ); ?>
					</a>
				</p>

				<p>
					<strong><?php esc_html_e( 'Orari', 'bruno-antichita' ); ?></strong><br>
					<?php echo esc_html( get_theme_mod( 'bruno_orari', 'Lun – Ven: 9:00 – 13:00 / 15:00 – 19:00 | Sab: su appuntamento' ) ); ?>
				</p>

				<div style="margin-top: 1.5rem;">
					<!--
						PLACEHOLDER — Google Maps Embed
						Replace with a real Google Maps iframe embed or shortcode.
						Coordinates: ~43.7823, 11.2624 (Viale Minzoni, Firenze)
					-->
					<div class="placeholder-img" style="min-height: 250px;">
						<span>
							<strong>Google Maps</strong><br>
							Inserire iframe embed di Google Maps<br>
							Viale Don Giovanni Minzoni 60/R, Firenze
						</span>
					</div>
				</div>
			</div>

			<!-- Right: Contact Form -->
			<div>
				<h2><?php esc_html_e( 'Scrivici', 'bruno-antichita' ); ?></h2>

				<p><?php esc_html_e( 'Compila il modulo oppure inviaci le foto direttamente su WhatsApp per una valutazione rapida.', 'bruno-antichita' ); ?></p>

				<!--
					NOTE: This is a basic HTML form.
					In production, replace with Contact Form 7, WPForms Lite,
					or any lightweight form plugin.
					The form action should point to a handler or be replaced by a plugin shortcode.
				-->
				<form class="contact-form" method="post" action="#">
					<div class="form-field">
						<label for="contact-name"><?php esc_html_e( 'Nome', 'bruno-antichita' ); ?></label>
						<input type="text" id="contact-name" name="contact_name" required>
					</div>

					<div class="form-field">
						<label for="contact-phone"><?php esc_html_e( 'Telefono', 'bruno-antichita' ); ?></label>
						<input type="tel" id="contact-phone" name="contact_phone" required>
					</div>

					<div class="form-field">
						<label for="contact-message"><?php esc_html_e( 'Messaggio', 'bruno-antichita' ); ?></label>
						<textarea id="contact-message" name="contact_message" rows="5"></textarea>
					</div>

					<p style="font-size: 0.9rem; color: var(--color-text-light); margin-bottom: 1rem;">
						&#128247; <?php esc_html_e( 'Per inviare foto, usa WhatsApp: è più rapido e comodo.', 'bruno-antichita' ); ?>
					</p>

					<button type="submit" class="btn btn--primary"><?php esc_html_e( 'Invia messaggio', 'bruno-antichita' ); ?></button>
				</form>
			</div>

		</div>

	</div>
</section>

<?php
get_footer();
