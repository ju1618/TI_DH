<?php

// require_once 'conection.php';
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
  // $imgAvatar=$_FILES['avatar'];
  // $imgAvatar=$_POST['avatar'];
  $pass=$_POST['password'];


// $username=$_POST['username'];
// $name=$_POST['name'];
// $lastname=$_POST['lastname'];
// $email=$_POST['email'];
// $countryFromPost = $_POST['country'];
// $imgName=$_POST['avatar'];
// $pass=$_POST['password'];


try {

  $sql="INSERT INTO user  values (default, '$username', '$name', '$lastname','$email', '$countryFromPost', '$imgAvatar', '$pass')";
  // $sql="INSERT INTO users values (default, :username, :name, :lastname,:email, :countryFromPost, :imgAvatar, :pass)";
  $query=$db->prepare($sql);

//bindeo las variables para evitar mysql insection

  // $query->bindValue(':username', $username);
  // $query->bindValue(':name', $name);
  // $query->bindValue(':lastname', $lastname);
  // $query->bindValue(':email', $email);
  // $query->bindValue(':countryFromPost', $countryFromPost);
  // $query->bindValue(':imgName', $imgAvatar);
  // $query->bindValue(':pass', $pass);

  $query->execute();
} catch (\Exception $e) {
  echo "<h1> Error en su DB </h1>";
  var_dump($e);
  die();
}







 ?>
