<?php
/**
 * Template Name: TID08
 */
?>

<?php while (have_posts()) : the_post(); ?>
<section class="">
	<img class="top-banner" src="http://onsite.surgehost.com.au/i.php?image=https://unsplash.it/1920/1080?random&w=1920&h=1080&c=true&q=100" alt="">
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
														"title" => "SPECIALISTS FOR EVERY GEAR IN <br>EVERY REGION OF AUSTRALIA"
														]
											 ]);
	 ?>
</section>
<div class="border-bottom">
<section class="container">
	<?php for ($i=0; $i < 2; $i++) { ?>
		<?php
			/*=============================================
			= Card of Category
			= (Class,Subtitle,Title,image,lists,sidebar)
			= @components
				+ molecule/card-header
			=============================================*/
			get_component([ 'template' => 'molecule/card-category',
											'vars' => [
														"class" => 'category card row padding-4',
														"subtitle" => "POWER & LIGHTING", //cat
														"title" => "LIGHTING TOWERS", //subcat
														"image" => "https://unsplash.it/1920/1080/?random",
														"list1_title" => "",
														"list1_repeater" => "",
														"list2_title" => "",
														"list2_repeater" => "",
														"sidebar" => get_component([
																		'template' => 'molecule/card-factsheet',
																		'return_string' => true,
																		'vars' => []
																]),
														"button" => get_component([
																		'template' => 'atom/link',
																		'return_string' => true,
																		'vars' => [
																					"class" => 'button text-uppercase pull-right col-md-4 text-center',
																					"toggle" => 'role="button" onclick="enterPostcode()"',
																					"text" => 'Download Fact Sheet',
																					"url" => "javascript:void(0)"
																					]
																])




														]
											 ]);
	 ?>
		<?php } ?>
</section>
</div>

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
