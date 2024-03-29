<?php
/**
 * Template Name: Section Builder
 */
?>

<?php //debug(get_field('layout')); 

$layout_builder = get_field('layout'); 


for ($section_count =0; $section_count  < sizeof($layout_builder); $section_count ++) {
	//Start Class
	$section = new LayoutBuilder;
 	$section->setup($layout_builder[$section_count]['section']);
 ?>
 <?php 
/*===============================
=            Section            =
===============================*/
?>
<section id="section<?php echo $section_count; ?>" class="row">
	<?php
	/*===========================
	=            ROW            =
	===========================*/
	
	?>
	<?php for ($row_count =0; $row_count  < sizeof($section->rows); $row_count ++) {  ?>
		<div id="row<?php echo $section_count; ?>"  class="<?php echo $section->meta['class']; ?>">
					<div class="<?php echo $section->bs_class[1] ?>">
					<?php	
					/*===============================
					=            Element            =
					===============================*/
					get_component([ 'template' => 'organism/'.$section->rows[$row_count]['acf_fc_layout'],
													'vars' => $section->rows[$row_count]
														 ]);
														 ?>
					</div>
				<?php	//}
			 ?>
			<?php // } ?>
		</div>
	<?php } ?>

</section>
<?php } ?>
