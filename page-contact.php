<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
     <?php get_header(); ?>
</head>

<?php get_template_part('includes/header'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <!-- contact -->
          <section class="contact section" id="contact">
               <div class="inner">
                    <h2 class="title"><?php the_title(); ?></h2>
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
                         <?php the_content(); ?>
                    </div>
               </div>
          </section>
          <!-- /contact -->
          <div class="page-top" id="js-page-top">
               <span class="material-icons-outlined">expand_less</span>
          </div>

<?php endwhile;
endif; ?>

<!-- footer -->
<?php get_template_part('includes/footer'); ?>
<?php get_footer(); ?>
<!-- /footer -->