<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#"><?php echo $breadcrumb_1 ;?></a></li>
    <li class="active"><?php echo $breadcrumb_2 ;?></li>
</ul>
<!-- END BREADCRUMB -->

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
            <div class="panel-body">
              <div class="col-md-12">
                    <!-- CONTACT ITEM -->
                <?php
                    foreach ($pelanggan as $row) { ?>
                        <div class="panel-body profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url();?>assets/uploads/default.png">
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo  $row->nama_pelanggan ;?></div>
                                <div class="profile-data-title"><?php echo  $row->pekerjaan ;?></div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="contact-info">

                              <div class="col-md-4">
                                <h3>Info Pribadi <a class="btn btn-default" href="#"><span><i class="fa fa-pencil"></i></span></a></h3>
                                <p><small>Telephone</small><br><?php echo  $row->telepon ;?></p>
                                <p><small>Pekerjaan</small><br><?php echo  $row->pekerjaan ;?></p>
                                <p><small>Alamat</small><br><?php echo  $row->alamat ;?></p>
                              </div>

                              <div class="col-md-4">
                                <h3>Info Tempat <a class="btn btn-default" href="#"><span><i class="fa fa-pencil"></i></span></a></h3>
                                <p><small>Luas Tanah</small><br><?php echo  $row->luas_tanah ;?> m<sup>2</sup></p>
                                <p><small>Luas Bangunan</small><br><?php echo  $row->luas_bangunan ;?> m<sup>2</sup></p>
                                <p><small>Jenis Bangunan</small><br><?php echo  $row->jenis_bangunan ;?></p>
                                <p><small>Peruntukan</small><br><?php echo  $row->peruntukan ;?></p>
                              </div>

                              <div class="col-md-4">
                                <h3>Spesifikasi Water Meter <a class="btn btn-default" href="#"><span><i class="fa fa-pencil"></i></span></a></h3>
                                <p><small>Kode Aset</small><br><?php echo  $row->kode_asset ;?> m<sup>2</sup></p>
                                <p><small>Merk</small><br><?php echo  $row->merk ;?> m<sup>2</sup></p>
                                <p><small>Nomor Body</small><br><?php echo  $row->no_body ;?></p>
                                <p><small>Nomor Sambangun</small><br><?php echo  $row->no_smb ;?></p>
                                <p><small>Type</small><br><?php echo  $row->type ;?></p>
                                <p><small>Ukuran</small><br><?php echo  $row->ukuran ;?></p>
                                <p><small>Kondisi</small><br><?php echo  $row->kondisi ;?></p>
                                <p><small>Status</small><br><?php echo  $row->status ;?></p>
                              </div>
                            </div>
                        </div>
                    <!-- END CONTACT ITEM -->
                </div>

                <?php  } ;?>
            </div>
            <div class="panel-body">
              <table class="table datatable">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th>Kode Aset</th>
                    <th>Long</th>
                    <th>Lat</th>
                    <th width="27%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($pelanggan as $row) { ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $row->kode_asset;?></td>
                      <td><?php echo $row->long;?></td>
                      <td><?php echo $row->lat;?></td>
                      <td>
                        <a class="btn btn-success" href="<?php echo base_url();?>kelola_pelanggan/edit_pelanggan/<?php ;?>"><span><i class="fa fa-pencil"></i></span>ATUR KOORDINAT</a>
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
