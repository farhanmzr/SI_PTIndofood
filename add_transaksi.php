<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Tambah Transaksi</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akronim">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Landing-Page---Parallax-Background---Logo-Heading-ButtonGIF.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
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
                        <a class="nav-link" href="pembeli.php">
                            <span>Data Pelanggan</span>
                        </a>
                        <a class="nav-link" href="pembeli_transaksi.php">
                            <span>Transaksi</span>
                        </a>
                        <a class="nav-link" href="pembeli_produk.php">
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
        
        <div class= "container col-md-10">
                    <div class="card shadow">
                    <div class="card-header py-4">
                        <div class="col-md-12">
                        <p class="text-primary m-0 font-weight-bold">Tambah Transaksi</p>
                            <div class="card-body">
                                <form method="post" action="aksi_add_transaksi.php">
                                    <div class="form-group">
                                        <label for="address">
                                            <strong>ID Pembeli</strong>
                                        </label>
                                        <select class="form-control" id="id_pembeli" name='id_pembeli'>
                                            <?php include "koneksi.php";
                                            $query = "SELECT * FROM pembeli";
                                            $result    = mysqli_query($connect, $query) or die(mysqli_error($connect));
                                            while ($row    = mysqli_fetch_array($result)) { ?>
                                                <option value="<?php echo    $row['id_pembeli'];    ?>"><?php echo $row['id_pembeli']; ?></option>
                                            <?php } ?>
                                        </select></div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="address">
                                                <strong>Nama Toko</strong>
                                                <br>
                                            </label>
                                            <input class="form-control" type="text" id="nama" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="address">
                                                <strong>Pilihan Produk</strong>
                                            </label>
                                            <select class="form-control" name='produk'>
                                                <?php include "koneksi.php";
                                                $query = "SELECT * FROM produk";
                                                $result    = mysqli_query($connect, $query) or die(mysqli_error($connect));
                                                while ($row    = mysqli_fetch_array($result)) { ?>
                                                    <option value="<?php echo    $row['id_produk'];    ?>"><?php echo $row['nama']; ?></option>
                                                <?php } ?>
                                            </select></div>
                                        <div class="form-group">
                                            <label for="address">
                                                <strong>Jumlah produk yang dibeli</strong>
                                                <br>
                                            </label>
                                            <input class="form-control" type="number" min="1" name="jml" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">
                                                <strong>Tanggal Transaksi</strong>
                                                <br>
                                            </label>
                                            <input type="date" class="form-control" name="tgl_transaksi">
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