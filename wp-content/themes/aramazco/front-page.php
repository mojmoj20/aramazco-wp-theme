<?php
/**
 * Front page template.
 */

declare(strict_types=1);

get_header();

$shopUrl = function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/shop/');
$accountUrl = function_exists('wc_get_page_permalink') ? wc_get_page_permalink('myaccount') : home_url('/my-account/');
?>

<main>
	<section class="aramazco-hero">
		<div class="aramazco-container">
			<div class="aramazco-hero__grid">
				<div>
					<p class="aramazco-kicker"><?php esc_html_e('Precision • Reliability • Certified Quality', 'aramazco'); ?></p>
					<h1 class="aramazco-hero__title"><?php esc_html_e('Premium Braided Hose Connections', 'aramazco'); ?></h1>
					<p class="aramazco-hero__subtitle">
						<?php esc_html_e('Aramazco manufactures high-quality under-sink flexible hose connections and boiler packages, engineered for durability, leak-free performance, and long service life.', 'aramazco'); ?>
					</p>
					<div class="aramazco-hero__actions">
						<a class="aramazco-btn aramazco-btn--primary" href="<?php echo esc_url($shopUrl); ?>"><?php esc_html_e('Browse Products', 'aramazco'); ?></a>
						<a class="aramazco-btn aramazco-btn--ghost" href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Request a Quote', 'aramazco'); ?></a>
						<a class="aramazco-btn aramazco-btn--ghost" href="<?php echo esc_url($accountUrl); ?>"><?php esc_html_e('Customer Login', 'aramazco'); ?></a>
					</div>
					<div class="aramazco-metrics">
						<div class="aramazco-metric"><span class="aramazco-metric__val">24/7</span><span class="aramazco-metric__label"><?php esc_html_e('Support', 'aramazco'); ?></span></div>
						<div class="aramazco-metric"><span class="aramazco-metric__val">QC</span><span class="aramazco-metric__label"><?php esc_html_e('Quality control', 'aramazco'); ?></span></div>
						<div class="aramazco-metric"><span class="aramazco-metric__val">OEM</span><span class="aramazco-metric__label"><?php esc_html_e('Manufacturing', 'aramazco'); ?></span></div>
					</div>
				</div>

				<div class="aramazco-hero__panel">
					<div class="aramazco-card aramazco-card--glow">
						<h2 class="aramazco-card__title"><?php esc_html_e('Built for installers & wholesalers', 'aramazco'); ?></h2>
						<ul class="aramazco-list">
							<li><?php esc_html_e('Leak-resistant fittings & robust braiding', 'aramazco'); ?></li>
							<li><?php esc_html_e('Clear specs, fast ordering, consistent availability', 'aramazco'); ?></li>
							<li><?php esc_html_e('Ready for WooCommerce payments/shipping plugins', 'aramazco'); ?></li>
						</ul>
						<div class="aramazco-divider"></div>
						<p class="aramazco-muted" style="margin:0;">
							<?php esc_html_e('This homepage is a theme starter. You can replace sections with Elementor later while keeping performance and structure.', 'aramazco'); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="aramazco-section">
		<div class="aramazco-container">
			<div class="aramazco-section__head">
				<h2 class="aramazco-h2"><?php esc_html_e('Product focus', 'aramazco'); ?></h2>
				<p class="aramazco-muted"><?php esc_html_e('Fast access to the main families — optimize discovery and purchasing.', 'aramazco'); ?></p>
			</div>
			<div class="aramazco-grid3">
				<a class="aramazco-tile" href="<?php echo esc_url($shopUrl); ?>">
					<span class="aramazco-tile__title"><?php esc_html_e('Under-sink connections', 'aramazco'); ?></span>
					<span class="aramazco-tile__desc"><?php esc_html_e('Flexible braided hoses & fittings', 'aramazco'); ?></span>
				</a>
				<a class="aramazco-tile" href="<?php echo esc_url($shopUrl); ?>">
					<span class="aramazco-tile__title"><?php esc_html_e('Boiler packages', 'aramazco'); ?></span>
					<span class="aramazco-tile__desc"><?php esc_html_e('Complete sets for fast installation', 'aramazco'); ?></span>
				</a>
				<a class="aramazco-tile" href="<?php echo esc_url($shopUrl); ?>">
					<span class="aramazco-tile__title"><?php esc_html_e('Technical catalog', 'aramazco'); ?></span>
					<span class="aramazco-tile__desc"><?php esc_html_e('Specs-first browsing (coming next)', 'aramazco'); ?></span>
				</a>
			</div>
		</div>
	</section>

	<section class="aramazco-section">
		<div class="aramazco-container">
			<div class="aramazco-split">
				<div class="aramazco-card">
					<h2 class="aramazco-h2" style="margin-top:0;"><?php esc_html_e('Trust signals', 'aramazco'); ?></h2>
					<p class="aramazco-muted"><?php esc_html_e('Use this area to show certifications, warranty, QC process, and standards.', 'aramazco'); ?></p>
					<div class="aramazco-badges">
						<span class="aramazco-badge">ISO</span>
						<span class="aramazco-badge">QC</span>
						<span class="aramazco-badge">Warranty</span>
						<span class="aramazco-badge">Lead-free</span>
					</div>
				</div>
				<div class="aramazco-card">
					<h2 class="aramazco-h2" style="margin-top:0;"><?php esc_html_e('Fast contact', 'aramazco'); ?></h2>
					<p class="aramazco-muted"><?php esc_html_e('Make it easy for wholesalers and installers to reach you.', 'aramazco'); ?></p>
					<div class="aramazco-actions">
						<a class="aramazco-btn aramazco-btn--primary" href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Contact sales', 'aramazco'); ?></a>
						<a class="aramazco-btn aramazco-btn--ghost" href="<?php echo esc_url($shopUrl); ?>"><?php esc_html_e('Go to shop', 'aramazco'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
