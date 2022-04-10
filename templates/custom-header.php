<?php
/**
 * Template Name: RealHomes Elementor Header
 *
 * @package realhomes/templates
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
wp_body_open(); // Fire the wp_body_open action.

the_content();

wp_footer();
?>
</body>
</html>