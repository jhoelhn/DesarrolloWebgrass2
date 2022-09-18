<?php
function conectar()
{
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "dbCanchas";
  $con = mysqli_connect($host, $user, $pass) or die("error de conexion");
  mysqli_select_db($con, $db);
  return $con;
}
