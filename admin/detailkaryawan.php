

                        <?php
    include '../Koneksi.php';	
    $id_karyawan = $_GET['id_karyawan'];
    $nama = mysqli_query($koneksi,"select * from karyawan where id_karyawan ='$id_karyawan'");
   
    while($row=  mysqli_fetch_array($nama)){ ?>


        <!--Default Bootstrap Modal-->
    <!--===================================================-->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!--Modal header-->
            <div class="modal-header">
                <h4 class="modal-title">Detail Karyawan </h4>
            </div>

            <!--Modal body-->
            <div class="modal-body pad-all mar-all">
                <form action=" " class="form-horizontal " method="POST" id="form-save">

                        <div class="form-group">
                        <label class="control-label">ID Karyawan</label>
                        <input type="text" class="form-control" type="text" name="id_karyawan" id="id_karyawan" value="<?php echo $row['id_karyawan']; ?>" readonly/>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Nama Karyawan</label>
                        <input type="text" class="form-control" type="text" name="nama_karyawan" id="nama_karyawan" value="<?php echo $row['nama_karyawan']; ?>" readonly/>
                    </div> 
                    <div class="form-group">
                        <label class="control-label">Jabatan Karyawan</label>
                        <input type="text" class="form-control" type="text" name="jabatan_karyawan" id="jabatan_karyawan" value="<?php echo $row['jabatan_karyawan']; ?>" readonly/>
                    </div> 
                    <div class="form-group">
                        <label class="control-label">Tempat lahir</label>
                        <input type="text" class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" value="<?php echo $row['tempat_lahir']; ?>" readonly/>
                    </div> 
                    <div class="form-group">
                        <label class="control-label">Tanggal Lahir</label>
                        <input type="text" class="form-control" type="text" name="tanggal_lahir" id="tanggal_lahir" value="<?php $orgDate = $row['tanggal_lahir'];  
                        $newDate = date("d-m-Y", strtotime($orgDate));  
                        echo $newDate;   ?>" readonly/>
                    </div> 
                    <div class="form-group">
                        <label class="control-label">Alamat Karyawan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly/><?php echo $row['alamat_karyawan']; ?></textarea>
                    </div> 
                    <div class="form-group">
                        <label class="control-label">Area Karyawan</label>
                        <input type="text" class="form-control" type="text" name="area_karyawan" id="area_karyawan" value="<?php echo $row['area_karyawan']; ?>" readonly/>
                    </div> 
                    <div class="form-group">
                        <label class="control-label">No HP</label>
                        <input type="text" class="form-control" type="text" name="hp_karyawan" id="hp_karyawan" value="<?php echo $row['hp_karyawan']; ?>" readonly/>
                    </div> 
                    <div class="form-group">
                        <label class="control-label">Email Karyawan</label>
                        <input type="text" class="form-control" type="text" name="email_karyawan" id="email_karyawan" value="<?php echo $row['email_karyawan']; ?>" readonly/>
                    </div> 
                </form>
            </div>             
        </div> 
    </div>
</div>
    <!--===================================================-->
    <!--End Default Bootstrap Modal-->                          

    <?php
}
    ?>

