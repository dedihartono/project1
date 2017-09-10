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
              <form class="form-horizontal" role="form" action="<?php echo base_url();?>Kelola_lokasi_unit/tambah_lokunit_proses" method="post">
                  <div class="form-group">
                      <label class="col-md-2 control-label">Kode Lokasi</label>
                      <div class="col-md-10">
                          <input type="text" class="form-control" name="kode_lokasi" placeholder="kode lokasi"/>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-md-2 control-label">Nama Lokasi</label>
                      <div class="col-md-10">
                          <input type="text" class="form-control" name="lokasi_unit" placeholder="lokasi unit"/>
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
