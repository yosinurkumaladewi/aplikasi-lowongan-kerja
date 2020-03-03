<?php 

 class mdl_petugas extends CI_Model
 {
 	 public function edit_data($data,$where)
  {
    $this->db->update('user',$data,$where);
  }
  public function hapus_data($tabel,$where)
  {
    $this->db->delete($tabel,$where);
  }
  public function detail()
  {
    return $this->db->get('user');
  }
 // public function d_user()
  //{
  	//return $this->db->get('user');
 // }
 } ?>