<?php get_header(); ?>
    <section id="blog">
        <div class="row">
            <div class="container-fluid">
                <h2 class="section-title">
                    <span><i class="fa fa-wordpress" aria-hidden="true"></i> Blog</span>
                </h2>
                <?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
                <div class="col s12 l4 m4">
                    <div class="post-home">
                        <img class="responsive-img" src="<?php miniatura(); ?>">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2><?php the_title(); ?></h2></a>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="row center">
            <a href="<?php echo site_url(); ?>/blog" id="download-button" class="btn waves-effect white-text waves-light blue accent-2">
                <span>Posts mais antigos</span>
             </a>
        </div>
    </section>
    

    <section id="trabalhos">
        <div class="row">
            <div class="container-fluid">
                <h2 class="section-title">
                    <span><i class="fa fa-code" aria-hidden="true"></i> Últimos trabalhos</span>
                </h2>
                <div class="col s12 l3 m3">
                    <div class="post-home">
                        <a href="#" title="Trabalho 1"><img class="responsive-img" src="http://emerald.sekizgen.net/wp-content/uploads/2015/07/emerald-98-1024x683.jpg"></a>
                    </div>
                </div>
                <div class="col s12 l3 m3">
                    <div class="post-home">
                        <img class="responsive-img" src="http://emerald.sekizgen.net/wp-content/uploads/2015/07/emerald-98-1024x683.jpg">
                    </div>
                </div>
                <div class="col s12 l3 m3">
                    <div class="post-home">
                        <img class="responsive-img" src="http://emerald.sekizgen.net/wp-content/uploads/2015/07/emerald-98-1024x683.jpg">
                    </div>
                </div>
                <div class="col s12 l3 m3">
                    <div class="post-home">
                        <img class="responsive-img" src="http://emerald.sekizgen.net/wp-content/uploads/2015/07/emerald-98-1024x683.jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="row center">
            <a href="<?php echo site_url(); ?>/trabalhos" id="download-button" class="btn waves-effect white-text waves-light blue accent-2">
                <span>Ver mais trabalhos</span>
             </a>
        </div>
    </section>


    <?php get_footer(); ?>