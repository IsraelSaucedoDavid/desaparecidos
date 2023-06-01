<?php

include("db.php");

if (isset($_POST['save'])) {
  $num_int = $_POST['num_int'];
  $num_cdi = $_POST['num_cdi'];
  $municipio =  $_POST['municipio'];
  $colonia = $_POST['colonia'];
  $fe_denuncia = $_POST['fe_denuncia'];
  $de_ausencia = $_POST['de_ausencia'];
  $denunciante = $_POST['denunciante'];
  $victima = $_POST['victima'];
  $fe_nacimiento = $_POST['fe_nacimiento'];
  $edad = $_POST['edad'];
  $sexo = $_POST['sexo'];
  $estatus = $_POST['estatus'];
  $delito = $_POST['delito'];
  $fe_localizacion = $_POST['fe_localizacion'];
  $mp = $_POST['mp'];



  echo $num_int;
  echo "<br>";
  echo $num_cdi;
  echo "<br>";
  echo $municipio;
  echo "<br>";
  echo $colonia;
  echo "<br>";
  echo $fe_denuncia;
  echo "<br>";
  echo $de_ausencia;
  echo "<br>";
  echo $denunciante;
  echo "<br>";
  echo $victima;
  echo "<br>";
  echo $fe_nacimiento;
  echo "<br>";
  echo $edad;
  echo "<br>";
  echo $sexo;
  echo "<br>";
  echo $estatus;
  echo "<br>";
  echo $delito;
  echo "<br>";
  echo $fe_localizacion;
  echo "<br>";
  echo $mp;
  echo "<br>";

  //$query = "INSERT INTO desaparecido(num_int, num_cdi, municipio, colonia, fe_denuncia, de_ausencia, denunciante, victima, fe_nacimiento, edad, sexo, estatus, delito, fe_localizacion, mp) values ('$num_int', '$num_cdi', '$municipio', '$colonia', '$fe_denuncia', '$de_ausencia', '$denunciante', '$victima', '$fe_nacimiento', '$edad', '$fe_localizacion', '$mp')";


  $query = "INSERT INTO desaparecido(num_int, num_cdi, municipio, colonia, fe_denuncia, de_ausencia, denunciante, victima, fe_nacimiento, edad, sexo, estatus, delito, fe_localizacion, mp) values ('$num_int', '$num_cdi', '$municipio', '$colonia', '$fe_denuncia', '$de_ausencia', '$denunciante', '$victima', '$fe_nacimiento', '$edad', '$sexo', '$estatus', '$delito', '$fe_localizacion', '$mp')";

  $resultado = mysqli_query($con, $query);
  if (!$isset) {
    die("Error");
  };

  echo "saves";
}
