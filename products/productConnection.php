<?php
  // Lidhja me databazën
  $lidhja = mysqli_connect("localhost", "root", "", "3bfitness");
  
  // Kontrollo nese ka gabime ne lidhje
  if (mysqli_connect_errno()) {
    die("Lidhja me databazen deshtoi: " . mysqli_connect_error());
  }
?>
