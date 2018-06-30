<?php
/*
Template Name: Личный кабинет
*/
?>
<?php get_header();?>
<h1 class="main_title">Личный кабинет</h1>
      </div>
    </section>
    <section id="single">
      <div class="container">
      <?php  if(have_posts()): ; ?>
        <?php while(have_posts()): the_post(); ?>
          <?php the_content(); ?>
            <?php endwhile; ?>
              <?php endif; ?>
      </div>
    </section>
<?php get_footer();?>