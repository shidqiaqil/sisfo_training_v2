<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
    include '../koneksi.php';
	header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	header("Content-Disposition: attachment; filename=Data Karyawan.xls");
	?>
 
    <h3>LAPORAN DATA PELATIHAN PT ARCHROMA INDONESIA </H3>
    <tr>

    </tr>
	<table border="1">
    <tr class="success">
    
                            <th width="50px">No</th>
                            <th>Id Karyawan</th>
                            <th>Password</th>
                            <th>Nama Karyawan</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jabatan</th>
                            <th>Alamat</th>
                            <th>Area</th>
                            <th>No Hp</th>
                            <th>Email</th>


                            
                        </tr>
                    
                        
                        <?php
                        
                        $data = mysqli_query($koneksi,"select * from karyawan");
                        $no = 1;
                        
                        while($d = mysqli_fetch_array($data)){
                        ?>    
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['id_karyawan']; ?></td>
                                <td><?php echo $d['password_karyawan']; ?></td>
                                <td><?php echo $d['nama_karyawan']; ?></td>
                                <td><?php echo $d['tempat_lahir']; ?></td>
                                <td><?php echo $d['tanggal_lahir']; ?></td>
                                <td><?php echo $d['jabatan_karyawan']; ?></td>
                                <td><?php echo $d['alamat_karyawan']; ?></td>
                                <td><?php echo $d['area_karyawan']; ?></td>
                                <td><?php echo $d['hp_karyawan']; ?></td>
                                <td><?php echo $d['email_karyawan']; ?></td>

 
                                
                            </tr>
                            <?php
                        }
                        ?>
	</table>
</body>
</html>