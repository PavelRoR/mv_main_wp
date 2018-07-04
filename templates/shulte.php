<?php
/*
Template Name: Упражнения: Шульте
*/
?>
<?php get_header('single'); ?>
<h1 class="main_title">Упражнение "Таблица Шульце"</h1>
          <h2 class="main_subtitle">Упражнение для развития внимания и скорости восприятия</h2>
        </div>
      </div>
    </section>
    <section id="shulte">
      <div class="container">
        <div class="single_container instruction">
          <p>Это упражнение помогает натренировать внимание. Внимание важно во всех аспектах жизни, в то числе и в эзотерически, экстрасенсорных практиках</p>
          <p>При каждодневной тренировке (если подобных тренеровок прежде не было), на протяжении 2-3 недель, Вы заметите что концентрация Вашего внимание возрасла, станете меньше отвлекаться от важных процессов, начнете замечать в разы больше</p>
          <p>Правила выполнения упражнения:</p>
          <ul>
            <li>Сядьте перед экраном компьютера таким образом, чтобы вся таблица была в поле вашего зрения</li>
            <li>Зафиксируйте свое внимание в центре таблицы и старайтесь не смещать его</li>
            <li>Переферийным зрением начните находить числа в возрастающем порядке, от 1 и до 25</li>
          </ul>
        </div>
        <div id="shulte_box">
          <table id="shulte_create">
            <tbody>
              <tr>
                <td>
                  <p class="create_table_title">Создать таблицу 5x5</p><a class="button create_table" href="javascript:vip(5);">Создать</a>
                </td>
                <td>
                  <p class="create_table_title">Создать таблицу 6x6</p><a class="button create_table" href="javascript:vip(6);">Создать</a>
                </td>
                <td>
                  <p class="create_table_title">Создать таблицу 7x7</p><a class="button create_table" href="javascript:vip(7);">Создать</a>
                </td>
                <td>
                  <p class="create_table_title">Очистить таблицу</p><a class="button create_table" id="clear_table" href="javascript:void(0);">Очистить</a>
                </td>
              </tr>
            </tbody>
          </table>
          <form id="shulte_cintrols" name="shuteControls">
            <input id="shulte_timer" name="stopwatch" value="00:00:00.00"/>
            <input class="button" id="start_timer" type="button" value="Запуск/Стоп"/>
            <input class="button" id="clear_timer" type="button" value="Обнулить"/>
          </form>
          <div id="shulte_table"></div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>