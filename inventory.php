<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Inventory Barang</title>
  </head>
  <style type="text/css">
      h1{
          color: rgb(25, 25, 112);
          font-family: Georgia, 'Times New Roman', Times, serif;
      }
      body{
          background-image: url(17788.jpg);
          background-size: cover;
          background-attachment: fixed;
      }
      button{
          margin: right;
          width: 120px;
          position: relative;
      }
      .form-group{
          color: rgb(127, 255, 1);
          font-family: Georgia, 'Times New Roman', Times,serif;
      }
      .value{
          color: rgb(127, 255, 1);
      }

  </style>

  <body>
    <div class="container">
        <center><h1>Form Inventory Barang</h1></center>

<form method="post" action="invoice.php">
  <div class="form-group ">
  <label for="staticEmail">Kode Barang</label>
  <div class="col-sm-10">
    <input type="text" readonly class="form-control-plaintext" name="kode" value="BR-01">
  </div>
</div>
    <div class="form-group ">
        <label for="exampleInputEmail1">Nama Barang</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="nama" placeholder="Nama Barang">
    </div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Harga Barang</label>
        <div class="col-sm-10">
        <input type="number" class="form-control" name="harga" placeholder="Harga Barang">
    </div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Satuan</label>
        <div class="col-sm-10">
        <select class="form-control" name="satuan" id="">
        <option value="Liter">Liter</option>
        <option value="Kg">Kilogram</option>
        <option value="Box">Box</option>
    </select>
    </div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Kategori</label>
        <div class="col-sm-10">
        <select class="form-control" name="kategorib" id="">
        <option value="Makanan">Makanan</option>
        <option value="Minuman">Minuman</option>
        <option value="Lainnya">Lainnya</option>
    </select>
    </div>
  </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Stock</label>
        <div class="col-sm-10">
        <input type="number" class="form-control" name="stokb" placeholder="Stock">
    </div>
  </div>
    <center><button type="submit" class="btn btn-success" value="submit" a href="invoice.php">Next</button>
    <button type="reset" class="btn btn-danger">Cancel</button></center>
</form>
  </body>
</html>
