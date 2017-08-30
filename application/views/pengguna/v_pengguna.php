<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
          <!-- START DEFAULT DATATABLE -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Default</h3>
              <ul class="panel-controls">
                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
              </ul>
            </div>
            <?php var_dump($pengguna);?>
            <div class="panel-body">
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Username</th>
                    <th>Hak Akses</th>
                    <th width="20%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>
                    <a class="btn btn-danger" href="#"><span><i class="fa fa-trash-o"></i></span> HAPUS</a>
                    <a class="btn btn-success" href="#"><span><i class="fa fa-pencil"></i></span> EDIT</a>
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
