<!DOCTYPE html>
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
    <title>Input Employee</title>
 	
</head>


	<!-- cek apakah sudah login -->
	<?php 
    include '../koneksi.php';

	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

<body id="page-top">
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
        <li class="nav-item" >
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
        
        <li class="nav-item active">
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

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Edit Employee</h1>
                    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                </div>

                    <!-- DataTales Example -->
                <?php
                // require_once('koneksi.php');
                    $id = $_SESSION['id_karyawan'];
                    $data = mysqli_query($koneksi,"select * from karyawan where id_karyawan='$id'");
                    while($d = mysqli_fetch_array($data)){
                
                ?>
                <div class="row">
                    <div class="col-lg-6">
                        <form action="editpostemployee.php" method="POST">
                            <div class="form-group">
                                <label>Id Karyawan</label>
                                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                                <input type="text" value="<?php echo $d['id_karyawan']; ?>" class="form-control" name="id_karyawan" disabled>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" value="<?php echo $d['password_karyawan']; ?>" class="form-control" name="password_karyawan">
                            </div>
                            <div class="form-group">
                                <label>Nama Karyawan</label>
                                <input type="text" value="<?php echo $d['nama_karyawan']; ?>" class="form-control" name="nama_karyawan">
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" value="<?php echo $d['tempat_lahir']; ?>" class="form-control" name="tempat_lahir">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" value="<?php echo $d['tanggal_lahir']; ?>" class="form-control" name="tanggal_lahir">
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text" value="<?php echo $d['jabatan_karyawan']; ?>" class="form-control" name="jabatan_karyawan">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" value="<?php echo $d['alamat_karyawan']; ?>" class="form-control" name="alamat_karyawan">
                            </div>
                    </div>
                    <div class="col-lg-6">
                            
                            <div class="form-group">
                                <label>Area</label></br>
                                <select name="area_karyawan" id="nama_area" class=" form-select" required value="<?php echo $d['area_karyawan']; ?>">
                                    <option  selected> <?php echo $d['area_karyawan']; ?> </option>
                                    <?php 
                                        $sql3=mysqli_query($koneksi,"SELECT * FROM area");
                                        while ($data3=mysqli_fetch_array($sql3)) {
                                            if ($d['area_karyawan'] != $data3['nama_area']){
                                        ?>
                                        <option value="<?=$data3['nama_area']?>"><?=$data3['nama_area']?></option>
                                    <?php } ?>
                                            
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>No Hp</label>
                                <input type="text" value="<?php echo $d['hp_karyawan']; ?>" class="form-control" name="hp_karyawan" pattern="[0-9]+">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" value="<?php echo $d['email_karyawan']; ?>" class="form-control" name="email_karyawan">
                            </div>
                            <input type="submit" class="btn btn-primary btn-md btn-block"  value="UPDATE">
                        </form>
                        <?php 
                         }
                        ?>
                    </div>
                </div>

                <!-- Content Row --------->
                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2022</span>
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