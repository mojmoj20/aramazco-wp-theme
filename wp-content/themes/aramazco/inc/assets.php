<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
	exit;
}

add_action('wp_enqueue_scripts', function (): void {
	$ver = defined('ARAMAZCO_THEME_VERSION') ? ARAMAZCO_THEME_VERSION : null;

	wp_enqueue_style(
		'aramazco-main',
		ARAMAZCO_THEME_URI . '/assets/css/main.css',
		[],
		$ver
	);

	// WooCommerce-specific styling (kept separate).
	if (class_exists('WooCommerce')) {
		wp_enqueue_style(
			'aramazco-woocommerce',
			ARAMAZCO_THEME_URI . '/woocommerce.css',
			['aramazco-main'],
			$ver
		);
	}

	// RTL support (only loaded when site language is RTL).
	wp_enqueue_style(
		'aramazco-rtl',
		ARAMAZCO_THEME_URI . '/assets/css/rtl.css',
		['aramazco-main'],
		$ver
	);
	wp_style_add_data('aramazco-rtl', 'rtl', 'replace');

	wp_enqueue_script(
		'aramazco-main',
		ARAMAZCO_THEME_URI . '/assets/js/main.js',
		[],
		$ver,
		true
	);
});
