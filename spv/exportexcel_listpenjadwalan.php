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
	header("Content-Disposition: attachment; filename=Data List Penjadwalan Training.xls");
	?>
 
    <h3>LAPORAN DATA PENJADWALAN TRAINING PT ARCHROMA INDONESIA </H3>
    <tr>

    </tr>
	<table border="1">
    <tr class="success">
    
                            <th width="50px">No</th>
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
                                <td><?php echo $d['catatan']; ?></td>
                            <?php
                        }
                        ?>
	</table>
</body>
</html>