<?php
/*
Template Name: О нас
*/
?>
<?php get_header(); ?>
<h1 class="main_title">Master Vision - академия эзотерических практик</h1>
        <h2 class="main_subtitle">Мы обучаем эзотерике, психологии, экстрасенсорике, астрологии и другим практикам, которые направленны на саморазвитие и улучшение качества жизни человека</h2>
      </div>
    </section>
    <section id="we_in_numbers">
      <div class="container">
        <h3>Master Vision в цифрах</h3>
        <p>Наши образовательные курсы меняют жизни тысяч людей к лучшему</p>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <p class="num_title">Число подписчиков</p>
            <p class="counted">82 000</p>
            <p>человек уже с нами</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <p class="num_title">У нас уже прошли обучение</p>
            <p class="counted">1 800</p>
            <p>студентов</p>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <p class="num_title">Просмотров вебинаров</p>
            <p class="counted">13 000</p>
            <p>в месяц</p>
          </div>
        </div>
        <h5>Присоединяйтесь к сообществу Master Vision</h5>
        <button class="button" data-toggle="modal" data-target="#modalSubscribe"> Подписаться</button>
      </div>
    </section>
    <section id="our_team">
      <div class="container">
        <h3>Наша команда</h3>
        <p class="team_subtitle">Преподаватели нашей академии не теоретики, а действующие практики, гуру прикладной эзотерики</p>
        <h4>Организаторы</h4>
        <div class="row">
          <div class="col-md-6 col-sm-6 organizers">
                <div class="team_card" data-toggle="modal" data-target="#alexModal">
                  <h5>Александр Кудряшов</h5>
                  <p>генеральный директор MasterVision</p>
                  <div class="arrow_more">&rarr;</div><img class="coach" src="<?php bloginfo('template_url');?>/img/alex.jpg" alt="Александр Кудряшов"/>
                </div>
          </div>
          <div class="col-md-6 col-sm-6 organizers">
                <div class="team_card" data-toggle="modal" data-target="#andreyModal">
                  <h5>Андрей Грудин</h5>
                  <p>управляющий партнер MasterVision</p>
                  <div class="arrow_more">&rarr;</div><img class="coach" src="<?php bloginfo('template_url');?>/img/andrey.jpg" alt="Андрей Грудин"/>
                </div>
          </div>
        </div>
        <h4>Тренерский состав</h4>
        <div class="row">
          <div class="col-md-6 col-sm-6 coaches">
                <div class="team_card" data-toggle="modal" data-target="#basileModal">
                  <h5>Василий Попов</h5>
                  <p>эзотерик, мистик, целитель</p>
                  <div class="arrow_more">&rarr;</div><img class="coach" src="<?php bloginfo('template_url');?>/img/basile.jpg" alt="Василий Попов"/>
                </div>
          </div>
          <div class="col-md-6 col-sm-6 coaches">
                <div class="team_card" data-toggle="modal" data-target="#vedaModal">
                  <h5>Ольга Веда</h5>
                  <p>потомственная волшебница в III поколении</p>
                  <div class="arrow_more">&rarr;</div><img class="coach" src="<?php bloginfo('template_url');?>/img/veda.jpg" alt="Ольга Веда"/>
                </div>
          </div>
          <div class="col-md-6 col-sm-6 coaches">
                <div class="team_card" data-toggle="modal" data-target="#jannaModal">
                  <h5>Жанна Абрамова</h5>
                  <p>психолог, женский тренер</p>
                  <div class="arrow_more">&rarr;</div><img class="coach" src="<?php bloginfo('template_url');?>/img/janna.jpg" alt="Жанна Абрамова"/>
                </div>
          </div>
          <div class="col-md-6 col-sm-6 coaches">
                <div class="team_card" data-toggle="modal" data-target="#victorModal">
                  <h5>Виктор Толстиков</h5>
                  <p>эзотерик, потомственный маг</p>
                  <div class="arrow_more">&rarr;</div><img class="coach" src="<?php bloginfo('template_url');?>/img/victor.jpg" alt="Виктор Толстиков"/>
                </div>
          </div>
          <div class="col-md-6 col-sm-6 coaches">
                <div class="team_card" data-toggle="modal" data-target="#alexModal">
                  <h5>Александр Кудряшов</h5>
                  <p>экстрасенс, парапсихолог, мастер Расстановок по Хелленгеру</p>
                  <div class="arrow_more">&rarr;</div><img class="coach" src="<?php bloginfo('template_url');?>/img/alex.jpg" alt="Александр Кудряшов"/>
                </div>
          </div>
          <div class="col-md-6 col-sm-6 coaches">
                <div class="team_card" data-toggle="modal" data-target="#reginaModal">
                  <h5>Регина Крашенинникова</h5>
                  <p>пальмистр, хиромант</p>
                  <div class="arrow_more">&rarr;</div><img class="coach" src="<?php bloginfo('template_url');?>/img/regina.jpg" alt="Регина Крашенинникова"/>
                </div>
          </div>
          <div class="col-md-6 col-sm-6 coaches">
                <div class="team_card" data-toggle="modal" data-target="#lidiaModal">
                  <h5>Лидия Хелль</h5>
                  <p>астролог</p>
                  <div class="arrow_more">&rarr;</div><img class="coach" src="<?php bloginfo('template_url');?>/img/lidia.jpg" alt="Лидия Хелль"/>
                </div>
          </div>
        </div>
      </div>
    </section>
<?php get_footer('about'); ?>