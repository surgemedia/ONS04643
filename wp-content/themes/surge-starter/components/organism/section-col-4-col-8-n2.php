<?php 
$vars['section_data'] = get_section_options($vars);
 ?>
<section id="<?php echo $vars['section_data']['id'] ?>" class="<?php echo $vars['section_data']['background_color'] ?> <?php echo $vars['section_data']['section_width'] ?> <?php echo $vars['section_data']['padding'] ?> <?php echo $vars['section_data']['margin'] ?>" style="background-image:url(<?php echo $vars['section_data']['background_image'] ?>);">
<?php
	/*=====================================
	=            Get Files            =
	=====================================*/
	$element_file_l = $vars['element-1'][0]['acf_fc_layout']; //get file
	$element_file_r = $vars['element-2'][0]['acf_fc_layout']; //get file
	unset($vars['element-1'][0]['acf_fc_layout']); // remove file from array leveling only vars
	unset($vars['element-2'][0]['acf_fc_layout']); // remove file from array leveling only vars

	/*=====================================
	=            Setup Classes            =
	=====================================*/
	$vars['element-1'][0]['class'] = 'col-md-4'; //because i know this from the file name
	$vars['element-2'][0]['class'] = 'col-md-8'; //because i know this from the file name

	/*==================================
	=            Setup Vars            =
	==================================*/
	$element_vars_l = $vars['element-1'][0];
	$element_vars_r = $vars['element-2'][0];

	//Element L
	get_component([
	 'template' => 'molecule/'.$element_file_l,
	 'vars' => $element_vars
			]);
	//Element R
	get_component([
	 'template' => 'molecule/'.$element_file_r,
	 'vars' => $element_vars
			]);
	unset($element_file_l);
	unset($element_file_r);
	unset($element_vars_l);
	unset($element_vars_r);

 ?>
</section>