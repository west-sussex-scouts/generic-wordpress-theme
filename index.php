<html lang="en">
  <?php /* Template Name: Front Page */ ?>
  <?php require 'template-parts/head/head.php';?>
  <body>
    <?php require 'template-parts/header/header.php';?>
    <div class="content container pt-xl-4 pt-lg-4 pt-md-2 pt-sm-2 pt-1">
      <div class="row">
        <div class="col-md">
          <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content/content', 'single' );
            endwhile;
            else:
              get_template_part( 'template-parts/content/content', 'single' );
            endif;
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md">
          <?php get_footer(); ?>
        </div>
      </div>
    </div>
  </body>
</html>
