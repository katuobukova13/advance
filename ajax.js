$(document).ready(function () {
  $(".registerbtn").on("click", function () {
    let name = $('input[name="name"]').val();
    let password = $('input[name="psw"]').val();
    let phone = $('input[name="phone"]').val();

    $.ajax({
      method: "POST",
      url: "registration.php",
      data: {
        name: name,
        password: password,
        phone: phone,
      },
      success: function (response) {
        console.log("OK");
        $(".result").removeClass("hidden").addClass("show");

        $(".result").html(`${name}, ${password}, ${phone}, ${response.id}`);
        getN();

        $('input[name="name"]').val("");
        $('input[name="psw"]').val("");
        $('input[name="phone"]').val("");
      },
      error: function (response) {
        $(".result").html("Ошибка. Данные не отправлены.");
      },
    });

    function getN() {
      $.ajax({
        url: "i.php",
        success: function (response) {
          $(".result").html(response);
        },
        error: function (response) {
          $(".result").html("Ошибка. Данные не отправлены.");
        },
      });
    }

    document.querySelector("form").addEventListener("submit", function (e) {
      e.preventDefault();
    });
  });
});
