<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Faq extends BaseController
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

  public function list_faq(){
    $this->global['pageTitle'] = 'Mirota KSM | List FAQ';

    $data['list_data'] = $this->crud_model->tampildata('tbl_faq');

    $this->loadViewsAdmin("faq/list_data", $this->global, $data, NULL);
  }

  public function save(){

    $pertanyaan = $this->input->post('pertanyaan');
    $jawaban = $this->input->post('jawaban');

    $data = array(
        'pertanyaan' => $pertanyaan,
        'jawaban' => $jawaban,
    );

    $this->crud_model->input($data, 'tbl_faq');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="allert">Data Berhasil Ditambah!</div>');

    redirect('list-faq');
}

  public function detailfaq($id){
    $this->global['pageTitle'] = 'Mirota KSM | Detail FAQ';

    $data['detail_faq'] = $this->crud_model->GetRowById(['id_faq' => $id],'tbl_faq');

    $this->loadViewsAdmin("faq/form_edit", $this->global, $data, NULL);    
  }

  public function update($id){
    $pertanyaan = $this->input->post('pertanyaan');
    $jawaban = $this->input->post('jawaban');

    $data = array(
        'pertanyaan' => $pertanyaan,
        'jawaban' => $jawaban,
    );

    $this->crud_model->update(['id_faq' => $id], $data, 'tbl_faq');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah!');

    redirect('list-faq');
  }

  public function delete(){
      $id_faq = $this->uri->segment(3);

      $where = array(
          'id_faq' => $id_faq
      );

      $sql = $this->crud_model->delete($where, 'tbl_faq');
      $this->session->set_flashdata('berhasil', 'Data Berhasil Dihapus!');
      redirect('list-faq');
  }
}