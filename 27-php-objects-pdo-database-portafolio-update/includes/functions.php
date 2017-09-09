<?php

function getHome() {
  include 'conection.php';

  try {
    $sql = "SELECT title, img, skills FROM home WHERE id = 1";
    $results = $conn->query($sql);
  } catch(Exception $e) {
    echo "Se verifico un error: " . $e->getMessage();
    exit();
  }

  $row = $results->fetch(PDO::FETCH_ASSOC);

  return $row;
}

function updateHome($title, $img, $skills) {
  include 'conection.php';

  try {
    $sql = "UPDATE home SET title='$title', img='$img', skills='$skills' WHERE id = 1";
    $conn->exec($sql);
  } catch(Exception $e) {
    echo "Se verifico un error: " . $e->getMessage();
    exit();
  }

  $home = getHome();

  return $home;
}

function getAboutme() {
  include 'conection.php';

  try {
    $sql = "SELECT title, paragraph1, paragraph2 FROM aboutme WHERE id = 1";
    $results = $conn->query($sql);
  } catch(Exception $e) {
    echo "Se verifico un error: " . $e->getMessage();
    exit();
  }

  $row = $results->fetch(PDO::FETCH_ASSOC);

  return $row;
}

function updateAboutme($title, $paragraph1, $paragraph2) {
  include 'conection.php';

  try {
    $sql = "UPDATE aboutme SET title='$title', paragraph1='$paragraph1', paragraph2='$paragraph2' WHERE id = 1";
    $conn->exec($sql);
  } catch(Exception $e) {
    echo "Se verifico un error: " . $e->getMessage();
    exit();
  }

  $aboutme = getAboutme();

  return $aboutme;
}

function createProject($title, $paragraph, $img, $client, $date, $work) {
  include 'conection.php';

  try {
    $sql = "INSERT INTO portafolio (`title`, `paragraph`, `img`, `client`, `date`, `work`)
    VALUES
    ('$title', '$paragraph', '$img', '$client', '$data', '$work')";

    $conn->exec($sql);
  } catch(Exception $e) {
    echo "Se verifico un error: " . $e->getMessage();
    exit();
  }

}

function updateProject($id, $title, $paragraph, $img, $client, $date, $work) {
  include 'conection.php';

  try {
    $sql = "UPDATE portafolio set `title`='$title', `paragraph`='$paragraph', `img`='$img', `client`='$client', `date`='$date', `work`='$work' WHERE id = $id";
    $conn->exec($sql);
  } catch(Exception $e) {
    echo "Se verifico un error: " . $e->getMessage();
    exit();
  }

}

function getProjects() {

  include 'conection.php';

  try {
    $sql = "SELECT * FROM portafolio";
    $results = $conn->query($sql);
  } catch(Exception $e) {
    echo "Se verifico un error: " . $e->getMessage();
    exit();
  }

  $portafolio = $results->fetchAll(PDO::FETCH_ASSOC);

  return $portafolio;
}

function getProject($id) {
  include 'conection.php';

  try {
    $sql = "SELECT * FROM portafolio WHERE id = $id";
    $results = $conn->query($sql);
  } catch(Exception $e) {
    echo "Se verifico un error: " . $e->getMessage();
    exit();
  }

  $row = $results->fetch(PDO::FETCH_ASSOC);

  return $row;
}


?>
