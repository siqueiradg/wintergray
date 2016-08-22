<?php
	// Habilita o Imagem Destacada
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 200, 170, true ); // Sets the Post Main Thumbnails
	add_image_size( 'recent-thumbnails', 75, 50, true );

	function get_post_views($postID){

	    $count_key = 'post_views_count';
	    $count = get_post_meta($postID, $count_key, true);

	    if($count==''){
	        delete_post_meta($postID, $count_key);
	        add_post_meta($postID, $count_key, '0');
	        return "0 Visualizaçõe";
	    }
	    return $count.' Visualizações';
	}

	function popularPosts() {
		$rPosts = new WP_Query( array( 'posts_per_page' => 5, 'meta_key' => 'post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
			echo '<h2 style="text-transform: uppercase; color: rgb(126, 126, 126); margin:0; font-size: 18px;"><i class="tiny material-icons ">web</i> Postagens Populares</h2>';
			while ($rPosts->have_posts()) : $rPosts->the_post(); ?>
				<div class="widget">
					<ul class="collection">
						<li class="collection-item avatar">
							<a href="<?php the_permalink();?>"><img src="<?php miniatura(); ?>" width="75" class="circle"></a>
							<span class="title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></span>
						</li>
					</ul>
				</div>	
			<?php endwhile; 
		wp_reset_query();
	}

	/*Remove o Lixo*/
	remove_action('wp_head', 'wp_generator');
    show_admin_bar( false );
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


	//LIMITAR OS CARACTERES DO THE_EXCERPT() NO WORDPRESS
	function excerpt($limit) {
	    $excerpt = explode(' ', get_the_excerpt(), $limit);
	    if (count($excerpt)>=$limit) {
	        array_pop($excerpt);
	        $excerpt = implode(" ",$excerpt).'...';
	    }else{
	        $excerpt = implode(" ",$excerpt);
	    }
	    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	    return $excerpt;
	}

	function miniatura(){
    	$mini = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
    	echo $mini;
	}

	//PAGENAVI
	function wp_corenavi(){
	    global $wp_query, $wp_rewrite;
	    $pages = '';
	    $max   = $wp_query->max_num_pages;

	    if (!$current = get_query_var('paged'))
	        $current = 1;
	    $a['base']      = str_replace(999999999, '%#%', get_pagenum_link(999999999));
	    $a['total']     = $max;
	    $a['current']   = $current;

	    $total          = 1;
	    $a['mid_size']  = 4;
	    $a['end_size']  = 1;
	    $a['prev_text'] = '&laquo;';
	    $a['next_text'] = '&raquo;';
	    if ($total == 1 && $max > 1)
	    echo $pages . paginate_links($a);
	}

?>