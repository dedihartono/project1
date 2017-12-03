<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#"><?php echo $breadcrumb_1 ;?></a></li>
    <li class="active"><?php echo $breadcrumb_2 ;?></li>
</ul>
<!-- END BREADCRUMB -->
<?php
    $jabatan = [ 1 => "Super Admin", "Admin", "Direktur", "Subag Hublang", "Teknik"];
    $hak_akses = $this->session->userdata('jabatan');
    if($hak_akses == $jabatan[1] || $hak_akses == $jabatan[2]) {
;?>
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
          <!-- START DEFAULT DATATABLE -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="">
                <h3 class="panel-title"><?php echo $panel_title;?></h3>
              </div>
            </div>
            <div class="panel-heading">
              <a class="btn btn-primary" href="<?php echo base_url();?>kelola_pelanggan/tambah_pelanggan"><span><i class="fa fa-plus"></i></span> Tambah</a>
            </div>
            <div class="panel-body">
              <table class="table datatable">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th>Nama Pelanggan</th>
                    <th>Pekerjaan</th>
                    <th>Telephone</th>
                    <th>Alamat</th>
                    <th width="27%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($pelanggan as $row) { ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $row->nama_pelanggan;?></td>
                      <td><?php echo $row->pekerjaan;?></td>
                      <td><?php echo $row->telepon;?></td>
                      <td><?php echo $row->alamat;?></td>
                      <td>
                        <a class="btn btn-info" href="<?php echo base_url();?>kelola_pelanggan/pelanggan_detail/<?php echo $row->id_pelanggan ;?>"><span><i class="fa fa-eye"></i></span> DETAIL</a>
                        <a class="btn btn-success" href="<?php echo base_url();?>kelola_pelanggan/edit_pelanggan/<?php echo $row->id_pelanggan ;?>"><span><i class="fa fa-pencil"></i></span> EDIT</a>
                        <a class="btn btn-danger" onclick="hapus()" href="<?php echo base_url();?>kelola_pelanggan/hapus_pelanggan/<?php echo $row->id_pelanggan ;?>"><span><i class="fa fa-trash-o"></i></span> HAPUS</a>
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
<?php } ;?>
<?php
    $jabatan = [ 1 => "Super Admin", "Admin", "Direktur", "Subag Hublang", "Teknik"];
    $hak_akses = $this->session->userdata('jabatan');
    if($hak_akses == $jabatan[5]) {
;?>
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
          <!-- START DEFAULT DATATABLE -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="">
                <h3 class="panel-title"><?php echo $panel_title;?></h3>
              </div>
            </div>
            <div class="panel-heading">
            </div>
            <div class="panel-body">
              <table class="table datatable">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th>Nama Pelanggan</th>
                    <th>Pekerjaan</th>
                    <th>Telephone</th>
                    <th>Alamat</th>
                    <th width="10%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($pelanggan as $row) { ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $row->nama_pelanggan;?></td>
                      <td><?php echo $row->pekerjaan;?></td>
                      <td><?php echo $row->telepon;?></td>
                      <td><?php echo $row->alamat;?></td>
                      <td>
                        <a class="btn btn-info" href="<?php echo base_url();?>kelola_pelanggan/pelanggan_detail/<?php echo $row->id_pelanggan ;?>"><span><i class="fa fa-eye"></i></span> DETAIL</a>
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
<?php } ;?>
