<?php get_header(); ?>
    <article>
        <div class="row">
            <div class="container">
                <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); 
                    $link_site = get_post_meta($post->ID, 'link', true);
                ?>
                <h2 class="titulo-post"><?php the_title(); get_post_views(get_the_ID());?></h2>
                <div class="row">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="category-post-container">
                                <div class="row">
                                    <div class="col s12 l5 m5">
                                        <img src="<?php miniatura(); ?>" alt="<?php the_title(); ?>" class="work-post-image col s12">
                                    </div>
                                    <div class="col s12 l7 m7">
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                    <div class="both"></div>
                                    <div class="card-action">
                                        <?php the_content(); ?>
                                    </div>
                                </div>

                                <div class="row center">
                                    <a href="<?php echo $link_site; ?>" target="_blank" title="Visitar Site" id="download-button" class="btn waves-effect white-text waves-light blue accent-2">
                                        <span>Visitar Site</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?> 
            </div>
        </div>
    </article>

<?php get_footer(); ?>