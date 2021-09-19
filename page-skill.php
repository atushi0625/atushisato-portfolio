<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
     <?php get_header(); ?>
</head>

<?php get_template_part('includes/header'); ?>
<!-- skill -->
<section class="skill section" id="skill">
     <div class="inner">
          <h2 class="title"><?php the_title(); ?></h2>
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
<div class="page-top" id="js-page-top">
     <span class="material-icons-outlined">expand_less</span>
</div>

<!-- footer -->
<?php get_template_part('includes/footer'); ?>
<?php get_footer(); ?>
<!-- /footer -->