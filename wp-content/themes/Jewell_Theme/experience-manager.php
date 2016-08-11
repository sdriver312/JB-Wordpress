<?php 

 add_action( 'init', 'create_post_type_experience' );
    function create_post_type_experience() {
        register_post_type( 'experience', 
            array(
                'labels' => array(
                    'name' => __( 'Experience' ),
                    'singular_name' => __( 'Experience' )
                    ),
				'public'          => true,
				'show_ui'         => true,
				'capability_type' => post,
				'hierarchal'      => true,
				'has_archive'     => true, 
				'supports'        => array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail'),
				'rewrite'         => array('slug' => 'work-history'), 
                )
            );
    }
		
	// Register type. 
	// register_post_type('Experience Manager', $args);
	
    if(function_exists('experience_manager_add_meta'))
	add_action("admin_init", "experience_manager_add_meta");
		function experience_manager_add_meta() {
			add_meta_box("experience-meta", "Experience Options", "experience_manager_meta_options", "experience", "normal", "high");
		}

	function experience_manager_meta_options() {
		global $post;
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
			return $post_id;
		$custom      = get_post_custom($post->ID);
		$dates       = $custom["dates"][0];
		$position    = $custom["position"][0];
		$website     = $custom["website"][0];
		$description = $custom["description"][0];
?>

<style type="text/css">
	<?php include('experience-manager.css'); ?>
</style>
		
<div class="experience_manager_extras">

<?php 
	$website= ($website =="") ? "http://" : $website;
?>

<div><label>Dates:</label><input class="small" name="dates" value="ex. Jan. 2012 - Dec. 2012" onFocus="this.value=''" /></div>
<div><label>Position:</label><input name="position" value="" /></div>
<div><label>Website:</label><input name="website" value="<?php echo $website; ?>" /></div>
<div><label>Description:</label><textarea name="description"></textarea></div>

<?php
}

add_action('save_post', 'experience_manager_save_extras');
	function experience_manager_save_extras() {
		global $post;
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
			return $post_id;
		}else{
			update_post_meta($post->ID, "dates", $_POST["dates"]);
			update_post_meta($post->ID, "position", $_POST["position"]);
			update_post_meta($post->ID, "website", $_POST["website"]);
			update_post_meta($post->ID, "description", $_POST["description"]);
		}
	}

?>