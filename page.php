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
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <main class="content">
                         <!-- works -->
                         <section class="works section" id="works">
                              <div class="inner">
                                   <h2 class="title"><?php the_title(); ?></h2>
                                   <p class="title-caption">
                                        主に個人でコーディングしたWeb制作の記録です<br />
                                        練習用架空サイトやデザインカンプからのコーディングも含みます
                                   </p>
                                   <div class="works-list">
                                        <div class="works-item">
                                             <a class="works-img" href="<?php echo get_template_directory_uri(); ?>/img/works-1.png">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/img/works-1.png" alt="XD デザインカンプからコーディング/HTML&CSS/jQuery/レスポンシブ対応" />
                                             </a>
                                             <p class="works-name">ユアコーディング</p>
                                             <a href="https://atushi-your-coding.netlify.app/">Site Link</a>
                                        </div>
                                        <div class="works-item">
                                             <div class="works-img" href="<?php echo get_template_directory_uri(); ?>/img/works-2.png">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/img/works-2.png" alt="Figma デザインからコーディング/HTML&CSS/jQuery/レスポンシブ対応" />
                                             </div>
                                             <p class="works-name">オリジナル新卒採用ページ</p>
                                             <a href="https://atushi-sample-site.netlify.app/">Site Link</a>
                                        </div>
                                        <div class="works-item">
                                             <div class="works-img" href="<?php echo get_template_directory_uri(); ?>/img/works-3.png">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/img/works-3.png" alt="Figma デザインからコーディング/HTML＆CSS/jQuery/レスポンシブ対応/WordPress" />
                                             </div>
                                             <p class="works-name">Atushi Sato Portfolio</p>
                                             <a href="">Site Link</a>
                                        </div>
                                   </div>
                              </div>
                         </section>
                         <!-- /works -->

                         <!-- skill -->
                         <section class="skill section" id="skill">
                              <div class="inner">
                                   <h2 class="title"><?php the_title(); ?></h2>
                                   <!-- <h2 class="title">SKILL</h2> -->
                                   <p class="title-caption">
                                        私のスキル一覧です。技術を磨くために日々の勉強と自己投資は怠りません
                                   </p>
                                   <div class="skill-list" data-aos="fade-up">
                                        <div class="skill-item">
                                             <p class="skill-img flex">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/img/html.svg" alt="HTMLアイコン" />
                                                  <img src="<?php echo get_template_directory_uri(); ?>/img/css.svg" alt="CSSアイコン" />
                                             </p>
                                             <div class="skill-body">
                                                  <h3 class="skill-name">HTML5/CSS3</h3>
                                                  <p class="skill-text">
                                                       静的なサイトのコーディングが可能です。わからないことは基本Googleで検索して解決できます。使用エディタはVScodeです。
                                                  </p>
                                             </div>
                                        </div>
                                        <div class="skill-item">
                                             <p class="skill-img">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/img/wp.svg" alt="WordPressアイコン" />
                                             </p>
                                             <div class="skill-body">
                                                  <h3 class="skill-name">WordPress</h3>
                                                  <p class="skill-text">
                                                       基本的な使い方は自身のBlog制作時に学びました。HTMLからWordPressに移行するやり方を現在学習中であります。
                                                  </p>
                                             </div>
                                        </div>
                                        <div class="skill-item">
                                             <p class="skill-img">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/img/js.svg" alt="JavaScriptアイコン" />
                                             </p>
                                             <div class="skill-body">
                                                  <h3 class="skill-name">JavaScript</h3>
                                                  <p class="skill-text">
                                                       複雑なコードを一から考えて実装することはできませんが、jQueryを用いて動的なサイトにすることができます。基礎的な部分は理解しています。
                                                  </p>
                                             </div>
                                        </div>
                                        <div class="skill-item">
                                             <p class="skill-img">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/img/sass.svg" alt="Sassアイコン" />
                                             </p>
                                             <div class="skill-body">
                                                  <h3 class="skill-name">Sass</h3>
                                                  <p class="skill-text">
                                                       主にファイルを分割してインポート、ネスト化、Mixinを使用してコーディングします。コンパイルに関してはPreprosというGUIツールを使用しています。
                                                  </p>
                                             </div>
                                        </div>
                                        <div class="skill-item">
                                             <p class="skill-img">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/img/figma.svg" alt="Figmaアイコン" />
                                             </p>
                                             <div class="skill-body">
                                                  <h3 class="skill-name">Figma</h3>
                                                  <p class="skill-text">
                                                       全ての機能は使えませんが、pluginなどを用いての制作ができます。ポートフォリオはFigmaでデザインしました。
                                                  </p>
                                             </div>
                                        </div>
                                        <div class="skill-item">
                                             <p class="skill-img">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/img/vue.svg" alt="Vue.jsアイコン" />
                                             </p>
                                             <div class="skill-body">
                                                  <h3 class="skill-name">Vue.js</h3>
                                                  <p class="skill-text">
                                                       SPA開発の勉強をしていたときに使用していました。基礎的な部分は理解しています。
                                                  </p>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </section>
                         <!-- /skill -->

                         <!-- about -->
                         <section class="about section" id="about">
                              <div class="inner">
                                   <h2 class="title"><?php the_title(); ?></h2>
                                   <div class="profile">
                                        <div class="profile-img">
                                             <img data-aos="zoom-in-right" src="<?php echo get_template_directory_uri(); ?>/img/profile.jpeg" alt="プロフィール写真" />
                                        </div>

                                        <div class="profile-body" data-aos="zoom-in-left" data-aos-delay="300">
                                             <div class="profile-text">
                                                  <p>
                                                       Atushi Sato <br />
                                                       1989年生まれ<br />
                                                       秋田県出身・東京都在住<br />
                                                       趣味はキックボクシング　
                                                  </p>
                                                  <p>こんにちは。Atushiと申します。</p>
                                                  <p>
                                                       地元の高校を卒業後、就職のため上京。<br />
                                                       工場勤務から始まり、営業、接客業と幅広く社会人系経験を積んで現在に至ります。
                                                  </p>
                                                  <p>
                                                       2020年７月に勉強をスタート。<br />
                                                       仕事と両立をしながら毎日コツコツと勉強を積み重ねてきました。
                                                  </p>
                                                  <p>
                                                       座右の銘は「好きこそ物の上手なれ」<br />
                                                       好きなことを仕事にして順風満帆な人生を送りたい。
                                                  </p>
                                                  <p>
                                                       依頼していただいたお客様とのご縁を大切にして満足のいくWebサイト制作に努めます。<br />
                                                       制作するWebサイトはお客様が納得がいくまで完璧に仕上げます。<br />
                                                       社会人経験で培ったことを生かして<br />
                                                       納期厳守、素早いレスポンス、現在の進捗具合の報告<br />
                                                       円滑なコミュニケーションを心がけます！
                                                  </p>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </section>
                         <!-- /about -->

                         <!-- service -->
                         <section class="service section" id="service">
                              <div class="inner">
                                   <h2 class="title"><?php the_title(); ?></h2>
                                   <!-- <h2 class="title">SERVICE</h2> -->
                                   <h2 class="service-title-top">Webサイト制作</h2>
                                   <div class="service-container">
                                        <div class="service-img" data-aos="flip-left">
                                             <img src="<?php echo get_template_directory_uri(); ?>/img/service.jpg" alt="Webサイト制作をいたします" />
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
                         <!-- /service -->

                         <!-- contact -->
                         <section class="contact section" id="contact">
                              <div class="inner">
                                   <h2 class="title"><?php the_title(); ?></h2>
                                   <!-- <h2 class="title">CONTACT</h2> -->
                                   <div class="contact-wrapper" data-aos="fade-up">
                                        <p class="contact-title">
                                             お問い合わせは、下記のフォームからお願いします。<br />
                                             SNSでもお受付してます。
                                        </p>
                                        <div class="contact-list">
                                             <a class="contact-item" href="https://www.twitter.com/atushisato0625" target="_blank" rel="noopener">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/img/Twitter-icon.png" alt="twitter公式アイコン" />
                                             </a>
                                             <a class="contact-item" href="https://www.instagram.com/atushi213/" target="_blank" rel="noopener">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/img/Instagram-icon.png" alt="instagram公式アイコン" />
                                             </a>
                                             <a class="contact-item" href="https://www.facebook.com/atushi0213" target="_blank" rel="noopener">
                                                  <img src="<?php echo get_template_directory_uri(); ?>/img/facebook-icon.png" alt="facebook公式アイコン" />
                                             </a>
                                        </div>
                                        <form id="form">
                                             <div class="contact-text">
                                                  <input type="text" id="name" placeholder="お名前" />
                                             </div>
                                             <div class="contact-text">
                                                  <input type="email" id="email" placeholder="メールアドレス" />
                                             </div>
                                             <div class="contact-text">
                                                  <textarea placeholder="お問い合わせ内容" id="message"></textarea>
                                             </div>
                                             <div class="center">
                                                  <input type="submit" value="送信する" />
                                             </div>
                                        </form>
                                   </div>
                              </div>
                         </section>
                         <!-- /contact -->
                         <div class="page-top" id="js-page-top">
                              <span class="material-icons-outlined">expand_less</span>
                         </div>
                    </main>

          <?php endwhile;
          endif; ?>

          <!-- footer -->
          <?php get_template_part('includes/footer'); ?>
          <?php get_footer(); ?>
          <!-- /footer -->
     </div>

</body>

</html>