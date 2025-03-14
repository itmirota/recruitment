<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * @author : Tri Cahya Wibawa
 * @version : 1.0
 * @since : 11 Februari 2024
 */
class kandidat extends BaseController
{
  /**
   * This is default constructor of the class
   */
  public function __construct()
  {
    parent::__construct();
    // $this->load->model('pelamar_model');
    $this->load->model('crud_model');
    $this->load->library('form_validation');

    $nama_lengkap = $this->session->userdata ( 'nama_lengkap' );

		if(isset($nama_lengkap)){
		$this->isLoggedIn();
		}
  }

  public function data(){
    $id = $this->kandidat_id;

    $data['data_diri'] = $this->crud_model->GetDataById(['id_kandidat' => $id],'tbl_kandidat');
    $data['data_keluarga'] = $this->crud_model->GetDataByWhere(['kandidat_id' => $id],'tbl_kandidat_keluarga');
    $data['data_pendidikan'] = $this->crud_model->GetDataByWhere(['kandidat_id' => $id],'tbl_kandidat_pendidikan');
    $data['data_pengalaman'] = $this->crud_model->GetDataByWhere(['kandidat_id' => $id],'tbl_kandidat_pengalamankerja');
    $data['data_sertifikasi'] = $this->crud_model->GetDataByWhere(['kandidat_id' => $id],'tbl_kandidat_sertifikasi');

    return $data;
  }

  /**
   * Index Page for this controller.
   */
  public function index()
  {
    $this->global['pageTitle'] = 'Rekrutmen Mirota KSM';
    $this->loadViews("kandidat/form", $this->global, NULL, NULL);
  }

