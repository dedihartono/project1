


<a class="btn btn-primary" href="<?php echo base_url();?>index.php/kelola_unit/tambah_lokasi_unit">Tambah</a>


<table class="table datatable">
  <tr>
    <th>No</th>
    <th>Kode Lokasi</th>
    <th>Lokasi</th>
    <th>Aksi</th>
  </tr>
  <?php
  $n = 1;
  foreach ($lokasi_unit as $row) { ?>
  <tr>
    <td><?php echo $n++;?></td>
    <td><?php echo $row->kode_lokasi;?></td>
    <td><?php echo $row->lokasi_unit;?></td>
    <td>
      <a href="<?php echo $row->kode_lokasi;?>">Edit</a>
      <a href="<?php echo base_url();?>index.php/kelola_unit/hapus/<?php echo $row->kode_lokasi;?>">Hapus</a>
    </td>
  </tr>
  <?php } ;?>
</table>

<form action="<?php echo base_url();?>index.php/kelola_unit/proses_tambah" method="post">
  <div class="form-group">
    <label>Kode Lokasi</label>
    <input class="form-control" type="text" name="kode_lokasi">
  </div>
  <div class="form-group">
    <label>Nama Lokasi</label>
    <input class="form-control" type="text" name="nama_lokasi">
  </div>
  <div class="form-group">
    <button type="submit">Simpan</button>
  </div>
</form>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classname extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {

  }

  public function tambah_lokasi_unit()
  {
    $data['konten'] = 'kelola_unit/v_tambah';
    $this->load->view('template_admin', $data);
  }

  public function proses_tambah()
  {
    $data = array(
      'kode_lokasi' => $this->input->post('kode_lokasi'),
      'lokasi_unit' => $this->input->post('nama_lokasi'),
    );

    $this->m_kelola_unit->tambah_data($data);
    redirect('kelola_unit');
  }

  //di buat di m_kelola_unit
  public function tambah_data($data)
  {
    $this->db->insert('tb_lokasi_unit', $data);
  }

  public function hapus($id)
  {
    $id = $this->uri->segment('3');
    $this->m_kelola_unit->hapus_data($id);
    redirect('kelola_unit');
  }

  //model
  public function hapus_data($id)
  {
    $this->db->where('kode_lokasi', $id);
    $this->db->delete('tb_lokasi_unit');
  }
}
