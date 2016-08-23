<?php get_header(); ?>

    <section>
        <div class="container">
            <h2 class="section-title">
                    <span><i class="fa fa-code" aria-hidden="true"></i> Meus Trabalhos</span>
            </h2>
             <div class="row">
              <?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array( 'post_type' => 'trabalhos', 
									            'order' => 'date',
												'posts_per_page' => 9,
												'paged' => $paged
											);   						                 
					$workArgs = new WP_Query( $args );
				?>

		        <?php while ( $workArgs->have_posts() ) : $workArgs->the_post();?> 
                <div class="col s12 l4 m4">
                    <div class="card">
                        <div class="works-post-container">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <img src="<?php miniatura(); ?>" alt="<?php the_title(); ?>" class="works-post-image col s12"></a>
                            <div class="both"></div>
                        </div>
                    </div>
                </div>

                <?php endwhile; ?>
                <?php  
					wp_reset_postdata();
				?>
		
                <div class="both"></div>
                <div class="row">
                    <div class="pagination center-align">
						<?php
							wp_corenavi();
						?>
					</div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>