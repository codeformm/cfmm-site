<?php
/**
 * アーカイブヘッダー
 *
 * @package ystandard
 * @author  yosiakatsuki
 * @license GPL-2.0+
 */

/**
 * Homeテンプレートは出さない
 */
// if ( is_home() ) {
// 	return;
// }
?>
<header class="archive__header page-header">
	<?php
	the_archive_title(
		'<h1 class="archive__page-title page-title">',
		'</h1>'
	);
	?>
	<svg width="90" height="2" viewBox="0 0 90 2" xmlns="http://www.w3.org/2000/svg" style="margin-top:15px;margin-bottom:3rem" class="ystdb-heading__line has-ys-user-1-fill" role="img" aria-hidden="true"><path d="m0 0 h 90 v 2 h -90 z"></path></svg>
</header>
<?php
the_archive_description(
	'<div class="archive__dscr taxonomy-description">',
	'</div>'
);
?>
