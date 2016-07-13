<?php 
$vars['section_data'] = get_section_options($vars);
 ?>
<section id="<?php echo $vars['section_data']['id'] ?>" class="<?php echo $vars['section_data']['background_color'] ?> <?php echo $vars['section_data']['section_width'] ?> <?php echo $vars['section_data']['padding'] ?> <?php echo $vars['section_data']['margin'] ?>" style="background-image:url(<?php echo $vars['section_data']['background_image'] ?>);">
<?php
	/*=====================================
	=            Get Files            =
	=====================================*/
	$element_file_1 = $vars['1_element'][0]['acf_fc_layout']; //get file
	$element_file_2 = $vars['2_element'][0]['acf_fc_layout']; //get file
	$element_file_3 = $vars['3_element'][0]['acf_fc_layout']; //get file

	unset($vars['1_element'][0]['acf_fc_layout']); // remove file from array leveling only vars
	unset($vars['2_element'][0]['acf_fc_layout']); // remove file from array leveling only vars
	unset($vars['3_element'][0]['acf_fc_layout']); // remove file from array leveling only vars

	/*=====================================
	=            Setup Classes            =
	=====================================*/
	//$vars['1_element'][0]['class'] = 'col-md-4'; //because i know this from the file name
	//$vars['2_element'][0]['class'] = 'col-md-4'; //because i know this from the file name
	//$vars['3_element'][0]['class'] = 'col-md-4'; //because i know this from the file name


	/*==================================
	=            Setup Vars            =
	==================================*/
	$element_vars_1 = $vars['1_element'][0];
	$element_vars_2 = $vars['2_element'][0];
	$element_vars_3 = $vars['3_element'][0];


	//Element 1
	?> 
	<div class="col-md-4">
	<?php
	get_component([
	 'template' => 'molecule/'.$element_file_1,
	 'vars' => $element_vars_1
			]);
			?>
	</div>
			
			<div class="col-md-4">
	<?php
	//Element 2
	get_component([
	 'template' => 'molecule/'.$element_file_2,
	 'vars' => $element_vars_2
			]);
		?>
	</div>

		<div class="col-md-4">
	<?php
	//Element 3
	get_component([
	 'template' => 'molecule/'.$element_file_3,
	 'vars' => $element_vars_3
			]);
	?>
	</div>
	<?php
	unset($element_file_1);
	unset($element_file_2);
	unset($element_file_3);

	unset($element_vars_1);
	unset($element_vars_2);
	unset($element_vars_3);


 ?>
</section>