<?php
include 'include/db.php';
$area_homes = getAllAreaHome();

?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Интерактивная карта КП-Наследия</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div class="map">
    <img src="images/nasledie.png" />
    <svg viewBox="0 0 3428.5713 2664.127">
      <?php
      foreach ($area_homes as $area_home) {
        $status = ($area_home["status"] == "sold") ? "ОК" : (($area_home["status"] == 2) ? "НЕ ОК" : "хз");
        echo '
            <path class="home_sell" data-title="Проект дома Каринтия 112" data-number="' . $area_home['id'] . '"
            d="' . $area_home['d'] . '">
            </path>
            ';
      }
      ?>
    </svg>
    <!-- Тут будут интерактивные элементы -->

  </div>
</body>
<div id="info_on_house" class="popup popup_house">
  <div class="modal-window modal-object">
    <div class="img_wrap">
      <div class="number"></div>
      <div class="modal-return close_block">Закрыть</div>
      <img src="https://test.кп-наследие.рф/img/low-finishing.jpg" alt="Черновая отделка" />
    </div>
    <div class="description">
      <h4>
        <a href="/offer/karintiya/" class="title">Проект Проект дома Каринтия 112</a>
      </h4>
      <div class="developer">
        Застройщик:
        <a href="/brands/tamak/">Строительно компания «ТопДом»</a>
      </div>
      <dl>
        <div class="house_info">
          <div class="strochka">
            <div class="stolbec"><span class="icons"></span> Этажность</div>
            <div class="stolbec">2 этажа</div>
          </div>
          <div class="strochka">
            <div class="stolbec">Кол-во жилых комнат</div>
            <div class="stolbec">2</div>
          </div>
          <div class="strochka">
            <div class="stolbec">Санузел (шт.)</div>
            <div class="stolbec">2</div>
          </div>
          <div class="strochka">
            <div class="stolbec">Жилая площадь</div>
            <div class="stolbec">48.23</div>
          </div>
          <div class="strochka">
            <div class="stolbec">Материал</div>
            <div class="stolbec">Панельно-каркасная технология</div>
          </div>
        </div>
        <dd class="price">4 717 799<span> р.</span></dd>
      </dl>
    </div>
    <div class="control_panel">
      <button class="dream-house__button button" data-popup-button="" data-popup-name="ipoteka">
        Расчитать ипотеку
      </button>
      <button class="visit__button button" data-popup-button="" data-popup-name="bbq">
        Записаться на экскурсию
      </button>
    </div>
  </div>
</div>
<script src="js/interactive_map.js"></script>

</html>