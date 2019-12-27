<?php
include "koneksi.php";
$produk=$_POST['produk'];
$id_pembeli    = $_POST['id_pembeli'];
$nama   = $_POST['nama'];
$jml   = $_POST['jml'];
$tgl_transaksi   = $_POST['tgl_transaksi'];


$produkk  = mysqli_query($connect, "SELECT * from produk where id_produk=$produk");
while ($plg = mysqli_fetch_array($produkk)) {
    $harga = $plg['harga'];
    $nama_produk = $plg['nama'];
    $stok = $plg['stok'];
    $total = $harga * $jml;
}
if ($stok > 0 && $jml <= $stok) {
    $query  = mysqli_query($connect, "INSERT INTO `transaksi` (`id_order`, `tgl_transaksi`, `id_pembeli`, `nama`, `id_produk`, `harga`, `jml`, `total`) VALUES (NULL, '$tgl_transaksi', '$id_pembeli', '$nama', '$produk', '$harga', '$jml', '$total');");
    if ($query) {
        $new_stok = $stok - $jml;
        $stokk = mysqli_query($connect, "update produk set stok='$new_stok' where id_produk='$produk' ");
        if ($stokk) {
            header('location:pembeli_transaksi.php');
        } else {
            echo mysqli_error($connect);
        }
    } else {
        echo mysqli_error($connect);
    }
} else {
    echo "<script>alert('STOK TIDAK MEMENUHI');window.location='add_transaksi.php'</script>";
}
