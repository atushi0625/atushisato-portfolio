<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
     <?php get_header(); ?>
</head>

<?php get_template_part('includes/header'); ?>
<!-- works -->
<section class="works section" id="works">
     <div class="inner">
          <h2 class="title"><?php the_title(); ?></h2>
          <p class="title-caption">
               <?php the_field('キャプション'); ?>
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

                              <a href="<?php echo $site_link['url']; ?>" target="<?php echo $site_link['target']; ?>"><?php echo $site_link['title']; ?></a>
                              <a href="<?php the_permalink(); ?>"><?php the_title(); ?>をもっと詳しくみる</a>

                         </div>
                         <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
               <?php endif; ?>
          </div>
     </div>
</section>
<!-- /works -->


<div class="page-top" id="js-page-top">
     <span class="material-icons-outlined">expand_less</span>
</div>
<!-- footer -->
<?php get_template_part('includes/footer'); ?>
<?php get_footer(); ?>
<!-- /footer -->