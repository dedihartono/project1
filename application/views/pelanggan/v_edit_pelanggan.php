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
                  <div class="form-group">
                      <label class="col-md-2 control-label">Pelanggan</label>
                      <div class="col-md-10">
                          <input type="text" class="form-control" value="<?php echo $pelanggan->nama_pelanggan ;?>" name="nama_pelanggan" placeholder="Nama Pelanggan"/>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-md-2 control-label">Alamat</label>
                      <div class="col-md-10">
                        <textarea class="form-control" name="alamat"><?php echo $pelanggan->alamat ;?></textarea>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-md-10 pull-right" >
                        <button class="btn btn-primary" type="submit">Simpan</button>
                      </div>
                  </div>
              </form>
            </div>
          </div>
      </div>
  </div>
</div>
    