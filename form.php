<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style type="text/css">

.container,container-fluid{
    margin-left: 170px;
    margin-right: 170px;
    margin-top: 60px;
    margin-bottom: 60px;
    border: 1px solid black;
    border-radius: 10px;
    margin-top: 5px;
    background-color: whitesmoke;
    font-size: 15px;
    text-align: center;

}
h2{
    margin-top: 20px;
    font-family: cursive;
    text-align: center;
}
h4{
    font-family: 'Courier New', Courier, monospace;
    text-align: left;
    margin: 5px;
}
th,td{
    text-align: center;
}
button{
    cursor: pointer;
    background-color: gray;
    border-radius: 10px;
    width: 80%;
    font-family: 'Courier New', Courier, monospace;
    color: gainsboro;
}
menu,th{
  background-color: lightgrey;
}

.table1 {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color: yellow;
    border-collapse: collapse;
    border: 1px solid #f2f5f7;
}

.table1 tr th{
    background: rgb(176, 196, 222);
    color: rgb(0, 0, 139);
    font-family: cursive;
}

.table1, th, td {
    padding: 18px 35px;
    text-align: center;

}
.bg{
  background: red;
  color: white;
}

</style>

<body>
<form method="post" action="simpan_barang.php">


<div class="container">
   <center><table class="table">
        <tr>
          <h2>FORM INPUT MASTER dan STOCK DATA BARANG</h2>
        </tr>
        <tr>
            <td> <h4>Nama Produk</h4></td>
            <td><input type="text" style="width: 300px" name="nama_produk"></td>
        </tr>
        <tr>
            <td><h4>Harga Produk</h4></td>
            <td><input type="number" style="width: 300px" name="harga_produk"></td>
        </tr>
        <tr>
            <td> <h4>Satuan</h4></td>
            <td>
                <select  name="satuan" id="" style="width: 300px">
                    <option value="Pcs">Pieces</option>
                    <option value="Box">Box</option>
                    <option value="Gelas">Gelas</option>
                </select>
            </td>
        </tr>
        <tr>
            <td> <h4>Jenis Produk</h4></td>
            <td>
                <select name="kategori" id="" style="width: 300px">
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </td>
        </tr>

        <tr>
            <td><h4>URL GAMBAR</h4></td>
            <td><input type="url" style="width: 300px" name="Gambar_URL"></td>
        </tr>

        <tr>
            <td><h4>Stock Awal</h4></td>
            <td><input type="number" style="width: 300px" name="stok"></td>
        </tr>
        <tr>
            <td>
            <button type="submit" class="btn-btn success" value="submit" a href="simpan_barang.php">Simpan</button>
            <button onclick="reset()" type="reset">Reset</button>
            </td>
        </tr>
    </table></center>
</div>

<?php
include('Koneksi.php');

$result = $con->query(" SELECT * FROM `master` ");

?>

<table border="1px" align="center" class="menu">
  <tr>
    <th>Kode Produk</th>
    <th>Nama Produk</th>
    <th>Harga Produk</th>
    <th>Satuan</th>
    <th>Kategori</th>
    <th>Gambar URL</th>
    <th>Stok</th>
    <th>Modify</th>
  </tr>

<?php  foreach ($result as $data) {
  // code...

 ?>

  <tr>
    <td><?php echo $data['kode_produk']; ?></td>
    <td><?php echo $data['nama_produk']; ?></td>
    <td><?php echo $data['harga_produk']; ?></td>
    <td><?php echo $data['satuan']; ?></td>
    <td><?php echo $data['kategori']; ?></td>
    <td><?php echo $data['Gambar_URL']; ?></td>
    <?php if ($data['stok'] < 5) {?>
      <td bgcolor="red" style="color:white;"><?php echo $data['stok']; ?></td>
    <?php }else { ?>
      <td><?php echo $data['stok']; ?></td>
    <?php } ?>
    <td><a href="edit.php?key=<?php echo $data['kode_produk'];  ?>">Edit</a>  | <a href="delete.php?key=<?php echo $data['kode_produk'];  ?>">Delete</a></td>
  </tr>

<?php } ?>


</table>

   </form>

</body>
