<?php
/*
Template Name: Личная консультация
*/
?>
<?php get_header();?>
<h1 class="main_title">Личная консультация</h1>
        <h2 class="main_subtitle">Решение ваших проблем в сфере бизнеса, здоровья, личных отношений...<br/>Консультация у опытного специалиста — это эффективная помощь в сложной жизненной ситуации, совет, практические рекомендации  и поддержка.</h2>
      </div>
    </section>
    <section id="consultation_order">
      <div class="container">
        <div class="feedback_form consult_form">
          <h3>Заявка на личную консультацию</h3>
          <input type="text" name="first-name"  placeholder="Ваше имя"/>
          <input type="text" name="last-name"  placeholder="Ваша фамилия"/>
          <input type="tel" name="phone"  placeholder="Ваш телефон"/>
          <input type="text" name="skype"  placeholder="Ваш skype"/>
          <textarea name="msg"  placeholder="Запрос (расскажите о Вашей проблеме)"></textarea>
          <p class="alert_message"></p>
          <p class="success_message"></p>
          <div class="checking">
            <input class="check" type="checkbox" id="check" checked="checked"/>
            <label class="check_label" for="check">Я согласен с <a href="javascript:void(0);" data-toggle="modal" data-target="#myPolitics">условиями обработки </a>персональных данных</label>
          </div>
          <button class="button" type="submit" onclick="return false">Отправить</button>
</div>
        <h5>Примеры запросов</h5>
        <p>Если Вы не знаете, как правильно изложить свою проблему, посмотрите примеры и сформулируйте запрос по аналогии</p>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="request_example">
              <p>Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Вдали от всех живут они в буквенных домах на берегу Семантика большого языкового океана. Малеит по всей стране и обеспечивает ее всеми необходимыми правилами. Далеко-далеко за словесныране гласных и согласных живут рыбные тексты. Вдали от всех живут они в буквенных домах на берегу Семантика большого языкового океана. Маленький ручеек...</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="request_example">
              <p>Далеко-далеко за словесными горами в стране гласных и согласнми правилами. Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Вдали от всех живут они в буквенных домах на берегу Семантика большого языкового океана. Маленький ручеек...</p>
            </div>
          </div>
        </div>
        <h3 class="specialists_title hidden">Наши специалисты</h3>
        <div class="row hidden" id="our_specialists">
        <?php 
    $the_query = new WP_Query( array(
        'post_type' => 'consultants',
        'publish' => true,
        'order' => 'ASC',
        'posts_per_page' => 4
        ) );
        
        while( $the_query->have_posts() ):
            $the_query->the_post(); ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="our_specialist"><?php the_post_thumbnail() ;?>
              <h4>Имя Фамилия Отчество</h4>
              <p>астролог, таролог</p>
            </div>
          </div>
        <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <button class="all_posts all_specialists hidden">Все специалисты</button>
        <div class="row" id="our_specialists_more hidden">
        <?php 
    $the_query = new WP_Query( array(
        'post_type' => 'consultants',
        'publish' => true,
        'order' => 'ASC',
        'posts_per_page' => -1
        ) );
        
        while( $the_query->have_posts() ):
            $the_query->the_post(); ?>
          <div class="col-md-3 col-sm-6 col-xs-12 hidden_consultants hidden">
            <div class="our_specialist"><?php the_post_thumbnail() ;?>
              <h4>Имя Фамилия Отчество</h4>
              <p>астролог, таролог</p>
            </div>
          </div>
          <?php endwhile;wp_reset_postdata(); ?>
        </div>
      </div>
    </section>
<?php get_footer();?>