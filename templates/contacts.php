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
          <div class="col-md-3 col-sm-6"><a class="tel" href="callto:8-499-346-79-46" target="_blank">тел.: <span>8-499-346-79-46</span></a></div>
          <div class="col-md-3 col-sm-6"><a class="skype" href="skype:add?admin-mastervision" target="_blank">skype: <span>admin-mastervision</span></a></div>
          <div class="col-md-3 col-sm-6"><a class="mail" href="mailto:info@mastervision.su" target="_blank">e-mail: <span>info@mastervision.su</span></a></div>
        </div>
      </div>
    </section>
    <section id="contacts_list">
      <div class="container">
        <form class="feedback_form" action="#!" method="POST">
          <h3>Написать нам</h3>
          <input type="text" name="name" required="required" placeholder="Ваше имя"/>
          <input type="email" name="email" required="required" placeholder="Ваш Email"/>
          <textarea name="msg" required="required" placeholder="Сообщение"></textarea>
          <div class="checking">
            <input class="check" type="checkbox" id="check" checked="checked"/>
            <label class="check_label" for="check">Я согласен с <a href="javascript:void(0);" data-toggle="modal" data-target="#myPolitics">условиями обработки </a>персональных данных</label>
          </div>
          <button class="button" type="submit" onclick="return false">Отправить</button>
        </form>
      </div>
    </section>
<?php get_footer(); ?>