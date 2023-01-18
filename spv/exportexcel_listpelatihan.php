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
	header("Content-Disposition: attachment; filename=Data Pelatihan.xls");
	?>
 
 
	<table border="1">
    <tr class="success">
                            <th width="50px">No</th>
                            <th>Id Pelatihan</th>
                            <th>Nama Pelatihan</th>
                            <th>Jadwal Pelatihan</th>
                            <th>Jenis Pelatihan</th>
                           
                        </tr>
                    
                        
                        <?php
                        
                        $no = 1;
                        $data = mysqli_query($koneksi,"select * from pelatihan");
                        while($d = mysqli_fetch_array($data)){
                        ?>    
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['id_pelatihan']; ?><a/></td>
                                <td><?php echo $d['nama_pelatihan']; ?></td>
                                <td><?php echo $d['jadwal_pelatihan']; ?></td>
                                <td><?php echo $d['jenis_pelatihan']; ?></td>
                                
                                
                            </tr>
                            <?php
                        }
                        ?>
	</table>
</body>
</html>