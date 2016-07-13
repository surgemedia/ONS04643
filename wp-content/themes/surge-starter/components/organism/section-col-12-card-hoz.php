<?php 
$vars['section_data'] = get_section_options($vars);
 ?>
<section id="<?php echo $vars['section_data']['id'] ?>" class="<?php echo $vars['section_data']['section_width'] ?> <?php echo $vars['section_data']['padding'] ?> <?php echo $vars['section_data']['margin'] ?>" style="background-image:url(<?php echo $vars['section_data']['background_image'] ?>); background-color:<?php echo $vars['section_data']['background_color'] ?>">
<?php
			//debug($vars);

			/*=============================================
			= Card (Class,Image,Title,Content)
			= @components
				+ molecule/card
			=============================================*/
			get_component([ 'template' => 'molecule/card',
							'remove_tags' =>  ['img'],
											'vars' => [
														"class" => 'col-md-6 card para',
														"title" => $vars["title"],
														"subtitle" => $vars["subtitle"],
														"content" => apply_filters('the_content',  $vars["content"]),
															"button" => get_component([
																'template' => 'atom/link',
																'return_string' => true,
																'vars' => [
																			"class" => 'btn text-uppercase pull-left',
																			"text" => $vars['button'][0]['text'],
																			"url" => $vars['button'][0]['link_location'],
																			]
																])
														]
											 ]);

			
?>
<div class="col-md-6 text-center">
		<img class="img-responsive" src="<?php echo $vars['image'] ?>" alt="">
		</div>
</section>