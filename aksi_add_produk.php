<?php
include "koneksi.php";
$id_produk = $_GET['id_produk'];
$nama   = $_GET['nama'];
$harga    = $_GET['harga'];
$stok   = $_GET['stok'];
$detail   = $_GET['detail'];
$query  = mysqli_query($connect, "insert into produk(id_produk,nama,harga,stok,detail)
values ('$id_produk','$nama','$harga','$stok','$detail')");
if ($query) {
    header('location:admin_produk.php');
} else {
    echo mysqli_error($connect);
}
