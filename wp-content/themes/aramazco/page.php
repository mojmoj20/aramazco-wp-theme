<?php
/**
 * Page template.
 *
 * Ensures regular pages (including WooCommerce pages like My Account) render
 * their actual content/shortcodes instead of falling back to index.php.
 */

declare(strict_types=1);

get_header();
?>

<main class="aramazco-page">
	<div class="aramazco-container">
		<?php
		if (have_posts()) {
			while (have_posts()) {
				the_post();
				?>
				<article <?php post_class('aramazco-card'); ?>>
					<header style="margin-bottom: 14px;">
						<h1 style="margin:0; font-size: 28px; letter-spacing: 0.2px;">
							<?php the_title(); ?>
						</h1>
					</header>
					<div class="aramazco-page__content">
						<?php the_content(); ?>
					</div>
				</article>
				<?php
			}
		}
		?>
	</div>
</main>

<?php
get_footer();
