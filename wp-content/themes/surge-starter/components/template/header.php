<header class="banner" data-spy="affix" data-offset-top="0">
  <div class="container-fluid" >
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img height="54px"src="http://localhost/ONS04643/wp-content/uploads/2016/05/ONSITE-HIRES.jpg" alt="Onsite Rental Group"></a>
    </div>
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <nav class="nav-primary col-md-11"  >
      <?php
      if (has_nav_menu('primary_navigation')) :
         wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav ']);
      endif;
      ?>
    </nav>
     <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</header>
