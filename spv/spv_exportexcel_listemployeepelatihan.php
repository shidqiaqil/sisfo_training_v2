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
	header("Content-Disposition: attachment; filename=Data List Member Training.xls");
	
    $id_nama_pelatihan = $_GET['id_nama_pelatihan'];
    $data1 = mysqli_query($koneksi,"select detail_pelatihan.*,pelatihan.nama_pelatihan from detail_pelatihan left join pelatihan on detail_pelatihan.id_nama_pelatihan=pelatihan.id_pelatihan where detail_pelatihan.id_nama_pelatihan='$id_nama_pelatihan'");
    $a = mysqli_fetch_array($data1);
    ?>
    
    
    <h3 style="text-transform:uppercase">LAPORAN DATA LIST MEMBER TRAINING <?php echo $a['id_nama_pelatihan'] ?>-<?php echo $a['nama_pelatihan'] ?> PT ARCHROMA INDONESIA </H3>
    
    <pre>
    Id Pelatihan : <?php echo $a['id_nama_pelatihan'] ?> <br/>
    Nama Pelatihan: <?php echo $a['nama_pelatihan'] ?><br/>
    Tanggal Mulai: <?php  $orgDate = $a['tanggal_mulai'];  
                                        $newDate = date("d/m/Y H:i", strtotime($orgDate));  
                                        echo  $newDate;    ?><br/>
    Tanggal Selesai: <?php  $orgDate = $a['tanggal_selesai'];  
                                        $newDate = date("d/m/Y H:i", strtotime($orgDate));  
                                        echo  $newDate;  ?><br/>
    Jenis Pelatihan: <?php echo $a['nama_jenis_pelatihan'] ?><br/>
    Provider: <?php echo $a['provider'] ?><br/>
    Tempat Kegiatan: <?php echo $a['tempat_pelatihan'] ?><br/>
    </pre>
	<table border="1">
    <tr class="success">
    
                            <th width="50px">No</th>
                            <th>Id Pelatihan</th>
                            <th>Nama Pelatihan</th>
                            <th>Id Karyawan</th>
                            
                            <th>Nama Karyawan</th>
                            <th>Jabatan Karyawan</th>
                            
                            


                            
                        </tr>
                    
                        
                        <?php
                        
                        $data = mysqli_query($koneksi,"select * from penjadwalan where id_nama_pelatihan='$id_nama_pelatihan'");
                        $no = 1;
                        
                        while($d = mysqli_fetch_array($data)){
                        ?>    
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['id_nama_pelatihan']; ?></td>
                                <td><?php echo $d['nama_pelatihan']; ?></td>
                                
                              
                                <td><?php echo $d['id_karyawan']; ?></td>
                                <td><?php echo $d['nama_karyawan']; ?></td>
                                <td><?php echo $d['jabatan_karyawan']; ?></td>
                                
                            <?php
                        }
                        ?>
	</table>
</body>
</html>