<?php
require_once('conn.php');

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$password = md5($_POST['password']);

$sql = 'SELECT * FROM users WHERE email=:email AND password=:password';
$result = $conn->prepare($sql);
$result->execute(['email' => $email, 'password' => $password]);
$user = $result->fetch();

if (!empty($user)) {
  session_start();

  $_SESSION['id'] = $user['id'];
  $_SESSION['nome'] = $user['nome'];
  $_SESSION['email'] = $user['email'];
  header('location: ../');
} else {
  echo "Usuario não cadastrado";
}
