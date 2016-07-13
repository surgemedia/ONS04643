<section class="gears container-fluid  text-center border-bottom padding-6 <?php echo $vars['class'] ?>">
	<?php
			/*=============================================
			=            	Card (Class,Title,Content)
			= @components
				+ molecule/card
			=============================================*/
			get_component([ 'template' => 'molecule/card',
							'remove_tags' =>  ['img','h6'],
							'vars' => [
										"class" => 'container-fluid card text-center padding-2 title',
										"title" => 	$vars['title'],
										"content" => $vars['content']
										]
							 ]);
	?>
	
	<div class="row">
	<?php 

	 ?>
		<?php 
		$gearSize = sizeof($vars['category']);
		for ($i=0; $i < $gearSize; $i++) {
				$vars['termObj'] = get_term($vars['category'][$i]);
			
			 //debug($vars['termObj']);
			 if($vars['termObj']->parent > 0){
			 	//child
			 		$vars['childern'] = false;
			 		$vars['url'] = get_term_link($vars['termObj']->parent).'#'.$vars['termObj']->slug;
			 } else {
			 	$vars['url'] = get_term_link($vars['termObj']->term_id);
			 	$vars['childern'] = get_term_children( $vars['termObj']->term_id, $vars['termObj']->taxonomy);;
			 }
			
			// $vars['category'][$i]['parent'] = 0;
			// $vars['category'][$i]['number'] = 10;
			// $vars['category'][$i]['hide_empty'] = false;
			// $vars['category'][$i]['taxonomy'] = $vars['termObj']->taxonomy;


				/*=============================================
				=      	Card Gear (Class,Image)
				= @components
					+ molecule/card
				=============================================*/
				get_component([ 'template' => 'molecule/card-gear',
								'vars' => [
											"class" => 'col-md-3 card-gear',
											"category_name" => $vars['termObj']->name,
											"image" => get_field('main_image', $vars['termObj']->taxonomy.'_'.$vars['termObj']->term_id),
											 "url" =>	$vars['url'],
											 "childern" =>	$vars['childern'],

											]
								 ]);
		
		
			# code...
		} ?>
		<script>
			jQuery('.dropdown-toggle').dropdown()
		</script>
	</div>

	<div class="container-fluid padding-4">
	<?php
				get_component([
												'template' => 'atom/link',
												// 'return_string' => true,
												'vars' => [
															"class" => 'button-gear text-uppercase',
															"text" => 'More gear for hire',
															"url" => ""
															]
											]);
			 ?>
	</div>	
</section>