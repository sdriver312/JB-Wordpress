<?php 

 add_action( 'init', 'create_post_type_history' );
    function create_post_type_history() {
        register_post_type( 'history', 
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
				'supports'        => array('title', 'editor'),
				'rewrite'         => array('slug' => 'history'), 
                )
            );
    }
		
	// Register type. 
	// register_post_type('history Manager', $args);
	
    if(function_exists('history_manager_add_meta'))
	add_action("admin_init", "history_manager_add_meta");
		function history_manager_add_meta() {
			add_meta_box("history-meta", "Work History Options", "history_manager_meta_options", "history", "normal", "high");
		}

	function history_manager_meta_options() {
		global $post;
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
			return $post_id;
		$custom      = get_post_custom($post->ID);
		$dates       = $custom["dates"][0];
		$position    = $custom["position"][0];
		$website     = $custom["website"][0];
?>

<style type="text/css">
	<?php include('custom_post.css'); ?>
</style>
		
<div class="custom_post_admin">

<div><label>Dates:</label><input class="small" name="dates" value="<?php echo $dates; ?>" /></div>
<div><label>Position:</label><input name="position" value="<?php echo $position; ?>" /></div>
<div><label>Website:</label><input name="website" value="<?php echo $website; ?>" /></div>

<?php
}

add_action('save_post', 'history_manager_save_extras');
	function history_manager_save_extras() {
		global $post;
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
			return $post_id;
		}else{
			update_post_meta($post->ID, "dates", $_POST["dates"]);
			update_post_meta($post->ID, "position", $_POST["position"]);
			update_post_meta($post->ID, "website", $_POST["website"]);
		}
	}

?>