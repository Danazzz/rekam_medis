<<<<<<< HEAD
<?php include_once('../_header.php'); ?>

    <div class="box">
		    <h1>Obat</h1>
		    <h4>
                <small>Tambah Data Poliklinik</small>
			    <div class="pull-right">
				    <a href="data.php" class="btn btn-info btn-xs"> Data</a>
                    <a href="generate.php" class="btn btn-primary btn-xs"> Tembah Data</a>
			    </div>
		    </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="proses.php" method="post">
                    
                </form>
            </div>
        </div>
    </div>
<?php include_once('../_footer.php'); ?>
=======
<?php include_once('../_header.php');?>
    <div class="box">
        <h1>Obat</h1>
            <h4>
                <small>Tambah Data Obat</small>
                <div class="pull-right">
                    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
                </div>
            </h4>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form action="proses.php" method="post">
                        <div class="form-group">
                            <label for="nama">Nama Obat</label>
                            <input type="text" name="nama" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="nama">Keterangan</label>
                            <textarea name="ket" id="ket" class="form-control" required></textarea>
                        </div>
                        <div class="form-group pull-right">
                            <input type="submit" name="add" value="Simpan" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
    </div>

<?php include_once('../_footer.php');?>
>>>>>>> 28dc788db59301fd12fc1664b6f1fb037ab84d99
