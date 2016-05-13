<footer id="footer" class="content-info container-fluid text-center  padding-4">
  <div class="container">
		<img src="https://unsplash.it/300/100" alt="" width="300" height="100">
		
		<ul class="list-inline">
			<li>&copy; Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?></li>
			<li><a href="">Terms</a></li>
			<li><a href="">Privacy policy</a></li>
			<li><a href="">Credit Application</a></li>
		</ul>
	    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>