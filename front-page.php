<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
     <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>

     <div class="wrapper">
          <!-- header -->
          <?php get_template_part('includes/header'); ?>
          <!-- /header -->


          <!-- main-visual -->
          <div class="main-visual">
               <div class="main-visual-inner">
                    <img class="main-name-img" src="<?php echo get_template_directory_uri(); ?>/img/main-name.jpg" alt="ATUSHI SATO PORTFOLIO" />
               </div>
          </div>
          <!-- /main-visual -->


          <!-- works -->
          <section class="works section" id="works">
               <div class="inner">
                    <h2 class="title">works</h2>
                    <p class="title-caption">
                         主に個人でコーディングしたWeb制作の記録です<br>
                         練習用架空サイトやデザインカンプからのコーディングも含みます
                    </p>
                    <div class="works-list">
                         <?php
                         $args = array(
                              'post_type' => 'works-item',
                              'posts_per_page' => 6,
                         );
                         $the_query = new WP_Query($args); ?>
                         <?php if ($the_query->have_posts()) :
                              while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                   <?php
                                   $works_img = get_field('サムネイル');
                                   $url = $works_img['url']; //画像のURLを変数$urlに代入
                                   $alt = $works_img['alt'];
                                   ?>
                                   <div class="works-item">
                                        <a class="works-img" href="<?php echo $url; ?>">
                                             <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
                                        </a>
                                        <p class="works-name"><?php the_title(); ?></p>
                                        <?php $site_link = get_field('リンク'); ?>

                                        <a class="works-item-link" href="<?php echo $site_link['url']; ?>" target="<?php echo $site_link['target']; ?>"><?php echo $site_link['title']; ?></a>
                                        <a class="works-item-link" href=" <?php the_permalink(); ?>"><?php the_title(); ?>をもっと詳しくみる</a>

                                   </div>
                                   <?php wp_reset_postdata(); ?>
                              <?php endwhile; ?>
                         <?php endif; ?>
                    </div>
               </div>
          </section>
          <!-- /works -->


          <!-- about -->
          <section class="about section" id="about">
               <div class="inner">
                    <h2 class="title">about</h2>
                    <p class="title-caption">
                         簡単に自己紹介させていただきます
                    </p>
                    <div class="profile">
                         <div class="profile-img">
                              <img data-aos="zoom-in-right" src="<?php echo get_template_directory_uri(); ?>/img/profile.jpeg" alt="プロフィール写真" />
                         </div>
                         <div class="profile-body" data-aos="zoom-in-left" data-aos-delay="300">
                              <div class="profile-text">
                                   <p>
                                        佐藤　敦 (サトウ　アツシ) <br>
                                        1989年生まれ<br>
                                        秋田県 横手市出身・東京都在住<br>
                                        趣味はキックボクシング
                                   </p>
                                   <p>こんにちは。佐藤　敦と申します。<br>
                                        プロフィールをご覧いただきましてありがとうございます。
                                   </p>
                                   <p>
                                        地元の高校を卒業後、就職のため上京。<br>
                                        工場勤務から始まり、営業、接客業と幅広く社会人系経験を積んできました。
                                   </p>
                                   <p>
                                        2021年4月に勉強をスタート。<br>
                                        仕事と両立をしながら毎日コツコツと勉強を積み重ねてきました。
                                   </p>
                                   <p>
                                        座右の銘は「好きこそ物の上手なれ」<br>
                                        好きなことを仕事にして順風満帆な人生を送りたい。<br>
                                        現在は会社員をしながら、Web制作の勉強を毎日続けて、独立に向けて活動中です。
                                   </p>
                                   <p>
                                        依頼していただいたお客様とのご縁を大切にして満足のいくWebサイト制作に努めます。<br>
                                        制作するWebサイトはお客様が納得がいくまで完璧に仕上げます。<br>
                                        社会人経験で培ったことを生かして<br>
                                        納期厳守、素早いレスポンス、現在の進捗具合の報告<br>
                                        円滑なコミュニケーションを心がけます！
                                   </p>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
          <!-- /about -->

          <!-- skill -->
          <section class="skill section" id="skill">
               <div class="inner">
                    <h2 class="title">skill</h2>
                    <p class="title-caption">
                         私のスキル一覧です。技術を磨くために日々の勉強と自己投資は怠りません
                    </p>
                    <div class="skill-list" data-aos="fade-up">
                         <?php
                         $args = array(
                              'post_type' => 'skills',
                              'posts_per_page' => 8,
                         );
                         $the_query = new WP_Query($args); ?>
                         <?php if ($the_query->have_posts()) :
                              while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                   <div class="skill-item">
                                        <p class="skill-img flex">
                                             <?php
                                             $skills_img = get_field('スキル画像');
                                             $url = $skills_img['url']; //画像のURLを変数$urlに代入
                                             $alt = $skills_img['alt'];
                                             ?>
                                             <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
                                        </p>
                                        <div class="skill-body">
                                             <h3 class="skill-name"><?php the_title(); ?></h3>
                                             <p class="skill-text">
                                                  <?php the_field('スキルテキスト'); ?>
                                             </p>
                                        </div>
                                   </div>
                                   <?php wp_reset_postdata(); ?>
                              <?php endwhile; ?>
                         <?php endif; ?>
                    </div>
               </div>
          </section>
          <!-- /skill -->


          <!-- service -->
          <section class="service section" id="service">
               <div class="inner">
                    <h2 class="title">service</h2>
                    <p class="title-caption">
                         各種サービスと料金表になります
                    </p>
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
          <!-- /service -->

          <!-- contact -->
          <section class="contact section" id="contact">
               <div class="inner">
                    <h2 class="title">contact</h2>
                    <p class="title-caption">
                         お気軽にお問合せくださいませ
                    </p>
                    <div class="contact-wrapper" data-aos="fade-up">
                         <p class="contact-title">
                              お問い合わせは、下記のフォームからお願いします。<br />
                              SNSでもお受付してます。
                         </p>
                         <div class="contact-list">
                              <a class="sns-link" href="https://www.twitter.com/atushisato0625" target="_blank" rel="noopener">
                                   <img src="<?php echo get_template_directory_uri(); ?>/img/Twitter-icon.png" alt="twitter公式アイコン" />
                              </a>
                              <a class="sns-link" href="https://www.instagram.com/atushi213/" target="_blank" rel="noopener">
                                   <img src="<?php echo get_template_directory_uri(); ?>/img/Instagram-icon.png" alt="instagram公式アイコン" />
                              </a>
                              <a class="sns-link" href="https://www.facebook.com/atushi0213" target="_blank" rel="noopener">
                                   <img src="<?php echo get_template_directory_uri(); ?>/img/facebook-icon.png" alt="facebook公式アイコン" />
                              </a>
                         </div>
                         <?php echo do_shortcode('[contact-form-7 id="49" title="CONTACT"]'); ?>
                    </div>
               </div>
          </section>
          <!-- /contact -->



          <div class="page-top" id="js-page-top">
               <span class="material-icons-outlined">expand_less</span>
          </div>

          <!-- footer -->
          <?php get_template_part('includes/footer'); ?>
          <?php get_footer(); ?>
          <!-- /footer -->
     </div>

</body>

</html>