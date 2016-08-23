<?php get_header(); ?>
    <section>
        <div class="container">
            <h2 class="section-title">
                    <span>Resultados da Busca:</span>
            </h2>
            <?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
             <div class="row">
                <div class="container-fluid">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2 class="titulo-post-category"><?php the_title(); ?></h2></a>
                    <div class="card">
                        <div class="category-post-container">
                            <div class="row">
                                <div class="col s12 l3 m3">
                                    <img src="<?php miniatura(); ?>" alt="<?php the_title(); ?>" class="category-post-image col s12">
                                </div>
                                <div class="col s12 l9 m9">
                                    <?php echo excerpt('45'); ?> 
                                </div>
                                <div class="both"></div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
             <?php endwhile; ?>
			 <?php else : ?>
			 <div class="row">
                <div class="container-fluid">
					<h3 style="font-size:18px;"><?php _e( 'Pesquisa não encontrada...' ) ?></h3>
					<p><?php _e( 'Mas não desanime, talvez você possa gostar de...' ); ?></p>
					<div class="row">
						<?php echo popularPosts(); ?>
					</div>
				</div>
			</div>
			<?php endif; ?> 
            <div class="row">
                <div class="pagination center-align">
					<?php wp_corenavi(); ?>
				</div>
            </div>

        </div><!--fecha container-->
    </section>

<?php get_footer(); ?>



						
