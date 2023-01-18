<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link  href="assets/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="assets/css/loginadmin.css" rel="stylesheet">
    
    <title>Document</title>
</head>

<!-- check login -->
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			$message= "Login gagal! username dan password salah!";
            echo "<script type='text/javascript'>alert('$message');</script>";
		}else if($_GET['pesan'] == "logout"){
			$message= "Anda telah berhasil logout";
            echo "<script type='text/javascript'>alert('$message');</script>";
		}else if($_GET['pesan'] == "belum_login"){
			$message= "Anda harus login untuk mengakses halaman admin";
            echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
?>
<!-- ------------ -->
<body>
    <section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="assets\img\5259588.jpg"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form method="post" action="cek_login_employee.php">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                
                <p class="lead fw-normal mb-0 me-3 fw-bold">Our Social Media</p>
                <button style="background-color: #c40c0c; border-color: #c40c0c;" type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
                </button>

                <button style="background-color: #c40c0c; border-color: #c40c0c;" type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-instagram"></i>
                </button>

                <button style="background-color: #c40c0c; border-color: #c40c0c;" type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-linkedin-in"></i>
                </button>
            </div>

            <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0">Sign in Employee</p>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Id Karyawan</label>
                <input type="text" id="form3Example3" class="form-control form-control-lg"
                name="id_karyawan" placeholder="Masukkan Id Karyawan" />
                
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
                <label class="form-label" for="form3Example4">Password</label>
                <input type="password" id="form3Example4" class="form-control form-control-lg"
                type="password" name="password_karyawan" placeholder="Masukkan password"/>
                
            </div>

            <!-- <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <!-- <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                    Remember me
                </label>
                </div>
                <a href="#!" class="text-body">Forgot password?</a> -->
            <!-- </div>  -->

            <div class="text-center text-lg-start mt-4 pt-2">
                <button class="btn btn-warning btn-lg text-light"
                style="padding-left: 2.5rem; padding-right: 2.5rem; background-color: #c40c0c; border-color: #c40c0c;" type="submit" ">Login</button>
                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                    class="link-danger" style="color:#c40c0c;">Please Ask HR to Register Account</a></p>
            </div>

            </form>
        </div>
        </div>
    </div>
    <div style="background-color: #c40c0c;"
        class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 btn-warning" >
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0" >
        Copyright © 2022. All rights reserved.
        </div>
        <!-- Copyright -->

        <!-- Right -->
        <div>
        
        <a style="color: white; font-size: 10px;" href="https://www.freepik.com/free-vector/flat-people-business-training-illustration_13446872.htm#page=3&query=business&position=18&from_view=search&track=sph">Image by pch.vector on Freepik </a>
        
        </div>
        
        <!-- Right -->
    </div>
    </section>
    
</body>
</html>