<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class Landingpage extends BaseController {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('crud_model');
		$nama_lengkap = $this->session->userdata ( 'nama_lengkap' );

		if(isset($nama_lengkap)){
		$this->isLoggedIn();
		}
    }

    public function index()
	{
		 
		$this->global['pageTitle'] = 'Mirota KSM | Recruitment';

		$this->loadViews("landingpage", $this->global, NULL, NULL);

	}

	public function lowongan(){
		$this->global['pageTitle'] = 'Mirota KSM | Lowongan';

		$data['list_data'] = $this->crud_model->tampildata('tbl_lowongan');

		$this->loadViews("lowongan", $this->global, $data, NULL);
	}

	public function detail_lowongan(){
		$id_lowongan = $this->uri->segment(2);
		$kandidat = $this->kandidat_id;

		$this->global['pageTitle'] = 'Mirota KSM | Lowongan';
		$data['detail']  = $this->crud_model->GetRowById(['id_lowongan' => $id_lowongan],'tbl_lowongan');
		$data['kandidat']  = $this->crud_model->GetRowById(['id_kandidat' => $kandidat],'tbl_kandidat');

		$this->loadViews("lowongan/detail_lowongan", $this->global, $data, NULL);
	}

	public function pertanyaan_umum(){
		
		$this->global['pageTitle'] = 'Mirota KSM | FAQ';
		$data['list_data'] = $this->crud_model->tampildata('tbl_faq');

		$this->loadViews("pertanyaan_umum", $this->global, $data, NULL);
	}
}