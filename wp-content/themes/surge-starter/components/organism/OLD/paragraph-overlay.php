<?php
		//$image = (!is_default($vars['background']))?$vars['background']:get_field('default_image','option');
		$element_file = $vars['element'][0]['acf_fc_layout']; //get file
	unset($vars['element'][0]['acf_fc_layout']); // remove file from array leveling only vars
	$vars['element'][0]['class'] = 'col-md-12'; //because i know this from the file name
	$element_vars = $vars['element'][0];
	get_component([
	 'template' => 'molecule/'.$element_file,
	 'vars' => $element_vars
			]);
	unset($element_file);
	unset($element_vars);

 ?>
<section class="paragraph-overlay <?php echo $vars['class']?>" style="background-image: url('<?php echo $image;?>');">
	<div class="col-md-6 pull-right">
		<div class="box">
			<h3 class="text-uppercase"><?php echo $vars['subtitle'] ?></h3>
			<img class="img-responsive" src="<?php echo $vars['logo'] ?>" alt=""></img>
			<h1 class="text-uppercase">Phone <?php echo $vars['title'] ?></h1>
			<p><?php echo $vars['description'] ?></p>
			<?php echo $vars["atom"]; ?>
		</div>
	</div>
</section>