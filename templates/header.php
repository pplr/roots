<!-- <header> -->
<!--   <div class="container"> -->
<!--     Comité Régional d’Étude pour la Protection et l’Aménagement de la Nature en Basse-Normandie -->
<!--   </div> -->
<!-- </header> -->


<header class="banner container" role="banner">
  <div class="row">
    <div class="col-lg-10">
      <nav class="navbar navbar-secondary">
	<form class="navbar-form navbar-left" role="search">
	  <div class="input-group">
	    <input type="text" class="form-control">
	    <div class="input-group-btn">
	      <button type="submit" class="btn btn-default">Search</button>
	    </div>
	  </div>
	</form>
        <?php
          if (has_nav_menu(secondary_navigation')) :
            wp_nav_menu(array('theme_location' => 'secondary_navigation', 'menu_class' => 'nav nav-pills'));
          endif;
        ?>
      </nav>
    </div>
    <div class="col-lg-2">
      LOGO FNE
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
      <nav class="nav-main" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
          endif;
        ?>
	<ul class="nav navbar-nav navbar-right">
          <li><a href="#"><i class="fa fa-facebook-square
          fa-2x"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus-square
          fa-2x"></i></a></li>
          <li><a href="#"><i class="fa fa-rss-square
          fa-2x"></i></a></li>
	</ul>
      </nav>
    </div>
  </div>
</header>
