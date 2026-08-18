<?php

declare(strict_types=1);

if (!defined('ABSPATH')) {
	exit;
}

add_action('after_setup_theme', function (): void {
	load_theme_textdomain('aramazco', get_template_directory() . '/languages');

	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-logo', [
		'height' => 80,
		'width' => 240,
		'flex-height' => true,
		'flex-width' => true,
	]);

	register_nav_menus([
		'primary' => __('Primary Menu', 'aramazco'),
		'footer' => __('Footer Menu', 'aramazco'),
	]);

	add_theme_support('html5', [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	]);
});

/**
 * Render brand mark in header. Prefers WP custom logo; falls back to bundled logo.
 */
function aramazco_render_brand_logo(): void
{
	if (function_exists('the_custom_logo') && has_custom_logo()) {
		the_custom_logo();
		return;
	}

	$src = get_template_directory_uri() . '/assets/brand/aramazco-logo.png';
	printf(
		'<img class="aramazco-logo" src="%s" alt="%s" loading="eager" decoding="async" />',
		esc_url($src),
		esc_attr(get_bloginfo('name'))
	);
}
