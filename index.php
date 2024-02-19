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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <style>

  </style>
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
      <div class="interactive_map_swiper">
        <div class="swiper-wrapper">
          <div class="interactive_map_swiper-slide swiper-slide">
            <img class="interactive_map_swiper-slide-image" data-swiper-parallax="30%" loading="lazy"
              src="https://studio.swiperjs.com/demo-images/nature/01.jpg" />
          </div>

          <div class="interactive_map_swiper-slide swiper-slide">
            <img class="interactive_map_swiper-slide-image" data-swiper-parallax="30%" loading="lazy"
              src="https://studio.swiperjs.com/demo-images/nature/09.jpg" />

          </div>

          <div class="interactive_map_swiper-slide swiper-slide">
            <img class="interactive_map_swiper-slide-image" data-swiper-parallax="30%" loading="lazy"
              src="https://studio.swiperjs.com/demo-images/nature/10.jpg" />

          </div>
        </div>

        <div class="interactive_map_swiper-button-prev swiper-button-prev"></div>
        <div class="interactive_map_swiper-button-next swiper-button-next"></div>
      </div>
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
            <div class="stolbec">Площадь дома</div>
            <div class="stolbec">48.23 м2</div>
          </div>
          <div class="strochka">
            <div class="stolbec">Площадь участка</div>
            <div class="stolbec">48.23 соток</div>
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
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".interactive_map_swiper", {
    grabCursor: true,
    speed: 600,
    navigation: {
      prevEl: ".interactive_map_swiper-button-prev",
      nextEl: ".interactive_map_swiper-button-next",
    },
    keyboard: { enabled: true },
    parallax: { enabled: true },
    loop: { enabled: true },
    lazy: { enabled: true },
    zoom: { minRatio: 10 },
    watchSlidesProgress: true,
    observer: true,
    observeParents: true,
    threshold: 5,
  });
</script>

</html>