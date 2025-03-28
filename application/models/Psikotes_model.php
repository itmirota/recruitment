<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Psikotes_model extends CI_Model
{
    function getKategoriWithCountSubtest(){
        $this->db->select('*');
        $this->db->from('tbl_psikotes_kategori a');
        $this->db->join('tbl_psikotes_ujian b','a.id_kategoriPsikotes = b.kategoriPsikotes_id');
        $query = $this->db->get();

        return $query->result();
    }

    function getSoal(){
        $this->db->select('*, FROM_UNIXTIME(a.created_on) as created_on');
        $this->db->from('tbl_psikotes_soal a');
        $this->db->join('tbl_psikotes_ujian b','b.id_ujian = a.ujian_id');
        $this->db->order_by('created_on','DESC');
        $query = $this->db->get();

        return $query->result();
    }

    function getSoalWhere($where){
        $this->db->select('*, FROM_UNIXTIME(a.created_on) as created_on');
        $this->db->from('tbl_psikotes_soal a');
        $this->db->join('tbl_psikotes_ujian b','b.id_ujian = a.ujian_id');
        $this->db->where($where);
        // $this->db->limit($jumlah);
        $query = $this->db->get();

        return $query->result();
    }

    function getRowSoal($where){
        $this->db->select('*, FROM_UNIXTIME(a.created_on) as created_on');
        $this->db->from('tbl_psikotes_soal a');
        $this->db->join('tbl_psikotes_ujian b','b.id_ujian = a.ujian_id');
        $this->db->where($where);
        $query = $this->db->get();

        return $query->row();
    }

    function getUjian(){
        $this->db->select('*');
        $this->db->from('tbl_psikotes_ujian a');
        $this->db->join('tbl_psikotes_kategori b','b.id_kategoriPsikotes = a.kategoriPsikotes_id');
        $query = $this->db->get();

        return $query->result();
    }

    function getUjianWhere($where){
        $this->db->select('*');
        $this->db->from('tbl_psikotes_ujian a');
        $this->db->join('tbl_psikotes_kategori b','b.id_kategoriPsikotes = a.kategoriPsikotes_id');
        $this->db->where($where);
        $query = $this->db->get();

        return $query->result();
    }

    function getRowUjian($where){
        $this->db->select('*');
        $this->db->from('tbl_psikotes_ujian a');
        $this->db->join('tbl_psikotes_kategori b','b.id_kategoriPsikotes = a.kategoriPsikotes_id');
        $this->db->where($where);
        $query = $this->db->get();

        return $query->row();
    }

    function getHasilUjianWhere($where){
        $this->db->select('*, UNIX_TIMESTAMP(tgl_selesai) as waktu_habis');
        $this->db->from('tbl_psikotes_hasil a');
        $this->db->join('tbl_psikotes_ujian b','b.id_ujian = a.ujian_id');
        $this->db->join('tbl_kandidat c','c.id_kandidat = a.kandidat_id');
        $this->db->where($where);
        return $this->db->get();
    }

    public function ambilSoal($pc_urut_soal1, $pc_urut_soal_arr)
    {
    $this->db->select("*, {$pc_urut_soal1} AS jawaban");
    $this->db->from('tbl_psikotes_soal');
    $this->db->where('id_soalPsikotes', $pc_urut_soal_arr);
    return $this->db->get()->row();
    }

    public function getJawaban($id_tes)
    {
        $this->db->select('list_jawaban');
        $this->db->from('tbl_psikotes_hasil');
        $this->db->where('id', $id_tes);
        return $this->db->get()->row()->list_jawaban;
    }
}