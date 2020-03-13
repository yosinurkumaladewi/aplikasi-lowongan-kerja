<?php 
 /**
  * 
  */
 class kontrol extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('mdl');
 		$this->load->model('mdl_petugas');
 		$this->load->model('mdl_perusahaan');
 	}
 	function index()
 	{
 		$this->load->view('login');

 		//$this->load->view('index');
 	}
 //	function awal()
 	//{
 	//	$data['user'] = $this->mdl->awal()->result();
 	//	$this->load->view('muncul',$data);
 	 //	}

 	 function register()
 	 {
 	 	$data['user'] = $this->mdl->reg()->result();
 	 	$this->load->view('register',$data);
 	 	
 	 }

 	 function login()
 	 {
 	 	$this->load->view('login');
 	 }
 	 function reg()
 	 {
 	 	$id=$this->input->post('id_user');
 	 	$username=$this->input->post('username');
 	 	$email=$this->input->post('email');
 	 	$password=md5($this->input->post('password'));
 	 	$validasi_password=md5($this->input->post('confirm_password'));
 	 	$level=$this->input->post('level');

 	 	if ($password == $validasi_password) {
 	 		$data_user = array('id_user' =>$id ,'username'=>$username, 'level' => $level,'email'=>$email,'password'=>$password,'password'=>$password);
	 	 	//echo $id,$username,$email,$password;
	 	 	$this->mdl->register($data_user);
	 	 	
	 	 	$this->send_email($konfirmasi,$email);
	 	 	redirect(base_url('index.php/kontrol/'));
 	 	}else{
 	 		$this->session->set_flashdata(array(
						'pesan' => 'password salah',
						'type' => 'danger'
					));
					redirect(base_url('index.php/kontrol/register'));
 	 		
 	 	}

 	 }
 	 public function send_email()
 	 {
 	 	$config=[
 			'mailtype'=>'html',
 			'charset'=>'utf-8',
 			'protocol'=>'smtp',
 			'smtp-host'=>'smtp.gmail.com',
 			'smtp-user'=>'yosinurkumala2003@gmail.com',
 			'smtp-pass'=>'2003yosinurkumala',
 		
 			'smtp-crypto'=>'ssl',
 			'smtp-port'=>465,
 			'crlf'=>"\r\n",
 			'newline'=>"\r\n"
 
 		];
 		$this->load->library('email',$config);
 		$this->email->set_newline("\r\n");
 		$this->email->from('yosinurkumala2003@gmail.com','Yosi');
 		$this->email->to('ningmell8367@gmail.com');
 		$this->email->subject('silakan coba login');
 		$this->email->message('karepmu');

 		$tes=$this->email->send();
 		if($tes){
 			echo "success";
 		}else{
 			echo("gagal");
 		}

 	 }
 	 public function edit()
 	 {
 	 	$id_user = $this->uri->segment(3);
 	 	$username = $this->input->post('username');
 	 	$level = $this->input->post('level');
 	 	$password = $this->input->post('password');
 	 	$email = $this->input->post('email');

 	 	$data = array(
 	 		'username' => $username,
 	 		'level'=>$level,
 	 		'password'=>$password,
 	 		'email' =>$email
 	 	);

 	 	$where = array('id_user' => $id_user);
 	 	$this->mdl_petugas->edit_data($data,$where);
 	 	$this->session->set_flashdata('pesan','berhasil di edit');
 	 	redirect(base_url('index.php/kontrol/data'));


 	 }
 	 public function hapus()
 	 {
 	 	$id =$this->uri->segment(3);
 	 	$where = array('id_user'=>$id);
 	 	$this->mdl_petugas->hapus_data('user',$where);
 	 	$this->session->set_flashdata('pesan','berhasil di hapus');
 	 	redirect(base_url('index.php/kontrol/data'));
 	 }
 	 public function data()
 	 {
 	 	$data['user']=$this->mdl->awal()->result();
 	 	$this->load->view('muncul',$data);
 	 }

 }


 ?>