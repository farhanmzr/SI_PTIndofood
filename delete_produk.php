<?php
include "koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($connect, "delete from produk where id_produk='$id'")
    or die(mysqli_error($connect));
if ($query) {
    header('location:admin_produk.php');
} else {
    echo mysqli_error($connect);
}
