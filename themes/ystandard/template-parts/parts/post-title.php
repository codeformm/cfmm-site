<?php
/**
 * 投稿タイトル
 *
 * @package ystandard
 * @author  yosiakatsuki
 * @license GPL-2.0+
 */

do_action( 'ys_singular_before_title' );
the_title(
	'<h1 class="singular-header__title entry-title">',
	'</h1><svg width="90" height="2" viewBox="0 0 90 2" xmlns="http://www.w3.org/2000/svg" style="margin:15px auto 3rem" class="ystdb-heading__line has-ys-user-1-fill" role="img" aria-hidden="true"><path d="m0 0 h 90 v 2 h -90 z"></path></svg>'
);
do_action( 'ys_singular_after_title' );
