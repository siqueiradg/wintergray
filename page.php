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
                                        <?php the_content(); ?>
                                    </div>
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