<article class="<?php echo $vars['class'] ?>">
<div id="map-buttons "class="">

<div class="container-fluid">
	<?php
			get_component([
								'template' => 'atom/link',
								'vars' => [
											"class" => 'button text-uppercase col-md-4',
											"toggle" => 'onclick="getLocation()"',
											"text" => 'Use My Current Location',
											"url" => "javascript:void(0)"
											]
							]);

	?>

	<?php
			get_component([
								'template' => 'atom/link',
								'vars' => [
											"class" => 'button text-uppercase col-md-4',
											"toggle" => 'role="button" onclick="enterPostcode()"',
											"text" => 'Enter Postcode or Suburb',
											"url" => "javascript:void(0)"
											]
							]);
	?>
	<?php
			get_component([
								'template' => 'atom/link',
								'vars' => [
											"class" => 'button text-uppercase col-md-4',
											"toggle" => 'role="button" onclick="browseState()"',
											"text" => 'Browse by State',
											"url" => "javascript:void(0)"
											]
							]);
	?>

		
</div>
<div id="bottom-bar" class="collapse">
<div class="input">
	<input id="target" value=" " type="text" name="search" placeholder="Enter a postcode or suburb">
	<span href="" data-state="QLD">QLD</span>
	<span href="" data-state="NSW">NSW</span>
</div>
</div>

	<div id="map-canvas" style="height:525px"></div>

<?php 
	// google map script
	get_component(['template' => 'molecule/map-script']);
 ?>


	</div>
</article>