<?php
/**
 * Template for displaying search forms in Vodi
 *
 * @package WordPress
 * @subpackage Vodi
 * @since 1.0
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="<?php echo esc_attr( $unique_id ); ?>"><?php echo esc_html_x( 'Search for:', 'label', 'vodi' ); ?></label>
	<input type="search" id="<?php echo esc_attr( $unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'vodi' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><?php vodi_get_template( 'templates/svg/search-icon.svg' ); ?><span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'submit button', 'vodi' ); ?></span></button>
</form>