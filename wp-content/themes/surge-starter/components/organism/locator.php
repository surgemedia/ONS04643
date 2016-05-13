<section class="<?php echo $vars['class'] ?>">
	<?php
				/*=============================================
				=    Card Header (Class,Subtitle,Title,Content)
				= @components
					+ molecule/card-header
				=============================================*/
				get_component([ 'template' => 'molecule/card',
												'remove_tags' =>  ['img'],
												'vars' => [
															"class" => 'card container padding-4 text-center',
															"subtitle" => "Branch Locator",
															"title" => "Find Us",
															"content" => "P: 13 40 40     E: website@onsite.com.au     F: 13 40 40  <br/>
															 A: 5/28 Foveaux Street, Surry Hills NSW 2010 <br/>"
															]
												 ]);
	?>
	
	<?php
				/*=============================================
				=    Map (Class,Description)
				= @components
					+ molecule/map
				=============================================*/
				get_component([ 'template' => 'molecule/map',
												'vars' => [
															"class" => 'map text-center',
															"description" => "Find our rental and service locations throughout Australia.",
															]
												 ]);
	?>

</section>