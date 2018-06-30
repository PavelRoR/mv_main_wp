<?php
/*
Template Name: Статьи
*/
?>
<?php get_header(); ?>
</div>
<h1 class="main_title">Статьи</h1>
<h2 class="main_subtitle">Когда человек не находит выхода из сложной ситуации, перепробовав множество официальных средств, он приходит к эзотерическим
    учениям. И, проявив упорство, обязательно получает результат...</h2>
</div>
</section>
<section id="articles_list">
    <div class="container">
        <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 article_col">
                <a class="lp_single" href="<?php the_permalink(); ?>">
                    <p class="lp_cat"></p>
                    <?php the_post_thumbnail('full','class=lp_thumbnail'); ?>
                    <div class="lp_about">
                        <h4 class="lp_title"><?php the_title(); ?></h4>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                    <div class="lp_footer">
                        <div class="arrow_more">&rarr;</div>
                        <div class="lp_seen">
                            <i class="fa fa-eye" aria-hidden="true"> </i>32</div>
                    </div>
                </a>
            </div>
        </div>
        <?php endwhile; ?>
        <ul class="articles_pagination">
            <?php
            // global $wp_query;
            $big = 999999999; // need an unlikely integer
            echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('active_pag') ),
            'total' => $wp_query->max_num_pages,
            'prev_text' => '<',
            'next_text' => '>'
            ) );
            ?>
        </ul>
        <?php else: ?>
        <!-- no posts found -->
        <?php endif; ?>
    </div>
</section>
<?php get_footer() ?>