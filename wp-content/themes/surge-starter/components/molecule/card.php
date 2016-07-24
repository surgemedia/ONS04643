<article class="<?php echo $vars['class'] ?> card">
	<div class="wrapper">
		<?php if(isset($vars["image"]) && strlen($vars["image"]) > 0) { ?>
		<img class="img-responsive" src="<?php echo $vars["image"]?>" alt=""></img>
		<?php } ?>
	
		<hgroup>
			<h6><?php echo $vars["subtitle"]?></h6>
			<h1><?php echo $vars["title"]?></h1>
		</hgroup>
	
		<?php if(isset($vars["content"]) && strlen($vars["content"]) > 0) { ?>
		<?php echo apply_filters('the_content',  $vars["content"]); ?>
			<?php } ?>
	
			<?php 
			if(isset($vars["button"])){
			get_component([
									'template' => 'atom/button-list',
									'vars' => $vars['button']	
									]);
			};
			?>
	</div>
</article>