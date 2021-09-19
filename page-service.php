<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
     <?php get_header(); ?>
</head>

<?php get_template_part('includes/header'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <!-- service -->
          <section class="service section" id="service">
               <div class="inner">
                    <h2 class="title"><?php the_title(); ?></h2>


                    <h2 class="service-title-top">Webサイト制作</h2>
                    <div class="service-container">
                         <div class="service-img" data-aos="flip-left">
                              <?php $service_img = get_field('サービス画像');
                              $url = $service_img['url'];
                              $alt = $service_img['alt']; ?>


                              <img src="<?php echo $url ?>" alt="<?php echo $alt ?>">
                         </div>
                         <div class="service-list" data-aos="zoom-in-left" data-aos-delay="400">
                              <p>デザインに沿ってHTML＆CSSでコーディングしていきます</p>
                              <p>JavaScriptとjQueryを用いて動きのあるサイトに仕上げます</p>
                              <p>どのデバイスにでも閲覧できるようレスポンシブ対応にします</p>
                              <p>WordPressでWebサイトを構築いたします</p>
                              <p>簡易的なお問い合わせフォームも設置いたします</p>
                         </div>
                    </div>
                    <div class="service-recommend" data-aos="fade-up" data-aos-delay="500">
                         <div class="service-text-list">
                              <h2 class="service-title">
                                   こんな方でもお気軽にお問い合わせください！
                              </h2>
                              <p class="service-text">
                                   ホームページ作成にあまり費用をかけたくない方
                              </p>
                              <p class="service-text">インターネットに関して疎い方</p>
                              <p class="service-text">
                                   デザインはできるけどコーディングが不安な方
                              </p>
                         </div>
                    </div>
               </div>
          </section>
<?php endwhile;
endif; ?>
<!-- /service -->
<div class="page-top" id="js-page-top">
     <span class="material-icons-outlined">expand_less</span>
</div>

<!-- footer -->
<?php get_template_part('includes/footer'); ?>
<?php get_footer(); ?>
<!-- /footer -->