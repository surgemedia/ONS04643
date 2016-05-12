<?php
		$image = (!is_default($vars['background']))?$vars['background']:get_field('default_image','option');

 ?>
<section id="contact-us" class="<?php echo $vars['class']?>" style="background-image: url('<?php echo $image;?>');">
	<div class="col-md-6 pull-right">
		<div class="box">
			<h3 class="text-uppercase"><?php echo get_field('title_form','option') ?></h3>
			<h1 class="text-uppercase">Phone <?php echo get_field('short_phone','option') ?></h1>
			<p><?php echo get_field('description_form','option') ?></p>
			<?php displayGravityForm(get_field("contact_us_form","option"),false,false,false,true,0); ?>
		</div>
	</div>
</section>