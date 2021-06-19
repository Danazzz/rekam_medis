<?php include_once('../_header.php');?>
    <div class="box">
        <h1>Obat</h1>
            <h4>
                <small>Edit Data Pasien</small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            </h4>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <?php
                    $id = @$_GET['id'];
                    $sql_obat = mysqli_query($con, "SELECT * FROM tb_obat WHERE id_obat = '$id'") or die (mysqli_error($con));
                    $data = mysqli_fetch_array($sql_obat);
                    ?>
                    <form action="proses.php" method="post">
                        <div class="form-group">
                            <label for="nama">Nomor Identitas</label>
                            <input type="hidden" name="nomor_identitas" value="<?=$data['nomor_identitas']?>">
                            <input type="text" name="nomor_identitas" id="nomor_identitas" value="<?=$data['nomor_identitas']?>" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Pasien</label>
                            <textarea name="nama_pasien" id="nama_pasien" class="form-control" required><?=$data['nama_pasien']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nama">Jenis kelamin</label>
                            <input type="hidden" name="jenis_kelamin" value="<?=$data['jenis_kelamin']?>">
                            <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?=$data['jenis_kelamin']?>" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" required><?=$data['alamat']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nama">No Telp</label>
                            <input type="hidden" name="no_telp" value="<?=$data['no_telp']?>">
                            <input type="text" name="no_telp" id="no_telp" value="<?=$data['no_telp']?>" class="form-control" required autofocus>
                        </div>
                        <div class="form-group pull-right">
                            <input type="submit" name="edit" value="Simpan" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
    </div>

<?php include_once('../_footer.php');?>