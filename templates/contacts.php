<?php
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>
<h1 class="main_title">Контакты</h1>
        <div class="row contacts_container">
          <div class="col-md-3 col-sm-6">
            <p>Адрес:<span>г.Тюмень,</span><span>проезд Летний, 9а</span></p>
          </div>
          <div class="col-md-3 col-sm-6"><a class="tel" href="callto:8-499-346-79-46" target="_blank">тел.: <span>8-499-346-79-46</span></a><a class="tel" href="callto:8-929-568-87-50" target="_blank"><span>8-929-568-87-50</span></a></div>
          <div class="col-md-3 col-sm-6"><a class="skype" href="skype:add?admin-mastervision" target="_blank">skype: <span>admin-mastervision</span></a></div>
          <div class="col-md-3 col-sm-6"><a class="mail" href="mailto:info@mastervision.su" target="_blank">e-mail: <span>info@mastervision.su</span></a></div>
        </div>
      </div>
    </section>
    <section id="contacts_list">
      <div class="container">
        <div class="feedback_form contacts_feedback_form" >
          <h3>Написать нам</h3>
          <input type="email" name="email" placeholder="Ваш Email"/>
          <input type="text" name="name"  placeholder="Ваше имя"/>
          <textarea name="msg" placeholder="Сообщение"></textarea>
          <p class="alert_message"></p>
          <p class="success_message">Спасибо! Мы получили Ваше сообщение и скоро свяжемся с Вами</p>
          <div class="checking">
            <input class="check" type="checkbox" id="check" checked="checked"/>
            <label class="check_label" for="check">Я согласен с <a href="javascript:void(0);" data-toggle="modal" data-target="#myPolitics">условиями обработки </a>персональных данных</label>
          </div>
          <button class="button" type="submit" >Отправить</button>
        </div>
      </div>
    </section>
<?php get_footer(); ?>