<section class="<?php echo $vars['class'] ?>">
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
										"title" => $vars['title'],
										"content" => $vars['content']
										]
							 ]);
	?>
	
	<div class="row">
		<?php for ($i=0; $i < 4 ; $i++) {
				/*=============================================
				=      	Card Gear (Class,Image)
				= @components
					+ molecule/card
				=============================================*/
				get_component([ 'template' => 'molecule/card-gear',
								'vars' => [
											"class" => 'col-md-3 card-gear',
											"image" => 'https://unsplash.it/1920/1080?image=960',
											"category_name" => "Portables",
											"url" => ""
											]
								 ]);
		
		
			# code...
		} ?>
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