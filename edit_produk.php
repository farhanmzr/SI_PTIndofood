<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit Alat</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akronim">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Landing-Page---Parallax-Background---Logo-Heading-ButtonGIF.css">
</head>

<body id="page-top">

<?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:index.php?pesan=belum_login");
    }
    ?>
  
<div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion p-0" style="background-color: #000066;">
            <div class="container-fluid d-flex flex-column p-2">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-shopping-cart"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>PT Indofood<br>Semarang<br></span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="admin.php">
                            <span>Data Pelanggan</span>
                        </a>
                        <a class="nav-link" href="admin_transaksi.php">
                            <span>Transaksi</span>
                        </a>
                        <a class="nav-link" href="admin_produk.php">
                            <span>Daftar Produk</span>
                        </a>
                        <a class="nav-link" href="logout.php">
                            <span>Log Out</span>
                        </a>
                    </li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
       
        <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-header py-3">
                                <p class="text-primary m-0 font-weight-bold">Edit Produk</p>
                            </div>
                            <div class="card-body">
                                <?php
                                //isikan dengan query select data
                                include "koneksi.php";
                                $id = mysqli_real_escape_string($connect, trim($_GET['id']));
                                $query = mysqli_query($connect, "select * from produk where id_produk='$id'") or die(mysqli_error($connect));

                                while ($plg = mysqli_fetch_array($query)) {
                                    $harga = $plg['harga'];
                                    $nama = $plg['nama'];
                                    $stok = $plg['stok'];
                                    $detail = $plg['detail'];
                                }
                                ?>
                                <form method='POST' action='aksi_edit_produk.php?id_produk=<?php echo $id; ?>'>
                                    <div class="form-group">
                                        <label>
                                            <strong>Nama Produk</strong>
                                            <br>
                                        </label>
                                        <input value="<?php echo $nama; ?>" class="form-control" type="text" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            <strong>Harga</strong>
                                            <br>
                                        </label>
                                        <input value="<?php echo $harga;?>" class="form-control" type="number" name="harga">
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            <strong>Jumlah Stok</strong>
                                            <br>
                                        </label>
                                        <input value="<?php echo $stok; ?>" class="form-control" type="number" name="stok">
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            <strong>Detail Produk</strong>
                                            <br>
                                        </label>
                                        <input value="<?php echo $detail; ?>" class="form-control" type="text" name="detail">
                                    </div>
                                    <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Save&nbsp;Settings</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>