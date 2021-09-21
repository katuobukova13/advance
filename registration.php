<?php

  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
  $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);

  $password = md5($password."advance");

  $database = new mysqli('localhost', 'root', 'root', 'registration-advance');
  $database->query("INSERT INTO `users` (`name`, `password`, `phone`) VALUES('$name', '$password', '$phone')");

  if ($database == false) {
    echo "Error";
  }

  $database->close();

?>
