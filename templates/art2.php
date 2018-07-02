<?php
/*
Template Name: Статьи3
*/
?>
<?php get_header(); ?>

<div class="container">
	<main class="main_content left page">

		<div class="breadcrumbs">
			<?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb();} ?>
		</div>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 article_col">
                <a class="lp_single" href="<?php the_permalink(); ?>">
                    <p class="lp_cat"></p>
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
		<?php endwhile; ?>
		<!-- post navigation -->
		<div class="pagination">
			<?php
            // global $wp_query;
            $big = 999999999; // need an unlikely integer
            echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages,
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;'
            ) );
            ?>
		</div>
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
	</main>


	<div class="divider left"></div>
	<div class="clf"></div>
</div>
<?php get_footer(); ?>