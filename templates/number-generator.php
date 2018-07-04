<?php
/*
Template Name: Упражнения: Генератор чисел
*/
?>
<?php get_header('single'); ?>
<h1 class="main_title">Упражнение "Генератор чисел"</h1>
          <h2 class="main_subtitle">Тест на проверку и развитие экстрасенсорных способностей</h2>
        </div>
      </div>
    </section>
    <section id="number_generator">
      <div class="container">
        <table id="number_generator_table">
          <tbody>
            <tr>
              <td><a href="javascript:vip(1);">1</a></td>
              <td><a href="javascript:vip(2);">2</a></td>
              <td><a href="javascript:vip(3);">3</a></td>
            </tr>
            <tr>
              <td><a href="javascript:vip(4);">4</a></td>
              <td><a href="javascript:vip(5);">5</a></td>
              <td><a href="javascript:vip(6);">6</a></td>
            </tr>
            <tr>
              <td><a href="javascript:vip(7);">7</a></td>
              <td><a href="javascript:vip(8);">8</a></td>
              <td><a href="javascript:vip(9);">9</a></td>
            </tr>
          </tbody>
        </table>
        <div class="single_container">
          <div class="instruction">
            <p>Вы видите квадрат с девятью цифрами. Вам необходимо, с помощью интуиции, определить какое число было загадано программой.</p>
            <p>Если указанная Вами цифра совпадает с цифрой сгенерированной программой - Вы увидите зеленую надпись, в противном случае - красную</p>
            <p>Для большей достоверности результатов, сделайте больше 100 попыток.</p>
            <p>Для повышения рузультатов, обратите внимания на свои ощущения, на образы, мелькающие в голове, на звуки, вкусы и запахи, которые Вы можете видеть, слышать или чувствовать в себе.</p>
            <p>Все это может иметь значение, посредством ваших внутренних чувств, проявляется Ваша интуиция.</p>
          </div>
          <div id="numbers_result"></div>
          <div id="numbers_count"></div>
          <button class="button" id="restart">Начать сначала</button>
        </div>
        <div class="row likeit">
          <div class="col-md-7">
            <h5>Понравилcя тест? Расскажите друзьям:</h5>
          </div>
          <div class="col-md-5">
            <script type="text/javascript">(function () {if (window.pluso)if (typeof window.pluso.start == "function") return;if (window.ifpluso == undefined) {window.ifpluso = 1;var d = document,s = d.createElement('script'),g = 'getElementsByTagName';s.type = 'text/javascript';s.charset = 'UTF-8';s.async = true;s.src = ('https:' == window.location.protocol ? 'https' : 'http')+'://share.pluso.ru/pluso-like.js';var h = d[g]('body')[0];h.appendChild(s);}})();</script>
            <div class="pluso" data-background="transparent" data-options="big,round,line,horizontal,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,email"></div>
          </div>
        </div>
        <h4 class="comments">Комментарии</h4>
<?php  if(comments_open( get_the_ID() ))  {
                  comments_template(); 
                } ?>
        </div>
      </div>
    </section>
<?php get_footer(); ?>