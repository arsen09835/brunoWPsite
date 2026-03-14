<?php
/**
 * Template: Front Page (Homepage)
 *
 * Implements the complete homepage structure:
 * 1. Hero
 * 2. Riconoscimento del problema
 * 3. Come funziona
 * 4. Cosa valutiamo e acquistiamo
 * 5. Oggetti acquistati recentemente
 * 6. La Bottega / Bruno
 * 7. Territorio
 * 8. CTA finale
 *
 * @package Bruno_Antichita
 */

get_header();
?>

<?php get_template_part( 'template-parts/hero' ); ?>

<?php get_template_part( 'template-parts/problem' ); ?>

<?php get_template_part( 'template-parts/steps' ); ?>

<?php get_template_part( 'template-parts/categories' ); ?>

<?php get_template_part( 'template-parts/recent-objects' ); ?>

<?php get_template_part( 'template-parts/bottega' ); ?>

<?php get_template_part( 'template-parts/territory' ); ?>

<?php get_template_part( 'template-parts/trust-signals' ); ?>

<?php get_template_part( 'template-parts/contact-cta' ); ?>

<?php
get_footer();
