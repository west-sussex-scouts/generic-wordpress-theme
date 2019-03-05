<?php /* Template Name: Page Template */ ?>

<?php require 'template-parts/header/header.php';?>
<body>
<div id="page_container">
  <div id="page_content">
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
<?php get_footer(); ?>
