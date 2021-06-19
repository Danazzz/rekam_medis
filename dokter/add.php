<?php include_once('../_header.php');?>
    <div class="box">
        <h1>Dokter</h1>
            <h4>
                <small>Tambah Data Dokter</small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            </h4>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form action="proses.php" method="post">
                        <div class="form-group">
                            <label for="nama">Nama Dokter</label>
                            <input type="text" name="nama" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="nama">Spesialis</label>
                            <textarea name="spesialis" id="spesialis" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <textarea name="Alamat" id="Alamat" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nama">no_tlp</label>
                            <textarea name="no_tlp" id="no_tlp" class="form-control" required></textarea>
                        </div>
                        <div class="form-group pull-right">
                            <input type="submit" name="add" value="Simpan" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
    </div>

<?php include_once('../_footer.php');?>