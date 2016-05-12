<?php
/**
 * Template Name: TID02
 */
?>

<?php while (have_posts()) : the_post(); ?>

<img class="top-banner" src="http://localhost/ONS04643/wp-content/uploads/2016/05/any1-1.jpg" alt="">


<?php
			/*=============================================
			=    Card Header (Class,Subtitle,Title,Content)
			= @components
				+ molecule/card-header
			=============================================*/
			get_component([ 'template' => 'molecule/card',
											'remove_tags' =>  ['img'],
											'vars' => [
														"class" => 'card container padding-4',
														"subtitle" => "Onsite for the mining industry",
														"title" => "One stop power shop",
														"content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sed odit inventore a quo mollitia adipisci est placeat omnis earum quisquam minus sit iusto, accusamus et facere. Eligendi distinctio neque delectus natus, doloribus animi velit pariatur, minus vero. Dolores quis asperiores sequi maiores, doloribus, cum quia reprehenderit accusantium accusamus at.",
														]
											 ]);
	 ?>

<?php
			/*=============================================
			=            	Card (Class,Image,Title,Content)
			= @components
				+ molecule/card
			=============================================*/
		/*	get_component([ 'template' => 'molecule/card',
											// 'remove_tags' =>  ['i'],
											'vars' => [
														"class" => 'col-md-6',
														"image" => 'http://localhost/ONS04643/wp-content/uploads/2016/05/any4-1.jpg',
														"title" => "One stop power shop",
														"content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sed odit inventore a quo mollitia adipisci est placeat omnis earum quisquam minus sit iusto, accusamus et facere. Eligendi distinctio neque delectus natus, doloribus animi velit pariatur, minus vero. Dolores quis asperiores sequi maiores, doloribus, cum quia reprehenderit accusantium accusamus at.",
														]
											 ]);*/
	 ?>
<?php

/*
			get_component([
											'template' => 'atom/link',
											// 'return_string' => true,
											'vars' => [
														"class" => 'button text-uppercase',
														"text" => 'Read More',
														"url" => "get_permalink()"
														]
										]);f*/
		 ?>
<?php
			/*=============================================
			= Category (Class,Subtile,Title,Category)
			= @components
				+ organism/paragraph-overlay
				+ atom/gvform
			=============================================*/

			get_component([
											'template' => 'organism/category',
											'vars' => [
														"class" => 'category container-fluid',
														"subtitle" => "Mining Industry",
														"title" => "onsite case studies",
														'category' => 'mining'
 														]
										]);
		 ?>


<?php
			/*=============================================
			= Contact-Us (Class,Background,Subtitle,Title,Description)
			= @components
				+ organism/paragraph-overlay
				+ atom/gvform
			=============================================*/

			get_component([
											'template' => 'organism/paragraph-overlay',
											'remove_tags' =>  ['img'],
											'vars' => [
														"class" => 'contact-us container-fluid',
														"background" => get_field('background_form','option'),
														"subtitle" => get_field('title_form','option'),
														'title' => get_field('short_phone','option'),
														"description" => get_field('description_form','option'),
														"atom" =>  get_component([
																'template' => 'atom/gvform',
																'return_string' => true,
																'vars' => []
															])
 														]
										]);
		 ?>

<?php
			/*=============================================
			=      	Section Gear (Class,Title,Content)
			= @components
				+ organism/contac-us
			=============================================*/

			/*get_component([
											'template' => 'organism/paragraph-overlay',
											'vars' => [
														"class" => ' col-xs-12',
														"background" => get_field('background_form','option'),
														"title" => "The Gear",
														'content' => "get_field('short_phone','option')",
														"description" => get_field('description_form','option')
 														]
										]);*/
		 ?>

<?php endwhile; ?>
