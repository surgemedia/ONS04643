<ul id="icon-nav">
	<?php for ($vars['i']=0; $vars['i'] < sizeof($vars['repeater']); $vars['i']++) { ?>
		<li><a href="<?php echo $vars['repeater'][$vars['i']]['link']; ?>"><i class="<?php echo $vars['repeater'][$vars['i']]['icon']; ?>"></i></a></li>
	<?php } ?>
</ul>