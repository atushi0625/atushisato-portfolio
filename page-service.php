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
                    <div class="service-list-box" data-aos="flip-left">
                         <h2 class="service-title">Webサイト制作</h2>
                         <ul class="service-lists">
                              <li class="service-list">
                                   <div class="service-list-inner">
                                        <p class="service-list-name">コーディング</p>
                                        <p class="service-list-text">HTML&CSSで適切なコーディングを行います。<br>
                                             XDやPhotoshopで作成したデザインカンプからのコーディングが可能です。<br>
                                             軽度なコードの修正などにも対応しています。
                                        </p>
                                   </div>
                              </li>
                              <li class="service-list">
                                   <div class="service-list-inner">
                                        <p class="service-list-name">WordPress</p>
                                        <p class="service-list-text">WordPressでのサイト構築やテーマのカスタマイズ、<br>
                                             静的なサイトのWordPress化も行います。<br>
                                        </p>
                                   </div>
                              </li>
                              <li class="service-list">
                                   <div class="service-list-inner">
                                        <p class="service-list-name">アニメーション実装</p>
                                        <p class="service-list-text"> JavaScriptとjQueryを用いて動きのあるサイトに仕上げることができます。
                                             Pluginを用いての実装も可能です。
                                             <br>
                                        </p>
                                   </div>
                              </li>
                         </ul>
                    </div>
                    <div class="service-list-box" data-aos="zoom-in-left" data-aos-delay="400">
                         <h2 class="service-title">ECサイト制作(Shopify)</h2>
                         <ul class="service-lists">
                              <li class="service-list">
                                   <div class="service-list-inner">
                                        <p class="service-list-name">ECサイト構築</p>
                                        <p class="service-list-text">Shopifyを用いてECサイトを構築します。<br>
                                             Shopifyで既存で用意されているテーマを使って制作します。<br>
                                             基本NoCodeでの制作になります。
                                        </p>
                                   </div>
                              </li>
                              <li class="service-list">
                                   <div class="service-list-inner">
                                        <p class="service-list-name">テーマのカスタマイズ</p>
                                        <p class="service-list-text">Shopifyの既存テーマを用いてカスタマイズします。<br>
                                             HTML&CSSでカスタマイズを加えたり、Liquidコードを編集して一工夫加えてオリジナルのECサイトを制作します。<br>
                                        </p>
                                   </div>
                              </li>
                              <li class="service-list">
                                   <div class="service-list-inner">
                                        <p class="service-list-name">Liquidコードの修正</p>
                                        <p class="service-list-text">Shopifyで使用されているLiquidの知識があるので修正やカスタマイズをすることができます。<br>
                                             オリジナルのsectionやblocksなども作成できます。<br>
                                             ※フルスクラッチ開発はできかねます。
                                        </p>
                                   </div>
                              </li>
                         </ul>
                    </div>
                    <div class="service-list-box" data-aos="fade-up" data-aos-delay="500">
                         <h2 class="service-title">料金表</h2>
                         <div class="service-price">
                              <dl class="price-list">
                                   <dt>
                                        LP制作(1ページ)
                                   </dt>
                                   <dd>
                                        20,000円〜

                                   </dd>
                              </dl>
                              <dl class="price-list">
                                   <dt>
                                        コーディング(1ページ)
                                   </dt>
                                   <dd>
                                        10,000円〜

                                   </dd>
                              </dl>
                              <dl class="price-list">
                                   <dt>
                                        コーディング(下層ページ/1ページ)
                                   </dt>
                                   <dd>
                                        3,000円〜
                                   </dd>
                              </dl>
                              <dl class="price-list">
                                   <dt>
                                        WordPressサイトコーディング(10ページ)
                                   </dt>
                                   <dd>
                                        100,000円〜

                                   </dd>
                              </dl>
                              <dl class="price-list">
                                   <dt>
                                        サイトへのWordPress入れ込み
                                   </dt>
                                   <dd>
                                        50,000円〜
                                   </dd>
                              </dl>
                              <dl class="price-list">
                                   <dt>
                                        サイトの修正(1箇所)
                                   </dt>
                                   <dd>
                                        1,000円〜
                                   </dd>
                              </dl>
                              <dl class="price-list">
                                   <dt>
                                        Shopify/ECサイト制作
                                   </dt>
                                   <dd>
                                        100,000円〜

                                   </dd>
                              </dl>
                              <dl class="price-list">
                                   <dt>
                                        Shopify/テーマのカスタマイズ
                                   </dt>
                                   <dd>
                                        20,000円〜

                                   </dd>
                              </dl>
                              <dl class="price-list">
                                   <dt>
                                        Shopify/Liquidコード修正
                                   </dt>
                                   <dd>
                                        5,000円〜
                                   </dd>
                              </dl>
                              <p class="price-list-text">※詳しい料金詳細、お見積もりは別途ご相談させていただきます。<br>
                                   まずはお問い合わせくださいませ。</p>
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