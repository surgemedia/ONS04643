<?php
/**
 * Template Name: TID01
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php 				
							get_component([ 'template' => 'molecule/icon-nav',
											'vars' => [
														'repeater' =>[
																["icon" => 'icon-mining', "link" => '#',"name"=>'Mining'],
																["icon" => 'icon-industrial', "link" => '#',"name"=>'industrial'],
																["icon" => 'icon-government', "link" => '#',"name"=>'government'],
																["icon" => 'icon-infrastructure', "link" => '#',"name"=>'infrastructure'],
																["icon" => 'icon-events', "link" => '#',"name"=>'events'],
															]
														]
											 ]);
 ?>
	<section class="jumbotron border-bottom container-fluid" style="background-image:url('https://unsplash.it/1920/1080?image=1033')">
		<div class="title col-md-7 col-md-offset-2"><h1 class="col-md-11">“ONSITE CONNECT REVOLUTIONISED HOW WE MANAGE OUR EQUIPMENT HIRE”</h1>
		<a href="" class="btn">DISCOVER THE APP</a></div>
		<div class="col-md-3">
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
<section id"main-content" class="border-bottom container-fluid padding-4">
<?php
			

			/*=============================================
			=            	Card (Class,Image,Title,Content)
			= @components
				+ molecule/card
			=============================================*/
			get_component([ 'template' => 'molecule/card',
							'remove_tags' =>  ['img'],
											'vars' => [
														"class" => 'col-md-6 card',
														"title" => "One stop power shop",
														"subtitle" => "One stop power shop",
														"content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sed odit inventore a quo mollitia adipisci est placeat omnis earum quisquam minus sit iusto, accusamus et facere. Eligendi distinctio neque delectus natus, doloribus animi velit pariatur, minus vero. Dolores quis asperiores sequi maiores, doloribus, cum quia reprehenderit accusantium accusamus at. 

															Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sed odit inventore a quo mollitia adipisci est placeat omnis earum quisquam minus sit iusto, accusamus et facere. Eligendi distinctio neque delectus natus, doloribus animi velit pariatur, minus vero. Dolores quis asperiores sequi maiores, doloribus, cum quia reprehenderit accusantium accusamus at.",
															"button" => get_component([
																'template' => 'atom/link',
																'return_string' => true,
																'vars' => [
																			"class" => 'btn text-uppercase pull-left',
																			"text" => 'Find out More',
																			"url" => "get_permalink()"
																			]
																])
														]
											 ]);

			
?>
	<div id="video" class="col-md-6 " style="background-image:url(https://unsplash.it/685/340?image=960)">
	<i class="icon-play"></i>
	</div>
</section>
<?php 
		get_component([
											'template' => 'organism/paragraph-overlay',
											'remove_tags' =>  ['h1'],
											'vars' => [
														"background" => 'https://unsplash.it/1920/1080?image=960',
														"logo" => 'https://unsplash.it/200/100?image=960',

														"class" => 'contact-us container-fluid padding-4',
														"subtitle" => get_field('title_form','option'),
														"description" => get_field('description_form','option'),
														"atom" => get_component([
																'template' => 'atom/link',
																'return_string' => true,
																'vars' => [
																			"class" => 'btn text-uppercase pull-left',
																			"text" => 'Find out More',
																			"url" => "get_permalink()"
																			]
																])
 														]
										]);
	?>
<section id"main-content" class="border-bottom container-fluid padding-4">
<?php
			

			/*=============================================
			=            	Card (Class,Image,Title,Content)
			= @components
				+ molecule/card
			=============================================*/
			get_component([ 'template' => 'molecule/card',
							'remove_tags' =>  ['img'],
											'vars' => [
														"class" => 'col-md-6 card',
														"title" => "Support 24/7",
														"subtitle" => "Our People",
														"content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sed odit inventore a quo mollitia adipisci est placeat omnis earum quisquam minus sit iusto, accusamus et facere. Eligendi distinctio neque delectus natus, doloribus animi velit pariatur, minus vero. Dolores quis asperiores sequi maiores, doloribus, cum quia reprehenderit accusantium accusamus at. 

															Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sed odit inventore a quo mollitia adipisci est placeat omnis earum quisquam minus sit iusto, accusamus et facere. Eligendi distinctio neque delectus natus, doloribus animi velit pariatur, minus vero. Dolores quis asperiores sequi maiores, doloribus, cum quia reprehenderit accusantium accusamus at.",
															"button" => get_component([
																'template' => 'atom/link',
																'return_string' => true,
																'vars' => [
																			"class" => 'btn text-uppercase pull-left',
																			"text" => 'Find out More',
																			"url" => "get_permalink()"
																			]
																])
														]
											 ]);

			
?>
	<div id="video" class="col-md-6 " style="background-image:url(https://unsplash.it/685/340?image=838)">
	</div>
</section>
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
			=      	Contact-Us (Class,Image,Title,Content)
			= @components
				+ organism/contac-us
			=============================================*/
		get_component([
											'template' => 'organism/paragraph-overlay',
											'remove_tags' =>  ['h1'],
											'vars' => [
														"background" => 'https://unsplash.it/1920/1080?image=960',
														"logo" => 'https://unsplash.it/200/100?image=960',

														"class" => 'contact-us container-fluid padding-4',
														"subtitle" => get_field('title_form','option'),
														"description" => get_field('description_form','option'),
														"atom" => get_component([
																'template' => 'atom/link',
																'return_string' => true,
																'vars' => [
																			"class" => 'btn text-uppercase pull-left',
																			"text" => 'Find out More',
																			"url" => "get_permalink()"
																			]
																])
 														]
										]);
	?>


<?php endwhile; ?>
