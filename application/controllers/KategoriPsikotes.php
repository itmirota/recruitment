<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class KategoriPsikotes extends BaseController
{
  /**
   * This is default constructor of the class
   */
  public function __construct()
  {
    parent::__construct();
    $this->load->model('crud_model');
    $this->load->model('psikotes_model');
    $this->load->library('form_validation');

    $this->isLoggedIn();
  }

  public function list_kategoriPsikotes(){
    $this->global['pageTitle'] = 'Mirota KSM | Kategori Tes';

    $data['list_data'] = $this->psikotes_model->getKategoriWithCountSubtest();

    $this->loadViewsAdmin("psikotes/kategori/data", $this->global, $data, NULL);
  }

  public function save(){

    $nama_kategoriPsikotes = $this->input->post('nama_kategoriPsikotes');
    $slug = str_replace(" ", "-", $nama_kategoriPsikotes);

    $data = array(
      'nama_kategoriPsikotes' => $nama_kategoriPsikotes,
      'slug' => strtolower($slug),
    );

    $this->crud_model->input($data, 'tbl_psikotes_kategori');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="allert">Data Berhasil Ditambah!</div>');

    redirect('kategori-psikotes');
    }

  public function detailKategoriPsikotes($id){
    $this->global['pageTitle'] = 'Mirota KSM | Detail kategoriPsikotes';
  
    $data = $this->crud_model->GetRowById(['id_kategoriPsikotes' => $id],'tbl_psikotes_kategori');
  
    echo json_encode($data);
    }
  
    public function update(){
      $id_kategoriPsikotes = $this->input->post('id_kategoriPsikotes');
      $nama_kategoriPsikotes = $this->input->post('nama_kategoriPsikotes');
      $slug = str_replace(" ", "-", $nama_kategoriPsikotes);
  
      $data = array(
        'nama_kategoriPsikotes' => $nama_kategoriPsikotes,
        'slug' => strtolower($slug),
      );

      $where = array(
        'id_kategoriPsikotes' => $id_kategoriPsikotes
      );
  
      $this->crud_model->update($where, $data, 'tbl_psikotes_kategori');
      $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah!');
  
      redirect('kategori-psikotes');
    }
  
    public function delete(){
      $id_kategoriPsikotes = $this->uri->segment(3);

      $where = array(
        'id_kategoriPsikotes' => $id_kategoriPsikotes
      );

      $sql = $this->crud_model->delete($where, 'tbl_psikotes_kategori');
      $this->session->set_flashdata('berhasil', 'Data Berhasil Dihapus!');
      redirect('kategori-psikotes');
    }
}