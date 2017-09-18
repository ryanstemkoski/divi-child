<?PHP

	//ADD ENQUEUE SCRIPTs ACTION TO LOAD CHILD STYLESHEET 
	add_action( 'wp_enqueue_scripts', 'enqueue_child_stylesheet' );

	//FUNCTION TO LOAD CHILD STYLESHEET
	function enqueue_child_stylesheet() {
    	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
	}
	
?>