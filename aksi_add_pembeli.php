<?php
include "koneksi.php";
$id_pembeli  = $_POST['id_pembeli'];
$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_hp   = $_POST['no_hp'];
$query  = mysqli_query($connect, "insert into pembeli(id_pembeli,nama,alamat,email,no_hp)
values ('$id_pembeli','$nama','$alamat','$email','$no_hp')");
if ($query) {
    header('location:pembeli.php');
} else {
    echo mysqli_error($connect);
}
