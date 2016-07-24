<div class="form <?php echo $vars['class'] ?>">
		<hgroup>
			<h6><?php echo $vars["subtitle"]?></h6>
			<h1><?php echo $vars["title"]?></h1>
		</hgroup>
		<?php echo apply_filters('the_content',  $vars["content"]); ?>
    <?php displayGravityForm($vars["form"]) ?>
</div>