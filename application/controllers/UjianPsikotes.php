<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class UjianPsikotes extends BaseController
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

  public function getUjianByKategori(){
    
  }

  public function list_ujianPsikotes(){
    $page =$this->uri->segment(1);

    $this->global['pageTitle'] = 'Mirota KSM | Ujian Psikotes';

    $data['list_data'] = $this->psikotes_model->getUjian();
    $data['page'] = $page;

      $this->loadViewsAdmin("psikotes/ujian/data", $this->global, $data, NULL);
  }

  public function data_psikotes(){
    $this->global['pageTitle'] = 'Mirota KSM | Ujian Psikotes';

    $data['list_data'] = $this->psikotes_model->getUjian();
    $data['kandidat_id'] = $this->kandidat_id;

    $this->loadViews("psikotes/halaman_awal", $this->global, $data, NULL);
  }

  public function save(){

    $nama_ujianPsikotes = $this->input->post('nama_ujianPsikotes');

    $data = array(
        'nama_ujianPsikotes' => $nama_ujianPsikotes,
    );

    $this->crud_model->input($data, 'tbl_psikotes_ujian');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="allert">Data Berhasil Ditambah!</div>');

    redirect('ujian-psikotes');
  }

  public function update(){
    $id_ujian = $this->input->post('id_ujian');
    $nama_ujianPsikotes = $this->input->post('nama_ujianPsikotes');

    $data = array(
        'nama_ujianPsikotes' => $nama_ujianPsikotes,
    );
    $where = array(
        'id_ujian' => $id_ujian
    );

    $this->crud_model->update($where, $data, 'tbl_psikotes_ujian');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah!');

    redirect('ujian-psikotes');
  }

  public function delete(){
      $id_ujian = $this->uri->segment(3);

      $where = array(
          'id_ujian' => $id_ujian
      );

      $sql = $this->crud_model->delete($where, 'tbl_psikotes_ujian');
      $this->session->set_flashdata('berhasil', 'Data Berhasil Dihapus!');
      redirect('ujian-psikotes');
  }

  public function detailujianPsikotes(){
  $this->global['pageTitle'] = 'Mirota KSM | Detail ujianPsikotes';

  $kategori = $this->input->get('test');
  $subtest = $this->input->get('subtest');

  $ujian = $this->psikotes_model->getUjianWhere(['id_ujian' => $subtest]);
  // $encrypted_id = $this->encryption->encrypt($id);
  $data['ujian'] = $ujian[0];
  // $data['encrypted_id'] = $encrypted_id;
  $data['id'] = $ujian[0]->id_ujian;
  $data['kategori'] = $ujian[0]->kategoriPsikotes_id;

  // $plain_text = 'This is a plain-text message!';
  // $ciphertext = $this->encryption->encrypt($plain_text);
  
  // Outputs: This is a plain-text message!
  // $back = $this->encryption->decrypt($encrypted_id);

  $this->loadViews("psikotes/ujian/detail_ujian", $this->global, $data, NULL);
  }

  public function ujian(){
    {
      // $key = $this->input->get('key', true);
      // $id  = $this->encryption->decrypt(rawurldecode($key));
      $test = $this->input->get('test');
      $id = $this->input->get('subtest');
      
      $ujian 		= $this->psikotes_model->getRowUjian(['id_ujian' => $id]);
      $soal 		= $this->psikotes_model->getSoalWhere(['ujian_id'=>$id]); 

      $kandidat_id		= $this->kandidat_id;
      $hasil_ujian 	= $this->psikotes_model->getHasilUjianWhere(['ujian_id' => $ujian->id_ujian, 'kandidat_id' => $kandidat_id]);

      $cek_sudah_ikut = $hasil_ujian->num_rows();
      
      if ($cek_sudah_ikut < 1) {
        $soal_urut_ok 	= array();
        $i = 0;
        foreach ($soal as $s) {
          $soal_per = new stdClass();
          $soal_per->id_soal 		= $s->id_soalPsikotes;
          $soal_per->soal 		= $s->soal;
          $soal_per->file 		= $s->file;
          $soal_per->tipe_file 	= $s->tipe_file;
          $soal_per->opsi_a 		= $s->opsi_a;
          $soal_per->opsi_b 		= $s->opsi_b;
          $soal_per->opsi_c 		= $s->opsi_c;
          $soal_per->opsi_d 		= $s->opsi_d;
          $soal_per->opsi_e 		= $s->opsi_e;
          $soal_per->jawaban 		= $s->jawaban;
          $soal_urut_ok[$i] 		= $soal_per;
          $i++;
        }
        
        $soal_urut_ok 	= $soal_urut_ok;
        $list_id_soal	= "";
        $list_jw_soal 	= "";
        if (!empty($soal)) {
          foreach ($soal as $d) {
            $list_id_soal .= $d->id_soalPsikotes.",";
            $list_jw_soal .= $d->id_soalPsikotes."::N,";
          }
        }
        $list_id_soal 	= substr($list_id_soal, 0, -1);
        $list_jw_soal 	= substr($list_jw_soal, 0, -1);
        $waktu_selesai 	= date('Y-m-d H:i:s', strtotime("+{$ujian->waktu} minute"));
        $time_mulai		= date('Y-m-d H:i:s');
  
        $input = [
          'ujian_id' 		=> $id,
          'kandidat_id'	=> $kandidat_id,
          'list_soal'		=> $list_id_soal,
          'list_jawaban' 	=> $list_jw_soal,
          'jml_benar'		=> 0,
          'nilai'			=> 0,
          'nilai_bobot'	=> 0,
          'tgl_mulai'		=> $time_mulai,
          'tgl_selesai'	=> $waktu_selesai,
          'status'		=> 'Y'
        ];
        $this->crud_model->input($input, 'tbl_psikotes_hasil');
  
        // Setelah insert wajib refresh dulu
        redirect('ujian?test='.$test.'&&subtest='.$id);
      }
      
      $q_soal = $hasil_ujian->row();
      
      $urut_soal 		= explode(",", $q_soal->list_jawaban);
      $soal_urut_ok	= array();
      for ($i = 0; $i < sizeof($urut_soal); $i++) {
        $pc_urut_soal	= explode(":",$urut_soal[$i]);
        $pc_urut_soal1 	= empty($pc_urut_soal[1]) ? "''" : "'{$pc_urut_soal[1]}'";
        $ambil_soal 	= $this->psikotes_model->ambilSoal($pc_urut_soal1, $pc_urut_soal[0]);
        $soal_urut_ok[] = $ambil_soal; 
      }
  
      $detail_tes = $q_soal;
      $soal_urut_ok = $soal_urut_ok;
  
      $pc_list_jawaban = explode(",", $detail_tes->list_jawaban);
      $arr_jawab = array();
      foreach ($pc_list_jawaban as $v) {
        $pc_v 	= explode(":", $v);
        $idx 	= $pc_v[0];
        $val 	= $pc_v[1];
        $rg 	= $pc_v[2];
  
        $arr_jawab[$idx] = array("j"=>$val,"r"=>$rg);
      }
  
      $arr_opsi = array("a","b","c","d","e");
      $html = '';
      $no = 1;
      if (!empty($soal_urut_ok)) {
        foreach ($soal_urut_ok as $s) {
          $path = 'assets/psikotes/soal/';
          $vrg = $arr_jawab[$s->id_soalPsikotes]["r"] == "" ? "N" : $arr_jawab[$s->id_soalPsikotes]["r"];
          $html .= '<input type="hidden" name="id_soal_'.$no.'" value="'.$s->id_soalPsikotes.'">';
          $html .= '<input type="hidden" name="rg_'.$no.'" id="rg_'.$no.'" value="'.$vrg.'">';
          $html .= '<div class="step" id="widget_'.$no.'">';
  
          $html .= '<div class="text-center"><div class="w-80">'.tampil_media($path.$s->file).'</div></div>'.$s->soal.'<div class="funkyradio">';
          for ($j = 0; $j < $s->jumlah_opsi; $j++) {
            $opsi 			= "opsi_".$arr_opsi[$j];
            $file 			= "file_".$arr_opsi[$j];
            $checked 		= $arr_jawab[$s->id_soalPsikotes]["j"] == strtoupper($arr_opsi[$j]) ? "checked" : "";
            $pilihan_opsi 	= !empty($s->$opsi)? $s->$opsi : "";
            $tampil_media_opsi = (is_file(base_url().$path.$s->$file) || $s->$file != "") ? tampil_media($path.$s->$file) : "";
            if($s->jumlah_opsi == 1){
            $html .= '<div class="card text-bg-secondary m-4">
                        <div class="card-body">
                          <div class="form-check funkyradio-success" onclick="return simpan_sementara();">
                            <input type="text" class="input-sm form-control" placeholder="tulis jawaban" name="opsi_'.$no.'">
                          </div>
                        </div>
                      </div>
                      ';
            }else{
            $html .= '<div class="card text-bg-secondary m-2">
                        <div class="card-body">
                          <div class="form-check funkyradio-success" onclick="return simpan_sementara();">
                            <input class="form-check-input" type="radio" id="opsi_'.strtolower($arr_opsi[$j]).'_'.$s->id_soalPsikotes.'" name="opsi_'.$no.'" value="'.strtoupper($arr_opsi[$j]).'" '.$checked.'> 
                            <label for="opsi_'.strtolower($arr_opsi[$j]).'_'.$s->id_soalPsikotes.'">
                              <div class="huruf_opsi">'.$arr_opsi[$j].'</div> 
                                <p>'.$pilihan_opsi.'</p>
                              <div class="w-25">'.$tampil_media_opsi.'</div>
                            </label>
                          </div>
                        </div>
                      </div>
                      ';
            }
          }

          $html .= '</div></div>';
          $no++;
        }
      }
  
      // Enkripsi Id Tes
      // $id_tes = $this->encryption->encrypt($detail_tes->id);
      $id_tes = $detail_tes->id;

      // var_dump('urutan ='.$ujian->urutan);
      $this->global['pageTitle'] = "Halaman Psikotes Online";
      $getUjian = $this->psikotes_model->getUjianWhere(['kategoriPsikotes_id'=>$ujian->id_kategoriPsikotes]);

      // var_dump(COUNT($getUjian));

      if(COUNT($getUjian) != $ujian->urutan){
        $nextUjian = $getUjian[$ujian->urutan]->id_ujian;
      }else{
        $test = $ujian->urutan_kategori + 1;

        $getUjian = $this->psikotes_model->getUjianWhere(['urutan_kategori'=>$test,'urutan'=>1]);
        var_dump($getUjian[0]);
        // $nextUjian = $getUjian[0]->id_ujian;
      }
  
      $data = [
        'soal'		=> $detail_tes,
        'test'  => $test,
        'nextUjian' => $nextUjian,
        'no' 		=> $no,
        'html' 		=> $html,
        'id_tes'	=> $id_tes
      ];

      $this->loadViews("psikotes/ujian/lembar_soal", $this->global, $data, NULL);
    }
  }


  public function simpan_satu()
	{
		// Decrypt Id
		$id_tes = $this->input->post('id', true);
		// $id_tes = $this->encryption->decrypt($id_tes);

    $jml_soal = $this->input->post('jml_soal');
		
		$input 	= $this->input->post(null, true);
		$list_jawaban 	= "";
		for ($i = 1; $i < $jml_soal; $i++) {
			$_tjawab 	= "opsi_".$i;
			$_tidsoal 	= "id_soal_".$i;
			$_ragu 		= "rg_".$i;
			$jawaban_ 	= empty($input[$_tjawab]) ? "" : $input[$_tjawab];
			$list_jawaban	.= "".$input[$_tidsoal].":".$jawaban_.":".$input[$_ragu].",";
		}
		$list_jawaban	= substr($list_jawaban, 0, -1);
		$d_simpan = [
			'list_jawaban' => $list_jawaban
		];
		
		// Simpan jawaban
		$this->crud_model->update(['id' => $id_tes], $d_simpan,'tbl_psikotes_hasil');
		$this->output->set_content_type('application/json')->set_output(json_encode(['status'=>TRUE, 'id'=> $id_tes]));
	}

	public function simpan_akhir()
	{
		// Decrypt Id
		$id_tes = $this->input->post('id', true);
		// $id_tes = $this->encryption->decrypt($id_tes);
		
		// Get Jawaban
		$list_jawaban = $this->psikotes_model->getJawaban($id_tes);

		// Pecah Jawaban
		$pc_jawaban = explode(",", $list_jawaban);
		
		$jumlah_benar 	= 0;
		$jumlah_salah 	= 0;
		$jumlah_ragu  	= 0;
		$nilai_bobot 	= 0;
		$total_bobot	= 0;
		$jumlah_soal	= sizeof($pc_jawaban);

		foreach ($pc_jawaban as $jwb) {
			$pc_dt 		= explode(":", $jwb);
			$id_soal 	= $pc_dt[0];
			$jawaban 	= $pc_dt[1];
			$ragu 		= $pc_dt[2];

			$cek_jwb 	= $this->crud_model->GetDataById(['id_soalPsikotes' => $id_soal],'tbl_psikotes_soal');
			$total_bobot = $total_bobot + $cek_jwb->bobot;

			$jawaban == $cek_jwb->jawaban ? $jumlah_benar++ : $jumlah_salah++;
		}

		$nilai = ($jumlah_benar / $jumlah_soal)  * 100;
		$nilai_bobot = ($total_bobot / $jumlah_soal)  * 100;

		$d_update = [
			'jml_benar'		=> $jumlah_benar,
			'nilai'			=> number_format(floor($nilai), 0),
			'nilai_bobot'	=> number_format(floor($nilai_bobot), 0),
			'status'		=> 'N'
		];

		$this->crud_model->update(['id' => $id_tes], $d_update, 'tbl_psikotes_hasil');
		$this->output->set_content_type('application/json')->set_output(json_encode(['status'=>TRUE, 'data'=>$d_update, 'id'=>$id_tes]));
	}

}