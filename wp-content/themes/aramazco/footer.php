<?php

declare(strict_types=1);

?>

<footer style="border-top: 1px solid var(--aramazco-border); padding: 24px 0 38px;">
	<div class="aramazco-container" style="display:flex; gap: 16px; justify-content: space-between; flex-wrap: wrap;">
		<div style="color: var(--aramazco-muted);">
			<?php echo esc_html(get_bloginfo('name')); ?> © <?php echo esc_html((string) gmdate('Y')); ?>
		</div>
		<div>
			<?php
			wp_nav_menu([
				'theme_location' => 'footer',
				'container' => false,
				'fallback_cb' => '__return_false',
			]);
			?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
