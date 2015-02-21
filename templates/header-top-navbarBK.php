<!-- 
<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>  
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <div <?php _e('class="logobox"', 'roots'); ?>>
        <a class="navbar-brand hidden" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
        <a href="<?php echo home_url(); ?>/">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/space.png">
        </a>
      </div>
    </div>
      <nav class="collapse navbar-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
        <ul class="nav navbar-nav nav-drop">
          <li class="menu-phone"><a href="tel:+33953009294"><span class="glyphicon glyphicon-earphone"></span> 09.53.00.92.94</a></li>
          <li class="menu-lang menu-lang-fr">
              <a href="/"><img class="flag" src="/wp-content/plugins/sitepress-multilingual-cms/res/flags/fr.png" alt="Français"></a> 
          </li>
          <li class="menu-lang menu-lang-ja">
              <a href="/ja/"><img class="flag" src="/wp-content/plugins/sitepress-multilingual-cms/res/flags/ja.png" alt="日本語"></a>
          </li>
        </ul>
      </nav>
  </div>
</header>
 -->

<header class="banner" role="banner">
  <nav class="navbar navbar-custom navbar-fixed-top top-nav-collapse" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/#page-top">
                <img src="/wp-content/themes/dropit2015/assets/img/dropit_logo.png" alt="DROP iT">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
<!--             <ul class="nav navbar-nav">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#about">About</a>
                </li>
                <li class="page-scroll">
                    <a href="#download">Download</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Contact</a>
                </li>
            </ul> -->
            <ul class="nav navbar-nav nav-drop">
              <li class="menu-phone"><a href="tel:+33953009294"><span class="glyphicon glyphicon-earphone"></span> 09.53.00.92.94</a></li>
              <li class="menu-lang menu-lang-fr">
                  <a href="/fr/"><img class="flag" src="/wp-content/plugins/sitepress-multilingual-cms/res/flags/fr.png" alt="Français"></a> 
              </li>
              <li class="menu-lang menu-lang-ja">
                  <a href="/ja/"><img class="flag" src="/wp-content/plugins/sitepress-multilingual-cms/res/flags/ja.png" alt="日本語"></a>
              </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
</header>
