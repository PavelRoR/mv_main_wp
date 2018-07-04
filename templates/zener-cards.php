<?php
/*
Template Name: Упражнения: Карты Зенера
*/
?>
<?php get_header('single'); ?>
<h1 class="main_title">Упражнение "Карты Зенера"</h1>
          <h2 class="main_subtitle">Тест на проверку и развитие экстрасенсорных способностей</h2>
        </div>
      </div>
    </section>
    <section id="zener_cards">
      <div class="container">
        <div class="single_container">
          <div id="zc_main_card"></div>
          <div id="zc_cards"><a class="circle" href="javascript:vip(circle)"></a><a class="cross" href="javascript:vip(cross)"></a><a class="waves" href="javascript:vip(waves)"></a><a class="square" href="javascript:vip(square)"></a><a class="star" href="javascript:vip(star)"></a></div>
          <div class="instruction">
            <p>Вы видите пять карт. Вам необходимо, с помощью интуиции, определить какой из этих цветов был загадан программой</p>
            <p>Правильный ответ появиться в поле, обведенном рамкой</p>
            <p>Для большей достоверности результатов, сделайте больше 100 попыток</p>
            <p>Для повышения рузультатов, обратите внимания на свои ощущения, на образы, мелькающие в голове, на звуки, вкусы и запахи, которые Вы можете видеть, слышать или чувствовать в себе</p>
            <p>Все это может иметь значение, посредством ваших внутренних чувств, проявляется Ваша интуиция</p>
          </div>
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
        <div id="hypercomments_widget">
          <script>type="text/javascript",_hcwp = window._hcwp || [];_hcwp.push({widget: "Stream",widget_id: 102348});(function() {if ("HC_LOAD_INIT" in window) return;HC_LOAD_INIT = true;var lang = (navigator.language || navigator.systemLanguage || navigator.userLanguage || "en").substr(0, 2).toLowerCase();var hcc = document.createElement("script");hcc.type = "text/javascript";hcc.async = true;hcc.src = ("https:" == document.location.protocol ? "https" : "http") + "://w.hypercomments.com/widget/hc/102348/" + lang + "/widget.js";var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(hcc, s.nextSibling);})();</script>
        </div>
      </div>
    </section>
<?php get_footer(); ?>