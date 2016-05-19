<?php
/**
 * Template Name: TID05
 */
?>

<?php while (have_posts()) : the_post(); ?>


<section class="border-bottom">
	<img class="top-banner" src="http://onsite.surgehost.com.au/i.php?image=https://unsplash.it/1920/1080?random&w=1920&h=1080&c=true&q=90" alt="">

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
<section id="leadership" class=" padding-6 grey-light-bg border-bottom">
<div class="container-fluid">
		<?php
			/*=============================================
			=    Card Header (Class,Subtitle,Title,Content)
			= @components
				+ molecule/card-header
			=============================================*/
			get_component([ 'template' => 'molecule/card',
								'remove_tags' =>  ['img','h6'],
								'vars' => [
											"class" => 'container-fluid card text-center padding-2 ',
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
											"class" => 'col-md-3 card text-center people',
											"title" => 'Name Last',
											"image" => "http://onsite.surgehost.com.au/i.php?image=https://unsplash.it/500/500?image=1062&w=500&h=500&c=true&q=50",
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
<section id="" class=" padding-6 grey-light-bg">
<div class="container-fluid">
		<?php
			/*=============================================
			=    Card Header (Class,Subtitle,Title,Content)
			= @components
				+ molecule/card-header
			=============================================*/
			get_component([ 'template' => 'molecule/card',
								'remove_tags' =>  ['img','h6'],
								'vars' => [
											"class" => 'container-fluid card text-center padding-2 title',
											"title" => 'Our people',
											"content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sed odit inventore a quo mollitia adipisci "
											]
								 ]);
	 ?>
	 <?php for ($i=0; $i < 2; $i++) { 
	 		/*=============================================
			=    Card people (Class,Subtitle,Title,Content)
			= @components
				+ molecule/card-header
			=============================================*/
			get_component([ 'template' => 'molecule/card',
								'remove_tags' =>  ['h6'],
								'vars' => [
											"class" => 'col-md-6 card people-category para',
											"title" => 'Onsite specialist',
											"image" => "http://onsite.surgehost.com.au/i.php?image=https://unsplash.it/700/500?image=1031&w=700&h=700&c=true&q=100",
											"content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat",
											"button" =>  get_component([
																'template' => 'atom/link',
																'return_string' => true,
																'vars' => [
																	"class" => 'button text-uppercase collapsed',
																	"text" => 'Read More',
																	"url" => "#reveal".$i,
																	"toggle" => 'role="button" data-toggle="collapse"'
																	]
															])
											]
								 ]);
	 } ?>

	 </div>
</section>
<section id="reveal0" class="reveal-panel grey-bg collapse">
	<span class="tri"></span>
	<a class="icon-close" role="button" data-toggle="collapse" href="#reveal0" ></a>
	<?php for ($i=0; $i < 2; $i++) { 
			/*=============================================
			=    Card Header (Class,Subtitle,Title,Content)
			= @components
				+ molecule/card-header
			=============================================*/
			get_component([ 'template' => 'molecule/card',
								'remove_tags' =>  ['img','h6'],
								'vars' => [
											"class" => 'container card text-center padding-2 position',
											"title" => 'Name/Postition',
											"content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat",
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
<section id="reveal1" class="reveal-panel grey-bg collapse">
	<span class="tri"></span>
	<a class="icon-close" role="button" data-toggle="collapse" href="#reveal1" ></a>
	<?php for ($i=0; $i < 5; $i++) { 
			/*=============================================
			=    Card Header (Class,Subtitle,Title,Content)
			= @components
				+ molecule/card-header
			=============================================*/
			get_component([ 'template' => 'molecule/card',
								'remove_tags' =>  ['img','h6'],
								'vars' => [
											"class" => 'container card text-center padding-2 position',
											"title" => 'Name/Postition',
											"content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat",
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
														"class" => 'contact-us container-fluid border-bottom border-top',
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
														"class" => 'gears container-fluid  text-center border-bottom padding-6',
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
														"class" => 'locator grey-light-bg text-center',
 														"description" => 'Find our rental and service locations throughout Australia.'

 														]
										]);
		 ?>




<?php endwhile; ?>
