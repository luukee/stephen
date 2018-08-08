<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action('twentytwelve_credits'); ?>
			<?php
            add_action('wp_enqueue_scripts', function () {
                wp_enqueue_script('interaction-observer-polyfill', 'path-to-interaction-observer.js', [], null, true);
                wp_enqueue_script('lozad', 'https://cdn.jsdelivr.net/npm/lozad@1.3.0/dist/lozad.min.js', ['interaction-observer-polyfill'], null, true);
            });
            ?>
			<a href="<?php echo esc_url(__('http://lukecarlhartman.com/', 'twentytwelve')); ?>" title="<?php esc_attr_e('Semantic Personal Publishing Platform', 'twentytwelve'); ?>"><?php printf(__(' %s', 'twentytwelve'), 'LCH Design'); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
