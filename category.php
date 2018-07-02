<?php
/*
Template Name: Статьи
*/
?>
<?php get_header(); ?>
<h1 class="main_title">Статьи</h1>
<h2 class="main_subtitle">Когда человек не находит выхода из сложной ситуации, перепробовав множество официальных средств, он приходит к эзотерическим
    учениям. И, проявив упорство, обязательно получает результат...</h2>
</div>
</section>
<section id="articles_list">
    <div class="container">
        <div class="row">
		<?php
                    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

                    $the_query = new WP_Query( array(
                        'posts_per_page' => 9,
                        'paged'          => $paged,
                    ) );
                    while( $the_query->have_posts() ){
                        $the_query->the_post(); ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 article_col">
                <a class="lp_single" href="<?php the_permalink(); ?>">
                    <p class="lp_cat"><?php the_category() ?></p>
                    <div class="lp_thumbnail" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
                    
                    <div class="lp_about">
                        <h4 class="lp_title"><?php the_title(); ?></h4>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                    <div class="lp_footer">
                        <div class="arrow_more">&rarr;</div>
                        <div class="lp_seen">
                            <i class="fa fa-eye" aria-hidden="true"> </i><?php echo getPostViews(get_the_ID()); ?></div>
                    </div>
                </a>
            </div>
            <?php 
} 
wp_reset_postdata(); ?>
        </div>
        <?php
            // global $wp_query;

$big = 999999999; // уникальное число

$pag = paginate_links( array(
    'type' => 'array',
	'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format'  => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
    'total'   => $the_query->max_num_pages,
    'end_size' => 1,
    'mid_size' => 1,
    'prev_text' => ('&lt;'),
			'next_text' => ('&gt;'),
) );
if ($the_query->max_num_pages > 1) :
    ?>
    <ul class="articles_pagination">
        <?php
        foreach ( $pag as $page ) {
            echo '<li>' . $page . '</li>';
        }
        ?>
    </ul>
    <?php
    endif;
            ?>
    </div>
</section>
<?php get_footer(); ?>