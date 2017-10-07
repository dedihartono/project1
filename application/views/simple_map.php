<!--script google map-->
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_xaf_P_yJXPStiZdw41IP_4oB3JvkzBw&callback=initMap">
</script>

<script type="text/javascript">

$(document).on('click','#clearmap',clearmap)
.on('click','#simpandaftarkoordinatjembatan',simpandaftarkoordinatjembatan)
.on('click','#hapusmarkerjembatan',hapusmarkerjembatan)
.on('click','#viewmarkerjembatan',viewmarkerjembatan);
    var map;
    var markers = [];

    function initialize() {
        var mapOptions = {
        zoom: 14,
        // Center di kantor kabupaten kudus
        center: new google.maps.LatLng(-6.806428778495534, 110.84213197231293)
        };

        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        // Add a listener for the click event
        google.maps.event.addListener(map, 'rightclick', addLatLng);
        google.maps.event.addListener(map, "rightclick", function(event) {
          var lat = event.latLng.lat();
          var lng = event.latLng.lng();
          $('#latitude').val(lat);
          $('#longitude').val(lng);
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
        title: 'Simple GIS',
        map: map
        });
        markers.push(marker);
    }
    //membersihkan peta dari marker
    function clearmap(e){
        e.preventDefault();
        $('#latitude').val('');
        $('#longitude').val('');
        setMapOnAll(null);
    }
    //buat hapus marker
    function setMapOnAll(map) {
      for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
      }
      markers = [];
    }
    //end buat hapus marker

    function simpandaftarkoordinatjembatan(e){
        e.preventDefault();
        var datakoordinat = {'id_jembatan':$('#id_jembatan').val(),'latitude':$('#latitude').val(),'longitude':$('#longitude').val()};
        console.log(datakoordinat);
        $.ajax({
            url : '<?php echo site_url("admin/simpandaftarkoordinatjembatan") ?>',
            dataType : 'json',
            data : datakoordinat,
            type : 'POST',
            success : function(data,status){
                if (data.status!='error') {
                    $('#daftarkoordinatjembatan').load('<?php echo current_url()."/ #daftarkoordinatjembatan > *" ?>');
                    alert(data.msg);
                    clearmap(e);
                }else{
                    alert(data.msg);
                }
            }
        })
    }
    function hapusmarkerjembatan(e){
        e.preventDefault();
        var datakoordinat = {'id_jembatan':$(this).data('iddatajembatan')};
        $.ajax({
            url : '<?php echo site_url("admin/hapusmarkerjembatan") ?>',
            data : datakoordinat,
            dataType : 'json',
            type : 'POST',
            success : function(data,status){
                if (data.status!='error') {
                    alert(data.msg);
                    $('#daftarkoordinatjembatan').load('<?php echo current_url()."/ #daftarkoordinatjembatan > *" ?>');
                    clearmap(e);
                }else{
                    alert(data.msg);
                }
            }
        })
    }
    function viewmarkerjembatan(e){
        e.preventDefault();
        var datakoordinat = {'id_jembatan':$(this).data('iddatajembatan')};
        $.ajax({
            url : '<?php echo site_url("admin/viewmarkerjembatan") ?>',
            data : datakoordinat,
            dataType : 'json',
            type : 'POST',
            success : function(data,status){
                if (data.status!='error') {
                    clearmap(e);
                    //load marker
                    $.each(data.msg,function(m,n){
                        var myLatLng = {lat: parseFloat(n["latitude"]), lng: parseFloat(n["longitude"])};
                        console.log(m,n);
                        $.each(data.datajembatan,function(k,v){
                            addMarker(v['namajembatan'],myLatLng);
                        })
                        return false;
                    })
                    //end load marker
                }else{
                    alert(data.msg);
                }
            }
        })
    }
    // Menampilkan marker lokasi jembatan
    function addMarker(nama,location) {
        var marker = new google.maps.Marker({
            position: location,
            map: map,
            title : nama
        });
        markers.push(marker);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!--end script google map-->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-8">
            <div class="panel panel-primary">
                <div class="panel-heading"><span class="glyphicon glyphicon-globe"></span> Peta</div>
                <div class="panel-body" style="height:300px;" id="map-canvas">
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><span class="glyphicon glyphicon-list"></span> Daftar Koordinat</div>
                <div class="panel-body" style="min-height:300px;">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="latitude">Latitude</label>
                                    <input type="text" class="form-control" name="latitude" id="latitude">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="longitude">Longitude</label>
                                    <input type="text" class="form-control" name="longitude" id="longitude">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-sm" id="simpandaftarkoordinatjembatan"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                            <button class="btn btn-info btn-sm" id="clearmap"><span class="glyphicon glyphicon-globe"></span> ClearMap</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
