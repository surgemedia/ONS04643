<?php
	$thisObj = get_term_by('slug', $wp_query->query_vars['gear'], $wp_query->query_vars['taxonomy']);
	$vars = [
			"subtitle" => get_field('subtitle',$thisObj),
			"title" => get_field('title',$thisObj),
			"content" => get_field('content',$thisObj),
			"button" => get_field('button',$thisObj),
			"background" => get_field('background',$thisObj),
			"main_image" => get_field('main_image',$thisObj),
			"gear_title" => $wp_query->query_vars['gear'],
			"this" => $thisObj
	];
	 unset($thisObj);
 ?>
<?php 
	get_component([ 'template' => 'organism/industry_header',
											'remove_tags'=> get_field('remove_elements'),
											'vars' => [
														"class" => 'container-fluid',
														"title" => get_field('title',$vars['this']),
														"subtitle" => get_field('subtitle',$vars['this']),
														"content" => get_field('content',$vars['this']),
														"image" => get_field('background',$vars['this']),
														"button" => get_field('button',$vars['this']),

														]
											 ]);
 ?>
 <section class="light-grey-bg border-top">
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
                                  "class" => 'container card gear',
                                  "subtitle" => $vars['gear_title'],
                                  "title" => $vars['this']->name,
                                  "image" => get_field("background",$vars['this']),
                                 "term_chidlen" => $vars['childern_posts'],
                                  'side_subtitle' => get_field("subtitle",$vars['this']),
                                  'side_title' => get_field("title",$vars['this']),

                                   'side_content' => get_field("content",$vars['this']),
                                  "side_button" => get_component([
                                      'template' => 'atom/link',
                                      'return_string' => true,
                                      'vars' => [
                                        "class" => 'btn text-uppercase pull-left',
                                        "text" => "Download Specsheet",
                                        "url" => get_field("spec_sheet",$vars['this']),
                                            ]
                                      ])
                                  ]
                             ]);
                              
 
} ?>
 </section>

