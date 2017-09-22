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

                              <div class="col-md-3">
                                <h3>Info Umum</h3>
                                <p><small>Nama</small><br><?php echo  $pelanggan->nama_pelanggan ;?></p>
                                <p><small>Telephone</small><br><?php echo  $pelanggan->telepon ;?></p>
                                <p><small>Pekerjaan</small><br><?php echo  $pelanggan->pekerjaan ;?></p>
                                <p><small>Alamat</small><br><?php echo  $pelanggan->alamat ;?></p>
                              </div>

                              <div class="col-md-5">
                                <h3>Info Tempat</h3>
                                <p><small>Luas Tanah</small><br><?php echo  $pelanggan->luas_tanah ;?></p>
                                <p><small>Luas Bangunan</small><br><?php echo  $pelanggan->luas_bangunan ;?></p>
                                <p><small>Jenis Bangunan</small><br><?php echo  $pelanggan->jenis_bangunan ;?></p>
                                <p><small>Status Rumah</small><br><?php echo  $pelanggan->status_rumah ;?></p>
                                <p><small>Peruntukan</small><br><?php echo  $pelanggan->peruntukan ;?></p>
                                <p><small>Jumlah Penghuni</small><br><?php echo  $pelanggan->jumlah_penghuni ;?></p>
                              </div>

                              <div class="col-md-4">
                                <h3>Spesifikasi
                                  Water Meter
                                  <a class="btn btn-default"  title="Tambah / Edit Water Meter"  href="<?php echo base_url();?>kelola_pelanggan/water_meter/<?php echo $pelanggan->id_water_meter ;?>">
                                    <span><i class="fa fa-pencil"></i></span>
                                  </a>
                                </h3>
                              </div>
                              <div class="col-md-2">
                                <p><small>Kode Aset</small><br><strong> <?php echo  $pelanggan->kode_asset ;?></strong></p>
                                <p><small>Lokasi Unit</small><br><?php echo  $pelanggan->lokasi_unit ;?></p>
                                <p><small>Merk</small><br><?php echo  $pelanggan->merk ;?></p>
                                <p><small>Nomor Body</small><br><?php echo  $pelanggan->no_body ;?></p>
                                <p><small>Nomor Sambangun</small><br><?php echo  $pelanggan->no_smb ;?></p>

                              </div>
                              <div class="col-md-2">
                                <p><small>Type</small><br><?php echo  $pelanggan->type ;?></p>
                                <p><small>Ukuran</small><br><?php echo  $pelanggan->ukuran ;?></p>
                                <p>
                                  <small>Status</small>
                                  <?php if ($pelanggan->status == 'Aktif') { ?>

                                    <p class="btn btn-success"><?php echo  $pelanggan->status ;?></p>

                                  <?php } else { ?>

                                    <p class="btn btn-danger"><?php echo  $pelanggan->status ;?></p>

                                  <?php } ;?>
                                </p>
                                <p>
                                  <small>Kondisi</small>
                                  <?php if ($pelanggan->kondisi == 'Baik') { ?>

                                    <p class="btn btn-success"><?php echo  $pelanggan->kondisi ;?></p>

                                  <?php } else { ?>

                                    <p class="btn btn-danger"><?php echo  $pelanggan->kondisi ;?></p>

                                  <?php } ;?>
                                </p>
                              </div>
                            </div>
                        </div>
                    <!-- END CONTACT ITEM -->
                </div>
            </div>
            <div class="panel-heading">
              <a class="btn btn-primary" href="<?php echo base_url();?>kelola_pelanggan/tambah_koordinat/<?php echo $pelanggan->id_water_meter ;?>"><span><i class="fa fa-plus"></i></span> Tambah</a>
            </div>
            <div class="panel-body">
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Kode Aset</th>
                    <th>Lat</th>
                    <th>Long</th>
                    <th width="12%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                      <td><?php echo $pelanggan->kode_asset;?></td>
                      <td><?php echo $pelanggan->lat;?></td>
                      <td><?php echo $pelanggan->long;?></td>
                      <td>
                        <a title="Edit Koordinat" class="btn btn-info" href="<?php echo base_url();?>kelola_pelanggan/edit_koordinat/<?php echo $pelanggan->id_water_meter ;?>"><span><i class="fa fa-pencil"></i></span></a>
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
