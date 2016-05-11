<?php
/**
 * Template Name: TID02
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('components/molecule/page', 'header'); ?>
  

<?php 
			/*=============================================
			=            	Card (Image,Title,Content,Button)       		   
			= @components
				+ molecule/card
				+ molecule/link
			=============================================*/
		/*	get_component([ 'template' => 'molecule/card'
											'remove_tags' =>  ['i'],
											'vars' => [
														"class" => 'col-md-6 col-md-offset-3',
														"title" => "get_the_title()",
														"content" => "get_the_content()",
														get_component([
															'template' => 'atom/single-button',
															'return_string' => true,
															'vars' => [ '',
																		'btn',
																		'Read More',
																		get_permalink()
																		]
															])
														
														]
											 ]);*/
	 ?>
<?php 
			get_component([
											'template' => 'atom/button',
											// 'return_string' => true,
											'vars' => [ 
														"class" => 'button',
														"text" => 'Read More',
														"url" => "get_permalink()"
														]
										]);
		 ?>











<?php endwhile; ?>
