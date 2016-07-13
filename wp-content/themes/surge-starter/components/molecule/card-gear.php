<?php //debug($vars); 
	$vars["dropdowncode"] = $vars["category_name"].rand();
 ?>
<article class="<?php echo $vars['class'] ?>" >
	<div class="background" style="background-image:url('<?php echo $vars["image"]?>')">

		
		<?php if($vars['childern'] == false ){ ?>
		<a class="button" href="<?php echo $vars["url"] ?>">
			<?php echo $vars["category_name"] ?>
		</a>
	<?php } else { ?>
		<div class="dropdown">
		  <a id="<?php echo $vars["dropdowncode"]; ?>" class="button" data-target="#" href="<?php echo $vars["url"] ?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		   <?php echo $vars["category_name"] ?>
		    <span class="caret"></span>
		  </a>

		  <ul class="dropdown-menu" aria-labelledby="<?php echo $vars["dropdowncode"]; ?>">
		    <?php for ($vars['i']=0; $vars['i'] < sizeof($vars['childern']); $vars['i']++) {
		    	$vars['termObj'] = get_term($vars['childern'][$vars['i']]);
		    	//debug($vars['termObj']);

		    	?>
		    	<li><a href="<?php echo $vars['url'].'#'.$vars['termObj']->slug; ?>"><?php echo $vars['termObj']->name ?></a></li>
		    	<?php
		    } ?>
		  </ul>
		</div>

	<?php } ?>
	</div>
</article>