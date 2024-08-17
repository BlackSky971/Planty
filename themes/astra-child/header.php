<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

 if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$viewport_content = apply_filters('hello_elementor_viewport_content', 'width=device-width, initial-scale=1');
$enable_skip_link = apply_filters('hello_elementor_enable_skip_link', true);
$skip_link_url = apply_filters('hello_elementor_skip_link_url', '#content');
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
    </div>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="nav-bar">
		<div>
			<a class='logo' href="http://localhost:10008/">
				<img class="logo-icon" alt="" src="http://localhost:10008/wp-content/uploads/2024/05/Logo-source.webp" />
				<div class="energy-drink"></div>
			</a>

		</div>
		<!-- Bouton burger pour mobile -->
        <div class="burger-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>

		<div class="item-menu">
			<div class="item1">
				<?php
				wp_nav_menu(array(
					'menu'=>'menu',
					'theme_location' => 'menu',
					'container' => false, // N'inclut pas de conteneur autour du menu
				));
				?>
			</div>
			<div class="btn-nav">
				<div class="btn-nav-child">
					<a class="commander" href="http://localhost:10008/elementor-70">Commander</a>
				</div>
			</div>
		</div>
	</header>