<?php
/**
 * Template Name: TID01
 */
?>

<?php while (have_posts()) : the_post(); ?>
	
	<section class="jumbotron border-bottom container-fluid" style="background-image:url('https://unsplash.it/1920/1080?image=1033')">
		<div class="title col-md-7 col-md-offset-2"><h1 class="col-md-11">“ONSITE CONNECT REVOLUTIONISED HOW WE MANAGE OUR EQUIPMENT HIRE”</h1>
		<a href="" class="btn">DISCOVER THE APP</a></div>
		<div class="col-md-3">
			<div class="card overlay"></div>
			<?php get_component([ 'template' => 'molecule/card-overlay',
											// 'remove_tags' =>  ['i'],
											'vars' => [
														"class" => 'card overlay',
														"image" => 'https://unsplash.it/1920/1080?image=1026',
														"subtitle" => "INDUSTRIAL CASE STUDY",
														"title" => "BRANCH IN A BOX",

														]
											 ]);
			 ?>
			 <?php get_component([ 'template' => 'molecule/card-overlay',
											// 'remove_tags' =>  ['i'],
											'vars' => [
														"class" => 'card overlay',
														"image" => 'https://unsplash.it/1920/1080?image=960',
														"subtitle" => "INDUSTRIAL CASE STUDY",
														"title" => "BRANCH IN A BOX",

														]
											 ]);
			 ?>
		</div>
	</section>
<section class="border-bottom container-fluid">
<?php
			

			/*=============================================
			=            	Card (Class,Image,Title,Content)
			= @components
				+ molecule/card
			=============================================*/
			get_component([ 'template' => 'molecule/card',
											'vars' => [
														"class" => 'col-md-6 card',
														"image" => 'http://localhost/ONS04643/wp-content/uploads/2016/05/any4-1.jpg',
														"title" => "One stop power shop",
														"subtitle" => "One stop power shop",
														"content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sed odit inventore a quo mollitia adipisci est placeat omnis earum quisquam minus sit iusto, accusamus et facere. Eligendi distinctio neque delectus natus, doloribus animi velit pariatur, minus vero. Dolores quis asperiores sequi maiores, doloribus, cum quia reprehenderit accusantium accusamus at.",
														]
											 ]);

			get_component([
											'template' => 'atom/link',
											// 'return_string' => true,
											'vars' => [
														"class" => 'button text-uppercase',
														"text" => 'Read More',
														"url" => "get_permalink()"
														]
										]);
?>
</section>
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
