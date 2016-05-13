<article class="<?php echo $vars['class'] ?>">
	<p><?php echo $vars['description']; ?></p>

	<?php
			get_component([
								'template' => 'atom/link',
								'vars' => [
											"class" => 'button text-uppercase',
											"text" => 'Read More',
											"url" => ""
											]
							]);
	?>

	<?php
			get_component([
								'template' => 'atom/link',
								'vars' => [
											"class" => 'button text-uppercase',
											"text" => 'Read More',
											"url" => ""
											]
							]);
	?>
	<?php
			get_component([
								'template' => 'atom/link',
								'vars' => [
											"class" => 'button text-uppercase',
											"text" => 'Read More',
											"url" => ""
											]
							]);
	?>
	<div id="map-canvas"></div>

</article>