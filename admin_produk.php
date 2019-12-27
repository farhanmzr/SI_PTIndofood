<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Daftar Produk</title>
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
    if ($_SESSION['status'] != "login_admin") {
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
                            <p class="text-primary m-0 font-weight-bold">Daftar Produk</p>
                        </div>
                        <div class="card-body">
                        <div class="card-body"><a class="card-link" href="add_produk.php"><button class="btn btn-primary btn-info"><i class="fa fa-plus"></i>&nbsp;Tambah Produk</button></a> </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <form class="form-inline" method="POST" name="submit">  
         
          <div class="form-group mx-sm-2 mb-1">
            <label for="inputPassword2" class="sr-only">Search</label>
          </div> 
          <input type="search" class="form-control" id="inputPassword2" placeholder="Cari Produk" name="keyword"> &nbsp; &nbsp;
          <button type="submit" class="btn btn-primary mb-0" name="find">Cari</button>
        </form> </br>
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID Produk</th>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                            <th>Stock</th>
                                            <th>Detail Produk</th>
                                            <th>Pilihan</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                        $host = mysqli_connect('localhost','root','','ptindofood');

                          if (isset($_POST['find'])) {
                            $cari = $_POST['keyword']; 

                            if ($cari == "") {
                              $query = mysqli_query($host, "Select * from produk");
                              while($row = mysqli_fetch_array($query)){
                              ?>
                               <tr>
                                                <td><?php echo $row['id_produk']; ?></td>
                                                <td><?php echo $row['nama']; ?></td>
                                                <td><?php echo "Rp";?> &nbsp;  <?php echo $row['harga']; echo ",00"; ?></td>
                                                <td><?php echo $row['stok']; ?></td>
                                                <td><?php echo $row['detail']; ?></td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href='edit_produk.php?id=<?php echo $row['id_produk']; ?>'>
                                                            <button class="btn btn-primary btn-success" type="button">
                                                                <i class="fa fa-edit"></i>Edit</button>
                                                        </a> &nbsp;
                                                        <a href='delete_produk.php?id=<?php echo $row['id_produk']; ?>' onclick="return confirm('Anda yakin mau menghapus data produk ini ?')">
                                                            <button class="btn btn-primary btn-danger" type="button">
                                                                <i class="fa fa-trash"></i>Delete</button>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                              <?php }

                              # code...
                            }
                            else{ // jika diisi keyword
                              $query = mysqli_query($host, "Select * from produk where nama like '%".$cari."%'");
                              while($row = mysqli_fetch_array($query)){
                              ?>
                               <tr>
                                                <td><?php echo $row['id_produk']; ?></td>
                                                <td><?php echo $row['nama']; ?></td>
                                                <td><?php echo "Rp";?> &nbsp;  <?php echo $row['harga']; echo ",00"; ?></td>
                                                <td><?php echo $row['stok']; ?></td>
                                                <td><?php echo $row['detail']; ?></td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href='edit_produk.php?id=<?php echo $row['id_produk']; ?>'>
                                                            <button class="btn btn-primary btn-success" type="button">
                                                                <i class="fa fa-edit"></i>Edit</button>
                                                        </a> &nbsp;
                                                        <a href='delete_produk.php?id=<?php echo $row['id_produk']; ?>' onclick="return confirm('Anda yakin mau menghapus data produk ini ?')">
                                                            <button class="btn btn-primary btn-danger" type="button">
                                                                <i class="fa fa-trash"></i>Delete</button>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                              <?php }
                            }
                            # code...
                          }
                          else{

                            $query = mysqli_query($host, "Select * from produk"); //kalo tombolnya tidak diapa-apain
                            while($row = mysqli_fetch_array($query)){
                            ?>
                             <tr>
                                                <td><?php echo $row['id_produk']; ?></td>
                                                <td><?php echo $row['nama']; ?></td>
                                                <td><?php echo "Rp";?> &nbsp;  <?php echo $row['harga']; echo ",00"; ?></td>
                                                <td><?php echo $row['stok']; ?></td>
                                                <td><?php echo $row['detail']; ?></td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href='edit_produk.php?id=<?php echo $row['id_produk']; ?>'>
                                                            <button class="btn btn-primary btn-success" type="button">
                                                                <i class="fa fa-edit"></i>Edit</button>
                                                        </a> &nbsp;
                                                        <a href='delete_produk.php?id=<?php echo $row['id_produk']; ?>' onclick="return confirm('Anda yakin mau menghapus data produk ini ?')">
                                                            <button class="btn btn-primary btn-danger" type="button">
                                                                <i class="fa fa-trash"></i>Delete</button>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                            <?php }

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