<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimum-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="MasterVision" />
    <meta name="description" content=" «MasterVision»" />
    <title><?php bloginfo('name'); wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body id="single_article">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <a href="/" id="head_logo"><img src="<?php bloginfo('template_url')  ?>/img/logo.png" alt="Логотип"/></a>
                </div>
                <div class="col-md-7 col-sm-4 contacts"><a class="tel" href="callto:8-499-346-79-46" target="_blank">тел.: <span>8-499-346-79-46</span></a><a class="skype" href="skype:add?admin-mastervision" target="_blank">skype: <span>admin-mastervision</span></a><a class="mail" href="mailto:info@mastervision.su" target="_blank">e-mail: <span>info@mastervision.su</span></a></div>
                <div class="col-md-2 col-sm-2 soc_buttons"><a href="https://www.facebook.com/Mastervision1C/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="http://vk.com/mv_ezoterika" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a><a href="https://www.youtube.com/channel/UCiJTdt19jRMRmYyCZac2Lvg/" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a><a href="https://ok.ru/mv.ezoterika" target="_blank"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a></div>
            </div>
        </div>
    </header>
    <section id="main_screen">
      <div class="container">
        <div id="menu_icon"><span class="upper_span"></span><span class="middle_span"></span><span class="lower_span"></span></div>
        <div id="menu_container">
          <ul id="main_menu">
          <?php wp_nav_menu( array('menu' => 'main_menu',  'items_wrap' => '%3$s')); ?>
          <a class="pc_button" href="/personal-account" target="_blank">Личный кабинет</a>
        </div>