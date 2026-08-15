<?php
/**
 * Aramazco theme functions.
 */

declare(strict_types=1);

if (!defined('ABSPATH')) {
	exit;
}

define('ARAMAZCO_THEME_VERSION', '0.1.0');
define('ARAMAZCO_THEME_DIR', get_template_directory());
define('ARAMAZCO_THEME_URI', get_template_directory_uri());

require_once ARAMAZCO_THEME_DIR . '/inc/setup.php';
require_once ARAMAZCO_THEME_DIR . '/inc/assets.php';
require_once ARAMAZCO_THEME_DIR . '/inc/woocommerce.php';
