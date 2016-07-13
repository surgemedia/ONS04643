<?php //debug($vars);  ?>
<article id="<?php echo $vars['id'] ?>" class="<?php echo $vars['class'] ?>" >
<hgroup class="container-fluid">
	<h6><?php echo $vars['subtitle'] ?></h6>
	<h1><?php echo $vars['title'] ?></h1>
</hgroup>
<div class="col-md-8">
<?php 
				//debug($vars);
 ?>
<img class="img-responsive" src="<?php echo $vars['image']; ?>" alt="<?php echo $vars['title'] ?>">
<div class="col-md-6">
	<h3>AVAILABLE GEAR:</h3>
	<ul>
		<?php 
			foreach ($vars['term_chidlen'] as $list) { ?>
			<li>
				<p><?php echo $list->post_title;?></p>
				</li>
				<?php
			}
		 ?>
	</ul>
</div>
<div class="col-md-6">
	<h3>QUICK SPECS:</h3>
	<ul></ul>
</div>
</div>
<?php 

	   get_component([ 'template' => 'molecule/card',
                           
                            'vars' => [
                                  "class" => 'col-md-4 side-card',
                                  "title" => $vars['side_title'],
                                  "subtitle" => $vars['side_subtitle'],
                                  "image" => $vars['side_image'],
                                  "content" => $vars['side_content'],
                                  "button" => $vars['side_button']
                                  ]
                             ]);
 ?>
</article>