<!--script google map-->
<!--script google map-->
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_xaf_P_yJXPStiZdw41IP_4oB3JvkzBw&callback=initialize">
</script>
<script type="text/javascript">

var map;
var markers = [];

function initialize() {
		var mapOptions = {
		zoom: 14,
		// Center di kantor kabupaten kudus
		center: new google.maps.LatLng(-6.4814031, 107.7957904)
		};

		map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		// Add a listener for the click event
		google.maps.event.addListener(map, 'rightclick', addLatLng);
		google.maps.event.addListener(map, "rightclick", function(event) {
			var lat = event.latLng.lat();
			var lng = event.latLng.lng();
			$('#lat').val(lat);
			$('#long').val(lng);
			//alert(lat +" dan "+lng);
		});
}

/**
 * Handles click events on a map, and adds a new point to the marker.
 * @param {google.maps.MouseEvent} event
 */
function addLatLng(event) {
		var marker = new google.maps.Marker({
		position: event.latLng,
		map: map
		});
		markers.push(marker);
}

function clearmap() {
		$('#lat').val('');
		$('#long').val('');
}




</script>

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
              <form class="form-horizontal" role="form" action="<?php echo base_url();?>kelola_pelanggan/edit_koordinat_proses/<?php echo $this->uri->segment(3) ;?>" method="post">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="col-md-4">
                      <label class="control-label">Latitude</label>
                        <input class="form-control" id="lat" type="text" value="<?php echo $pelanggan->lat ;?>" name="lat" placeholder="">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="col-md-4">
                      <label class="control-label">Longitude</label>
                        <input class="form-control" id="long" value="<?php echo $pelanggan->long ;?>" type="text" name="long" placeholder="">
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
									<div class="col-md-6 pull-right" >
										<a href="<?php echo base_url();?>kelola_pelanggan/reset_koordinat/<?php echo $this->uri->segment(3) ;?>">
											<button class="btn btn-default" onclick="clearmap()" type="button">Reset</button>
										</a>
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
										<div class="panel-body" style="height:300px;" id="map-canvas"></div>
                </div>
            </div>
          </div>
      </div>
  </div>
</div>
