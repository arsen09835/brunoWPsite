<?php
/**
 * Custom search form.
 *
 * @package Bruno_Antichita
 */
?>

<form role="search" method="get" class="search-form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="search-field"><?php esc_html_e( 'Cerca:', 'bruno-antichita' ); ?></label>
	<input type="search" id="search-field" class="search-field" placeholder="<?php esc_attr_e( 'Cerca nel sito&hellip;', 'bruno-antichita' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
	<button type="submit" class="btn btn--primary"><?php esc_html_e( 'Cerca', 'bruno-antichita' ); ?></button>
</form>
