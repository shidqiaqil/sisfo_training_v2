<!DOCTYPE html>
<?php
include('../koneksi.php');
session_start(); 
?>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link  href="../assets/fontawesome/css/all.min.css" rel="stylesheet">
    <!-- <link href="assets/css/loginadmin.css" rel="stylesheet"> -->
    
    <link href="../assets/sbsadmin/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../assets/sbsadmin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <title>Home</title>
 	
    
</head>

    
	<!-- cek apakah sudah login -->
	<?php 
    include '../koneksi.php';
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

<body id="page-top" style="color: white;">
    <div id="wrapper">

    <!-- Sidebar -->
    <ul style="background-color: #c40c0c; border-color: #c40c0c;" class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Hi, Employee</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active" >
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        
        <li class="nav-item">
            <a class="nav-link" href="editemployee.php?id=<?php echo $_SESSION['id_karyawan'] ?>">
            
            <i class="fas fa-fw fa-pen"></i>
            <span>Edit Profile</span></a>
        </li>
        


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="logout.php">
            <i class="fas fa-fw fa-cog"></i>
            <span>Logout</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Search for..." aria-label="Search"
                                        aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    

                    <!-- Nav Item - Messages -->
                

            </nav>
            <!--------------------------------- End of Topbar -------------------------------------------------------->
            <?php
                   
                $id_karyawan = $_SESSION['id_karyawan'];
                $data = mysqli_query($koneksi,"select * from karyawan where id_karyawan='$id_karyawan'");
                $d = mysqli_fetch_array($data);
                // $urlcrud = "manageemployee.php?page=";
            ?>
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                </div>

                <!-- Content Row -->
                <div class="row col-lg-12">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-lg-4">
                    <div class="card mb-4">
                    <div class="card-body text-center" style="color: #858796;">
                        <img src="../assets/img/vecteezy_illustration-of-human-icon-vector-user-symbol-icon-modern_8442086.jpg" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3" ><?php echo $d['nama_karyawan'] ?></h5>
                        <p class="text-muted mb-4"><?php echo $d['jabatan_karyawan'] ?></p>
                        <!-- <p class="text-muted mb-1"></p> -->
                        

                    </div>
                    </div>
</div>
                    <div style="color: #858796;" class="col-lg-8">
                        <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-sm-3">
                                <p  class="mb-0">Nama</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $d['nama_karyawan'] ?></p>
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Id Karyawan</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $d['id_karyawan'] ?></p>
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Tanggal Lahir</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $d['tanggal_lahir'] ?></p>
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Jabatan </p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $d['jabatan_karyawan'] ?></p>
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Alamat</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $d['alamat_karyawan'] ?></p>
                            </div>
                            </div>
                        </div>
                        </div>
                </div>
</div>

                <!-- Content Row ----------->

                <div class="row">
</br>
                <h1 class="h3 mb-2 text-gray-800">My Training</h1>
</br>

                    <!-- DataTales Example -->
                   

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->


                    <!-- DataTales Example -->
                <form action="" method="POST">
</br>
                <div class="card shadow mb-4">
                <div class="col-lg-12 ">
                </br>
                     
                
                    <table class="table table-hover table-success text-center" style="margin-top: 10px">
                        <tr style="color:black;" class="success">
                            <th width="50px">No</th>
                            <th>Id Pelatihan</th>
                            <th>Nama Pelatihan</th>
                            <th>Jadwal Pelatihan</th>
                            <th>Jenis Pelatihan</th>
                            
                            
                        </tr>
                    
                        
                        <?php
                        
                        $no = 1;
                        $a=$d['id_karyawan'];
                        $data = mysqli_query($koneksi,"SELECT * FROM penjadwalan left join pelatihan ON penjadwalan.id_pelatihan = pelatihan.id_pelatihan where penjadwalan.id_karyawan ='$a';");
                        while($b = mysqli_fetch_array($data)){
                        ?>    
                            <tr>
                                <td style="color:black;"><?php echo $no++; ?></td>
                                <td style="color:black;"><?php echo $b['id_pelatihan']; ?><a/></td>
                                <td style="color:black;"><?php echo $b['nama_pelatihan']; ?></td>
                                <td style="color:black;"><?php echo $b['jadwal_pelatihan']; ?></td>
                                <td style="color:black;"><?php echo $b['jenis_pelatihan']; ?></td>
                                
                                
                            </tr>
                            <?php
                        }
                        ?>
                        
                    </table>
                </div>
                    </div>
                </form>
                    
                </div>

                <!-- Content Row --------->
                >

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span style="color: #858796;">Copyright &copy; Your Website 2021</span>
                    <a href="https://www.vecteezy.com/free-vector/profile">Profile Vectors by Vecteezy</a>
                </div>
                
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
    </div>

    
    <!-- Bootstrap core JavaScript-->
    <script src="../assets/sbsadmin/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/sbsadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/sbsadmin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/sbsadmin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/sbsadmin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/sbsadmin/js/demo/chart-area-demo.js"></script>
    <script src="../assets/sbsadmin/js/demo/chart-pie-demo.js"></script>
 
</body>
</html>