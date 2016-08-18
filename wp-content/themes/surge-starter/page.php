<div class="row">

<?php
if (is_front_page()){ ?>
<?php 
	get_component([ 'template' => 'organism/section-jumbotron-with-cards',
											'vars' => [
														'remove_tags'=> get_field('remove_elements'),
														"background" => get_field('background'), 
														"class" => '',
														"title" => get_field('title'),
														"subtitle" => get_field('subtitle'),
														"content" => get_field('content'),
														"image" => get_field('image'),
														"button" => get_field('button')
														]
											 ]);
 ?>
<?php }else{ ?>
<?php 

	get_component([ 'template' => 'organism/industry_header',
											'vars' => [
														'remove_tags'=> get_field('remove_elements'),
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
//is there block?
if(isset($layout_builder[0])){
foreach ($layout_builder as $key => $value) {
	$section_file = $value['acf_fc_layout'];
	if(isset($section_file)){
	unset($value['acf_fc_layout']); //of section
	//Section Options
	$value["section"] = $section_file;
	$value['section_data'] = get_section_options($value);

	//Call file for display
	echo '<section '.$value['section_data'].'>';
			get_component([
						'template' => 'organism/'.$section_file,
						'vars' => $value
			]);
				
				}
		echo '</section>';
		
		unset($section_file);
	}
} else {
	get_component([
						'template' => 'template/no-section-warning',
						'vars' => []
			]);
}
 ?>


<?php 
if (!is_front_page()){
	$vars['front_page'] = get_option('page_on_front');
	$vars['builder'] = get_field('layout',$vars['front_page']);
	foreach ($vars['builder'] as $key => $layout) {
		/*if($layout['acf_fc_layout'] == 'section-col-12-floating' && $layout['id'] == "contact-form"){					
			// debug($layout);
			//Section Options
			
			$section_classes = 'class="'.$layout['acf_fc_layout'].' '.$layout['border'].' '.$layout['background_color'].' '.$layout['section_width'].' '.$layout['padding'].' '.$layout['margin'].' '.$layout['text_align'].'"';
			$section_style = 'style="background-image:url('.$layout['background_image'].');"';
			get_component([ 'template' => 'organism/section-col-12-floating',
											'vars' => [
														"section_id" => "id=".$layout['id'],
														"section_classes" => $section_classes,
														"section_style" => $section_style,
														"element" => $layout['element'],
														]
											 ]);
		}

		
		if($layout['acf_fc_layout'] == 'section-gear'){					
			
			//Section Options
			
			$section_classes = 'class="'.$layout['acf_fc_layout'].' '.$layout['border'].' '.$layout['background_color'].' '.$layout['section_width'].' '.$layout['padding'].' '.$layout['margin'].' '.$layout['text_align'].'"';
			$section_style = 'style="background-image:url('.$layout['background_image'].');"';
			get_component([ 'template' => 'organism/section-gear',
											'vars' => [
														"section_id" => "id=".$layout['id'],
														"section_classes" => $section_classes,
														"section_style" => $section_style,
														"subtitle" => $layout['subtitle'],
														"title" => $layout['title'],
														"content" => $layout['content'],
														"category" => $layout['category'],

														]
											 ]);
		}*/


		if($layout['acf_fc_layout'] == 'section-locator'){					
			
			//Section Options
			
			$section_classes = 'class="'.$layout['acf_fc_layout'].' border-top '.$layout['background_color'].' '.$layout['section_width'].' '.$layout['padding'].' '.$layout['margin'].' '.$layout['text_align'].'"';
			$section_style = 'style="background-image:url('.$layout['background_image'].');"';
			get_component([ 'template' => 'organism/section-locator',
											'vars' => [
														"section_id" => 'id="'.$layout['id'].'"',
														"section_classes" => $section_classes,
														"section_style" => $section_style,
														"subtitle" => $layout['subtitle'],
														"title" => $layout['title'],
														"content" => $layout['content']
														]
											 ]);
		}
	} 
}	
?>

</div>

