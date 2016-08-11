<?php 

	add_action('init', 'experience_manager_register');
		function experience_mananger_register() {
			// Arguments to create post type
			$args = array(
				'label' => __('Experience Manager'),
				'singular_label' => __('Experience Manager'),
				'public' =>	true,
				'show_ui' => true,
				'capability_type' => 'post',
				'hierarchical' => false,
				'has_archive' => false,
				'supports' => array('title', 'editor'),
				'rewrite' => array('experience', 'with_front' => false), );
		}
		

	// Register type and taxonomy for type. 
	register_post_type('experience', $args);

	add_action("admin_init", "experience_manager_add_meta");
		function experience_manager_add_meta() {
			add_meta_box("experience-meta", "Experience Options", "experience_manager_meta_options", "experience", "normal", "high");
		}

	function experience_manager_meta_options() {
		global $post;
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
			return $post_id;
	}

?>

<style type="text/css">
	<?php include('experience-manager.css'); ?>
</style>
		
<div class="experience_manager_extras">

<?php 
	$website= ($website =="") ? "http://" : $website;
?>

<div><label>Dates:</label><input name="dates" value="Month and Year" /></div>
<div><label>Position:</label><input name="position" /></div>
<div><label>Website:</label><input name="website" value="<?php echo $website; ?>" /></div>
<div><label>Summary:</label><input name="summary" /></div>
