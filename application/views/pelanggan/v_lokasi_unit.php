<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
          <!-- START DEFAULT DATATABLE -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="">
                <h3 class="panel-title">Data Lokasi Unit</h3>
              </div>
            </div>
            <div class="panel-heading">
              <a class="btn btn-primary" href="<?php echo base_url();?>pelanggan/tambah_lokunit"><span><i class="fa fa-plus"></i></span> Tambah</a>
            </div>
            <div class="panel-body">
              <table class="table datatable">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th>Kode Lokasi</th>
                    <th>Lokasi Unit</th>
                    <th width="20%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($lokunit as $row) { ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $row->kode_lokasi;?></td>
                      <td><?php echo $row->lokasi_unit;?></td>
                      <td>
                        <a class="btn btn-danger" onclick="hapus()" href="<?php echo base_url();?>pelanggan/hapus_lokunit/<?php echo $row->kode_lokasi ;?>"><span><i class="fa fa-trash-o"></i></span> HAPUS</a>
                        <a class="btn btn-success" href="<?php echo base_url();?>pelanggan/edit_lokunit/<?php echo $row->kode_lokasi ;?>"><span><i class="fa fa-pencil"></i></span> EDIT</a>
                      </td>
                    </tr>
                  <?php } ;?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END DEFAULT DATATABLE -->
      </div>
    </div>
  </div>
