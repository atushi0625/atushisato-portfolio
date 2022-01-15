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
                    <div class="service-list-box">
                         <h2 class="service-title">Webサイト制作</h2>
                         <ul class="service-lists">
                              <li class="service-list">
                                   <div class="service-list_inner">
                                        <p class="service-list-name">コーディング</p>
                                        <p class="service-list-text">HTML&CSSで適切なコーディングを行います。<br>
                                             XDやPhotoshopで作成したデザインカンプからのコーディングが可能です。<br>
                                             軽度なコードの修正などにも対応しています。
                                        </p>
                                   </div>
                              </li>
                              <li class="service-list">
                                   <div class="service-list_inner">
                                        <p class="service-list-name">WordPress</p>
                                        <p class="service-list-text">WordPressでのサイト構築やテーマのカスタマイズ、<br>
                                             静的なサイトのWordPress化も行います。<br>
                                        </p>
                                   </div>
                              </li>
                              <li class="service-list">
                                   <div class="service-list_inner">
                                        <p class="service-list-name">アニメーション実装</p>
                                        <p class="service-list-text"> JavaScriptとjQueryを用いて動きのあるサイトに仕上げることができます。
                                             Pluginを用いての実装も可能です。
                                             <br>
                                        </p>
                                   </div>
                              </li>
                         </ul>
                    </div>
                    <div class="service-list-box">
                         <h2 class="service-title">ECサイト制作</h2>
                         <ul class="service-lists">
                              <li class="service-list">
                                   <div class="service-list_inner">
                                        <p class="service-list-name">Shopify</p>
                                        <p class="service-list-text">Shopifyを用いてECサイトを構築します。<br>
                                             Shopifyで既存で用意されているテーマを使って制作します。<br>
                                             基本NoCodeでの制作になりますが、HTML&CSSでカスタマイズを加えることができます。
                                        </p>
                                   </div>
                              </li>
                              <li class="service-list">
                                   <div class="service-list_inner">
                                        <p class="service-list-name">Liquidコードの修正</p>
                                        <p class="service-list-text">Shopifyで使用されているLiquidの知識があるので修正やカスタマイズをすることができます。<br>
                                             オリジナルのsectionやblocksなども作成できます。<br>
                                             ※フルスクラッチ開発はできかねます。
                                        </p>
                                   </div>
                              </li>
                              <!-- <li class="service-list">
                                   <div class="service-list_inner">
                                        <p class="service-list-name">アニメーション実装</p>
                                        <p class="service-list-text"> JavaScriptとjQueryを用いて動きのあるサイトに仕上げることができます。
                                             Pluginを用いての実装も可能です。
                                             <br>
                                        </p>
                                   </div>
                              </li> -->
                         </ul>
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