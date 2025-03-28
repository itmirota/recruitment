<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class SoalPsikotes extends BaseController
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

  public function list_soalPsikotes(){
    $this->global['pageTitle'] = 'Mirota KSM | List Soal';

    $data['list_data'] = $this->psikotes_model->getSoal();
    $data['kategori'] = $this->crud_model->tampildata('tbl_psikotes_kategori');

    $this->loadViewsAdmin("psikotes/soal/data", $this->global, $data, NULL);
  }

  public function file_config()
  {
      $allowed_type     = [
          "image/jpeg", "image/jpg", "image/png", "image/gif",
          "audio/mpeg", "audio/mpg", "audio/mpeg3", "audio/mp3", "audio/x-wav", "audio/wave", "audio/wav",
          "video/mp4", "application/octet-stream"
      ];

      $config['upload_path']      = FCPATH . 'uploads/bank_soal/';
      $config['allowed_types']    = 'jpeg|jpg|png|gif|mpeg|mpg|mpeg3|mp3|wav|wave|mp4';
      $config['encrypt_name']     = TRUE;

      return $this->load->library('upload', $config);
  }

  public function save(){
    $this->file_config();

    $data = array(
        'soal' => $this->input->post('soal'),
        'jawaban'   => $this->input->post('jawaban'),
        'bobot'     => $this->input->post('bobot'),
        'jumlah_opsi'     => $this->input->post('jumlah_opsi'),
    );

    $abjad = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];

    // Inputan Opsi
    foreach ($abjad as $abj) {
      $data['opsi_' . $abj]    = $this->input->post('jawaban_' . $abj, true);
    }

    $i = 0;
    foreach ($_FILES as $key => $val) {
      $img_src = FCPATH . 'assets/psikotes/soal/';
      $error = '';
      if ($key === 'file_soal') {
        if (!empty($_FILES['file_soal']['name'])) {
          if (!$this->upload->do_upload('file_soal')) {
            $error = $this->upload->display_errors();
            show_error($error, 500, 'File Soal Error');
            exit();
          } else {
            $data['file'] = $this->upload->data('file_name');
            $data['tipe_file'] = $this->upload->data('file_type');
          }
        }
      } else {
        $file_abj = 'file_' . $abjad[$i];
        if (!empty($_FILES[$file_abj]['name'])) {
          if (!$this->upload->do_upload($file_abj)) {
            $error = $this->upload->display_errors();
            show_error($error, 500, 'File Opsi ' . strtoupper($abjad[$i]) . ' Error');
            exit();
          } else {
            $data[$file_abj] = $this->upload->data('file_name');
          }
        }
        $i++;
      }
    }

    $data['kategoriPsikotes_id'] = $this->input->post('kategoriPsikotes_id', true);

    $this->crud_model->input($data, 'tbl_psikotes_soal');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="allert">Data Berhasil Ditambah!</div>');

    redirect('soal-psikotes');
    }

  public function detailSoalPsikotes($id){
    $this->global['pageTitle'] = 'Mirota KSM | Detail soalPsikotes';
  
    $data = $this->psikotes_model->getRowSoal(['id_soalPsikotes' => $id]);
  
    echo json_encode($data);
    }
  
    public function update(){
      $id_soalPsikotes = $this->input->post('id_soalPsikotes');
      $nama_soalPsikotes = $this->input->post('nama_soalPsikotes');

      $data = array(
          'nama_soalPsikotes' => $nama_soalPsikotes,
      );
      $where = array(
          'id_soalPsikotes' => $id_soalPsikotes
      );
  
      $this->crud_model->update($where, $data, 'tbl_psikotes_soal');
      $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah!');
  
      redirect('soal-psikotes');
    }
  
    public function delete(){
        $id_soalPsikotes = $this->uri->segment(3);
  
        $where = array(
            'id_soalPsikotes' => $id_soalPsikotes
        );
  
        $sql = $this->crud_model->delete($where, 'tbl_psikotes_soal');
        $this->session->set_flashdata('berhasil', 'Data Berhasil Dihapus!');
        redirect('soal-psikotes');
    }
}