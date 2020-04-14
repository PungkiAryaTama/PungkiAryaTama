<?php
try
{
  $con = new PDO("mysql:host=localhost;dbname=pwpb","root","12345");
  // echo "Database Berhasil Terhubung!!";
}
catch (PDOException $e)
{
  echo $e->getMessage();
}
?>
