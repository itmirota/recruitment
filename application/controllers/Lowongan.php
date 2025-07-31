<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Lowongan extends BaseController
{
  /**
   * This is default constructor of the class
   */
  public function __construct()
  {
    parent::__construct();
    $this->load->model('crud_model');
    $this->load->library('form_validation');

    $this->isLoggedIn();
  }

  public function index(){
    
  }

  public function list_lowongan(){
    $this->global['pageTitle'] = 'Mirota KSM | List Lowongan';

    $data['list_data'] = $this->crud_model->tampildata('tbl_lowongan');

    $this->loadViewsAdmin("lowongan/list_data", $this->global, $data, NULL);
  }

  public function save(){

    $nama_lowongan = $this->input->post('nama_lowongan');
    $kategori = $this->input->post('kategori');
    $lokasi = $this->input->post('lokasi');
    $tgl_awal = $this->input->post('tgl_awal');
    $tgl_akhir = $this->input->post('tgl_akhir');
    $deskripsi = $this->input->post('deskripsi');

    $data = array(
        'nama_lowongan' => $nama_lowongan,
        'kategori' => $kategori,
        'wilayah' => $lokasi,
        'tgl_awal' => $tgl_awal,
        'tgl_akhir' => $tgl_akhir,
        'deskripsi' => $deskripsi,
    );

    $this->crud_model->input($data, 'tbl_lowongan');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="allert">Data Berhasil Ditambah!</div>');

    redirect('list-lowongan');
}

public function detaillowongan($id){
  $this->global['pageTitle'] = 'Mirota KSM | Detail Lowongan Kerja';

  $data = array(
<<<<<<< HEAD
    'list_data'   => $this->crud_model->GetRowById(['id_lowongan' => $id],'tbl_lowongan'),
=======
    'detail'   => $this->crud_model->GetRowById(['id_lowongan' => $id],'tbl_lowongan'),
    'id_lowongan' => $id,
>>>>>>> origin/cahya
  );

  $this->loadViewsAdmin("lowongan/edit_data", $this->global, $data , NULL);
  }

  public function update($id){
    $nama_lowongan = $this->input->post('nama_lowongan');
    $kategori = $this->input->post('kategori');
    $lokasi = $this->input->post('lokasi');
    $tgl_awal = $this->input->post('tgl_awal');
    $tgl_akhir = $this->input->post('tgl_akhir');
    $deskripsi = $this->input->post('deskripsi');

    $data = array(
      'nama_lowongan' => $nama_lowongan,
      'kategori' => $kategori,
      'wilayah' => $lokasi,
      'tgl_awal' => $tgl_awal,
      'tgl_akhir' => $tgl_akhir,
      'deskripsi' => $deskripsi,
    );

    $this->crud_model->update(['id_lowongan' => $id], $data, 'tbl_lowongan');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah!');

    redirect('list-lowongan');
  }

  public function delete(){
    $id_lowongan = $this->uri->segment(3);

    $where = array(
        'id_lowongan' => $id_lowongan
    );

    $sql = $this->crud_model->delete($where, 'tbl_lowonga');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Dihapus!');
    redirect('list-lowongan');
  }

  public function submit_lowongan(){
    $config['upload_path']          = './assets/document/';
    $config['allowed_types']        = 'gif|jpg|png|pdf';
    // $config['max_size']             = 100;
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;


    $id_lowongan = $this->input->post('id_lowongan');
    $id_kandidat = $this->kandidat_id;
    $alamat_domisili = $this->input->post('alamat_domisili');
    $nomor_hp = $this->input->post('nomor_hp');

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('file_lamaran'))
    {
      $lamaran = $this->upload->data();
    }


    if ($this->upload->do_upload('file_cv'))
    {
      $cv = $this->upload->data();
    }

    if ($this->upload->do_upload('file_ijazah'))
    {
      $ijazah = $this->upload->data();
    }
    
    if ($this->upload->do_upload('file_lampiran'))
    {
      $lampiran = $this->upload->data();
    }

    $data = array(
      'lowongan_id' => $id_lowongan,
      'kandidat_id' => $id_kandidat,
      'lamaran' => $lamaran['file_name'],
      'cv' => $cv['file_name'],
      'ijazah' => $ijazah['file_name'],
      'lampiran' => $lampiran['file_name'],
      'datecreated' => DATE('Y-m-d H:i:s')
    );

    $update = array(
      'alamat_domisili' => $alamat_domisili,
      'nomor_hp' => $nomor_hp,
    );

    $sql_input = $this->crud_model->input($data, 'tbl_pelamar');
    $sql_update = $this->crud_model->update(['id_kandidat' => $id_kandidat], $update, 'tbl_kandidat');

    redirect('halaman-pelamar');
  }

  public function updateStatus(){
    $kandidat = $this->input->get('kandidat');
    $status = $this->input->get('status');

    $this->crud_model->update(['kandidat_id'=>$kandidat],['status_pelamar'=>$status],'tbl_pelamar');
    redirect('list-pelamar');
  }

  public function updateProgres(){
    $id_kandidat = $this->input->post('id_kandidat');
    $id_lowongan = $this->input->post('id_lowongan');
    $keterangan = $this->input->post('keterangan');
    $tanggal = $this->input->post('tanggal');

    $data = array(
      'id_kandidat' => $id_kandidat,
      'id_lowongan' => $id_lowongan,
      'keterangan' => $keterangan,
      'tanggal' => $tanggal,
    );

    $this->crud_model->update(['kandidat_id'=>$id_kandidat],['keterangan'=>$keterangan, 'status_pelamar' => 0],'tbl_pelamar');
    $this->inputHistory($data);
    redirect('list-pelamar');
  }

  public function inputHistory($data){
    $data = array(
      'kandidat_id' => $data['id_kandidat'],
      'lowongan_id' => $data['id_lowongan'],
      'keterangan_progres' => $data['keterangan'],
      'tanggal_progres' => $data['tanggal'],
    );
    $query = $this->crud_model->input($data,'tbl_progres_pelamar');
  }
}