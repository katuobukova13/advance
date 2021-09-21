<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <form action="registration.php" method="POST" class="php">
        <div class="registration">
          <h1>Sign up</h1>

          <label for="name"><b>Имя</b></label>
          <input type="text" placeholder="Введите имя" name="name" required />

          <label for="psw"><b>Пароль</b></label>
          <input
            type="password"
            placeholder="Введите пароль"
            name="psw"
            required
          />

          <label for="phone"><b>Телефон</b></label>
          <input
            type="tel"
            name="phone"
            placeholder="8-999-570-30-36"
            required
          />

          <button type="click" class="registerbtn">Register</button>
        </div>
      </form>

      <div class="result hidden">
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./ajax.js"></script>
  </body>
</html>
