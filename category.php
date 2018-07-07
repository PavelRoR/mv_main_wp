<?php get_header(); ?>
<h1 class="main_title"><?php single_cat_title('<span>Статьи рубрики:</span>&nbsp;'); ?></h1>
</div>
</section>
<section id="articles_list">
    <div class="container">
        <div class="row">
		<?php
                     if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 article_col">
                <a class="lp_single" href="<?php the_permalink(); ?>">
                    <p class="lp_cat"><?php $category = get_the_category(); 
echo $category[0]->cat_name; ?></p>
                    <div class="lp_thumbnail" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
                    
                    <div class="lp_about">
                        <h4 class="lp_title"><?php the_title(); ?></h4>
                        <p class="lp_text"><?php the_excerpt(); ?></p>
                    </div>
                    <div class="lp_footer">
                        <div class="arrow_more">&rarr;</div>
                        <div class="lp_seen">
                            <i class="fa fa-eye" aria-hidden="true"> </i><?php echo getPostViews(get_the_ID()); ?></div>
                    </div>
                </a>
            </div>
                    <?php endwhile; ?>
        </div>
 
        <?php
            // global $wp_query;

$big = 999999999; // уникальное число

$pag = paginate_links( array(
    'type' => 'array',
	'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format'  => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
    'total'   => $wp_query->max_num_pages,
    'end_size' => 2,
    'mid_size' => 1,
    'prev_text' => ('&lt;'),
			'next_text' => ('&gt;'),
) );
if ($wp_query->max_num_pages > 1) :
    ?>
    <ul class="articles_pagination">
        <?php
        foreach ( $pag as $page ) {
            echo '<li>' . $page . '</li>';
        }
        ?>
    </ul>
    <?php endif; ;?>
    <?php else: ?>
        <!-- no posts found -->
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>