<?php 

 add_action( 'init', 'create_post_type_education' );
    function create_post_type_education() {
        register_post_type( 'education', 
            array(
                'labels' => array(
                    'name' => __( 'Training' ),
                    'singular_name' => __( 'Training' )
                    ),
				'public'          => true,
				'show_ui'         => true,
				'capability_type' => post,
				'hierarchal'      => true,
				'has_archive'     => true, 
				'supports'        => array('title', 'editor'),
				'rewrite'         => array('slug' => 'education'), 
                )
            );
    }
		
	// Register type. 
	// register_post_type('education Manager', $args);
	
    if(function_exists('education_manager_add_meta'))
	add_action("admin_init", "education_manager_add_meta");
		function education_manager_add_meta() {
			add_meta_box("education-meta", "Education Options", "education_manager_meta_options", "education", "normal", "high");
		}

	function education_manager_meta_options() {
		global $post;
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
			return $post_id;
		$custom      = get_post_custom($post->ID);  
		$date        = $custom["date"][0];           
		$institution = $custom["institution"][0];
		$location    = $custom["location"][0];     
		$achievement = $custom["achievement"][0];      
?>

<style type="text/css">
	<?php include('custom_post.css'); ?>
</style>
		
<div class="custom_post_admin">

<div><label>Date:</label><input class="small" name="date" value="<?php echo $date; ?>" /></div>
<div><label>Institution:</label><input name="institution" value="<?php echo $institution; ?>" /></div>
<div><label>Location:</label><input name="location" value="<?php echo $location; ?>" /></div>
<div><label>Achievement:</label><input name="achievement" value="<?php echo $achievement; ?>" /></div>

<?php
}

add_action('save_post', 'education_manager_save_extras');
	function education_manager_save_extras() {
		global $post;
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
			return $post_id;
		}else{
			update_post_meta($post->ID, "date", $_POST["date"]);
			update_post_meta($post->ID, "institution", $_POST["institution"]);
			update_post_meta($post->ID, "location", $_POST["location"]);
			update_post_meta($post->ID, "achievement", $_POST["achievement"]);
		}
	}

?>