// $(document).ready(function () {
//   $(".save").click(function () {
//     var id = $(this).data("id");
//     console.log("Значение атрибута data-id нажатой кнопки: " + id);
//     var inputValue = $(this).closest("tr").find("input").val();
//     console.log("Значение input в той же строке: " + inputValue);
//     $.ajax({
//       url: "update_db.php",
//       method: "POST",
//       data: { id: id, value: inputValue },
//       success: function (response) {
//         // Перезагрузить страницу при успешном действии
//         location.reload();
//       },
//       error: function (xhr, status, error) {
//         console.error("Ошибка при отправке данных: " + error);
//       },
//     });
//   });
// });
document.querySelectorAll(".save").forEach(function (button) {
  button.addEventListener("click", function () {
    var rowData = {};
    var row = button.closest("tr");
    var id = $(this).data("id");
    row.querySelectorAll(".input_tag").forEach(function (input) {
      var name = input.getAttribute("name");
      var value = input.value;
      rowData[name] = value;
    });
    console.log(rowData); // Выводим полученный массив в консоль
    console.log(id); // Выводим полученный массив в консоль
    fetch("./include/update_rows.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ id: id, data: rowData }),
    })
      .then((response) => {
        if (response.ok) {
          return response.text();
        } else {
          throw new Error("Ошибка отправки данных");
        }
      })
      .then((data) => {
        console.log(data); // Выводим ответ от сервера в консоль
      })
      .catch((error) => {
        console.error("Произошла ошибка:", error);
      });
  });
});
