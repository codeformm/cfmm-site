<?php
/**
 * ヘッダーテンプレート
 *
 * @package ystandard
 * @author  yosiakatsuki
 * @license GPL-2.0+
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head <?php ys_the_head_attr(); ?>>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no"/>
	<?php wp_head(); ?>
	<?php if (has_post_thumbnail()) : ?>
    <meta property="og:image" content="<?php the_post_thumbnail_url(); ?>" />
    <?php else: ?>
    <meta property="og:image" content="https://code4mm.org/wp-content/uploads/2020/08/logo_fix__-e1597544164993.png" />
    <?php endif; ?>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@500;700&display=swap" rel="stylesheet">
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177609077-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-177609077-1');
    </script>
	<script data-ad-client="ca-pub-3904796652923636" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php do_action( 'ys_body_prepend' ); ?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ystandard' ); ?></a>
	<?php ys_get_template_part( 'template-parts/header/site-header' ); ?>
	<?php do_action( 'ys_after_site_header' ); ?>
  <?php do_action( 'ys_info_bar' ); ?>
	<div id="content" class="site-content">