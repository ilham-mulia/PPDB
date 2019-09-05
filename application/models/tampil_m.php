<?php
class Tampil_m extends CI_Model{

  function data_tampil(){
    return $this->db->get('config'); //ambil database
  }
  function cari($key){
  $this->db->like('nik', $key);
  $this->db->or_like('nisn', $key);
    $query = $this->db->get('daftar');
    return $query->result();
  }

}
