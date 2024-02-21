const homes = document.querySelectorAll(".home");
const popup = document.querySelector(".popup_house");

homes.forEach((home) => {
  home.addEventListener("click", function () {
    fetch("include/create_popup.php?id=" + this.dataset.number)
      .then((response) => {
        if (!response.ok) {
          throw new Error("Сетевая ошибка");
        }
        return response.text();
      })
      .then((data) => {
        // Отображение полученных данных в popup окне
        popup.innerHTML = data;
        popup.classList.add("open");
        // Повторная инициализация Swiper
        initializeSwiper();
      })
      .catch((error) => {
        console.error("Возникла проблема при выполнении запроса:", error);
      });
  });
});

function closePopup() {
  popup.classList.remove("open");
}

function initializeSwiper() {
  // Ваш код инициализации Swiper
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
}

$(document).ready(function () {
  $(".save").click(function () {
    var id = $(this).data("id");
    console.log("Значение атрибута data-id нажатой кнопки: " + id);
    var inputValue = $(this).closest("tr").find("input").val();
    console.log("Значение input в той же строке: " + inputValue);
    $.ajax({
      url: "update_db.php",
      method: "POST",
      data: { id: id, value: inputValue },
      success: function (response) {
        // Перезагрузить страницу при успешном действии
        location.reload();
      },
      error: function (xhr, status, error) {
        console.error("Ошибка при отправке данных: " + error);
      },
    });
  });
});
