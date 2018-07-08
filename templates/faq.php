<?php
/*
Template Name: FAQ
*/
?>
<?php get_header(); ?>
<h1 class="main_title">Ответы на часто задаваемые вопросы</h1>
        <h2 class="main_subtitle">В разделе собраны те вопросы, которые наиболее часто задают сотрудникам Master Vision. Если Вы не нашли ответ на Ваш вопрос, Вы можете обратится в службу поддержки по указанным выше контактам</h2>
      </div>
    </section>
    <section id="faq_list">
      <div class="container">
        <div id="faqs">
        <?php 
    $the_query = new WP_Query( array(
        'post_type' => 'faq',
        'publish' => true,
        'order' => 'ASC',
        'posts_per_page' => -1
        ) );
        
        while( $the_query->have_posts() ) :
            $the_query->the_post(); ?>
            <div class="faq_container">
                <div class="faq_title">
                  <h3><?php the_title()  ;?></h3><span>+</span>
</div>
                <div class="faq_content">
                  <?php the_content()  ;?>

                </div>
              </div>
        <?php endwhile;
         wp_reset_postdata(); ?>
        </div>
    </section>
<?php get_footer(); ?>