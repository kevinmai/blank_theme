<div id="cities-wrapper">
	<div id="cities-banner">
		<?php 
			global $wp_query;
			$post_id = $wp_query->post->ID;
			$post = get_post($post_id);
			$slug = $post->post_name;
		?>
		<img alt="<?php echo the_title() ; ?> service area" src="<?php echo get_bloginfo("template_directory") ; ?>/images/<?php echo $slug ; ?>.png">
	</div>
</div>