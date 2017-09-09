<?php

function authorize() {

}

function login($username, $password) {
  if($username == 'admin' && $password == '1234') {
    
  } else {
    header("Location: login.php?error=1");
  }

}
