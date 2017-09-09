<?php

include 'includes/header.php';

$id = $_GET['id'];
deleteProject($id);
header("Location: portafolio.php");

?>
