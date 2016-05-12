<section class="<?php echo $vars['class'] ?> display-block">
	<?php
			/*=============================================
			=            	Card (Class,Title,Subtitle)
			= @components
				+ molecule/card
			=============================================*/
			get_component([ 'template' => 'molecule/card',
							'remove_tags' =>  ['img'],
							'vars' => [
										"class" => 'container-fluid card text-center padding-2',
										"title" => $vars['title'],
										"subtitle" => $vars['subtitle']
										]
							 ]);
	?>

	<?php for ($i=0; $i < 5 ; $i++) {
			
			$size=(2===$i)? 12 : 6;
			/*=============================================
			=      	Case Study (Class,Title,Image,Content)
			= @components
				+ molecule/card
			=============================================*/
			get_component([ 'template' => 'molecule/card',
							'vars' => [
										"class" => 'col-md-'.$size.' card case-study',
										"image" => get_field('default_image','option'),
										"title" => "One stop power shop",
										"content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae hic obcaecati molestiae, similique voluptatibus dolore, illum sequi ut aspernatur dolores distinctio nemo alias tempora nam accusamus ipsa. A quasi doloremque autem id quibusdam quis exercitationem, dicta praesentium. Voluptates quidem esse nisi ipsum. Adipisci laudantium animi, officiis iure aliquid autem dolorum?"
										]
							 ]);


		# code...
	} ?>

</section>