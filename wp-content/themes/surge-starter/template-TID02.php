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
			= Category (Class,Subtile,Title,Category)
			= @components
				+ organism/paragraph-overlay
				+ atom/gvform
			=============================================*/

			get_component([
											'template' => 'organism/category',
											'vars' => [
														"class" => 'category container-fluid border-bottom grey-light-bg',
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
														"background" => "https://unsplash.it/1920/1080/?random",
														// get_field('background_form','option')
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
			= Locator (Class, Description)
			= @components
				+ organism/locator
			=============================================*/

			get_component([
											'template' => 'organism/locator',
											'vars' => [
														"class" => 'locator container-fluid grey-light-bg text-center',
 														"description" => 'Find our rental and service locations throughout Australia.'
 														]
										]);
		 ?>




<?php endwhile; ?>
