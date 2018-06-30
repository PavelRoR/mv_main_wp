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
        <form class="feedback_form consult_form" action="#!" method="POST">
          <h3>Заявка на личную консультацию</h3>
          <input type="text" name="first-name" required="required" placeholder="Ваше имя"/>
          <input type="text" name="last-name" required="required" placeholder="Ваша фамилия"/>
          <input type="tel" name="phone" required="required" placeholder="Ваш телефон"/>
          <input type="text" name="skype" required="required" placeholder="Ваш skype"/>
          <textarea name="msg" required="required" placeholder="Запрос (расскажите о Вашей проблеме)"></textarea>
          <div class="checking">
            <input class="check" type="checkbox" id="check" checked="checked"/>
            <label class="check_label" for="check">Я согласен с <a href="javascript:void(0);" data-toggle="modal" data-target="#myPolitics">условиями обработки </a>персональных данных</label>
          </div>
          <button class="button" type="submit" onclick="return false">Отправить</button>
        </form>
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
        <h3 class="specialists_title">Наши специалисты</h3>
        <div class="row" id="our_specialists">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="our_specialist"><img src="<?php bloginfo('template_url');?>/img/pc_photo_1.png" alt="Специалист"/>
              <h4>Имя Фамилия Отчество</h4>
              <p>астролог, таролог</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="our_specialist"><img src="<?php bloginfo('template_url');?>/img/pc_photo_2.png" alt="Специалист"/>
              <h4>Имя Фамилия Отчество</h4>
              <p>астролог, таролог</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="our_specialist"><img src="<?php bloginfo('template_url');?>/img/pc_photo_3.png" alt="Специалист"/>
              <h4>Имя Фамилия Отчество</h4>
              <p>астролог, таролог</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="our_specialist"><img src="<?php bloginfo('template_url');?>/img/pc_photo_1.png" alt="Специалист"/>
              <h4>Имя Фамилия Отчество</h4>
              <p>астролог, таролог</p>
            </div>
          </div>
        </div>
        <button class="all_posts all_specialists">Все специалисты</button>
        <div class="row" id="our_specialists_more">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="our_specialist"><img src="<?php bloginfo('template_url');?>/img/pc_photo_1.png" alt="Специалист"/>
              <h4>Имя Фамилия Отчество</h4>
              <p>астролог, таролог</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="our_specialist"><img src="<?php bloginfo('template_url');?>/img/pc_photo_2.png" alt="Специалист"/>
              <h4>Имя Фамилия Отчество</h4>
              <p>астролог, таролог</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="our_specialist"><img src="<?php bloginfo('template_url');?>/img/pc_photo_3.png" alt="Специалист"/>
              <h4>Имя Фамилия Отчество</h4>
              <p>астролог, таролог</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="our_specialist"><img src="<?php bloginfo('template_url');?>/img/pc_photo_1.png" alt="Специалист"/>
              <h4>Имя Фамилия Отчество</h4>
              <p>астролог, таролог</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="our_specialist"><img src="<?php bloginfo('template_url');?>/img/pc_photo_1.png" alt="Специалист"/>
              <h4>Имя Фамилия Отчество</h4>
              <p>астролог, таролог</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="our_specialist"><img src="<?php bloginfo('template_url');?>/img/pc_photo_2.png" alt="Специалист"/>
              <h4>Имя Фамилия Отчество</h4>
              <p>астролог, таролог</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="our_specialist"><img src="<?php bloginfo('template_url');?>/img/pc_photo_3.png" alt="Специалист"/>
              <h4>Имя Фамилия Отчество</h4>
              <p>астролог, таролог</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="our_specialist"><img src="<?php bloginfo('template_url');?>/img/pc_photo_1.png" alt="Специалист"/>
              <h4>Имя Фамилия Отчество</h4>
              <p>астролог, таролог</p>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php get_footer();?>