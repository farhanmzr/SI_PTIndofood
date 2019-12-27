<?php
include "koneksi.php";
$id_produk = $_GET['id_produk'];
$nama   = $_POST['nama'];
$harga  = $_POST['harga'];
$stok   = $_POST['stok'];
$detail = $_POST['detail'];


$query  = mysqli_query($connect, "update produk set nama='$nama',harga='$harga',stok='$stok',detail='$detail' where id_produk='$id_produk' ")
    or die(mysqli_error($connect));
if ($query) {
    header('location:admin_produk.php');
} else {
    echo mysqli_error($connect);
}
