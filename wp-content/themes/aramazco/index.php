<?php
/**
 * Main template file.
 */

declare(strict_types=1);

get_header();
?>

<main>
	<section class="aramazco-hero">
		<div class="aramazco-container">
			<h1 class="aramazco-hero__title"><?php echo esc_html(get_bloginfo('name')); ?></h1>
			<p class="aramazco-hero__subtitle">
				<?php echo esc_html(get_bloginfo('description')); ?>
			</p>
			<p style="margin-top: 18px; display: flex; gap: 12px; flex-wrap: wrap;">
				<a class="aramazco-btn" href="<?php echo esc_url(home_url('/shop/')); ?>">
					<?php esc_html_e('Shop', 'aramazco'); ?>
				</a>
				<a class="aramazco-btn" href="<?php echo esc_url(home_url('/contact/')); ?>" style="background: transparent;">
					<?php esc_html_e('Contact', 'aramazco'); ?>
				</a>
			</p>
		</div>
	</section>

	<section style="padding: 0 0 72px;">
		<div class="aramazco-container">
			<div class="aramazco-card" style="padding: 18px;">
				<p style="margin: 0; color: var(--aramazco-muted);">
					<?php esc_html_e('Theme scaffold is ready. Next: build homepage sections, WooCommerce templates (minimal overrides), and Elementor-friendly layouts.', 'aramazco'); ?>
				</p>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
