<?php
      $database = mysqli_connect('localhost', 'root', 'root', 'registration-advance');

      $result = mysqli_query($database, "SELECT * FROM `users`");

      $user= mysqli_fetch_assoc($result);

      echo("<div>" . $user['id'] . "</div>");
      echo("<div>" . $user['name'] . "</div>");
      echo("<div>" . $user['phone'] . "</div>");
?>
