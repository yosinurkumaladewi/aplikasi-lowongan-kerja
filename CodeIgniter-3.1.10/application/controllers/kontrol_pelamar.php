<?php  
/**
  * 
  */
 class kontrol_pelamar extends CI_controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('mdl_pelamar');
 	}
 	public function edit()
 	{

 	 	$id_pelamar= $this->uri->segment(3);
 	 	$nama = $this->input->post('nama');
 	 	$alamat = $this->input->post('alamat');
 	 	$jenis_kelamin = $this->input->post('jenis_kelamin');
 	 	$no_ktp = $this->input->post('no_ktp');
 	 	$scan_ktp =$this->input->post('scan_ktp');
 	 	$skck = $this->input->post('skck');
 	 	$pasfoto = $this->input->post('pasfoto');
 	 	$ijasah = $this->input->post('ijasah');
 	 	$kartu_keluarga= $this->input->post('kartu_keluarga');
 	 	$id_user= $this->input->post('id_user');
 	 	$email = $this->input->post('email');

 	 	$data = array(
 	 		'nama' => $nama,
 	 		'alamat'=>$alamat,
 	 		'jenis_kelamin'=>$jenis_kelamin,
 	 		'no_ktp' =>$no_ktp,
 	 		'scan_ktp' =>$scan_ktp,
 	 		'skck' =>$skck,
 	 		'pasfoto' =>$pasfoto,
 	 		'ijasah' =>$ijasah,
 	 		'kartu_keluarga' =>$kartu_keluarga,
 	 		'id_user'=>$id_user,
 	 		'email' =>$email

 	 	);

 	 	$where = array('id_pelamar' => $id_pelamar);
 	 	$this->mdl_pelamar->edit_pelamar($data,$where);
 	 	$this->session->set_flashdata('pesan','berhasil di edit');
 	 	redirect(base_url('index.php/kontrol_pelamar/data'));
 
 	}
 	 public function data()
 	 {
 	 	$data['data_pelamar']=$this->mdl_pelamar->awal()->result();
 	 	$this->load->view('data_pelamar',$data);
 	 }
 	 	 public function hapus()
 	 {
 	 	$id =$this->uri->segment(3);
 	 	$where = array('id_pelamar'=>$id);
 	 	$this->mdl_pelamar->hapus_pelamar('data_pelamar',$where);
 	 	$this->session->set_flashdata('pesan','berhasil di hapus');
 	 	redirect(base_url('index.php/kontrol_pelamar/data'));
 	 }
 } ?>