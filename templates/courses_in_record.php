<?php
/*
Template Name: Курсы в записи
*/
?>
<?php get_header(); ?>
<h1 class="main_title">Курсы в записи</h1>
<!-- <h2 class="main_subtitle">Вы</h2> -->
</div>
</section>
<section id="articles_list">
    <div class="container">
        <div class="row">
		<?php
 

                    $the_query = new WP_Query( array(
                        'posts_per_page' => 9,
                        'post_type' => 'cir',
                        'publish' => true,
                        'paged' => $paged
                    ) );

                    while( $the_query->have_posts() ) :
                        $the_query->the_post(); ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 cir_col">
            <div class="cir_single" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
                  <p class="cir_cat"><?php  
    				if (get_post_meta($post->ID, 'cir_cat', true)) {
					 echo get_post_meta($post->ID, 'cir_cat', true);
					} ?></p>
                  <h4 class="cir_title"><?php the_title() ;?></h4>
                  <p class="cir_author"><?php 
    				if (get_post_meta($post->ID, 'cir_author', true)) {
					 echo get_post_meta($post->ID, 'cir_author', true);
					} ?></p><a class="cir_button" href="<?php 
          if (get_post_meta($post->ID, 'cir_link', true)) {
         echo get_post_meta($post->ID, 'cir_link', true);
        } ?>" target="_blank">Купить за <?php 
        if (get_post_meta($post->ID, 'cir_price', true)) {
       echo get_post_meta($post->ID, 'cir_price', true);
      } ?>р.</a>
                  <!-- <p class="cir_time">
                  <img src="/img/clock.png" alt="Время"/>04:35:40
                  </p> -->
                </div>
            </div>
                    <?php endwhile; wp_reset_postdata(); ?>
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
    'end_size' => 2,
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