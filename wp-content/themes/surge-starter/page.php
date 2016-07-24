<div class="row">

<?php
if (is_front_page()){ ?>
<?php 
	get_component([ 'template' => 'organism/section-jumbotron-with-cards',
											'remove_tags'=> get_field('remove_elements'),
											'vars' => [
														"class" => '',
														"title" => get_field('title'),
														"subtitle" => get_field('subtitle'),
														"content" => get_field('content'),
														"image" => get_field('background'),
														"button" => get_field('button'),
														]
											 ]);
 ?>
<?php }else{ ?>
<?php 

	get_component([ 'template' => 'organism/industry_header',
											'remove_tags'=> get_field('remove_elements'),
											'vars' => [
														"background" => get_field('background'),
														"class" => get_field('class'),
														"title" => get_field('title'),
														"subtitle" => get_field('subtitle'),
														"content" => get_field('content'),
														"image" => get_field('image'),
														"button" => get_field('button'),
														]
											 ]);
 ?>
<?php } ?>
<?php
$layout_builder = get_field('layout');

foreach ($layout_builder as $key => $value) {
	$section_file = $value['acf_fc_layout'];
	unset($value['acf_fc_layout']); //of section
	
	//Section Options
	$value['section_data'] = get_section_options($value);
	$value['section_classes'] = 'class="'.$section_file.' '.$value['section_data']['border'].' '.$value['section_data']['background_color'].' '.$value['section_data']['section_width'].' '.$value['section_data']['padding'].' '.$value['section_data']['margin'].' '.$value['section_data']['text_align'].'"';
	$value['section_id'] = 'id="'.$value['section_data']['id'].'"';
	$value['section_style'] = 'style="background-image:url('.$value['section_data']['background_image'].');"';


	//Call file for display
			get_component([
						'template' => 'organism/'.$section_file,
						'vars' => $value
			]);
	unset($section_file);
} ?>
</div>