<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
require 'vendor/autoload.php';

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
    $this->load->model('pelamar_model');
    $this->load->library('form_validation');

    $nama_lengkap = $this->session->userdata ( 'nama_lengkap' );

		if(isset($nama_lengkap)){
		$this->isLoggedIn();
		}
  }

  /**
   * Index Page for this controller.
   */
  public function index()
  {
    $this->global['pageTitle'] = 'Rekrutmen Mirota KSM';
    $this->loadViews("kandidat/form", $this->global, NULL, NULL);
  }

  public function biodata()
  {
    $page = $this->input->get('p');
    $id = $this->kandidat_id;

    $data['page'] = isset($page) ? $page : 'Data-diri';
    $data['data_diri'] = $this->crud_model->GetDataById(['id_kandidat' => $id],'tbl_kandidat');
    $data['data_keluarga'] = $this->crud_model->GetDataByWhere(['kandidat_id' => $id],'tbl_kandidat_keluarga');
    $data['data_pendidikan'] = $this->crud_model->GetDataByWhere(['kandidat_id' => $id],'tbl_kandidat_pendidikan');
    $data['data_pengalaman'] = $this->crud_model->GetDataByWhere(['kandidat_id' => $id],'tbl_kandidat_pengalamankerja');
    $data['data_sertifikasi'] = $this->crud_model->GetDataByWhere(['kandidat_id' => $id],'tbl_kandidat_sertifikasi');

    $this->global['pageTitle'] = 'Rekrutmen Mirota KSM';
    $id = $this->kandidat_id;
    // $this->session->set_userdata('page', 'Data-diri');
    
    $this->loadViews("kandidat/biodata", $this->global, $data, NULL);
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
        $id = $checkid->id +1;

        $checkUserid = $this->crud_model->ShowData('MAX(userId) AS userId', 'tbl_users');
        $userId = $checkUserid->userId +1;
    
        $data = array(
            'id_kandidat' => $id,
            'nama_kandidat' => $nama,
            'email' => $email
        );

        $user = array(
            'userId' => $userId,
            'nama_lengkap' => $nama,
            'username' => $username,
            'kandidat_id' => $id,
            'email' => $email,
            'roleId' => 2,
            'password' => getHashedPassword($password),
            'createdBy' => $userId,
            'createdDtm' => DATE('Y-m-d H:i:s')   
        );
    
        $sql = $this->crud_model->input($data,'tbl_kandidat');
        $sql = $this->crud_model->input($user, 'tbl_users');

        $this->set_notifikasi_swal('success','Selamat! Akun anda berhasil dibuat');
        redirect(base_url());
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

  // Data Keluarga

  public function getDataKeluarga($id){
    $data_keluarga = $this->crud_model->GetDataById('id_keluarga='.$id,'tbl_kandidat_keluarga');
    echo json_encode($data_keluarga);
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
    // $this->session->set_userdata('page', 'Data-keluarga');

    // $this->loadViews("kandidat/biodata", $this->global, $data_kandidat, NULL);
    redirect('Biodata?p=Data-keluarga');
    
  }


  public function update_keluarga()
  {
    //Data keluarga
    $id_keluarga = $this->input->post('id_keluarga');
    $nama_keluarga = $this->input->post('nama_keluarga');
    $hubungan_keluarga = $this->input->post('hubungan_keluarga');
    $no_hp = $this->input->post('no_hp');


    $data = array(
        //Data Keluarga
        'nama_keluarga' => $nama_keluarga,
        'hubungan_keluarga' => $hubungan_keluarga,
        'no_hp' => $no_hp,
    );

    $this->crud_model->update(['id_keluarga' => $id_keluarga], $data, 'tbl_kandidat_keluarga');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah!');
    redirect('Biodata?p=Data-keluarga');
    
  }

  public function delete_keluarga($id)
  {      
    $this->crud_model->delete(['id_keluarga' => $id], 'tbl_kandidat_keluarga');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Dihapus');
    redirect('Biodata?p=Data-keluarga');
  }
  

  public function getDataPendidikan($id){
    $data_pendidikan = $this->crud_model->GetDataById('id_pendidikan='.$id,'tbl_kandidat_pendidikan');
    echo json_encode($data_pendidikan);
  }

  public function save_pendidikan()
  {
    //Data pendidikan
    $id_kandidat = $this->kandidat_id;
    $jenjang_pendidikan = $this->input->post('jenjang_pendidikan');
    $nama_instansi = $this->input->post('nama_instansi');
    $jurusan = $this->input->post('jurusan');
    $tahun_masuk = $this->input->post('tahun_masuk');
    $tahun_lulus = $this->input->post('tahun_lulus');

    $data = array(
        //Data pendidikan
        'kandidat_id' => $id_kandidat,
        'jenjang_pendidikan' => $jenjang_pendidikan,
        'nama_instansi' => $nama_instansi,
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

  public function update_pendidikan()
  {
    //Data pendidikan
    $id_pendidikan = $this->input->post('id_pendidikan');
    $jenjang_pendidikan = $this->input->post('jenjang_pendidikan');
    $nama_instansi = $this->input->post('nama_instansi');
    $jurusan = $this->input->post('jurusan');
    $tahun_masuk = $this->input->post('tahun_masuk');
    $tahun_lulus = $this->input->post('tahun_lulus');

    $data = array(
      'jenjang_pendidikan' => $jenjang_pendidikan,
      'nama_instansi' => $nama_instansi,
      'jurusan' => $jurusan,
      'tahun_masuk' => $tahun_masuk,
      'tahun_lulus' => $tahun_lulus,
    );
      
    $this->crud_model->update(['id_pendidikan' => $id_pendidikan], $data, 'tbl_kandidat_pendidikan');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah!');
    redirect('Biodata?p=riwayat-pendidikan');
  }

  public function delete_pendidikan($id)
  {      
    $this->crud_model->delete(['id_pendidikan' => $id], 'tbl_kandidat_pendidikan');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Dihapus');
    redirect('Biodata?p=riwayat-pendidikan');
  }

  public function getDataSertifikasi($id){
    $data_sertifikasi = $this->crud_model->GetDataById('id_sertifikasi='.$id,'tbl_kandidat_sertifikasi');
    echo json_encode($data_sertifikasi);
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
    $this->session->set_userdata('page', 'sertifikat');

    $data_kandidat = $this->data();
    $this->loadViews("kandidat/biodata", $this->global, $data_kandidat, NULL);
  }

  public function update_sertifikasi()
  {
    $id_sertifikasi = $this->input->post('id_sertifikasi');
    $judul = $this->input->post('judul_sertifikasi');
    $lembaga = $this->input->post("lembaga_sertifikasi");
    $tanggal = $this->input->post('tanggal_sertifikasi');
    $biaya = $this->input->post('biaya_sertifikasi');


    $data = array(
      'judul_sertifikasi' => $judul,
      'lembaga_sertifikasi' => $lembaga,
      'tanggal_sertifikasi' => $tanggal,
      'biaya_sertifikasi' => $biaya
    );

    $this->crud_model->update(['id_sertifikasi' => $id_sertifikasi], $data, 'tbl_kandidat_sertifikasi');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah!');
    redirect('Biodata?p=sertifikat');
  }

  public function delete_sertifikat($id)
  {      
    $this->crud_model->delete(['id_sertifikasi' => $id], 'tbl_kandidat_sertifikasi');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Dihapus');
    redirect('Biodata?p=sertifikat');
  }

  public function getDataPengalaman($id){
    $data_pengalaman = $this->crud_model->GetDataById('id_pengalaman='.$id,'tbl_kandidat_pengalamankerja');
    echo json_encode($data_pengalaman);
  }

  public function save_pengalaman()
  {
    $id_kandidat = $this->kandidat_id;
    $perusahaan = $this->input->post('nama_perusahaan');
    $divisi_pengalaman = $this->input->post("divisi_pengalaman");
    $jabatan = $this->input->post('jabatan_pengalaman');
    $tgl_masuk = $this->input->post('tgl_masuk');
    $tgl_keluar = $this->input->post('tgl_keluar');
    $referensi = $this->input->post('nomor_referensi');


    $data = array(
      //Data pengalaman kerja
      'kandidat_id' => $id_kandidat,
      'nama_perusahaan' => $perusahaan,
      'divisi_bagian' => $divisi_pengalaman,
      'jabatan' => $jabatan,
      'tgl_masuk' => $tgl_masuk,
      'tgl_keluar' => $tgl_keluar,
      'nomor_referensi' => $referensi
    );

    $this->crud_model->input($data, 'tbl_kandidat_pengalamankerja');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah!');

    redirect('Biodata?p=pengalaman-kerja');
  }

  public function update_pengalaman()
  {
    $id_pengalaman = $this->input->post('id_pengalaman');
    $perusahaan = $this->input->post('nama_perusahaan');
    $divisi_pengalaman = $this->input->post("divisi_pengalaman");
    $jabatan = $this->input->post('jabatan_pengalaman');
    $tgl_masuk = $this->input->post('tgl_masuk');
    $tgl_keluar = $this->input->post('tgl_keluar');
    $referensi = $this->input->post('nomor_referensi');
    $status = $this->input->post('status');

    $data = array(
      'nama_perusahaan' => $perusahaan,
      'divisi_bagian' => $divisi_pengalaman,
      'jabatan' => $jabatan,
      'tgl_masuk' => $tgl_masuk,
      'tgl_keluar' => $tgl_keluar,
      'nomor_referensi' => $referensi,
      'status' => $status
    );

    $this->crud_model->update(['id_pengalaman' => $id_pengalaman], $data, 'tbl_kandidat_pengalamankerja');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah!');
    redirect('Biodata?p=pengalaman-kerja');
  }

  public function delete_pengalaman($id)
  {      
    $this->crud_model->delete(['id_pengalaman' => $id], 'tbl_kandidat_pengalamankerja');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Dihapus');
    redirect('Biodata?p=pengalaman-kerja');
  }

  public function update_medsos()
  {
    $id_kandidat = $this->kandidat_id;
    $instagram = $this->input->post('instagram');
    $facebook = $this->input->post('facebook');
    $linkedin = $this->input->post('linkedin');
    $tiktok = $this->input->post('tiktok');

    $data = array(
      //Data medsos
      'instagram' => $instagram,
      'facebook' => $facebook,
      'linkedin' => $linkedin,
      'tiktok' => $tiktok
    );

    $where = array(
      'id_kandidat' => $id_kandidat
    );

    $this->crud_model->update($where, $data, 'tbl_kandidat');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah!');
    redirect('Biodata?p=medsos');
  }
  
  public function update_keterangan()
  {
    $id_kandidat = $this->kandidat_id;
    $hobi = $this->input->post('kegemaran_hobi');
    $sakit_ringan = $this->input->post('sakit_ringan');
    $riwayat_penyakit = $this->input->post('riwayat_penyakit');
    $sakit_keras = $this->input->post('sakit_keras');
    $riwayat_penyakit_keras = $this->input->post('riwayat_penyakit_keras');
    $kecelakaan = $this->input->post('kecelakaan');
    $dampak_kecelakaan = $this->input->post('dampak_kecelakaan');
    $merokok = $this->input->post('merokok');
    $alkoholik = $this->input->post('alkoholik');
    $bekerja_shift = $this->input->post('bekerja_shift');
    $luar_kota = $this->input->post('luar_kota');
    $alasan = $this->input->post('alasan');
    $tgl_bergabung = $this->input->post('tgl_bergabung');
    $gaji_terakhir = $this->input->post('gaji_terakhir');
    $gaji_diharapkan = $this->input->post('gaji_diharapkan');
    $pernyataan = $this->input->post('pernyataan');


    $data = array(
      'hobi' => $hobi,
      'sakit_ringan' => $sakit_ringan,
      'riwayat_penyakit' => $riwayat_penyakit,
      'sakit_keras' => $sakit_keras,
      'riwayat_penyakit_keras' => $riwayat_penyakit_keras,
      'kecelakaan' => $kecelakaan,
      'dampak_kecelakaan' => $dampak_kecelakaan,
      'merokok' => $merokok,
      'alkoholik' => $alkoholik,
      'bekerja_shift' => $bekerja_shift,
      'luar_kota' => $luar_kota,
      'alasan' => $alasan,
      'tgl_bergabung' => $tgl_bergabung,
      'gaji_terakhir' => $gaji_terakhir,
      'gaji_diharapkan' => $gaji_diharapkan,
      'pernyataan' => $pernyataan
    );

    $where = array(
      'id_kandidat' => $id_kandidat
    );

    $this->crud_model->update($where, $data, 'tbl_kandidat');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah!');
    redirect('Biodata?p=lain-lain');
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
      'kandidat_id' => $this->kandidat_id,
      'identitas' => $identitas['file_name'],
      'cv' => $cv['file_name'],
      'ijazah' => $ijazah['file_name'],
      'doc_pendukung' => $doc_pendukung['file_name']
    );

    $this->crud_model->input($data, 'tbl_kandidat_berkas');
    $this->session->set_flashdata('berhasil', 'Data Berhasil Diubah!');

    redirect('Biodata?p=dokumen-pendukung');
  }

  public function list_pelamar(){
    $this->global['pageTitle'] = "Detail Hasil Psikotes Online";

    $data['list_data'] = $this->pelamar_model->GetData();

    $this->loadViewsAdmin("pelamar/data", $this->global, $data, NULL);
  }

  public function detail_pelamar($id){
    $this->global['pageTitle'] = "Detail Hasil Psikotes Online";

    $data = array(
      'detail' => $this->pelamar_model->GetDataByWhere('id_pelamar='.$id),
      'data_keluarga' => $this->crud_model->GetDataById('id_keluarga='.$id,'tbl_kandidat_keluarga'),

    );

    $this->loadViewsAdmin("pelamar/data", $this->global, $data, NULL);
  }

  function getDataPelamar($id){
    $pelamar = $this->crud_model->GetDataById('id_pelamar='.$id,'tbl_pelamar');
    echo json_encode($pelamar);
  }

  function detail_kandidat($id){
      
    $data = array(
      'data' => $this->pelamar_model->GetDataById(['id_pelamar' => $id],'tbl_pelamar'),
      'list_keluarga' => $this->crud_model->GetDataByWhere(['kandidat_id' => $id],'tbl_kandidat_keluarga'),
      'list_pendidikan' => $this->crud_model->GetDataByWhere(['kandidat_id' => $id],'tbl_kandidat_pendidikan'),
      'list_pengalaman' => $this->crud_model->GetDataByWhere(['kandidat_id' => $id],'tbl_kandidat_pengalamankerja'),
      'list_sertifikasi' => $this->crud_model->GetDataByWhere(['kandidat_id' => $id],'tbl_kandidat_sertifikasi')      
    );

    $this->loadViewsAdmin("pelamar/detail", $this->global, $data, NULL);
  }
}