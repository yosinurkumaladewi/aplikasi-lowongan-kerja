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
 	}
 	function index()
 	{
 		$this->load->view('login');

 		//$this->load->view('index');
 	}
 	function awal()
 	{
 		$this->load->view('muncul');
 	 	}

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
 	 	//$level=$this->input->post('level');



 	 	$data_user = array('id_user' =>$id ,'username'=>$username,'email'=>$email,'password'=>$password	);
 	 	//echo $id,$username,$email,$password;
 	 	$this->mdl->register($data_user);
 	 	
 	 	$this->send_email($konfirmasi,$email);
 	 	redirect(base_url('index.php/kontrol/'));


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

 }


 ?>