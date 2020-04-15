<?php
include ('Koneksi.php');
$key= $_GET['key'];
$pk = $_POST['kode_produk'];

$nama_produk = $_POST ['nama_produk'];
$harga_produk = $_POST ['harga_produk'];
$satuan = $_POST ['satuan'];
$kategori = $_POST ['kategori'];
$gambar = $_POST['Gambar_URL'];
$stok = $_POST ['stok'];

$result = $con->query ("UPDATE `master` SET `nama_produk` = '$nama_produk', `harga_produk` = '$harga_produk', `satuan` = '$satuan', `kategori` = '$kategori' , `Gambar_URL` = '$gambar' , `stok` = '$stok' WHERE `master`.`kode_produk` = $pk;");
if ($result==TRUE) {
  echo "Berhasil Merubah DATA!!";
      header("location:form.php?info=edit");
}else {
  echo "Gagal Merubah DATA!!";
}

?>
