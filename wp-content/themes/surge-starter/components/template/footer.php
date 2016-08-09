<footer id="footer" class="content-info container-fluid text-center  padding-4">
  <div class="container">
		<img src="<?php echo get_field("footer_image","option") ?>" alt="" width="300" height="100">
		
		<ul class="list-inline">
			<li>&copy; Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?></li>
			<li><a href="">Terms</a></li>
			<li><a href="">Privacy policy</a></li>
			<li><a href="">Credit Application</a></li>
		</ul>
	    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>
<?php
/*      if (has_nav_menu('side_navigation')) :
         wp_nav_menu(['theme_location' => 'side_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav side-nav ']);
      endif;
*/      ?>
<?php 				
							get_component([ 'template' => 'molecule/icon-nav',
											'vars' => [
														'repeater' =>[
																["icon" => 'icon-mining', "link" => '#',"name"=>'Mining'],
																["icon" => 'icon-industrial', "link" => '#',"name"=>'industrial'],
																["icon" => 'icon-government', "link" => '#',"name"=>'government'],
																["icon" => 'icon-infrastructure', "link" => '#',"name"=>'infrastructure'],
																["icon" => 'icon-events', "link" => '#',"name"=>'events'],
															]
														]
											 ]);
 ?>