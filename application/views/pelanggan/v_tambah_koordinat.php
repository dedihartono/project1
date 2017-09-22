<?php var_dump($pelanggan); ?>
<script type="text/javascript">
		function updateDatabase(newLat, newLng)
		{
			// make an ajax request to a PHP file
			// on our site that will update the database
			// pass in our lat/lng as parameters
			$.post(
				"/my_controller/update_coords",
				{ 'newLat': newLat, 'newLng': newLng, 'var1': 'value1' }
			)
			.done(function(data) {
				alert("Database updated");
			});
		}
</script>

<?php echo $map['js'] ;?>
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
              <form class="form-horizontal" role="form" action="<?php echo base_url();?>kelola_pelanggan/tambah_koordinat_proses/<?php echo $this->uri->segment(3) ;?>" method="post">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="col-md-4">
                      <label class="control-label">Latitude</label>
                        <input class="form-control" type="text" value="<?php echo $pelanggan->lat ;?>" name="lat" placeholder="">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="col-md-4">
                      <label class="control-label">Longitude</label>
                        <input class="form-control" value="<?php echo $pelanggan->long ;?>" type="text" name="long" placeholder="">
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
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="">
                <h3 class="panel-title"><?php echo $panel_title_2;?></h3>
              </div>
            </div>
            <div class="panel-body">
                <div class="col-md-12">
                  <?php echo $map['html'] ;?>
                </div>
            </div>
          </div>
      </div>
  </div>
</div>
