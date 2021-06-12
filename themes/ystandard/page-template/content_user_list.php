<?php
/*
 * Template Name:メンバー一覧
 * Template Post Type:page
*/

get_header(); ?>
	<style>
		.members {overflow:hidden;}.member-profile{width: 18%;min-height: 350px;margin:1%;float:left;}.member-profile .eyecatch{text-align:center;}.member-profile .name{text-align:center;font-weight:bold;padding:10px 0;margin:0;}.member-profile .description{font-size:0.8em;}.member-profile .button a{font-size:0.8em;}.member-profile .button a:after{content:' >';}
	</style>
	<div class="container">
		<div class="content__wrap">
      <?php do_action( 'ys_content_main_prepend' ); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class( [ 'singular-article' ] ); ?>>
        <?php ys_get_template_part( 'template-parts/page/header' ); ?>
        <div class="entry-content">
          <?php
          the_content();
          ys_get_template_part( 'template-parts/single/pagination' );
          ?>
          <?php $users =get_users( array('exclude' => 1, 'orderby'=>'ID','order'=>'ASC') );
          echo '<div class="members">';
          foreach($users as $user):
              $uid = $user->ID;
              $userData = get_userdata($uid);
              echo '<div class="member-profile">';
                echo '<figure class="eyecatch">';
                      echo get_avatar( $uid ,150 );
                  echo '</figure>';
                  echo '<div class="profiletxt">';
                      echo '<p class="name">'.$user->display_name.'</p>';
                      echo '<div class="description">'.$userData->user_description.'</div>';
                      // echo '<div class="button"><a href="'.get_bloginfo('url').'/?author='.$uid.'">'.$user->display_name.'の記事一覧</a></div>';
                echo '</div>';
              echo '</div>';
          endforeach;
          echo '</div>'; ?>
        </div>
        <?php ys_get_template_part( 'template-parts/page/footer' ); ?>
      </article>
      <?php do_action( 'ys_content_main_append' ); ?>
    </div>
  </div>
<?php get_footer(); ?>