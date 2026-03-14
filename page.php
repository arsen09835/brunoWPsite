<?php
/**
 * The template for displaying all pages.
 *
 * @package Bruno_Antichita
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="page-hero">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
</section>

<section class="page-content">
	<div class="container">
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	</div>
</section>

<?php endwhile; ?>

<?php get_template_part( 'template-parts/contact-cta' ); ?>

<?php
get_footer();
