<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Data Pelanggan</title>
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
    if ($_SESSION['status'] != "login_pembeli") {
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
        
                <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Data Pelanggan</p>
                        </div>
                        <div class="card-body"><a class="card-link" href="add_pembeli.php"><button class="btn btn-primary btn-info"><i class="fa fa-plus"></i>&nbsp;Tambah Data Pelanggan</button></a> </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID Toko</th>
                                            <th>Nama Toko</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                            <th>Nomor Hp</th>
                                            <th>Pilihan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        include "koneksi.php";

                                        $query = "SELECT * FROM pembeli";
                                        $result = mysqli_query($connect, $query) or die(mysqli_error($connect));

                                        while ($row = mysqli_fetch_array($result)) {
                                            ?>

                                            <tr>
                                                <td><?php echo $row['id_pembeli']; ?></td>
                                                <td><?php echo $row['nama']; ?></td>
                                                <td><?php echo $row['alamat']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['no_hp']; ?></td>
                                                <td>
                                                <div class="btn-group" role="group">
                                                        <a href='edit_pembeli.php?id=<?php echo $row['id_pembeli']; ?>'>
                                                            <button class="btn btn-primary btn-success" type="button">
                                                                <i class="fa fa-edit"></i>Edit</button>
                                                        </a>
                                                </div>         
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Farhan Mazario</span></div>
                </div>
            </footer>
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