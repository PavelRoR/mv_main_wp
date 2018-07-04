<?php get_header('single'); ?>
<div class="single_container">
<?php  if(have_posts()): ; ?>
        <?php while(have_posts()): the_post(); ?>
          <h1 class="main_title"><?php the_title(); ?></h1>
        </div>
      </div>
    </section>
    <section id="single">
      <div class="container">
        <article class="single_container">
        <?php the_content(); ?>
            <?php endwhile; ?>
              <?php endif; ?>
        </article>
        <div class="row likeit">
          <div class="col-md-7">
            <h5>Понравилась статья? Расскажите друзьям:</h5>
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