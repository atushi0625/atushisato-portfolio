<?php wp_body_open(); ?>

<header class="header">
  <div class="header-inner">
    <?php
    //メニューIDを取得する
    $menu_name = 'global_nav';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);

    $menu_items = wp_get_nav_menu_items($menu->term_id);
    ?>
    <nav class="sp-global-menu" id="js-global-menu" area-hidden="true">
      <ul class="header-nav-list">
        <?php foreach ($menu_items as $item) : ?>
        <li class="header-nav-item"><a
            href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
        <?php endforeach; ?>
        <!-- <li class="header-nav-item"><a href="#works">WORKS</a></li>
                    <li class="header-nav-item"><a href="#skill">SKILL</a></li>
                    <li class="header-nav-item"><a href="#about">ABOUT</a></li>
                    <li class="header-nav-item"><a href="#service">SERVICE</a></li>
                    <li class="header-nav-item"><a href="#contact">CONTACT</a></li> -->
      </ul>
    </nav>
    <div class="sns-icons">
      <a class="sns-link" href="https://www.twitter.com/atushisato0625">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/icon/Twitter-icon.png"
          alt="twitter公式アイコン" />
      </a>
      <a class="sns-link" href="https://www.instagram.com/atushi213/">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/icon/Instagram-icon.png"
          alt="instagram公式アイコン" />
      </a>
      <a class="sns-link" href="https://www.facebook.com/atushi0213">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/icon/facebook-icon.png"
          alt="facebook公式アイコン" />
      </a>
    </div>
    <button type="button" id="js-hamburger" class="button hamburger" aria-controls="js-glabal-menu"
      aria-expanded="false" area-label="メニューを開閉する">
      <span class="hamburger__line"> </span>
    </button>
    <div class="drawer-background" id="js-drawer-background"></div>
  </div>
</header>
