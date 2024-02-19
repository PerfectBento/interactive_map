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
        $status = ($area_home["status"] == "sold") ? "home_sold" : (($area_home["status"] == "reservation") ? "home_reservation" : "home_sell");
        echo '
            <path class="' . $status . ' home" data-number="' . $area_home['id'] . '"
            d="' . $area_home['d'] . '">
            </path>
            ';
      }
      ?>
    </svg>
    <!-- Тут будут интерактивные элементы -->

  </div>
</body>

<!-- Popup окно -->
<div id="info_on_house" class="popup popup_house">

</div>

<script src="js/interactive_map.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>

</script>

</html>