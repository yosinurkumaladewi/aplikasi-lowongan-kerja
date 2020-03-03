<?php 
/**
  * 
  */
 class kontrol_perusahaan extends CI_controller
 {
 	
 	public function edit_perusahaan()
 	{

 	 	$id_perusahaan= $this->uri->segment(3);
 	 	$nama = $this->input->post('nama');
 	 	$alamat = $this->input->post('alamat');
 	 	$jenis_lowongan = $this->input->post('jenis_lowongan');
 	 	$no_hp = $this->input->post('no_hp');
 	 	$tgl_lahir =$this->input->post('tgl_lahir');
 	 	$email = $this->input->post('email');
 	 	$profil = $this->input->post('profil');
 	 	$id_user = $this->input->post('id_user');

 	 	$data = array(
 	 		'nama' => $nama,
 	 		'alamat'=>$alamat,
 	 		'jenis_lowongan'=>$jenis_lowongan,
 	 		'no_hp' =>$no_hp,
 	 		'tgl_lahir' =>$tgl_lahir,
 	 		'email' =>$email,
 	 		'profil' =>$profil,
 	 		'id_user'=>$id_user
 	 	);

 	 	$where = array('id_perusahaan' => $id_perusahaan);
 	 	$this->mdl_perusahaan->edit_perusahaan($data,$where);
 	 	$this->session->set_flashdata('pesan','berhasil di edit');
 	 	redirect(base_url('index.php/kontrol_perusahaan/data_perusahaan'));
 
 	}
 	 public function data_perusahaan()
 	 {
 	 	$data['data_perusahaan']=$this->mdl_perusahaan->awal()->result();
 	 	$this->load->view('data_perusahaan',$data);
 	 }
 	 	 public function hapus()
 	 {
 	 	$id =$this->uri->segment(3);
 	 	$where = array('id_perusahaan'=>$id);
 	 	$this->mdl_perusahaan->hapus_perusahaan('data_perusahaan',$where);
 	 	$this->session->set_flashdata('pesan','berhasil di hapus');
 	 	redirect(base_url('index.php/kontrol_perusahaan/data_perusahaan'));
 	 }

 } ?>