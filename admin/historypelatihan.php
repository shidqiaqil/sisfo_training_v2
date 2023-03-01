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
    <title>Histori Pelatihan</title>
 	
    <link rel="stylesheet" href = "../assets/sbsadmin/DataTables/jquery.dataTables.min.css">
    <script src= "../assets/sbsadmin/DataTables/jquery-3.5.1.js"></script>
    <script src= "../assets/sbsadmin/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
    </script>
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
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item ">
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
        <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseone"
                    aria-expanded="true" aria-controls="collapseone">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Karyawan</span>
                </a>
                <div id="collapseone" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sub Menu :</h6>
                        <a class="collapse-item" href="inputemployee.php">Input Data Karyawan</a>
                        <a class="collapse-item" href="manageemployee.php">Manage Data Karyawan</a>
                    </div>
                </div>
        </li>
        <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-clipboard"></i>
                    <span>Data Pelatihan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sub Menu :</h6>
                        <a class="collapse-item" href="inputtraining.php">Input Data Pelatihan</a>
                        <a class="collapse-item" href="managetraining.php">Manage Data Pelatihan</a>
                    </div>
                </div>
        </li>

        <li class="nav-item ">
            <a class="nav-link" href="managesupervisor.php">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Data Supervisor</span></a>
        </li>

         <li class="nav-item">
            <a class="nav-link" href="penjadwalan.php">
            <i class="fas fa-fw fa-tasks"></i>
            <span>Penjadwalan</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="historypelatihan.php">
            <i class="fas fa-fw fa-history"></i>
            <span>Histori Pelatihan</span></a>
        </li>
        <!--<li class="nav-item">
            <a class="nav-link" href="inputtraining.php">
            <i class="fas fa-fw fa-pencil-ruler"></i>
            <span>Input Training</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="manageemployee.php">
            <i class="fas fa-fw fa-clipboard"></i>
            <span>Manage Employee</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="managetraining.php">
            <i class="fas fa-fw fa-tasks"></i>
            <span>Manage Training</span></a>
        </li> -->


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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

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
                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hello Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="../assets/sbsadmin/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            
                        </li>

                    </ul>

                </nav>

            </nav>
            <!--------------------------------- End of Topbar -------------------------------------------------------->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Input Histori Pelatihan </h1>
                    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                </div>

                    <!-- DataTales Example -->
                <?php
                // require_once('koneksi.php');
             

                
                if($_POST){
                    
                    try {
                        $sql = "INSERT INTO histori_pelatihan 
                        (id_karyawan, nama_karyawan, posisi, pelatihan, plant ,cost_center,cost_center_name ,date_of_expired ) 
                        VALUES ('".$_POST['id_karyawan']."','".$_POST['nama_karyawan']."','".$_POST['posisi']."','".$_POST['pelatihan']."','".$_POST['plant']."','".$_POST['cost_center']."','".$_POST['cost_center_name']."','".$_POST['date_of_expired']."')";
                        if(!$koneksi->query($sql)){
                            echo $koneksi->error;
                            die();
                        }

                    } catch (Exception $e) {
                        echo $e;
                        die();
                    }
                    echo "<script>
                    alert('Data berhasil di simpan');
                    window.location.href='historypelatihan.php';
                    </script>";}
                 
                ?>
                <div class="row">
                    <div class="row col-lg-12">
                        <form action="" method="POST">
                            
                        <div class="row">
                            <div class="col">
                                <label>Id Karyawan</label>
                                <input type="text" class="form-control" placeholder="Id Karyawan" aria-label="Id Karyawan" name="id_karyawan" required>
                            </div>
                            <div class="col">
                                <label>Nama Karyawan</label>
                                <input type="text" class="form-control" placeholder="Nama Karyawan" aria-label="Nama Karyawan" name="nama_karyawan" required>
                            </div>
                            <div class="col">
                                <label>Posisi</label>
                                <input type="text" class="form-control" placeholder="Posisi" aria-label="Posisi" name="posisi" required>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col">
                                <label>Pelatihan</label>
                                <input type="text" class="form-control" placeholder="pelatihan" aria-label="pelatihan" name="pelatihan" required>
                            </div>
                            <div class="col">
                                <label>Cost center</label>
                                <input type="text" class="form-control" placeholder="Cost center" aria-label="Cost center" name="cost_center" required>
                            </div>
                            <div class="col">
                                <label>Plant</label>
                                <input type="text" class="form-control" placeholder="Plant" aria-label="Plant" name="plant" required>
                            </div>
                            <div class="col">
                                <label>Cost Center Name</label>
                                <input type="text" class="form-control" placeholder="Cost Center Name" aria-label="Cost Center Name" name="cost_center_name" required>
                            </div>
                            <div class="col">
                                <label>Date of Expired</label>
                                <input type="date" class="form-control" placeholder="Date of Expired" aria-label="Date of Expired" name="date_of_expired" required>
                            </div>
                        </div>
                            <input type="submit" class="my-4 btn btn-primary btn-md btn-block" name="create" value="Submit">
                        </form>
                    </div>
                    <div class="col-lg-8"> 
                            
                    </div>
                </div>

                <div class="my-5 d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Histori Pelatihan </h1>
                    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                </div>
                
                <form action="" method="POST">
                   
                
                <div class="card shadow mb-4">
                </br>
                
                <div class="col-lg-12">
                    
                    <table id="example" class="hover row-border " style="margin-top: 10px">
                    
                    <thead>
                        
                    <tr class="success">
                            <th width="50px">No</th>
                            <th>Id Karyawan</th>
                            <th>Nama Karyawan</th>
                            <th>Posisi</th>
                            <th>Pelatihan</th>
                            <th>Cost center</th>
                            <th>Plant</th>
                            <th>Cost Center Name</th>
                            <th>Date of Expired</th>
                            
                            <th style="text-align: center;">Actions</th>
                        </tr>
                    </thead>
                        
                    
                        
                        <?php
                        
                        $data = mysqli_query($koneksi,"select * from histori_pelatihan");
                        $no = 1;
                        
                        while($d = mysqli_fetch_array($data)){
                        ?>    
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['id_karyawan']; ?></td>
                                <td><?php echo $d['nama_karyawan']; ?></td>
                                <td><?php echo $d['posisi']; ?></td>
                                <td><?php echo $d['pelatihan']; ?></td>
                                <td><?php echo $d['cost_center']; ?></td>
                                <td><?php echo $d['plant']; ?></td>
                                <td><?php echo $d['cost_center_name']; ?></td>
                                <td><?php echo $d['date_of_expired'];   ?> </td>
                                <td style="text-align: center;">
                                    <a onclick="return confirm('Apakah yakin data akan di hapus?')" href="hapushistoripelatihan.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-sm"><span class="far fa-trash-alt"></span></a>
                                   
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        
                        
                    </table>
                    <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
                </div>
                
                    </div>
                </form>
                    
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
    <!-- <script src="../assets/sbsadmin/vendor/jquery/jquery.min.js"></script> -->
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