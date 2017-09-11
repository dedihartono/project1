<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#"><?php echo $breadcrumb_1 ;?></a></li>
    <li><?php echo $breadcrumb_2 ;?></li>
    <li class="active"><?php echo $breadcrumb_3 ;?></li>
</ul>
<!-- END BREADCRUMB -->

<div class="page-content-wrap">
    <div class="pelanggan">
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

                        <div class="panel-body profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url();?>assets/uploads/default.png">
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?php echo  $pelanggan->nama_pelanggan ;?></div>
                                <div class="profile-data-title"><?php echo  $pelanggan->pekerjaan ;?></div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="contact-info">

                              <div class="col-md-4">
                                <h3>Info Pribadi <a class="btn btn-default" href="#"><span><i class="fa fa-pencil"></i></span></a></h3>
                                <p><small>Telephone</small><br><?php echo  $pelanggan->telepon ;?></p>
                                <p><small>Pekerjaan</small><br><?php echo  $pelanggan->pekerjaan ;?></p>
                                <p><small>Alamat</small><br><?php echo  $pelanggan->alamat ;?></p>
                              </div>

                              <div class="col-md-4">
                                <h3>Info Tempat <a class="btn btn-default" href="#"><span><i class="fa fa-pencil"></i></span></a></h3>
                                <p><small>Luas Tanah</small><br><?php echo  $pelanggan->luas_tanah ;?> m<sup>2</sup></p>
                                <p><small>Luas Bangunan</small><br><?php echo  $pelanggan->luas_bangunan ;?> m<sup>2</sup></p>
                                <p><small>Jenis Bangunan</small><br><?php echo  $pelanggan->jenis_bangunan ;?></p>
                                <p><small>Peruntukan</small><br><?php echo  $pelanggan->peruntukan ;?></p>
                              </div>

                              <div class="col-md-4">
                                <h3>Spesifikasi Water Meter <a class="btn btn-default" href="#"><span><i class="fa fa-pencil"></i></span></a></h3>
                                <p><small>Kode Aset</small><br><?php echo  $pelanggan->kode_asset ;?> m<sup>2</sup></p>
                                <p><small>Merk</small><br><?php echo  $pelanggan->merk ;?> m<sup>2</sup></p>
                                <p><small>Nomor Body</small><br><?php echo  $pelanggan->no_body ;?></p>
                                <p><small>Nomor Sambangun</small><br><?php echo  $pelanggan->no_smb ;?></p>
                                <p><small>Type</small><br><?php echo  $pelanggan->type ;?></p>
                                <p><small>Ukuran</small><br><?php echo  $pelanggan->ukuran ;?></p>
                                <p><small>Kondisi</small><br><?php echo  $pelanggan->kondisi ;?></p>
                                <p><small>Status</small><br><?php echo  $pelanggan->status ;?></p>
                              </div>
                            </div>
                        </div>
                    <!-- END CONTACT ITEM -->
                </div>


            </div>
            <div class="panel-body">
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Kode Aset</th>
                    <th>Long</th>
                    <th>Lat</th>
                    <th width="16%">Aksi</th>
                  </tr>
                </thead>
                <tbody>

                    <tr>
                      <td><?php echo $pelanggan->kode_asset;?></td>
                      <td><?php echo $pelanggan->long;?></td>
                      <td><?php echo $pelanggan->lat;?></td>
                      <td>
                        <a class="btn btn-success" href="<?php echo base_url();?>kelola_pelanggan/edit_pelanggan/<?php ;?>"><span><i class="fa fa-pencil"></i></span>ATUR KOORDINAT</a>
                      </td>
                    </tr>

                </tbody>
              </table>
            </div>
          </div>
          <!-- END DEFAULT DATATABLE -->
      </div>
    </div>
  </div>
