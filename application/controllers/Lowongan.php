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

public function detaillowongan(){
  $this->global['pageTitle'] = 'Mirota KSM | Detail Lowongan Kerja';

  $data = array(
      'list_data'   => $this->crud_model->GetRowById(['id_lowongan' => $id_lowongan],'tbl_lowongan'),
      'id_lowongan' => $this->uri->segment(3)
    );

  $this->loadViewsAdmin("lowongan/edit_data", $this->global, $data , NULL);
  }

  public function update(){
      $id_lowongan = $this->input->post('id_lowongan');
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
      
      $where = array(
          'id_lowongan' => $id_lowongan
      );

      $this->crud_model->update($where, $data, 'tbl_lowongan');
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
}