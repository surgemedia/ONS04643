 <?php 
 	/*============================================
	=            Equipment - Post Type           =
	============================================*/
	$equipment = new CPT([
	    'post_type_name' => 'equipment',
	    'plural' => 'Equipment',
	]);
	$equipment->menu_icon("dashicons-hammer");
	//Define post type
	$equipment->register_taxonomy([
	    'taxonomy_name' => 'equipment',
	    'plural' => 'Equipment',
	]);
	/*============================================
	=            Services - Post Type            =
	============================================*/
	$services = new CPT('service');
	$services->menu_icon("dashicons-info");
	//add tax to post type
	$services->register_taxonomy('equipment');
	//Define post type
	$services->register_taxonomy([
	    'taxonomy_name' => 'industry',
	    'plural' => 'Industries',
	    'singular' => 'Industry',
	]);
 	/*==============================================
 	=            Case Study - Post Type            =
 	==============================================*/
	$case_study = new CPT([
    'post_type_name' => 'case-study',
    'plural' => 'Case Studies',
	]);
	$case_study->menu_icon("dashicons-analytics");
	//add tax to post type
	$case_study->register_taxonomy('industry');
?>