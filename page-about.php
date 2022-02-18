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
                                   <?php echo the_content(); ?>
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