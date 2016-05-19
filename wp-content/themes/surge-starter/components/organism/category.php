<section class="<?php echo $vars['class'] ?> display-block">
	<div class="wrapper">
		<?php
				/*=============================================
				=            	Card (Class,Title,Subtitle)
				= @components
					+ molecule/card
				=============================================*/
				get_component([ 'template' => 'molecule/card',
								'remove_tags' =>  ['img'],
								'vars' => [
											"class" => 'container-fluid card text-center padding-2 title',
											"title" => $vars['title'],
											"subtitle" => $vars['subtitle']
											]
								 ]);
		?>
		
		<?php for ($i=0; $i < 5 ; $i++) {

			$image_size;
			$size;
				if(2===$i){
					$size=12; 
					$image_size='&w=1427&h=324';
				} else {
					$size=6;
					$image_size='&w=565&h=335';
				}
				/*=============================================
				=      	Case Study (Class,Title,Image,Content)
				= @components
					+ molecule/card
				=============================================*/
				get_component([ 'template' => 'molecule/card',
								'vars' => [
											"class" => 'col-md-'.$size.' card case-study',
											"image" => 'http://onsite.surgehost.com.au/i.php?image=https://unsplash.it/1920/1080'.$image_size.'&c=true&q=50',
											"title" => "One stop power shop",
											"content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae hic obcaecati molestiae, similique voluptatibus dolore, illum sequi ut aspernatur dolores distinctio nemo alias tempora nam accusamus ipsa. A quasi doloremque autem id quibusdam quis exercitationem, dicta praesentium. Voluptates quidem esse nisi ipsum. Adipisci laudantium animi, officiis iure aliquid autem dolorum?"
											]
								 ]);
		
		
			# code...
		} ?>
	</div>

</section>