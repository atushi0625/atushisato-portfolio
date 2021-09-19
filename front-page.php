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


          <!-- <main class="content"> -->
          <!-- main-visual -->
          <div class="main-visual">
               <div class="main-visual-inner">
                    <img class="main-name-img" src="<?php echo get_template_directory_uri(); ?>/img/main-name.jpg" alt="ATUSHI SATO PORTFOLIO" />
               </div>
          </div>
          <!-- /main-visual -->

          <!-- </main> -->



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