<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
	exit;
}

add_action('after_setup_theme', function (): void {
	add_theme_support('woocommerce');
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');
});

/**
 * Add a body class when WooCommerce is active.
 */
add_filter('body_class', function (array $classes): array {
	if (class_exists('WooCommerce')) {
		$classes[] = 'aramazco-has-woocommerce';
	}
	return $classes;
});
