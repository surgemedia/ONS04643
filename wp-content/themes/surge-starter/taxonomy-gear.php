<?php
	$thisObj = get_term_by('slug', $wp_query->query_vars['gear'], $wp_query->query_vars['taxonomy']);
	$vars = [
			"remove_tags"=> get_field('remove_elements',$thisObj),
			"class" => get_field('class',$thisObj),
			"subtitle" => get_field('subtitle',$thisObj),
			"title" => get_field('title',$thisObj),
			"content" => get_field('content',$thisObj),
			"button" => get_field('button',$thisObj),
			"image" => get_field('image',$thisObj),
			"background" => get_field('background',$thisObj),
			"main_image" => get_field('main_image',$thisObj),
			"gear_title" => $wp_query->query_vars['gear'],
			"this" => $thisObj
	];
	 unset($thisObj);    
?>
<?php 
	get_component([ 'template' => 'organism/industry_header',
											'remove_tags'=> $vars["remove_tags"],
											'vars' => [
														"background" => $vars["background"],
														"class" => $vars["class"],
														"title" => $vars["title"],
														"subtitle" => $vars["subtitle"],
														"content" => $vars["content"],
														"image" => $vars["image"],
														"button" => $vars["button"],
														]
											 ]);
 ?>
 <section class="light-grey-bg border-top padding-2 section-sub-gear">
<?php
		$vars['term_childern'] = get_term_children( $vars['this']->term_id, $vars['this']->taxonomy );
?> 
<?php 
$vars['term_childern_size'] = sizeof($vars['term_childern']);
for ($vars['i']=0; $vars['i'] < $vars['term_childern_size']; $vars['i']++) { 
		$vars['this'] = get_term_by('id', $vars['term_childern'][$vars['i']], $wp_query->query_vars['taxonomy']);

		$vars['childern_posts'] = array();
				// WP_Query arguments
				$args = array (
					'post_type' => 'equipment',
					'tax_query' => array(
                                array(
                                'taxonomy' => 'gear',
                                'field' => 'slug',
                                'terms' => $vars['this']->slug,
                                )
                            ),
				);

				// The Query
				$query = new WP_Query( $args );

				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						array_push($vars['childern_posts'], get_post());
					}
				} else {
					// no posts found
				}

				// Restore original Post Data
				wp_reset_postdata();			

			get_component([ 'template' => 'molecule/card-sub-gear',
                            'vars' => [
                            			"id" => $vars['this']->slug,
                                  "class" => 'container card gear padding-4',
                                  "subtitle" => $vars['gear_title'],
                                  "title" => $vars['this']->name,
                                  "image" => get_field("background",$vars['this']),
                                  "term_chidlen" => $vars['childern_posts'],
                                  "side_remove_elements" => get_field("remove_elements",$vars['this']),
                                  "side_image" => get_field("image",$vars['this']),
                                  "side_class" => get_field("class",$vars['this']),
                                  "side_subtitle" => get_field("subtitle",$vars['this']),
                                  "side_title" => get_field("title",$vars['this']),
                                  "side_content" => get_field("content",$vars['this']),
                                  "side_button" => get_field("button",$vars['this'])
                                   ]
                             ]);
                              
 
} ?>




 </section>

<?php $vars['front_page'] =  get_option('page_on_front');
			$vars['builder'] = get_field('layout',$vars['front_page']);
			
			foreach ($vars['builder'] as $key => $layout) {
				if($layout['acf_fc_layout'] == 'section-col-12-floating' && $layout['id'] == "contact-form"){					
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

				if($layout['acf_fc_layout'] == 'section-locator'){					
					
					//Section Options
					
					$section_classes = 'class="'.$layout['acf_fc_layout'].' '.$layout['border'].' '.$layout['background_color'].' '.$layout['section_width'].' '.$layout['padding'].' '.$layout['margin'].' '.$layout['text_align'].'"';
					$section_style = 'style="background-image:url('.$layout['background_image'].');"';
					get_component([ 'template' => 'organism/section-locator',
													'vars' => [
																"section_id" => "id=".$layout['id'],
																"section_classes" => $section_classes,
																"section_style" => $section_style,
																"subtitle" => $layout['subtitle'],
																"title" => $layout['title'],
																"content" => $layout['content']
																]
													 ]);
				}

			} 
?>
