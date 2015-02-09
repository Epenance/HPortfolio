<?php
  $project = $_GET['project'];
  $url = "projects/$project.php";

  if (file_exists($url)) {
    include($url);
  } else {
    include("index.php");
  }
?>
