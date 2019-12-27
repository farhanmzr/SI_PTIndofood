<?php
include "koneksi.php";
$id = $_GET['id'];
$id_pembeli     = $_POST['id_pembeli'];
$nama   = $_POST['nama'];
$alamat    = $_POST['alamat'];
$email    = $_POST['email'];
$no_hp = $_POST['no_hp'];

$query  = mysqli_query($connect, "update pembeli set nama='$nama',alamat='$alamat',email='$email',no_hp='$no_hp' where id_pembeli='$id' ")
    or die(mysqli_error($connect));
if ($query) {
    header('location:pembeli.php');
} else {
    echo mysqli_error($connect);
}
