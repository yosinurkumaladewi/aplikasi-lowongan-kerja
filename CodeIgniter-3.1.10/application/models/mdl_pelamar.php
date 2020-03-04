<?php 
/**
 * 
 */
class mdl_pelamar extends CI_model
{
   public function edit_pelamar($data,$where)
  {
    $this->db->update('data_pelamar',$data,$where);
  }
  public function hapus_pelamar($tabel,$where)
  {
    $this->db->delete($tabel,$where);
  }
  public function detail_pelamar()
  {
    return $this->db->get('data_pelamar');
  }
    public function awal()
  {
    return $this->db->get('data_pelamar');
  }
}
 ?>
