<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
     <?php get_header(); ?>
</head>

<?php get_template_part('includes/header'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
<div class="page-top" id="js-page-top">
     <span class="material-icons-outlined">expand_less</span>
</div>
<?php endwhile;
     endif; ?>

<!-- footer -->
<?php get_template_part('includes/footer'); ?>
<?php get_footer(); ?>
<!-- /footer -->