<?php get_header(); ?>
    <article>
        <div class="row">
            <div class="container">
                <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                <h2 class="titulo-post"><?php the_title(); get_post_views(get_the_ID());?></h2>
                <div class="postagem">
                    <div class="imagem-destaque">
                        <img class="responsive-img" src="<?php miniatura(); ?>">
                    </div>
                    
                    <div class="info-post">
                        <span class="col s12 m3 l3" style="padding:0;"><strong>Data:</strong> 12/02/2018</span>
                        <span class="col s12 m9 l9" style="padding:0;"><strong>Autor:</strong> <?php the_author(); ?></span>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="conteudo-post">
                       <?php the_content(); ?>


                        <span class="entry-post-footer">
								<!-- TAGS DO POST -->
								<div class="col s12 m6 l6" style="padding: 10px 0;">
								<span class="entry-tags">
								    <?php the_tags( '<span class="chip" style="margin: 2px 5px;">', '</span> <span class="chip" style="margin: 2px 5px;">', '</span>' ); ?>
                                </span>
								</div>
								<!-- BOTOES SOCIAIS DO POST -->
								<div class="col s12 m6 l6" style="text-align: right; padding: 10px 0;">
								<span class="entry-social">
									<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&title=<?php the_title();?>" onclick="window.open('http://www.facebook.com/share.php?u=<?php the_permalink(); ?>', 'newwindow', 'width=550, height=300'); return false;"><span class="social-buttons facebook"><i class="fa fa-facebook fa-2"></i></span></a>

									<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>', 'newwindow', 'width=550, height=300'); return false;"><span class="social-buttons googleplus"><i class="fa fa-google-plus fa-2"></i></span></a>

									<a href="http://twitter.com/intent/tweet?status=<?php the_title();?>+<?php the_permalink(); ?>" onclick="window.open('http://twitter.com/intent/tweet?status=<?php the_title();?>+<?php the_permalink(); ?>', 'newwindow', 'width=550, height=300'); return false;"><span class="social-buttons twitter"><i class="fa fa-twitter fa-2"></i></span></a>

									<a href="http://pinterest.com/pin/create/bookmarklet/?media=<?php miniatura(); ?>&url=<?php the_permalink(); ?>&is_video=false&description=<?php the_title();?>" onclick="window.open('http://pinterest.com/pin/create/bookmarklet/?media=<?php miniatura(); ?>&url=<?php the_permalink(); ?>&is_video=false&description=<?php the_title();?>', 'newwindow', 'width=550, height=300'); return false;"><span class="social-buttons pinterest"><i class="fa fa-pinterest fa-2"></i></span></a>
								</span>
								</div>
							</span>
                            <div style="clear:both;"></div>
					</div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?> 
            </div>
        </div>
    </article>

    <section>
        <h3 class="leia-tambem center">Leia Também</h3>
        <div class="container">
            <div class="row">
                <?php echo popularPosts(); ?>
            </div>
        </div>
    </section>

    <section>
		<div class="container">
            <h3 class="leia-tambem center">Deixe um Comentário</h3>
            <div class="postagem">
                <?php comments_template(); ?>
            </div>
        </div>
	</section>

<?php get_footer(); ?>