  public function save()
  {
    $this->form_validation->set_rules('nama_kandidat', 'Nama', 'required',  
    array('required' => '%s tidak boleh kosong.')
    );
    
    $this->form_validation->set_rules('username', 'Username', 'required',
    array('required' => '%s tidak boleh kosong.')
    );
    $this->form_validation->set_rules('password', 'Password', 'required', 
    array('required' => '%s tidak boleh kosong.')
    );
    $this->form_validation->set_rules('email', 'Email', 'required', array('required' => '%s tidak boleh kosong.')
    );
    $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]',
    array('required' => '%s tidak sesuai.')
    );

    if ($this->form_validation->run() == FALSE)
    {
        $this->index();
    }
    else
    {
        $nama= $this->input->post('nama_kandidat');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $checkid = $this->crud_model->ShowData('MAX(id_kandidat) AS id', 'tbl_kandidat');
        $id = $checkid[0]->id +1;
    
        $data = array(
            'nama_kandidat' => $nama,
            'email' => $email
        );
        $user = array(
            'username' => $username,
            'pelamar_id' => $id,
            'password' => getHashedPassword($password)
        );
    
        $sql = $this->crud_model->input($data,'tbl_kandidat');
        $sql = $this->crud_model->input($user, 'tbl_users');
        redirect('kandidat');
    }
    
  }

  public function update_datadiri()
  {
    $id_kandidat = $this->kandidat_id;
    $nama = $this->input->post('nama_kandidat');
    $nama_panggilan = $this->input->post('nama_panggilan');
    $gender = $this->input->post('jenis_kelamin');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $tgl_lahir = $this->input->post('tgl_lahir');
    $agama = $this->input->post('agama');
    $email = $this->input->post('email');
    $golongan_darah = $this->input->post('golongan_darah');
    $tinggi_berat_badan = $this->input->post('tinggi_berat_badan');
    $alamat = $this->input->post('alamat_domisili');
    $alamat_KTP = $this->input->post('alamat_ktp');
    $NIK = $this->input->post('nomor_ktp');
    $SIM = $this->input->post('nomor_sim');
    $nomor_hp = $this->input->post('nomor_hp');
    $kontak_darurat = $this->input->post('kontak_darurat');
    $info_lowongan = $this->input->post('info_lowongan');
    $status_pernikahan = $this->input->post('status_pernikahan');
    $nama_pasangan = $this->input->post('nama_pasangan');
    $pekerjaan_pasangan = $this->input->post('pekerjaan_pasangan');
    $nomor_pasangan = $this->input->post('nomor_pasangan');
    $anak = $this->input->post('nama_anak');


    $data = array(
      //Data Diri
        'nama_kandidat' => $nama,
        'nama_panggilan' => $nama_panggilan,
        'jenis_kelamin' => $gender,
        'tempat_lahir' => $tempat_lahir,
        'tgl_lahir' => $tgl_lahir,
        'agama' => $agama,
        'email' => $email,
        'golongan_darah' => $golongan_darah,
        'tinggi_berat_badan' => $tinggi_berat_badan,
        'alamat_domisili' => $alamat,
        'alamat_ktp' => $alamat_KTP,
        'nomor_ktp' => $NIK,
        'nomor_sim' => $SIM,
        'nomor_hp' => $nomor_hp,
        'kontak_darurat' => $kontak_darurat,
        'info_lowongan' => $info_lowongan,
        'status_pernikahan' => $status_pernikahan,
        'data_pasangan' => $nama_pasangan.','.$pekerjaan_pasangan.','.$nomor_pasangan,
        'data_anak' => $anak
    );
    
    $where = array(
        'id_kandidat' => $id_kandidat
    );

    $this->crud_model->update($where, $data, 'tbl_kandidat');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah!');

    redirect('Biodata');
  }
 
  public function save_keluarga()
  {
    

    //Data keluarga
    $id_kandidat = $this->kandidat_id;
    $nama_keluarga = $this->input->post('nama_keluarga');
    $hubungan_keluarga = $this->input->post('hubungan_keluarga');
    $no_hp = $this->input->post('no_hp');


    $data = array(
        //Data Keluarga
        'kandidat_id' => $id_kandidat,
        'nama_keluarga' => $nama_keluarga,
        'hubungan_keluarga' => $hubungan_keluarga,
        'no_hp' => $no_hp,
    );

    $this->crud_model->input($data, 'tbl_kandidat_keluarga');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah!');
    $this->session->set_userdata('page', 'Data-keluarga');

    $data_kandidat = $this->data();
    $this->loadViews("kandidat/biodata", $this->global, $data_kandidat, NULL);
  }

  public function save_pendidikan()
  {
    //Data pendidikan
    $id_kandidat = $this->kandidat_id;
    $jenjang_pendidikan = $this->input->post('jenjang_pendidikan');
    $jurusan = $this->input->post('jurusan');
    $tahun_masuk = $this->input->post('tahun_masuk');
    $tahun_lulus = $this->input->post('tahun_lulus');

    $data = array(
        //Data pendidikan
        'kandidat_id' => $id_kandidat,
        'jenjang_pendidikan' => $jenjang_pendidikan,
        'jurusan' => $jurusan,
        'tahun_masuk' => $tahun_masuk,
        'tahun_lulus' => $tahun_lulus,
      );
      
    $this->crud_model->input($data, 'tbl_kandidat_pendidikan');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah!');
    $this->session->set_userdata('page', 'riwayat-pendidikan');
  
    $data_kandidat = $this->data();
    $this->loadViews("kandidat/biodata", $this->global, $data_kandidat, NULL);
    }


    public function save_sertifikasi()
    {
    $id_kandidat = $this->kandidat_id;
    $judul = $this->input->post('judul_sertifikasi');
    $lembaga = $this->input->post("lembaga_sertifikasi");
    $tanggal = $this->input->post('tanggal_sertifikasi');
    $biaya = $this->input->post('biaya_sertifikasi');


    $data = array(
      //Data Sertifikasi
      'kandidat_id' => $id_kandidat,
      'judul_sertifikasi' => $judul,
      'lembaga_sertifikasi' => $lembaga,
      'tanggal_sertifikasi' => $tanggal,
      'biaya_sertifikasi' => $biaya
    );

    $this->crud_model->input($data, 'tbl_kandidat_sertifikasi');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah!');

    $data_kandidat = $this->data();
    $this->loadViews("kandidat/biodata", $this->global, $data_kandidat, NULL);
  }

  public function save_pengalaman()
  {
    $id_kandidat = $this->kandidat_id;
    $perusahaan = $this->input->post('nama_perusahaan');
    $jenis = $this->input->post("jenis_kariyawan");
    $jabatan = $this->input->post('jabatan_pengalaman');
    $masa_kerja = $this->input->post('masa_kerja');
    $referensi = $this->input->post('nomor_referensi');


    $data = array(
      //Data pengalman kerja
      'kandidat_id' => $id_kandidat,
      'nama_perusahaan' => $perusahaan,
      'jenis_kariyawan' => $jenis,
      'jabatan_pengalaman' => $jabatan,
      'masa_kerja' => $masa_kerja,
      'nomor_referensi' => $referensi
    );

    $this->crud_model->input($data, 'tbl_kandidat_pengalamankerja');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah!');

    $data_kandidat = $this->data();
    $this->loadViews("kandidat/biodata", $this->global, $data_kandidat, NULL);
  }

  public function save_medsos()
  {
    $id_kandidat = $this->kandidat_id;
    $instagram = $this->input->post('instagram');
    $facebook = $this->input->post('facebook');
    $twitter = $this->input->post('twitter');
    $tiktok = $this->input->post('tiktok');


    $data = array(
        //Data medsos
        'instagram' => $instagram,
        'facebook' => $facebook,
        'twitter' => $twitter,
        'tiktok' => $tiktok
      
    );
    $where = array(
      'id_kandidat' => $id_kandidat
    );
    $this->crud_model->update($where, $data, 'tbl_kandidat');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah!');

    $data_kandidat = $this->data();
    $this->loadViews("kandidat/biodata", $this->global, $data_kandidat, NULL);
  }

  public function save_keterangan()
  {
    $id_kandidat = $this->kandidat_id;
    $hobi = $this->input->post('kegemaran_hobi');
    $soal1 = $this->input->post('soal1');
    $soal2_ya = $this->input->post('soal2_ya');
    $soal2_tidak = $this->input->post('soal2_tidak');
    $soal3 = $this->input->post('soal3');
    $soal4_ya = $this->input->post('soal4_ya');
    $soal4_tidak = $this->input->post('soal4_tidak');
    $soal5 = $this->input->post('soal5');
    $soal6_ya = $this->input->post('soal6_ya');
    $soal6_tidak = $this->input->post('soal6_tidak');
    $soal7_ya = $this->input->post('soal7_ya');
    $soal7_tidak = $this->input->post('soal7_tidak');
    $soal8_ya = $this->input->post('soal8_ya');
    $soal8_tidak = $this->input->post('soal8_tidak');
    $soal9_ya = $this->input->post('soal9_ya');
    $soal9_tidak = $this->input->post('soal9_tidak');
    $soal10 = $this->input->post('soal10');
    $soal11 = $this->input->post('soal11');
    $soal12 = $this->input->post('soal12');
    $soal13 = $this->input->post('soal13');
    $pernyataan = $this->input->post('pernyataan');


    $data = array(

    //Data keterangan lain
      'kegemaran_bobi' => $hobi,
      'soal1' => $soal1,
      'soal2_ya' => $soal2_ya,
      'soal2_tidak' => $soal2_tidak,
      'soal3' => $soal3,
      'soal4_ya' => $soal4_ya,
      'soal4_tidak' => $soal4_tidak,
      'soal5' => $soal5,
      'soal6_ya' => $soal6_ya,
      'soal6_tidak' => $soal6_tidak,
      'soal7_ya' => $soal7_ya,
      'soal7_tidak' => $soal7_tidak,
      'soal8_ya' => $soal8_ya,
      'soal8_tidak' => $soal8_tidak,
      'soal9_ya' => $soal9_ya,
      'soal9_tidak' => $soal9_tidak,
      'soal10' => $soal10,
      'soal11' => $soal11,
      'soal12' => $soal12,
      'soal13' => $soal13,
      'pernyataan' => $pernyataan
    );

    $where = array(
      'id_kandidat' => $id_kandidat
    );

    $this->crud_model->update($where, $data, 'tbl_kandidat');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah!');

    $data_kandidat = $this->data();
    $this->loadViews("kandidat/biodata", $this->global, $data_kandidat, NULL);
  }

  public function save_document_pendukung()
  {
    $config['upload_path']          = './assets/document/';
    $config['allowed_types']        = 'gif|jpg|png|pdf';
    // $config['max_size']             = 100;
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('identitas'))
    {
      $identitas = $this->upload->data();
    }

    if ($this->upload->do_upload('cv'))
    {
      $cv = $this->upload->data();
    }

    if ($this->upload->do_upload('ijazah'))
    {
      $ijazah = $this->upload->data();
    }
    
    if ($this->upload->do_upload('doc_pendukung'))
    {
      $doc_pendukung = $this->upload->data();
    }


    $data = array(
        //Document pendukung
        'kandidat_id' => $this->kandidat_id,
        'identitas' => $identitas['file_name'],
        'cv' => $cv['file_name'],
        'ijazah' => $ijazah['file_name'],
        'doc_pendukung' => $doc_pendukung['file_name']
      
    );

    $this->crud_model->input($data, 'tbl_kandidat_berkas');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah!');

    $data_kandidat = $this->data();
    $this->loadViews("kandidat/biodata", $this->global, $data_kandidat, NULL);
  }

  public function biodata()
  {
    $data = $this->data();

    $this->global['pageTitle'] = 'Rekrutmen Mirota KSM';
    $id = $this->kandidat_id;
    $this->session->set_userdata('page', 'Data-diri');
    
    $this->loadViews("kandidat/biodata", $this->global, $data, NULL);
  }
  
}