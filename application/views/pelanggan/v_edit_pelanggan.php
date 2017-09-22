<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#"><?php echo $breadcrumb_1 ;?></a></li>
    <li><?php echo $breadcrumb_2 ;?></li>
    <li class="active"><?php echo $breadcrumb_3 ;?></li>
</ul>
<!-- END BREADCRUMB -->

<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="">
                <h3 class="panel-title"><?php echo $panel_title;?></h3>
              </div>
            </div>
            <div class="panel-body">
              <form class="form-horizontal" role="form" action="<?php echo base_url();?>kelola_pelanggan/edit_pelanggan_proses/<?php echo $this->uri->segment(3) ;?>" method="post">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="col-md-9">
                      <label class="control-label">Nama Pelanggan</label>
                        <input class="form-control" value="<?php echo $pelanggan->nama_pelanggan;?>" type="text" name="nama_pelanggan" placeholder="Nama Pelanggan">
                        <input value="<?php echo $pelanggan->id_pel_detail;?>" type="hidden" name="id_pel_detail">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-9">
                      <label class="control-label">Alamat</label>
                        <textarea class="form-control" name="alamat"><?php echo $pelanggan->alamat;?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-9">
                      <label class="control-label">No Telp</label>
                        <input class="form-control" value="<?php echo $pelanggan->telepon;?>" type="text" name="telepon" placeholder="081xxx... ">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-9">
                      <label class="control-label">Pekerjaan</label>
                      <input class="form-control" value="<?php echo $pelanggan->pekerjaan;?>" type="text" name="pekerjaan" placeholder="Pekerjaan">
                    </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group">
                    <div class="col-md-3">
                      <label class="control-label">Jumlah Penghuni</label>
                        <input class="form-control" type="text" value="<?php echo $pelanggan->jumlah_penghuni;?>" name="jumlah_penghuni" placeholder="0">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-3">
                      <label class="control-label">Luas Tanah</label>
                        <input class="form-control" type="text" value="<?php echo $pelanggan->luas_tanah;?>" name="luas_tanah" placeholder="m2">
                    </div>
                    <div class="col-md-3">
                      <label class="control-label">Luas Bangunan</label>
                        <input class="form-control" type="text" value="<?php echo $pelanggan->luas_bangunan;?>" name="luas_bangunan" placeholder="m2">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-9">
                      <label class="control-label">Jenis Bangunan</label>
                      <select class="form-control" name="id_jenis_bangunan">
                        <?php foreach ($jenis_bangunan as $row) { ?>
                          <option value="<?php echo $row->id_jenis_bangunan;?>"
                            <?php if ($pelanggan->id_jenis_bangunan == $row->id_jenis_bangunan)
                            {
                                echo "selected = 'selected'";
                            };?>>
                            <?php echo $row->jenis_bangunan;?>
                          </option>
                        <?php } ;?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-9">
                      <label class="control-label">Status Rumah</label>
                      <select class="form-control" name="id_status_rumah">
                        <?php foreach ($status_rumah as $row) { ?>
                          <option value="<?php echo $row->id_status_rumah;?>"
                            <?php if ($pelanggan->id_status_rumah == $row->id_status_rumah)
                            {
                                echo "selected = 'selected'";
                            };?>>
                            <?php echo $row->status_rumah;?>
                          </option>
                        <?php } ;?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-9">
                      <label class="control-label">Peruntukan</label>
                      <select class="form-control" name="id_peruntukan">
                        <?php foreach ($peruntukan as $row) { ?>
                          <option value="<?php echo $row->id_peruntukan;?>"
                            <?php if ($pelanggan->id_peruntukan == $row->id_peruntukan)
                            {
                                echo "selected = 'selected'";
                            };?>>
                            <?php echo $row->peruntukan;?>
                          </option>
                        <?php } ;?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <hr>
                </div>
                <div class="form-group">
                    <div class="col-md-6 pull-right" >
                      <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </div>
              </form>
            </div>
          </div>
      </div>
  </div>
</div>
