<?php 
		$image = (!is_default($vars['background']))?$vars['background']:get_field('default_image','option');

 ?>

<section id="contact-us" class="<?php echo $vars['class']?>" style="background-image: url('<?php echo $image;?>');">
		<div class="text-center">
		<?php displayGravityForm(get_field("contact_us_form","option"),false,false,false,true,0); ?>
		</div>
</section>