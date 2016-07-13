<section id="<?php echo $vars['id'] ?>" class="<?php echo $vars['section_width'] ?> <?php echo $vars['padding'] ?> <?php echo $vars['margin'] ?>" style="background-image:url(<?php echo $vars['background_image'] ?>); background-color:<?php echo $vars['background_color'] ?>">
<?php

	unset($vars['element'][0]['acf_fc_layout']); // remove file from array leveling only vars
	$vars['element'][0]['class'] = 'col-md-12'; //because i know this from the file name
	$element_vars = $vars['element'][0];
	get_component([
	 'template' => 'molecule/'.$element_file,
	 'vars' => $element_vars
			]);
	unset($element_file);
	unset($element_vars);
 ?>
</section>