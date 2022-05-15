<?php
add_action('init', function () {
     add_theme_support('title-tag');
     add_theme_support('post-thumbnails');
     // メニューをサポート
     register_nav_menus([
          'global_nav' => 'グローバルナビゲーション'
     ]);
     register_post_type('works-item', [
          'label' => "制作実績",
          'menu_icon'     => 'dashicons-edit', // メニューで使用するアイコン
          'public' => true,
          'hierarchical' => true,
          'menu_position' => 5,
          'supports' => ['thumbnails', 'title', 'editor'],
          'has_archive' => true,
          'show_in_rest' => true,
     ]);
     register_post_type('skills', [
          'label' => "スキル一覧",
          'menu_icon'     => 'dashicons-admin-generic', // メニューで使用するアイコン
          'public' => true,
          'hierarchical' => true,
          'menu_position' => 5,
          'supports' => ['thumbnails', 'title', 'editor'],
          'has_archive' => true,
          'show_in_rest' => true,
     ]);
});

/*アイキャッチ画像がなければ、標準画像を取得する*/
function get_eyecatch_with_default()
{
     if (has_post_thumbnail()) :
          $id = get_post_thumbnail_id();
          $img = wp_get_attachment_image_src($id, 'large');
     else :
          $img = array(get_template_directory_uri() . '/img/main-bg-img.jpg');
     endif;

     return $img;
};


define('WP_SCSS_ALWAYS_RECOMPILE', true);
