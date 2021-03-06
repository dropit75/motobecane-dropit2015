
  <nav class="navbar navbar-custom navbar-fixed-top sb-slide" role="navigation">
<div class="container-fluid">
          <!-- Left Control -->
          <div class="sb-toggle-left navbar-left">
            <i class="offcanvas-btn fa fa-bars fa-2x"></i>
          </div><!-- /.sb-control-left -->
  
          <!-- Right Control -->
          <div class="sb-toggle-right navbar-right">
            

            <?php if ( is_user_logged_in() ) { ?>
              <div class="small account-name">
              <?php
                global $current_user;
                get_currentuserinfo();
                echo $current_user->user_firstname;
              ?>
              </div>
              <i class="offcanvas-btn fa fa-user fa-2x"></i>
            <?php } else { ?>
              <i class="offcanvas-btn fa fa-unlock-alt fa-2x"></i>
            <?php } ?>

          </div><!-- /.sb-control-right -->

<!--           <div class="navbar-right">
            <i class="offcanvas-btn fa fa-plus fa-2x"></i>
          </div> -->
            
          <div class="container">
              <div id="logo" class="navbar-header page-scroll">
      <!--             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                      <i class="fa fa-bars"></i>
                  </button> -->
                  <a href="/#page-top">
                      <img src="/wp-content/themes/dropit2015/assets/img/dropit_logo.png" alt="DROP iT">
                  </a>
              </div>
  
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
  
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
          <!-- /.container --></div>

</nav>

