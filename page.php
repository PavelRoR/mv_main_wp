<?php get_header();?>
<?php  if(have_posts()): ; ?>
        <?php while(have_posts()): the_post(); ?>
<h1 class="main_title"><?php the_title(); ?></h1>
      </div>
    </section>
    <section id="single">
      <div class="container">
      <?php the_content(); ?>
            <?php endwhile; ?>
              <?php endif; ?>
      </div>
    </section>
<?php get_footer();?>