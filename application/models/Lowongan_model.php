<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Lowongan_model extends CI_Model
{

  function GetdataLowongan(){
    $this->db->select('*, DATEDIFF(tgl_akhir,NOW()) as selisih');
    $this->db->from('tbl_lowongan');
    $this->db->where('DATEDIFF(tgl_akhir,NOW()) >= 0');
    $query = $this->db->get();

    return $query->result();
  }


}