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
 	
    <link rel="stylesheet" href = "../assets/sbsadmin/DataTables/jquery.dataTables.min.css">
    <script src= "../assets/sbsadmin/DataTables/jquery-3.5.1.js"></script>
    <script src= "../assets/sbsadmin/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
    </script>
    <title>Penjadwalan</title>
    
</head>

    
	<!-- cek apakah sudah login -->
	<?php 
    include '../koneksi.php';
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>

<body id="page-top">
    <div id="wrapper">

    <!-- Sidebar -->
    <ul style="background-color: #82b479; border-color: #82b479;" class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Hi Supervisor</div>
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
        

        <!-- Heading -->

        <!-- Nav Item - Pages Collapse Menu -->

        


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
                include('../koneksi.php');
                    
                        
                $query = "SELECT * FROM karyawan";
                $urlcrud = "manageemployee.php?page=";
            ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">
            
           
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Jadwal Pelatihan</h1>
                    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                </div>

                    <!-- DataTales Example -->
                <form action="" method="POST">
                <div class="my-2">
                <!-- <a href="inputpenjadwalan.php ?>" class="btn btn-dark btn-sm"><span class="fas fa-plus"></span> Tambah</a>
                    <a target="_blank" href="../spv/exportexcel_listpenjadwalan.php" class="btn btn-dark btn-sm"><span class="fas fa-file-excel"></i></span> Cetak Data</a>  -->
                </div>
                <div class="card shadow mb-4">
</br>
                <div class="col-lg-12">
                   
                    <table id="example" class="hover row-border my-2" style=" font-size: 14px;">
                    <thead>
                        <tr class="success">
                            <th width="50px">No</th>
                            <th>Id Pelatihan</th>
                            <th>Nama Pelatihan</th>
                            
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Jenis Pelatihan</th>
                            <th>Provider</th>
                            <th>Tempat Kegiatan</th>
                            <!-- <th>Catatan</th> -->
                            <!-- <th>Email</th> -->
                            <th style="text-align: center;">Actions</th>
                        </tr>
                    </thead>
                        
                        <?php
                        
                        $data = mysqli_query($koneksi,"select detail_pelatihan.*,pelatihan.nama_pelatihan from detail_pelatihan left join pelatihan on detail_pelatihan.id_nama_pelatihan=pelatihan.id_pelatihan");
                        $no = 1;
                        
                        while($d = mysqli_fetch_array($data)){
                        ?>    
                            <tr>
                                <td><?php echo $no++; ?></td>
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
                                <!-- <td><?php echo $d['catatan']; ?></td> -->
                                
                                
                                <td style="text-align: center;">
                                    <!-- <a onclick="return confirm('Apakah yakin data akan di hapus?')" href="hapuspenjadwalan.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data"><span class="far fa-trash-alt"></span></a>
                                    <a href="updatepenjadwalan.php?id= <?php echo $d['id']; ?>" class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Data" ><span class="fas fa-pen"></span></a>
                                    <a href="addemployeetraining.php?id= <?php echo $d['id']; ?>"  class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Member"><span class="fas fa-plus"></span></a> -->
                                    <a href="listemployeetraining.php?id= <?php echo $d['id']; ?>" class="btn btn-secondary  btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" title="Detail"><span class="fas fa-info-circle"></span></a>
                                    
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