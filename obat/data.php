<?php include_once('../_header.php'); ?>

    <div class = "box">
        <h1>Obat</h1>
        <h4>
            <small>Data Obat</small>
            <div class "pull-right">
                <a href = "" class="btn btn-default btn-xs"><i class= "glyphicon glyphicon-refresh"></i></a>
                <a href = "" class="btn btn-success btn-xs"><i class= "glyphicon glyphicon-plus"></i>Tambah obat</a>
            </div> 
        </h4>  
        <div style="margin-bottom: 20px; ">
            <form class = "form-inline" action="" method="post">
                <div class="form-group ">
                    <input type="text" name="pencaharian" class="form-control" placeholder="pencaharian "
            </div>
            <div class="form-group ">
                <button type="submit" class="btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span><button > 
            <div  
         </form>
        <div class = "table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Obat</th>
                        <th>Keterangan</th>
                        <th><i class="glyphicon glyphicon-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no= 1 ;
                $sql_obat = mysqli_query($con,"SELECT * FROM tb_obat") or die (mysqli_error($con));
                if(mysqli_num_rows($sql_obat) > 0) {
                    while($data = mysqli_fetch_array(sql_obat)) { ?>
                        <tr>
                            <td><?=$no++?></td>
                            <td><?=data['nama_obat']?></td>
                            <td><?=data['ket_obat']?></td>
                            <td>

                            </td>
                        </tr>
                    <?php 
                    }
                } else {
                    echo "<tr><td colspan=\"4\" align =\"center\">Data tidak ditemukan</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

<?php include_once('../_footer.php'); ?>