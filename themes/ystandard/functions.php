<?php
/**
 * テーマ内で使用する関数
 *
 * @package ystandard
 * @author  yosiakatsuki
 * @license GPL-2.0+
 */

/**
 * 関数群を読み込み
 */
require_once __DIR__ . '/inc/class-ys-loader.php';

function SearchFilter($query) {
if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
$query->set( 'post_type', array( 'post', 'project' ) );
}
}
add_action( 'pre_get_posts','SearchFilter' );

add_filter( 'jetpack_enable_opengraph', '__return_false', 99 );