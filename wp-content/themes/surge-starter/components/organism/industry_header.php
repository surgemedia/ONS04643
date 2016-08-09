<?php// echo debug($vars); ?>

<section class="">
	<img class="top-banner" src="<?php echo $vars["background"]; ?>" alt="">

	<?php
			/*=============================================
			=    Card Header (Class,Subtitle,Title,Content)
			= @components
				+ molecule/card-header
			=============================================*/
			get_component([ 'template' => 'molecule/jumbotron-card',
											'remove_tags' => $vars['remove_tags'],
											'vars' => [
														"class" => 'container padding-4 '.$vars['class'],
														"subtitle" => $vars["subtitle"],
														"image" => $vars["image"],
														"title" => $vars["title"],
														"content" => $vars["content"],
														"button" => $vars['button']
														]
											 ]);
	 ?>

</section>