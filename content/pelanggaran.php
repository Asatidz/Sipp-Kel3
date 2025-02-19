   <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <!-- /.box -->

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pelanggaran</h3>
            </div>

                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <a href="?hal=pelanggaran_tambah" class="tombol"><b>Tambah</b></a>
                  <table id="example2"class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pelanggaran</th>
                  <th>Jenis Pelanggaran</th>
                  <th>Poin</th>
                  <th>Kode Pl</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
            <?php
                $query = "select * from pelanggaran order by id_pelanggaran desc";
                $result = mysqli_query($con,$query);
                $no = 0;
                while($data = mysqli_fetch_array($result)){
                    $no++;
                
            ?>
            <tr>
              <td><?= $no ?></td>
                <td><?= $data['nama_pelanggaran'] ?></td>
                <td><?= $data['jenis_pelanggaran'] ?></td>
                <td><?= $data['poin'] ?></td>
                <td><?= $data['kode'] ?></td>
              <td>
                <a href="?hal=pelanggaran_edit&id=<?= $data['id_pelanggaran'] ?>" class="btn btn-primary"> Edit </a>
                <a href="?hal=pelanggaran_hapus&id=<?= $data['id_pelanggaran'] ?>" class="btn btn-primary"> Hapus </a>
              </td>
            </tr>
        <?php
        }
        ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
  </div>
      </section>