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
    <title>Detail Training</title>
 	
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
        <li class="nav-item">
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
        <li class="nav-item ">
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

        <li class="nav-item">
            <a class="nav-link" href="managesupervisor.php">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Data Supervisor</span></a>
        </li>

         <li class="nav-item">
            <a class="nav-link" href="penjadwalan.php">
            <i class="fas fa-fw fa-tasks"></i>
            <span>Penjadwalan</span></a>
        </li>
        <li class="nav-item">
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
            <?php
                include('../koneksi.php');
                    
                        
                $query = "SELECT * FROM pelatihan";
                $urlcrud = "managetraining.php?page=";
            ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Detail Training</h1>
                    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                </div>

                    <!-- DataTales Example -->
                <form action="" method="POST">
                <div class="col-lg-12">
                    <table class="table text-center shadow" style="margin-top: 10px; background-color:grey; color: white;">
                        <tr class="success">
                            
                            <th>Id Pelatihan</th>
                            <th>Nama Pelatihan</th>
                            
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Jenis Pelatihan</th>
                            <th>Provider</th>
                            <th>Tempat Kegiatan</th>
                            <th>Catatan</th>
                        </tr>
                                            
                        <?php
                        $id=$_GET['id'];
                        $no = 1;
                        $data = mysqli_query($koneksi,"select detail_pelatihan.*,pelatihan.nama_pelatihan from detail_pelatihan left join pelatihan on detail_pelatihan.id_nama_pelatihan=pelatihan.id_pelatihan where detail_pelatihan.id='$id'");
                        $d = mysqli_fetch_array($data);
                        ?>    
                            <tr>
                                
                            <td><?php echo $d['id_nama_pelatihan']; ?></td>
                                <td><?php echo $d['nama_pelatihan']; ?></td>
                                <td><?php $orgDate = $d['tanggal_mulai'];  
                                    $newDate = date("d/m/Y H:i", strtotime($orgDate));  
                                    echo  $newDate;   ?> </td>
                                            
                                            <td><?php $orgDate = $d['tanggal_selesai'];  
                                    $newDate = date("d/m/Y H:i", strtotime($orgDate));  
                                    echo $newDate;   ?> </td>
                              
                                <td><?php echo $d['nama_jenis_pelatihan']; ?></td>
                                <td><?php echo $d['provider']; ?></td>
                                <td><?php echo $d['tempat_pelatihan']; ?></td>
                                <td><?php echo $d['catatan']; ?></td>
                            </tr>
                            
                        
                        
                        
                    </table>
                </div>
                </form>           
                <!-- Content Row --------->
                    </br>
                    </br>
                <h5>List Employee For <b><?php echo $d['id_nama_pelatihan'] ?> <?php echo $d['nama_pelatihan'] ?></b> Training</h5>        
                <form action="" method="POST">

                </br>
                <!-- <a target="_blank" href="../spv/exportexcel_listemployeepelatihan.php" class="btn btn-success btn-sm"><span class="fas fa-file-excel"></i></span> Cetak Data</a>   -->
                <div class="col-lg-12">
                <a target="_blank" href="../spv/exportexcel_listemployeepelatihan.php?id_nama_pelatihan=<?php echo $d['id_nama_pelatihan']; ?>" class="btn btn-success btn-sm"><span class="fas fa-file-excel"></i></span> Cetak Data</a>  
                    <table class="table table-hover table-bordered" style="margin-top: 10px">
                        <tr class="success">
                            <th width="50px">No</th>
                            <th>Id Karyawan</th>
                            <th>Nama Karyawan</th>
                            <th>Jabatan</th>
                            
                            <th style="text-align: center;">Action</th>
                        </tr>
                    
                        
                        <?php
                        $id_nama_pelatihan = $d['id_nama_pelatihan'];
                        $no = 1;
                        $data = mysqli_query($koneksi,"select penjadwalan.id_karyawan,penjadwalan.id_nama_pelatihan,  karyawan.* from penjadwalan left join karyawan on penjadwalan.id_karyawan=karyawan.id_karyawan where penjadwalan.id_nama_pelatihan='$id_nama_pelatihan'");
                        while($x = mysqli_fetch_array($data)){
                        ?>    
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $x['id_karyawan']; ?></td>
                                <td><?php echo $x['nama_karyawan']; ?></td>
                                <td><?php echo $x['jabatan_karyawan']; ?></td>
                                
                                <td style="text-align: center;">
      
                                    <?php
                                    echo "
                                        <a class='btn btn-danger btn-md text-center'  value='' href='hapusemployeelisttraining.php?id_nama_pelatihan=".$x['id_nama_pelatihan']."&id_karyawan=".$x['id_karyawan']."&id=".$d['id']."'>hapus</a>
                                        "; ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        
                    </table>
                </div>
                </form> 


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