<section class="<?php echo $vars['class'] ?>">
	<img class="top-banner" src="http://localhost/ONS04643/wp-content/uploads/2016/05/any1-1.jpg" alt="">

	<?php
			/*=============================================
			=    Card Header (Class,Subtitle,Title,Content)
			= @components
				+ molecule/card-header
			=============================================*/
			get_component([ 'template' => 'molecule/card',
											'remove_tags' =>  ['img'],
											'vars' => [
														"class" => 'card container padding-4',
														"subtitle" => "Onsite for the mining industry",
														"title" => "One stop power shop",
														"content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sed odit inventore a quo mollitia adipisci est placeat omnis earum quisquam minus sit iusto, accusamus et facere. Eligendi distinctio neque delectus natus, doloribus animi velit pariatur, minus vero. Dolores quis asperiores sequi maiores, doloribus, cum quia reprehenderit accusantium accusamus at.",
														]
											 ]);
	 ?>

</section>