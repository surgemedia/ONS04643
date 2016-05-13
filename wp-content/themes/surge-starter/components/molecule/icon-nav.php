<ul id="icon-nav">
	<?php for ($vars['i']=0; $vars['i'] < sizeof($vars['repeater']); $vars['i']++) { ?>
		<li><a href="<?php echo $vars['repeater'][$vars['i']]['link']; ?>"><i class="<?php echo $vars['repeater'][$vars['i']]['icon']; ?>"></i>
		<small><?php echo $vars['repeater'][$vars['i']]['name']; ?></small>
		</a></li>
	<?php } ?>
</ul>
<div id="icon-nav-cta" data-cta-target="#icon-nav">
	<i class="<?php echo $vars['repeater'][0]['icon']; ?>"></i>
		<small>Industries</small>
</div>