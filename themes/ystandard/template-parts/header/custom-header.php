<?php
/**
 * カスタムヘッダーテンプレート
 *
 * @package ystandard
 * @author  yosiakatsuki
 * @license GPL-2.0+
 */

if ( ! ys_is_active_header_media() ) {
	return;
}
?>
<div class="header-media is-<?php echo esc_attr( ys_get_header_media_type() ); ?>">
	<?php ys_the_header_media_markup(); ?>
  <h1 class="header-phrase">
    <div class="main-catch">誰もが楽しく、一緒にIT・テクノロジー活用！</div>
    <span class="sub-catch">それが私たちの考えるシビックテック実践</span>
  </h1>
</div>
