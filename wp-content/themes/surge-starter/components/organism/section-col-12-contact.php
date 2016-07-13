<?php 
$vars['section_data'] = get_section_options($vars);
 ?>
<?php if(!isset($vars['background_image'])){ 
		 $vars['background_image'] = $vars['image'];
	}
	?>
<section id="<?php echo $vars['section_data']['id'] ?>" class="<?php echo $vars['section_data']['section_width'] ?> <?php echo $vars['section_data']['padding'] ?> <?php echo $vars['section_data']['margin'] ?>" style="background-image:url(<?php echo $vars['section_data']['background_image'] ?>); background-color:<?php echo $vars['section_data']['background_color'] ?>">

	<div class="col-md-4 col-md-offset-4 text-center">
		<div class="box">
		<?php 
		get_component([ 'template' => 'molecule/card',
							'remove_tags' =>  [],
											'vars' => [
														"class" => 'title',
														"title" => $vars["title"],
														"subtitle" => $vars["subtitle"],
														"content" => apply_filters('the_content',  $vars["content"]),
															"button" => ''
														]
											 ]);
		get_component([ 'template' => 'molecule/form',
							'remove_tags' =>  ['h2','p'],
											'vars' => [
														"class" => 'form text-center',
														"form" => $vars["form"],
														]
											 ]);
		 ?>
		</div>
	</div>
</section>