<?php
/**
 * Template Name: TID02
 */
?>

<?php while (have_posts()) : the_post(); ?>


<?php
			/*=============================================
			= Category (Class,Subtile,Title,Category)
			= @components
				+ organism/paragraph-overlay
				+ atom/gvform
			=============================================*/

			get_component([
											'template' => 'organism/industry-header',
											'vars' => [
														"class" => 'border-bottom',
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
														"class" => 'category container-fluid border-bottom',
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
														"class" => 'contact-us container-fluid border-bottom',
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
			= Category (Class,Subtile,Title,Category)
			= @components
				+ organism/gear
			=============================================*/

			get_component([
											'template' => 'organism/gears',
											'vars' => [
														"class" => 'gears container-fluid  text-center border-bottom',
														"title" => "The Gear",
														'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consectetur itaque repellat explicabo doloribus officiis atque, porro quae eos consequatur.'
 														]
										]);
		 ?>


<?php
			/*=============================================
			= Category (Class,Subtile,Title,Category)
			= @components
				+ organism/paragraph-overlay
				+ atom/gvform
			=============================================*/

			get_component([
											'template' => 'organism/locator',
											'vars' => [
														"class" => 'locator container-fluid  text-center',
 														]
										]);
		 ?>




<?php endwhile; ?>
