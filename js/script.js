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
