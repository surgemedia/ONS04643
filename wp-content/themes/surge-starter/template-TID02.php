<?php
/**
 * Template Name: TID02
 */
?>

<?php while (have_posts()) : the_post(); ?>

<?php
			/*=============================================
			=            	Card (Class,Image,Title,Content)
			= @components
				+ molecule/card-header
			=============================================*/
			// get_component([ 'template' => 'molecule/card-header',
			// 								// 'remove_tags' =>  ['i'],
			// 								'vars' => [
			// 											"class" => 'col-md-12',
			// 											"image" => 'http://localhost/ONS04643/wp-content/uploads/2016/05/any1-1.jpg',
			// 											"subtitle" => "Onsite for the mining industry",
			// 											"title" => "One stop power shop",
			// 											"content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sed odit inventore a quo mollitia adipisci est placeat omnis earum quisquam minus sit iusto, accusamus et facere. Eligendi distinctio neque delectus natus, doloribus animi velit pariatur, minus vero. Dolores quis asperiores sequi maiores, doloribus, cum quia reprehenderit accusantium accusamus at.",
			// 											]
			// 								 ]);
	 ?>

<?php
			/*=============================================
			=            	Card (Class,Image,Title,Content)
			= @components
				+ molecule/card
			=============================================*/
			// get_component([ 'template' => 'molecule/card',
			// 								// 'remove_tags' =>  ['i'],
			// 								'vars' => [
			// 											"class" => 'col-md-6',
			// 											"image" => 'http://localhost/ONS04643/wp-content/uploads/2016/05/any4-1.jpg',
			// 											"title" => "One stop power shop",
			// 											"content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sed odit inventore a quo mollitia adipisci est placeat omnis earum quisquam minus sit iusto, accusamus et facere. Eligendi distinctio neque delectus natus, doloribus animi velit pariatur, minus vero. Dolores quis asperiores sequi maiores, doloribus, cum quia reprehenderit accusantium accusamus at.",
			// 											]
			// 								 ]);
	 ?>
<?php


			// get_component([
			// 								'template' => 'atom/link',
			// 								// 'return_string' => true,
			// 								'vars' => [
			// 											"class" => 'button text-uppercase',
			// 											"text" => 'Read More',
			// 											"url" => "get_permalink()"
			// 											]
			// 							]);
		 ?>



<?php
			/*=============================================
			=      	Contact-Us (Class,Image,Title,Content)
			= @components
				+ organism/contac-us
			=============================================*/

			get_component([
											'template' => 'organism/contact-us',
											'vars' => [
														"class" => 'col-xs-12',
														"background" => get_field('background_form','option')
														]
										]);
		 ?>


<?php endwhile; ?>
