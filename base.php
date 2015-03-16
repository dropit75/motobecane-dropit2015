<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->


  <?php

  // Header Section

    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  
  ?>


    <?php

      // If checkout registration is disabled and not logged in, the user cannot checkout
      if ( is_user_logged_in() ) {
        ?>
<!--         <div class="client">
          <h2>hello wai !!</h2>
        </div> -->
    <?php 
      }
    ?>



  <main id="sb-site" role="main" name="page-top">

      <?php 
        if (is_front_page()) {
          get_template_part('templates/content','home');
        } else {
          include roots_template_path();
        }
      ?>

  </main>
  <?php get_template_part('templates/sidebar-left'); ?>
  <?php get_template_part('templates/sidebar-right'); ?>
  <?php  if (roots_display_sidebar()) : ?>
    <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
      <?php include roots_sidebar_path(); ?>
    </aside>
  <?php endif; ?>

  <?php get_template_part('templates/footer'); ?>

</body>
</html>