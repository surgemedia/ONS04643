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
	/*==============================================
 	=            Location  - Post Type            =
 	==============================================*/
	$location = new CPT([
    'post_type_name' => 'location',
    'supports' => array('title')
	]);

	$location->menu_icon("dashicons-location-alt");
	$location->register_taxonomy('state');
	/*==============================================
 	=            People - Post Type            =
 	==============================================*/
	$people = new CPT([
    'post_type_name' => 'staff',
    'plural' => 'Staff',
	]);

	$people->menu_icon("dashicons-businessman");
	$people->register_taxonomy('job');





	/*=======================================================
	=            Remove Supports from Post Types            =
	=======================================================*/
	function remove_supports(){
		remove_post_type_support( 'location', 'editor' );	
	}
	add_action( 'init', 'remove_supports' );

?>