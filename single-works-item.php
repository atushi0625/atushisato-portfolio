<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
     <?php get_header(); ?>
</head>

<?php get_template_part('includes/header'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="works-item-wrap">
               <h2 class="works-item-title">
                    <?php the_title(); ?>
               </h2>
               <?php
               $works_img = get_field('サムネイル');
               $url = $works_img['url']; //画像のURLを変数$urlに代入
               $alt = $works_img['alt'];
               ?>
               <div class="works-item-img">
                    <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
               </div>
               <div class="text">
                    <div class="info">
                         <span class="industry">業種</span>
                         <p class="works-item-text">
                              <?php the_field('業種'); ?></p>
                         <span class="industry">クライアント</span>
                         <p class="works-item-text">
                              <?php the_field('クライアント'); ?>
                         </p>
                         <span class="industry">成果</span>
                         <p class="works-item-text"> <?php the_field('成果'); ?>
                         </p>
                    </div>
               </div>
               <!-- ページネーション -->
               <?php // 現在の投稿に隣接している前後の投稿を取得する
               $prev_post = get_previous_post(); // 前の投稿を取得
               $next_post = get_next_post(); // 次の投稿を取得
               if ($prev_post || $next_post) : // どちらか一方があれば表示
               ?>
                    <nav class="page-nav">
                         <div class="next-wrap">
                              <?php if ($next_post) : // 次の投稿があれば表示 
                              ?>
                                   <a href="<?php echo get_permalink($next_post->ID); ?>" class="page-link">
                                        <span class="prev-icon">prev</span><br />
                                   </a>
                              <?php endif; ?>
                         </div>
                         <!-- ------------------------ -->
                         <div class="prev-wrap">
                              <?php if ($prev_post) : // 前の投稿があれば表示 
                              ?>
                                   <a href="<?php echo get_permalink($prev_post->ID); ?>" class="page-link">
                                        <span class="next-icon">next</span><br />
                                   </a>
                              <?php endif; ?>
                         </div>
                    </nav>
               <?php endif; ?>
               <!-- ページネーションここまで -->
          </div>
<?php endwhile;
endif; ?>

<div class="page-top" id="js-page-top">
     <span class="material-icons-outlined">expand_less</span>
</div>

<!-- footer -->
<?php get_template_part('includes/footer'); ?>
<?php get_footer(); ?>
<!-- /footer -->