<?php include_once('../_header.php');?>
    <div class="box">
        <h1>pasien</h1>
            <h4>
                <small>Tambah Data Pasien</small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            </h4>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form action="proses.php" method="post">
                        <div class="form-group">
                            <label for="nama">Nomor Identitas</label>
                            <input type="text" name="nomor_identitas" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Pasien<Pas/label>
                            <textarea name="nama_pasien" id="nama_pasien" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nama">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat<Pas/label>
                            <textarea name="alamat" id="alamat" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nama">No Telp</label>
                            <input type="text" name=no_telp" class="form-control" required autofocus>
                        </div>
                        <div class="form-group pull-right">
                            <input type="submit" name="add" value="Simpan" class="btn btn-success">
                        </div>
                    
                    </form>
                </div>
            </div>
    </div>

<?php include_once('../_footer.php');?>