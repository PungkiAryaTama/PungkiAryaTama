<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Proses Invoice</title>
  </head>

<style type="text/css">
  h1{
    font-family: Georgia, 'Times New Roman', Times, serif;
    color: rgb(25, 25, 112);
    text-align: center;
    padding-left: 20px;
    padding-top: 30px;
  }
  h3{
    text-align: center;
    text-decoration: underline;
    padding-top: 5px;
  }
  .menu{
    text-align: justify;
    padding-left: 20px;
    padding-top: 40px;
    font-size: 20px;
    background-image: url(3405625.jpg);

  }
  .footer{
    text-decoration: none;
  }

</style>

  <body>

<div class="content">

  <header>
    <h1 class="title"> Invoice </h1>
  </header>

<div class="menu">

  <h3 class="desk"> Tugas 2 Project Inventory Sederhana </h3>

  <?php

  $kode = $_POST['kode'];
  echo "Kode Barang   : " , $kode;
  echo "<br>";

  $nama = $_POST['nama'];
  echo "Nama Barang   : " , $nama;
  echo "<br>";

  $harga = $_POST['harga'];
  echo "Harga Satuan  : " , $harga;
  echo "<br>";

  $satuan =  $_POST['satuan'];
  echo "Satuan        : " , $satuan;
  echo "<br>";

  $kategori = $_POST['kategorib'];
  echo "Kategori      : " , $kategori;
  echo "<br>";

  $stok =  $_POST['stokb'];
  echo "Stok          : " , $stok;
  echo "<br>";

  $total=$_POST['harga']*$_POST['stokb'];
  echo "<hr/>";
  echo "Total Harga   : " , $total;
   ?>

   <div class="footer">
     <center><h3>Thank You !!!</h3></center>
   </div>
</div>
</div>

  </body>
