<?php
/**
 * Template Name: TID05
 */
?>

<?php while (have_posts()) : the_post(); ?>


<section class="border-bottom">
	<img class="top-banner" src="http://onsite.surgehost.com.au/i.php?image=https://unsplash.it/1920/1080?random&w=1920&h=1080&c=true&q=5" alt="">

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
														"subtitle" => "OUR PEOPLE",
														"title" => "SPECIALISTS FOR EVERY GEAR IN <br>EVERY REGION OF AUSTRALIA",
														"content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sed odit inventore a quo mollitia adipisci est placeat omnis earum quisquam minus sit iusto, accusamus et facere. Eligendi distinctio neque delectus natus, doloribus animi velit pariatur, minus vero. Dolores quis asperiores sequi maiores, doloribus, cum quia reprehenderit accusantium accusamus at.",
														]
											 ]);
	 ?>

</section>
<section id="leadership" class=" padding-2 grey-light-bg border-bottom">
<div class="container">
		<?php
			/*=============================================
			=    Card Header (Class,Subtitle,Title,Content)
			= @components
				+ molecule/card-header
			=============================================*/
			get_component([ 'template' => 'molecule/card',
								'remove_tags' =>  ['img','h6'],
								'vars' => [
											"class" => 'container-fluid card text-center padding-2',
											"title" => 'LEADERSHIP TEAM',
											"content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sed odit inventore a quo mollitia adipisci "
											]
								 ]);
	 ?>
	 <?php for ($i=0; $i < 4; $i++) { 
	 		/*=============================================
			=    Card Header (Class,Subtitle,Title,Content)
			= @components
				+ molecule/card-header
			=============================================*/
			get_component([ 'template' => 'molecule/card',
								'remove_tags' =>  ['h6'],
								'vars' => [
											"class" => 'col-md-3 card text-center',
											"title" => 'LEADERSHIP TEAM',
											"image" => "http://onsite.surgehost.com.au/i.php?image=https://unsplash.it/1920/1080&w=1920&h=1080&c=true&q=5",
											"content" => "POSITION",
											"button" =>  get_component([
																'template' => 'atom/link',
																'return_string' => true,
																'vars' => [
																	"class" => 'button text text-uppercase',
																	"text" => 'Read More',
																	"url" => "javascript:void(0)"
																	]
															])
											]
								 ]);
	 } ?>
	 </div>
</section>
<section id="leadership" class=" padding-2 grey-light-bg border-bottom">
<div class="container">
		<?php
			/*=============================================
			=    Card Header (Class,Subtitle,Title,Content)
			= @components
				+ molecule/card-header
			=============================================*/
			get_component([ 'template' => 'molecule/card',
								'remove_tags' =>  ['img','h6'],
								'vars' => [
											"class" => 'container-fluid card text-center padding-2',
											"title" => 'Our people',
											"content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sed odit inventore a quo mollitia adipisci "
											]
								 ]);
	 ?>
	 <?php for ($i=0; $i < 2; $i++) { 
	 		/*=============================================
			=    Card Header (Class,Subtitle,Title,Content)
			= @components
				+ molecule/card-header
			=============================================*/
			get_component([ 'template' => 'molecule/card',
								'remove_tags' =>  ['h6'],
								'vars' => [
											"class" => 'col-md-6 card ',
											"title" => 'Onsite specialist',
											"image" => "http://onsite.surgehost.com.au/i.php?image=https://unsplash.it/1920/1080&w=1920&h=1080&c=true&q=5",
											"content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat",
											"button" =>  get_component([
																'template' => 'atom/link',
																'return_string' => true,
																'vars' => [
																	"class" => 'button text text-uppercase',
																	"text" => 'Read More',
																	"url" => "javascript:void(0)"
																	]
															])
											]
								 ]);
	 } ?>

	 </div>
</section>
<section id="reveal">
	<?php for ($i=0; $i < 2; $i++) { 
			/*=============================================
			=    Card Header (Class,Subtitle,Title,Content)
			= @components
				+ molecule/card-header
			=============================================*/
			get_component([ 'template' => 'molecule/card',
								'remove_tags' =>  ['img','h6'],
								'vars' => [
											"class" => 'container-fluid card text-center padding-2',
											"title" => 'Name/Postition',
											"content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sed odit inventore a quo mollitia adipisci ",
											"button" =>  get_component([
																'template' => 'atom/email-phone',
																'return_string' => true,
																'vars' => [
																	"title1" => 'Email',
																	"content1" => 'email@email.com',
																	"title2" => 'Phone',
																	"content2" => '1221321',
																	"href" => "javascript:void(0)"
																	]
															])
											]
								 ]);
		}
	 ?>
</section>


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
