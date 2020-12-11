<?php
/**
 * フッターテンプレート
 *
 * @package ystandard
 * @author  yosiakatsuki
 * @license GPL-2.0+
 */

?>
	</div>
	<?php do_action( 'ys_before_site_footer' ); ?>
	<footer id="footer" class="footer site-footer">
		<?php do_action( 'ys_site_footer_prepend' ); ?>
		<?php
		// フッターサブ.
		ys_get_template_part( 'template-parts/footer/footer-sub' );
		?>
		<?php do_action( 'ys_before_footer_main' ); ?>
		<div class="footer-main">
			<?php
			// ウィジェット.
			ys_get_template_part( 'template-parts/footer/footer-widget' );
			// フッターナビゲーション.
			ys_get_template_part( 'template-parts/footer/footer-nav' );
			?>
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<ins class="adsbygoogle"
				 style="display:block;text-align:center"
				 data-ad-format="fluid"
				 data-ad-layout-key="-gu-3+1f-3d+2z"
				 data-ad-client="ca-pub-3904796652923636"
				 data-ad-slot="1946137374"></ins>
			<script>
				 (adsbygoogle = window.adsbygoogle || []).push({});
			</script>
			<?php
			// Copyright.
			ys_get_template_part( 'template-parts/footer/footer-copy' );
			?>
		</div>
		<?php do_action( 'ys_site_footer_append' ); ?>
	</footer>
	<?php
	wp_footer();
	do_action( 'ys_body_append' );
	?>
</body>
</html>
