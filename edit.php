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
    margin-left: 60px;
    margin-right: 60px;
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
    color:rgb(0, 0, 139);
    background: rgb(176, 196, 222);
}
h4{
    font-family: 'Courier New', Courier, monospace;
    text-align: left;
    color: rgb(0, 0, 139);
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


</style>

<body>
  <?php
include('Koneksi.php');
$pk = $_GET['key'];
$result = $con->query(" SELECT * FROM `master` WHERE `kode_produk` = $pk  ");
foreach ($result as $data) {

   ?>
<form method="post" action="proses_edit_barang.php">


<div class="container">
   <center><table class="table">
        <tr>
          <h2>FORM EDIT MASTER dan STOCK DATA BARANG</h2>
        </tr>
        <tr>
            <td> <h4>Nama Produk</h4></td>
            <td><input type="hidden" name="kode_produk" value="<?php echo $data['kode_produk']; ?>"><input type="text" style="width: 300px" name="nama_produk" value="<?php echo $data['nama_produk']; ?>"></td>
        </tr>
        <tr>
            <td><h4>Harga Produk</h4></td>
            <td><input type="number" style="width: 300px" name="harga_produk" value="<?php echo $data['harga_produk']; ?>"></td>
        </tr>
        <tr>
            <td> <h4>Satuan</h4></td>
            <td>
                <select  name="satuan" id="" style="width: 300px">
                    <option <?php if ($data ['satuan']=="Pcs"){echo "selected=selected" ; } ?> value="Pcs">Pieces</option>
                    <option <?php if ($data ['satuan']=="Box"){echo "selected=selected" ; } ?> value="Box">Box</option>
                    <option <?php if ($data ['satuan']=="Gelas"){echo "selected=selected" ; } ?> value="Gelas">Gelas</option>
                </select>
            </td>
        </tr>
        <tr>
            <td> <h4>Jenis Produk</h4></td>
            <td>
                <select name="kategori" id="" style="width: 300px">
                    <option <?php if ($data ['kategori']=="Makanan"){echo "selected=selected" ; } ?> value="Makanan">Makanan</option>
                    <option <?php if ($data ['kategori']=="Minuman"){echo "selected=selected" ; } ?> value="Minuman">Minuman</option>
                    <option <?php if ($data ['kategori']=="Lainnya"){echo "selected=selected" ; } ?> value="Lainnya">Lainnya</option>
                </select>
            </td>
        </tr>

        <tr>
            <td><h4>URL GAMBAR</h4></td>
            <td><input type="url" style="width: 300px" name="Gambar_URL" value="<?php echo $data['Gambar_URL']; ?>"></td>
        </tr>

        <tr>
            <td><h4>Stock Awal</h4></td>
            <td><input type="number" style="width: 300px" name="stok" value="<?php echo $data['stok']; ?>"></td>
        </tr>
        <tr>
            <td>
            <button type="submit" class="btn-btn success" value="submit" a href="proses_edit_barang.php">Simpan</button>
            </td>
        </tr>
    </table></center>
</div>

</table>

   </form>
<?php } ?>
</body>
