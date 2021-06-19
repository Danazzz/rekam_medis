<?php include_once('../_header.php'); ?>

    <div class="box">
		    <h1>Dokter</h1>
		    <h4>
			    <div class="pull-right">
				    <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
			    </div>
		    </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="add.php" method="post">
                    <div class="form-group">
                        <label for="count_add">Banyak record yang akan ditambahkan</label>
                        <input type="text" name="count_add" id="count_add" maxlength="2" pattern="[0-9]+" class="form-control" required>
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="generate" value="Generate" class="btn btn-">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include_once('../_footer.php'); ?>