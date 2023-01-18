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
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=List Employee For Training.xls");
	?>
    
    <?php
                        $id=$_GET['id'];
                        $no = 1;
                        $data1 = mysqli_query($koneksi,"select * from pelatihan where id='$id'");
                        $d = mysqli_fetch_array($data1);
                        ?> 
 
	<table border="1">
    <tr class="success">
                            <th width="50px">No</th>
                            <th>Id Karyawan</th>
                            <th>Nama Karyawan</th>
                            <th>Jabatan</th>
                            
                            
                        </tr>
                    
                        
                        <?php
                        $id_pelatihan = $d['id_pelatihan'];
                        $no = 1;
                        $data = mysqli_query($koneksi,"select * from penjadwalan where id_pelatihan='$id_pelatihan'");
                        while($x = mysqli_fetch_array($data)){
                        ?>    
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $x['id_karyawan']; ?></td>
                                <td><?php echo $x['nama_karyawan']; ?></td>
                                <td><?php echo $x['jabatan_karyawan']; ?></td>
                                
                                
                            </tr>
                            <?php
                        }
                        ?>
	</table>
</body>
</html>