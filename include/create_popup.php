<?php
include "db.php";
$data = getInfoAreaHome($_GET['id']);
$status = ($data[0]["status"] == "sold") ? "sold" : (($data[0]["status"] == "reservation") ? "reservation" : "sell");
echo '
<div class="modal-window modal-object">
    <div class="img_wrap">
      <div class="number ' . $status . '"> ' . $data[0]['id'] . '</div>
      <div class="modal-return close_block" onclick="closePopup()">Закрыть</div>
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
        <a href="/offer/karintiya/" class="title">' . $data[0]['name'] . '</a>
      </h4>
      <div class="developer">
        Застройщик:
        <a href="/brands/tamak/">Строительно компания «ТопДом»</a>
      </div>
      <dl>
        <div class="house_info">
          <div class="strochka">
            <div class="stolbec"><span class="icons"></span> Этажность</div>
            <div class="stolbec">' . $data[0]['floor'] . ' этаж(а)</div>
          </div>
          <div class="strochka">
            <div class="stolbec">Кол-во жилых комнат</div>
            <div class="stolbec">' . $data[0]['rooms'] . '</div>
          </div>
          <div class="strochka">
            <div class="stolbec">Кол-во cанузлов</div>
            <div class="stolbec">' . $data[0]['bathroom'] . '</div>
          </div>
          <div class="strochka">
            <div class="stolbec">Площадь дома</div>
            <div class="stolbec">' . $data[0]['sq'] . ' м2</div>
          </div>
          <div class="strochka">
            <div class="stolbec">Площадь участка</div>
            <div class="stolbec">' . $data[0]['sq_area'] . 'соток</div>
          </div>
          <div class="strochka">
            <div class="stolbec">Материал</div>
            <div class="stolbec">' . $data[0]['material'] . '</div>
          </div>
        </div>
        <dd class="price">' . $data[0]['price'] . '<span> р.</span></dd>
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
';

?>