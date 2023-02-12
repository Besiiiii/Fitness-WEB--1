<?php
    include_once('productConnection.php');
  
  // Merr te dhenat e produktit nga forma
  $emri = mysqli_real_escape_string($lidhja, $_POST['emri']);
  $pershkrimi = mysqli_real_escape_string($lidhja, $_POST['pershkrimi']);
  $foto_emri = $_FILES['foto']['name'];
  $foto_tmp_emri = $_FILES['foto']['tmp_name'];
  
  // Kontrollo nese fajlli i zgjedhur eshte i tipit PNG
  $foto_tipi = strtolower(pathinfo($foto_emri, PATHINFO_EXTENSION));
  if ($foto_tipi != "png") {
    die("Fajlli i zgjedhur nuk eshte i tipit PNG.");
  }
  
  // Ngarko fajllin ne direktorine e fotos dhe kthe emrin e tij te ri
//   $foto_tmp_emri = ".png";
//   move_uploaded_file($foto_tmp_emri, "images/proteins/" . $foto_tmp_emri);

  $foto_folder = "../images/proteins/";
  $foto_tmp_emri = $foto_emri;
  move_uploaded_file($foto_tmp_emri, $foto_emri);

  // Shto produktin ne databaze
  $sql = "INSERT INTO produktet (emri, pershkrimi, foto_emri) VALUES ('$emri', '$pershkrimi', '$foto_tmp_emri')";
  if (!mysqli_query($lidhja, $sql)) 
  {
    die("Gabim gjate shtimit te produktit: " . mysqli_error($lidhja));
  }
  header("Location:proteins.php");

  
  mysqli_close($lidhja);
?>





<?php
//     include_once('dbConnection.php');
  
//   // Merr te dhenat e produktit nga forma
//   $emri = mysqli_real_escape_string($lidhja, $_POST['emri']);
//   $pershkrimi = mysqli_real_escape_string($lidhja, $_POST['pershkrimi']);
//   $foto_emri = $_FILES['foto']['name'];
//   $foto_tmp_emri = $_FILES['foto']['tmp_name'];
  
//   // Kontrollo nese fajlli i zgjedhur eshte i tipit PNG
//   $foto_tipi = strtolower(pathinfo($foto_emri, PATHINFO_EXTENSION));
//   if ($foto_tipi != "png") {
//     die("Fajlli i zgjedhur nuk eshte i tipit PNG.");
//   }
  
//   // Ngarko fajllin ne direktorine e fotos dhe kthe emrin e tij te ri
//   $foto_tmp_emri = uniqid() . ".png";
//   move_uploaded_file($foto_tmp_emri, "images/proteins/");
  
//   // Shto produktin ne databaze
//   $sql = "INSERT INTO produktet (emri, pershkrimi, foto_emri) VALUES ('$emri', '$pershkrimi', '$foto_tmp_emri')";
//   if (!mysqli_query($lidhja, $sql)) {
//     die("Gabim gjate shtimit te produktit: " . mysqli_error($lidhja));
//   }
  
//   mysqli_close($lidhja);
?>