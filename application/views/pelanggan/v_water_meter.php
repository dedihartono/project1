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
              <form class="form-horizontal" role="form" action="<?php echo base_url();?>kelola_pelanggan/edit_wm_proses/<?php echo $this->uri->segment(3) ;?>" method="post">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="col-md-6">
                      <label class="control-label">Nama Pelanggan</label>
                        <input class="form-control" readonly type="text" value="<?php echo $pelanggan->nama_pelanggan ;?>" name="nama_pelanggan" placeholder="Nama Pelanggan">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-4">
                      <label class="control-label">Kode Aset</label>
                        <input class="form-control" value="<?php echo $pelanggan->kode_asset ;?>" type="text" name="kode_asset" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-6">
                      <label class="control-label">Lokasi Unit</label>
                      <select class="form-control" name="kode_lokasi">
                        <?php foreach ($lokasi_unit as $row) { ?>
                          <option value="<?php echo $row->kode_lokasi;?>"
                            <?php if ($pelanggan->kode_lokasi == $row->kode_lokasi) {
                                echo "selected = 'selected'";
                            };?>>
                            <?php echo $row->lokasi_unit;?>
                          </option>
                        <?php } ;?>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <div class="col-md-3">
                      <label class="control-label">Merk</label>
                        <input class="form-control" value="<?php echo $pelanggan->merk ;?>" type="text" name="merk" placeholder="">
                    </div>
                    <div class="col-md-3">
                      <label class="control-label">Type</label>
                        <input class="form-control" value="<?php echo $pelanggan->type ;?>" type="text" name="type" placeholder="">
                    </div>
                    <div class="col-md-3">
                      <label class="control-label">Ukuran</label>
                        <input class="form-control" value="<?php echo $pelanggan->ukuran ;?>" type="text" name="ukuran" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-3">
                      <label class="control-label">No Sambungan</label>
                        <input class="form-control" value="<?php echo $pelanggan->no_smb ;?>" type="text" name="no_smb" placeholder="">
                    </div>
                    <div class="col-md-3">
                      <label class="control-label">No Body</label>
                        <input class="form-control" value="<?php echo $pelanggan->no_body ;?>" type="text" name="no_body" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-6">
                      <label class="control-label">Status</label>
                      <select class="form-control" name="id_status">
                        <?php foreach ($status as $row) { ?>
                          <option value="<?php echo $row->id_status;?>"
                            <?php if ($pelanggan->id_status == $row->id_status) {
                                echo "selected = 'selected'";
                            };?>>
                            <?php echo $row->status;?>
                          </option>
                        <?php } ;?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-6">
                      <label class="control-label">Kondisi</label>
                      <select class="form-control" name="id_kondisi">
                        <?php foreach ($kondisi as $row) { ?>
                          <option value="<?php echo $row->id_kondisi;?>"
                            <?php if ($pelanggan->id_kondisi == $row->id_kondisi) {
                                echo "selected = 'selected'";
                            };?>>
                            <?php echo $row->kondisi;?>
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
