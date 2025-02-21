   <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <!-- /.box -->

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Macam Tebusan</h3>
            </div>

                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <a href="?hal=pebus_tambah" class="tombol"><b>Tambah</b></a>
                  <table id="example2"class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pelanggaran</th>
                  <th>Poin</th>
                  <th>Kode</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
            <?php
                $query = "select * from tebus order by id_tebus desc";
                $result = mysqli_query($con,$query);
                $no = 0;
                while($data = mysqli_fetch_array($result)){
                    $no++;
                
            ?>
            <tr>
              <td><?= $no ?></td>
              <td><?= $data['nama_tebus'] ?></td>
              <td><?= $data['poin_tebus'] ?></td>
                <td><?= $data['kode_tebus'] ?></td>
              <td>
                <a href="?hal=pebus_hapus&id=<?= $data['id_tebus'] ?>" class="btn btn-primary"> Hapus </a>
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