<?php
/**
 * 記事一覧テンプレート
 *
 * @package ystandard
 * @author  yosiakatsuki
 * @license GPL-2.0+
 */

?>
<main id="main" class="archive__main site-main">
	<?php do_action( 'ys_site_main_prepend' ); ?>
	<?php
	/**
	 * アーカイブヘッダーの読み込み
	 */
	ys_get_template_part( 'template-parts/archive/header' );
	?>
	<div class="archive__container is-<?php echo ys_get_archive_type(); ?>">
		<?php
		while ( have_posts() ) :
			the_post();
			do_action( 'ys_archive_before_content' );
			ys_get_template_part(
				'template-parts/archive/details',
				ys_get_archive_type()
			);
			do_action( 'ys_archive_after_content' );
		endwhile;
		?>
	</div>
	<?php
	/**
	 * ページネーション
	 */
	ys_get_template_part( 'template-parts/parts/pagination' );
	?>
	<?php do_action( 'ys_site_main_append' ); ?>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<ins class="adsbygoogle"
		 style="display:block; text-align:center;margin-top:3rem;"
		 data-ad-layout="in-article"
		 data-ad-format="fluid"
		 data-ad-client="ca-pub-3904796652923636"
		 data-ad-slot="4432328789"></ins>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</main>
