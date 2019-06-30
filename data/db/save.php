<?php

require_once 'conection.php';
// require_once 'migracion.php';

// $id= intval($_POST['id']);
// $username=$_POST['username'];
// $name=$_POST['name'];
// $lastname=$_POST['lastname'];
// $email=$_POST['email'];
// $countryFromPost = $_POST['country'];
// $imgName=$_POST['avatar'];
// $pass=$_POST['password'];
//
//
// try {
//   $sql="INSERT INTO users ('id','username', 'name', 'lastname','email', 'country', 'avatar', 'password') values (?,?,?,?,?,?,?,?)";
//   $sql="INSERT INTO users values (default,'$username', '$name', '$lastname','$email', '$countryFromPost', '$imgName', '$pass')";
//   $query=$db->prepare($sql);
//   $query->execute();
// } catch (\Exception $e) {
//   echo "<h1> Error en su DB </h1>";
//   die();
// }
// $_POST['username']='';
// $_POST['name']='';
// $_POST['lastname']='';
// $_POST['email']='';
// $_POST['country']='';
// $_POST['avatar']='';
// $_POST['password']='';


$username=$_POST['username'];
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$countryFromPost = $_POST['country'];
$imgName=$_POST['avatar'];
$pass=$_POST['password'];


try {

   $sql="INSERT INTO user  values (default, '$username', '$name', '$lastname','$email', '$countryFromPost', '$imgName', '$pass')";
  // $sql="INSERT INTO users values (default, :username, :name, :lastname,:email, :countryFromPost, :imgName, :pass)";
  $query=$db->prepare($sql);

  // $query->bindValue(':username', $username);
  // $query->bindValue(':name', $name);
  // $query->bindValue(':lastname', $lastname);
  // $query->bindValue(':email', $email);
  // $query->bindValue(':countryFromPost', $countryFromPost);
  // $query->bindValue(':imgName', $imgName);
  // $query->bindValue(':pass', $pass);

  $query->execute();
} catch (\Exception $e) {
  echo "<h1> Error en su DB </h1>";
  var_dump($e);
  die();
}







 ?>
