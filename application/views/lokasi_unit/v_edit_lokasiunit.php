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
          <div class="block">
            <h4>Edit Lokasi Unit</h4>
              <form class="form-horizontal" role="form" action="<?php echo base_url();?>Kelola_lokasi_unit/edit_lokunit_proses/<?php echo $this->uri->segment(3) ;?>" method="post">
                  <div class="form-group">
                      <div class="col-md-10">
                          <input type="hidden" class="form-control" value="<?php echo $lokunit->kode_lokasi ;?>" name="kode_lokasi" placeholder="kode lokasi"/>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-md-2 control-label">Nama Lokasi</label>
                      <div class="col-md-10">
                          <input type="text" class="form-control" value="<?php echo $lokunit->lokasi_unit ;?>" name="lokasi_unit" placeholder="lokasi unit"/>
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
