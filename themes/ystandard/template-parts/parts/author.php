<?php
/**
 * プロフィール表示テンプレート
 *
 * @package ystandard
 * @author  yosiakatsuki
 * @license GPL-2.0+
 */

/**
 * 著者情報の表示は基本的にショートコードで処理しています。
 */
if ( empty( $author_data ) ) {
	return;
}

?>
<div class="author-box">
	<div class="author-box__header">
		<?php if ( $author_data['avatar'] ) : ?>
			<figure class="author-box__avatar">
				<?php echo $author_data['avatar']; ?>
			</figure>
		<?php endif; ?>
		<div class="author-box__profile">
			<p class="author-box__name"><?php echo $author_data['name']; ?></p>
			<?php if ( $author_data['position'] ) : ?>
				<p class="author-box__position"><?php echo $author_data['position']; ?></p>
			<?php endif; ?>
			<?php if ( ! empty( $author_data['sns'] ) ) : ?>
				<ul class="author-box__sns">

					<?php foreach ( $author_data['sns'] as $key => $value ) : ?>
						<li class="author-box__sns-item sns-text--<?php echo $value['color']; ?>">
							<a class="author-box__sns-link" href="<?php echo $value['url']; ?>" target="_blank" rel="nofollow noopener noreferrer" title="<?php echo $value['title']; ?>">
								<?php echo $value['icon']; ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>
	<?php if ( $author_data['description'] ) : ?>
		<div class="author-box__description">
			<?php echo $author_data['description']; ?>
		</div>
	<?php endif; ?>
</div>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
  style="display:block; text-align:center;"
  data-ad-layout="in-article"
  data-ad-format="fluid"
  data-ad-client="ca-pub-3904796652923636"
  data-ad-slot="4432328789"></ins>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({});
</script>