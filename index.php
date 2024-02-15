<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Интерактивная карта КП-Наследия</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div class="map">
    <img src="images/nasledie.png" />
    <svg viewBox="0 0 1350 1049">
      <path class="home_yelow" data-title="Проект дома Каринтия 112"
        d="m 1222.8839,558.54443 -51.8574,10.10403 16.1962,19.31651 15.4532,10.54979 31.055,12.03567 4.6062,0.29718 27.7861,-1.3373 z">
      </path>


      <!-- Тут будут интерактивные элементы -->
    </svg>
  </div>
</body>
<div id="info_on_house" class="popup popup_house">
  <div class="modal-window modal-object">
    <div class="img_wrap">
      <div class="number yellow">1</div>
      <a href="" class="modal-return close_block">Закрыть</a>
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