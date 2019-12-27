<!-- <?php
include "koneksi.php";
$id = $_GET['id'];

//isikan dengan query select data
include "koneksi.php";
$id = $_GET['id'];
$q = mysqli_query($connect, "SELECT * FROM transaksi where id_order='$id' ") or die(mysqli_error($connect));

while ($tr = mysqli_fetch_array($q)) {
    $id_order = $tr['id_order'];

    $no_ktp = $tr['no_ktp'];
    $alat = $tr['id_alat'];
    $jml = $tr['jml'];
    $tgl_sewa = $tr['tgl_pinjam'];
    $tgl_keluar = $tr['tgl_kembali'];
    $total = $tr['total'];
}

$alatt  = mysqli_query($connect, "SELECT * from alat where id_alat=$alat");
while ($plg = mysqli_fetch_array($alatt)) {
    $harga = $plg['harga'];
    $nama_alat = $plg['nama'];
    $stok = $plg['stok'];
}

$qu = mysqli_query($connect, "INSERT INTO `riwayat` (`id_order`, `tgl_pinjam`, `tgl_kembali`, `no_ktp`, `id_alat`, `jml`, `total`) VALUES ($id_order, '$tgl_sewa', '$tgl_keluar', '$no_ktp', '$alat', '$jml', '$total');");
if ($qu) {
    $new_stok = $stok + $jml;
    $stokk = mysqli_query($connect, "update alat set stok='$new_stok' where id_alat='$alat' ");
    if ($stokk) {
        $query = mysqli_query($connect, "delete from transaksi where id_order='$id'")
            or die(mysqli_error($connect));
        if ($query) {
            header('location:transaksi.php');
        } else {
            echo mysqli_error($connect);
        }
    }
} -->
