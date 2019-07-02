<?php

 require_once 'conection.php';
//conexion con la DB


// $statement = $conection->prepare('SELECT * FROM user');
//
// $statement->execute();
//
// $users = $statement->fetchAll(PDO::FETCH_ASSOC);
//
// if (!user) {
//   // me fijo si la DB está vacía migro nuestro json a nuestro DB mysql
//
//   $userFromJSON = json_decode(file_get_contents('users.json'), true);
//
//   foreach ($userFromJSON as $oneUser) {
//     // inserto cada usuario del JSON en la DB sql
//     //en cada uno de los casilleros de la DB en el orden que los tengo guardados
//     $statement2 = $conection->prepare("INSERT INTO user('username', 'name', 'lastname','email', 'country', 'avatar', 'password')");
//
//     $statement2->execute([$oneUser['username'],$oneUser['name'],$oneUser['lastname'],$oneUser['email'],$oneUser['country'],$oneUser['avatar'], $oneUser['password']]);
//   }
// }


$statement = $db->prepare('SELECT * FROM user');

$statement->execute();

$users = $statement->fetchAll(PDO::FETCH_ASSOC);

if (!$users) {
  // me fijo si la DB está vacía migro nuestro json a nuestro DB mysql

  $userFromJSON = json_decode(file_get_contents('users.json'), true);

  foreach ($userFromJSON as $oneUser) {
    // inserto cada usuario del JSON en la DB sql
    //en cada uno de los casilleros de la DB en el orden que los tengo guardados
    $statement2 = $db->prepare("INSERT INTO user('username', 'name', 'lastname','email', 'country', 'avatar', 'password')");

    $statement2->execute([$oneUser['username'],$oneUser['name'],$oneUser['lastname'],$oneUser['email'],$oneUser['country'],$oneUser['avatar'], $oneUser['password']]);
  }
}

 ?>
