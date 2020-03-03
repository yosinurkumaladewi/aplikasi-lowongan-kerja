<?php 
/**
 * 
 */
class mdl_perusahaan extends CI_model
{
	
  public function edit_perusahaan($data,$where)
  {
    $this->db->update('data_perusahaan',$data,$where);
  }
  public function hapus_perusahaan($tabel,$where)
  {
    $this->db->delete($tabel,$where);
  }
  public function detail_perusahaan()
  {
    return $this->db->get('data_perusahaan');
  }
    public function awal()
  {
    return $this->db->get('data_perusahaan');
  }
}
 ?>