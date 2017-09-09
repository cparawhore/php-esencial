<?php

session_start();

function authorize() {

  if(isset($_SESSION['authorize'])) {

    $authorize = $_SESSION['authorize'];

    if($authorize != 'OK') {
      header("Location: login.php");
      exit();
    }

  } else {

    header("Location: login.php");
    exit();

  }

}

function login($username, $password) {
  if($username == 'admin' && $password == '1234') {
    $_SESSION['authorize'] = 'OK';
    header("Location: index.php");
  } else {
    header("Location: login.php?error=1");
  }

}

function logout() {
  unset($_SESSION['authorize']);
  header("Location: login.php");
}
