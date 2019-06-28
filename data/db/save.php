<?php

require_once 'conection.php';
require_once 'migracion.php';

$id=$_POST['button'];
$username=$_POST['username'];
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$countryFromPost = $_POST['country'];
$avatar=$_POST['avatar'];
$pass=$_POST['password'];


try {
  $sql="INSERT INTO users ('username', 'name', 'lastname','email', 'country', 'avatar', 'password') values (?,?,?,?,?,?,?)";
  $query=$db->prepare($sql);
  $query->execute([$id, $username, $name, $lastname, $email, $countryFromPost, $avatar, $pass]);
} catch (\Exception $e) {
  echo "<h1> Error en su DB </h1>";
  die();
}

$usuarios=$query->fetchAll(PDO::FETCH_ASSOC);

header ('Location: /');

 ?>
