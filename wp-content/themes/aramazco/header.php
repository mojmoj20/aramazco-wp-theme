<?php

declare(strict_types=1);

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="aramazco-header">
	<div class="aramazco-container">
		<div class="aramazco-header__inner">
			<a class="aramazco-brand" href="<?php echo esc_url(home_url('/')); ?>">
				<?php
				if (function_exists('aramazco_render_brand_logo')) {
					aramazco_render_brand_logo();
				} else {
					echo '<span class="aramazco-brand__name">' . esc_html(get_bloginfo('name')) . '</span>';
				}
				?>
			</a>

			<nav>
				<?php
				wp_nav_menu([
					'theme_location' => 'primary',
					'container' => false,
					'fallback_cb' => '__return_false',
				]);
				?>
			</nav>
		</div>
	</div>
</header>
