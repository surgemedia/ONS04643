<section class="jumbotron border-bottom container-fluid" style="background-image:url('<?php echo $vars['image']; ?>')">
		<div class="title col-md-7 col-md-offset-2"><h1 class="col-md-11">“ <?php echo $vars["title"]; ?>	”</h1>
		<?php echo $vars["button"] ?>
		</div>
		<div class="col-md-3">
		<?php
		foreach (get_field('case_studies') as $id) {
			//debug(wp_get_object_terms( $id, 'industry' ));
			get_component([ 'template' => 'molecule/card-overlay',
											// 'remove_tags' =>  ['i'],
											'vars' => [
														"class" => 'card overlay',
														"image" => get_field('main_image',$id),
														"subtitle" => wp_get_object_terms( $id, 'industry' )[0]->name.' Case Study',
														"title" => get_the_title($id),
														]
											 ]);
		}
		?>
		
		</div>
	</section>